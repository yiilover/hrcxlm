<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_tuangou_field`;");
E_C("CREATE TABLE `qb_tuangou_field` (
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
) ENGINE=MyISAM AUTO_INCREMENT=148 DEFAULT CHARSET=gbk");
E_D("replace into `qb_tuangou_field` values('88','2','��ע����','content','mediumtext','0','2','textarea','500','100','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_tuangou_field` values('86','1','����','content','mediumtext','0','1','ieedit','650','250','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_tuangou_field` values('143','2','�μ�����','join_num','varchar','10','7','text','5','0','','','��','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_tuangou_field` values('144','2','��ʵ����','realname','varchar','30','9','text','8','0','','','','','0','1','0','0','','','','','31','');");
E_D("replace into `qb_tuangou_field` values('145','2','��ϵ�绰','telphone','varchar','20','8','text','10','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_tuangou_field` values('146','1','����ʱ��','jointime','varchar','15','8','time','15','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_tuangou_field` values('147','1','������ֹʱ��','end_time','varchar','20','7','time','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_tuangou_field` values('142','1','��ص�','place','varchar','100','9','text','230','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_tuangou_field` values('77','1','�����','sortid','int','1','10','radio','0','0','1|�����Է���֯\r\n2|�̼���֯','1','','','0','1','1','1','','','','','31','');");

require("../../inc/footer.php");
?>