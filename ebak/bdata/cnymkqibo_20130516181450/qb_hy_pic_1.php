<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hy_pic`;");
E_C("CREATE TABLE `qb_hy_pic` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `psid` int(10) unsigned NOT NULL DEFAULT '0',
  `uid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `username` varchar(32) NOT NULL DEFAULT '',
  `title` varchar(128) NOT NULL DEFAULT '',
  `url` varchar(248) NOT NULL DEFAULT '',
  `level` tinyint(1) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `posttime` int(10) unsigned NOT NULL DEFAULT '0',
  `isfm` tinyint(1) NOT NULL DEFAULT '0',
  `orderlist` mediumint(5) NOT NULL DEFAULT '0',
  `type` varchar(8) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=gbk");
E_D("replace into `qb_hy_pic` values('21','23','1','admin','200385194913_Z8WmZIpjraqP.jpg','homepage/pic/1/1/1_20120531110543_ovr15.jpg','0','0','1338433423','0','0','');");
E_D("replace into `qb_hy_pic` values('22','23','1','admin','20040412201859_bBjVtEDFhPad_b..','homepage/pic/1/1/1_20120531110543_wisxv.jpg','0','0','1338433423','0','0','');");
E_D("replace into `qb_hy_pic` values('23','23','1','admin','20050818160900552.jpg','homepage/pic/1/1/1_20120531110544_rvqsh.jpg','0','0','1338433424','0','0','');");
E_D("replace into `qb_hy_pic` values('24','23','1','admin','20037202261636356.JPG','homepage/pic/1/1/1_20120531110544_lp9vm.jpg','0','0','1338433424','0','0','');");

require("../../inc/footer.php");
?>