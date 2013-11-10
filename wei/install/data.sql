INSERT INTO `qb_module` (`id`, `type`, `name`, `pre`, `dirname`, `domain`, `admindir`, `config`, `list`, `admingroup`, `adminmember`, `ifclose`) VALUES (20, 2, '微分享', 'wei_', 'wei', '', '', 'a:7:{s:12:"list_PhpName";s:18:"list.php?&fid=$fid";s:12:"show_PhpName";s:29:"bencandy.php?&fid=$fid&id=$id";s:8:"MakeHtml";N;s:14:"list_HtmlName1";N;s:14:"show_HtmlName1";N;s:14:"list_HtmlName2";N;s:14:"show_HtmlName2";N;}', 102, '', '', 0);
    

# --------------------------------------------------------

#
# 表的结构 `qb_wei_comments`
#

DROP TABLE IF EXISTS `qb_wei_comments`;
CREATE TABLE `qb_wei_comments` (
  `cid` mediumint(7) unsigned NOT NULL auto_increment,
  `id` int(10) unsigned NOT NULL default '0',
  `fid` mediumint(7) unsigned NOT NULL default '0',
  `cuid` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) unsigned NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `posttime` int(10) NOT NULL default '0',
  `content` text NOT NULL,
  `ip` varchar(15) NOT NULL default '',
  `icon` tinyint(3) NOT NULL default '0',
  `yz` tinyint(1) NOT NULL default '0',
  `ifcom` tinyint(1) NOT NULL default '0',
  `agree` mediumint(5) NOT NULL default '0',
  `disagree` mediumint(5) NOT NULL default '0',
  `quoteid` int(10) NOT NULL default '0',
  PRIMARY KEY  (`cid`),
  KEY `aid` (`id`),
  KEY `fid` (`fid`),
  KEY `uid` (`uid`),
  KEY `ifcom` (`ifcom`)
) TYPE=MyISAM AUTO_INCREMENT=3 ;

#
# 导出表中的数据 `qb_wei_comments`
#


# --------------------------------------------------------

#
# 表的结构 `qb_wei_config`
#

DROP TABLE IF EXISTS `qb_wei_config`;
CREATE TABLE `qb_wei_config` (
  `c_key` varchar(50) NOT NULL default '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY  (`c_key`)
) TYPE=MyISAM;

#
# 导出表中的数据 `qb_wei_config`
#

INSERT INTO `qb_wei_config` VALUES ('wei_fid', '3', '');
INSERT INTO `qb_wei_config` VALUES ('Info_ShowCommentRows', '0', '');
INSERT INTO `qb_wei_config` VALUES ('Info_webOpen', '1', '');
INSERT INTO `qb_wei_config` VALUES ('Info_adminfen', '', '');
INSERT INTO `qb_wei_config` VALUES ('GroupPostjumpurl', '3,4', '');
INSERT INTO `qb_wei_config` VALUES ('GroupPostIframe', '3,4', '');
INSERT INTO `qb_wei_config` VALUES ('Info_PassCommentType', '1', '');
INSERT INTO `qb_wei_config` VALUES ('UseArea', '0', '');
INSERT INTO `qb_wei_config` VALUES ('Info_forbidOutPost', '0', '');
INSERT INTO `qb_wei_config` VALUES ('Info_closeWhy', '', '');
INSERT INTO `qb_wei_config` VALUES ('module_id', '37', '');
INSERT INTO `qb_wei_config` VALUES ('GroupPostYZ', '3,4,8', '');
INSERT INTO `qb_wei_config` VALUES ('Info_PostCommentType', '1', '');
INSERT INTO `qb_wei_config` VALUES ('module_pre', 'wei_', '');
INSERT INTO `qb_wei_config` VALUES ('Info_metakeywords', '', '');
INSERT INTO `qb_wei_config` VALUES ('Info_GroupPostYZ', '3,8,9,10', '');
INSERT INTO `qb_wei_config` VALUES ('allowGroupPost', '3,8,9,10', '');
INSERT INTO `qb_wei_config` VALUES ('SEO_description', '您可以搜索本地的新闻事件、本地的热点话题、本地的人物动态、本地的产品资讯等,快速了解它们的最新进展。', '');
INSERT INTO `qb_wei_config` VALUES ('SEO_keywords', '传播价值,丰富人生', '');
INSERT INTO `qb_wei_config` VALUES ('SEO_title', '微分享', '');
INSERT INTO `qb_wei_config` VALUES ('module_close', '0', '');
INSERT INTO `qb_wei_config` VALUES ('Info_webname', '微分享系统', '');
INSERT INTO `qb_wei_config` VALUES ('Info_ShowIndexRows', '50', '');

# --------------------------------------------------------

#
# 表的结构 `qb_wei_content`
#

