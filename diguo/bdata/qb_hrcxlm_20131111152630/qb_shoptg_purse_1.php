<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_shoptg_purse`;");
E_C("CREATE TABLE `qb_shoptg_purse` (
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `config` text NOT NULL,
  UNIQUE KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `qb_shoptg_purse` values('1','a:14:{s:9:\"yeepay_id\";s:0:\"\";s:10:\"yeepay_key\";s:0:\"\";s:9:\"tenpay_id\";s:0:\"\";s:10:\"tenpay_key\";s:0:\"\";s:9:\"alipay_id\";s:19:\"ph80@hotmail.com\";s:10:\"alipay_key\";s:32:\"sfbhz7evj1lngiwvtid4hqoy6bl87phm\";s:14:\"alipay_partner\";s:16:\"2088302101328846\";s:14:\"alipay_service\";s:25:\"create_direct_pay_by_user\";s:16:\"alipay_transport\";s:5:\"https\";s:8:\"pay99_id\";s:0:\"\";s:9:\"pay99_key\";s:0:\"\";s:9:\"norm_send\";s:2:\"10\";s:8:\"ems_send\";s:2:\"20\";s:9:\"slow_send\";s:1:\"8\";}');");

require("../../inc/footer.php");
?>