<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_module`;");
E_C("CREATE TABLE `qb_module` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(30) NOT NULL DEFAULT '',
  `pre` varchar(20) NOT NULL DEFAULT '',
  `dirname` varchar(30) NOT NULL DEFAULT '',
  `domain` varchar(100) NOT NULL DEFAULT '',
  `admindir` varchar(20) NOT NULL DEFAULT '',
  `config` text NOT NULL,
  `list` mediumint(5) NOT NULL DEFAULT '0',
  `admingroup` varchar(150) NOT NULL DEFAULT '',
  `adminmember` text NOT NULL,
  `ifclose` tinyint(1) NOT NULL DEFAULT '0',
  `ifsys` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=gbk");
E_D("replace into `qb_module` values('16','2','黄页店铺','hy_','hy','','','a:7:{s:12:\"list_PhpName\";s:18:\"list.php?&fid=\$fid\";s:12:\"show_PhpName\";s:29:\"bencandy.php?&fid=\$fid&id=\$id\";s:8:\"MakeHtml\";N;s:14:\"list_HtmlName1\";N;s:14:\"show_HtmlName1\";N;s:14:\"list_HtmlName2\";N;s:14:\"show_HtmlName2\";N;}','101','','','0','0');");
E_D("replace into `qb_module` values('18','2','留言本','guestbook_','guestbook','','','','0','','','0','0');");
E_D("replace into `qb_module` values('21','2','万能表单','form_','form','','','','0','','','0','0');");
E_D("replace into `qb_module` values('23','2','投票系统','vote_','vote','','','','0','','','1','0');");
E_D("replace into `qb_module` values('24','2','广告系统','ad_','a_d','','','','0','','','1','0');");
E_D("replace into `qb_module` values('26','2','礼品兑换','gift_','gift','','','a:7:{s:12:\"list_PhpName\";s:18:\"list.php?&fid=\$fid\";s:12:\"show_PhpName\";s:29:\"bencandy.php?&fid=\$fid&id=\$id\";s:8:\"MakeHtml\";N;s:14:\"list_HtmlName1\";N;s:14:\"show_HtmlName1\";N;s:14:\"list_HtmlName2\";N;s:14:\"show_HtmlName2\";N;}','75','','','1','0');");
E_D("replace into `qb_module` values('27','2','优惠促销','coupon_','coupon','','','a:7:{s:12:\"list_PhpName\";s:18:\"list.php?&fid=\$fid\";s:12:\"show_PhpName\";s:29:\"bencandy.php?&fid=\$fid&id=\$id\";s:8:\"MakeHtml\";N;s:14:\"list_HtmlName1\";N;s:14:\"show_HtmlName1\";N;s:14:\"list_HtmlName2\";N;s:14:\"show_HtmlName2\";N;}','74','','','1','0');");
E_D("replace into `qb_module` values('28','2','聚会活动','tuangou_','tg','','','a:7:{s:12:\"list_PhpName\";s:18:\"list.php?&fid=\$fid\";s:12:\"show_PhpName\";s:29:\"bencandy.php?&fid=\$fid&id=\$id\";s:8:\"MakeHtml\";N;s:14:\"list_HtmlName1\";N;s:14:\"show_HtmlName1\";N;s:14:\"list_HtmlName2\";N;s:14:\"show_HtmlName2\";N;}','78','','','0','0');");
E_D("replace into `qb_module` values('29','2','商城系统','shop_','shop','','','a:7:{s:12:\"list_PhpName\";s:18:\"list.php?&fid=\$fid\";s:12:\"show_PhpName\";s:29:\"bencandy.php?&fid=\$fid&id=\$id\";s:8:\"MakeHtml\";N;s:14:\"list_HtmlName1\";N;s:14:\"show_HtmlName1\";N;s:14:\"list_HtmlName2\";N;s:14:\"show_HtmlName2\";N;}','79','','','0','0');");
E_D("replace into `qb_module` values('36','2','分类系统','fenlei_','f','','','a:7:{s:12:\"list_PhpName\";s:18:\"list.php?&fid=\$fid\";s:12:\"show_PhpName\";s:29:\"bencandy.php?&fid=\$fid&id=\$id\";s:8:\"MakeHtml\";N;s:14:\"list_HtmlName1\";N;s:14:\"show_HtmlName1\";N;s:14:\"list_HtmlName2\";N;s:14:\"show_HtmlName2\";N;}','80','','','0','0');");
E_D("replace into `qb_module` values('31','2','人才招聘','hr_','hr','','','a:7:{s:12:\"list_PhpName\";s:18:\"list.php?&fid=\$fid\";s:12:\"show_PhpName\";s:29:\"bencandy.php?&fid=\$fid&id=\$id\";s:8:\"MakeHtml\";N;s:14:\"list_HtmlName1\";N;s:14:\"show_HtmlName1\";N;s:14:\"list_HtmlName2\";N;s:14:\"show_HtmlName2\";N;}','76','','','1','0');");
E_D("replace into `qb_module` values('37','2','商家团购','shoptg_','shoptg','','','a:7:{s:12:\"list_PhpName\";s:18:\"list.php?&fid=\$fid\";s:12:\"show_PhpName\";s:29:\"bencandy.php?&fid=\$fid&id=\$id\";s:8:\"MakeHtml\";N;s:14:\"list_HtmlName1\";N;s:14:\"show_HtmlName1\";N;s:14:\"list_HtmlName2\";N;s:14:\"show_HtmlName2\";N;}','77','','','1','0');");
E_D("replace into `qb_module` values('20','2','资讯频道','news_','news','','','a:7:{s:12:\"list_PhpName\";s:18:\"list.php?&fid=\$fid\";s:12:\"show_PhpName\";s:29:\"bencandy.php?&fid=\$fid&id=\$id\";s:8:\"MakeHtml\";N;s:14:\"list_HtmlName1\";N;s:14:\"show_HtmlName1\";N;s:14:\"list_HtmlName2\";N;s:14:\"show_HtmlName2\";N;}','102','','','0','1');");
E_D("replace into `qb_module` values('38','2','房产频道','house_','house','','','a:7:{s:12:\"list_PhpName\";s:18:\"list.php?&fid=\$fid\";s:12:\"show_PhpName\";s:29:\"bencandy.php?&fid=\$fid&id=\$id\";s:8:\"MakeHtml\";N;s:14:\"list_HtmlName1\";N;s:14:\"show_HtmlName1\";N;s:14:\"list_HtmlName2\";N;s:14:\"show_HtmlName2\";N;}','73','','','1','0');");
E_D("replace into `qb_module` values('39','2','点评频道','dianping_','dianping','','','a:7:{s:12:\"list_PhpName\";s:18:\"list.php?&fid=\$fid\";s:12:\"show_PhpName\";s:29:\"bencandy.php?&fid=\$fid&id=\$id\";s:8:\"MakeHtml\";N;s:14:\"list_HtmlName1\";N;s:14:\"show_HtmlName1\";N;s:14:\"list_HtmlName2\";N;s:14:\"show_HtmlName2\";N;}','71','','','1','0');");
E_D("replace into `qb_module` values('40','2','二手市场','2shou_','2shou','','','a:7:{s:12:\"list_PhpName\";s:18:\"list.php?&fid=\$fid\";s:12:\"show_PhpName\";s:29:\"bencandy.php?&fid=\$fid&id=\$id\";s:8:\"MakeHtml\";N;s:14:\"list_HtmlName1\";N;s:14:\"show_HtmlName1\";N;s:14:\"list_HtmlName2\";N;s:14:\"show_HtmlName2\";N;}','72','','','1','0');");
E_D("replace into `qb_module` values('50','2','装修频道','zhuangxiu_','zhuangxiu','','','a:7:{s:12:\"list_PhpName\";s:18:\"list.php?&fid=\$fid\";s:12:\"show_PhpName\";s:29:\"bencandy.php?&fid=\$fid&id=\$id\";s:8:\"MakeHtml\";N;s:14:\"list_HtmlName1\";N;s:14:\"show_HtmlName1\";N;s:14:\"list_HtmlName2\";N;s:14:\"show_HtmlName2\";N;}','70','','','1','0');");
E_D("replace into `qb_module` values('51','2','微分享','wei_','wei','','','a:7:{s:12:\"list_PhpName\";s:18:\"list.php?&fid=\$fid\";s:12:\"show_PhpName\";s:29:\"bencandy.php?&fid=\$fid&id=\$id\";s:8:\"MakeHtml\";N;s:14:\"list_HtmlName1\";N;s:14:\"show_HtmlName1\";N;s:14:\"list_HtmlName2\";N;s:14:\"show_HtmlName2\";N;}','102','','','1','0');");
E_D("replace into `qb_module` values('35','2','求购模型','buy_','buy','','','a:7:{s:12:\"list_PhpName\";s:18:\"list.php?&fid=\$fid\";s:12:\"show_PhpName\";s:29:\"bencandy.php?&fid=\$fid&id=\$id\";s:8:\"MakeHtml\";N;s:14:\"list_HtmlName1\";N;s:14:\"show_HtmlName1\";N;s:14:\"list_HtmlName2\";N;s:14:\"show_HtmlName2\";N;}','99','','','0','0');");
E_D("replace into `qb_module` values('34','2','供应模型','sell_','sell','','','a:7:{s:12:\"list_PhpName\";s:18:\"list.php?&fid=\$fid\";s:12:\"show_PhpName\";s:29:\"bencandy.php?&fid=\$fid&id=\$id\";s:8:\"MakeHtml\";N;s:14:\"list_HtmlName1\";N;s:14:\"show_HtmlName1\";N;s:14:\"list_HtmlName2\";N;s:14:\"show_HtmlName2\";N;}','100','','','0','0');");
E_D("replace into `qb_module` values('32','2','展会展览馆','showroom_','showroom','','','a:7:{s:12:\"list_PhpName\";s:18:\"list.php?&fid=\$fid\";s:12:\"show_PhpName\";s:29:\"bencandy.php?&fid=\$fid&id=\$id\";s:8:\"MakeHtml\";N;s:14:\"list_HtmlName1\";N;s:14:\"show_HtmlName1\";N;s:14:\"list_HtmlName2\";N;s:14:\"show_HtmlName2\";N;}','97','','','0','0');");
E_D("replace into `qb_module` values('33','2','品牌模块','brand_','brand','','','a:7:{s:12:\"list_PhpName\";s:18:\"list.php?&fid=\$fid\";s:12:\"show_PhpName\";s:29:\"bencandy.php?&fid=\$fid&id=\$id\";s:8:\"MakeHtml\";N;s:14:\"list_HtmlName1\";N;s:14:\"show_HtmlName1\";N;s:14:\"list_HtmlName2\";N;s:14:\"show_HtmlName2\";N;}','96','','','0','0');");

require("../../inc/footer.php");
?>