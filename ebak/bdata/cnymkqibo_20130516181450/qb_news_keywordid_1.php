<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_news_keywordid`;");
E_C("CREATE TABLE `qb_news_keywordid` (
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `aid` mediumint(7) NOT NULL DEFAULT '0',
  KEY `id` (`id`),
  KEY `aid` (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>