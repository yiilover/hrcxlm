<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_zhuangxiu_content`;");
E_C("CREATE TABLE `qb_zhuangxiu_content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `xiaoqu_id` mediumint(7) NOT NULL DEFAULT '0',
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
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `ispic` (`ispic`),
  KEY `city_id` (`city_id`),
  KEY `zone_id` (`zone_id`),
  KEY `street_id` (`street_id`),
  KEY `list` (`list`,`fid`,`city_id`,`yz`),
  KEY `hits` (`hits`),
  KEY `xiaoqu_id` (`xiaoqu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=gbk");
E_D("replace into `qb_zhuangxiu_content` values('1','张小雪','6','0','6','设计师','0','5','0','1351148407','1351148407','1','admin','','0','qb_zhuangxiu_/6/1_20121025151007_wy1rm.jpg.gif','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382322784','1','0','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','','','','','','','1','0');");
E_D("replace into `qb_zhuangxiu_content` values('2','林春梅','6','0','6','设计师','0','11','0','1351148525','1351148525','1','admin','','0','qb_zhuangxiu_/6/1_20121025151005_q0oku.jpg.gif','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382314307','1','0','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','','','','','','','1','0');");
E_D("replace into `qb_zhuangxiu_content` values('3','何雪','6','0','6','设计师','0','63','2','1351148621','1351148621','1','admin','','0','qb_zhuangxiu_/6/1_20121025151041_314jy.jpg.gif','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382326328','1','0','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','','','','','','','1','0');");
E_D("replace into `qb_zhuangxiu_content` values('4','范婷婷','6','0','6','设计师','0','56','0','1351148705','1351148705','1','admin','','0','qb_zhuangxiu_/6/1_20121025151005_g4w9m.jpg.gif','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382315438','1','0','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','','','','','','','1','0');");
E_D("replace into `qb_zhuangxiu_content` values('5','北京昌平区纳帕澜郡68平米新房装修','1','0','1','装修招标','0','3','0','1351148834','1351148834','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382317969','1','13','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','admin','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('6','朝阳区酒仙桥附近 93平米旧房翻新','1','0','1','装修招标','0','5','0','1351148920','1351148920','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382331211','1','0','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','admin','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('7','丰台区蒲黄榆附近58平米旧房翻新','1','0','1','装修招标','0','3','0','1351148974','1351148974','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382321433','1','7','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','admin','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('8','丰台区卢沟桥附近80平米新房装修','1','0','1','装修招标','0','3','0','1351149013','1351149013','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382318719','1','7','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','admin','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('9','海淀区军事博物馆附近70平米旧房翻新','1','0','1','装修招标','0','5','0','1351149054','1351149054','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382319285','1','1','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','admin','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('10','朝阳区盛世家园150平米旧房翻新','1','0','1','装修招标','0','6','0','1351149094','1351149094','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382332889','1','2','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','admin','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('11','宣武区大栅栏附近20平米旧房翻新','1','0','1','装修招标','0','3','0','1351149126','1351149126','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382359899','1','6','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','admin','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('12','昌平区天通苑120平米新房装修','1','0','1','装修招标','0','7','0','1351149164','1351149164','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382361829','1','0','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','admin','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('13','海淀区上地领秀新硅谷480平米办公楼装修','1','0','1','装修招标','0','13','0','1351149215','1351149215','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382363012','1','1','11','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','admin','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('14','房山区乐活城87平米新房装修','1','0','1','装修招标','0','4','0','1351149247','1351149247','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382341370','1','9','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','admin','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('15','海淀区西三环120平米新房装修','1','0','1','装修招标','0','214','3','1351149286','1351149286','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382355188','1','1','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','admin','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('16','油漆市场鱼龙混杂 选对油漆我来出招','4','0','4','装修学堂','0','3','0','1351149404','1351149404','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382005845','1','0','0','','0','','0','','','','','','','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('17','节省是硬道理 家居装修巧选墙纸','4','0','4','装修学堂','0','5','0','1351149443','1351149443','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1381995753','1','0','0','','0','','0','','','','','','','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('18','菜鸟必学：装修程序20步，轻松搞定家装！','4','0','4','装修学堂','0','3','0','1351149476','1351149476','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382037120','1','0','0','','0','','0','','','','','','','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('19','细节决定装修成败！不得不看的注意事项！','4','0','4','装修学堂','0','33','1','1351149509','1351149509','1','admin','','0','qb_zhuangxiu_/4/1_20121123131153_gseby.jpg.gif','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382006880','1','0','0','','0','','0','','','','','','','','','','','','1','0');");
E_D("replace into `qb_zhuangxiu_content` values('20','好的办公室设计，人身处其中会很“顺” ！','4','0','4','装修学堂','0','4','0','1351149570','1351149570','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1381990835','1','0','0','','0','','0','','','','','','','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('21','定制完美家居产品 如何衔接装修流程！','4','0','4','装修学堂','0','3','0','1351149609','1351149609','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382032050','1','0','0','','0','','0','','','','','','','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('22','儿童房规划设计 必知4个注意事项！','4','0','4','装修学堂','0','7','1','1351149640','1351149640','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382021453','1','0','0','','0','','0','','','','','','','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('23','居室朝向不如意 设计绝招巧调整！','4','0','4','装修学堂','0','4','0','1351149674','1351149674','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382028791','1','0','0','','0','','0','','','','','','','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('24','隐蔽施工要注意 安全家居靠细节','4','0','4','装修学堂','0','4','0','1351149709','1351149709','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1381988297','1','0','0','','0','','0','','','','','','','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('25','家装中橱柜五金台面预算要做足 切记因小失大！','4','0','4','装修学堂','0','5','0','1351149737','1351149737','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1381989633','1','0','0','','0','','0','','','','','','','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('26','油漆涂料“抗甲醛”热 装一网提醒谨防被忽悠','4','0','4','装修学堂','0','6','0','1351149763','1351149763','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382423846','1','0','0','','0','','0','','','','','','','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('27','享受舒适休憩之地 打造森林系绿意阳台！','4','0','4','装修学堂','0','54','0','1351149800','1351149800','1','admin','','0','qb_zhuangxiu_/4/1_20121123131128_cqiwg.jpg.gif','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382423846','1','0','0','','0','','0','','','','','','','','','','','','1','0');");
E_D("replace into `qb_zhuangxiu_content` values('28','空间巧收纳 家居冬日瘦身12妙招','3','0','3','装修日志','0','4','0','1351149861','1351149861','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382015508','1','0','0','','0','','0','','','','','','','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('29','编辑总结经验：教您拥有环保健康住宅空间!','3','0','3','装修日志','0','4','0','1351149885','1351149885','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382002203','1','0','0','','0','','0','','','','','','','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('30','居家生活宝典：魔力镜面提亮家居美感','3','0','3','装修日志','0','3','0','1351149909','1351149909','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382003487','1','0','0','','0','','0','','','','','','','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('31','小空间变大经验之二：间接照明减少阻隔变空','3','0','3','装修日志','0','4','0','1351149936','1351149936','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382345263','1','0','0','','0','','0','','','','','','','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('32','有爱就有温暖 冬季家居升温五妙招！','3','0','3','装修日志','0','20','0','1351149961','1351149961','1','admin','','0','qb_zhuangxiu_/3/1_20121123131147_owsnb.jpg.gif','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382213774','1','0','0','','0','','0','','','','','','','','','','','','1','0');");
E_D("replace into `qb_zhuangxiu_content` values('33','框架、座垫等综合兼顾 五步选优质沙发','3','0','3','装修日志','0','4','0','1351149984','1351149984','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382033562','1','0','0','','0','','0','','','','','','','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('34','装修新房 不挑剔怎么行?不会挑也不行？','3','0','3','装修日志','0','4','0','1351150011','1351150011','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382175759','1','0','0','','0','','0','','','','','','','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('35','装修达人支招：教您避免小户型装修空间浪费','3','0','3','装修日志','0','3','0','1351150040','1351150040','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1381992023','1','0','0','','0','','0','','','','','','','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('36','装修这道“菜”不好吃 要拿准五大技巧八大注意','3','0','3','装修日志','0','3','0','1351150064','1351150064','1','admin','','0','','0','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1381998162','1','0','0','','0','','0','','','','','','','','','','','','0','0');");
E_D("replace into `qb_zhuangxiu_content` values('37','家庭装修分为三个档次 9招教您选择装修档次！','3','0','3','装修日志','0','13','0','1351150088','1351150088','1','admin','','0','qb_zhuangxiu_/3/1_20121123131115_v1qtp.jpg.gif','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382008272','1','0','0','','0','','0','','','','','','','','','','','','1','0');");
E_D("replace into `qb_zhuangxiu_content` values('38','北京（鸿达尚品）家居装饰有限公司','5','0','5','装修公司','0','31','1','1351150262','1351150262','1','admin','','0','zhuangxiu/headphoto_371152.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382365909','1','1','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','admin','','北京昌平区集美家具（回龙观店）东二层家装区B2102','','','39.929835374960035,116.33517072961422','1','0');");
E_D("replace into `qb_zhuangxiu_content` values('39','北京绿缘居装饰设计有限公司','5','0','5','装修公司','0','4','0','1351150518','1351150518','1','admin','','0','zhuangxiu/headphoto_242450c.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382335374','1','7','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','admin','','丰台区菜户营东街鹏润家园豪苑大厦A座20层','','','39.89402121811448,116.46975324914547','1','0');");
E_D("replace into `qb_zhuangxiu_content` values('40','北京北利祥和装饰工程有限公司','5','0','5','装修公司','0','6','0','1351150593','1351150593','1','admin','','0','zhuangxiu/headphoto_251701c.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382364926','1','0','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','admin','','昌平区天通苑太平家园35号楼','','','39.939838924426084,116.45018385217281','1','0');");
E_D("replace into `qb_zhuangxiu_content` values('41','北京宇华盛建筑装饰工程有限公司','5','0','5','装修公司','0','55','0','1351150656','1351150656','1','admin','','0','zhuangxiu/headphoto_436469c.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382336616','1','0','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','admin','','南三环中路68号自然美大厦','','','39.866489530854295,116.41464994714352','1','0');");
E_D("replace into `qb_zhuangxiu_content` values('42','北京洲际宏达装饰有限公司','5','0','5','装修公司','0','128','1','1351150728','1351150728','1','admin','','0','zhuangxiu/headphoto_250408c.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382348306','1','0','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','admin','','北京市朝阳区城外诚家居广场','','','39.93510058325899,116.34032057092281','1','0');");
E_D("replace into `qb_zhuangxiu_content` values('43','2012客厅装修图片大全 小客厅装修效果图','2','0','2','装修案例','0','13','0','1351150890','1351150890','1','admin','','0','zhuangxiu/20121025_e347471b25a9473f0544LOX3OBFqVOij.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382427828','1','0','0','','0','','0','','','','','','','','','','','','3','0');");
E_D("replace into `qb_zhuangxiu_content` values('44','60平小户型美式风格卧室装修 小资情调','2','0','2','装修案例','0','50','0','1351150960','1351150960','1','admin','','0','zhuangxiu/20120808_43a16b39ddd819bdb6aeDmmYrjZohsLt.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382429019','1','0','0','','0','','0','','','','','','','','','','','','4','0');");
E_D("replace into `qb_zhuangxiu_content` values('45','简约客厅图片 黑白客厅装修效果图','2','0','2','装修案例','0','13','0','1351151023','1351151023','1','admin','','0','zhuangxiu/20121025_3522af3343f63e47b7373Efed66yXrJD.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382430226','1','0','0','','0','','0','','','','','','','','','','','','4','0');");
E_D("replace into `qb_zhuangxiu_content` values('46','2012白色卧室效果图 卧室装修效果图大全2012图片','2','0','2','装修案例','0','18','0','1351151106','1351151106','1','admin','','0','zhuangxiu/20121025_1df70bda985b5aceda79zWnEULUi14ku.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382035906','1','0','0','','0','','0','','','','','','','','','','','','3','0');");
E_D("replace into `qb_zhuangxiu_content` values('47','简约风格客厅沙发装修效果图大全2012图片','2','0','2','装修案例','0','29','0','1351151345','1351151345','1','admin','','0','zhuangxiu/20121025_d4d2fdb9a966763224b1diSdQdjA42Ss.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382432561','1','0','0','','0','','0','','','','','','','','','','','','3','0');");
E_D("replace into `qb_zhuangxiu_content` values('48','50平米小户型客厅沙发装修效果图','2','0','2','装修案例','0','16','0','1351151925','1351151925','1','admin','','0','zhuangxiu/20121025_f03f4adc1990a8ea41efqG2kHCl6XgN2.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382212936','1','0','0','','0','','0','','','','','','','','','','','','3','0');");
E_D("replace into `qb_zhuangxiu_content` values('49','欧式现代风格卧室背景墙窗帘装修效果图','2','0','2','装修案例','0','100','0','1351152057','1351152057','1','admin','','0','zhuangxiu/20121025_de98bcc4e542d02398caGMf7GssbHGEc.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382211795','1','0','0','','0','','0','','','','','','','','','','','','9','0');");
E_D("replace into `qb_zhuangxiu_content` values('50','房屋田园装修图片','2','0','2','装修案例','0','40','0','1351152224','1351152224','1','admin','','0','zhuangxiu/20121024_4fca3a9456d2c90ff85aquDAXw9q2EWV.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382425393','1','0','0','','0','','0','','','','','','','','','','','','3','0');");
E_D("replace into `qb_zhuangxiu_content` values('51','陈玉婷','6','0','6','设计师','0','19','0','1351152435','1351152435','1','admin','','0','qb_zhuangxiu_/6/1_20121025161015_suqqv.jpg.gif','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382354712','1','0','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','','','','','','','1','0');");
E_D("replace into `qb_zhuangxiu_content` values('52','美式田园风惬意三居','2','0','2','装修案例','0','6','0','1364454239','1364454239','1','admin','','0','http://www.sukeju.com/uploadfile/2013/0305/20130305095937970.jpg','1','1','','0','0','0','田园','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382431312','1','0','0','','0','','0','','','','','','','','','','','','3','0');");
E_D("replace into `qb_zhuangxiu_content` values('53','86平米温馨混搭田园两居 亮丽餐厅背景墙','2','0','2','装修案例','0','5','0','1364454367','1364454367','1','admin','','0','http://www.sukeju.com/uploadfile/2013/0131/20130131113519206.jpg','1','1','','0','0','0','背景墙','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382426423','1','0','0','','0','','0','','','','','','','','','','','','4','0');");

require("../../inc/footer.php");
?>