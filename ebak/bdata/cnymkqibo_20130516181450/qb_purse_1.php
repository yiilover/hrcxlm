<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_purse`;");
E_C("CREATE TABLE `qb_purse` (
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `config` text NOT NULL,
  UNIQUE KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `qb_purse` values('1','a:19:{s:12:\"chinabank_id\";s:0:\"\";s:13:\"chinabank_key\";s:0:\"\";s:9:\"paypal_id\";s:0:\"\";s:10:\"paypal_key\";s:0:\"\";s:11:\"paypal_type\";s:1:\"0\";s:9:\"yeepay_id\";s:10:\"fdsa@sa.cn\";s:10:\"yeepay_key\";s:0:\"\";s:9:\"tenpay_id\";s:10:\"fdsa@sa.cn\";s:10:\"tenpay_key\";s:0:\"\";s:9:\"alipay_id\";s:16:\"vip@qibosoft.com\";s:10:\"alipay_key\";s:0:\"\";s:14:\"alipay_partner\";s:16:\"2088002396170648\";s:14:\"alipay_service\";s:25:\"create_direct_pay_by_user\";s:16:\"alipay_transport\";s:5:\"https\";s:9:\"back_code\";s:90:\"62223333333333373 张三 中国工商银行北京**支行\r\n62284444444919 张三 中国农业银行北京***分行\";s:9:\"norm_send\";s:0:\"\";s:8:\"ems_send\";s:0:\"\";s:9:\"slow_send\";s:0:\"\";s:4:\"BACK\";a:2:{s:17:\"62223333333333373\";s:27:\"张三 中国工商银行北京**支行\";s:14:\"62284444444919\";s:28:\"张三 中国农业银行北京***分行\";}}');");

require("../../inc/footer.php");
?>