<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_zhuangxiu_comments`;");
E_C("CREATE TABLE `qb_zhuangxiu_comments` (
  `cid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `cuid` int(7) NOT NULL DEFAULT '0',
  `type` tinyint(2) NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `fid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `uid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `ip` varchar(15) NOT NULL DEFAULT '',
  `icon` tinyint(3) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `flowers` smallint(4) NOT NULL DEFAULT '0',
  `egg` smallint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk");
E_D("replace into `qb_zhuangxiu_comments` values('1','1','0','15','1','1','admin','1352362549','װ�޹�˾��Ҫ�����á�ʩ�����պõģ�ϸ����̸��','127.0.0.1','0','1','1','1');");
E_D("replace into `qb_zhuangxiu_comments` values('2','1','0','15','1','1','admin','1352431177','�����շ�����������ǰ�绰ԤԼ���·�������õģ���װ','127.0.0.1','0','1','2','1');");
E_D("replace into `qb_zhuangxiu_comments` values('3','1','0','15','1','0','zhangsan','1352434415','��̨���ѻ��ܸ���58ƽ�׾ɷ�����','127.0.0.1','0','1','2','2');");
E_D("replace into `qb_zhuangxiu_comments` values('5','1','0','19','4','1','admin','1352702098','װ�޵�һ����ϵ�ǰ�Ľ���������ϵһЩҵ���ľ����ѵ�����ʦ�����¼������������ѡ���','127.0.0.1','0','1','1','1');");
E_D("replace into `qb_zhuangxiu_comments` values('6','1','0','22','4','0','lisi','1352702401','������Ϊ�����Ǵ����������ʵĳɳ�������<br> <br>','127.0.0.1','0','1','0','0');");
E_D("replace into `qb_zhuangxiu_comments` values('7','1','0','42','5','1','admin','1352787867','Ը���ǹ�ͬЯ��Ŭ����������������ļҾ�װ�κ����ʻ�����','127.0.0.1','0','1','0','0');");
E_D("replace into `qb_zhuangxiu_comments` values('8','1','0','38','5','1','admin','1352864868','�����������װ�ι������޹�˾','127.0.0.1','0','1','0','0');");
E_D("replace into `qb_zhuangxiu_comments` values('9','1','0','3','6','1','admin','1353314721','̤̤ʵʵΪ�ͻ�����ƣ�<br><br>��������Ĺ�����<br>','127.0.0.1','0','1','0','0');");
E_D("replace into `qb_zhuangxiu_comments` values('10','1','0','3','6','1','admin','1353314909','׷������������Ƹ��ͻ���','127.0.0.1','0','1','0','0');");

require("../../inc/footer.php");
?>