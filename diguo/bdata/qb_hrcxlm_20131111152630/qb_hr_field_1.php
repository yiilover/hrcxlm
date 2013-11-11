<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hr_field`;");
E_C("CREATE TABLE `qb_hr_field` (
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
) ENGINE=MyISAM AUTO_INCREMENT=182 DEFAULT CHARSET=gbk");
E_D("replace into `qb_hr_field` values('147','2','身高','height','int','4','14','text','50','0','','','厘米','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('150','2','毕业学校','alma_mater','varchar','30','11','text','100','0','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('86','2','专业','speciality','varchar','50','12','text','50','0','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('84','2','年龄','age','int','2','17','text','50','0','','','岁','','0','1','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('151','2','毕业年份','graduate_time','varchar','10','10','text','50','0','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('168','2','到岗日期','worktime','varchar','20','3','text','100','0','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('79','2','性别','sex','int','1','18','radio','50','0','1|男\r\n2|女','1','','','0','1','1','1','','','','','1','');");
E_D("replace into `qb_hr_field` values('78','2','姓名','truename','varchar','20','20','text','100','0','','','','','0','1','0','0','','','','','0','');");
E_D("replace into `qb_hr_field` values('149','2','学历','school_age','int','3','13','select','0','0','1|小学\r\n2|初中\r\n3|高中\r\n4|中专\r\n5|大专\r\n6|本科\r\n7|研究生\r\n9|博士','','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_hr_field` values('152','2','手机号码','mobphone','varchar','11','9','text','100','0','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('153','2','QQ号码','qq','varchar','11','8','text','100','0','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('154','2','常用邮箱','email','varchar','50','7','text','100','0','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('155','2','MSN帐号','msn','varchar','50','6','text','100','0','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('167','2','工作年限','workyear','int','2','4','select','0','0','0|应届毕业生\r\n1|一年\r\n2|两年\r\n3|三年以上','0','','','0','1','1','1','','','','','31','');");
E_D("replace into `qb_hr_field` values('166','2','期望工作城市','lifeplace','varchar','50','5','text','100','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_hr_field` values('158','2','教育背景','education','mediumtext','0','-1','textarea','400','100','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('159','2','工作经验','work','mediumtext','0','-2','textarea','500','100','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('160','2','自我评价','introduce','mediumtext','0','-3','textarea','500','100','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('161','2','技能特长','skill','mediumtext','0','-4','textarea','500','100','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('162','2','体育爱好','interest','mediumtext','0','-5','textarea','500','100','','','','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('164','1','详情','content','mediumtext','0','-1','textarea','500','120','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_hr_field` values('170','1','招聘人数','nums','int','5','0','text','50','0','','','人','','0','0','0','0','','','','','1','');");
E_D("replace into `qb_hr_field` values('171','1','工作经验要求','wageyear','int','1','0','select','0','0','1|一年以上\r\n2|两年以上\r\n3|三年以上','','','','0','1','1','1','','','','','0','');");
E_D("replace into `qb_hr_field` values('172','1','性别要求','asksex','int','1','0','radio','0','0','1|男性\r\n2|女性','','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_hr_field` values('173','1','学历要求','schoo_age','int','2','0','select','0','0','1|小学以上\r\n2|中学以上\r\n3|中专以上\r\n4|高中以上\r\n5|大专以上\r\n6|本科以上\r\n7|硕士以上\r\n8|博士以上','','','','0','1','1','1','','','','','0','');");
E_D("replace into `qb_hr_field` values('174','1','薪水待遇','wage','int','2','0','select','0','0','-1|面议\r\n1|800~1500元\r\n2|1500~2500元\r\n3|2500~3500元\r\n4|3500元以上','','','','0','1','1','1','','','','','31','');");
E_D("replace into `qb_hr_field` values('175','1','工作城市','workplace','varchar','50','10','text','150','0','','','','','1','0','0','0','','','','','0','');");
E_D("replace into `qb_hr_field` values('176','2','期望职位','hope_job','varchar','200','21','text','300','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_hr_field` values('177','2','相片','facephoto','varchar','100','0','onepic','0','0','','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_hr_field` values('178','2','期望待遇','wage','int','2','10','select','0','0','-1|面议\r\n1|800~1500元\r\n2|1500~2500元\r\n3|2500~3500元\r\n4|3500元以上','','','','0','0','0','0','','','','','0','');");
E_D("replace into `qb_hr_field` values('179','2','职业','o_id','varchar','255','0','checkbox','0','0','1|歌手\r\n2|演员\r\n3|导演','','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_hr_field` values('181','2','日期','date','varchar','255','0','time','0','0','','','','','0','0','0','1','','','','','31','');");
E_D("replace into `qb_hr_field` values('180','2','城市','cid','int','3','0','select','0','0','1|北京\r\n2|上海\r\n3|广州\r\n4|深圳\r\n5|杭州\r\n6|苏州\r\n7|重庆\r\n8|天津\r\n9|成都\r\n10|长沙\r\n11|长春\r\n12|大连\r\n13|东莞\r\n14|福州\r\n15|桂林\r\n16|贵阳\r\n17|哈尔滨\r\n18|合肥\r\n19|海口\r\n20|呼和浩特\r\n21|济南\r\n22|昆明\r\n23|兰州\r\n24|拉萨\r\n25|南京\r\n26|南昌\r\n27|南宁\r\n28|宁波\r\n29|青岛\r\n30|沈阳\r\n31|石家庄\r\n32|太原\r\n33|武汉\r\n34|乌鲁木齐\r\n35|无锡\r\n36|厦门\r\n37|西安\r\n38|西宁\r\n39|银川\r\n40|郑州','','','','0','0','1','0','','','','','31','');");

require("../../inc/footer.php");
?>