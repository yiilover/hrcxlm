<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_shop_field`;");
E_C("CREATE TABLE `qb_shop_field` (
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
) ENGINE=MyISAM AUTO_INCREMENT=156 DEFAULT CHARSET=gbk");
E_D("replace into `qb_shop_field` values('86','1','��Ʒ����','content','mediumtext','0','1','ieedit','600','250','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shop_field` values('151','2','֧����ʽ','order_paytype','int','1','2','radio','0','0','1|�������� \r\n2|���е���ATMת��\r\n3|�ʾֻ��\r\n4|���ϼ�ʱ֧��','1','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_shop_field` values('152','2','��ϵ��ַ','order_address','varchar','100','1','text','200','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shop_field` values('80','1','�ͺ�','shoptype','varchar','50','7','text','10','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shop_field` values('142','2','��ע����','content','mediumtext','0','-1','textarea','400','50','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shop_field` values('78','1','�г��۸�','market_price','varchar','10','9','text','12','0','','','Ԫ','','0','1','0','0','','','','','31','');");
E_D("replace into `qb_shop_field` values('145','2','��ϵ�绰','order_phone','varchar','20','8','text','100','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shop_field` values('144','2','�˿�����','order_username','varchar','20','9','text','100','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shop_field` values('146','2','��ϵ�ֻ�','order_mobphone','varchar','15','7','text','100','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shop_field` values('147','2','��ϵ����','order_email','varchar','50','6','text','100','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shop_field` values('148','2','��ϵQQ','order_qq','varchar','11','5','text','100','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shop_field` values('149','2','��������','order_postcode','varchar','6','4','text','100','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shop_field` values('150','2','���ͷ�ʽ','order_sendtype','int','1','3','radio','0','0','1|����ȡ��\r\n2|ƽ��\r\n3|��ͨ���\r\n4|EMS���','3','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_shop_field` values('153','1','�����','storage','int','7','6','text','50','0','','999','','','0','0','0','0','','','','','31','');");

require("../../inc/footer.php");
?>