<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hy_news`;");
E_C("CREATE TABLE `qb_hy_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `title` varchar(150) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `hits` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) unsigned NOT NULL DEFAULT '0',
  `list` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `titlecolor` varchar(15) NOT NULL DEFAULT '',
  `fonttype` tinyint(1) NOT NULL DEFAULT '0',
  `picurl` varchar(150) NOT NULL DEFAULT '',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `levels` tinyint(1) NOT NULL DEFAULT '0',
  `keywords` varchar(100) NOT NULL DEFAULT '',
  `bd_pics` varchar(248) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `posttime` (`posttime`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `qb_hy_news` values('1','1','��˾��ҵ���������ӭ���ǰ����','<p>��ӭ��ҹ���������</p>','28','1319166211','0','admin','','0','','0','1','0','','21,23,24');");
E_D("replace into `qb_hy_news` values('2','1','�����д��ۿۻ����ӭ��ҹ�ע','<p>������ʾ���ǳ���Ĵ������</p><p>�벻Ҫ����ˣ�</p>','8','1354672938','0','admin','','0','','0','1','0','','23');");

require("../../inc/footer.php");
?>