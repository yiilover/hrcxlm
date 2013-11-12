<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_fenlei_content_5`;");
E_C("CREATE TABLE `qb_fenlei_content_5` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `my_age` varchar(8) NOT NULL DEFAULT '',
  `my_height` varchar(8) NOT NULL DEFAULT '',
  `my_job` varchar(30) NOT NULL DEFAULT '',
  `my_weight` varchar(15) NOT NULL DEFAULT '',
  `my_interest` varchar(100) NOT NULL DEFAULT '',
  `my_sex` varchar(4) NOT NULL DEFAULT '',
  `sortid` tinyint(1) NOT NULL DEFAULT '0',
  `schoo_age` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`),
  KEY `schoo_age` (`schoo_age`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>