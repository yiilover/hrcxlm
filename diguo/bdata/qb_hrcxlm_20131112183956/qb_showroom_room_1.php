<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_showroom_room`;");
E_C("CREATE TABLE `qb_showroom_room` (
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
  `begintime` int(10) NOT NULL DEFAULT '0',
  `endtime` int(10) NOT NULL DEFAULT '0',
  `lastview` int(10) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  `picnum` smallint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `ispic` (`ispic`),
  KEY `city_id` (`city_id`),
  KEY `list` (`list`,`fid`,`city_id`,`yz`),
  KEY `hits` (`hits`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=gbk");
E_D("replace into `qb_showroom_room` values('15','深圳会展中心','3','0','','14','0','1288617144','1288617144','1','admin','','qb_showroom_/0/1_20101101211124_ewwhb.jpg.gif','1','1','0','0','','127.0.0.1','0','0','0','0','1383733168','4','1');");
E_D("replace into `qb_showroom_room` values('14','上海展览中心','3','0','','4','0','1288616922','1288616922','1','admin','','http://www.shzlzx.com.cn/images/ct/hyfw_litang.jpg','1','1','0','0','','127.0.0.1','0','0','0','0','1383726443','2','2');");
E_D("replace into `qb_showroom_room` values('13','琶洲展馆','3','0','','13','0','1288616618','1288616618','1','admin','','http://www.21cantonfair.com/gb2004/2008eqzg/zhangjs/xinguan20014.jpg','1','1','0','0','','127.0.0.1','0','0','0','0','1383727466','3','1');");
E_D("replace into `qb_showroom_room` values('12','东莞展览馆','3','0','','8','0','1288616451','1288616451','1','admin','','http://www.dgec.gov.cn/images/s003.jpg','1','1','0','0','','127.0.0.1','0','0','0','0','1383728723','3','2');");
E_D("replace into `qb_showroom_room` values('11','北京展览馆','3','0','','6','0','1288616199','1288616199','1','admin','','http://www.bjexpo.com/images/hysimages/12_2.jpg','1','1','0','0','','127.0.0.1','0','0','0','0','1382645684','1','3');");
E_D("replace into `qb_showroom_room` values('16','大连世界博览广场','3','0','','14','0','1288617405','1288617405','1','admin','','http://www.dl-expo.com/images/15.jpg','1','1','0','0','','127.0.0.1','0','0','0','0','1382684034','12','1');");

require("../../inc/footer.php");
?>