<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_gift_content_2`;");
E_C("CREATE TABLE `qb_gift_content_2` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `contact_name` varchar(20) NOT NULL DEFAULT '',
  `contact_phone` varchar(20) NOT NULL DEFAULT '',
  `contact_address` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `qb_gift_content_2` values('4','6','1','1','gfds','gfsd','gfds','gfsd');");
E_D("replace into `qb_gift_content_2` values('5','7','1','9','ruytr','yutr','uytr','uyt');");

require("../../inc/footer.php");
?>