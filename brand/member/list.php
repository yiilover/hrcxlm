<?php
require_once("global.php");

if($action == "del"){
	$rsdb=$db->get_one("SELECT * FROM `{$_pre}content` WHERE id='$id'");
	if(!$rsdb){
		showerr("删除错误!并没有相关的内容");
	}elseif($rsdb[uid]!=$lfjuid&&!$web_admin){
		showerr("你没权限!");
	}
	$db->query("DELETE FROM `{$_pre}content` WHERE `id` = '$id'");
	$db->query("DELETE FROM `{$_pre}content_1` WHERE `id` = '$id'");
	refreshto("list.php","删除成功");
}

$rows=15;

if(!$page)
{
	$page=1;
}
$min=($page-1)*$rows;
$query = $db->query("SELECT * FROM {$_pre}content WHERE uid=$lfjuid ORDER BY id DESC LIMIT $min,$rows");
while($rs = $db->fetch_array($query)){
	$rs[posttime]=date("m-d H:i",$rs[posttime]);
	$rs[yz]=$rs[yz]?"<A style='color:red;'>已审核</A>":"<A style='color:blue;'>未审核</A>";
	$listdb[]=$rs;
}
$showpage=getpage("{$_pre}content","WHERE uid=$lfjuid","?",$rows);
require(ROOT_PATH."member/head.php");
require(dirname(__FILE__)."/"."template/list.htm");
require(ROOT_PATH."member/foot.php");
?>