<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_showroom_pic`;");
E_C("CREATE TABLE `qb_showroom_pic` (
  `pid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `imgurl` varchar(150) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `id` (`id`),
  KEY `fid` (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=gbk");
E_D("replace into `qb_showroom_pic` values('1','11','0','0','1','1','http://www.bjexpo.com/images/hysimages/12_2.jpg','');");
E_D("replace into `qb_showroom_pic` values('2','11','0','0','1','1','http://www.bjexpo.com/images/hysimages/11_2.jpg','');");
E_D("replace into `qb_showroom_pic` values('3','11','0','0','1','1','http://www.bjexpo.com/images/hysimages/gbs01.jpg','');");
E_D("replace into `qb_showroom_pic` values('4','12','0','0','1','1','http://www.dgec.gov.cn/images/s003.jpg','');");
E_D("replace into `qb_showroom_pic` values('5','12','0','0','1','1','http://www.dgec.gov.cn/images/gui.jpg','');");
E_D("replace into `qb_showroom_pic` values('6','13','0','0','1','1','http://www.21cantonfair.com/gb2004/2008eqzg/zhangjs/xinguan20014.jpg','');");
E_D("replace into `qb_showroom_pic` values('7','14','0','0','1','1','http://www.shzlzx.com.cn/images/ct/hyfw_litang.jpg','');");
E_D("replace into `qb_showroom_pic` values('8','14','0','0','1','1','http://www.shzlzx.com.cn/images/ct/ct_001_szzxpmt.gif','');");
E_D("replace into `qb_showroom_pic` values('9','15','0','0','1','1','qb_showroom_/0/1_20101101211124_ewwhb.jpg','');");
E_D("replace into `qb_showroom_pic` values('10','16','0','0','1','1','http://www.dl-expo.com/images/15.jpg','');");
E_D("replace into `qb_showroom_pic` values('11','1','1','0','1','0','http://i04.c.aliimg.com/img/ibank/2010/766/919/104919667_0.jpg','');");
E_D("replace into `qb_showroom_pic` values('12','2','2','0','1','0','http://i02.c.aliimg.com/news/upload/5000260/news/2010/4/14/600x450_127fa337456.jpg','');");
E_D("replace into `qb_showroom_pic` values('13','3','3','0','1','0','http://i05.c.aliimg.com/news/upload/5000260/news/2010/4/14/600x450_127fa337466.jpg','');");
E_D("replace into `qb_showroom_pic` values('14','4','4','0','1','0','http://i02.c.aliimg.com/news/upload/5000260/news/2010/4/14/600x450_127fa337478.jpg','');");
E_D("replace into `qb_showroom_pic` values('15','5','6','0','1','0','http://i02.c.aliimg.com/news/upload/5000260/news/2010/4/14/600x450_127fa337489.jpg','');");
E_D("replace into `qb_showroom_pic` values('16','6','7','0','1','0','http://i01.c.aliimg.com/news/upload/5000260/news/2010/4/13/600x398_127f699aff1.jpg','');");
E_D("replace into `qb_showroom_pic` values('17','6','7','0','1','0','http://i04.c.aliimg.com/news/upload/5000260/news/2010/4/13/600x398_127f699b01d.jpg','');");

require("../../inc/footer.php");
?>