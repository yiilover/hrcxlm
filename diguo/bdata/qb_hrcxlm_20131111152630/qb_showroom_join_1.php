<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_showroom_join`;");
E_C("CREATE TABLE `qb_showroom_join` (
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `qb_showroom_join` values('1','2','4','0','2','1284799708','1','admin','1','127.0.0.1');");
E_D("replace into `qb_showroom_join` values('2','2','1','0','1','1286767772','1','admin','1','127.0.0.1');");
E_D("replace into `qb_showroom_join` values('3','2','11','0','4','1287640849','1','admin','1','127.0.0.1');");

require("../../inc/footer.php");
?>