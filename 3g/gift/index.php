<?php 
require(dirname(__FILE__)."/global.php");
$WebTitle=$webdb['Info_webname']."--".$webdb['webname'];
//$listhot = Get_Info('hot',10,40);
require(Mpath."template/head.htm");
require(Mpath."template/gift.htm");
require(Mpath."template/foot.htm");
?>