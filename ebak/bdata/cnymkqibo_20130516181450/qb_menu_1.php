<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_menu`;");
E_C("CREATE TABLE `qb_menu` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(5) NOT NULL DEFAULT '0',
  `name` varchar(80) NOT NULL DEFAULT '',
  `linkurl` varchar(150) NOT NULL DEFAULT '',
  `color` varchar(15) NOT NULL DEFAULT '',
  `target` tinyint(1) NOT NULL DEFAULT '0',
  `moduleid` tinyint(2) NOT NULL DEFAULT '0',
  `type` tinyint(2) NOT NULL DEFAULT '0',
  `hide` tinyint(1) NOT NULL DEFAULT '0',
  `list` smallint(4) NOT NULL DEFAULT '0',
  `extend` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=gbk");
E_D("replace into `qb_menu` values('60','0','��ҳ','/hy','','0','0','0','0','16','16');");
E_D("replace into `qb_menu` values('52','0','��Ѷ','/news/','','0','0','0','0','19','20');");
E_D("replace into `qb_menu` values('51','0','��ҳ','/','','0','0','0','0','20','0');");
E_D("replace into `qb_menu` values('55','0','��Ʒ','/gift/','','0','0','0','0','12','26');");
E_D("replace into `qb_menu` values('56','0','�','/tg/','','0','0','0','0','15','28');");
E_D("replace into `qb_menu` values('57','0','����','/coupon/','','0','0','0','0','14','27');");
E_D("replace into `qb_menu` values('58','0','�̳�','/shop/','','0','0','0','0','17','29');");
E_D("replace into `qb_menu` values('59','0','����','/f/','','0','0','0','0','18','36');");
E_D("replace into `qb_menu` values('61','0','��Ƹ','/hr/','','0','0','0','0','13','31');");
E_D("replace into `qb_menu` values('62','0','�Ź�','/shoptg/','','0','0','0','0','11','37');");
E_D("replace into `qb_menu` values('63','0','����','/house/','','0','0','0','0','10','38');");
E_D("replace into `qb_menu` values('64','0','����','/dianping/','','0','0','0','0','9','39');");
E_D("replace into `qb_menu` values('65','0','�����г�','/2shou/','','0','0','0','0','8','40');");
E_D("replace into `qb_menu` values('66','0','��ͼ�ѵ�','/dianping/ditu.php','','0','0','0','0','0','');");
E_D("replace into `qb_menu` values('67','0','װ��','/zhuangxiu/','','0','0','0','0','7','50');");
E_D("replace into `qb_menu` values('74','63','��ͼ�ѷ�','/house/ditu.php','','0','0','0','0','0','');");
E_D("replace into `qb_menu` values('72','51','������Ϣ','/f/post.php','','0','0','0','0','0','');");
E_D("replace into `qb_menu` values('73','51','Ͷ�߽���','/form/form.php?mid=3','','0','0','0','0','0','');");
E_D("replace into `qb_menu` values('75','58','������Ʒ','/shop/all.php','','0','0','0','0','0','');");
E_D("replace into `qb_menu` values('76','58','������Ʒ','/shop/all.php?show_type=2','','0','0','0','0','0','');");
E_D("replace into `qb_menu` values('77','56','���»','/tg/all.php','','0','0','0','0','0','');");
E_D("replace into `qb_menu` values('78','56','���Ż','/tg/all.php?show_type=2','','0','0','0','0','0','');");
E_D("replace into `qb_menu` values('79','57','���´�����Ϣ','/coupon/all.php','','0','0','0','0','0','');");
E_D("replace into `qb_menu` values('80','57','���Ŵ�����Ϣ','/coupon/all.php?show_type=2','','0','0','0','0','0','');");
E_D("replace into `qb_menu` values('81','55','������Ʒ','/gift/all.php','','0','0','0','0','0','');");
E_D("replace into `qb_menu` values('82','55','������Ʒ','/gift/all.php?show_type=2','','0','0','0','0','0','');");
E_D("replace into `qb_menu` values('83','62','�����Ź���Ϣ','/shoptg/all.php','','0','0','0','0','0','');");
E_D("replace into `qb_menu` values('84','62','�����Ź���Ϣ','/shoptg/all.php?show_type=2','','0','0','0','0','0','');");
E_D("replace into `qb_menu` values('85','64','���ŵ�����Ϣ','/dianping/all.php?show_type=2','','0','0','0','0','0','');");
E_D("replace into `qb_menu` values('86','64','���µ�����Ϣ','/dianping/all.php','','0','0','0','0','0','');");
E_D("replace into `qb_menu` values('87','0','΢����','/wei/','','0','0','0','0','6','51');");

require("../../inc/footer.php");
?>