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
E_D("replace into `qb_coupon_content_1` values('18','33','25','1','<span>��ַ��</span><span>������ũչ����·1��(��������԰����) </span><p><span>�绰��</span><span><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://count.koubei.com/showphone/showphone.php?f=jpg&w=96&h=10&bc=255,255,255&fc=0,0,0&fs=10&fn=arial&phone=LTE2NTUzMjIxMzU%3D%23n483rlAaILSEXvUL\" width=\"96\" height=\"12\" alt=\"��ϵ˽�����ӵ绰\" /></span></p>\r\n<p><span>��ɫ��</span><span>����ˢ�� ��ͣ��</span></p>\r\n','35','54','2010-06-03');");
E_D("replace into `qb_coupon_content_1` values('17','32','25','1','<span>��ַ��</span><span>���������(˧��԰��ͬ9��)</span><p><span>�绰��</span><span><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://count.koubei.com/showphone/showphone.php?f=jpg&w=96&h=10&bc=255,255,255&fc=0,0,0&fs=10&fn=arial&phone=MTQ4NDUxODk1Ng%3D%3D%235joPVM%2FQGFsptZQi\" width=\"96\" height=\"12\" alt=\"ȫ�۵¿�Ѽ����������绰\" /></span></p>\r\n<p><span>�˾���</span><span><font color=\"#ff4400\">85Ԫ</font></span></p>\r\n<p><span>��ɫ��</span><span>������ �а��� ����ˢ�� �շ�ͣ��</span></p>\r\n','400','800','2010-06-04');");
E_D("replace into `qb_coupon_content_1` values('16','31','25','1','<span>��ַ��</span><span>��̳��·����·��39��(��̳��԰����)</span><p><span>�绰��</span><span><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://count.koubei.com/showphone/showphone.php?f=jpg&w=96&h=10&bc=255,255,255&fc=0,0,0&fs=10&fn=arial&phone=MTY1MjE5Njk5Mg%3D%3D%23K0o68qh%2FiXbrW3yU\" width=\"96\" height=\"12\" alt=\"��������ţ�Ž��������̳��԰��绰\" /></span></p>\r\n<p><span>�˾���</span><span><font color=\"#ff4400\">42Ԫ</font></span></p>\r\n<p><span>��ɫ��</span><span>�ް��� ��ˢ�� ���ͣ��</span></p>\r\n','400','500','2010-06-05');");
E_D("replace into `qb_coupon_content_1` values('15','30','25','1','<span>��ַ��</span><span>��������·11��(��������̨��ַ��50���ʾֺ�ͬ...</span><p><span>�绰��</span><span><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://count.koubei.com/showphone/showphone.php?f=jpg&w=96&h=10&bc=255,255,255&fc=0,0,0&fs=10&fn=arial&phone=MTg1Nzk3NTA2%23Q2sLPpQSEZvelo6d\" width=\"96\" height=\"12\" alt=\"����С�ݵ绰\" /></span></p>\r\n<p><span>�˾���</span><span><font color=\"#ff4400\">40Ԫ</font></span></p>\r\n<p><span>��ɫ��</span><span>����ˢ�� </span></p>\r\n','500','700','2010-06-26');");
E_D("replace into `qb_coupon_content_1` values('14','29','25','1','<span>��ַ��</span><span>κ����С��29��</span><p><span>�绰��</span><span><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://count.koubei.com/showphone/showphone.php?f=jpg&w=96&h=10&bc=255,255,255&fc=0,0,0&fs=10&fn=arial&phone=LTg2MDQxMjE4NA%3D%3D%23RUUDo8OMhcacY0u%2F\" width=\"96\" height=\"12\" alt=\"������ͷׯ�绰\" /></span></p>\r\n<p><span>�˾���</span><span><font color=\"#ff4400\">52Ԫ</font></span></p>\r\n<p><span>ʱ�䣺</span><span>�ճ�Ӫҵ</span></p>\r\n<p><span>��ɫ��</span><span>������ �ް��� ����ˢ�� ���ͣ��</span></p>\r\n','440','550','2010-06-05');");
E_D("replace into `qb_coupon_content_1` values('13','28','25','1','<span>��ַ��</span><span>�йش��ϴ�ּ�18�Ź��ʴ���B1¥</span><p><span>�绰��</span><span><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://count.koubei.com/showphone/showphone.php?f=jpg&w=96&h=10&bc=255,255,255&fc=0,0,0&fs=10&fn=arial&phone=MTkxNzk2NTk3MQ%3D%3D%23dOtjfT859mSJgYTE\" width=\"96\" height=\"12\" alt=\"���żҹ����д��õ�绰\" /></span></p>\r\n<p><span>�˾���</span><span><font color=\"#ff4400\">71Ԫ</font></span></p>\r\n<p><span>��ɫ��</span><span>�а��� ����ˢ�� ���ͣ��</span></p>\r\n','550','670','2010-06-25');");
E_D("replace into `qb_coupon_content_1` values('12','27','25','1','<span>��ַ��</span><span>��Է170��(ŷ½���䱱�������ǵ���)</span><p><span>�绰��</span><span><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://count.koubei.com/showphone/showphone.php?f=jpg&w=96&h=10&bc=255,255,255&fc=0,0,0&fs=10&fn=arial&phone=MTYwMjg2NDg0NQ%3D%3D%23WFy1UFXCPYfyB7I%2B\" width=\"96\" height=\"12\" alt=\"���Ŷ������˴��绰\" /></span></p>\r\n<p><span>�˾���</span><span><font color=\"#ff4400\">59Ԫ</font></span></p>\r\n<p><span>��ɫ��</span><span>��ͣ��</span></p>\r\n','235','469','2010-06-05');");
E_D("replace into `qb_coupon_content_1` values('19','34','25','1','<p>\r\n	ַ��<span>�����������7��</span></p>\r\n<p>\r\n	<span>�绰��</span><span><img onload=''if(this.width>600)makesmallpic(this,600,800);'' alt=\"�����ձ�����绰\" height=\"12\" onload=\"if(this.width&gt;600)makesmallpic(this,600,800);\" src=\"http://count.koubei.com/showphone/showphone.php?f=jpg&amp;w=96&amp;h=10&amp;bc=255,255,255&amp;fc=0,0,0&amp;fs=10&amp;fn=arial&amp;phone=LTE2NDM0NzMwMA%3D%3D%23VE9RGkHlse4wgH8f\" width=\"96\" /></span></p>\r\n<p>\r\n	<span>�˾���</span><span><font color=\"#ff4400\">79Ԫ</font></span></p>\r\n<p>\r\n	<span>ʱ�䣺</span><span>�ճ�Ӫҵ</span></p>\r\n<p>\r\n	<span>��ɫ��</span><span>����ˢ��</span><span> ���ͣ��</span></p>\r\n','40','90','2010-06-03');");
E_D("replace into `qb_coupon_content_1` values('20','35','25','1','<div>��Ʒ3.8������ἴ�Ͳ�Ʒ+1Ԫ/������������������������һ��Ѿ�ˮ�������޳���ꡢ�����ݵꡣ</div><p><span style=\"text-decoration:underline;\">��ַ��������12����̩�̳���¥(���Ի���)</span></p>','30','100','2010-06-24');");

require("../../inc/footer.php");
?>