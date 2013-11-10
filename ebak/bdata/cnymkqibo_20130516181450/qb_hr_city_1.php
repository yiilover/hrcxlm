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
E_D("replace into `qb_hr_city` values('1','0','����','1','0','0','','0','0','','','','','','','0','','','0','','','','','0','');");
E_D("replace into `qb_hr_city` values('2','0','�Ϻ�','1','0','0','','0','0','','','','','','','0','','','0','','','','','0','');");
E_D("replace into `qb_hr_city` values('3','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('4','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('5','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('6','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('7','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('8','0','���','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('9','0','�ɶ�','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('10','0','��ɳ','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('11','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('12','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('13','0','��ݸ','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('14','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('15','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('16','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('17','0','������','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('18','0','�Ϸ�','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('19','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('20','0','���ͺ���','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('21','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('22','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('23','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('24','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('25','0','�Ͼ�','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('26','0','�ϲ�','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('27','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('28','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('29','0','�ൺ','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('30','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('31','0','ʯ��ׯ','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('32','0','̫ԭ','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('33','0','�人','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('34','0','��³ľ��','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('35','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('36','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('37','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('38','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('39','0','����','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");
E_D("replace into `qb_hr_city` values('40','0','֣��','1','0','1','','0','0','','','','','','','0','','','1','','','','','0','');");

require("../../inc/footer.php");
?>