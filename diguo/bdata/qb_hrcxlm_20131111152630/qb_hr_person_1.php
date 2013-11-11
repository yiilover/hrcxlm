<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hr_person`;");
E_C("CREATE TABLE `qb_hr_person` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `hits` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `levels` tinyint(1) NOT NULL DEFAULT '0',
  `levelstime` int(10) NOT NULL DEFAULT '0',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mid` (`mid`),
  KEY `yz` (`yz`,`mid`),
  KEY `city_id` (`city_id`),
  KEY `uid` (`uid`),
  KEY `levels` (`levels`),
  KEY `posttime` (`posttime`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk");
E_D("replace into `qb_hr_person` values('1','2','13','1369107488','1','admin','1','1','1286599134','127.0.0.1','1');");
E_D("replace into `qb_hr_person` values('5','2','2','1288667067','28','test2','0','1','1288667652','127.0.0.1','1');");
E_D("replace into `qb_hr_person` values('3','2','2','1288666893','29','test3','0','1','1288667652','127.0.0.1','1');");
E_D("replace into `qb_hr_person` values('4','2','5','1288666734','27','test1','0','1','1288667650','127.0.0.1','1');");
E_D("replace into `qb_hr_person` values('6','2','2','1288667240','31','test5','0','1','1288667653','127.0.0.1','1');");
E_D("replace into `qb_hr_person` values('7','2','8','1288667419','32','test6','0','1','1288667654','127.0.0.1','1');");
E_D("replace into `qb_hr_person` values('8','2','1','1380433005','38','sara','0','0','0','127.0.0.1','1');");

require("../../inc/footer.php");
?>