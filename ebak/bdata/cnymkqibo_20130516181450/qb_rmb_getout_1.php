<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_rmb_getout`;");
E_C("CREATE TABLE `qb_rmb_getout` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `money` float NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `banktype` varchar(20) NOT NULL DEFAULT '',
  `bankname` varchar(100) NOT NULL DEFAULT '',
  `ifpay` tinyint(1) NOT NULL DEFAULT '0',
  `why` varchar(255) NOT NULL DEFAULT '',
  `truename` varchar(30) NOT NULL DEFAULT '',
  `tel` varchar(20) NOT NULL DEFAULT '',
  `quitabout` text NOT NULL,
  `admin` varchar(30) NOT NULL DEFAULT '',
  `replytime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `ifpay` (`ifpay`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `qb_rmb_getout` values('1','1','admin','10','1334893560','fdsa@sa.cn','fdsa@sa.cn  �Ƹ�ͨ','1','fdsa','fdsafds','fdsa','֧�����:10\r\n֧������:\r\n֧������:\r\n���п���:\r\n���п�����������:\r\n��ϵ�绰:\r\n','admin','1334893927');");

require("../../inc/footer.php");
?>