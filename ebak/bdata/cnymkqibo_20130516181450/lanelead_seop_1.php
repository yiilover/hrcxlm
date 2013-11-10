<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lanelead_seop`;");
E_C("CREATE TABLE `lanelead_seop` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `pcontent` text NOT NULL,
  `position` tinyint(1) unsigned NOT NULL,
  `ifshow` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `lanelead_seop` values('1','&nbsp;&nbsp;&nbsp;&nbsp; 本文由{WebName}搜集或整理，对部分文章进行了修正和编辑。原文章内容和版权由作者所有，如果您不同意本站引用，请联系{WebName}站长，我们会24小时内作出处理。{WebName}官方站的原创文章，版权由本站所有。欢迎各位朋友阅读或转载本站文章，共享网络精神！{WebName} 联系方式： {Contact}','2','1');");
E_D("replace into `lanelead_seop` values('2','<p style=\"margin-bottom:7px;font-size:14px;border-top:#999 1px dotted;\">&nbsp;&nbsp; 【重要声明】：{WebName}刊载此文仅为提供更多信息目的，并不代表{WebName}同意文章的说法或描述，也不构成任何建议，对本文有任何异议，请联系我们。</p>','2','2');");
E_D("replace into `lanelead_seop` values('3','&nbsp;&nbsp;&nbsp;&nbsp; 网友评论仅供其表达个人看法，并不表明本站同意其观点或证实其描述。','3','2');");
E_D("replace into `lanelead_seop` values('4','<span class=\"left\">&nbsp;&nbsp;&nbsp; &nbsp;(本文来源：{WebName} )</span>&nbsp; <span style=\"white-space:nowrap;\" class=\"cDGray right\">责任编辑：{UserName}</span>','1','2');");
E_D("replace into `lanelead_seop` values('5','&nbsp;（编辑：{UserName}）','2','2');");
E_D("replace into `lanelead_seop` values('6','<span class=\"left\">&nbsp;&nbsp;&nbsp; &nbsp;(本文来源：{WebName} ) </span><span style=\"white-space:nowrap;\" class=\"cDGray right\">责任编辑：{UserName}</span>','2','2');");
E_D("replace into `lanelead_seop` values('7','提示：本文源自网络，由{WebName}收集整理！如有侵权,请联系我们,我们会马上删除.','2','2');");
E_D("replace into `lanelead_seop` values('8','本文出自：{WebName}，地址：{WebURL}，转载须注明！','1','2');");

require("../../inc/footer.php");
?>