<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_tuangou_content_1`;");
E_C("CREATE TABLE `qb_tuangou_content_1` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `sortid` tinyint(1) NOT NULL DEFAULT '0',
  `place` varchar(100) NOT NULL DEFAULT '',
  `jointime` varchar(15) NOT NULL DEFAULT '',
  `end_time` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=gbk");
E_D("replace into `qb_tuangou_content_1` values('16','34','3','1','<p>�г̰���</p>\r\n<p>��ָ���ص㼯�ϳ˳�����Ȫ֮��--������Լ2Сʱ�����ִ���������Ҽ�����---Ǳɽ����ɭ�ֹ�԰�����ͣ����������������ɽ����С��ĸ質��Ʒһ���������������顰͵�ø��������С����ľ���������ʱ��Լ50���ӡ������ǰ���̹�԰��Ȫ���������ܾ߶����ǰ��嵺������������Ȫ�������ӱ�������ţ�40������Ȫ���������ݵ��Ƹߵ�������裬����Ȼɽ���д���ֲ���ɽ������Ȫ����ɽ�׹�ͬ������Զ���ߵ͸�����ͬ�ľ��ۣ����ɱ��£�������ǧ����Ȼ��ɡ���Ȫ���ﲻ���и��ֹ�Ч�ļ�����Ȫ�������ʺ�С���Ķ��л��������Ȫ��õ��Ʈ��Ļ�����Ȫ��������Ч����Ȼʯ����Ȫ�ȿ������ݹ�Ч������ԡ����ɫ������������ԡ�ͷ�������������Ȫ����¥�����������Ȫ�Ƶ����䡰���С��ȼ١����񡢻��顱�ĺ�һ�Ĺ������ƣ������ڷ�æ�Ĺ���֮�࣬��ȴ�׷׳���������һ��Զ������������׽�����Ȼ��������⣬������ʱ���ܷ羰������Ȼ�з������飬�ھƵ�����������и��ܵ���͵�ø��������С����⾳������16��30�����ҷ����人����������ó�!</p>\r\n<p><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://img1.gtimg.com/hb/pics/27832/27832110.jpg\" width=\"324\" height=\"182\" border=\"0\" /></p>\r\n<p>�����׼</p>\r\n<p>1��ͨ�������յ����γ�</p>\r\n<p>2�òͣ����� </p>\r\n<p>3��Ʊ����Ȫ����Ʊ</p>\r\n<p>4���Σ����η���</p>\r\n<p>����ʱ��ص㣺</p>\r\n<p>8��00 �����찲���վƵ�</p>\r\n<p>8��20����춫�Ϸ���</p>\r\n<p>8��40 �����������</p>\r\n<p>��ۣ�127Ԫ/��</p>\r\n<p>����·���人�������������޹�˾�ṩ</p>\r\n<p>&nbsp;</p>\r\n','1','2010-6-20','2010-07-1','2010-07-31');");
E_D("replace into `qb_tuangou_content_1` values('17','35','5','1','<p>������˵˵ͷ���찳�ҵ��°ɣ������찢��͢�������죬����椳���ꤼ��������һ�죬������ʧ��С�����Ƿ���һ��һ˫�米������һī��֮�⣬����̫ƽ�����ϰ����������ֵĳ�������һ��ѳԵĺ���ƿơ�ƣ�����ɳ���Ͽ����ҽ����������ĸ�ԭ����Խ��Խǿ�ˣ�����仹�и�һ�������ս�������ӳ��ܵ��ͺò�����Сʱ���¶���<img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://img.55bbs.com/3/234/li0eBsyYHD72A.jpg\" width=\"428\" height=\"500\" border=\"0\" /></p>\r\n<p>��Ѿͷû�������������ھ����ˣ��������ڻ�������N��óԵ��ء�����������ɳ������������һ�˵�Ҳ������⣬ʡȥ�˽��͵Ĺ���Ҫ��������ţ���������һЩ���ŵ������⣬�һ��ø���ɨä�������ֱ��ȥ�Լ�������ȥ�ˣ���Ȼ��Ҳ����������û����ֻ�����ǲ������Ҹ����˯�����ˣ����Ҳ�����ڰ��ΰ���֮��ż���������Ӵ��С�еľ��ʸ�˭�����˶��ѣ�������ä��˵����Զ�����������籭�����壬��Ҳ�Ͳ�����һ���ʶ�ˡ�������ǰ��ĳ������һ����ڼ�����ĳ������ü����Ц����������ƾʲô�ҳ�ȥ�棬���Լ��������£�</p>\r\n<p>&nbsp;</p>\r\n<p><strong>ԭ�ϣ�</strong></p>\r\n<p>�ڼ���ֻ���ڶ�������С��һ�ѡ�</p>\r\n<p><strong>���ϣ�</strong></p>\r\n<p>��Ƥ���˽ǡ�С���㡢�׺��������н��⡢�Ρ��ܾơ��ʱ���Ҷ��</p>\r\n<p>&nbsp;</p>\r\n<p><strong>������</strong></p>\r\n<p>1�����ڼ���С�飬�ڶ���ǰ������</p>\r\n<p>2����������ˮ��ˮ�¹��ڼ��飬�̾�Ѫĩ�̳����ã�</p>\r\n<p>3�����з�������н�ĩ��������С��������ڼ��飬�������ȣ�����׺���������Ƥ������ζ�������ܾƣ�</p>\r\n<p>4����ȡһ�����뿪ˮ��������ڼ���Ӻڶ���һ����Լ1Сʱ������С��������ε�ζ�������Сʱ�������װ���ñ���Ҷ��׺���ɡ�</p>\r\n<p>&nbsp;</p>\r\n<p><strong>ʳ��С��С��ʾ��</strong></p>\r\n<p>��������˵���ڶ��еġ��ڡ���ȷ����Ϊ��hei�������������ұ¿�ԭ����ڶ���ι���ڵģ��������ֳ��˺ڶ���������񱶶��������ı����ã�һ��ԭ���Ǻڶ��Ĺ�Ч��������ֺڶ���Ӫ����ֵ���ߣ��ڼ��ֺ������ʳƷ���еĵ�λҲ���൱�ĸߡ��ڶ���MM����˵�������������յĹ�Ч�����зḻ��ά���أ�����E���B��ά���غ�����ߡ���С��ҲҪ��ʾ��λ��Ů�ǣ��ڶ���ã������������ԣ������ǳ�θ���õ��˻������������</p>\r\n<p><strong>�ڼ����Ĺ�Ч��</strong></p>\r\n<p><strong>��˥����</strong></p>\r\n<p>�ڼ����д�����ά����A��΢��Ԫ�����ͺ�ɫ�أ����Ǿ�������������ɻ������ƹ�����֬���γɣ���˥�Ϻ����ư�ϸ�������Ĺ�Ч��</p>\r\n<p><strong>���θ��Ƽ���</strong></p>\r\n<p>�ڹǼ����д�����Ԫ�أ�����������Ѫ����Ƣ�̳�����ã�����Ч����Ů���¾�������ȱ����ƶѪ��֢�������ݸ�Ŀ����Ϊ�����ڼ�����������θ��˱��д��¡���</p>\r\n<p><strong>��������</strong></p>\r\n<p>�ڼ������������ʣ�����ά�����Լ���������ͭ���̵�΢��Ԫ�أ������̴��������ͣ��Ǹߵ��ס���֬�����̲���Ʒ�������о���֤�����ڼ����е�DHA��EPA���ʻ�������߶�ͯ��������ֹ�����Գմ�֢��Ԥ����Ѫ˨���ļ�������</p>\r\n<p><strong>���������</strong></p>\r\n<p>�ڼ��������岻ȱ�ٵĶ���ά���ء������ᡢ��������鰱��ȣ�����ʳ�ÿ�����Ч�����������ܣ����������������</p>\r\n','1','2010-6-20','2010-07-1','2010-06-17');");
E_D("replace into `qb_tuangou_content_1` values('15','33','2','1','<p>\r\n	&nbsp;</p>\r\n<p>\r\n	��������:</p>\r\n<p>\r\n	<br />\r\n	1�����ȵ������ָ��չ����Ӧ�̵�ר���꿴��</p>\r\n<p>\r\n	2������ƾ��Ա��&mdash;&mdash;&ldquo;�ſ�&rdquo;�ŵ�½�����&ldquo;�����̳�&rdquo;ҳ����&rdquo;����ԤԼ����&rdquo;��ť���ж�������ϸ��д������Ϣ���ϣ�����ע����Ʒ�����ƣ��ͺŵȡ��ύ����յ���վ�����綩��ȷ�϶��ţ�ͬʱ�˶�����Ϣ����&ldquo;��Ա����&rdquo;��ѯ���顣</p>\r\n<p>\r\n	3����Ӧ����ͬʱҲ���յ������ţ����ڵ�һʱ��绰��ϵ���ѣ��˶Զ����в�Ʒ���ͺţ�����������۸�ȡ���Լ���ͻ�ʱ��͵ص㡣</p>\r\n<p>\r\n	4����Ӧ�̰���Լ����ʱ���ͻ����ţ��ͻ������������ȫ��.</p>\r\n<p>\r\n	5����Ӧ�̽�����״̬�޸�Ϊ&ldquo;�����&rdquo;״̬����¼��ȫ����.</p>\r\n<p>\r\n	6�����ѵ�½&ldquo;��Ա����&rdquo;ȷ�϶������Թ�Ӧ�̽��з������ۣ���Ӧ�̻�ÿڱ�ֵ��</p>\r\n<p>\r\n	<img onload=''if(this.width>600)makesmallpic(this,600,800);'' alt=\"\" onload=\"if(this.width&gt;600)makesmallpic(this,600,800);\" src=\"http://www_qibosoft_com/Tmp_updirqb_shoptg_/1/03.jpg\" style=\"width: 400px; height: 300px; \" /></p>\r\n<p>\r\n	ע������:</p>\r\n<p>\r\n	<br />\r\n	1��ʵľ�ذ�������Ȼľ�����Ƴɣ�ʵľ�ذ��ɫ���͡����ۡ����ѵ������ڹ�����ҵ��׼������Χ��Ϊ��������</p>\r\n<p>\r\n	2��Ϊ������װ���ɫ��������������Ҫ���̼��Ƚ���Լ2�OԤ�̣��̼�������ǩ��ȷ�Ϻ��ٽ���ʵ�̡�</p>\r\n<p>\r\n	3��ʵľ�ذ������ֵĽ��Ϊ�ذ���������װ�Ѻ͸��Ͽ</p>\r\n<p>\r\n	4�����⳥��TXʹ��U����100Ԫ�ֽ��¶���ȷ�Ϻò�Ʒ��Ϣ������ǰ5��ԤԼ�ͻ�������5�컹δ�����ͻ����繩Ӧ��ԭ����ɵ��󹤣����չ�����ع涨��ÿ�ӳ�һ���󹤷Ѱ��պ�ͬǩ���ܼ۵�ǧ��֮��ִ�У��������������������վ���ͻ����̼�����Э������Ϊ׼����</p>\r\n<p>\r\n	<br />\r\n	�ر�ע�⣺��װ���а�����������50Ԫ/�O��װ���в�������ѹ�����߽��߸��ϣ���ѹ�����߽��߾������⹺��</p>\r\n','1','������ӻ������罨�Ĺݶ���2078','2010-06-25','2010-06-30');");
E_D("replace into `qb_tuangou_content_1` values('18','36','6','1','<p>������ʨ���졪���촿��ʽ���� �ٰ��������������Ҫ�Ĵ��¡��ĸ￪���Ժ󣬾����ڷɵĽ��죬Խ��Խ�������ѡ���˸��ԣ�������صĻ���ϲ��ϲ���������ڷ���������񣬴������徫�裬Ϊ���������߻����Ե����廨�λ���Ϊ�����ṩһվʽ��ʽ������񣬹ᴩ������Ĳ߻���������죬����ɡ��,�����ֶӣ���ƹ�Ů����̧���,������ʨ��������ƥ,���ϼ��,״Ԫ���£���������,�ص��ı�����ͳ����˾��......������ֳ�����������20���˵�100����˲��ȣ����������������������ֳ������רҵ�ݳ���Ա�����������׳�ۣ��о���ǧ��Ĺž��Ƿ·��ֻص����������ߡ�������ʨ����רҵ�а���ʽ����������������Ŷ����ữ��ϲ�������Ϊ���ٰ����</p>\r\n<p><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://www.hyrdcm.com/wm/UploadFiles_1473/201003/2010032410060219.jpg\" width=\"600\" height=\"392\" border=\"0\" /></p>\r\n<p>����������ӭ�׻��ζ��飨20-100���ˣ�����̧���,����ɡ��,�������,�����ֶ�,��ƹ�Ů�����ϼ��,������ʨ����ƥ,�᳡���ã�רҵ�������󣬻�ױʦ����ʽ����˾�ǡ���������ǻ����ݳ����۸�����һ�������Ľ�Ŀ������ʱ���ϡ���˾����ȫ���ݳ����ߣ�������Ա���������ܵ�����ͳ��ʽ������ڽ϶࣬���̽ϸ��ӣ��߻��Ϸ��������ѡ���ʨ����͵���ѡ����ʡ�ģ����ġ��ﱸ��ʽ�����׼�����ǣ���æ�е�����һ���绰���µľ�ϲ�������أ� 13910225952/010-85837039�绰��˵���й������������о�ϲ�Ż� </p>\r\n','1','2010-6-20','2010-07-1','2010-06-17');");
E_D("replace into `qb_tuangou_content_1` values('19','37','7','1','���������ܡ��� <p>1����5�ֺ�����,�����ڱ�������������;</p>\r\n<p>2��DHA��AA��ǰ�������������������,�����ڱ����Բ��ķ���;</p>\r\n<p>3���ر���������Ԫ����������</p>\r\n<p>4�����Ӧ�-���ܲ��ؼ�ά����C,п��þ����������΢��Ԫ��,�������������ֿ���;</p>\r\n<p>5����������ʳ��ά��Ҷ��;����ɴ��������ʵ���</p>\r\n<p><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://img.muyingzhijia.com/product/org/53061_01_01.jpg\" width=\"600\" height=\"600\" border=\"0\" /></p>\r\n<p><br />\r\n�����淽�������ܷ�,�����������ﴦ</p>\r\n<p>��ע������� ������΢��¯������Һ,�������ˡ�������ҽ����Ա��ָʾι��Ӥ����ο�ι���������Ӥ����ʳ����θ�ڡ�</p>\r\n','1','2010-6-20','2010-07-1','2010-06-17');");
E_D("replace into `qb_tuangou_content_1` values('20','38','1','1','<p><table cellspacing=\"0\" cellpadding=\"0\" width=\"800\" style=\"padding-left:15px;padding-right:15px;\"><tbody><tr><td align=\"center\">������ͥ��������������լ��ʱ��</td></tr><tr><td align=\"left\"><p align=\"center\"><font face=\"Verdana\"><strong><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://www.hibaoan.com/edit/UploadFile/2009111916512945.jpg\" width=\"500\" height=\"431\" border=\"0\" /></strong></font></p>\r\n<p><font face=\"Verdana\"><strong>�����壬���ʻ��Ķ�����̲����</strong></font></p>\r\n<p><font face=\"Verdana\">�����壬һ������������ʱ����Ϣ�����֡�ʮ����ǰ�����ﻹ��һƬ̲Ϳ���������Ǹ�¥��������ۺ��ڸ߶����׵Ĺ��ʻ�������̲���ģ�</font></p>\r\n<p><font face=\"Verdana\">������滮��������ί���������ڴ��조Ʒλ֮�ǡ��ϵľ������֣���������Ͻ��ܣ�2002�꣬�����״������������庣���߻������켰�������̡�����ͼ�����������ɻ������ţ����������������������б������۴���2003��6�£�����������ί��4�ҹ���֪���滮��ҵ�Ժ��ڵĺ��ı��������й滮��8�����ʹ��źͱ�����������ʽͨ�������������ҵ�����μ�ֵ��͹�ԡ�10�º��ں��ı������滮��ʽ���ꡣ��2005��7��13�գ�������������ʽ��׼�����������ϸ�滮�����ˣ�������Ĺ滮������ɡ������Ĵ��ֱʹ滮������ʵʩ���ɾ��˺��ڸ߶����������������𡪡��������顣</font></p>\r\n<p><font face=\"Verdana\">����������ź������Ρ��ȼ١���ס�ȶ෽�����Ṧ�ܡ���ۺ��ڸ߶˾Ƶꡢ��ͧ��ͷ�����ڸ��Ժ�ȸ߶��������ף�ӵ�����ʹ��š����͹�԰���˹����Ⱥ��ڱ�־�Խ������������˴���á���Э���õ����������������ң�����ز�����Դ����������ز������̷׷���פ�������������Ը߶�ʱ������Ƭ������������ں�����ˣ���������Ŀ��</font></p>\r\n<p align=\"center\"><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://www.hibaoan.com/edit/UploadFile/20091119165216440.jpg\" width=\"500\" height=\"344\" border=\"0\" /></p>\r\n<p><font face=\"Verdana\"><strong>������ͥ�����캣��������լ���</strong></font></p>\r\n<p><font face=\"Verdana\">����?������ͥ�Ǳ����ز��̽��ϳǡ�Ҭ������ں��ϵ���һҫ��������������?������ͥ����̲����������������ڴ��캣��������լ��ˣ��������������ĺ�լ��ʱ�����Իƽ�ضΡ�����ǰ�ع滮�����ʦ�����ֱʡ�����ϸ��Ʒ�ʵ�һϵ�й��ʺ�լ��׼������������լ����Ȧ�㡣��Ŀ���õء��滮��ơ���������԰�־��ۡ��ռ���ƵȻ��ڣ����������ܵĵ�������ã�ֻΪƥ�䡰��լ�����壬�ɾͺ���������լ��ˡ�</font></p>\r\n<p><font face=\"Verdana\">��Ŀ�ش������б������������·���紦�����ڡ�������̲��ʮ������֮һ������֮�š��ĺ������򣬽��ں��ڽ�ͨ��Ŧ������������ݺ�Ͽ�����������������㺣̲�����պ����Ⱦ��㼰�߶�סլ�����������������԰���󺣿ڱ�־���ۣ�2������뺣�����������������ĵضΡ��������������������ס����������ȳ��ж�����һ�����ó����۷���ʿ�е���������Խ�С�</font></p>\r\n<p align=\"center\"><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://www.hibaoan.com/edit/UploadFile/20091119165311346.jpg\" width=\"500\" height=\"313\" border=\"0\" /></p>\r\n<p><font face=\"Verdana\"><strong>������ͥ������Ʒ�Ƶز�����֮��</strong></font></p>\r\n<p><font face=\"Verdana\">�����ز���ʵ������Ʒ�Ʊ��ϣ��������Ⱥ������ڡ��������Ϻ����人�����ϡ������ȵؿ���������෿�ز���Ŀ��ӵ�г�������ش������ӱ�����פ���ϵ��������ں��ڡ��Ĳ��������Ⱥ󿪷����ϳǡ�������ҵ�㳡��Ҭ�������Ŀ�������ز����԰��˵����ƿ��غ��Ͻ������캽���ϸ߶˶ȼٱ������������Ρ����к���Ʒ�ʺ�լ�ȶ���ҵ̬�����������ȴ�ϡȱ��Դ�����ȷ棬�ں���ӵ�лԻ�ҵ�����ڿ���̾��Ʒ�ʡ�</font></p>\r\n<p><font face=\"Verdana\">����?������ͥ�Ǳ����ز�09���ף���Ϥ���и߲���ʿ����ĸ�Ʒ��סլ��Ŀ�������Ʒ��Ψһ���벻�ɱ��԰����ڳ������ģ��ɾ���һ���ײ�ԵضΡ��Բ�Ʒ�������ݵĶ������󡣺��������ı���Ժ�լ����Ȧ����ȫ���������ڵĹ�������Ȧ���¾��棬ֵ��ҵ����ʿ�ͳ����۷���ʿ�ڴ���<br />\r\n</font></p>\r\n</td></tr></tbody></table>\r\n</p>\r\n','2','2010-6-20','2010-06-17','2010-06-17');");
E_D("replace into `qb_tuangou_content_1` values('21','39','4','1','<p style=\"text-align:center;\"><br /></p><p>����Ǵ����Ѿõ�NCS�����Ǵ���ȫ��һ���Ľ����ͽγ���������δ������һ��-���ڹ����������ǳɶ�����������˵����ŷ�޻���һ�����ߵ��������Ұ���ֵܡ����ڣ�չ���ڴ����ǰ�������³�����Volkswagen JETTA VI��</p><p style=\"text-align:center;\"><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src=\"http://photocdn.sohu.com/20110919/Img319797630.jpg\" width=\"488\" height=\"337\" border=\"0\" style=\"text-align:center;\" /><br /></p><p>ȫ����Ƶ���JETTA�����˴���ˮƽ�ĳ�����������ʵ������û��̫������㣬��ۺ����ζ���Volkswagen Style�������ߴ緽�棬�����߷ֱ�Ϊ4640*1780*1450mm�������ڵ��������㳤��100mm���ҡ�������࣬��һ��JETTA������70mm���ﵽ2648mm���ң��ɴ˴������³��ĺ����Ȳ��ռ�������67mm��</p><p>�������棬���ڴ˴��Ǳ����������³��ķ�����������2.0TDI��2.0L��2.5L�Լ�2.0TSI�ȡ�����δ��ŷ���г��ĳ��ͣ�������6�����ƥ������һ��JETTA�ϣ�105������1.2TSI��122������1.4TSI��160������1.4TSI��200������2.0TSI�����ͻ�������105������1.6TDI��140������2.0TDI������������6����7��DSG��</p><p style=\"text-align:center;\"><br /></p><p>���÷��棬����6���ҡ�ESP��̥ѹ��ⶼ��������³��ϣ��๦����ʾ����GPS����ϵͳ��ȻҲ�����١���������JETTA���ۼۣ����泵�ʹ�15995��Ԫ���ۣ�Լ�������11��Ԫ����ҡ�����֮ǰ�ı�������������Ԥ�ƻ���2012��ǳ���</p>','1','2010-6-20','2010-06-17','2010-06-17');");

require("../../inc/footer.php");
?>