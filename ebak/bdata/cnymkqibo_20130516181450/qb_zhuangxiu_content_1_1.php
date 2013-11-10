<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_zhuangxiu_content_1`;");
E_C("CREATE TABLE `qb_zhuangxiu_content_1` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `sortid` tinyint(3) NOT NULL DEFAULT '0',
  `price` tinyint(2) NOT NULL DEFAULT '0',
  `supply_type` tinyint(1) NOT NULL DEFAULT '0',
  `acreage` varchar(12) NOT NULL DEFAULT '',
  `station` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`),
  KEY `room_type` (`supply_type`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gbk");
E_D("replace into `qb_zhuangxiu_content_1` values('1','5','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, 宋体, sans-serif; \">随时方便量房（提前预约）</span><span style=\"font-family: Arial, 宋体, sans-serif; \">，新房毛坯，最近交房，就可以量房，喜欢现代简约的装修风格，格局不动，半包预算在3万左右，具体细节面谈。</span>','1','4','1','89','北京昌平区10号楼');");
E_D("replace into `qb_zhuangxiu_content_1` values('2','6','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, 宋体, sans-serif; \">周末或者周二方便量房</span><span style=\"font-family: Arial, 宋体, sans-serif; \">，要求是正规的装修公司，质量有一定保证，买的二手房，要整体翻新，半包预算在3-5万，也可考虑全包，具体细节面谈。</span>','3','3','1','67','朝阳区东水路89号');");
E_D("replace into `qb_zhuangxiu_content_1` values('3','7','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, 宋体, sans-serif; \">本周末方便量房（提前预约）</span><span style=\"font-family: Arial, 宋体, sans-serif; \">，买的二手房，已经交房，主要是厨房和卫生间需要拆除重新装修，其他简单翻新装修，半预算2-3万，具体面谈</span>','2','2','2','122','丰台区蒲黄榆8楼');");
E_D("replace into `qb_zhuangxiu_content_1` values('4','8','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, 宋体, sans-serif; \">11月中旬方便量房（提前预约）</span><span style=\"font-family: Arial, 宋体, sans-serif; \">，要求是正规的装修公司，质量有一定的保证，现代简约的装修风格，有点小创意，具体细节面谈</span>','1','4','2','56','丰台区卢沟桥附近');");
E_D("replace into `qb_zhuangxiu_content_1` values('5','9','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, 宋体, sans-serif; \">上午方便量房（提前预约）</span><span style=\"font-family: Arial, 宋体, sans-serif; \">，买的二手房，想整体翻新，卫生间和厨房布局不好，想要改动，其他的简单翻新，重视设计，具体细节面谈。</span>','1','5','1','122','海淀区军事博物馆附近');");
E_D("replace into `qb_zhuangxiu_content_1` values('6','10','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, 宋体, sans-serif; \">周末方便量房（提前预约）</span><span style=\"font-family: Arial, 宋体, sans-serif; \">，要求是正规的装修公司，质量有一定保证，是三居室的格局，以前是办公的，现在想翻新装修自己住，喜欢中式的装修风格，具体细节面谈。</span>','1','3','1','122','朝阳区盛世家园10号楼');");
E_D("replace into `qb_zhuangxiu_content_1` values('7','11','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, 宋体, sans-serif; \">随时方便量房，提前电话预约</span><span style=\"font-family: Arial, 宋体, sans-serif; \">，老房，平房，整体翻新，水电需要重做，做婚房用的，全包的预算在2万左右，要充分利用空间，重视设计，具体装修风格需要跟设计师详细沟通，装修公司需要信誉好、服务态度好、性价比高，具体细节面谈。</span>','1','1','2','77','宣武区大栅栏附近');");
E_D("replace into `qb_zhuangxiu_content_1` values('8','12','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, 宋体, sans-serif; \">随时方便量房（提前2天预约）</span><span style=\"font-family: Arial, 宋体, sans-serif; \">，新房，已交房，是毛坯房，简单装修，全包预算在3-5万，要求是正规的装修公司，质量有一定保证，具体细节面谈。</span>','2','3','1','123','昌平区天通苑');");
E_D("replace into `qb_zhuangxiu_content_1` values('9','13','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, 宋体, sans-serif; \">随时方便量房（提前预约）</span><span style=\"font-family: Arial, 宋体, sans-serif; \">，3层，有地下室，作办公楼，地下室是研发的，一层是员工办公，二层是领导办公，三层要隔成宿舍和客房，主要是4个卫生间和1个厨房，墙面及地板，其他简单装修，具体细节面谈。</span>','3','1','1','480','海淀区上地领秀新硅谷');");
E_D("replace into `qb_zhuangxiu_content_1` values('10','14','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, 宋体, sans-serif; \">晚上7点或者周末方便量房（提前预约）</span><span style=\"font-family: Arial, 宋体, sans-serif; \">，要求是正规的装修公司，质量有一定保证，房子格局不动，具体风格要根据方案和设计来定，半包预算在4万左右，具体细节面谈。</span>','1','1','1','68','房山区乐活城');");
E_D("replace into `qb_zhuangxiu_content_1` values('11','15','1','1','<span style=\"font-family:Arial, 宋体, sans-serif;margin: 0px; padding: 0px; \">本周日方便量房，提前电话预约</span><span style=\"font-family:Arial, 宋体, sans-serif;\">，新房，结婚用的，精装，全包预算在20——30万之间，具体装修风格跟设计师沟通，装修公司需要信誉好、施工工艺好的，细节详谈。</span>','1','1','1','120','海淀区西三环');");

require("../../inc/footer.php");
?>