<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_form_config`;");
E_C("CREATE TABLE `qb_form_config` (
  `c_key` varchar(50) NOT NULL DEFAULT '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY (`c_key`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `qb_form_config` values('module_id','21','');");
E_D("replace into `qb_form_config` values('module_pre','form_','');");
E_D("replace into `qb_form_config` values('Info_webOpen','1','');");
E_D("replace into `qb_form_config` values('Info_webname','���ܱ�','');");

require("../../inc/footer.php");
?>