<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_guestbook_content`;");
E_C("CREATE TABLE `qb_guestbook_content` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `ico` tinyint(2) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '',
  `oicq` varchar(11) DEFAULT NULL,
  `weburl` varchar(150) NOT NULL DEFAULT '',
  `blogurl` varchar(150) NOT NULL DEFAULT '',
  `uid` int(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `list` int(10) NOT NULL DEFAULT '0',
  `reply` text NOT NULL,
  `mobphone` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=gbk");
E_D("replace into `qb_guestbook_content` values('12','0','1','','','','','1','admin','192.168.0.99','��������ǿ�ƽ�����վ��̨�ķ�����:�޸�/admin/global.php�ļ�,����\$ForceEnter=0;��0�ĳ�1����,ǿ�ƽ�����վ�ĺ�̨.','1','1240206881','1240206881','','');");
E_D("replace into `qb_guestbook_content` values('13','0','1','','','','','1','admin','192.168.0.99','��ͨ����Ա��Ϊ��������Ա�ķ�����,�޸��ļ�/�벩CMS/admin.php,����ߵ��ʺŸ���һ�¼���','1','1240206958','1240206958','','');");
E_D("replace into `qb_guestbook_content` values('14','0','1','','','','','1','admin','192.168.0.99','��վϵͳ�����ݿ������ļ���/�벩CMS/mysql_config.php','1','1240207079','1240207079','','');");
E_D("replace into `qb_guestbook_content` values('15','0','1','','','','','1','admin','192.168.0.99','������Ĭ�������ϴ��ļ���СΪ2M,��������޸ķ���������.��������վϵͳ�ϴ�����2M���ļ�.�ǲ����Ե�.�������޸ķ���������.һ����˵��������PHP�����ļ�����c:\\\\windows\\\\php.ini����.','1','1240207216','1240207216','','');");
E_D("replace into `qb_guestbook_content` values('16','0','1','','','','','1','admin','192.168.0.99','�����������������.���޷�ʹ�òɼ�����.','1','1240207330','1240207330','','');");
E_D("replace into `qb_guestbook_content` values('22','1','1','','','','','1','admin','127.0.0.1','fsdafds\r\nwfdsafd','1','1283393799','1283393799','a:4:{s:8:\"username\";s:5:\"admin\";s:7:\"content\";s:20:\"wfdsa\r\nfd\r\n3511\r\n999\";s:8:\"posttime\";i:1283394570;s:3:\"uid\";s:1:\"1\";}','');");
E_D("replace into `qb_guestbook_content` values('23','2','1','','','','','1','admin','127.0.0.1','42452424','1','1283395885','1283395885','a:4:{s:7:\"content\";s:7:\"1111144\";s:3:\"uid\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:8:\"posttime\";i:1283395894;}','');");

require("../../inc/footer.php");
?>