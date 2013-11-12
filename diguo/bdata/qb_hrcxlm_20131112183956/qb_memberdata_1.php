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
E_D("replace into `qb_memberdata` values('37','test11','','','8','1','','1','0','','5','0','10658','0','1288663688','127.0.0.1','1288663688','127.0.0.1','0','0000-00-00','','','1','1382019233','','','','test11@dew.cn','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('36','test10','','','8','1','','1','0','','5','0','14283','0','1288663488','127.0.0.1','1288663488','127.0.0.1','0','0000-00-00','','','1','1382018966','','','','test10@dsa.cn','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('35','test9','','','8','1','','1','0','','5','0','13302','0','1288663331','127.0.0.1','1288663331','127.0.0.1','0','0000-00-00','','','1','1382018302','','','','test9@dsa.cn','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('34','test8','','','8','1','','1','0','','5','0','10725','0','1288663154','127.0.0.1','1288663154','127.0.0.1','0','0000-00-00','','','0','0','','','','test8@dsa.cm','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('33','test7','','','8','1','','1','0','','5','0','12667','0','1288663028','127.0.0.1','1288663028','127.0.0.1','0','0000-00-00','','','0','0','','','','test7@es.cm','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('32','test6','','','8','1','','1','0','','5','0','144578','250','1341368619','127.0.0.1','1288662836','127.0.0.1','0','0000-00-00','','','1','1382363940','','','','test6@dsa.cn','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('31','test5','','','8','1','','1','0','','5','0','107377','303','1341368342','127.0.0.1','1288662633','127.0.0.1','0','0000-00-00','','','1','1318476018','','','','test5@ds.cn','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('30','test4','','','8','1','','1','0','','5','0','17044','186','1341368304','127.0.0.1','1288662370','127.0.0.1','0','0000-00-00','','','0','0','','','','test4@qq.cn','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('29','test3','','','8','1','','1','0','','5','0','160010','144','1341368115','127.0.0.1','1288662223','127.0.0.1','0','0000-00-00','','','0','0','','','','test3@qq.cn','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('28','test2','','','8','1','','1','0','','5','0','80741','1536','1348795872','127.0.0.1','1288661813','127.0.0.1','0','0000-00-00','','','0','0','','','','test2@qq.cn','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('27','test1','','','8','1','','1','0','','5','0','106781','26982','1371093190','127.0.0.1','1288661559','127.0.0.1','0','0000-00-00','','','4','1382363748','','','','test1@qq.com','0','0','','','','','','','','0','0','0','0','0','0','343d9040a671c45832ee5381860e2996');");
E_D("replace into `qb_memberdata` values('1','admin','','','3','0','','1','0','','275','0','2227961','161192','1384281573','127.0.0.1','1381914232','60.212.253.9','0','0000-00-00','','','10','1382521152','','','','','0','346','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('40','郑志兴','','','9','1','','1','0','','5','0','0','2721','1381467919','221.2.174.198','1381403209','221.2.174.198','0','0000-00-00','','','9','1382257559','','','','1318114876@qq.com','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('41','haizhitao4979','','','9','1','','1','0','','5','0','0','1733','1381454270','27.203.255.247','1381451819','27.203.255.247','0','0000-00-00','','','2','1382351706','','','','hltz898@126.com','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('42','zzzzzzz77','','','9','1','','1','0','','5','0','0','405','1381453260','221.217.43.23','1381452778','221.217.43.23','0','0000-00-00','','','21','1382629382','','','','e676618657@126.com','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('43','sara2','','','9','1','','1','0','','5','0','0','1408','1382023738','112.65.49.163','1381510940','112.65.49.163','0','0000-00-00','','','8','1382431318','','','','sara2@qq.com','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('44','北京总盟','','','8','0','','1','0','','0','0','0','3459','1382058999','60.212.253.9','1381911357','60.212.253.9','0','0000-00-00','','','3','1383732775','','','','hrcxlm@163.com','0','0','','','','','','','','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('45','山东总盟','','','11','0','','1','0','','0','0','0','1382','1381922570','221.2.148.207','1381912503','60.212.253.9','0','0000-00-00','','','4','1382236765','','','','zzx@hrcxlm.cn','0','0','','','','','','','a:1:{s:7:\"endtime\";s:0:\"\";}','0','0','0','0','0','0','');");
E_D("replace into `qb_memberdata` values('46','ffffff','','','8','0','','1','0','','5','0','0','1472','1382363058','114.240.54.159','1382318162','114.240.54.159','0','0000-00-00','','','1','1382353811','','','','676618657@qq.com','0','0','','','','','','','','0','0','0','0','0','0','');");

require("../../inc/footer.php");
?>