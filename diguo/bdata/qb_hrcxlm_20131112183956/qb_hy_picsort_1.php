<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hy_picsort`;");
E_C("CREATE TABLE `qb_hy_picsort` (
  `psid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `psup` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `remarks` varchar(248) NOT NULL DEFAULT '',
  `uid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `username` varchar(16) NOT NULL DEFAULT '',
  `level` tinyint(1) NOT NULL DEFAULT '0',
  `posttime` int(10) unsigned NOT NULL DEFAULT '0',
  `orderlist` mediumint(4) unsigned NOT NULL DEFAULT '0',
  `faceurl` varchar(248) NOT NULL DEFAULT '',
  PRIMARY KEY (`psid`),
  KEY `uid` (`uid`,`orderlist`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=gbk");
E_D("replace into `qb_hy_picsort` values('1','0','��Ʒͼ��','��¼��Ʒ�෽��ͼƬ����','27','test1','0','1288661741','2','');");
E_D("replace into `qb_hy_picsort` values('2','0','����˵��','����֤�飬��֤�飬Ӫҵִ��','27','test1','0','1288661741','1','');");
E_D("replace into `qb_hy_picsort` values('3','0','��Ʒͼ��','��¼��Ʒ�෽��ͼƬ����','28','test2','0','1288662180','2','');");
E_D("replace into `qb_hy_picsort` values('4','0','����˵��','����֤�飬��֤�飬Ӫҵִ��','28','test2','0','1288662180','1','');");
E_D("replace into `qb_hy_picsort` values('5','0','��Ʒͼ��','��¼��Ʒ�෽��ͼƬ����','29','test3','0','1288662327','2','');");
E_D("replace into `qb_hy_picsort` values('6','0','����˵��','����֤�飬��֤�飬Ӫҵִ��','29','test3','0','1288662327','1','');");
E_D("replace into `qb_hy_picsort` values('7','0','��Ʒͼ��','��¼��Ʒ�෽��ͼƬ����','30','test4','0','1288662567','2','');");
E_D("replace into `qb_hy_picsort` values('8','0','����˵��','����֤�飬��֤�飬Ӫҵִ��','30','test4','0','1288662567','1','');");
E_D("replace into `qb_hy_picsort` values('9','0','��Ʒͼ��','��¼��Ʒ�෽��ͼƬ����','31','test5','0','1288662786','2','');");
E_D("replace into `qb_hy_picsort` values('10','0','����˵��','����֤�飬��֤�飬Ӫҵִ��','31','test5','0','1288662786','1','');");
E_D("replace into `qb_hy_picsort` values('11','0','��Ʒͼ��','��¼��Ʒ�෽��ͼƬ����','32','test6','0','1288662947','2','');");
E_D("replace into `qb_hy_picsort` values('12','0','����˵��','����֤�飬��֤�飬Ӫҵִ��','32','test6','0','1288662947','1','');");
E_D("replace into `qb_hy_picsort` values('13','0','��Ʒͼ��','��¼��Ʒ�෽��ͼƬ����','33','test7','0','1288663129','2','');");
E_D("replace into `qb_hy_picsort` values('14','0','����˵��','����֤�飬��֤�飬Ӫҵִ��','33','test7','0','1288663129','1','');");
E_D("replace into `qb_hy_picsort` values('15','0','��Ʒͼ��','��¼��Ʒ�෽��ͼƬ����','34','test8','0','1288663299','2','');");
E_D("replace into `qb_hy_picsort` values('16','0','����˵��','����֤�飬��֤�飬Ӫҵִ��','34','test8','0','1288663299','1','');");
E_D("replace into `qb_hy_picsort` values('17','0','��Ʒͼ��','��¼��Ʒ�෽��ͼƬ����','35','test9','0','1288663462','2','');");
E_D("replace into `qb_hy_picsort` values('18','0','����˵��','����֤�飬��֤�飬Ӫҵִ��','35','test9','0','1288663462','1','');");
E_D("replace into `qb_hy_picsort` values('19','0','��Ʒͼ��','��¼��Ʒ�෽��ͼƬ����','36','test10','0','1288663617','2','');");
E_D("replace into `qb_hy_picsort` values('20','0','����˵��','����֤�飬��֤�飬Ӫҵִ��','36','test10','0','1288663617','1','');");
E_D("replace into `qb_hy_picsort` values('21','0','��Ʒͼ��','��¼��Ʒ�෽��ͼƬ����','37','test11','0','1288663816','2','');");
E_D("replace into `qb_hy_picsort` values('22','0','����˵��','����֤�飬��֤�飬Ӫҵִ��','37','test11','0','1288663816','1','');");
E_D("replace into `qb_hy_picsort` values('24','0','��Ʒͼ��','��¼��Ʒ�෽��ͼƬ����','40','֣־��','0','1381403629','2','');");
E_D("replace into `qb_hy_picsort` values('25','0','����˵��','����֤�飬��֤�飬Ӫҵִ��','40','֣־��','0','1381403629','1','');");
E_D("replace into `qb_hy_picsort` values('26','0','��Ʒͼ��','��¼��Ʒ�෽��ͼƬ����','43','sara2','0','1381511009','2','');");
E_D("replace into `qb_hy_picsort` values('27','0','����˵��','����֤�飬��֤�飬Ӫҵִ��','43','sara2','0','1381511009','1','');");

require("../../inc/footer.php");
?>