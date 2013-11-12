<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_pm`;");
E_C("CREATE TABLE `qb_pm` (
  `mid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `touid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `togroups` varchar(80) NOT NULL DEFAULT '',
  `fromuid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(15) NOT NULL DEFAULT '',
  `type` enum('rebox','sebox','public') NOT NULL DEFAULT 'rebox',
  `ifnew` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(130) NOT NULL DEFAULT '',
  `mdate` int(10) unsigned NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  PRIMARY KEY (`mid`),
  KEY `touid` (`touid`),
  KEY `fromuid` (`fromuid`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `qb_pm` values('1','1','','0','SYSTEM','rebox','0','有客户向你报价了','1381936071','请尽快查看<A HREF=''http://www3.ddecshop.com/buy/member/joinshow.php?id=1'' target=''_blank''>http://www3.ddecshop.com/buy/member/joinshow.php?id=1</A>');");
E_D("replace into `qb_pm` values('2','1','','0','SYSTEM','rebox','1','你有客户下订单了','1382285084','请尽快查看<A HREF=''http://www3.ddecshop.com/shop/member/joinshow.php?id=3'' target=''_blank''>http://www3.ddecshop.com/shop/member/joinshow.php?id=3</A>');");
E_D("replace into `qb_pm` values('3','1','','0','SYSTEM','rebox','1','你有客户下订单了','1382285125','请尽快查看<A HREF=''http://www3.ddecshop.com/shop/member/joinshow.php?id=4'' target=''_blank''>http://www3.ddecshop.com/shop/member/joinshow.php?id=4</A>');");
E_D("replace into `qb_pm` values('4','1','','0','SYSTEM','rebox','1','你有客户下订单了','1382460201','请尽快查看<A HREF=''http://www3.ddecshop.com/shop/member/joinshow.php?id=5'' target=''_blank''>http://www3.ddecshop.com/shop/member/joinshow.php?id=5</A>');");
E_D("replace into `qb_pm` values('5','1','','0','SYSTEM','rebox','1','有客户向你报价了','1382460439','请尽快查看<A HREF=''http://www3.ddecshop.com/buy/member/joinshow.php?id=2'' target=''_blank''>http://www3.ddecshop.com/buy/member/joinshow.php?id=2</A>');");

require("../../inc/footer.php");
?>