<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hr_module`;");
E_C("CREATE TABLE `qb_hr_module` (
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `qb_hr_module` values('1','0','职位模型','0','','N;','','0','0','');");
E_D("replace into `qb_hr_module` values('2','0','简历模型','0','','a:1:{s:9:\"moduleSet\";N;}','','1','0','a:6:{s:4:\"list\";s:14:\"personlist.htm\";s:10:\"admin_list\";s:0:\"\";s:11:\"member_list\";s:0:\"\";s:4:\"show\";s:14:\"personshow.htm\";s:4:\"post\";s:10:\"person.htm\";s:6:\"search\";s:16:\"personsearch.htm\";}');");

require("../../inc/footer.php");
?>