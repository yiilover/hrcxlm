<?php
define('Spath',dirname(__FILE__).'/');
define( 'Sdirname' , preg_replace("/(.*)\/([^\/]+)/is","\\2",str_replace("\\","/",dirname(__FILE__))) );
require_once(Spath."../global.php");
require_once(ROOT_PATH."f/data/config.php");			//��ѶƵ��ȫ�ֱ���ֵ
require_once(ROOT_PATH."f/data/module_db.php");			//ģ�������
$Surl=$Murl.'/'.Sdirname;	
$_pre="{$pre}{$webdb[module_pre]}";
require_once(Spath."function.php");

?>