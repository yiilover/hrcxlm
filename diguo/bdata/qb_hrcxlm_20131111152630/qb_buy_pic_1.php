<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_buy_pic`;");
E_C("CREATE TABLE `qb_buy_pic` (
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk");
E_D("replace into `qb_buy_pic` values('1','1','11','0','1','0','http://i00.c.aliimg.com/img/product/70/97/31/70973167.jpg','');");
E_D("replace into `qb_buy_pic` values('2','2','11','0','1','0','http://i01.c.aliimg.com/img/product/33/21/99/33219975.jpg','');");
E_D("replace into `qb_buy_pic` values('3','3','21','0','1','0','http://i02.c.aliimg.com/img/offer/19/39/46/69/19394669-2.310x310.jpg','');");
E_D("replace into `qb_buy_pic` values('4','4','33','0','1','0','http://i04.c.aliimg.com/img/ibank/2010/562/548/203845265_1777718237.310x310.jpg','');");
E_D("replace into `qb_buy_pic` values('5','5','46','0','1','0','http://i03.c.aliimg.com/img/offer/33/24/15/40/7/332415407-2.310x310.jpg','');");
E_D("replace into `qb_buy_pic` values('6','6','59','0','1','0','http://i00.c.aliimg.com/img/offer/56/28/57/26/7/562857267.310x310.jpg','');");
E_D("replace into `qb_buy_pic` values('7','7','87','0','1','0','http://i04.c.aliimg.com/img/offer/50/94/67/51/2/509467512.310x310.jpg','');");
E_D("replace into `qb_buy_pic` values('8','8','87','0','1','0','http://i01.c.aliimg.com/img/offer2/2010/075/210/91075210_0eb64d7b2064ea5f5cfc34ecfd9156af.310x310.jpg','');");

require("../../inc/footer.php");
?>