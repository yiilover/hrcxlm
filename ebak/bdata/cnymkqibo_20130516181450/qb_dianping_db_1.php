<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_dianping_db`;");
E_C("CREATE TABLE `qb_dianping_db` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `city_id` (`city_id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gbk");
E_D("replace into `qb_dianping_db` values('11','18','1','1');");
E_D("replace into `qb_dianping_db` values('2','18','1','1');");
E_D("replace into `qb_dianping_db` values('3','18','1','1');");
E_D("replace into `qb_dianping_db` values('4','18','1','1');");
E_D("replace into `qb_dianping_db` values('5','18','1','1');");
E_D("replace into `qb_dianping_db` values('6','18','1','1');");
E_D("replace into `qb_dianping_db` values('7','18','1','1');");
E_D("replace into `qb_dianping_db` values('8','18','1','1');");
E_D("replace into `qb_dianping_db` values('9','18','1','1');");
E_D("replace into `qb_dianping_db` values('10','18','1','1');");

require("../../inc/footer.php");
?>