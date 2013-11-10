<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_vote_topic`;");
E_C("CREATE TABLE `qb_vote_topic` (
  `cid` int(7) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `about` text NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `limittime` int(10) NOT NULL DEFAULT '0',
  `limitip` tinyint(1) NOT NULL DEFAULT '0',
  `ip` text NOT NULL,
  `posttime` int(10) NOT NULL DEFAULT '0',
  `user` text NOT NULL,
  `begintime` int(10) NOT NULL DEFAULT '0',
  `endtime` int(10) NOT NULL DEFAULT '0',
  `forbidguestvote` tinyint(1) NOT NULL DEFAULT '0',
  `ifcomment` tinyint(1) NOT NULL DEFAULT '0',
  `tplcode` text NOT NULL,
  `votetype` tinyint(2) NOT NULL DEFAULT '0',
  `aid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gbk");
E_D("replace into `qb_vote_topic` values('6','互联网哪些前辈是你支持的','互联网哪些前辈是你支持和影响到你的？','2','600','0','','1164793927','','1233749543','1265256743','0','1','<div class=\"voteid\" title=\"\$describes\">{\$button}{\$title}({\$votenum})</div>','0','0','0');");
E_D("replace into `qb_vote_topic` values('11','2008年中国站长十大热门事件投票','-------请为你觉得2008年最热门的站长事件投上一票.','2','30','0','','1237281523','','1233749543','1580789543','0','1','<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"width:118px;float:left;margin-top:4px;\" class=\"voteid\">\r\n  <tr> \r\n    <td align=\"center\"><A HREF=\"\$url\" target=\"_blank\" style=\"border:1px solid #ccc;display:block;width:100px;height:75px;\"><img alt=\"{\$title}\" style=\"border:1px solid #fff;\" src=\"\$img\" border=\"0\" width=\"100\" height=\"75\"></A></td>\r\n  </tr>\r\n  <tr> \r\n    <td align=\"center\">\r\n      <div  style=\"width:110px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;\">{\$button}(<b><font color=\"#FF0000\" >{\$votenum}</font></b>)<a HREF=\"\$url\" target=\"_blank\" title=\"{\$title}\">{\$title}</a></div>\r\n    </td>\r\n  </tr>\r\n  <tr> \r\n    <td>{\$describes}</td>\r\n  </tr>\r\n  <tr> \r\n    <td></td>\r\n  </tr>\r\n</table>\r\n\r\n','1','0','0');");
E_D("replace into `qb_vote_topic` values('10','哪个搜索引擎好?','你喜欢使用哪个搜索引擎呢,请投上一票?','1','15','0','','1237275830','','0','0','0','1','<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"width:90px;float:left;\">\r\n  <tr> \r\n    <td align=\"center\" valign=\"middle\" style=\"line-height:40px;\"> <a href=\"\$url\" target=_blank> \r\n      <b>\$title</b></a> </td>\r\n  </tr>\r\n  <tr> \r\n    <td align=\"center\"><a href=\"\$url\" target=\"_blank\"><img alt=\"\$describes\" src=\"\$img\" width=\"80\" height=\"30\" border=\"0\"></a></td>\r\n  </tr>\r\n  <tr> \r\n    <td align=\"center\" style=\"line-height:20px;\"> <font color=\"#990000\">共 <b><font color=\"#FF0000\">\$votenum</font> 票 \r\n      </b></font></td>\r\n  </tr>\r\n  <tr> \r\n    <td align=\"center\" style=\"line-height:40px;\"><a href=\"\$webdb[www_url]/do/vote.php?action=vote&voteId=\$id\" target=\"_blank\"><u>投一票</u></a> \r\n      <a href=\"\$webdb[www_url]/do/vote.php?job=show&cid=\$cid#postcomment\" target=\"_blank\"><u>评一评</u></a></td>\r\n  </tr>\r\n</table>','2','0','0');");

require("../../inc/footer.php");
?>