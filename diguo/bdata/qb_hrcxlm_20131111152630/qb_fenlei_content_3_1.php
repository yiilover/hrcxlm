<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_fenlei_content_3`;");
E_C("CREATE TABLE `qb_fenlei_content_3` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `my_jobs` varchar(30) NOT NULL DEFAULT '',
  `my_nums` varchar(12) NOT NULL DEFAULT '',
  `my_jobabout` mediumtext NOT NULL,
  `my_workplace` varchar(30) NOT NULL DEFAULT '',
  `wage` tinyint(1) NOT NULL DEFAULT '0',
  `sortid` char(1) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `wage` (`wage`),
  KEY `sortid` (`sortid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>