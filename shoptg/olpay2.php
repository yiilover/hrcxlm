<?php
require("global.php");

//��ǰ������վ�����̼��մ���,�����ֱ�Ӹ�����̼ҵĳ�����olpay.php
if(!$lfjuid){
	showerr('���ȵ�¼!');
}elseif(!$webdb['daili_receive']){
	showerr('ϵͳδ���ð��̼Ҵ��ջ���!');
}


if($pay_code){	//POST��API����ʱ
	$pay_code = str_replace('QIBO','=',$pay_code);	//������š�=�����׳�����
	list(,$ids)=explode("\t",mymd5($pay_code,'DE'));
}


$infodb = $db->get_one("SELECT B.*,A.title FROM `{$_pre}join` B LEFT JOIN `{$_pre}content` A ON A.id=B.cid WHERE B.id = '$ids' ");

if(!$infodb){
	showerr("��������!!!");
}elseif($infodb[ifpay]){
	showerr('�ö����Ѿ�֧������!');
}

if($infodb['rmb'] && $lfjdb['rmb']>=$infodb['rmb']){
	$rmb=$infodb['rmb'];
}else{
	$rmb=0;
	//������0������û���;�������,��ֹ��οۿ�,��������������ٷ���
	$db->query("UPDATE {$_pre}join SET banktype='',rmb='0' WHERE id='$ids'");
}
$totalemoney = $infodb['totalmoney']-$rmb;	//��ȥ$infodb['rmb']���֧������.
$title = $infodb['title'];


if($totalemoney<=0){
	showerr('�����ܼ�Ϊ0,�޷�����֧��!');
}

if(!$webdb[yeepay_id]&&!$webdb[tenpay_id]&&!$webdb[alipay_id]&&!$webdb[pay99_id]&&!$webdb[chinabank_id]){
	showerr("����֧��ʧ��,����Աû�����������ʺ�!");
}

if(in_array($banktype,array('alipay','tenpay','chinabank','yeepay','paypal'))){	//POST��API����ʱ
	include(ROOT_PATH."inc/olpay/{$banktype}.php");
	exit;
}



$pay_code = mymd5("$totalemoney\t$ids");

//����������Ҫ��ģ������Ҫ�õ�
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
		showerr("��������!");
	}
	list($atc_moeny,$ids)=explode("\t",mymd5($pay_code,'DE'));
	
	if($atc_moeny<0.01){
		showerr("�ܶ��С��1��Ǯ!");
	}
	
	$numcode=rand(1,10000);
	while(strlen($numcode)<10){
		$numcode="0$numcode";
	}

	$array[money]=$atc_moeny;
	$pay_code = str_replace('=','QIBO',$pay_code);	//������š�=�����׳�����
	$array[return_url]="$Murl/olpay2.php?banktype=$banktype&pay_code=$pay_code&";
	$array[title]="������Ʒ:".get_word($title,30);
	$array[content]="������Ʒ:$title";
	$array[numcode]=$numcode;
	return $array;
}

function olpay_end($numcode){
	global $db,$_pre,$webdb,$banktype,$lfjuid,$lfjdb,$ids,$infodb;

	$ifpay = 1;		

	if($infodb[rmb] && $lfjdb[rmb]<$infodb[rmb]){	//��ֹ�ͻ���;��������ѹ�����

		$ifpay = 0;
		add_rmb($lfjuid,$infodb[totalmoney]-$infodb[rmb],0,"������Ʒʧ��,����:{$infodb[title]}...");
		$db->query("UPDATE {$_pre}join SET ifpay='0',banktype='$banktype' WHERE id='$ids'");

	}else{

		if($infodb[ifquit]){	//��Կ��˿�����,��ʹ�����֧��ʱ,$infodb[rmb]Ϊ0
			add_rmb($lfjuid,-$infodb[rmb],$infodb[totalmoney],"����� ����:$infodb[title]");
		}else{
			add_rmb($infodb[cuid],$infodb[totalmoney],0,"����:$infodb[title]");
			if($infodb[rmb]){	//ʹ�����֧�����ִ���ʱ
				add_rmb($lfjuid,-$infodb[rmb],0,"����:$infodb[title]");
			}
		}
	}
	
	$db->query("UPDATE {$_pre}join SET ifpay='$ifpay',banktype='$banktype' WHERE id='$ids'");

	count_join($infodb[cid]);	//ͳ�Ʊ�������
 

	//�����,���Ż��ʼ�֪ͨ�����������
	paymoney_send_msg($lfjuid,$infodb);
	
	//�����,���Ż��ʼ�֪ͨ�̼�
	paymoney_send_seller_msg($infodb[cuid],$infodb);
 
	refreshto("./","��ϲ�㶩������ɹ�!",60);
}

?>