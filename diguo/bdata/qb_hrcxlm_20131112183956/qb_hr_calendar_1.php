<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hr_calendar`;");
E_C("CREATE TABLE `qb_hr_calendar` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `date` varchar(255) NOT NULL,
  `cid` mediumint(7) NOT NULL DEFAULT '0',
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `qb_hr_calendar` values('1','1','2013-09-13','2','ds');");
E_D("replace into `qb_hr_calendar` values('2','38','2013-09-27','2','69');");
E_D("replace into `qb_hr_calendar` values('3','38','2013-09-30','1','888');");

require("../../inc/footer.php");
?>