<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_wei_keyword`;");
E_C("CREATE TABLE `qb_wei_keyword` (
  `kid` mediumint(5) NOT NULL AUTO_INCREMENT,
  `keywords` varchar(30) NOT NULL DEFAULT '',
  `list` int(10) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `ifhide` tinyint(1) NOT NULL DEFAULT '0',
  `url` varchar(150) NOT NULL DEFAULT '',
  `num` smallint(4) unsigned NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  `color` varchar(7) NOT NULL DEFAULT '',
  `bold` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kid`),
  KEY `keywords` (`keywords`),
  KEY `num` (`num`),
  KEY `city_id` (`city_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=gbk");
E_D("replace into `qb_wei_keyword` values('1','美女','0','1','1','','13','0','#FF0000','0');");
E_D("replace into `qb_wei_keyword` values('10','网友','0','1','1','','13','0','','0');");
E_D("replace into `qb_wei_keyword` values('9','白富美','0','1','1','','15','0','','0');");
E_D("replace into `qb_wei_keyword` values('8','炫富','0','1','1','','12','0','#F709F7','0');");
E_D("replace into `qb_wei_keyword` values('7','富二代','0','1','1','','10','0','#3CA9C4','1');");
E_D("replace into `qb_wei_keyword` values('11','富家子弟','0','1','1','','16','0','#55AA66','1');");
E_D("replace into `qb_wei_keyword` values('12','宝马','0','1','1','','21','0','#FF0000','1');");
E_D("replace into `qb_wei_keyword` values('13','网购','0','1','1','','21','0','','0');");
E_D("replace into `qb_wei_keyword` values('14','穷小子','0','1','1','','21','0','#FF0000','0');");
E_D("replace into `qb_wei_keyword` values('15','创业','0','1','1','','18','0','','0');");
E_D("replace into `qb_wei_keyword` values('16','一夜致富','0','1','1','','15','0','#0000FF','0');");
E_D("replace into `qb_wei_keyword` values('17','汽车','0','1','1','','11','0','','0');");
E_D("replace into `qb_wei_keyword` values('18','度假','0','1','1','','13','0','#4DB34D','0');");
E_D("replace into `qb_wei_keyword` values('19','蜜月','0','1','1','','13','0','','0');");

require("../../inc/footer.php");
?>