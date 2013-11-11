<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_upfile`;");
E_C("CREATE TABLE `qb_upfile` (
  `up_id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `module_id` smallint(4) NOT NULL DEFAULT '0',
  `ids` varchar(255) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `url` varchar(150) NOT NULL DEFAULT '',
  `filename` varchar(100) NOT NULL DEFAULT '',
  `num` smallint(5) NOT NULL DEFAULT '0',
  `if_tmp` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`up_id`),
  KEY `filename` (`filename`),
  KEY `if_tmp` (`if_tmp`),
  KEY `posttime` (`posttime`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=gbk");
E_D("replace into `qb_upfile` values('1','0','0','0','1','1343208090','0_G涓?浗浜烘皯WM0E0zfeGxr.jpg','1_20120725170731_ds7pr.jpg','0','0');");
E_D("replace into `qb_upfile` values('2','0','0','0','1','1343209967','_pushi.jpg','1_20120725170747_eytto.jpg','0','0');");
E_D("replace into `qb_upfile` values('3','0','0','0','1','1344223118','Chrysanthemum.jpg','1_20120806110838_xrlsx.jpg','0','0');");
E_D("replace into `qb_upfile` values('4','0','0','0','1','1344233542','Chrysanthemum.jpg','1_20120806140822_xn2e2.jpg','0','0');");
E_D("replace into `qb_upfile` values('5','0','0','0','1','1344233552','Chrysanthemum.jpg','1_20120806140832_znlef.jpg','0','0');");
E_D("replace into `qb_upfile` values('6','0','0','0','1','1344233581','Chrysanthemum.jpg','1_20120806140801_1xqwo.jpg','0','0');");
E_D("replace into `qb_upfile` values('7','0','0','0','1','1344233623','_pushi.jpg','1_20120806140843_lzbry.jpg','0','0');");
E_D("replace into `qb_upfile` values('8','0','0','0','1','1344233674','Chrysanthemum.jpg','1_20120806140834_ca1ic.jpg','0','0');");
E_D("replace into `qb_upfile` values('9','0','0','0','1','1344233795','Chrysanthemum.jpg','1_20120806140835_3rko2.jpg','0','0');");
E_D("replace into `qb_upfile` values('10','0','0','0','1','1344233919','_pushi.jpg','1_20120806140839_piiun.jpg','0','0');");
E_D("replace into `qb_upfile` values('11','0','0','0','1','1344237385','Chrysanthemum.jpg','1_20120806150825_hrbqs.jpg','0','0');");
E_D("replace into `qb_upfile` values('12','0','0','0','1','1344237415','_pushi.jpg','1_20120806150855_8pacf.jpg','0','0');");
E_D("replace into `qb_upfile` values('13','0','0','0','1','1344237446','_pushi.jpg','1_20120806150826_jyzy6.jpg','0','0');");
E_D("replace into `qb_upfile` values('14','0','0','0','1','1344237503','_pushi.jpg','1_20120806150823_ljadd.jpg','0','0');");
E_D("replace into `qb_upfile` values('15','0','0','0','1','1344237523','_pushi.jpg','1_20120806150843_fycf6.jpg','0','0');");
E_D("replace into `qb_upfile` values('16','0','0','0','1','1344237547','_pushi.jpg','1_20120806150807_58akh.jpg','0','0');");
E_D("replace into `qb_upfile` values('17','0','0','0','1','1344237564','3_7NX4gnIxMp33.jpg','1_20120806150824_bm5ld.jpg','0','0');");
E_D("replace into `qb_upfile` values('18','0','0','0','1','1344237614','1.jpg','1_20120806150814_mrejx.jpg','0','0');");
E_D("replace into `qb_upfile` values('19','0','0','0','1','1344237632','_pushi.jpg','1_20120806150832_5rm0i.jpg','0','0');");
E_D("replace into `qb_upfile` values('20','0','0','0','1','1344237640','_pushi.jpg','1_20120806150840_trt9f.jpg','0','0');");
E_D("replace into `qb_upfile` values('21','0','0','0','1','1344237651','Chrysanthemum.jpg','1_20120806150851_hcxhc.jpg','0','0');");
E_D("replace into `qb_upfile` values('22','0','0','0','1','1344237660','Chrysanthemum.jpg','1_20120806150800_xfuul.jpg','0','0');");
E_D("replace into `qb_upfile` values('23','0','0','0','1','1344237817','_pushi.jpg','1_20120806150837_pdfyf.jpg','0','0');");
E_D("replace into `qb_upfile` values('24','0','0','0','1','1344237840','鐓х墖.jpg','1_20120806150800_f17yj.jpg','0','0');");
E_D("replace into `qb_upfile` values('25','0','0','0','1','1344237844','鐓х墖.jpg','1_20120806150804_2kuhs.jpg','0','0');");
E_D("replace into `qb_upfile` values('26','0','0','0','1','1344237854','Chrysanthemum.jpg','1_20120806150814_jc835.jpg','0','0');");
E_D("replace into `qb_upfile` values('27','0','0','0','1','1344237858','Chrysanthemum.jpg','1_20120806150818_3icin.jpg','0','0');");
E_D("replace into `qb_upfile` values('28','0','0','0','1','1344237858','Desert.jpg','1_20120806150818_on4j2.jpg','0','0');");
E_D("replace into `qb_upfile` values('29','0','0','0','1','1344237906','003.jpg','1_20120806150806_0hpsg.jpg','0','0');");
E_D("replace into `qb_upfile` values('30','0','0','0','1','1344237906','3.jpg','1_20120806150806_3okle.jpg','0','0');");
E_D("replace into `qb_upfile` values('31','0','0','0','1','1344492529','002.jpg','1_20120809140849_g3jeh.jpg','0','0');");
E_D("replace into `qb_upfile` values('32','0','0','0','1','1344494435','sf.jpg','1_20120809140835_gnfe0.jpg','0','0');");
E_D("replace into `qb_upfile` values('33','0','0','0','1','1344826433','_pushi.jpg','1_20120813100853_52edo.jpg','0','0');");
E_D("replace into `qb_upfile` values('34','0','0','0','1','1344831098','_pushi.jpg','1_20120813120838_jqnmt.jpg','0','0');");
E_D("replace into `qb_upfile` values('35','0','0','0','1','1344831128','_pushi.jpg','1_20120813120808_sgk0h.jpg','0','0');");
E_D("replace into `qb_upfile` values('36','0','0','0','1','1346983423','Blue hills.jpg','1_20120907100943_oraow.jpg','0','0');");
E_D("replace into `qb_upfile` values('37','0','0','0','1','1346983992','寰呭仛鍔熻兘.txt','1_20120907100912_qjyqq.txt','0','0');");
E_D("replace into `qb_upfile` values('38','0','0','0','1','1346984180','Sunset.jpg','1_20120907100920_h82ce.jpg','0','0');");
E_D("replace into `qb_upfile` values('39','0','0','0','1','1346984337','Sunset.jpg','1_20120907100957_9131r.jpg','0','0');");
E_D("replace into `qb_upfile` values('40','0','0','0','1','1351148407','_pushi.jpg','1_20121025151007_wy1rm.jpg','0','0');");
E_D("replace into `qb_upfile` values('41','0','0','0','1','1351148525','0DBF70FD11264B44874670CCFE4C6B4D200608021754.jpg','1_20121025151005_q0oku.jpg','0','0');");
E_D("replace into `qb_upfile` values('42','0','0','0','1','1351148621','4ab7fdcfg6562927498b4.jpg','1_20121025151041_314jy.jpg','0','0');");
E_D("replace into `qb_upfile` values('43','0','0','0','1','1351148705','6_qTLhZRnq8r2v.jpg','1_20121025151005_g4w9m.jpg','0','0');");
E_D("replace into `qb_upfile` values('44','0','0','0','1','1351152435','我的扬州网友(美噢).JPG','1_20121025161015_suqqv.jpg','0','0');");
E_D("replace into `qb_upfile` values('45','0','0','0','1','1353649828','1.jpg','1_20121123131128_cqiwg.jpg','0','0');");
E_D("replace into `qb_upfile` values('46','0','0','0','1','1353649853','2.jpg','1_20121123131153_gseby.jpg','0','0');");
E_D("replace into `qb_upfile` values('47','0','0','0','1','1353649875','3.jpg','1_20121123131115_v1qtp.jpg','0','0');");
E_D("replace into `qb_upfile` values('48','0','0','0','1','1353649907','4.jpg','1_20121123131147_owsnb.jpg','0','0');");
E_D("replace into `qb_upfile` values('52','0','0','0','1','1355973040','待做功能.txt','1_20121220111240_inftd.txt','0','0');");
E_D("replace into `qb_upfile` values('53','0','0','0','1','1355973187','招行2012-9-4.rar','1_20121220111207_mtx36.rar','0','0');");
E_D("replace into `qb_upfile` values('54','0','0','0','1','1355973256','装修频道.rar','1_20121220111216_rrtbw.rar','0','0');");
E_D("replace into `qb_upfile` values('55','0','0','0','1','1355973317','v6.rar','1_20121220111217_7jwp6.rar','0','0');");
E_D("replace into `qb_upfile` values('56','0','0','0','1','1355973550','分类信息系统 1.5版.rar','1_20121220111210_egzfh.rar','0','0');");
E_D("replace into `qb_upfile` values('57','0','0','0','1','1355973563','齐博教程.rar','1_20121220111223_zrxbt.rar','0','0');");
E_D("replace into `qb_upfile` values('58','0','0','0','1','1355973627','柏拉图式性爱CD1.rmvb.rar','1_20121220111227_sins8.rar','0','0');");
E_D("replace into `qb_upfile` values('59','0','0','0','1','1356341619','logo.gif','1_20121224171239_tldms.gif','0','0');");
E_D("replace into `qb_upfile` values('60','0','0','0','1','1356492338','0607231704802.JPG','1_20121226111238_tnupf.jpg','0','0');");
E_D("replace into `qb_upfile` values('61','0','0','0','1','1356502075','_pushi.jpg','1_20121226141255_bmejq.jpg','0','0');");
E_D("replace into `qb_upfile` values('62','0','0','0','1','1356772127','_pushi.jpg','1_20121229171247_uxwzn.jpg','0','0');");
E_D("replace into `qb_upfile` values('63','0','0','0','1','1356772552','_pushi.jpg','1_20121229171252_7ajnv.jpg','0','0');");
E_D("replace into `qb_upfile` values('64','0','0','0','1','1356772557','001.jpg','1_20121229171257_xcl5p.jpg','0','0');");
E_D("replace into `qb_upfile` values('65','0','0','0','1','1357102300','_pushi.jpg','1_20130102120140_43b9c.jpg','0','0');");
E_D("replace into `qb_upfile` values('66','0','0','0','1','1357102306','0_G中国人民WM0E0zfeGxr.jpg','1_20130102120146_suecq.jpg','0','0');");
E_D("replace into `qb_upfile` values('67','0','0','0','1','1357103266','1_B4jrfXg3G2Af.jpg','1_20130102130146_cxk06.jpg','0','0');");
E_D("replace into `qb_upfile` values('68','0','0','0','1','1357113302','_pushi.jpg','1_20130102150102_0tnju.jpg','0','0');");
E_D("replace into `qb_upfile` values('69','0','0','0','1','1357190100','2.jpg','1_20130103130100_plhtn.jpg','0','0');");
E_D("replace into `qb_upfile` values('70','0','0','0','1','1357191581','1.jpg','1_20130103130141_al9ps.jpg','0','0');");
E_D("replace into `qb_upfile` values('71','0','0','0','1','1357191614','1.jpg','1_20130103130114_u9prw.jpg','0','0');");
E_D("replace into `qb_upfile` values('72','0','0','0','1','1357191620','1.jpg','1_20130103130120_nvibd.jpg','0','0');");
E_D("replace into `qb_upfile` values('73','0','0','0','1','1358301646','1.jpg','1_20130116100146_qp2qk.jpg','0','0');");
E_D("replace into `qb_upfile` values('74','0','0','0','1','1365642062','_pushi.jpg','1_20130411090402_wypan.jpg','0','0');");
E_D("replace into `qb_upfile` values('75','0','0','0','1','1365642081','0_G中国人民WM0E0zfeGxr.jpg','1_20130411090421_xaozm.jpg','0','0');");
E_D("replace into `qb_upfile` values('79','0','0','0','1','1368669325','_pushi.jpg','1_20130516090525_vrhrc.jpg','0','0');");
E_D("replace into `qb_upfile` values('80','0','0','0','1','1381470141','海力.gif','1_20131011131021_f1xl3.gif','0','0');");
E_D("replace into `qb_upfile` values('84','0','0','0','1','1381475502','广告.jpg','1_20131011151042_fjdrn.jpg','0','0');");
E_D("replace into `qb_upfile` values('82','0','0','0','1','1381474610','涓婚〉.jpg','1_20131011141050_kxghk.jpg','0','0');");
E_D("replace into `qb_upfile` values('85','0','0','0','1','1381475749','涓婚〉.jpg','1_20131011151049_6tcb0.jpg','0','0');");
E_D("replace into `qb_upfile` values('86','0','0','0','1','1381475818','绾㈣壊濂借繍2.gif','1_20131011151058_kqto7.gif','0','0');");
E_D("replace into `qb_upfile` values('87','0','0','0','1','1381476372','鐓х墖 006.jpg','1_20131011151012_hsl6b.jpg','0','0');");
E_D("replace into `qb_upfile` values('88','0','0','0','1','1381476420','IMG_1862.JPG','1_20131011151000_pxwbc.jpg','0','0');");
E_D("replace into `qb_upfile` values('89','0','0','0','1','1381476656','营业执照正本.jpg','1_20131011151056_nsmsn.jpg','0','0');");
E_D("replace into `qb_upfile` values('90','0','0','0','1','1381476735','税务登记正.jpg','1_20131011151015_vzqz6.jpg','0','0');");
E_D("replace into `qb_upfile` values('91','0','0','0','1','1381476757','法人身份证反.JPG','1_20131011151037_iq4bg.jpg','0','0');");
E_D("replace into `qb_upfile` values('92','0','0','0','1','1381477023','法人身份证正.JPG','1_20131011151003_c38c8.jpg','0','0');");
E_D("replace into `qb_upfile` values('93','0','0','0','1','1381662895','标志.gif','1_20131013191055_5tgow.gif','0','0');");
E_D("replace into `qb_upfile` values('94','0','0','0','1','1382011330','51.jpg','1_20131017201010_rp9fb.jpg','0','0');");

require("../../inc/footer.php");
?>