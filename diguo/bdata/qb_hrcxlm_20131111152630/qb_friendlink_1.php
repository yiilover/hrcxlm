<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_friendlink`;");
E_C("CREATE TABLE `qb_friendlink` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `url` varchar(150) NOT NULL DEFAULT '',
  `logo` varchar(150) NOT NULL DEFAULT '',
  `descrip` varchar(255) NOT NULL DEFAULT '',
  `list` int(10) NOT NULL DEFAULT '0',
  `ifhide` tinyint(1) NOT NULL DEFAULT '0',
  `iswordlink` tinyint(1) DEFAULT '0',
  `hits` tinyint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `uid` int(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `yz` tinyint(1) NOT NULL DEFAULT '1',
  `endtime` int(10) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `yz` (`yz`,`endtime`,`ifhide`),
  KEY `city_id` (`city_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=gbk");
E_D("replace into `qb_friendlink` values('17','动网论坛','http://www.dvbbs.net/','','动网论坛','0','0','0','0','0','0','','1','0','0','0');");
E_D("replace into `qb_friendlink` values('36','易网主机','http://www.34514.cn','friendlink/34514_logo.gif','','0','0','0','0','1341996713','0','','1','0','0','0');");
E_D("replace into `qb_friendlink` values('27','WEB开发网','http://www.cncms.com.cn/','friendlink/1_20090418160451_64IKO.gif','WEB开发网','34','0','0','0','0','0','','1','0','0','0');");
E_D("replace into `qb_friendlink` values('29','中电云集','http://www.chinaccnet.com/','','中电云集','9','0','0','0','0','0','','1','0','0','0');");
E_D("replace into `qb_friendlink` values('34','CNZZ','http://www.cnzz.cn/','','CNZZ','8','0','0','0','0','0','','1','0','0','0');");
E_D("replace into `qb_friendlink` values('35','华夏名网','http://www.sudu.cn/','','','10','0','0','0','1293588992','0','','1','0','0','0');");

require("../../inc/footer.php");
?>