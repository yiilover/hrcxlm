<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_shop_pic`;");
E_C("CREATE TABLE `qb_shop_pic` (
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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=gbk");
E_D("replace into `qb_shop_pic` values('1','1','21','0','1','0','http://img03.taobaocdn.com/imgextra/i3/T1uXBuXctRXXcqqtMV_020223.jpg_310x310.jpg','');");
E_D("replace into `qb_shop_pic` values('2','2','21','0','1','0','http://img03.taobaocdn.com/imgextra/i7/T1VwlwXaFFXXbSH0E8_100145.jpg_310x310.jpg','');");
E_D("replace into `qb_shop_pic` values('3','3','21','0','1','0','http://img03.taobaocdn.com/bao/uploaded/i3/T1j3xAXeNBXXa35wg3_050109.jpg_310x310.jpg','');");
E_D("replace into `qb_shop_pic` values('4','3','21','0','1','0','http://img02.taobaocdn.com/imgextra/i2/37557679/T20DhqXclaXXXXXXXX_!!37557679.jpg_310x310.jpg','');");
E_D("replace into `qb_shop_pic` values('5','4','21','0','1','0','http://img06.taobaocdn.com/bao/uploaded/i6/T1W2NuXallXXaaewYa_120947.jpg_310x310.jpg','');");
E_D("replace into `qb_shop_pic` values('6','5','22','0','1','0','http://img02.taobaocdn.com/bao/uploaded/i2/T1V_VIXiJeXXXpNbzb_122917.jpg_310x310.jpg','');");
E_D("replace into `qb_shop_pic` values('7','6','22','0','1','0','http://img03.taobaocdn.com/bao/uploaded/i7/T15QFHXnFOXXcFBFs2_042705.jpg_310x310.jpg','');");
E_D("replace into `qb_shop_pic` values('8','7','23','0','1','0','http://img03.taobaocdn.com/bao/uploaded/i3/T1JVFNXg8lXXaIVbM0_034419.jpg_310x310.jpg','');");
E_D("replace into `qb_shop_pic` values('9','8','23','0','1','0','http://img02.taobaocdn.com/bao/uploaded/i6/T1v.hDXbJpXXcCiQHX_115806.jpg_310x310.jpg','');");
E_D("replace into `qb_shop_pic` values('10','9','23','0','1','0','http://img02.taobaocdn.com/bao/uploaded/i2/T1JmtAXlplXXbjcuI2_043649.jpg_310x310.jpg','');");
E_D("replace into `qb_shop_pic` values('11','10','64','0','1','0','http://img03.taobaocdn.com/bao/uploaded/i3/T1RTtGXiBDXXa0jpU__075239.jpg_310x310.jpg','');");
E_D("replace into `qb_shop_pic` values('12','10','64','0','1','0','http://img01.taobaocdn.com/imgextra/i5/223598441/T2qxNiXlFaXXXXXXXX_!!223598441.jpg_310x310.jpg','');");
E_D("replace into `qb_shop_pic` values('13','10','64','0','1','0','http://img01.taobaocdn.com/imgextra/i5/223598441/T2VE4jXjBaXXXXXXXX_!!223598441.jpg_310x310.jpg','');");
E_D("replace into `qb_shop_pic` values('14','12','7','0','27','0','qb_shop_/7/27_20101222101231_rvoo2.gif','');");
E_D("replace into `qb_shop_pic` values('15','11','79','0','1','0','qb_shop_/79/1_20120704170718_vuiif.jpg','');");

require("../../inc/footer.php");
?>