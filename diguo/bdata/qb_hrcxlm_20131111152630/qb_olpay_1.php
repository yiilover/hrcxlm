<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_olpay`;");
E_C("CREATE TABLE `qb_olpay` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `orderid` int(10) NOT NULL DEFAULT '0',
  `numcode` varchar(32) NOT NULL DEFAULT '',
  `money` varchar(15) NOT NULL DEFAULT '0',
  `ifpay` tinyint(1) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(32) NOT NULL DEFAULT '',
  `paytype` tinyint(3) NOT NULL DEFAULT '0',
  `moduleid` mediumint(5) NOT NULL DEFAULT '0',
  `formid` mediumint(5) NOT NULL DEFAULT '0',
  `banktype` varchar(15) NOT NULL DEFAULT '',
  `articleid` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `numcode` (`numcode`),
  KEY `paytype` (`paytype`),
  KEY `formid` (`formid`),
  KEY `articleid` (`articleid`),
  KEY `moduleid` (`moduleid`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=gbk");
E_D("replace into `qb_olpay` values('33','0','08nyzxrb9a','10','0','1284605041','1','admin','1','0','0','yeepay','0');");
E_D("replace into `qb_olpay` values('34','0','c9suzgq8vo','1','0','1326162769','1','admin','1','0','0','tenpay','0');");
E_D("replace into `qb_olpay` values('35','0','c7anj0fup3','1','0','1326162903','1','admin','1','0','0','tenpay','0');");
E_D("replace into `qb_olpay` values('36','0','3npse3wuhi','1','0','1326163415','1','admin','1','0','0','tenpay','0');");
E_D("replace into `qb_olpay` values('37','0','syb5rsbxnj','1','0','1332219738','1','admin','1','0','0','alipay','0');");
E_D("replace into `qb_olpay` values('38','0','lrzxcjthih','1','0','1339408330','1','admin','1','0','0','alipay','0');");
E_D("replace into `qb_olpay` values('39','0','lzw1lh2wjh','1','0','1339408821','1','admin','1','0','0','alipay','0');");
E_D("replace into `qb_olpay` values('40','0','azt67tt4hf','1','0','1339408999','1','admin','1','0','0','alipay','0');");
E_D("replace into `qb_olpay` values('41','0','adcnfvoks5','1','0','1339409039','1','admin','1','0','0','alipay','0');");
E_D("replace into `qb_olpay` values('42','0','tytfbtqkvz','1','0','1339409048','1','admin','1','0','0','alipay','0');");
E_D("replace into `qb_olpay` values('43','0','o6hgyck3cn','1','0','1339409114','1','admin','1','0','0','alipay','0');");
E_D("replace into `qb_olpay` values('44','0','hf2hagizuc','1','0','1339409275','1','admin','1','0','0','alipay','0');");
E_D("replace into `qb_olpay` values('45','0','znp0kblzdq','1','0','1339409297','1','admin','1','0','0','alipay','0');");
E_D("replace into `qb_olpay` values('46','0','qdh9puwrn6','1','0','1339409405','1','admin','1','0','0','alipay','0');");
E_D("replace into `qb_olpay` values('47','0','6qh52jtruv','1','0','1339409423','1','admin','1','0','0','alipay','0');");
E_D("replace into `qb_olpay` values('48','0','epmp2s1jed','1','0','1355988842','1','admin','1','0','0','paypal','0');");
E_D("replace into `qb_olpay` values('49','0','sk0b5eadvs','1','0','1355988894','1','admin','1','0','0','paypal','0');");
E_D("replace into `qb_olpay` values('50','0','xv1e6k6ilz','1','0','1355988967','1','admin','1','0','0','paypal','0');");
E_D("replace into `qb_olpay` values('51','0','iak46iuqwv','1','1','1355989101','1','admin','1','0','0','paypal','0');");
E_D("replace into `qb_olpay` values('52','0','ql3mnfa2nw','1','1','1355989742','1','admin','1','0','0','paypal','0');");
E_D("replace into `qb_olpay` values('53','0','ibu3qkobky','1','0','1355989855','1','admin','1','0','0','paypal','0');");
E_D("replace into `qb_olpay` values('54','0','sfadpquzu7','1','0','1355990180','1','admin','1','0','0','paypal','0');");
E_D("replace into `qb_olpay` values('55','0','xlfh6lohs8','1','0','1355990883','1','admin','1','0','0','paypal','0');");
E_D("replace into `qb_olpay` values('56','0','uyjljl1agn','1','1','1356425347','1','admin','1','0','0','paypal','0');");
E_D("replace into `qb_olpay` values('57','0','abzg4yzj7i','0.01','0','1365388422','1','admin','1','0','0','alipay','0');");
E_D("replace into `qb_olpay` values('58','0','iji3npnlgw','0.01','1','1365388777','1','admin','1','0','0','alipay','0');");

require("../../inc/footer.php");
?>