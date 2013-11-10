ALTER TABLE `qb_shop_join` ADD `rmb` FLOAT NOT NULL ;

ALTER TABLE `qb_shop_join` ADD INDEX ( `cid` );

ALTER TABLE `qb_shop_join` CHANGE `totalmoney` `totalmoney` FLOAT DEFAULT '0' NOT NULL;

ALTER TABLE `qb_shoptg_join` ADD `rmb` FLOAT NOT NULL ;

ALTER TABLE `qb_shoptg_join` ADD INDEX ( `cid` );

ALTER TABLE `qb_shoptg_join` CHANGE `totalmoney` `totalmoney` FLOAT DEFAULT '0' NOT NULL;

ALTER TABLE `qb_shoptg_content` ADD `simple_order` TINYINT( 1 ) NOT NULL;

ALTER TABLE  `qb_memberdata` ADD  `rmb` FLOAT NOT NULL;
ALTER TABLE  `qb_memberdata` ADD  `rmb_freeze` FLOAT NOT NULL;
ALTER TABLE  `qb_memberdata` ADD  `rmb_pwd` VARCHAR( 32 ) NOT NULL;
INSERT INTO `qb_hack` (`keywords`, `name`, `isclose`, `author`, `config`, `htmlcode`, `hackfile`, `hacksqltable`, `adminurl`, `about`, `class1`, `class2`, `list`, `linkname`, `isbiz`) VALUES ('rmb_infull', '人民币充值管理', 0, '', '', '', '', '', 'index.php?lfj=rmb_infull&job=list', '', 'other', '电子商务管理', 20, '', 0);
INSERT INTO `qb_hack` (`keywords`, `name`, `isclose`, `author`, `config`, `htmlcode`, `hackfile`, `hacksqltable`, `adminurl`, `about`, `class1`, `class2`, `list`, `linkname`, `isbiz`) VALUES ('rmb_getout', '人民币提现管理', 0, '', '', '', '', '', 'index.php?lfj=rmb_getout&job=list', '', 'other', '电子商务管理', 19, '', 0);
INSERT INTO `qb_hack` (`keywords`, `name`, `isclose`, `author`, `config`, `htmlcode`, `hackfile`, `hacksqltable`, `adminurl`, `about`, `class1`, `class2`, `list`, `linkname`, `isbiz`) VALUES ('rmb_consume', '人民币消费/充值记录', 0, '', '', '', '', '', 'index.php?lfj=rmb_consume&job=list', '', 'other', '电子商务管理', 18, '', 0);



ALTER TABLE  `qb_shoptg_content_1` ADD  `simple_order` TINYINT( 1 ) NOT NULL ,ADD  `awake` TEXT NOT NULL ,ADD  `ifquit` TINYINT( 1 ) NOT NULL, ADD `limit_num` VARCHAR( 10 ) NOT NULL ;
INSERT INTO `qb_shoptg_field` (`id`, `mid`, `title`, `field_name`, `field_type`, `field_leng`, `orderlist`, `form_type`, `field_inputwidth`, `field_inputheight`, `form_set`, `form_value`, `form_units`, `form_title`, `mustfill`, `listshow`, `listfilter`, `search`, `allowview`, `allowpost`, `js_check`, `js_checkmsg`, `classid`, `form_js`) VALUES ('', 1, '团购提示', 'awake', 'mediumtext', 0, 0, 'ieeditsimp', 0, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 31, '');
INSERT INTO `qb_shoptg_field` (`id`, `mid`, `title`, `field_name`, `field_type`, `field_leng`, `orderlist`, `form_type`, `field_inputwidth`, `field_inputheight`, `form_set`, `form_value`, `form_units`, `form_title`, `mustfill`, `listshow`, `listfilter`, `search`, `allowview`, `allowpost`, `js_check`, `js_checkmsg`, `classid`, `form_js`) VALUES ('', 1, '订单类型', 'simple_order', 'int', 1, -1, 'radio', 0, 0, '0|实物订单\r\n1|电子券订单', '0', '', '', 0, 0, 0, 0, '', '', '', '', 31, '');
INSERT INTO `qb_shoptg_field` (`id`, `mid`, `title`, `field_name`, `field_type`, `field_leng`, `orderlist`, `form_type`, `field_inputwidth`, `field_inputheight`, `form_set`, `form_value`, `form_units`, `form_title`, `mustfill`, `listshow`, `listfilter`, `search`, `allowview`, `allowpost`, `js_check`, `js_checkmsg`, `classid`, `form_js`) VALUES ('', 1, '是否支持到期退款', 'ifquit', 'int', 1, 0, 'radio', 0, 0, '0|不支持\r\n1|支持', '0', '', '', 0, 0, 0, 0, '', '', '', '', 31, '');
INSERT INTO `qb_shoptg_field` (`id`, `mid`, `title`, `field_name`, `field_type`, `field_leng`, `orderlist`, `form_type`, `field_inputwidth`, `field_inputheight`, `form_set`, `form_value`, `form_units`, `form_title`, `mustfill`, `listshow`, `listfilter`, `search`, `allowview`, `allowpost`, `js_check`, `js_checkmsg`, `classid`, `form_js`) VALUES ('', 1, '限购数量', 'limit_num', 'varchar', 10, 0, 'text', 50, 0, '', '', '', '留空或为0时则不限购', 0, 0, 0, 0, '', '', '', '', 31, '');


