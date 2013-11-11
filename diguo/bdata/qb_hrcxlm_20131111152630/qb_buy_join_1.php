<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_buy_join`;");
E_C("CREATE TABLE `qb_buy_join` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `cid` mediumint(7) NOT NULL DEFAULT '0',
  `cuid` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `ip` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `mid` (`mid`),
  KEY `fid` (`fid`,`cid`),
  KEY `yz` (`yz`,`fid`,`mid`,`cid`),
  KEY `cuid` (`cuid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `qb_buy_join` values('1','2','13','1','11','1381936071','1','admin','0','221.2.148.207');");
E_D("replace into `qb_buy_join` values('2','2','15','1','2','1382460439','1','admin','0','112.65.49.163');");

require("../../inc/footer.php");
?>