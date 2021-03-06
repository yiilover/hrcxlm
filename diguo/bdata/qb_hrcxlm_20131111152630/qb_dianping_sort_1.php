<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_dianping_sort`;");
E_C("CREATE TABLE `qb_dianping_sort` (
  `fid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `fup` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `class` smallint(4) NOT NULL DEFAULT '0',
  `sons` smallint(4) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `admin` varchar(100) NOT NULL DEFAULT '',
  `list` int(10) NOT NULL DEFAULT '0',
  `listorder` tinyint(2) NOT NULL DEFAULT '0',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  `logo` varchar(150) NOT NULL DEFAULT '',
  `descrip` text NOT NULL,
  `style` varchar(50) NOT NULL DEFAULT '',
  `template` text NOT NULL,
  `jumpurl` varchar(150) NOT NULL DEFAULT '',
  `maxperpage` tinyint(3) NOT NULL DEFAULT '0',
  `metatitle` varchar(250) NOT NULL DEFAULT '',
  `metakeywords` varchar(255) NOT NULL DEFAULT '',
  `metadescription` varchar(255) NOT NULL DEFAULT '',
  `allowcomment` tinyint(1) NOT NULL DEFAULT '0',
  `allowpost` varchar(150) NOT NULL DEFAULT '',
  `allowviewtitle` varchar(150) NOT NULL DEFAULT '',
  `allowviewcontent` varchar(150) NOT NULL DEFAULT '',
  `allowdownload` varchar(150) NOT NULL DEFAULT '',
  `forbidshow` tinyint(1) NOT NULL DEFAULT '0',
  `config` mediumtext NOT NULL,
  `index_show` tinyint(1) NOT NULL DEFAULT '0',
  `contents` mediumint(4) NOT NULL DEFAULT '0',
  `tableid` varchar(30) NOT NULL DEFAULT '',
  `dir_name` varchar(50) NOT NULL DEFAULT '',
  `ifcolor` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fid`),
  KEY `mid` (`mid`),
  KEY `fup` (`fup`,`list`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=gbk");
E_D("replace into `qb_dianping_sort` values('1','0','餐饮美食','1','1','0','1','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:2:{s:7:\"is_html\";N;s:11:\"field_value\";N;}','0','0','','canyinmeishi','0');");
E_D("replace into `qb_dianping_sort` values('2','0','休闲娱乐','2','1','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('3','0','购物服务','3','1','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('4','0','便民服务','3','1','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('5','0','旅游酒店','3','1','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('6','0','教育培训','3','1','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('7','0','美容保健','3','1','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('8','0','车辆服务','3','1','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('9','0','医疗健康','3','1','0','1','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('10','1','小吃快餐','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('11','1','甜品饮品','1','2','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:2:{s:7:\"is_html\";N;s:11:\"field_value\";N;}','0','0','','tianpinyinpin','0');");
E_D("replace into `qb_dianping_sort` values('12','1','火锅','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('13','1','西餐','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('14','1','面包蛋糕','1','2','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:2:{s:7:\"is_html\";N;s:11:\"field_value\";N;}','0','0','','mianbaodangao','0');");
E_D("replace into `qb_dianping_sort` values('15','1','川菜','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('16','1','海鲜','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('17','1','主题餐厅','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('18','1','粤菜','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('19','1','自助','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('20','1','东北菜','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('21','1','日本料理','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('22','1','韩国料理','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('23','1','湘菜','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('24','1','清真','1','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('25','2','酒吧','2','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('26','2','KTV','2','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('27','2','棋牌','2','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('28','2','健身','2','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('29','2','洗浴','2','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('30','2','网吧','2','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('31','3','超市/士多','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('32','3','通讯/数码产品','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('33','3','水果店','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('34','3','杂货店','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('35','3','工艺品店','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('36','4','婚庆/摄影摄像','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('37','4','家政/保姆','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('38','4','维修','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('39','4','搬家/搬运','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('40','4','开锁/配钥匙','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('41','4','保洁','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('42','4','快递','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('43','5','星级酒店','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('44','5','旅馆/客栈','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('45','5','旅行社','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('46','5','景点景区','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('47','6','学校','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('48','6','培训','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('49','6','学前教育','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('50','6','教育机构','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('51','6','家教','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('52','6','辅导班','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('53','7','美发','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('54','7','美容','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('55','7','美体','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('56','7','减肥','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('57','7','按摩','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('58','8','汽修维修美容','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('59','8','车辆租赁买卖','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('60','8','4S专卖店','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('61','9','医院','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('62','9','药店','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('63','9','诊所','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");
E_D("replace into `qb_dianping_sort` values('64','9','整容整形','3','2','0','0','','0','0','','','','','','','0','','','','1','','','','','0','','0','0','','','0');");

require("../../inc/footer.php");
?>