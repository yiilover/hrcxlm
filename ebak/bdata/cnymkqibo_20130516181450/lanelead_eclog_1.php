<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lanelead_eclog`;");
E_C("CREATE TABLE `lanelead_eclog` (
  `logid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ec_id` mediumint(8) unsigned NOT NULL,
  `app_id` tinyint(4) unsigned NOT NULL,
  `curl` varchar(248) NOT NULL,
  `gstatus` tinyint(1) unsigned NOT NULL,
  `freason` varchar(200) NOT NULL,
  `gtime` int(10) unsigned NOT NULL,
  `taskid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>