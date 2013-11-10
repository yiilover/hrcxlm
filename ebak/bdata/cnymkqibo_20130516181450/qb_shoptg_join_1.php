<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_shoptg_join`;");
E_C("CREATE TABLE `qb_shoptg_join` (
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
  `shopnum` mediumint(7) NOT NULL DEFAULT '0',
  `ifpay` tinyint(1) NOT NULL DEFAULT '0',
  `ifsend` tinyint(1) NOT NULL DEFAULT '0',
  `totalmoney` float NOT NULL DEFAULT '0',
  `banktype` varchar(15) NOT NULL DEFAULT '',
  `emscode` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `rmb` float NOT NULL DEFAULT '0',
  `sendtime` int(10) NOT NULL DEFAULT '0',
  `endtime` int(10) NOT NULL DEFAULT '0',
  `ifquit` tinyint(1) NOT NULL DEFAULT '0',
  `receive` tinyint(1) NOT NULL DEFAULT '0',
  `ifcomment` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mid` (`mid`),
  KEY `cuid` (`cuid`),
  KEY `cid` (`cid`),
  KEY `ifpay` (`ifpay`,`ifsend`,`endtime`,`ifquit`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `qb_shoptg_join` values('5','2','12','1','1','1342666291','1','admin','0','127.0.0.1','1','0','0','39','rmb','','4mulup7zfs','11','0','0','0','0','0');");
E_D("replace into `qb_shoptg_join` values('6','2','12','1','1','1355208677','1','admin','0','127.0.0.1','1','0','0','39','','','zr6l7a3dig','0','0','0','0','0','0');");

require("../../inc/footer.php");
?>