<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_coupon_sort`;");
E_C("CREATE TABLE `qb_coupon_sort` (
  `fid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `fup` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `class` smallint(4) NOT NULL DEFAULT '0',
  `sons` smallint(4) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `admin` varchar(100) NOT NULL DEFAULT '',
  `list` int(10) NOT NULL DEFAULT '0',
  `listorder` tinyint(2) NOT NULL DEFAULT '0',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  `logo` varchar(150) NOT NULL DEFAULT '',
  `descrip` text NOT NULL,
  `style` varchar(50) NOT NULL DEFAULT '',
  `template` text NOT NULL,
  `jumpurl` varchar(150) NOT NULL DEFAULT '',
  `maxperpage` tinyint(3) NOT NULL DEFAULT '0',
  `metatitle` varchar(250) NOT NULL DEFAULT '',
  `metakeywords` varchar(255) NOT NULL DEFAULT '',
  `metadescription` varchar(255) NOT NULL DEFAULT '',
  `allowcomment` tinyint(1) NOT NULL DEFAULT '0',
  `allowpost` varchar(150) NOT NULL DEFAULT '',
  `allowviewtitle` varchar(150) NOT NULL DEFAULT '',
  `allowviewcontent` varchar(150) NOT NULL DEFAULT '',
  `allowdownload` varchar(150) NOT NULL DEFAULT '',
  `forbidshow` tinyint(1) NOT NULL DEFAULT '0',
  `config` mediumtext NOT NULL,
  `index_show` tinyint(1) NOT NULL DEFAULT '0',
  `contents` mediumint(4) NOT NULL DEFAULT '0',
  `tableid` varchar(30) NOT NULL DEFAULT '',
  `dir_name` varchar(50) NOT NULL DEFAULT '',
  `ifcolor` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=gbk");
E_D("replace into `qb_coupon_sort` values('1','0','时尚购物','1','2','0','1','','0','0','','','','','N;','','0','','','','0','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('2','0','餐饮美食','1','2','0','1','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:1:{s:11:\"field_value\";N;}','0','0','','canyinxiuxian','0');");
E_D("replace into `qb_coupon_sort` values('3','0','休闲娱乐','1','2','0','1','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:1:{s:11:\"field_value\";N;}','0','0','','wenhuatiyu','0');");
E_D("replace into `qb_coupon_sort` values('5','0','数码影音','1','2','0','1','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:1:{s:11:\"field_value\";N;}','0','0','','shumayingyin','0');");
E_D("replace into `qb_coupon_sort` values('25','1','鲜花礼品','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('26','1','宠物服务','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('27','1','商场超市','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('28','1','护理用品','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('29','1','美发造型','1','3','0','0','','0','0','','','','','N;','','0','','','','0','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('30','1','美容美体','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('31','1','化妆品','1','3','0','0','','0','0','','','','','N;','','0','','','','0','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('32','1','服装服饰','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('33','2','咖啡馆茶楼','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('34','2','蛋糕冰淇淋','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('35','2','食品饮料','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('36','2','连锁经营','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('37','2','日韩料理','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('38','2','异国风味','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('39','2','中式餐饮','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('40','3','按摩洗浴','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('41','3','摄影婚庆','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('42','3','视听娱乐','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('43','3','迪厅酒吧','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('44','3','电影演出','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('45','3','KTV歌舞厅','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('46','5','软件游戏','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('47','5','办公用品','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('48','5','家电','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('49','5','mp3mp4','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('50','5','电脑','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('51','5','DC/DV','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_coupon_sort` values('52','5','手机','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");

require("../../inc/footer.php");
?>