<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_zhuangxiu_field`;");
E_C("CREATE TABLE `qb_zhuangxiu_field` (
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
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=gbk");
E_D("replace into `qb_zhuangxiu_field` values('1','1','����Ҫ��','content','mediumtext','0','11','ieeditsimp','600','150','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('2','1','��Ŀ����','sortid','int','3','20','radio','0','0','1|��ͨסլ\r\n2|����\r\n3|�칫¥\r\n4|����','1','','','1','1','1','1','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('84','2','�������ʦ','designer','varchar','50','0','text','200','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('22','2','װ�޷���','sortid','int','3','20','radio','0','0','1|��ͨסլ\r\n2|����\r\n3|����','1','','','0','1','1','1','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('21','2','װ�ް�������','content','mediumtext','0','-1','ieeditsimp','600','150','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('9','5','��˾����','content','mediumtext','0','-1','ieedit','600','200','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('77','6','��ҵ����','experience','varchar','50','0','radio','0','0','һ��\r\n����\r\n����\r\n��������','һ��','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('11','6','���˽���','content','mediumtext','0','-1','ieeditsimp','600','150','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('12','6','����װ�޹�˾','in_company','varchar','100','0','text','200','0','','','','','0','1','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('13','1','Ԥ���Ǯ','price','int','2','19','select','0','0','1|5000Ԫ����\r\n2|1��Ԫ����\r\n3|2��Ԫ����\r\n4|3��Ԫ����\r\n5|4��Ԫ����\r\n3|5��Ԫ����\r\n7|����','','','','0','1','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('14','1','װ�޷�ʽ','supply_type','int','1','18','radio','0','0','1|ȫ��\r\n2|���','1','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('16','1','װ�����','acreage','varchar','12','16','text','5','0','','','ƽ����','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('19','1','����λ��','station','varchar','100','13','text','300','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('86','2','��Ʒ��','design_style','int','2','0','radio','0','0','1|��Լ\r\n2|�ִ�\r\n3|��ʽ\r\n4|ŷʽ\r\n5|��ʽ\r\n6|��԰\r\n7|�ŵ�\r\n8|���\r\n9|���к�','2','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('87','2','װ�����','total_price','varchar','10','0','text','100','0','','','��Ԫ','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('88','2','װ�����','acreage','varchar','10','0','text','100','0','','','ƽ����','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('31','3','����','content','mediumtext','0','-1','ieedit','400','300','','','','','1','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('92','3','����','sortid','int','2','1','radio','0','0','1|װ��ǰ\r\n2|װ����\r\n3|װ�޺�','','','','1','0','1','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('41','4','����','content','mediumtext','0','-1','ieedit','400','300','','','','','1','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('91','4','����','sortid','int','2','1','radio','0','0','1|����ѡ��\r\n2|װ�޳�ʶ\r\n3|Ʒζ����\r\n4|���ָ��\r\n5|װ�޹���\r\n6|��װ��Ⱦ','','','','1','1','1','1','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('52','5','��˾��ַ','address','varchar','150','-2','text','400','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('81','6','���ר��','skill','varchar','100','0','checkbox','0','0','��ͨסլ\r\nд��¥\r\n����\r\nר��չʾ��\r\n�Ƶ����\r\n�����ư�\r\n�������\r\n����','��ͨסլ','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('94','6','������˾ID(���ر���)','company_id','int','10','0','text','0','0','','','','ע�⣺�ñ��������ر�����ϵͳҪ�õ����벻Ҫɾ���������޸ģ���Ȼҳ���Ͽ�����','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('83','6','�������','design_goal','varchar','200','0','text','300','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('80','5','װ�޷��','build_style','varchar','100','0','checkbox','0','0','��Լ\r\n�ִ�\r\n��ʽ\r\nŷʽ\r\n��ʽ\r\n��԰\r\n�ŵ�\r\n���\r\n���к�','��Լ/�ִ�','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('79','5','��ҵװ��','business_type','varchar','100','0','checkbox','0','0','KTV\r\n����\r\n����/��¥\r\n����/����\r\n���ֳ���\r\n�Ƶ�\r\nչ��\r\n����\r\nд��¥\r\nѧУ\r\nҽԺ','����','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('93','2','�������ʦID(���ر���)','designer_id','int','10','0','text','0','0','','','','ע�⣺�ñ��������ر�����ϵͳҪ�õ����벻Ҫɾ���������޸ģ���Ȼҳ���Ͽ�����','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('82','6','��Ʒ��','design_style','varchar','100','0','checkbox','0','0','��Լ\r\n�ִ�\r\n��ʽ\r\nŷʽ\r\n��ʽ\r\n��԰\r\n�ŵ�\r\n���\r\n���к�','��Լ/�ִ�','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('78','5','��ͥװ��','home_type','varchar','100','0','checkbox','0','0','С����\r\n��Ԣ\r\n����\r\n��ͨסլ\r\n�ֲ�װ��','С����/��ͨסլ/�ֲ�װ��','','','0','0','1','0','','','','','31','');");

require("../../inc/footer.php");
?>