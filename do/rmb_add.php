<?php
require("global.php");

if(in_array($banktype,array('alipay','tenpay','chinabank','yeepay','paypal'))){
	include(ROOT_PATH."inc/olpay/{$banktype}.php");
}elseif($banktype){
	showerr("支付类型有误!");	
}elseif(!$lfjuid){
	showerr('请先登录!');
}

$lfjdb[money]=get_money($lfjuid);

require(ROOT_PATH."inc/head.php");
require(html("rmb_add"));
require(ROOT_PATH."inc/foot.php");


function olpay_send(){
	global $db,$pre,$webdb,$banktype,$atc_moeny,$timestamp,$lfjuid,$lfjid,$webdb;
	
	$atc_moeny = intval($atc_moeny);
	if($atc_moeny<1){
		showerr("你输入的充值金额不能小于1元");
	}

	$array[money]=$atc_moeny;
	$array[return_url]="$webdb[www]/do/rmb_add.php?banktype=$banktype&";
	$array[title]="为{$lfjid}在线充值";
	$array[content]="为帐号:$lfjid,在线充值";
	$array[numcode]=strtolower(rands(10));

	switch($banktype){
		case 'alipay':
			$_banktype = '支付宝';
			$bank1 = $webdb['alipay_id'];
			break;
		case 'tenpay':
			$_banktype = '财付通';
			$bank1 = $webdb['tenpay_id'];
			break;
		case 'yeepay':
			$_banktype = '易宝支付';
			$bank1 = $webdb['yeepay_id'];
			break;
	}

	$db->query("INSERT INTO `{$pre}rmb_infull` (`numcode` ,`money` ,  `posttime` , `uid` , `username` , `banktype` , `bank1` ) VALUES ( '$array[numcode]', '$array[money]', '$timestamp', '$lfjuid', '$lfjid', '$_banktype', '$bank1')");

	return $array;
}

function olpay_end($numcode){
	global $db,$pre,$webdb,$banktype;

	$rt = $db->get_one("SELECT * FROM {$pre}rmb_infull WHERE numcode='$numcode'");
	if(!$rt){
		showerr('系统中没有您的充值订单，无法完成充值！');
	}
	if($rt['ifpay'] == 1){
		showerr('该订单已经充值成功！');
	}
	$db->query("UPDATE {$pre}rmb_infull SET ifpay='1' WHERE id='$rt[id]'");

	
	add_rmb($rt['uid'],$rt['money'],0,date('m月d日H:i ').'在线充值');

	refreshto("$webdb[www_url]/member/rmb.php?job=list","恭喜你充值成功",10);
}

?>