<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_shop_comments`;");
E_C("CREATE TABLE `qb_shop_comments` (
  `cid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `cuid` int(7) NOT NULL DEFAULT '0',
  `type` tinyint(2) NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `fid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `uid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `ip` varchar(15) NOT NULL DEFAULT '',
  `icon` tinyint(3) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `flowers` smallint(4) NOT NULL DEFAULT '0',
  `egg` smallint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `qb_shop_comments` values('5','1','0','9','23','1','admin','1345429746','jhfg','127.0.0.1','0','1','1','1');");
E_D("replace into `qb_shop_comments` values('6','1','0','10','64','1','admin','1348566103','fdsa','127.0.0.1','0','1','0','0');");

require("../../inc/footer.php");
?>