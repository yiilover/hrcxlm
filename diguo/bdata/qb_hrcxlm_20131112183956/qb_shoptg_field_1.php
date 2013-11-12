<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_shoptg_field`;");
E_C("CREATE TABLE `qb_shoptg_field` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `mid` mediumint(5) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL DEFAULT '',
  `field_name` varchar(30) NOT NULL DEFAULT '',
  `field_type` varchar(15) NOT NULL DEFAULT '',
  `field_leng` smallint(3) NOT NULL DEFAULT '0',
  `orderlist` int(10) NOT NULL DEFAULT '0',
  `form_type` varchar(15) NOT NULL DEFAULT '',
  `field_inputwidth` smallint(3) DEFAULT NULL,
  `field_inputheight` smallint(3) NOT NULL DEFAULT '0',
  `form_set` text NOT NULL,
  `form_value` text NOT NULL,
  `form_units` varchar(30) NOT NULL DEFAULT '',
  `form_title` text NOT NULL,
  `mustfill` tinyint(1) NOT NULL DEFAULT '0',
  `listshow` tinyint(1) NOT NULL DEFAULT '0',
  `listfilter` tinyint(1) DEFAULT NULL,
  `search` tinyint(1) NOT NULL DEFAULT '0',
  `allowview` varchar(255) NOT NULL DEFAULT '',
  `allowpost` varchar(255) NOT NULL DEFAULT '',
  `js_check` text NOT NULL,
  `js_checkmsg` varchar(255) NOT NULL DEFAULT '',
  `classid` mediumint(7) NOT NULL DEFAULT '0',
  `form_js` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=160 DEFAULT CHARSET=gbk");
E_D("replace into `qb_shoptg_field` values('86','1','详细介绍','content','mediumtext','0','1','ieedit','600','250','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shoptg_field` values('151','2','支付方式','order_paytype','int','1','2','radio','0','0','1|货到付款 \r\n2|银行电汇或ATM转帐\r\n3|邮局汇款\r\n4|网上即时支付','1','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_shoptg_field` values('152','2','联系地址','order_address','varchar','100','1','text','200','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shoptg_field` values('80','1','折扣','shoptype','varchar','10','7','text','10','0','','','折','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shoptg_field` values('142','2','附注留言','content','mediumtext','0','-1','textarea','400','50','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shoptg_field` values('78','1','市场价格','market_price','varchar','10','9','text','12','0','','','元','','0','1','0','0','','','','','31','');");
E_D("replace into `qb_shoptg_field` values('77','1','最低团购人数','min_num','int','4','10','text','50','0','','','','','0','1','1','1','','','','','31','');");
E_D("replace into `qb_shoptg_field` values('145','2','联系电话','order_phone','varchar','20','8','text','100','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shoptg_field` values('144','2','顾客姓名','order_username','varchar','20','9','text','100','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shoptg_field` values('146','2','联系手机','order_mobphone','varchar','15','7','text','100','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shoptg_field` values('147','2','联系邮箱','order_email','varchar','50','6','text','100','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shoptg_field` values('148','2','联系QQ','order_qq','varchar','11','5','text','100','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shoptg_field` values('149','2','邮政编码','order_postcode','varchar','6','4','text','100','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shoptg_field` values('150','2','配送方式','order_sendtype','int','1','3','radio','0','0','1|上门取货\r\n2|平邮\r\n3|普通快递\r\n4|EMS快递','3','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shoptg_field` values('153','1','简介','about','mediumtext','0','11','textarea','400','90','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shoptg_field` values('154','1','结束日期','end_time','varchar','20','2','time','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shoptg_field` values('155','1','商家地址','address','varchar','150','0','text','500','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shoptg_field` values('156','1','订单类型','simple_order','int','1','-1','radio','0','0','0|实物订单\r\n1|电子券订单','0','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shoptg_field` values('157','1','团购提示','awake','mediumtext','0','0','ieeditsimp','500','100','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shoptg_field` values('158','1','是否支持到期退款','ifquit','int','1','0','radio','0','0','0|不支持\r\n1|支持','0','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shoptg_field` values('159','1','限购数量','limit_num','varchar','10','0','text','50','0','','','','留空或为0时则不限购','0','0','0','0','','','','','31','');");

require("../../inc/footer.php");
?>