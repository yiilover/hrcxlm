<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hy_home`;");
E_C("CREATE TABLE `qb_hy_home` (
  `uid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `username` varchar(32) NOT NULL DEFAULT '',
  `style` varchar(32) NOT NULL DEFAULT '',
  `index_left` varchar(248) NOT NULL DEFAULT '',
  `index_right` varchar(248) NOT NULL DEFAULT '',
  `listnum` text NOT NULL,
  `banner` varchar(248) NOT NULL DEFAULT '',
  `bodytpl` varchar(8) NOT NULL DEFAULT 'left',
  `renzheng_show` tinyint(1) NOT NULL DEFAULT '0',
  `visitor` text NOT NULL,
  `hits` mediumint(7) NOT NULL DEFAULT '0',
  `head_menu` text NOT NULL,
  `metatitle` varchar(255) NOT NULL DEFAULT '',
  `metakeywords` varchar(255) NOT NULL DEFAULT '',
  `metadescription` varchar(255) NOT NULL DEFAULT '',
  `page_title` varchar(100) NOT NULL DEFAULT '',
  `page_content` text NOT NULL,
  UNIQUE KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `qb_hy_home` values('30','test4','vip_a4','base,tongji,ck','info,dping','a:7:{s:9:\"guestbook\";s:1:\"4\";s:7:\"visitor\";s:2:\"10\";s:8:\"newslist\";s:2:\"10\";s:10:\"friendlink\";s:2:\"10\";s:10:\"Mguestbook\";s:2:\"10\";s:8:\"Mvisitor\";s:2:\"40\";s:9:\"Mnewslist\";s:2:\"10\";}','','','0','0	101.226.166.226	1382431196\r\n0	220.181.108.153	1382235765\r\n0	182.118.20.170	1382059067\r\n0	182.118.25.232	1381866506\r\n0	182.118.20.212	1381767264\r\n32	test6	1341368589\r\n1	admin	1338887924','18','a:10:{i:0;a:4:{s:5:\"title\";s:8:\"商家首页\";s:3:\"url\";s:1:\"?\";s:5:\"order\";s:2:\"10\";s:6:\"ifshow\";i:1;}i:1;a:4:{s:5:\"title\";s:8:\"商家介绍\";s:3:\"url\";s:7:\"?m=info\";s:5:\"order\";s:1:\"9\";s:6:\"ifshow\";i:1;}i:2;a:4:{s:5:\"title\";s:8:\"商家新闻\";s:3:\"url\";s:7:\"?m=news\";s:5:\"order\";s:1:\"8\";s:6:\"ifshow\";i:1;}i:11;a:4:{s:5:\"title\";s:8:\"商家产品\";s:3:\"url\";s:7:\"?m=shop\";s:5:\"order\";s:1:\"7\";s:6:\"ifshow\";i:1;}i:12;a:4:{s:5:\"title\";s:8:\"促销信息\";s:3:\"url\";s:9:\"?m=coupon\";s:5:\"order\";s:1:\"5\";s:6:\"ifshow\";i:1;}i:13;a:4:{s:5:\"title\";s:8:\"招聘信息\";s:3:\"url\";s:6:\"?m=job\";s:5:\"order\";s:1:\"4\";s:6:\"ifshow\";i:1;}i:14;a:4:{s:5:\"title\";s:8:\"顾客点评\";s:3:\"url\";s:11:\"?m=dianping\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:4;a:4:{s:5:\"title\";s:8:\"图片展示\";s:3:\"url\";s:7:\"?m=pics\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:8;a:4:{s:5:\"title\";s:8:\"联系方式\";s:3:\"url\";s:12:\"?m=contactus\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:1;}i:15;a:4:{s:5:\"title\";s:6:\"独立页\";s:3:\"url\";s:7:\"?m=page\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}}','','','','','');");
