<?php
require("global.php");
require(ROOT_PATH."data/level.php");


$mid=2;

/**
*��ȡ��Ϣ���ĵ�����
**/
$rsdb=$db->get_one("SELECT A.*,B.* FROM `{$_pre}join` A LEFT JOIN `{$_pre}content_$mid` B ON A.id=B.id WHERE A.id='$id'");

$userinfo=$db->get_one("SELECT * FROM {$pre}memberdata WHERE uid='$rsdb[uid]'");
$userinfo[regdate] = date('Y-m-d H:i:s',$userinfo[regdate]);

if(!$rsdb){
	showerr("���ݲ�����");
}elseif(!$web_admin&&$rsdb[uid]!=$lfjuid){
	showerr("����Ȩ�鿴");
}

$rsdb[picurl] = tempdir($rsdb[picurl]);


$rsdb[C]=$db->get_one("SELECT * FROM {$_pre}content WHERE id='$rsdb[cid]'");

$field_db = $module_DB[$mid]['field'];

/**
*����Ϣ�����ֶεĴ���
**/
$Module_db->hidefield=true;
$Module_db->classidShowAll=true;
$Module_db->showfield($field_db,$rsdb,'show');


$rsdb[posttime]=date("Y-m-d H:i:s",$rsdb[posttime]);

require(ROOT_PATH."inc/head.php");
require(getTpl("bencandy_$mid"));
require(ROOT_PATH."inc/foot.php");

?>