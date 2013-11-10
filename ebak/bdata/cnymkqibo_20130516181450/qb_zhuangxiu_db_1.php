<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_zhuangxiu_db`;");
E_C("CREATE TABLE `qb_zhuangxiu_db` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `city_id` (`city_id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=gbk");
E_D("replace into `qb_zhuangxiu_db` values('1','6','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('2','6','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('3','6','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('4','6','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('5','1','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('6','1','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('7','1','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('8','1','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('9','1','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('10','1','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('11','1','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('12','1','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('13','1','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('14','1','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('15','1','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('16','4','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('17','4','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('18','4','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('19','4','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('20','4','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('21','4','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('22','4','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('23','4','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('24','4','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('25','4','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('26','4','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('27','4','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('28','3','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('29','3','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('30','3','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('31','3','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('32','3','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('33','3','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('34','3','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('35','3','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('36','3','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('37','3','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('38','5','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('39','5','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('40','5','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('41','5','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('42','5','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('43','2','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('44','2','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('45','2','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('46','2','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('47','2','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('48','2','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('49','2','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('50','2','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('51','6','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('52','2','1','1');");
E_D("replace into `qb_zhuangxiu_db` values('53','2','1','1');");

require("../../inc/footer.php");
?>