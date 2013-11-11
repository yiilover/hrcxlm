<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_vote_comment`;");
E_C("CREATE TABLE `qb_vote_comment` (
  `id` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `cid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `vid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `ip` varchar(15) NOT NULL DEFAULT '',
  `icon` tinyint(3) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `aid` (`cid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=gbk");
E_D("replace into `qb_vote_comment` values('11','10','0','1','admin','1237279209','rrrrrrrrrrrrrrr','192.168.0.99','0','1');");
E_D("replace into `qb_vote_comment` values('12','10','0','1','admin','1237279223','dddddddddddddddd','192.168.0.99','0','1');");
E_D("replace into `qb_vote_comment` values('14','6','0','1','admin','1239025849','&nbsp;жЄ&nbsp;Ты:','127.0.0.1','0','1');");
E_D("replace into `qb_vote_comment` values('22','6','0','1','admin','1283825218','fdsadf','127.0.0.1','0','1');");

require("../../inc/footer.php");
?>