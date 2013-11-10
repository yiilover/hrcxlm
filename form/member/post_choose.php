<?php
require_once("global.php");

 
$listsorts0=showthissorts(0);

require(ROOT_PATH."member/head.php");
require(dirname(__FILE__)."/"."template/post_choose.htm");
require(ROOT_PATH."member/foot.php");

function showthissorts($list){
	global $db,$_pre;
	$list++;
	$show="<ul>\n";
	$query = $db->query("SELECT * FROM `{$_pre}module`  ORDER BY list DESC");
	while($rs = $db->fetch_array($query)){
		
		$show .= "<li><div><a href=\"../form.php?mid=".$rs['id']."\" target='_blank'>".$rs['name']." </a></div></li>\n";

	}
	$show .= "</ul>";
	return $show;
}
?>