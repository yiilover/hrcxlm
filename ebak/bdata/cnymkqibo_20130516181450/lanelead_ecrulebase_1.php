<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lanelead_ecrulebase`;");
E_C("CREATE TABLE `lanelead_ecrulebase` (
  `rb_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `app_id` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `rb_name` varchar(80) NOT NULL,
  `rb_list` mediumint(8) NOT NULL,
  PRIMARY KEY (`rb_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `lanelead_ecrulebase` values('1','0','58同城','0');");
E_D("replace into `lanelead_ecrulebase` values('2','0','赶集网','0');");
E_D("replace into `lanelead_ecrulebase` values('3','0','阿里巴巴','0');");

require("../../inc/footer.php");
?>