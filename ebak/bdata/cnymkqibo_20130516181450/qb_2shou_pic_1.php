<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_2shou_pic`;");
E_C("CREATE TABLE `qb_2shou_pic` (
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
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=gbk");
E_D("replace into `qb_2shou_pic` values('1','1','7','0','1','0','http://img.beihai365.com/bbs/forumid_26/20100906_50e18bda3f89d1269ad7bQl2el8nvVVt.jpg','');");
E_D("replace into `qb_2shou_pic` values('2','2','7','0','1','0','http://1.pic.58control.cn/p1/big/n_13951452042257.jpg','');");
E_D("replace into `qb_2shou_pic` values('3','2','7','0','1','0','http://1.pic.58control.cn/p1/big/n_13951455623181.jpg','');");
E_D("replace into `qb_2shou_pic` values('4','2','7','0','1','0','http://1.pic.58control.cn/p1/big/n_13951459324426.jpg','');");
E_D("replace into `qb_2shou_pic` values('5','2','7','0','1','0','http://1.pic.58control.cn/p1/big/n_13951463033871.jpg','');");
E_D("replace into `qb_2shou_pic` values('6','3','7','0','1','0','http://1.pic.58control.cn/p1/big/n_14008601349901.jpg','');");
E_D("replace into `qb_2shou_pic` values('7','3','7','0','1','0','http://2.pic.58control.cn/p1/big/n_14008604118802.jpg','');");
E_D("replace into `qb_2shou_pic` values('8','4','7','0','1','0','http://2.pic.58control.cn/p1/big/n_13061159387906.jpg','');");
E_D("replace into `qb_2shou_pic` values('9','4','7','0','1','0','http://2.pic.58control.cn/p1/big/n_13061161904388.jpg','');");
E_D("replace into `qb_2shou_pic` values('10','5','7','0','1','0','http://3.pic.58control.cn/p1/big/n_13599099866881.jpg','');");
E_D("replace into `qb_2shou_pic` values('11','6','7','0','1','0','http://2.pic.58control.cn/p1/big/n_14014851520015.jpg','');");
E_D("replace into `qb_2shou_pic` values('12','7','7','0','1','0','http://1.pic.58control.cn/p1/big/n_13995398869770.jpg','');");
E_D("replace into `qb_2shou_pic` values('13','7','7','0','1','0','http://2.pic.58control.cn/p1/big/n_13995404316688.jpg','');");
E_D("replace into `qb_2shou_pic` values('14','8','8','0','1','0','http://2.pic.58control.cn/p1/big/n_14014916400656.jpg','');");
E_D("replace into `qb_2shou_pic` values('15','9','8','0','1','0','http://1.pic.58control.cn/p1/big/n_14016081982730.jpg','');");
E_D("replace into `qb_2shou_pic` values('16','9','8','0','1','0','http://2.pic.58control.cn/p1/big/n_14016409180173.jpg','');");
E_D("replace into `qb_2shou_pic` values('17','10','9','0','1','0','http://1.pic.58control.cn/p1/big/n_13999191951630.jpg','');");
E_D("replace into `qb_2shou_pic` values('18','11','9','0','1','0','http://4.pic.58control.cn/p1/big/n_14011968422157.jpg','');");
E_D("replace into `qb_2shou_pic` values('19','12','23','0','1','0','http://image.ganjistatic1.com/gjfs01/M00/D8/C6/wKhxwE594B-QYc1VAAEVxjWEoyk783_334-208_6-0.jpg','');");
E_D("replace into `qb_2shou_pic` values('20','12','23','0','1','0','http://image.ganjistatic1.com/gjfs01/M00/E2/08/wKhxwU594CLyIqPqAABJBdpAh0Y603_334-208_6-0.jpg','');");
E_D("replace into `qb_2shou_pic` values('21','13','23','0','1','0','http://sy.yesky.com/imagelist/2007/344/520125ofoo28s.jpg','1');");
E_D("replace into `qb_2shou_pic` values('22','13','23','0','1','0','http://image.ganjistatic1.com/gjfs01/M00/2D/5C/wKhxwU6AUIufwPl-AADB-oRwwHE299_334-208_6-0.jpg','2');");
E_D("replace into `qb_2shou_pic` values('23','13','23','0','1','0','http://image.ganjistatic1.com/gjfs01/M01/2D/53/wKhxwU6AUFzqfQIYAADQ65ttIt8785_334-208_6-0.jpg','3');");
E_D("replace into `qb_2shou_pic` values('24','13','23','0','1','0','http://image.ganjistatic1.com/gjfs01/M00/24/10/wKhxwE6AUGLgGaYiAACNWGrQCDA293_334-208_6-0.jpg','4');");
E_D("replace into `qb_2shou_pic` values('25','14','23','0','1','0','http://image.ganjistatic1.com/gjfs01/M01/29/9E/wKhxwU6APKq,GOuwAACNU35uPp8336_334-208_6-0.jpg','');");
E_D("replace into `qb_2shou_pic` values('26','14','23','0','1','0','http://image.ganjistatic1.com/gjfs01/M00/20/5B/wKhxwE6APKaYBa9aAAC99Uzr,Nc255_334-208_6-0.jpg','');");
E_D("replace into `qb_2shou_pic` values('27','14','23','0','1','0','http://image.ganjistatic1.com/gjfs01/M01/29/9D/wKhxwU6APKSRt5tHAACdmhp7Vns186_334-208_6-0.jpg','');");
E_D("replace into `qb_2shou_pic` values('28','15','23','0','1','0','http://www.2it.com.cn/shop/shop108587/uploadimage/product/09122210521828136.jpg','');");
E_D("replace into `qb_2shou_pic` values('29','15','23','0','1','0','http://image.ganjistatic1.com/gjfs01/M00/39/95/wKhxwU6BH-enbkHvAAF8SjYsJhI350_334-208_6-0.jpg','');");
E_D("replace into `qb_2shou_pic` values('30','15','23','0','1','0','http://image.ganjistatic1.com/gjfs01/M00/30/4D/wKhxwE6BH9buOt82AAFjnVvcO8Q832_334-208_6-0.jpg','');");
E_D("replace into `qb_2shou_pic` values('31','15','23','0','1','0','http://image.ganjistatic1.com/gjfs01/M01/30/51/wKhxwE6BH-uQ6EtrAAHFzh29N6k489_334-208_6-0.jpg','');");
E_D("replace into `qb_2shou_pic` values('32','15','23','0','1','0','http://image.ganjistatic1.com/gjfs01/M01/39/92/wKhxwU6BH9iPzm1QAAIhbSQjk2Q803_334-208_6-0.jpg','');");
E_D("replace into `qb_2shou_pic` values('33','16','13','0','1','0','http://des.sootuu.com/UploadFiles_5261/200702/200721223243860.jpg','');");
E_D("replace into `qb_2shou_pic` values('34','17','13','0','1','0','http://img1.teambuy.com.cn/upload/2010/07/27/085941_81011.jpg','');");

require("../../inc/footer.php");
?>