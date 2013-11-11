<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_rmb_consume`;");
E_C("CREATE TABLE `qb_rmb_consume` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `money` float NOT NULL DEFAULT '0',
  `about` varchar(255) NOT NULL DEFAULT '',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `freeze` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=gbk");
E_D("replace into `qb_rmb_consume` values('1','1','-10','04月20日11:46 提现','1334893560','1');");
E_D("replace into `qb_rmb_consume` values('2','1','0','提现','1334893927','0');");
E_D("replace into `qb_rmb_consume` values('3','1','-900','购买:','1345604337','0');");
E_D("replace into `qb_rmb_consume` values('4','1','900','销售:','1345604337','0');");
E_D("replace into `qb_rmb_consume` values('5','1','-900','购买:','1345604424','0');");
E_D("replace into `qb_rmb_consume` values('6','1','900','销售:','1345604424','0');");
E_D("replace into `qb_rmb_consume` values('7','1','-900','购买:','1345605405','0');");
E_D("replace into `qb_rmb_consume` values('8','1','900','销售:','1345605405','0');");
E_D("replace into `qb_rmb_consume` values('9','1','-900','购买:','1345618154','0');");
E_D("replace into `qb_rmb_consume` values('10','1','900','销售:','1345618154','0');");
E_D("replace into `qb_rmb_consume` values('11','1','-900','购买:','1345618156','0');");
E_D("replace into `qb_rmb_consume` values('12','1','900','销售:','1345618156','0');");
E_D("replace into `qb_rmb_consume` values('13','1','-1','帐户余额充值积分','1354069690','0');");
E_D("replace into `qb_rmb_consume` values('14','1','-1','帐户余额充值积分','1354069969','0');");

require("../../inc/footer.php");
?>