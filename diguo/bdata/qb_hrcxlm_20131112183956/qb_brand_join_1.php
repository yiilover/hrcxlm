<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_brand_join`;");
E_C("CREATE TABLE `qb_brand_join` (
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
  `levels` tinyint(1) NOT NULL DEFAULT '0',
  `levelstime` int(10) NOT NULL DEFAULT '0',
  `hits` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mid` (`mid`),
  KEY `fid` (`fid`,`cid`),
  KEY `yz` (`yz`,`fid`,`mid`,`cid`),
  KEY `cuid` (`cuid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk");
E_D("replace into `qb_brand_join` values('1','2','8','0','7','1288621937','1','admin','0','127.0.0.1','0','0','0');");
E_D("replace into `qb_brand_join` values('2','2','7','0','7','1288622403','1','admin','0','127.0.0.1','0','0','0');");
E_D("replace into `qb_brand_join` values('3','2','6','0','6','1288622484','1','admin','0','127.0.0.1','0','0','0');");
E_D("replace into `qb_brand_join` values('4','2','4','0','4','1288622558','1','admin','0','127.0.0.1','0','0','0');");
E_D("replace into `qb_brand_join` values('5','2','3','0','3','1288622614','1','admin','0','127.0.0.1','0','0','0');");
E_D("replace into `qb_brand_join` values('6','2','1','0','1','1288622696','1','admin','0','127.0.0.1','0','0','0');");
E_D("replace into `qb_brand_join` values('7','2','1','0','1','1288622696','1','admin','0','127.0.0.1','0','0','0');");

require("../../inc/footer.php");
?>