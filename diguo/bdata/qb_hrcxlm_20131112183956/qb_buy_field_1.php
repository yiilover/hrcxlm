<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_buy_field`;");
E_C("CREATE TABLE `qb_buy_field` (
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
  `form_units` text NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=178 DEFAULT CHARSET=gbk");
E_D("replace into `qb_buy_field` values('86','1','其它要求','content','mediumtext','0','-1','ieeditsimp','600','250','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_buy_field` values('142','2','补充说明','content','mediumtext','0','15','textarea','500','70','','','','','0','0','0','0','','','','','0','<br><select name=''autoSelect'' onchange=\"changeaddContent(this);\">\r\n<option value=''''>(懒得打字？“快速填写”帮您忙！) </option>\r\n<option value=''请您发一份比较详细的产品规格说明，谢谢！''>请您发一份比较详细的产品规格说明，谢谢！</option> \r\n<option value=''请问您对此产品是长期有需求吗？''>请问您对此产品是长期有需求吗？</option> \r\n<option value=''请问您对此产品有多大的需求量？''>请问您对此产品有多大的需求量？</option> \r\n</select>\r\n<SCRIPT language=\"javascript\">\r\n            function changeaddContent(autoSelect){\r\n			 	if (autoSelect.selectedIndex !=0){			 		\r\n			 		document.getElementById(\"atc_content\").value = autoSelect[autoSelect.selectedIndex].value;\r\n					autoSelect.selectedIndex=0;\r\n			 	}\r\n				\r\n			 }\r\n	     </SCRIPT>');");
E_D("replace into `qb_buy_field` values('145','2','联系电话','ask_phone','varchar','20','8','text','100','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_buy_field` values('144','2','联系人姓名','ask_username','varchar','20','9','text','100','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_buy_field` values('146','2','联系手机','ask_mobphone','varchar','15','7','text','100','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_buy_field` values('147','2','联系邮箱','ask_email','varchar','50','6','text','100','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_buy_field` values('148','2','联系QQ','ask_qq','varchar','11','5','text','100','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_buy_field` values('157','2','报价标题','ask_title','varchar','100','20','text','300','0','','','','','1','0','0','0','','','','','0','');");
E_D("replace into `qb_buy_field` values('161','2','我希望','hope_reply','varchar','25','14','time','0','0','','','之前回复','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_buy_field` values('162','1','公司名称','company_name','varchar','255','0','text','300','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('163','1','成立年份','company_year','varchar','255','0','text','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('164','1','姓名','contact_name','varchar','255','0','text','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('165','1','职务','contact_title','varchar','255','0','text','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('166','1','电话','contact_tel','varchar','255','0','text','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('167','1','生日日期','contact_birth','varchar','20','0','time','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('168','1','身份证号','idcard','varchar','30','0','text','200','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('169','1','手机','contact_mob','varchar','30','0','text','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('170','1','QQ','qq','varchar','30','0','text','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('171','1','地址','contact_address','varchar','255','0','text','300','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('172','1','行业性质','company_area','varchar','255','0','text','300','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('173','1','员工数量','company_staffnum','varchar','30','0','text','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('174','1','邮箱','email','varchar','255','0','text','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('175','1','经营范围','company_engagement','varchar','255','0','text','300','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('176','1','产值','company_profit','varchar','30','0','text','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('177','1','所属分类','sort_config','varchar','255','0','checkbox','0','0','资金\r\n项目\r\n人才\r\n渠道\r\n培训\r\n人脉\r\n媒体\r\n健康、生活\r\n其他需求','','','','0','0','0','0','','','','','31','');");

require("../../inc/footer.php");
?>