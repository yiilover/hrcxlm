<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_tuangou_content`;");
E_C("CREATE TABLE `qb_tuangou_content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `fname` varchar(50) NOT NULL DEFAULT '',
  `hits` mediumint(7) NOT NULL DEFAULT '0',
  `comments` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `list` varchar(10) NOT NULL DEFAULT '',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `titlecolor` varchar(15) NOT NULL DEFAULT '',
  `picurl` varchar(150) NOT NULL DEFAULT '',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `levels` tinyint(2) NOT NULL DEFAULT '0',
  `levelstime` int(10) NOT NULL DEFAULT '0',
  `keywords` varchar(100) NOT NULL DEFAULT '',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `lastfid` mediumint(7) NOT NULL DEFAULT '0',
  `money` mediumint(7) NOT NULL DEFAULT '0',
  `begintime` int(10) NOT NULL DEFAULT '0',
  `endtime` int(10) NOT NULL DEFAULT '0',
  `lastview` int(10) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  `totaluser` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `gg_maps` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `ispic` (`ispic`),
  KEY `city_id` (`city_id`),
  KEY `list` (`list`,`fid`,`city_id`,`yz`),
  KEY `hits` (`hits`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=gbk");
E_D("replace into `qb_tuangou_content` values('33','�������鳬ֵ�Լ۱ȴ���','1','2','������','35','0','1276749814','1276749814','1','admin','','qb_tuangou_/2/1_20101227101254_pqveb.jpg','1','1','1','1290142079','','192.168.2.146','0','0','0','0','1367893783','1','0','');");
E_D("replace into `qb_tuangou_content` values('36','��������Ź���ʼ��','1','6','������','23','3','1276751747','1276751747','1','admin','','qb_tuangou_/6/1_20101227101258_yggqq.jpg','1','1','1','1277108909','','192.168.2.146','0','0','0','0','1367708246','1','1','');");
E_D("replace into `qb_tuangou_content` values('37','�Ź���װ���ؼѶ������̷�','1','7','ĸӤ��','10','0','1276752027','1276752027','1','admin','','qb_tuangou_/7/1_20101227101239_z55x6.jpg','1','1','1','1277108909','','192.168.2.146','0','0','0','0','1367708248','1','1','');");
E_D("replace into `qb_tuangou_content` values('38','�Ź�������ͥ��������������լ��ʱ��','1','1','������','61','0','1276752233','1276752233','1','admin','','qb_tuangou_/1/1_20101227101227_uoctm.jpg','1','1','1','1277108909','','192.168.2.146','0','0','0','1292304233','1367708237','1','1','');");
E_D("replace into `qb_tuangou_content` values('34','�����̹�԰������Ȫ��Ǳɽɭ�ֹ�԰һ���Σ������ţ�','1','3','������','11','0','1276750345','1276750345','1','admin','','qb_tuangou_/3/1_20101227101229_ep9bg.jpg','1','1','1','1290142079','','192.168.2.146','0','0','0','0','1367708240','1','0','');");
E_D("replace into `qb_tuangou_content` values('35','����ʳ�Ź��������ˮ���ܰ���׷��','1','5','�Ժ���','11','0','1276751410','1276751410','1','admin','','qb_tuangou_/5/1_20101227101201_x4sxt.jpg','1','1','1','1277108909','','192.168.2.146','0','0','0','0','1367708244','1','1','');");
E_D("replace into `qb_tuangou_content` values('39','�Ź�,��һ��Jetta��ʽ����,���ơ����ڰ桱������','1','4','������','152','2','1276752488','1276752488','1','admin','','qb_tuangou_/4/1_20101227101200_jgxxd.jpg','1','1','1','1277108909','','192.168.2.146','0','0','0','0','1367875542','0','2','');");

require("../../inc/footer.php");
?>