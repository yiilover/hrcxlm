<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_members`;");
E_C("CREATE TABLE `qb_members` (
  `uid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=gbk");
E_D("replace into `qb_members` values('1','admin','6b4bf8dc3dbd313f1d3a65b179498b4f');");
E_D("replace into `qb_members` values('27','test1','42b72f913c3201fc62660d512f5ac746');");
E_D("replace into `qb_members` values('28','test2','48b83a2a920f7284c9f0e1bf03012b68');");
E_D("replace into `qb_members` values('29','test3','e12234d4575a12bfd61d61294f32b086');");
E_D("replace into `qb_members` values('30','test4','e125db4ab2e60069409c5857be05d01d');");
E_D("replace into `qb_members` values('31','test5','5b25f8c229db5db622a1b29f1ef97c34');");
E_D("replace into `qb_members` values('32','test6','8ae9db4d88e6b21cfadffbf909a2c6b1');");
E_D("replace into `qb_members` values('33','test7','cb7127945eb632e244223d3befccd92a');");
E_D("replace into `qb_members` values('34','test8','63a8d0a081205ac5966769ad0b50b218');");
E_D("replace into `qb_members` values('35','test9','cdc10f414c38f0b165c8aef0eb57f7fd');");
E_D("replace into `qb_members` values('36','test10','3960033ed2f9e184af7e5c8cc99d062c');");
E_D("replace into `qb_members` values('37','test11','16617490bce8593838933c93db5218eb');");

require("../../inc/footer.php");
?>