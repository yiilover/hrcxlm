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

$array = explode(',',$ids);
foreach($array  AS $key=>$value){
	$array[$key] = intval($value);
}
if(count($array)<1){
	showerr('URL��������!');
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
		//������0������û���;�������,��ֹ��οۿ�,��������������ٷ���
		$db->query("UPDATE {$_pre}join SET banktype='',rmb='0' WHERE id='$rs[id]'");
	}
	$totalemoney += $rs['totalmoney']-$rmb;	//��ȥ$rs['rmb']���֧������.
	$title .="$rs[title],";
}

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
	global $db,$_pre,$webdb,$banktype,$pay_code,$lfjuid,$lfjdb;

	if(!$pay_code){
		showerr("��������!!!");
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
			shop_storage_change($pid,$pnum);	//�������ĵ���
			shop_give_money($pid,$lfjuid);	//����Ʒ���ͻ���
		}

		//$rmb = $rs[totalmoney]-$rs[rmb];
		//add_rmb($rs[uid],-$rmb,0,"������Ʒ:{$rs[title]}...");
		add_rmb($rs[cuid],$rs[totalmoney],0,"������Ʒ:{$rs[title]}...");
		if($rs[rmb]){
			if($lfjdb[rmb]>=$rs[rmb]){
				add_rmb($lfjuid,-$rs[rmb],0,"������Ʒ���֧��:{$rs[title]}...");
			}else{	//��ֹ�ͻ���;��������ѹ�����
				add_rmb($lfjuid,$rs[totalmoney]-$rs[rmb],0,"������Ʒʧ��,����:{$rs[title]}...");
				$db->query("UPDATE {$_pre}join SET ifpay='0',banktype='$banktype' WHERE id=$value");
			}
		}
	}
	refreshto("./","��ϲ�㶩������ɹ�!",60);
}

?>