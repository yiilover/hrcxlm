<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_fenlei_content_7`;");
E_C("CREATE TABLE `qb_fenlei_content_7` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `my_acreage` varchar(12) NOT NULL DEFAULT '',
  `my_price` int(10) NOT NULL DEFAULT '0',
  `my_fitment` varchar(20) NOT NULL DEFAULT '',
  `my_floor` varchar(5) NOT NULL DEFAULT '',
  `my_station` varchar(50) NOT NULL DEFAULT '',
  `my_bus` varchar(50) NOT NULL DEFAULT '',
  `sortid` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>