<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_shop_content`;");
E_C("CREATE TABLE `qb_shop_content` (
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
  `sellnum` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `ispic` (`ispic`),
  KEY `city_id` (`city_id`),
  KEY `list` (`list`,`fid`,`city_id`,`yz`),
  KEY `hits` (`hits`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk");
E_D("replace into `qb_shop_content` values('1','13.3寸上网本笔记本苹果风格13.4寸笔记本电脑 凌动N450/N455','1','21','电脑','15','0','1288753253','1288753253','1','admin','','http://img03.taobaocdn.com/imgextra/i3/T1uXBuXctRXXcqqtMV_020223.jpg_310x310.jpg','1','1','0','0','','127.0.0.1','0','0','','0','0','1367944763','1','1','1260','0');");
E_D("replace into `qb_shop_content` values('2','三星 N148-DP03 全新套餐 特惠巨献 机打发票 包邮 三星笔记本','1','21','电脑','11','0','1288753418','1288753418','1','admin','','http://img03.taobaocdn.com/imgextra/i7/T1VwlwXaFFXXbSH0E8_100145.jpg_310x310.jpg','1','1','0','0','','127.0.0.1','0','0','','0','0','1367944766','1','1','2000','0');");
E_D("replace into `qb_shop_content` values('3','宏基/acer AO532h 超薄10寸上网本N450 笔记本全国联保','1','21','电脑','7','0','1288753647','1288753647','1','admin','','http://img03.taobaocdn.com/bao/uploaded/i3/T1j3xAXeNBXXa35wg3_050109.jpg_310x310.jpg','1','1','0','0','','127.0.0.1','0','0','','0','0','1367944744','1','2','6000','0');");
E_D("replace into `qb_shop_content` values('4','才990克 军工 原装正品松下 T1 T2 迅驰 二手笔记本电脑 秒上网本','1','21','电脑','7','0','1288753828','1288753828','1','admin','','http://img06.taobaocdn.com/bao/uploaded/i6/T1W2NuXallXXaaewYa_120947.jpg_310x310.jpg','1','1','0','0','','127.0.0.1','0','0','','0','0','1367944768','1','1','3000','0');");
E_D("replace into `qb_shop_content` values('5','高贵LG KG90/KG800 巧克力手机滑盖触摸特价','1','22','手机','14','0','1288753985','1288753985','1','admin','','http://img02.taobaocdn.com/bao/uploaded/i2/T1V_VIXiJeXXXpNbzb_122917.jpg_310x310.jpg','1','1','0','0','','127.0.0.1','0','0','','0','0','1367944750','1','1','300','0');");
E_D("replace into `qb_shop_content` values('6','掌上电脑 旋屏手机 触屏 +JAVA +QQ后台 +甩歌','1','22','手机','11','0','1288754067','1288754067','1','admin','','http://img03.taobaocdn.com/bao/uploaded/i7/T15QFHXnFOXXcFBFs2_042705.jpg_310x310.jpg','1','1','0','0','','127.0.0.1','0','0','','0','0','1367944752','1','1','600','0');");
E_D("replace into `qb_shop_content` values('7','数码相机 Canon/佳能A495 1000万像素 全新原装','1','23','相机','127','0','1288754153','1288754153','1','admin','','http://img03.taobaocdn.com/bao/uploaded/i3/T1JVFNXg8lXXaIVbM0_034419.jpg_310x310.jpg','1','1','0','0','','127.0.0.1','0','0','','0','0','1367944754','1','1','600','0');");
E_D("replace into `qb_shop_content` values('8','数码相机 三星ST60 1200万像素 超薄 全新原装','1','23','相机','51','0','1288754209','1288754209','1','admin','','http://img02.taobaocdn.com/bao/uploaded/i6/T1v.hDXbJpXXcCiQHX_115806.jpg_310x310.jpg','1','1','0','0','','127.0.0.1','0','0','','0','0','1367944759','1','1','900','6');");
E_D("replace into `qb_shop_content` values('9','富士S1600 富士S1770 长焦数码相机 3寸 1019元包邮送红包','1','23','相机','112','1','1288754323','1288754323','1','admin','','http://img02.taobaocdn.com/bao/uploaded/i2/T1JmtAXlplXXbjcuI2_043649.jpg_310x310.jpg','1','1','1','1290143981','','127.0.0.1','0','0','','0','0','1367944761','1','1','2000','0');");
E_D("replace into `qb_shop_content` values('10','S0NY高贵华丽之选 MP4/MP5 16G 5.0寸 滑动 触摸屏 一拍就送大礼','1','64','MP3/MP4/iPod/录音笔','693','1','1288754600','1288754600','1','admin','','http://img03.taobaocdn.com/bao/uploaded/i3/T1RTtGXiBDXXa0jpU__075239.jpg_310x310.jpg','1','1','1','1290143980','','127.0.0.1','0','8','','0','0','1367870798','0','3','600','5');");

require("../../inc/footer.php");
?>