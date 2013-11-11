<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_zhuangxiu_comments`;");
E_C("CREATE TABLE `qb_zhuangxiu_comments` (
  `cid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `cuid` int(7) NOT NULL DEFAULT '0',
  `type` tinyint(2) NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `fid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `uid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `ip` varchar(15) NOT NULL DEFAULT '',
  `icon` tinyint(3) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `flowers` smallint(4) NOT NULL DEFAULT '0',
  `egg` smallint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk");
E_D("replace into `qb_zhuangxiu_comments` values('1','1','0','15','1','1','admin','1352362549','装修公司需要信誉好、施工工艺好的，细节详谈。','127.0.0.1','0','1','1','1');");
E_D("replace into `qb_zhuangxiu_comments` values('2','1','0','15','1','1','admin','1352431177','本周日方便量房，提前电话预约，新房，结婚用的，精装','127.0.0.1','0','1','2','1');");
E_D("replace into `qb_zhuangxiu_comments` values('3','1','0','15','1','0','zhangsan','1352434415','丰台区蒲黄榆附近58平米旧房翻新','127.0.0.1','0','1','2','2');");
E_D("replace into `qb_zhuangxiu_comments` values('5','1','0','19','4','1','admin','1352702098','装修第一网结合当前的节气，并联系一些业主的经验教训，设计师从以下几方面作出提醒……','127.0.0.1','0','1','1','1');");
E_D("replace into `qb_zhuangxiu_comments` values('6','1','0','22','4','0','lisi','1352702401','以期能为宝贝们创造良好舒适的成长环境。<br> <br>','127.0.0.1','0','1','0','0');");
E_D("replace into `qb_zhuangxiu_comments` values('7','1','0','42','5','1','admin','1352787867','愿我们共同携手努力创造出更加完美的家居装饰和舒适环境。','127.0.0.1','0','1','0','0');");
E_D("replace into `qb_zhuangxiu_comments` values('8','1','0','38','5','1','admin','1352864868','北京北利祥和装饰工程有限公司','127.0.0.1','0','1','0','0');");
E_D("replace into `qb_zhuangxiu_comments` values('9','1','0','3','6','1','admin','1353314721','踏踏实实为客户做设计，<br><br>认认真真的工作！<br>','127.0.0.1','0','1','0','0');");
E_D("replace into `qb_zhuangxiu_comments` values('10','1','0','3','6','1','admin','1353314909','追求最完美的设计给客户！','127.0.0.1','0','1','0','0');");

require("../../inc/footer.php");
?>