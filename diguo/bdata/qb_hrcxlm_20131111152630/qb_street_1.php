<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_street`;");
E_C("CREATE TABLE `qb_street` (
  `fid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `fup` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `name` varchar(200) NOT NULL DEFAULT '',
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
  `metakeywords` varchar(255) NOT NULL DEFAULT '',
  `metadescription` varchar(255) NOT NULL DEFAULT '',
  `allowcomment` tinyint(1) NOT NULL DEFAULT '0',
  `allowpost` varchar(150) NOT NULL DEFAULT '',
  `allowviewtitle` varchar(150) NOT NULL DEFAULT '',
  `allowviewcontent` varchar(150) NOT NULL DEFAULT '',
  `allowdownload` varchar(150) NOT NULL DEFAULT '',
  `forbidshow` tinyint(1) NOT NULL DEFAULT '0',
  `config` text NOT NULL,
  `dirname` varchar(150) NOT NULL DEFAULT '',
  PRIMARY KEY (`fid`),
  KEY `fup` (`fup`)
) ENGINE=MyISAM AUTO_INCREMENT=129 DEFAULT CHARSET=gbk");
E_D("replace into `qb_street` values('1','1','北太平庄','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','BeiTaiPingZhuang');");
E_D("replace into `qb_street` values('2','1','大钟寺','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','DaZhongSi');");
E_D("replace into `qb_street` values('3','1','定慧寺','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','DingHuiSi');");
E_D("replace into `qb_street` values('4','1','甘家口','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','GanJiaKou');");
E_D("replace into `qb_street` values('5','1','公主坟','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','GongZhuFen');");
E_D("replace into `qb_street` values('6','1','航天桥','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','HangTianQiao');");
E_D("replace into `qb_street` values('7','1','健翔桥','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','JianXiangQiao');");
E_D("replace into `qb_street` values('8','1','蓝靛厂','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','LanDianChang');");
E_D("replace into `qb_street` values('9','1','马甸','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','MaDian');");
E_D("replace into `qb_street` values('10','1','清河','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','QingHe');");
E_D("replace into `qb_street` values('11','1','上地','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ShangDi');");
E_D("replace into `qb_street` values('12','1','上庄','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ShangZhuang');");
E_D("replace into `qb_street` values('13','1','四季青','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','SiJiQing');");
E_D("replace into `qb_street` values('14','1','魏公村','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','WeiGongCun');");
E_D("replace into `qb_street` values('15','1','西二旗','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XiErQi');");
E_D("replace into `qb_street` values('16','1','五道口','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','WuDaoKou');");
E_D("replace into `qb_street` values('17','1','西三旗','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XiSanQi');");
E_D("replace into `qb_street` values('18','1','西直门','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XiZhiMen');");
E_D("replace into `qb_street` values('19','1','外香山','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','WaiXiangShan');");
E_D("replace into `qb_street` values('20','1','学院路','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XueYuanLu');");
E_D("replace into `qb_street` values('21','1','玉泉路','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','YuQuanLu');");
E_D("replace into `qb_street` values('22','1','圆明园','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','YuanMingYuan');");
E_D("replace into `qb_street` values('23','1','中关村','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ZhongGuanCun');");

require("../../inc/footer.php");
?>