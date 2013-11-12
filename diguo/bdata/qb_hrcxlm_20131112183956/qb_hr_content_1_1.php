<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hr_content_1`;");
E_C("CREATE TABLE `qb_hr_content_1` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `nums` int(5) NOT NULL DEFAULT '0',
  `wageyear` tinyint(1) NOT NULL DEFAULT '0',
  `asksex` tinyint(1) NOT NULL DEFAULT '0',
  `schoo_age` tinyint(2) NOT NULL DEFAULT '0',
  `wage` tinyint(2) NOT NULL DEFAULT '0',
  `workplace` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `wageyear` (`wageyear`),
  KEY `schoo_age` (`schoo_age`),
  KEY `wage` (`wage`),
  KEY `asksex` (`asksex`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk");
E_D("replace into `qb_hr_content_1` values('2','50','4','1','�Կ����Ͳ���','8','1','1','5','1','����');");
E_D("replace into `qb_hr_content_1` values('3','51','4','1','��û��ѽ��','20','2','2','3','2','����');");
E_D("replace into `qb_hr_content_1` values('4','52','6','1','�й�Ӫũ��','8','1','1','5','-1','�Ϻ�');");
E_D("replace into `qb_hr_content_1` values('5','53','6','1','ds���ģ���ɵ�·','12','1','1','1','2','����');");
E_D("replace into `qb_hr_content_1` values('6','54','7','1','����ְ�� \r\n1����Ҫ�����ƶ���˾��Ŀ��˾��Ʒ�Ŀ�����ά���������ȹ����� \r\n\r\nְλҪ�� \r\n1.��ר����ѧ��;һ�����Ϲ�������,�����ҵ�����ر���; \r\n2.��Ϥ .Net��ϵ��ܣ���Ϥ.Net����������C#��̡�XML��JavaScript��AJAX�� \r\n3.��Ϥ.Net���ܹ���ʵ�֣���Ϥ.Net�ķֲ�ʽ��������ϤB/S�ṹ��XML WebServices�� \r\n4.��ϤSQL Server�����Ӧ�����ݿ���ƹ��ߣ�������ʵ��SQL�ű���д��������ϤSQL�����Ż��� \r\n5.��Ϥ.Net����ҵ��Ƚ����еĿ�ܣ��������ߣ��ؼ�������վ�� \r\n6.���õ����Ա����ͨ������Э�������� \r\n\r\nԱ�������� \r\n�ṩ���о������Ĺ��� \r\n�ṩ���ҹ涨�籣��ҽ����������ȴ��� \r\n�ṩ���ļ��ȿ��˽��������ս��� \r\n�ṩ���ڵļ�����ѵ���� \r\nÿ�궨�ھ������λ�������չ� \r\nΪÿ��Ա���趨����ְҵ�滮�����ṩ�������ĥ����','69','1','1','6','3','����');");
E_D("replace into `qb_hr_content_1` values('7','55','7','27','��ְҪ�󣺹㶫�ƶ�ҵ��֧��ϵͳ��������άְλҪ��\r\n1)�е���ҵ��Ĺ������飬�Ե���ҵ�����������˽⣬������ƶ�BOSS�������\r\n2)������ʹ��oracle���ݿ�\r\n3)��UNIX��Linux��ʹ�þ���\r\n4)�߱�����Ĺ�ͨЭ���������ŶӺ�������\r\n5����JAVA��C++����ؿ�������\r\n\r\n6������2�����ϵĹ�������\r\nְ��������\r\n1)������ҵ��ϵͳ����ĵ��С�������ҵ��ģ����Ƽ�ϵͳ��ά�ۺ����ʣ�\r\n1����ͨ���ã�������ǿ���нϺõ���ѧ����\r\n2���߱������Ŷ�Э�������ܹ���Ӧ������Ӱ�\r\n\r\n\r\n\r\n�ճ�����ʱ�䣺\r\n\r\n1�� �ϰ�ʱ��Ϊ��һ�����壺9:00--18:00��12:00��13:30Ϊ���ݣ�\r\n\r\n2�� ��˾���ڣ�˫���ռ������ڼ��� ��5���н���\r\n\r\n3�� ���Ƶ���ᱣ�գ����գ�����\r\n\r\n4�� �ṩ��Ŀ�������ս��𡢲ͷѲ���\r\n\r\n5�� ÿ��������һ����ĩ��Ϊ��˾�Ļ�գ���˾���ڵ�����֯���\r\n\r\n6�� ���⣬�ṩ��١����١�ɥ�ٵȼ��ڴ���\r\n\r\n��˾��ַ�����������������԰��ҵ԰����·60�ſ�Ѹ����468-488\r\n\r\n','3','2','2','6','3','�Ϻ�');");
E_D("replace into `qb_hr_content_1` values('8','56','8','28','1����1������J2EEӦ�������������飻\r\n2�����ڹ�ͨ�����Ŷ���ʶ�����θ�ǿ,�̿����ͣ�\r\n3��Э���������������Ŀ������ά�����Թ�˾��Ʒ���ж��ο����ͼ��ɣ�\r\n4��������Ŀ����ϸ��ơ������д����д����ĵ���\r\n�����¾��������ȿ���\r\n1����SSH�ܹ���struts2�ܹ�������Ŀ����������\r\n2������sql���� ����ϤSQL Server , MySQL , Oracle ����һ�����ݿ��Ʒ��\r\n3������Ŀ������ǰ̨Ӧ�ã�����JavaScript����ϤJQuery,ExtJs,GWT-Ext�ȹ��ܣ�\r\n4���������е��������PhotoShop,Dreamweaver,Firework;\r\n5������Ŀ����������ͳ�Ʒ�������ر����Ŀ����������Ա���ȣ�\r\n6����Ϥwapģ��������Ϥhttp��wapЭ�飬��Ϥwml��xml��html�淶��\r\n7��������������wap��վ�����ȿ��ǣ���j2me�������������ȿ���.\r\n���о������ĸ��� \r\n1����ᱣ�գ���˾�����Һ�ʡ���йع涨��ΪԱ��������ᱣ�ա� \r\n2������ʱ�䣺��˾ÿ�ܹ���5�죬ÿ�칤��8Сʱ�� \r\n3�������ͣ���˾Ա������������Ͳ�����\r\n','6','1','1','5','4','����');");
E_D("replace into `qb_hr_content_1` values('9','57','10','29','��λ����\r\n1�� ����˾ҽ���豸��Ʒ����Ȩ���򣨹㶫ʡ�������ۼ��ƹ㣻 \r\n2�� ���ݹ�˾�г�Ӫ���ƻ���Эͬ��ɲ�������ָʾ�� \r\n3�� ����Ͻ���г��������Ϣ���ռ����������ϱ��� \r\n\r\n\r\nְλҪ�� \r\n1����ٶ����������ֹۣ�ר�ƻ�����ѧ������Ů���ޣ�����35�����£� \r\n2�������õ�ҽ���г�������жϡ��߻���Ӧ����������ҽ����е���۾��������ȣ�Ӣ����Ϥ�����ȣ� \r\n3��רְ����������������������ģ����ڳ���ѹ����\r\n','6','1','2','1','-1','����');");
E_D("replace into `qb_hr_content_1` values('10','58','10','29','��λְ��\r\n1���ռ��ͻ���Ϣ��ͨ���绰��ϵ�����Űݷã���ͻ�������ϵ�� \r\n2���ھ�ͻ����󣬴�����ۣ���ɹ�˾ҵ��ָ��Ҫ��\r\n3����ͻ��������õĺ�����ϵ��\r\n\r\n\r\n��ְҪ��\r\n1����רѧ�����г�Ӫ������������רҵ�������������۹������飻\r\n2�����õĹ�ͨ����������̸�������������׺�����\r\n3�����������������������飬����һ�棬���п��ؾ���\r\n4���������õ��ŶӺ��������ܳ���ҵ��ѹ����\r\n5������ERP����ҵ�����������۹����������Ϥ��װ��ҵ����ױƷ��ҵ�����ȣ�\r\n6����˾�ṩ���ر����ȳ���ӭ��־��ʿ���˹�˾��ı��չ��','6','3','1','5','3','�Ϻ�');");

require("../../inc/footer.php");
?>