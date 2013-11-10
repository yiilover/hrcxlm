<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_dianping_content`;");
E_C("CREATE TABLE `qb_dianping_content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `fname` varchar(50) NOT NULL DEFAULT '',
  `info` tinyint(2) NOT NULL DEFAULT '0',
  `hits` mediumint(7) NOT NULL DEFAULT '0',
  `comments` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `list` varchar(10) NOT NULL DEFAULT '',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `titlecolor` varchar(15) NOT NULL DEFAULT '',
  `fonttype` tinyint(1) NOT NULL DEFAULT '0',
  `picurl` varchar(150) NOT NULL DEFAULT '',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `yzer` varchar(30) NOT NULL DEFAULT '',
  `yztime` int(10) NOT NULL DEFAULT '0',
  `levels` tinyint(2) NOT NULL DEFAULT '0',
  `levelstime` int(10) NOT NULL DEFAULT '0',
  `keywords` varchar(100) NOT NULL DEFAULT '',
  `jumpurl` varchar(150) NOT NULL DEFAULT '',
  `iframeurl` varchar(150) NOT NULL DEFAULT '',
  `style` varchar(15) NOT NULL DEFAULT '',
  `head_tpl` varchar(150) NOT NULL DEFAULT '',
  `main_tpl` varchar(150) NOT NULL DEFAULT '',
  `foot_tpl` varchar(100) NOT NULL DEFAULT '',
  `target` tinyint(1) NOT NULL DEFAULT '0',
  `ishtml` tinyint(1) NOT NULL DEFAULT '0',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `lastfid` mediumint(7) NOT NULL DEFAULT '0',
  `money` mediumint(7) NOT NULL DEFAULT '0',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  `editer` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) NOT NULL DEFAULT '0',
  `begintime` int(10) NOT NULL DEFAULT '0',
  `endtime` int(10) NOT NULL DEFAULT '0',
  `config` text NOT NULL,
  `lastview` int(10) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  `zone_id` mediumint(7) NOT NULL DEFAULT '0',
  `street_id` mediumint(7) NOT NULL DEFAULT '0',
  `editpwd` varchar(32) NOT NULL DEFAULT '',
  `showday` mediumint(4) NOT NULL DEFAULT '0',
  `visit_log` text NOT NULL,
  `visit_num` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `telephone` varchar(30) NOT NULL DEFAULT '',
  `mobphone` varchar(12) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `oicq` varchar(11) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `linkman` varchar(20) NOT NULL DEFAULT '',
  `postcode` varchar(6) NOT NULL DEFAULT '',
  `address` varchar(250) NOT NULL DEFAULT '',
  `weburl` varchar(150) NOT NULL DEFAULT '',
  `fax` varchar(30) NOT NULL DEFAULT '',
  `maps` varchar(50) NOT NULL DEFAULT '',
  `picnum` smallint(4) NOT NULL DEFAULT '0',
  `replytime` int(10) NOT NULL DEFAULT '0',
  `is_claim` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `ispic` (`ispic`),
  KEY `city_id` (`city_id`),
  KEY `zone_id` (`zone_id`),
  KEY `street_id` (`street_id`),
  KEY `list` (`list`,`fid`,`city_id`,`yz`),
  KEY `hits` (`hits`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gbk");
E_D("replace into `qb_dianping_content` values('11','聚农山庄','1','18','景点景区','0','264','4','1315281455','1315281455','1','admin','','0','http://food.gznet.com/Admin/Upfile/Image/20101206/1291597493879.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1367899188','1','0','0','','0','','0','020-28319632','13399999999','54325@qq.com','888888','','','','广州番禺迎宾路','','','39.861526631585534,116.40924453735351','5','1315988493','1');");
E_D("replace into `qb_dianping_content` values('2','珍滋味港式粥火锅','1','18','火锅','0','17','0','1314931147','1314931147','1','admin','','0','http://food.gznet.com/Admin/Upfile/Image/20110706/1309917595854.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','1315190347','','1367895017','1','0','0','','3','','0','','13399999999','54325@qq.com','888888','','','','朝阳区新源里中街8号(近东直门外)','','','39.89373598595594,116.40778541564941','4','0','0');");
E_D("replace into `qb_dianping_content` values('3','小肥羊(东直门店)','1','18','火锅','0','8','0','1314931325','1314931325','1','admin','','0','http://food.gznet.com/Admin/Upfile/Image/20110804/1312423993091.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1367704596','1','1','3','','0','','0','','13399999999','54325@qq.com','888888','','','','东城区东直门内大街209号(近东内小街)','','','39.88194740495374,116.39285087585449','4','0','0');");
E_D("replace into `qb_dianping_content` values('4','大董烤鸭店(东四十条店)','1','18','主题餐厅','0','5','1','1314931622','1314931622','1','admin','','0','http://food.gznet.com/Admin/Upfile/Image/20110314/1300062511813.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1367704598','1','1','2','','0','','0','','13399999999','54325@qq.com','888888','','','','东城区东四十条甲22号南新仓商务大厦1-2楼(东四十条桥西南)','','','39.88721629504685,116.39817237854004','4','1315989813','0');");
E_D("replace into `qb_dianping_content` values('5','都太国际连锁海鲜自助','1','18','海鲜','0','5','1','1314931741','1314931741','1','admin','','0','http://food.gznet.com/Admin/Upfile/Image/20110415/1302825887456.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1367704599','1','2','0','','0','','0','','13399999999','54325@qq.com','888888','','','','朝阳公园路6号SOLANA蓝色港湾商业区西北门餐饮酒吧街DS-05号','','','39.88794073576968,116.3510513305664','4','1315989677','0');");
E_D("replace into `qb_dianping_content` values('6','老头猪蹄猪肘','1','18','东北菜','0','24','3','1314932003','1314932003','1','admin','','0','http://food.gznet.com/Admin/Upfile/Image/20110804/1312423945955.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1367896528','1','1','11','','0','','0','','13399999999','54325@qq.com','888888','','','','海淀区西翠路3号院旺市百利对面','','','39.88774316178628,116.42967224121094','4','1315989500','0');");
E_D("replace into `qb_dianping_content` values('7','蓝钻国际美食自助百汇(西直门店)','1','18','自助','0','6','1','1314932105','1314932105','1','admin','','0','http://food.gznet.com/Admin/Upfile/Image/20110809/1312847933053.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1367894705','1','2','0','','0','','0','','13399999999','54325@qq.com','888888','','','','西城区高梁桥斜街59号中坤大厦内钟鼎楼食府3楼(近西直门嘉茂)','','','39.844394843964594,116.41448020935058','4','1315989284','0');");
E_D("replace into `qb_dianping_content` values('8','眉州东坡酒楼(中关村店)','1','18','粤菜','0','14','1','1314932243','1314932243','1','admin','','0','http://food.gznet.com/Admin/Upfile/Image/20110815/1313370270986.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1367895705','1','3','0','','0','','0','','13399999999','54325@qq.com','888888','','','','海淀区中关村大街27号中关村大厦2楼','','','39.857046423130654,116.33654594421387','4','1315989131','0');");
E_D("replace into `qb_dianping_content` values('9','丽江庭院之柔软时光(鼓楼店)','1','18','小吃快餐','0','9','1','1314932421','1314932421','1','admin','','0','http://food.gznet.com/Admin/Upfile/Image/20110801/1312160717237.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1367895707','1','4','0','','0','','0','','13399999999','54325@qq.com','888888','','','','西城区旧鼓楼大街国旺胡同18号(鼓楼地铁站南侧)','','','39.87740266203337,116.41533851623535','4','1315988945','0');");
E_D("replace into `qb_dianping_content` values('10','江边城外巫山烤全鱼(外经贸紫光大厦店)','1','18','川菜','0','40','1','1314932559','1314932559','1','admin','','0','http://food.gznet.com/Admin/Upfile/Image/20101201/1291165135578.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1367897821','1','2','0','','0','','0','','13399999999','54325@qq.com','888888','','','','朝阳区惠新东街11号紫光发展大厦B3-202号(对外经贸大学西门对面)','','','','4','1315988722','0');");

require("../../inc/footer.php");
?>