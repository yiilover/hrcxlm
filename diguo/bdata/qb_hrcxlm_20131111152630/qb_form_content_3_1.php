<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_form_content_3`;");
E_C("CREATE TABLE `qb_form_content_3` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `advicetype` varchar(30) NOT NULL DEFAULT '',
  `content` mediumtext NOT NULL,
  `truename` varchar(15) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `mobphone` varchar(25) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=gbk");
E_D("replace into `qb_form_content_3` values('18','1','售后客服','d','王大上','54325@qq.com','133444444443');");
E_D("replace into `qb_form_content_3` values('25','1','售后客服','hhhhhhhhhhhhhhhhhh','222223','54325@qq.com','13377777777');");
E_D("replace into `qb_form_content_3` values('27','1','产品质量','服务态度不太好哦\r\n希望改正.','张小','54325@qq.com','13377777777');");

require("../../inc/footer.php");
?>