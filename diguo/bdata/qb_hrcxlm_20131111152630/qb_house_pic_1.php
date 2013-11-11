<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_house_pic`;");
E_C("CREATE TABLE `qb_house_pic` (
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
) ENGINE=MyISAM AUTO_INCREMENT=221 DEFAULT CHARSET=gbk");
E_D("replace into `qb_house_pic` values('117','2','2','0','1','0','qb_house_/2/1_20110325160349_M183Tlg0Z25JeE1wMzM=.jpg','');");
E_D("replace into `qb_house_pic` values('118','2','2','0','1','0','qb_house_/2/1_20110325160349_OEZGNUEwMjJGNUI0NDQxQ0IxNDA4NkJDNjYzMDQ0NUMyMDA2MDgwMjE3NTI=.jpg','');");
E_D("replace into `qb_house_pic` values('119','3','5','0','1','0','qb_house_/5/1_20110325170316_M19wYzNJV1V5SFduNkU=.jpg','');");
E_D("replace into `qb_house_pic` values('120','3','5','0','1','0','qb_house_/5/1_20110325170316_NkQwM0ZDQjdEMTZGNDIwNTk5RjBFOTYyQTcyQzI2Q0UyMDA2MDgwMzExNDc=.jpg','');");
E_D("replace into `qb_house_pic` values('121','4','6','0','1','0','qb_house_/6/1_20110331100342_M19wYzNJV1V5SFduNkU=.jpg','4·¿');");
E_D("replace into `qb_house_pic` values('122','4','6','0','1','0','qb_house_/6/1_20110331100342_MDZfejk3UjBUWFlIQU5U.jpg','3·¿');");
E_D("replace into `qb_house_pic` values('123','4','6','0','1','0','qb_house_/6/1_20110331150359_OF9za1JybHVYdEE3S2w=.jpg','');");
E_D("replace into `qb_house_pic` values('124','4','6','0','1','0','qb_house_/6/1_20110331150359_N185a1BwN3E1dTFRc3c=.jpg','');");
E_D("replace into `qb_house_pic` values('125','4','6','0','1','0','qb_house_/6/1_20110331150359_MDAz.jpg','');");
E_D("replace into `qb_house_pic` values('126','5','2','0','1','0','qb_house_/2/1_20110331160311_NkQwM0ZDQjdEMTZGNDIwNTk5RjBFOTYyQTcyQzI2Q0UyMDA2MDgwMzExNDc=.jpg','');");
E_D("replace into `qb_house_pic` values('127','5','2','0','1','0','qb_house_/2/1_20110331160312_MV9IaVlwM2hnUzF0NWM=.jpg','');");
E_D("replace into `qb_house_pic` values('128','1','1','0','1','0','qb_house_/1/1_20110407170429_M183Tlg0Z25JeE1wMzM=.jpg','');");
E_D("replace into `qb_house_pic` values('129','8','5','0','1','0','qb_house_/5/1_20110408110400_MQ==.jpg','');");
E_D("replace into `qb_house_pic` values('130','8','5','0','1','0','qb_house_/5/1_20110408110400_Mg==.jpg','');");
E_D("replace into `qb_house_pic` values('131','8','5','0','1','0','qb_house_/5/1_20110408110400_Mw==.jpg','');");
E_D("replace into `qb_house_pic` values('132','9','5','0','1','0','qb_house_/5/1_20110408110419_NA==.jpg','');");
E_D("replace into `qb_house_pic` values('133','9','5','0','1','0','qb_house_/5/1_20110408110419_NQ==.jpg','');");
E_D("replace into `qb_house_pic` values('134','9','5','0','1','0','qb_house_/5/1_20110408110419_Ng==.jpg','');");
E_D("replace into `qb_house_pic` values('135','10','5','0','1','0','qb_house_/5/1_20110408110419_Nw==.jpg','');");
E_D("replace into `qb_house_pic` values('136','10','5','0','1','0','qb_house_/5/1_20110408110419_OA==.jpg','');");
E_D("replace into `qb_house_pic` values('137','10','5','0','1','0','qb_house_/5/1_20110408110420_OQ==.jpg','');");
E_D("replace into `qb_house_pic` values('138','11','5','0','1','0','qb_house_/5/1_20110408110434_MQ==.jpg','');");
E_D("replace into `qb_house_pic` values('139','11','5','0','1','0','qb_house_/5/1_20110408110435_Mg==.jpg','');");
E_D("replace into `qb_house_pic` values('140','11','5','0','1','0','qb_house_/5/1_20110408110435_Mw==.jpg','');");
E_D("replace into `qb_house_pic` values('141','12','5','0','1','0','qb_house_/5/1_20110408140444_MDA=.jpg','');");
E_D("replace into `qb_house_pic` values('142','12','5','0','1','0','qb_house_/5/1_20110408120423_NQ==.jpg','');");
E_D("replace into `qb_house_pic` values('143','13','5','0','1','0','qb_house_/5/1_20110408120434_Ng==.jpg','');");
E_D("replace into `qb_house_pic` values('144','13','5','0','1','0','qb_house_/5/1_20110408120434_Nw==.jpg','');");
E_D("replace into `qb_house_pic` values('145','13','5','0','1','0','qb_house_/5/1_20110408120434_OA==.jpg','');");
E_D("replace into `qb_house_pic` values('146','14','5','0','1','0','qb_house_/5/1_20110408120403_MQ==.jpg','');");
E_D("replace into `qb_house_pic` values('147','14','5','0','1','0','qb_house_/5/1_20110408120403_Mg==.jpg','');");
E_D("replace into `qb_house_pic` values('148','14','5','0','1','0','qb_house_/5/1_20110408120403_Mw==.jpg','');");
E_D("replace into `qb_house_pic` values('149','15','5','0','1','0','qb_house_/5/1_20110408140429_MA==.jpg','');");
E_D("replace into `qb_house_pic` values('150','15','5','0','1','0','qb_house_/5/1_20110408130403_NQ==.jpg','');");
E_D("replace into `qb_house_pic` values('151','15','5','0','1','0','qb_house_/5/1_20110408130404_Ng==.jpg','');");
E_D("replace into `qb_house_pic` values('152','16','5','0','1','0','qb_house_/5/1_20110408130413_Nw==.jpg','');");
E_D("replace into `qb_house_pic` values('153','16','5','0','1','0','qb_house_/5/1_20110408130413_OA==.jpg','');");
E_D("replace into `qb_house_pic` values('154','16','5','0','1','0','qb_house_/5/1_20110408130413_OQ==.jpg','');");
E_D("replace into `qb_house_pic` values('155','17','5','0','1','0','qb_house_/5/1_20110408130455_MQ==.jpg','');");
E_D("replace into `qb_house_pic` values('156','17','5','0','1','0','qb_house_/5/1_20110408130456_Mg==.jpg','');");
E_D("replace into `qb_house_pic` values('157','17','5','0','1','0','qb_house_/5/1_20110408130456_Mw==.jpg','');");
E_D("replace into `qb_house_pic` values('158','18','5','0','1','0','qb_house_/5/1_20110408130418_NA==.jpg','');");
E_D("replace into `qb_house_pic` values('159','18','5','0','1','0','qb_house_/5/1_20110408130418_NQ==.jpg','');");
E_D("replace into `qb_house_pic` values('160','18','5','0','1','0','qb_house_/5/1_20110408130418_Ng==.jpg','');");
E_D("replace into `qb_house_pic` values('161','19','5','0','1','0','qb_house_/5/1_20110408130441_Nw==.jpg','');");
E_D("replace into `qb_house_pic` values('162','19','5','0','1','0','qb_house_/5/1_20110408130441_OA==.jpg','');");
E_D("replace into `qb_house_pic` values('163','19','5','0','1','0','qb_house_/5/1_20110408130442_OQ==.jpg','');");
E_D("replace into `qb_house_pic` values('164','20','5','0','1','0','qb_house_/5/1_20110408130406_MQ==.jpg','');");
E_D("replace into `qb_house_pic` values('165','20','5','0','1','0','qb_house_/5/1_20110408130406_Mg==.jpg','');");
E_D("replace into `qb_house_pic` values('166','20','5','0','1','0','qb_house_/5/1_20110408130406_Mw==.jpg','');");
E_D("replace into `qb_house_pic` values('167','21','5','0','1','0','qb_house_/5/1_20110408130439_NA==.jpg','');");
E_D("replace into `qb_house_pic` values('168','21','5','0','1','0','qb_house_/5/1_20110408130439_NQ==.jpg','');");
E_D("replace into `qb_house_pic` values('169','21','5','0','1','0','qb_house_/5/1_20110408130439_Ng==.jpg','');");
E_D("replace into `qb_house_pic` values('170','22','5','0','1','0','qb_house_/5/1_20110408130457_Nw==.jpg','');");
E_D("replace into `qb_house_pic` values('171','22','5','0','1','0','qb_house_/5/1_20110408130457_OA==.jpg','');");
E_D("replace into `qb_house_pic` values('172','22','5','0','1','0','qb_house_/5/1_20110408130457_OQ==.jpg','');");
E_D("replace into `qb_house_pic` values('173','23','5','0','1','0','qb_house_/5/1_20110408130430_MQ==.jpg','');");
E_D("replace into `qb_house_pic` values('174','23','5','0','1','0','qb_house_/5/1_20110408130431_Mg==.jpg','');");
E_D("replace into `qb_house_pic` values('175','23','5','0','1','0','qb_house_/5/1_20110408130431_Mw==.jpg','');");
E_D("replace into `qb_house_pic` values('176','24','2','0','1','0','qb_house_/2/1_20110408140434_MQ==.jpg','');");
E_D("replace into `qb_house_pic` values('177','24','2','0','1','0','qb_house_/2/1_20110408140434_Mg==.jpg','');");
E_D("replace into `qb_house_pic` values('178','25','2','0','1','0','qb_house_/2/1_20110408140437_Mw==.jpg','');");
E_D("replace into `qb_house_pic` values('179','25','2','0','1','0','qb_house_/2/1_20110408140438_NA==.jpg','');");
E_D("replace into `qb_house_pic` values('180','26','2','0','1','0','qb_house_/2/1_20110408140415_NQ==.jpg','');");
E_D("replace into `qb_house_pic` values('181','26','2','0','1','0','qb_house_/2/1_20110408140415_Ng==.jpg','');");
E_D("replace into `qb_house_pic` values('182','27','2','0','1','0','qb_house_/2/1_20110408140434_Nw==.jpg','');");
E_D("replace into `qb_house_pic` values('183','27','2','0','1','0','qb_house_/2/1_20110408140434_OA==.jpg','');");
E_D("replace into `qb_house_pic` values('184','28','2','0','1','0','qb_house_/2/1_20110408140417_OQ==.jpg','');");
E_D("replace into `qb_house_pic` values('185','28','2','0','1','0','qb_house_/2/1_20110408140417_MTA=.jpg','');");
E_D("replace into `qb_house_pic` values('186','29','1','0','1','0','qb_house_/1/1_20110408150445_MTE=.jpg','');");
E_D("replace into `qb_house_pic` values('187','29','1','0','1','0','qb_house_/1/1_20110408150445_MTI=.jpg','');");
E_D("replace into `qb_house_pic` values('188','30','1','0','1','0','qb_house_/1/1_20110408150439_MTM=.jpg','');");
E_D("replace into `qb_house_pic` values('189','30','1','0','1','0','qb_house_/1/1_20110408150439_MTQ=.jpg','');");
E_D("replace into `qb_house_pic` values('190','31','1','0','1','0','qb_house_/1/1_20110408150430_MTU=.jpg','');");
E_D("replace into `qb_house_pic` values('191','31','1','0','1','0','qb_house_/1/1_20110408150431_MTY=.jpg','');");
E_D("replace into `qb_house_pic` values('192','32','1','0','1','0','qb_house_/1/1_20110408150432_MTc=.jpg','');");
E_D("replace into `qb_house_pic` values('193','32','1','0','1','0','qb_house_/1/1_20110408150432_MTg=.jpg','');");
E_D("replace into `qb_house_pic` values('194','33','1','0','1','0','qb_house_/1/1_20110408150427_MTk=.jpg','');");
E_D("replace into `qb_house_pic` values('195','33','1','0','1','0','qb_house_/1/1_20110408150427_MjA=.jpg','');");
E_D("replace into `qb_house_pic` values('196','40','3','0','1','0','qb_house_/3/1_20110408150404_MjE=.jpg','');");
E_D("replace into `qb_house_pic` values('197','40','3','0','1','0','qb_house_/3/1_20110408150404_MjI=.jpg','');");
E_D("replace into `qb_house_pic` values('198','41','3','0','1','0','qb_house_/3/1_20110408150402_MjM=.jpg','');");
E_D("replace into `qb_house_pic` values('199','41','3','0','1','0','qb_house_/3/1_20110408150402_MjQ=.jpg','');");
E_D("replace into `qb_house_pic` values('200','42','3','0','1','0','qb_house_/3/1_20110408150408_MjU=.jpg','');");
E_D("replace into `qb_house_pic` values('201','42','3','0','1','0','qb_house_/3/1_20110408150408_MjY=.jpg','');");
E_D("replace into `qb_house_pic` values('202','43','4','0','1','0','qb_house_/4/1_20110408150420_MzE=.jpg','');");
E_D("replace into `qb_house_pic` values('203','43','4','0','1','0','qb_house_/4/1_20110408150420_MzI=.jpg','');");
E_D("replace into `qb_house_pic` values('204','44','4','0','1','0','qb_house_/4/1_20110408150411_MzM=.jpg','');");
E_D("replace into `qb_house_pic` values('205','44','4','0','1','0','qb_house_/4/1_20110408150411_MzQ=.jpg','');");
E_D("replace into `qb_house_pic` values('206','45','4','0','1','0','qb_house_/4/1_20110408150438_MzM=.jpg','');");
E_D("replace into `qb_house_pic` values('207','45','4','0','1','0','qb_house_/4/1_20110408150438_MzQ=.jpg','');");
E_D("replace into `qb_house_pic` values('208','39','6','0','1','0','qb_house_/6/1_20110409140437_NTI=.jpg','');");
E_D("replace into `qb_house_pic` values('209','39','6','0','1','0','qb_house_/6/1_20110409140437_NTE=.jpg','');");
E_D("replace into `qb_house_pic` values('210','38','6','0','1','0','qb_house_/6/1_20110409140400_NTA=.jpg','');");
E_D("replace into `qb_house_pic` values('211','38','6','0','1','0','qb_house_/6/1_20110409140400_NDk=.jpg','');");
E_D("replace into `qb_house_pic` values('212','37','6','0','1','0','qb_house_/6/1_20110409140430_NDg=.jpg','');");
E_D("replace into `qb_house_pic` values('213','37','6','0','1','0','qb_house_/6/1_20110409140431_NDc=.jpg','');");
E_D("replace into `qb_house_pic` values('214','36','6','0','1','0','qb_house_/6/1_20110409140452_NDY=.jpg','');");
E_D("replace into `qb_house_pic` values('215','36','6','0','1','0','qb_house_/6/1_20110409140452_NDU=.jpg','');");
E_D("replace into `qb_house_pic` values('216','35','6','0','1','0','qb_house_/6/1_20110409140412_NDQ=.jpg','');");
E_D("replace into `qb_house_pic` values('217','35','6','0','1','0','qb_house_/6/1_20110409140412_NDM=.jpg','');");
E_D("replace into `qb_house_pic` values('218','34','6','0','1','0','qb_house_/6/1_20110409140442_NDI=.jpg','');");
E_D("replace into `qb_house_pic` values('219','34','6','0','1','0','qb_house_/6/1_20110409140442_NDE=.jpg','');");
E_D("replace into `qb_house_pic` values('220','46','5','0','1','0','qb_house_/5/1_20120613170628_d9lwk.jpg','');");

require("../../inc/footer.php");
?>