<?php
require("global.php");

if(in_array($banktype,array('alipay','tenpay','chinabank','yeepay','paypal'))){
	include(ROOT_PATH."inc/olpay/{$banktype}.php");
}elseif($banktype){
	showerr("֧����������!");	
}elseif(!$lfjuid){
	showerr('���ȵ�¼!');
}

$lfjdb[money]=get_money($lfjuid);

require(ROOT_PATH."inc/head.php");
require(html("rmb_add"));
require(ROOT_PATH."inc/foot.php");


function olpay_send(){
	global $db,$pre,$webdb,$banktype,$atc_moeny,$timestamp,$lfjuid,$lfjid,$webdb;
	
	$atc_moeny = intval($atc_moeny);
	if($atc_moeny<1){
		showerr("������ĳ�ֵ����С��1Ԫ");
	}

	$array[money]=$atc_moeny;
	$array[return_url]="$webdb[www]/do/rmb_add.php?banktype=$banktype&";
	$array[title]="Ϊ{$lfjid}���߳�ֵ";
	$array[content]="Ϊ�ʺ�:$lfjid,���߳�ֵ";
	$array[numcode]=strtolower(rands(10));

	switch($banktype){
		case 'alipay':
			$_banktype = '֧����';
			$bank1 = $webdb['alipay_id'];
			break;
		case 'tenpay':
			$_banktype = '�Ƹ�ͨ';
			$bank1 = $webdb['tenpay_id'];
			break;
		case 'yeepay':
			$_banktype = '�ױ�֧��';
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
		showerr('ϵͳ��û�����ĳ�ֵ�������޷���ɳ�ֵ��');
	}
	if($rt['ifpay'] == 1){
		showerr('�ö����Ѿ���ֵ�ɹ���');
	}
	$db->query("UPDATE {$pre}rmb_infull SET ifpay='1' WHERE id='$rt[id]'");

	
	add_rmb($rt['uid'],$rt['money'],0,date('m��d��H:i ').'���߳�ֵ');

	refreshto("$webdb[www_url]/member/rmb.php?job=list","��ϲ���ֵ�ɹ�",10);
}

?>