<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hr_sort`;");
E_C("CREATE TABLE `qb_hr_sort` (
  `fid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `fup` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `class` smallint(4) NOT NULL DEFAULT '0',
  `sons` smallint(4) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `admin` varchar(100) NOT NULL DEFAULT '',
  `list` int(10) NOT NULL DEFAULT '0',
  `listorder` tinyint(2) NOT NULL DEFAULT '0',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  `logo` varchar(150) NOT NULL DEFAULT '',
  `descrip` text NOT NULL,
  `style` varchar(50) NOT NULL DEFAULT '',
  `template` text NOT NULL,
  `jumpurl` varchar(150) NOT NULL DEFAULT '',
  `maxperpage` tinyint(3) NOT NULL DEFAULT '0',
  `metatitle` varchar(250) NOT NULL DEFAULT '',
  `metakeywords` varchar(255) NOT NULL DEFAULT '',
  `metadescription` varchar(255) NOT NULL DEFAULT '',
  `allowcomment` tinyint(1) NOT NULL DEFAULT '0',
  `allowpost` varchar(150) NOT NULL DEFAULT '',
  `allowviewtitle` varchar(150) NOT NULL DEFAULT '',
  `allowviewcontent` varchar(150) NOT NULL DEFAULT '',
  `allowdownload` varchar(150) NOT NULL DEFAULT '',
  `forbidshow` tinyint(1) NOT NULL DEFAULT '0',
  `config` mediumtext NOT NULL,
  `index_show` tinyint(1) NOT NULL DEFAULT '0',
  `contents` mediumint(4) NOT NULL DEFAULT '0',
  `tableid` varchar(30) NOT NULL DEFAULT '',
  `dir_name` varchar(50) NOT NULL DEFAULT '',
  `ifcolor` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gbk");
E_D("replace into `qb_hr_sort` values('1','0','计算机/互联网/通信/电子','1','2','0','1','','10','0','','','','','N;','','0','','','','0','','','','','0','','0','104','','','0');");
E_D("replace into `qb_hr_sort` values('3','0','人事/行政/高级管理','1','2','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_hr_sort` values('2','0','销售/客服/技术支持','1','2','0','1','','0','0','','','','','N;','','0','','','','0','','','','','0','','0','0','','','0');");
E_D("replace into `qb_hr_sort` values('4','1','计算机硬件','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_hr_sort` values('5','1','计算机软件','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_hr_sort` values('6','1','互联网开发及应用','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_hr_sort` values('7','3','人力资源','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_hr_sort` values('8','3','高级管理','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_hr_sort` values('9','3','行政/后勤','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_hr_sort` values('10','2','销售人员','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_hr_sort` values('11','2','客服及技术支持','1','3','0','0','','0','0','','','','','N;','','0','','','','0','','','','','0','','0','0','','','0');");

require("../../inc/footer.php");
?>