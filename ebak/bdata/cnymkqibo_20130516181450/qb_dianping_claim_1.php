<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_dianping_claim`;");
E_C("CREATE TABLE `qb_dianping_claim` (
  `cid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(32) NOT NULL DEFAULT '',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `company_name` varchar(50) NOT NULL DEFAULT '',
  `company_man` varchar(20) NOT NULL DEFAULT '',
  `company_license` varchar(50) NOT NULL DEFAULT '',
  `contact_man` varchar(30) NOT NULL DEFAULT '',
  `contact_mob` varchar(15) NOT NULL DEFAULT '',
  `contact_tel` varchar(20) NOT NULL DEFAULT '',
  `contact_email` varchar(30) NOT NULL DEFAULT '',
  `pic_license` varchar(100) NOT NULL DEFAULT '',
  `pic_idcard` varchar(100) NOT NULL DEFAULT '',
  `cuid` mediumint(7) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  `about` text NOT NULL,
  `check_reason` text NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `id` (`id`),
  KEY `yz` (`yz`),
  KEY `city_id` (`city_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `qb_dianping_claim` values('1','11','1','admin','1355205181','1','广州协天软件科技有限公司','张生','45643132156','张学友','15920222222','020','0342@fdsg.cn','company/renzheng/1_20101016111001_krbfo.jpg','company/renzheng/1_20101016111035_nlvue.jpg','1','1','','');");

require("../../inc/footer.php");
?>