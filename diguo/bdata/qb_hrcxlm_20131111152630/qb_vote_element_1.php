<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_vote_element`;");
E_C("CREATE TABLE `qb_vote_element` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `cid` int(7) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL DEFAULT '',
  `votenum` int(7) NOT NULL DEFAULT '0',
  `list` int(10) NOT NULL DEFAULT '0',
  `img` varchar(100) NOT NULL DEFAULT '',
  `describes` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=gbk");
E_D("replace into `qb_vote_element` values('37','6','������','4','10','','','');");
E_D("replace into `qb_vote_element` values('38','6','����','4','7','','','');");
E_D("replace into `qb_vote_element` values('39','6','����','2','5','','','');");
E_D("replace into `qb_vote_element` values('41','6','�����','6','6','','','');");
E_D("replace into `qb_vote_element` values('68','6','����','12','9','','','');");
E_D("replace into `qb_vote_element` values('70','10','�ٶȷ�˿��','6','0','vote/1_20090317160304_1cyPh.gif','���ǰٶȷ�˿��','http://www.baidu.com');");
E_D("replace into `qb_vote_element` values('71','10','�ȸ��˿��','1','0','vote/1_20090317160317_NO50S.gif','���ǹȸ��˿��','http://www.google.cn');");

require("../../inc/footer.php");
?>