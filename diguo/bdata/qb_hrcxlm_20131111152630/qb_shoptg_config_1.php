<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_shoptg_config`;");
E_C("CREATE TABLE `qb_shoptg_config` (
  `c_key` varchar(50) NOT NULL DEFAULT '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY (`c_key`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `qb_shoptg_config` values('sort_layout','1,75#2,4#71,65#5,54#3#','');");
E_D("replace into `qb_shoptg_config` values('Info_index_cache','','');");
E_D("replace into `qb_shoptg_config` values('Info_list_cache','','');");
E_D("replace into `qb_shoptg_config` values('IF_Private_tpl','0','');");
E_D("replace into `qb_shoptg_config` values('Info_TopNum','10','');");
E_D("replace into `qb_shoptg_config` values('Info_TopDay','10','');");
E_D("replace into `qb_shoptg_config` values('Info_TopMoney','10','');");
E_D("replace into `qb_shoptg_config` values('Info_TopColor','#FF0000','');");
E_D("replace into `qb_shoptg_config` values('daili_receive','1','');");
E_D("replace into `qb_shoptg_config` values('Info_webOpen','1','');");
E_D("replace into `qb_shoptg_config` values('rmb_pay','1','');");
E_D("replace into `qb_shoptg_config` values('Info_ReportDB','违法信息\r\n过期信息\r\n垃圾信息','');");
E_D("replace into `qb_shoptg_config` values('give_send_sms','0','');");
E_D("replace into `qb_shoptg_config` values('give_send_mail','0','');");
E_D("replace into `qb_shoptg_config` values('pay_send_sms','0','');");
E_D("replace into `qb_shoptg_config` values('pay_send_mail','0','');");
E_D("replace into `qb_shoptg_config` values('pay_send_sms2Seller','0','');");
E_D("replace into `qb_shoptg_config` values('pay_send_mail2Seller','0','');");
E_D("replace into `qb_shoptg_config` values('order_send_self_sms','0','');");
E_D("replace into `qb_shoptg_config` values('order_send_sms','0','');");
E_D("replace into `qb_shoptg_config` values('order_send_mail','1','');");
E_D("replace into `qb_shoptg_config` values('order_send_msg','1','');");
E_D("replace into `qb_shoptg_config` values('UpdatePostTime','1','');");
E_D("replace into `qb_shoptg_config` values('module_close','1','');");
E_D("replace into `qb_shoptg_config` values('showNoPassComment','0','');");
E_D("replace into `qb_shoptg_config` values('PostInfoMoney','10','');");
E_D("replace into `qb_shoptg_config` values('Info_ShowNoYz','0','');");
E_D("replace into `qb_shoptg_config` values('ForbidSellerDelNoPayOrder','0','');");
E_D("replace into `qb_shoptg_config` values('ForbidDelPayOrder','0','');");
E_D("replace into `qb_shoptg_config` values('postShopTgNeedQy','0','');");
E_D("replace into `qb_shoptg_config` values('endtimeNoyz','0','');");
E_D("replace into `qb_shoptg_config` values('module_pre','shoptg_','');");
E_D("replace into `qb_shoptg_config` values('Info_allowGuesSearch','1','');");
E_D("replace into `qb_shoptg_config` values('Info_description','','');");
E_D("replace into `qb_shoptg_config` values('Info_metakeywords','','');");
E_D("replace into `qb_shoptg_config` values('module_id','37','');");
E_D("replace into `qb_shoptg_config` values('Info_webname','商家团购','');");
E_D("replace into `qb_shoptg_config` values('Private_tpl_head','','');");
E_D("replace into `qb_shoptg_config` values('Private_tpl_foot','','');");

require("../../inc/footer.php");
?>