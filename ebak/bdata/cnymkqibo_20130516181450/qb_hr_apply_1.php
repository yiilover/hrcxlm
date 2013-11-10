<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hr_apply`;");
E_C("CREATE TABLE `qb_hr_apply` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `cid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `join_id` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `cid` (`cid`),
  KEY `join_id` (`join_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `qb_hr_apply` values('2','51','1','1','1284781155');");
E_D("replace into `qb_hr_apply` values('3','50','1','1','1284781163');");
E_D("replace into `qb_hr_apply` values('4','53','1','1','1287207635');");
E_D("replace into `qb_hr_apply` values('5','57','1','1','1288768897');");

require("../../inc/footer.php");
?>