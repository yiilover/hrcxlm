<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_buy_content_2`;");
E_C("CREATE TABLE `qb_buy_content_2` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `ask_username` varchar(20) NOT NULL DEFAULT '',
  `ask_phone` varchar(20) NOT NULL DEFAULT '',
  `ask_mobphone` varchar(15) NOT NULL DEFAULT '',
  `ask_email` varchar(50) NOT NULL DEFAULT '',
  `ask_qq` varchar(11) NOT NULL DEFAULT '',
  `ask_title` varchar(100) NOT NULL DEFAULT '',
  `hope_reply` varchar(25) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `qb_buy_content_2` values('1','2','2','1','请您发一份比较详细的产品规格说明，谢谢！','sd','3232','12212','dsds','33232','我对您发布的“求购”很感兴趣','2013-10-24');");

require("../../inc/footer.php");
?>