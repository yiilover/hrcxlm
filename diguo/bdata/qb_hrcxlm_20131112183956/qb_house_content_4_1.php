<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_house_content_4`;");
E_C("CREATE TABLE `qb_house_content_4` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `price` varchar(20) NOT NULL DEFAULT '',
  `room_type` varchar(30) NOT NULL DEFAULT '',
  `acreage` varchar(20) NOT NULL DEFAULT '',
  `fitment` varchar(15) NOT NULL DEFAULT '',
  `floor` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `room_type` (`room_type`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `qb_house_content_4` values('2','43','4','1','1室  50-50㎡  价格：120-129万元\r\n\r\n全款求购点击未来50平东南朝向一居，低层不考虑。','50','两室一厅','100','普通装修','3');");
E_D("replace into `qb_house_content_4` values('3','44','4','1',' 昌平 昌平县城 &nbsp; 2室  90-300㎡  价格：200-600万元\r\n\r\n有房就行，价格可议！！方位好，南北！','36','两室一厅','30','普通装修','8');");
E_D("replace into `qb_house_content_4` values('4','45','4','1','本人隶属中宇慧通资产管理有限公司，本公司经营范畴有房产、车产、不动产、抵押贷款、中小企业贷款，等货币兑换。专业为拥有房产暂时需要资金周转的您提供贷款服务，本公司办事效率特别高可以合各房产公司合作，也可与个人合作！','200','两室一厅','100','豪华装修','6');");

require("../../inc/footer.php");
?>