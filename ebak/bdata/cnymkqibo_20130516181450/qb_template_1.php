<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_template`;");
E_C("CREATE TABLE `qb_template` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `type` smallint(4) NOT NULL DEFAULT '0',
  `filepath` varchar(100) NOT NULL DEFAULT '',
  `descrip` text NOT NULL,
  `list` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=gbk");
E_D("replace into `qb_template` values('5','ͷ���װ�','7','template/default/none.htm','','0');");
E_D("replace into `qb_template` values('6','�ײ��װ�','8','template/default/none.htm','','0');");
E_D("replace into `qb_template` values('23','�����б�ҳ(�����խ)','2','template/default/list.htm','','0');");
E_D("replace into `qb_template` values('22','����ҳ(�����խ)','3','template/default/bencandy.htm','','0');");
E_D("replace into `qb_template` values('24','��ҳ(�����խ)','1','template/default/index.htm','','0');");
E_D("replace into `qb_template` values('20','����ҳ(������)','3','template/default/bencandy_tpl_2.htm','','0');");
E_D("replace into `qb_template` values('21','����ҳ','9','template/default/alonepage.htm','','0');");
E_D("replace into `qb_template` values('25','ר��ģ��һ(ͷ���Ҫ�װ�)','11','template/special/showsp2.htm','','0');");
E_D("replace into `qb_template` values('26','ר��ģ���(ͷ���Ҫ�װ�)','11','template/special/special_sport.htm','','0');");
E_D("replace into `qb_template` values('27','ר��ģ����(ͷ���Ҫ�װ�)','11','template/special/special_car.htm','','0');");
E_D("replace into `qb_template` values('28','ר��ģ����(ͷ���Ҫ�װ�)','11','template/special/special_finance.htm','','0');");
E_D("replace into `qb_template` values('29','ר��ģ����(ͷ���Ҫ�װ�)','11','template/special/sp1.htm','','0');");

require("../../inc/footer.php");
?>