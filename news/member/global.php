<?php

define('Memberpath',dirname(__FILE__).'/');

require(Memberpath."../global.php");

require(ROOT_PATH."inc/class.inc.php");

$Guidedb=new Guide_DB;

/**
*ǰ̨�Ƿ񿪷�
**/
if($webdb[module_close])
{
	$webdb[Info_closeWhy]=str_replace("\r\n","<br>",$webdb[Info_closeWhy]);
	showerr("��ϵͳ��ʱ�ر�:$webdb[Info_closeWhy]");
}
if(!$lfjid){
	showerr("�㻹û��¼");
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
	//�������ö����������ʻ�Ա����

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