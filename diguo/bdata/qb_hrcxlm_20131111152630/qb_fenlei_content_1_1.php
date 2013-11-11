<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_fenlei_content_1`;");
E_C("CREATE TABLE `qb_fenlei_content_1` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `my_bus` varchar(50) NOT NULL DEFAULT '',
  `my_station` varchar(100) NOT NULL DEFAULT '',
  `my_rooms` varchar(30) NOT NULL DEFAULT '',
  `my_price` int(8) NOT NULL DEFAULT '0',
  `my_peitao` varchar(150) NOT NULL DEFAULT '',
  `my_acreage` varchar(12) NOT NULL DEFAULT '',
  `my_fitment` varchar(15) NOT NULL DEFAULT '',
  `my_floor` varchar(12) NOT NULL DEFAULT '',
  `sortid` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`),
  KEY `my_rooms` (`my_rooms`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>