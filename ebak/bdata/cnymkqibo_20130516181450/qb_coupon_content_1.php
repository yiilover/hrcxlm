<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_coupon_content`;");
E_C("CREATE TABLE `qb_coupon_content` (
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
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `ispic` (`ispic`),
  KEY `city_id` (`city_id`),
  KEY `list` (`list`,`fid`,`city_id`,`yz`),
  KEY `hits` (`hits`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=gbk");
E_D("replace into `qb_coupon_content` values('32','ȫ�۵¿�Ѽ����������','1','25','�ʻ���Ʒ','9','0','1276392077','1276392077','1','admin','','qb_coupon_/25/1_20101103121120_y4z3d.jpg','1','1','1','1277108891','','127.0.0.1','0','0','0','0','1367883402','1');");
E_D("replace into `qb_coupon_content` values('31','��������ţ�Ž��������̳��԰��','1','25','�ʻ���Ʒ','7','0','1276392059','1276392059','1','admin','','qb_coupon_/25/1_20101103121142_drwq8.jpg','1','1','1','1277108892','','127.0.0.1','0','0','0','0','1367883400','1');");
E_D("replace into `qb_coupon_content` values('30','����С��','1','25','�ʻ���Ʒ','9','0','1276392046','1276392046','1','admin','','qb_coupon_/25/1_20101103121109_j7ntk.jpg','1','1','1','1277108892','','127.0.0.1','0','0','0','0','1367883397','1');");
E_D("replace into `qb_coupon_content` values('29','������ͷׯ','1','25','�ʻ���Ʒ','13','0','1276392033','1276392033','1','admin','','qb_coupon_/25/1_20101103121127_z4rb1.jpg','1','1','1','1277108893','','127.0.0.1','0','0','0','0','1367883395','1');");
E_D("replace into `qb_coupon_content` values('28','���żҹ����д��õ�','1','25','�ʻ���Ʒ','11','0','1276392020','1276392020','1','admin','','qb_coupon_/25/1_20101103121107_uekzb.jpg','1','1','1','1277108894','','127.0.0.1','0','0','0','0','1367883392','1');");
E_D("replace into `qb_coupon_content` values('27','���Ŷ������˴��','1','25','�ʻ���Ʒ','14','0','1276392005','1276392005','1','admin','','qb_coupon_/25/1_20101103121149_rywyu.gif','1','1','1','1290142086','','127.0.0.1','0','0','0','0','1367883390','1');");
E_D("replace into `qb_coupon_content` values('33','��ϵ˽������','1','25','�ʻ���Ʒ','36','0','1276401055','1276401055','1','admin','','qb_coupon_/25/1_20101103121158_os7ny.jpg','1','1','1','1277108887','','127.0.0.1','0','0','0','1276660255','1367883405','1');");
E_D("replace into `qb_coupon_content` values('34','�����ձ�����','1','25','�ʻ���Ʒ','46','0','1276401068','1276401068','1','admin','','qb_coupon_/25/1_20101103121128_dtzeg.jpg.jpg','1','1','1','1277108886','','127.0.0.1','0','0','0','0','1367883407','1');");
E_D("replace into `qb_coupon_content` values('35','������������ֵ�-����������ؼ�3.8�ۣ�','1','25','�ʻ���Ʒ','107','0','1276401082','1276401082','1','admin','','qb_coupon_/25/1_20101103121104_xth6f.jpg.jpg','1','1','1','1277108886','','127.0.0.1','0','0','0','0','1367883410','1');");

require("../../inc/footer.php");
?>