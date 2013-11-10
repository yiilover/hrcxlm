<?php
if(is_file('install.php')){
	header("location:install.php");exit;
}elseif(is_file('upgrade.php')){
	header("location:upgrade.php");
	exit;
}
/*
$str = 'a:29:{s:13:"tplpart_1code";s:108:"<div class="list$i">
<a href="$url" target="_blank">$title</a>
<span>{$price}元/{$my_units}</span>
</div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:7:"typefid";N;s:9:"noReadMid";i:1;s:6:"wninfo";s:5:"sell_";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";N;s:8:"moduleid";N;s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:6:"A.list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"6";s:3:"sql";s:122:"(SELECT A.*,B.* FROM qb_sell_content A LEFT JOIN qb_sell_content_1 B ON A.id=B.id  WHERE 1 ) ORDER BY A.list DESC LIMIT 6 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"22";s:10:"titleflood";s:1:"0";}';
$arr = unserialize($str);
print_r(unserialize($str));
die;
a:4:{s:9:"html_edit";N;s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}
*/
require(dirname(__FILE__)."/global.php");



//SEO
$titleDB[title] = $city_DB[metaT][$city_id]?$city_DB[metaT][$city_id]:"{$city_DB[name][$city_id]} $webdb[Info_webname]";
$titleDB[keywords]	= $city_DB[metaK][$city_id]?$city_DB[metaK][$city_id]:$webdb[Info_metakeywords];
$titleDB[description] = $city_DB[metaD][$city_id]?$city_DB[metaD][$city_id]:($webdb[Info_description]?$webdb[Info_description] : $webdb[description]);



/**
*标签使用
**/
$ch_fid	= $ch_pagetype = 0;
$ch_module = $webdb[module_id]?$webdb[module_id]:99;	//系统特定ID参数,每个系统不能雷同
require(ROOT_PATH."inc/label_module.php");


//推荐的栏目在首页显示
//$listdb_moresort=Info_ListMoreSort($webdb[InfoIndexCSRow],$webdb[InfoIndexCSLeng],$city_id);

//每个栏目的信息数
//$InfoNum=get_infonum($city_id);


//模板风格：蓝色
$STYLE="style_5.1";

require(ROOT_PATH."/template/style_5.1/head.htm");
//echo getTpl("index",$index_tpl);die;
require(getTpl("index",$index_tpl));
//require("/template/blue/index.htm");
require(ROOT_PATH."/template/style_5.1/foot.htm");

?>