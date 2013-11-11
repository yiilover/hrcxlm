<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_showroom_db`;");
E_C("CREATE TABLE `qb_showroom_db` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gbk");
E_D("replace into `qb_showroom_db` values('1');");
E_D("replace into `qb_showroom_db` values('2');");
E_D("replace into `qb_showroom_db` values('3');");
E_D("replace into `qb_showroom_db` values('4');");
E_D("replace into `qb_showroom_db` values('5');");
E_D("replace into `qb_showroom_db` values('6');");
E_D("replace into `qb_showroom_db` values('7');");
E_D("replace into `qb_showroom_db` values('8');");
E_D("replace into `qb_showroom_db` values('9');");
E_D("replace into `qb_showroom_db` values('10');");
E_D("replace into `qb_showroom_db` values('11');");

require("../../inc/footer.php");
?>