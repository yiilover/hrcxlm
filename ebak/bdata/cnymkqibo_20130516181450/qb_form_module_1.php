<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_form_module`;");
E_C("CREATE TABLE `qb_form_module` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `list` smallint(4) NOT NULL DEFAULT '0',
  `style` varchar(50) NOT NULL DEFAULT '',
  `config` mediumtext NOT NULL,
  `allowpost` varchar(255) NOT NULL DEFAULT '',
  `endtime` int(10) NOT NULL DEFAULT '0',
  `about` text NOT NULL,
  `usetitle` tinyint(1) NOT NULL DEFAULT '0',
  `repeatpost` tinyint(1) NOT NULL DEFAULT '0',
  `statename` varchar(30) NOT NULL DEFAULT '',
  `allowview` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `qb_form_module` values('1','版主申请','0','','a:3:{s:8:\"field_db\";a:8:{s:8:\"sortname\";a:14:{s:5:\"title\";s:18:\"申请哪个栏目的版主\";s:10:\"field_name\";s:8:\"sortname\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:40;s:9:\"form_type\";s:8:\"checkbox\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:38:\"新闻频道\r\n下载频道\r\n图片频道\r\n视频频道\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"0\";s:9:\"orderlist\";s:2:\"11\";s:9:\"allowview\";N;}s:7:\"webtime\";a:15:{s:5:\"title\";s:16:\"每天上网几个小时\";s:10:\"field_name\";s:7:\"webtime\";s:10:\"field_type\";s:3:\"int\";s:10:\"field_leng\";i:10;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:1:\"4\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:4:\"小时\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:2:\"10\";s:9:\"allowview\";N;}s:8:\"truename\";a:15:{s:5:\"title\";s:8:\"真实姓名\";s:10:\"field_name\";s:8:\"truename\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:20;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:1:\"7\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"9\";s:9:\"allowview\";N;}s:3:\"sex\";a:15:{s:5:\"title\";s:4:\"性别\";s:10:\"field_name\";s:3:\"sex\";s:10:\"field_type\";s:3:\"int\";s:10:\"field_leng\";i:1;s:9:\"form_type\";s:5:\"radio\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:18:\"1|男\r\n2|女\r\n0|保密\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"8\";s:9:\"allowview\";N;}s:4:\"oicq\";a:15:{s:5:\"title\";s:6:\"联系QQ\";s:10:\"field_name\";s:4:\"oicq\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:10;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"10\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";i:7;s:9:\"allowview\";N;}s:8:\"mobphone\";a:14:{s:5:\"title\";s:8:\"手机号码\";s:10:\"field_name\";s:8:\"mobphone\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:11;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"11\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";i:6;s:9:\"allowview\";N;}s:8:\"interest\";a:14:{s:5:\"title\";s:8:\"兴趣爱好\";s:10:\"field_name\";s:8:\"interest\";s:10:\"field_type\";s:10:\"mediumtext\";s:10:\"field_leng\";i:0;s:9:\"form_type\";s:8:\"textarea\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";i:5;s:9:\"allowview\";N;}s:9:\"introduce\";a:14:{s:5:\"title\";s:8:\"自我介绍\";s:10:\"field_name\";s:9:\"introduce\";s:10:\"field_type\";s:10:\"mediumtext\";s:10:\"field_leng\";i:0;s:9:\"form_type\";s:8:\"textarea\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";i:4;s:9:\"allowview\";N;}}s:7:\"is_html\";a:1:{s:7:\"content\";s:4:\"内容\";}s:11:\"listshow_db\";a:2:{s:8:\"truename\";s:8:\"真实姓名\";s:3:\"sex\";s:4:\"性别\";}}','3,4,8,9','0','<p><strong>如果你有激情,有梦想,就来申请做我们的版主吧!</strong></p>','0','0','审批','');");
E_D("replace into `qb_form_module` values('3','投诉建议','0','','a:4:{s:8:\"field_db\";a:5:{s:10:\"advicetype\";a:15:{s:5:\"title\";s:8:\"投诉类型\";s:10:\"field_name\";s:10:\"advicetype\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:30;s:9:\"form_type\";s:5:\"radio\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:34:\"售前客服\r\n售后客服\r\n产品质量\r\n其它\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"1\";s:9:\"orderlist\";s:2:\"10\";s:9:\"allowview\";N;}s:8:\"mobphone\";a:15:{s:5:\"title\";s:8:\"你的电话\";s:10:\"field_name\";s:8:\"mobphone\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:25;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"15\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"8\";s:9:\"allowview\";N;}s:5:\"email\";a:14:{s:5:\"title\";s:8:\"你的邮箱\";s:10:\"field_name\";s:5:\"email\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:50;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"15\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";i:7;s:9:\"allowview\";N;}s:7:\"content\";a:15:{s:5:\"title\";s:8:\"投诉内容\";s:10:\"field_name\";s:7:\"content\";s:10:\"field_type\";s:10:\"mediumtext\";s:10:\"field_leng\";i:0;s:9:\"form_type\";s:8:\"textarea\";s:15:\"field_inputleng\";s:0:\"\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"0\";s:6:\"search\";s:1:\"0\";s:9:\"orderlist\";s:1:\"6\";s:9:\"allowview\";N;}s:8:\"truename\";a:15:{s:5:\"title\";s:8:\"你的称呼\";s:10:\"field_name\";s:8:\"truename\";s:10:\"field_type\";s:7:\"varchar\";s:10:\"field_leng\";i:15;s:9:\"form_type\";s:4:\"text\";s:15:\"field_inputleng\";s:2:\"10\";s:8:\"form_set\";s:0:\"\";s:10:\"form_value\";s:0:\"\";s:10:\"form_units\";s:0:\"\";s:10:\"form_title\";s:0:\"\";s:8:\"mustfill\";s:1:\"1\";s:8:\"listshow\";s:1:\"1\";s:6:\"search\";s:1:\"1\";s:9:\"orderlist\";s:1:\"8\";s:9:\"allowview\";N;}}s:7:\"is_html\";a:0:{}s:11:\"listshow_db\";a:2:{s:10:\"advicetype\";s:8:\"投诉类型\";s:8:\"truename\";s:8:\"你的称呼\";}s:9:\"search_db\";a:2:{s:10:\"advicetype\";s:8:\"投诉类型\";s:8:\"truename\";s:8:\"你的称呼\";}}','','0','\r\n\r\n\r\n\r\n','0','1','处理','');");

require("../../inc/footer.php");
?>