<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_brand_config`;");
E_C("CREATE TABLE `qb_brand_config` (
  `c_key` varchar(50) NOT NULL DEFAULT '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY (`c_key`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `qb_brand_config` values('Info_allowpost','3,4,8,9','');");
E_D("replace into `qb_brand_config` values('module_pre','brand_','');");
E_D("replace into `qb_brand_config` values('Info_webOpen','1','');");
E_D("replace into `qb_brand_config` values('module_id','33','');");
E_D("replace into `qb_brand_config` values('Info_webname','Ʒ��','');");

require("../../inc/footer.php");
?>