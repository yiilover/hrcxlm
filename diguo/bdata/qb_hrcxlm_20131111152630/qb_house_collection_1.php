<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_house_collection`;");
E_C("CREATE TABLE `qb_house_collection` (
  `cid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `qb_house_collection` values('1','28','1','1341395695');");
E_D("replace into `qb_house_collection` values('2','33','1','1341395730');");
E_D("replace into `qb_house_collection` values('3','20','1','1341395846');");

require("../../inc/footer.php");
?>