ALTER TABLE  `qb_shoptg_join` ADD  `sendtime` INT( 10 ) NOT NULL ,ADD  `endtime` INT( 10 ) NOT NULL ,ADD  `ifquit` TINYINT( 1 ) NOT NULL ;
ALTER TABLE  `qb_shoptg_join` ADD INDEX (  `ifpay` ,  `ifsend` ,  `endtime`,  `ifquit` );

ALTER TABLE `qb_shoptg_join` ADD `receive` TINYINT( 1 ) NOT NULL ;
ALTER TABLE `qb_shop_join` ADD `receive` TINYINT( 1 ) NOT NULL ;

ALTER TABLE `qb_shoptg_join` ADD `ifcomment` TINYINT( 1 ) NOT NULL ;
ALTER TABLE `qb_shop_join` ADD `ifcomment` TINYINT( 1 ) NOT NULL ;

ALTER TABLE `qb_hy_company` CHANGE `host` `host` VARCHAR( 100 ) NOT NULL;


ALTER TABLE `qb_shop_content` ADD `sellnum` MEDIUMINT( 7 ) NOT NULL ;

ALTER TABLE `qb_shop_content_1` ADD `storage` MEDIUMINT( 7 ) NOT NULL ;
UPDATE `qb_shop_content_1` SET storage =99999;

INSERT INTO `qb_shop_field` (`id`, `mid`, `title`, `field_name`, `field_type`, `field_leng`, `orderlist`, `form_type`, `field_inputwidth`, `field_inputheight`, `form_set`, `form_value`, `form_units`, `form_title`, `mustfill`, `listshow`, `listfilter`, `search`, `allowview`, `allowpost`, `js_check`, `js_checkmsg`, `classid`, `form_js`) VALUES ('', 1, '库存量', 'storage', 'int', 7, 6, 'text', 50, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 31, '');


ALTER TABLE  `qb_news_sort` ADD  `metatitle` VARCHAR( 255 ) NOT NULL AFTER  `maxperpage` ;



CREATE TABLE `qb_rmb_consume` (
  `id` mediumint(7) NOT NULL auto_increment,
  `uid` mediumint(7) NOT NULL default '0',
  `money` float NOT NULL default '0',
  `about` varchar(255) NOT NULL default '',
  `posttime` int(10) NOT NULL default '0',
  `freeze` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `uid` (`uid`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;





CREATE TABLE `qb_rmb_getout` (
  `id` mediumint(7) NOT NULL auto_increment,
  `uid` mediumint(7) NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `money` float NOT NULL default '0',
  `posttime` int(10) NOT NULL default '0',
  `banktype` varchar(20) NOT NULL default '',
  `bankname` varchar(100) NOT NULL default '',
  `ifpay` tinyint(1) NOT NULL default '0',
  `why` varchar(255) NOT NULL default '',
  `truename` varchar(30) NOT NULL default '',
  `tel` varchar(20) NOT NULL default '',
  `quitabout` text NOT NULL,
  `admin` varchar(30) NOT NULL default '',
  `replytime` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `uid` (`uid`),
  KEY `ifpay` (`ifpay`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;





CREATE TABLE `qb_rmb_infull` (
  `id` mediumint(7) NOT NULL auto_increment,
  `numcode` varchar(32) NOT NULL default '',
  `money` float NOT NULL default '0',
  `ifpay` tinyint(1) NOT NULL default '0',
  `posttime` int(10) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `username` varchar(32) NOT NULL default '',
  `banktype` varchar(15) NOT NULL default '',
  `bank1` varchar(100) NOT NULL default '',
  `bank2` varchar(100) NOT NULL default '',
  `ifatm` tinyint(1) NOT NULL default '0',
  `paytime` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `numcode` (`numcode`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;



CREATE TABLE `qb_news_keywordid` (
  `id` mediumint(7) NOT NULL default '0',
  `aid` mediumint(7) NOT NULL default '0',
  KEY `id` (`id`),
  KEY `aid` (`aid`)
) TYPE=MyISAM;




CREATE TABLE `qb_news_keyword` (
  `id` mediumint(5) NOT NULL auto_increment,
  `keywords` varchar(30) NOT NULL default '',
  `list` int(10) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `ifhide` tinyint(1) NOT NULL default '0',
  `url` varchar(150) NOT NULL default '',
  `num` smallint(4) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `keywords` (`keywords`),
  KEY `num` (`num`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;


CREATE TABLE `qb_shop_address` (
  `rid` mediumint(7) NOT NULL auto_increment,
  `uid` mediumint(7) NOT NULL default '0',
  `order_username` varchar(20) NOT NULL default '',
  `order_phone` varchar(20) NOT NULL default '',
  `order_mobphone` varchar(15) NOT NULL default '',
  `order_email` varchar(50) NOT NULL default '',
  `order_qq` varchar(11) NOT NULL default '',
  `order_postcode` varchar(6) NOT NULL default '',
  `order_address` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`rid`),
  KEY `uid` (`uid`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;
