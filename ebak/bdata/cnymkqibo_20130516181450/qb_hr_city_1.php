<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hr_city`;");
E_C("CREATE TABLE `qb_hr_city` (
  `fid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `fup` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `name` varchar(200) NOT NULL DEFAULT '',
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
  `metakeywords` varchar(255) NOT NULL DEFAULT '',
  `metadescription` varchar(255) NOT NULL DEFAULT '',
  `allowcomment` tinyint(1) NOT NULL DEFAULT '0',
  `allowpost` varchar(150) NOT NULL DEFAULT '',
  `allowviewtitle` varchar(150) NOT NULL DEFAULT '',
  `allowviewcontent` varchar(150) NOT NULL DEFAULT '',
  `allowdownload` varchar(150) NOT NULL DEFAULT '',
  `forbidshow` tinyint(1) NOT NULL DEFAULT '0',
  `config` text NOT NULL,
  PRIMARY KEY (`fid`),
  KEY `fup` (`fup`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=gbk");
E_D("replace into `qb_hr_city` values('1','0','北京','1','0','0','','0','0','','','','','','','0','','','0','','','','','0','');");
E_D("replace into `qb_hr_city` values('2','0','上海','1','0','0','','0','0','','','','','','','0','','','0','','','','','0','');");
E_D("replace into `qb_hr_city` values('3','0','广州','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('4','0','深圳','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('5','0','杭州','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('6','0','苏州','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('7','0','重庆','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('8','0','天津','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('9','0','成都','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('10','0','长沙','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('11','0','长春','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('12','0','大连','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('13','0','东莞','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('14','0','福州','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('15','0','桂林','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('16','0','贵阳','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('17','0','哈尔滨','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('18','0','合肥','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('19','0','海口','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('20','0','呼和浩特','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('21','0','济南','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('22','0','昆明','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('23','0','兰州','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('24','0','拉萨','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('25','0','南京','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('26','0','南昌','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('27','0','南宁','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('28','0','宁波','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('29','0','青岛','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('30','0','沈阳','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('31','0','石家庄','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('32','0','太原','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('33','0','武汉','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('34','0','乌鲁木齐','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('35','0','无锡','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('36','0','厦门','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('37','0','西安','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('38','0','西宁','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('39','0','银川','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('40','0','郑州','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");

require("../../inc/footer.php");
?>