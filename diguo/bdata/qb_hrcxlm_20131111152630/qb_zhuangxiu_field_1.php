<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_zhuangxiu_field`;");
E_C("CREATE TABLE `qb_zhuangxiu_field` (
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
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=gbk");
E_D("replace into `qb_zhuangxiu_field` values('1','1','其它要求','content','mediumtext','0','11','ieeditsimp','600','150','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('2','1','项目类型','sortid','int','3','20','radio','0','0','1|普通住宅\r\n2|别墅\r\n3|办公楼\r\n4|商铺','1','','','1','1','1','1','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('84','2','所属设计师','designer','varchar','50','0','text','200','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('22','2','装修分类','sortid','int','3','20','radio','0','0','1|普通住宅\r\n2|别墅\r\n3|商务','1','','','0','1','1','1','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('21','2','装修案例介绍','content','mediumtext','0','-1','ieeditsimp','600','150','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('9','5','公司介绍','content','mediumtext','0','-1','ieedit','600','200','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('77','6','从业经验','experience','varchar','50','0','radio','0','0','一年\r\n两年\r\n三年\r\n四年以上','一年','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('11','6','个人介绍','content','mediumtext','0','-1','ieeditsimp','600','150','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('12','6','所属装修公司','in_company','varchar','100','0','text','200','0','','','','','0','1','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('13','1','预算价钱','price','int','2','19','select','0','0','1|5000元以内\r\n2|1万元以内\r\n3|2万元以内\r\n4|3万元以内\r\n5|4万元以内\r\n3|5万元以内\r\n7|面议','','','','0','1','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('14','1','装修方式','supply_type','int','1','18','radio','0','0','1|全包\r\n2|半包','1','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('16','1','装修面积','acreage','varchar','12','16','text','5','0','','','平方米','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('19','1','所在位置','station','varchar','100','13','text','300','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('86','2','设计风格','design_style','int','2','0','radio','0','0','1|简约\r\n2|现代\r\n3|中式\r\n4|欧式\r\n5|美式\r\n6|田园\r\n7|古典\r\n8|混搭\r\n9|地中海','2','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('87','2','装修造价','total_price','varchar','10','0','text','100','0','','','万元','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('88','2','装修面积','acreage','varchar','10','0','text','100','0','','','平方米','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('31','3','详情','content','mediumtext','0','-1','ieedit','400','300','','','','','1','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('92','3','分类','sortid','int','2','1','radio','0','0','1|装修前\r\n2|装修中\r\n3|装修后','','','','1','0','1','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('41','4','详情','content','mediumtext','0','-1','ieedit','400','300','','','','','1','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('91','4','分类','sortid','int','2','1','radio','0','0','1|建材选购\r\n2|装修常识\r\n3|品味潮流\r\n4|设计指南\r\n5|装修攻略\r\n6|家装污染','','','','1','1','1','1','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('52','5','公司地址','address','varchar','150','-2','text','400','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('81','6','设计专长','skill','varchar','100','0','checkbox','0','0','普通住宅\r\n写字楼\r\n别墅\r\n专卖展示店\r\n酒店宾馆\r\n餐饮酒吧\r\n歌舞迪厅\r\n其他','普通住宅','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('94','6','所属公司ID(隐藏变量)','company_id','int','10','0','text','0','0','','','','注意：该变量是隐藏变量，系统要用到，请不要删除或随意修改，虽然页面上看不到','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('83','6','设计理念','design_goal','varchar','200','0','text','300','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('80','5','装修风格','build_style','varchar','100','0','checkbox','0','0','简约\r\n现代\r\n中式\r\n欧式\r\n美式\r\n田园\r\n古典\r\n混搭\r\n地中海','简约/现代','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('79','5','商业装修','business_type','varchar','100','0','checkbox','0','0','KTV\r\n商铺\r\n餐厅/酒楼\r\n美容/美发\r\n娱乐场所\r\n酒店\r\n展厅\r\n厂房\r\n写字楼\r\n学校\r\n医院','商铺','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('93','2','所属设计师ID(隐藏变量)','designer_id','int','10','0','text','0','0','','','','注意：该变量是隐藏变量，系统要用到，请不要删除或随意修改，虽然页面上看不到','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('82','6','设计风格','design_style','varchar','100','0','checkbox','0','0','简约\r\n现代\r\n中式\r\n欧式\r\n美式\r\n田园\r\n古典\r\n混搭\r\n地中海','简约/现代','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_zhuangxiu_field` values('78','5','家庭装修','home_type','varchar','100','0','checkbox','0','0','小户型\r\n公寓\r\n别墅\r\n普通住宅\r\n局部装修','小户型/普通住宅/局部装修','','','0','0','1','0','','','','','31','');");

require("../../inc/footer.php");
?>