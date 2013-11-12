<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_menu`;");
E_C("CREATE TABLE `qb_menu` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(5) NOT NULL DEFAULT '0',
  `name` varchar(80) NOT NULL DEFAULT '',
  `linkurl` varchar(150) NOT NULL DEFAULT '',
  `color` varchar(15) NOT NULL DEFAULT '',
  `target` tinyint(1) NOT NULL DEFAULT '0',
  `moduleid` tinyint(2) NOT NULL DEFAULT '0',
  `type` tinyint(2) NOT NULL DEFAULT '0',
  `hide` tinyint(1) NOT NULL DEFAULT '0',
  `list` smallint(4) NOT NULL DEFAULT '0',
  `extend` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=gbk");
E_D("replace into `qb_menu` values('60','0','联盟合作','/hy','','0','0','0','0','8','16');");
E_D("replace into `qb_menu` values('52','0','联盟社区','/news/','','0','0','0','0','14','20');");
E_D("replace into `qb_menu` values('51','0','首页','/','','0','0','0','0','20','0');");
E_D("replace into `qb_menu` values('56','0','团购活动','/tg/','','0','0','0','0','6','28');");
E_D("replace into `qb_menu` values('88','0','需求','/buy/','','0','0','0','0','18','');");
E_D("replace into `qb_menu` values('89','0','供应','/sell/','','0','0','0','0','16','');");
E_D("replace into `qb_menu` values('90','0','整合平台','/showroom/','','0','0','0','0','12','');");
E_D("replace into `qb_menu` values('91','0','资源沙龙','/f/','','0','0','0','0','10','');");

require("../../inc/footer.php");
?>