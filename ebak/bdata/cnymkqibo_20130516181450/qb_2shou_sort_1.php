<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_2shou_sort`;");
E_C("CREATE TABLE `qb_2shou_sort` (
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
  `ifcolor` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fid`),
  KEY `mid` (`mid`),
  KEY `fup` (`fup`,`list`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=gbk");
E_D("replace into `qb_2shou_sort` values('1','0','二手家电','1','2','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('2','0','二手家具/家居','1','2','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('3','0','母婴/儿童用品','1','2','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('4','0','二手电脑/笔记本','1','2','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('5','0','数码产品','1','2','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('6','0','文体用品/艺术品/收藏品','1','2','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('7','1','电视机','1','3','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:1:{s:11:\"field_value\";N;}','1','0','','dianshiji','0');");
E_D("replace into `qb_2shou_sort` values('8','1','洗衣机','1','3','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:1:{s:11:\"field_value\";N;}','1','0','','xiyiji','0');");
E_D("replace into `qb_2shou_sort` values('9','1','空调','1','3','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:1:{s:11:\"field_value\";N;}','1','0','','kongdiao','0');");
E_D("replace into `qb_2shou_sort` values('10','1','冰箱','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('11','1','电暖气','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('12','1','热水器','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('13','2','床/床垫','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('14','2','椅子/沙发','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('15','2','柜子','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('16','2','桌子','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('17','2','居家用品/家纺','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('18','3','婴幼/儿童用品','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('19','3','玩具','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('20','3','奶粉','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('21','3','婴儿床','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('22','3','孕妇用品','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('23','4','笔记本','1','3','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:1:{s:11:\"field_value\";N;}','1','0','','bijiben','0');");
E_D("replace into `qb_2shou_sort` values('24','4','台式机','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('25','4','平板电脑','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('26','4','硬件','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('27','4','外设产品','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('28','4','无线网卡','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('29','4','显示器','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('30','4','移动硬盘','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('31','5','手机','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('32','5','数码相机','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('33','5','摄像机','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('34','5','游戏机/PSP','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('35','5','MP3/MP4','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('36','5','电子相框','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('37','6','户外用品','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('38','6','健身器材','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('39','6','文教用品','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('40','6','乐器','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_2shou_sort` values('41','6','钓鱼用具','1','3','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");

require("../../inc/footer.php");
?>