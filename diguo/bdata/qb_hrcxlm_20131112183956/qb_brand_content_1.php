<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_brand_content`;");
E_C("CREATE TABLE `qb_brand_content` (
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
  `totaluser` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `ispic` (`ispic`),
  KEY `city_id` (`city_id`),
  KEY `list` (`list`,`fid`,`city_id`,`yz`),
  KEY `hits` (`hits`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk");
E_D("replace into `qb_brand_content` values('1','索奥斯玻璃技术','1','1','机械类','5','0','1288621337','1288621337','1','admin','','http://images.glass.cn/brand/20096/633801555128001250.jpg','1','1','1','1288621843','','127.0.0.1','0','0','0','0','1382072968','0','2');");
E_D("replace into `qb_brand_content` values('2','浙江大明玻璃','1','2','家居类','0','0','1288621429','1288621429','1','admin','','http://images.glass.cn/brand/200912/633966380281790091.jpg','1','1','1','1288621843','','127.0.0.1','0','0','0','0','0','0','0');");
E_D("replace into `qb_brand_content` values('3','犀马化工','1','3','玩具类','0','0','1288621498','1288621498','1','admin','','http://images.glass.cn/brand/20096/633801556362532500.jpg','1','1','1','1288621844','','127.0.0.1','0','0','0','0','0','0','1');");
E_D("replace into `qb_brand_content` values('4','君采玻璃','1','4','加工类','1','0','1288621556','1288621556','1','admin','','http://images.glass.cn/brand/20096/633801659935345000.jpg','1','1','1','1288621844','','127.0.0.1','0','0','0','0','1288621557','0','1');");
E_D("replace into `qb_brand_content` values('5','蓝马化工','1','5','纺织类','4','0','1288621614','1288621614','1','admin','','http://images.glass.cn/brand/20096/633801658883782500.jpg','1','1','1','1288621845','','127.0.0.1','0','0','0','0','1293511442','0','0');");
E_D("replace into `qb_brand_content` values('6','上海多林化工','1','6','医药类','1','0','1288621666','1288621666','1','admin','','http://images.glass.cn/brand/20096/633801634062220000.jpg','1','1','1','1288621845','','127.0.0.1','0','0','0','0','1293508335','0','1');");
E_D("replace into `qb_brand_content` values('7','浦江东力水晶','1','7','其它','0','0','1288621719','1288621719','1','admin','','http://images.glass.cn/brand/20096/633801613209876250.jpg','1','1','1','1288621846','','127.0.0.1','0','0','0','0','0','0','1');");
E_D("replace into `qb_brand_content` values('8','华尔润','1','7','其它','0','0','1288621810','1288621810','1','admin','','http://images.glass.cn/brand/20096/633801580613938750.jpg','1','1','1','1288621847','','127.0.0.1','0','0','0','0','0','0','1');");

require("../../inc/footer.php");
?>