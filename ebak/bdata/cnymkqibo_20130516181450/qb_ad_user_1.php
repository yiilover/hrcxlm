<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_ad_user`;");
E_C("CREATE TABLE `qb_ad_user` (
  `u_id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `u_uid` mediumint(7) NOT NULL DEFAULT '0',
  `u_username` varchar(30) NOT NULL DEFAULT '',
  `u_day` smallint(4) NOT NULL DEFAULT '0',
  `u_begintime` int(10) NOT NULL DEFAULT '0',
  `u_endtime` int(10) NOT NULL DEFAULT '0',
  `u_hits` mediumint(7) NOT NULL DEFAULT '0',
  `u_yz` tinyint(1) NOT NULL DEFAULT '0',
  `u_code` text NOT NULL,
  `u_money` mediumint(7) NOT NULL DEFAULT '0',
  `u_moneycard` mediumint(7) NOT NULL DEFAULT '0',
  `u_posttime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`u_id`),
  KEY `u_endtime` (`u_endtime`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `qb_ad_user` values('1','10','1','admin','1','1238397241','1238483641','0','1','a:8:{s:4:\"word\";s:0:\"\";s:6:\"picurl\";s:29:\"ad/1_20090330150357_lRNDT.jpg\";s:7:\"linkurl\";s:7:\"¸æÍøÖ·:\";s:8:\"flashurl\";s:0:\"\";s:4:\"code\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";s:9:\"pictarget\";s:5:\"blank\";}','0','5','1238397242');");
E_D("replace into `qb_ad_user` values('2','10','1','admin','3','1255139003','1255398203','0','1','a:8:{s:4:\"word\";s:0:\"\";s:6:\"picurl\";s:29:\"ad/1_20091010091012_xjn5e.jpg\";s:7:\"linkurl\";s:21:\"http://v6.com/member/\";s:8:\"flashurl\";s:0:\"\";s:4:\"code\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";s:9:\"pictarget\";s:5:\"blank\";}','0','15','1255139004');");

require("../../inc/footer.php");
?>