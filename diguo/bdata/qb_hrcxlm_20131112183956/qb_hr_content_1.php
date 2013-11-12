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
E_D("replace into `qb_hr_content` values('50','����ά��','1','4','�����Ӳ��','36','0','1284714994','1284714994','1','admin','','0','1','','0','1','1286599271','','127.0.0.1','0','','0','0','0','1382423259','1');");
E_D("replace into `qb_hr_content` values('51','��ӡ��ά��','1','4','�����Ӳ��','177','0','1284725512','1284725512','1','admin','','0','1','','0','1','1286599271','','127.0.0.1','0','','0','0','0','1382351066','1');");
E_D("replace into `qb_hr_content` values('52','ҵ��Ա','1','6','������������Ӧ��','3','0','1287117018','1287117018','1','admin','','0','1','','0','1','1288667439','','127.0.0.1','0','','0','0','0','1288665503','1');");
E_D("replace into `qb_hr_content` values('53','ǰ̨С��','1','6','������������Ӧ��','33','0','1364355530','1364355530','1','admin','','0','1','','0','1','1288667440','','127.0.0.1','0','','0','0','0','1381842508','1');");
E_D("replace into `qb_hr_content` values('54','.net�����������ʦ','1','7','������Դ','8','0','1363833789','1363833789','1','admin','','0','1','','0','1','1288667440','','127.0.0.1','0','','0','0','0','1381861850','1');");
E_D("replace into `qb_hr_content` values('55','�����ά����ʦ','1','7','������Դ','6','0','1288665946','1288665946','27','test1','','0','1','','0','1','1288667441','','127.0.0.1','0','','0','0','0','1382212562','1');");
E_D("replace into `qb_hr_content` values('56','JAVA�߼��������ʦ','1','8','�߼�����','3','0','1288666104','1288666104','28','test2','','0','1','','0','1','1288667441','','127.0.0.1','0','','0','0','0','1336968789','1');");
E_D("replace into `qb_hr_content` values('57','���۴���','1','10','������Ա','14','0','1288666239','1288666239','29','test3','','0','1','','0','1','1288667442','','127.0.0.1','0','','0','0','0','1381842502','1');");
E_D("replace into `qb_hr_content` values('58','������۹���ʦ','1','10','������Ա','30','0','1288666317','1288666317','29','test3','','0','1','admin','1365471917','0','0','','127.0.0.1','0','','0','0','0','1376635540','1');");

require("../../inc/footer.php");
?>