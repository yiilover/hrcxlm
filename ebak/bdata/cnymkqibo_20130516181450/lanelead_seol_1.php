<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lanelead_seol`;");
E_C("CREATE TABLE `lanelead_seol` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `kw` varchar(50) NOT NULL DEFAULT '',
  `link` varchar(200) NOT NULL DEFAULT '',
  `style` varchar(200) NOT NULL DEFAULT '',
  `len` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `len` (`len`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>