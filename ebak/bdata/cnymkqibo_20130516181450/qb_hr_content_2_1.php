<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hr_content_2`;");
E_C("CREATE TABLE `qb_hr_content_2` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `speciality` varchar(50) NOT NULL DEFAULT '',
  `age` tinyint(2) NOT NULL DEFAULT '0',
  `sex` tinyint(1) NOT NULL DEFAULT '0',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `height` int(4) NOT NULL DEFAULT '0',
  `school_age` tinyint(3) NOT NULL DEFAULT '0',
  `alma_mater` varchar(30) NOT NULL DEFAULT '',
  `graduate_time` varchar(10) NOT NULL DEFAULT '',
  `mobphone` varchar(11) NOT NULL DEFAULT '',
  `qq` varchar(11) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `education` mediumtext NOT NULL,
  `work` mediumtext NOT NULL,
  `introduce` mediumtext NOT NULL,
  `skill` mediumtext NOT NULL,
  `interest` mediumtext NOT NULL,
  `lifeplace` varchar(50) NOT NULL DEFAULT '',
  `workyear` tinyint(2) NOT NULL DEFAULT '0',
  `worktime` varchar(20) NOT NULL DEFAULT '',
  `hope_job` varchar(200) NOT NULL DEFAULT '',
  `facephoto` varchar(100) NOT NULL DEFAULT '',
  `wage` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sex` (`sex`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk");
E_D("replace into `qb_hr_content_2` values('1','1','1','Ӣ��','25','1','������','157','4','ï��ѧԺ','1982','13365874577','55651225','fdsag@ac.cn','fsda@adf.cn','��ѧ\r\nСѧ','ûʲô','ţ��һ��','��Զ','��ˮ','����','2','��ʱ','�������','qb_hr_/0/1_20101102111157_hlxdx.jpg','-1');");
E_D("replace into `qb_hr_content_2` values('2','2','14','����','26','2','������','187','2','��������ѧ','2002','15874125478','52145687','vcdsfd@dsa.cn','fdsa@dfa.cn','Сѧ:����Сѧ\r\n��ѧ:�ǽ���ѧ\r\n��ѧ:������ѧ','��һ��,��������\r\n�ڶ���,�Ѻ��ɹ�','����һ��ţ��Ŷ\r\n�ǲ���ѽ','����\r\n��','û��ʲô,���õ�.','����','2','��ʱ','����','qb_hr_/0/14_20101009111006_gfye0.jpg','1');");
E_D("replace into `qb_hr_content_2` values('3','3','29','�г�','29','1','��̫��','175','4','����ʦ����ѧ','1999','15878745874','58745457','fdsaf@dsa.cn','25saf@dsa.cn','2001-2004��,�Ͷ��ڻ�����ѧ\r\n1998-2001��,�Ͷ��ڻ���Сѧ','�����׹���������','�Կ�����\r\nƴ������','�г�Ԥ��\r\n�г�����','��Ƥ��\r\n������','����','2','��ʱ','������۹���ʦ','qb_hr_/0/29_20101102111131_caqee.jpg','3');");
E_D("replace into `qb_hr_content_2` values('4','4','27','�����','31','1','�Ʊ�','185','1','��ɽ��ѧ','2001','15987777777','254114','fds@dsa.cn','0fds@dsa.cn','1998-2000���ϸ�С\r\n2001-2004����ʦ����ѧ','2000�����Ѻ�������\r\n2005�������˹�����','�Կ�����\r\nƴ������','���������\r\n��Ϸ����','������\r\n��Ӿ','�Ϻ�','2','һ����','�������ʦ','qb_hr_/0/27_20101102101131_m6scp.gif','4');");
E_D("replace into `qb_hr_content_2` values('5','5','28','�г�','23','2','����','165','4','���ϴ�ѧ','2001','15371111111','5478445','fds@dsa.cn','fds@dsa.cn','2001-2004����ʦ��Ժ��ѧ\r\n1998-2000��,���ϸ�С','�������׹�����3��ͷ�\r\n�������˹�����5��ͷ�','�Կ�����\r\nƴ������','�ͷ��ۺ����\r\n\r\n�Ӵ�����','����\r\n��Ӿ','����','1','��ʱ','�ͷ�����','qb_hr_/0/28_20101102111115_mn7ex.jpg','2');");
E_D("replace into `qb_hr_content_2` values('6','6','31','�г�','28','2','�Ŵ���','164','3','�����ѧ','1998','15355555555','456456546','fdsafsd@dsa.cn','0fdsafsd@dsa.cn','2001-2002����ʦ��ԺУ�Ͷ�\r\n1998-1999���ڸ�С�Ͷ�','ȥ�����Ѻ�������\r\nǰ�������˹�����','�Կ�����\r\nƴ������','�����,\r\n�г�����','������\r\n������','����','1','��ʱ','��������','qb_hr_/0/31_20101102111115_yrnp5.jpg','-1');");
E_D("replace into `qb_hr_content_2` values('7','7','32','����','23','1','��С��','168','4','����ѧԺ','2001','15987878787','5542354','fgds@dsa.cn','21fgds@dsa.cn','2001-2003�����������ѧ\r\n1998-1999����ݻ��и�С','ȥ�깤��������\r\nǰ�깤�����Ѻ�','�Կ�����\r\nƴ������','�������\r\n��ҳ���','��Ӿ\r\n����','����','1','��ʱ','��ҳ���ʦ','qb_hr_/0/32_20101102111124_jaf0y.jpg','4');");

require("../../inc/footer.php");
?>