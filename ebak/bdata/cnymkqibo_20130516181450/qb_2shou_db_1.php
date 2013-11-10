<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_2shou_db`;");
E_C("CREATE TABLE `qb_2shou_db` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `city_id` (`city_id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=gbk");
E_D("replace into `qb_2shou_db` values('2','7','1','1');");
E_D("replace into `qb_2shou_db` values('3','7','1','1');");
E_D("replace into `qb_2shou_db` values('4','7','1','1');");
E_D("replace into `qb_2shou_db` values('5','7','1','1');");
E_D("replace into `qb_2shou_db` values('6','7','1','1');");
E_D("replace into `qb_2shou_db` values('7','7','1','1');");
E_D("replace into `qb_2shou_db` values('8','8','1','1');");
E_D("replace into `qb_2shou_db` values('9','8','1','1');");
E_D("replace into `qb_2shou_db` values('10','9','1','1');");
E_D("replace into `qb_2shou_db` values('11','9','1','1');");
E_D("replace into `qb_2shou_db` values('12','23','1','1');");
E_D("replace into `qb_2shou_db` values('13','23','1','1');");
E_D("replace into `qb_2shou_db` values('14','23','1','1');");
E_D("replace into `qb_2shou_db` values('15','23','1','1');");
E_D("replace into `qb_2shou_db` values('16','13','1','1');");
E_D("replace into `qb_2shou_db` values('17','13','1','1');");

require("../../inc/footer.php");
?>