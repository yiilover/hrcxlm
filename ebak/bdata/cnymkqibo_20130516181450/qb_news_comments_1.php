<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_news_comments`;");
E_C("CREATE TABLE `qb_news_comments` (
  `cid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `fid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `cuid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `ip` varchar(15) NOT NULL DEFAULT '',
  `icon` tinyint(3) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `ifcom` tinyint(1) NOT NULL DEFAULT '0',
  `agree` mediumint(5) NOT NULL DEFAULT '0',
  `disagree` mediumint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`),
  KEY `aid` (`id`),
  KEY `fid` (`fid`),
  KEY `uid` (`uid`),
  KEY `ifcom` (`ifcom`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `qb_news_comments` values('1','957','37','1','1','admin','1340779692','������Ƭ������','127.0.0.1','0','1','0','0','0');");

require("../../inc/footer.php");
?>