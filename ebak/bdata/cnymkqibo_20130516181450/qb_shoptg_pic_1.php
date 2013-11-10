<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_shoptg_pic`;");
E_C("CREATE TABLE `qb_shoptg_pic` (
  `pid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `imgurl` varchar(150) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `id` (`id`),
  KEY `fid` (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `qb_shoptg_pic` values('1','10','1','0','1','0','qb_shoptg_/1/1_20101227211204_mwrvk.jpg','');");
E_D("replace into `qb_shoptg_pic` values('2','11','1','0','1','0','qb_shoptg_/1/1_20101227211213_likqz.jpg','');");
E_D("replace into `qb_shoptg_pic` values('3','12','1','0','1','0','qb_shoptg_/1/1_20101227211251_qeki2.jpg','');");

require("../../inc/footer.php");
?>