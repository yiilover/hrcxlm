<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_dianping_field`;");
E_C("CREATE TABLE `qb_dianping_field` (
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=140 DEFAULT CHARSET=gbk");
E_D("replace into `qb_dianping_field` values('138','3','����','content','mediumtext','0','-1','textarea','500','80','','','','','0','0','0','0','','','','','31');");
E_D("replace into `qb_dianping_field` values('139','3','ӡ��','sortid','int','3','0','radio','0','0','1|��\r\n2|һ��\r\n3|����\r\n4|ͦ��\r\n5|�ܺ�','','','','0','1','1','1','','','','','31');");
E_D("replace into `qb_dianping_field` values('126','1','����','content','mediumtext','0','0','textarea','0','0','','','','','0','0','0','0','','','','','31');");
E_D("replace into `qb_dianping_field` values('127','1','�˾�����','sortid','int','3','0','radio','0','0','1|30Ԫ����\r\n2|30~50Ԫ\r\n3|50~100Ԫ\r\n4|100~150Ԫ\r\n5|150~200Ԫ\r\n6|200~300Ԫ\r\n7|300Ԫ����','1','','','0','0','1','1','','','','','0');");
E_D("replace into `qb_dianping_field` values('128','1','����','sortid2','int','3','0','radio','0','0','1|��ͥ�ۻ�\r\n2|���Գ�\r\n3|����Լ��\r\n4|����Ǣ̸\r\n5|���Ѿۻ�\r\n6|�������\r\n7|���;ۻ�','1','','','0','0','1','1','','','','','0');");
E_D("replace into `qb_dianping_field` values('129','1','ͣ��λ','my_228','int','1','0','radio','0','0','1|���\r\n2|�շ�\r\n3|��\r\n4|δ֪','4','','','0','0','1','1','','','','','1');");
E_D("replace into `qb_dianping_field` values('130','1','������·','my_837','varchar','100','0','text','30','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_dianping_field` values('131','1','��������վ','my_613','varchar','100','0','text','50','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_dianping_field` values('132','2','����','content','mediumtext','0','0','textarea','0','0','','','','','0','0','0','0','','','','','31');");
E_D("replace into `qb_dianping_field` values('133','2','�˾�����','sortid','int','3','0','radio','0','0','1|30Ԫ����\r\n2|30~50Ԫ\r\n3|50~100Ԫ\r\n4|100~150Ԫ\r\n5|150~200Ԫ\r\n6|200~300Ԫ\r\n7|300Ԫ����','1','','','0','0','1','1','','','','','0');");
E_D("replace into `qb_dianping_field` values('134','2','����','sortid2','int','3','0','radio','0','0','1|��ͥ�ۻ�\r\n2|���Գ�\r\n3|����Լ��\r\n4|����Ǣ̸\r\n5|���Ѿۻ�\r\n6|�������\r\n7|���;ۻ�','1','','','0','0','1','1','','','','','0');");
E_D("replace into `qb_dianping_field` values('135','2','ͣ��λ','my_382','int','1','0','radio','0','0','1|���\r\n2|�շ�\r\n3|��\r\n4|δ֪','4','','','0','0','1','1','','','','','0');");
E_D("replace into `qb_dianping_field` values('136','2','������·','my_835','varchar','100','0','text','30','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_dianping_field` values('137','2','��������վ','my_491','varchar','100','0','text','30','0','','','','','0','0','0','0','','','','','1');");

require("../../inc/footer.php");
?>