<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_dianping_dianping`;");
E_C("CREATE TABLE `qb_dianping_dianping` (
  `cid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `cuid` int(7) NOT NULL DEFAULT '0',
  `type` tinyint(2) NOT NULL DEFAULT '0',
  `id` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `fid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `uid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `ip` varchar(15) NOT NULL DEFAULT '',
  `icon` tinyint(3) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `fen1` smallint(4) NOT NULL DEFAULT '0',
  `fen2` smallint(4) NOT NULL DEFAULT '0',
  `fen3` smallint(4) NOT NULL DEFAULT '0',
  `fen4` smallint(4) NOT NULL DEFAULT '0',
  `fen5` smallint(4) NOT NULL DEFAULT '0',
  `flowers` smallint(4) NOT NULL DEFAULT '0',
  `egg` smallint(4) NOT NULL DEFAULT '0',
  `price` mediumint(5) NOT NULL DEFAULT '0',
  `keywords` varchar(100) NOT NULL DEFAULT '',
  `keywords2` varchar(100) NOT NULL DEFAULT '',
  `fen6` varchar(150) NOT NULL DEFAULT '',
  PRIMARY KEY (`cid`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk");
E_D("replace into `qb_dianping_dianping` values('1','1','1','11','18','1','admin','1315988493','ʵ����̫�ó���,ȥ��һ�λ�����ȥһ��','127.0.0.1','0','1','4','3','4','3','4','0','0','50','','','');");
E_D("replace into `qb_dianping_dianping` values('2','1','0','10','18','1','admin','1315988722','�ǳ��Ĳ���,�������������Զ༸��','127.0.0.1','0','1','0','0','0','0','4','0','0','54','','','');");
E_D("replace into `qb_dianping_dianping` values('3','1','0','9','18','1','admin','1315988945','��Ȼ�е��,���Ƿǳ��ó���,���˻����,����������һ��.','127.0.0.1','0','1','5','2','3','2','4','0','0','85','','','');");
E_D("replace into `qb_dianping_dianping` values('4','1','0','8','18','1','admin','1315989131','����̫����,�ֲ��ó�,������һ��,����̬�Ⱥܲ���ô��.�����Ҳ�Ҫ��','127.0.0.1','0','1','2','4','4','3','1','0','0','52','','','');");
E_D("replace into `qb_dianping_dianping` values('5','1','0','7','18','1','admin','1315989284','˵����̫��,ֻ��˵��ǿ�Ե�������۸��','127.0.0.1','0','1','3','3','3','3','2','0','0','85','','','');");
E_D("replace into `qb_dianping_dianping` values('6','1','0','6','18','1','admin','1315989500','˵�����ж��,��������,һ��Ǯһ�ֻ��ĵ���','127.0.0.1','0','1','3','2','3','3','2','0','0','30','','','');");
E_D("replace into `qb_dianping_dianping` values('7','1','0','5','18','1','admin','1315989677','����ũ����ɫ��ũׯ,�Ƽ�����пղ���ȥһ��,�ó�Ŷ.','127.0.0.1','0','1','4','3','4','4','3','0','0','62','','','');");
E_D("replace into `qb_dianping_dianping` values('8','1','0','4','18','1','admin','1315989813','���û����԰�,����ò����.���Ǹ���.','127.0.0.1','0','1','2','4','4','4','3','0','0','54','','','');");

require("../../inc/footer.php");
?>