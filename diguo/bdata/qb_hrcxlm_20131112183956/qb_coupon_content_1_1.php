<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_coupon_content_1`;");
E_C("CREATE TABLE `qb_coupon_content_1` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `price` varchar(8) NOT NULL DEFAULT '',
  `mart_price` varchar(8) NOT NULL DEFAULT '',
  `end_time` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `my_rooms` (`price`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=gbk");
E_D("replace into `qb_coupon_content_1` values('18','33','25','1','<span>地址：</span><span>朝阳区农展馆南路1号(近朝阳公园西门) </span><p><span>电话：</span><span><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://count.koubei.com/showphone/showphone.php?f=jpg&w=96&h=10&bc=255,255,255&fc=0,0,0&fs=10&fn=arial&phone=LTE2NTUzMjIxMzU%3D%23n483rlAaILSEXvUL\" width=\"96\" height=\"12\" alt=\"鼎系私房饺子电话\" /></span></p>\r\n<p><span>特色：</span><span>不能刷卡 可停车</span></p>\r\n','35','54','2010-06-03');");
E_D("replace into `qb_coupon_content_1` values('17','32','25','1','<span>地址：</span><span>王府井大街(帅府园胡同9号)</span><p><span>电话：</span><span><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://count.koubei.com/showphone/showphone.php?f=jpg&w=96&h=10&bc=255,255,255&fc=0,0,0&fs=10&fn=arial&phone=MTQ4NDUxODk1Ng%3D%3D%235joPVM%2FQGFsptZQi\" width=\"96\" height=\"12\" alt=\"全聚德烤鸭店王府井店电话\" /></span></p>\r\n<p><span>人均：</span><span><font color=\"#ff4400\">85元</font></span></p>\r\n<p><span>特色：</span><span>有外卖 有包厢 不能刷卡 收费停车</span></p>\r\n','400','800','2010-06-04');");
E_D("replace into `qb_coupon_content_1` values('16','31','25','1','<span>地址：</span><span>日坛北路外神路街39号(日坛公园北门)</span><p><span>电话：</span><span><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://count.koubei.com/showphone/showphone.php?f=jpg&w=96&h=10&bc=255,255,255&fc=0,0,0&fs=10&fn=arial&phone=MTY1MjE5Njk5Mg%3D%3D%23K0o68qh%2FiXbrW3yU\" width=\"96\" height=\"12\" alt=\"高丽王朝牛排酱汤火锅日坛公园店电话\" /></span></p>\r\n<p><span>人均：</span><span><font color=\"#ff4400\">42元</font></span></p>\r\n<p><span>特色：</span><span>无包厢 可刷卡 免费停车</span></p>\r\n','400','500','2010-06-05');");
E_D("replace into `qb_coupon_content_1` values('15','30','25','1','<span>地址：</span><span>西三环北路11号(北京电视台旧址南50米邮局胡同...</span><p><span>电话：</span><span><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://count.koubei.com/showphone/showphone.php?f=jpg&w=96&h=10&bc=255,255,255&fc=0,0,0&fs=10&fn=arial&phone=MTg1Nzk3NTA2%23Q2sLPpQSEZvelo6d\" width=\"96\" height=\"12\" alt=\"麻辣小馆电话\" /></span></p>\r\n<p><span>人均：</span><span><font color=\"#ff4400\">40元</font></span></p>\r\n<p><span>特色：</span><span>不能刷卡 </span></p>\r\n','500','700','2010-06-26');");
E_D("replace into `qb_coupon_content_1` values('14','29','25','1','<span>地址：</span><span>魏公村小区29号</span><p><span>电话：</span><span><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://count.koubei.com/showphone/showphone.php?f=jpg&w=96&h=10&bc=255,255,255&fc=0,0,0&fs=10&fn=arial&phone=LTg2MDQxMjE4NA%3D%3D%23RUUDo8OMhcacY0u%2F\" width=\"96\" height=\"12\" alt=\"东北骨头庄电话\" /></span></p>\r\n<p><span>人均：</span><span><font color=\"#ff4400\">52元</font></span></p>\r\n<p><span>时间：</span><span>日常营业</span></p>\r\n<p><span>特色：</span><span>无外卖 无包厢 不能刷卡 免费停车</span></p>\r\n','440','550','2010-06-05');");
E_D("replace into `qb_coupon_content_1` values('13','28','25','1','<span>地址：</span><span>中关村南大街甲18号国际大厦B1楼</span><p><span>电话：</span><span><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://count.koubei.com/showphone/showphone.php?f=jpg&w=96&h=10&bc=255,255,255&fc=0,0,0&fs=10&fn=arial&phone=MTkxNzk2NTk3MQ%3D%3D%23dOtjfT859mSJgYTE\" width=\"96\" height=\"12\" alt=\"外婆家国际行大厦店电话\" /></span></p>\r\n<p><span>人均：</span><span><font color=\"#ff4400\">71元</font></span></p>\r\n<p><span>特色：</span><span>有包厢 不能刷卡 免费停车</span></p>\r\n','550','670','2010-06-25');");
E_D("replace into `qb_coupon_content_1` values('12','27','25','1','<span>地址：</span><span>北苑170号(欧陆经典北区凯旋城底商)</span><p><span>电话：</span><span><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://count.koubei.com/showphone/showphone.php?f=jpg&w=96&h=10&bc=255,255,255&fc=0,0,0&fs=10&fn=arial&phone=MTYwMjg2NDg0NQ%3D%3D%23WFy1UFXCPYfyB7I%2B\" width=\"96\" height=\"12\" alt=\"澳门豆捞亚运村店电话\" /></span></p>\r\n<p><span>人均：</span><span><font color=\"#ff4400\">59元</font></span></p>\r\n<p><span>特色：</span><span>可停车</span></p>\r\n','235','469','2010-06-05');");
E_D("replace into `qb_coupon_content_1` values('19','34','25','1','<p>\r\n	址：<span>安定门西大街7号</span></p>\r\n<p>\r\n	<span>电话：</span><span><img onload=''if(this.width>600)makesmallpic(this,600,800);'' alt=\"九乡日本料理电话\" height=\"12\" onload=\"if(this.width&gt;600)makesmallpic(this,600,800);\" src=\"http://count.koubei.com/showphone/showphone.php?f=jpg&amp;w=96&amp;h=10&amp;bc=255,255,255&amp;fc=0,0,0&amp;fs=10&amp;fn=arial&amp;phone=LTE2NDM0NzMwMA%3D%3D%23VE9RGkHlse4wgH8f\" width=\"96\" /></span></p>\r\n<p>\r\n	<span>人均：</span><span><font color=\"#ff4400\">79元</font></span></p>\r\n<p>\r\n	<span>时间：</span><span>日常营业</span></p>\r\n<p>\r\n	<span>特色：</span><span>不能刷卡</span><span> 免费停车</span></p>\r\n','40','90','2010-06-03');");
E_D("replace into `qb_coupon_content_1` values('20','35','25','1','<div>菜品3.8折起，入会即送菜品+1元/人秘制饮料无限续杯，逢周一免费酒水畅饮，限朝外店、美术馆店。</div><p><span style=\"text-decoration:underline;\">地址：朝外大街12号昆泰商城三楼(百脑汇旁)</span></p>','30','100','2010-06-24');");

require("../../inc/footer.php");
?>