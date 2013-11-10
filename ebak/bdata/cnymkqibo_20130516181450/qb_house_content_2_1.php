<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_house_content_2`;");
E_C("CREATE TABLE `qb_house_content_2` (
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk");
E_D("replace into `qb_house_content_2` values('3','24','2','1','此房是马赛国际公寓高层单位，安静单位，朝向又好，装修保养也不错，最主要是价格低卖：15000/方，说了你不相，现在这种户型的租金已经去到2600到2800不等，租金绝对是决定楼价的重要标准。这个房子是一个大单间，自己可以改成两房，房子绝对是套帮你赚钱的房子，机会难得。','1','95','两室一厅','水/电','90','普通装修','8','中山站','18路');");
E_D("replace into `qb_house_content_2` values('4','25','2','1','该物业是三房两厅的大单位，光线充足、通风凉爽、格局方正实用，让人进屋的第一感觉无比温馨，那种身心放松的感觉，非常适合在外奔波劳累的您，停下脚步歇歇的最佳首选，何谓为家，家就是能让你身心放松，感觉温馨舒适的地方，我也不想说这房子有多么多么的好了，很多好东西，看了才知道嘛，不是么？有意向的友友们，趁业主还没反口，就别再犹豫了，赶快拿起你手中的电话拨打小龙的看房热线，嘟嘟嘟~喂，小龙在吗？\r\n\r\n如果这套房子不是您最终想要的选择,这边还有多种间隔房屋,尊贵的您心动不如行动,欢迎您的咨询,小龙将竭诚为您服务,第一时间帮到您!','1','132','两室一厅','水/电','91','普通装修','12','东圃站','B2');");
E_D("replace into `qb_house_content_2` values('5','26','2','1','福集团的经典巨作，祈福新村以大环境、大配套、大交通的国际文化型社区，世界一流水平，有“中国第一村”的美誉。祈福新村占地7500亩，自1991年建祈福新村至今已投入资金160多亿元，有来自美国、法国、日本等36个国家及地区的精英成为祈福新村，常住人口达10多万人，业主20多万人。\r\n祈福新村二手房单位个人点评\r\n\r\n这套房子95.5方，卖108万没过5年。目前业主急售这套房，在祈福新村我相信南向的蝶舞轩三房带主套，除了我这套房子的话，你想找都很难找得到。我有钥匙可以马上看，温馨提醒：业主里面的房子过几天就要搬走啦，唯一卖点就是，108万低市场10万南向中间位置。绝对真实，不会浪费你们的时间，如果你是经常来祈福新村看楼的人就知道我这套房子，绝对是性价比高，超高。','2','108','两室一厅','水/电/宽带','96','精装修','15','中山站','56路');");
E_D("replace into `qb_house_content_2` values('6','27','2','1',' &nbsp;  &nbsp; 金碧翡翠华庭 ：金碧翡翠华庭是恒大集团的。该盘位于天河北龙口东路，北接广园快速干线，南临天润路，西临龙口东路，东连五山路，离地铁三号线五山站很近，项目(二手房)为城市中心地带高档精品住宅。\r\n &nbsp;  &nbsp; 个人点评：此单元厅出大阳台，装修新净，精致实用两房，最最主要是，此房价格为本楼盘最低价，且楼盘新净，小区安静，为住家好去处，价格低下，懂投资的您一定不会错过！','1','160','两室一厅','水/电','79','豪华装修','18','黄村站','57路');");
E_D("replace into `qb_house_content_2` values('7','28','2','1','乐意居花园位于长兴路天河客运站附近，仅需三分钟车程，交通方便，绿色小区，绿化充足，绿树成荫，二十四小时保安巡逻，每一楼梯都分别安装摄像头，管理严密，让您放心入住。配套完善,有运动场，球场，和休息之地。','1','142','两室一厅','水/电/宽带/管道煤气','99','普通装修','18','车陂站','87路');");

require("../../inc/footer.php");
?>