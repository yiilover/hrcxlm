<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_shop_join`;");
E_C("CREATE TABLE `qb_shop_join` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `cid` mediumint(7) NOT NULL DEFAULT '0',
  `cuid` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `shopnum` mediumint(7) NOT NULL DEFAULT '0',
  `ifpay` tinyint(1) NOT NULL DEFAULT '0',
  `ifsend` tinyint(1) NOT NULL DEFAULT '0',
  `totalmoney` float NOT NULL DEFAULT '0',
  `banktype` varchar(15) NOT NULL DEFAULT '',
  `emscode` varchar(32) NOT NULL DEFAULT '',
  `products` text NOT NULL,
  `rmb` float NOT NULL DEFAULT '0',
  `receive` tinyint(1) NOT NULL DEFAULT '0',
  `ifcomment` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mid` (`mid`),
  KEY `yz` (`yz`,`fid`,`mid`,`cid`),
  KEY `cuid` (`cuid`),
  KEY `cid` (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `qb_shop_join` values('1','2','8','1','0','1336368426','1','admin','0','127.0.0.1','0','1','0','900','','','8=1','0','-1','0');");
E_D("replace into `qb_shop_join` values('2','2','8','1','0','1339409452','1','admin','0','127.0.0.1','0','0','0','900','','','8=1','0','0','0');");
E_D("replace into `qb_shop_join` values('3','2','10','1','0','1382285084','1','admin','0','221.223.240.9','0','0','0','1500','','','8=1,10=1','0','0','0');");
E_D("replace into `qb_shop_join` values('4','2','10','1','0','1382285125','1','admin','0','221.223.240.9','0','0','0','600','','','10=1','0','0','0');");
E_D("replace into `qb_shop_join` values('5','2','9','1','0','1382460201','1','admin','0','222.128.147.181','0','0','0','2000','','','9=1','0','0','0');");

require("../../inc/footer.php");
?>