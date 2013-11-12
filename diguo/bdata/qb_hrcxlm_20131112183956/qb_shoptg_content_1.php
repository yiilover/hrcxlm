<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_shoptg_content`;");
E_C("CREATE TABLE `qb_shoptg_content` (
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
  `price` varchar(20) NOT NULL DEFAULT '',
  `join_num` mediumint(5) NOT NULL DEFAULT '0',
  `pay_num` mediumint(5) NOT NULL DEFAULT '0',
  `gg_maps` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `ispic` (`ispic`),
  KEY `city_id` (`city_id`),
  KEY `list` (`list`,`fid`,`city_id`,`yz`),
  KEY `hits` (`hits`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gbk");
E_D("replace into `qb_shoptg_content` values('10','仅售998元！原价1819元的悦来粤顺酒家“喜庆年餐”1份','1','1','饮食类','7','0','1293455884','1293455884','1','admin','','qb_shoptg_/1/1_20101227211204_mwrvk.jpg','1','1','0','0','','127.0.0.1','0','0','','0','0','1366169662','1','1','1819','0','0','39.897102666511294,116.3826079310303');");
E_D("replace into `qb_shoptg_content` values('11','仅售49元！原价135元的楹记酒楼“秋冬滋补超值鹧鸪双人套餐”1份','1','1','饮食类','13','0','1293456073','1293456073','1','admin','','qb_shoptg_/1/1_20101227211213_likqz.jpg','1','1','0','0','','127.0.0.1','0','0','','0','0','1382060773','1','1','49','0','0','39.9173811872255,116.47822331799318');");
E_D("replace into `qb_shoptg_content` values('12','仅售38元！原价79元赛百味“经典二人餐”套餐券1张','1','1','饮食类','95','0','1293456231','1293456231','1','admin','','qb_shoptg_/1/1_20101227211251_qeki2.jpg','1','1','0','0','','127.0.0.1','0','0','','0','0','1374224931','0','1','39','2','0','39.90302053580944,116.30796432495117');");

require("../../inc/footer.php");
?>