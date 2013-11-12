<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_guestbook_content`;");
E_C("CREATE TABLE `qb_guestbook_content` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `ico` tinyint(2) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '',
  `oicq` varchar(11) DEFAULT NULL,
  `weburl` varchar(150) NOT NULL DEFAULT '',
  `blogurl` varchar(150) NOT NULL DEFAULT '',
  `uid` int(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `list` int(10) NOT NULL DEFAULT '0',
  `reply` text NOT NULL,
  `mobphone` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=gbk");
E_D("replace into `qb_guestbook_content` values('12','0','1','','','','','1','admin','192.168.0.99','忘记密码强制进入网站后台的方法是:修改/admin/global.php文件,查找\$ForceEnter=0;把0改成1即可,强制进入网站的后台.','1','1240206881','1240206881','','');");
E_D("replace into `qb_guestbook_content` values('13','0','1','','','','','1','admin','192.168.0.99','普通管理员成为超级管理员的方法是,修改文件/齐博CMS/admin.php,把里边的帐号更换一下即可','1','1240206958','1240206958','','');");
E_D("replace into `qb_guestbook_content` values('14','0','1','','','','','1','admin','192.168.0.99','整站系统的数据库配置文件是/齐博CMS/mysql_config.php','1','1240207079','1240207079','','');");
E_D("replace into `qb_guestbook_content` values('15','0','1','','','','','1','admin','192.168.0.99','服务器默认限制上传文件大小为2M,你如果不修改服务器设置.而想在整站系统上传大于2M的文件.是不可以的.必须先修改服务器设置.一般来说服务器的PHP配置文件放在c:\\\\windows\\\\php.ini这里.','1','1240207216','1240207216','','');");
E_D("replace into `qb_guestbook_content` values('16','0','1','','','','','1','admin','192.168.0.99','如果服务器做了限制.就无法使用采集程序.','1','1240207330','1240207330','','');");
E_D("replace into `qb_guestbook_content` values('22','1','1','','','','','1','admin','127.0.0.1','fsdafds\r\nwfdsafd','1','1283393799','1283393799','a:4:{s:8:\"username\";s:5:\"admin\";s:7:\"content\";s:20:\"wfdsa\r\nfd\r\n3511\r\n999\";s:8:\"posttime\";i:1283394570;s:3:\"uid\";s:1:\"1\";}','');");
E_D("replace into `qb_guestbook_content` values('23','2','1','','','','','1','admin','127.0.0.1','42452424','1','1283395885','1283395885','a:4:{s:7:\"content\";s:7:\"1111144\";s:3:\"uid\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:8:\"posttime\";i:1283395894;}','');");

require("../../inc/footer.php");
?>