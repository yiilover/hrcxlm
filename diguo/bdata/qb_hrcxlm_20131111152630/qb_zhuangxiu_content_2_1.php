<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_zhuangxiu_content_2`;");
E_C("CREATE TABLE `qb_zhuangxiu_content_2` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `sortid` tinyint(3) NOT NULL DEFAULT '0',
  `designer` varchar(50) NOT NULL DEFAULT '',
  `design_style` tinyint(2) NOT NULL DEFAULT '0',
  `total_price` varchar(10) NOT NULL DEFAULT '',
  `acreage` varchar(10) NOT NULL DEFAULT '',
  `designer_id` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`),
  KEY `designer_id` (`designer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk");
E_D("replace into `qb_zhuangxiu_content_2` values('1','43','2','1','�򵥾�����','1','������','2','2','122','4');");
E_D("replace into `qb_zhuangxiu_content_2` values('2','44','2','1','�򵥾�����','1','������','2','3','57','4');");
E_D("replace into `qb_zhuangxiu_content_2` values('3','45','2','1','�򵥾�����','3','��ѩ','2','4','100','3');");
E_D("replace into `qb_zhuangxiu_content_2` values('4','46','2','1','�򵥾�����','1','��ѩ','2','3','56','3');");
E_D("replace into `qb_zhuangxiu_content_2` values('5','47','2','1','�򵥾�����','1','�ִ�÷','1','3.2','122','2');");
E_D("replace into `qb_zhuangxiu_content_2` values('6','48','2','1','�򵥾�����','1','�ִ�÷','3','2.3','57','2');");
E_D("replace into `qb_zhuangxiu_content_2` values('7','49','2','1','����װ�ޡ�','1','��Сѩ','4','5','122','1');");
E_D("replace into `qb_zhuangxiu_content_2` values('8','50','2','1','�򵥾�����','1','��Сѩ','2','1','56','1');");
E_D("replace into `qb_zhuangxiu_content_2` values('9','52','2','1','��ʽ���ĺ��ţ���԰�������£����߽�ϴ���һ���������֮�ҡ�����ʵľ��������������ɳ����������Ƶ��ӱ���ǽ������ʽ�Ĳ�����ʵľ��������Ρ�����ĳ���L����ƣ���ɫ������񣬹����Ż��õ�������װ�Ρ���ܰ������ů��ɫ����ǽ��ʵľ����ļҾߣ������ж����������䣬��ԡ��ԡ����Ϊһ�塣������Լ��С�鷿����ɫ����������ܣ����ɵİ칫ѧϰ��������Ȼ���ӣ�������','1','������','2','3','60','4');");
E_D("replace into `qb_zhuangxiu_content_2` values('10','53','2','1','���Ҿ��Ի�ɫΪ��ɫ������ܰװ�磬���ڷ��������԰��Ϊ����ʱ��Ҳ�����ִ���Լ����Ϣ��ʱ��ɢ������ʽ��ĺ�ˬ������һ��ʱ������ܰ��ϵ�����֮�ҡ�������ɫ��ֽ����װ�α���ǽ��ʵľ����輸�͵��ӹ񣬻�����˿���Ʈ������������ʽ����ƣ�����װ�α���ǽ�����õ�����������װ�Ρ���ͯ����ɫ��ֽ����װ�Σ���ɫ���������������ƣ�������ܰ����װ�Σ���̨������С����װ�ΰ��衣','1','������','2','4','86','4');");

require("../../inc/footer.php");
?>