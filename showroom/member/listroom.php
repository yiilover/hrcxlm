<?php
require_once("global.php");

$rows=15;

if(!$page)
{
	$page=1;
}
$min=($page-1)*$rows;
$query = $db->query("SELECT * FROM {$_pre}room WHERE uid=$lfjuid ORDER BY id DESC LIMIT $min,$rows");
while($rs = $db->fetch_array($query)){
	$rs[posttime]=date("m-d H:i",$rs[posttime]);
	$rs[yz]=$rs[yz]?"<A style='color:red;'>“—…Û∫À</A>":"<A style='color:blue;'>Œ¥…Û∫À</A>";
	$listdb[]=$rs;
}
$showpage=getpage("{$_pre}room","WHERE uid=$lfjuid","?",$rows);
require(ROOT_PATH."member/head.php");
require(dirname(__FILE__)."/"."template/listroom.htm");
require(ROOT_PATH."member/foot.php");
?>