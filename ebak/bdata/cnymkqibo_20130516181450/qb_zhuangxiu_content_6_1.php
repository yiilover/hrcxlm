<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_zhuangxiu_content_6`;");
E_C("CREATE TABLE `qb_zhuangxiu_content_6` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `in_company` varchar(100) NOT NULL DEFAULT '',
  `experience` varchar(50) NOT NULL DEFAULT '',
  `skill` varchar(100) NOT NULL DEFAULT '',
  `design_style` varchar(100) NOT NULL DEFAULT '',
  `design_goal` varchar(200) NOT NULL DEFAULT '',
  `company_id` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `company_id` (`company_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `qb_zhuangxiu_content_6` values('1','1','6','1','<p>������ƣ�</p><p>�ͻ����ϵۣ�</p>','�����޼ʺ��װ�����޹�˾','����','/#/��ͨסլ/#/д��¥/#/����/#/','/#/��Լ/#/�ִ�/#/','û����ã�ֻ�и���','42');");
E_D("replace into `qb_zhuangxiu_content_6` values('2','2','6','1','<p>��������������ʦ��</p><p>ʱ��Ϊ�û����룡</p>','�����ʢ����װ�ι������޹�˾','����','/#/��ͨסլ/#/����/#/','/#/��Լ/#/�ִ�/#/��ʽ/#/','һ��Ϊ�˿ͻ���','41');");
E_D("replace into `qb_zhuangxiu_content_6` values('3','3','6','1','<p>̤̤ʵʵΪ�ͻ�����ƣ�</p><p>��������Ĺ�����</p>','�����������װ�ι������޹�˾','����','/#/��ͨסլ/#/����/#/','/#/��Լ/#/�ִ�/#/ŷʽ/#/','׷������������Ƹ��ͻ���','40');");
E_D("replace into `qb_zhuangxiu_content_6` values('4','4','6','1','<p>���ӹ�˾�İ��ţ�</p><p>���ӿͻ��������</p>','������Ե��װ��������޹�˾','��������','/#/��ͨסլ/#/����/#/','/#/��Լ/#/�ִ�/#/ŷʽ/#/','����õĶ������ͻ���','39');");
E_D("replace into `qb_zhuangxiu_content_6` values('5','51','6','1','�ͻ�Ҫ�ģ��������㣡','�����������Ʒ���Ҿ�װ�����޹�˾','һ��','/#/��ͨסլ/#/','/#/��Լ/#/�ִ�/#/','һ��Ϊ�˿ͻ�����Ҫ��','38');");

require("../../inc/footer.php");
?>