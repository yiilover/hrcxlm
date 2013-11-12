<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_house_content_5`;");
E_C("CREATE TABLE `qb_house_content_5` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `seller` varchar(100) NOT NULL DEFAULT '',
  `address` varchar(150) NOT NULL DEFAULT '',
  `star_sell` varchar(20) NOT NULL DEFAULT '',
  `price` int(5) NOT NULL DEFAULT '0',
  `bus` varchar(250) NOT NULL DEFAULT '',
  `out_peitao` mediumtext NOT NULL,
  `in_peitao` mediumtext NOT NULL,
  `videourl` varchar(100) NOT NULL DEFAULT '',
  `house_num` varchar(30) NOT NULL DEFAULT '',
  `total_area` varchar(10) NOT NULL DEFAULT '',
  `room_area` varchar(10) NOT NULL DEFAULT '',
  `roomtype` varchar(50) NOT NULL DEFAULT '',
  `fitment` varchar(30) NOT NULL DEFAULT '',
  `my_134` varchar(100) NOT NULL DEFAULT '',
  `my_523` varchar(4) NOT NULL DEFAULT '',
  `my_755` varchar(20) NOT NULL DEFAULT '',
  `my_898` varchar(20) NOT NULL DEFAULT '',
  `my_208` varchar(40) NOT NULL DEFAULT '',
  `sell_address` varchar(100) NOT NULL DEFAULT '',
  `zone_area` varchar(30) NOT NULL DEFAULT '',
  `my_432` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `zone_area` (`zone_area`),
  KEY `my_432` (`my_432`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=gbk");
E_D("replace into `qb_house_content_5` values('2','8','5','1','&nbsp; ���������ɳ��Ŀλ����ɳ����˴�����࣬����ɳ�����������ڣ�ռ��13.5��ƽ���ף��������Լ27��ƽ���ף��ɹ�������Ʒ��ز����޹�˾������<br />\r\n<br />\r\n�����˵ؿ�����2008��12��2���Ե׼�2.64��Ԫ��������ɳ����Ͷ�����޹�˾&ldquo;����&rdquo;���ۺ�¥��ؼ�980Ԫ/ƽ���ס��¸�9�£������3.01��Ԫ�������Ŀ��95%Ȩ�棬�ۺ�¥��ؼ�1173Ԫ/ƽ���ף����ԭ����¥��ؼ���˵����۽�20%������8��28�ձ̹�԰���ĵ���ɳ09N JY -2�ؿ�1506Ԫ/ƽ���׵�¥��ؼۣ���Ȼ�Եñ��ˡ����⣬������ɳĿǰ5143Ԫ/ƽ���׵�¥�ۺ���ɳ����ǰ�������������Ǻܴ��','�����ٺ����ز����޹�˾','��ɳ����˴������','2011-04-02','8000','��ɳ1��2��3��4��5��6��ͣ����վ','ѧУ�� ������·��һСѧ ʯ����׶�԰ �����е���ʮ����ѧ ����ũҵ����ѧԺ ���ݳ���ְҵѧԺ \r\n��� OK������ 7-11������ ϲ�¶������ �����������ۺ��г� ��ݳ��� ��������ʳ����8�������� \r\n���У� ��Ԫ˧�� ����ɽ��Ԫ˧������� ','ʳ���� ���ϳǷ�ζ�Ƽ� \r\n���������� ���ݺ����� \r\n','','','269520','134760','��','��װ','�����ҵ������˾','2',' 30%','545','400-888-2200 ת 16085','��ɳ����˴������','������','����');");
E_D("replace into `qb_house_content_5` values('3','9','5','1','&nbsp; �������ۻ�԰λ�ڻ������ĳ��е�г��Զ����ĺ��Ƽ���������Ŀ��A��B�������ţ�����A��217�׵�λ������80&mdash;90�O�ĵ�λ��ͬʱ����40��60��110�O��λ��','�����ж��󷿵ز��������޹�˾','���������Ҷ�·�����·�Ա��ĳ���Ĵ�·����','2011-04-01','13500','�ĳ��ίվ��;����·����433·��506·517·��566·��569·��570·��883·��ҹ46·','ѧУ�������л������ĳ��׶�԰�������л������ĳ�Сѧ \r\n���У�ũ�����ú����� \r\n��ʳ���ĺ��Ƽ� \r\n������7-11�����ꡢ�����л������ĳ�ֵ����´�','���У�ũ�����ú����� \r\n��ʳ���ĺ��Ƽ�','','5��','72800','23470','��','��װ','�㶫������ҵ������˾','1.5','33.4%','545','400-888-2200 ת 13687','���������Ҷ�·�����·�Ա��ĳ���Ĵ�·������','������','����');");
E_D("replace into `qb_house_content_5` values('4','10','5','1','��˳�λ�������������������򣬽��ڹ�����١���԰����·����ݸ��١�107��������ͨ��ݣ����������������������30���ӳ��̣�������ͨ����ÿ�췢��300���Σ�ǿ����������ȫ�渲����������Ҫ���У���Ѹ�ݵ����ܱ���Ҫ��ͨ��Ŧ��\r\n\r\n�����ԡ�ɭ�֡��������³��С� ��λ�ķ�˳ǣ������˹��ݶ���ɽˮ�³��˾���ģʽ��Ļ���ڿ��������У���˳�һֱ�᳹�����Կ�����ԭ�������ڲ��ı�ԭ�д���Ȼ��̬������¶�������Դ�������������ã�Ӫ���һ�ֽ�������Ȼ�϶�Ϊһ��������Ȼ��Ȥ���׺����������Χ��\r\n\r\n�����ڿ�����Ȼ������ͬʱ����˳Ǽ�֡���������,һ�γ��͡�������������ɳ�Ӳ����������������������Ե�ʵ�������������߾������ġ����м����ס�ģʽ��\r\n\r\n����2002�꣬��˳Ǵ��ͽ�ͨ���ġ��������ġ���ҵ���ġ����ͳ��еȱ���Ͷ��ʹ�ã�2003�꣬��ʡһ����׼�ķ�˳���Ӣ��ѧУ��ʽ��ѧ���԰׽����Ǽ���׼����,�����񡢶ȼ���һ��ķ�˳ǾƵ���ҵ��2004���˳Ǵ�����ҵ���ס���������ҵ�㳡������2005�꣬λ�ڷ�˳���ڴ��Ĺ������ֵ�һ��������֦�Ļ���¡����ҵ��2006���˳��ۼƻ�ð������Ϲ�ȫ���˾ӻ����Ҹ��������½����й����Ժ��ѡ���й��ټҾ���¥�̡�ʮ������¥�̼���г�˾���������԰�֡���Ѿ�ס¥�̵����ڵ�����󽱣�2007�꣬���������г��ķ�ܰԷ��ԢС�������ǳ�������������ʱ���ﾢ��3000�ס�����˵�����ſ������ȵ��ƽ�����˳ǵ�������Ѿ�Խ��Խ����Խ��Խ���ʺͷ��㣬һ���ͷ׳����ɽˮ�³��Ѿ������ڶ����ݡ�\r\n\r\n����������ܰԷ���ڣ���˳����ѹ滮���ɸ�����ɫ��13������Է������������������������������������������������������Լ�רΪ�⼮��ʿ��������ķ�˵�������������������ҵ���ڴ˰�����ҵ�����Ǽ��ķ�˳ǣ��������ݴ��;�ס��������ʱ���� ','�̹�԰��ҵ��չ���޹�˾','�����й�԰������·����԰·����������������ڣ�','2011-04-01','9000','��ѿ�¥���˳��㣺��ڼ��պ�ǹ㳡���ţ�����˳�','���У��й����С��������С�ũҵ���С���������\r\n���У���˳ǳ��С���֮������\r\nѧУ����˳ǹ�����Ӣ��ѧУ\r\n�г�����˳������г�����˳ǳ��С������ꡢ��˳Ƕ�����ҵ�֡��ž�¡�����̳�\r\n���֣�������ʳһ���֡���֦�Ļ���\r\n','ҽԺ���ڽ���˳�ҽԺ����������ҽԺ\r\n�ʾ�:��˳������� ','','25','1332��','666��','��','��װ','���Ǳ̹�԰��ҵ�������޹�˾','2','75%','325','400-888-2200 ת 13387','�����й�԰������·����԰·����������������ڣ�','������','����');");
E_D("replace into `qb_house_content_5` values('5','11','5','1','&nbsp; ������绨԰2����������λ�ڹ����������ɽ���������160�ף�С���͵�λ�����49-78ƽ�ף����Լ۱ȡ��������ɵ��ı�����ͨ����ɽ��������Աߣ���԰���ٸ��߾��ڸ�������ͨ�˴��Ŀ9�㣬�����ݡ�<br />\r\n<br />\r\n����BRT�����ſ���ɽ���,�����Ĺ��ݰ�Сʱ����Ȧ��������Ƶ����ף�������������׾٣��ش������ɽ��������򣬷���������С��������̺ͳ��У����������<br />\r\n<br />\r\n����ȫ�������������������Ϊ��һԭ��,���ô󿪼䡢�̽�������Ҫ�㣬���ҳ��ȷ��ϻƽ���ɡ�<br />\r\n<br />\r\n��������������Ϸ������幤ѧ,��ֿ��Ǹ����ܷ�������ĺ����Լ�ʹ�÷�����,Ϊҵ���������ʵ��Ⱦ�ס���������� ','����������Ͷ�����޹�˾','��������ɽ�����189����绨԰2����������Ӫ������','2011-04-09','13000','BRT��Ϫվ��é��վ��B1��B5��B5�졢B15��B16��B17��B20��B24��B26��B27��B28 3��������Ϫվ��é��վ���鼪·��վ','���У�ũҵ���л�����֧�����ڰ��´���ũ������֧�С�����ũ�������������磬��������ҵ���У�зɽ��·��\r\n���У���˳�����̳����꣨���ݣ���ΰҵ�ٻ�����������\r\nѧУ��é��Сѧ�������еڰ�ʮ����ѧ�����ݸ��׶�԰�����������Ӣ��ѧУ��ǰ���׶�԰��ǰ��Сѧ\r\nҽԺ������ҽ�����ﲿ�����ͬ��ҽ�����ﲿ����̩ҽ�ƽ����������ﲿ�����ݣ����㼪��ҽ�����ﲿ���㶫ȫ��ͨ������ҽ�����ﲿ���� ������ҽԺ&#8206;����������ҽԺ&#8206;\r\n��ͨ��BRT��Ϫ��é��վ��������Ϫվ��é��վ���鼪·��վ����������վ\r\n������������������ɽ������ʾ֣�é�ڼ���վ�������������֣��������ֳǣ�����������ɳ���̴������� ','��ʳ���۾��Ƶ꣬���Ƴ���¥&#8206;���ϸں��ʸ۷ֵ�&#8206;\r\n','http://player.youku.com/player.php/sid/XMTU0MjA4NTEy/v.swf','23','24408','24408','��','��װ','�������ڷ���ҵ�������޹�˾','1.38','30%','434','400-888-2200 ת 13718','��������ɽ�����189����绨԰2����������Ӫ������','������','����');");
E_D("replace into `qb_house_content_5` values('6','12','5','1','&nbsp; �� 1�����ж�´���ϵ�����լ��<br />\r\n<br />\r\n����2����סլ����С����ȫ�������ܱ�����<br />\r\n<br />\r\n����3������˫�����������ƣ�������������ӵ���������ĺ� ��԰��','�����лԻͷ��ز���չ���޹�˾','Խ����´Է·39��','2011-04-07','23000','ʡ�ڶ���ҽԺվ��;����·����109·��110·��111·��184·��245·��297·��546·��547·��706·(ԭ523A·)��883·','С���ڲ���2500�Oƽ̨��԰��3��๦�ܻ��� \r\nѧУ�����ݴ�ѧ�����ݴ�ѧ�Ƽ��ɲ�ѧԺ���㶫�㲥���Ӵ�ѧ��������ְ����ѧ�������н����ܹ�˾ְ����ѧ�������гǽ�ְ����ѧ�������еڶ�ʮһ��ѧ��������ִ����ѧ������Сѧ����ɽ����������·Сѧ��Э��Сѧ������·Сѧ���й滮���׶�԰���齭ʵҵ��˾�׶�԰����˿�׶�԰ \r\nҽԺ���������ۿ�ҽԺ�������ж�ɽ�����˿�ҽԺ���㶫ʡ��ͨҽԺ�����ݹ�������������ġ�����ҽԺ���ַ�Ժ���Խ𱱣����㶫ʡ�ڶ���ҽԺ���Խ�·�����㶫ʡ����ҽԺ���Խ����ҽԺ \r\n���У��й����С��й��������С��й��������С���������ҵ���С��������С��������С���չ���� \r\n��ʳ������ɽ̨���������ǰͿˡ���Ҷ��������������ع㳡�����������̵ꡢ��������ó�����ġ����ֶ��Խ�ֵꡢԽ���������������ֵֽ����´��������ɳ�������԰�Ƶꡢ���Ʊ��ݡ��㶫���ʴ�Ƶꡢ���޹��ʴ�Ƶꡢ�й������Խ�·Ӫҵ�����й��ƶ��Խ�·Ӫҵ�� \r\n','�Ƽҡ��޼õ��������� \r\n���֣�´����԰��Ǯ��KTV�����ַ籩KTV����̩������� \r\n','http://player.youku.com/player.php/sid/XMTU0MjA4NTEy/v.swf','4','7.20��','1.02��','��','��װ','���ݸ���������ҵ�������޹�˾','2.5','82.50%','545','020-83578888','Խ����´Է·39��','������','����');");
E_D("replace into `qb_house_content_5` values('7','13','5','1','&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; �������ޣ�20000ƽ�����̻����<br />\r\n<br />\r\n�������л�������Ǻ�������������ƥ��԰��Ӿ��<br />\r\n<br />\r\n�����������ģ���ӡ����ж������綫������Ȧ���㴦���������ɵ�����<br />\r\n<br />\r\n��������֮ѡ��һ��������ȫ����ס����������������7168Ԫ/ƽ������<br />\r\n<br />\r\n��������㳡סլ������滮���ǰ˶��ʰ����ηֲ��ĸ߲㣬�������������Ÿ�Ϊ����34��߲㣬�����һ��סլ����������·�����ڹ���413�׻�����һ����62�ף�������139�ף�������186�ף��巿��ʽ��10�ס�<br />\r\n<br />\r\n�������ڲ�Ʒ�����߻���һ����������С������Ҫ�ڱ��ߣ���������·����չ������װ��������������������������ͣ���ƽ��ͼ���������л��Ͷ��Ƿ����ġ�<br />\r\n<br />\r\n����ʡһ��ѧУ���綫·Сѧ����ʽ�仧����㳡��Ŀǰ���ڶ��������綫·Сѧ��У��λ�ڶ���㳡С���ڵ����ں͵�����֮�䣬���ڻ��ж�·��ѧУ����2006��5�µ׽��ɲ��ƽ��������֣�2006��9�·ݿ�ʼ���������ɺ󣬽�ѧ��¥������Ϊ&ldquo;�ְ�������¥&rdquo;�Լ����ѹ�������¼��Ŷ��¾���ϯ�ְ����� ','�������˷��ز��������޹�˾','��ɽ���綫·787�ţ�÷��·�ڣ�','2011-04-09','13000','��·������','������Ӿ�أ�ѧУ�� ���綫·Сѧ','������Ӿ��','http://player.youku.com/player.php/sid/XMTU0MjA4NTEy/v.swf','43','54354354','5435433','��','��װ','���˷��ز��������޹�˾','2','25%','43','020-5435435','��ɽ���綫·787�ţ�÷��·��','������','����');");
E_D("replace into `qb_house_content_5` values('8','14','5','1','&nbsp;&nbsp;&nbsp; �Ϲ�����ƥ�˻�԰λ�ڹ��ݻ��ϰ��,�ϰ�ռ��1000Ķ���ܽ������75��ƽ���ף�ռ�����67��ƽ����,����ɼ�����˴塢�������������˴塢�ŵ���˴塢Ϥ����˴塢�������˴�������Ź��ɡ�<br />\r\n<br />\r\n�����ϰ��Գɹ������������Ż����٣�����������������������ʮ��¥�̣��й���һ���̣��й����ز�Ʒ����ҵ��ȫ�����ƽ���������ȫ�������˶�����������<br />\r\n<br />\r\n�ϰ¾���������ߺ�Ϫվ���ڽ�350�ף�׼���ʿ����������������������룻��ʦ��ʵ��ѧУ���׶�԰�����˽����������͡������д����ۺϳ��С��߶���Ƶ꣬�Ǽ��������ף����ҡ���Ӿ��������ë�򡢽�������ʩ��ȫ���๦���˶������������λ�����<br />\r\n<br />\r\n������Ķ����&ldquo;�������&rdquo;���ܻ���Լ4���׹�4���ƽ���ף������Ϲ���԰�����һ�ڶ���󷿣����ͽ���110ƽ�������ҵ�������Ϊ����<br />\r\n<br />\r\n�ڶ���С�߲��������Ʒ��&ldquo;�������&rdquo;����С�߲�͸߲�Ĺ��ɲ�Ʒ��<br />\r\n<br />\r\n�Ϲ���԰��ߵ��εĺ�լ��Ʒ&mdash;&mdash;&mdash;�߶����򳡱ߵ�Ϥ���������ţ��ܻ���Ҳ����4���ƽ���ף������Դ�Ϊ�����߶����򳡱ߵ�С�߲㡢�߲���λ���Ϲ���԰��������ضΣ����ϰµİ�Ķ���ø߶���������һ�壬��̬���۾��ѡ���ΪϤ������ȫ�����ţ����ڲ�Ʒ��ȫ��&ldquo;��լ&rdquo;��׼�����죬���͡�װ�޵ȸ����涼����ȫ�洴�£�Ʒ��Ҳ����ͬ������߱�׼�������Ͻ��и�������Ķ��׷���Ʒ��<br />\r\n','���ݷ�خ����ƥ�˷��ز��������޹�˾','���ݷ�خ��Ϫ���','2011-04-07','18000','���뺺Ϫ��¡����վ����Լ10��������','�Ϲ���԰С�������ף���¡�������硢��¡���ζɼ�������¡�߶�����ϰ���ġ���خ��ӳǹ㳡���ֶ���ɽķ�ꡢ���ݹ��ʼҾӲ������ĵȡ�','�Ϲ���԰С�������ף�������ҽ��������ǳ��С������ꡢ�׶�԰����ʦ�����ϰ�ʵ��ѧУ���¶��Ƶꡢ���ø߶����򳡡���¡��¥��С��������ҵ�ֵ�','http://player.youku.com/player.php/sid/XMTU0MjA4NTEy/v.swf','43','45354','5435','��','��װ','�й���԰�ز����Źɷ����޹�˾','3','18%','434','400-888-2200 ת 12197','���ݷ�خ��Ϫ���','������','����');");
E_D("replace into `qb_house_content_5` values('9','15','5','1','&nbsp; �������㻪ͥλ���������ɽ·���������·���㴦��������Ŀ���������ϣ�����������·�������ٹ�԰·����������ɽ·����������ӱ���԰����С������Ŀ��ռ�������25925�O���ܽ������11���O���ܹ������ڿ�����һ���Ѿ���ס������ȫ�¿������ڣ�����3��С�߲�סլ��1��32�㹫Ԣ��1��29��д��¥��Ŀǰ����3��10��С�߲�סլ���ײ�Ϊ���̣�2-10��Ϊסլ����54�����������130-177�O��һ���������뻧��԰���ϱ�������ͨ��ɹ�һ����С���з�չ�̾��Ĵ������������ˮ��԰�֣�Ϊҵ���ṩһ�����С������������Χ��������Ӿ�غͻ���������ӱ�һ��·�ξ��޽��еĴ���԰��С����<br />\r\n<br />\r\n������Ŀ����λ����Խ��������ʮ����������������������ʦվE���ھ�����Ŀ�Աߣ���ֻ�貽�м����Ӽ��ɵ����ͨʮ�ֿ�ݷ��㣻�ܱ߸��л�������ũ����ʦ�ȸ�У��ӵ��ѧ����ϢŨ�񣬾ۺ�������������һ�������ķ�ˮ���أ���ʵ�������һ����ӱ� ������ ѧ����լ�� ','������Ӣǿ���ز����޹�˾','���������·113��(������ʦվE����)','2011-04-09','23000','������6��20��22��41��78��130��135��191��ʮ��·��','С���ڲ����ף�ˮ��԰��,Ӿ��,�ܿջ���,1450ƽ�����Ļ��㳡\r\n��Сѧ��������113��ѧ,������������Сѧ\r\n�׶�԰����̫���׶�԰\r\n�ۺ��̳������,�ټ�\r\n�ʾ֣�����·�ʾ�\r\n�������ֺ�Է����г� ','���У�����,����,��ͨ����,�������,���\r\nҽԺ�����ݲ���ҽԺ,��ɽ��ѧ������������ҽԺ\r\n','http://player.youku.com/player.php/sid/XMTU0MjA4NTEy/v.swf','43','435435','543543','��','��װ','����������ҵ�������޹�˾','2.3','60%','534','400-888-2200 ת 13630','���������·113��(������ʦվE����)','������','����');");
E_D("replace into `qb_house_content_5` values('10','16','5','1','&nbsp;�����ݲ�������λ���齭���Žţ���ռ�������37��ƽ���ף��ܽ��������120��ƽ���ף��������ڷ�չ����Ŀǰ�������Ĺ�ģ����&ldquo;��ϯ����&rdquo;���������꿪�����裬�Թ��ʼ�����Ʒ�ʣ���10��ƽ�׹��ʷ���԰�֣��߸���ȫ����У������ϵ�����Ƴ���ĸ�������������ϵ��Ϊ������Ĵ��;�ס������<br />\r\n<br />\r\n������Ŀ����ɽ��·��һ��֮�����ǵ�������ߵ��ϸ���ҵ�����������;�����ж���Ȧ���齭�³���Ȧ������Ϊ��������߼�ֵ�ĵ�����·������ȫ������5��ת��վ����ͨʮ�ֱ�������Ŀռ��37��ƽ���ף��ܽ��������120ƽ���ף���Ŀǰ�������������졢������ʩ���걸��԰����������Ŀ��3���ؿ���п������ֱ�ָ��3���ؿ飩�������ٽ��ؿ顢���������Ļ����г��ؿ顢������죬�Ѿ���2500�໧��ס�������վ������ݲ�С����<br />\r\n<br />\r\n�����ݲ���������������&ldquo;������&rdquo;�����<br />\r\n<br />\r\n������滮��120��ƽ���׳����ģ�����ף�����¥�ࡢ���ݻ��ʡ����̻��ʡ���Ȼͨ��ɹ⡢���ڿ���ѭ���ȡ�<br />\r\n<br />\r\n������ػ�����������������Ի�������������Ƹ������˫��ɹ⣬�ϱ�������������������ƣ���֤����˽���ԡ�<br />\r\n<br />\r\n�������̻�����10000ƽ���׵�����ˮ��԰�֣���������Ȼ��������ֵ�ֲ�ﻨ���ںϻ�ˮ���ﵽ������ϡ��̻��ʸߴ�35.5%��<br />\r\n<br />\r\n���������ģ���λһ��Ľ�����ϵ�����ݲ��׶�԰�������Ӣ��Сѧ����ʦ����������ѧУ��������ۣ���У��������ɼ��ᣬ�γɺ��ӳɳ����ǵĽ�����ϵ��<br />\r\n<br />\r\n���������ף����Ǽ�����&ldquo;�ݲʻ���&rdquo;������2800ƽ���׵ĸ������У�������VIP����ҡ���������������԰��Ӿ�ء�ˮ����Ħ�ء������ҡ�ɣ���ҡ�ƹ�����ҡ������ҡ��赸�ҵȡ�<br />\r\n<br />\r\n������ǰ���������ĵ����ϸ���ҵ������5���߹ᴩ���ж�������ֱ���������������ڻ�·���칤�̼����깤������ʽ��ͨ���磬��������˷����齭�����ؿ������깤�����ȫ��ͨ����<br />\r\n<br />\r\n','����������ز���չ���޹�˾','�����������������ģ���������������236�ţ�','2011-04-16','23000','������222��19��124��206��34��233��236��206��61·������','�������ף��ݲ���Ӣ���׶�԰�������Ӣ��Сѧ��ʡһ��������ʦ����������ѧУ���ص���ѧ�������ѧ��ʡһ�������ص��ѧ�����ϴ�ѧ������ʦ����ѧ������������ѧ�ȸ�У����\r\n��ҵ���ף�������ҵ��8000��ƽ���׵���ҵ���������ֶࡢ���ָ�����Ǳ�����\r\n��ͨ���ף��ܱ���30��������������·���������ڽѿڿ���վ����ɽ��·���������������·�ڣ��齭�������ڻ�����ڡ��������м�ֵ�ĵ�������ߣ������������Ž�С���͵�����̨����','Ӿ�ء������ҡ������ҡ����ܾ���ƹ���򳡡�ɣ��ԡ�ҡ���������ͯ��԰����ɫ�Թ������Ͼ��㳡���ദ��ˮ��԰�ֵ�\r\n','','23','1200000','580000','��','��װ','���ݽ�����ҵ�������޹�˾','2','35.50��','677','400-888-2200','�����������������ģ���������������236�ţ�','������','����');");
E_D("replace into `qb_house_content_5` values('11','17','5','1','&nbsp;�����������˳��ܽ��������147.8��ƽ���ף����й���ס�������110����ƽ���ס���&ldquo;�����&rdquo;һ������96��סլ¥����8078�׵�λ�����ͷǳ��ḻ����70ƽ���׵�180ƽ���׵ȶ��ֻ��ͣ����������������ǵĶ��ֹ������󡣾ݹ������ص���Ŀ���йظ����˽��ܣ����˳�&ldquo;�����&rdquo;���ֱ�����С���С����ͣ��佨��װ�޷��������ֱ�����ִ����ŵ䡢�������Ȳ�ͬ���<br />\r\n<br />\r\n<br />\r\n<br />\r\n�������˳Ǳ���Ͷ���ֱ�������ɽ�羰����С����ɽ����Ÿ����̬���������齭�뺣�ڣ���Ŀ��ˮ���ܲ�����ˮ�峺���������ˣ��̻��ʸߴ�54�����ǹ����̻�����ߵ����������⻷�����&rdquo;��ɽ��ˮ&ldquo;��Ӱ����̬�������ˡ�<br />\r\n<br />\r\n<br />\r\n<br />\r\n����1�����˳ǵ�̼��ɫ��<br />\r\n<br />\r\n����2���ۺϹܹ�<br />\r\n<br />\r\n����3����������ռ�ϵͳ<br />\r\n<br />\r\n����4�����ʹ�ˮ����ˮ�ۺ�����<br />\r\n<br />\r\n����5������Դ��̫���ܼ�ˮԴ�ȱ�<br />\r\n<br />\r\n����6����������<br />\r\n<br />\r\n����7�����ֻ����������ܼҾ�<br />\r\n<br />\r\n����8����ά������ʵ����ϵͳ<br />\r\n<br />\r\n����9����ɫ��ͨ<br />\r\n<br />\r\n����10�����Ļ���Ӫ�죭����ˮ�� ','�������Ϸ��ز��������޹�˾','�������ݡ���԰�Ƶꡢ�ƶ����þƵꡢ�������ġ�����ӯ�Ŵ��á����ƻ���','2011-04-01','10000','����4���ߺ���վ','ѧУ���㶫����ѧԺ \r\n�̳�:һ��ƽ�۰ٻ� \r\nҽԺ��ʯ¥����ҽԺ������ҽԺ������ҽѧԺ���ĸ���ҽԺ \r\n���У��й��������з�خ����ɽ���´�������������ɽ���������� \r\n��ʳ������˹������(ʯ¥��滮��������칫�Ҷ�)�������͵� \r\n���֣�����ɽ ����Ÿ��\r\n����������վ(���ֺ���¥��) ','ס�޷������ġ������������ġ��������ġ�����֧�����ġ������������ۺ������ݡ���ý�����ġ�������\r\n','http://player.youku.com/player.php/sid/XMTU0MjA4NTEy/v.swf','32','5432423','545444','��','��װ','���Ϸ��ز��������޹�˾','3','25%','434','020-675756765','��خ�� ʯ¥����Ӷ�·���ϵض�','������','����');");
E_D("replace into `qb_house_content_5` values('12','18','5','1','&nbsp; ��������Ŀ������·�����ؿ���ɣ���ռ�������26��ƽ���ף����������65��ƽ���ף���һ����סլ���̳���д��¥��һ��Ĵ����ۺ�����Ŀ��<br />\r\n<br />\r\n�������ߵؿ鹲��11��סլ¥����Թ滮�е�����԰��Ϊ�磬������6�����ϲ���5�����ֳ�����ʩ���ģ����Ǳ����6��¥�11��¥���32��ߣ������&ldquo;C&rdquo;�β��֣������ǳ���3��ƽ���׵�԰�֡�<br />\r\n<br />\r\n����Ԥ��2009��������ȿ��̡�<br />\r\n','Խ��ǽ��ز�','����·�ж�','2011-04-16','23000','20�๫��·�߽����ſڣ��� 17 ��62��71��80��134��175��176��179��196��212��215��225��228��238��241��524��543��545��832��ҹ2��ҹ15��ҹ21·��','1����ҵ��������ҵ�ؿ��30��ƽ������ó�Ǽ���Ԣ��д��¥�������ܱ��������ơ����С���¥�����ͳ��С��������������ȫ��\r\n2����ͨ��20�๫��·�߽����ſڣ��� 17 ��62��71��80��134��175��176��179��196��212��215��225��228��238��241��524��543��545��832��ҹ2��ҹ15��ҹ21·������������߽��ڼ��ţ�5���Ӽ��ɲ��е�����վ��30���ӽԿɵ����������칫������ͨ��ݣ�5���ӿɴ�վ�����ϰ�רҵ�г���Ȧ��10���Ӽ��ɵ����԰·����ɽ��·��15���ӽԿɵ����¾Ų��н֡�\r\n3�����������ڽ�ѧ�������ƣ����������׶�԰��Сѧ����ѧһ�����������ף��ܱ���У������Э��Сѧ��ʡһ������Э����ѧ��ʡһ������������ѧ��ʡһ�����ȶ�����У��\r\n4�������Ŀ�������ƣ��������г����ɳ�����������һӦ��ȫ��\r\n','�������г����ɳ�����������һӦ��ȫ','http://player.youku.com/player.php/sid/XMTU0MjA4NTEy/v.swf','34','5435555','666555','��','��װ','�ǽ���ҵ����','3','45%','444','020-5888888','������ ����·�ж�','������','����');");
E_D("replace into `qb_house_content_5` values('13','19','5','1','&nbsp; ��������뵺&mdash;&mdash;���ݳ����ͳ��а뵺�����������ǹ����������޽��еĽ�����Դ�붼�з���������ϵ������Ͷ��ж��а뵺����������������Ȼ�츳��1500��˽�ҽ����ߣ��ϡ������������ٽ�����Ұ����������һ�ߺ���齭������Զ�����壬׳�۾������۵ס�<br />\r\n<br />\r\n��������뵺��ӵ�����ֵ����й���&ldquo;�¶�ɳ��&rdquo;��������λ�ڹ������غ��ĵضΣ����»�վ����Ȧ�������³ǲ�ҵȦ����Ϫ��ҵȦ�������������ӳ��ߡ�����7���ߵĽ���㡣���Ŷ�ɳ���ŵļ�����ͨ����خ���彫�����������ͨ����Ϫ���š��¹���š����¸��ٵȽ�ͨ���磬��ɳ������ݣ��������г������ס�<br />\r\n<br />\r\n��������뵺����ռ���������6��ƽ���ף�ȫ����18��25��26��ĸ߲�����ɡ��йظ����˽��ܣ�����������WY������ƹ��ʹ�˾Ϊ�����滮��ƣ�¥���������������ķ�ʽ���������ɫ��Ϊ�׻�ɫ��<br />\r\n','���ݱȻ���ׯ԰���޹�˾','�����з�خ�����ֽ����ֻ�����·','2011-04-07','15000','����ϵͳ������2��7���ߣ�����13·','���͹���֡���ӳ�ż��˹�����ۿ۵ꡢخɽ�ۿ۵ꡢ��خ�������ġ���خ�㳡�����̳�����ɽ��ó�ǵ���ɫ�̵���ʳ�֣���̩����OK���ֳǡ�����������Ժ�������Ļ����ĵȣ����С��׶�԰����СѧУ���ܼ���ͨ�������������һӦ��ȫ�� ','���С��׶�԰����СѧУ','http://player.youku.com/player.php/sid/XMTU0MjA4NTEy/v.swf','43','444000','90000','��','��װ','�Ȼ���ׯ԰���޹�˾','2.2','25%','400','020-5444111','�����з�خ�����ֽ����ֻ�����·','������','����');");
E_D("replace into `qb_house_content_5` values('14','20','5','1','&nbsp; �����������λ���齭���Σ���λΪ���ز�&ldquo;��߶������Ľ�����լ����&rdquo;�����õ����Լ14.4��ƽ���ף��ܽ��������48��ƽ���ף���Ϊ�����ͱ�����������ƷΪ��ʱ������龰�󷿣������������Ϊ183-410ƽ���ף�����Ϊ82-182ƽ���׵�11�㾫���������龰�󷿲��ò����̨ʽ����ƣ��ﵽ�Ʋ�������Ч��һ�߽�����360��԰�־��ۣ�չ��ʽ���Ӿ����ܡ���Ŀ��������Ϊ���������İ�ʽ��ƣ���֤�˾��󲿷ֻ��͵��ϱ������������õĹ۾�Ч���������󲿷��ײ㽨�������üܿղ���ƣ�����������ʽ԰���໥��Ӧ��<br />\r\n<br />\r\n����������޵���һ�����������缶԰�֣����¼��¸������ʴ�ʦ����ִ�ʣ�������Ŀ�ʾ��Σ�������8��ƽ���׵������ķ���԰�֡�20000ƽ���׵����⾰�ۺ��������µ�ʽ��ˮ԰�ֹ㳡��1500ƽ�׿��л�԰�����д��ͻʼ��˶����ġ�����˫���׶�԰��Сѧ��������ҵ���ĵ���ȫ���������ף�5����ֱ�ﻷ��·������·����ɽ·��Ȧ��<br />\r\n','���ݺ��ز�����','λ�ڽ�ɳ�޴�������','2011-04-23','18000','4��������ͨ����ɳ�޴��š���ɳ�Ӵ��š�����ɳ���š���̹ɳ����','С�����ף����ͻʼ��˶����ġ�����˫���׶�԰��Сѧ��������ҵ���ġ�ҽ�����ġ������˶�����������˫Ӿ�����\r\n���У��й��������С��й�ũҵ����\r\n','����г���ɳ��塢��ɳ�塢�������Ĵ�������г� ','http://player.youku.com/player.php/sid/XMTU0MjA4NTEy/v.swf','23','45000','30000','��','��װ','��������(����)��ҵ�������޹�˾','2','35%','350','020-88444555','λ�ڽ�ɳ�޴�������','������','����');");
E_D("replace into `qb_house_content_5` values('15','21','5','1','&nbsp; ���������㳡λ�ڶ���·��ǰ��·���磬���ǰ��·������·���ش���������ҵ�Ļ����ģ�����ɽ��ѧ����������ѧԺ�����۹�԰���ڣ�������ס�������ڳ������������⣬�������д��������ơ�<br />\r\n<br />\r\n���������㳡���Ķ��߲���ɣ�����80�׵�¥�࣬�Ǻ��������Ĵ����ۺ���סС������Ŀ�Ľ�ͨʮ�ֱ�ݣ���&ldquo;�ӱ�&rdquo;��ҵ���ؽ�һ��֮�������ʮ����������·���ڻ�·������������ʹס���ɷ�����С��ܱ߰����������ġ��������г���������С����������ѳ��С��ۺ��̳�������ͣ������������������Ӧ�о��С�<br />\r\n<br />\r\n���������㳡��Ƹ����һ���Ķ�����ҵ������˾Ϊҵ���ṩ�Ƶ�ʽ����Ӳ�������䱸��������ܻ�����ϵͳ������Ϊס���ṩ��Խ���������<br />\r\n<br />\r\n�������ƻ�����74~108ƽ���ײ��ȣ��������������������λ�������������ʵ�ã�ͨ��ɹ����룬����ȫ��������װ�ޡ� ','�����ж������ز����޹�˾','����������·38�ţ����黨԰����','2011-04-23','15000','����������·�� ҹ4· 11· 18· �߷����27· 35· 44· 80· 184· 188· 192· 208· 264· 287· 542· 546· 548· 811· 813· 864·','�����ҵ�������ۺ��塪����������̳�����ʱ��������̳�����������ȹ¥�̳��ȣ���һ���Ƶ꼶����Ԣ�����ڣ�����������סլ���������ڣ������ִ���ά�������԰�֡����������������ģ��������ף�\r\n�����Ŀ��������̳�������㳡������̳�����ȳ�������㳡��������԰�г������ֶ೬��\r\n��ͨ�����۵���վ���ж�������վ���ڻ�·����ʮ��������·��ͨ�齭����\r\n���֣������������Ȫ�����۹�԰����ӡ��԰����ӡ���ԣ�\r\n��������ʮһ�У���ɽ��У����ǰ��·Сѧ\r\n','��������Ŀ�������йݡ�С�����ܱ�ȫ������������������Է����ʢ��\r\n','http://player.youku.com/player.php/sid/XMTU0MjA4NTEy/v.swf','324','444000','30000','��','��װ','������ҵ���������ݣ����޹�˾','1.96','40%','300','020-88774445','����������·38�ţ����黨԰���棩','ʯ��ɽ��','����');");
E_D("replace into `qb_house_content_5` values('16','22','5','1','&nbsp; �����۰�����λ����ɳ���ĳ�������ĵضΣ���ͨ���㣻������ɳ�������ɵ����۴�����Ӳ����Ÿ��ٹ�·���ϲ����ٸ��ߡ��������ٸ���;������ĺ��߽���վ�ͽ���վ����Լ��ʮ�����;������·����,�ж�����·;����վ���Ӳ������š���Ϫ������������վ�ȵأ���Ŀ���ڵ�����ɳ��ҵ����ס���ģ��ܱ��г������������ɳ�̹�԰���ܱ߶�������ס¥�̻��ơ�<br />\r\n<br />\r\n<br />\r\n<br />\r\n�����۰����������ͼͻ�ƴ�ͳ��ƽ�沼�֣��ڸ��ܶȵĳ��л����������һ��Ʒ������������ǿ��ʱ�������Ķ�����ϵĽ���Ⱥ�塣���������Ե㡢�ߡ���Ϊ���ɵ���Ҫ�أ�ע��������̬������仯���ص�ͻ��������ۼ�����졢��ӱ�󷽵����������������뻷���߶��ںϡ�<br />\r\n','�۰����ز��������޹�˾','������ɳ���۴�����·��','2011-04-14','20000','������ɳ�������ɵ����۴�����Ӳ����Ÿ��ٹ�·','��ɳ�ڶ���ѧ����ɳ����ҽԺ�����޵���վ�������г��������ʾ֣��й����У��й��������У��й��������У�����ũ����ҵ���еȵ�\r\n','����ʮ�Ų�,����һ��,ȹ¥����(�ֲ��Ĳ�) ,5 - 1 9����¥��λΪ�Ǽ��Ƶ�ʽ��Ԣ,ȹ¥����(�ֲ��Ĳ�)�� һ�����㶨λƷ�Ƶ�ʽ���̣������Ĳ�Ϊ�����̳��Ͳ�������ҵ̬ ','http://player.youku.com/player.php/sid/XMTU0MjA4NTEy/v.swf','3','700000','400000','��','��װ','���ز��������޹�˾','2','45%','500','020-554400','������ɳ���۴�����·��','������','����');");
E_D("replace into `qb_house_content_5` values('17','23','5','1','&nbsp; ����2002����й�����50ǿ����������ʮ����ϲ��¥�̡��й��Ļ����̡�����˾ӻ����𽱡�����ʮ������¥�̡����԰�־��۽𽱡�<br />\r\n<br />\r\n�����Ǻ���λ�ڻ��ϰ�黪�Ͽ��ٸ����ϳ��ڣ�ռ�����1200Ķ��������Ͷ��8������ң����������30����ƽ���ף���ס����1900�໧�������������������ˮ��԰��������϶��ɡ��Ǻ�������ӵ��1��������ۼ�Ļ���������8��&ldquo;���ſ���&rdquo;ʽ��˽�������л���ɢ���������У�ͬʱ����ʡ��������Уִ����ѧ���Ǻ�����ҵ���˽�����ϰټҸ���������̼ң�Ϊҵ��ȫ���ṩ�����Żݵĸ��ַ���<br />\r\n<br />\r\n����ӵ��һ�������ĺ�����Ӿ�ء���ʮ����԰��ˮ�������е���Ȼ��ˮ��̬ѭ��ϵͳ����ϳ�ӵ�����������������ˮ��԰��������������չ����һ�����ȴ��˾ӻ����ĵ䷶��ͬʱ���Ǻ��廹����1800�׳���ȫ�߽������̽���2���ﳤ�ı����ܿ�ľ�ذ徰�����г���','���ݺ긻���ز����޹�˾','���ݷ�خӭ��·ɳϪ�����ϰ�','2011-04-09','16000','���ڵ���3���ߡ����Ͽ��ٸ�','�ܱ����ף��Ǻ���Ƶꡢ���̡����С������������������ġ����ټ�����ͷ����๦�ܻ����Ҽ����ʱ�׼����\r\nС�����ף���ɫ��ء����³��⡢��ͯ���ֳ�����ɫ��ľ���ȴ����԰������ľ������ɫˮ�����ȴ�԰�֡�̫���㳡�� ','�Ǻ��庣���뵺������9�µ��Ƴ�������Ŀ����Ϊ�Ǻ����ڹ��ݿ�������߶˺�լ��Ŀ��һ����6��22��27��ĸ߲㽨����ɣ�¥��ȹ����Ǻ����������������250ƽ�������ҵĴ�λΪ�����䱸����300��500ƽ���׵ĳ������Լ�����90ƽ���׵Ľ��ջ���','http://player.youku.com/player.php/sid/XMTU0MjA4NTEy/v.swf','34','600000','500000','��','��װ','�긻���ز����޹�˾','4','50%','200','020-8877444','���ݷ�خӭ��·ɳϪ�����ϰ�','��ƽ��','����');");

require("../../inc/footer.php");
?>