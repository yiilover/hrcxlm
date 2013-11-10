<?php
require_once("global.php");

$rows=15;

if(!$page)
{
	$page=1;
}
$min=($page-1)*$rows;
$query = $db->query("SELECT * FROM {$_pre}room ORDER BY id DESC LIMIT $min,$rows");
while($rs = $db->fetch_array($query)){
	$listdb[]=$rs;
}
$showpage=getpage("{$_pre}room","","?",$rows);
require(ROOT_PATH."member/head.php");
require(dirname(__FILE__)."/"."template/post_a.htm");
require(ROOT_PATH."member/foot.php");
?>