<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_news_config`;");
E_C("CREATE TABLE `qb_news_config` (
  `c_key` varchar(50) NOT NULL DEFAULT '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY (`c_key`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `qb_news_config` values('module_close','0','');");
E_D("replace into `qb_news_config` values('Info_webOpen','1','');");
E_D("replace into `qb_news_config` values('Info_adminfen','','');");
E_D("replace into `qb_news_config` values('GroupPostjumpurl','3,4','');");
E_D("replace into `qb_news_config` values('GroupPostIframe','3,4','');");
E_D("replace into `qb_news_config` values('allowGroupPost','3','');");
E_D("replace into `qb_news_config` values('UseArea','0','');");
E_D("replace into `qb_news_config` values('Info_forbidOutPost','0','');");
E_D("replace into `qb_news_config` values('Info_closeWhy','','');");
E_D("replace into `qb_news_config` values('Info_GroupPostYZ','3','');");
E_D("replace into `qb_news_config` values('GroupPostYZ','3,4,8','');");
E_D("replace into `qb_news_config` values('module_pre','news_','');");
E_D("replace into `qb_news_config` values('module_id','20','');");
E_D("replace into `qb_news_config` values('Info_PostCommentType','1','');");
E_D("replace into `qb_news_config` values('topArticleMoney','2','');");
E_D("replace into `qb_news_config` values('frontArticleMoney','1','');");
E_D("replace into `qb_news_config` values('comArticleMoney','5','');");
E_D("replace into `qb_news_config` values('deleteArticleMoney','-2','');");
E_D("replace into `qb_news_config` values('postArticleMoney','2','');");
E_D("replace into `qb_news_config` values('Info_description','','');");
E_D("replace into `qb_news_config` values('Info_metakeywords','','');");
E_D("replace into `qb_news_config` values('SEO_description','中国华人诚信联盟资讯频道是一个为广大华人诚信联盟民和客家人提供一个时效性强,内容丰富,是了解赣州的最佳网上窗口.','');");
E_D("replace into `qb_news_config` values('SEO_keywords','赣州,客家,客家人,华人诚信联盟,赣州新闻,赣州新闻网,中国赣州,中国·赣州,客家赣州,赣南,赣州新闻,赣南新闻,赣南日报,赣州晚报','');");
E_D("replace into `qb_news_config` values('SEO_title','赣州资讯-了解赣州的最佳网上窗口.','');");
E_D("replace into `qb_news_config` values('Info_webname','赣州资讯频道','');");
E_D("replace into `qb_news_config` values('Info_PassCommentType','1','');");
E_D("replace into `qb_news_config` values('Info_ShowCommentRows','0','');");
E_D("replace into `qb_news_config` values('IF_Private_tpl','0','');");
E_D("replace into `qb_news_config` values('Private_tpl_head','','');");
E_D("replace into `qb_news_config` values('Private_tpl_foot','','');");

require("../../inc/footer.php");
?>