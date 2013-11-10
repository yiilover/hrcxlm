<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_gift_field`;");
E_C("CREATE TABLE `qb_gift_field` (
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
) ENGINE=MyISAM AUTO_INCREMENT=150 DEFAULT CHARSET=gbk");
E_D("replace into `qb_gift_field` values('86','1','礼品介绍','content','mediumtext','0','1','ieedit','650','250','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_gift_field` values('142','1','库存量','giftnum','int','5','7','text','5','0','','','个','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_gift_field` values('78','1','市场价格','mart_price','varchar','8','9','text','12','0','','','元','','0','1','0','0','','','','','31','');");
E_D("replace into `qb_gift_field` values('145','2','附注','content','mediumtext','0','-1','textarea','400','50','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_gift_field` values('147','2','联系人姓名','contact_name','varchar','20','10','text','100','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_gift_field` values('148','2','联系人电话','contact_phone','varchar','20','9','text','100','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_gift_field` values('149','2','收信地址','contact_address','varchar','100','8','text','200','0','','','','','0','0','0','0','','','','','31','');");

require("../../inc/footer.php");
?>