<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_2shou_config`;");
E_C("CREATE TABLE `qb_2shou_config` (
  `c_key` varchar(50) NOT NULL DEFAULT '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY (`c_key`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `qb_2shou_config` values('AdInfoListLeng','40','');");
E_D("replace into `qb_2shou_config` values('Info_PostMaxNum','20','');");
E_D("replace into `qb_2shou_config` values('Info_TopNum','5','');");
E_D("replace into `qb_2shou_config` values('AdInfoSortShow','10','');");
E_D("replace into `qb_2shou_config` values('AdInfoShowTime','100','');");
E_D("replace into `qb_2shou_config` values('Info_feedbackID','111111','');");
E_D("replace into `qb_2shou_config` values('Info_MakeIndexHtmlTime','0','');");
E_D("replace into `qb_2shou_config` values('ErrSortMoney','13','');");
E_D("replace into `qb_2shou_config` values('Info_DelKeyword','����\r\n����','');");
E_D("replace into `qb_2shou_config` values('Info_PostMaxLeng','100000','');");
E_D("replace into `qb_2shou_config` values('Info_RepeatPostNum','3','');");
E_D("replace into `qb_2shou_config` values('Info_postCkMob','0','');");
E_D("replace into `qb_2shou_config` values('Info_postCkIp','0','');");
E_D("replace into `qb_2shou_config` values('DelOtherCommentMoney','12','');");
E_D("replace into `qb_2shou_config` values('otherCardMoney','11','');");
E_D("replace into `qb_2shou_config` values('permitMoney','10','');");
E_D("replace into `qb_2shou_config` values('IDcardMoney','9','');");
E_D("replace into `qb_2shou_config` values('EmailYzMoney','8','');");
E_D("replace into `qb_2shou_config` values('ReportMoney','7','');");
E_D("replace into `qb_2shou_config` values('GoodCommentMoney','6','');");
E_D("replace into `qb_2shou_config` values('PublicizeRegMoney','5','');");
E_D("replace into `qb_2shou_config` values('ALLInfoMoney','4','');");
E_D("replace into `qb_2shou_config` values('Info_loginTime','16','');");
E_D("replace into `qb_2shou_config` values('Info_loginMoney','3','');");
E_D("replace into `qb_2shou_config` values('Info_regmoney','1','');");
E_D("replace into `qb_2shou_config` values('illInfoMoney','14','');");
E_D("replace into `qb_2shou_config` values('DelReportMoney','15','');");
E_D("replace into `qb_2shou_config` values('Jump_allcity','0','');");
E_D("replace into `qb_2shou_config` values('Jump_fromarea','1','');");
E_D("replace into `qb_2shou_config` values('Info_TopMoney','3','');");
E_D("replace into `qb_2shou_config` values('Info_closeWhy','��վά������,��ͣ����','');");
E_D("replace into `qb_2shou_config` values('sort_layout','10,9,150,165#2,4#1,5,3#6,7,8#','');");
E_D("replace into `qb_2shou_config` values('ForbidPostMember','','');");
E_D("replace into `qb_2shou_config` values('Info_weburl','','');");
E_D("replace into `qb_2shou_config` values('Info_cityPost','0','');");
E_D("replace into `qb_2shou_config` values('AdInfoIndexLeng','','');");
E_D("replace into `qb_2shou_config` values('Info_ForbidMemberViewContact','0','');");
E_D("replace into `qb_2shou_config` values('Info_ShowSearchContact','0','');");
E_D("replace into `qb_2shou_config` values('Info_ImgShopContact','0','');");
E_D("replace into `qb_2shou_config` values('Info_ForbidGuesViewContact','0','');");
E_D("replace into `qb_2shou_config` values('Info_TopDay','2','');");
E_D("replace into `qb_2shou_config` values('Info_forbidOutPost','1','');");
E_D("replace into `qb_2shou_config` values('AdInfoBigsortShow','15','');");
E_D("replace into `qb_2shou_config` values('InfoIndexCSRow','','');");
E_D("replace into `qb_2shou_config` values('Force_Choose_City','0','');");
E_D("replace into `qb_2shou_config` values('post_htmlType','0','');");
E_D("replace into `qb_2shou_config` values('Info_Searchkeyword','0','');");
E_D("replace into `qb_2shou_config` values('Post_group_UpPhoto','','');");
E_D("replace into `qb_2shou_config` values('GroupPostInfo','2','');");
E_D("replace into `qb_2shou_config` values('Info_MemberPostRepeat','0','');");
E_D("replace into `qb_2shou_config` values('Info_GuestPostRepeat','0','');");
E_D("replace into `qb_2shou_config` values('Info_MemberPostMoney','2','');");
E_D("replace into `qb_2shou_config` values('InfoIndexLeng','26','');");
E_D("replace into `qb_2shou_config` values('InfoIndexRow','8','');");
E_D("replace into `qb_2shou_config` values('InfoListRow','10','');");
E_D("replace into `qb_2shou_config` values('AdInfoIndexRow','16','');");
E_D("replace into `qb_2shou_config` values('group_UpPhoto','','');");
E_D("replace into `qb_2shou_config` values('Info_index_cache','','');");
E_D("replace into `qb_2shou_config` values('Info_list_cache','','');");
E_D("replace into `qb_2shou_config` values('Info_guide_word','','');");
E_D("replace into `qb_2shou_config` values('Info_MemberPostPicNum','','');");
E_D("replace into `qb_2shou_config` values('Info_MemberDayPostNum','20','');");
E_D("replace into `qb_2shou_config` values('Info_GuestPostPicNum','','');");
E_D("replace into `qb_2shou_config` values('Info_GuestDayPostNum','3','');");
E_D("replace into `qb_2shou_config` values('Info_YzKeyword_DO','0','');");
E_D("replace into `qb_2shou_config` values('CommentPass_group','3,4','');");
E_D("replace into `qb_2shou_config` values('Info_htmlType','0','');");
E_D("replace into `qb_2shou_config` values('Info_allcityType','1','');");
E_D("replace into `qb_2shou_config` values('Info_MemberChooseCity','1','');");
E_D("replace into `qb_2shou_config` values('Info_sys','0','');");
E_D("replace into `qb_2shou_config` values('Info_ClosePostWhy','�ϴ�ʱ��,��ͣ�������޸���Ϣ','');");
E_D("replace into `qb_2shou_config` values('Info_style','','');");
E_D("replace into `qb_2shou_config` values('Info_webOpen','1','');");
E_D("replace into `qb_2shou_config` values('Info_htmlname','html','');");
E_D("replace into `qb_2shou_config` values('Info_contact','010-88888888\r\nkefu@gmail.com\r\nkefu@msn.com\r\n88888888','');");
E_D("replace into `qb_2shou_config` values('AdInfoIndexShow','20','');");
E_D("replace into `qb_2shou_config` values('Info_ClosePost','0','');");
E_D("replace into `qb_2shou_config` values('Info_TopColor','#F70968','');");
E_D("replace into `qb_2shou_config` values('Info_Musttelephone','0','');");
E_D("replace into `qb_2shou_config` values('Info_Mustmobphone','0','');");
E_D("replace into `qb_2shou_config` values('Info_MustQQ','0','');");
E_D("replace into `qb_2shou_config` values('Info_MustEmail','0','');");
E_D("replace into `qb_2shou_config` values('InfoIndexCSLeng','','');");
E_D("replace into `qb_2shou_config` values('Info_showsortnum','','');");
E_D("replace into `qb_2shou_config` values('Info_ListNum','','');");
E_D("replace into `qb_2shou_config` values('AdInfoListRow','10','');");
E_D("replace into `qb_2shou_config` values('InfoListLeng','30','');");
E_D("replace into `qb_2shou_config` values('showNoPassComment','0','');");
E_D("replace into `qb_2shou_config` values('Info_YzKeyword','�԰�\r\n����\r\n������','');");
E_D("replace into `qb_2shou_config` values('rand_num','1364282433','');");
E_D("replace into `qb_2shou_config` values('rand_num_inputname','XA','');");
E_D("replace into `qb_2shou_config` values('UpdatePostTime','3','');");
E_D("replace into `qb_2shou_config` values('Info_webadmin','','');");
E_D("replace into `qb_2shou_config` values('Info_showday','3/10/30/60/90/180','');");
E_D("replace into `qb_2shou_config` values('Info_allowGuesSearch','0','');");
E_D("replace into `qb_2shou_config` values('if_GGmap','1','');");
E_D("replace into `qb_2shou_config` values('Info_ShowNoYz','1','');");
E_D("replace into `qb_2shou_config` values('Info_DelEndtime','0','');");
E_D("replace into `qb_2shou_config` values('module_close','1','');");
E_D("replace into `qb_2shou_config` values('Info_areaname','ȫ��','');");
E_D("replace into `qb_2shou_config` values('Info_UseEndTime','1','');");
E_D("replace into `qb_2shou_config` values('CollectArticleNum','23','');");
E_D("replace into `qb_2shou_config` values('PostInfoMoney','2','');");
E_D("replace into `qb_2shou_config` values('module_pre','2shou_','');");
E_D("replace into `qb_2shou_config` values('Info_description','�ṩ���µĶ��ֽ�����Ϣ','');");
E_D("replace into `qb_2shou_config` values('Info_metakeywords','����������� ���ֵ��Գ���','');");
E_D("replace into `qb_2shou_config` values('module_id','40','');");
E_D("replace into `qb_2shou_config` values('Info_webname','�����г�','');");
E_D("replace into `qb_2shou_config` values('Info_ReportDB','������Ϣ\r\n�����Ϣ\r\nΥ����Ϣ\r\n��ͬ��Ϣ','');");
E_D("replace into `qb_2shou_config` values('rand_num_mktime','1','');");
E_D("replace into `qb_2shou_config` values('IF_Private_tpl','0','');");
E_D("replace into `qb_2shou_config` values('Private_tpl_head','','');");
E_D("replace into `qb_2shou_config` values('Private_tpl_foot','','');");
E_D("replace into `qb_2shou_config` values('ForbidPostIp','','');");
E_D("replace into `qb_2shou_config` values('Info_GroupPostYzImg','2,8,9','');");
E_D("replace into `qb_2shou_config` values('Info_GroupCommentYzImg','2,8,9','');");
E_D("replace into `qb_2shou_config` values('GroupPassYz','','');");

require("../../inc/footer.php");
?>