<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_sell_db`;");
E_C("CREATE TABLE `qb_sell_db` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `city_id` (`city_id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=gbk");
E_D("replace into `qb_sell_db` values('17','1','0','1');");
E_D("replace into `qb_sell_db` values('15','1','0','1');");
E_D("replace into `qb_sell_db` values('16','2','0','1');");
E_D("replace into `qb_sell_db` values('18','1','0','1');");

require("../../inc/footer.php");
?>