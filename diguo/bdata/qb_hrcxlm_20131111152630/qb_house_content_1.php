<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_house_content`;");
E_C("CREATE TABLE `qb_house_content` (
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
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=gbk");
E_D("replace into `qb_house_content` values('8','万科府前花园','5','0','5','楼盘','0','7','0','1302232860','1302232860','1','admin','','0','qb_house_/5/1_20110408110400_MQ==.jpg.gif','1','1','','0','1','1302248813','南沙区 凤凰大道西侧 丰泽西路西南','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382288552','1','1','1','','0','','0','400-888-2200','13399999999','54325@qq.com','888888','','admin','','南沙区凤凰大道西侧','','','39.908946186502526,116.3671875','3','0');");
E_D("replace into `qb_house_content` values('10','碧桂园凤凰城','5','0','5','楼盘','0','12','0','1302233779','1302233779','1','admin','','0','qb_house_/5/1_20110408110419_Nw==.jpg.gif','1','1','','0','1','1302248812','普通住宅 别墅 高层洋房 小高层洋房 独栋别墅 联体别墅','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382309671','1','3','0','','0','','0','400-888-2200','13399999999','54325@qq.com','888888','','admin','','增城市广园东快速路（广园路、广深高速新塘出口）','','','39.919808548259375,116.38581275939941','3','0');");
E_D("replace into `qb_house_content` values('35','陈荣','6','0','6','中介','0','14','0','1302246940','1302246940','1','admin','','0','qb_house_/6/1_20110409140412_NDQ=.jpg.gif','1','1','','0','1','1302248821','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382355592','1','5','0','','0','','0','','13399999999','54325@qq.com','888888','','admin','','','','','','2','0');");
E_D("replace into `qb_house_content` values('34','杨志雄','6','0','6','中介','0','7','0','1302246743','1302246743','1','admin','','0','qb_house_/6/1_20110409140442_NDI=.jpg.gif','1','1','','0','1','1302248821','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1381905508','1','1','0','','0','','0','','13399999999','54325@qq.com','888888','','admin','','','','','','2','0');");
E_D("replace into `qb_house_content` values('11','阳光雅筑','5','0','5','楼盘','0','9','0','1302234754','1302234754','1','admin','','0','qb_house_/5/1_20110408110434_MQ==.jpg.gif','1','1','','0','1','1302248811','天河区 中山大道东189号 天虹花园二期','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382333964','1','4','0','','0','','0','','13399999999','54325@qq.com','888888','','admin','','广州市中山大道东189号天虹花园2期阳光雅筑营销中心','','','39.91678042665948,116.4360237121582','3','0');");
E_D("replace into `qb_house_content` values('9','东港花园','5','0','5','楼盘','0','7','0','1302233359','1302233359','1','admin','','0','qb_house_/5/1_20110408110419_NA==.jpg.gif','1','1','','0','1','1302248812','黄埔区 文船路363号大院','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382428664','1','2','0','','0','','0','400-888-2200','13399999999','54325@qq.com','888888','','admin','','黄埔区黄埔东路（广深公路以北文冲村文船路以西','','','39.89446035777916,116.43482208251953','3','0');");
E_D("replace into `qb_house_content` values('12','麓湖御景','5','0','5','楼盘','0','8','0','1302237922','1302237922','1','admin','','0','qb_house_/5/1_20110408140444_MDA=.jpg.gif','1','1','','0','1','1302248811','普通住宅 高层洋房','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382277436','1','7','0','','0','','0','020-83488818','13399999999','54325@qq.com','888888','','admin','','越秀区麓苑路39号','','','39.91862364705806,116.39945983886719','2','0');");
E_D("replace into `qb_house_content` values('13','东风广场','5','0','5','楼盘','0','13','0','1302238153','1302238153','1','admin','','0','qb_house_/5/1_20110408120434_Ng==.jpg.gif','1','1','','0','1','1302248810','商住楼 高层洋房 小高层洋房','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382422630','1','8','0','','0','','0','543543543','13399999999','54325@qq.com','888888','','admin','','东山东风东路787号（梅花路口）','','','39.90150612062975,116.4210033416748','3','0');");
E_D("replace into `qb_house_content` values('14','南国奥园','5','0','5','楼盘','0','5','0','1302238503','1302238503','1','admin','','0','qb_house_/5/1_20110408120403_MQ==.jpg.gif','1','1','','0','1','1302248810','普通住宅 公寓 多层洋房(带电梯)','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382296245','1','12','0','','0','','0','400-888-2200','13399999999','54325@qq.com','888888','','admin','','广州番禺汉溪大道','','','39.90980207146212,116.43482208251953','3','0');");
E_D("replace into `qb_house_content` values('15','银汇华庭','5','0','5','楼盘','0','12','0','1302238983','1302238983','1','admin','','0','qb_house_/5/1_20110408140429_MA==.jpg.gif','1','1','','0','1','1302248809','普通住宅 高层洋房 小高层洋房','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382278230','1','4','0','','0','','0','400-888-2200','13399999999','54325@qq.com','888888','','admin','','天河区龙怡路113号(地铁华师站E出口)','','','39.906180946626705,116.44580841064453','3','0');");
E_D("replace into `qb_house_content` values('16','逸彩新世界','5','0','5','楼盘','0','6','0','1302239293','1302239293','1','admin','','0','qb_house_/5/1_20110408130413_Nw==.jpg.gif','1','1','','0','1','1302248809','普通住宅 高层洋房 多层洋房(带电梯)','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382298348','1','3','0','','0','','0','400-888-2200','13399999999','54325@qq.com','888888','','admin','','新世界西区销售中心（荔湾区芳村大道西236号）','','','39.91888696020796,116.41207695007324','3','0');");
E_D("replace into `qb_house_content` values('17','亚运城','5','0','5','楼盘','0','9','0','1302239815','1302239815','1','admin','','0','qb_house_/5/1_20110408130455_MQ==.jpg.gif','1','1','','0','1','1302248808','普通住宅 公寓 高层洋房','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382291707','1','11','0','','0','','0','400-888-2200','13399999999','54325@qq.com','888888','','admin','','东方宾馆、花园酒店、科尔海悦酒店、富力中心、富力盈信大厦、白云机场','','','39.90144027573221,116.43722534179687','3','0');");
E_D("replace into `qb_house_content` values('18','岭南湾畔','5','0','5','楼盘','0','7','0','1302240018','1302240018','1','admin','','0','qb_house_/5/1_20110408130418_NA==.jpg.gif','1','1','','0','1','1302248808','荔湾区 西湾路中段','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382280102','1','13','0','','0','','0','400-888-2200','13399999999','54325@qq.com','888888','','admin','','西湾路中段','','','39.92099342895789,116.40649795532226','3','0');");
E_D("replace into `qb_house_content` values('19','锦绣半岛','5','0','5','楼盘','0','5','0','1302240221','1302240221','1','admin','','0','qb_house_/5/1_20110408130441_Nw==.jpg.gif','1','1','','0','1','1302248807','普通住宅 高层洋房 多层洋房(带电梯)','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382276342','1','14','0','','0','','0','020-99888888','13399999999','54325@qq.com','888888','','admin','','广州市番禺区洛浦街南浦环岛西路','','','39.90756358051684,116.36478424072265','3','0');");
E_D("replace into `qb_house_content` values('20','恒大绿洲','5','0','5','楼盘','0','10','0','1302240426','1302240426','1','admin','','0','qb_house_/5/1_20110408130406_MQ==.jpg.gif','1','1','','0','1','1302248807','普通住宅','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382287099','1','15','0','','0','','0','020-5544552','13399999999','54325@qq.com','888888','','admin','','位于金沙洲大桥以南','','','39.90176949958711,116.43465042114258','3','0');");
E_D("replace into `qb_house_content` values('21','东银广场','5','0','5','楼盘','0','7','0','1302240639','1302240639','1','admin','','0','qb_house_/5/1_20110408130439_NA==.jpg.gif','1','1','','0','1','1302248806','普通住宅 高层洋房','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382350715','1','17','0','','0','','0','020-8877444','13399999999','54325@qq.com','888888','','admin','','海珠区东晓路38号（明珠花园对面','','','39.89979413273051,116.43216133117676','3','0');");
E_D("replace into `qb_house_content` values('22','港安银座','5','0','5','楼盘','0','9','0','1302240957','1302240957','1','admin','','0','qb_house_/5/1_20110408130457_Nw==.jpg.gif','1','1','','0','1','1302248805','普通住宅 公寓','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382371879','1','17','0','','0','','0','020-5452111','13399999999','54325@qq.com','888888','','admin','','广州南沙进港大道珠电路口','','','39.90144027573221,116.40349388122558','3','0');");
E_D("replace into `qb_house_content` values('23','星河湾','5','0','5','楼盘','0','35','0','1302241170','1302241170','1','admin','','0','qb_house_/5/1_20110408130430_MQ==.jpg.gif','1','1','','0','1','1302248805','普通住宅 公寓 高层洋房 小高层洋房 多层洋房(带电梯)','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382373412','1','18','0','','0','','0','020-5544221','13399999999','54325@qq.com','888888','','admin','','广州番禺迎宾路沙溪大桥南岸','','','39.902493786499846,116.44949913024902','3','0');");
E_D("replace into `qb_house_content` values('24','马赛国际 高层大单间可改两房 视野开阔','2','8','2','出售','0','8','0','1302245254','1302245254','1','admin','','0','qb_house_/2/1_20110408140434_MQ==.jpg.gif','1','1','','0','1','1302248788','天河区 珠江新城 马赛国际公寓','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382355923','1','1','1','','0','','0','020-22554411','13399999999','54325@qq.com','888888','','admin','','','','','39.903744809497965,116.38083457946777','2','0');");
E_D("replace into `qb_house_content` values('25','旭景家园 精致三房 少有南向 132万 过五年','2','10','2','出售','0','9','0','1302245437','1302245437','1','admin','','0','qb_house_/2/1_20110408140437_Mw==.jpg.gif','1','1','','0','1','1302248787','商品房 够5年 电梯楼','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382422627','1','2','0','','0','','0','020-8855444','13399999999','54325@qq.com','888888','','admin','','','','','39.91118463226871,116.42160415649414','2','0');");
E_D("replace into `qb_house_content` values('26','祈福新村 蝶舞轩 业主急售 有钥匙可以马上看','2','11','2','出售','0','9','0','1302245594','1302245594','1','admin','','0','qb_house_/2/1_20110408140415_NQ==.jpg.gif','1','1','','0','1','1302248786','番禺区 祈福 祈福新村','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382368649','1','3','0','','0','','0','','13399999999','54325@qq.com','888888','','admin','','','','','39.908551159068324,116.43559455871582','2','0');");
E_D("replace into `qb_house_content` values('27','金碧翡翠华庭 装修新净 厅出阳台 楼盘最低价','2','9','2','出售','0','16','0','1302245734','1302245734','1','admin','','0','qb_house_/2/1_20110408140434_Nw==.jpg.gif','1','1','','0','1','1302248786','天河区 天河北 金碧翡翠华庭','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382368682','1','4','0','','0','','0','','13399999999','54325@qq.com','888888','','admin','','','','','39.90552253972854,116.43181800842285','2','0');");
E_D("replace into `qb_house_content` values('28','乐意居 中层靓景四期少有单位放盘 住家婚房首选','2','9','2','出售','0','39','0','1302245957','1302245957','1','admin','','0','qb_house_/2/1_20110408140417_OQ==.jpg.gif','1','1','','0','1','1302248785','天河区 五山 乐意居','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382368780','1','3','0','','0','','0','020-54448887','13399999999','54325@qq.com','888888','','admin','','','','','39.90216456612496,116.42752647399902','2','0');");
E_D("replace into `qb_house_content` values('29','第三金碧花园 三房两厅全新装修 家私电器全齐','1','9','1','出租','0','11','0','1302246104','1302246104','1','admin','','0','qb_house_/1/1_20110408150445_MTE=.jpg.gif','1','1','','0','1','1302248779','海珠区 金碧 金碧花园','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382165455','1','2','0','','0','','0','020-857441211','13399999999','54325@qq.com','888888','','admin','','','','','39.905193333906674,116.4327621459961','2','0');");
E_D("replace into `qb_house_content` values('30','黄埔花园 园景小区 电梯三房 南向吉屋','1','17','1','出租','0','6','0','1302246219','1302246219','1','admin','','0','qb_house_/1/1_20110408150439_MTM=.jpg.gif','1','1','','0','1','1302248779','黄埔区 区府 黄埔花园','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382175186','1','8','0','','0','','0','020-55221144','13399999999','54325@qq.com','888888','','admin','','','','','39.9041398646466,116.42495155334472','2','0');");
E_D("replace into `qb_house_content` values('31','万科城市花园 二房笋租 家电齐全 现在唯有几套','1','15','1','出租','0','12','0','1302246330','1302246330','1','admin','','0','qb_house_/1/1_20110408150430_MTU=.jpg.gif','1','1','','0','1','1302248778','黄埔区 区府 万科城市花园','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382344450','1','6','0','','0','','0','020-2255441','13399999999','54325@qq.com','888888','','admin','','','','','39.91111879667259,116.4305305480957','2','0');");
E_D("replace into `qb_house_content` values('32','天河员村大院一房一厅','1','10','1','出租','0','111','0','1302246452','1302246452','1','admin','','0','qb_house_/1/1_20110408150432_MTc=.jpg.gif','1','1','','0','1','1302248778','房改房 楼梯楼','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382164179','1','9','0','','0','','0','020-22554411','13399999999','54325@qq.com','888888','','admin','','','','','39.89926735861801,116.43070220947265','2','0');");
E_D("replace into `qb_house_content` values('33','勤天E品 豪华复式一房一厅 展现厅的双倍空间','1','15','1','出租','0','40','0','1302246567','1302246567','1','admin','','0','qb_house_/1/1_20110408150427_MTk=.jpg.gif','1','1','','0','1','1302248777','天河区 天河公园 勤天E品上馆','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382169648','1','11','0','','0','','0','020-55441112','13399999999','54325@qq.com','888888','','admin','','','','','39.91302800326956,116.43430709838867','2','0');");
E_D("replace into `qb_house_content` values('36','陈奇峰','6','0','6','中介','0','12','0','1302247098','1302247098','1','admin','','0','qb_house_/6/1_20110409140452_NDY=.jpg.gif','1','1','','0','1','1302248820','房产 好便宜','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1381896002','1','3','0','','0','','0','020-55887744','13399999999','54325@qq.com','888888','','admin','','','','','','2','0');");
E_D("replace into `qb_house_content` values('37','王海军','6','0','6','中介','0','7','0','1302247172','1302247172','1','admin','','0','qb_house_/6/1_20110409140430_NDg=.jpg.gif','1','1','','0','1','1302248819','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382422630','1','0','0','','0','','0','020-55444111','13399999999','54325@qq.com','888888','','admin','','','','','','2','0');");
E_D("replace into `qb_house_content` values('38','凌二芳','6','0','6','中介','0','26','0','1302247277','1302247277','1','admin','','0','qb_house_/6/1_20110409140400_NTA=.jpg.gif','1','1','','0','1','1302248818','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1382344450','1','6','0','','0','','0','020-25488744','13399999999','54325@qq.com','888888','','admin','','','','','','2','0');");
E_D("replace into `qb_house_content` values('39','肖彦娟','6','0','6','中介','0','15','0','1302247346','1302247346','1','admin','','0','qb_house_/6/1_20110409140437_NTI=.jpg.gif','1','1','','0','1','1302248818','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1381925426','1','8','0','','0','','0','020-2255444','13399999999','54325@qq.com','888888','','admin','','','','','','2','0');");
E_D("replace into `qb_house_content` values('40','自己住的，找个西北三环附近的房子中介勿扰','3','0','3','求租','0','3','0','1302247564','1302247564','1','admin','','0','qb_house_/3/1_20110408150404_MjE=.jpg.gif','1','1','','0','1','1302248793','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1337658693','1','1','1','','0','','0','020-2255441','13399999999','54325@qq.com','888888','','admin','','','','','39.91269883351498,116.4217758178711','2','0');");
E_D("replace into `qb_house_content` values('41','求租大兴区芳源里 菊园里 上林苑小区','3','0','3','求租','0','6','0','1302247742','1302247742','1','admin','','0','qb_house_/3/1_20110408150402_MjM=.jpg.gif','1','1','','0','1','1302248792','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1350380101','1','2','0','','0','','0','020-5544887','13399999999','54325@qq.com','888888','','admin','','','','','39.9113163032711,116.4276123046875','2','0');");
E_D("replace into `qb_house_content` values('42','个人上班族求租双桥正规两居或三居其中一间！房内无隔断就行','3','0','3','求租','0','1','0','1302247808','1302247808','1','admin','','0','qb_house_/3/1_20110408150408_MjU=.jpg.gif','1','1','','0','1','1302248792','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1302247809','1','0','0','','0','','0','020-5544111','13399999999','54325@qq.com','888888','','admin','','','','','39.911908819649724,116.42778396606445','2','0');");
E_D("replace into `qb_house_content` values('43','全款求购望京点击未来50平东南朝向一居','4','0','4','求购','0','2','0','1302248000','1302248000','1','admin','','0','qb_house_/4/1_20110408150420_MzE=.jpg.gif','1','1','','0','1','1302248800','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1302248002','1','1','1','','0','','0','','13399999999','54325@qq.com','888888','','admin','','','','','39.91309383703065,116.41714096069336','2','0');");
E_D("replace into `qb_house_content` values('44','特别急求购菓岭小区住房一套','4','0','4','求购','0','6','0','1302248111','1302248111','1','admin','','0','qb_house_/4/1_20110408150411_MzM=.jpg.gif','1','1','','0','1','1302248800','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1352452902','1','2','0','','0','','0','020-55444555','13399999999','54325@qq.com','888888','','admin','','','','','39.90940704896342,116.40229225158691','2','0');");
E_D("replace into `qb_house_content` values('45','为客户急购300万海淀附近两居一居','4','0','4','求购','0','26','0','1302248198','1302248198','1','admin','','0','qb_house_/4/1_20110408150438_MzM=.jpg.gif','1','1','','0','1','1302248799','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1352452502','1','0','0','','0','','0','020-22554411','13399999999','54325@qq.com','888888','','admin','','','','','39.91427883390961,116.41714096069336','2','0');");
E_D("replace into `qb_house_content` values('46','张三','6','0','6','中介','0','9','0','1350264421','1350264421','1','admin','','0','qb_house_/5/1_20120613170628_d9lwk.jpg','1','1','','0','0','0','','','','','','','','0','0','127.0.0.1','0','0','','','0','0','0','','1381904562','1','2','0','','0','','0','02028349635','13399999999','qibobb@126.com','888888','','admin','','','','','','1','0');");

require("../../inc/footer.php");
?>