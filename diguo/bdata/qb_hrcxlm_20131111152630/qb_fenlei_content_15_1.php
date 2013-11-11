<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_fenlei_content_15`;");
E_C("CREATE TABLE `qb_fenlei_content_15` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` varchar(255) NOT NULL,
  `sortid` tinyint(3) NOT NULL,
  `my_822` varchar(255) NOT NULL,
  `my_303` varchar(255) NOT NULL,
  `my_460` varchar(255) NOT NULL,
  `my_391` mediumtext NOT NULL,
  `my_404` mediumtext NOT NULL,
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>