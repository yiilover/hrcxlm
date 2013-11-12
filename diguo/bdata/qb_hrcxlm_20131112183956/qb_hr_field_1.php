<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hr_field`;");
E_C("CREATE TABLE `qb_hr_field` (
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
) ENGINE=MyISAM AUTO_INCREMENT=182 DEFAULT CHARSET=gbk");
E_D("replace into `qb_hr_field` values('147','2','���','height','int','4','14','text','50','0','','','����','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('150','2','��ҵѧУ','alma_mater','varchar','30','11','text','100','0','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('86','2','רҵ','speciality','varchar','50','12','text','50','0','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('84','2','����','age','int','2','17','text','50','0','','','��','','0','1','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('151','2','��ҵ���','graduate_time','varchar','10','10','text','50','0','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('168','2','��������','worktime','varchar','20','3','text','100','0','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('79','2','�Ա�','sex','int','1','18','radio','50','0','1|��\r\n2|Ů','1','','','0','1','1','1','','','','','1','');");
E_D("replace into `qb_hr_field` values('78','2','����','truename','varchar','20','20','text','100','0','','','','','0','1','0','0','','','','','0','');");
E_D("replace into `qb_hr_field` values('149','2','ѧ��','school_age','int','3','13','select','0','0','1|Сѧ\r\n2|����\r\n3|����\r\n4|��ר\r\n5|��ר\r\n6|����\r\n7|�о���\r\n9|��ʿ','','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_hr_field` values('152','2','�ֻ�����','mobphone','varchar','11','9','text','100','0','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('153','2','QQ����','qq','varchar','11','8','text','100','0','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('154','2','��������','email','varchar','50','7','text','100','0','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('155','2','MSN�ʺ�','msn','varchar','50','6','text','100','0','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('167','2','��������','workyear','int','2','4','select','0','0','0|Ӧ���ҵ��\r\n1|һ��\r\n2|����\r\n3|��������','0','','','0','1','1','1','','','','','31','');");
E_D("replace into `qb_hr_field` values('166','2','������������','lifeplace','varchar','50','5','text','100','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_hr_field` values('158','2','��������','education','mediumtext','0','-1','textarea','400','100','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('159','2','��������','work','mediumtext','0','-2','textarea','500','100','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('160','2','��������','introduce','mediumtext','0','-3','textarea','500','100','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('161','2','�����س�','skill','mediumtext','0','-4','textarea','500','100','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('162','2','��������','interest','mediumtext','0','-5','textarea','500','100','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('164','1','����','content','mediumtext','0','-1','textarea','500','120','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_hr_field` values('170','1','��Ƹ����','nums','int','5','0','text','50','0','','','��','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('171','1','��������Ҫ��','wageyear','int','1','0','select','0','0','1|һ������\r\n2|��������\r\n3|��������','','','','0','1','1','1','','','','','0','');");
E_D("replace into `qb_hr_field` values('172','1','�Ա�Ҫ��','asksex','int','1','0','radio','0','0','1|����\r\n2|Ů��','','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_hr_field` values('173','1','ѧ��Ҫ��','schoo_age','int','2','0','select','0','0','1|Сѧ����\r\n2|��ѧ����\r\n3|��ר����\r\n4|��������\r\n5|��ר����\r\n6|��������\r\n7|˶ʿ����\r\n8|��ʿ����','','','','0','1','1','1','','','','','0','');");
E_D("replace into `qb_hr_field` values('174','1','нˮ����','wage','int','2','0','select','0','0','-1|����\r\n1|800~1500Ԫ\r\n2|1500~2500Ԫ\r\n3|2500~3500Ԫ\r\n4|3500Ԫ����','','','','0','1','1','1','','','','','31','');");
E_D("replace into `qb_hr_field` values('175','1','��������','workplace','varchar','50','10','text','150','0','','','','','1','0','0','0','','','','','0','');");
E_D("replace into `qb_hr_field` values('176','2','����ְλ','hope_job','varchar','200','21','text','300','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_hr_field` values('177','2','��Ƭ','facephoto','varchar','100','0','onepic','0','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_hr_field` values('178','2','��������','wage','int','2','10','select','0','0','-1|����\r\n1|800~1500Ԫ\r\n2|1500~2500Ԫ\r\n3|2500~3500Ԫ\r\n4|3500Ԫ����','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_hr_field` values('179','2','ְҵ','o_id','varchar','255','0','checkbox','0','0','1|����\r\n2|��Ա\r\n3|����','','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_hr_field` values('181','2','����','date','varchar','255','0','time','0','0','','','','','0','0','0','1','','','','','31','');");
E_D("replace into `qb_hr_field` values('180','2','����','cid','int','3','0','select','0','0','1|����\r\n2|�Ϻ�\r\n3|����\r\n4|����\r\n5|����\r\n6|����\r\n7|����\r\n8|���\r\n9|�ɶ�\r\n10|��ɳ\r\n11|����\r\n12|����\r\n13|��ݸ\r\n14|����\r\n15|����\r\n16|����\r\n17|������\r\n18|�Ϸ�\r\n19|����\r\n20|���ͺ���\r\n21|����\r\n22|����\r\n23|����\r\n24|����\r\n25|�Ͼ�\r\n26|�ϲ�\r\n27|����\r\n28|����\r\n29|�ൺ\r\n30|����\r\n31|ʯ��ׯ\r\n32|̫ԭ\r\n33|�人\r\n34|��³ľ��\r\n35|����\r\n36|����\r\n37|����\r\n38|����\r\n39|����\r\n40|֣��','','','','0','0','1','0','','','','','31','');");

require("../../inc/footer.php");
?>