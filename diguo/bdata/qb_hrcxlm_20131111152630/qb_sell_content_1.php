<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_sell_content`;");
E_C("CREATE TABLE `qb_sell_content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `fname` varchar(50) NOT NULL DEFAULT '',
  `hits` mediumint(7) NOT NULL DEFAULT '0',
  `comments` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `list` varchar(10) NOT NULL DEFAULT '',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `titlecolor` varchar(15) NOT NULL DEFAULT '',
  `picurl` varchar(150) NOT NULL DEFAULT '',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `levels` tinyint(2) NOT NULL DEFAULT '0',
  `levelstime` int(10) NOT NULL DEFAULT '0',
  `keywords` varchar(100) NOT NULL DEFAULT '',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `lastfid` mediumint(7) NOT NULL DEFAULT '0',
  `money` mediumint(7) NOT NULL DEFAULT '0',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  `begintime` int(10) NOT NULL DEFAULT '0',
  `endtime` int(10) NOT NULL DEFAULT '0',
  `lastview` int(10) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  `picnum` smallint(4) NOT NULL DEFAULT '0',
  `price` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `ispic` (`ispic`),
  KEY `city_id` (`city_id`),
  KEY `list` (`list`,`fid`,`city_id`,`yz`),
  KEY `hits` (`hits`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=gbk");
E_D("replace into `qb_sell_content` values('16','IPO投资项目','1','2','人才','12','0','1382375946','1382375946','1','admin','','','0','1','0','0','IPO  投资','114.240.54.159','0','0','','0','0','1382468838','0','0','0');");
E_D("replace into `qb_sell_content` values('15','22222','1','1','资金','38','0','1382371696','1382371696','1','admin','','','0','1','0','0','','112.65.49.163','0','0','','0','0','1382410573','0','0','0');");
E_D("replace into `qb_sell_content` values('17','测试啊啊啊啊啊','1','1','资金','9','0','1382408666','1382408666','1','admin','','','0','1','0','0','','60.212.253.9','0','0','','0','0','1382445687','0','0','0');");
E_D("replace into `qb_sell_content` values('18','dsd','1','1','资金','5','0','1382459380','1382459380','1','admin','','','0','1','0','0','','112.65.49.163','0','0','','0','0','1383987322','0','0','0');");

require("../../inc/footer.php");
?>