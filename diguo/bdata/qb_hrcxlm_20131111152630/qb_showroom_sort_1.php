<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_showroom_sort`;");
E_C("CREATE TABLE `qb_showroom_sort` (
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
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk");
E_D("replace into `qb_showroom_sort` values('1','0','采购会','1','1','0','0','','0','0','','','','','N;','','0','','','','0','','','','','0','','0','0','','','0');");
E_D("replace into `qb_showroom_sort` values('2','0','招聘会','1','1','0','0','','0','0','','','','','N;','','0','','','','0','','','','','0','','0','0','','','0');");
E_D("replace into `qb_showroom_sort` values('3','0','团购会','1','1','0','0','','0','0','','','','','N;','','0','','','','0','','','','','0','','0','0','','','0');");
E_D("replace into `qb_showroom_sort` values('4','0','咨询会','1','1','0','0','','0','0','','','','','N;','','0','','','','0','','','','','0','','0','0','','','0');");
E_D("replace into `qb_showroom_sort` values('5','0','相亲会','1','1','0','0','','0','0','','','','','N;','','0','','','','0','','','','','0','','0','0','','','0');");

require("../../inc/footer.php");
?>