DROP TABLE IF EXISTS `qb_wei_content`;
CREATE TABLE `qb_wei_content` (
  `id` mediumint(7) unsigned NOT NULL auto_increment,
  `title` varchar(150) NOT NULL default '',
  `smalltitle` varchar(100) NOT NULL default '',
  `fid` mediumint(7) unsigned NOT NULL default '0',
  `mid` mediumint(5) NOT NULL default '0',
  `fname` varchar(50) NOT NULL default '',
  `hits` mediumint(7) NOT NULL default '0',
  `pages` smallint(4) NOT NULL default '0',
  `comments` mediumint(7) NOT NULL default '0',
  `posttime` int(10) NOT NULL default '0',
  `list` int(10) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `author` varchar(30) NOT NULL default '',
  `copyfrom` varchar(100) NOT NULL default '',
  `copyfromurl` varchar(150) NOT NULL default '',
  `titlecolor` varchar(15) NOT NULL default '',
  `fonttype` tinyint(1) NOT NULL default '0',
  `picurl` varchar(150) NOT NULL default '0',
  `ispic` tinyint(1) NOT NULL default '0',
  `yz` tinyint(1) NOT NULL default '0',
  `yzer` varchar(30) NOT NULL default '',
  `yztime` int(10) NOT NULL default '0',
  `levels` tinyint(2) NOT NULL default '0',
  `levelstime` int(10) NOT NULL default '0',
  `keywords` varchar(100) NOT NULL default '',
  `jumpurl` varchar(150) NOT NULL default '',
  `iframeurl` varchar(150) NOT NULL default '',
  `style` varchar(15) NOT NULL default '',
  `template` varchar(255) NOT NULL default '',
  `target` tinyint(1) NOT NULL default '0',
  `ip` varchar(15) NOT NULL default '',
  `lastfid` mediumint(7) NOT NULL default '0',
  `money` mediumint(7) NOT NULL default '0',
  `buyuser` text NOT NULL,
  `passwd` varchar(32) NOT NULL default '',
  `allowdown` varchar(150) NOT NULL default '',
  `allowview` varchar(150) NOT NULL default '',
  `editer` varchar(30) NOT NULL default '',
  `edittime` int(10) NOT NULL default '0',
  `begintime` int(10) NOT NULL default '0',
  `endtime` int(10) NOT NULL default '0',
  `description` text NOT NULL,
  `lastview` int(10) NOT NULL default '0',
  `digg_num` mediumint(7) NOT NULL default '0',
  `digg_time` int(10) NOT NULL default '0',
  `forbidcomment` tinyint(1) NOT NULL default '0',
  `ifvote` tinyint(1) NOT NULL default '0',
  `heart` varchar(255) NOT NULL default '',
  `htmlname` varchar(100) NOT NULL default '',
  `city_id` int(7) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `fid` (`fid`),
  KEY `hits` (`hits`,`yz`,`fid`,`ispic`),
  KEY `list` (`list`,`yz`,`fid`,`ispic`),
  KEY `ispic` (`ispic`),
  KEY `uid` (`uid`),
  KEY `levels` (`levels`),
  KEY `digg_num` (`digg_num`),
  KEY `digg_time` (`digg_time`),
  KEY `mid` (`mid`),
  KEY `posttime` (`yz`,`posttime`,`fid`,`ispic`)
) TYPE=MyISAM AUTO_INCREMENT=36 ;

#
# 导出表中的数据 `qb_wei_content`
#

