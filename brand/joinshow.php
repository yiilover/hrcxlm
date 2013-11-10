<?php
require("global.php");
require(ROOT_PATH."data/level.php");


$mid=2;

/**
*获取信息正文的内容
**/
$rsdb=$db->get_one("SELECT A.*,B.* FROM `{$_pre}join` A LEFT JOIN `{$_pre}content_$mid` B ON A.id=B.id WHERE A.id='$id'");

$userinfo=$db->get_one("SELECT * FROM {$pre}memberdata WHERE uid='$rsdb[uid]'");
$userinfo[regdate] = date('Y-m-d H:i:s',$userinfo[regdate]);

if(!$rsdb){
	showerr("内容不存在");
}elseif(!$web_admin&&$rsdb[uid]!=$lfjuid){
	showerr("你无权查看");
}

$rsdb[picurl] = tempdir($rsdb[picurl]);


$rsdb[C]=$db->get_one("SELECT * FROM {$_pre}content WHERE id='$rsdb[cid]'");

$field_db = $module_DB[$mid]['field'];

/**
*对信息内容字段的处理
**/
$Module_db->hidefield=true;
$Module_db->classidShowAll=true;
$Module_db->showfield($field_db,$rsdb,'show');


$rsdb[posttime]=date("Y-m-d H:i:s",$rsdb[posttime]);

require(ROOT_PATH."inc/head.php");
require(getTpl("bencandy_$mid"));
require(ROOT_PATH."inc/foot.php");

?>