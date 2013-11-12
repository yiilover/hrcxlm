<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_dianping_sort`;");
E_C("CREATE TABLE `qb_dianping_sort` (
  `fid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `fup` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `class` smallint(4) NOT NULL DEFAULT '0',
  `sons` smallint(4) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `admin` varchar(100) NOT NULL DEFAULT '',
  `list` int(10) NOT NULL DEFAULT '0',
  `listorder` tinyint(2) NOT NULL DEFAULT '0',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  `logo` varchar(150) NOT NULL DEFAULT '',
  `descrip` text NOT NULL,
  `style` varchar(50) NOT NULL DEFAULT '',
  `template` text NOT NULL,
  `jumpurl` varchar(150) NOT NULL DEFAULT '',
  `maxperpage` tinyint(3) NOT NULL DEFAULT '0',
  `metatitle` varchar(250) NOT NULL DEFAULT '',
  `metakeywords` varchar(255) NOT NULL DEFAULT '',
  `metadescription` varchar(255) NOT NULL DEFAULT '',
  `allowcomment` tinyint(1) NOT NULL DEFAULT '0',
  `allowpost` varchar(150) NOT NULL DEFAULT '',
  `allowviewtitle` varchar(150) NOT NULL DEFAULT '',
  `allowviewcontent` varchar(150) NOT NULL DEFAULT '',
  `allowdownload` varchar(150) NOT NULL DEFAULT '',
  `forbidshow` tinyint(1) NOT NULL DEFAULT '0',
  `config` mediumtext NOT NULL,
  `index_show` tinyint(1) NOT NULL DEFAULT '0',
  `contents` mediumint(4) NOT NULL DEFAULT '0',
  `tableid` varchar(30) NOT NULL DEFAULT '',
  `dir_name` varchar(50) NOT NULL DEFAULT '',
  `ifcolor` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fid`),
  KEY `mid` (`mid`),
  KEY `fup` (`fup`,`list`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=gbk");
E_D("replace into `qb_dianping_sort` values('1','0','������ʳ','1','1','0','1','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:2:{s:7:\"is_html\";N;s:11:\"field_value\";N;}','0','0','','canyinmeishi','0');");
E_D("replace into `qb_dianping_sort` values('2','0','��������','2','1','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('3','0','�������','3','1','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('4','0','�������','3','1','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('5','0','���ξƵ�','3','1','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('6','0','������ѵ','3','1','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('7','0','���ݱ���','3','1','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('8','0','��������','3','1','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('9','0','ҽ�ƽ���','3','1','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('10','1','С�Կ��','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('11','1','��Ʒ��Ʒ','1','2','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:2:{s:7:\"is_html\";N;s:11:\"field_value\";N;}','0','0','','tianpinyinpin','0');");
E_D("replace into `qb_dianping_sort` values('12','1','���','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('13','1','����','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('14','1','�������','1','2','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:2:{s:7:\"is_html\";N;s:11:\"field_value\";N;}','0','0','','mianbaodangao','0');");
E_D("replace into `qb_dianping_sort` values('15','1','����','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('16','1','����','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('17','1','�������','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('18','1','����','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('19','1','����','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('20','1','������','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('21','1','�ձ�����','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('22','1','��������','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('23','1','���','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('24','1','����','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('25','2','�ư�','2','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('26','2','KTV','2','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('27','2','����','2','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('28','2','����','2','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('29','2','ϴԡ','2','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('30','2','����','2','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('31','3','����/ʿ��','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('32','3','ͨѶ/�����Ʒ','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('33','3','ˮ����','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('34','3','�ӻ���','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('35','3','����Ʒ��','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('36','4','����/��Ӱ����','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('37','4','����/��ķ','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('38','4','ά��','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('39','4','���/����','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('40','4','����/��Կ��','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('41','4','����','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('42','4','���','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('43','5','�Ǽ��Ƶ�','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('44','5','�ù�/��ջ','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('45','5','������','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('46','5','���㾰��','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('47','6','ѧУ','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('48','6','��ѵ','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('49','6','ѧǰ����','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('50','6','��������','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('51','6','�ҽ�','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('52','6','������','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('53','7','����','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('54','7','����','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('55','7','����','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('56','7','����','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('57','7','��Ħ','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('58','8','����ά������','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('59','8','������������','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('60','8','4Sר����','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('61','9','ҽԺ','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('62','9','ҩ��','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('63','9','����','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('64','9','��������','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");

require("../../inc/footer.php");
?>