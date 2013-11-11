<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_zhuangxiu_content_4`;");
E_C("CREATE TABLE `qb_zhuangxiu_content_4` (
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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gbk");
E_D("replace into `qb_zhuangxiu_content_4` values('1','16','4','1','<p> &nbsp; &nbsp;城市中炫彩夺目的高楼色彩，街道上缤纷亮丽的车辆烤漆，家居装修中色泽鲜艳的墙体墙壁，到信息时代3C产物的时髦外衣……油漆已成为人们日常生活中不可或缺的一幅美丽“画皮”。选购一款称心如意、健康环保的油漆，“刷”出一个美观、纯天然的墙面，是许多人的追求。然而，面对鱼龙混杂的市场，如何选购到质优价廉的油漆，成了不少消费者的心病……</p>','1');");
E_D("replace into `qb_zhuangxiu_content_4` values('2','17','4','1','<p> &nbsp; &nbsp;在日常装修中，人们喜欢选择一些时尚，灵性的墙纸来装饰自己的新居。可是墙纸的选择让不少业主深感困惑。现在，我们装修第一网的小编们经过大量走访业主和商家，总结出一些选购时的技巧，拿来与大家一起分享：</p>','1');");
E_D("replace into `qb_zhuangxiu_content_4` values('3','18','4','1','<p> &nbsp; &nbsp;秋冬装修忙，菜鸟装修大叔们是否在头疼药怎么装修？装修，大致是按照这20步完成的。下面，死扛着尽装修第一网小编最大之所能，把目前所了解的装修过程以及整个过程中需要注意的诸多细节尽可能详细的阐述一遍……</p>','2');");
E_D("replace into `qb_zhuangxiu_content_4` values('4','19','4','1','<p> &nbsp; 金秋十月，是最理想的装修时间。近段时间各大小区里都“响彻”施工“奏鸣曲”。装修是一个繁杂的工程，但同时也是精细活。有些看到、看不到的环节，将成为影响日后居住质量的关键。装修第一网结合当前的节气，并联系一些业主的经验教训，设计师从以下几方面作出提醒……</p>','2');");
E_D("replace into `qb_zhuangxiu_content_4` values('5','20','4','1','<p> &nbsp; &nbsp;办公室设计好不好，也就是让工作在其中的人感觉“顺”与“不顺”。当你的所有东西，摆放得合理性很高，和空间的切合点很高的时候，就会很“顺”。包括功能性、格局、朝向等。</p>','3');");
E_D("replace into `qb_zhuangxiu_content_4` values('6','21','4','1','<p> &nbsp; &nbsp;定制产品可以满足业主的个性化需求，但也不能一味以个人喜好为参考依据，要首先保障产品的功能性。同时家具的风格要与居室内的设计风格协调一致。</p>','3');");
E_D("replace into `qb_zhuangxiu_content_4` values('7','22','4','1','<p> &nbsp; &nbsp;在房间规划时，首要考量小孩的年龄层，将学龄成长的需求逐一检视，有部分功能其实可以在成长时期一一增加，未必要一次做满，但适合小朋友阅读的桌椅、衣柜，以及吸引孩童的颜色配置则可以预先规划，以期能为宝贝们创造良好舒适的成长环境。</p>','4');");
E_D("replace into `qb_zhuangxiu_content_4` values('8','23','4','1','<p> &nbsp; &nbsp;居室朝向不好，实在是件闹心的事。采光受影响，通风不畅快，再加上朝北的房间阴冷，朝西的还要享受“西照”，但是户型就这样，我们又能怎么办？装修第一网编辑搜集大量相关资料并告诉你，朝向不好，我们也可以通过设计来弥补。</p>','4');");
E_D("replace into `qb_zhuangxiu_content_4` values('9','24','4','1','<p> &nbsp; &nbsp;装修施工中的隐蔽工程，就是在装修后被隐蔽起来，表面上无法看到的施工项目。根据装修工序，这些“隐蔽工程”都会被后一道工序所覆盖，所以很难检查其材料是否符合规格、施工是否规范，隐蔽工程是指敷设在装饰表面内部的工程。</p>','5');");
E_D("replace into `qb_zhuangxiu_content_4` values('10','25','4','1','<p> &nbsp; &nbsp;很多业主在橱柜的设计阶段，都会提出一些以为可以占到便宜的要求，比如，将吊柜加大，增加储物空间等；或者为了节省预算，选择便宜的五金件这些做法真的可以得到实惠吗？专业人士提醒，能省钱固然好，但要在保证橱柜使用寿命及功能的前提下进行合理规划。下面就是专家推荐业主关注的合理预算要点。</p>','5');");
E_D("replace into `qb_zhuangxiu_content_4` values('11','26','4','1','<p> &nbsp; &nbsp;“十一”黄金周，新区各大家居建材卖场铆也大打促销牌，以优惠的价格来吸引消费者，其中“抗甲醛”涂料等环保建材受到热捧。但中消协近日公布的15种涂料比较试验结果显示，多个涂料品牌“抗甲醛”产品的甲醛净化性能，以及甲醛净化效果持久性两项指标均不佳。其中，都芳、嘉宝莉等国内外知名涂料品牌都榜上有名。 对此，业内专家提醒消费者不要盲目轻信广告宣传和炒作，购买时除考虑选择一些品牌知名度高的产品外，更重要的是查看要其产品的最新检测报告。</p>','6');");
E_D("replace into `qb_zhuangxiu_content_4` values('12','27','4','1','<p> &nbsp; 很多用户家中的阳台被当作杂物间或晾衣场所，杂乱无章。炎炎夏日，在阳台上覆盖一层藤蔓植物，可以有效地遮挡日晒，阻隔热气入室，让室内充满森林般的绿意和清凉。装修第一网小编教你如何打造森林系阳台小花园。</p>','6');");

require("../../inc/footer.php");
?>