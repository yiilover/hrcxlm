<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hr_config`;");
E_C("CREATE TABLE `qb_hr_config` (
  `c_key` varchar(50) NOT NULL DEFAULT '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY (`c_key`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `qb_hr_config` values('Info_description','','');");
E_D("replace into `qb_hr_config` values('Info_metakeywords','','');");
E_D("replace into `qb_hr_config` values('Private_tpl_head','','');");
E_D("replace into `qb_hr_config` values('IF_Private_tpl','0','');");
E_D("replace into `qb_hr_config` values('module_id','31','');");
E_D("replace into `qb_hr_config` values('postJobNeedQy','0','');");
E_D("replace into `qb_hr_config` values('fav_jianli_power','0','');");
E_D("replace into `qb_hr_config` values('fav_jianli_mail','0','');");
E_D("replace into `qb_hr_config` values('apply_job_mail','0','');");
E_D("replace into `qb_hr_config` values('module_close','0','');");
E_D("replace into `qb_hr_config` values('module_pre','hr_','');");
E_D("replace into `qb_hr_config` values('SEO_description','','');");
E_D("replace into `qb_hr_config` values('SEO_keywords','','');");
E_D("replace into `qb_hr_config` values('SEO_title','','');");
E_D("replace into `qb_hr_config` values('Info_webname','хк╡еупф╦','');");
E_D("replace into `qb_hr_config` values('Private_tpl_foot','','');");

require("../../inc/footer.php");
?>