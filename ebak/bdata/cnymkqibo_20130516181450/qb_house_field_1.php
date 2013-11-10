<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_house_field`;");
E_C("CREATE TABLE `qb_house_field` (
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
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=gbk");
E_D("replace into `qb_house_field` values('1','1','����','content','mediumtext','0','11','ieedit','600','150','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('2','1','����','sortid','int','3','20','radio','0','0','1|�н�\r\n2|����','','','','0','1','1','1','','','','','31','');");
E_D("replace into `qb_house_field` values('24','2','���ڲ���','room_type','varchar','30','18','select','0','0','����һ��\r\n��������\r\n����һ��\r\n��������\r\nһ��һ��\r\nһ����\r\n��������\r\n����','','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_house_field` values('23','2','�۸�','price','int','8','19','text','12','0','','','��Ԫ','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('22','2','����','sortid','int','3','20','radio','0','0','1|�н�\r\n2|����','','','','0','1','1','1','','','','','31','');");
E_D("replace into `qb_house_field` values('21','2','����','content','mediumtext','0','11','ieedit','600','150','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('9','5','¥�̽���','content','mediumtext','0','0','ieedit','600','150','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('77','6','��ҵ����','my_234','varchar','50','0','radio','0','0','һ��\r\n����\r\n����\r\n��������','','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_house_field` values('11','6','���˽���','content','mediumtext','0','0','ieedit','400','150','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('12','6','��������','fuwu_zone','varchar','50','0','checkbox','0','0','������\r\n�ǽ�\r\n���нֵ�','','','','0','1','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('13','1','�۸�','price','int','8','19','text','12','0','','','Ԫ/��','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('14','1','���ڲ���','room_type','varchar','30','18','select','0','0','����һ��\r\n��������\r\n����һ��\r\n��������\r\nһ��һ��\r\nһ����\r\n��������\r\n����','','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_house_field` values('15','1','������ʩ','peitao','varchar','150','17','checkbox','0','0','ˮ\r\n��\r\n�绰\r\n���\r\n�ܵ�ú��\r\n����\r\n�Ҿ�','ˮ/��','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('16','1','���','acreage','varchar','12','16','text','5','0','','','ƽ����','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('17','1','װ�����','fitment','varchar','15','15','radio','0','0','��ͨװ��\r\n��װ��\r\n����װ��\r\në����','��ͨװ��','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('18','1','����¥��','floor','varchar','12','14','text','4','0','','','¥','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('19','1','��������վ','station','varchar','100','13','text','200','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('20','1','����·��','bus','varchar','50','12','text','255','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('25','2','������ʩ','peitao','varchar','150','17','checkbox','0','0','ˮ\r\n��\r\n�绰\r\n���\r\n�ܵ�ú��\r\n����\r\n�Ҿ�','ˮ/��','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('26','2','���','acreage','varchar','12','16','text','5','0','','','ƽ����','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('27','2','װ�����','fitment','varchar','15','15','radio','0','0','��ͨװ��\r\n��װ��\r\n����װ��\r\në����','��ͨװ��','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('28','2','����¥��','floor','varchar','12','14','text','4','0','','','¥','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('29','2','��������վ','station','varchar','100','13','text','200','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('30','2','����·��','bus','varchar','50','12','text','255','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('31','3','Ҫ�����','content','mediumtext','0','11','textarea','400','50','','','','���С��/¥��/λ��/�ܼ�/���/װ��/����ȷ����Ҫ��','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('33','3','�����۸�','price','varchar','20','19','text','50','0','','','Ԫ/��','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('34','3','��������','room_type','varchar','30','18','select','0','0','����һ��\r\n��������\r\n����һ��\r\n��������\r\nһ��һ��\r\nһ����\r\n��������\r\n����','','','','0','0','1','1','','','','','31','');");
E_D("replace into `qb_house_field` values('36','3','�������','acreage','varchar','20','16','text','50','0','','','ƽ����','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('37','3','����װ�����','fitment','varchar','15','15','radio','0','0','��ͨװ��\r\n��װ��\r\n����װ��','��ͨװ��','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('38','3','����¥��','floor','varchar','30','14','text','30','0','','','¥','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('41','4','Ҫ�����','content','mediumtext','0','11','textarea','400','50','','���С��/¥��/λ��/�ܼ�/���/װ��/����ȷ����Ҫ��','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('43','4','�����۸�','price','varchar','20','19','text','50','0','','','��Ԫ','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('44','4','��������','room_type','varchar','30','18','select','0','0','����һ��\r\n��������\r\n����һ��\r\n��������\r\nһ��һ��\r\nһ����\r\n��������\r\n����','','','','0','0','1','1','','','','','31','');");
E_D("replace into `qb_house_field` values('46','4','�������','acreage','varchar','20','16','text','40','0','','','ƽ����','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('47','4','����װ�����','fitment','varchar','15','15','radio','0','0','��ͨװ��\r\n��װ��\r\n����װ��\r\në����','��ͨװ��','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('48','4','����¥��','floor','varchar','12','14','text','30','0','','','¥','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('51','5','������','seller','varchar','100','0','text','200','0','','','','','0','1','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('52','5','��ַ','address','varchar','150','0','text','400','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('53','5','����ʱ��','star_sell','varchar','20','0','time','0','0','','','','','0','1','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('54','5','¥�̾���','price','int','5','0','text','100','0','','','Ԫ/ƽ��','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('55','5','�ܱ߽�ͨ','bus','varchar','250','0','text','300','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('56','5','�ܱ�����','out_peitao','mediumtext','0','0','textarea','300','150','','ѧУ:\r\n����:\r\nҽԺ:\r\n����:\r\n����:\r\n����:','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('57','5','С������','in_peitao','mediumtext','0','0','textarea','300','150','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('59','5','¥����Ƶ','videourl','varchar','100','0','text','400','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('60','5','¥����̬�붰��','house_num','varchar','30','0','text','100','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('61','5','��ռ�����','total_area','varchar','10','0','text','10','0','','','ƽ����','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('62','5','�ܽ������','room_area','varchar','10','0','text','10','0','','','ƽ����','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('63','5','¥������','roomtype','varchar','50','0','checkbox','0','0','��\r\n��Ԣ\r\n����','��','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('64','5','װ�����','fitment','varchar','30','0','radio','0','0','ë��\r\n��װ\r\n��װ','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('65','5','��ҵ��˾','my_134','varchar','100','0','text','250','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('66','5','��ҵ�����','my_523','varchar','4','0','text','8','0','','','Ԫ','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('67','5','�̻���','my_755','varchar','20','0','text','20','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('68','5','��λ��','my_898','varchar','20','0','text','30','0','','','��','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('69','5','��¥�绰','my_208','varchar','40','0','text','100','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('70','5','��¥����ַ','sell_address','varchar','100','0','text','200','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('71','5','����','zone_area','varchar','30','0','select','0','0','������\r\n������\r\n��̨��\r\n������\r\nͨ����\r\n������\r\n��ƽ��\r\n������\r\n������\r\nʯ��ɽ��\r\n��������','','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_house_field` values('72','5','����״̬','my_432','varchar','20','0','select','0','0','����\r\n����\r\n����','','','','0','0','1','1','','','','','31','');");
E_D("replace into `qb_house_field` values('73','6','�����ŵ�','store','varchar','50','0','select','100','0','���ú�\r\n��֮��\r\n��ԭ�ز�\r\n�Ұ��Ҽ�\r\n����','','','','0','0','1','1','','','','','31','');");
E_D("replace into `qb_house_field` values('76','6','ͷ��','face','varchar','150','0','upfile','0','0','','','','','0','0','0','0','','','','','31','');");

require("../../inc/footer.php");
?>