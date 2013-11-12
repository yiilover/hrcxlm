<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_brand_field`;");
E_C("CREATE TABLE `qb_brand_field` (
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
E_D("replace into `qb_brand_field` values('88','2','介绍','content','mediumtext','0','-1','textarea','500','100','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_brand_field` values('86','1','品牌描述','content','mediumtext','0','-1','ieeditsimp','600','250','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_brand_field` values('153','2','联系电话','dl_phone','varchar','15','0','text','100','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_brand_field` values('149','2','代理商名称','dl_name','varchar','100','0','text','300','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_brand_field` values('150','2','代理商级别','dl_level','varchar','100','0','select','0','0','一级总代理\r\n二级代理\r\n三级代理\r\n其它代理','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_brand_field` values('151','2','代理商资格证书','dl_photo','varchar','100','0','onepic','0','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_brand_field` values('152','2','负责人姓名','dl_man','varchar','30','0','text','100','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_brand_field` values('148','1','品牌官网','offurl','varchar','100','9','text','300','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_brand_field` values('154','2','传真','dl_fax','varchar','15','0','text','300','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_brand_field` values('155','2','邮箱地址','dl_email','varchar','50','0','text','200','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_brand_field` values('156','2','详细地址','dl_address','varchar','150','0','text','300','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_brand_field` values('157','2','网站','dl_url','varchar','100','0','text','300','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_brand_field` values('158','1','品牌成立日期','creattime','varchar','30','8','time','0','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_brand_field` values('159','1','品牌代言人','famous_person','varchar','30','7','text','150','0','','','','','0','0','0','0','','','','','0','');");

require("../../inc/footer.php");
?>