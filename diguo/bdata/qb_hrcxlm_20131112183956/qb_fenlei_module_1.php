<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_fenlei_module`;");
E_C("CREATE TABLE `qb_fenlei_module` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `sort_id` mediumint(5) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `list` smallint(4) NOT NULL DEFAULT '0',
  `style` varchar(50) NOT NULL DEFAULT '',
  `config` text NOT NULL,
  `config2` text NOT NULL,
  `comment_type` tinyint(1) NOT NULL DEFAULT '0',
  `ifdp` tinyint(1) NOT NULL DEFAULT '0',
  `template` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=gbk");
E_D("replace into `qb_fenlei_module` values('1','0','סլ��','10','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','1','0','a:4:{s:4:\"list\";s:0:\"\";s:4:\"show\";s:0:\"\";s:4:\"post\";s:0:\"\";s:6:\"search\";s:0:\"\";}');");
E_D("replace into `qb_fenlei_module` values('2','0','һ����Ϣ','4','','a:1:{s:9:\"moduleSet\";N;}','','1','0','');");
E_D("replace into `qb_fenlei_module` values('7','0','���÷�','9','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','');");
E_D("replace into `qb_fenlei_module` values('3','0','��Ƹ','6','','a:1:{s:9:\"moduleSet\";N;}','','0','0','');");
E_D("replace into `qb_fenlei_module` values('4','0','��ְ','7','','a:1:{s:9:\"moduleSet\";N;}','','0','0','');");
E_D("replace into `qb_fenlei_module` values('5','0','����','5','','a:1:{s:9:\"moduleSet\";N;}','','0','0','');");
E_D("replace into `qb_fenlei_module` values('6','0','����','8','','a:1:{s:9:\"moduleSet\";N;}','','0','0','');");
E_D("replace into `qb_fenlei_module` values('13','0','����','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','a:5:{s:4:\"fen1\";a:2:{s:4:\"name\";s:4:\"����\";s:3:\"set\";s:36:\"1=��\r\n2=һ��\r\n3=��\r\n4=�ܺ�\r\n5=�ǳ���\";}s:4:\"fen2\";a:2:{s:4:\"name\";s:4:\"����\";s:3:\"set\";s:36:\"1=��\r\n2=һ��\r\n3=��\r\n4=�ܺ�\r\n5=�ǳ���\";}s:4:\"fen3\";a:2:{s:4:\"name\";s:4:\"����\";s:3:\"set\";s:36:\"1=��\r\n2=һ��\r\n3=��\r\n4=�ܺ�\r\n5=�ǳ���\";}s:4:\"fen4\";a:2:{s:4:\"name\";s:4:\"��λ\";s:3:\"set\";s:28:\"1=����\r\n2=����\r\n3=��\r\n4=�ܹ�\";}s:4:\"fen5\";a:2:{s:4:\"name\";s:8:\"ϲ���̶�\";s:3:\"set\";s:36:\"1=��ϲ��\r\n2=����ν\r\n3=ϲ��\r\n4=��ϲ��\";}}','0','1','');");
E_D("replace into `qb_fenlei_module` values('14','0','����','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";i:1;}}','a:6:{s:4:\"fen1\";a:2:{s:4:\"name\";s:4:\"����\";s:3:\"set\";s:36:\"1=��\r\n2=һ��\r\n3=��\r\n4=�ܺ�\r\n5=�ǳ���\";}s:4:\"fen2\";a:2:{s:4:\"name\";s:4:\"����\";s:3:\"set\";s:36:\"1=��\r\n2=һ��\r\n3=��\r\n4=�ܺ�\r\n5=�ǳ���\";}s:4:\"fen3\";a:2:{s:4:\"name\";s:4:\"����\";s:3:\"set\";s:36:\"1=��\r\n2=һ��\r\n3=��\r\n4=�ܺ�\r\n5=�ǳ���\";}s:4:\"fen4\";a:2:{s:4:\"name\";s:4:\"��λ\";s:3:\"set\";s:28:\"1=����\r\n2=����\r\n3=��\r\n4=�ܹ�\";}s:4:\"fen5\";a:2:{s:4:\"name\";s:8:\"ϲ���̶�\";s:3:\"set\";s:36:\"1=��ϲ��\r\n2=����ν\r\n3=ϲ��\r\n4=��ϲ��\";}s:4:\"fen6\";a:2:{s:4:\"name\";s:8:\"������Χ\";s:3:\"set\";s:48:\"��ͥ�ۻ�\r\n����Լ��\r\n����Ǣ̸\r\n���Ѿۻ�\r\n���;ۻ�\";}}','0','1','');");
E_D("replace into `qb_fenlei_module` values('15','0','�ʽ�','0','','N;','','0','0','');");

require("../../inc/footer.php");
?>