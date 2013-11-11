<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_house_content_6`;");
E_C("CREATE TABLE `qb_house_content_6` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `fuwu_zone` varchar(50) NOT NULL DEFAULT '',
  `store` varchar(50) NOT NULL DEFAULT '',
  `face` varchar(150) NOT NULL DEFAULT '',
  `my_234` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`fuwu_zone`),
  KEY `my_234` (`my_234`),
  KEY `store` (`store`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk");
E_D("replace into `qb_house_content_6` values('2','34','6','1','我的地产感言 我知道，社会对地产经纪行业的美誉度普遍不高，对地产经纪这个职业也存有偏见。<br />\r\n<br />\r\n但是，正因为此，我们多了一份奋斗的使命：尽最大的努力，令我们的职业象其他专业人士一样受人尊重。<br />\r\n<br />\r\n在此逐利，我宣誓，不管其他行家有怎样违反操守、忘义的行为，我一定恪守职业道德，履行优质服务的诺言，用最专业、最诚信、最透明、最高效的服务赢得客户，像给自己买房一样服务好客户，像对待自己的家一样珍惜业主的房产，努力做到成交前令客户开心、满意，成交后能与客户成为朋友。让有满堂红人的城市，买房、卖房都成为一件轻松开心的事！郑重承诺：为您的来电保密，以免您接到过多的骚扰电话。透明交易不吃差价。<br />\r\n<br />\r\n严格控制交易过程，将客户风险降到最低。 打造满堂红权威真实房源网上店 从你我做起 祈福新村房地产满堂红网络经纪人 杨志雄','朝阳区','满堂红','qb_house_/6/1_20110408150439_MQ==.jpg','三年');");
E_D("replace into `qb_house_content_6` values('3','35','6','1','　&nbsp;&nbsp; 本人姓陈名字一个荣，工龄两年多，善于沟通与交流，真诚、<br />\r\n<br />\r\n专业的服务，积极上进的学习态度，为好口碑而努力，望多多支持！！！&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n<br />\r\n在番禺区(洛溪新城)这边10多年，熟悉这边各个小区所有的楼盘，也见到了这边发展潜力和升值空间!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n<br />\r\n<br />\r\n<strong>希望第一时间帮到您！ </strong>','海淀区/丰台区','中原地产','qb_house_/6/1_20110408150400_Mg==.jpg','两年');");
E_D("replace into `qb_house_content_6` values('4','36','6','1','&nbsp; 高远的目标不会让我望而且畏，虽然在达到目标以前可能屡受挫折。摔倒了，再爬起来，我不灰心，因为每个人在抵达目标前都会受到挫折。只有小爬虫不必担心摔倒。我不是小爬虫，不是洋葱，不是绵羊。我是一个人。让别人作他们的粘土造洞穴吧，我只要造一座城堡。','通州区','满堂红','qb_house_/6/1_20110408150414_Mw==.jpg','两年');");
E_D("replace into `qb_house_content_6` values('5','37','6','1','　&nbsp;&nbsp; 本人从事房地产3年，对二手物业的操作流程及政策税费非常熟悉。本人在芳村区从事地产3年，对芳村区发展规划非常了解。本人工作认真负责.态度诚恳并对周边楼市非常了解，以贴身的服务希望能尽我所能，帮你找到满意的房子。 欢迎各位致电咨询！','海淀区/丰台区','满堂红','qb_house_/6/1_20110408150424_NA==.jpg','两年');");
E_D("replace into `qb_house_content_6` values('6','38','6','1','&nbsp; 祖籍梅州，客家人，毕业于华南农业大学，性格开朗，乐观，乐于助人，喜欢和志同道合的人交朋友！<br />\r\n<br />\r\n选择做销售，是因为有一句话，后悔的事莫过于没有在年轻的时候奋斗过！宁愿辛苦一阵子，也不愿辛苦一辈子！做事先做人！<br />\r\n&mdash;&mdash;原则<br />\r\n<br />\r\n所以，无论现在的生活工作有多苦，我都会坚持下去！您要别人怎么样对待您，您也要怎样待别人！我的手机号码永久有效，亲爱的朋友，买房卖房，租赁写字楼，找我，没错，我将竭诚为您服务，愿我们不单纯是中介和客户的关系，更是好朋友！进入满堂红，需要勇气，也需要有底气，很多人说辛苦，但是我觉得，这点辛苦算什么呢？我宁愿现在辛苦点，也不愿到老的时候还是在持续上班，现在的付出是为了以后活得精彩！相信我会为你找到最适合你心水的写字楼！<br />\r\n<br />\r\n我将全心为您服务！ ','海淀区/丰台区','美之居','qb_house_/6/1_20110408150442_NQ==.jpg','一年');");
E_D("replace into `qb_house_content_6` values('7','39','6','1','&nbsp; 从2007年8月到现在，从一个见习物业顾问到营业主任，满堂红在我这张白纸上画出了五彩缤纷的景色。&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;<br />\r\n当然，有得必有失！以前总是坚持着不把工作当作生活的全部，而现在不得不把工作当作生活的全部，无论是什么时候客户有需要，我们都得放下自己的事情去处理。很累！慢慢的适应了，也学会了以一种轻松、积极的心态去面对工作，所以我过得很充实，也很快乐！&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n<br />\r\n在领导眼中我是一个肯学、听话、悟性高的人；在客户眼中我是一个勤劳、细心、认真的人。<br />\r\n<br />\r\n这些日子最开心的就是有了一些回头客！给了我更大的信心和动力，同时也很有成就感！&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n<br />\r\n我是天河区、越秀区写字楼租赁专家，希望大家多多关照与指教！','丰台区/西城区','我爱我家','qb_house_/6/1_20110408150403_Ng==.jpg','三年');");
E_D("replace into `qb_house_content_6` values('8','46','6','1','<p>gfd</p>','/#/市中心/#/城郊/#/','满堂红','','');");

require("../../inc/footer.php");
?>