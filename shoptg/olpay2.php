<?php
require("global.php");

//当前程序是站长代商家收贷款,而买家直接付款给商家的程序是olpay.php
if(!$lfjuid){
	showerr('请先登录!');
}elseif(!$webdb['daili_receive']){
	showerr('系统未启用帮商家代收货款!');
}


if($pay_code){	//POST与API返回时
	$pay_code = str_replace('QIBO','=',$pay_code);	//这个符号“=”容易出问题
	list(,$ids)=explode("\t",mymd5($pay_code,'DE'));
}


$infodb = $db->get_one("SELECT B.*,A.title FROM `{$_pre}join` B LEFT JOIN `{$_pre}content` A ON A.id=B.cid WHERE B.id = '$ids' ");

if(!$infodb){
	showerr("数据有误!!!");
}elseif($infodb[ifpay]){
	showerr('该订单已经支付过了!');
}

if($infodb['rmb'] && $lfjdb['rmb']>=$infodb['rmb']){
	$rmb=$infodb['rmb'];
}else{
	$rmb=0;
	//以下清0是针对用户中途增加余额,防止多次扣款,不过这种情况极少发生
	$db->query("UPDATE {$_pre}join SET banktype='',rmb='0' WHERE id='$ids'");
}
$totalemoney = $infodb['totalmoney']-$rmb;	//除去$infodb['rmb']余额支付部分.
$title = $infodb['title'];


if($totalemoney<=0){
	showerr('款项总计为0,无法在线支付!');
}

if(!$webdb[yeepay_id]&&!$webdb[tenpay_id]&&!$webdb[alipay_id]&&!$webdb[pay99_id]&&!$webdb[chinabank_id]){
	showerr("在线支付失败,管理员没有设置网银帐号!");
}

if(in_array($banktype,array('alipay','tenpay','chinabank','yeepay','paypal'))){	//POST与API返回时
	include(ROOT_PATH."inc/olpay/{$banktype}.php");
	exit;
}



$pay_code = mymd5("$totalemoney\t$ids");

//以下两项主要是模板那里要用到
$infodb = array('totalmoney'=>$totalemoney);
$array = array(
		'yeepay_id'=>$webdb['yeepay_id'],
		'tenpay_id'=>$webdb['tenpay_id'],
		'alipay_id'=>$webdb['alipay_id'],
		'paypal_id'=>$webdb['paypal_id'],
		'chinabank_id'=>$webdb['chinabank_id']);

require(ROOT_PATH."inc/head.php");
require(getTpl("olpay"));
require(ROOT_PATH."inc/foot.php");


function olpay_send(){
	global $webdb,$banktype,$timestamp,$lfjuid,$lfjid,$pay_code,$Murl,$title;

	if(!$pay_code){
		showerr("数据有误!");
	}
	list($atc_moeny,$ids)=explode("\t",mymd5($pay_code,'DE'));
	
	if($atc_moeny<0.01){
		showerr("总额不能小于1分钱!");
	}
	
	$numcode=rand(1,10000);
	while(strlen($numcode)<10){
		$numcode="0$numcode";
	}

	$array[money]=$atc_moeny;
	$pay_code = str_replace('=','QIBO',$pay_code);	//这个符号“=”容易出问题
	$array[return_url]="$Murl/olpay2.php?banktype=$banktype&pay_code=$pay_code&";
	$array[title]="购买商品:".get_word($title,30);
	$array[content]="购买商品:$title";
	$array[numcode]=$numcode;
	return $array;
}

function olpay_end($numcode){
	global $db,$_pre,$webdb,$banktype,$lfjuid,$lfjdb,$ids,$infodb;

	$ifpay = 1;		

	if($infodb[rmb] && $lfjdb[rmb]<$infodb[rmb]){	//防止客户中途把余额消费光的情况

		$ifpay = 0;
		add_rmb($lfjuid,$infodb[totalmoney]-$infodb[rmb],0,"购买商品失败,返款:{$infodb[title]}...");
		$db->query("UPDATE {$_pre}join SET ifpay='0',banktype='$banktype' WHERE id='$ids'");

	}else{

		if($infodb[ifquit]){	//针对可退款的情况,不使用余额支付时,$infodb[rmb]为0
			add_rmb($lfjuid,-$infodb[rmb],$infodb[totalmoney],"冻结款 购买:$infodb[title]");
		}else{
			add_rmb($infodb[cuid],$infodb[totalmoney],0,"销售:$infodb[title]");
			if($infodb[rmb]){	//使用余额支付部分贷款时
				add_rmb($lfjuid,-$infodb[rmb],0,"购买:$infodb[title]");
			}
		}
	}
	
	$db->query("UPDATE {$_pre}join SET ifpay='$ifpay',banktype='$banktype' WHERE id='$ids'");

	count_join($infodb[cid]);	//统计报名人数
 

	//付款后,短信或邮件通知买家消费密码
	paymoney_send_msg($lfjuid,$infodb);
	
	//付款后,短信或邮件通知商家
	paymoney_send_seller_msg($infodb[cuid],$infodb);
 
	refreshto("./","恭喜你订单付款成功!",60);
}

?>