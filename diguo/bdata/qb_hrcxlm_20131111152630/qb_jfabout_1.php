<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_jfabout`;");
E_C("CREATE TABLE `qb_jfabout` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(5) NOT NULL DEFAULT '0',
  `title` varchar(150) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `list` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=gbk");
E_D("replace into `qb_jfabout` values('6','2','�������¿ɵ�{\$webdb[postArticleMoney]}������','ֻ����˺�����²ſɵû���,û��˵����²��û���.','0');");
E_D("replace into `qb_jfabout` values('7','2','ɾ�����¿۳�{\$webdb[deleteArticleMoney]}������','','0');");
E_D("replace into `qb_jfabout` values('5','1','�û�ע��ɵ�{\$webdb[regmoney]}������','','0');");
E_D("replace into `qb_jfabout` values('8','2','���±�����Ϊ�����ɵ�{\$webdb[comArticleMoney]}������','','0');");
E_D("replace into `qb_jfabout` values('9','1','ÿ���㿨�ɶһ�{\$webdb[MoneyRatio]}������,�㿨����ͨ�����߳�ֵ���.','','0');");

require("../../inc/footer.php");
?>