<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_zhuangxiu_content_1`;");
E_C("CREATE TABLE `qb_zhuangxiu_content_1` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `sortid` tinyint(3) NOT NULL DEFAULT '0',
  `price` tinyint(2) NOT NULL DEFAULT '0',
  `supply_type` tinyint(1) NOT NULL DEFAULT '0',
  `acreage` varchar(12) NOT NULL DEFAULT '',
  `station` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`),
  KEY `room_type` (`supply_type`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gbk");
E_D("replace into `qb_zhuangxiu_content_1` values('1','5','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, ����, sans-serif; \">��ʱ������������ǰԤԼ��</span><span style=\"font-family: Arial, ����, sans-serif; \">���·�ë��������������Ϳ���������ϲ���ִ���Լ��װ�޷�񣬸�ֲ��������Ԥ����3�����ң�����ϸ����̸��</span>','1','4','1','89','������ƽ��10��¥');");
E_D("replace into `qb_zhuangxiu_content_1` values('2','6','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, ����, sans-serif; \">��ĩ�����ܶ���������</span><span style=\"font-family: Arial, ����, sans-serif; \">��Ҫ���������װ�޹�˾��������һ����֤����Ķ��ַ���Ҫ���巭�£����Ԥ����3-5��Ҳ�ɿ���ȫ��������ϸ����̸��</span>','3','3','1','67','��������ˮ·89��');");
E_D("replace into `qb_zhuangxiu_content_1` values('3','7','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, ����, sans-serif; \">����ĩ������������ǰԤԼ��</span><span style=\"font-family: Arial, ����, sans-serif; \">����Ķ��ַ����Ѿ���������Ҫ�ǳ�������������Ҫ�������װ�ޣ������򵥷���װ�ޣ���Ԥ��2-3�򣬾�����̸</span>','2','2','2','122','��̨���ѻ���8¥');");
E_D("replace into `qb_zhuangxiu_content_1` values('4','8','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, ����, sans-serif; \">11����Ѯ������������ǰԤԼ��</span><span style=\"font-family: Arial, ����, sans-serif; \">��Ҫ���������װ�޹�˾��������һ���ı�֤���ִ���Լ��װ�޷���е�С���⣬����ϸ����̸</span>','1','4','2','56','��̨��¬���Ÿ���');");
E_D("replace into `qb_zhuangxiu_content_1` values('5','9','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, ����, sans-serif; \">���緽����������ǰԤԼ��</span><span style=\"font-family: Arial, ����, sans-serif; \">����Ķ��ַ��������巭�£�������ͳ������ֲ��ã���Ҫ�Ķ��������ļ򵥷��£�������ƣ�����ϸ����̸��</span>','1','5','1','122','���������²���ݸ���');");
E_D("replace into `qb_zhuangxiu_content_1` values('6','10','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, ����, sans-serif; \">��ĩ������������ǰԤԼ��</span><span style=\"font-family: Arial, ����, sans-serif; \">��Ҫ���������װ�޹�˾��������һ����֤���������ҵĸ�֣���ǰ�ǰ칫�ģ������뷭��װ���Լ�ס��ϲ����ʽ��װ�޷�񣬾���ϸ����̸��</span>','1','3','1','122','������ʢ����԰10��¥');");
E_D("replace into `qb_zhuangxiu_content_1` values('7','11','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, ����, sans-serif; \">��ʱ������������ǰ�绰ԤԼ</span><span style=\"font-family: Arial, ����, sans-serif; \">���Ϸ���ƽ�������巭�£�ˮ����Ҫ���������鷿�õģ�ȫ����Ԥ����2�����ң�Ҫ������ÿռ䣬������ƣ�����װ�޷����Ҫ�����ʦ��ϸ��ͨ��װ�޹�˾��Ҫ�����á�����̬�Ⱥá��Լ۱ȸߣ�����ϸ����̸��</span>','1','1','2','77','��������դ������');");
E_D("replace into `qb_zhuangxiu_content_1` values('8','12','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, ����, sans-serif; \">��ʱ������������ǰ2��ԤԼ��</span><span style=\"font-family: Arial, ����, sans-serif; \">���·����ѽ�������ë��������װ�ޣ�ȫ��Ԥ����3-5��Ҫ���������װ�޹�˾��������һ����֤������ϸ����̸��</span>','2','3','1','123','��ƽ����ͨԷ');");
E_D("replace into `qb_zhuangxiu_content_1` values('9','13','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, ����, sans-serif; \">��ʱ������������ǰԤԼ��</span><span style=\"font-family: Arial, ����, sans-serif; \">��3�㣬�е����ң����칫¥�����������з��ģ�һ����Ա���칫���������쵼�칫������Ҫ��������Ϳͷ�����Ҫ��4���������1��������ǽ�漰�ذ壬������װ�ޣ�����ϸ����̸��</span>','3','1','1','480','�������ϵ������¹��');");
E_D("replace into `qb_zhuangxiu_content_1` values('10','14','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, ����, sans-serif; \">����7�������ĩ������������ǰԤԼ��</span><span style=\"font-family: Arial, ����, sans-serif; \">��Ҫ���������װ�޹�˾��������һ����֤�����Ӹ�ֲ�����������Ҫ���ݷ�����������������Ԥ����4�����ң�����ϸ����̸��</span>','1','1','1','68','��ɽ���ֻ��');");
E_D("replace into `qb_zhuangxiu_content_1` values('11','15','1','1','<span style=\"font-family:Arial, ����, sans-serif;margin: 0px; padding: 0px; \">�����շ�����������ǰ�绰ԤԼ</span><span style=\"font-family:Arial, ����, sans-serif;\">���·�������õģ���װ��ȫ��Ԥ����20����30��֮�䣬����װ�޷������ʦ��ͨ��װ�޹�˾��Ҫ�����á�ʩ�����պõģ�ϸ����̸��</span>','1','1','1','120','������������');");

require("../../inc/footer.php");
?>