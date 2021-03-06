<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_area`;");
E_C("CREATE TABLE `qb_area` (
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
  `dirname` varchar(150) NOT NULL DEFAULT '',
  `hits` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fid`),
  KEY `fup` (`fup`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=gbk");
E_D("replace into `qb_area` values('1','0','北京','1','0','0','','20','0','','','','','','','0','','','0','','','','','0','','','0');");
E_D("replace into `qb_area` values('2','0','广东','1','0','0','','2','0','','','','','','','0','','','1','','','','','0','','','0');");
E_D("replace into `qb_area` values('3','0','浙江','1','0','0','','18','0','','','','','','','0','','','1','','','','','0','','','0');");
E_D("replace into `qb_area` values('4','0','安徽','1','0','0','','17','0','','','','','','','0','','','1','','','','','0','','','0');");
E_D("replace into `qb_area` values('5','0','福建','1','0','0','','16','0','','','','','','','0','','','1','','','','','0','','','0');");
E_D("replace into `qb_area` values('7','0','广西','1','0','0','','15','0','','','','','','','0','','','1','','','','','0','','','0');");
E_D("replace into `qb_area` values('10','0','河北','1','0','0','','14','0','','','','','','','0','','','1','','','','','0','','','0');");
E_D("replace into `qb_area` values('11','0','河南','1','0','0','','13','0','','','','','','','0','','','1','','','','','0','','','0');");
E_D("replace into `qb_area` values('12','0','黑龙江','1','0','0','','12','0','','','','','','','0','','','1','','','','','0','','','0');");
E_D("replace into `qb_area` values('13','0','湖北','1','0','0','','11','0','','','','','','','0','','','1','','','','','0','','','0');");
E_D("replace into `qb_area` values('14','0','湖南','1','0','0','','10','0','','','','','','','0','','','1','','','','','0','','','0');");
E_D("replace into `qb_area` values('15','0','吉林','1','0','0','','9','0','','','','','','','0','','','1','','','','','0','','','0');");
E_D("replace into `qb_area` values('16','0','江苏','1','0','0','','8','0','','','','','','','0','','','1','','','','','0','','','0');");
E_D("replace into `qb_area` values('17','0','江西','1','0','0','','7','0','','','','','','','0','','','1','','','','','0','','','0');");
E_D("replace into `qb_area` values('18','0','辽宁','1','0','0','','6','0','','','','','','','0','','','1','','','','','0','','','0');");
E_D("replace into `qb_area` values('19','0','内蒙古','1','0','0','','5','0','','','','','','','0','','','1','','','','','0','','','0');");
E_D("replace into `qb_area` values('20','0','天津','1','0','0','','4','0','','','','','','','0','','','0','','','','','0','','','0');");
E_D("replace into `qb_area` values('21','0','上海','1','0','0','','3','0','','','','','','','0','','','0','','','','','0','','','0');");
E_D("replace into `qb_area` values('22','0','山东','1','0','0','','19','0','','','','','','','0','','','1','','','','','0','','','0');");
E_D("replace into `qb_area` values('23','0','山西','1','0','0','','1','0','','','','','','','0','','','1','','','','','0','','','0');");
E_D("replace into `qb_area` values('29','0','全国','1','0','0','','21','0','','','','','','','0','','','1','','','','','0','','','0');");

require("../../inc/footer.php");
?>