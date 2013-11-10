<?php
require(dirname(__FILE__)."/"."global.php");
header('Content-Type: text/html; charset=gb2312');

if( eregi("^([a-zA-Z0-0_]+)$",$inc) ){
	require(dirname(__FILE__)."/inc/ajax/$inc.php");
}

?>