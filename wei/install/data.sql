INSERT INTO `qb_module` (`id`, `type`, `name`, `pre`, `dirname`, `domain`, `admindir`, `config`, `list`, `admingroup`, `adminmember`, `ifclose`) VALUES (20, 2, '΢����', 'wei_', 'wei', '', '', 'a:7:{s:12:"list_PhpName";s:18:"list.php?&fid=$fid";s:12:"show_PhpName";s:29:"bencandy.php?&fid=$fid&id=$id";s:8:"MakeHtml";N;s:14:"list_HtmlName1";N;s:14:"show_HtmlName1";N;s:14:"list_HtmlName2";N;s:14:"show_HtmlName2";N;}', 102, '', '', 0);
    

# --------------------------------------------------------

#
# ��Ľṹ `qb_wei_comments`
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
# �������е����� `qb_wei_comments`
#


# --------------------------------------------------------

#
# ��Ľṹ `qb_wei_config`
#

DROP TABLE IF EXISTS `qb_wei_config`;
CREATE TABLE `qb_wei_config` (
  `c_key` varchar(50) NOT NULL default '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY  (`c_key`)
) TYPE=MyISAM;

#
# �������е����� `qb_wei_config`
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
INSERT INTO `qb_wei_config` VALUES ('SEO_description', '�������������ص������¼������ص��ȵ㻰�⡢���ص����ﶯ̬�����صĲ�Ʒ��Ѷ��,�����˽����ǵ����½�չ��', '');
INSERT INTO `qb_wei_config` VALUES ('SEO_keywords', '������ֵ,�ḻ����', '');
INSERT INTO `qb_wei_config` VALUES ('SEO_title', '΢����', '');
INSERT INTO `qb_wei_config` VALUES ('module_close', '0', '');
INSERT INTO `qb_wei_config` VALUES ('Info_webname', '΢����ϵͳ', '');
INSERT INTO `qb_wei_config` VALUES ('Info_ShowIndexRows', '50', '');

# --------------------------------------------------------

#
# ��Ľṹ `qb_wei_content`
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
# �������е����� `qb_wei_content`
#

