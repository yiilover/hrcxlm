<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_wei_config`;");
E_C("CREATE TABLE `qb_wei_config` (
  `c_key` varchar(50) NOT NULL DEFAULT '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY (`c_key`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `qb_wei_config` values('wei_fid','3','');");
E_D("replace into `qb_wei_config` values('Info_ShowCommentRows','0','');");
E_D("replace into `qb_wei_config` values('Info_webOpen','1','');");
E_D("replace into `qb_wei_config` values('Info_adminfen','','');");
E_D("replace into `qb_wei_config` values('GroupPostjumpurl','3,4','');");
E_D("replace into `qb_wei_config` values('GroupPostIframe','3,4','');");
E_D("replace into `qb_wei_config` values('Info_PassCommentType','1','');");
E_D("replace into `qb_wei_config` values('UseArea','0','');");
E_D("replace into `qb_wei_config` values('Info_forbidOutPost','0','');");
E_D("replace into `qb_wei_config` values('Info_closeWhy','','');");
E_D("replace into `qb_wei_config` values('module_close','0','');");
E_D("replace into `qb_wei_config` values('GroupPostYZ','3,4,8','');");
E_D("replace into `qb_wei_config` values('Info_PostCommentType','1','');");
E_D("replace into `qb_wei_config` values('module_pre','wei_','');");
E_D("replace into `qb_wei_config` values('Info_metakeywords','','');");
E_D("replace into `qb_wei_config` values('Info_GroupPostYZ','3,8,9,10','');");
E_D("replace into `qb_wei_config` values('allowGroupPost','3,8,9,10','');");
E_D("replace into `qb_wei_config` values('SEO_description','�������������ص������¼������ص��ȵ㻰�⡢���ص����ﶯ̬�����صĲ�Ʒ��Ѷ��,�����˽����ǵ����½�չ��','');");
E_D("replace into `qb_wei_config` values('SEO_keywords','������ֵ,�ḻ����','');");
E_D("replace into `qb_wei_config` values('SEO_title','΢����','');");
E_D("replace into `qb_wei_config` values('module_id','51','');");
E_D("replace into `qb_wei_config` values('Info_webname','΢����ϵͳ','');");
E_D("replace into `qb_wei_config` values('Info_ShowIndexRows','50','');");

require("../../inc/footer.php");
?>