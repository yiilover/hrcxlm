<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_friendlink_sort`;");
E_C("CREATE TABLE `qb_friendlink_sort` (
  `fid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `list` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `qb_friendlink_sort` values('2','合作类','0');");
E_D("replace into `qb_friendlink_sort` values('3','付费类','0');");
E_D("replace into `qb_friendlink_sort` values('4','其它类','0');");

require("../../inc/footer.php");
?>