<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_admin_menu`;");
E_C("CREATE TABLE `qb_admin_menu` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(5) NOT NULL DEFAULT '0',
  `name` text NOT NULL,
  `linkurl` varchar(150) NOT NULL DEFAULT '',
  `color` varchar(15) NOT NULL DEFAULT '',
  `target` tinyint(1) NOT NULL DEFAULT '0',
  `list` smallint(4) NOT NULL DEFAULT '0',
  `groupid` mediumint(5) NOT NULL DEFAULT '0',
  `iftier` tinyint(1) NOT NULL DEFAULT '0',
  `ifcompany` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `groupid` (`groupid`)
) ENGINE=MyISAM AUTO_INCREMENT=161 DEFAULT CHARSET=gbk");
E_D("replace into `qb_admin_menu` values('12','0','���ݹ���','','','0','99','3','0','0');");
E_D("replace into `qb_admin_menu` values('83','0','��ǩ����','','','0','100','3','0','0');");
E_D("replace into `qb_admin_menu` values('84','83','��Ѷ��ҳ','../news/index.php?jobs=show','','0','18','3','1','0');");
E_D("replace into `qb_admin_menu` values('140','111','����','index.php?lfj=module_admin&dirname=hy&file=sort&job=listsort','','0','-2','3','1','0');");
E_D("replace into `qb_admin_menu` values('138','111','�Żݴ���','index.php?lfj=module_admin&dirname=coupon&file=sort&job=listsort','','0','69','3','0','0');");
E_D("replace into `qb_admin_menu` values('139','111','��Ʒ','index.php?lfj=module_admin&dirname=gift&file=sort&job=listsort','','0','68','3','1','0');");
E_D("replace into `qb_admin_menu` values('86','83','������ҳ','index.php?lfj=module_admin&dirname=hy&file=center&job=label','','0','15','3','0','0');");
E_D("replace into `qb_admin_menu` values('87','0','���۹���','','','0','7','3','0','0');");
E_D("replace into `qb_admin_menu` values('90','87','��������','index.php?lfj=module_admin&dirname=f&file=comment&job=list','','0','89','3','0','0');");
E_D("replace into `qb_admin_menu` values('91','87','�������','index.php?lfj=module_admin&dirname=f&file=dianping&job=list','','0','88','3','1','0');");
E_D("replace into `qb_admin_menu` values('112','111','������Ѷ','index.php?lfj=module_admin&dirname=news&file=sort&job=listsort&type=all','','0','-1','3','0','0');");
E_D("replace into `qb_admin_menu` values('111','0','�������','','','0','88','3','0','0');");
E_D("replace into `qb_admin_menu` values('75','12','������Ѷ','index.php?lfj=module_admin&dirname=news&file=list&job=list','','0','-1','3','0','0');");
E_D("replace into `qb_admin_menu` values('125','12','������Ϣ','index.php?lfj=module_admin&dirname=f&file=list&job=list','','0','59','3','0','0');");
E_D("replace into `qb_admin_menu` values('126','12','��Ʒ','index.php?lfj=module_admin&dirname=shop&file=list&job=list','','0','58','3','1','0');");
E_D("replace into `qb_admin_menu` values('116','12','����','index.php?lfj=module_admin&dirname=hy&file=company&job=list','','0','-2','3','1','0');");
E_D("replace into `qb_admin_menu` values('127','12','�','index.php?lfj=module_admin&dirname=tg&file=list&job=list','','0','57','3','1','0');");
E_D("replace into `qb_admin_menu` values('128','12','������Ϣ','index.php?lfj=module_admin&dirname=coupon&file=list&job=list','','0','49','3','0','0');");
E_D("replace into `qb_admin_menu` values('129','12','��Ʒ','index.php?lfj=module_admin&dirname=gift&file=list&job=list','','0','48','3','1','0');");
E_D("replace into `qb_admin_menu` values('135','111','������Ϣ','index.php?lfj=module_admin&dirname=f&file=sort&job=listsort','','0','79','3','0','0');");
E_D("replace into `qb_admin_menu` values('136','111','��Ʒ','index.php?lfj=module_admin&dirname=shop&file=sort&job=listsort','','0','78','3','1','0');");
E_D("replace into `qb_admin_menu` values('137','111','�','index.php?lfj=module_admin&dirname=tg&file=sort&job=listsort','','0','77','3','1','0');");
E_D("replace into `qb_admin_menu` values('102','83','��վ��ҳ','../index.php?&ch=1&chtype=0&jobs=show','','0','19','3','0','0');");
E_D("replace into `qb_admin_menu` values('141','87','��Ʒ����','index.php?lfj=module_admin&dirname=shop&file=comment&job=list','','0','79','3','0','0');");
E_D("replace into `qb_admin_menu` values('142','87','�Ź��','index.php?lfj=module_admin&dirname=tg&file=comment&job=list','','0','78','3','1','0');");
E_D("replace into `qb_admin_menu` values('143','87','��Ѷ����','index.php?lfj=module_admin&dirname=news&file=comment&job=list','','0','69','3','0','0');");
E_D("replace into `qb_admin_menu` values('110','83','��Ʒ��ҳ','index.php?lfj=module_admin&dirname=gift&file=center&job=label','','0','14','3','1','0');");
E_D("replace into `qb_admin_menu` values('109','83','������ҳ','index.php?lfj=module_admin&dirname=coupon&file=center&job=label','','0','6','3','1','0');");
E_D("replace into `qb_admin_menu` values('106','83','������ҳ','index.php?lfj=module_admin&dirname=f&file=center&job=label','','0','11','3','0','0');");
E_D("replace into `qb_admin_menu` values('107','83','�̳���ҳ','index.php?lfj=module_admin&dirname=shop&file=center&job=label','','0','10','3','1','0');");
E_D("replace into `qb_admin_menu` values('108','83','���ҳ','index.php?lfj=module_admin&dirname=tg&file=center&job=label','','0','9','3','0','0');");
E_D("replace into `qb_admin_menu` values('144','83','������ҳ','index.php?lfj=module_admin&dirname=house&file=center&job=label','','0','5','3','0','0');");
E_D("replace into `qb_admin_menu` values('145','12','����','index.php?lfj=module_admin&dirname=house&file=list&job=list','','0','-3','3','1','0');");
E_D("replace into `qb_admin_menu` values('146','87','����','index.php?lfj=module_admin&dirname=house&file=comment&job=list','','0','68','3','1','0');");
E_D("replace into `qb_admin_menu` values('147','83','������ҳ','index.php?lfj=module_admin&dirname=dianping&file=center&job=label','','0','4','3','1','0');");
E_D("replace into `qb_admin_menu` values('148','12','����','index.php?lfj=module_admin&dirname=dianping&file=list&job=list','','0','47','3','1','0');");
E_D("replace into `qb_admin_menu` values('149','111','����','index.php?lfj=module_admin&dirname=dianping&file=sort&job=listsort','','0','67','3','1','0');");
E_D("replace into `qb_admin_menu` values('150','87','�̼ҵ���','index.php?lfj=module_admin&dirname=dianping&file=dianping&job=list','','0','0','3','0','0');");
E_D("replace into `qb_admin_menu` values('151','83','������ҳ','index.php?lfj=module_admin&dirname=2shou&file=center&job=label','','0','7','3','0','0');");
E_D("replace into `qb_admin_menu` values('152','12','�����г�','index.php?lfj=module_admin&dirname=2shou&file=list&job=list','','0','-4','3','0','0');");
E_D("replace into `qb_admin_menu` values('153','111','�����г�','index.php?lfj=module_admin&dirname=2shou&file=sort&job=listsort','','0','-3','3','0','0');");
E_D("replace into `qb_admin_menu` values('154','87','�����г�','index.php?lfj=module_admin&dirname=2shou&file=comment&job=list','','0','0','3','1','0');");
E_D("replace into `qb_admin_menu` values('155','83','�Ź���ҳ','index.php?lfj=module_admin&dirname=shoptg&file=center&job=label','','0','8','3','1','0');");
E_D("replace into `qb_admin_menu` values('156','12','�Ź�','index.php?lfj=module_admin&dirname=shoptg&file=list&job=list','','0','-5','3','1','0');");
E_D("replace into `qb_admin_menu` values('157','111','�Ź�','index.php?lfj=module_admin&dirname=shoptg&file=sort&job=listsort','','0','-4','3','1','0');");
E_D("replace into `qb_admin_menu` values('158','83','װ����ҳ','index.php?lfj=module_admin&dirname=zhuangxiu&file=center&job=label','','0','0','3','0','0');");
E_D("replace into `qb_admin_menu` values('159','12','װ��','index.php?lfj=module_admin&dirname=zhuangxiu&file=list&job=list','','0','-6','3','1','0');");
E_D("replace into `qb_admin_menu` values('160','87','װ��','index.php?lfj=module_admin&dirname=zhuangxiu&file=comment&job=list','','0','67','3','1','0');");

require("../../inc/footer.php");
?>