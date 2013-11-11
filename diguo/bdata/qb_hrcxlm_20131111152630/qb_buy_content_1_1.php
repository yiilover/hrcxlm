<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_buy_content_1`;");
E_C("CREATE TABLE `qb_buy_content_1` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_year` varchar(255) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_title` varchar(255) NOT NULL,
  `contact_tel` varchar(255) NOT NULL,
  `contact_birth` varchar(20) NOT NULL,
  `idcard` varchar(30) NOT NULL,
  `contact_mob` varchar(30) NOT NULL,
  `qq` varchar(30) NOT NULL,
  `contact_address` varchar(255) NOT NULL,
  `company_area` varchar(255) NOT NULL,
  `company_staffnum` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_engagement` varchar(255) NOT NULL,
  `company_profit` varchar(30) NOT NULL,
  `sort_config` varchar(255) NOT NULL,
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `qb_buy_content_1` values('1','15','2','1','<span style=\"color:#009900;\">dsdsd</span><span style=\"color:#003399;\"></span>','eeee','1990','ew','fd','23232','2013-10-08','12343','1234','22','rr','fff','322','fdf@','cccc','34,000','人脉/媒体/健康、生活');");

require("../../inc/footer.php");
?>