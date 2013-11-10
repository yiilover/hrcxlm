<?php
require_once("global.php");

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
	$rs[totaluser] = $rs[totaluser]?"<a href='joinlist.php?cid=$rs[id]'>共({$rs[totaluser]})人,查看</a>":0;
	$listdb[]=$rs;
}
$showpage=getpage("{$_pre}content","WHERE uid=$lfjuid","?",$rows);
require(ROOT_PATH."member/head.php");
require(dirname(__FILE__)."/"."template/listzh.htm");
require(ROOT_PATH."member/foot.php");
?>