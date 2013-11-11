<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hr_content`;");
E_C("CREATE TABLE `qb_hr_content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `fname` varchar(50) NOT NULL DEFAULT '',
  `hits` mediumint(7) NOT NULL DEFAULT '0',
  `comments` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `list` varchar(10) NOT NULL DEFAULT '',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `picurl` varchar(150) NOT NULL DEFAULT '',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `yzer` varchar(30) NOT NULL DEFAULT '',
  `yztime` int(10) NOT NULL DEFAULT '0',
  `levels` tinyint(2) NOT NULL DEFAULT '0',
  `levelstime` int(10) NOT NULL DEFAULT '0',
  `keywords` varchar(100) NOT NULL DEFAULT '',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `lastfid` mediumint(7) NOT NULL DEFAULT '0',
  `editer` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) NOT NULL DEFAULT '0',
  `begintime` int(10) NOT NULL DEFAULT '0',
  `endtime` int(10) NOT NULL DEFAULT '0',
  `lastview` int(10) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `list` (`list`,`fid`,`yz`),
  KEY `hits` (`hits`),
  KEY `city_id` (`city_id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=gbk");
E_D("replace into `qb_hr_content` values('50','电脑维修','1','4','计算机硬件','36','0','1284714994','1284714994','1','admin','','0','1','','0','1','1286599271','','127.0.0.1','0','','0','0','0','1382423259','1');");
E_D("replace into `qb_hr_content` values('51','打印机维修','1','4','计算机硬件','177','0','1284725512','1284725512','1','admin','','0','1','','0','1','1286599271','','127.0.0.1','0','','0','0','0','1382351066','1');");
E_D("replace into `qb_hr_content` values('52','业务员','1','6','互联网开发及应用','3','0','1287117018','1287117018','1','admin','','0','1','','0','1','1288667439','','127.0.0.1','0','','0','0','0','1288665503','1');");
E_D("replace into `qb_hr_content` values('53','前台小姐','1','6','互联网开发及应用','33','0','1364355530','1364355530','1','admin','','0','1','','0','1','1288667440','','127.0.0.1','0','','0','0','0','1381842508','1');");
E_D("replace into `qb_hr_content` values('54','.net软件开发工程师','1','7','人力资源','8','0','1363833789','1363833789','1','admin','','0','1','','0','1','1288667440','','127.0.0.1','0','','0','0','0','1381861850','1');");
E_D("replace into `qb_hr_content` values('55','软件运维工程师','1','7','人力资源','6','0','1288665946','1288665946','27','test1','','0','1','','0','1','1288667441','','127.0.0.1','0','','0','0','0','1382212562','1');");
E_D("replace into `qb_hr_content` values('56','JAVA高级软件工程师','1','8','高级管理','3','0','1288666104','1288666104','28','test2','','0','1','','0','1','1288667441','','127.0.0.1','0','','0','0','0','1336968789','1');");
E_D("replace into `qb_hr_content` values('57','销售代表','1','10','销售人员','14','0','1288666239','1288666239','29','test3','','0','1','','0','1','1288667442','','127.0.0.1','0','','0','0','0','1381842502','1');");
E_D("replace into `qb_hr_content` values('58','软件销售工程师','1','10','销售人员','30','0','1288666317','1288666317','29','test3','','0','1','admin','1365471917','0','0','','127.0.0.1','0','','0','0','0','1376635540','1');");

require("../../inc/footer.php");
?>