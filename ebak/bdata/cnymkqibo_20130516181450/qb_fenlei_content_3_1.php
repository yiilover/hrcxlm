<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_fenlei_content_3`;");
E_C("CREATE TABLE `qb_fenlei_content_3` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `my_jobs` varchar(30) NOT NULL DEFAULT '',
  `my_nums` varchar(12) NOT NULL DEFAULT '',
  `my_jobabout` mediumtext NOT NULL,
  `my_workplace` varchar(30) NOT NULL DEFAULT '',
  `wage` tinyint(1) NOT NULL DEFAULT '0',
  `sortid` char(1) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `wage` (`wage`),
  KEY `sortid` (`sortid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `qb_fenlei_content_3` values('1','33','60','1','���������涼�����������ι�˾��ԭ�����Ӵ��¥��������2006��5��26�գ��������йش山���42�ţ�Բ��԰���������棩��Ӫҵ�����4000��ƽ���ף���¥�Թŵ���Ϊ����30�����С���ȵİ�����1500�����λ����ٸ�����ͣ��λ�����Ƿ�����ڡ���¥�����������ɽӴ����ֻ��磬������ȴ��;ۻᡣ ���꾭Ӫ��Ҫ��ɽ����ʳ������Ϊ�����澭Ӫɽ���㱱��ζ�����������桢��������ˣ��ط��ٸ�˽���ˣ��Լ�Ӧʱ���ʡ��ҹ�˾��Ӫ�м������Ʋˣ���Ʒ����ǽ�����޻�С�����ɲΡ�����ƽ���Ρ���Ʒԧ���ࡢ��֭����ᡢ�����ı���ɽ�亣ζ���ϴ�ͬ�����ӡ��������⡢�����ζ�տ�����ͬ������ͷ�����ڻ�Դ���ۡ��������㡭������ �þ�¥���Ϻ���Ƽ�����������޹�˾רҵ���� �ܾ�������������������ȫ��Ա����������δ���� �ָ�н����ṫ����Ƹ����λ��Ա��','�տ�Ա','5','��ϴ��','����','3','1');");

require("../../inc/footer.php");
?>