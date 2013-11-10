<?php

define('Memberpath',dirname(__FILE__).'/');

require(Memberpath."../global.php");

require(ROOT_PATH."inc/class.inc.php");

$Guidedb=new Guide_DB;

/**
*前台是否开放
**/
if($webdb[module_close])
{
	$webdb[Info_closeWhy]=str_replace("\r\n","<br>",$webdb[Info_closeWhy]);
	showerr("本系统暂时关闭:$webdb[Info_closeWhy]");
}
if(!$lfjid){
	showerr("你还没登录");
}


function ckGroupYz($value){
	global $lfjdb;
	if(!$value)
	{
		return 0;
	}
	$detail=explode(",",$value);
	if( in_array($lfjdb[groupid],$detail) )
	{
		return 1;
	}
}

if(count($_POST)<1&&!$nojump&&$webdb[_www_url]!=preg_replace("/http:\/\/([^\/]+)\/(.*)/is","http://\\1",$WEBURL)){
	//不允许用二级域名访问会员中心

	$url = strstr($WEBURL,'/'.basename(dirname(dirname(__FILE__))).'/member/');
	if(ereg('\/$',$url)){
		$url.="?nojump=1";
	}elseif(ereg('\.php$',$url)){
		$url.="?nojump=1";
	}else{
		$url.="&nojump=1";
	}
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$webdb[_www_url]".$url."'>";
	exit;
}
?>