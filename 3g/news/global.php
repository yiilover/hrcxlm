<?php
define('Spath',dirname(__FILE__).'/');
define( 'Sdirname' , preg_replace("/(.*)\/([^\/]+)/is","\\2",str_replace("\\","/",dirname(__FILE__))) );
require_once(Spath."../global.php");
require_once(ROOT_PATH."news/data/config.php");			//��ѶƵ��ȫ�ֱ���ֵ
require_once(Spath."function.php");
$Surl=$Murl.'/'.Sdirname;
$_pre="{$pre}{$webdb[module_pre]}";


?>