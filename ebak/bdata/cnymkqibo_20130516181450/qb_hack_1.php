<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hack`;");
E_C("CREATE TABLE `qb_hack` (
  `keywords` varchar(30) NOT NULL DEFAULT '',
  `name` varchar(30) NOT NULL DEFAULT '',
  `isclose` tinyint(1) NOT NULL DEFAULT '0',
  `author` varchar(30) NOT NULL DEFAULT '',
  `config` text NOT NULL,
  `htmlcode` text NOT NULL,
  `hackfile` text NOT NULL,
  `hacksqltable` text NOT NULL,
  `adminurl` varchar(150) NOT NULL DEFAULT '',
  `about` text NOT NULL,
  `class1` varchar(30) NOT NULL DEFAULT '',
  `class2` varchar(30) NOT NULL DEFAULT '',
  `list` int(10) NOT NULL DEFAULT '0',
  `linkname` text NOT NULL,
  `isbiz` tinyint(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `keywords` (`keywords`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `qb_hack` values('login','用户登录插件','0','','a:3:{s:10:\"systemType\";s:6:\"CMS\";s:9:\"guestcode\";s:0:\"\";}','','','','index.php?lfj=hack&hack=login&job=list','','','','0','','0');");
E_D("replace into `qb_hack` values('adminmap','后台菜单','0','','','','','','index.php?lfj=adminmap&job=list','','other','插件大全','0','','0');");
E_D("replace into `qb_hack` values('moneylog','会员积分消费记录','0','','','','','','index.php?lfj=moneylog&job=list','','other','电子商务管理','0','','0');");
E_D("replace into `qb_hack` values('alipay_set','在线充值支付管理','0','','','','','','index.php?lfj=alipay&job=list','','other','电子商务管理','9','','0');");
E_D("replace into `qb_hack` values('template_list','模板设置','0','','','','','','index.php?lfj=template&job=list','','other','风格/模板设置','1','','0');");
E_D("replace into `qb_hack` values('style_editstyle','风格管理','0','','','','','','index.php?lfj=style&job=edittpl','','other','风格/模板设置','2','','0');");
E_D("replace into `qb_hack` values('propagandize','推广赚取积分功能','0','','','','','','index.php?lfj=propagandize&job=list','','other','其它功能','8','','0');");
E_D("replace into `qb_hack` values('jfadmin_mod','积分介绍管理','0','','','','','','index.php?lfj=jfadmin&job=listjf','','other','其它功能','7','','0');");
E_D("replace into `qb_hack` values('attachment_list','附件管理','0','','','','','','index.php?lfj=attachment&job=list','','other','其它功能','6','','0');");
E_D("replace into `qb_hack` values('upgrade_ol','系统在线升级','0','','','','','','index.php?lfj=upgrade&job=get','','other','其它功能','4','','0');");
E_D("replace into `qb_hack` values('mail_send','邮件群发','0','','','','','','index.php?lfj=mail&job=send','','other','消息/邮件群发','2','','0');");
E_D("replace into `qb_hack` values('message_send','站内消息群发','0','','','','','','index.php?lfj=message&job=send','','other','消息/邮件群发','3','','0');");
E_D("replace into `qb_hack` values('sms_send','手机短信群发','0','','','','','','index.php?lfj=sms&job=send','','other','消息/邮件群发','1','','0');");
E_D("replace into `qb_hack` values('cnzz_set','CNZZ流量统计','0','','','','','','index.php?lfj=cnzz&job=ask','','other','插件大全','3','','0');");
E_D("replace into `qb_hack` values('limitword_list','不良词语过滤','0','','','','','','index.php?lfj=limitword&job=list','','other','其它功能','9','','0');");
E_D("replace into `qb_hack` values('moneycard_make','点卡充值管理','0','','','','','','index.php?lfj=moneycard&job=make','','other','电子商务管理','7','','1');");
E_D("replace into `qb_hack` values('logs_login_logs','后台登录日志','0','','','','','','index.php?lfj=logs&job=login_logs','','other','日志管理','2','','0');");
E_D("replace into `qb_hack` values('logs_admin_do_logs','后台操作日志','0','','','','','','index.php?lfj=logs&job=admin_logs','','other','日志管理','1','','0');");
E_D("replace into `qb_hack` values('sell_telephone','电话号码广告','0','','','','','','index.php?lfj=sell_telephone&job=list','','other','其它功能','0','','0');");
E_D("replace into `qb_hack` values('crontab','定时任务','0','','','','','','index.php?lfj=crontab&job=list','','other','插件大全','0','','0');");
E_D("replace into `qb_hack` values('labelstyle','标签数据导入与导出','0','','','','','','index.php?lfj=labelstyle&job=label','','other','风格/模板设置','2','','0');");
E_D("replace into `qb_hack` values('js_list','JS内容调用','0','','','','','','index.php?lfj=js&job=list','','other','其它功能','9','','0');");
E_D("replace into `qb_hack` values('rmb_consume','人民币消费/充值记录','0','','','','','','index.php?lfj=rmb_consume&job=list','','other','电子商务管理','18','','0');");
E_D("replace into `qb_hack` values('rmb_getout','人民币提现管理','0','','','','','','index.php?lfj=rmb_getout&job=list','','other','电子商务管理','19','','0');");
E_D("replace into `qb_hack` values('rmb_infull','人民币充值管理','0','','','','','','index.php?lfj=rmb_infull&job=list','','other','电子商务管理','20','','0');");
E_D("replace into `qb_hack` values('LaneLead_EasyCollector','蓝锂易采集器','0','蓝锂网络','','','','','../hack/LaneLead/index.php','','other','蓝锂网络产品','9999','','0');");

require("../../inc/footer.php");
?>