<?php
/*
旅游住宿 
餐饮房产 
银行信托 
批发零售 
证券保险 
服装鞋袜 
教育培训
机械制造 
造纸印刷 
食品饮料 
农林牧渔 
文体娱乐 
首饰 
加工进出口
IT软件行业 
交通运输物流 
广电媒体传播 
家电五金制造 
建筑装修材料
医院化工设备 
租赁商务服务 
其他

老客户维护 
客户关系管理 
开发新客户 
老客户转介绍 
新客户扩展   
客户满意度调查  
跟进新客户 
建设客户服务中心

销售渠道 
投资加盟 
渠道招商 
渠道推广 
渠道宣传

创新人才 
人力投资团队 
技术团队 
营销策划团队 
销售团队         
医疗服务团队 
兼职人才 
海外高技能人才 
管理人才 
财务资本运作团队

政务关系 
金融人脉 
国企央企人脉 
地产公司人脉 
上市公司人脉     
教育医疗人脉  
协会商会人脉 
军检政法人脉

技术需求 
技术转让 
闲置资源

财商教育类培训 
总裁培训 
市场营销类培训 
人力资源类培训 
技术管理类培训 
生产管理类培训 
职业技能类培训 
指挥心理类培训

创业项目 
联盟商机

文化创新 
品牌管理 
品牌推广 
品牌设计 
企业文化策划

心理健康 
健康饮食 
养生之道 
美容养身 
身体养护 
中医保健


资金	
人才	
人脉	
渠道	
土地	
媒体	
技术	
其他
*/
if(is_file('install.php')){
	header("location:install.php");exit;
}elseif(is_file('upgrade.php')){
	header("location:upgrade.php");
	exit;
}

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

$STYLE="blue";

require(ROOT_PATH."/template/style_5.1/head.htm");
//echo getTpl("index",$index_tpl);die;
//require(getTpl("index",$index_tpl));
require(ROOT_PATH."/buy/template/blue/index.htm");
require(ROOT_PATH."/template/style_5.1/foot.htm");


?>