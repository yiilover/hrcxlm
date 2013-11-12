<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_2shou_field`;");
E_C("CREATE TABLE `qb_2shou_field` (
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `qb_2shou_field` values('1','1','��Ʒ����','content','mediumtext','0','-1','textarea','400','50','','','','','0','0','0','0','','','','','31');");
E_D("replace into `qb_2shou_field` values('2','1','�¾ɳ̶�','sortid','int','3','10','select','0','0','9|�ų���\r\n8|�˳���\r\n7|�߳���\r\n6|������\r\n5|�����\r\n4|�ĳ���\r\n3|������\r\n2|������\r\n1|һ����\r\n0|ȫ��\r\n','9','','','0','1','1','1','','','','','31');");
E_D("replace into `qb_2shou_field` values('3','1','��������','buytime','varchar','20','8','time','250','0','','','','','0','0','0','0','','','','','31');");
E_D("replace into `qb_2shou_field` values('4','1','����۸�','buyprice','int','8','7','text','50','0','','','Ԫ','','0','0','0','0','','','','','31');");
E_D("replace into `qb_2shou_field` values('5','1','���ۼ۸�','sellprice','varchar','20','9','text','50','0','','','Ԫ','','0','0','0','0','','','','','31');");
E_D("replace into `qb_2shou_field` values('6','1','���׷�ʽ','selltype','int','2','6','radio','0','0','1|���潻��\r\n2|���Ͻ���\r\n0|����','0','','','0','0','0','0','','','','','31');");

require("../../inc/footer.php");
?>