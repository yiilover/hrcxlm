<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_memberdata`;");
E_C("CREATE TABLE `qb_memberdata` (
  `uid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL DEFAULT '',
  `qq_api` varchar(32) NOT NULL DEFAULT '',
  `question` varchar(32) NOT NULL DEFAULT '',
  `groupid` smallint(4) NOT NULL DEFAULT '0',
  `grouptype` tinyint(1) NOT NULL DEFAULT '0',
  `groups` varchar(255) NOT NULL DEFAULT '',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `newpm` tinyint(1) NOT NULL DEFAULT '0',
  `medals` varchar(255) NOT NULL DEFAULT '',
  `money` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `totalspace` bigint(13) NOT NULL DEFAULT '0',
  `usespace` bigint(13) NOT NULL DEFAULT '0',
  `oltime` int(10) NOT NULL DEFAULT '0',
  `lastvist` int(10) NOT NULL DEFAULT '0',
  `lastip` varchar(15) NOT NULL DEFAULT '',
  `regdate` int(10) NOT NULL DEFAULT '0',
  `regip` varchar(15) NOT NULL DEFAULT '',
  `sex` tinyint(1) NOT NULL DEFAULT '0',
  `bday` date NOT NULL DEFAULT '0000-00-00',
  `icon` varchar(150) NOT NULL DEFAULT '',
  `introduce` text NOT NULL,
  `hits` int(7) NOT NULL DEFAULT '0',
  `lastview` int(10) NOT NULL DEFAULT '0',
  `oicq` varchar(11) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `homepage` varchar(150) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `provinceid` mediumint(6) NOT NULL DEFAULT '0',
  `cityid` mediumint(7) NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL DEFAULT '',
  `postalcode` varchar(6) NOT NULL DEFAULT '',
  `mobphone` varchar(12) NOT NULL DEFAULT '',
  `telephone` varchar(25) NOT NULL DEFAULT '',
  `idcard` varchar(20) NOT NULL DEFAULT '',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `config` text NOT NULL,
  `moneycard` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `email_yz` tinyint(1) NOT NULL DEFAULT '0',
  `mob_yz` tinyint(1) NOT NULL DEFAULT '0',
  `idcard_yz` tinyint(1) NOT NULL DEFAULT '0',
  `rmb` float NOT NULL DEFAULT '0',
  `rmb_freeze` float NOT NULL DEFAULT '0',
  `rmb_pwd` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`uid`),
  KEY `groups` (`groups`),
  KEY `sex` (`sex`,`bday`,`cityid`),
  KEY `qq_api` (`qq_api`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `qb_memberdata` values('1','admin','','','3','1','','1','0','','3666','0','427851422','6532076','1368289801','127.0.0.1','1253678332','127.0.0.1','1','1890-00-00','http://down.qibosoft.com/other/testv6/upload_files/icon/1.jpg','fdfdf','242','1368284386','888888','','','qibobb@126.com','0','1','cvbnmmm','510660','13399999999','02028349635','','уея╖ся','a:1:{s:7:\"endtime\";s:0:\"\";}','7','0','0','0','9','301','e10adc3949ba59abbe56e057f20f883e');");
E_D("replace into `qb_memberdata` values('37','test11','','','8','1','','1','0','','5','0','10658','0','1288663688','127.0.0.1','1288663688','127.0.0.1','0','0000-00-00','','','1','1367775153','','','','test11@dew.cn','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('36','test10','','','8','1','','1','0','','5','0','14283','0','1288663488','127.0.0.1','1288663488','127.0.0.1','0','0000-00-00','','','1','1367775151','','','','test10@dsa.cn','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('35','test9','','','8','1','','1','0','','5','0','13302','0','1288663331','127.0.0.1','1288663331','127.0.0.1','0','0000-00-00','','','1','1367775150','','','','test9@dsa.cn','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('34','test8','','','8','1','','1','0','','5','0','10725','0','1288663154','127.0.0.1','1288663154','127.0.0.1','0','0000-00-00','','','1','1367775148','','','','test8@dsa.cm','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('33','test7','','','8','1','','1','0','','5','0','12667','0','1288663028','127.0.0.1','1288663028','127.0.0.1','0','0000-00-00','','','0','0','','','','test7@es.cm','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('32','test6','','','8','1','','1','0','','5','0','144578','250','1341368619','127.0.0.1','1288662836','127.0.0.1','0','0000-00-00','','','1','1367774669','','','','test6@dsa.cn','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('31','test5','','','8','1','','1','0','','5','0','107377','303','1341368342','127.0.0.1','1288662633','127.0.0.1','0','0000-00-00','','','1','1318476018','','','','test5@ds.cn','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('30','test4','','','8','1','','1','0','','5','0','17044','186','1341368304','127.0.0.1','1288662370','127.0.0.1','0','0000-00-00','','','0','0','','','','test4@qq.cn','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('29','test3','','','8','1','','1','0','','5','0','160010','144','1341368115','127.0.0.1','1288662223','127.0.0.1','0','0000-00-00','','','0','0','','','','test3@qq.cn','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('28','test2','','','8','1','','1','0','','5','0','80741','1536','1348795872','127.0.0.1','1288661813','127.0.0.1','0','0000-00-00','','','0','0','','','','test2@qq.cn','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('27','test1','','','8','1','','1','0','','5','0','106781','26884','1341367969','127.0.0.1','1288661559','127.0.0.1','0','0000-00-00','','','4','1367774667','','','','test1@qq.com','0','0','','','','','','','','0','0','0','0','0','0','343d9040a671c45832ee5381860e2996');");

require("../../inc/footer.php");
?>