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
) ENGINE=MyISAM AUTO_INCREMENT=128 DEFAULT CHARSET=gbk");
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
E_D("replace into `qb_moneylog` values('33','1','10','������Ʒ��������','1364883026','1');");
E_D("replace into `qb_moneylog` values('34','1','-10','ɾ���̳���Ϣ�۷�','1364883045','1');");
E_D("replace into `qb_moneylog` values('35','1','1','���߳�ֵ','1365388793','1');");
E_D("replace into `qb_moneylog` values('36','1','2','����������Ϣ�÷�','1373857263','1');");
E_D("replace into `qb_moneylog` values('37','1','-2','��֤������Ϣ�۷�','1373857270','1');");
E_D("replace into `qb_moneylog` values('38','1','-700','������ͨ���λ','1374551778','1');");
E_D("replace into `qb_moneylog` values('39','1','600','������ͨ���λ','1374551793','1');");
E_D("replace into `qb_moneylog` values('40','1','-700','������ͨ���λ','1374551842','1');");
E_D("replace into `qb_moneylog` values('41','1','2','��������ͨ����˽��� [<A HREF=''http://life.net/news/bencandy.php?fid=31&id=967'' target=_blank>fdsafdsafds</A>]','1376445480','1');");
E_D("replace into `qb_moneylog` values('42','1','-2','���±�ɾ���۷�:','1376445598','1');");
E_D("replace into `qb_moneylog` values('43','38','5','ע��÷�','1380201604','1');");
E_D("replace into `qb_moneylog` values('44','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=49&id=966'' target=_blank>����ǧԪͶ��ƻ����Ʊ17�� ��..</A>]','1381145886','1');");
E_D("replace into `qb_moneylog` values('45','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=49&id=967'' target=_blank>�����������ʱ����硰����</A>]','1381145969','1');");
E_D("replace into `qb_moneylog` values('46','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=49&id=968'' target=_blank>Facebook������ۣ����˲���..</A>]','1381146016','1');");
E_D("replace into `qb_moneylog` values('47','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=51&id=969'' target=_blank>ʲô���̻�</A>]','1381146154','1');");
E_D("replace into `qb_moneylog` values('48','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=47&id=970'' target=_blank>������ջƽ�</A>]','1381146204','1');");
E_D("replace into `qb_moneylog` values('49','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=49&id=971'' target=_blank>��������׬����һͰ���</A>]','1381146247','1');");
E_D("replace into `qb_moneylog` values('50','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=49&id=972'' target=_blank>��γϳ��е���ʾ</A>]','1381146282','1');");
E_D("replace into `qb_moneylog` values('51','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=49&id=973'' target=_blank>�������˰</A>]','1381146321','1');");
E_D("replace into `qb_moneylog` values('52','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=50&id=974'' target=_blank>��̳����1</A>]','1381146355','1');");
E_D("replace into `qb_moneylog` values('53','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=50&id=975'' target=_blank>��̳����2</A>]','1381146367','1');");
E_D("replace into `qb_moneylog` values('54','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=50&id=976'' target=_blank>��̳����3</A>]','1381146372','1');");
E_D("replace into `qb_moneylog` values('55','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=50&id=977'' target=_blank>��̳����4</A>]','1381146377','1');");
E_D("replace into `qb_moneylog` values('56','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=50&id=978'' target=_blank>��̳����5</A>]','1381146382','1');");
E_D("replace into `qb_moneylog` values('57','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=50&id=979'' target=_blank>��̳����6</A>]','1381146387','1');");
E_D("replace into `qb_moneylog` values('58','39','5','ע��÷�','1381397187','250');");
E_D("replace into `qb_moneylog` values('59','1','-500','����ռ佱��','1381400303','250');");
E_D("replace into `qb_moneylog` values('60','1','-500','����ռ佱��','1381400312','250');");
E_D("replace into `qb_moneylog` values('61','1','10','������Ϣ����','1381402698','250');");
E_D("replace into `qb_moneylog` values('62','40','5','ע��÷�','1381403209','250');");
E_D("replace into `qb_moneylog` values('63','41','5','ע��÷�','1381451819','187');");
E_D("replace into `qb_moneylog` values('64','42','5','ע��÷�','1381452778','1');");
E_D("replace into `qb_moneylog` values('65','1','10','�ƹ�������û�ע�ά��,��uidΪ:42','1381452778','1');");
E_D("replace into `qb_moneylog` values('66','1','15','�ֻ�������˽���','1381455693','1');");
E_D("replace into `qb_moneylog` values('67','1','10','������Ϣ����','1381471283','250');");
E_D("replace into `qb_moneylog` values('68','1','10','������Ϣ����','1381491045','1');");
E_D("replace into `qb_moneylog` values('69','1','10','������Ϣ����','1381491105','1');");
E_D("replace into `qb_moneylog` values('70','1','10','������Ϣ����','1381492493','1');");
E_D("replace into `qb_moneylog` values('71','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=87&id=980'' target=_blank>�ⱦ�������޹�˾</A>]','1381495269','1');");
E_D("replace into `qb_moneylog` values('72','43','5','ע��÷�','1381510940','1');");
E_D("replace into `qb_moneylog` values('73','1','17748','����Ա����','1381669355','1');");
E_D("replace into `qb_moneylog` values('74','1','-5000','����ռ佱��','1381669403','1');");
E_D("replace into `qb_moneylog` values('75','1','2','����������Ϣ�÷�','1381826928','1');");
E_D("replace into `qb_moneylog` values('76','1','-3','�ö�������Ϣ�۷�','1381887597','1');");
E_D("replace into `qb_moneylog` values('77','1','-45','���������Ϣ�۷�','1381887597','1');");
E_D("replace into `qb_moneylog` values('78','1','2','����������Ϣ�÷�','1381907203','1');");
E_D("replace into `qb_moneylog` values('79','1','5','ע��÷�','1381914232','0');");
E_D("replace into `qb_moneylog` values('80','1','10','������Ϣ����','1381922610','346');");
E_D("replace into `qb_moneylog` values('81','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=39&id=981'' target=_blank>��������վ��������</A>]','1381922735','346');");
E_D("replace into `qb_moneylog` values('82','1','2','����������Ϣ�÷�','1381922779','346');");
E_D("replace into `qb_moneylog` values('83','1','-2','ɾ��������Ϣ�۷�','1381922819','672');");
E_D("replace into `qb_moneylog` values('84','1','-2','ɾ��������Ϣ�۷�','1381922823','672');");
E_D("replace into `qb_moneylog` values('85','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=39&id=982'' target=_blank>���ϼ��ϼ���</A>]','1382242518','1');");
E_D("replace into `qb_moneylog` values('86','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=143&id=983'' target=_blank>���û�ע��</A>]','1382270123','1');");
E_D("replace into `qb_moneylog` values('87','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=143&id=984'' target=_blank>�û�ָ��</A>]','1382270134','1');");
E_D("replace into `qb_moneylog` values('88','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=143&id=985'' target=_blank>��������</A>]','1382270142','1');");
E_D("replace into `qb_moneylog` values('89','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=144&id=986'' target=_blank>���˼��</A>]','1382270213','1');");
E_D("replace into `qb_moneylog` values('90','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=144&id=987'' target=_blank>���˷���</A>]','1382270220','1');");
E_D("replace into `qb_moneylog` values('91','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=144&id=988'' target=_blank>���˱���</A>]','1382270230','1');");
E_D("replace into `qb_moneylog` values('92','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=144&id=989'' target=_blank>����ָ���ѯ</A>]','1382270237','1');");
E_D("replace into `qb_moneylog` values('93','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=145&id=990'' target=_blank>��Ա�ȼ�</A>]','1382270250','1');");
E_D("replace into `qb_moneylog` values('94','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=145&id=991'' target=_blank>��Ա�ƶ�</A>]','1382270260','1');");
E_D("replace into `qb_moneylog` values('95','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=145&id=992'' target=_blank>��Ա����</A>]','1382270267','1');");
E_D("replace into `qb_moneylog` values('96','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=145&id=993'' target=_blank>��Ա��ѯ</A>]','1382270275','1');");
E_D("replace into `qb_moneylog` values('97','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=146&id=994'' target=_blank>�ͷ�ƽ̨</A>]','1382270289','1');");
E_D("replace into `qb_moneylog` values('98','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=146&id=995'' target=_blank>��Ʒ����</A>]','1382270295','1');");
E_D("replace into `qb_moneylog` values('99','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=146&id=996'' target=_blank>��������</A>]','1382270303','1');");
E_D("replace into `qb_moneylog` values('100','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=146&id=997'' target=_blank>��д��Դ�ʾ�</A>]','1382270310','1');");
E_D("replace into `qb_moneylog` values('101','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=147&id=998'' target=_blank>������Դ</A>]','1382270325','1');");
E_D("replace into `qb_moneylog` values('102','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=147&id=999'' target=_blank>��������</A>]','1382270333','1');");
E_D("replace into `qb_moneylog` values('103','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=147&id=1000'' target=_blank>��Ϊ�ϻ���</A>]','1382270340','1');");
E_D("replace into `qb_moneylog` values('104','1','2','��������ͨ����˽��� [<A HREF=''http://www3.ddecshop.com/news/bencandy.php?fid=147&id=1001'' target=_blank>��������</A>]','1382270347','1');");
E_D("replace into `qb_moneylog` values('105','46','5','ע��÷�','1382318162','339');");
E_D("replace into `qb_moneylog` values('106','1','10','������Ϣ����','1382364399','1');");
E_D("replace into `qb_moneylog` values('107','1','10','������Ϣ����','1382371696','1');");
E_D("replace into `qb_moneylog` values('108','1','10','������Ϣ����','1382375946','1');");
E_D("replace into `qb_moneylog` values('109','1','10','������Ϣ����','1382408666','1');");
E_D("replace into `qb_moneylog` values('110','1','10','������Ϣ����','1382457940','1');");
E_D("replace into `qb_moneylog` values('111','1','10','������Ϣ����','1382459380','1');");
E_D("replace into `qb_moneylog` values('112','1','10','������Ϣ����','1382459482','1');");
E_D("replace into `qb_moneylog` values('113','1','10','������Ϣ����','1384268433','1');");
E_D("replace into `qb_moneylog` values('114','1','10','������Ϣ����','1384268441','1');");
E_D("replace into `qb_moneylog` values('115','1','10','������Ϣ����','1384268448','1');");
E_D("replace into `qb_moneylog` values('116','1','10','������Ϣ����','1384268456','1');");
E_D("replace into `qb_moneylog` values('117','1','10','������Ϣ����','1384268488','1');");
E_D("replace into `qb_moneylog` values('118','1','10','������Ϣ����','1384268500','1');");
E_D("replace into `qb_moneylog` values('119','1','10','������Ϣ����','1384269367','1');");
E_D("replace into `qb_moneylog` values('120','1','10','������Ϣ����','1384269375','1');");
E_D("replace into `qb_moneylog` values('121','1','10','������Ϣ����','1384269382','1');");
E_D("replace into `qb_moneylog` values('122','1','10','������Ϣ����','1384269388','1');");
E_D("replace into `qb_moneylog` values('123','1','10','������Ϣ����','1384269395','1');");
E_D("replace into `qb_moneylog` values('124','1','10','������Ϣ����','1384269402','1');");
E_D("replace into `qb_moneylog` values('125','1','10','������Ϣ����','1384269411','1');");
E_D("replace into `qb_moneylog` values('126','1','10','������Ϣ����','1384269418','1');");
E_D("replace into `qb_moneylog` values('127','1','10','������Ϣ����','1384269458','1');");

require("../../inc/footer.php");
?>