<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_sell_telephone`;");
E_C("CREATE TABLE `qb_sell_telephone` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `begintime` int(10) NOT NULL DEFAULT '0',
  `endtime` int(10) NOT NULL DEFAULT '0',
  `money` int(7) NOT NULL DEFAULT '0',
  `city_id` int(7) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '1',
  `telephone` varchar(20) NOT NULL DEFAULT '',
  `title` varchar(50) NOT NULL DEFAULT '',
  `about` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `yz` (`yz`),
  KEY `city_id` (`city_id`,`endtime`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gbk");
E_D("replace into `qb_sell_telephone` values('12','1','admin','1292053191','0','1426923591','5000','1','1','010-58787878','��ˮ���ŷ���','��ˮ���ŷ���');");
E_D("replace into `qb_sell_telephone` values('3','1','admin','1290404210','0','1447738610','18000','1','1','020-24754563','����ú������','');");
E_D("replace into `qb_sell_telephone` values('4','1','admin','1290404247','0','1447738647','18000','1','1','020-23654125','������ŷ���','');");
E_D("replace into `qb_sell_telephone` values('5','1','admin','1290404276','0','1447738676','18000','1','1','020-21254785','��������ҵ�','');");
E_D("replace into `qb_sell_telephone` values('6','1','admin','1290404345','0','1447738745','18000','1','1','020-25632563','������ɩ����','');");
E_D("replace into `qb_sell_telephone` values('7','1','admin','1290404447','0','1447738847','18000','1','1','020-85214521','���ȫ��Ԥ��','');");
E_D("replace into `qb_sell_telephone` values('8','1','admin','1290404470','0','1447738870','18000','1','1','010-21254541','�Ƶ�Ԥ������','');");
E_D("replace into `qb_sell_telephone` values('9','1','admin','1290404503','0','1447738903','18000','1','1','020-21212125','���ۻ�Ʊ����','');");
E_D("replace into `qb_sell_telephone` values('10','1','admin','1290404525','0','1447738925','18000','1','1','020-21212145','�� �� Ʊ����','');");
E_D("replace into `qb_sell_telephone` values('11','1','admin','1290404585','0','1447738985','18000','1','1','020-21236541','ѧ�� 9���Ż�','');");

require("../../inc/footer.php");
?>