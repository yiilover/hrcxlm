<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_house_content_3`;");
E_C("CREATE TABLE `qb_house_content_3` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `price` varchar(20) NOT NULL DEFAULT '',
  `room_type` varchar(30) NOT NULL DEFAULT '',
  `acreage` varchar(20) NOT NULL DEFAULT '',
  `fitment` varchar(15) NOT NULL DEFAULT '',
  `floor` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `room_type` (`room_type`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `qb_house_content_3` values('2','40','3','1','我们想找个房子，只要是西北三环附近的，我在友谊宾馆这边上班，四通桥这边，有直达车的也行，最好靠近车站。 两居，三居都行，一居的最好大一点的，（ 中介就不用了，请勿打扰），有是白天不在，可以发短信给我','3200','两室一厅','100','精装修','2');");
E_D("replace into `qb_house_content_3` values('3','41','3','1','要求安静，精装修 ，有停车位，无电梯3层以内，至少签订期限两年租房协议。中介勿扰！！！！\r\n一家人打算长期居住，会很爱惜你的房子。租金3000-3200。','2500','三室一厅','100','精装修','3');");
E_D("replace into `qb_house_content_3` values('4','42','3','1','本人为正规上班族，希望是在康惠园，双惠苑，水岸双桥这三个小区最好。\r\n房间要整间，干净，可以做饭！\r\n不接受隔断间。','2400','两室一厅','98','普通装修','5');");

require("../../inc/footer.php");
?>