<?php
require_once(dirname(__FILE__)."/global.php");

$fidDB=$db->get_one("SELECT A.* FROM {$_pre}sort A WHERE A.fid='$fid'");

if(!$fidDB){
	showerr("FID����!");
}

$rsdb = $db->get_one("SELECT B.*,A.* FROM `{$_pre}content$_erp` A LEFT JOIN `{$_pre}content_$fidDB[mid]` B ON A.id=B.id WHERE A.id='$id'");

if(is_file(Mpath."install/claim.sql") && !is_table("{$_pre}claim")){
	$sql = read_file(Mpath."install/claim.sql");
	$db->insert_file('',str_replace('qb_',$pre,$sql));
	unlink(Mpath."install/claim.sql");
}

if(!$rsdb){
	showerr("���ݲ�����");
}elseif($rsdb[is_claim]){
	showerr("�������ѱ��ɹ�����,�㲻��������!");
}elseif($db->get_one("SELECT * FROM `{$_pre}claim` WHERE id='$id' AND uid='$lfjuid'")){
	showerr("�벻Ҫ�ظ�����!");
}elseif($rsdb[uid]==$lfjuid){
	showerr("�㲻�������Լ�������");
}


if($step=='post'){
	if(!$postdb['company_name']){
		showerr('��ҵ���Ʋ���Ϊ��!');
	}elseif(!$postdb['company_man']){
		showerr('���˴�����Ϊ��!');
	}elseif(!$postdb['company_license']){
		showerr('Ӫҵִ�ձ�Ų���Ϊ��!');
	}elseif(!$postdb['contact_man']){
		showerr('��ϵ����������Ϊ��!');
	}elseif(!$postdb['contact_mob']){
		showerr('�ֻ�����Ϊ��!');
	}elseif(!$postdb['contact_tel']){
		showerr('���䲻��Ϊ��!');
	}
	foreach($postdb AS $key=>$value){
		$postdb[$key] = filtrate($value);
	}
	$db->query("INSERT INTO `{$_pre}claim` ( `id` ,  `uid` ,  `username` ,  `posttime` ,  `yz` ,  `company_name` ,  `company_man` ,  `company_license` ,  `contact_man` ,  `contact_mob` ,  `contact_tel` , `contact_email` ,  `pic_license` ,  `pic_idcard` ,  `cuid` ,  `city_id` ,  `about` ) VALUES ('$id','$lfjuid','$lfjid','$timestamp','0','$postdb[company_name]','$postdb[company_man]','$postdb[company_license]','$postdb[contact_man]','$postdb[contact_mob]','$postdb[contact_tel]', '$postdb[contact_email]','$postdb[pic_license]','$postdb[pic_idcard]','$rsdb[uid]','$rsdb[city_id]','$postdb[about]')");
	refreshto("bencandy.php?fid=$fid&id=$id","�������ύ,�����ĵȺ����Ա���!",3);
}

$infodb = '';
	
$infodb[company_man] = $lfjdb[truename];
$infodb[contact_man] = $lfjdb[truename];
$infodb[contact_mob] = $lfjdb[mobphone];
$infodb[contact_tel] = $lfjdb[telephone];
$infodb[contact_email] = $lfjdb[email];
$infodb[pic_idcard] = $lfjdb[idcard];

if($lfjdb[grouptype]==1){
	$array = $db->get_one("SELECT * FROM `{$pre}hy_company` WHERE uid='$lfjuid'");
	$infodb[company_name] = $array[title];
	$array[qy_contact] && $infodb[company_man] = $array[qy_contact];
	$array[qy_contact_mobile] && $infodb[contact_mob] = $array[qy_contact_mobile];
	$array[qy_contact_tel] && $infodb[contact_tel] = $array[qy_contact_tel];
	$array[qy_contact_email] && $infodb[contact_email] = $array[qy_contact_email];
	$infodb[pic_license] = $array[permit_pic];
	$array[idcard_pic] && $infodb[pic_idcard] = $array[idcard_pic];
}


require(Mpath."inc/head.php");
require(getTpl("claim"));
require(Mpath."inc/foot.php");
?>