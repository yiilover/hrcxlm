<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_fenlei_buyad`;");
E_C("CREATE TABLE `qb_fenlei_buyad` (
  `aid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `sortid` mediumint(7) NOT NULL DEFAULT '0',
  `cityid` mediumint(7) NOT NULL DEFAULT '0',
  `id` int(10) NOT NULL DEFAULT '0',
  `mid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `begintime` int(10) NOT NULL DEFAULT '0',
  `endtime` int(10) NOT NULL DEFAULT '0',
  `money` mediumint(7) NOT NULL DEFAULT '0',
  `hits` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`aid`),
  KEY `sortid` (`sortid`,`money`,`endtime`,`cityid`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=gbk");
E_D("replace into `qb_fenlei_buyad` values('1','11','1','1','0','1','1288747862','1297387862','25','0');");
E_D("replace into `qb_fenlei_buyad` values('2','1','1','1','0','1','1288747862','1297387862','25','0');");
E_D("replace into `qb_fenlei_buyad` values('3','11','1','2','0','1','1288748053','1297388053','25','0');");
E_D("replace into `qb_fenlei_buyad` values('4','1','1','2','0','1','1288748053','1297388053','25','0');");
E_D("replace into `qb_fenlei_buyad` values('5','11','1','3','0','1','1288748274','1297388274','25','0');");
E_D("replace into `qb_fenlei_buyad` values('6','1','1','3','0','1','1288748274','1297388274','25','0');");
E_D("replace into `qb_fenlei_buyad` values('7','11','1','5','0','1','1288748451','1297388451','25','0');");
E_D("replace into `qb_fenlei_buyad` values('8','1','1','5','0','1','1288748451','1297388451','25','0');");
E_D("replace into `qb_fenlei_buyad` values('9','11','1','6','0','1','1288748551','1297388551','25','0');");
E_D("replace into `qb_fenlei_buyad` values('10','1','1','6','0','1','1288748551','1297388551','25','0');");
E_D("replace into `qb_fenlei_buyad` values('11','12','1','7','0','1','1288748680','1297388680','25','0');");
E_D("replace into `qb_fenlei_buyad` values('12','1','1','7','0','1','1288748680','1297388680','25','0');");
E_D("replace into `qb_fenlei_buyad` values('13','12','1','8','0','1','1288748767','1297388767','25','0');");
E_D("replace into `qb_fenlei_buyad` values('14','1','1','8','0','1','1288748767','1297388767','25','0');");
E_D("replace into `qb_fenlei_buyad` values('15','12','1','9','0','1','1288748853','1297388853','25','0');");
E_D("replace into `qb_fenlei_buyad` values('16','1','1','9','0','1','1288748853','1297388853','25','0');");
E_D("replace into `qb_fenlei_buyad` values('17','12','1','10','0','1','1288748955','1297388955','25','0');");
E_D("replace into `qb_fenlei_buyad` values('18','1','1','10','0','1','1288748955','1297388955','25','0');");
E_D("replace into `qb_fenlei_buyad` values('19','12','1','11','0','1','1288749091','1297389091','25','0');");
E_D("replace into `qb_fenlei_buyad` values('20','1','1','11','0','1','1288749091','1297389091','25','0');");
E_D("replace into `qb_fenlei_buyad` values('21','12','1','12','0','1','1288749185','1297389185','25','0');");
E_D("replace into `qb_fenlei_buyad` values('22','1','1','12','0','1','1288749185','1297389185','25','0');");
E_D("replace into `qb_fenlei_buyad` values('23','12','1','13','0','1','1288749284','1297389284','25','0');");
E_D("replace into `qb_fenlei_buyad` values('24','1','1','13','0','1','1288749284','1297389284','25','0');");
E_D("replace into `qb_fenlei_buyad` values('25','12','1','14','0','1','1288749389','1297389389','25','0');");
E_D("replace into `qb_fenlei_buyad` values('26','1','1','14','0','1','1288749389','1297389389','25','0');");
E_D("replace into `qb_fenlei_buyad` values('27','25','1','15','0','1','1288749504','1297389504','25','0');");
E_D("replace into `qb_fenlei_buyad` values('28','2','1','15','0','1','1288749504','1297389504','25','0');");
E_D("replace into `qb_fenlei_buyad` values('29','25','1','16','0','1','1288749586','1297389586','25','0');");
E_D("replace into `qb_fenlei_buyad` values('30','2','1','16','0','1','1288749586','1297389586','25','0');");
E_D("replace into `qb_fenlei_buyad` values('31','25','1','17','0','1','1288749657','1297389657','25','0');");
E_D("replace into `qb_fenlei_buyad` values('32','2','1','17','0','1','1288749657','1297389657','25','0');");
E_D("replace into `qb_fenlei_buyad` values('33','19','1','18','0','1','1288749841','1297389841','25','0');");
E_D("replace into `qb_fenlei_buyad` values('34','1','1','18','0','1','1288749841','1297389841','25','0');");
E_D("replace into `qb_fenlei_buyad` values('35','19','1','19','0','1','1288749918','1297389918','25','0');");
E_D("replace into `qb_fenlei_buyad` values('36','1','1','19','0','1','1288749918','1297389918','25','0');");
E_D("replace into `qb_fenlei_buyad` values('37','19','1','20','0','1','1288750024','1297390024','25','0');");
E_D("replace into `qb_fenlei_buyad` values('38','1','1','20','0','1','1288750024','1297390024','25','0');");
E_D("replace into `qb_fenlei_buyad` values('39','19','1','21','0','1','1288750130','1297390130','25','0');");
E_D("replace into `qb_fenlei_buyad` values('40','1','1','21','0','1','1288750130','1297390130','25','0');");
E_D("replace into `qb_fenlei_buyad` values('41','19','1','22','0','1','1288750213','1297390213','25','0');");
E_D("replace into `qb_fenlei_buyad` values('42','1','1','22','0','1','1288750213','1297390213','25','0');");
E_D("replace into `qb_fenlei_buyad` values('43','19','1','23','0','1','1288750318','1297390318','25','0');");
E_D("replace into `qb_fenlei_buyad` values('44','1','1','23','0','1','1288750318','1297390318','25','0');");
E_D("replace into `qb_fenlei_buyad` values('45','19','1','24','0','1','1288750366','1297390366','25','0');");
E_D("replace into `qb_fenlei_buyad` values('46','1','1','24','0','1','1288750366','1297390366','25','0');");
E_D("replace into `qb_fenlei_buyad` values('47','11','1','25','0','1','1288750509','1297390509','25','0');");
E_D("replace into `qb_fenlei_buyad` values('48','1','1','25','0','1','1288750509','1297390509','25','0');");
E_D("replace into `qb_fenlei_buyad` values('49','11','1','26','0','1','1288750587','1297390587','25','0');");
E_D("replace into `qb_fenlei_buyad` values('50','1','1','26','0','1','1288750587','1297390587','25','0');");
E_D("replace into `qb_fenlei_buyad` values('51','11','1','27','0','1','1288750643','1297390643','25','0');");
E_D("replace into `qb_fenlei_buyad` values('52','1','1','27','0','1','1288750643','1297390643','25','0');");
E_D("replace into `qb_fenlei_buyad` values('53','25','1','28','0','1','1288750739','1297390739','25','0');");
E_D("replace into `qb_fenlei_buyad` values('54','2','1','28','0','1','1288750739','1297390739','25','0');");
E_D("replace into `qb_fenlei_buyad` values('55','25','1','29','0','1','1288750820','1297390820','25','0');");
E_D("replace into `qb_fenlei_buyad` values('56','2','1','29','0','1','1288750820','1297390820','25','0');");
E_D("replace into `qb_fenlei_buyad` values('57','25','1','30','0','1','1288750891','1297390891','25','0');");
E_D("replace into `qb_fenlei_buyad` values('58','2','1','30','0','1','1288750891','1297390891','25','0');");
E_D("replace into `qb_fenlei_buyad` values('59','25','1','31','0','1','1288750945','1297390945','25','0');");
E_D("replace into `qb_fenlei_buyad` values('60','2','1','31','0','1','1288750945','1297390945','25','0');");
E_D("replace into `qb_fenlei_buyad` values('61','60','1','33','0','1','1288762758','1297402758','25','0');");
E_D("replace into `qb_fenlei_buyad` values('62','3','1','33','0','1','1288762758','1297402758','25','0');");
E_D("replace into `qb_fenlei_buyad` values('63','26','1','34','0','1','1288763234','1297403234','25','0');");
E_D("replace into `qb_fenlei_buyad` values('64','2','1','34','0','1','1288763234','1297403234','25','0');");
E_D("replace into `qb_fenlei_buyad` values('65','31','1','35','0','1','1288763344','1297403344','25','0');");
E_D("replace into `qb_fenlei_buyad` values('66','2','1','35','0','1','1288763344','1297403344','25','0');");
E_D("replace into `qb_fenlei_buyad` values('67','30','1','36','0','1','1288763474','1297403474','25','0');");
E_D("replace into `qb_fenlei_buyad` values('68','2','1','36','0','1','1288763474','1297403474','25','0');");
E_D("replace into `qb_fenlei_buyad` values('69','24','1','37','0','1','1288763579','1297403579','25','0');");
E_D("replace into `qb_fenlei_buyad` values('70','2','1','37','0','1','1288763579','1297403579','25','0');");
E_D("replace into `qb_fenlei_buyad` values('71','-1','1','27','1','1','1341904934','1350544934','20','0');");
E_D("replace into `qb_fenlei_buyad` values('72','2','1','34','6','1','1354695974','1363335974','15','0');");

require("../../inc/footer.php");
?>