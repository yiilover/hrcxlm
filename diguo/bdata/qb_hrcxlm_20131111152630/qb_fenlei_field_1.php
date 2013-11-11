<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_fenlei_field`;");
E_C("CREATE TABLE `qb_fenlei_field` (
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
) ENGINE=MyISAM AUTO_INCREMENT=145 DEFAULT CHARSET=gbk");
E_D("replace into `qb_fenlei_field` values('125','6','��ע��Ϣ','content','mediumtext','0','7','textarea','0','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('124','6','�¾ɳ̶�','my_hownew','varchar','12','8','select','0','0','9����\r\n8����\r\n7����\r\n6����\r\n5����\r\n4����\r\n3����\r\n2����\r\n1����\r\nȫ��','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('122','6','ԭ��','my_outprice','int','10','10','text','5','0','','','Ԫ','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('123','6','�ּ�','my_price','int','7','9','text','5','0','','','Ԫ','','0','1','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('120','5','���ҽ���','content','mediumtext','0','3','textarea','0','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('121','6','���׷�ʽ','sortid','varchar','1','11','radio','0','0','1|���潻��\r\n2|���Ͻ���','1','','','1','1','1','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('119','5','ѧ��','schoo_age','int','1','4','select','0','0','1|Сѧ\r\n2|����\r\n3|����\r\n4|��ר\r\n5|��ר\r\n6|����\r\n7|�о���\r\n8|��ʿ����','5','','','0','1','1','1','','','','','0');");
E_D("replace into `qb_fenlei_field` values('118','5','����Ҫ��','sortid','int','1','5','radio','0','0','1|Ư��\r\n2|�ͻ�\r\n3|Ӣ��\r\n4|�Ͻ�\r\n5|��ʵ','','','','1','1','1','1','','','','','0');");
E_D("replace into `qb_fenlei_field` values('117','5','��Ȥ����','my_interest','varchar','100','6','text','50','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('116','5','����ְҵ','my_job','varchar','30','7','text','30','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('115','5','����','my_weight','varchar','15','8','text','3','0','','','����','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('114','5','���','my_height','varchar','8','9','text','3','0','','','CM','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('113','5','����','my_age','varchar','8','10','text','2','0','','','��','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('112','5','�Ա�','my_sex','varchar','4','11','radio','0','0','��\r\nŮ\r\n����','����','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('111','4','���ҽ���','content','mediumtext','0','0','textarea','0','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('110','4','������н','my_wage','varchar','30','4','select','0','0','����\r\n1000Ԫ����\r\n1000Ԫ-2000Ԫ\r\n2000Ԫ-3000Ԫ\r\n3000Ԫ-4000Ԫ\r\n4000Ԫ-5000Ԫ\r\n5000Ԫ����','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('108','4','��������','sortid','int','1','6','radio','0','0','1|Ӧ����\r\n2|һ��\r\n3|����\r\n4|��������\r\n','1','','','0','1','1','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('109','4','������������','my_workplace','varchar','50','5','text','12','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('107','4','�Ա�','my_sex','varchar','4','7','radio','0','0','��\r\nŮ\r\n����','����','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('106','4','����','my_age','varchar','8','8','text','2','0','','','��','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('105','4','ѧ��','my_schoolage','varchar','30','9','select','0','0','Сѧ\r\n����\r\n����\r\n��ר\r\n��ר\r\n����\r\n�о���\r\n��ʿ����','��ר','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('104','4','��������ְҵ','my_jobs','varchar','30','10','text','30','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('103','3','��˾����','content','mediumtext','0','0','textarea','0','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('102','3','ְλ����Ҫ��','my_jobabout','mediumtext','255','5','textarea','0','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('101','3','��н����','wage','int','1','6','select','0','0','1|����\r\n2|1000Ԫ����\r\n3|1000Ԫ-2000Ԫ\r\n4|2000Ԫ-3000Ԫ\r\n5|3000Ԫ-4000Ԫ\r\n6|4000Ԫ-5000Ԫ\r\n7|5000Ԫ����','1','','','0','1','1','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('100','3','��������','my_workplace','varchar','30','7','text','12','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('99','3','��Ƹ����','my_nums','varchar','12','8','text','5','0','','','��','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('98','3','��Ƹְλ','my_jobs','varchar','30','9','text','30','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('97','3','��Ƹ����','sortid','varchar','1','10','radio','0','0','1|ȫְ\r\n2|��ְ\r\n3|ʵϰ','1','','','0','1','1','1','','','','','0');");
E_D("replace into `qb_fenlei_field` values('96','7','��ע��Ϣ','content','mediumtext','0','0','textarea','0','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('95','7','������·','my_bus','varchar','50','4','text','12','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('94','7','��������վ','my_station','varchar','50','5','text','15','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('93','7','����¥��','my_floor','varchar','5','6','text','3','0','','','¥','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('92','7','װ�����','my_fitment','varchar','20','7','select','0','0','��ͨװ��\r\n��װ��\r\n����װ��\r\në����','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('90','7','���','my_acreage','varchar','12','9','text','5','0','','','ƽ����','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('91','7','�۸�','my_price','int','10','8','text','8','0','','','Ԫ','','0','1','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('89','7','����','sortid','int','1','10','radio','0','0','1|����\r\n2|�н�','1','','','1','1','1','1','','','','','0');");
E_D("replace into `qb_fenlei_field` values('88','2','��ϸ��Ϣ','content','mediumtext','0','2','textarea','0','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('86','1','��ע��Ϣ','content','mediumtext','0','1','ieedit','500','300','','','','','0','0','0','0','','','','','31');");
E_D("replace into `qb_fenlei_field` values('87','2','����','sortid','int','1','3','radio','0','0','1|����\r\n2|����\r\n3|��ҵ','1','','','0','1','1','1','','','','','0');");
E_D("replace into `qb_fenlei_field` values('85','1','����·��','my_bus','varchar','50','2','text','0','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('84','1','��������վ','my_station','varchar','100','3','text','0','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('83','1','����¥��','my_floor','varchar','12','4','text','4','0','','','¥','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('81','1','�������','my_acreage','varchar','12','6','text','5','0','','','ƽ����','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('82','1','װ�����','my_fitment','varchar','15','5','radio','0','0','��ͨװ��\r\n��װ��\r\n����װ��\r\në����','��ͨװ��','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('80','1','������ʩ','my_peitao','varchar','150','7','checkbox','0','0','ˮ\r\n��\r\n�绰\r\n���\r\n�ܵ�ú��\r\n����\r\n�Ҿ�','ˮ/��','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('79','1','���ڲ���','my_rooms','varchar','30','8','radio','0','0','����һ��\r\n��������\r\n����һ��\r\n��������\r\nһ��һ��\r\nһ����\r\n��������\r\n����','','','','0','1','1','0','','','','','31');");
E_D("replace into `qb_fenlei_field` values('78','1','�۸�','my_price','int','8','9','text','12','0','','','Ԫ','','0','1','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('77','1','����','sortid','int','1','10','radio','0','0','1|����\r\n2|�н�','1','','','0','1','1','1','','','','','1');");
E_D("replace into `qb_fenlei_field` values('126','13','����','content','mediumtext','0','0','textarea','0','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('127','13','�˾�����','sortid','int','3','0','radio','0','0','1|30Ԫ����\r\n2|30~50Ԫ\r\n3|50~100Ԫ\r\n4|100~150Ԫ\r\n5|150~200Ԫ\r\n6|200~300Ԫ\r\n7|300Ԫ����','1','','','0','0','1','1','','','','','0');");
E_D("replace into `qb_fenlei_field` values('128','13','����','sortid2','int','3','0','radio','0','0','1|��ͥ�ۻ�\r\n2|���Գ�\r\n3|����Լ��\r\n4|����Ǣ̸\r\n5|���Ѿۻ�\r\n6|�������\r\n7|���;ۻ�','1','','','0','0','1','1','','','','','0');");
E_D("replace into `qb_fenlei_field` values('129','13','ͣ��λ','my_228','int','1','0','radio','0','0','1|���\r\n2|�շ�\r\n3|��\r\n4|δ֪','4','','','0','0','1','1','','','','','1');");
E_D("replace into `qb_fenlei_field` values('130','13','������·','my_837','varchar','100','0','text','30','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('131','13','��������վ','my_613','varchar','100','0','text','50','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('132','14','����','content','mediumtext','0','0','textarea','0','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('133','14','�˾�����','sortid','int','3','0','radio','0','0','1|30Ԫ����\r\n2|30~50Ԫ\r\n3|50~100Ԫ\r\n4|100~150Ԫ\r\n5|150~200Ԫ\r\n6|200~300Ԫ\r\n7|300Ԫ����','1','','','0','0','1','1','','','','','0');");
E_D("replace into `qb_fenlei_field` values('134','14','����','sortid2','int','3','0','radio','0','0','1|��ͥ�ۻ�\r\n2|���Գ�\r\n3|����Լ��\r\n4|����Ǣ̸\r\n5|���Ѿۻ�\r\n6|�������\r\n7|���;ۻ�','1','','','0','0','1','1','','','','','0');");
E_D("replace into `qb_fenlei_field` values('135','14','ͣ��λ','my_382','int','1','0','radio','0','0','1|���\r\n2|�շ�\r\n3|��\r\n4|δ֪','4','','','0','0','1','1','','','','','0');");
E_D("replace into `qb_fenlei_field` values('136','14','������·','my_835','varchar','100','0','text','30','0','','','','','0','0','0','0','','','','','0');");
E_D("replace into `qb_fenlei_field` values('137','14','��������վ','my_491','varchar','100','0','text','30','0','','','','','0','0','0','0','','','','','1');");
E_D("replace into `qb_fenlei_field` values('138','15','����','content','varchar','255','0','select','400','50','ɽ��-����','','','','0','0','0','0','','','','','31');");
E_D("replace into `qb_fenlei_field` values('139','15','���','sortid','int','3','0','text','0','0','1|���һ\r\n2|����\r\n3|�����','','','','0','0','1','1','','','','','31');");
E_D("replace into `qb_fenlei_field` values('140','15','��;','my_822','varchar','255','0','text','0','0','','','','','0','0','0','0','','','','','31');");
E_D("replace into `qb_fenlei_field` values('141','15','���ṩ����','my_303','varchar','255','0','text','0','0','','','','','0','0','0','0','','','','','31');");
E_D("replace into `qb_fenlei_field` values('142','15','����','my_460','varchar','255','0','text','0','0','','','','','0','0','0','0','','','','','31');");
E_D("replace into `qb_fenlei_field` values('143','15','Ҫ��','my_391','mediumtext','0','0','textarea','0','0','','','','','0','0','0','0','','','','','31');");
E_D("replace into `qb_fenlei_field` values('144','15','����','my_404','mediumtext','0','0','ieedit','500','300','','','','','0','0','0','0','','','','','31');");

require("../../inc/footer.php");
?>