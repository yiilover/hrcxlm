<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_house_field`;");
E_C("CREATE TABLE `qb_house_field` (
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
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=gbk");
E_D("replace into `qb_house_field` values('1','1','详情','content','mediumtext','0','11','ieedit','600','150','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('2','1','性质','sortid','int','3','20','radio','0','0','1|中介\r\n2|个人','','','','0','1','1','1','','','','','31','');");
E_D("replace into `qb_house_field` values('24','2','室内布局','room_type','varchar','30','18','select','0','0','两室一厅\r\n两室两厅\r\n三室一厅\r\n三室两厅\r\n一室一厅\r\n一居室\r\n三室以上\r\n别墅','','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_house_field` values('23','2','价格','price','int','8','19','text','12','0','','','万元','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('22','2','性质','sortid','int','3','20','radio','0','0','1|中介\r\n2|个人','','','','0','1','1','1','','','','','31','');");
E_D("replace into `qb_house_field` values('21','2','详情','content','mediumtext','0','11','ieedit','600','150','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('9','5','楼盘介绍','content','mediumtext','0','0','ieedit','600','150','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('77','6','从业经验','my_234','varchar','50','0','radio','0','0','一年\r\n两年\r\n三年\r\n四年以上','','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_house_field` values('11','6','个人介绍','content','mediumtext','0','0','ieedit','400','150','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('12','6','服务区域','fuwu_zone','varchar','50','0','checkbox','0','0','市中心\r\n城郊\r\n所有街道','','','','0','1','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('13','1','价格','price','int','8','19','text','12','0','','','元/月','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('14','1','室内布局','room_type','varchar','30','18','select','0','0','两室一厅\r\n两室两厅\r\n三室一厅\r\n三室两厅\r\n一室一厅\r\n一居室\r\n三室以上\r\n别墅','','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_house_field` values('15','1','配套设施','peitao','varchar','150','17','checkbox','0','0','水\r\n电\r\n电话\r\n宽带\r\n管道煤气\r\n电梯\r\n家具','水/电','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('16','1','面积','acreage','varchar','12','16','text','5','0','','','平方米','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('17','1','装修情况','fitment','varchar','15','15','radio','0','0','普通装修\r\n精装修\r\n豪华装修\r\n毛坯房','普通装修','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('18','1','所在楼层','floor','varchar','12','14','text','4','0','','','楼','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('19','1','附近公交站','station','varchar','100','13','text','200','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('20','1','公交路线','bus','varchar','50','12','text','255','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('25','2','配套设施','peitao','varchar','150','17','checkbox','0','0','水\r\n电\r\n电话\r\n宽带\r\n管道煤气\r\n电梯\r\n家具','水/电','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('26','2','面积','acreage','varchar','12','16','text','5','0','','','平方米','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('27','2','装修情况','fitment','varchar','15','15','radio','0','0','普通装修\r\n精装修\r\n豪华装修\r\n毛坯房','普通装修','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('28','2','所在楼层','floor','varchar','12','14','text','4','0','','','楼','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('29','2','附近公交站','station','varchar','100','13','text','200','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('30','2','公交路线','bus','varchar','50','12','text','255','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('31','3','要求简述','content','mediumtext','0','11','textarea','400','50','','','','如对小区/楼层/位置/总价/租金/装修/朝向等方面的要求','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('33','3','期望价格','price','varchar','20','19','text','50','0','','','元/月','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('34','3','期望布局','room_type','varchar','30','18','select','0','0','两室一厅\r\n两室两厅\r\n三室一厅\r\n三室两厅\r\n一室一厅\r\n一居室\r\n三室以上\r\n别墅','','','','0','0','1','1','','','','','31','');");
E_D("replace into `qb_house_field` values('36','3','期望面积','acreage','varchar','20','16','text','50','0','','','平方米','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('37','3','期望装修情况','fitment','varchar','15','15','radio','0','0','普通装修\r\n精装修\r\n豪华装修','普通装修','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('38','3','期望楼层','floor','varchar','30','14','text','30','0','','','楼','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('41','4','要求简述','content','mediumtext','0','11','textarea','400','50','','如对小区/楼层/位置/总价/租金/装修/朝向等方面的要求','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('43','4','期望价格','price','varchar','20','19','text','50','0','','','万元','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('44','4','期望布局','room_type','varchar','30','18','select','0','0','两室一厅\r\n两室两厅\r\n三室一厅\r\n三室两厅\r\n一室一厅\r\n一居室\r\n三室以上\r\n别墅','','','','0','0','1','1','','','','','31','');");
E_D("replace into `qb_house_field` values('46','4','期望面积','acreage','varchar','20','16','text','40','0','','','平方米','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('47','4','期望装修情况','fitment','varchar','15','15','radio','0','0','普通装修\r\n精装修\r\n豪华装修\r\n毛坯房','普通装修','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('48','4','期望楼层','floor','varchar','12','14','text','30','0','','','楼','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('51','5','开发商','seller','varchar','100','0','text','200','0','','','','','0','1','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('52','5','地址','address','varchar','150','0','text','400','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('53','5','开盘时间','star_sell','varchar','20','0','time','0','0','','','','','0','1','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('54','5','楼盘均价','price','int','5','0','text','100','0','','','元/平米','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('55','5','周边交通','bus','varchar','250','0','text','300','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('56','5','周边配套','out_peitao','mediumtext','0','0','textarea','300','150','','学校:\r\n购物:\r\n医院:\r\n银行:\r\n餐饮:\r\n其它:','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('57','5','小区配套','in_peitao','mediumtext','0','0','textarea','300','150','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('59','5','楼盘视频','videourl','varchar','100','0','text','400','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('60','5','楼盘形态与栋数','house_num','varchar','30','0','text','100','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('61','5','总占地面积','total_area','varchar','10','0','text','10','0','','','平方米','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('62','5','总建筑面积','room_area','varchar','10','0','text','10','0','','','平方米','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('63','5','楼盘类型','roomtype','varchar','50','0','checkbox','0','0','洋房\r\n公寓\r\n别墅','洋房','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('64','5','装修情况','fitment','varchar','30','0','radio','0','0','毛坯\r\n简装\r\n豪装','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('65','5','物业公司','my_134','varchar','100','0','text','250','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('66','5','物业管理费','my_523','varchar','4','0','text','8','0','','','元','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('67','5','绿化率','my_755','varchar','20','0','text','20','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('68','5','车位数','my_898','varchar','20','0','text','30','0','','','个','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('69','5','售楼电话','my_208','varchar','40','0','text','100','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('70','5','售楼处地址','sell_address','varchar','100','0','text','200','0','','','','','0','0','0','0','','','','','31','');");
E_D("replace into `qb_house_field` values('71','5','区域','zone_area','varchar','30','0','select','0','0','朝阳区\r\n海淀区\r\n丰台区\r\n西城区\r\n通州区\r\n东城区\r\n昌平区\r\n宣武区\r\n崇文区\r\n石景山区\r\n其他区县','','','','0','0','1','0','','','','','31','');");
E_D("replace into `qb_house_field` values('72','5','销售状态','my_432','varchar','20','0','select','0','0','在售\r\n待售\r\n售罄','','','','0','0','1','1','','','','','31','');");
E_D("replace into `qb_house_field` values('73','6','所属门店','store','varchar','50','0','select','100','0','满堂红\r\n美之居\r\n中原地产\r\n我爱我家\r\n其它','','','','0','0','1','1','','','','','31','');");
E_D("replace into `qb_house_field` values('76','6','头像','face','varchar','150','0','upfile','0','0','','','','','0','0','0','0','','','','','31','');");

require("../../inc/footer.php");
?>