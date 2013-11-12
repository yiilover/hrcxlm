<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_zhuangxiu_content_3`;");
E_C("CREATE TABLE `qb_zhuangxiu_content_3` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `sortid` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk");
E_D("replace into `qb_zhuangxiu_content_3` values('1','28','3','1','<p> &nbsp; &nbsp;冬天到了，换季收纳工作对小户型业主来说可是一项艰巨的任务：厚重的冬被、冬衣该如何叠放？业主们改如何规划合理的洗衣区收纳空间……装修第一网编辑支招，让小户型的家冬天也可以美美的。</p>','1');");
E_D("replace into `qb_zhuangxiu_content_3` values('2','29','3','1','<p> &nbsp; &nbsp;当使用传统油漆粉刷时，会有强烈的刺鼻味，那是一种对人体有害的挥发性有机化合物，成为VOC，装修第一网提醒而现今环保当道，需具备什么条件才能符合环保的要求呢？</p>','1');");
E_D("replace into `qb_zhuangxiu_content_3` values('3','30','3','1','<p> &nbsp; &nbsp;用镜面做装饰能够营造出一种华丽、通透的氛围，多用在现代风格、欧式风格中。而其中现代风格多使用印花、覆膜镜，用来延伸扩展空间，使视野更加开阔；在欧式古典风格中，多使用覆膜镜和传统的水银镜。镜子的形状多变，正方形、长方形、圆形、椭圆形和边角曲线形等都可用在现代风格中，而带木质镜框的、菱形镜面就多用于欧式风格。</p>','1');");
E_D("replace into `qb_zhuangxiu_content_3` values('4','31','3','1','<p> &nbsp; &nbsp;在小空间如何放大（一）中，分享关于开放式、穿透性的弹性设计以及量体修饰手法；此次将分享运用天花板的间接照明、色调设定还有减少阻隔的方式，都能不著痕迹放大小空间！</p>','1');");
E_D("replace into `qb_zhuangxiu_content_3` values('5','32','3','1','<p> &nbsp; &nbsp;或是刻意为家人精心准备的一些小点缀，又或是营造一些诸如烛光晚餐等，都能让家变得更温暖。因为从家庭生活层面来说，有爱就有温暖。</p>','2');");
E_D("replace into `qb_zhuangxiu_content_3` values('6','33','3','1','<p> &nbsp; &nbsp;卖场里，沙发的材料多样、款式和纹样多变、颜色丰富多彩，价格从几千元到几万元不等，一些进口沙发价格甚至高达几十万、几百万，这些沙发外表差别却不大。种种情况都让消费者摸不着头脑，不知道如何挑选一款合适的优质沙发。孰知，挑选沙发，不能光看面料和弹性，沙发的骨架、填充物、细节设计以及售后服务都是重要的参考因素。</p>','2');");
E_D("replace into `qb_zhuangxiu_content_3` values('7','34','3','1','<p> &nbsp; &nbsp;秋季是装修的旺季。希望赶在这个季节把房子打扮好的业主们，别着急动手，装修第一网支招咱们先说说装修时必需的挑三拣四。装修，不挑剔怎么行？让我们告诉你如何挑！</p>','2');");
E_D("replace into `qb_zhuangxiu_content_3` values('8','35','3','1','<p> &nbsp; &nbsp;在小户型逐渐占据市场主流的情况下，小空间的收纳和分隔成为许多人思考的问题。没有人想呆在一个乱成一锅粥的房间中。香港著名设计师就表示，一个小的空间就好比一只旅行箱，而如何将这个“旅行箱”归置好则考验主人的能力和创意。</p>','3');");
E_D("replace into `qb_zhuangxiu_content_3` values('9','36','3','1','<p> &nbsp; &nbsp;又是春暖花开的3月，春季是一年一度的最佳家庭装修时段。该是业主奔波忙碌的时候了，对于初次装修的“装”主来说装修可不是一道好吃的“菜”，您啊就做好打仗的准备吧，如何跟装饰公司洽谈，跟设计师沟通，装修施工要注意哪些要领？这些都是要知道的，今天小编就带您积累财富，让您打一场漂亮的春装战！</p>','3');");
E_D("replace into `qb_zhuangxiu_content_3` values('10','37','3','1','<p> &nbsp; &nbsp;家庭装饰的主要内容是对地、墙、顶做饰面处理，对门窗进行改造，对厨房、卫生间、灯具等进行设施更换与改造，以及配套家具的制作等内容。家庭装饰可分为三个档次：</p>','3');");

require("../../inc/footer.php");
?>