<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_fenlei_content_13`;");
E_C("CREATE TABLE `qb_fenlei_content_13` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `sortid` tinyint(3) NOT NULL DEFAULT '0',
  `sortid2` tinyint(3) NOT NULL DEFAULT '0',
  `my_228` tinyint(1) NOT NULL DEFAULT '0',
  `my_837` varchar(100) NOT NULL DEFAULT '',
  `my_613` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`),
  KEY `my_228` (`my_228`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `qb_fenlei_content_13` values('1','38','158','1','����������������\r\n���������⣬ֻ�������Ժ���ˮ���������ζ�������������㶫�˿��磬��һ����ȴ����Ҫ�ϡ��ϻ��������� �����Ⱥȿ�����ô����Ҵ𣺵�Ȼ���ԣ�\r\n�����˴������������Ǳ�����������������������ƬƬ������������ǣ�����ţ�ǡ����⡢���ף�һ��ŵ����ﰾ������Щ��ʽ��ζ������������׵�����ð������������ˮ֬���ڣ����ʲ��塣\r\n���������������������ѹ�ͷ�ľ�������������������������㴼�࣬��ȫ����ɰ���ҳ����ϻ�������Ϊ���ϵ���ǣ�����֮��Ҳ�������š�����ϵĴ��������������н�ͷ��պ�ųԵĵ��Ͼͷֺü��֣��й�ͷҲҪ��г���������\r\n����һ�����¶ǣ����˼������ͷ������������ô�죿�ǾͿ���ɣ�','4','4','2','34·','����վ');");

require("../../inc/footer.php");
?>