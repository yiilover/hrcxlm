<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_showroom_field`;");
E_C("CREATE TABLE `qb_showroom_field` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `mid` mediumint(5) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL DEFAULT '',
  `field_name` varchar(30) NOT NULL DEFAULT '',
  `field_type` varchar(15) NOT NULL DEFAULT '',
  `field_leng` smallint(3) NOT NULL DEFAULT '0',
  `orderlist` int(10) NOT NULL DEFAULT '0',
  `form_type` varchar(15) NOT NULL DEFAULT '',
  `field_inputwidth` smallint(3) DEFAULT NULL,
  `field_inputheight` smallint(3) NOT NULL DEFAULT '0',
  `form_set` text NOT NULL,
  `form_value` text NOT NULL,
  `form_units` varchar(30) NOT NULL DEFAULT '',
  `form_title` text NOT NULL,
  `mustfill` tinyint(1) NOT NULL DEFAULT '0',
  `listshow` tinyint(1) NOT NULL DEFAULT '0',
  `listfilter` tinyint(1) DEFAULT NULL,
  `search` tinyint(1) NOT NULL DEFAULT '0',
  `allowview` varchar(255) NOT NULL DEFAULT '',
  `allowpost` varchar(255) NOT NULL DEFAULT '',
  `js_check` text NOT NULL,
  `js_checkmsg` varchar(255) NOT NULL DEFAULT '',
  `classid` mediumint(7) NOT NULL DEFAULT '0',
  `form_js` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=166 DEFAULT CHARSET=gbk");
E_D("replace into `qb_showroom_field` values('88','2','附注留言','content','mediumtext','0','2','textarea','500','100','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_showroom_field` values('86','1','展会介绍','content','mediumtext','0','-1','textarea','600','250','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_showroom_field` values('165','2','参展单位名称','companyname','varchar','255','10','text','200','0','','','','','1','0','0','0','','','','','0','');");
E_D("replace into `qb_showroom_field` values('144','2','联系人称呼','realname','varchar','30','9','text','8','0','','','','','0','1','0','0','','','','','0','');");
E_D("replace into `qb_showroom_field` values('145','2','联系电话','telphone','varchar','20','8','text','10','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_showroom_field` values('152','1','主办单位','main_preside','varchar','255','0','text','200','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_showroom_field` values('153','1','辅助单位','assist_preside','mediumtext','0','0','textarea','300','100','','','','每个单位换一行','0','0','0','0','','','','','0','');");
E_D("replace into `qb_showroom_field` values('151','1','结束时间','day_end','varchar','20','0','time','0','0','','','','','1','0','0','0','','','','','0','');");
E_D("replace into `qb_showroom_field` values('150','1','开展时间','day_begin','varchar','20','0','time','100','0','','','','','1','0','0','0','','','','','0','');");
E_D("replace into `qb_showroom_field` values('148','3','详细介绍','content','mediumtext','0','-1','textarea','400','100','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_showroom_field` values('162','3','展览馆地址','room_address','varchar','100','0','text','500','0','','','','','1','0','0','0','','','','','0','');");
E_D("replace into `qb_showroom_field` values('154','1','展品范围','shop_area','mediumtext','0','0','textarea','300','100','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_showroom_field` values('155','1','参展费用','joinmoney','varchar','20','0','text','100','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_showroom_field` values('156','1','联系方式','contact','varchar','200','0','text','300','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_showroom_field` values('157','1','注意事项','about','mediumtext','0','0','textarea','300','100','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_showroom_field` values('158','1','自定义项目一名称','my_title1','varchar','100','0','text','300','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_showroom_field` values('159','1','自定义项目一内容','my_content1','mediumtext','0','0','textarea','300','100','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_showroom_field` values('160','1','自定义项目二名称','my_title2','varchar','100','0','text','300','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_showroom_field` values('161','1','自定义项目二内容','my_content2','mediumtext','0','0','textarea','300','100','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_showroom_field` values('163','3','展览馆官网','room_web','varchar','100','0','text','300','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_showroom_field` values('164','3','联系方式','contact','varchar','150','0','text','300','0','','','','','0','0','0','0','','','','','0','');");

require("../../inc/footer.php");
?>