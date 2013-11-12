<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hy_dianping`;");
E_C("CREATE TABLE `qb_hy_dianping` (
  `cid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `cuid` int(7) NOT NULL DEFAULT '0',
  `type` tinyint(2) NOT NULL DEFAULT '0',
  `id` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `fid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `uid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `ip` varchar(15) NOT NULL DEFAULT '',
  `icon` tinyint(3) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `fen1` smallint(4) NOT NULL DEFAULT '0',
  `fen2` smallint(4) NOT NULL DEFAULT '0',
  `fen3` smallint(4) NOT NULL DEFAULT '0',
  `fen4` smallint(4) NOT NULL DEFAULT '0',
  `fen5` smallint(4) NOT NULL DEFAULT '0',
  `flowers` smallint(4) NOT NULL DEFAULT '0',
  `egg` smallint(4) NOT NULL DEFAULT '0',
  `price` mediumint(5) NOT NULL DEFAULT '0',
  `keywords` varchar(100) NOT NULL DEFAULT '',
  `keywords2` varchar(100) NOT NULL DEFAULT '',
  `fen6` varchar(150) NOT NULL DEFAULT '',
  PRIMARY KEY (`cid`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk");
E_D("replace into `qb_hy_dianping` values('3','1','0','1','0','1','admin','1290066331','太好了!!','127.0.0.1','0','1','1','3','5','4','0','3','1','52','','','');");
E_D("replace into `qb_hy_dianping` values('4','1','0','1','0','1','admin','1290495895','好商家,很讲诚信!','127.0.0.1','0','1','1','1','2','4','2','2','3','23','','','');");
E_D("replace into `qb_hy_dianping` values('5','36','0','36','0','1','admin','1329964258','fffffffffff','127.0.0.1','0','1','0','0','0','0','0','1','1','0','','','');");
E_D("replace into `qb_hy_dianping` values('6','36','0','36','0','1','admin','1329964625','tttttttttttttt','127.0.0.1','0','1','2','4','4','4','3','2','1','55','','','');");
E_D("replace into `qb_hy_dianping` values('7','1','0','1','0','1','admin','1337937037','fdafdsafds','127.0.0.1','0','1','0','0','0','0','2','1','2','3','','','');");

require("../../inc/footer.php");
?>