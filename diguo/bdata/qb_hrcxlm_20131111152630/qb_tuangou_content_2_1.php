<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_tuangou_content_2`;");
E_C("CREATE TABLE `qb_tuangou_content_2` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `join_num` varchar(10) NOT NULL DEFAULT '',
  `realname` varchar(30) NOT NULL DEFAULT '',
  `telphone` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `qb_tuangou_content_2` values('1','1','4','1','�ȵ���','4','��ţ��','02055555555');");
E_D("replace into `qb_tuangou_content_2` values('2','2','7','1','����Ҳ','1','�Ŵ���','0205474444');");
E_D("replace into `qb_tuangou_content_2` values('3','3','6','1','��ҲҪ!','1','�鱣ȫ','020447777');");
E_D("replace into `qb_tuangou_content_2` values('4','4','5','1','��Ҳѽ','1','�Ŵ���','0207541254');");
E_D("replace into `qb_tuangou_content_2` values('5','5','1','1','��Ҳѽ','1','������','02024411');");

require("../../inc/footer.php");
?>