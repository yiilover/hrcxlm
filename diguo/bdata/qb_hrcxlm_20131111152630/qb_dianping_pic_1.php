<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_dianping_pic`;");
E_C("CREATE TABLE `qb_dianping_pic` (
  `pid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `imgurl` varchar(150) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `id` (`id`),
  KEY `fid` (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=gbk");
E_D("replace into `qb_dianping_pic` values('1','11','46','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20101206/1291597493879.jpg','');");
E_D("replace into `qb_dianping_pic` values('2','11','46','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20101206/1291597295214.jpg','');");
E_D("replace into `qb_dianping_pic` values('3','11','46','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20101206/1291597194859.jpg','');");
E_D("replace into `qb_dianping_pic` values('4','11','46','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20101206/1291597211044.jpg','');");
E_D("replace into `qb_dianping_pic` values('5','11','46','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20101206/1291597320431.jpg','');");
E_D("replace into `qb_dianping_pic` values('6','10','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20101201/1291165135578.jpg','');");
E_D("replace into `qb_dianping_pic` values('7','10','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20101201/1291165177119.jpg','');");
E_D("replace into `qb_dianping_pic` values('8','10','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20101201/1291161351990.jpg','');");
E_D("replace into `qb_dianping_pic` values('9','10','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20101201/1291161383409.jpg','');");
E_D("replace into `qb_dianping_pic` values('10','9','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110801/1312160717237.jpg','');");
E_D("replace into `qb_dianping_pic` values('11','9','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110801/1312160892911.jpg','');");
E_D("replace into `qb_dianping_pic` values('12','9','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110801/1312160692884.jpg','');");
E_D("replace into `qb_dianping_pic` values('13','9','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110722/1311298045863.jpg','');");
E_D("replace into `qb_dianping_pic` values('14','8','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110815/1313370270986.jpg','');");
E_D("replace into `qb_dianping_pic` values('15','8','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110815/1313364094053.jpg','');");
E_D("replace into `qb_dianping_pic` values('16','8','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110815/1313364152498.jpg','');");
E_D("replace into `qb_dianping_pic` values('17','8','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110815/1313364189424.jpg','');");
E_D("replace into `qb_dianping_pic` values('18','7','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110809/1312847933053.jpg','');");
E_D("replace into `qb_dianping_pic` values('19','7','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110809/1312847892095.jpg','');");
E_D("replace into `qb_dianping_pic` values('20','7','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110809/1312847882610.jpg','');");
E_D("replace into `qb_dianping_pic` values('21','7','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110809/1312854000421.jpg','');");
E_D("replace into `qb_dianping_pic` values('22','6','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110804/1312423945955.jpg','');");
E_D("replace into `qb_dianping_pic` values('23','6','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110804/1312423916518.jpg','');");
E_D("replace into `qb_dianping_pic` values('24','6','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110804/1312424023187.jpg','');");
E_D("replace into `qb_dianping_pic` values('25','6','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110804/1312423874173.jpg','');");
E_D("replace into `qb_dianping_pic` values('26','5','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110415/1302825887456.jpg','');");
E_D("replace into `qb_dianping_pic` values('27','5','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110415/1302825776323.jpg','');");
E_D("replace into `qb_dianping_pic` values('28','5','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110415/1302825738576.jpg','');");
E_D("replace into `qb_dianping_pic` values('29','5','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110415/1302825841078.jpg','');");
E_D("replace into `qb_dianping_pic` values('30','4','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110314/1300062511813.jpg','');");
E_D("replace into `qb_dianping_pic` values('31','4','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110316/1300252714963.jpg','');");
E_D("replace into `qb_dianping_pic` values('32','4','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110321/1300682048414.jpg','');");
E_D("replace into `qb_dianping_pic` values('33','4','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110801/1312160692884.jpg','');");
E_D("replace into `qb_dianping_pic` values('34','3','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110804/1312423993091.jpg','');");
E_D("replace into `qb_dianping_pic` values('35','3','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110804/1312418029751.jpg','');");
E_D("replace into `qb_dianping_pic` values('36','3','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110804/1312423916518.jpg','');");
E_D("replace into `qb_dianping_pic` values('37','3','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110809/1312854000421.jpg','');");
E_D("replace into `qb_dianping_pic` values('38','2','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110706/1309917595854.jpg','');");
E_D("replace into `qb_dianping_pic` values('39','2','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110706/1309917573201.jpg','');");
E_D("replace into `qb_dianping_pic` values('40','2','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110706/1309912211941.jpg','');");
E_D("replace into `qb_dianping_pic` values('41','2','18','0','1','0','http://food.gznet.com/Admin/Upfile/Image/20110706/1309917643700.jpg','');");

require("../../inc/footer.php");
?>