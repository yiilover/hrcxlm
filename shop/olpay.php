<?php
require("global.php");

if($pay_code){	//POST��API����ʱ
	$pay_code = str_replace('QIBO','=',$pay_code);	//������š�=�����׳�����
	list(,$id)=explode("\t",mymd5($pay_code,'DE'));
}

//��ȡ������Ϣ

$infodb = $db->get_one("SELECT A.title,A.uid,B.totalmoney,B.ifpay,B.cid,B.rmb FROM `{$_pre}join` B LEFT JOIN `{$_pre}content` A ON A.id=B.cid WHERE B.id='$id'");

if(!$infodb){
	showerr('����������!');
}elseif($infodb[ifpay]){
	showerr('�˶����Ѿ�֧������!');
}

if($webdb['daili_receive']){	//����Ա���ջ���
	$array = $webdb;
	if(!$banktype && $webdb['rmb_pay'] && !$from_rmbpay && !$infodb[rmb] && $lfjdb[rmb]>0){	//����
		echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=rmb_pay.php?ids=$id&to_url=olpay'>";
		exit;
	}
}else{
	$rs = $db->get_one("SELECT * FROM `{$pre}purse` WHERE uid='$infodb[uid]'");
	$array = unserialize($rs[config]);
}




if(!$array[yeepay_id]&&!$array[tenpay_id]&&!$array[alipay_id]&&!$array[pay99_id]&&!$array[chinabank_id]){
	refreshto("./","����֧��ʧ��,�����ʺŲ�����!",10);
}

//�ױ�֧��
$webdb[yeepay_id] = $array[yeepay_id];
$webdb[yeepay_key] = $array[yeepay_key];

//�Ƹ�ͨ
$webdb[tenpay_id] = $array[tenpay_id];
$webdb[tenpay_key] = $array[tenpay_key];

//��������
$webdb[chinabank_id] = $array[chinabank_id];
$webdb[chinabank_key] = $array[chinabank_key];

//����
$webdb[paypal_id] = $array[paypal_id];
$webdb[paypal_key] = $array[paypal_key];
$webdb[paypal_type] = $array[paypal_type];

//֧����
$webdb[alipay_id] = $array[alipay_id];
$webdb[alipay_key] = $array[alipay_key];
$webdb[alipay_partner] = $array[alipay_partner];
$webdb[alipay_service] = $array[alipay_service];
$webdb[alipay_transport] = $array[alipay_transport];

 

if(in_array($banktype,array('alipay','tenpay','chinabank','yeepay','paypal'))){	//POST��API����ʱ
	include(ROOT_PATH."inc/olpay/{$banktype}.php");
	exit;
}

$infodb[totalmoney] = $infodb[totalmoney] - $infodb['rmb'];	//��ȥ$infodb['rmb']���֧������.
$pay_code = mymd5("$infodb[totalmoney]\t$id");



require(ROOT_PATH."inc/head.php");
require(getTpl("olpay"));
require(ROOT_PATH."inc/foot.php");


function olpay_send(){
	global $webdb,$banktype,$infodb,$timestamp,$lfjuid,$lfjid,$pay_code,$Murl;

	if(!$pay_code){
		showerr("��������!");
	}
	list($atc_moeny,$id)=explode("\t",mymd5($pay_code,'DE'));
	
	if($atc_moeny<0.01){
		showerr("�ܶ��С��1��Ǯ!");
	}
	
	$numcode=$id;
	while(strlen($numcode)<10){
		$numcode="0$numcode";
	}

	$array[money]=$atc_moeny;
	$pay_code = str_replace('=','QIBO',$pay_code);	//������š�=�����׳�����
	$array[return_url]="$Murl/olpay.php?banktype=$banktype&pay_code=$pay_code&";
	$array[title]="������Ʒ:$infodb[title] ...";
	$array[content]="������Ʒ:$infodb[title] ...";
	$array[numcode]=$numcode;
	return $array;
}

function olpay_end($numcode){
	global $db,$_pre,$webdb,$banktype,$pay_code,$lfjuid,$infodb;

	if(!$pay_code){
		showerr("��������!!");
	}
	
	list($atc_moeny,$id)=explode("\t",mymd5($pay_code,'DE'));

	$db->query("UPDATE {$_pre}join SET ifpay='1',banktype='$banktype' WHERE id='$id'");
	
	$rs = $db->get_one("SELECT * FROM `{$_pre}join` WHERE id='$id'");
	
	$d = explode(',',$rs['products']);
	foreach($d AS $v){
		list($pid,$pnum)=explode('=',$v);
		shop_storage_change($pid,$pnum);	//�������ĵ���
		shop_give_money($pid,$lfjuid);	//����Ʒ���ͻ���
	}

	$rmb = $rs[totalmoney]-$rs[rmb];
	if($webdb['daili_receive']){//����Ա���ջ���
		add_rmb($rs[uid],-$rmb,0,"������Ʒ:{$rs[title]}...");
		add_rmb($rs[cuid],$rmb,0,"������Ʒ:{$rs[title]}...");
	}

	//�����,���Ż��ʼ�֪ͨ�̼�
	paymoney_send_seller_msg($rs[cuid],$rs);
	
	$detail = explode(',',get_cookie('olpay_id'));
	if($id=$detail[0]){
		unset($detail[0]);
		set_cookie('olpay_id',implode(',',$detail));
		refreshto("olpay.php?id=$id","�ñʶ�������ɹ�,�����֧����һ��",3);
	}

	refreshto("./","��ϲ�㶩������ɹ�!",60);
}

?>