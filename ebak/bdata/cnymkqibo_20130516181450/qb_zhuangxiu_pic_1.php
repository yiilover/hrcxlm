<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_zhuangxiu_pic`;");
E_C("CREATE TABLE `qb_zhuangxiu_pic` (
  `pid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `imgurl` varchar(150) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `id` (`id`),
  KEY `fid` (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=gbk");
E_D("replace into `qb_zhuangxiu_pic` values('1','1','6','0','1','0','qb_zhuangxiu_/6/1_20121025151007_wy1rm.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('2','2','6','0','1','0','qb_zhuangxiu_/6/1_20121025151005_q0oku.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('3','3','6','0','1','0','qb_zhuangxiu_/6/1_20121025151041_314jy.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('4','4','6','0','1','0','qb_zhuangxiu_/6/1_20121025151005_g4w9m.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('5','38','5','0','1','0','zhuangxiu/headphoto_371152.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('6','39','5','0','1','0','zhuangxiu/headphoto_242450c.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('7','40','5','0','1','0','zhuangxiu/headphoto_251701c.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('8','41','5','0','1','0','zhuangxiu/headphoto_436469c.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('9','42','5','0','1','0','zhuangxiu/headphoto_250408c.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('10','43','2','0','1','0','zhuangxiu/20121025_e347471b25a9473f0544LOX3OBFqVOij.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('11','43','2','0','1','0','zhuangxiu/20121024_2bfc13ac5528fa5bf03fyy567gWDL1E6.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('12','43','2','0','1','0','zhuangxiu/20121025_895024555a7815d0ac2dMjGMcKU2RfW6.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('13','44','2','0','1','0','zhuangxiu/20120808_43a16b39ddd819bdb6aeDmmYrjZohsLt.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('14','44','2','0','1','0','zhuangxiu/20120808_41a9c68c5a18627a5c25ClVsxfGhy9K4.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('15','44','2','0','1','0','zhuangxiu/20120808_035d6370a9c32d7d22cbsgEne8ednOfn.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('16','44','2','0','1','0','zhuangxiu/20120808_4045eb13969d74eec5c9GCxFIpD7tmrY.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('17','45','2','0','1','0','zhuangxiu/20121025_3522af3343f63e47b7373Efed66yXrJD.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('18','45','2','0','1','0','zhuangxiu/20121025_3f0157bfdb9c193f96b6UocIGQuyxUPU.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('19','45','2','0','1','0','zhuangxiu/20121025_20f3dc26e752b94f89e32KkgSenS17f5.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('20','45','2','0','1','0','zhuangxiu/20121025_9dfe14f55fcc93eed747LAUN8KigkEDr.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('21','46','2','0','1','0','zhuangxiu/20121025_1df70bda985b5aceda79zWnEULUi14ku.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('22','46','2','0','1','0','zhuangxiu/20121025_84c9fd9ee67ac150aeb3pTIBSImizbJ2.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('23','46','2','0','1','0','zhuangxiu/20121025_f234a7ec045d4d53259871eLEVhN6psV.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('24','47','2','0','1','0','zhuangxiu/20121025_d4d2fdb9a966763224b1diSdQdjA42Ss.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('25','47','2','0','1','0','zhuangxiu/20121025_a1a2dbffd77f932370deUjT9h0VjWBz1.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('26','47','2','0','1','0','zhuangxiu/20121025_192156a1040bedfe07dcQOecRSEhnBfe.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('27','48','2','0','1','0','zhuangxiu/20121025_f03f4adc1990a8ea41efqG2kHCl6XgN2.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('28','48','2','0','1','0','zhuangxiu/20121025_680124fc8c775a8d48f1Zh8I6tTTKRIK.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('29','48','2','0','1','0','zhuangxiu/20121025_f0060a9f04aab9ec6e33idjWuEu1SEJN.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('30','49','2','0','1','0','zhuangxiu/20121025_de98bcc4e542d02398caGMf7GssbHGEc.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('31','49','2','0','1','0','zhuangxiu/20121025_12cfc07f1ddb9ef7ed32hFcKZptEZThL.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('32','49','2','0','1','0','zhuangxiu/20121025_5166e6154fea7e0923bcLvwEhCWN4dFF.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('33','49','2','0','1','0','zhuangxiu/20121025_32f5835771d3cc423c10X8hhOzZ9e9k0.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('34','49','2','0','1','0','zhuangxiu/20121025_bf9b304d9944ab9a3534h3Z2k3caSVRa.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('35','50','2','0','1','0','zhuangxiu/20121024_4fca3a9456d2c90ff85aquDAXw9q2EWV.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('36','50','2','0','1','0','zhuangxiu/20121024_ec88166a34ac6447c42058qGpSfuy3BR.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('37','50','2','0','1','0','zhuangxiu/20121024_645831ebac6a870adfc50OW5Tnb8Rhf4.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('38','51','6','0','1','0','qb_zhuangxiu_/6/1_20121025161015_suqqv.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('39','19','4','0','1','0','qb_zhuangxiu_/4/1_20121123131153_gseby.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('40','49','2','0','1','0','qb_zhuangxiu_/2/1_20121116141138_dmzyu.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('41','49','2','0','1','0','qb_zhuangxiu_/2/1_20121116141139_jatfq.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('42','49','2','0','1','0','qb_zhuangxiu_/2/1_20121116141139_whbqn.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('43','49','2','0','1','0','qb_zhuangxiu_/2/1_20121116141140_wwpaw.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('44','27','4','0','1','0','qb_zhuangxiu_/4/1_20121123131128_cqiwg.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('47','52','2','0','1','0','http://www.sukeju.com/uploadfile/2013/0305/20130305095937970.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('45','37','3','0','1','0','qb_zhuangxiu_/3/1_20121123131115_v1qtp.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('46','32','3','0','1','0','qb_zhuangxiu_/3/1_20121123131147_owsnb.jpg','пб╥©вс');");
E_D("replace into `qb_zhuangxiu_pic` values('48','52','2','0','1','0','http://www.sukeju.com/uploadfile/2013/0305/20130305095942701.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('49','52','2','0','1','0','http://www.sukeju.com/uploadfile/2013/0305/20130305095943958.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('50','53','2','0','1','0','http://www.sukeju.com/uploadfile/2013/0131/20130131113519206.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('51','53','2','0','1','0','http://www.sukeju.com/uploadfile/2013/0131/20130131113653288.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('52','53','2','0','1','0','http://www.sukeju.com/uploadfile/2013/0131/20130131113627307.jpg','');");
E_D("replace into `qb_zhuangxiu_pic` values('53','53','2','0','1','0','http://www.sukeju.com/uploadfile/2013/0131/20130131113533749.jpg','');");

require("../../inc/footer.php");
?>