<?php
require("global.php");

if($pay_code){	//POST与API返回时
	$pay_code = str_replace('QIBO','=',$pay_code);	//这个符号“=”容易出问题
	list(,$id)=explode("\t",mymd5($pay_code,'DE'));
}

//获取订单信息

$infodb = $db->get_one("SELECT A.title,A.uid,B.totalmoney,B.ifpay,B.cid,B.rmb FROM `{$_pre}join` B LEFT JOIN `{$_pre}content` A ON A.id=B.cid WHERE B.id='$id'");

if(!$infodb){
	showerr('订单不存在!');
}elseif($infodb[ifpay]){
	showerr('此订单已经支付过了!');
}

if($webdb['daili_receive']){	//管理员代收货款
	$array = $webdb;
	if(!$banktype && $webdb['rmb_pay'] && !$from_rmbpay && !$infodb[rmb] && $lfjdb[rmb]>0){	//余额付款
		echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=rmb_pay.php?ids=$id&to_url=olpay'>";
		exit;
	}
}else{
	$rs = $db->get_one("SELECT * FROM `{$pre}purse` WHERE uid='$infodb[uid]'");
	$array = unserialize($rs[config]);
}




if(!$array[yeepay_id]&&!$array[tenpay_id]&&!$array[alipay_id]&&!$array[pay99_id]&&!$array[chinabank_id]){
	refreshto("./","在线支付失败,网银帐号不存在!",10);
}

//易宝支付
$webdb[yeepay_id] = $array[yeepay_id];
$webdb[yeepay_key] = $array[yeepay_key];

//财付通
$webdb[tenpay_id] = $array[tenpay_id];
$webdb[tenpay_key] = $array[tenpay_key];

//网银在线
$webdb[chinabank_id] = $array[chinabank_id];
$webdb[chinabank_key] = $array[chinabank_key];

//贝宝
$webdb[paypal_id] = $array[paypal_id];
$webdb[paypal_key] = $array[paypal_key];
$webdb[paypal_type] = $array[paypal_type];

//支付宝
$webdb[alipay_id] = $array[alipay_id];
$webdb[alipay_key] = $array[alipay_key];
$webdb[alipay_partner] = $array[alipay_partner];
$webdb[alipay_service] = $array[alipay_service];
$webdb[alipay_transport] = $array[alipay_transport];

 

if(in_array($banktype,array('alipay','tenpay','chinabank','yeepay','paypal'))){	//POST与API返回时
	include(ROOT_PATH."inc/olpay/{$banktype}.php");
	exit;
}

$infodb[totalmoney] = $infodb[totalmoney] - $infodb['rmb'];	//除去$infodb['rmb']余额支付部分.
$pay_code = mymd5("$infodb[totalmoney]\t$id");



require(ROOT_PATH."inc/head.php");
require(getTpl("olpay"));
require(ROOT_PATH."inc/foot.php");


function olpay_send(){
	global $webdb,$banktype,$infodb,$timestamp,$lfjuid,$lfjid,$pay_code,$Murl;

	if(!$pay_code){
		showerr("数据有误!");
	}
	list($atc_moeny,$id)=explode("\t",mymd5($pay_code,'DE'));
	
	if($atc_moeny<0.01){
		showerr("总额不能小于1分钱!");
	}
	
	$numcode=$id;
	while(strlen($numcode)<10){
		$numcode="0$numcode";
	}

	$array[money]=$atc_moeny;
	$pay_code = str_replace('=','QIBO',$pay_code);	//这个符号“=”容易出问题
	$array[return_url]="$Murl/olpay.php?banktype=$banktype&pay_code=$pay_code&";
	$array[title]="购买商品:$infodb[title] ...";
	$array[content]="购买商品:$infodb[title] ...";
	$array[numcode]=$numcode;
	return $array;
}

function olpay_end($numcode){
	global $db,$_pre,$webdb,$banktype,$pay_code,$lfjuid,$infodb;

	if(!$pay_code){
		showerr("数据有误!!");
	}
	
	list($atc_moeny,$id)=explode("\t",mymd5($pay_code,'DE'));

	$db->query("UPDATE {$_pre}join SET ifpay='1',banktype='$banktype' WHERE id='$id'");
	
	$rs = $db->get_one("SELECT * FROM `{$_pre}join` WHERE id='$id'");
	
	$d = explode(',',$rs['products']);
	foreach($d AS $v){
		list($pid,$pnum)=explode('=',$v);
		shop_storage_change($pid,$pnum);	//货存量的调整
		shop_give_money($pid,$lfjuid);	//买商品赠送积分
	}

	$rmb = $rs[totalmoney]-$rs[rmb];
	if($webdb['daili_receive']){//管理员代收货款
		add_rmb($rs[uid],-$rmb,0,"购买商品:{$rs[title]}...");
		add_rmb($rs[cuid],$rmb,0,"销售商品:{$rs[title]}...");
	}

	//付款后,短信或邮件通知商家
	paymoney_send_seller_msg($rs[cuid],$rs);
	
	$detail = explode(',',get_cookie('olpay_id'));
	if($id=$detail[0]){
		unset($detail[0]);
		set_cookie('olpay_id',implode(',',$detail));
		refreshto("olpay.php?id=$id","该笔订单付款成功,请继续支付下一笔",3);
	}

	refreshto("./","恭喜你订单付款成功!",60);
}

?>