<?php
require_once(dirname(__FILE__)."/global.php");
require_once(ROOT_PATH."inc/class.inc.php");

$Guidedb = new Guide_DB;

$rs=$db->get_one("SELECT admin FROM {$pre}city WHERE fid='$city_id'");
$detail=explode(',',$rs[admin]);
if($lfjid && in_array($lfjid,$detail)){
	$web_admin=1;
}

$fidDB = $db->get_one("SELECT A.* FROM {$_pre}sort A WHERE A.fid='$fid'");

if(!$fidDB){
	showerr("FID����!");
}elseif($fidDB['type']){
	showerr("������ѡ������");
}

if( !$web_admin && $fidDB[allowpost] ){
	if( !in_array($groupdb[gid],explode(",",$fidDB[allowpost])) ){
		showerr("�������û�����Ȩѡ����Ŀ");
	}
}

$rsdb = $db->get_one("SELECT * FROM `{$_pre}content` WHERE id='$id'");
if($rsdb[uid]!=$lfjuid&&!$web_admin){
	showerr("����Ȩ�޸�");
}

if($action=="edit"){

	$db->query("UPDATE `{$_pre}content` SET fid='$fid',fname='$fidDB[name]' WHERE id='$id'");
	$db->query("UPDATE `{$_pre}content_$fidDB[mid]` SET fid='$fid' WHERE id='$id'");
	refreshto("list.php?job=list","�޸ĳɹ�",1);

}else{

	$select_fid = $Guidedb->Select("{$_pre}sort",'fid',$rsdb[fid]);

	require(ROOT_PATH."member/head.php");
	require(dirname(__FILE__)."/template/editsort.htm");
	require(ROOT_PATH."member/foot.php");
}

?>