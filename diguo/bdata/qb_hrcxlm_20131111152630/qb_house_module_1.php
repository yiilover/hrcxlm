<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_house_module`;");
E_C("CREATE TABLE `qb_house_module` (
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `qb_house_module` values('1','0','出租','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','a:4:{s:4:\"list\";s:14:\"list_chuzu.htm\";s:4:\"show\";s:18:\"bencandy_chuzu.htm\";s:4:\"post\";s:14:\"post_chuzu.htm\";s:6:\"search\";s:0:\"\";}');");
E_D("replace into `qb_house_module` values('2','0','出售','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','a:4:{s:4:\"list\";s:13:\"list_sell.htm\";s:4:\"show\";s:17:\"bencandy_sell.htm\";s:4:\"post\";s:13:\"post_sell.htm\";s:6:\"search\";s:0:\"\";}');");
E_D("replace into `qb_house_module` values('3','0','求租','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','a:4:{s:4:\"list\";s:0:\"\";s:4:\"show\";s:0:\"\";s:4:\"post\";s:0:\"\";s:6:\"search\";s:0:\"\";}');");
E_D("replace into `qb_house_module` values('4','0','求购','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','a:4:{s:4:\"list\";s:0:\"\";s:4:\"show\";s:0:\"\";s:4:\"post\";s:0:\"\";s:6:\"search\";s:0:\"\";}');");
E_D("replace into `qb_house_module` values('5','0','楼盘','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','a:4:{s:4:\"list\";s:15:\"list_xiaoqu.htm\";s:4:\"show\";s:19:\"bencandy_xiaoqu.htm\";s:4:\"post\";s:15:\"post_xiaoqu.htm\";s:6:\"search\";s:0:\"\";}');");
E_D("replace into `qb_house_module` values('6','0','中介','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"0\";}}','','0','0','a:4:{s:4:\"list\";s:17:\"list_zhongjie.htm\";s:4:\"show\";s:21:\"bencandy_zhongjie.htm\";s:4:\"post\";s:17:\"post_zhongjie.htm\";s:6:\"search\";s:0:\"\";}');");

require("../../inc/footer.php");
?>