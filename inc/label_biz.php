<?php
!function_exists('AvoidGather') && exit('F');
$life_more=1;$BIZ_MODULEDB[]="fenlei";$BIZ_MODULEDB[]="life";$BIZ_MODULEDB[]="coupon";$BIZ_MODULEDB[]="gift";$BIZ_MODULEDB[]="hr";$BIZ_MODULEDB[]="shop";$BIZ_MODULEDB[]="tg";$BIZ_MODULEDB[]="2coupon";$BIZ_MODULEDB[]="2gift";$BIZ_MODULEDB[]="2hr";$BIZ_MODULEDB[]="2shop";$BIZ_MODULEDB[]="2tg";$BIZ_MODULEDB[]="2shoptg";$BIZ_MODULEDB[]="2house";$BIZ_MODULEDB[]="2dianping";$BIZ_MODULEDB[]="2-shou";
define('BIZ_PATH', ROOT_PATH);define('QB_BIZ_PATH', ROOT_PATH);define('QB_BIZ_PATH2', ROOT_PATH);define('BIZ_PATH_3', ROOT_PATH);define('discover', ROOT_PATH);
$IS_BIZPhp168=$IS_BIZ=1;
$BIZ_URLDB=array('MTI3LjAuMC4x','MTkyLjE2OC4=','bG9jYWxob3N0','bGlmZS5uZXQ=','cWlib3NvZnQuY29t','cGhwMTY4LmNvbQ==');
/*[-URL-]*/
$check_domain=0;
if( !strstr($webdb['www_url'],'http://') )die('网址必须是http://开头!');
foreach($BIZ_URLDB AS $key => $value) {
	$value = base64_decode($value);
	$value = str_replace("\r", '', $value);
	$value = str_replace("\n", '', $value);
	if (eregi("^http:\/\/([-a-z0-9_\.]*)$value", $webdb['www_url'])) {
		$check_domain = 1;
	}
}
if(!$check_domain)die("域名授权有误! $webdb[www_url]");


function get_city_label(&$sql){
	$sql = str_replace('city_id=\'$GLOBALS[city_id]\'','city_id IN (\'$GLOBALS[city_id]\',0)',$sql);
}
if(!function_exists('MODULE_CK')){
function MODULE_CK($type) {
	global $pre, $BIZ_MODULEDB;
	if (!is_array($BIZ_MODULEDB)) {
		die("授权不存在3!");
		return ;
	} 
	if (!in_array($type, $BIZ_MODULEDB)) {
		die("授权有误4!");
	} 
	return 1;
}
}

function label_ck_biz(){}

