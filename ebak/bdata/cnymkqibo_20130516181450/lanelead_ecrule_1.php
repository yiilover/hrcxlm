<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lanelead_ecrule`;");
E_C("CREATE TABLE `lanelead_ecrule` (
  `ec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ec_sid` smallint(8) unsigned NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `app_id` tinyint(4) unsigned NOT NULL,
  `cms_module` varchar(200) NOT NULL,
  `cms_sfid` mediumint(8) unsigned NOT NULL,
  `cms_scityid` mediumint(8) unsigned NOT NULL,
  `cms_szoneid` mediumint(8) unsigned NOT NULL,
  `cms_sstreetid` mediumint(8) unsigned NOT NULL,
  `c_mode` tinyint(1) unsigned NOT NULL,
  `rule_keyword` text NOT NULL,
  `rule_rss` text NOT NULL,
  `rule_direct` text NOT NULL,
  `rule_title` text NOT NULL,
  `rule_content` text NOT NULL,
  `t_fmod` tinyint(1) unsigned NOT NULL,
  `t_replaceword` text NOT NULL,
  `t_incword` text NOT NULL,
  `t_minleng` tinyint(4) unsigned NOT NULL,
  `url_noword` text NOT NULL,
  `url_incword` text NOT NULL,
  `c_gmod` tinyint(1) unsigned NOT NULL,
  `c_mpmod` tinyint(1) unsigned NOT NULL,
  `c_replaceword` text NOT NULL,
  `c_incword` text NOT NULL,
  `ifauto_save` tinyint(1) unsigned NOT NULL,
  `rule_save` text NOT NULL,
  `ifauto_seo` tinyint(1) unsigned NOT NULL,
  `seo_keywords` varchar(255) NOT NULL,
  `rule_seo` text NOT NULL,
  `if_egparams` tinyint(1) unsigned NOT NULL,
  `eg_params` text NOT NULL,
  `ifauto_timingc` tinyint(1) unsigned NOT NULL,
  `posttime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ec_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>