INSERT INTO `qb_wei_content` VALUES (1, '', '', 3, 1, '����', 7, 0, 0, 1362993840, 1362993840, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312160327_gjpzj.jpg', 1, 1, '', 0, 0, 0, '�׸��� ��С�� ��ҵ һҹ�¸� ��Ů ���� ������', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363081737, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (2, '', '', 3, 1, '����', 4, 0, 0, 1362994193, 1362994193, 1, 'admin', '', '', '', '', 0, 'http://t2.qpic.cn/mblogpic/6d0b229e8a35b258ec4c/460', 1, 1, '', 0, 0, 0, '���� �����ӵ� �ȼ� ���� ���� ���� �Ÿ� �׸���', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363141300, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (3, '', '', 3, 1, '����', 1, 0, 0, 1362994270, 1362994270, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312160323_c4cba.jpg', 1, 1, '', 0, 0, 0, '���� �����ӵ� �ȼ� ���� ���� ���� �Ÿ� �׸��� ��С�� ��ҵ һҹ�¸� ��Ů ���� ������', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363075303, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (4, '', '', 3, 1, '����', 2, 0, 0, 1362994310, 1362994310, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312160353_qc7xt.jpg', 1, 1, '', 0, 0, 0, '���� �����ӵ� �ȼ� ���� ����', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363076262, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (5, '', '', 3, 1, '����', 0, 0, 0, 1362994391, 1362994391, 1, 'admin', '', '', '', '', 0, 'http://t1.qpic.cn/mblogpic/9d56cc39b24168ff955a/460', 1, 1, '', 0, 0, 0, '�ȼ� ���� ���� ���� �Ÿ� �׸��� ��С��', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (6, '', '', 3, 1, '����', 1, 0, 0, 1362994419, 1362994419, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312160325_kd6sk.jpg', 1, 1, '', 0, 0, 0, '��ҵ һҹ�¸� ��Ů ���� ������', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363075387, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (7, '', '', 3, 1, '����', 1, 0, 0, 1362994450, 1362994450, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312160316_yozpo.jpg', 1, 1, '', 0, 0, 0, '��С�� ��ҵ һҹ�¸� ��Ů ����', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363075504, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (8, '', '', 3, 1, '����', 2, 0, 0, 1362994525, 1362994525, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312160343_uxmpj.jpg', 1, 1, '', 0, 0, 0, '���� �����ӵ� �ȼ� ����', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363075533, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (9, '', '', 3, 1, '����', 1, 0, 0, 1362994568, 1362994568, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312160347_rlavc.jpg', 1, 1, '', 0, 0, 0, '���� ���� �Ÿ� �׸��� ��С�� ��ҵ', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363075412, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (10, '', '', 3, 1, '����', 2, 0, 0, 1362994605, 1362994605, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312150313_6lp86.jpg', 1, 1, '', 0, 0, 0, '�����ӵ� �ȼ� ���� ���� ���� �Ÿ�', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363082500, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (11, '', '', 3, 1, '����', 3, 0, 0, 1362994670, 1362994670, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312150338_pcs0v.jpg', 1, 1, '', 0, 0, 0, '���� �Ÿ� �׸��� ��С�� ��ҵ һҹ�¸� ��Ů ����', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363082504, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (12, '', '', 3, 1, '����', 0, 0, 0, 1362994693, 1362994693, 1, 'admin', '', '', '', '', 0, 'http://t2.qpic.cn/mblogpic/95e9b5bb820c72451128/460', 1, 1, '', 0, 0, 0, '��ҵ һҹ�¸� ��Ů ���� ������', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (13, '', '', 3, 1, '����', 1, 0, 0, 1362994716, 1362994716, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312160347_ooy9e.jpg', 1, 1, '', 0, 0, 0, '���� �����ӵ� �ȼ� ���� ����', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363075353, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (14, '', '', 3, 1, '����', 0, 0, 0, 1362994745, 1362994745, 1, 'admin', '', '', '', '', 0, 'http://t2.qpic.cn/mblogpic/d27dff3ea7c6ce76ab5a/460', 1, 1, '', 0, 0, 0, '�����ӵ� �ȼ� ���� ���� ���� �Ÿ� �׸���', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (15, '', '', 3, 1, '����', 1, 0, 0, 1362994772, 1362994772, 1, 'admin', '', '', '', '', 0, 'http://t2.qpic.cn/mblogpic/7356bd04b9a119944baa/460', 1, 1, '', 0, 0, 0, '�׸��� ��С�� ��ҵ һҹ�¸� ��Ů ���� ������', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363081853, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (16, '', '', 3, 1, '����', 1, 0, 0, 1362994825, 1362994825, 1, 'admin', '', '', '', '', 0, 'qb_wei_/3/1_20130312150344_s22rf.jpg', 1, 1, '', 0, 0, 0, '���� ���� �Ÿ� �׸��� ��С�� ��ҵ', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363074868, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (17, '', '', 3, 1, '����', 0, 0, 0, 1362994854, 1362994854, 1, 'admin', '', '', '', '', 0, 'http://t2.qpic.cn/mblogpic/b098a0111c1542aaf648/460', 1, 1, '', 0, 0, 0, '���� �����ӵ� �ȼ� ���� ���� ����', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (18, '', '', 1, 1, '������', 5, 0, 0, 1362994893, 1362994893, 1, 'admin', '', '', '', '', 0, 'qb_wei_/1/1_20130312160325_rp7gj.jpg', 1, 1, '', 0, 0, 0, '�ȼ� ���� ���� ���� ��С�� ��ҵ һҹ�¸� ��Ů ���� ������', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363081300, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (19, '', '', 1, 1, '������', 2, 0, 0, 1362994928, 1362994928, 1, 'admin', '', '', '', '', 0, 'http://t2.qpic.cn/mblogpic/2f80c5296d3cdc99a918/460', 1, 1, '', 0, 0, 0, '�Ÿ� �׸��� ���� �����ӵ� �ȼ� ���� ���� ���� ��С��', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363081849, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (20, '', '', 1, 1, '������', 0, 0, 0, 1362994958, 1362994958, 1, 'admin', '', '', '', '', 0, 'http://t1.qpic.cn/mblogpic/ac53feee6c0057600020/460', 1, 1, '', 0, 0, 0, '��С�� ��ҵ һҹ�¸� ��Ů ���� ������', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (21, '', '', 4, 1, '��Ů', 3, 0, 0, 1362994990, 1362994990, 1, 'admin', '', '', '', '', 0, 'qb_wei_/4/1_20130312160349_ocqdz.jpg', 1, 1, '', 0, 0, 0, '�׸��� ���� �����ӵ� �ȼ� ���� ���� ���� ��С��', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363075254, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (22, '', '', 4, 1, '��Ů', 2, 0, 0, 1362995010, 1362995010, 1, 'admin', '', '', '', '', 0, 'qb_wei_/4/1_20130312160322_ye0n4.jpg', 1, 1, '', 0, 0, 0, '�����ӵ� �ȼ� ���� ���� ���� ��С��', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363081845, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (23, '', '', 4, 1, '��Ů', 3, 0, 0, 1362995048, 1362995048, 1, 'admin', '', '', '', '', 0, 'qb_wei_/4/1_20130312150300_tonwt.jpg', 1, 1, '', 0, 0, 0, '��С�� ��ҵ һҹ�¸� ��Ů ���� ������', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363081663, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (24, '', '', 4, 1, '��Ů', 3, 0, 0, 1362995206, 1362995206, 1, 'admin', '', '', '', '', 0, 'qb_wei_/4/1_20130312150311_zih7a.jpg', 1, 1, '', 0, 0, 0, '�׸��� ���� �����ӵ� ���� ���� ��С�� ��ҵ', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363081685, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (25, '', '', 4, 1, '��Ů', 5, 0, 0, 1362995451, 1362995451, 1, 'admin', '', '', '', '', 0, 'qb_wei_/4/1_20130312150334_5belc.jpg', 1, 1, '', 0, 0, 0, '���� �����ӵ� ���� ���� ��С�� ��ҵ һҹ�¸� ��Ů', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363158598, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (26, '', '', 4, 1, '��Ů', 9, 0, 0, 1362995562, 1362995562, 1, 'admin', '', '', '', '', 0, 'qb_wei_/4/1_20130312150349_p9iiy.jpg', 1, 1, '', 0, 0, 0, '���� ���� ��С�� ��ҵ һҹ�¸� ��Ů ����', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363141363, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (27, '', '', 4, 1, '��Ů', 1, 0, 0, 1362995766, 1362995766, 1, 'admin', '', '', '', '', 0, 'qb_wei_/4/1_20130312160338_lrvpa.jpg', 1, 1, '', 0, 0, 0, '�Ÿ� �׸��� ���� �����ӵ� ���� ���� ��С�� ��ҵ һҹ�¸�', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363075700, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (28, '', '', 5, 1, '��Ц', 17, 0, 0, 1362995840, 1362995840, 1, 'admin', '', '', '', '', 0, 'qb_wei_/5/1_20130312150340_ggdtu.jpg', 1, 1, '', 0, 0, 0, '���� ���� ��С�� ��ҵ һҹ�¸�', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363081676, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (29, '', '', 5, 1, '��Ц', 59, 0, 0, 1362995892, 1362995892, 1, 'admin', '', '', '', '', 0, 'qb_wei_/5/1_20130312160324_2fstz.jpg', 1, 1, '', 0, 0, 0, '������ �Ÿ� �׸��� ���� �����ӵ� ���� ����', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363158587, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (30, '', '', 5, 1, '��Ц', 4, 0, 0, 1362996015, 1362996015, 1, 'admin', '', '', '', '', 0, 'qb_wei_/5/1_20130312150312_hbn71.jpg', 1, 1, '', 0, 0, 0, '���� ��С�� ��ҵ һҹ�¸�', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363081653, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (31, '', '', 5, 1, '��Ц', 4, 0, 0, 1362996068, 1362996068, 1, 'admin', '', '', '', '', 0, 'qb_wei_/5/1_20130312150307_8xa95.jpg', 1, 1, '', 0, 0, 0, '������ �Ÿ� �׸��� ���� �����ӵ� ���� ���� ��С��', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363074466, 0, 0, 0, 0, '', '', 0);
INSERT INTO `qb_wei_content` VALUES (32, '', '', 5, 1, '��Ц', 9, 0, 0, 1362996089, 1362996089, 1, 'admin', '', '', '', '', 0, 'qb_wei_/5/1_20130312160357_pwcaj.jpg', 1, 1, '', 0, 0, 0, '��Ů ���� ������ �Ÿ� �׸��� ����', '', '', '', '', 0, '127.0.0.1', 0, 0, '', '', '', '', '', 0, 0, 0, '', 1363081671, 0, 0, 0, 0, '', '', 0);

# --------------------------------------------------------

#
# ��Ľṹ `qb_wei_content_1`
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
# �������е����� `qb_wei_content_1`
#

INSERT INTO `qb_wei_content_1` VALUES (1, '', 1, 3, 1, 1, '<p>�䌍�ĵ�֪�������ߣ��������挦������һֱ����ƽ��һ���^���������҂�߀��Ҋ��...������С�յ��̈́e�xʽ�����mȻ����߀�Ǳ���֢�����ˣ������ķe�O���^һֱ����������һ·�ߺã���������С�ա�</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (2, '', 2, 3, 1, 1, '<p>Ҳû��̫��������������͸͸�������һ�¡�</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (3, '', 3, 3, 1, 1, '<p>Ϥ����������ſڡ�Ь�ÿ���</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (4, '', 4, 3, 1, 1, '<p>�԰���ִ�ţ������صȴ����Ƿ���ĵ��ϡ�</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (5, '', 5, 3, 1, 1, '<p>�ҷ�����������Ƭ��������һ��</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (6, '', 6, 3, 1, 1, '<p>�ǲ��ǵ���������՚���˶������ܵ��������m�أ��ܶ��r�򴩴��Ǹ��������ߵģ��Еr�S�ԵĴ���������_��һ���죡�@�N�p��һ�슅���N���أ��o�Լ�����һ��������ɡ�</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (7, '', 7, 3, 1, 1, '<p>�మ��ʱ����Ҫ��ϣ���ִ��ʱ����Ҫ��ͨ�� ������ʱ����Ҫ�侲������ʱ����Ҫ���� ָ���ʱ����Ҫ�½⣬��������Ҫ���ݡ�</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (8, '', 8, 3, 1, 1, '<p>�����ǲ�֪���룬���Ծ����ķ����ʱ��һ�н������k�������ǰ��ţ�</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (9, '', 9, 3, 1, 1, '<p>�ݻ�Ϥ���й������¹ݡ����й�פϤ�������¹ݸ���������٩��Ӱ��</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (10, '', 10, 3, 1, 1, '<p>�ƻ�ĺ�������գ��������Լ���������е�һĨϼ������ջ������ú�ˮӳ�䣡</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (11, '', 11, 3, 1, 1, '<p>�ո��ڽ���׷ñ�ӣ�̫�����ˡ�</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (12, '', 12, 3, 1, 1, '<p>����ҷ����^�����_�v���úû��Ҫ�ʣ���Ҫ�ȣ���Ҫ�Լ����Լ��������죬ĸ�ǵأ��MТ��ĸҪ��ӛ�����ސۣ���ŮТ���Һͱ�ɶ����Ҫ�����c�ƣ��e�c�£��������¶�e�£����ٴ��X�ٶ࣬����՘������ϡ��������^�����_�����£����������ۣ�ϲ��ؔ��·���ɶ����ӡ�</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (13, '', 13, 3, 1, 1, '<p>��糾����������յ��డ������ֵ���·������û���������ֵģ�Ϊʲô�أ����ż������ˣ����ǡ����糾������ģ������Լ��ġ��ô����Ǵ��ŵ����ɣ� �ؼҶ��ǵ�ϴϴ���������ڣ�ͨͨ���ӡ�</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (14, '', 14, 3, 1, 1, '<p>��ϲ���ģ���һ������õģ���õģ���һ��������ʵģ�����ʵģ�������ֵ����ϧ�ġ������ܰ���������֪����Ե�ܾۣ�������Բ��������黳��ϲ��һ���ˣ���һ�仨����ʵ��û�д������̶̼�ʮ�꣬��Ҫ���Լ�������ʲô�ź�����Ц��Ц����޾Ϳޣ�ֻҪ������ϲ��������ϧ�������������ģ�</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (15, '', 15, 3, 1, 1, '<p> &nbsp;�������������ġ�����һ��ֲ�������ĵ��������Գ���Լ��Ϊǰ������ɣ�һ����������Ϊ���������������</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (16, '', 16, 3, 1, 1, '<p>�ո�¼�꣡һ��������ʮ����Сʱ���������Ķ��ˣ��н������</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (17, '', 17, 3, 1, 1, '<p>����Ϊɶ����һ��ɩ�ӵ���Ƭ���һ����أ����и�ĵ����ǰɣ������Ļ�Ҳ����Ů���ˣ�лл���磡ÿ�궼�ǵ����ǣ�Ҳף���������һ�����֣�8��3���������Ľ���Ҫ�ǵã�</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (18, '', 18, 1, 1, 1, '<p>��ò��һ���������д�գ�������һ������е����̡���ȷ��һ���˴���ģ������ˣ����Ļ�����Ʒλʱ����ϲ���ģ�����ӳ������һ����Խ��ԽƯ����Խ��Խ��ζ����֮��Խ��Խ��ª��Խ��Խή�������Լ�����ò�������Լ����ĳ����ȱ��ɣ�</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (19, '', 19, 1, 1, 1, '<p>���˽���Ů�ԵĽ��գ���ף����Ůͬ���ǽ��տ��֣�ͬ���ģ����˽���Ҳ��Ϊ��ʿ�ǹĹ��ơ���Ȼ������Ů�ԣ�����Ů���ǵ��������Ʒ����Ȼ������ĸ�ף�ȴ�úܶ�Ů��Բ��Ϊ��ĸ�����롣���ԣ���ͬ����Ҳ����ȥ�ɣ���</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (20, '', 20, 1, 1, 1, '<p>ӳ�� ��Ȼʱ����û�취��������������һᵽ��ӰԺȥ���� ף��Ʊ������ ���Ͼ���һ��</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (21, '', 21, 4, 1, 1, '<p>�����������������I���x�����������������z����̫�ɐۘ���</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (22, '', 22, 4, 1, 1, '<p>��⾰�����ټ����������������ʻ�ˮ�ġ�</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (23, '', 23, 4, 1, 1, '<p> ����ϰϰ��̫����ˡ�������ư�ྻ���Ѽ���������Կգ������һһ</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (24, '', 24, 4, 1, 1, '<p> ����Đ����Lȹ��ǰ������ȥ����������������п��ٷ���</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (25, '', 25, 4, 1, 1, '<p> ����Ϊ������ǩ����û�뵽��С���³����Ը����������ܳ�������лл��־��</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (26, '', 26, 4, 1, 1, '<p> �ӷ��ҵ�����Ӥ�����ţ�������Ϊ������ȥ��С����Ĭ�� ���ӷ�����ѩ�еĲ�����һ��Ӥ�����������壬Ҳ����ǧ�˶Է����߾��л������Ե����Ρ���������ĸ�ĸ�ǣ�ǧ��Ҫ���Լ����׵ĺ��Ӷ�������������ӵ�����б�������ĺ��ӡ�</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (27, '', 27, 4, 1, 1, '<p>��һ�����Ը�ɫ���йصĽ�Ŀ�������ǿ���ͨ�����ӽ�Ŀ���������Լ��������ˣ���Щ�꣬��һֱ��Ŭ����</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (28, '', 28, 5, 1, 1, '<p>�K��õ���ͯ��ŮDVDҲ�����ˣ��@����Ʒ���Լ���ϲ�g������o����Ҳ����׌��ʡ˼�ĵط���һ���Ñ������׌�˿��������X���e����i����Ҳ�x�x���ĵ�ţ���������@��һ���o�Һö����ĵ�һ���Ӱ���]���^���������k����һ�°ɣ������Ϣ��׃�ɴ����ˣ���҄eҊ��ѽ��������</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (29, '', 29, 5, 1, 1, '<p>��ȥ�������Ҵ�ææ�ģ��ֿ�ʼ�µ�һ��ȥƴ����</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (30, '', 30, 5, 1, 1, '<p>���ĵ�������·��</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (31, '', 31, 5, 1, 1, '<p> ���ۡ����ڵ����ˣ��²��Ҷ���ʲô���ˣ�����ô�ڲź��أ�</p>', 0);
INSERT INTO `qb_wei_content_1` VALUES (32, '', 32, 5, 1, 1, '<p> ���֪����������ʹ�ࣿ�����ܵģ�����</p>', 0);

# --------------------------------------------------------

#
# ��Ľṹ `qb_wei_keyword`
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
# �������е����� `qb_wei_keyword`
#

INSERT INTO `qb_wei_keyword` VALUES (1, '��Ů', 0, 1, 1, '', 13, 0, '#FF0000', 0);
INSERT INTO `qb_wei_keyword` VALUES (10, '����', 0, 1, 1, '', 13, 0, '', 0);
INSERT INTO `qb_wei_keyword` VALUES (9, '�׸���', 0, 1, 1, '', 15, 0, '', 0);
INSERT INTO `qb_wei_keyword` VALUES (8, '�Ÿ�', 0, 1, 1, '', 12, 0, '#F709F7', 0);
INSERT INTO `qb_wei_keyword` VALUES (7, '������', 0, 1, 1, '', 10, 0, '#3CA9C4', 1);
INSERT INTO `qb_wei_keyword` VALUES (11, '�����ӵ�', 0, 1, 1, '', 16, 0, '#55AA66', 1);
INSERT INTO `qb_wei_keyword` VALUES (12, '����', 0, 1, 1, '', 21, 0, '#FF0000', 1);
INSERT INTO `qb_wei_keyword` VALUES (13, '����', 0, 1, 1, '', 21, 0, '', 0);
INSERT INTO `qb_wei_keyword` VALUES (14, '��С��', 0, 1, 1, '', 21, 0, '#FF0000', 0);
INSERT INTO `qb_wei_keyword` VALUES (15, '��ҵ', 0, 1, 1, '', 18, 0, '', 0);
INSERT INTO `qb_wei_keyword` VALUES (16, 'һҹ�¸�', 0, 1, 1, '', 15, 0, '#0000FF', 0);
INSERT INTO `qb_wei_keyword` VALUES (17, '����', 0, 1, 1, '', 11, 0, '', 0);
INSERT INTO `qb_wei_keyword` VALUES (18, '�ȼ�', 0, 1, 1, '', 13, 0, '#4DB34D', 0);
INSERT INTO `qb_wei_keyword` VALUES (19, '����', 0, 1, 1, '', 13, 0, '', 0);

# --------------------------------------------------------

#
# ��Ľṹ `qb_wei_keywordid`
#

DROP TABLE IF EXISTS `qb_wei_keywordid`;
CREATE TABLE `qb_wei_keywordid` (
  `kid` mediumint(7) NOT NULL default '0',
  `id` mediumint(7) NOT NULL default '0',
  KEY `kid` (`kid`),
  KEY `id` (`id`)
) TYPE=MyISAM;

#
# �������е����� `qb_wei_keywordid`
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
# ��Ľṹ `qb_wei_sort`
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
# �������е����� `qb_wei_sort`
#

INSERT INTO `qb_wei_sort` VALUES (1, 0, 0, '������', 1, 0, 0, '', 0, 0, '', '', '', '', 'N;', '', 0, '', '', '', 0, '', '', '', '', 0, 'a:7:{s:11:"sonTitleRow";N;s:12:"sonTitleLeng";N;s:9:"cachetime";N;s:12:"sonListorder";N;s:14:"listContentNum";N;s:12:"ListShowType";N;s:11:"field_value";N;}', '', '', '', '');
INSERT INTO `qb_wei_sort` VALUES (2, 0, 0, 'ͼƬ', 1, 2, 1, '', 0, 0, '', '', '', '', 'N;', '', 0, '', '', '', 0, '', '', '', '', 0, 'a:7:{s:11:"sonTitleRow";N;s:12:"sonTitleLeng";N;s:9:"cachetime";N;s:12:"sonListorder";N;s:14:"listContentNum";N;s:12:"ListShowType";N;s:11:"field_value";N;}', '', '', '', '');
INSERT INTO `qb_wei_sort` VALUES (3, 0, 0, '����', 1, 0, 0, '', 0, 0, '', '', '', '', 'N;', '', 0, '', '', '', 0, '', '', '', '', 0, 'a:7:{s:11:"sonTitleRow";N;s:12:"sonTitleLeng";N;s:9:"cachetime";N;s:12:"sonListorder";N;s:14:"listContentNum";N;s:12:"ListShowType";N;s:11:"field_value";N;}', '', '', '', '');
INSERT INTO `qb_wei_sort` VALUES (4, 2, 0, '��Ů', 2, 0, 0, '', 0, 0, '', '', '', '', 'N;', '', 0, '', '', '', 0, '', '', '', '', 0, 'a:7:{s:11:"sonTitleRow";N;s:12:"sonTitleLeng";N;s:9:"cachetime";N;s:12:"sonListorder";N;s:14:"listContentNum";N;s:12:"ListShowType";N;s:11:"field_value";N;}', '', '', '', '');
INSERT INTO `qb_wei_sort` VALUES (5, 2, 0, '��Ц', 2, 0, 0, '', 0, 0, '', '', '', '', 'N;', '', 0, '', '', '', 0, '', '', '', '', 0, 'a:7:{s:11:"sonTitleRow";N;s:12:"sonTitleLeng";N;s:9:"cachetime";N;s:12:"sonListorder";N;s:14:"listContentNum";N;s:12:"ListShowType";N;s:11:"field_value";N;}', '', '', '', '');
 