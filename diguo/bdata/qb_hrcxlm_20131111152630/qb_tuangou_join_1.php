<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_tuangou_join`;");
E_C("CREATE TABLE `qb_tuangou_join` (
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `qb_tuangou_join` values('1','2','39','0','4','1288849191','1','admin','0','127.0.0.1');");
E_D("replace into `qb_tuangou_join` values('2','2','37','0','7','1288849225','1','admin','0','127.0.0.1');");
E_D("replace into `qb_tuangou_join` values('3','2','36','0','6','1288849251','1','admin','0','127.0.0.1');");
E_D("replace into `qb_tuangou_join` values('4','2','35','0','5','1288849277','1','admin','0','127.0.0.1');");
E_D("replace into `qb_tuangou_join` values('5','2','38','0','1','1288849316','1','admin','0','127.0.0.1');");

require("../../inc/footer.php");
?>