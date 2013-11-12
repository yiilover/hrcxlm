<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_buy_config`;");
E_C("CREATE TABLE `qb_buy_config` (
  `c_key` varchar(50) NOT NULL DEFAULT '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY (`c_key`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `qb_buy_config` values('sort_layout','1,75,5#2,71,4,65#54,3#','');");
E_D("replace into `qb_buy_config` values('order_send_msg','1','');");
E_D("replace into `qb_buy_config` values('UpdatePostTime','1','');");
E_D("replace into `qb_buy_config` values('showNoPassComment','0','');");
E_D("replace into `qb_buy_config` values('Info_index_cache','','');");
E_D("replace into `qb_buy_config` values('Info_list_cache','','');");
E_D("replace into `qb_buy_config` values('Info_ShowNoYz','1','');");
E_D("replace into `qb_buy_config` values('Info_TopMoney','20','');");
E_D("replace into `qb_buy_config` values('Info_TopDay','15','');");
E_D("replace into `qb_buy_config` values('Info_TopNum','8','');");
E_D("replace into `qb_buy_config` values('PostInfoMoney','10','');");
E_D("replace into `qb_buy_config` values('module_close','0','');");
E_D("replace into `qb_buy_config` values('Info_allowGuesSearch','1','');");
E_D("replace into `qb_buy_config` values('Info_metakeywords','产品','');");
E_D("replace into `qb_buy_config` values('Info_webOpen','1','');");
E_D("replace into `qb_buy_config` values('Info_webname','求购产品','');");
E_D("replace into `qb_buy_config` values('order_send_mail','1','');");
E_D("replace into `qb_buy_config` values('Info_ReportDB','非法信息\r\n虚假信息\r\n过期信息','');");
E_D("replace into `qb_buy_config` values('module_pre','buy_','');");
E_D("replace into `qb_buy_config` values('module_id','35','');");
E_D("replace into `qb_buy_config` values('Info_TopColor','#FF0000','');");

require("../../inc/footer.php");
?>