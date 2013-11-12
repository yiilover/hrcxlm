<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_shop_address`;");
E_C("CREATE TABLE `qb_shop_address` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `order_username` varchar(20) NOT NULL DEFAULT '',
  `order_phone` varchar(20) NOT NULL DEFAULT '',
  `order_mobphone` varchar(15) NOT NULL DEFAULT '',
  `order_email` varchar(50) NOT NULL DEFAULT '',
  `order_qq` varchar(11) NOT NULL DEFAULT '',
  `order_postcode` varchar(6) NOT NULL DEFAULT '',
  `order_address` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `qb_shop_address` values('2','1','уея╖ся','02028349635','13399999999','54325@qq.com','888888','510660','cvbnmmm');");

require("../../inc/footer.php");
?>