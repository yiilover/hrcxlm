<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lanelead_urlhash`;");
E_C("CREATE TABLE `lanelead_urlhash` (
  `hs_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ec_id` mediumint(8) unsigned NOT NULL,
  `app_id` tinyint(4) unsigned NOT NULL,
  `hash` char(32) NOT NULL,
  UNIQUE KEY `hs_id` (`hs_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>