<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_showroom_module`;");
E_C("CREATE TABLE `qb_showroom_module` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `sort_id` mediumint(5) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `list` smallint(4) NOT NULL DEFAULT '0',
  `style` varchar(50) NOT NULL DEFAULT '',
  `config` text NOT NULL,
  `config2` text NOT NULL,
  `comment_type` tinyint(1) NOT NULL DEFAULT '0',
  `ifdp` tinyint(1) NOT NULL DEFAULT '0',
  `template` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `qb_showroom_module` values('1','0','展会模型','10','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','1','0','');");
E_D("replace into `qb_showroom_module` values('2','0','报名参加展会表单','4','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"0\";}}','','1','0','a:4:{s:4:\"list\";s:12:\"joinlist.htm\";s:4:\"show\";s:12:\"joinshow.htm\";s:4:\"post\";s:8:\"join.htm\";s:6:\"search\";s:0:\"\";}');");
E_D("replace into `qb_showroom_module` values('3','0','展览馆模型','0','','a:1:{s:9:\"moduleSet\";N;}','','0','0','a:4:{s:4:\"list\";s:13:\"list_room.htm\";s:4:\"show\";s:17:\"bencandy_room.htm\";s:4:\"post\";s:13:\"post_room.htm\";s:6:\"search\";s:0:\"\";}');");

require("../../inc/footer.php");
?>