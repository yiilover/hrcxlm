<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_zone`;");
E_C("CREATE TABLE `qb_zone` (
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
) ENGINE=MyISAM AUTO_INCREMENT=191 DEFAULT CHARSET=gbk");
E_D("replace into `qb_zone` values('1','1','海淀','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','HaiDian');");
E_D("replace into `qb_zone` values('2','1','朝阳','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ChaoYang');");
E_D("replace into `qb_zone` values('3','1','东城','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','DongCheng');");
E_D("replace into `qb_zone` values('4','1','西城','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XiCheng');");
E_D("replace into `qb_zone` values('5','1','崇文','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ChongWen');");
E_D("replace into `qb_zone` values('6','1','宣武','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XuanWu');");
E_D("replace into `qb_zone` values('7','1','丰台','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','FengTai');");
E_D("replace into `qb_zone` values('8','1','石景山','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ShiJingShan');");
E_D("replace into `qb_zone` values('9','1','房山','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','FangShan');");
E_D("replace into `qb_zone` values('10','1','大兴','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','DaXing');");
E_D("replace into `qb_zone` values('11','1','通州','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','TongZhou');");
E_D("replace into `qb_zone` values('12','1','顺义','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ShunYi');");
E_D("replace into `qb_zone` values('13','1','昌平','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ChangPing');");
E_D("replace into `qb_zone` values('14','1','密云','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','MiYun');");
E_D("replace into `qb_zone` values('15','1','怀柔','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','HuaiRou');");
E_D("replace into `qb_zone` values('16','1','延庆','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','YanQing');");
E_D("replace into `qb_zone` values('17','1','平谷','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','PingGu');");
E_D("replace into `qb_zone` values('18','1','门头沟','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','MenTouGou');");

require("../../inc/footer.php");
?>