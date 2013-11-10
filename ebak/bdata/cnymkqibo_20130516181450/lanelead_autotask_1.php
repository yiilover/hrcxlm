<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lanelead_autotask`;");
E_C("CREATE TABLE `lanelead_autotask` (
  `at_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `at_name` varchar(200) NOT NULL DEFAULT '',
  `at_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `at_minutetime` smallint(4) unsigned NOT NULL DEFAULT '0',
  `at_daytime` text NOT NULL,
  `at_lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `at_taskurl` varchar(200) NOT NULL DEFAULT '',
  `ifclose` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`at_id`),
  KEY `ifstop` (`ifclose`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `lanelead_autotask` values('1','后台自动定时采集','2','0','a:2:{s:3:\"h13\";s:2:\"13\";s:16:\"if_random_minute\";s:1:\"0\";}','0','__MyEC__/index.php/Gather/index/gatherall/1/runnow/1','1');");
E_D("replace into `lanelead_autotask` values('2','自动备份蓝锂系统数据库','1','60','a:1:{s:16:\"if_random_minute\";s:1:\"0\";}','0','__MyEC__/index.php/Dbbak/index/backup/1','1');");

require("../../inc/footer.php");
?>