<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_dianping_module`;");
E_C("CREATE TABLE `qb_dianping_module` (
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `qb_dianping_module` values('3','0','����','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";i:1;}}','a:5:{s:4:\"fen1\";a:2:{s:4:\"name\";s:4:\"����\";s:3:\"set\";s:36:\"1=��\r\n2=һ��\r\n3=��\r\n4=�ܺ�\r\n5=�ǳ���\";}s:4:\"fen2\";a:2:{s:4:\"name\";s:4:\"����\";s:3:\"set\";s:36:\"1=��\r\n2=һ��\r\n3=��\r\n4=�ܺ�\r\n5=�ǳ���\";}s:4:\"fen3\";a:2:{s:4:\"name\";s:4:\"����\";s:3:\"set\";s:36:\"1=��\r\n2=һ��\r\n3=��\r\n4=�ܺ�\r\n5=�ǳ���\";}s:4:\"fen4\";a:2:{s:4:\"name\";s:4:\"��λ\";s:3:\"set\";s:28:\"1=����\r\n2=����\r\n3=��\r\n4=�ܹ�\";}s:4:\"fen5\";a:2:{s:4:\"name\";s:8:\"ϲ���̶�\";s:3:\"set\";s:36:\"1=��ϲ��\r\n2=����ν\r\n3=ϲ��\r\n4=��ϲ��\";}}','0','1','');");
E_D("replace into `qb_dianping_module` values('1','0','����','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','a:5:{s:4:\"fen1\";a:2:{s:4:\"name\";s:4:\"����\";s:3:\"set\";s:36:\"1=��\r\n2=һ��\r\n3=��\r\n4=�ܺ�\r\n5=�ǳ���\";}s:4:\"fen2\";a:2:{s:4:\"name\";s:4:\"����\";s:3:\"set\";s:36:\"1=��\r\n2=һ��\r\n3=��\r\n4=�ܺ�\r\n5=�ǳ���\";}s:4:\"fen3\";a:2:{s:4:\"name\";s:4:\"����\";s:3:\"set\";s:36:\"1=��\r\n2=һ��\r\n3=��\r\n4=�ܺ�\r\n5=�ǳ���\";}s:4:\"fen4\";a:2:{s:4:\"name\";s:4:\"��λ\";s:3:\"set\";s:28:\"1=����\r\n2=����\r\n3=��\r\n4=�ܹ�\";}s:4:\"fen5\";a:2:{s:4:\"name\";s:8:\"ϲ���̶�\";s:3:\"set\";s:36:\"1=��ϲ��\r\n2=����ν\r\n3=ϲ��\r\n4=��ϲ��\";}}','0','1','');");
E_D("replace into `qb_dianping_module` values('2','0','����','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";i:1;}}','a:6:{s:4:\"fen1\";a:2:{s:4:\"name\";s:4:\"����\";s:3:\"set\";s:36:\"1=��\r\n2=һ��\r\n3=��\r\n4=�ܺ�\r\n5=�ǳ���\";}s:4:\"fen2\";a:2:{s:4:\"name\";s:4:\"����\";s:3:\"set\";s:36:\"1=��\r\n2=һ��\r\n3=��\r\n4=�ܺ�\r\n5=�ǳ���\";}s:4:\"fen3\";a:2:{s:4:\"name\";s:4:\"����\";s:3:\"set\";s:36:\"1=��\r\n2=һ��\r\n3=��\r\n4=�ܺ�\r\n5=�ǳ���\";}s:4:\"fen4\";a:2:{s:4:\"name\";s:4:\"��λ\";s:3:\"set\";s:28:\"1=����\r\n2=����\r\n3=��\r\n4=�ܹ�\";}s:4:\"fen5\";a:2:{s:4:\"name\";s:8:\"ϲ���̶�\";s:3:\"set\";s:36:\"1=��ϲ��\r\n2=����ν\r\n3=ϲ��\r\n4=��ϲ��\";}s:4:\"fen6\";a:2:{s:4:\"name\";s:8:\"������Χ\";s:3:\"set\";s:48:\"��ͥ�ۻ�\r\n����Լ��\r\n����Ǣ̸\r\n���Ѿۻ�\r\n���;ۻ�\";}}','0','1','');");

require("../../inc/footer.php");
?>