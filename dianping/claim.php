<?php
require_once(dirname(__FILE__)."/global.php");

$fidDB=$db->get_one("SELECT A.* FROM {$_pre}sort A WHERE A.fid='$fid'");

if(!$fidDB){
	showerr("FID有误!");
}

$rsdb = $db->get_one("SELECT B.*,A.* FROM `{$_pre}content$_erp` A LEFT JOIN `{$_pre}content_$fidDB[mid]` B ON A.id=B.id WHERE A.id='$id'");

if(is_file(Mpath."install/claim.sql") && !is_table("{$_pre}claim")){
	$sql = read_file(Mpath."install/claim.sql");
	$db->insert_file('',str_replace('qb_',$pre,$sql));
	unlink(Mpath."install/claim.sql");
}

if(!$rsdb){
	showerr("内容不存在");
}elseif($rsdb[is_claim]){
	showerr("该商铺已被成功认领,你不能再认领!");
}elseif($db->get_one("SELECT * FROM `{$_pre}claim` WHERE id='$id' AND uid='$lfjuid'")){
	showerr("请不要重复认领!");
}elseif($rsdb[uid]==$lfjuid){
	showerr("你不能认领自己的商铺");
}


if($step=='post'){
	if(!$postdb['company_name']){
		showerr('企业名称不能为空!');
	}elseif(!$postdb['company_man']){
		showerr('法人代表不能为空!');
	}elseif(!$postdb['company_license']){
		showerr('营业执照编号不能为空!');
	}elseif(!$postdb['contact_man']){
		showerr('联系人姓名不能为空!');
	}elseif(!$postdb['contact_mob']){
		showerr('手机不能为空!');
	}elseif(!$postdb['contact_tel']){
		showerr('邮箱不能为空!');
	}
	foreach($postdb AS $key=>$value){
		$postdb[$key] = filtrate($value);
	}
	$db->query("INSERT INTO `{$_pre}claim` ( `id` ,  `uid` ,  `username` ,  `posttime` ,  `yz` ,  `company_name` ,  `company_man` ,  `company_license` ,  `contact_man` ,  `contact_mob` ,  `contact_tel` , `contact_email` ,  `pic_license` ,  `pic_idcard` ,  `cuid` ,  `city_id` ,  `about` ) VALUES ('$id','$lfjuid','$lfjid','$timestamp','0','$postdb[company_name]','$postdb[company_man]','$postdb[company_license]','$postdb[contact_man]','$postdb[contact_mob]','$postdb[contact_tel]', '$postdb[contact_email]','$postdb[pic_license]','$postdb[pic_idcard]','$rsdb[uid]','$rsdb[city_id]','$postdb[about]')");
	refreshto("bencandy.php?fid=$fid&id=$id","资料已提交,请耐心等候管理员审核!",3);
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