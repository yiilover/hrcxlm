<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_rmb_infull`;");
E_C("CREATE TABLE `qb_rmb_infull` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `numcode` varchar(32) NOT NULL DEFAULT '',
  `money` float NOT NULL DEFAULT '0',
  `ifpay` tinyint(1) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(32) NOT NULL DEFAULT '',
  `banktype` varchar(15) NOT NULL DEFAULT '',
  `bank1` varchar(100) NOT NULL DEFAULT '',
  `bank2` varchar(100) NOT NULL DEFAULT '',
  `ifatm` tinyint(1) NOT NULL DEFAULT '0',
  `paytime` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `numcode` (`numcode`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `qb_rmb_infull` values('1','oybnplyqie','1','0','1355990862','1','admin','','','','0','');");

require("../../inc/footer.php");
?>