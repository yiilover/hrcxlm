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
E_D("replace into `qb_buy_field` values('86','1','����Ҫ��','content','mediumtext','0','-1','ieeditsimp','600','250','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_buy_field` values('142','2','����˵��','content','mediumtext','0','15','textarea','500','70','','','','','0','0','0','0','','','','','0','<br><select name=''autoSelect'' onchange=\"changeaddContent(this);\">\r\n<option value=''''>(���ô��֣���������д������æ��) </option>\r\n<option value=''������һ�ݱȽ���ϸ�Ĳ�Ʒ���˵����лл��''>������һ�ݱȽ���ϸ�Ĳ�Ʒ���˵����лл��</option> \r\n<option value=''�������Դ˲�Ʒ�ǳ�����������''>�������Դ˲�Ʒ�ǳ�����������</option> \r\n<option value=''�������Դ˲�Ʒ�ж�����������''>�������Դ˲�Ʒ�ж�����������</option> \r\n</select>\r\n<SCRIPT language=\"javascript\">\r\n            function changeaddContent(autoSelect){\r\n			 	if (autoSelect.selectedIndex !=0){			 		\r\n			 		document.getElementById(\"atc_content\").value = autoSelect[autoSelect.selectedIndex].value;\r\n					autoSelect.selectedIndex=0;\r\n			 	}\r\n				\r\n			 }\r\n	     </SCRIPT>');");
E_D("replace into `qb_buy_field` values('145','2','��ϵ�绰','ask_phone','varchar','20','8','text','100','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_buy_field` values('144','2','��ϵ������','ask_username','varchar','20','9','text','100','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_buy_field` values('146','2','��ϵ�ֻ�','ask_mobphone','varchar','15','7','text','100','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_buy_field` values('147','2','��ϵ����','ask_email','varchar','50','6','text','100','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_buy_field` values('148','2','��ϵQQ','ask_qq','varchar','11','5','text','100','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_buy_field` values('157','2','���۱���','ask_title','varchar','100','20','text','300','0','','','','','1','0','0','0','','','','','0','');");
E_D("replace into `qb_buy_field` values('161','2','��ϣ��','hope_reply','varchar','25','14','time','0','0','','','֮ǰ�ظ�','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_buy_field` values('162','1','��˾����','company_name','varchar','255','0','text','300','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('163','1','�������','company_year','varchar','255','0','text','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('164','1','����','contact_name','varchar','255','0','text','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('165','1','ְ��','contact_title','varchar','255','0','text','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('166','1','�绰','contact_tel','varchar','255','0','text','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('167','1','��������','contact_birth','varchar','20','0','time','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('168','1','���֤��','idcard','varchar','30','0','text','200','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('169','1','�ֻ�','contact_mob','varchar','30','0','text','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('170','1','QQ','qq','varchar','30','0','text','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('171','1','��ַ','contact_address','varchar','255','0','text','300','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('172','1','��ҵ����','company_area','varchar','255','0','text','300','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('173','1','Ա������','company_staffnum','varchar','30','0','text','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('174','1','����','email','varchar','255','0','text','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('175','1','��Ӫ��Χ','company_engagement','varchar','255','0','text','300','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('176','1','��ֵ','company_profit','varchar','30','0','text','0','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_buy_field` values('177','1','��������','sort_config','varchar','255','0','checkbox','0','0','�ʽ�\r\n��Ŀ\r\n�˲�\r\n����\r\n��ѵ\r\n����\r\ný��\r\n����������\r\n��������','','','','0','0','0','0','','','','','31','');");

require("../../inc/footer.php");
?>