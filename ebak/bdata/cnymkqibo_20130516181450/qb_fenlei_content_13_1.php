<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_fenlei_content_13`;");
E_C("CREATE TABLE `qb_fenlei_content_13` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `sortid` tinyint(3) NOT NULL DEFAULT '0',
  `sortid2` tinyint(3) NOT NULL DEFAULT '0',
  `my_228` tinyint(1) NOT NULL DEFAULT '0',
  `my_837` varchar(100) NOT NULL DEFAULT '',
  `my_613` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`),
  KEY `my_228` (`my_228`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `qb_fenlei_content_13` values('1','38','158','1','　入乡随俗羊汤美\r\n　　涮羊肉，只有涮完以后清水入了羊肉的味，汤才鲜美。广东人开宴，第一道菜却讲究要上“老火靓汤”。 可以先喝口羊汤么？店家答：当然可以！\r\n　　此处的羊汤不再是北方常见的那种清汤撒上肉片片。大块大块的羊腱骨，配上牛骨、鸡肉、玉米，一起放到锅里熬，颇有些广式风味。端上来，乳白的羊肉冒着热气，碗里水脂交融，不肥不腻。\r\n　　这道“羊腱骨汤”，把骨头的精华都煮烂了在汤里，喝起来清香醇绵，完全不输砂锅煲出的老火汤。作为主料的腱骨，成汤之后也并不闲着。腱骨上的大块羊肉啃起来很有嚼头，蘸着吃的调料就分好几种，啃骨头也要你啃出花样来。\r\n　　一碗汤下肚，啃了几块羊骨头，还不满足怎么办？那就开宴吧！','4','4','2','34路','车陂站');");

require("../../inc/footer.php");
?>