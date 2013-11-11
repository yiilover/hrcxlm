<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_showroom_content`;");
E_C("CREATE TABLE `qb_showroom_content` (
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
  `totaluser` mediumint(7) NOT NULL DEFAULT '0',
  `roomid` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `ispic` (`ispic`),
  KEY `city_id` (`city_id`),
  KEY `list` (`list`,`fid`,`city_id`,`yz`),
  KEY `hits` (`hits`),
  KEY `roomid` (`roomid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `qb_showroom_content` values('1','2010第七届中国(上海)国际玻璃工业新技术展览会','1','1','采购会','11','0','1288617637','1288617637','1','admin','','http://i04.c.aliimg.com/img/ibank/2010/766/919/104919667_0.jpg','1','1','0','0','','127.0.0.1','0','0','1288627200','0','1383752549','12','1','0','16');");
E_D("replace into `qb_showroom_content` values('2','中国国际建筑装饰艺术玻璃及技术博览会','1','2','招聘会','12','0','1288618117','1288618117','1','admin','','http://i02.c.aliimg.com/news/upload/5000260/news/2010/4/14/600x450_127fa337456.jpg','1','1','0','0','','127.0.0.1','0','0','1288627200','0','1383757905','4','1','0','15');");
E_D("replace into `qb_showroom_content` values('3','2011第十八届中国（北京）国际建筑装饰及材料博览会','1','3','团购会','12','0','1288618322','1288618322','1','admin','','http://i05.c.aliimg.com/news/upload/5000260/news/2010/4/14/600x450_127fa337466.jpg','1','1','0','0','','127.0.0.1','0','0','1262275200','0','1383756891','2','1','0','14');");
E_D("replace into `qb_showroom_content` values('4','第9届中国哈尔滨国际玻璃、幕墙及天花吊顶材料展览会','1','4','咨询会','6','0','1288618524','1288618524','1','admin','','http://i02.c.aliimg.com/news/upload/5000260/news/2010/4/14/600x450_127fa337478.jpg','1','1','0','0','','127.0.0.1','0','0','1264953600','0','1383755293','3','1','0','13');");

require("../../inc/footer.php");
?>