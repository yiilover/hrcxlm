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
E_D("replace into `qb_house_content_4` values('2','43','4','1','1��  50-50�O  �۸�120-129��Ԫ\r\n\r\nȫ���󹺵��δ��50ƽ���ϳ���һ�ӣ��Ͳ㲻���ǡ�','50','����һ��','100','��ͨװ��','3');");
E_D("replace into `qb_house_content_4` values('3','44','4','1',' ��ƽ ��ƽ�س� &nbsp; 2��  90-300�O  �۸�200-600��Ԫ\r\n\r\n�з����У��۸���飡����λ�ã��ϱ���','36','����һ��','30','��ͨװ��','8');");
E_D("replace into `qb_house_content_4` values('4','45','4','1','�������������ͨ�ʲ��������޹�˾������˾��Ӫ�����з���������������������Ѻ�����С��ҵ����Ȼ��Ҷһ���רҵΪӵ�з�����ʱ��Ҫ�ʽ���ת�����ṩ������񣬱���˾����Ч���ر�߿��Ժϸ�������˾������Ҳ������˺�����','200','����һ��','100','����װ��','6');");

require("../../inc/footer.php");
?>