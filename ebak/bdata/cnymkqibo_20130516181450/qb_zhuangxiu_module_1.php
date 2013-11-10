<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_zhuangxiu_module`;");
E_C("CREATE TABLE `qb_zhuangxiu_module` (
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
E_D("replace into `qb_zhuangxiu_module` values('1','0','装修招标','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','a:4:{s:4:\"list\";s:17:\"list_zhaobiao.htm\";s:4:\"show\";s:21:\"bencandy_zhaobiao.htm\";s:4:\"post\";s:17:\"post_zhaobiao.htm\";s:6:\"search\";s:0:\"\";}');");
E_D("replace into `qb_zhuangxiu_module` values('2','0','装修案例','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','a:4:{s:4:\"list\";s:13:\"list_demo.htm\";s:4:\"show\";s:17:\"bencandy_demo.htm\";s:4:\"post\";s:13:\"post_demo.htm\";s:6:\"search\";s:0:\"\";}');");
E_D("replace into `qb_zhuangxiu_module` values('3','0','装修日志','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','a:4:{s:4:\"list\";s:0:\"\";s:4:\"show\";s:0:\"\";s:4:\"post\";s:0:\"\";s:6:\"search\";s:0:\"\";}');");
E_D("replace into `qb_zhuangxiu_module` values('4','0','装修学堂','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','a:4:{s:4:\"list\";s:0:\"\";s:4:\"show\";s:0:\"\";s:4:\"post\";s:0:\"\";s:6:\"search\";s:0:\"\";}');");
E_D("replace into `qb_zhuangxiu_module` values('5','0','装修公司','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','a:4:{s:4:\"list\";s:16:\"list_company.htm\";s:4:\"show\";s:20:\"bencandy_company.htm\";s:4:\"post\";s:16:\"post_company.htm\";s:6:\"search\";s:0:\"\";}');");
E_D("replace into `qb_zhuangxiu_module` values('6','0','设计师','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"0\";}}','','0','0','a:4:{s:4:\"list\";s:17:\"list_designer.htm\";s:4:\"show\";s:21:\"bencandy_designer.htm\";s:4:\"post\";s:17:\"post_designer.htm\";s:6:\"search\";s:0:\"\";}');");

require("../../inc/footer.php");
?>