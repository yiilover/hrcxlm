<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_zhuangxiu_config`;");
E_C("CREATE TABLE `qb_zhuangxiu_config` (
  `c_key` varchar(50) NOT NULL DEFAULT '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY (`c_key`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `qb_zhuangxiu_config` values('Info_webOpen','1','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_allowViewList','4','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_allowViewContent','3','');");
E_D("replace into `qb_zhuangxiu_config` values('Limit_postOne','0','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_allowpost','2','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_contact','','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_titleName','姓名','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_allowsearch','2,8','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_DelEndtime','0','');");
E_D("replace into `qb_zhuangxiu_config` values('CollectArticleNum','','');");
E_D("replace into `qb_zhuangxiu_config` values('PostInfoMoney','','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_metakeywords','','');");
E_D("replace into `qb_zhuangxiu_config` values('module_id','50','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_areaname','','');");
E_D("replace into `qb_zhuangxiu_config` values('Private_tpl_foot','','');");
E_D("replace into `qb_zhuangxiu_config` values('rand_num_mktime','','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_TopNum','5','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_TopDay','10','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_TopMoney','100','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_TopColor','#FF0000','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_GroupCommentYzImg','','');");
E_D("replace into `qb_zhuangxiu_config` values('GroupPassYz','','');");
E_D("replace into `qb_zhuangxiu_config` values('ForbidPostIp','','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_cityPost','0','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_forbidOutPost','0','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_MemberPostRepeat','0','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_MemberPostPicNum','20','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_MemberDayPostNum','','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_GuestPostPicNum','0','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_GuestDayPostNum','0','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_GuestPostRepeat','0','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_MemberPostMoney','1','');");
E_D("replace into `qb_zhuangxiu_config` values('ForbidPostMember','','');");
E_D("replace into `qb_zhuangxiu_config` values('GroupPostInfo','2','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_ClosePostWhy','','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_ClosePost','0','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_GroupPostYzImg','','');");
E_D("replace into `qb_zhuangxiu_config` values('Private_tpl_head','','');");
E_D("replace into `qb_zhuangxiu_config` values('IF_Private_tpl','0','');");
E_D("replace into `qb_zhuangxiu_config` values('group_view_contact','3,9,10','');");
E_D("replace into `qb_zhuangxiu_config` values('Post_group_UpPhoto','3,8,9,10','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_ReportDB','虚假信息\r\n过期信息\r\n违法信息','');");
E_D("replace into `qb_zhuangxiu_config` values('UpdatePostTime','','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_showday','','');");
E_D("replace into `qb_zhuangxiu_config` values('if_GGmap','1','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_ShowNoYz','0','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_UseEndTime','0','');");
E_D("replace into `qb_zhuangxiu_config` values('postHireHouseQy','0','');");
E_D("replace into `qb_zhuangxiu_config` values('postSellHouseNeedQy','0','');");
E_D("replace into `qb_zhuangxiu_config` values('postLouPanNeedQy','0','');");
E_D("replace into `qb_zhuangxiu_config` values('module_pre','zhuangxiu_','');");
E_D("replace into `qb_zhuangxiu_config` values('module_close','0','');");
E_D("replace into `qb_zhuangxiu_config` values('SEO_description','','');");
E_D("replace into `qb_zhuangxiu_config` values('SEO_keywords','','');");
E_D("replace into `qb_zhuangxiu_config` values('SEO_title','','');");
E_D("replace into `qb_zhuangxiu_config` values('Info_webname','装修频道','');");

require("../../inc/footer.php");
?>