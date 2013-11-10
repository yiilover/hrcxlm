<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_zhuangxiu_content_6`;");
E_C("CREATE TABLE `qb_zhuangxiu_content_6` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `in_company` varchar(100) NOT NULL DEFAULT '',
  `experience` varchar(50) NOT NULL DEFAULT '',
  `skill` varchar(100) NOT NULL DEFAULT '',
  `design_style` varchar(100) NOT NULL DEFAULT '',
  `design_goal` varchar(200) NOT NULL DEFAULT '',
  `company_id` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `company_id` (`company_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `qb_zhuangxiu_content_6` values('1','1','6','1','<p>用心设计！</p><p>客户是上帝！</p>','北京洲际宏达装饰有限公司','三年','/#/普通住宅/#/写字楼/#/别墅/#/','/#/简约/#/现代/#/','没有最好，只有更好','42');");
E_D("replace into `qb_zhuangxiu_content_6` values('2','2','6','1','<p>争做最优秀的设计师！</p><p>时刻为用户着想！</p>','北京宇华盛建筑装饰工程有限公司','两年','/#/普通住宅/#/别墅/#/','/#/简约/#/现代/#/中式/#/','一切为了客户！','41');");
E_D("replace into `qb_zhuangxiu_content_6` values('3','3','6','1','<p>踏踏实实为客户做设计，</p><p>认认真真的工作！</p>','北京北利祥和装饰工程有限公司','三年','/#/普通住宅/#/别墅/#/','/#/简约/#/现代/#/欧式/#/','追求最完美的设计给客户！','40');");
E_D("replace into `qb_zhuangxiu_content_6` values('4','4','6','1','<p>服从公司的安排，</p><p>听从客户的意见！</p>','北京绿缘居装饰设计有限公司','四年以上','/#/普通住宅/#/别墅/#/','/#/简约/#/现代/#/欧式/#/','做最好的东西给客户！','39');");
E_D("replace into `qb_zhuangxiu_content_6` values('5','51','6','1','客户要的，尽量满足！','北京（鸿达尚品）家居装饰有限公司','一年','/#/普通住宅/#/','/#/简约/#/现代/#/','一切为了客户的需要！','38');");

require("../../inc/footer.php");
?>