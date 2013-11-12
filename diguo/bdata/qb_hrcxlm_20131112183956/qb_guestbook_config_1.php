<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_guestbook_config`;");
E_C("CREATE TABLE `qb_guestbook_config` (
  `c_key` varchar(50) NOT NULL DEFAULT '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY (`c_key`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `qb_guestbook_config` values('module_id','18','');");
E_D("replace into `qb_guestbook_config` values('GuestBookNum','20','');");
E_D("replace into `qb_guestbook_config` values('groupPassPassGuestBook','3,4','');");
E_D("replace into `qb_guestbook_config` values('viewNoPassGuestBook','0','');");
E_D("replace into `qb_guestbook_config` values('yzImgGuestBook','1','');");
E_D("replace into `qb_guestbook_config` values('module_pre','guestbook_','');");
E_D("replace into `qb_guestbook_config` values('ifOpenGuestBook','1','');");
E_D("replace into `qb_guestbook_config` values('Info_webname','аТят╠╬','');");
E_D("replace into `qb_guestbook_config` values('Info_webOpen','1','');");

require("../../inc/footer.php");
?>