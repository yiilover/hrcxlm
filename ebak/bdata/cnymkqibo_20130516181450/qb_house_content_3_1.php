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
E_D("replace into `qb_house_content_3` values('2','40','3','1','�������Ҹ����ӣ�ֻҪ���������������ģ����������������ϰ࣬��ͨ����ߣ���ֱ�ﳵ��Ҳ�У���ÿ�����վ�� ���ӣ����Ӷ��У�һ�ӵ���ô�һ��ģ��� �н�Ͳ����ˣ�������ţ������ǰ��첻�ڣ����Է����Ÿ���','3200','����һ��','100','��װ��','2');");
E_D("replace into `qb_house_content_3` values('3','41','3','1','Ҫ�󰲾�����װ�� ����ͣ��λ���޵���3�����ڣ�����ǩ�����������ⷿЭ�顣�н����ţ�������\r\nһ���˴��㳤�ھ�ס����ܰ�ϧ��ķ��ӡ����3000-3200��','2500','����һ��','100','��װ��','3');");
E_D("replace into `qb_house_content_3` values('4','42','3','1','����Ϊ�����ϰ��壬ϣ�����ڿ���԰��˫��Է��ˮ��˫��������С����á�\r\n����Ҫ���䣬�ɾ�������������\r\n�����ܸ��ϼ䡣','2400','����һ��','98','��ͨװ��','5');");

require("../../inc/footer.php");
?>