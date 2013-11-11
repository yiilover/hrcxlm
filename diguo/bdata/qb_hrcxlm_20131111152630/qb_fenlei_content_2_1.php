<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_fenlei_content_2`;");
E_C("CREATE TABLE `qb_fenlei_content_2` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `sortid` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `qb_fenlei_content_2` values('2','41','174','1','꿎桿瓜베籃가가가가꿎桿瓜베籃가가가가','1');");

require("../../inc/footer.php");
?>