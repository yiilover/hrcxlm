<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_sell_content_1`;");
E_C("CREATE TABLE `qb_sell_content_1` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_year` varchar(255) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_title` varchar(255) NOT NULL,
  `contact_tel` varchar(255) NOT NULL,
  `contact_birth` varchar(20) NOT NULL,
  `idcard` varchar(30) NOT NULL,
  `contact_mob` varchar(30) NOT NULL,
  `qq` varchar(30) NOT NULL,
  `contact_address` varchar(255) NOT NULL,
  `company_area` varchar(255) NOT NULL,
  `company_staffnum` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_engagement` varchar(255) NOT NULL,
  `company_profit` varchar(30) NOT NULL,
  `sort_config` varchar(255) NOT NULL,
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `qb_sell_content_1` values('3','16','2','1','<p>\r\n	��Ҫ����/�ƶ�������/����˲�\r\n</p>','ɽ����','2006','С��','����','01028750553','2013-10-16','274657254827456212512','18802345678','1234567','�����к�����','IT','12','1234567@126.com','�����������վ���衢app','200','�ʽ�/��Ŀ/�˲�/����/����');");
E_D("replace into `qb_sell_content_1` values('2','15','1','1','<strong><span style=\"background-color:#E56600;\">dsdddddddddddddddd</span></strong>','wwwwwwww','1990','ew','wew','dd','2013-10-09','12343','323','22','rr','tt','32','3ewew@qq','dsdss','34,000','�ʽ�/��Ŀ/�˲�/����/��ѵ');");
E_D("replace into `qb_sell_content_1` values('4','17','1','1','11111111111111','���԰���������','���԰���������','���԰���������','���԰���������','13181148765','2013-10-02','371082199211065913','13181148765','434546779','ɽ������','��˹��','10','13181148765@hrcxlm.cn','1111','1111','�ʽ�/��Ŀ/�˲�/����/��ѵ/����/ý��/����������/��������');");
E_D("replace into `qb_sell_content_1` values('5','18','1','1','<span style=\"color:#CC33E5;\">dsds</span>','rrr','1990','ew','fd','23232','2013-10-08','12343','1234','22','rr','fff','322','fdf@','cccc','34,000','ý��/����������');");

require("../../inc/footer.php");
?>