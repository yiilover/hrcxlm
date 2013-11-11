<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_house_buyad`;");
E_C("CREATE TABLE `qb_house_buyad` (
  `aid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `sortid` mediumint(7) NOT NULL DEFAULT '0',
  `cityid` mediumint(7) NOT NULL DEFAULT '0',
  `id` int(10) NOT NULL DEFAULT '0',
  `mid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `begintime` int(10) NOT NULL DEFAULT '0',
  `endtime` int(10) NOT NULL DEFAULT '0',
  `money` mediumint(7) NOT NULL DEFAULT '0',
  `hits` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`aid`),
  KEY `sortid` (`sortid`,`money`,`endtime`,`cityid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>