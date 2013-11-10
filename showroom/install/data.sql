INSERT INTO `qb_module` (`id`, `type`, `name`, `pre`, `dirname`, `domain`, `admindir`, `config`, `list`, `admingroup`, `adminmember`, `ifclose`) VALUES (32, 2, '展会展览馆', 'showroom_', 'showroom', '', '', 'a:7:{s:12:"list_PhpName";s:18:"list.php?&fid=$fid";s:12:"show_PhpName";s:29:"bencandy.php?&fid=$fid&id=$id";s:8:"MakeHtml";N;s:14:"list_HtmlName1";N;s:14:"show_HtmlName1";N;s:14:"list_HtmlName2";N;s:14:"show_HtmlName2";N;}', 97, '', '', 0);


INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'showroom_h1', 'Info_showroom_', 1, 'a:27:{s:13:"tplpart_1code";s:624:"<table width="100%" cellspacing="0" cellpadding="0" class="listzhinfo">\r\n                <tr>\r\n                    \r\n                <td class="img"><a href="$url" target="_blank"><img src="$picurl" onerror="this.src=\'$webdb[www_url]/images/yellow/brand.gif\'" height="50" width="70" border="0"/></a></td>\r\n                    <td class="t">\r\n                    <span><a href="$url" target="_blank">$title</a></span><br/>                        \r\n                    开展时间:$day_begin<br/>\r\n                    地点:{$GLOBALS[cityDB][name][$city_id]}\r\n                    </td>\r\n                </tr>\r\n            </table>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:9:"showroom_";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";N;s:8:"moduleid";s:1:"1";s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:6:"A.list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"2";s:3:"sql";s:145:"SELECT * FROM qb_showroom_content A LEFT JOIN qb_showroom_content_1 B ON A.id=B.id  WHERE A.ispic=1  AND A.mid=\'1\'  ORDER BY A.list DESC LIMIT 2 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"30";s:10:"titleflood";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1287471806, 0, 32, 0, 0, 'yellow');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'showroom_news1', 'Info_showroom_', 1, 'a:27:{s:13:"tplpart_1code";s:300:"<div class="list">\r\n                	<a href="showroom.php?id=$rs[id]" target="_blank"><img src="$picurl" onerror="this.src=\'$webdb[www_url]/images/yellow/brand.gif\'" width="90" height="50"/></a>\r\n                   <a href="showroom.php?id=$rs[id]" target="_blank">$title</a>\r\n                </div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:9:"showroom_";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";N;s:8:"moduleid";s:1:"3";s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:6:"A.list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"5";s:3:"sql";s:142:"SELECT * FROM qb_showroom_room A LEFT JOIN qb_showroom_content_3 B ON A.id=B.id  WHERE A.ispic=1  AND A.mid=\'3\'  ORDER BY A.list DESC LIMIT 5 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"20";s:10:"titleflood";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1287471933, 0, 32, 0, 0, 'yellow');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'showroom_rollpic', 'rollpic', 0, 'a:6:{s:8:"rolltype";s:1:"0";s:5:"width";s:3:"400";s:6:"height";s:3:"180";s:6:"picurl";a:2:{i:1;s:32:"label/1_20101018161000_jbtee.jpg";i:2;s:32:"label/1_20101018161017_8lriv.jpg";}s:7:"piclink";a:2:{i:1;s:1:"#";i:2;s:1:"#";}s:6:"picalt";a:2:{i:1;s:0:"";i:2;s:0:"";}}', 'a:3:{s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 32, 0, 0, 'yellow');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'showroom_t1', 'code', 0, '展会资讯', 'a:4:{s:9:"html_edit";N;s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 32, 0, 0, 'yellow');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'showroom_t2', 'article', 1, 'a:32:{s:13:"tplpart_1code";s:67:" <div class="list"><A HREF="$url" target=\'_blank\' >$title</a></div>";s:13:"tplpart_2code";s:563:"<table width="100%" cellspacing="0" cellpadding="0">\r\n                    <tr>\r\n                        <td class="img"><a href="$url" target="_blank"><img src="$picurl" onerror="this.src=\'$webdb[www_url]/images/default/nopic.jpg\'" height="70" width="100"/></a></td>\r\n                        <td class="t">\r\n                        <a href="$url" target="_blank" >$title</a><br/>                        \r\n                        $content<a href="$url" target="_blank" >[详细]</a>\r\n                        </td>\r\n                    </tr>\r\n                </table>";s:3:"SYS";s:7:"artcile";s:13:"RollStyleType";s:0:"";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:7:"newhour";s:2:"24";s:7:"hothits";s:3:"100";s:7:"amodule";s:1:"0";s:7:"tplpath";s:25:"/common_zh_pic/zh_pic.jpg";s:6:"DivTpl";i:1;s:5:"fiddb";N;s:5:"stype";s:1:"t";s:2:"yz";s:1:"1";s:7:"hidefid";N;s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:6:"A.list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"2";s:3:"sql";s:163:" SELECT A.*,A.aid AS id,R.content FROM qb_article A LEFT JOIN qb_reply R ON A.aid=R.aid   WHERE A.yz=1  AND A.mid=\'0\'   AND R.topic=1 ORDER BY A.list DESC LIMIT 3 ";s:4:"sql2";s:175:" SELECT A.*,A.aid AS id,R.content FROM qb_article A LEFT JOIN qb_reply R ON A.aid=R.aid  WHERE A.yz=1  AND A.mid=\'0\'  AND A.ispic=1 AND R.topic=1 ORDER BY A.list DESC LIMIT 1 ";s:7:"colspan";s:1:"1";s:11:"content_num";s:2:"80";s:12:"content_num2";s:2:"70";s:8:"titlenum";s:2:"36";s:9:"titlenum2";s:2:"28";s:10:"titleflood";s:1:"0";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1288595923, 0, 32, 0, 0, 'default');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'showroom_tt1ad', 'pic', 0, 'a:4:{s:6:"imgurl";s:32:"label/1_20101101161138_mbysz.jpg";s:7:"imglink";s:1:"#";s:5:"width";s:3:"980";s:6:"height";s:2:"30";}', 'a:3:{s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 32, 0, 0, 'default');

# --------------------------------------------------------

#
# 表的结构 `qb_showroom_city`
#

DROP TABLE IF EXISTS `qb_showroom_city`;
CREATE TABLE `qb_showroom_city` (
  `fid` mediumint(7) unsigned NOT NULL auto_increment,
  `fup` mediumint(7) unsigned NOT NULL default '0',
  `name` varchar(200) NOT NULL default '',
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
  `metakeywords` varchar(255) NOT NULL default '',
  `metadescription` varchar(255) NOT NULL default '',
  `allowcomment` tinyint(1) NOT NULL default '0',
  `allowpost` varchar(150) NOT NULL default '',
  `allowviewtitle` varchar(150) NOT NULL default '',
  `allowviewcontent` varchar(150) NOT NULL default '',
  `allowdownload` varchar(150) NOT NULL default '',
  `forbidshow` tinyint(1) NOT NULL default '0',
  `config` text NOT NULL,
  PRIMARY KEY  (`fid`),
  KEY `fup` (`fup`)
) TYPE=MyISAM AUTO_INCREMENT=42 ;

#
# 导出表中的数据 `qb_showroom_city`
#

INSERT INTO `qb_showroom_city` VALUES (1, 0, '北京', 1, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (2, 0, '上海', 1, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (3, 0, '广州', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (4, 0, '深圳', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (5, 0, '杭州', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (6, 0, '苏州', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (7, 0, '重庆', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (8, 0, '天津', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (9, 0, '成都', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (10, 0, '长沙', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (11, 0, '长春', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (12, 0, '大连', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (13, 0, '东莞', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (14, 0, '福州', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (15, 0, '桂林', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (16, 0, '贵阳', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (17, 0, '哈尔滨', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (18, 0, '合肥', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (19, 0, '海口', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (20, 0, '呼和浩特', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (21, 0, '济南', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (22, 0, '昆明', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (23, 0, '兰州', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (24, 0, '拉萨', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (25, 0, '南京', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (26, 0, '南昌', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (27, 0, '南宁', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (28, 0, '宁波', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (29, 0, '青岛', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (30, 0, '沈阳', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (31, 0, '石家庄', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (32, 0, '太原', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (33, 0, '武汉', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (34, 0, '乌鲁木齐', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (35, 0, '无锡', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (36, 0, '厦门', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (37, 0, '西安', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (38, 0, '西宁', 1, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (39, 0, '银川', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (40, 0, '郑州', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_city` VALUES (41, 0, '惠州', 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', 1, '', '', '', '', 0, '');

# --------------------------------------------------------

#
# 表的结构 `qb_showroom_config`
#

DROP TABLE IF EXISTS `qb_showroom_config`;
CREATE TABLE `qb_showroom_config` (
  `c_key` varchar(50) NOT NULL default '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY  (`c_key`)
) TYPE=MyISAM;

#
# 导出表中的数据 `qb_showroom_config`
#

INSERT INTO `qb_showroom_config` VALUES ('module_id', '32', '');
INSERT INTO `qb_showroom_config` VALUES ('Info_webname', '展会展览馆', '');
INSERT INTO `qb_showroom_config` VALUES ('Info_webOpen', '1', '');
INSERT INTO `qb_showroom_config` VALUES ('module_pre', 'showroom_', '');

# --------------------------------------------------------

#
# 表的结构 `qb_showroom_content`
#

DROP TABLE IF EXISTS `qb_showroom_content`;
CREATE TABLE `qb_showroom_content` (
  `id` int(10) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL default '',
  `mid` smallint(4) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `fname` varchar(50) NOT NULL default '',
  `hits` mediumint(7) NOT NULL default '0',
  `comments` mediumint(7) NOT NULL default '0',
  `posttime` int(10) NOT NULL default '0',
  `list` varchar(10) NOT NULL default '',
  `uid` mediumint(7) NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `titlecolor` varchar(15) NOT NULL default '',
  `picurl` varchar(150) NOT NULL default '',
  `ispic` tinyint(1) NOT NULL default '0',
  `yz` tinyint(1) NOT NULL default '0',
  `levels` tinyint(2) NOT NULL default '0',
  `levelstime` int(10) NOT NULL default '0',
  `keywords` varchar(100) NOT NULL default '',
  `ip` varchar(15) NOT NULL default '',
  `lastfid` mediumint(7) NOT NULL default '0',
  `money` mediumint(7) NOT NULL default '0',
  `begintime` int(10) NOT NULL default '0',
  `endtime` int(10) NOT NULL default '0',
  `lastview` int(10) NOT NULL default '0',
  `city_id` mediumint(7) NOT NULL default '0',
  `picnum` smallint(4) NOT NULL default '0',
  `totaluser` mediumint(7) NOT NULL default '0',
  `roomid` mediumint(7) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `fid` (`fid`),
  KEY `ispic` (`ispic`),
  KEY `city_id` (`city_id`),
  KEY `list` (`list`,`fid`,`city_id`,`yz`),
  KEY `hits` (`hits`),
  KEY `roomid` (`roomid`)
) TYPE=MyISAM AUTO_INCREMENT=7 ;

#
# 导出表中的数据 `qb_showroom_content`
#

INSERT INTO `qb_showroom_content` VALUES (1, '2010第七届中国(上海)国际玻璃工业新技术展览会', 1, 1, '机械类', 4, 0, 1288617637, '1288617637', 1, 'admin', '', 'http://i04.c.aliimg.com/img/ibank/2010/766/919/104919667_0.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, 1288627200, 0, 1288669439, 12, 1, 0, 16);
INSERT INTO `qb_showroom_content` VALUES (2, '中国国际建筑装饰艺术玻璃及技术博览会', 1, 2, '家居类', 2, 0, 1288618117, '1288618117', 1, 'admin', '', 'http://i02.c.aliimg.com/news/upload/5000260/news/2010/4/14/600x450_127fa337456.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, 1288627200, 0, 1288675832, 4, 1, 0, 15);
INSERT INTO `qb_showroom_content` VALUES (3, '2011第十八届中国（北京）国际建筑装饰及材料博览会', 1, 3, '玩具类', 2, 0, 1288618322, '1288618322', 1, 'admin', '', 'http://i05.c.aliimg.com/news/upload/5000260/news/2010/4/14/600x450_127fa337466.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, 1262275200, 0, 1288618969, 2, 1, 0, 14);
INSERT INTO `qb_showroom_content` VALUES (4, '第9届中国哈尔滨国际玻璃、幕墙及天花吊顶材料展览会', 1, 4, '加工类', 0, 0, 1288618524, '1288618524', 1, 'admin', '', 'http://i02.c.aliimg.com/news/upload/5000260/news/2010/4/14/600x450_127fa337478.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, 1264953600, 0, 0, 3, 1, 0, 13);
INSERT INTO `qb_showroom_content` VALUES (5, '2011第十七届全国铝门窗幕墙行业年会暨铝门窗幕墙新产品博览会', 1, 6, '医药类', 1, 0, 1288618715, '1288618715', 1, 'admin', '', 'http://i02.c.aliimg.com/news/upload/5000260/news/2010/4/14/600x450_127fa337489.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, 1270051200, 0, 1288680815, 3, 1, 0, 12);
INSERT INTO `qb_showroom_content` VALUES (6, '中国国际建筑装饰艺术玻璃及技术博览会', 1, 7, '其它', 8, 0, 1288618879, '1288618879', 1, 'admin', '', 'http://i01.c.aliimg.com/news/upload/5000260/news/2010/4/13/600x398_127f699aff1.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, 1275321600, 0, 1293510748, 1, 2, 0, 11);

# --------------------------------------------------------

#
# 表的结构 `qb_showroom_content_1`
#

DROP TABLE IF EXISTS `qb_showroom_content_1`;
CREATE TABLE `qb_showroom_content_1` (
  `rid` mediumint(7) NOT NULL auto_increment,
  `id` mediumint(7) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `content` mediumtext NOT NULL,
  `day_begin` varchar(20) NOT NULL default '',
  `day_end` varchar(20) NOT NULL default '',
  `main_preside` varchar(255) NOT NULL default '',
  `assist_preside` mediumtext NOT NULL,
  `shop_area` mediumtext NOT NULL,
  `joinmoney` varchar(20) NOT NULL default '',
  `contact` varchar(200) NOT NULL default '',
  `about` mediumtext NOT NULL,
  `my_title1` varchar(100) NOT NULL default '',
  `my_content1` mediumtext NOT NULL,
  `my_title2` varchar(100) NOT NULL default '',
  `my_content2` mediumtext NOT NULL,
  PRIMARY KEY  (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`)
) TYPE=MyISAM AUTO_INCREMENT=7 ;

#
# 导出表中的数据 `qb_showroom_content_1`
#

INSERT INTO `qb_showroom_content_1` VALUES (1, 1, 1, 1, '2010第七届中国(上海)国际玻璃工业新技术展览会\r\nChina (ShangHai) Int&#39;l Glass Industry New Tech. Expo, 2010\r\n\r\n邀请函\r\n2010年10月9-11日\r\n上海国际展览中心\r\n\r\n◎联合主办\r\n&#8226;中国建筑材料流通协会\r\n&#8226;中国玻璃行业协会（香港）\r\n&#8226;中国浙江省玻璃行业协会\r\n&#8226;北京海闻展览有限公司\r\n&#8226;中国工艺美术学会玻璃艺术专业委员会\r\n◎承办单位 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  \r\n&#8226;北京海闻展览有限公司\r\n&#8226;北京世纪佳业展览有限公司\r\n\r\nGLASS SHOW2010\r\n——国际知名玻璃盛会欢迎您的加入！GLASS SHOW2010\r\n——全球玻璃贸易、交流、合作的最佳舞台！\r\nGLASS SHOW2010\r\n——多渠道全方位强势宣传，缔造贸易良机！\r\n\r\n展会概述&gt;&gt;&gt; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  \r\n2009 年在北京中国国际展览中心举办的“第六届国际玻璃工业新技术展览会”获得巨大成功。展会得到了来自海内外众多知名企业的大力支持与广泛参与。为现代玻璃工业的发展方向、资源采购、技术设备以及销售的各个环节，创造了活跃的思维空间。成功的在参展商与用户之间构建起一座便捷、高效、沟通、互利的桥梁。国际玻璃工业技术展览会现已成为海内外玻璃企业、科研单位对外宣传交流的一项重要活动，是新工艺、新产品推广的最佳舞台。\r\n为了更好的促进先进玻璃工艺在工业领域的应用，为供需双方搭建一个相互洽谈、采购订货、交流提升的有效平台。第七届国际玻璃工业新技术展览会将于2010年10月9—11日在上海国际展览中心隆重开幕。本届展会以“技术提升产业，合作共创未来”为主题，旨在加強参展商与专业用户的现场互动，掌握全球玻璃工业最新发展动态和产品的应用技术特性。为促进全球玻璃工业的技术创新和产品升级换代起到积极的推动作用。我们期待有更多的企业在展示、探讨与交流的过程中获得的更多的发展机会。让我们相聚在上海国际展览中心，共同展望美好明天。 \r\n\r\n展会日程&gt;&gt;&gt;\r\n布 展： 2010年10月7-8日（9:00-17:00）\r\n开 幕： 2010年10月9日（9:30）\r\n展 出： 2010年10月9-11日（9:00-16:30）\r\n撤 展： 2010年10月11日（16:00）\r\n参展范围&gt;&gt;&gt;\r\n同期活动&gt;&gt;&gt;\r\n多场技术交流、经贸洽谈、行业论坛、产品推介等精彩呈现\r\n※费用：每场2个小时，国内企业费用10000元人民币，国外企业费用3000美元。\r\n收费标准&gt;&gt;&gt; \r\n展位类型 展位规格 A区 B/C区 合资企业 外资企业\r\n展位/展期 （3×3）㎡ RMB 8800 RMB 7800 RMB 13800  USD 3000\r\n （3×4）㎡ &nbsp; RMB 11800  RMB 10800 RMB 18000 USD 4000\r\n光地/展期 36㎡ 起租 RMB 900/㎡ &nbsp; RMB 1380/㎡ &nbsp; USD 300/㎡\r\n※注明：参展企业若选择双开口展位加20%展位费用。\r\n会务费：参展代表每人1000元人民币。（用于会议资料、午餐、纪念品等）\r\n大会会刊与现场广告&gt;&gt;&gt;\r\n为配合展商在展期的宣传，让客户了解展商并在会后沟通联系，组委会将精心编印大会会刊，并为每位展商免费刊登200字内会刊广告。 &nbsp;  &nbsp;  &nbsp; \r\n会刊广告 现场广告\r\n封 &nbsp;  面 RMB 18000 封三/前扉一 RMB 8000 参 观 券210mm×90mm RMB 8000/万张\r\n封 &nbsp;  底 RMB 15000 彩色内页 RMB 5000 入 场 证88mm×125mm RMB 20000/万张\r\n封 &nbsp;  二 RMB 10000 黑白内页 RMB 3000 手 提 袋 RMB 30000/万个\r\n页面规格：210mm×285mm 横 &nbsp;  幅20m×2.5m RMB 30000/展期\r\n观众邀请&gt;&gt;&gt;\r\n&#61557; 市政建设，公用事业，质量检测等单位；国内外商会、协会、学会等贸易团体组织；房地产开发公司，房地产代理商，物业管理公司，宾馆、酒店，厂矿企业等；建筑、工程设计、经贸及施工、装饰装潢等单位；专业杂志、报刊等媒体单位；\r\n&#61557; 科研单位：相关行业的设计院、研究院、大中专院校的研究机构等； \r\n&#61557; 贸易商：进出口公司、设备生产商、经销商、代理商、原材料采购及供应商等玻璃界同仁； \r\n&#61557; 通过长期办展积累的观众数据库，联系新老客户，拓展更多商机。\r\n参展程序&gt;&gt;&gt;\r\n\r\n大会组委会秘书处：\r\n电  话：010-68631939/68606749 &nbsp;  &nbsp;  &nbsp;  传  真：010-68659979\r\n联系人：姚亮13611186355 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 网  址：www.bcige.com\r\n', '2010-11-02', '2010-11-13', '中国建筑材料流通协会', '北京海闻展览有限公司\r\n北京世纪佳业展览有限公司', '1.玻璃、玻璃制品应用\r\n（1）建筑和装饰玻璃、幕墙玻璃、低辐射玻璃、热反射玻璃、安全玻璃、防盗玻璃、防弹玻璃等各类玻璃；（2）节能玻璃门窗和配件；（3）五金工具；（4）工业玻璃；（5）电子及电光源玻璃；（6）特种玻璃；（7）工艺艺术玻璃；（8）日用玻璃制品。\r\n2.玻璃深加工机械磨料磨具及玻璃生产线\r\n（1）各种切割、磨边、钻孔、雕砂、酸洗等加工机械；（2）钢化、热弯、夹层、镀膜、中空、印花等生产设备及有关自动控制设备；（3）玻璃表面研、抛设备；（4）磨具、刀具及其他玻璃加工工具。\r\n3．玻璃生产技术与设备、仪器仪表及检测装置、自动控制系统和配套系统\r\n（1）采矿、选矿、配料、混合料、称量、物料输送系统和各种设备；\r\n（2）玻璃熔窑设计、熔炼、均化技术，喂料、加料机，烤火、退火窑，热弯、热熔炉、工作池、坩埚等；\r\n（3）燃烧技术、燃烧装置、喷枪、喷嘴和其它节能技术与设备及成型设备等；\r\n（4）分选机、堆垛机、铺纸机、装箱系统、运输及存储冷端设备等；\r\n（5）微机和自动控制系统及软件在线自动监测装置等；\r\n（6）原料、半成品和成品物理化学性能检测仪器和设备等，以及各种加工玻璃用的自动检测、控制系统；\r\n（7）环境保护和综合利用设施，工业气体、净化水的设备系统等；\r\n4.原材料、耐火材料和各种主、辅助材料\r\n（1）各种高级耐火材料；矿物原料和化工原料等；（2）各种研磨、抛光、酸蚀、蒙砂和活化玻璃表面的材料；（3）各种（高级）玻璃功能膜；（4）有关的聚合物、树脂、胶片、密封胶、干燥剂、润滑剂冷却剂和银膏、无影胶和粘结剂等；（5）有关的金属和贵金属及制品等；（6）各种涂料、着色剂和颜料等。\r\n', '200元', '地  址：北京市石景山区京原路7号骅悦隆大厦218室 &nbsp;  &nbsp; 邮  编：100043', '&#8226; 技术交流→最新技术与市场前沿链接，促进贸易互动；\r\n&#8226; 经贸洽谈→展商现场捕捉商机，与专业买家之间密切接触；\r\n&#8226; 行业论坛→专家、商家云集，透析行业信息，把握发展脉搏；\r\n&#8226; 产品推介→让买家深入了解行业新技术、新产品，促成贸易成交。\r\n', '宣传组织&gt;&gt;&gt;', '◆ 通过200多家合作媒体形成信息发布网络，强力推广 &nbsp;  ◆ 数十万张门票、请柬发往海内外展商，竭诚邀请\r\n◆ 同类规模性展览会联袂宣传 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; ◆ 通过海内外行业机构、贸易组织广泛传播\r\n', '参展程序&gt;&gt;&gt;', '1、认真填写&laquo;参展申请及合约&raquo;并加盖公章传真或邮寄至组委会；\r\n2、申请得到组委会确认后，七个工作日内将参展费用（50%预付款或全款）电汇或交至组委会；\r\n3、组委会收到参展费用后会将发票及&laquo;参展指南&raquo;邮寄给展商；\r\n4、展位分配根据：“先申请、先付款、先安排”。\r\n会展服务&gt;&gt;&gt;\r\n&#61692; 办理展品运输、报关，提供优惠住宿、旅游，代定飞机、火车票；\r\n&#61692; 免费提供参观券供展商邀请客户使用；\r\n&#61692; 凡现场演示需要用水、动力电、压缩空气的单位，须提前一个月申请。\r\n');
INSERT INTO `qb_showroom_content_1` VALUES (2, 2, 2, 1, '中国国际建筑装饰艺术玻璃及技术展览会（GLASS CHINA中国玻璃展）将于2011年3月2-5日在北京·中国国际展览中心新馆举办。本届展会由中国国际贸易促进委员会、中国建筑装饰协会、中国玻璃产业联合商会、中国国际展览中心集团公司共同主办。经过十余年的发展，GLASS CHINA 中国玻璃展已逐步发展成为中国北方地区最具规模和影响力的贸易盛会\r\n\r\nGLASS CHINA 中国玻璃展以“国际化、专业化、品牌化、规模化”的形象、论坛与展评活动相结合、技术与市场相结合、产销与国策相结合，在业界独树一帜。展会每年初春举办，抢占展会黄金时间先机，是企业全年发布新品，开拓市场的首选贸易平台。北京中装华港公司具有多年的组展办展专业团队，不断创新变革，增加新的元素。展会将专题与主题融为一体，邀请国外商会和公会加盟，美国玻璃商会、新加坡玻璃公会、马来西亚玻璃商会、欧洲玻璃协会、北美玻璃分会等海外军团的大力加盟，将展会打造成为国际建筑装饰艺术玻璃及技术的专业年度盛会\r\n\r\nClass China中国玻璃展国际化合作日益增强，涵盖国外25个国家和地区的精英企业，74个国家和地区的优质贸易观众及200多家大众媒体、专业媒体和网站对展会进行多方位、深层次的报道，30万买家数据库和3万国际采购商的大力邀请，可使企业通过展示，在全球范围内寻找到最佳的贸易合作伙伴。\r\n\r\n本届展会的主题是：融入我们的力量共同成长！北京期待您！\r\n\r\n', '2010-11-02', '2010-11-26', '北京中装华港建筑科技展览有限公司', '中国国际贸易促进委员会\r\n中国建筑装饰协会\r\n中国玻璃产业联合商会', '建筑玻璃、装饰玻璃、艺术玻璃、移门系列、沙雕系列、吹制系列、玻璃琉璃、车刻彩绘、玻璃贴膜、彩晶立线、玻璃马赛克、制镜玻璃、卫浴玻璃、晶玉玻璃、家具玻璃、功能玻璃专业制造商；装饰类玻璃机械的制造商；玻璃耗材类的相关产品。\r\n', 'RMB8200元/9㎡', '北京中装华港建筑科技展览有限公司', '【室内光地包括】\r\n\r\n1 场地、空调、原建筑物照明、保安、公共场所清洁及现场管理与服务（未包括搭建展台管理费）\r\n\r\n2 在展览会会刊上列出参展单位基本信息及展品简介\r\n\r\n', '标准展台配置', '1 三面展板、地毯、两张问询桌、四把折椅、两盏射灯、一个纸篓、一个220V/5A电源插座及公司板板（中英文名称及展台号）\r\n\r\n2 场地、空调、原建筑物照明、保安、公共场所清洁及现场管理与服务。\r\n\r\n3 在展览会会刊上列出参展单位基本信息及展品简介。\r\n\r\n', '参展程序', '步骤1：展商选择参展面积、位置；\r\n\r\n步骤2：双方签定参展合同，3个工作日内，展商支付展位总费用30%作为展位定金，合同生效。\r\n\r\n步骤3：2010年12月31日前，支付剩余70%展位费用（如在此之前提出退展，展位定金不予退回）。\r\n\r\n步骤4：2011年1月15日前将企业简介提交组委会。\r\n\r\n步骤5：2011年2月27-28日，展会现场报到布展（为保证展会整体形象，主办单位保留与参展单位协商并最终调整展台位置的权力），3月2-5日展示洽谈。\r\n\r\n');
INSERT INTO `qb_showroom_content_1` VALUES (3, 3, 3, 1, '2010年是中国经济持续复苏的一年，也是建材行业机遇与挑战并存的一年。中国人口处于净增长期，城镇化建设加快、现代化、工业化进展加速的基本国情及北京作为政治、文化中心的特殊地理位置所拉动的刚性住房需求，决定了在今后相当长时期内，我国的房屋建设都将保持一定的增长。而政府“拉内需、保增长”的宏观经济政策及保持房地产市场稳定发展，加快稳定性住房建设，大力发展城镇化，调整利益分配，提高普通百姓收入等一系列的措施，都将促进装饰装修材料需求的增长。北京国展建博会顺势而动，在17年成功举办的基础上，将于2011年3月2-5日在北京·中国国际展览中心新馆继续举办。\r\n\r\n立足北京 辐射全国  拓展市场的首要选择＞＞＞＞\r\n\r\n中国（北京）国际建筑装饰及材料博览会（简称Build+Décor国展建博会）是目前中国三大建材展之一，并以 “国际化、专业化、品牌化、规模化”的形象在业界独树一帜，其展示贸易效果以北京为中心，辐射长江以北及东北、华北、西北等20余个省市及二三级城市，是企业拓展市场、发展经销/代理商、与装饰公司、房地产公司等需方单位进行面对面洽谈的首选平台。2010年举办的第十七届国展建博会再创新高。展览面积达到120000平方米，采购观众首次突破180000人次，优质的贸易成果吸引着越来越多的厂家将其作为发布新品、交流经验、共同提高的舞台，推动了行业的发展，凸显了展会的品牌魅力。\r\n\r\n立意明确 分馆细致 完善产业链群＞＞＞＞\r\n\r\n北京国展建博会经过了十余年的发展，在业界具有举足轻重的贸易地位。展会组委会在“创新、突破、发展”的理念下不断革新，进一步完善了建材领域产业链群。展会共设自动门、车库门、伸缩卷帘门、建筑装饰五金、墙纸、窗饰、布艺、陶瓷、卫浴、砂浆、石材、玻璃、橱柜、壁柜、天花吊顶等数十个大类的产品展区，展示部品达到二百余种，使商机和效益更趋明显。\r\n\r\n加强国际合作  内销外贸两增强＞＞＞＞\r\n\r\n展会国际化合作日益增强， 26个国家和地区的优质贸易观众及200多家大众媒体、专业媒体和网站对展会进行多方位、深层次的报道，30万买家数据库和3万国际采购商的大力邀请，可使企业通过展示，对内可寻求经销/代理商，发展区域合作；对外可实现跨国采购，寻求最佳合作贸易伙伴。\r\n\r\n', '2010-01-01', '2010-02-02', '中国建筑装饰协会', '北京中装华港建筑科技展览有限公司\r\n中国国际展览中心集团公司', '&gt;&gt;建筑陶瓷及厨房、卫浴设施系列：\r\n\r\n建筑陶瓷、各类地砖、马赛克、卫生洁具、感应洁具、陶瓷浴缸、淋浴房、整体浴室、桑拿游泳设备、、龙头、花酒、水箱配件、洗面器、洁身器、烘手器、坐便器、浴室镜、浴室柜、旋转衣架及配套五金、整体厨房、橱柜、壁柜及橱柜板材相关配套产品；厨房家用电器、燃气灶、热水器、抽油烟机等。\r\n\r\n&gt;&gt;各类门业五金系列\r\n\r\n  自动门、车库门、卷帘门、金属门、防盗门、保温门、室内门、复合门、铁艺、仿古铜门、欧式艺术大门等及配套产品及门禁、管状电机；各类建筑装饰五金、门控五金、卫浴配件、幕墙五金、家具五金及各类材质门窗系列。\r\n\r\n&gt;&gt;墙纸布艺系列\r\n\r\n &nbsp; PVC塑料墙纸、草麻墙纸、无纺墙纸、吸音墙纸、胶面墙纸、绒线墙纸、萤光墙纸、玻璃纤维壁布及布基、PVC油墨、印花辊、压花辊及墙纸机械等；各类布艺及地毯\r\n\r\n&gt;&gt;玻璃制品系列\r\n\r\n玻璃马赛克、装饰艺术玻璃、安全玻璃、防火玻璃、彩色玻璃、钢化玻璃、制镜玻璃、玻璃贴膜、卫浴玻璃、家具玻璃、家居玻璃、石英玻璃、功能玻璃、光电玻璃的专业制造商；装饰类玻璃机械的制造商、玻璃类的相关产品。\r\n\r\n&gt;&gt;石材系列\r\n\r\n  荒料、板材、异型制品、石雕制品、GRC、砂岩、环境装饰、机械设备及工具。\r\n\r\n&gt;&gt;涂料墙衣系列\r\n\r\n  各类涂料、墙衣、室内墙体材料。\r\n\r\n&gt;&gt;新型建材系列\r\n\r\n天花吊顶系列；智能建筑系列；干混砂浆系列；遮阳系列；阳光房系列；绿色节能建材系列；\r\n\r\n&gt;&gt;地板系列\r\n\r\n实木复合地板、强化复合木地板、强化地板、实木地板、多层实木复合地板、三层实木地板、多层实木地板、强化木地板、软木地板、塑胶地板、防静电地板、运动地板、环氧树脂地板、节能地板\r\n\r\n&gt;&gt;整体家居\r\n\r\n  衣柜、橱柜、推拉门、移门、折叠门、衣帽间厨房/浴室家居、隔断、铝门、型材等。\r\n\r\n', 'RMB8200元/9㎡', '北京市朝阳区北三环东路六号国展中心一号馆四层388室', '标准展台配置\r\n\r\n1 三面展板、地毯、两张问询桌、四把折椅、两盏射灯、一个纸篓、一个220V/5A电源插座及公司板板（中英文名称及展台号）\r\n\r\n2 场地、空调、原建筑物照明、保安、公共场所清洁及现场管理与服务。\r\n\r\n3 在展览会会刊上列出参展单位基本信息及展品简介。\r\n\r\n室内光地包括\r\n\r\n1 场地、空调、原建筑物照明、保安、公共场所清洁及现场管理与服务（未包括搭建展台管理费）\r\n\r\n2 在展览会会刊上列出参展单位基本信息及展品简介\r\n\r\n', '展会安排', '报道布展：2011年2月28-3月1日\r\n\r\n展示洽谈：2011年3月2-5日\r\n\r\n撤馆时间：2011年3月5日  12：30-19：00\r\n\r\n \r\n\r\n', '参展程序', '步骤1：展商选择参展面积、位置；\r\n\r\n步骤2：双方签定参展合同，3个工作日内，展商支付展位总费用30%作为展位定金，合同生效。\r\n\r\n步骤3：2010年12月31日前，支付剩余70%展位费用（如在此之前提出退展，展位定金不予退回）。\r\n\r\n步骤4：2011年1月15日前将企业简介提交组委会。\r\n\r\n步骤5：2011年2月28-3月1日，展会现场报到布展（为保证展会整体形象，主办单位保留与参展单位协商并最终调整展台位置的权力），3月2-5日展示洽谈。\r\n\r\n');
INSERT INTO `qb_showroom_content_1` VALUES (4, 4, 4, 1, '每年一届的“中国哈尔滨国际玻璃、幕墙及天花吊顶材料展览会”是“中国哈尔滨国际绿色节能建筑装饰博览会”（下称“哈尔滨建博会”）的专题展会。“哈尔滨建博会”是国内少数几个由多家政府行业主管部门联合主办、俄罗斯十二个州/市政府鼎力协办及国家、省、市三级政府大力支持的专业展览会，是目前黑龙江地区唯一一个大型专业建材行业盛会。第九届“哈尔滨建博会”将于2011年4月20－22日在哈尔滨国际会展中心隆重召开，此次展会将延续专业化和综合化相结合的发展道路，设立三大专业展及十大主题展区，依靠得天独厚的地理位置，政府部门的大力扶持，行业权威机构的密切配合，以及广大展商的大力支持，务求打造东北建材行业第一大展及辐射俄罗斯等周边国家的国际一流展会。\r\n　　展会优势\r\n　　1、哈尔滨地理位置优越：哈尔滨地处东北亚中心位置，被誉为欧亚大陆桥的明珠，是第一条欧亚大陆桥和空中走廊的重要枢纽，与日本、韩国、朝鲜、蒙古以及俄罗斯毗邻，进出口贸易占全国进出口贸易总额的四分之一，是国家批准的唯一的一类内陆口岸，交通便利，拥有连接国内外空中航线50多条，凭借得天独厚的地理特征，黑龙江省作为东北亚经贸中心的地位也日益凸现。\r\n　　2、哈尔滨建筑外贸发展迅速：近年来，随着中俄两国战略协作伙伴关系的持续发展，两国经贸合作也日益广泛和深入。作为中国对俄交流与合作的前沿城市，哈尔滨深入实施“南联北开，全方位对外开放”战略，对俄建筑贸易呈现出快速发展势头。同时，伴随着俄罗斯国内建筑市场的上升趋势，一系列改扩建工程也在进行当中，不少城市面临建筑节能改造和新房建设。当前，俄罗斯房地产市场已进入活跃期。近两年俄罗斯开发的房屋面积已相当于前10年甚至20年的总和。因此对建筑装饰材料需求量大幅增加。本次建博会将根据地理优势，制定出针对俄、日、韩等国际建材市场的拓展计划，强化境外专业对口的宣传，争取打造一个有针对性的国际一流对外贸易型展会。\r\n　　3、省、市政府重视建筑节能改造：近年来，黑龙江省住宅建设产业快速发展，省市政府部门不断加大建筑节能工作的研究和推广力度，“十一五”期间哈尔滨市累计对400万平方米既有建筑进行节能综合改造。2010年哈尔滨要完成300万平方米的建筑节能改造，总投资达5亿元。2011年房地产开发计划完成投资400亿元，计划到2012年，建筑节能产业实现主营业务收入200亿元，年均增长30%以上，政府巨大的投入和政策支持必将为房产、建筑、建材等行业带来新的商机。\r\n', '2010-02-01', '2010-03-02', '哈尔滨市环境保护局', '哈尔滨市质量技术监督局\r\n中国国际贸易促进委员会哈尔滨市分会 \r\n哈尔滨市环境保护产业协会\r\n哈尔滨市质量检验协会\r\n哈尔滨中信伟业展览有限公司 \r\n', '1、建筑艺术玻璃类：\r\n　　玻璃马赛克、艺术玻璃、安全玻璃、防火玻璃、彩色玻璃、钢化玻璃、制镜玻璃、玻璃贴膜、卫浴玻璃、家具玻璃、家居玻璃、石英玻璃、功能玻璃、光电玻璃的专业制造商；装饰类玻璃机械的制造商；玻璃类的相关产品。\r\n　　2、幕墙类：\r\n　　建筑幕墙、点式幕墙、石材幕墙、玻璃幕墙、铝幕墙、铝塑复合板、密封硅胶、化学粘合剂、幕墙加工设备；幕墙五金系列：锚固、拉杆、驳接件、点式幕墙连接系统等。\r\n　　3、吊顶材料类：\r\n　　铝制天花、方板、条板、格栅、挂片、各种异型板、金属天花、树脂天花、拉蓬天花、石膏板吊顶材料、金属孔板吊顶、硅酸钙吊顶板。\r\n', '6800元人民币', '哈尔滨市南岗区黄河路99号黄河绿园小区黄河大厦805室', '广告宣传计划：\r\n　　1、通过主办、协办单位、国内外招商代理单位及海内外行业协会组织会员单位参展、参观；\r\n　　2、利用近万条有效数据库资源，发送电子请柬、邮寄邀请函给专业观众。主要邀请对象为房地产开发商、建筑工程公司、物业管理公司：建筑师、设计师；生产商、代理商、经销商；装饰公司、全国各地建材市场、新闻媒体等；\r\n　　3、在国内外举办的相关展会上推广CHICE-2011中国哈尔滨国际建博会；\r\n　　4、东北三省及周边城市等近百个建材城派人分发展会门票及招商函，邀请更多经销商、代理商、采购商前来采购洽谈；\r\n　　5、通过多年积累专业观众手机号、传真、邮箱等数据库及网络平台定期发送展会信息，进行宣传推广；\r\n　　6、面向政府有关部门、行业协会和团体、科研单位和院校宣传展会，组织专业观众；\r\n　　7、数十万张参观券及请柬连续派发给业内人士；\r\n　　8、组织专题研讨会，学术交流会，搭建各方沟通和学习的平台；\r\n　　9、在相关行业内报纸、杂志、行业专刊及行业内专业网站等作大量的宣传及展会推广；\r\n　　10、会前在省内各大交通广播、公交车站、报纸、电视台等大众媒体作独家宣传；\r\n　　11、会前及整个会议期间在哈市主要街路悬挂宣传条幅，会场周围放置色彩鲜艳、引人注目的充气拱门、彩旗、升空气球、巨型条幅，烘托气氛。\r\n', '报名程序', '　1、所有符合展品范围要求的国内外企业均可参展。参展企业填妥参展申请表并传真或发电子邮件至组委会，经组委会确认后，即获得参展资格；\r\n　　2、申请企业接到“参展确认书”5个工作日内，应将展位费全额或50％定金汇至组委会指定账户，余款须于2011年3月20日前付清，否则将不予保留原定展位；\r\n　　3、大会采取“报名预定，打款确认，大展位优先”的原则统筹安排分配展位；\r\n　　4、展览会报名截止时间为2011年3月30日，在截止时间后的申请，大会将不能保证在会刊中刊登企业简介；\r\n　　5、组织单位在收到全部展台费用后，将于2011年3月30日前寄《参展手册》给参展商；会务接待、住宿、展品托运、活动日程安排等详见《参展手册》。\r\n', '技术交流讲座', '　展览会期间主办单位将组织多场技术交流会，以开展国际技术、经贸交流、宣传、介绍产品。各单位均可报名申请举办，请自定交流主题，并与参展报名表一并报组织单位，以便及早安排交流场地和设施，并按专业组织听众。\r\n　　交流会每场限定2小时以内，国内企业收费4000元人民币/场，外资企业收费1000美金/场，国外企业收费1500美金/场。\r\n　　请提前将交流内容概要提交组织单位。\r\n');
INSERT INTO `qb_showroom_content_1` VALUES (5, 5, 6, 1, '在哥本哈根的联合国气候变化大会上，中国承诺到2020年单位GDP二氧化碳排放降低40％到45％，这一承诺预示着低碳年代即将来临。低碳生活势在必行，节能环保与我们生活息息相关。为了减少能耗，降低污染、调整能源结构，实现环境保护的可持续发展,未来建筑发展也进入节能减排的新时代，将掀起建筑发展的革新热潮。要降低建筑能耗，首先要从围护结构、外墙、屋面、外门窗来实现。随着国家出台光电建筑应用扶持政策，并在城市建筑中大力推广光伏建筑一体化的示范工程，加快了光伏建筑一体化的发展的步伐。形成了一个良好的发展势头，太阳能建筑在中国的发展受到社会各界的广泛关注。您准备', '2010-04-01', '2010-06-02', '中国建筑金属结构协会铝门窗幕墙委员会', '广州市城博展览有限公司', '1. &nbsp;  &nbsp;   智能遮阳：铝合金百业、电动卷帘/窗、电动遮阳蓬、外遮阳挡板、光伏遮阳系统、电机/控制系统；\r\n\r\n2. &nbsp;  &nbsp;   太阳能建筑应用：光伏玻璃、封装薄膜、光伏组件、光伏集成系统、工程配套安装技术；\r\n\r\n3. &nbsp;  &nbsp;   幕墙外立面：建筑玻璃、陶土板、陶瓷板、石材板、铝单板、铝塑板、阳光板、金属墙板\r\n', '10000元', '广州市城博展览有限公司', '随着国家出台光电建筑应用扶持政策，并在城市建筑中大力推广光伏建筑一体化的示范工程，加快了光伏建筑一体化的发展的步伐。形成了一个良好的发展势头，太阳能建筑在中国的发展受到社会各界的广泛关注。 ', '为什么参加', '※  320家领先企业参与，分别来自15个国家及地区，16年成功经验\r\n\r\n——业内领先企业首肯\r\n\r\n※  40594专业观众参观，新春第一个行业工程采购平台\r\n\r\n——掌握未来工程项目资讯的最佳契机\r\n\r\n※  30000平米展示面积，权威主承办机构与专业组织单位强强联合\r\n\r\n——丰富行业资源提供品牌形象树立、商机拓展的最佳平台\r\n\r\n※  96个海内外合作媒体，质优媒体网络支持\r\n\r\n——保证专业买家素质和宣传效应\r\n\r\n', '往届回顾', '同期举办的学术交流、建筑前沿论谈活动，邀请业界鼎级建筑大师对国际性低碳绿色建筑成果进行解密，对低碳、节能建筑发展的意义深入探讨，会场更是座无虑席。\r\n\r\n');
INSERT INTO `qb_showroom_content_1` VALUES (6, 6, 7, 1, '\r\n\r\n中国国际建筑装饰艺术玻璃及技术展览会（GLASS CHINA中国玻璃展）将于2011年3月2-5日在北京·中国国际展览中心新馆举办。本届展会由中国国际贸易促进委员会、中国建筑装饰协会、中国玻璃产业联合商会、中国国际展览中心集团公司共同主办。经过十余年的发展，GLASS CHINA 中国玻璃展已逐步发展成为中国北方地区最具规模和影响力的贸易盛会\r\n\r\nGLASS CHINA 中国玻璃展以“国际化、专业化、品牌化、规模化”的形象、论坛与展评活动相结合、技术与市场相结合、产销与国策相结合，在业界独树一帜。展会每年初春举办，抢占展会黄金时间先机，是企业全年发布新品，开拓市场的首选贸易平台。北京中装华港公司具有多年的组展办展专业团队，不断创新变革，增加新的元素。展会将专题与主题融为一体，邀请国外商会和公会加盟，美国玻璃商会、新加坡玻璃公会、马来西亚玻璃商会、欧洲玻璃协会、北美玻璃分会等海外军团的大力加盟，将展会打造成为国际建筑装饰艺术玻璃及技术的专业年度盛会\r\n\r\nClass China中国玻璃展国际化合作日益增强，涵盖国外25个国家和地区的精英企业，74个国家和地区的优质贸易观众及200多家大众媒体、专业媒体和网站对展会进行多方位、深层次的报道，30万买家数据库和3万国际采购商的大力邀请，可使企业通过展示，在全球范围内寻找到最佳的贸易合作伙伴。\r\n\r\n', '2010-06-01', '2010-09-01', '中国国际贸易促进委员会', '中国建筑装饰协会\r\n中国玻璃产业联合商会', '玻璃系列：建筑玻璃、装饰玻璃、艺术玻璃、移门系列、沙雕系列、吹制系列、玻璃琉璃、车刻彩绘、玻璃贴膜、彩晶立线、玻璃马赛克、制镜玻璃、卫浴玻璃、晶玉玻璃、家具玻璃、功能玻璃专业制造商；装饰类玻璃机械的制造商；玻璃耗材类的相关产品', 'RMB8200元/9㎡', '北京市朝阳区北三环东路六号国展中心一号馆四层388室', '1 场地、空调、原建筑物照明、保安、公共场所清洁及现场管理与服务（未包括搭建展台管理费）\r\n\r\n2 在展览会会刊上列出参展单位基本信息及展品简介\r\n\r\n', '汇款方式', '公司全称：北京中装华港建筑科技展览有限公司\r\n\r\n开户行：工行北京分行国展支行\r\n\r\n帐号：020 025 300 902 454 0711 &nbsp;  &nbsp;  &nbsp; \r\n\r\n行号：966\r\n\r\n', '参展程序', '步骤1：展商选择参展面积、位置；\r\n\r\n步骤2：双方签定参展合同，3个工作日内，展商支付展位总费用30%作为展位定金，合同生效。\r\n\r\n步骤3：2010年12月31日前，支付剩余70%展位费用（如在此之前提出退展，展位定金不予退回）。\r\n\r\n步骤4：2011年1月15日前将企业简介提交组委会。\r\n\r\n步骤5：2011年2月27-28日，展会现场报到布展（为保证展会整体形象，主办单位保留与参展单位协商并最终调整展台位置的权力），3月2-5日展示洽谈。\r\n\r\n');

# --------------------------------------------------------

#
# 表的结构 `qb_showroom_content_2`
#

DROP TABLE IF EXISTS `qb_showroom_content_2`;
CREATE TABLE `qb_showroom_content_2` (
  `rid` mediumint(7) NOT NULL auto_increment,
  `id` mediumint(7) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `content` mediumtext NOT NULL,
  `realname` varchar(30) NOT NULL default '',
  `telphone` varchar(20) NOT NULL default '',
  `companyname` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

#
# 导出表中的数据 `qb_showroom_content_2`
#


# --------------------------------------------------------

#
# 表的结构 `qb_showroom_content_3`
#

DROP TABLE IF EXISTS `qb_showroom_content_3`;
CREATE TABLE `qb_showroom_content_3` (
  `rid` mediumint(7) NOT NULL auto_increment,
  `id` int(10) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `content` mediumtext NOT NULL,
  `room_address` varchar(100) NOT NULL default '',
  `room_web` varchar(100) NOT NULL default '',
  `contact` varchar(150) NOT NULL default '',
  PRIMARY KEY  (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`)
) TYPE=MyISAM AUTO_INCREMENT=7 ;

#
# 导出表中的数据 `qb_showroom_content_3`
#

INSERT INTO `qb_showroom_content_3` VALUES (1, 11, 0, 1, ' &nbsp;  北京展览馆 建立于1954年，位于北京西直门繁华商业区，西邻动物园交通枢纽，东侧为西直门地铁站、城铁总站和北京火车站北站，北靠中关村科技园区，南临金融街与各大部委，地理位置十分优越。全馆占地二十万平方米，内设展览大厅、北展剧场、莫斯科餐厅、北展宾馆、首都广告艺术公司。 \r\n &nbsp;  北京展览馆 致力于展览业务的专业化发展，建馆以来，接待了国内外大型展览千余个，来馆参观人数上亿人次，展览内容涉及国际经济、贸易、科技、文化及政治、军事各个领域。北京展览馆具备“举办境内对外经济技术展览会主办单位资格”，2000年，北京展览馆 完成了场馆改造与设备升级，达到了接待国际性、现代化专业展览的硬件标准，2002年，通过ISO9000国际质量标准体系认证。目前，北京展览馆 已发展成为以展览、会议业务为核心，餐饮、娱乐、旅游、酒店多元化发展的综合性、现代化会展中心。\r\n &nbsp;  北京展览馆 以完善的设施和优质的服务欢迎各界朋友光临！ \r\n', '中国北京西城区西直门外大街135号', 'http://www.bjexpo.com/', '+86-010-68316677（总机');
INSERT INTO `qb_showroom_content_3` VALUES (2, 12, 0, 1, '东莞展览馆位于东莞市中心广场鸿福路97号，占地面积3.1万平方米，建筑面积2.6万平方米，展示面积约1万平方米。\r\n &nbsp;  馆内基本陈列为《历史鸿篇 盛世华章--东莞文明发展大观》，包括历史篇、经济篇、城市篇、文化篇四大部分和独立展区，整个展览运用宏大的场景、翔实的资料、艺术的构思、高科技的手段，生动形象地再现了东莞的发展历程、发展成就和发展图景，是全面推介东莞的窗口、市情教育的学校和高品位的文化休闲场所。\r\n', '0769-22834016', 'http://www.dgec.gov.cn', '东莞市中心广场鸿福路97号');
INSERT INTO `qb_showroom_content_3` VALUES (3, 13, 0, 1, ' &nbsp;   中国进出口商品交易会琶洲展馆二期展馆位于一期东面，延续了一期飘逸的造型，现代的风格，并通过平台相连。\r\n\r\n &nbsp;  二期展馆总建筑面积与一期相当，约为39万平方米，占地面积27.4万平方米，室内展厅面积12.8万平方米。展厅主体3层，共13个展厅，每个展厅面积约1万平方米。室外展场面积1.36万平方米。\r\n', 'Fair complex sale and exhibition arrangement', 'http://www.21cantonfair.com/', '(8620)89139139');
INSERT INTO `qb_showroom_content_3` VALUES (4, 14, 0, 1, '上海展览中心经大修改造，西一馆底层改为展厅，展厅总面积增加到2.2万平方米，各展馆可独立也可合并使用，组合自如，共可搭建940多个标准展台。展厅层高一般5米以上，中央大厅高达18米。展厅功能及其设施按现代国际展览的要求设计和配置，除可供停车、放置展品集装箱外，还可搭建临时展馆近10000平方米，可满足大型展览的需求。\r\n\r\n　　上海展览中心还有一支经验丰富、技术娴熟的展览设计、搭建装修、现场管理和服务的队伍，规格齐全的展架展具，各种电气和音像设备，为展览、会议、技术交流及讲座的不同需求提供优质的服务。\r\n\r\n　　近年来，上海展览中心主办、联办和承办的各种类型的国内外展览会、展销会、博览会和各种科技文化交流活动每年达50多个，对上海的政治、经济和社会发展起到了独有和重要的作用。', '上海展览中心坐落在繁华的静安区中心地段', 'http://www.shzlzx.com.cn/zlfw.htm', '86-21-22162216转');
INSERT INTO `qb_showroom_content_3` VALUES (5, 15, 0, 1, '　　深圳会展中心集展览、会议、商务、餐饮、娱乐等多功能于一体，由深圳市政府投资兴建，委托深圳会展中心管理有限责任公司经营，于2004年正式投入使用。自2004年开馆以来，已成功举办近300场展览，1350多场会议，共接待观众达2,000多万人次。2008年在深圳会展中心共举办75场展览，500多场次会议，年展览面积达180万平方米,居全国同行第三。\r\n\r\n　　深圳会展中心地处城市中心区，是深圳市最大的单体建筑，占地22万平方米，总建筑面积28万平方米，东西长540米，南北宽282米，地面以上最高处达60米，地上6层，地下2层，钢结构、玻璃穹顶和幕墙完美结合，夜间在灯光的点缀下，玲珑剔透，有“水晶宫”之美誉。\r\n\r\n　　 展览、会议和服务功能分层布局，既相对独立又密切配合。一层9大展厅铺设成“U”型，室内展览面积达105,000平方米，可容纳5000国际标准展位大型展览。会议中心悬浮在展馆之上，拥有会议室共35间，功能卓越，大小不一，同时可用作中高档餐饮场地。二层服务区域主通道长达480米，贯穿东西，上通下达，集中提供各种展会配套服务。\r\n\r\n　　深圳会展中心设施先进，配套齐全，是举办各种展览、会议、集会、礼仪、庆典和演艺活动的理想之选。 \r\n\r\n', '深圳市福田区福华三路深圳会展中心', 'http://www.szcec.com/', '0755－82848800,82848900');
INSERT INTO `qb_showroom_content_3` VALUES (6, 16, 0, 1, '大连世界博览广场承接了上一个一百年大连建设的辉煌，构想着下一个一百年大连在世界舞台上的精彩展现，是大连沟通未来的世界之窗。 \r\n\r\n &nbsp;  大连世界博览广场坐落于中国大连对外开放先导区之一的星海湾金融商务区，亚洲最大海滨广场--星海广场，地理位置优越，环境优美，展馆毗邻城市主干道，交通便捷，距大连火车站5公里，距大连港8公里，距大连国际机场10公里，距神州第一路--沈大高速公路入口12公里。\r\n \r\n &nbsp;  大连世界博览广场的布局、装修，由法国EDDS公司的著名建筑师德拉里担纲设计，设计风格结合了星海广场的地域特点，形成了兼具中国文化与国际特色的现代博览建筑。一期占地面积5.8万平方米，建筑总面积14.2万平方米，净展览面积5万平方米，可提供国际标准展位2500个，二期占地面积1.5万平方米，净展览面积1万平方米，可提供国际标准展位500个，集展览、会议、餐饮、旅游、商务中心等功能为一体，是举办大型展览和会议的理想场所。\r\n \r\n &nbsp; 展馆设一层展场，面积2.1万平方米；二层展场，面积1.3万平方米；多功能厅面积5766平方米，可举行3500人的大型会议，1500人的大型宴会；会议区设有会议室12个，可容纳50-1000人不等。辉煌气派的中央大堂高40米，使用面积4200平方米，建筑风格上采用的是具有流行元素与实用功能双重功效的通畅无柱式设计，由国际最具流行的灰、红色调呼应而成，自然光的折射，与场馆的玻璃幕墙形成鲜明的对比，体现大堂内有天地浑然一体的非凡气势。一层前厅使用面积为4100平方米，大堂内还设有100平方米LED大屏幕可以现场同步直播大堂各项庆典活动。餐饮面积达到6500平方米，可同时容纳2500人就餐。\r\n \r\n &nbsp; 世博广场集合最新科技成果，采用海水制冷系统，既环保又节能，每层建筑都安置大空间智能自动喷水灭火系统，使用专用排水系统，设计节能环保、结构抗震满足要求，安保措施完善，安全系数极高。配备有专业的语音通信、网络信息、公共安防、中央空调和消防自动监控系统，拥有先进的数字会议系统、同声传译、远程视频会议和公共广播系统等，全部采用智能化管理，功能齐全。2007年在智能化程度上进行了系统升级，达到国际一流水准。设置信息点3500个，语音点1000个，无线信息点20个，不仅在展区内可以收到有线电视，宽带和光纤也铺入了展区，还可以做到无线上网和手机的无线覆盖。建筑的智能化则可以自动控制室内温度和湿度，在保安方面也可以实现实时监控。\r\n \r\n &nbsp;  大连世界博览广场于2005年2月投入运营以来，已承接国内外各类展会243个，使用展览面积277万平方米，成功举办了“中国国际国药原料药设备春季交易会”、“全国高等院校教学仪器设备展示会”、“第57届中国国际医疗器械博览会”、“第57届全国药品交易会”、“2007中国国际渔业博览会”、“第60届中国国际医药原料药、中间体、包装、设备春季交易会”、“2008中国国际大连海事展览会”、2009中国国内旅游交易会等大型展会。“中国国际医疗器械展览会”和“全国药品交易会”展览面积达到16万平方米，为历届之最，这是国药励展展览有限公司首次将其旗下规模最大的两个展会合并在一地举办，此次展会也成为大连市承接的最大规模展会，为大连市带来了直接效益44.8亿元。\r\n \r\n &nbsp; 会议承接是展馆的另一亮点，截至2009年底，共接待大小会议1170场。2007年9月，“从达沃斯到大连—新领军者年会”在大连世界博览广场举行，这是世界经济论坛首次在中国举行全球年会，中国国务院总理温家宝出席开幕式并致辞，芬兰总统哈洛宁、阿联酋副总统兼总理穆罕默德、拉托维亚总理卡尔维季斯、新加坡国务资政吴作栋等出席会议。来自90个国家和地区的1700多名政要、企业领袖和专家学者进行交流与合作，共同探讨创新的思维、创新化的商业模式和最新技术；成功承接了“WTO非正式小型部长会议”、“二十国集团财政及央行副手会议”、“第十七届金鸡百花电影节”、“世界规划师大会”等高级别的会议；还举办了“大连市纪念抗战胜利六十周年文艺演出”、“中国国际服装纺织品博览会开幕式”等大型活动。\r\n \r\n &nbsp; 大连世界博览广场拥有世界一流的技术设备、高效的管理和国际水准的服务，成为东北亚会展场所的首选，是世界会展场所中的夺人焦点，它的诞生预示着大连乃至东北地区展览业将迈入一个新纪元。\r\n\r\n', '辽宁省大连市星海广场F 区10号', 'http://www.dl-expo.com/', '0411-84805566 \\ 84892005');

# --------------------------------------------------------

#
# 表的结构 `qb_showroom_db`
#

DROP TABLE IF EXISTS `qb_showroom_db`;
CREATE TABLE `qb_showroom_db` (
  `id` int(10) NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=12 ;

#
# 导出表中的数据 `qb_showroom_db`
#

INSERT INTO `qb_showroom_db` VALUES (1);
INSERT INTO `qb_showroom_db` VALUES (2);
INSERT INTO `qb_showroom_db` VALUES (3);
INSERT INTO `qb_showroom_db` VALUES (4);
INSERT INTO `qb_showroom_db` VALUES (5);
INSERT INTO `qb_showroom_db` VALUES (6);
INSERT INTO `qb_showroom_db` VALUES (7);
INSERT INTO `qb_showroom_db` VALUES (8);
INSERT INTO `qb_showroom_db` VALUES (9);
INSERT INTO `qb_showroom_db` VALUES (10);
INSERT INTO `qb_showroom_db` VALUES (11);

# --------------------------------------------------------

#
# 表的结构 `qb_showroom_field`
#

DROP TABLE IF EXISTS `qb_showroom_field`;
CREATE TABLE `qb_showroom_field` (
  `id` mediumint(7) NOT NULL auto_increment,
  `mid` mediumint(5) NOT NULL default '0',
  `title` varchar(50) NOT NULL default '',
  `field_name` varchar(30) NOT NULL default '',
  `field_type` varchar(15) NOT NULL default '',
  `field_leng` smallint(3) NOT NULL default '0',
  `orderlist` int(10) NOT NULL default '0',
  `form_type` varchar(15) NOT NULL default '',
  `field_inputwidth` smallint(3) default NULL,
  `field_inputheight` smallint(3) NOT NULL default '0',
  `form_set` text NOT NULL,
  `form_value` text NOT NULL,
  `form_units` varchar(30) NOT NULL default '',
  `form_title` text NOT NULL,
  `mustfill` tinyint(1) NOT NULL default '0',
  `listshow` tinyint(1) NOT NULL default '0',
  `listfilter` tinyint(1) default NULL,
  `search` tinyint(1) NOT NULL default '0',
  `allowview` varchar(255) NOT NULL default '',
  `allowpost` varchar(255) NOT NULL default '',
  `js_check` text NOT NULL,
  `js_checkmsg` varchar(255) NOT NULL default '',
  `classid` mediumint(7) NOT NULL default '0',
  `form_js` text NOT NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=166 ;

#
# 导出表中的数据 `qb_showroom_field`
#

INSERT INTO `qb_showroom_field` VALUES (88, 2, '附注留言', 'content', 'mediumtext', 0, 2, 'textarea', 500, 100, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 31, '');
INSERT INTO `qb_showroom_field` VALUES (86, 1, '展会介绍', 'content', 'mediumtext', 0, -1, 'textarea', 600, 250, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_field` VALUES (165, 2, '参展单位名称', 'companyname', 'varchar', 255, 10, 'text', 200, 0, '', '', '', '', 1, 0, 0, 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_field` VALUES (144, 2, '联系人称呼', 'realname', 'varchar', 30, 9, 'text', 8, 0, '', '', '', '', 0, 1, 0, 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_field` VALUES (145, 2, '联系电话', 'telphone', 'varchar', 20, 8, 'text', 10, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 31, '');
INSERT INTO `qb_showroom_field` VALUES (152, 1, '主办单位', 'main_preside', 'varchar', 255, 0, 'text', 200, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_field` VALUES (153, 1, '辅助单位', 'assist_preside', 'mediumtext', 0, 0, 'textarea', 300, 100, '', '', '', '每个单位换一行', 0, 0, 0, 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_field` VALUES (151, 1, '结束时间', 'day_end', 'varchar', 20, 0, 'time', 0, 0, '', '', '', '', 1, 0, 0, 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_field` VALUES (150, 1, '开展时间', 'day_begin', 'varchar', 20, 0, 'time', 100, 0, '', '', '', '', 1, 0, 0, 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_field` VALUES (148, 3, '详细介绍', 'content', 'mediumtext', 0, -1, 'textarea', 400, 100, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_field` VALUES (162, 3, '展览馆地址', 'room_address', 'varchar', 100, 0, 'text', 500, 0, '', '', '', '', 1, 0, 0, 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_field` VALUES (154, 1, '展品范围', 'shop_area', 'mediumtext', 0, 0, 'textarea', 300, 100, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_field` VALUES (155, 1, '参展费用', 'joinmoney', 'varchar', 20, 0, 'text', 100, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_field` VALUES (156, 1, '联系方式', 'contact', 'varchar', 200, 0, 'text', 300, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_field` VALUES (157, 1, '注意事项', 'about', 'mediumtext', 0, 0, 'textarea', 300, 100, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_field` VALUES (158, 1, '自定义项目一名称', 'my_title1', 'varchar', 100, 0, 'text', 300, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_field` VALUES (159, 1, '自定义项目一内容', 'my_content1', 'mediumtext', 0, 0, 'textarea', 300, 100, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_field` VALUES (160, 1, '自定义项目二名称', 'my_title2', 'varchar', 100, 0, 'text', 300, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_field` VALUES (161, 1, '自定义项目二内容', 'my_content2', 'mediumtext', 0, 0, 'textarea', 300, 100, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_field` VALUES (163, 3, '展览馆官网', 'room_web', 'varchar', 100, 0, 'text', 300, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, '');
INSERT INTO `qb_showroom_field` VALUES (164, 3, '联系方式', 'contact', 'varchar', 150, 0, 'text', 300, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, '');

# --------------------------------------------------------

#
# 表的结构 `qb_showroom_join`
#

DROP TABLE IF EXISTS `qb_showroom_join`;
CREATE TABLE `qb_showroom_join` (
  `id` mediumint(7) NOT NULL auto_increment,
  `mid` smallint(4) NOT NULL default '0',
  `cid` mediumint(7) NOT NULL default '0',
  `cuid` mediumint(7) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `posttime` int(10) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `yz` tinyint(1) NOT NULL default '0',
  `ip` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `mid` (`mid`),
  KEY `fid` (`fid`,`cid`),
  KEY `yz` (`yz`,`fid`,`mid`,`cid`),
  KEY `cuid` (`cuid`)
) TYPE=MyISAM AUTO_INCREMENT=4 ;

#
# 导出表中的数据 `qb_showroom_join`
#

INSERT INTO `qb_showroom_join` VALUES (1, 2, 4, 0, 2, 1284799708, 1, 'admin', 1, '127.0.0.1');
INSERT INTO `qb_showroom_join` VALUES (2, 2, 1, 0, 1, 1286767772, 1, 'admin', 1, '127.0.0.1');
INSERT INTO `qb_showroom_join` VALUES (3, 2, 11, 0, 4, 1287640849, 1, 'admin', 1, '127.0.0.1');

# --------------------------------------------------------

#
# 表的结构 `qb_showroom_module`
#

DROP TABLE IF EXISTS `qb_showroom_module`;
CREATE TABLE `qb_showroom_module` (
  `id` smallint(4) NOT NULL auto_increment,
  `sort_id` mediumint(5) NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  `list` smallint(4) NOT NULL default '0',
  `style` varchar(50) NOT NULL default '',
  `config` text NOT NULL,
  `config2` text NOT NULL,
  `comment_type` tinyint(1) NOT NULL default '0',
  `ifdp` tinyint(1) NOT NULL default '0',
  `template` text NOT NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=4 ;

#
# 导出表中的数据 `qb_showroom_module`
#

INSERT INTO `qb_showroom_module` VALUES (1, 0, '展会模型', 10, '', 'a:1:{s:9:"moduleSet";a:1:{s:6:"useMap";s:1:"1";}}', '', 1, 0, '');
INSERT INTO `qb_showroom_module` VALUES (2, 0, '报名参加展会表单', 4, '', 'a:1:{s:9:"moduleSet";a:1:{s:6:"useMap";s:1:"0";}}', '', 1, 0, 'a:4:{s:4:"list";s:12:"joinlist.htm";s:4:"show";s:12:"joinshow.htm";s:4:"post";s:8:"join.htm";s:6:"search";s:0:"";}');
INSERT INTO `qb_showroom_module` VALUES (3, 0, '展览馆模型', 0, '', 'a:1:{s:9:"moduleSet";N;}', '', 0, 0, 'a:4:{s:4:"list";s:13:"list_room.htm";s:4:"show";s:17:"bencandy_room.htm";s:4:"post";s:13:"post_room.htm";s:6:"search";s:0:"";}');

# --------------------------------------------------------

#
# 表的结构 `qb_showroom_pic`
#

DROP TABLE IF EXISTS `qb_showroom_pic`;
CREATE TABLE `qb_showroom_pic` (
  `pid` mediumint(7) NOT NULL auto_increment,
  `id` mediumint(10) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `mid` smallint(4) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `type` tinyint(1) NOT NULL default '0',
  `imgurl` varchar(150) NOT NULL default '',
  `name` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`pid`),
  KEY `id` (`id`),
  KEY `fid` (`fid`)
) TYPE=MyISAM AUTO_INCREMENT=18 ;

#
# 导出表中的数据 `qb_showroom_pic`
#

INSERT INTO `qb_showroom_pic` VALUES (1, 11, 0, 0, 1, 1, 'http://www.bjexpo.com/images/hysimages/12_2.jpg', '');
INSERT INTO `qb_showroom_pic` VALUES (2, 11, 0, 0, 1, 1, 'http://www.bjexpo.com/images/hysimages/11_2.jpg', '');
INSERT INTO `qb_showroom_pic` VALUES (3, 11, 0, 0, 1, 1, 'http://www.bjexpo.com/images/hysimages/gbs01.jpg', '');
INSERT INTO `qb_showroom_pic` VALUES (4, 12, 0, 0, 1, 1, 'http://www.dgec.gov.cn/images/s003.jpg', '');
INSERT INTO `qb_showroom_pic` VALUES (5, 12, 0, 0, 1, 1, 'http://www.dgec.gov.cn/images/gui.jpg', '');
INSERT INTO `qb_showroom_pic` VALUES (6, 13, 0, 0, 1, 1, 'http://www.21cantonfair.com/gb2004/2008eqzg/zhangjs/xinguan20014.jpg', '');
INSERT INTO `qb_showroom_pic` VALUES (7, 14, 0, 0, 1, 1, 'http://www.shzlzx.com.cn/images/ct/hyfw_litang.jpg', '');
INSERT INTO `qb_showroom_pic` VALUES (8, 14, 0, 0, 1, 1, 'http://www.shzlzx.com.cn/images/ct/ct_001_szzxpmt.gif', '');
INSERT INTO `qb_showroom_pic` VALUES (9, 15, 0, 0, 1, 1, 'qb_showroom_/0/1_20101101211124_ewwhb.jpg', '');
INSERT INTO `qb_showroom_pic` VALUES (10, 16, 0, 0, 1, 1, 'http://www.dl-expo.com/images/15.jpg', '');
INSERT INTO `qb_showroom_pic` VALUES (11, 1, 1, 0, 1, 0, 'http://i04.c.aliimg.com/img/ibank/2010/766/919/104919667_0.jpg', '');
INSERT INTO `qb_showroom_pic` VALUES (12, 2, 2, 0, 1, 0, 'http://i02.c.aliimg.com/news/upload/5000260/news/2010/4/14/600x450_127fa337456.jpg', '');
INSERT INTO `qb_showroom_pic` VALUES (13, 3, 3, 0, 1, 0, 'http://i05.c.aliimg.com/news/upload/5000260/news/2010/4/14/600x450_127fa337466.jpg', '');
INSERT INTO `qb_showroom_pic` VALUES (14, 4, 4, 0, 1, 0, 'http://i02.c.aliimg.com/news/upload/5000260/news/2010/4/14/600x450_127fa337478.jpg', '');
INSERT INTO `qb_showroom_pic` VALUES (15, 5, 6, 0, 1, 0, 'http://i02.c.aliimg.com/news/upload/5000260/news/2010/4/14/600x450_127fa337489.jpg', '');
INSERT INTO `qb_showroom_pic` VALUES (16, 6, 7, 0, 1, 0, 'http://i01.c.aliimg.com/news/upload/5000260/news/2010/4/13/600x398_127f699aff1.jpg', '');
INSERT INTO `qb_showroom_pic` VALUES (17, 6, 7, 0, 1, 0, 'http://i04.c.aliimg.com/news/upload/5000260/news/2010/4/13/600x398_127f699b01d.jpg', '');

# --------------------------------------------------------

#
# 表的结构 `qb_showroom_room`
#

DROP TABLE IF EXISTS `qb_showroom_room`;
CREATE TABLE `qb_showroom_room` (
  `id` int(10) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL default '',
  `mid` smallint(4) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `fname` varchar(50) NOT NULL default '',
  `hits` mediumint(7) NOT NULL default '0',
  `comments` mediumint(7) NOT NULL default '0',
  `posttime` int(10) NOT NULL default '0',
  `list` varchar(10) NOT NULL default '',
  `uid` mediumint(7) NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `titlecolor` varchar(15) NOT NULL default '',
  `picurl` varchar(150) NOT NULL default '',
  `ispic` tinyint(1) NOT NULL default '0',
  `yz` tinyint(1) NOT NULL default '0',
  `levels` tinyint(2) NOT NULL default '0',
  `levelstime` int(10) NOT NULL default '0',
  `keywords` varchar(100) NOT NULL default '',
  `ip` varchar(15) NOT NULL default '',
  `lastfid` mediumint(7) NOT NULL default '0',
  `money` mediumint(7) NOT NULL default '0',
  `begintime` int(10) NOT NULL default '0',
  `endtime` int(10) NOT NULL default '0',
  `lastview` int(10) NOT NULL default '0',
  `city_id` mediumint(7) NOT NULL default '0',
  `picnum` smallint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `fid` (`fid`),
  KEY `ispic` (`ispic`),
  KEY `city_id` (`city_id`),
  KEY `list` (`list`,`fid`,`city_id`,`yz`),
  KEY `hits` (`hits`)
) TYPE=MyISAM AUTO_INCREMENT=17 ;

#
# 导出表中的数据 `qb_showroom_room`
#

INSERT INTO `qb_showroom_room` VALUES (15, '深圳会展中心', 3, 0, '', 4, 0, 1288617144, '1288617144', 1, 'admin', '', 'qb_showroom_/0/1_20101101211124_ewwhb.jpg.gif', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, 0, 0, 1288669427, 4, 1);
INSERT INTO `qb_showroom_room` VALUES (14, '上海展览中心', 3, 0, '', 0, 0, 1288616922, '1288616922', 1, 'admin', '', 'http://www.shzlzx.com.cn/images/ct/hyfw_litang.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, 0, 0, 0, 2, 2);
INSERT INTO `qb_showroom_room` VALUES (13, '琶洲展馆', 3, 0, '', 2, 0, 1288616618, '1288616618', 1, 'admin', '', 'http://www.21cantonfair.com/gb2004/2008eqzg/zhangjs/xinguan20014.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, 0, 0, 1288669366, 3, 1);
INSERT INTO `qb_showroom_room` VALUES (12, '东莞展览馆', 3, 0, '', 4, 0, 1288616451, '1288616451', 1, 'admin', '', 'http://www.dgec.gov.cn/images/s003.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, 0, 0, 1288669374, 3, 2);
INSERT INTO `qb_showroom_room` VALUES (11, '北京展览馆', 3, 0, '', 2, 0, 1288616199, '1288616199', 1, 'admin', '', 'http://www.bjexpo.com/images/hysimages/12_2.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, 0, 0, 1288616298, 1, 3);
INSERT INTO `qb_showroom_room` VALUES (16, '大连世界博览广场', 3, 0, '', 7, 0, 1288617405, '1288617405', 1, 'admin', '', 'http://www.dl-expo.com/images/15.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, 0, 0, 1293510891, 12, 1);

# --------------------------------------------------------

#
# 表的结构 `qb_showroom_sort`
#

DROP TABLE IF EXISTS `qb_showroom_sort`;
CREATE TABLE `qb_showroom_sort` (
  `fid` mediumint(7) unsigned NOT NULL auto_increment,
  `fup` mediumint(7) unsigned NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  `mid` smallint(4) NOT NULL default '0',
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
  `metatitle` varchar(250) NOT NULL default '',
  `metakeywords` varchar(255) NOT NULL default '',
  `metadescription` varchar(255) NOT NULL default '',
  `allowcomment` tinyint(1) NOT NULL default '0',
  `allowpost` varchar(150) NOT NULL default '',
  `allowviewtitle` varchar(150) NOT NULL default '',
  `allowviewcontent` varchar(150) NOT NULL default '',
  `allowdownload` varchar(150) NOT NULL default '',
  `forbidshow` tinyint(1) NOT NULL default '0',
  `config` mediumtext NOT NULL,
  `index_show` tinyint(1) NOT NULL default '0',
  `contents` mediumint(4) NOT NULL default '0',
  `tableid` varchar(30) NOT NULL default '',
  `dir_name` varchar(50) NOT NULL default '',
  `ifcolor` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`fid`)
) TYPE=MyISAM AUTO_INCREMENT=8 ;

#
# 导出表中的数据 `qb_showroom_sort`
#

INSERT INTO `qb_showroom_sort` VALUES (1, 0, '机械类', 1, 2, 0, 0, '', 0, 0, '', '', '', '', 'N;', '', 0, '', '', '', 0, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_showroom_sort` VALUES (2, 0, '家居类', 1, 2, 0, 0, '', 0, 0, '', '', '', '', 'N;', '', 0, '', '', '', 0, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_showroom_sort` VALUES (3, 0, '玩具类', 1, 2, 0, 0, '', 0, 0, '', '', '', '', 'N;', '', 0, '', '', '', 0, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_showroom_sort` VALUES (4, 0, '加工类', 1, 2, 0, 0, '', 0, 0, '', '', '', '', 'N;', '', 0, '', '', '', 0, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_showroom_sort` VALUES (5, 0, '纺织类', 1, 2, 0, 0, '', 0, 0, '', '', '', '', 'N;', '', 0, '', '', '', 0, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_showroom_sort` VALUES (6, 0, '医药类', 1, 2, 0, 0, '', 0, 0, '', '', '', '', 'N;', '', 0, '', '', '', 0, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_showroom_sort` VALUES (7, 0, '其它', 1, 2, 0, 0, '', 0, 0, '', '', '', '', 'N;', '', 0, '', '', '', 0, '', '', '', '', 0, '', 0, 0, '', '', 0);
