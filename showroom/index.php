<?php
if(is_file('install.php')){
	header("location:install.php");exit;
}elseif(is_file('upgrade.php')){
	header("location:upgrade.php");
	exit;
}

require(dirname(__FILE__)."/global.php");


//SEO
$titleDB[title]		= "$webdb[Info_webname] - $titleDB[title]";
$metakeywords = $webdb[Info_metakeywords]?$webdb[Info_metakeywords]:$webdb[metakeywords];
$titleDB[keywords]	= $titleDB[description] = "$webdb[Info_webname] - $metakeywords - $titleDB[keywords]";
$titleDB[description] = $city_DB[metaD][$city_id]?$city_DB[metaD][$city_id]:($webdb[Info_description]?$webdb[Info_description] : $webdb[description]);


/**
*标签使用
**/
$ch_fid	= $ch_pagetype = 0;
$ch_module = $webdb[module_id]?$webdb[module_id]:99;	//系统特定ID参数,每个系统不能雷同
require(ROOT_PATH."inc/label_module.php");

$STYLE="blue";
require(ROOT_PATH."/template/style_5.1/head.htm");
require(ROOT_PATH."/showroom/template/blue/index.htm");
//require(getTpl("index",$index_tpl));
require(ROOT_PATH."/template/style_5.1/foot.htm");


?>