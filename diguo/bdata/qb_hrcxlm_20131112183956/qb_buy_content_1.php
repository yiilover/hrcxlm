<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_buy_content`;");
E_C("CREATE TABLE `qb_buy_content` (
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
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=gbk");
E_D("replace into `qb_buy_content` values('16','求购22','1','1','资金','0','0','1384269367','1384269367','1','admin','','','0','1','0','0','','127.0.0.1','0','0','','0','0','0','0','0','0');");
E_D("replace into `qb_buy_content` values('15','求购','1','2','人才','15','0','1382459482','1382459482','1','admin','','','0','1','0','0','','112.65.49.163','0','0','','0','0','1383840966','0','0','0');");
E_D("replace into `qb_buy_content` values('17','求购33333333','1','1','资金','0','0','1384269375','1384269375','1','admin','','','0','1','0','0','','127.0.0.1','0','0','','0','0','0','0','0','0');");
E_D("replace into `qb_buy_content` values('18','求购444444444','1','1','资金','0','0','1384269382','1384269382','1','admin','','','0','1','0','0','','127.0.0.1','0','0','','0','0','0','0','0','0');");
E_D("replace into `qb_buy_content` values('19','求购5555555','1','1','资金','0','0','1384269388','1384269388','1','admin','','','0','1','0','0','','127.0.0.1','0','0','','0','0','0','0','0','0');");
E_D("replace into `qb_buy_content` values('20','求购6666','1','1','资金','0','0','1384269395','1384269395','1','admin','','','0','1','0','0','','127.0.0.1','0','0','','0','0','0','0','0','0');");
E_D("replace into `qb_buy_content` values('21','求购77777','1','1','资金','0','0','1384269402','1384269402','1','admin','','','0','1','0','0','','127.0.0.1','0','0','','0','0','0','0','0','0');");
E_D("replace into `qb_buy_content` values('22','求购88888','1','1','资金','0','0','1384269411','1384269411','1','admin','','','0','1','0','0','','127.0.0.1','0','0','','0','0','0','0','0','0');");
E_D("replace into `qb_buy_content` values('23','求购99999','1','1','资金','1','0','1384269418','1384269418','1','admin','','','0','1','0','0','','127.0.0.1','0','0','','0','0','1384269421','0','0','0');");
E_D("replace into `qb_buy_content` values('24','求购ffffff','1','1','资金','0','0','1384269458','1384269458','1','admin','','','0','1','0','0','','127.0.0.1','0','0','','0','0','0','0','0','0');");

require("../../inc/footer.php");
?>