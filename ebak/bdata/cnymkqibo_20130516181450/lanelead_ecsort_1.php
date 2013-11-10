<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lanelead_ecsort`;");
E_C("CREATE TABLE `lanelead_ecsort` (
  `ec_sid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `app_id` tinyint(4) unsigned NOT NULL,
  `cs_name` varchar(80) NOT NULL,
  `cs_list` mediumint(8) NOT NULL,
  PRIMARY KEY (`ec_sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>