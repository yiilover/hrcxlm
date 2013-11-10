<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_house_content_1`;");
E_C("CREATE TABLE `qb_house_content_1` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `sortid` tinyint(3) NOT NULL DEFAULT '0',
  `price` int(8) NOT NULL DEFAULT '0',
  `room_type` varchar(30) NOT NULL DEFAULT '',
  `peitao` varchar(150) NOT NULL DEFAULT '',
  `acreage` varchar(12) NOT NULL DEFAULT '',
  `fitment` varchar(15) NOT NULL DEFAULT '',
  `floor` varchar(12) NOT NULL DEFAULT '',
  `station` varchar(100) NOT NULL DEFAULT '',
  `bus` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`),
  KEY `room_type` (`room_type`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `qb_house_content_1` values('2','29','1','1','第三金碧花园座立在: 广州市海珠区工业大道南，金碧花园分为三个期。 分别有: 第一金碧花园(包含都市广场), 第二金碧花园(包含碧水闲庭), 第三金碧花园(包含爵府天下). 占地面积52万平方米, 建筑面积200万平方米, 18万平方米的园林绿地, 8000产方米中心花园, 15个风格各异的主题花园, 绿化面积高达35%, 更有5个超过一万平方米的人工湖。','2','3500','三室两厅','水/电','128','精装修','14','华师站','45路');");
E_D("replace into `qb_house_content_1` values('3','30','1','1','黄埔花园——广州市黄埔区中山大道和丰乐南路交界处，位于广州黄埔区中心位置，紧邻众多城市动脉，地铁、渡轮航班、长途汽车等立体式交通，方便快捷。黄埔花园——占地16万平方米，建筑面积42万平方米，其住宅部分由数十栋12-23层高楼宇组成，是黄埔中心区域规模最大的生态水景园林社区。社区内配套成熟，除大型会所外，还设有商业服务设施、中学、幼儿园一体化素质教育配套等。面积达3万平方米的商场，集时尚、潮流于一体。黄埔花园——将分三期建设，2004年4月，首期单位将正式对外推出。二期将主要以高层洋房为主，2004年6月将全面动工，大型商业中心也将在今年中开始建设，三期单位也将于2004年底动工。户型都是中规中矩、方方正正的，动静分离。一进门一律就是客厅、餐厅相连直出阳台，大厅开间都有四米以上，阳台进深也大多有一米五，采光通风具有较强的均好性。','2','3000','一居室','水/电/宽带/管道煤气','98','普通装修','12','黄村站','15路');");
E_D("replace into `qb_house_content_1` values('4','31','1','1',' &nbsp;  &nbsp;  万科城市花园，位于黄埔区大沙中心区，临近区政府，是黄埔的行政中心、商业中心。北侧是规划公园，可以近享一块完整的生态绿地，西侧则临近政府规划中文化中心，政府计划建设区图书馆、科技馆、博物馆等一批文化设施。','1','2900','三室两厅','水/电/宽带/管道煤气/电梯','95','普通装修','16','岗顶站','B9');");
E_D("replace into `qb_house_content_1` values('5','32','1','1',' 二号大院位于员村四横路，小区安静，绿化率高，自住首选。','1','1300','一室一厅','水/电/电梯/家具','23','普通装修','5','员村站','15路');");
E_D("replace into `qb_house_content_1` values('6','33','1','1','勤天E品是新一代复式酒店服务公寓，地处被誉为&ldquo;广州硅谷&rdquo;的天河软件园的核心位置，紧邻中山大道与科韵路，距琶洲会展中心5分钟车程，数十条公交路线经过，离5号地铁线科韵路站步行不到五分钟，附近天河公园、好又多、银行、酒店、学院等，生活和交通非常方便.五星级酒店式服务管理，豪华、高尚、尊贵、气派，自住首选。','2','2800','两室两厅','水/电/管道煤气','56','豪华装修','12','学院站','15路');");

require("../../inc/footer.php");
?>