<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_shoptg_content_2`;");
E_C("CREATE TABLE `qb_shoptg_content_2` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `order_username` varchar(20) NOT NULL DEFAULT '',
  `order_phone` varchar(20) NOT NULL DEFAULT '',
  `order_mobphone` varchar(15) NOT NULL DEFAULT '',
  `order_email` varchar(50) NOT NULL DEFAULT '',
  `order_qq` varchar(11) NOT NULL DEFAULT '',
  `order_postcode` varchar(6) NOT NULL DEFAULT '',
  `order_sendtype` tinyint(1) NOT NULL DEFAULT '0',
  `order_paytype` tinyint(1) NOT NULL DEFAULT '0',
  `order_address` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `qb_shoptg_content_2` values('5','5','1','1','','','','13399999999','54325@qq.com','','','0','4','');");
E_D("replace into `qb_shoptg_content_2` values('6','6','1','1','','','','13399999999','qibobb@126.com','','','0','4','');");

require("../../inc/footer.php");
?>