E_D("replace into `qb_hy_home` values('29','test3','vip_a3','base,tongji,ck','info,dping','a:7:{s:9:\"guestbook\";s:1:\"4\";s:7:\"visitor\";s:2:\"10\";s:8:\"newslist\";s:2:\"10\";s:10:\"friendlink\";s:2:\"10\";s:10:\"Mguestbook\";s:2:\"10\";s:8:\"Mvisitor\";s:2:\"40\";s:9:\"Mnewslist\";s:2:\"10\";}','','','0','0	182.118.20.201	1382520828\r\n0	192.168.0.107	1352451930\r\n1	admin	1341460147\r\n32	test6	1341368592','21','a:10:{i:0;a:4:{s:5:\"title\";s:8:\"商家首页\";s:3:\"url\";s:1:\"?\";s:5:\"order\";s:2:\"10\";s:6:\"ifshow\";i:1;}i:1;a:4:{s:5:\"title\";s:8:\"商家介绍\";s:3:\"url\";s:7:\"?m=info\";s:5:\"order\";s:1:\"9\";s:6:\"ifshow\";i:1;}i:2;a:4:{s:5:\"title\";s:8:\"商家新闻\";s:3:\"url\";s:7:\"?m=news\";s:5:\"order\";s:1:\"8\";s:6:\"ifshow\";i:1;}i:11;a:4:{s:5:\"title\";s:8:\"商家产品\";s:3:\"url\";s:7:\"?m=shop\";s:5:\"order\";s:1:\"7\";s:6:\"ifshow\";i:1;}i:12;a:4:{s:5:\"title\";s:8:\"促销信息\";s:3:\"url\";s:9:\"?m=coupon\";s:5:\"order\";s:1:\"5\";s:6:\"ifshow\";i:1;}i:13;a:4:{s:5:\"title\";s:8:\"招聘信息\";s:3:\"url\";s:6:\"?m=job\";s:5:\"order\";s:1:\"4\";s:6:\"ifshow\";i:1;}i:14;a:4:{s:5:\"title\";s:8:\"顾客点评\";s:3:\"url\";s:11:\"?m=dianping\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:4;a:4:{s:5:\"title\";s:8:\"图片展示\";s:3:\"url\";s:7:\"?m=pics\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:15;a:4:{s:5:\"title\";s:6:\"独立页\";s:3:\"url\";s:7:\"?m=page\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}i:8;a:4:{s:5:\"title\";s:8:\"联系方式\";s:3:\"url\";s:12:\"?m=contactus\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:1;}}','','','','','');");
E_D("replace into `qb_hy_home` values('28','test2','vip_a2','base,tongji,ck','info,dping','a:7:{s:9:\"guestbook\";s:1:\"4\";s:7:\"visitor\";s:2:\"10\";s:8:\"newslist\";s:2:\"10\";s:10:\"friendlink\";s:2:\"10\";s:10:\"Mguestbook\";s:2:\"10\";s:8:\"Mvisitor\";s:2:\"40\";s:9:\"Mnewslist\";s:2:\"10\";}','','','0','1	admin	1365576097\r\n32	test6	1341368594','18','a:10:{i:0;a:4:{s:5:\"title\";s:8:\"商家首页\";s:3:\"url\";s:1:\"?\";s:5:\"order\";s:2:\"10\";s:6:\"ifshow\";i:1;}i:1;a:4:{s:5:\"title\";s:8:\"商家介绍\";s:3:\"url\";s:7:\"?m=info\";s:5:\"order\";s:1:\"9\";s:6:\"ifshow\";i:1;}i:2;a:4:{s:5:\"title\";s:8:\"商家新闻\";s:3:\"url\";s:7:\"?m=news\";s:5:\"order\";s:1:\"8\";s:6:\"ifshow\";i:1;}i:11;a:4:{s:5:\"title\";s:8:\"商家产品\";s:3:\"url\";s:7:\"?m=shop\";s:5:\"order\";s:1:\"7\";s:6:\"ifshow\";i:1;}i:12;a:4:{s:5:\"title\";s:8:\"促销信息\";s:3:\"url\";s:9:\"?m=coupon\";s:5:\"order\";s:1:\"5\";s:6:\"ifshow\";i:1;}i:13;a:4:{s:5:\"title\";s:8:\"招聘信息\";s:3:\"url\";s:6:\"?m=job\";s:5:\"order\";s:1:\"4\";s:6:\"ifshow\";i:1;}i:14;a:4:{s:5:\"title\";s:8:\"顾客点评\";s:3:\"url\";s:11:\"?m=dianping\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:4;a:4:{s:5:\"title\";s:8:\"图片展示\";s:3:\"url\";s:7:\"?m=pics\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:15;a:4:{s:5:\"title\";s:6:\"独立页\";s:3:\"url\";s:7:\"?m=page\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}i:8;a:4:{s:5:\"title\";s:8:\"联系方式\";s:3:\"url\";s:12:\"?m=contactus\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:1;}}','','','','','');");
E_D("replace into `qb_hy_home` values('27','test1','vip_3','base,tongji,news,ck','info','a:7:{s:9:\"guestbook\";s:1:\"4\";s:7:\"visitor\";s:2:\"10\";s:8:\"newslist\";s:2:\"10\";s:10:\"friendlink\";s:2:\"10\";s:10:\"Mguestbook\";s:2:\"10\";s:9:\"Mnewslist\";s:2:\"10\";s:8:\"Mvisitor\";s:2:\"40\";}','','','0','0	182.118.21.250	1382219089\r\n1	admin	1338888249','42','a:9:{i:0;a:4:{s:5:\"title\";s:8:\"商家首页\";s:3:\"url\";s:1:\"?\";s:5:\"order\";s:2:\"10\";s:6:\"ifshow\";i:1;}i:1;a:4:{s:5:\"title\";s:8:\"商家介绍\";s:3:\"url\";s:7:\"?m=info\";s:5:\"order\";s:1:\"9\";s:6:\"ifshow\";i:1;}i:2;a:4:{s:5:\"title\";s:8:\"商家新闻\";s:3:\"url\";s:7:\"?m=news\";s:5:\"order\";s:1:\"8\";s:6:\"ifshow\";i:1;}i:11;a:4:{s:5:\"title\";s:8:\"商家产品\";s:3:\"url\";s:7:\"?m=shop\";s:5:\"order\";s:1:\"7\";s:6:\"ifshow\";i:1;}i:12;a:4:{s:5:\"title\";s:8:\"促销信息\";s:3:\"url\";s:9:\"?m=coupon\";s:5:\"order\";s:1:\"5\";s:6:\"ifshow\";i:1;}i:13;a:4:{s:5:\"title\";s:8:\"招聘信息\";s:3:\"url\";s:6:\"?m=job\";s:5:\"order\";s:1:\"4\";s:6:\"ifshow\";i:1;}i:4;a:4:{s:5:\"title\";s:8:\"图片展示\";s:3:\"url\";s:7:\"?m=pics\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:14;a:4:{s:5:\"title\";s:8:\"顾客点评\";s:3:\"url\";s:11:\"?m=dianping\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:8;a:4:{s:5:\"title\";s:8:\"联系方式\";s:3:\"url\";s:12:\"?m=contactus\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:1;}}','','','','','');");
E_D("replace into `qb_hy_home` values('31','test5','vip_a5','base,tongji,ck','info,dping','a:7:{s:9:\"guestbook\";s:1:\"4\";s:7:\"visitor\";s:2:\"10\";s:8:\"newslist\";s:2:\"10\";s:10:\"friendlink\";s:2:\"10\";s:10:\"Mguestbook\";s:2:\"10\";s:8:\"Mvisitor\";s:2:\"40\";s:9:\"Mnewslist\";s:2:\"10\";}','','','0','0	101.226.167.254	1382351063\r\n0	123.125.71.27	1382235165\r\n0	66.249.75.224	1382101255\r\n0	66.249.75.225	1382097664\r\n0	66.249.75.222	1382092859\r\n0	66.249.75.226	1382090425\r\n0	101.226.166.230	1382059189\r\n1	admin	1382030692\r\n0	182.118.25.231	1381866506\r\n0	182.118.20.214	1381767264\r\n0	66.249.74.6	1381336880\r\n0	66.249.74.5	1381332417\r\n0	66.249.74.2	1381161678','22','a:10:{i:0;a:4:{s:5:\"title\";s:8:\"商家首页\";s:3:\"url\";s:1:\"?\";s:5:\"order\";s:2:\"10\";s:6:\"ifshow\";i:1;}i:1;a:4:{s:5:\"title\";s:8:\"商家介绍\";s:3:\"url\";s:7:\"?m=info\";s:5:\"order\";s:1:\"9\";s:6:\"ifshow\";i:1;}i:2;a:4:{s:5:\"title\";s:8:\"商家新闻\";s:3:\"url\";s:7:\"?m=news\";s:5:\"order\";s:1:\"8\";s:6:\"ifshow\";i:1;}i:11;a:4:{s:5:\"title\";s:8:\"商家产品\";s:3:\"url\";s:7:\"?m=shop\";s:5:\"order\";s:1:\"7\";s:6:\"ifshow\";i:1;}i:12;a:4:{s:5:\"title\";s:8:\"促销信息\";s:3:\"url\";s:9:\"?m=coupon\";s:5:\"order\";s:1:\"5\";s:6:\"ifshow\";i:1;}i:13;a:4:{s:5:\"title\";s:8:\"招聘信息\";s:3:\"url\";s:6:\"?m=job\";s:5:\"order\";s:1:\"4\";s:6:\"ifshow\";i:1;}i:14;a:4:{s:5:\"title\";s:8:\"顾客点评\";s:3:\"url\";s:11:\"?m=dianping\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:4;a:4:{s:5:\"title\";s:8:\"图片展示\";s:3:\"url\";s:7:\"?m=pics\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:15;a:4:{s:5:\"title\";s:6:\"独立页\";s:3:\"url\";s:7:\"?m=page\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}i:8;a:4:{s:5:\"title\";s:8:\"联系方式\";s:3:\"url\";s:12:\"?m=contactus\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:1;}}','','','','','');");
E_D("replace into `qb_hy_home` values('32','test6','vip_2','base,tongji,ck','info','a:7:{s:9:\"guestbook\";s:1:\"4\";s:7:\"visitor\";s:2:\"10\";s:8:\"newslist\";s:2:\"10\";s:10:\"friendlink\";s:2:\"10\";s:10:\"Mguestbook\";s:2:\"10\";s:8:\"Mvisitor\";s:2:\"40\";s:9:\"Mnewslist\";s:2:\"10\";}','','','0','0	182.118.20.214	1382520828\r\n0	182.118.25.237	1382430730\r\n0	157.55.32.54	1382257561\r\n0	220.181.108.81	1382236165\r\n0	101.226.168.225	1381767054\r\n0	127.0.0.1	1341390356\r\n1	admin	1338886657','21','a:10:{i:0;a:4:{s:5:\"title\";s:8:\"商家首页\";s:3:\"url\";s:1:\"?\";s:5:\"order\";s:2:\"10\";s:6:\"ifshow\";i:1;}i:1;a:4:{s:5:\"title\";s:8:\"商家介绍\";s:3:\"url\";s:7:\"?m=info\";s:5:\"order\";s:1:\"9\";s:6:\"ifshow\";i:1;}i:2;a:4:{s:5:\"title\";s:8:\"商家新闻\";s:3:\"url\";s:7:\"?m=news\";s:5:\"order\";s:1:\"8\";s:6:\"ifshow\";i:1;}i:11;a:4:{s:5:\"title\";s:8:\"商家产品\";s:3:\"url\";s:7:\"?m=shop\";s:5:\"order\";s:1:\"7\";s:6:\"ifshow\";i:1;}i:12;a:4:{s:5:\"title\";s:8:\"促销信息\";s:3:\"url\";s:9:\"?m=coupon\";s:5:\"order\";s:1:\"5\";s:6:\"ifshow\";i:1;}i:13;a:4:{s:5:\"title\";s:8:\"招聘信息\";s:3:\"url\";s:6:\"?m=job\";s:5:\"order\";s:1:\"4\";s:6:\"ifshow\";i:1;}i:4;a:4:{s:5:\"title\";s:8:\"图片展示\";s:3:\"url\";s:7:\"?m=pics\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:14;a:4:{s:5:\"title\";s:8:\"顾客点评\";s:3:\"url\";s:11:\"?m=dianping\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:15;a:4:{s:5:\"title\";s:6:\"独立页\";s:3:\"url\";s:7:\"?m=page\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}i:8;a:4:{s:5:\"title\";s:8:\"联系方式\";s:3:\"url\";s:12:\"?m=contactus\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:1;}}','','','','','');");
E_D("replace into `qb_hy_home` values('33','test7','vip_3','base,tongji,news,ck','info','a:7:{s:9:\"guestbook\";i:4;s:7:\"visitor\";i:10;s:8:\"newslist\";i:10;s:10:\"friendlink\";i:10;s:10:\"Mguestbook\";i:10;s:8:\"Mvisitor\";i:40;s:9:\"Mnewslist\";i:10;}','','left','0','0	157.55.32.188	1382260582\r\n0	220.181.108.109	1382236365\r\n0	66.249.75.229	1382100022\r\n0	66.249.75.221	1382098636\r\n0	66.249.75.226	1382095359\r\n43	sara2	1382020778\r\n0	182.118.22.229	1381767132\r\n0	66.249.74.9	1381336257\r\n0	66.249.74.2	1381161648\r\n1	admin	1364454491\r\n32	test6	1341368584','28','a:9:{i:0;a:4:{s:5:\"title\";s:8:\"商家首页\";s:3:\"url\";s:1:\"?\";s:5:\"order\";s:2:\"10\";s:6:\"ifshow\";i:1;}i:1;a:4:{s:5:\"title\";s:8:\"商家介绍\";s:3:\"url\";s:7:\"?m=info\";s:5:\"order\";s:1:\"9\";s:6:\"ifshow\";i:1;}i:2;a:4:{s:5:\"title\";s:8:\"商家新闻\";s:3:\"url\";s:7:\"?m=news\";s:5:\"order\";s:1:\"8\";s:6:\"ifshow\";i:1;}i:11;a:4:{s:5:\"title\";s:8:\"商家产品\";s:3:\"url\";s:7:\"?m=shop\";s:5:\"order\";s:1:\"7\";s:6:\"ifshow\";i:1;}i:12;a:4:{s:5:\"title\";s:8:\"促销信息\";s:3:\"url\";s:9:\"?m=coupon\";s:5:\"order\";s:1:\"5\";s:6:\"ifshow\";i:1;}i:13;a:4:{s:5:\"title\";s:8:\"招聘信息\";s:3:\"url\";s:6:\"?m=job\";s:5:\"order\";s:1:\"4\";s:6:\"ifshow\";i:1;}i:4;a:4:{s:5:\"title\";s:8:\"图片展示\";s:3:\"url\";s:7:\"?m=pics\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:14;a:4:{s:5:\"title\";s:8:\"顾客点评\";s:3:\"url\";s:11:\"?m=dianping\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:8;a:4:{s:5:\"title\";s:8:\"联系方式\";s:3:\"url\";s:12:\"?m=contactus\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:1;}}','','','','','');");
E_D("replace into `qb_hy_home` values('34','test8','vip_1','base,tongji,news,ck','info','a:7:{s:9:\"guestbook\";i:4;s:7:\"visitor\";i:10;s:8:\"newslist\";i:10;s:10:\"friendlink\";i:10;s:10:\"Mguestbook\";i:10;s:8:\"Mvisitor\";i:40;s:9:\"Mnewslist\";i:10;}','','left','0','0	182.118.20.232	1382629062\r\n0	66.249.74.76	1382405071\r\n0	66.249.74.80	1382403652\r\n0	66.249.74.73	1382398658\r\n0	66.249.74.75	1382398579\r\n0	66.249.74.77	1382394478\r\n0	66.249.74.167	1382355046\r\n0	66.249.73.161	1382256923\r\n0	123.125.71.91	1382235565\r\n0	182.118.21.252	1382219081\r\n0	66.249.73.131	1382202728\r\n0	66.249.73.135	1382201574\r\n0	66.249.73.134	1382193245\r\n0	66.249.73.130	1382183365\r\n0	66.249.75.149	1382165996\r\n0	101.226.166.228	1382059189\r\n0	66.249.75.145	1381828977\r\n0	182.118.20.213	1381767071\r\n0	182.118.22.216	1381767041\r\n0	182.118.20.201	1381766984\r\n0	182.118.22.217	1381766958','67','a:9:{i:0;a:4:{s:5:\"title\";s:8:\"商家首页\";s:3:\"url\";s:1:\"?\";s:5:\"order\";s:2:\"10\";s:6:\"ifshow\";i:1;}i:1;a:4:{s:5:\"title\";s:8:\"商家介绍\";s:3:\"url\";s:7:\"?m=info\";s:5:\"order\";s:1:\"9\";s:6:\"ifshow\";i:1;}i:2;a:4:{s:5:\"title\";s:8:\"商家新闻\";s:3:\"url\";s:7:\"?m=news\";s:5:\"order\";s:1:\"8\";s:6:\"ifshow\";i:1;}i:11;a:4:{s:5:\"title\";s:8:\"商家产品\";s:3:\"url\";s:7:\"?m=shop\";s:5:\"order\";s:1:\"7\";s:6:\"ifshow\";i:1;}i:12;a:4:{s:5:\"title\";s:8:\"促销信息\";s:3:\"url\";s:9:\"?m=coupon\";s:5:\"order\";s:1:\"5\";s:6:\"ifshow\";i:1;}i:13;a:4:{s:5:\"title\";s:8:\"招聘信息\";s:3:\"url\";s:6:\"?m=job\";s:5:\"order\";s:1:\"4\";s:6:\"ifshow\";i:1;}i:4;a:4:{s:5:\"title\";s:8:\"图片展示\";s:3:\"url\";s:7:\"?m=pics\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:14;a:4:{s:5:\"title\";s:8:\"顾客点评\";s:3:\"url\";s:11:\"?m=dianping\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:8;a:4:{s:5:\"title\";s:8:\"联系方式\";s:3:\"url\";s:12:\"?m=contactus\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:1;}}','','','','','');");
E_D("replace into `qb_hy_home` values('35','test9','vip_2','base,tongji,news,ck','info','a:7:{s:9:\"guestbook\";i:4;s:7:\"visitor\";i:10;s:8:\"newslist\";i:10;s:10:\"friendlink\";i:10;s:10:\"Mguestbook\";i:10;s:8:\"Mvisitor\";i:40;s:9:\"Mnewslist\";i:10;}','','left','0','0	182.118.22.203	1383725923\r\n0	183.60.214.62	1382706276\r\n0	182.118.22.210	1382629203\r\n0	101.226.168.225	1382515659\r\n0	101.226.166.215	1382512768\r\n0	66.249.74.90	1382421656\r\n0	66.249.74.82	1382421083\r\n0	66.249.74.77	1382404431\r\n0	66.249.74.74	1382404412\r\n0	66.249.74.76	1382404045\r\n0	66.249.74.73	1382403567\r\n0	66.249.74.81	1382398713\r\n0	66.249.74.80	1382398587\r\n0	66.249.74.165	1382354745\r\n0	101.226.167.237	1382344450\r\n0	220.181.108.149	1382234765\r\n0	66.249.73.132	1382192573\r\n0	66.249.73.130	1382192240\r\n0	66.249.73.135	1382186575\r\n0	66.249.73.134	1382183890\r\n0	182.118.20.170	1382180787','175','a:9:{i:0;a:4:{s:5:\"title\";s:8:\"商家首页\";s:3:\"url\";s:1:\"?\";s:5:\"order\";s:2:\"10\";s:6:\"ifshow\";i:1;}i:1;a:4:{s:5:\"title\";s:8:\"商家介绍\";s:3:\"url\";s:7:\"?m=info\";s:5:\"order\";s:1:\"9\";s:6:\"ifshow\";i:1;}i:2;a:4:{s:5:\"title\";s:8:\"商家新闻\";s:3:\"url\";s:7:\"?m=news\";s:5:\"order\";s:1:\"8\";s:6:\"ifshow\";i:1;}i:11;a:4:{s:5:\"title\";s:8:\"商家产品\";s:3:\"url\";s:7:\"?m=shop\";s:5:\"order\";s:1:\"7\";s:6:\"ifshow\";i:1;}i:12;a:4:{s:5:\"title\";s:8:\"促销信息\";s:3:\"url\";s:9:\"?m=coupon\";s:5:\"order\";s:1:\"5\";s:6:\"ifshow\";i:1;}i:13;a:4:{s:5:\"title\";s:8:\"招聘信息\";s:3:\"url\";s:6:\"?m=job\";s:5:\"order\";s:1:\"4\";s:6:\"ifshow\";i:1;}i:4;a:4:{s:5:\"title\";s:8:\"图片展示\";s:3:\"url\";s:7:\"?m=pics\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:14;a:4:{s:5:\"title\";s:8:\"顾客点评\";s:3:\"url\";s:11:\"?m=dianping\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:8;a:4:{s:5:\"title\";s:8:\"联系方式\";s:3:\"url\";s:12:\"?m=contactus\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:1;}}','','','','','');");
E_D("replace into `qb_hy_home` values('36','test10','vip_3','base,tongji,news,ck','info','a:7:{s:9:\"guestbook\";i:4;s:7:\"visitor\";i:10;s:8:\"newslist\";i:10;s:10:\"friendlink\";i:10;s:10:\"Mguestbook\";i:10;s:8:\"Mvisitor\";i:40;s:9:\"Mnewslist\";i:10;}','','left','0','0	183.60.214.62	1384159978\r\n0	182.118.25.223	1383989299\r\n0	183.60.213.27	1383912982\r\n0	183.60.212.139	1383822131\r\n0	65.55.213.68	1383789198\r\n0	157.55.34.24	1383774976\r\n0	182.118.21.238	1383728346\r\n0	182.118.22.203	1383725923\r\n0	101.226.168.224	1382759678\r\n0	182.118.21.242	1382757317\r\n0	101.226.168.200	1382667218\r\n0	65.55.213.66	1382660496\r\n0	123.125.71.60	1382660335\r\n0	101.226.168.219	1382515659\r\n0	182.118.25.239	1382430730\r\n0	101.226.169.208	1382425102\r\n0	66.249.74.94	1382421660\r\n0	101.226.167.235	1382421426\r\n0	66.249.74.88	1382420957\r\n0	66.249.74.83	1382415085\r\n0	66.249.74.86	1382414944','167','a:9:{i:0;a:4:{s:5:\"title\";s:8:\"商家首页\";s:3:\"url\";s:1:\"?\";s:5:\"order\";s:2:\"10\";s:6:\"ifshow\";i:1;}i:1;a:4:{s:5:\"title\";s:8:\"商家介绍\";s:3:\"url\";s:7:\"?m=info\";s:5:\"order\";s:1:\"9\";s:6:\"ifshow\";i:1;}i:2;a:4:{s:5:\"title\";s:8:\"商家新闻\";s:3:\"url\";s:7:\"?m=news\";s:5:\"order\";s:1:\"8\";s:6:\"ifshow\";i:1;}i:11;a:4:{s:5:\"title\";s:8:\"商家产品\";s:3:\"url\";s:7:\"?m=shop\";s:5:\"order\";s:1:\"7\";s:6:\"ifshow\";i:1;}i:12;a:4:{s:5:\"title\";s:8:\"促销信息\";s:3:\"url\";s:9:\"?m=coupon\";s:5:\"order\";s:1:\"5\";s:6:\"ifshow\";i:1;}i:13;a:4:{s:5:\"title\";s:8:\"招聘信息\";s:3:\"url\";s:6:\"?m=job\";s:5:\"order\";s:1:\"4\";s:6:\"ifshow\";i:1;}i:4;a:4:{s:5:\"title\";s:8:\"图片展示\";s:3:\"url\";s:7:\"?m=pics\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:14;a:4:{s:5:\"title\";s:8:\"顾客点评\";s:3:\"url\";s:11:\"?m=dianping\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:8;a:4:{s:5:\"title\";s:8:\"联系方式\";s:3:\"url\";s:12:\"?m=contactus\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:1;}}','','','','','');");
E_D("replace into `qb_hy_home` values('37','test11','vip_1','base,tongji,news,ck','info','a:7:{s:9:\"guestbook\";i:4;s:7:\"visitor\";i:10;s:8:\"newslist\";i:10;s:10:\"friendlink\";i:10;s:10:\"Mguestbook\";i:10;s:8:\"Mvisitor\";i:40;s:9:\"Mnewslist\";i:10;}','','left','0','0	66.249.66.184	1384013095\r\n0	101.226.166.202	1383794935\r\n0	65.55.213.68	1383789215\r\n0	66.249.75.13	1383756089\r\n0	101.226.168.221	1382759685\r\n0	182.118.20.252	1382757317\r\n0	101.226.168.199	1382667218\r\n0	65.55.213.66	1382660473\r\n0	182.118.22.219	1382426679\r\n0	101.226.169.207	1382425106\r\n0	182.118.20.181	1382422627\r\n0	66.249.74.90	1382421794\r\n0	66.249.74.98	1382420709\r\n0	66.249.74.82	1382419784\r\n0	66.249.74.89	1382419715\r\n0	66.249.74.83	1382419535\r\n0	66.249.74.84	1382414939\r\n0	66.249.74.88	1382414695\r\n0	66.249.74.87	1382414298\r\n0	66.249.74.78	1382403965\r\n0	66.249.74.75	1382403234','344','a:9:{i:0;a:4:{s:5:\"title\";s:8:\"商家首页\";s:3:\"url\";s:1:\"?\";s:5:\"order\";s:2:\"10\";s:6:\"ifshow\";i:1;}i:1;a:4:{s:5:\"title\";s:8:\"商家介绍\";s:3:\"url\";s:7:\"?m=info\";s:5:\"order\";s:1:\"9\";s:6:\"ifshow\";i:1;}i:2;a:4:{s:5:\"title\";s:8:\"商家新闻\";s:3:\"url\";s:7:\"?m=news\";s:5:\"order\";s:1:\"8\";s:6:\"ifshow\";i:1;}i:11;a:4:{s:5:\"title\";s:8:\"商家产品\";s:3:\"url\";s:7:\"?m=shop\";s:5:\"order\";s:1:\"7\";s:6:\"ifshow\";i:1;}i:12;a:4:{s:5:\"title\";s:8:\"促销信息\";s:3:\"url\";s:9:\"?m=coupon\";s:5:\"order\";s:1:\"5\";s:6:\"ifshow\";i:1;}i:13;a:4:{s:5:\"title\";s:8:\"招聘信息\";s:3:\"url\";s:6:\"?m=job\";s:5:\"order\";s:1:\"4\";s:6:\"ifshow\";i:1;}i:4;a:4:{s:5:\"title\";s:8:\"图片展示\";s:3:\"url\";s:7:\"?m=pics\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:14;a:4:{s:5:\"title\";s:8:\"顾客点评\";s:3:\"url\";s:11:\"?m=dianping\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:8;a:4:{s:5:\"title\";s:8:\"联系方式\";s:3:\"url\";s:12:\"?m=contactus\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:1;}}','','','','','');");
E_D("replace into `qb_hy_home` values('40','郑志兴','vip_a1','base,tongji,l_news,ck','info','a:7:{s:9:\"guestbook\";s:1:\"4\";s:7:\"visitor\";s:2:\"10\";s:8:\"newslist\";s:2:\"10\";s:10:\"friendlink\";s:0:\"\";s:10:\"Mguestbook\";s:2:\"10\";s:8:\"Mvisitor\";s:2:\"40\";s:9:\"Mnewslist\";s:2:\"10\";}','','','0','0	66.249.66.181	1383988175\r\n0	65.55.213.68	1383788985\r\n0	182.118.20.201	1383730796\r\n0	182.118.22.203	1383725926\r\n0	65.55.213.66	1382660454\r\n0	182.118.22.219	1382426675\r\n0	182.118.20.180	1382422627\r\n0	66.249.74.92	1382421886\r\n0	66.249.74.98	1382420558\r\n0	66.249.74.94	1382420541\r\n0	66.249.74.99	1382419299\r\n0	66.249.74.93	1382418509\r\n0	66.249.74.96	1382416689\r\n0	66.249.74.74	1382402960\r\n0	157.55.32.219	1382352188\r\n0	101.226.167.252	1382351063\r\n0	66.249.74.34	1382350971\r\n0	182.118.20.223	1382347157\r\n0	66.249.74.35	1382346095\r\n0	66.249.74.29	1382345009\r\n0	101.226.166.252	1382342076','98','a:18:{i:0;a:4:{s:5:\"title\";s:8:\"商家首页\";s:3:\"url\";s:1:\"?\";s:5:\"order\";s:2:\"11\";s:6:\"ifshow\";i:1;}i:1;a:4:{s:5:\"title\";s:8:\"商家介绍\";s:3:\"url\";s:7:\"?m=info\";s:5:\"order\";s:2:\"10\";s:6:\"ifshow\";i:1;}i:2;a:4:{s:5:\"title\";s:8:\"商家新闻\";s:3:\"url\";s:7:\"?m=news\";s:5:\"order\";s:1:\"9\";s:6:\"ifshow\";i:1;}i:4;a:4:{s:5:\"title\";s:8:\"商家产品\";s:3:\"url\";s:7:\"?m=shop\";s:5:\"order\";s:1:\"7\";s:6:\"ifshow\";i:1;}i:5;a:4:{s:5:\"title\";s:8:\"促销信息\";s:3:\"url\";s:9:\"?m=coupon\";s:5:\"order\";s:1:\"5\";s:6:\"ifshow\";i:1;}i:6;a:4:{s:5:\"title\";s:8:\"招聘信息\";s:3:\"url\";s:6:\"?m=job\";s:5:\"order\";s:1:\"4\";s:6:\"ifshow\";i:1;}i:7;a:4:{s:5:\"title\";s:8:\"图片展示\";s:3:\"url\";s:7:\"?m=pics\";s:5:\"order\";s:1:\"3\";s:6:\"ifshow\";i:1;}i:8;a:4:{s:5:\"title\";s:8:\"顾客点评\";s:3:\"url\";s:11:\"?m=dianping\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:3;a:4:{s:5:\"title\";s:8:\"分类信息\";s:3:\"url\";s:9:\"?m=fenlei\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}i:12;a:4:{s:5:\"title\";s:8:\"聚会活动\";s:3:\"url\";s:5:\"?m=tg\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}i:9;a:4:{s:5:\"title\";s:8:\"访客留言\";s:3:\"url\";s:6:\"?m=msg\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}i:11;a:4:{s:5:\"title\";s:6:\"独立页\";s:3:\"url\";s:7:\"?m=page\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}i:10;a:4:{s:5:\"title\";s:8:\"联系方式\";s:3:\"url\";s:12:\"?m=contactus\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:1;}i:15;a:4:{s:5:\"title\";s:8:\"房产信息\";s:3:\"url\";s:9:\"?m=shoptg\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}i:14;a:4:{s:5:\"title\";s:8:\"商家团购\";s:3:\"url\";s:8:\"?m=house\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}i:16;a:4:{s:5:\"title\";s:8:\"商家点评\";s:3:\"url\";s:12:\"?m=dianpings\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}i:17;a:4:{s:5:\"title\";s:8:\"二手信息\";s:3:\"url\";s:8:\"?m=2shou\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}i:13;a:4:{s:5:\"title\";s:8:\"商家礼品\";s:3:\"url\";s:7:\"?m=gift\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}}','','','','','');");
E_D("replace into `qb_hy_home` values('43','sara2','heiglass','base,tongji,l_news,ck','info','a:7:{s:9:\"guestbook\";s:1:\"4\";s:7:\"visitor\";s:2:\"10\";s:8:\"newslist\";s:2:\"10\";s:10:\"friendlink\";s:0:\"\";s:10:\"Mguestbook\";s:2:\"10\";s:8:\"Mvisitor\";s:2:\"40\";s:9:\"Mnewslist\";s:2:\"10\";}','','','0','0	66.249.66.185	1384001067\r\n0	101.226.166.200	1383794931\r\n0	182.118.20.235	1383790607\r\n0	65.55.213.68	1383788988\r\n0	101.226.167.252	1383784459\r\n0	101.226.168.249	1383732511\r\n0	182.118.25.234	1383730433\r\n0	101.226.168.225	1382759678\r\n0	65.55.213.66	1382660483\r\n0	182.118.25.229	1382635215\r\n0	66.249.74.165	1382534326\r\n0	66.249.74.82	1382436647\r\n0	66.249.74.86	1382422126\r\n0	66.249.74.94	1382421200\r\n0	66.249.74.76	1382416835\r\n0	66.249.74.78	1382416828\r\n0	66.249.74.80	1382415894\r\n0	66.249.74.79	1382415773\r\n0	66.249.74.81	1382415230\r\n0	66.249.74.74	1382414956\r\n0	66.249.74.75	1382402691','179','a:18:{i:0;a:4:{s:5:\"title\";s:8:\"商家首页\";s:3:\"url\";s:1:\"?\";s:5:\"order\";s:2:\"11\";s:6:\"ifshow\";i:1;}i:1;a:4:{s:5:\"title\";s:8:\"商家介绍\";s:3:\"url\";s:7:\"?m=info\";s:5:\"order\";s:2:\"10\";s:6:\"ifshow\";i:1;}i:2;a:4:{s:5:\"title\";s:8:\"商家新闻\";s:3:\"url\";s:7:\"?m=news\";s:5:\"order\";s:1:\"9\";s:6:\"ifshow\";i:1;}i:4;a:4:{s:5:\"title\";s:8:\"商家产品\";s:3:\"url\";s:7:\"?m=shop\";s:5:\"order\";s:1:\"7\";s:6:\"ifshow\";i:1;}i:5;a:4:{s:5:\"title\";s:8:\"促销信息\";s:3:\"url\";s:9:\"?m=coupon\";s:5:\"order\";s:1:\"5\";s:6:\"ifshow\";i:1;}i:6;a:4:{s:5:\"title\";s:8:\"招聘信息\";s:3:\"url\";s:6:\"?m=job\";s:5:\"order\";s:1:\"4\";s:6:\"ifshow\";i:1;}i:7;a:4:{s:5:\"title\";s:8:\"图片展示\";s:3:\"url\";s:7:\"?m=pics\";s:5:\"order\";s:1:\"3\";s:6:\"ifshow\";i:1;}i:8;a:4:{s:5:\"title\";s:8:\"顾客点评\";s:3:\"url\";s:11:\"?m=dianping\";s:5:\"order\";s:1:\"2\";s:6:\"ifshow\";i:1;}i:14;a:4:{s:5:\"title\";s:8:\"商家团购\";s:3:\"url\";s:8:\"?m=house\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}i:15;a:4:{s:5:\"title\";s:8:\"房产信息\";s:3:\"url\";s:9:\"?m=shoptg\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}i:17;a:4:{s:5:\"title\";s:8:\"二手信息\";s:3:\"url\";s:8:\"?m=2shou\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}i:13;a:4:{s:5:\"title\";s:8:\"商家礼品\";s:3:\"url\";s:7:\"?m=gift\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}i:16;a:4:{s:5:\"title\";s:8:\"商家点评\";s:3:\"url\";s:12:\"?m=dianpings\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}i:9;a:4:{s:5:\"title\";s:8:\"访客留言\";s:3:\"url\";s:6:\"?m=msg\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}i:3;a:4:{s:5:\"title\";s:8:\"分类信息\";s:3:\"url\";s:9:\"?m=fenlei\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}i:12;a:4:{s:5:\"title\";s:8:\"聚会活动\";s:3:\"url\";s:5:\"?m=tg\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}i:10;a:4:{s:5:\"title\";s:8:\"联系方式\";s:3:\"url\";s:12:\"?m=contactus\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:1;}i:11;a:4:{s:5:\"title\";s:6:\"独立页\";s:3:\"url\";s:7:\"?m=page\";s:5:\"order\";s:1:\"1\";s:6:\"ifshow\";i:0;}}','','','','','');");

require("../../inc/footer.php");
?>