INSERT INTO `qb_wei_content` VALUES (1, '', '', 3, 1, '糗事', 7, 0, 0, 1362993840, 1362993840, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312160327_gjpzj.jpg', 1, 1, '', 0, 0, 0, '白富美 穷小子 创业 一夜致富 美女 汽车 富二代', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363081737, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (2, '', '', 3, 1, '糗事', 4, 0, 0, 1362994193, 1362994193, 1, 'admin', '', '', '', '', 0, 'http://t2.qpic.cn/mblogpic/6d0b229e8a35b258ec4c/460', 1, 1, '', 0, 0, 0, '网友 富家子弟 度假 蜜月 宝马 网购 炫富 白富美', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363141300, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (3, '', '', 3, 1, '糗事', 1, 0, 0, 1362994270, 1362994270, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312160323_c4cba.jpg', 1, 1, '', 0, 0, 0, '网友 富家子弟 度假 蜜月 宝马 网购 炫富 白富美 穷小子 创业 一夜致富 美女 汽车 富二代', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363075303, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (4, '', '', 3, 1, '糗事', 2, 0, 0, 1362994310, 1362994310, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312160353_qc7xt.jpg', 1, 1, '', 0, 0, 0, '网友 富家子弟 度假 蜜月 宝马', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363076262, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (5, '', '', 3, 1, '糗事', 0, 0, 0, 1362994391, 1362994391, 1, 'admin', '', '', '', '', 0, 'http://t1.qpic.cn/mblogpic/9d56cc39b24168ff955a/460', 1, 1, '', 0, 0, 0, '度假 蜜月 宝马 网购 炫富 白富美 穷小子', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (6, '', '', 3, 1, '糗事', 1, 0, 0, 1362994419, 1362994419, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312160325_kd6sk.jpg', 1, 1, '', 0, 0, 0, '创业 一夜致富 美女 汽车 富二代', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363075387, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (7, '', '', 3, 1, '糗事', 1, 0, 0, 1362994450, 1362994450, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312160316_yozpo.jpg', 1, 1, '', 0, 0, 0, '穷小子 创业 一夜致富 美女 汽车', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363075504, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (8, '', '', 3, 1, '糗事', 2, 0, 0, 1362994525, 1362994525, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312160343_uxmpj.jpg', 1, 1, '', 0, 0, 0, '网友 富家子弟 度假 蜜月', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363075533, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (9, '', '', 3, 1, '糗事', 1, 0, 0, 1362994568, 1362994568, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312160347_rlavc.jpg', 1, 1, '', 0, 0, 0, '宝马 网购 炫富 白富美 穷小子 创业', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363075412, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (10, '', '', 3, 1, '糗事', 2, 0, 0, 1362994605, 1362994605, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312150313_6lp86.jpg', 1, 1, '', 0, 0, 0, '富家子弟 度假 蜜月 宝马 网购 炫富', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363082500, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (11, '', '', 3, 1, '糗事', 3, 0, 0, 1362994670, 1362994670, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312150338_pcs0v.jpg', 1, 1, '', 0, 0, 0, '网购 炫富 白富美 穷小子 创业 一夜致富 美女 汽车', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363082504, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (12, '', '', 3, 1, '糗事', 0, 0, 0, 1362994693, 1362994693, 1, 'admin', '', '', '', '', 0, 'http://t2.qpic.cn/mblogpic/95e9b5bb820c72451128/460', 1, 1, '', 0, 0, 0, '创业 一夜致富 美女 汽车 富二代', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (13, '', '', 3, 1, '糗事', 1, 0, 0, 1362994716, 1362994716, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312160347_ooy9e.jpg', 1, 1, '', 0, 0, 0, '网友 富家子弟 度假 蜜月 宝马', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363075353, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (14, '', '', 3, 1, '糗事', 0, 0, 0, 1362994745, 1362994745, 1, 'admin', '', '', '', '', 0, 'http://t2.qpic.cn/mblogpic/d27dff3ea7c6ce76ab5a/460', 1, 1, '', 0, 0, 0, '富家子弟 度假 蜜月 宝马 网购 炫富 白富美', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (15, '', '', 3, 1, '糗事', 1, 0, 0, 1362994772, 1362994772, 1, 'admin', '', '', '', '', 0, 'http://t2.qpic.cn/mblogpic/7356bd04b9a119944baa/460', 1, 1, '', 0, 0, 0, '白富美 穷小子 创业 一夜致富 美女 汽车 富二代', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363081853, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (16, '', '', 3, 1, '糗事', 1, 0, 0, 1362994825, 1362994825, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312150344_s22rf.jpg', 1, 1, '', 0, 0, 0, '宝马 网购 炫富 白富美 穷小子 创业', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363074868, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (17, '', '', 3, 1, '糗事', 0, 0, 0, 1362994854, 1362994854, 1, 'admin', '', '', '', '', 0, 'http://t2.qpic.cn/mblogpic/b098a0111c1542aaf648/460', 1, 1, '', 0, 0, 0, '网友 富家子弟 度假 蜜月 宝马 网购', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (18, '', '', 1, 1, '新鲜事', 5, 0, 0, 1362994893, 1362994893, 1, 'admin', '', '', '', '', 0, 'qb_wei_/1/1_20130312160325_rp7gj.jpg', 1, 1, '', 0, 0, 0, '度假 蜜月 宝马 网购 穷小子 创业 一夜致富 美女 汽车 富二代', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363081300, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (19, '', '', 1, 1, '新鲜事', 2, 0, 0, 1362994928, 1362994928, 1, 'admin', '', '', '', '', 0, 'http://t2.qpic.cn/mblogpic/2f80c5296d3cdc99a918/460', 1, 1, '', 0, 0, 0, '炫富 白富美 网友 富家子弟 度假 蜜月 宝马 网购 穷小子', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363081849, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (20, '', '', 1, 1, '新鲜事', 0, 0, 0, 1362994958, 1362994958, 1, 'admin', '', '', '', '', 0, 'http://t1.qpic.cn/mblogpic/ac53feee6c0057600020/460', 1, 1, '', 0, 0, 0, '穷小子 创业 一夜致富 美女 汽车 富二代', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (21, '', '', 4, 1, '美女', 3, 0, 0, 1362994990, 1362994990, 1, 'admin', '', '', '', '', 0, 'qb_wei_/4/1_20130312160349_ocqdz.jpg', 1, 1, '', 0, 0, 0, '白富美 网友 富家子弟 度假 蜜月 宝马 网购 穷小子', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363075254, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (22, '', '', 4, 1, '美女', 2, 0, 0, 1362995010, 1362995010, 1, 'admin', '', '', '', '', 0, 'qb_wei_/4/1_20130312160322_ye0n4.jpg', 1, 1, '', 0, 0, 0, '富家子弟 度假 蜜月 宝马 网购 穷小子', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363081845, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (23, '', '', 4, 1, '美女', 3, 0, 0, 1362995048, 1362995048, 1, 'admin', '', '', '', '', 0, 'qb_wei_/4/1_20130312150300_tonwt.jpg', 1, 1, '', 0, 0, 0, '穷小子 创业 一夜致富 美女 汽车 富二代', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363081663, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (24, '', '', 4, 1, '美女', 3, 0, 0, 1362995206, 1362995206, 1, 'admin', '', '', '', '', 0, 'qb_wei_/4/1_20130312150311_zih7a.jpg', 1, 1, '', 0, 0, 0, '白富美 网友 富家子弟 宝马 网购 穷小子 创业', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363081685, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (25, '', '', 4, 1, '美女', 5, 0, 0, 1362995451, 1362995451, 1, 'admin', '', '', '', '', 0, 'qb_wei_/4/1_20130312150334_5belc.jpg', 1, 1, '', 0, 0, 0, '网友 富家子弟 宝马 网购 穷小子 创业 一夜致富 美女', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363158598, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (26, '', '', 4, 1, '美女', 9, 0, 0, 1362995562, 1362995562, 1, 'admin', '', '', '', '', 0, 'qb_wei_/4/1_20130312150349_p9iiy.jpg', 1, 1, '', 0, 0, 0, '宝马 网购 穷小子 创业 一夜致富 美女 汽车', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363141363, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (27, '', '', 4, 1, '美女', 1, 0, 0, 1362995766, 1362995766, 1, 'admin', '', '', '', '', 0, 'qb_wei_/4/1_20130312160338_lrvpa.jpg', 1, 1, '', 0, 0, 0, '炫富 白富美 网友 富家子弟 宝马 网购 穷小子 创业 一夜致富', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363075700, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (28, '', '', 5, 1, '搞笑', 17, 0, 0, 1362995840, 1362995840, 1, 'admin', '', '', '', '', 0, 'qb_wei_/5/1_20130312150340_ggdtu.jpg', 1, 1, '', 0, 0, 0, '宝马 网购 穷小子 创业 一夜致富', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363081676, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (29, '', '', 5, 1, '搞笑', 59, 0, 0, 1362995892, 1362995892, 1, 'admin', '', '', '', '', 0, 'qb_wei_/5/1_20130312160324_2fstz.jpg', 1, 1, '', 0, 0, 0, '富二代 炫富 白富美 网友 富家子弟 宝马 网购', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363158587, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (30, '', '', 5, 1, '搞笑', 4, 0, 0, 1362996015, 1362996015, 1, 'admin', '', '', '', '', 0, 'qb_wei_/5/1_20130312150312_hbn71.jpg', 1, 1, '', 0, 0, 0, '网购 穷小子 创业 一夜致富', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363081653, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (31, '', '', 5, 1, '搞笑', 4, 0, 0, 1362996068, 1362996068, 1, 'admin', '', '', '', '', 0, 'qb_wei_/5/1_20130312150307_8xa95.jpg', 1, 1, '', 0, 0, 0, '富二代 炫富 白富美 网友 富家子弟 宝马 网购 穷小子', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363074466, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (32, '', '', 5, 1, '搞笑', 9, 0, 0, 1362996089, 1362996089, 1, 'admin', '', '', '', '', 0, 'qb_wei_/5/1_20130312160357_pwcaj.jpg', 1, 1, '', 0, 0, 0, '美女 汽车 富二代 炫富 白富美 网友', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363081671, 0, 0, 0, 0, '', '', 0);

# --------------------------------------------------------

#
# 表的结构 `qb_wei_content_1`
#

DROP TABLE IF EXISTS `qb_wei_content_1`;
CREATE TABLE `qb_wei_content_1` (
  `rid` mediumint(7) NOT NULL auto_increment,
  `subhead` varchar(150) NOT NULL default '',
  `id` mediumint(7) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `topic` tinyint(1) NOT NULL default '0',
  `content` mediumtext NOT NULL,
  `orderid` mediumint(7) NOT NULL default '0',
  PRIMARY KEY  (`rid`),
  KEY `aid` (`id`,`topic`)
) TYPE=MyISAM AUTO_INCREMENT=36 ;

#
# 导出表中的数据 `qb_wei_content_1`
#

INSERT INTO `qb_wei_content_1` VALUES (1, '', 1, 3, 1, 1, '<p>其實心底知道妳會走，但很怕面對，所以一直都當平日一樣過，總期望我們還會見面...今天是小琳的送別儀式，她雖然最後還是被癌症帶走了，但她的積極樂觀一直留在人世。一路走好，美麗的鄧小琳。</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (2, '', 2, 3, 1, 1, '<p>也没有太多奢望，就是想透透地深呼吸一下。</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (3, '', 3, 3, 1, 1, '<p>悉尼机场安检门口。鞋好看吗？</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (4, '', 4, 3, 1, 1, '<p>对爱的执着，静静地等待着那份天荒地老。</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (5, '', 5, 3, 1, 1, '<p>我发了张有声照片，快来听一下</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (6, '', 6, 3, 1, 1, '<p>是不是到了星期天空氣跟人都會感受到它的舒適呢！很多時候穿搭是跟著心情走的，有時隨性的搭配會令人開心一整天！這麼輕鬆的一天妳怎麼穿呢？給自己搭配一個好心情吧～</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (7, '', 7, 3, 1, 1, '<p>相爱的时候需要真诚，争执的时候需要沟通， 生气的时候需要冷静，愉快的时候需要分享， 指责的时候需要谅解，过日子需要包容。</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (8, '', 8, 3, 1, 1, '<p>当我们不知所措，难以抉择，心烦意的时候，一切交给「祂」帮我们安排！</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (9, '', 9, 3, 1, 1, '<p>拜会悉尼中国总领事馆。与中国驻悉尼总领事馆副总领事刘侃合影。</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (10, '', 10, 3, 1, 1, '<p>黄昏的海面与天空，不禁让自己想变成天空中的一抹霞，被天空怀抱，让海水映射！</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (11, '', 11, 3, 1, 1, '<p>刚刚在街上追帽子，太丢人了。</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (12, '', 12, 3, 1, 1, '<p>跟大家分享～觀音菩薩講，好好活，不要攀，不要比，不要自己氣自己，父是天，母是地，盡孝父母要牢記，夫妻愛，子女孝，家和比啥都重要，行點善，積點德，多做善事多積德，官再大，錢再多，閻王照樣土里拖。本月是觀音菩薩出家月，福，祿，壽，喜，財各路神仙都來保佑。</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (13, '', 13, 3, 1, 1, '<p>大风尘土起，遮天蔽日的脏啊！！奇怪的是路上行人没几个戴口罩的！为什么呢？是着急忘戴了？还是～？风尘是老天的，肺是自己的。好歹还是戴着挡挡吧！ 回家都记得洗洗脸，漱漱口，通通鼻子。</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (14, '', 14, 3, 1, 1, '<p>最喜欢的，不一定是最好的；最好的，不一定是最合适的；最合适的，才是最值得珍惜的。有情能爱，有心能知，有缘能聚，有梦能圆。年轻的情怀，喜欢一个人，爱一朵花，其实并没有错。人生短短几十年，不要给自己留下了什么遗憾，想笑就笑，想哭就哭，只要爱过，喜欢过，珍惜过，就是美丽的！</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (15, '', 15, 3, 1, 1, '<p> &nbsp;梁晓声：“人文”就是一种植根于内心的素养，以承认约束为前提的自由，一种能设身处地为别人着想的善良。</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (16, '', 16, 3, 1, 1, '<p>刚刚录完！一钻进棚就是十二个小时啊！唱到哪儿了？有结果了吗？</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (17, '', 17, 3, 1, 1, '<p>吕哥为啥不发一张嫂子的照片？我还等呢！哥有哥的道理是吧！美丽的花也代表女生了！谢谢吕哥！每年都记得我们！也祝吕哥和我们一样快乐！8月3号是男生的节日要记得！</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (18, '', 18, 1, 1, 1, '<p>相貌是一个人心灵的写照，脸庞是一个人情感的凝固。的确，一个人存好心，做好人，有文化、有品位时，欢喜充心，愉悦映脸，她一定会越变越漂亮，越变越有味，反之则越变越丑陋，越变越萎缩。对自己的容貌负责，让自己的心充满慈悲吧！</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (19, '', 19, 1, 1, 1, '<p>三八节是女性的节日，先祝所有女同胞们节日快乐！同样的，三八节们也该为男士们鼓鼓掌。虽然您不是女性，但是女性们的生活必需品；虽然您不是母亲，却让很多女人圆了为人母的梦想。所以，男同胞们也过节去吧！！</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (20, '', 20, 1, 1, 1, '<p>映啦 虽然时间上没办法配合宣传，但是我会到电影院去看的 祝福票房大卖 附上剧照一张</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (21, '', 21, 4, 1, 1, '<p>花哈哈哈哈哈！我買了義大利名牌西當撲麗絲包～太可愛樂！</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (22, '', 22, 4, 1, 1, '<p>这光景，多少鸡汤都不够心灵这淌浑水的。</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (23, '', 23, 4, 1, 1, '<p> 海风习习，太惬意了。心如白云般洁净，把几年的劳累淘空，充电充电一一</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (24, '', 24, 4, 1, 1, '<p> 我真的愛上長裙，前幾天跑去做了五件，哈哈～有空再分享！</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (25, '', 25, 4, 1, 1, '<p> 昨天为朋友拿签名、没想到林小姐下车亲自给我送来、受宠若惊、谢谢林志玲</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (26, '', 26, 4, 1, 1, '<p> 嫌犯找到，但婴儿已逝，让我们为这名逝去的小生命默哀 被嫌犯埋于雪中的不仅是一个婴儿冰凉的身体，也是万千人对犯罪者具有基本人性的期盼。提醒年轻的父母们，千万不要让自己年幼的孩子独处，在这个复杂的社会中保护好你的孩子。</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (27, '', 27, 4, 1, 1, '<p>做一档和性格色彩有关的节目，让人们可以通过电视节目真正看清自己读懂他人，这些年，我一直在努力。</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (28, '', 28, 5, 1, 1, '<p>終於拿到金童玉女DVD也看完了，這部作品我自己很喜歡，劇情緊湊，也有能讓人省思的地方，一部好戲就是能讓人看完能在腦海裡引起漣漪，也謝謝用心的牛導，我想這是一部給我好多信心的一部電影，沒看過的朋友想辦法看一下吧！最近休息就變成大叔了，大家別見怪呀，哈哈！</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (29, '', 29, 5, 1, 1, '<p>冬去春来，匆匆忙忙的，又开始新的一年去拼搏了</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (30, '', 30, 5, 1, 1, '<p>我拍的真是马路！</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (31, '', 31, 5, 1, 1, '<p> 好累、终于到家了！猜猜我都买什么花了？该怎么摆才好呢？</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (32, '', 32, 5, 1, 1, '<p> 你可知道塞车这种痛苦？很难受的！哎！</p>', 0);

# --------------------------------------------------------

#
# 表的结构 `qb_wei_keyword`
#

DROP TABLE IF EXISTS `qb_wei_keyword`;
CREATE TABLE `qb_wei_keyword` (
  `kid` mediumint(5) NOT NULL auto_increment,
  `keywords` varchar(30) NOT NULL default '',
  `list` int(10) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `ifhide` tinyint(1) NOT NULL default '0',
  `url` varchar(150) NOT NULL default '',
  `num` smallint(4) unsigned NOT NULL default '0',
  `city_id` mediumint(7) NOT NULL default '0',
  `color` varchar(7) NOT NULL default '',
  `bold` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`kid`),
  KEY `keywords` (`keywords`),
  KEY `num` (`num`),
  KEY `city_id` (`city_id`)
) TYPE=MyISAM AUTO_INCREMENT=21 ;

#
# 导出表中的数据 `qb_wei_keyword`
#

INSERT INTO `qb_wei_keyword` VALUES (1, '美女', 0, 1, 1, '', 13, 0, '#FF0000', 0);
INSERT INTO `qb_wei_keyword` VALUES (10, '网友', 0, 1, 1, '', 13, 0, '', 0);
INSERT INTO `qb_wei_keyword` VALUES (9, '白富美', 0, 1, 1, '', 15, 0, '', 0);
INSERT INTO `qb_wei_keyword` VALUES (8, '炫富', 0, 1, 1, '', 12, 0, '#F709F7', 0);
INSERT INTO `qb_wei_keyword` VALUES (7, '富二代', 0, 1, 1, '', 10, 0, '#3CA9C4', 1);
INSERT INTO `qb_wei_keyword` VALUES (11, '富家子弟', 0, 1, 1, '', 16, 0, '#55AA66', 1);
INSERT INTO `qb_wei_keyword` VALUES (12, '宝马', 0, 1, 1, '', 21, 0, '#FF0000', 1);
INSERT INTO `qb_wei_keyword` VALUES (13, '网购', 0, 1, 1, '', 21, 0, '', 0);
INSERT INTO `qb_wei_keyword` VALUES (14, '穷小子', 0, 1, 1, '', 21, 0, '#FF0000', 0);
INSERT INTO `qb_wei_keyword` VALUES (15, '创业', 0, 1, 1, '', 18, 0, '', 0);
INSERT INTO `qb_wei_keyword` VALUES (16, '一夜致富', 0, 1, 1, '', 15, 0, '#0000FF', 0);
INSERT INTO `qb_wei_keyword` VALUES (17, '汽车', 0, 1, 1, '', 11, 0, '', 0);
INSERT INTO `qb_wei_keyword` VALUES (18, '度假', 0, 1, 1, '', 13, 0, '#4DB34D', 0);
INSERT INTO `qb_wei_keyword` VALUES (19, '蜜月', 0, 1, 1, '', 13, 0, '', 0);

# --------------------------------------------------------

#
# 表的结构 `qb_wei_keywordid`
#

DROP TABLE IF EXISTS `qb_wei_keywordid`;
CREATE TABLE `qb_wei_keywordid` (
  `kid` mediumint(7) NOT NULL default '0',
  `id` mediumint(7) NOT NULL default '0',
  KEY `kid` (`kid`),
  KEY `id` (`id`)
) TYPE=MyISAM;

#
# 导出表中的数据 `qb_wei_keywordid`
#

INSERT INTO `qb_wei_keywordid` VALUES (1, 32);
INSERT INTO `qb_wei_keywordid` VALUES (2, 32);
INSERT INTO `qb_wei_keywordid` VALUES (3, 32);
INSERT INTO `qb_wei_keywordid` VALUES (4, 32);
INSERT INTO `qb_wei_keywordid` VALUES (5, 32);
INSERT INTO `qb_wei_keywordid` VALUES (6, 32);
INSERT INTO `qb_wei_keywordid` VALUES (7, 31);
INSERT INTO `qb_wei_keywordid` VALUES (8, 31);
INSERT INTO `qb_wei_keywordid` VALUES (9, 31);
INSERT INTO `qb_wei_keywordid` VALUES (10, 31);
INSERT INTO `qb_wei_keywordid` VALUES (11, 31);
INSERT INTO `qb_wei_keywordid` VALUES (12, 31);
INSERT INTO `qb_wei_keywordid` VALUES (13, 31);
INSERT INTO `qb_wei_keywordid` VALUES (14, 31);
INSERT INTO `qb_wei_keywordid` VALUES (13, 30);
INSERT INTO `qb_wei_keywordid` VALUES (14, 30);
INSERT INTO `qb_wei_keywordid` VALUES (15, 30);
INSERT INTO `qb_wei_keywordid` VALUES (16, 30);
INSERT INTO `qb_wei_keywordid` VALUES (7, 29);
INSERT INTO `qb_wei_keywordid` VALUES (8, 29);
INSERT INTO `qb_wei_keywordid` VALUES (9, 29);
INSERT INTO `qb_wei_keywordid` VALUES (10, 29);
INSERT INTO `qb_wei_keywordid` VALUES (11, 29);
INSERT INTO `qb_wei_keywordid` VALUES (12, 29);
INSERT INTO `qb_wei_keywordid` VALUES (13, 29);
INSERT INTO `qb_wei_keywordid` VALUES (12, 28);
INSERT INTO `qb_wei_keywordid` VALUES (13, 28);
INSERT INTO `qb_wei_keywordid` VALUES (14, 28);
INSERT INTO `qb_wei_keywordid` VALUES (15, 28);
INSERT INTO `qb_wei_keywordid` VALUES (16, 28);
INSERT INTO `qb_wei_keywordid` VALUES (8, 27);
INSERT INTO `qb_wei_keywordid` VALUES (9, 27);
INSERT INTO `qb_wei_keywordid` VALUES (10, 27);
INSERT INTO `qb_wei_keywordid` VALUES (11, 27);
INSERT INTO `qb_wei_keywordid` VALUES (12, 27);
INSERT INTO `qb_wei_keywordid` VALUES (13, 27);
INSERT INTO `qb_wei_keywordid` VALUES (14, 27);
INSERT INTO `qb_wei_keywordid` VALUES (15, 27);
INSERT INTO `qb_wei_keywordid` VALUES (16, 27);
INSERT INTO `qb_wei_keywordid` VALUES (12, 26);
INSERT INTO `qb_wei_keywordid` VALUES (13, 26);
INSERT INTO `qb_wei_keywordid` VALUES (14, 26);
INSERT INTO `qb_wei_keywordid` VALUES (15, 26);
INSERT INTO `qb_wei_keywordid` VALUES (16, 26);
INSERT INTO `qb_wei_keywordid` VALUES (1, 26);
INSERT INTO `qb_wei_keywordid` VALUES (17, 26);
INSERT INTO `qb_wei_keywordid` VALUES (10, 25);
INSERT INTO `qb_wei_keywordid` VALUES (11, 25);
INSERT INTO `qb_wei_keywordid` VALUES (12, 25);
INSERT INTO `qb_wei_keywordid` VALUES (13, 25);
INSERT INTO `qb_wei_keywordid` VALUES (14, 25);
INSERT INTO `qb_wei_keywordid` VALUES (15, 25);
INSERT INTO `qb_wei_keywordid` VALUES (16, 25);
INSERT INTO `qb_wei_keywordid` VALUES (1, 25);
INSERT INTO `qb_wei_keywordid` VALUES (9, 24);
INSERT INTO `qb_wei_keywordid` VALUES (10, 24);
INSERT INTO `qb_wei_keywordid` VALUES (11, 24);
INSERT INTO `qb_wei_keywordid` VALUES (12, 24);
INSERT INTO `qb_wei_keywordid` VALUES (13, 24);
INSERT INTO `qb_wei_keywordid` VALUES (14, 24);
INSERT INTO `qb_wei_keywordid` VALUES (15, 24);
INSERT INTO `qb_wei_keywordid` VALUES (14, 23);
INSERT INTO `qb_wei_keywordid` VALUES (15, 23);
INSERT INTO `qb_wei_keywordid` VALUES (16, 23);
INSERT INTO `qb_wei_keywordid` VALUES (1, 23);
INSERT INTO `qb_wei_keywordid` VALUES (17, 23);
INSERT INTO `qb_wei_keywordid` VALUES (7, 23);
INSERT INTO `qb_wei_keywordid` VALUES (11, 22);
INSERT INTO `qb_wei_keywordid` VALUES (18, 22);
INSERT INTO `qb_wei_keywordid` VALUES (19, 22);
INSERT INTO `qb_wei_keywordid` VALUES (12, 22);
INSERT INTO `qb_wei_keywordid` VALUES (13, 22);
INSERT INTO `qb_wei_keywordid` VALUES (14, 22);
INSERT INTO `qb_wei_keywordid` VALUES (9, 21);
INSERT INTO `qb_wei_keywordid` VALUES (10, 21);
INSERT INTO `qb_wei_keywordid` VALUES (11, 21);
INSERT INTO `qb_wei_keywordid` VALUES (18, 21);
INSERT INTO `qb_wei_keywordid` VALUES (19, 21);
INSERT INTO `qb_wei_keywordid` VALUES (12, 21);
INSERT INTO `qb_wei_keywordid` VALUES (13, 21);
INSERT INTO `qb_wei_keywordid` VALUES (14, 21);
INSERT INTO `qb_wei_keywordid` VALUES (14, 20);
INSERT INTO `qb_wei_keywordid` VALUES (15, 20);
INSERT INTO `qb_wei_keywordid` VALUES (16, 20);
INSERT INTO `qb_wei_keywordid` VALUES (1, 20);
INSERT INTO `qb_wei_keywordid` VALUES (17, 20);
INSERT INTO `qb_wei_keywordid` VALUES (7, 20);
INSERT INTO `qb_wei_keywordid` VALUES (8, 19);
INSERT INTO `qb_wei_keywordid` VALUES (9, 19);
INSERT INTO `qb_wei_keywordid` VALUES (10, 19);
INSERT INTO `qb_wei_keywordid` VALUES (11, 19);
INSERT INTO `qb_wei_keywordid` VALUES (18, 19);
INSERT INTO `qb_wei_keywordid` VALUES (19, 19);
INSERT INTO `qb_wei_keywordid` VALUES (12, 19);
INSERT INTO `qb_wei_keywordid` VALUES (13, 19);
INSERT INTO `qb_wei_keywordid` VALUES (14, 19);
INSERT INTO `qb_wei_keywordid` VALUES (18, 18);
INSERT INTO `qb_wei_keywordid` VALUES (19, 18);
INSERT INTO `qb_wei_keywordid` VALUES (12, 18);
INSERT INTO `qb_wei_keywordid` VALUES (13, 18);
INSERT INTO `qb_wei_keywordid` VALUES (14, 18);
INSERT INTO `qb_wei_keywordid` VALUES (15, 18);
INSERT INTO `qb_wei_keywordid` VALUES (16, 18);
INSERT INTO `qb_wei_keywordid` VALUES (1, 18);
INSERT INTO `qb_wei_keywordid` VALUES (17, 18);
INSERT INTO `qb_wei_keywordid` VALUES (7, 18);
INSERT INTO `qb_wei_keywordid` VALUES (10, 17);
INSERT INTO `qb_wei_keywordid` VALUES (11, 17);
INSERT INTO `qb_wei_keywordid` VALUES (18, 17);
INSERT INTO `qb_wei_keywordid` VALUES (19, 17);
INSERT INTO `qb_wei_keywordid` VALUES (12, 17);
INSERT INTO `qb_wei_keywordid` VALUES (13, 17);
INSERT INTO `qb_wei_keywordid` VALUES (12, 16);
INSERT INTO `qb_wei_keywordid` VALUES (13, 16);
INSERT INTO `qb_wei_keywordid` VALUES (8, 16);
INSERT INTO `qb_wei_keywordid` VALUES (9, 16);
INSERT INTO `qb_wei_keywordid` VALUES (14, 16);
INSERT INTO `qb_wei_keywordid` VALUES (15, 16);
INSERT INTO `qb_wei_keywordid` VALUES (9, 15);
INSERT INTO `qb_wei_keywordid` VALUES (14, 15);
INSERT INTO `qb_wei_keywordid` VALUES (15, 15);
INSERT INTO `qb_wei_keywordid` VALUES (16, 15);
INSERT INTO `qb_wei_keywordid` VALUES (1, 15);
INSERT INTO `qb_wei_keywordid` VALUES (17, 15);
INSERT INTO `qb_wei_keywordid` VALUES (7, 15);
INSERT INTO `qb_wei_keywordid` VALUES (11, 14);
INSERT INTO `qb_wei_keywordid` VALUES (18, 14);
INSERT INTO `qb_wei_keywordid` VALUES (19, 14);
INSERT INTO `qb_wei_keywordid` VALUES (12, 14);
INSERT INTO `qb_wei_keywordid` VALUES (13, 14);
INSERT INTO `qb_wei_keywordid` VALUES (8, 14);
INSERT INTO `qb_wei_keywordid` VALUES (9, 14);
INSERT INTO `qb_wei_keywordid` VALUES (10, 13);
INSERT INTO `qb_wei_keywordid` VALUES (11, 13);
INSERT INTO `qb_wei_keywordid` VALUES (18, 13);
INSERT INTO `qb_wei_keywordid` VALUES (19, 13);
INSERT INTO `qb_wei_keywordid` VALUES (12, 13);
INSERT INTO `qb_wei_keywordid` VALUES (15, 12);
INSERT INTO `qb_wei_keywordid` VALUES (16, 12);
INSERT INTO `qb_wei_keywordid` VALUES (1, 12);
INSERT INTO `qb_wei_keywordid` VALUES (17, 12);
INSERT INTO `qb_wei_keywordid` VALUES (7, 12);
INSERT INTO `qb_wei_keywordid` VALUES (13, 11);
INSERT INTO `qb_wei_keywordid` VALUES (8, 11);
INSERT INTO `qb_wei_keywordid` VALUES (9, 11);
INSERT INTO `qb_wei_keywordid` VALUES (14, 11);
INSERT INTO `qb_wei_keywordid` VALUES (15, 11);
INSERT INTO `qb_wei_keywordid` VALUES (16, 11);
INSERT INTO `qb_wei_keywordid` VALUES (1, 11);
INSERT INTO `qb_wei_keywordid` VALUES (17, 11);
INSERT INTO `qb_wei_keywordid` VALUES (11, 10);
INSERT INTO `qb_wei_keywordid` VALUES (18, 10);
INSERT INTO `qb_wei_keywordid` VALUES (19, 10);
INSERT INTO `qb_wei_keywordid` VALUES (12, 10);
INSERT INTO `qb_wei_keywordid` VALUES (13, 10);
INSERT INTO `qb_wei_keywordid` VALUES (8, 10);
INSERT INTO `qb_wei_keywordid` VALUES (12, 9);
INSERT INTO `qb_wei_keywordid` VALUES (13, 9);
INSERT INTO `qb_wei_keywordid` VALUES (8, 9);
INSERT INTO `qb_wei_keywordid` VALUES (9, 9);
INSERT INTO `qb_wei_keywordid` VALUES (14, 9);
INSERT INTO `qb_wei_keywordid` VALUES (15, 9);
INSERT INTO `qb_wei_keywordid` VALUES (10, 8);
INSERT INTO `qb_wei_keywordid` VALUES (11, 8);
INSERT INTO `qb_wei_keywordid` VALUES (18, 8);
INSERT INTO `qb_wei_keywordid` VALUES (19, 8);
INSERT INTO `qb_wei_keywordid` VALUES (14, 7);
INSERT INTO `qb_wei_keywordid` VALUES (15, 7);
INSERT INTO `qb_wei_keywordid` VALUES (16, 7);
INSERT INTO `qb_wei_keywordid` VALUES (1, 7);
INSERT INTO `qb_wei_keywordid` VALUES (17, 7);
INSERT INTO `qb_wei_keywordid` VALUES (15, 6);
INSERT INTO `qb_wei_keywordid` VALUES (16, 6);
INSERT INTO `qb_wei_keywordid` VALUES (1, 6);
INSERT INTO `qb_wei_keywordid` VALUES (17, 6);
INSERT INTO `qb_wei_keywordid` VALUES (7, 6);
INSERT INTO `qb_wei_keywordid` VALUES (18, 5);
INSERT INTO `qb_wei_keywordid` VALUES (19, 5);
INSERT INTO `qb_wei_keywordid` VALUES (12, 5);
INSERT INTO `qb_wei_keywordid` VALUES (13, 5);
INSERT INTO `qb_wei_keywordid` VALUES (8, 5);
INSERT INTO `qb_wei_keywordid` VALUES (9, 5);
INSERT INTO `qb_wei_keywordid` VALUES (14, 5);
INSERT INTO `qb_wei_keywordid` VALUES (10, 4);
INSERT INTO `qb_wei_keywordid` VALUES (11, 4);
INSERT INTO `qb_wei_keywordid` VALUES (18, 4);
INSERT INTO `qb_wei_keywordid` VALUES (19, 4);
INSERT INTO `qb_wei_keywordid` VALUES (12, 4);
INSERT INTO `qb_wei_keywordid` VALUES (10, 3);
INSERT INTO `qb_wei_keywordid` VALUES (11, 3);
INSERT INTO `qb_wei_keywordid` VALUES (18, 3);
INSERT INTO `qb_wei_keywordid` VALUES (19, 3);
INSERT INTO `qb_wei_keywordid` VALUES (12, 3);
INSERT INTO `qb_wei_keywordid` VALUES (13, 3);
INSERT INTO `qb_wei_keywordid` VALUES (8, 3);
INSERT INTO `qb_wei_keywordid` VALUES (9, 3);
INSERT INTO `qb_wei_keywordid` VALUES (14, 3);
INSERT INTO `qb_wei_keywordid` VALUES (15, 3);
INSERT INTO `qb_wei_keywordid` VALUES (16, 3);
INSERT INTO `qb_wei_keywordid` VALUES (1, 3);
INSERT INTO `qb_wei_keywordid` VALUES (17, 3);
INSERT INTO `qb_wei_keywordid` VALUES (7, 3);
INSERT INTO `qb_wei_keywordid` VALUES (10, 2);
INSERT INTO `qb_wei_keywordid` VALUES (11, 2);
INSERT INTO `qb_wei_keywordid` VALUES (18, 2);
INSERT INTO `qb_wei_keywordid` VALUES (19, 2);
INSERT INTO `qb_wei_keywordid` VALUES (12, 2);
INSERT INTO `qb_wei_keywordid` VALUES (13, 2);
INSERT INTO `qb_wei_keywordid` VALUES (8, 2);
INSERT INTO `qb_wei_keywordid` VALUES (9, 2);
INSERT INTO `qb_wei_keywordid` VALUES (9, 1);
INSERT INTO `qb_wei_keywordid` VALUES (14, 1);
INSERT INTO `qb_wei_keywordid` VALUES (15, 1);
INSERT INTO `qb_wei_keywordid` VALUES (16, 1);
INSERT INTO `qb_wei_keywordid` VALUES (1, 1);
INSERT INTO `qb_wei_keywordid` VALUES (17, 1);
INSERT INTO `qb_wei_keywordid` VALUES (7, 1);

# --------------------------------------------------------

#
# 表的结构 `qb_wei_sort`
#

DROP TABLE IF EXISTS `qb_wei_sort`;
CREATE TABLE `qb_wei_sort` (
  `fid` mediumint(7) unsigned NOT NULL auto_increment,
  `fup` mediumint(7) unsigned NOT NULL default '0',
  `mid` mediumint(5) NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  `class` smallint(4) NOT NULL default '0',
  `sons` smallint(4) NOT NULL default '0',
  `type` tinyint(1) NOT NULL default '0',
  `admin` varchar(100) NOT NULL default '',
  `list` int(10) NOT NULL default '0',
  `listorder` tinyint(2) NOT NULL default '0',
  `passwd` varchar(32) NOT NULL default '',
  `logo` varchar(150) NOT NULL default '',
  `descrip` text NOT NULL,
  `style` varchar(50) NOT NULL default '',
  `template` text NOT NULL,
  `jumpurl` varchar(150) NOT NULL default '',
  `maxperpage` tinyint(3) NOT NULL default '0',
  `metatitle` varchar(255) NOT NULL default '',
  `metakeywords` varchar(255) NOT NULL default '',
  `metadescription` varchar(255) NOT NULL default '',
  `allowcomment` tinyint(1) NOT NULL default '0',
  `allowpost` varchar(150) NOT NULL default '',
  `allowviewtitle` varchar(150) NOT NULL default '',
  `allowviewcontent` varchar(150) NOT NULL default '',
  `allowdownload` varchar(150) NOT NULL default '',
  `forbidshow` tinyint(1) NOT NULL default '0',
  `config` text NOT NULL,
  `list_html` varchar(255) NOT NULL default '',
  `bencandy_html` varchar(255) NOT NULL default '',
  `domain` varchar(150) NOT NULL default '',
  `domain_dir` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`fid`),
  KEY `fup` (`fup`),
  KEY `fmid` (`mid`)
) TYPE=MyISAM AUTO_INCREMENT=6 ;

#
# 导出表中的数据 `qb_wei_sort`
#

INSERT INTO `qb_wei_sort` VALUES (1, 0, 0, '新鲜事', 1, 0, 0, '', 0, 0, '', '', '', '', 'N;', '', 0, '', '', '', 0, '', '', '', '', 0, 'a:7:{s:11:"sonTitleRow";N;s:12:"sonTitleLeng";N;s:9:"cachetime";N;s:12:"sonListorder";N;s:14:"listContentNum";N;s:12:"ListShowType";N;s:11:"field_value";N;}', '', '', '', '');
INSERT INTO `qb_wei_sort` VALUES (2, 0, 0, '图片', 1, 2, 1, '', 0, 0, '', '', '', '', 'N;', '', 0, '', '', '', 0, '', '', '', '', 0, 'a:7:{s:11:"sonTitleRow";N;s:12:"sonTitleLeng";N;s:9:"cachetime";N;s:12:"sonListorder";N;s:14:"listContentNum";N;s:12:"ListShowType";N;s:11:"field_value";N;}', '', '', '', '');
INSERT INTO `qb_wei_sort` VALUES (3, 0, 0, '糗事', 1, 0, 0, '', 0, 0, '', '', '', '', 'N;', '', 0, '', '', '', 0, '', '', '', '', 0, 'a:7:{s:11:"sonTitleRow";N;s:12:"sonTitleLeng";N;s:9:"cachetime";N;s:12:"sonListorder";N;s:14:"listContentNum";N;s:12:"ListShowType";N;s:11:"field_value";N;}', '', '', '', '');
INSERT INTO `qb_wei_sort` VALUES (4, 2, 0, '美女', 2, 0, 0, '', 0, 0, '', '', '', '', 'N;', '', 0, '', '', '', 0, '', '', '', '', 0, 'a:7:{s:11:"sonTitleRow";N;s:12:"sonTitleLeng";N;s:9:"cachetime";N;s:12:"sonListorder";N;s:14:"listContentNum";N;s:12:"ListShowType";N;s:11:"field_value";N;}', '', '', '', '');
INSERT INTO `qb_wei_sort` VALUES (5, 2, 0, '搞笑', 2, 0, 0, '', 0, 0, '', '', '', '', 'N;', '', 0, '', '', '', 0, '', '', '', '', 0, 'a:7:{s:11:"sonTitleRow";N;s:12:"sonTitleLeng";N;s:9:"cachetime";N;s:12:"sonListorder";N;s:14:"listContentNum";N;s:12:"ListShowType";N;s:11:"field_value";N;}', '', '', '', '');
 