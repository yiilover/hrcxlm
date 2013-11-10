<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hr_content_2`;");
E_C("CREATE TABLE `qb_hr_content_2` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `speciality` varchar(50) NOT NULL DEFAULT '',
  `age` tinyint(2) NOT NULL DEFAULT '0',
  `sex` tinyint(1) NOT NULL DEFAULT '0',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `height` int(4) NOT NULL DEFAULT '0',
  `school_age` tinyint(3) NOT NULL DEFAULT '0',
  `alma_mater` varchar(30) NOT NULL DEFAULT '',
  `graduate_time` varchar(10) NOT NULL DEFAULT '',
  `mobphone` varchar(11) NOT NULL DEFAULT '',
  `qq` varchar(11) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `education` mediumtext NOT NULL,
  `work` mediumtext NOT NULL,
  `introduce` mediumtext NOT NULL,
  `skill` mediumtext NOT NULL,
  `interest` mediumtext NOT NULL,
  `lifeplace` varchar(50) NOT NULL DEFAULT '',
  `workyear` tinyint(2) NOT NULL DEFAULT '0',
  `worktime` varchar(20) NOT NULL DEFAULT '',
  `hope_job` varchar(200) NOT NULL DEFAULT '',
  `facephoto` varchar(100) NOT NULL DEFAULT '',
  `wage` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sex` (`sex`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk");
E_D("replace into `qb_hr_content_2` values('1','1','1','英语','25','1','张三丰','157','4','茂名学院','1982','13365874577','55651225','fdsag@ac.cn','fsda@adf.cn','大学\r\n小学','没什么','牛人一个','跳远','流水','北京','2','随时','美术设计','qb_hr_/0/1_20101102111157_hlxdx.jpg','-1');");
E_D("replace into `qb_hr_content_2` values('2','2','14','美术','26','2','何人珠','187','2','华南理工大学','2002','15874125478','52145687','vcdsfd@dsa.cn','fdsa@dfa.cn','小学:西联小学\r\n中学:星江中学\r\n大学:北京大学','第一年,网易主编\r\n第二年,搜狐缟工','我是一个牛人哦\r\n是不是呀','踢珠\r\n打饭','没有什么,更好的.','广州','2','随时','修理工','qb_hr_/0/14_20101009111006_gfye0.jpg','1');");
E_D("replace into `qb_hr_content_2` values('3','3','29','市场','29','1','刘太锋','175','4','华南师范大学','1999','15878745874','58745457','fdsaf@dsa.cn','25saf@dsa.cn','2001-2004年,就读于华东大学\r\n1998-2001年,就读于华东小学','在网易工作过两年','吃苦耐劳\r\n拼搏精神','市场预测\r\n市场分析','踢皮球\r\n打网球','北京','2','随时','软件销售工程师','qb_hr_/0/29_20101102111131_caqee.jpg','3');");
E_D("replace into `qb_hr_content_2` values('4','4','27','计算机','31','1','黄斌','185','1','中山大学','2001','15987777777','254114','fds@dsa.cn','0fds@dsa.cn','1998-2000华南附小\r\n2001-2004华南师范大学','2000年在搜狐工作过\r\n2005年在新浪工作过','吃苦耐劳\r\n拼搏精神','计算机高手\r\n游戏高手','打网球\r\n游泳','上海','2','一周内','软件工程师','qb_hr_/0/27_20101102101131_m6scp.gif','4');");
E_D("replace into `qb_hr_content_2` values('5','5','28','市场','23','2','李丽','165','4','华南大学','2001','15371111111','5478445','fds@dsa.cn','fds@dsa.cn','2001-2004华南师范院大学\r\n1998-2000年,华南附小','曾在网易工作过3年客服\r\n曾在新浪工作过5年客服','吃苦耐劳\r\n拼搏精神','客服售后服务\r\n\r\n接待客人','打球\r\n游泳','广州','1','随时','客服代表','qb_hr_/0/28_20101102111115_mn7ex.jpg','2');");
E_D("replace into `qb_hr_content_2` values('6','6','31','市场','28','2','张春芳','164','3','外语大学','1998','15355555555','456456546','fdsafsd@dsa.cn','0fdsafsd@dsa.cn','2001-2002年在师范院校就读\r\n1998-1999年在附小就读','去年在搜狐工作过\r\n前年在新浪工作过','吃苦耐劳\r\n拼搏精神','计算机,\r\n市场销售','打网球\r\n踢足球','深圳','1','随时','技术主管','qb_hr_/0/31_20101102111115_yrnp5.jpg','-1');");
E_D("replace into `qb_hr_content_2` values('7','7','32','美工','23','1','何小珍','168','4','美术学院','2001','15987878787','5542354','fgds@dsa.cn','21fgds@dsa.cn','2001-2003年广州美术大学\r\n1998-1999年广州华中附小','去年工作在新浪\r\n前年工作在搜狐','吃苦耐劳\r\n拼搏精神','美工设计\r\n网页设计','游泳\r\n打球','广州','1','随时','网页设计师','qb_hr_/0/32_20101102111124_jaf0y.jpg','4');");

require("../../inc/footer.php");
?>