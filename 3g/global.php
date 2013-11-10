<?php
define('Mpath',dirname(__FILE__).'/');
define( 'Mdirname' , preg_replace("/(.*)\/([^\/]+)/is","\\2",str_replace("\\","/",dirname(__FILE__))) );
require_once(dirname(__FILE__).'/../inc/common.inc.php');	//╨кпднд╪Ч
require_once(dirname(__FILE__).'/function.php');
$userkey=$lfjuid?mymd5("$timestamp\t$lfjid\t$lfjuid","EN",Mpath):"";

if($user_key){
	list($time,$_username,$_uid)=explode("\t",mymd5($user_key,"DE",Mpath));
	if($_username && $_uid && ($timestamp-$time)<36000){
		$rs = $userDB->get_info($_uid);
		if($rs['username']==$_username){
			$lfjdb = $rs;
			$lfjuid = $_uid;
			$lfjid = $_username;
		}
	}
}
?>