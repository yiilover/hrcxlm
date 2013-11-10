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

$array = explode(',',$ids);
foreach($array  AS $key=>$value){
	$array[$key] = intval($value);
}
if(count($array)<1){
	showerr('URL数据有误!');
}
$totalemoney=0;
$title = '';
$query = $db->query("SELECT A.title,A.uid,B.totalmoney,B.ifpay,B.cid,B.rmb,B.id FROM `{$_pre}join` B LEFT JOIN `{$_pre}content` A ON A.id=B.cid WHERE B.id IN (".implode(',',$array).")");
while($rs = $db->fetch_array($query)){
	if($rs[ifpay]){
		continue;
	}
	if($rs['rmb'] && $lfjdb['rmb']>=$rs['rmb']){
		$rmb=$rs['rmb'];
	}else{
		$rmb=0;
		//以下清0是针对用户中途增加余额,防止多次扣款,不过这种情况极少发生
		$db->query("UPDATE {$_pre}join SET banktype='',rmb='0' WHERE id='$rs[id]'");
	}
	$totalemoney += $rs['totalmoney']-$rmb;	//除去$rs['rmb']余额支付部分.
	$title .="$rs[title],";
}

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
	global $db,$_pre,$webdb,$banktype,$pay_code,$lfjuid,$lfjdb;

	if(!$pay_code){
		showerr("数据有误!!!");
	}
	
	list($atc_moeny,$ids)=explode("\t",mymd5($pay_code,'DE'));

	$array = explode(',',$ids);
	foreach($array AS $value){
		$value = intval($value);
		$rs = $db->get_one("SELECT * FROM `{$_pre}join` WHERE id='$value'");
		if($rs[ifpay]==1){
			continue;
		}
		$db->query("UPDATE {$_pre}join SET ifpay='1',banktype='$banktype' WHERE id=$value");
		
		$d = explode(',',$rs['products']);
		foreach($d AS $v){
			list($pid,$pnum)=explode('=',$v);
			shop_storage_change($pid,$pnum);	//货存量的调整
			shop_give_money($pid,$lfjuid);	//买商品赠送积分
		}

		//$rmb = $rs[totalmoney]-$rs[rmb];
		//add_rmb($rs[uid],-$rmb,0,"购买商品:{$rs[title]}...");
		add_rmb($rs[cuid],$rs[totalmoney],0,"销售商品:{$rs[title]}...");
		if($rs[rmb]){
			if($lfjdb[rmb]>=$rs[rmb]){
				add_rmb($lfjuid,-$rs[rmb],0,"购买商品余额支付:{$rs[title]}...");
			}else{	//防止客户中途把余额消费光的情况
				add_rmb($lfjuid,$rs[totalmoney]-$rs[rmb],0,"购买商品失败,返款:{$rs[title]}...");
				$db->query("UPDATE {$_pre}join SET ifpay='0',banktype='$banktype' WHERE id=$value");
			}
		}
	}
	refreshto("./","恭喜你订单付款成功!",60);
}

?>