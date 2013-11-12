<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_sell_pic`;");
E_C("CREATE TABLE `qb_sell_pic` (
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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gbk");
E_D("replace into `qb_sell_pic` values('1','1','11','0','1','0','http://i00.c.aliimg.com/img/ibank/2010/267/882/137288762_1108421225.310x310.jpg','');");
E_D("replace into `qb_sell_pic` values('2','2','11','0','1','0','http://i01.c.aliimg.com/img/ibank/2010/143/884/202488341_1108421225.310x310.jpg','');");
E_D("replace into `qb_sell_pic` values('3','3','11','0','1','0','http://i05.c.aliimg.com/img/ibank/2010/127/864/202468721_1108421225.310x310.jpg','');");
E_D("replace into `qb_sell_pic` values('4','4','12','0','1','0','http://i05.c.aliimg.com/img/ibank/2010/755/984/198489557_1108421225.310x310.jpg','');");
E_D("replace into `qb_sell_pic` values('5','5','13','0','1','0','http://i01.c.aliimg.com/img/ibank/2010/157/174/198471751_1108421225.310x310.jpg','');");
E_D("replace into `qb_sell_pic` values('6','6','14','0','1','0','http://i03.c.aliimg.com/img/ibank/2010/223/454/198454322_1108421225.310x310.jpg','');");
E_D("replace into `qb_sell_pic` values('7','7','15','0','1','0','http://i02.c.aliimg.com/img/ibank/2010/004/377/201773400_1108421225.310x310.jpg','');");
E_D("replace into `qb_sell_pic` values('8','8','16','0','1','0','http://i03.c.aliimg.com/img/ibank/2010/472/005/198500274_1108421225.310x310.jpg','');");
E_D("replace into `qb_sell_pic` values('9','9','17','0','1','0','http://i00.c.aliimg.com/img/ibank/2010/423/442/133244324_1108421225.310x310.jpg','');");
E_D("replace into `qb_sell_pic` values('10','10','21','0','1','0','http://i05.c.aliimg.com/img/ibank/2010/710/902/149209017_1108421225.310x310.jpg','');");
E_D("replace into `qb_sell_pic` values('11','11','33','0','1','0','http://i00.c.aliimg.com/img/ibank/2010/673/938/124839376_1108421225.310x310.jpg','');");
E_D("replace into `qb_sell_pic` values('12','12','46','0','1','0','http://i00.c.aliimg.com/img/ibank/2010/733/921/124129337_1108421225.310x310.jpg','');");

require("../../inc/footer.php");
?>