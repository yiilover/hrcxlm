<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_tuangou_config`;");
E_C("CREATE TABLE `qb_tuangou_config` (
  `c_key` varchar(50) NOT NULL DEFAULT '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY (`c_key`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `qb_tuangou_config` values('module_id','28','');");
E_D("replace into `qb_tuangou_config` values('Info_allowpost','9','');");
E_D("replace into `qb_tuangou_config` values('Info_webOpen','1','');");
E_D("replace into `qb_tuangou_config` values('Info_ReportDB','虚假信息\r\n过期信息\r\n垃圾信息','');");
E_D("replace into `qb_tuangou_config` values('module_pre','tuangou_','');");
E_D("replace into `qb_tuangou_config` values('Info_webname','团购系统','');");
E_D("replace into `qb_tuangou_config` values('module_close','0','');");

require("../../inc/footer.php");
?>