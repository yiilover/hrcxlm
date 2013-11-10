<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_gift_content`;");
E_C("CREATE TABLE `qb_gift_content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `fname` varchar(50) NOT NULL DEFAULT '',
  `hits` mediumint(7) NOT NULL DEFAULT '0',
  `comments` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `list` varchar(10) NOT NULL DEFAULT '',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `titlecolor` varchar(15) NOT NULL DEFAULT '',
  `picurl` varchar(150) NOT NULL DEFAULT '',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `levels` tinyint(2) NOT NULL DEFAULT '0',
  `levelstime` int(10) NOT NULL DEFAULT '0',
  `keywords` varchar(100) NOT NULL DEFAULT '',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `lastfid` mediumint(7) NOT NULL DEFAULT '0',
  `money` mediumint(7) NOT NULL DEFAULT '0',
  `begintime` int(10) NOT NULL DEFAULT '0',
  `endtime` int(10) NOT NULL DEFAULT '0',
  `lastview` int(10) NOT NULL DEFAULT '0',
  `totaluser` mediumint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `ispic` (`ispic`),
  KEY `list` (`list`,`fid`,`yz`),
  KEY `hits` (`hits`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=gbk");
E_D("replace into `qb_gift_content` values('21','诺基亚 N86 8MP','1','1','家居用品','18','0','1276250288','1276250288','1','admin','','http://img01.taobaocdn.com/bao/uploaded/i5/T1CPXFXnFdXXX4x0bX_084541.jpg_310x310.jpg','1','1','1','1284360835','','127.0.0.1','0','4000','0','0','1367825455','0');");
E_D("replace into `qb_gift_content` values('22','爱国者数码相框 DPF801D','1','1','家居用品','13','0','1276250366','1276250366','1','admin','','http://img02.taobaocdn.com/bao/uploaded/i2/T1epVOXeRtXXck5mDa_092301.jpg_310x310.jpg','1','1','1','1284360835','','127.0.0.1','0','3000','0','0','1367826970','0');");
E_D("replace into `qb_gift_content` values('23','金士頓 DataTraveler G2(4G)','1','1','家居用品','9','0','1276250386','1276250386','1','admin','','http://img04.taobaocdn.com/bao/uploaded/i8/T1sQJyXd0wXXX6HXPX_113821.jpg_310x310.jpg','1','1','1','1277108878','','127.0.0.1','0','3000','0','0','1367826972','0');");
E_D("replace into `qb_gift_content` values('24','尼康 D90(配18-105mm镜头)','1','1','家居用品','87','0','1276250401','1276250401','1','admin','','http://img03.taobaocdn.com/bao/uploaded/i7/T1NaBpXm4aXXb1upjX.jpg_310x310.jpg','1','1','1','1277108877','','127.0.0.1','0','4000','0','0','1367825457','0');");
E_D("replace into `qb_gift_content` values('25','索尼 VPCEA25EC','1','1','家居用品','19','0','1276250421','1276250421','1','admin','','http://img01.taobaocdn.com/bao/uploaded/i5/T18f4IXjpKXXXXNp.U_013525.jpg_310x310.jpg','1','1','1','1277108877','','127.0.0.1','0','3000','0','0','1367825459','0');");
E_D("replace into `qb_gift_content` values('26','苹果 iPhone 4(16GB)','1','1','家居用品','45','0','1276420607','1276420607','1','admin','','http://img03.taobaocdn.com/bao/uploaded/i3/T1ycVNXeNwXXbBkzgW_023847.jpg_310x310.jpg','1','1','1','1277108876','','127.0.0.1','0','20000','0','0','1367865297','0');");
E_D("replace into `qb_gift_content` values('32','洋基NY,弹力网,棒球帽 网帽面料全封春秋款','1','4','服装配饰','4','0','1288759310','1288759310','1','admin','','http://img02.taobaocdn.com/bao/uploaded/i6/T1xfpCXnXdXXbyndEV_020212.jpg_310x310.jpg','1','1','0','0','','127.0.0.1','0','600','0','0','1367869473','0');");
E_D("replace into `qb_gift_content` values('33','韩版手袋粉嫩公主名媛淑女仿羊皮皮通勤包手提单肩包 0216粉色','1','1','家居用品','6','0','1288759492','1288759492','1','admin','','http://img02.taobaocdn.com/bao/uploaded/i2/T13ihAXcpbXXbahV.Z_030956.jpg_310x310.jpg','1','1','0','0','','127.0.0.1','0','600','0','0','1367869719','0');");
E_D("replace into `qb_gift_content` values('34','威登保罗正品 男 2010新 男包 牛皮 单肩包 男士包 真皮包 包包','1','1','家居用品','4','0','1288759658','1288759658','1','admin','','http://img03.taobaocdn.com/bao/uploaded/i3/T1vyBPXcBkXXcS.5.4_053414.jpg_310x310.jpg','1','1','0','0','','127.0.0.1','0','400','0','0','1367868576','0');");
E_D("replace into `qb_gift_content` values('35','名好记 嗨e点海苔饼干 名好记海苔饼干 整箱9.5斤','1','2','餐饮休闲','5','0','1288759797','1288759797','1','admin','','http://img04.taobaocdn.com/imgextra/i8/T1bQpFXhxyXXb.H8w._113255.jpg_310x310.jpg','1','1','0','0','','127.0.0.1','0','30','0','0','1367940614','0');");
E_D("replace into `qb_gift_content` values('36','韩版秋冬新款三色全棉长袖蕾丝高领打底衫T恤','1','3','文化体育','14','0','1288759968','1288759968','1','admin','','http://img02.taobaocdn.com/imgextra/i6/T1_eFFXoFxXXc.6lg3_051036.jpg_310x310.jpg','1','1','0','0','','127.0.0.1','0','600','0','0','1367938894','0');");
E_D("replace into `qb_gift_content` values('37','蓝色激光标签CASIO卡西欧钢带男手表EF-316D-1A','1','3','文化体育','18','0','1288760072','1288760072','1','admin','','http://img02.taobaocdn.com/imgextra/i6/T1EAXFXnpfXXc8DakZ_031305.jpg_310x310.jpg','1','1','0','0','','127.0.0.1','0','800','0','0','1367937160','0');");
E_D("replace into `qb_gift_content` values('38','原装德国LAMY safari凌美 狩猎者系列钢笔10新款白色','1','3','文化体育','19','0','1288760178','1288760178','1','admin','','http://img01.taobaocdn.com/bao/uploaded/i1/T1PEXJXodhXXa7s9gT_012730.jpg_310x310.jpg','1','1','0','0','','127.0.0.1','0','900','0','0','1367936138','0');");
E_D("replace into `qb_gift_content` values('39','索尼CX150E 高清摄像机 内置16G内存/25X/420万像素 三年保','1','1','家居用品','6','0','1288760299','1288760299','1','admin','','http://img04.taobaocdn.com/bao/uploaded/i4/T1ih8OXddCXXbIgFZY_025314.jpg_310x310.jpg','1','1','0','0','','127.0.0.1','0','9000','0','0','1367898900','0');");
E_D("replace into `qb_gift_content` values('40','诺亚舟电子词典学习机NP360+全新现货配件齐全','1','3','文化体育','11','0','1288760477','1288760477','1','admin','','http://img03.taobaocdn.com/bao/uploaded/i3/T1dnlEXfJXXXcXEXA._081139.jpg_310x310.jpg','1','1','0','0','','127.0.0.1','0','600','0','0','1367933621','0');");

require("../../inc/footer.php");
?>