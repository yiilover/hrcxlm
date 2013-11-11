<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_zhuangxiu_content_2`;");
E_C("CREATE TABLE `qb_zhuangxiu_content_2` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `sortid` tinyint(3) NOT NULL DEFAULT '0',
  `designer` varchar(50) NOT NULL DEFAULT '',
  `design_style` tinyint(2) NOT NULL DEFAULT '0',
  `total_price` varchar(10) NOT NULL DEFAULT '',
  `acreage` varchar(10) NOT NULL DEFAULT '',
  `designer_id` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`),
  KEY `designer_id` (`designer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk");
E_D("replace into `qb_zhuangxiu_content_2` values('1','43','2','1','简单就是美','1','范婷婷','2','2','122','4');");
E_D("replace into `qb_zhuangxiu_content_2` values('2','44','2','1','简单就是美','1','范婷婷','2','3','57','4');");
E_D("replace into `qb_zhuangxiu_content_2` values('3','45','2','1','简单就是美','3','何雪','2','4','100','3');");
E_D("replace into `qb_zhuangxiu_content_2` values('4','46','2','1','简单就是美','1','何雪','2','3','56','3');");
E_D("replace into `qb_zhuangxiu_content_2` values('5','47','2','1','简单就是美','1','林春梅','1','3.2','122','2');");
E_D("replace into `qb_zhuangxiu_content_2` values('6','48','2','1','简单就是美','1','林春梅','3','2.3','57','2');");
E_D("replace into `qb_zhuangxiu_content_2` values('7','49','2','1','华丽装修。','1','张小雪','4','5','122','1');");
E_D("replace into `qb_zhuangxiu_content_2` values('8','50','2','1','简单就是美','1','张小雪','2','1','56','1');");
E_D("replace into `qb_zhuangxiu_content_2` values('9','52','2','1','美式风格的豪放，田园风格的清新，两者结合打造一款精美的舒适之家。客厅实木横梁吊顶，布艺沙发，拱形设计电视背景墙，开放式的餐厅，实木打造餐桌椅。整洁的厨房L型设计，白色整体橱柜，拱形门还用到马赛克装饰。温馨的卧室暖黄色背景墙，实木打造的家具，还带有独立的卫生间，淋浴和浴缸设为一体。宁静简约的小书房，蓝色的书桌和书架，放松的办公学习环境。悠然三居，惬意生活。','1','范婷婷','2','3','60','4');");
E_D("replace into `qb_zhuangxiu_content_2` values('10','53','2','1','这款家居以黄色为主色调，温馨装扮，而在风格上以田园风为主，时而也带着现代简约的气息，时而散发着美式风的豪爽，混搭出一款时尚与温馨结合的舒适之家。客厅黄色壁纸精致装饰背景墙，实木打造茶几和电视柜，还设计了宽敞的飘窗，餐厅开放式的设计，镜面装饰背景墙，还用到亮丽马赛克装饰。儿童房粉色壁纸甜美装饰，白色书桌和书架连体设计，卧室温馨浪漫装饰，阳台上清新小盆栽装饰摆设。','1','范婷婷','2','4','86','4');");

require("../../inc/footer.php");
?>