<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_group`;");
E_C("CREATE TABLE `qb_group` (
  `gid` smallint(4) NOT NULL AUTO_INCREMENT,
  `gptype` tinyint(1) NOT NULL DEFAULT '0',
  `grouptitle` varchar(50) NOT NULL DEFAULT '',
  `levelnum` mediumint(7) NOT NULL DEFAULT '0',
  `totalspace` int(10) NOT NULL DEFAULT '0',
  `allowsearch` tinyint(1) NOT NULL DEFAULT '0',
  `powerdb` text NOT NULL,
  `allowadmin` tinyint(1) NOT NULL DEFAULT '0',
  `allowadmindb` text,
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk");
E_D("replace into `qb_group` values('2','1','游客组','0','0','0','a:54:{s:10:\"upfileType\";s:0:\"\";s:13:\"upfileMaxSize\";s:0:\"\";s:14:\"PassContribute\";s:1:\"1\";s:17:\"SearchArticleType\";s:1:\"1\";s:16:\"PostArticleYzImg\";s:1:\"1\";s:13:\"EditPassPower\";s:1:\"0\";s:12:\"SetTileColor\";s:1:\"0\";s:14:\"SetSellArticle\";s:1:\"0\";s:17:\"SetSpecialArticle\";s:1:\"0\";s:17:\"SetArticleKeyword\";s:1:\"0\";s:20:\"AddArticleKeywordNum\";s:0:\"\";s:21:\"AddArticleCopyfromNum\";s:0:\"\";s:18:\"SelectArticleStyle\";s:1:\"0\";s:16:\"SelectArticleTpl\";s:1:\"0\";s:13:\"SetArticleTpl\";s:1:\"0\";s:18:\"SetArticlePosttime\";s:1:\"0\";s:18:\"SetArticleViewtime\";s:1:\"0\";s:16:\"SetArticleHitNum\";s:1:\"0\";s:18:\"SetArticlePassword\";s:1:\"0\";s:19:\"SetArticleDownGroup\";s:1:\"0\";s:19:\"SetArticleViewGroup\";s:1:\"0\";s:17:\"SetArticleJumpurl\";s:1:\"0\";s:19:\"SetArticleIframeurl\";s:1:\"0\";s:21:\"SetArticleDescription\";s:1:\"0\";s:16:\"SetArticleTopCom\";s:1:\"0\";s:13:\"SetSmallTitle\";s:1:\"0\";s:19:\"CommentArticleYzImg\";s:1:\"1\";s:17:\"CollectArticleNum\";s:0:\"\";s:15:\"CreatSpecialNum\";s:0:\"\";s:13:\"PostNoDelCode\";s:1:\"0\";s:7:\"SetVote\";s:1:\"0\";s:11:\"SetHtmlName\";s:1:\"0\";s:16:\"PassContributeSP\";s:1:\"0\";s:14:\"AllowUploadMax\";s:1:\"0\";s:11:\"comment_num\";s:2:\"10\";s:10:\"comment_yz\";s:1:\"1\";s:11:\"comment_img\";s:1:\"0\";s:16:\"sell_postauto_yz\";s:1:\"0\";s:15:\"buy_postauto_yz\";s:1:\"0\";s:15:\"post_pingpai_yz\";s:1:\"0\";s:10:\"use2domain\";s:1:\"0\";s:16:\"useHomepageStyle\";s:1:\"0\";s:21:\"view_buy_view_contact\";s:1:\"0\";s:13:\"post_sell_num\";s:0:\"\";s:12:\"post_buy_num\";s:0:\"\";s:13:\"post_news_num\";s:0:\"\";s:14:\"post_photo_num\";s:0:\"\";s:11:\"post_hr_num\";s:0:\"\";s:17:\"post_zhanghui_num\";s:0:\"\";s:12:\"post_ZLG_num\";s:0:\"\";s:16:\"post_pingpai_num\";s:0:\"\";s:19:\"post_baojiadian_num\";s:0:\"\";s:19:\"post_xunjiadian_num\";s:0:\"\";s:24:\"post_info_collection_num\";s:0:\"\";}','0','');");
E_D("replace into `qb_group` values('3','1','超级管理员','0','0','0','a:42:{s:10:\"upfileType\";s:0:\"\";s:13:\"upfileMaxSize\";s:0:\"\";s:14:\"PassContribute\";s:1:\"1\";s:13:\"EditPassPower\";s:1:\"0\";s:14:\"AllowUploadMax\";s:1:\"1\";s:11:\"comment_num\";s:3:\"999\";s:10:\"comment_yz\";s:1:\"1\";s:11:\"comment_img\";s:1:\"1\";s:16:\"sell_postauto_yz\";s:1:\"0\";s:15:\"buy_postauto_yz\";s:1:\"0\";s:15:\"post_pingpai_yz\";s:1:\"0\";s:10:\"use2domain\";s:1:\"1\";s:16:\"useHomepageStyle\";s:1:\"1\";s:21:\"view_buy_view_contact\";s:1:\"0\";s:13:\"post_sell_num\";s:0:\"\";s:12:\"post_buy_num\";s:0:\"\";s:13:\"post_news_num\";s:3:\"999\";s:14:\"post_photo_num\";s:3:\"999\";s:11:\"post_hr_num\";s:3:\"999\";s:17:\"post_zhanghui_num\";s:0:\"\";s:12:\"post_ZLG_num\";s:0:\"\";s:16:\"post_pingpai_num\";s:0:\"\";s:19:\"post_baojiadian_num\";s:0:\"\";s:19:\"post_xunjiadian_num\";s:0:\"\";s:24:\"post_info_collection_num\";s:3:\"999\";s:18:\"allow_get_homepage\";s:1:\"1\";s:18:\"shoptg_postauto_yz\";s:1:\"1\";s:16:\"shop_postauto_yz\";s:1:\"1\";s:14:\"tg_postauto_yz\";s:1:\"1\";s:14:\"post_coupon_yz\";s:1:\"1\";s:15:\"post_shoptg_num\";s:3:\"999\";s:13:\"post_shop_num\";s:3:\"999\";s:11:\"post_tg_num\";s:3:\"999\";s:15:\"post_coupon_num\";s:3:\"999\";s:13:\"post_gift_num\";s:3:\"999\";s:13:\"postNewsYzImg\";s:1:\"0\";s:13:\"postShopYzImg\";s:1:\"0\";s:11:\"postTgYzImg\";s:1:\"0\";s:15:\"postShopTgYzImg\";s:1:\"0\";s:11:\"postHrYzImg\";s:1:\"0\";s:15:\"postCouponYzImg\";s:1:\"0\";s:13:\"view_hy_money\";s:0:\"\";}','1','a:181:{s:13:\"center_config\";s:1:\"1\";s:8:\"user_reg\";s:1:\"1\";s:9:\"city_zone\";s:1:\"1\";s:11:\"module_list\";s:1:\"1\";s:9:\"hack_list\";s:1:\"1\";s:9:\"blend_set\";s:1:\"1\";s:14:\"friendlink_mod\";s:1:\"1\";s:14:\"alonepage_list\";s:1:\"1\";s:9:\"mysql_out\";s:1:\"1\";s:10:\"mysql_into\";s:1:\"1\";s:9:\"mysql_del\";s:1:\"1\";s:9:\"mysql_sql\";s:1:\"1\";s:9:\"menu_list\";s:1:\"1\";s:14:\"adminmenu_list\";s:1:\"1\";s:15:\"membermenu_list\";s:1:\"1\";s:11:\"member_list\";s:1:\"1\";s:14:\"member_qy_list\";s:1:\"1\";s:10:\"member_rmb\";s:1:\"1\";s:12:\"company_list\";s:1:\"1\";s:8:\"regfield\";s:1:\"1\";s:16:\"member_addmember\";s:1:\"1\";s:10:\"group_list\";s:1:\"1\";s:16:\"group_list_admin\";s:1:\"1\";s:9:\"group_add\";s:1:\"1\";s:22:\"LaneLead_EasyCollector\";s:1:\"1\";s:10:\"rmb_infull\";s:1:\"1\";s:10:\"rmb_getout\";s:1:\"1\";s:11:\"rmb_consume\";s:1:\"1\";s:10:\"alipay_set\";s:1:\"1\";s:14:\"moneycard_make\";s:1:\"1\";s:8:\"moneylog\";s:1:\"1\";s:14:\"limitword_list\";s:1:\"1\";s:7:\"js_list\";s:1:\"1\";s:12:\"propagandize\";s:1:\"1\";s:11:\"jfadmin_mod\";s:1:\"1\";s:15:\"attachment_list\";s:1:\"1\";s:10:\"upgrade_ol\";s:1:\"1\";s:14:\"sell_telephone\";s:1:\"1\";s:12:\"message_send\";s:1:\"1\";s:9:\"mail_send\";s:1:\"1\";s:8:\"sms_send\";s:1:\"1\";s:8:\"cnzz_set\";s:1:\"1\";s:5:\"login\";s:1:\"1\";s:8:\"adminmap\";s:1:\"1\";s:7:\"crontab\";s:1:\"1\";s:15:\"style_editstyle\";s:1:\"1\";s:10:\"labelstyle\";s:1:\"1\";s:13:\"template_list\";s:1:\"1\";s:15:\"logs_login_logs\";s:1:\"1\";s:18:\"logs_admin_do_logs\";s:1:\"1\";s:25:\"Module_news_center_config\";s:1:\"1\";s:24:\"Module_news_center_label\";s:1:\"1\";s:21:\"Module_news_sort_post\";s:1:\"1\";s:16:\"Module_news_list\";s:1:\"1\";s:19:\"Module_news_comment\";s:1:\"1\";s:25:\"Module_news_sort_listsort\";s:1:\"1\";s:19:\"Module_news_keyword\";s:1:\"1\";s:24:\"Module_wei_center_config\";s:1:\"1\";s:23:\"Module_wei_center_label\";s:1:\"1\";s:20:\"Module_wei_sort_post\";s:1:\"1\";s:15:\"Module_wei_list\";s:1:\"1\";s:18:\"Module_wei_comment\";s:1:\"1\";s:24:\"Module_wei_sort_listsort\";s:1:\"1\";s:18:\"Module_wei_keyword\";s:1:\"1\";s:23:\"Module_hy_center_config\";s:1:\"1\";s:14:\"Module_hy_sort\";s:1:\"1\";s:17:\"Module_hy_company\";s:1:\"1\";s:18:\"Module_hy_dianping\";s:1:\"1\";s:17:\"Module_hy_comment\";s:1:\"1\";s:18:\"Module_hy_renzheng\";s:1:\"1\";s:22:\"Module_hy_center_label\";s:1:\"1\";s:21:\"Module_hy_companynews\";s:1:\"1\";s:20:\"Module_hy_companypic\";s:1:\"1\";s:27:\"Module_fenlei_center_config\";s:1:\"1\";s:27:\"Module_fenlei_center_settpl\";s:1:\"1\";s:22:\"Module_fenlei_autopass\";s:1:\"1\";s:26:\"Module_fenlei_center_label\";s:1:\"1\";s:18:\"Module_fenlei_list\";s:1:\"1\";s:21:\"Module_fenlei_comment\";s:1:\"1\";s:22:\"Module_fenlei_dianping\";s:1:\"1\";s:18:\"Module_fenlei_sort\";s:1:\"1\";s:20:\"Module_fenlei_module\";s:1:\"1\";s:23:\"Module_fenlei_fieldsort\";s:1:\"1\";s:20:\"Module_fenlei_report\";s:1:\"1\";s:21:\"Module_fenlei_replace\";s:1:\"1\";s:25:\"Module_shop_center_config\";s:1:\"1\";s:24:\"Module_shop_center_label\";s:1:\"1\";s:16:\"Module_shop_list\";s:1:\"1\";s:19:\"Module_shop_comment\";s:1:\"1\";s:16:\"Module_shop_sort\";s:1:\"1\";s:18:\"Module_shop_report\";s:1:\"1\";s:17:\"Module_shop_order\";s:1:\"1\";s:18:\"Module_shop_module\";s:1:\"1\";s:21:\"Module_shop_monthsell\";s:1:\"1\";s:28:\"Module_tuangou_center_config\";s:1:\"1\";s:27:\"Module_tuangou_center_label\";s:1:\"1\";s:19:\"Module_tuangou_list\";s:1:\"1\";s:19:\"Module_tuangou_sort\";s:1:\"1\";s:19:\"Module_tuangou_join\";s:1:\"1\";s:22:\"Module_tuangou_comment\";s:1:\"1\";s:21:\"Module_tuangou_module\";s:1:\"1\";s:27:\"Module_shoptg_center_config\";s:1:\"1\";s:26:\"Module_shoptg_center_label\";s:1:\"1\";s:18:\"Module_shoptg_list\";s:1:\"1\";s:21:\"Module_shoptg_comment\";s:1:\"1\";s:18:\"Module_shoptg_sort\";s:1:\"1\";s:19:\"Module_shoptg_order\";s:1:\"1\";s:20:\"Module_shoptg_module\";s:1:\"1\";s:23:\"Module_hr_center_config\";s:1:\"1\";s:22:\"Module_hr_center_label\";s:1:\"1\";s:14:\"Module_hr_sort\";s:1:\"1\";s:14:\"Module_hr_list\";s:1:\"1\";s:18:\"Module_hr_joinlist\";s:1:\"1\";s:20:\"Module_hr_collection\";s:1:\"1\";s:16:\"Module_hr_module\";s:1:\"1\";s:25:\"Module_gift_center_config\";s:1:\"1\";s:24:\"Module_gift_center_label\";s:1:\"1\";s:16:\"Module_gift_list\";s:1:\"1\";s:16:\"Module_gift_sort\";s:1:\"1\";s:16:\"Module_gift_join\";s:1:\"1\";s:18:\"Module_gift_module\";s:1:\"1\";s:27:\"Module_coupon_center_config\";s:1:\"1\";s:26:\"Module_coupon_center_label\";s:1:\"1\";s:18:\"Module_coupon_list\";s:1:\"1\";s:18:\"Module_coupon_sort\";s:1:\"1\";s:20:\"Module_coupon_module\";s:1:\"1\";s:26:\"Module_house_center_config\";s:1:\"1\";s:21:\"Module_house_autopass\";s:1:\"1\";s:25:\"Module_house_center_label\";s:1:\"1\";s:17:\"Module_house_list\";s:1:\"1\";s:20:\"Module_house_comment\";s:1:\"1\";s:19:\"Module_house_module\";s:1:\"1\";s:19:\"Module_house_report\";s:1:\"1\";s:20:\"Module_house_replace\";s:1:\"1\";s:26:\"Module_2shou_center_config\";s:1:\"1\";s:26:\"Module_2shou_center_settpl\";s:1:\"1\";s:21:\"Module_2shou_autopass\";s:1:\"1\";s:25:\"Module_2shou_center_label\";s:1:\"1\";s:17:\"Module_2shou_list\";s:1:\"1\";s:20:\"Module_2shou_comment\";s:1:\"1\";s:17:\"Module_2shou_sort\";s:1:\"1\";s:19:\"Module_2shou_module\";s:1:\"1\";s:22:\"Module_2shou_fieldsort\";s:1:\"1\";s:19:\"Module_2shou_report\";s:1:\"1\";s:20:\"Module_2shou_replace\";s:1:\"1\";s:29:\"Module_dianping_center_config\";s:1:\"1\";s:29:\"Module_dianping_center_settpl\";s:1:\"1\";s:24:\"Module_dianping_autopass\";s:1:\"1\";s:28:\"Module_dianping_center_label\";s:1:\"1\";s:20:\"Module_dianping_list\";s:1:\"1\";s:24:\"Module_dianping_dianping\";s:1:\"1\";s:20:\"Module_dianping_sort\";s:1:\"1\";s:22:\"Module_dianping_module\";s:1:\"1\";s:25:\"Module_dianping_fieldsort\";s:1:\"1\";s:22:\"Module_dianping_report\";s:1:\"1\";s:23:\"Module_dianping_replace\";s:1:\"1\";s:21:\"Module_dianping_claim\";s:1:\"1\";s:30:\"Module_zhuangxiu_center_config\";s:1:\"1\";s:25:\"Module_zhuangxiu_autopass\";s:1:\"1\";s:29:\"Module_zhuangxiu_center_label\";s:1:\"1\";s:21:\"Module_zhuangxiu_list\";s:1:\"1\";s:24:\"Module_zhuangxiu_comment\";s:1:\"1\";s:23:\"Module_zhuangxiu_module\";s:1:\"1\";s:23:\"Module_zhuangxiu_report\";s:1:\"1\";s:24:\"Module_zhuangxiu_replace\";s:1:\"1\";s:23:\"Module_guestbook_center\";s:1:\"1\";s:21:\"Module_guestbook_sort\";s:1:\"1\";s:24:\"Module_guestbook_content\";s:1:\"1\";s:18:\"Module_form_center\";s:1:\"1\";s:23:\"Module_form_form_module\";s:1:\"1\";s:24:\"Module_form_form_content\";s:1:\"1\";s:18:\"Module_vote_center\";s:1:\"1\";s:20:\"Module_vote_vote_add\";s:1:\"1\";s:21:\"Module_vote_vote_list\";s:1:\"1\";s:24:\"Module_vote_comment_list\";s:1:\"1\";s:16:\"Module_ad_center\";s:1:\"1\";s:21:\"Module_ad_norm_listad\";s:1:\"1\";s:25:\"Module_ad_norm_listuserad\";s:1:\"1\";s:24:\"Module_ad_compete_listad\";s:1:\"1\";s:26:\"Module_ad_compete_listuser\";s:1:\"1\";s:6:\"mymenu\";N;}');");
E_D("replace into `qb_group` values('8','0','普通会员','0','50','0','a:71:{s:10:\"upfileType\";s:0:\"\";s:13:\"upfileMaxSize\";s:0:\"\";s:14:\"PassContribute\";s:1:\"1\";s:13:\"EditPassPower\";s:1:\"0\";s:17:\"SearchArticleType\";s:1:\"1\";s:12:\"SetTileColor\";s:1:\"0\";s:14:\"SetSellArticle\";s:1:\"0\";s:13:\"SetSmallTitle\";s:1:\"0\";s:17:\"SetSpecialArticle\";s:1:\"1\";s:17:\"SetArticleKeyword\";s:1:\"1\";s:20:\"AddArticleKeywordNum\";s:1:\"0\";s:16:\"PostArticleYzImg\";s:1:\"0\";s:21:\"AddArticleCopyfromNum\";s:1:\"0\";s:16:\"SelectArticleTpl\";s:1:\"0\";s:13:\"SetArticleTpl\";s:1:\"0\";s:18:\"SelectArticleStyle\";s:1:\"0\";s:18:\"SetArticlePosttime\";s:1:\"0\";s:18:\"SetArticleViewtime\";s:1:\"0\";s:16:\"SetArticleHitNum\";s:1:\"0\";s:18:\"SetArticlePassword\";s:1:\"0\";s:19:\"SetArticleDownGroup\";s:1:\"0\";s:19:\"SetArticleViewGroup\";s:1:\"0\";s:17:\"SetArticleJumpurl\";s:1:\"0\";s:19:\"SetArticleIframeurl\";s:1:\"0\";s:21:\"SetArticleDescription\";s:1:\"0\";s:16:\"SetArticleTopCom\";s:1:\"0\";s:17:\"CollectArticleNum\";s:2:\"30\";s:15:\"CreatSpecialNum\";s:1:\"7\";s:19:\"CommentArticleYzImg\";s:1:\"1\";s:11:\"SetHtmlName\";s:1:\"0\";s:7:\"SetVote\";s:1:\"1\";s:16:\"PassContributeSP\";s:1:\"0\";s:13:\"PostNoDelCode\";s:1:\"0\";s:14:\"AllowUploadMax\";s:1:\"0\";s:11:\"comment_num\";s:0:\"\";s:10:\"comment_yz\";s:1:\"0\";s:11:\"comment_img\";s:1:\"0\";s:16:\"sell_postauto_yz\";s:1:\"1\";s:15:\"buy_postauto_yz\";s:1:\"1\";s:15:\"post_pingpai_yz\";s:1:\"1\";s:10:\"use2domain\";s:1:\"0\";s:16:\"useHomepageStyle\";s:1:\"1\";s:21:\"view_buy_view_contact\";s:1:\"0\";s:13:\"post_sell_num\";s:1:\"5\";s:12:\"post_buy_num\";s:1:\"5\";s:13:\"post_news_num\";s:1:\"5\";s:14:\"post_photo_num\";s:2:\"10\";s:11:\"post_hr_num\";s:1:\"5\";s:17:\"post_zhanghui_num\";s:1:\"5\";s:12:\"post_ZLG_num\";s:1:\"0\";s:16:\"post_pingpai_num\";s:1:\"5\";s:19:\"post_baojiadian_num\";s:1:\"5\";s:19:\"post_xunjiadian_num\";s:1:\"5\";s:24:\"post_info_collection_num\";s:2:\"30\";s:18:\"allow_get_homepage\";s:1:\"1\";s:16:\"shop_postauto_yz\";s:1:\"1\";s:14:\"tg_postauto_yz\";s:1:\"1\";s:14:\"post_coupon_yz\";s:1:\"0\";s:13:\"post_shop_num\";s:1:\"5\";s:11:\"post_tg_num\";s:1:\"3\";s:15:\"post_coupon_num\";s:1:\"3\";s:13:\"post_gift_num\";s:1:\"0\";s:18:\"shoptg_postauto_yz\";s:1:\"0\";s:15:\"post_shoptg_num\";s:0:\"\";s:13:\"postNewsYzImg\";s:1:\"1\";s:13:\"view_hy_money\";s:0:\"\";s:13:\"postShopYzImg\";s:1:\"1\";s:11:\"postTgYzImg\";s:1:\"1\";s:15:\"postShopTgYzImg\";s:1:\"1\";s:11:\"postHrYzImg\";s:1:\"1\";s:15:\"postCouponYzImg\";s:1:\"1\";}','0','');");
E_D("replace into `qb_group` values('9','0','VIP会员','10000','0','0','a:70:{s:17:\"SearchArticleType\";s:1:\"0\";s:16:\"PostArticleYzImg\";s:1:\"0\";s:14:\"PassContribute\";s:1:\"1\";s:13:\"EditPassPower\";s:1:\"0\";s:12:\"SetTileColor\";s:1:\"0\";s:14:\"SetSellArticle\";s:1:\"0\";s:17:\"SetSpecialArticle\";s:1:\"0\";s:17:\"SetArticleKeyword\";s:1:\"0\";s:20:\"AddArticleKeywordNum\";s:0:\"\";s:21:\"AddArticleCopyfromNum\";s:0:\"\";s:18:\"SelectArticleStyle\";s:1:\"0\";s:16:\"SelectArticleTpl\";s:1:\"0\";s:13:\"SetArticleTpl\";s:1:\"0\";s:18:\"SetArticlePosttime\";s:1:\"0\";s:18:\"SetArticleViewtime\";s:1:\"0\";s:16:\"SetArticleHitNum\";s:1:\"0\";s:18:\"SetArticlePassword\";s:1:\"0\";s:19:\"SetArticleDownGroup\";s:1:\"0\";s:19:\"SetArticleViewGroup\";s:1:\"0\";s:17:\"SetArticleJumpurl\";s:1:\"0\";s:19:\"SetArticleIframeurl\";s:1:\"0\";s:21:\"SetArticleDescription\";s:1:\"0\";s:16:\"SetArticleTopCom\";s:1:\"0\";s:13:\"SetSmallTitle\";s:1:\"0\";s:19:\"CommentArticleYzImg\";s:1:\"0\";s:17:\"CollectArticleNum\";s:0:\"\";s:15:\"CreatSpecialNum\";s:0:\"\";s:14:\"AllowUploadMax\";s:1:\"0\";s:10:\"upfileType\";s:0:\"\";s:13:\"upfileMaxSize\";s:0:\"\";s:11:\"comment_num\";s:2:\"30\";s:10:\"comment_yz\";s:1:\"0\";s:11:\"comment_img\";s:1:\"1\";s:16:\"sell_postauto_yz\";s:1:\"1\";s:15:\"buy_postauto_yz\";s:1:\"1\";s:15:\"post_pingpai_yz\";s:1:\"1\";s:10:\"use2domain\";s:1:\"1\";s:16:\"useHomepageStyle\";s:1:\"1\";s:21:\"view_buy_view_contact\";s:1:\"1\";s:9:\"topmyinfo\";s:0:\"\";s:12:\"topmyinfoday\";s:0:\"\";s:13:\"topcompanyday\";s:0:\"\";s:13:\"post_sell_num\";s:2:\"50\";s:12:\"post_buy_num\";s:2:\"50\";s:13:\"post_news_num\";s:2:\"50\";s:14:\"post_photo_num\";s:3:\"100\";s:11:\"post_hr_num\";s:2:\"20\";s:17:\"post_zhanghui_num\";s:2:\"20\";s:12:\"post_ZLG_num\";s:1:\"5\";s:19:\"post_baojiadian_num\";s:2:\"50\";s:19:\"post_xunjiadian_num\";s:2:\"50\";s:16:\"post_pingpai_num\";s:2:\"10\";s:24:\"post_info_collection_num\";s:3:\"100\";s:18:\"allow_get_homepage\";s:1:\"1\";s:16:\"shop_postauto_yz\";s:1:\"1\";s:14:\"tg_postauto_yz\";s:1:\"1\";s:14:\"post_coupon_yz\";s:1:\"1\";s:13:\"post_shop_num\";s:3:\"100\";s:11:\"post_tg_num\";s:2:\"50\";s:15:\"post_coupon_num\";s:2:\"50\";s:13:\"post_gift_num\";s:1:\"0\";s:13:\"postNewsYzImg\";s:1:\"0\";s:13:\"postShopYzImg\";s:1:\"0\";s:11:\"postTgYzImg\";s:1:\"0\";s:15:\"postShopTgYzImg\";s:1:\"0\";s:11:\"postHrYzImg\";s:1:\"0\";s:15:\"postCouponYzImg\";s:1:\"0\";s:18:\"shoptg_postauto_yz\";s:1:\"0\";s:15:\"post_shoptg_num\";s:0:\"\";s:13:\"view_hy_money\";s:0:\"\";}','0','');");
E_D("replace into `qb_group` values('10','0','钻石会员','30000','0','0','a:57:{s:17:\"SearchArticleType\";s:1:\"0\";s:19:\"CommentArticleYzImg\";s:1:\"0\";s:17:\"CollectArticleNum\";s:0:\"\";s:15:\"CreatSpecialNum\";s:0:\"\";s:16:\"PassContributeSP\";s:1:\"0\";s:16:\"PostArticleYzImg\";s:1:\"0\";s:14:\"PassContribute\";s:1:\"1\";s:13:\"EditPassPower\";s:1:\"0\";s:13:\"PostNoDelCode\";s:1:\"0\";s:7:\"SetVote\";s:1:\"0\";s:12:\"SetTileColor\";s:1:\"0\";s:14:\"SetSellArticle\";s:1:\"0\";s:18:\"SelectArticleStyle\";s:1:\"0\";s:16:\"SelectArticleTpl\";s:1:\"0\";s:13:\"SetArticleTpl\";s:1:\"0\";s:18:\"SetArticlePosttime\";s:1:\"0\";s:18:\"SetArticleViewtime\";s:1:\"0\";s:16:\"SetArticleHitNum\";s:1:\"0\";s:18:\"SetArticlePassword\";s:1:\"0\";s:19:\"SetArticleDownGroup\";s:1:\"0\";s:19:\"SetArticleViewGroup\";s:1:\"0\";s:17:\"SetArticleJumpurl\";s:1:\"0\";s:19:\"SetArticleIframeurl\";s:1:\"0\";s:21:\"SetArticleDescription\";s:1:\"0\";s:16:\"SetArticleTopCom\";s:1:\"0\";s:11:\"SetHtmlName\";s:1:\"0\";s:14:\"AllowUploadMax\";s:1:\"0\";s:10:\"upfileType\";s:0:\"\";s:13:\"upfileMaxSize\";s:0:\"\";s:11:\"comment_num\";s:0:\"\";s:10:\"comment_yz\";s:1:\"1\";s:11:\"comment_img\";s:1:\"1\";s:16:\"sell_postauto_yz\";s:1:\"1\";s:15:\"buy_postauto_yz\";s:1:\"1\";s:15:\"post_pingpai_yz\";s:1:\"1\";s:10:\"use2domain\";s:1:\"1\";s:16:\"useHomepageStyle\";s:1:\"1\";s:21:\"view_buy_view_contact\";s:1:\"1\";s:13:\"post_sell_num\";s:3:\"100\";s:12:\"post_buy_num\";s:3:\"100\";s:13:\"post_news_num\";s:3:\"100\";s:14:\"post_photo_num\";s:3:\"100\";s:11:\"post_hr_num\";s:3:\"100\";s:17:\"post_zhanghui_num\";s:3:\"100\";s:12:\"post_ZLG_num\";s:2:\"10\";s:16:\"post_pingpai_num\";s:2:\"10\";s:19:\"post_baojiadian_num\";s:3:\"100\";s:19:\"post_xunjiadian_num\";s:3:\"100\";s:24:\"post_info_collection_num\";s:3:\"300\";s:18:\"allow_get_homepage\";s:1:\"1\";s:16:\"shop_postauto_yz\";s:1:\"1\";s:14:\"tg_postauto_yz\";s:1:\"1\";s:14:\"post_coupon_yz\";s:1:\"1\";s:13:\"post_shop_num\";s:3:\"200\";s:11:\"post_tg_num\";s:3:\"100\";s:15:\"post_coupon_num\";s:2:\"50\";s:13:\"post_gift_num\";s:1:\"1\";}','0','');");

require("../../inc/footer.php");
?>