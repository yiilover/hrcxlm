<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_house_class`;");
E_C("CREATE TABLE `qb_house_class` (
  `fid` int(7) NOT NULL AUTO_INCREMENT,
  `fup` int(7) NOT NULL DEFAULT '0',
  `name` varchar(60) NOT NULL DEFAULT '',
  `list` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fid`),
  KEY `fup` (`fup`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=gbk");
E_D("replace into `qb_house_class` values('31','0','��λ����','1');");
E_D("replace into `qb_house_class` values('32','31','�����/��������','0');");
E_D("replace into `qb_house_class` values('33','31','������Դ/����/��ְ��Ա','0');");
E_D("replace into `qb_house_class` values('34','31','ҽ������/���ݱ���','0');");
E_D("replace into `qb_house_class` values('38','34','��ʿ/������Ա','0');");
E_D("replace into `qb_house_class` values('37','34','ҽ��/ҽʦ','0');");
E_D("replace into `qb_house_class` values('39','33','��Ա/����','0');");
E_D("replace into `qb_house_class` values('40','33','����/������Դ�ܼ�','0');");
E_D("replace into `qb_house_class` values('41','32','�������ʦ','0');");
E_D("replace into `qb_house_class` values('42','32','Ӳ������ʦ','0');");

require("../../inc/footer.php");
?>