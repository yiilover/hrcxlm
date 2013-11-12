<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_propagandize`;");
E_C("CREATE TABLE `qb_propagandize` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `newuid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `ip` bigint(11) NOT NULL DEFAULT '0',
  `day` smallint(3) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `fromurl` varchar(150) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `day` (`day`,`uid`,`ip`),
  KEY `newuid` (`newuid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `qb_propagandize` values('1','0','1','2130706433','257','1347595930','');");
E_D("replace into `qb_propagandize` values('2','42','1','3721997079','283','1381452778','×¢²áÍÆ¼öÈË');");

require("../../inc/footer.php");
?>