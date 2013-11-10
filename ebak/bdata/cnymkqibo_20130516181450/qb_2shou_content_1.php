<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_2shou_content`;");
E_C("CREATE TABLE `qb_2shou_content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `fname` varchar(50) NOT NULL DEFAULT '',
  `info` tinyint(2) NOT NULL DEFAULT '0',
  `hits` mediumint(7) NOT NULL DEFAULT '0',
  `comments` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `list` varchar(10) NOT NULL DEFAULT '',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `titlecolor` varchar(15) NOT NULL DEFAULT '',
  `fonttype` tinyint(1) NOT NULL DEFAULT '0',
  `picurl` varchar(150) NOT NULL DEFAULT '',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `yzer` varchar(30) NOT NULL DEFAULT '',
  `yztime` int(10) NOT NULL DEFAULT '0',
  `levels` tinyint(2) NOT NULL DEFAULT '0',
  `levelstime` int(10) NOT NULL DEFAULT '0',
  `keywords` varchar(100) NOT NULL DEFAULT '',
  `jumpurl` varchar(150) NOT NULL DEFAULT '',
  `iframeurl` varchar(150) NOT NULL DEFAULT '',
  `style` varchar(15) NOT NULL DEFAULT '',
  `head_tpl` varchar(150) NOT NULL DEFAULT '',
  `main_tpl` varchar(150) NOT NULL DEFAULT '',
  `foot_tpl` varchar(100) NOT NULL DEFAULT '',
  `target` tinyint(1) NOT NULL DEFAULT '0',
  `ishtml` tinyint(1) NOT NULL DEFAULT '0',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `lastfid` mediumint(7) NOT NULL DEFAULT '0',
  `money` mediumint(7) NOT NULL DEFAULT '0',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  `editer` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) NOT NULL DEFAULT '0',
  `begintime` int(10) NOT NULL DEFAULT '0',
  `endtime` int(10) NOT NULL DEFAULT '0',
  `config` text NOT NULL,
  `lastview` int(10) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  `zone_id` mediumint(7) NOT NULL DEFAULT '0',
  `street_id` mediumint(7) NOT NULL DEFAULT '0',
  `editpwd` varchar(32) NOT NULL DEFAULT '',
  `showday` mediumint(4) NOT NULL DEFAULT '0',
  `visit_log` text NOT NULL,
  `visit_num` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `telephone` varchar(30) NOT NULL DEFAULT '',
  `mobphone` varchar(12) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `oicq` varchar(11) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `linkman` varchar(20) NOT NULL DEFAULT '',
  `postcode` varchar(6) NOT NULL DEFAULT '',
  `address` varchar(250) NOT NULL DEFAULT '',
  `weburl` varchar(150) NOT NULL DEFAULT '',
  `fax` varchar(30) NOT NULL DEFAULT '',
  `maps` varchar(50) NOT NULL DEFAULT '',
  `picnum` smallint(4) NOT NULL DEFAULT '0',
  `replytime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `ispic` (`ispic`),
  KEY `city_id` (`city_id`),
  KEY `zone_id` (`zone_id`),
  KEY `street_id` (`street_id`),
  KEY `list` (`list`,`fid`,`city_id`,`yz`),
  KEY `hits` (`hits`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=gbk");
E_D("replace into `qb_2shou_content` values('2','(ת��)34�����������ӻ� - 800Ԫ','1','7','���ӻ�','0','4','0','1317030356','1317030356','1','admin','','0','http://1.pic.58control.cn/p1/big/n_13951452042257.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','1317289556','','1319162263','1','1','1','','3','','0','','13399999999','54325@qq.com','888888','','admin','','','','','','4','0');");
E_D("replace into `qb_2shou_content` values('3','(ת��)��ά 42E70RG 42��LEDӲ��Һ������ - 3000Ԫ','1','7','���ӻ�','0','4','0','1317031127','1317031127','1','admin','','0','http://1.pic.58control.cn/p1/big/n_14008601349901.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','1317290327','','1367704541','1','1','2','','3','','0','','13399999999','54325@qq.com','888888','','admin','','','','','','2','0');");
E_D("replace into `qb_2shou_content` values('4','(ת��)�������,ת������50��1080P�����ӵ��� - 3300Ԫ','1','7','���ӻ�','0','4','0','1317031319','1317031319','1','admin','','0','http://2.pic.58control.cn/p1/big/n_13061159387906.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','1317290519','','1367704543','1','2','0','','3','','0','','13399999999','54325@qq.com','888888','','admin','','','','','','2','0');");
E_D("replace into `qb_2shou_content` values('5','(ת��)42��SONY����ƽ��Һ������ ����2300Ԫ - 2300Ԫ','1','7','���ӻ�','0','3','0','1317031430','1317031430','1','admin','','0','http://3.pic.58control.cn/p1/big/n_13599099866881.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','1317290630','','1367704544','1','0','0','','3','','0','','13399999999','54325@qq.com','888888','','admin','','','','','','1','0');");
E_D("replace into `qb_2shou_content` values('6','(ת��)����Һ������ TH-L32C30C (������) - 2779Ԫ','1','7','���ӻ�','0','3','0','1317031614','1317031614','1','admin','','0','http://2.pic.58control.cn/p1/big/n_14014851520015.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','1317290814','','1367704547','1','1','3','','3','','0','','13399999999','54325@qq.com','888888','','admin','','','','','','1','0');");
E_D("replace into `qb_2shou_content` values('7','(ת��)��ҳ�40��sony����LEDҺ������ - 3850Ԫ','1','7','���ӻ�','0','9','0','1317031775','1317031775','1','admin','','0','http://1.pic.58control.cn/p1/big/n_13995398869770.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','1317290975','','1367704549','1','1','5','','3','','0','','13399999999','54325@qq.com','888888','','admin','','','','','','2','0');");
E_D("replace into `qb_2shou_content` values('8','(ת��)����9.5���µ�TCL6.5�������Զ�ϴ�»� - 400Ԫ','1','8','ϴ�»�','0','5','0','1317031917','1317031917','1','admin','','0','http://2.pic.58control.cn/p1/big/n_14014916400656.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','1317291117','','1367704551','1','0','0','','3','','0','','13399999999','54325@qq.com','888888','','admin','','','','','','1','0');");
E_D("replace into `qb_2shou_content` values('9','(ת��)��:����ϴ�»�5.5kg,�����緹�� - 450Ԫ','1','8','ϴ�»�','0','2','0','1317032105','1317032105','1','admin','','0','http://1.pic.58control.cn/p1/big/n_14016081982730.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','1317291305','','1367704554','1','1','4','','3','','0','','13399999999','54325@qq.com','888888','','admin','','','','','','2','0');");
E_D("replace into `qb_2shou_content` values('10','(ת��)9.999����־��1p����յ����ͼ�ת�� - 1700Ԫ','1','9','�յ�','0','2','0','1317032315','1317032315','1','admin','','0','http://1.pic.58control.cn/p1/big/n_13999191951630.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','1317291515','','1367704555','1','1','6','','3','','0','','13399999999','54325@qq.com','888888','','admin','','','','','','1','0');");
E_D("replace into `qb_2shou_content` values('11','(ת��)�����յ�����ת���� - 800Ԫ','1','9','�յ�','0','9','0','1317032418','1317032418','1','admin','','0','http://4.pic.58control.cn/p1/big/n_14011968422157.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','1317291618','','1367704557','1','1','3','','3','','0','','13399999999','54325@qq.com','888888','','admin','','','','','','1','0');");
E_D("replace into `qb_2shou_content` values('12','�ҵ�С�ڼ���ȫ��˫��2��ԭ���ø߶����� - 1380Ԫ','1','23','�ʼǱ�','0','4','0','1317088056','1317088056','1','admin','','0','http://image.ganjistatic1.com/gjfs01/M00/D8/C6/wKhxwE594B-QYc1VAAEVxjWEoyk783_334-208_6-0.jpg','1','1','','0','0','0','С�� ˫��2��','','','','','','','0','0','127.0.0.1','0','0','','','0','0','1317347256','','1367704533','1','1','2','','3','','0','','13399999999','54325@qq.com','888888','','admin','','','','','','2','0');");
E_D("replace into `qb_2shou_content` values('13','ת�û���9.9�� ��������ָ�� ���T7300 2G�ڴ� - 1580Ԫ','1','23','�ʼǱ�','0','8','0','1317088421','1317088421','1','admin','','0','http://sy.yesky.com/imagelist/2007/344/520125ofoo28s.jpg','1','1','','0','0','0','���� ���','','','','','','','0','0','127.0.0.1','0','0','','','0','0','1317347621','','1367704535','1','2','0','','3','','0','01011013301','13399999999','54325@qq.com','888888','','����','','','','','','4','0');");
E_D("replace into `qb_2shou_content` values('14','����IBM���˫�ˣ���������ָ�ƣ�����ȫ�� - 1350Ԫ','1','23','�ʼǱ�','0','14','0','1317088750','1317088750','1','admin','','0','http://image.ganjistatic1.com/gjfs01/M01/29/9E/wKhxwU6APKq,GOuwAACNU35uPp8336_334-208_6-0.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','1317347950','','1367704537','1','4','0','','3','','0','','13399999999','54325@qq.com','888888','','admin','','','','','','3','0');");
E_D("replace into `qb_2shou_content` values('15','����ת���ִ���IBM-X61T��2G�ڴ�500GӲ���4Сʱ - 3000Ԫ','1','23','�ʼǱ�','0','16','0','1317089032','1317089032','1','admin','','0','http://www.2it.com.cn/shop/shop108587/uploadimage/product/09122210521828136.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','1317348232','','1367704539','1','1','1','','3','','0','','13399999999','54325@qq.com','888888','','admin','','','','','','5','0');");
E_D("replace into `qb_2shou_content` values('16','ת���˼ҵ�����˫�˴�һ�� - 700Ԫ','1','13','��/����','0','12','0','1317089295','1317089295','1','admin','','0','http://des.sootuu.com/UploadFiles_5261/200702/200721223243860.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','1317348495','','1367704529','1','11','0','','3','','0','','13399999999','54325@qq.com','888888','','admin','','','','','','1','0');");
E_D("replace into `qb_2shou_content` values('17','�ų���˫�˴󴲴��涫ֱ�ŵ���վ������ιۣ����','1','13','��/����','0','35','0','1317089469','1317089469','1','admin','','0','http://img1.teambuy.com.cn/upload/2010/07/27/085941_81011.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','1317348669','','1367871956','0','0','0','','3','','0','','13399999999','54325@qq.com','888888','','admin','','','','','','1','0');");

require("../../inc/footer.php");
?>