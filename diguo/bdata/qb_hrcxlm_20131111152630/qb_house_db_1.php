<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_house_db`;");
E_C("CREATE TABLE `qb_house_db` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `city_id` (`city_id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=gbk");
E_D("replace into `qb_house_db` values('13','5','1','1');");
E_D("replace into `qb_house_db` values('11','5','1','1');");
E_D("replace into `qb_house_db` values('8','5','1','1');");
E_D("replace into `qb_house_db` values('34','6','1','1');");
E_D("replace into `qb_house_db` values('12','5','1','1');");
E_D("replace into `qb_house_db` values('9','5','1','1');");
E_D("replace into `qb_house_db` values('10','5','1','1');");
E_D("replace into `qb_house_db` values('14','5','1','1');");
E_D("replace into `qb_house_db` values('15','5','1','1');");
E_D("replace into `qb_house_db` values('16','5','1','1');");
E_D("replace into `qb_house_db` values('17','5','1','1');");
E_D("replace into `qb_house_db` values('18','5','1','1');");
E_D("replace into `qb_house_db` values('19','5','1','1');");
E_D("replace into `qb_house_db` values('20','5','1','1');");
E_D("replace into `qb_house_db` values('21','5','1','1');");
E_D("replace into `qb_house_db` values('22','5','1','1');");
E_D("replace into `qb_house_db` values('23','5','1','1');");
E_D("replace into `qb_house_db` values('24','2','1','1');");
E_D("replace into `qb_house_db` values('25','2','1','1');");
E_D("replace into `qb_house_db` values('26','2','1','1');");
E_D("replace into `qb_house_db` values('27','2','1','1');");
E_D("replace into `qb_house_db` values('28','2','1','1');");
E_D("replace into `qb_house_db` values('29','1','1','1');");
E_D("replace into `qb_house_db` values('30','1','1','1');");
E_D("replace into `qb_house_db` values('31','1','1','1');");
E_D("replace into `qb_house_db` values('32','1','1','1');");
E_D("replace into `qb_house_db` values('33','1','1','1');");
E_D("replace into `qb_house_db` values('35','6','1','1');");
E_D("replace into `qb_house_db` values('36','6','1','1');");
E_D("replace into `qb_house_db` values('37','6','1','1');");
E_D("replace into `qb_house_db` values('38','6','1','1');");
E_D("replace into `qb_house_db` values('39','6','1','1');");
E_D("replace into `qb_house_db` values('40','3','1','1');");
E_D("replace into `qb_house_db` values('41','3','1','1');");
E_D("replace into `qb_house_db` values('42','3','1','1');");
E_D("replace into `qb_house_db` values('43','4','1','1');");
E_D("replace into `qb_house_db` values('44','4','1','1');");
E_D("replace into `qb_house_db` values('45','4','1','1');");
E_D("replace into `qb_house_db` values('46','6','1','1');");

require("../../inc/footer.php");
?>