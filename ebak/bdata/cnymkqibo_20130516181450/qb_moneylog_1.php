<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_moneylog`;");
E_C("CREATE TABLE `qb_moneylog` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `money` mediumint(7) NOT NULL DEFAULT '0',
  `about` varchar(255) NOT NULL DEFAULT '',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `city_id` (`city_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=gbk");
E_D("replace into `qb_moneylog` values('1','1','2','��������ͨ����˽��� [<A HREF=''http://life.net/news/bencandy.php?fid=31&id=967'' target=_blank>fdafds</A>]','1347413033','0');");
E_D("replace into `qb_moneylog` values('2','1','-2','���±�ɾ���۷�:','1347413064','0');");
E_D("replace into `qb_moneylog` values('3','1','2','�����ƹ㽱��','1347595930','0');");
E_D("replace into `qb_moneylog` values('4','1','1','����Ա����','1347603508','0');");
E_D("replace into `qb_moneylog` values('5','1','-2','����Ա����','1347603516','0');");
E_D("replace into `qb_moneylog` values('6','1','2','����������Ϣ�÷�','1350979102','0');");
E_D("replace into `qb_moneylog` values('7','1','-2','ɾ��������Ϣ�۷�','1350979107','0');");
E_D("replace into `qb_moneylog` values('8','1','100','�ʻ�����ֵ����','1354069690','0');");
E_D("replace into `qb_moneylog` values('9','1','100','�ʻ�����ֵ����','1354069969','0');");
E_D("replace into `qb_moneylog` values('10','1','523','����Ա����','1354156253','0');");
E_D("replace into `qb_moneylog` values('11','1','1000','����Ա����','1354156445','1');");
E_D("replace into `qb_moneylog` values('12','1','100','���߳�ֵ','1355989513','1');");
E_D("replace into `qb_moneylog` values('13','1','100','���߳�ֵ','1355989797','1');");
E_D("replace into `qb_moneylog` values('14','1','100','���߳�ֵ','1356425523','1');");
E_D("replace into `qb_moneylog` values('15','1','-100','������ͨ���λ','1356502077','1');");
E_D("replace into `qb_moneylog` values('16','1','-300','������ͨ���λ','1357115438','1');");
E_D("replace into `qb_moneylog` values('17','1','-28','������ͨ���λ','1357116689','1');");
E_D("replace into `qb_moneylog` values('18','1','-8','������ͨ���λ','1357118417','1');");
E_D("replace into `qb_moneylog` values('19','1','-20','������ͨ���λ','1357118487','1');");
E_D("replace into `qb_moneylog` values('20','1','-20','������ͨ���λ','1357119037','1');");
E_D("replace into `qb_moneylog` values('21','1','-100','������ͨ���λ','1357119327','1');");
E_D("replace into `qb_moneylog` values('22','1','-8','������ͨ���λ','1357119469','1');");
E_D("replace into `qb_moneylog` values('23','1','-10','������ͨ���λ','1357183505','1');");
E_D("replace into `qb_moneylog` values('24','1','-20','������ͨ���λ','1357183589','1');");
E_D("replace into `qb_moneylog` values('25','1','-8','������ͨ���λ','1357190108','1');");
E_D("replace into `qb_moneylog` values('26','1','-2','������ͨ���λ','1363938873','1');");
E_D("replace into `qb_moneylog` values('27','1','-4','������ͨ���λ','1363938897','1');");
E_D("replace into `qb_moneylog` values('28','1','-6','������ͨ���λ','1363938929','1');");
E_D("replace into `qb_moneylog` values('29','1','2','��������ͨ����˽��� [<A HREF=''http://life.net/news/bencandy.php?fid=31&id=966'' target=_blank>fdsaf</A>]','1364280753','1');");
E_D("replace into `qb_moneylog` values('30','1','-2','���±�ɾ���۷�:','1364280757','1');");
E_D("replace into `qb_moneylog` values('31','1','2','����������Ϣ�÷�','1364280919','1');");
E_D("replace into `qb_moneylog` values('32','1','-2','ɾ��������Ϣ�۷�','1364281020','1');");

require("../../inc/footer.php");
?>