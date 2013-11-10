-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 10 月 04 日 01:45
-- 服务器版本: 5.1.36
-- PHP 版本: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `b2bfree`
--

-- --------------------------------------------------------

--
-- 表的结构 `qb_buy_collection`
--

CREATE TABLE IF NOT EXISTS `qb_buy_collection` (
  `cid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `qb_buy_collection`
--


-- --------------------------------------------------------

--
-- 表的结构 `qb_buy_comments`
--

CREATE TABLE IF NOT EXISTS `qb_buy_comments` (
  `cid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `cuid` int(7) NOT NULL DEFAULT '0',
  `type` tinyint(2) NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `fid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `uid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `ip` varchar(15) NOT NULL DEFAULT '',
  `icon` tinyint(3) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `flowers` smallint(4) NOT NULL DEFAULT '0',
  `egg` smallint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `qb_buy_comments`
--


-- --------------------------------------------------------

--
-- 表的结构 `qb_buy_config`
--

CREATE TABLE IF NOT EXISTS `qb_buy_config` (
  `c_key` varchar(50) NOT NULL DEFAULT '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY (`c_key`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `qb_buy_config`
--

INSERT INTO `qb_buy_config` (`c_key`, `c_value`, `c_descrip`) VALUES
('sort_layout', '1,75,5#2,71,4,65#54,3#', ''),
('order_send_msg', '1', ''),
('UpdatePostTime', '1', ''),
('showNoPassComment', '0', ''),
('Info_index_cache', '', ''),
('Info_list_cache', '', ''),
('Info_ShowNoYz', '1', ''),
('Info_TopMoney', '20', ''),
('Info_TopDay', '15', ''),
('Info_TopNum', '8', ''),
('PostInfoMoney', '10', ''),
('module_id', '35', ''),
('Info_allowGuesSearch', '1', ''),
('Info_metakeywords', '产品', ''),
('Info_webOpen', '1', ''),
('Info_webname', '求购产品', ''),
('order_send_mail', '1', ''),
('Info_ReportDB', '非法信息\r\n虚假信息\r\n过期信息', ''),
('module_pre', 'buy_', ''),
('Info_TopColor', '#FF0000', ''),
('module_close', '0', '');

-- --------------------------------------------------------

--
-- 表的结构 `qb_buy_content`
--

CREATE TABLE IF NOT EXISTS `qb_buy_content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `fname` varchar(50) NOT NULL DEFAULT '',
  `hits` mediumint(7) NOT NULL DEFAULT '0',
  `comments` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `list` varchar(10) NOT NULL DEFAULT '',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `titlecolor` varchar(15) NOT NULL DEFAULT '',
  `picurl` varchar(150) NOT NULL DEFAULT '',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `levels` tinyint(2) NOT NULL DEFAULT '0',
  `levelstime` int(10) NOT NULL DEFAULT '0',
  `keywords` varchar(100) NOT NULL DEFAULT '',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `lastfid` mediumint(7) NOT NULL DEFAULT '0',
  `money` mediumint(7) NOT NULL DEFAULT '0',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  `begintime` int(10) NOT NULL DEFAULT '0',
  `endtime` int(10) NOT NULL DEFAULT '0',
  `lastview` int(10) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  `picnum` smallint(4) NOT NULL DEFAULT '0',
  `price` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `ispic` (`ispic`),
  KEY `city_id` (`city_id`),
  KEY `list` (`list`,`fid`,`city_id`,`yz`),
  KEY `hits` (`hits`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `qb_buy_content`
--

INSERT INTO `qb_buy_content` (`id`, `title`, `mid`, `fid`, `fname`, `hits`, `comments`, `posttime`, `list`, `uid`, `username`, `titlecolor`, `picurl`, `ispic`, `yz`, `levels`, `levelstime`, `keywords`, `ip`, `lastfid`, `money`, `passwd`, `begintime`, `endtime`, `lastview`, `city_id`, `picnum`, `price`) VALUES
(1, '求购铜包铜线', 1, 11, '螺纹钢', 1, 0, 1288611664, '1288611664', 1, 'admin', '', 'http://i00.c.aliimg.com/img/product/70/97/31/70973167.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, '', 0, 0, 1288611665, 0, 1, 43),
(2, '求购无铅含银锡丝', 1, 11, '螺纹钢', 1, 0, 1288611793, '1288611793', 1, 'admin', '', 'http://i01.c.aliimg.com/img/product/33/21/99/33219975.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, '', 0, 0, 1288611794, 0, 1, 43),
(3, '求购射线防护材料-铅板 厂家直销 质优价廉', 1, 21, '带钢', 1, 0, 1288611864, '1288611864', 1, 'admin', '', 'http://i02.c.aliimg.com/img/offer/19/39/46/69/19394669-2.310x310.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, '', 0, 0, 1288611865, 0, 1, 654),
(4, '求购20g钢管 20g高压锅炉管 抗氧化耐腐蚀', 1, 33, '冷轧板', 1, 0, 1288611943, '1288611943', 1, 'admin', '', 'http://i04.c.aliimg.com/img/ibank/2010/562/548/203845265_1777718237.310x310.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, '', 0, 0, 1288611946, 0, 1, 54),
(5, '求购不锈钢圆钢 316L不锈钢圆钢', 1, 46, '船板', 1, 0, 1288612043, '1288612043', 1, 'admin', '', 'http://i03.c.aliimg.com/img/offer/33/24/15/40/7/332415407-2.310x310.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, '', 0, 0, 1288612044, 0, 1, 43),
(6, '求购佛山不锈钢管厂', 1, 59, '无缝管', 2, 0, 1288612132, '1288612132', 1, 'admin', '', 'http://i00.c.aliimg.com/img/offer/56/28/57/26/7/562857267.310x310.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, '', 0, 0, 1288680842, 0, 1, 434),
(7, '求购黄铜棒', 1, 87, '焊线', 7, 0, 1288612333, '1288612333', 1, 'admin', '', 'http://i04.c.aliimg.com/img/offer/50/94/67/51/2/509467512.310x310.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, '', 0, 0, 1300690932, 0, 1, 54),
(8, '求购纯铁,钕铁硼专用纯铁,纯铁方', 1, 87, '焊线', 5, 0, 1288612560, '1288612560', 1, 'admin', '', 'http://i01.c.aliimg.com/img/offer2/2010/075/210/91075210_0eb64d7b2064ea5f5cfc34ecfd9156af.310x310.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, '', 0, 0, 1300338705, 0, 1, 434);

-- --------------------------------------------------------

--
-- 表的结构 `qb_buy_content_1`
--

CREATE TABLE IF NOT EXISTS `qb_buy_content_1` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `my_units` varchar(10) NOT NULL DEFAULT '',
  `order_num` int(7) NOT NULL DEFAULT '0',
  `end_day` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `qb_buy_content_1`
--

INSERT INTO `qb_buy_content_1` (`rid`, `id`, `fid`, `uid`, `content`, `my_units`, `order_num`, `end_day`) VALUES
(1, 1, 11, 1, '<p><span style="color:#0000ff;"><span style="font-size:15pt;"><img onload=''if(this.width>600)makesmallpic(this,600,800);'' src="http://i00.c.aliimg.com/img/product/70/97/31/70973167.jpg" width="768" height="576" /><br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 铜包铜线优点 ●具有广阔的应用范围. 产品广泛用于铁路、公路、电力、通讯电子等行业。 ●好的延展性和可加工性: 可以进一步地深(细)加工成铜包铝各种规格的裸线及镀锡线.漆包线.镀银线. ●明显的经济效益: ，使用铜包铜线替代纯铜线，能够大幅度节约原材料成本。以此类推，铜包铝线、铜包钢线以及各产品的镀锡线也是替代纯铜导线的理想产品。 ●显著的社会效益和环境效益 节省大量稀缺的铜资源,减轻电费重量,便于运输和网络施工,减轻工人劳动强度。</span></span></p>\r\n<p><span style="font-size:15pt;"><span style="color:#0000ff;">　本公司拥有先进工艺技术和优良设备，拥有多条生产线以满足生产φ0.10-φ1.60规格铜包铜线各类产品的需求。 我们衷心希望与国内外线缆厂家建立长期合作、互惠互利、共同发展的战略伙伴关系；并热忱欢迎您对本公司产品提出宝贵意见，恒久模具必将为降低您的企业生产成本而竭诚努力!</span></span></p>\r\n', '箱', 43, '2010-11-30'),
(2, 2, 11, 1, '<p>无铅锡线（丝）类别：</p>\r\n<p>★ 锡铜无铅锡线/丝（Sn99.3CU0.7）</p>\r\n<p>★ 0.3银无铅锡线/丝（Sn99.0Ag0.3Cu0.7）</p>\r\n<p>★ 锡银铜无铅锡线/丝（Sn96.5Ag3.0Cu0.5）</p>\r\n<p>★ 实芯型无铅锡线/丝（不含助焊剂）</p>\r\n<p>★ 小松香无铅锡线/丝（含1.4%松香）</p>\r\n<p>&nbsp;</p>\r\n<p>无铅焊锡丝/丝的种类：</p>\r\n<p>★ 无铅松香芯焊锡线/丝&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ★无铅免洗焊锡线/丝</p>\r\n<p>★ 无铅焊锡线/丝&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ★无铅水溶性焊锡线/丝</p>\r\n<p>★ 无铅含银焊锡线/丝&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ★无铅不锈钢焊锡线/丝</p>\r\n<p>★ 无铅镀镍焊锡线/丝&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ★无铅焊铝焊锡线/丝</p>\r\n<p>★ 无卤素焊锡线/丝</p>\r\n<p>&nbsp;</p>\r\n<p>无铅锡线（丝）特点：</p>\r\n<p>★ 良好的湿润性导电率热导率易上锡</p>\r\n<p>★ 按客户所需订制松香含量焊接不飞溅</p>\r\n<p>★ 助焊剂分布均匀锡芯里无断助焊剂现象</p>\r\n<p>★ 绕线均匀不打结上锡速度快残渣少</p>\r\n<p>★ 锡丝线径大小由：0.5--3.0mm均可订做</p>\r\n<p>&nbsp;</p>\r\n', '套', 3, '2010-11-27'),
(3, 3, 21, 1, '<div><p>规格： 厚度0.5-15mm 宽度1000mm 长度2000-8000mm 同时可按用户提供的规格，生产供应特种规格的铅板。 也可以按用户的要求制做铅制辐射防护用品及设备。</p>\r\n</div>\r\n', '箱', 4, '2010-11-26'),
(4, 4, 33, 1, '<p>品名：20g高压锅炉管</p>\r\n<p>&nbsp;</p>\r\n<p>特性：持久强度高、抗氧化、耐腐蚀，并有良好的组织稳定性。</p>\r\n<p>&nbsp;</p>\r\n<p>用途：主要用来制造高压和超高压锅炉的过热器管、再热器管、导气管、主蒸汽管等。</p>\r\n<p>&nbsp;</p>\r\n<p>经营规格：外径10-530mm，壁厚2-70mm。</p>\r\n<p>&nbsp;</p>\r\n<p>长度：4-11米</p>\r\n<p>&nbsp;</p>\r\n<p>产地：天津、包头</p>\r\n<p>&nbsp;</p>\r\n<p>执行标准：GB/T5310-1995</p>\r\n<p>&nbsp;</p>\r\n<p>现货：千吨以上</p>\r\n<p>&nbsp;</p>\r\n<p>包装方式：打捆</p>\r\n<p>&nbsp;</p>\r\n<p>供应单位：聊城市正利钢管有限公司</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 成立于2005年，原名（聊城市中创钢管有限公司）</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 本公司常年经营天津、包头、衡阳等大钢厂生产的20g高压锅炉管，现货多，规格全，价格优惠。欢迎广大用户来人来电洽谈订购、指导工作。 </p>\r\n<p>&nbsp;</p>\r\n', '件', 45, '2010-11-19'),
(5, 5, 46, 1, '<div><p>昊鸿钢铁贸易是经营不锈钢的专业公司。目前公司与张家港、山西太原、台湾烨耿、宝新、<br />\r\n南韩等各大钢厂建立了良好的供求关系，有着多年的业务往来。公司经营的系列不锈钢产品广泛应用于化工<br />\r\n石油、天然气、环保、制药、食品机械、供水供暖等领域。同时，公司下设加工厂，可按用户需求定做各种<br />\r\n型材，并生产加工不锈钢及其制品。<br />\r\n&nbsp;<br />\r\n&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp; 多年来，公司本着“质量第一、信誉第一、服务至上、共谋发展”的经营宗旨，向国内外的广大客户提供<br />\r\n最优质的产品及热情周到的服务。本公司郑重承诺：各种材质、各种规格的产品均以市场最低价供应，欢迎垂<br />\r\n询光临！&nbsp;</p>\r\n</div>\r\n', '箱', 4, '2010-11-26'),
(6, 6, 59, 1, '<div><p>佛山市鑫中航金属材料有限公司<br />\r\n我公司位于素有不锈钢名镇之称的佛山市澜石镇，水陆交通极为便利,是一家采用现代化经营管理模式运作的专业不锈钢公司，<br />\r\n公司经营各种规格型号不锈钢管，产品涉及200、300系列。<br />\r\n我公司凭借敏锐的市场触觉，良好的业界口碑，雄厚的资金实力以及良好的客情关系，在不锈钢行业树立了广泛的知名度,在业界享有盛誉。</p>\r\n<p>公司集不锈钢材料销售、加工与配送为一体,长期专营各种不锈钢管材,,规格齐全,并有不定尺开界,<br />\r\n欢迎各界人士与我们携手合作，公司将以优惠的价格、优惠的材料、优良的服务来满足客户的要求，<br />\r\n竭诚欢迎广大新老客户查询惠顾。愿与各界朋友精诚合作，共同发展。&nbsp;</p>\r\n<p>专业现货供应各种不锈钢装饰用管,机械结构和工业管材<br />\r\n规格齐全，价格优惠欢迎来电咨询！谢谢！！</p>\r\n</div>\r\n', '吨', 43, '2010-11-27'),
(7, 7, 87, 1, '天津市飞龙制管有限公司-西邻津汕、京沪高速、东邻天津新港码头、滨海国际机场及丹拉高速交通快捷便利。是全国诚信企业和天津市知名企业，始建于1995年，现有职工1800人，其中专业技术人员236人，厂区占地面积1200亩，现有22条ERW、高频焊管生产线，6条热镀锌生产线，12条扩管生产线，4条方管生产线，1条石油、天然气开采用套管生产线。产品主要用于石油、天然气、煤气、煤浆、机械、托辊、建筑、电力、化工、环保、锅炉、农井建设、温室大棚框架、钢构框架、消防管线、等行业。产品执行API\\SPEC5L、API\\SPEC5CT、ASTA53、EN10217、及GB/T9711.1、GP/T9711.2、GB/T3091-2008、GB/T13793-9292、GB/14291-2006、等国内外最新标准。我公司产品通过ISO9001、ISO14001及API、PED-CE、德国AD2000-WO、国标、英标、日标、欧盟、美标等质量管理体系要求。可年产直径20mm-426mm焊管150万吨，年出口各类钢管10万吨。<br />\r\n方管、矩管；15*15--300*500<br />\r\n镀锌管【牛头牌】、高频焊管、隐形焊管：直径4分、6分、1寸、1.2寸、1.5寸、2寸、76、89、102、108、114、121、127、133、140、152、159、165、168、180、194、203、219、245、250、273、299、306、325、351、355、377、406、426、530.长度4mm-16mm，壁厚0.8mm-14mm<br />\r\n热扩钢管:245、250、273、299、325、351、377、406、426.<br />\r\n石油天然气开采用套管：57、73、114.3、127、168.3、139.7、177.8、219.1、244.5、273.1.&nbsp;&nbsp;&nbsp; 规格、壁厚、口径可根据客户要求定做。<br />\r\n', '吨', 43, '2010-11-27'),
(8, 8, 87, 1, '<div><p><span style="font-size:10pt;font-family:宋体;">太钢是我国纯铁科研和生产的主要基地，也是我国最早研制和生产纯铁的企业。从<span>1955</span>年开始到现在，经过五十多年的研究和生产，已经形成一整套独特的生产工艺和多用途、多品种、多规格的纯铁系列产品。太钢生产纯铁经验丰富、设备精良、技术力量雄厚、检测手段完善<span>,</span>生产工艺路线先进。</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style="font-size:small;"><font size="2"><span style="color:red;font-family:宋体;">主营产品</span><span><span style="font-family:Times New Roman;">:</span></span></font></span></p>\r\n<p><span style="font-size:small;"><font size="2"><span style="font-family:宋体;">纯铁</span><span><span style="font-family:Times New Roman;">,</span></span><span style="font-family:宋体;">原料纯铁</span><span><span style="font-family:Times New Roman;">,</span></span><span style="font-family:宋体;">电工纯铁</span><span><span style="font-family:Times New Roman;">,</span></span><span style="font-family:宋体;">纯铁板</span><span><span style="font-family:Times New Roman;">,</span></span><span style="font-family:宋体;">纯铁棒</span><span style="font-family:Times New Roman;"><span>.</span></span><span style="color:black;font-family:宋体;">高纯度原料纯铁</span><span style="color:black;"><span style="font-family:Times New Roman;">;YTO/YTO1;</span></span><span style="color:black;font-family:宋体;">高性能电磁纯铁</span><span style="color:black;"><span style="font-family:Times New Roman;">;DT4 /DT4A;DT4E/DT4C;DT8/DT9;</span></span><span style="color:black;font-family:宋体;">方坯</span><span style="color:black;"><span style="font-family:Times New Roman;">;</span></span><span style="color:black;font-family:宋体;">棒材</span><span style="color:black;"><span style="font-family:Times New Roman;">;</span></span><span style="color:black;font-family:宋体;">盘圆</span><span style="color:black;"><span style="font-family:Times New Roman;">;</span></span><span style="color:black;font-family:宋体;">板材</span><span style="color:black;"><span style="font-family:Times New Roman;">;</span></span><span style="color:black;font-family:宋体;">精密机械加工</span><span style="color:black;"><span style="font-family:Times New Roman;">;</span></span><span style="color:black;font-family:宋体;">精密铸造</span><span style="color:black;"><span style="font-family:Times New Roman;">;</span></span><span style="color:black;font-family:宋体;">电磁纯铁冷轧薄板</span><span style="color:black;"><span style="font-family:Times New Roman;">;</span></span><span style="color:black;font-family:宋体;">电磁纯铁热轧中板</span><span style="color:black;"><span style="font-family:Times New Roman;">;</span></span><span style="color:black;font-family:宋体;">纯铁冷拉直条</span><span style="color:black;"><span style="font-family:Times New Roman;">;</span></span><span style="color:black;font-family:宋体;">纯铁棒材</span><span style="color:black;"><span style="font-family:Times New Roman;">;</span></span><span style="color:black;font-family:宋体;">纯铁锻材</span><span style="color:black;"><span style="font-family:Times New Roman;">;</span></span><span style="color:black;font-family:宋体;">铸造纯铁</span><span style="color:black;"><span style="font-family:Times New Roman;">,</span></span><span style="color:black;font-family:宋体;">钕铁硼专用纯铁</span><span style="color:black;"><span style="font-family:Times New Roman;">,</span></span><span style="color:black;font-family:宋体;">工业纯铁材</span><span style="color:black;"><span style="font-family:Times New Roman;">,</span></span><span style="color:black;font-family:宋体;">军工纯铁</span><span style="color:black;"><span style="font-family:Times New Roman;">,</span></span><span style="color:black;font-family:宋体;">深冲板</span><span style="color:black;"><span style="font-family:Times New Roman;">,</span></span><span style="color:black;font-family:宋体;">铁芯用电磁纯铁</span><span style="color:black;"><span style="font-family:Times New Roman;">,</span></span><span style="color:black;font-family:宋体;">纯铁</span><span style="color:black;"><span style="font-family:Times New Roman;">70</span></span><span style="color:black;font-family:宋体;">方坯</span><span style="color:black;"><span style="font-family:Times New Roman;">.</span></span></font></span></p>\r\n</div>\r\n', '件', 34, '2010-11-20');

-- --------------------------------------------------------

--
-- 表的结构 `qb_buy_content_2`
--

CREATE TABLE IF NOT EXISTS `qb_buy_content_2` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `ask_username` varchar(20) NOT NULL DEFAULT '',
  `ask_phone` varchar(20) NOT NULL DEFAULT '',
  `ask_mobphone` varchar(15) NOT NULL DEFAULT '',
  `ask_email` varchar(50) NOT NULL DEFAULT '',
  `ask_qq` varchar(11) NOT NULL DEFAULT '',
  `ask_title` varchar(100) NOT NULL DEFAULT '',
  `order_num` int(6) NOT NULL DEFAULT '0',
  `sell_price` varchar(20) NOT NULL DEFAULT '',
  `hope_reply` varchar(25) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `qb_buy_content_2`
--


-- --------------------------------------------------------

--
-- 表的结构 `qb_buy_db`
--

CREATE TABLE IF NOT EXISTS `qb_buy_db` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `city_id` (`city_id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `qb_buy_db`
--

INSERT INTO `qb_buy_db` (`id`, `fid`, `city_id`, `uid`) VALUES
(1, 11, 0, 1),
(2, 11, 0, 1),
(3, 21, 0, 1),
(4, 33, 0, 1),
(5, 46, 0, 1),
(6, 59, 0, 1),
(7, 87, 0, 1),
(8, 87, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `qb_buy_field`
--

CREATE TABLE IF NOT EXISTS `qb_buy_field` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `mid` mediumint(5) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL DEFAULT '',
  `field_name` varchar(30) NOT NULL DEFAULT '',
  `field_type` varchar(15) NOT NULL DEFAULT '',
  `field_leng` smallint(3) NOT NULL DEFAULT '0',
  `orderlist` int(10) NOT NULL DEFAULT '0',
  `form_type` varchar(15) NOT NULL DEFAULT '',
  `field_inputwidth` smallint(3) DEFAULT NULL,
  `field_inputheight` smallint(3) NOT NULL DEFAULT '0',
  `form_set` text NOT NULL,
  `form_value` text NOT NULL,
  `form_units` text NOT NULL,
  `form_title` text NOT NULL,
  `mustfill` tinyint(1) NOT NULL DEFAULT '0',
  `listshow` tinyint(1) NOT NULL DEFAULT '0',
  `listfilter` tinyint(1) DEFAULT NULL,
  `search` tinyint(1) NOT NULL DEFAULT '0',
  `allowview` varchar(255) NOT NULL DEFAULT '',
  `allowpost` varchar(255) NOT NULL DEFAULT '',
  `js_check` text NOT NULL,
  `js_checkmsg` varchar(255) NOT NULL DEFAULT '',
  `classid` mediumint(7) NOT NULL DEFAULT '0',
  `form_js` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=162 ;

--
-- 转存表中的数据 `qb_buy_field`
--

INSERT INTO `qb_buy_field` (`id`, `mid`, `title`, `field_name`, `field_type`, `field_leng`, `orderlist`, `form_type`, `field_inputwidth`, `field_inputheight`, `form_set`, `form_value`, `form_units`, `form_title`, `mustfill`, `listshow`, `listfilter`, `search`, `allowview`, `allowpost`, `js_check`, `js_checkmsg`, `classid`, `form_js`) VALUES
(86, 1, '其它要求', 'content', 'mediumtext', 0, -1, 'ieeditsimp', 600, 250, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, ''),
(159, 2, '供货价格', 'sell_price', 'varchar', 20, 18, 'text', 50, 0, '', '', '单价', '', 1, 0, 0, 0, '', '', '', '', 0, ''),
(158, 2, '供货总量', 'order_num', 'int', 6, 19, 'text', 50, 0, '', '', '', '', 1, 0, 0, 0, '', '', '', '', 0, ''),
(142, 2, '补充说明', 'content', 'mediumtext', 0, 15, 'textarea', 500, 70, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, '<br><select name=''autoSelect'' onchange="changeaddContent(this);">\r\n<option value=''''>(懒得打字？“快速填写”帮您忙！) </option>\r\n<option value=''请您发一份比较详细的产品规格说明，谢谢！''>请您发一份比较详细的产品规格说明，谢谢！</option> \r\n<option value=''请问您对此产品是长期有需求吗？''>请问您对此产品是长期有需求吗？</option> \r\n<option value=''请问您对此产品有多大的需求量？''>请问您对此产品有多大的需求量？</option> \r\n</select>\r\n<SCRIPT language="javascript">\r\n            function changeaddContent(autoSelect){\r\n			 	if (autoSelect.selectedIndex !=0){			 		\r\n			 		document.getElementById("atc_content").value = autoSelect[autoSelect.selectedIndex].value;\r\n					autoSelect.selectedIndex=0;\r\n			 	}\r\n				\r\n			 }\r\n	     </SCRIPT>'),
(154, 1, '求购数量', 'order_num', 'int', 7, 8, 'text', 30, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, ''),
(153, 1, '计量单位', 'my_units', 'varchar', 10, 9, 'text', 50, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, ''),
(145, 2, '联系电话', 'ask_phone', 'varchar', 20, 8, 'text', 100, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, ''),
(144, 2, '联系人姓名', 'ask_username', 'varchar', 20, 9, 'text', 100, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, ''),
(146, 2, '联系手机', 'ask_mobphone', 'varchar', 15, 7, 'text', 100, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, ''),
(147, 2, '联系邮箱', 'ask_email', 'varchar', 50, 6, 'text', 100, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, ''),
(148, 2, '联系QQ', 'ask_qq', 'varchar', 11, 5, 'text', 100, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, ''),
(156, 1, '截止日期', 'end_day', 'varchar', 30, 5, 'time', 0, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, ''),
(157, 2, '报价标题', 'ask_title', 'varchar', 100, 20, 'text', 300, 0, '', '', '', '', 1, 0, 0, 0, '', '', '', '', 0, ''),
(161, 2, '我希望', 'hope_reply', 'varchar', 25, 14, 'time', 0, 0, '', '', '之前回复', '', 0, 0, 0, 0, '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `qb_buy_join`
--

CREATE TABLE IF NOT EXISTS `qb_buy_join` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `cid` mediumint(7) NOT NULL DEFAULT '0',
  `cuid` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `ip` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `mid` (`mid`),
  KEY `fid` (`fid`,`cid`),
  KEY `yz` (`yz`,`fid`,`mid`,`cid`),
  KEY `cuid` (`cuid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `qb_buy_join`
--


-- --------------------------------------------------------

--
-- 表的结构 `qb_buy_module`
--

CREATE TABLE IF NOT EXISTS `qb_buy_module` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `sort_id` mediumint(5) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `list` smallint(4) NOT NULL DEFAULT '0',
  `style` varchar(50) NOT NULL DEFAULT '',
  `config` text NOT NULL,
  `config2` text NOT NULL,
  `comment_type` tinyint(1) NOT NULL DEFAULT '0',
  `ifdp` tinyint(1) NOT NULL DEFAULT '0',
  `template` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `qb_buy_module`
--

INSERT INTO `qb_buy_module` (`id`, `sort_id`, `name`, `list`, `style`, `config`, `config2`, `comment_type`, `ifdp`, `template`) VALUES
(2, 0, '报价单模型', 1, '', '', '', 0, 0, 'a:4:{s:4:"list";s:12:"joinlist.htm";s:4:"show";s:12:"joinshow.htm";s:4:"post";s:8:"join.htm";s:6:"search";s:0:"";}'),
(1, 0, '求购模型', 4, '', '', '', 1, 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `qb_buy_pic`
--

CREATE TABLE IF NOT EXISTS `qb_buy_pic` (
  `pid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `imgurl` varchar(150) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `id` (`id`),
  KEY `fid` (`fid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `qb_buy_pic`
--

INSERT INTO `qb_buy_pic` (`pid`, `id`, `fid`, `mid`, `uid`, `type`, `imgurl`, `name`) VALUES
(1, 1, 11, 0, 1, 0, 'http://i00.c.aliimg.com/img/product/70/97/31/70973167.jpg', ''),
(2, 2, 11, 0, 1, 0, 'http://i01.c.aliimg.com/img/product/33/21/99/33219975.jpg', ''),
(3, 3, 21, 0, 1, 0, 'http://i02.c.aliimg.com/img/offer/19/39/46/69/19394669-2.310x310.jpg', ''),
(4, 4, 33, 0, 1, 0, 'http://i04.c.aliimg.com/img/ibank/2010/562/548/203845265_1777718237.310x310.jpg', ''),
(5, 5, 46, 0, 1, 0, 'http://i03.c.aliimg.com/img/offer/33/24/15/40/7/332415407-2.310x310.jpg', ''),
(6, 6, 59, 0, 1, 0, 'http://i00.c.aliimg.com/img/offer/56/28/57/26/7/562857267.310x310.jpg', ''),
(7, 7, 87, 0, 1, 0, 'http://i04.c.aliimg.com/img/offer/50/94/67/51/2/509467512.310x310.jpg', ''),
(8, 8, 87, 0, 1, 0, 'http://i01.c.aliimg.com/img/offer2/2010/075/210/91075210_0eb64d7b2064ea5f5cfc34ecfd9156af.310x310.jpg', '');

-- --------------------------------------------------------

--
-- 表的结构 `qb_buy_report`
--

CREATE TABLE IF NOT EXISTS `qb_buy_report` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `onlineip` varchar(15) NOT NULL DEFAULT '',
  `type` tinyint(2) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `iftrue` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `qb_buy_report`
--


-- --------------------------------------------------------

--
-- 表的结构 `qb_buy_sort`
--

CREATE TABLE IF NOT EXISTS `qb_buy_sort` (
  `fid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `fup` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `class` smallint(4) NOT NULL DEFAULT '0',
  `sons` smallint(4) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `admin` varchar(100) NOT NULL DEFAULT '',
  `list` int(10) NOT NULL DEFAULT '0',
  `listorder` tinyint(2) NOT NULL DEFAULT '0',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  `logo` varchar(150) NOT NULL DEFAULT '',
  `descrip` text NOT NULL,
  `style` varchar(50) NOT NULL DEFAULT '',
  `template` text NOT NULL,
  `jumpurl` varchar(150) NOT NULL DEFAULT '',
  `maxperpage` tinyint(3) NOT NULL DEFAULT '0',
  `metatitle` varchar(250) NOT NULL DEFAULT '',
  `metakeywords` varchar(255) NOT NULL DEFAULT '',
  `metadescription` varchar(255) NOT NULL DEFAULT '',
  `allowcomment` tinyint(1) NOT NULL DEFAULT '0',
  `allowpost` varchar(150) NOT NULL DEFAULT '',
  `allowviewtitle` varchar(150) NOT NULL DEFAULT '',
  `allowviewcontent` varchar(150) NOT NULL DEFAULT '',
  `allowdownload` varchar(150) NOT NULL DEFAULT '',
  `forbidshow` tinyint(1) NOT NULL DEFAULT '0',
  `config` mediumtext NOT NULL,
  `index_show` tinyint(1) NOT NULL DEFAULT '0',
  `contents` mediumint(4) NOT NULL DEFAULT '0',
  `tableid` varchar(30) NOT NULL DEFAULT '',
  `dir_name` varchar(50) NOT NULL DEFAULT '',
  `ifcolor` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=156 ;

--
-- 转存表中的数据 `qb_buy_sort`
--

INSERT INTO `qb_buy_sort` (`fid`, `fup`, `name`, `mid`, `class`, `sons`, `type`, `admin`, `list`, `listorder`, `passwd`, `logo`, `descrip`, `style`, `template`, `jumpurl`, `maxperpage`, `metatitle`, `metakeywords`, `metadescription`, `allowcomment`, `allowpost`, `allowviewtitle`, `allowviewcontent`, `allowdownload`, `forbidshow`, `config`, `index_show`, `contents`, `tableid`, `dir_name`, `ifcolor`) VALUES
(1, 0, '钢材', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(2, 0, '钢板卷', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(3, 0, '板材', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(4, 0, '中厚板', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(5, 0, '钢管', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(6, 0, '型钢', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(7, 0, '特钢', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(8, 0, '不锈钢', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(9, 0, '炉料', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(10, 0, '生铁', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(11, 1, '螺纹钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(12, 1, '普线', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(13, 1, '高线', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(14, 1, '圆钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(15, 1, '线材', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(16, 1, '二级螺纹钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(17, 1, '三级螺纹钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(18, 1, '盘螺', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(19, 1, '优线', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(20, 1, '带肋钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(21, 2, '带钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(22, 2, '热板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(23, 2, '冷板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(24, 2, '不锈板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(25, 2, '镀锌板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(26, 2, '彩涂板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(27, 2, '花纹板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(28, 2, '低合金板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(29, 2, '镀锡板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(30, 2, '镀铝锌板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(31, 2, '酸洗板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(32, 2, '轧硬卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(33, 3, '冷轧板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(34, 3, '热轧板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(35, 3, '容器板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(36, 3, '合金板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(37, 3, '高强板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(38, 3, '耐腐蚀板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(39, 3, '马口铁基板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(40, 3, '镀锡板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(41, 3, '镀铝板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(42, 3, '硅钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(43, 3, '镀锌板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(44, 3, '彩涂板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(45, 3, '管线钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(46, 4, '船板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(47, 4, '大梁板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(48, 4, '模具板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(49, 4, '锅炉板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(50, 4, '翼缘板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(51, 4, '四切平板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(52, 4, '花纹板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(53, 4, '低合金板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(54, 4, '锰板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(55, 4, '碳结板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(56, 4, '合结板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(57, 4, '开平板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(58, 4, '耐磨板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(59, 5, '无缝管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(60, 5, '镀锌管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(61, 5, '方管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(62, 5, '螺旋管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(63, 5, '焊管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(64, 5, '直缝管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(65, 5, '圆管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(66, 5, '锅炉管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(67, 5, '球墨管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(68, 5, '矩型管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(69, 5, '化肥用管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(70, 5, '结构管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(71, 5, '铸铁管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(72, 5, '脚手架', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(73, 6, 'H型钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(74, 6, '槽钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(75, 6, '工字钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(76, 6, '角钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(77, 6, '扁钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(78, 6, '轻轨', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(79, 6, '重轨', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(80, 6, '方钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(81, 6, '不等边角钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(82, 6, '型钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(83, 6, '六角钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(84, 6, '拉光圆', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(85, 6, '碳圆', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(86, 6, '等边角钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(87, 7, '焊线', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(88, 7, '圆钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(89, 7, '轴承钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(90, 7, '碳结钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(91, 7, '弹簧钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(92, 7, '高工钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(93, 7, '模具钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(94, 7, '钢纹线', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(95, 7, '齿轮钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(96, 7, '合结钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(97, 7, '耐腐蚀钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(98, 7, '耐磨钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(99, 7, '碳工钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(100, 7, '碳素钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(101, 7, '耐热钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(102, 7, '冷镦钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(103, 7, '工模钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(104, 7, '结构钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(105, 8, '不锈板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(106, 8, '不锈钢管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(107, 8, '不锈钢线材', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(108, 8, '不锈钢带', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(109, 8, '不锈钢圆钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(110, 8, '不锈钢角钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(111, 8, '不锈钢槽钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(112, 8, '不锈钢扁钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(113, 8, '不锈钢坯', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(114, 8, '优焊线', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(115, 8, '拉丝', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(116, 8, '硬线', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(117, 8, '耐热钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(118, 8, '钢丝', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(119, 9, '矿石', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(120, 9, '煤焦', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(121, 9, '精铁粉', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(122, 9, '废钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(123, 9, '焦炭', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(124, 9, '煤炭', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(125, 9, '耐火材料', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(126, 9, '碳素材料', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(127, 9, '球墨铸铁', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(128, 9, '钢锭', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(129, 9, '硅锰', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(130, 9, '方坯', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(131, 9, '管坯', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(132, 9, '钢坯', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(133, 9, '板坯', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(134, 9, '球磨生铁', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(135, 9, '辅料副产品', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(136, 10, '硅铁', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(137, 10, '铬铁', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(138, 10, '钼铁', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(139, 10, '钒铁', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(140, 10, '钨铁', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(141, 10, '铌铁', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(142, 10, '钛铁', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(143, 10, '锰铁', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(144, 10, '镍矿', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(145, 10, '有色', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(146, 10, '铜', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(147, 10, '铝', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(148, 10, '锌', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(149, 10, '金', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(150, 10, '银', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(151, 10, '镍', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(152, 10, '铅', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(153, 10, '锡', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(154, 10, '稀土', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(155, 10, '贵金属', 1, 2, 0, 0, '', 0, 0, '', '', '', '', 'a:4:{s:4:"head";s:0:"";s:4:"foot";s:0:"";s:4:"list";s:0:"";s:8:"bencandy";s:0:"";}', '', 0, '', '', '', 0, '', '', '', '', 0, 'a:2:{s:7:"is_html";N;s:11:"field_value";N;}', 0, 0, '', 'guijinshu', 0);

-- --------------------------------------------------------

--
-- 表的结构 `qb_sell_collection`
--

CREATE TABLE IF NOT EXISTS `qb_sell_collection` (
  `cid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `qb_sell_collection`
--


-- --------------------------------------------------------

--
-- 表的结构 `qb_sell_comments`
--

CREATE TABLE IF NOT EXISTS `qb_sell_comments` (
  `cid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `cuid` int(7) NOT NULL DEFAULT '0',
  `type` tinyint(2) NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `fid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `uid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `ip` varchar(15) NOT NULL DEFAULT '',
  `icon` tinyint(3) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `flowers` smallint(4) NOT NULL DEFAULT '0',
  `egg` smallint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `qb_sell_comments`
--


-- --------------------------------------------------------

--
-- 表的结构 `qb_sell_config`
--

CREATE TABLE IF NOT EXISTS `qb_sell_config` (
  `c_key` varchar(50) NOT NULL DEFAULT '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY (`c_key`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `qb_sell_config`
--

INSERT INTO `qb_sell_config` (`c_key`, `c_value`, `c_descrip`) VALUES
('sort_layout', '1,75,5#2,71,4,65#54,3#', ''),
('order_send_mail', '1', ''),
('order_send_msg', '1', ''),
('UpdatePostTime', '1', ''),
('Info_index_cache', '', ''),
('Info_list_cache', '', ''),
('showNoPassComment', '0', ''),
('Info_TopMoney', '20', ''),
('Info_TopDay', '15', ''),
('Info_TopNum', '8', ''),
('Info_ShowNoYz', '1', ''),
('PostInfoMoney', '10', ''),
('Info_allowGuesSearch', '1', ''),
('module_pre', 'sell_', ''),
('Index_listsortnum', '20', ''),
('Info_metakeywords', '产品', ''),
('Info_webOpen', '1', ''),
('Info_webname', '产品供应', ''),
('Info_ReportDB', '非法信息\r\n虚假信息\r\n过期信息', ''),
('module_id', '34', ''),
('Info_TopColor', '#FF0000', ''),
('module_close', '0', '');

-- --------------------------------------------------------

--
-- 表的结构 `qb_sell_content`
--

CREATE TABLE IF NOT EXISTS `qb_sell_content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `fname` varchar(50) NOT NULL DEFAULT '',
  `hits` mediumint(7) NOT NULL DEFAULT '0',
  `comments` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `list` varchar(10) NOT NULL DEFAULT '',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `titlecolor` varchar(15) NOT NULL DEFAULT '',
  `picurl` varchar(150) NOT NULL DEFAULT '',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `levels` tinyint(2) NOT NULL DEFAULT '0',
  `levelstime` int(10) NOT NULL DEFAULT '0',
  `keywords` varchar(100) NOT NULL DEFAULT '',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `lastfid` mediumint(7) NOT NULL DEFAULT '0',
  `money` mediumint(7) NOT NULL DEFAULT '0',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  `begintime` int(10) NOT NULL DEFAULT '0',
  `endtime` int(10) NOT NULL DEFAULT '0',
  `lastview` int(10) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  `picnum` smallint(4) NOT NULL DEFAULT '0',
  `price` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `ispic` (`ispic`),
  KEY `city_id` (`city_id`),
  KEY `list` (`list`,`fid`,`city_id`,`yz`),
  KEY `hits` (`hits`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `qb_sell_content`
--

INSERT INTO `qb_sell_content` (`id`, `title`, `mid`, `fid`, `fname`, `hits`, `comments`, `posttime`, `list`, `uid`, `username`, `titlecolor`, `picurl`, `ispic`, `yz`, `levels`, `levelstime`, `keywords`, `ip`, `lastfid`, `money`, `passwd`, `begintime`, `endtime`, `lastview`, `city_id`, `picnum`, `price`) VALUES
(1, '无缝管厚壁合金管', 1, 11, '螺纹钢', 4, 0, 1288610057, '1288610057', 1, 'admin', '', 'http://i00.c.aliimg.com/img/ibank/2010/267/882/137288762_1108421225.310x310.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, '', 0, 0, 1288610134, 0, 1, 4900),
(2, '外径273mm20#45#20G无缝管钢管', 1, 11, '螺纹钢', 1, 0, 1288610257, '1288610257', 1, 'admin', '', 'http://i01.c.aliimg.com/img/ibank/2010/143/884/202488341_1108421225.310x310.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, '', 0, 0, 1288610258, 0, 1, 5454),
(3, '20#45#20G外径89mm小口径厚壁无缝流体管', 1, 11, '螺纹钢', 1, 0, 1288610394, '1288610394', 1, 'admin', '', 'http://i05.c.aliimg.com/img/ibank/2010/127/864/202468721_1108421225.310x310.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, '', 0, 0, 1288610397, 0, 1, 434),
(4, '钢管焊管螺旋管q235直缝焊管Q235', 1, 12, '普线', 1, 0, 1288610490, '1288610490', 1, 'admin', '', 'http://i05.c.aliimg.com/img/ibank/2010/755/984/198489557_1108421225.310x310.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, '', 0, 0, 1288610492, 0, 1, 434),
(5, 'T1-3TU1紫铜管H62黄铜管方铜管铜棒', 1, 13, '高线', 0, 0, 1288610569, '1288610569', 1, 'admin', '', 'http://i01.c.aliimg.com/img/ibank/2010/157/174/198471751_1108421225.310x310.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, '', 0, 0, 0, 0, 1, 5645),
(6, 'T1T3紫铜管宜兴H62黄铜管', 1, 14, '圆钢', 1, 0, 1288610654, '1288610654', 1, 'admin', '', 'http://i03.c.aliimg.com/img/ibank/2010/223/454/198454322_1108421225.310x310.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, '', 0, 0, 1288610655, 0, 1, 434),
(7, '美标20#45#无锡公司精拔锅炉钢管外径12', 1, 15, '线材', 3, 0, 1288610745, '1288610745', 1, 'admin', '', 'http://i02.c.aliimg.com/img/ibank/2010/004/377/201773400_1108421225.310x310.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, '', 0, 0, 1292982676, 0, 1, 5343),
(8, '双面埋弧电弧螺旋直逢焊管Q235工业焊管', 1, 16, '二级螺纹钢', 4, 0, 1288610830, '1288610830', 1, 'admin', '', 'http://i03.c.aliimg.com/img/ibank/2010/472/005/198500274_1108421225.310x310.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, '', 0, 0, 1300343964, 0, 1, 453),
(9, '20#合金管钢管152*12---28无缝流体', 1, 17, '三级螺纹钢', 2, 0, 1288610899, '1288610899', 1, 'admin', '', 'http://i00.c.aliimg.com/img/ibank/2010/423/442/133244324_1108421225.310x310.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, '', 0, 0, 1300338715, 0, 1, 4343),
(10, '201301321不锈钢管合金管', 1, 21, '带钢', 1, 0, 1288611012, '1288611012', 1, 'admin', '', 'http://i05.c.aliimg.com/img/ibank/2010/710/902/149209017_1108421225.310x310.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, '', 0, 0, 1288680845, 0, 1, 434),
(11, '200*200*10方管|天津方管现货', 1, 33, '冷轧板', 2, 0, 1288611083, '1288611083', 1, 'admin', '', 'http://i00.c.aliimg.com/img/ibank/2010/673/938/124839376_1108421225.310x310.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, '', 0, 0, 1288675144, 0, 1, 5435),
(12, '630*12现货螺旋钢管', 1, 46, '船板', 1, 0, 1288611221, '1288611221', 1, 'admin', '', 'http://i00.c.aliimg.com/img/ibank/2010/733/921/124129337_1108421225.310x310.jpg', 1, 1, 0, 0, '', '127.0.0.1', 0, 0, '', 0, 0, 1288611222, 0, 1, 654);

-- --------------------------------------------------------

--
-- 表的结构 `qb_sell_content_1`
--

CREATE TABLE IF NOT EXISTS `qb_sell_content_1` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `shoptype` varchar(50) NOT NULL DEFAULT '',
  `my_units` varchar(10) NOT NULL DEFAULT '',
  `order_min` int(7) NOT NULL DEFAULT '0',
  `order_max` varchar(7) NOT NULL DEFAULT '',
  `send_day` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `qb_sell_content_1`
--

INSERT INTO `qb_sell_content_1` (`rid`, `id`, `fid`, `uid`, `content`, `shoptype`, `my_units`, `order_min`, `order_max`, `send_day`) VALUES
(1, 1, 11, 1, '<p>专业生产不锈钢非标无缝工业管/厚壁管/。主要材质有201、202、301、304、304L、TP304、316、316L、TP316、TP316L、321、TP321、317L、309S、310S、410、430、316Ti、347H、2205、430F、17-4PH、17-7PH、2520、904L、347H等.</p>\r\n<p>&nbsp;不锈钢厚壁管：φ20×7—830*50&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 不锈钢常规管：φ5×0.8—630×15</p>\r\n<p>&nbsp;不锈钢异型管: 12×12×1—120×120×12扁管：40×20×2—200×100×10</p>\r\n<p>不锈钢冷板0.4mm-0.9mm*1m*2m/4寸*8寸，</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.0mm-3.0mm*1m*2m/4寸*8寸</p>\r\n<p>不锈钢热板3.0mm-4.0mm*1250*6000</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.0mm-60mm*1250*6000</p>\r\n<p>&nbsp;另备有各种不锈钢法兰、冲压弯头、截止阀、球阀、各种不锈钢管件</p>\r\n<p>&nbsp;</p>\r\n<p>201、202、301、304、304L、TP304、316、316L、TP316、TP316L、321、TP321、317L309S、310S等.<br />\r\n</p>\r\n', 'TS', '吨', 12, '222', '3天以内发货'),
(2, 2, 11, 1, '<p>钢管行业领导者聊城市金峰钢材有限公司以卓越的产品，一流的服务，合理的价格服务于广大客户。公司拥有富于开拓精<br />\r\n聊城市金峰钢材有限公司集生产、销售、科研与一体的综合性钢铁公司，公司在钢铁行业中有较高的信誉，常年经营成都、包钢 、冶钢、鲁宝、鞍钢、安阳、宝钢、天津等几大钢厂的的优质无缝钢管，规格齐全，保质保量。公司一贯以服务第一、质量第一、价格合理、客户至上、服务周到、让利客户、薄利多销为原则，诚实守信为宗旨。经过多年的经营，已经同全国各大钢厂建立了稳固的供货体系，同使用单位建立了良好的销售体系。 </p>\r\n<p>现有无缝钢管冷轧机组六条，无缝管穿孔机组生产线两条，冷拔无缝钢管生产线六条，精密无缝钢管生产线四条，热轧钢管生产线一条，常年生产10#、20#、35#、45#、16mn、27simn等规格的厚壁结构用无缝钢管、流体用无缝钢管、高压锅炉用无缝钢管、船舶用无缝钢管、化肥生产专用无缝钢管、输油用无缝钢管、高压锅炉管... </p>\r\n<p>本公司常年销售成都、包钢 、冶钢、鲁宝、鞍钢、安阳、宝钢、天津等几大钢厂的现货无缝管，常备资源材质为：20＃、35＃、 45＃、20G 、16Mn 、27SiMn 、12Cr1MoV 、15CrMo 、35CrMo 、T91 、ST45.8-3 、SA106B 、A335P22 、 A335P11、STFA23 、10CrMo910等。执行标准为：结构管 GB8162-1999 、流体管 GB8163-1999 、低中压锅炉管 3087-1999 、高压锅炉管 GB5310-1995 、化肥专用管 GB6479-2000 、石油裂化管 GB9948-88 、船舶专用管GB5312-99、我公司以现货供应的方式销售： 201 、 202 、 304 、 321 、 316 、 316L 、 310S 不锈钢板， 304 、 321 、 316 、、 316L 、 310S 不锈钢管， 1Cr17Ni2 、 0Cr13 、 1Cr13 、 2Cr13 、 3Cr13 、 4Cr1 3 、 304 、 321 、 316 、、 316L 、 310S 不锈钢棒,同时我公司备有千吨合金管。 欢迎新老客户前来洽谈业务。<br />\r\n</p>\r\n', 'u7', '吨', 34, '54', '3天以内发货'),
(3, 3, 11, 1, '<p>聊城市金峰钢材有限公司，成立于2005年9月注册资金1160万元；<br />\r\n金峰公司是聊城市较大的钢管生产、经营企业。有两家分公司。<br />\r\n其中金鹏钢管制造有限公司为现代化中型生产企业，<br />\r\n金峰钢材有限公司和北京亚通永发商贸有限公司为钢材经销流通企业。<br />\r\n固定资产达3400万元，职工980余人；是当今集钢材制造加工销售于一体的大型钢材流通企业。<br />\r\n一、金鹏钢管制造有限公司<br />\r\n&nbsp;公司注册资金500万元，现拥有穿孔机组两套，冷拔机组六套，职工600余人，<br />\r\n主要生产φ5-φ2860?-100钢管年生产能力为10万吨以上。</p>\r\n<p>二、金峰钢材有限公司 <br />\r\n&nbsp;<br />\r\n公司不但经营本厂生产各种型号的钢管，而且经营包钢、樊钢、天津大无缝钢管厂生产的大口径、厚壁的无缝钢管。代理各大厂家的螺旋管、直缝管、不锈钢管、高压管件、高压电站弯管、封头、高压法兰、阀门等。</p>\r\n<p>&nbsp;公司经营的结构用无缝钢管、输送流体用无缝钢管、低中压锅炉用无缝钢管、高压锅炉用无缝钢管、合金结构用无缝钢管、石油裂化用无缝钢管和冷轧精密无缝钢管等七大系列产品广泛应用于军工、锅炉、石油化工、机械制造和液压流动基础件行业。</p>\r\n<p>三、北京亚通永发商贸有限公司<br />\r\n&nbsp;<br />\r\n北京亚通永发商贸有限公司注册资金500万元，位于北京市大兴区黄材镇大兴矿物局储运公司，是集钢材流通、销售于一体的大型货物流通公司，本公司不仅经营国内多家公司制造的各种型号型钢、槽钢、圆钢还可根据客户需求订制、调运各种管材、特殊钢材。<br />\r\n&nbsp;公司国际流通业务部，能够及时为您提供国际各钢材市场的时价，并以良好的信誉将本公司产品远销日本、泰国、台湾及欧洲，深受国内外用户的好评。<br />\r\n&nbsp;<br />\r\n致此向多年来一直支持、关心和帮助我公司发展的各界朋友及新老客户致意：并以满足客户的需求为己任，将更优的产品，更周到的服务奉献给您！竭诚欢迎国内外客户惠顾。</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n', 'f34', '吨', 2, '43', '3天以内发货'),
(4, 4, 12, 1, '聊城市金峰钢材有限公司销售部位于中国聊城开发区辽河路东首路南，聊城市金峰钢材有限公司销售部是一家钢管、板材、管件、圆钢、型材、不锈钢材等产品的经销批发的有限责任公司。聊城市金峰钢材有限公司销售部经营的钢管、板材、管件、圆钢、型材、不锈钢材畅销消费者市场。聊城市金峰钢材有限公司销售部的产品在消费者当中享有较高的地位，公司与多家零售商和代理商建立了长期稳定的合作关系。聊城市金峰钢材有限公司销售部经销的钢管、板材、管件、圆钢、型材、不锈钢材品种齐全、价格合理。聊城市金峰钢材有限公司销售部实力雄厚，重信用、守合同、保证产品质量，以多品种经营特色和薄利多销的原则，赢得了广大客户的信任。', 'Q235', '吨', 43, '54', '3天以内发货'),
(5, 5, 13, 1, '聊城市金峰钢材有限公司销售部位于中国聊城开发区辽河路东首路南，聊城市金峰钢材有限公司销售部是一家钢管、板材、管件、圆钢、型材、不锈钢材等产品的经销批发的有限责任公司。聊城市金峰钢材有限公司销售部经营的钢管、板材、管件、圆钢、型材、不锈钢材畅销消费者市场。聊城市金峰钢材有限公司销售部的产品在消费者当中享有较高的地位，公司与多家零售商和代理商建立了长期稳定的合作关系。聊城市金峰钢材有限公司销售部经销的钢管、板材、管件、圆钢、型材、不锈钢材品种齐全、价格合理。聊城市金峰钢材有限公司销售部实力雄厚，重信用、守合同、保证产品质量，以多品种经营特色和薄利多销的原则，赢得了广大客户的信任。', 'f3', '吨', 43, '434', '3天以内发货'),
(6, 6, 14, 1, '<p>聊城市金峰钢材有限公司销售部位于中国聊城开发区辽河路东首路南，聊城市金峰钢材有限公司销售部是一家钢管、板材、管件、圆钢、型材、不锈钢材等产品的经销批发的有限责任公司。聊城市金峰钢材有限公司销售部经营的钢管、板材、管件、圆钢、型材、不锈钢材畅销消费者市场。聊城市金峰钢材有限公司销售部的产品在消费者当中享有较高的地位，公司与多家零售商和代理商建立了长期稳定的合作关系。聊城市金峰钢材有限公司销售部经销的钢管、板材、管件、圆钢、型材、不锈钢材品种齐全、价格合理。聊城市金峰钢材有限公司销售部实力雄厚，重信用、守合同、保证产品质量，以多品种经营特色和薄利多销的原则，赢得了广大客户的信任。</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n', 'g4', '吨', 43, '433', '3天以内发货'),
(7, 7, 15, 1, '<p>我公司可生产30-273*2-40的无缝管并长期代理包钢、天津、西宁、冶钢、鲁宝、衡阳、攀钢等各大钢厂的产品，主要材质有：20#、45#、20G、20Cr、40Cr、15CrMoG、12Cr1MoVG、16Mn、27SiMn、30-42CrMo、10CrMo910、T12、T22、T91、P12、P91、15Mo3、Cr5Mo、1Cr5Mo等</p>\r\n<p>另可定做30*30*3-500*500*25的焊接方管、无缝方管，</p>\r\n<p>&nbsp;</p>\r\n', 'd3', '吨', 23, '54', '3天以内发货'),
(8, 8, 16, 1, '<div><p><span style="color:#333333;font-size:9pt;font-family:''宋体'';">聊城市金峰钢材有限公司销售部位于中国聊城开发区辽河路东首路南，聊城市金峰钢材有限公司销售部是一家钢管、板材、管件、圆钢、型材、不锈钢材等产品的经销批发的有限责任公司。聊城市金峰钢材有限公司销售部经营的钢管、板材、管件、圆钢、型材、不锈钢材畅销消费者市场。聊城市金峰钢材有限公司销售部的产品在消费者当中享有较高的地位，公司与多家零售商和代理商建立了长期稳定的合作关系。聊城市金峰钢材有限公司销售部经销的钢管、板材、管件、圆钢、型材、不锈钢材品种齐全、价格合理。聊城市金峰钢材有限公司销售部实力雄厚，重信用、守合同、保证产品质量，以多品种经营特色和薄利多销的原则，赢得了广大客户的信任。</span></p>\r\n<p><span style="font-size:24pt;"><span style="color:#008000;"><span style="font-family:''宋体'';">电</span><span style="font-family:''Arial'';">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-family:''宋体'';">话：</span><span style="font-family:''Arial'';">&nbsp;86&nbsp;0635&nbsp;8877058&nbsp;&nbsp;&nbsp;8877059</span></span></span><span style="color:#333333;font-size:10pt;font-family:''Arial'';"><br />\r\n</span><span style="font-size:24pt;"><span style="color:#008000;"><span style="font-family:''宋体'';">移动电话：</span><span style="font-family:''Arial'';">&nbsp;13561235169&nbsp;&nbsp;&nbsp;13306356318</span></span></span><span style="color:#333333;font-size:10pt;font-family:''Arial'';"><br />\r\n</span><span style="font-size:24pt;"><span style="color:#008000;"><span style="font-family:''宋体'';">传</span><span style="font-family:''Arial'';">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-family:''宋体'';">真：</span><span style="font-family:''Arial'';">&nbsp;86&nbsp;0635&nbsp;2188782</span></span></span></p>\r\n</div>\r\n', 'g5', '吨', 6, '76', '3天以内发货'),
(9, 9, 17, 1, '<span style="color:#333333;font-family:宋体;">本公司常年代理首钢，邯钢，宝钢、成都、天钢、包钢、鞍钢、、冶钢、安钢、衡钢等各大钢厂的产品。</span><span style="color:#333333;font-family:Arial;"><br />\r\n</span><span style="color:#333333;font-family:宋体;">现公司有以下主要产品，</span><span style="color:#333333;font-family:Arial;"><br />\r\n</span><span style="color:#333333;font-family:宋体;">一、不锈钢管、不锈钢棒材、不锈钢板材系列</span><span style="color:#333333;font-family:Arial;">.<br />\r\n</span><span style="color:#333333;font-family:宋体;">结构用不锈钢管（</span><span style="color:#333333;font-family:Arial;">GB/T14975</span><span style="color:#333333;font-family:宋体;">），流体用不锈钢管</span><span style="color:#333333;font-family:Arial;">(GB/T14975)</span><span style="color:#333333;font-family:宋体;">等</span><span style="color:#333333;font-family:Arial;"><br />\r\n</span><span style="color:#333333;font-family:宋体;">不锈钢无缝管材质有</span><span style="color:#333333;font-family:Arial;">;201,202,301,310,310S,304,304L,316,316L,321,439,436,437..<br />\r\n</span><span style="color:#333333;font-family:宋体;">不锈钢棒材材质有</span><span style="color:#333333;font-family:Arial;">;201,202,301,310S,321,304,304L,316,316L,321,1Cr13,2Cr13,3Cr13<br />\r\n&nbsp;</span><span style="color:#333333;font-family:宋体;">二、</span><span style="color:#333333;font-family:Arial;"><span style="color:#333333;font-family:宋体;">合金管、无缝管系列。</span><span style="color:#333333;font-family:Arial;"><br />\r\n</span><span style="color:#333333;font-family:宋体;">结</span><span style="color:#333333;font-family:Arial;"><span style="color:#333333;font-family:宋体;">构</span><span style="color:#333333;font-family:Arial;"><span style="color:#333333;font-family:宋体;">管</span><span style="color:#333333;font-family:Arial;">GB8162---99,</span><span style="color:#333333;font-family:宋体;">流体管</span><span style="color:#333333;font-family:Arial;">GB8163---99,</span><span style="color:#333333;font-family:宋体;">低中压锅炉管</span><span style="color:#333333;font-family:Arial;">GB3087—2000<br />\r\n</span><span style="color:#333333;font-family:宋体;">高压锅炉管</span><span style="color:#333333;font-family:Arial;">GB5310--95</span><span style="color:#333333;font-family:宋体;">化肥专用管</span><span style="color:#333333;font-family:Arial;">GB6479—86</span><span style="color:#333333;font-family:宋体;">石油裂化管</span><span style="color:#333333;font-family:Arial;">GB9948-----1988<br />\r\n</span><span style="color:#333333;font-family:宋体;">液压支柱管</span><span style="color:#333333;font-family:Arial;">GB/T17396-98</span><span style="color:#333333;font-family:宋体;">地质钻探管</span><span style="color:#333333;font-family:Arial;">YB235-70</span><span style="color:#333333;font-family:宋体;">汽车半轴套管</span><span style="color:#333333;font-family:Arial;">YB/T5035-99<br />\r\n</span><span style="color:#333333;font-family:宋体;">具体材质；</span><span style="color:#333333;font-family:Arial;">10#</span><span style="color:#333333;font-family:宋体;">，</span><span style="color:#333333;font-family:Arial;">20#</span><span style="color:#333333;font-family:宋体;">，</span><span style="color:#333333;font-family:Arial;">45#</span><span style="color:#333333;font-family:宋体;">，</span><span style="color:#333333;font-family:Arial;">20G</span><span style="color:#333333;font-family:宋体;">，</span><span style="color:#333333;font-family:Arial;">16Mn,27SiMn,15CrMo,15CrMoG,12Cr1MoV<br />\r\n20CrMo, 35CrMo, 42CrMo, 12Cr1MoVG, Cr5Mo, 10CrMo910, WB36,<br />\r\n13CrMo44,34CrMo4,P5,12Cr2MoV,P11 P12.,P22,P91</span><span style="color:#333333;font-family:宋体;">等</span></span>', 'tt4', '吨', 43, '555', '3天以内发货'),
(10, 10, 21, 1, '<p>我公司库存规格齐全，批发、零售均可少收，价格低量、带发运输。</p>\r\n<p>专业生产不锈钢非标无缝工业管/厚壁管/。主要材质有201、202、301、304、304L、TP304、316、316L、TP316、TP316L、321、TP321、317L、309S、310S、410、430、316Ti、347H、2205、430F、17-4PH、17-7PH、2520、904L、347H等.</p>\r\n<p>&nbsp;不锈钢厚壁管：φ20×7—830*50&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 不锈钢常规管：φ5×0.8—630×15</p>\r\n<p>&nbsp;不锈钢异型管: 12×12×1—120×120×12扁管：40×20×2—200×100×10</p>\r\n<p>不锈钢冷板0.4mm-0.9mm*1m*2m/4寸*8寸，</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.0mm-3.0mm*1m*2m/4寸*8寸</p>\r\n<p>不锈钢热板3.0mm-4.0mm*1250*6000</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.0mm-60mm*1250*6000</p>\r\n<p>&nbsp;另备有各种不锈钢法兰、冲压弯头、截止阀、球阀、各种不锈钢管件</p>\r\n<p>&nbsp;</p>\r\n<p>201、202、301、304、304L、TP304、316、316L、TP316、TP316L、321、TP321、317L309S、310S等.</p>\r\n<p>&nbsp;</p>\r\n', 't54', '吨', 6, '54', '3天以内发货'),
(11, 11, 33, 1, '聊城市金峰钢材有限公司销售部位于中国聊城开发区辽河路东首路南，聊城市金峰钢材有限公司销售部是一家钢管、板材、管件、圆钢、型材、不锈钢材等产品的经销批发的有限责任公司。聊城市金峰钢材有限公司销售部经营的钢管、板材、管件、圆钢、型材、不锈钢材畅销消费者市场。聊城市金峰钢材有限公司销售部的产品在消费者当中享有较高的地位，公司与多家零售商和代理商建立了长期稳定的合作关系。聊城市金峰钢材有限公司销售部经销的钢管、板材、管件、圆钢、型材、不锈钢材品种齐全、价格合理。聊城市金峰钢材有限公司销售部实力雄厚，重信用、守合同、保证产品质量，以多品种经营特色和薄利多销的原则，赢得了广大客户的信任。', 'g54', '吨', 5, '34', '3天以内发货'),
(12, 12, 46, 1, '<p>聊城市金峰钢材有限公司销售部位于中国聊城开发区辽河路东首路南，聊城市金峰钢材有限公司销售部是一家钢管、板材、管件、圆钢、型材、不锈钢材等产品的经销批发的有限责任公司。聊城市金峰钢材有限公司销售部经营的钢管、板材、管件、圆钢、型材、不锈钢材畅销消费者市场。聊城市金峰钢材有限公司销售部的产品在消费者当中享有较高的地位，公司与多家零售商和代理商建立了长期稳定的合作关系。聊城市金峰钢材有限公司销售部经销的钢管、板材、管件、圆钢、型材、不锈钢材品种齐全、价格合理。聊城市金峰钢材有限公司销售部实力雄厚，重信用、守合同、保证产品质量，以多品种经营特色和薄利多销的原则，赢得了广大客户的信任。</p>\r\n<p>电&nbsp;&nbsp;&nbsp; 话： 86 0635 8877058&nbsp;&nbsp; 8877059<br />\r\n移动电话： 13561235169&nbsp;&nbsp; 13306356318<br />\r\n传&nbsp;&nbsp;&nbsp; 真： 86 0635 2188782</p>\r\n<p>&nbsp;</p>\r\n', 'g54', '吨', 5, '65', '3天以内发货');

-- --------------------------------------------------------

--
-- 表的结构 `qb_sell_content_2`
--

CREATE TABLE IF NOT EXISTS `qb_sell_content_2` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `ask_username` varchar(20) NOT NULL DEFAULT '',
  `ask_phone` varchar(20) NOT NULL DEFAULT '',
  `ask_mobphone` varchar(15) NOT NULL DEFAULT '',
  `ask_email` varchar(50) NOT NULL DEFAULT '',
  `ask_qq` varchar(11) NOT NULL DEFAULT '',
  `ask_title` varchar(100) NOT NULL DEFAULT '',
  `order_num` int(6) NOT NULL DEFAULT '0',
  `hope_price` varchar(20) NOT NULL DEFAULT '',
  `hope_know` varchar(255) NOT NULL DEFAULT '',
  `hope_reply` varchar(25) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `qb_sell_content_2`
--


-- --------------------------------------------------------

--
-- 表的结构 `qb_sell_db`
--

CREATE TABLE IF NOT EXISTS `qb_sell_db` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `city_id` (`city_id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `qb_sell_db`
--

INSERT INTO `qb_sell_db` (`id`, `fid`, `city_id`, `uid`) VALUES
(1, 11, 0, 1),
(2, 11, 0, 1),
(3, 11, 0, 1),
(4, 12, 0, 1),
(5, 13, 0, 1),
(6, 14, 0, 1),
(7, 15, 0, 1),
(8, 16, 0, 1),
(9, 17, 0, 1),
(10, 21, 0, 1),
(11, 33, 0, 1),
(12, 46, 0, 1),
(13, 11, 0, 34);

-- --------------------------------------------------------

--
-- 表的结构 `qb_sell_field`
--

CREATE TABLE IF NOT EXISTS `qb_sell_field` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `mid` mediumint(5) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL DEFAULT '',
  `field_name` varchar(30) NOT NULL DEFAULT '',
  `field_type` varchar(15) NOT NULL DEFAULT '',
  `field_leng` smallint(3) NOT NULL DEFAULT '0',
  `orderlist` int(10) NOT NULL DEFAULT '0',
  `form_type` varchar(15) NOT NULL DEFAULT '',
  `field_inputwidth` smallint(3) DEFAULT NULL,
  `field_inputheight` smallint(3) NOT NULL DEFAULT '0',
  `form_set` text NOT NULL,
  `form_value` text NOT NULL,
  `form_units` varchar(255) NOT NULL DEFAULT '',
  `form_title` text NOT NULL,
  `mustfill` tinyint(1) NOT NULL DEFAULT '0',
  `listshow` tinyint(1) NOT NULL DEFAULT '0',
  `listfilter` tinyint(1) DEFAULT NULL,
  `search` tinyint(1) NOT NULL DEFAULT '0',
  `allowview` varchar(255) NOT NULL DEFAULT '',
  `allowpost` varchar(255) NOT NULL DEFAULT '',
  `js_check` text NOT NULL,
  `js_checkmsg` varchar(255) NOT NULL DEFAULT '',
  `classid` mediumint(7) NOT NULL DEFAULT '0',
  `form_js` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=162 ;

--
-- 转存表中的数据 `qb_sell_field`
--

INSERT INTO `qb_sell_field` (`id`, `mid`, `title`, `field_name`, `field_type`, `field_leng`, `orderlist`, `form_type`, `field_inputwidth`, `field_inputheight`, `form_set`, `form_value`, `form_units`, `form_title`, `mustfill`, `listshow`, `listfilter`, `search`, `allowview`, `allowpost`, `js_check`, `js_checkmsg`, `classid`, `form_js`) VALUES
(86, 1, '详细介绍', 'content', 'mediumtext', 0, -1, 'ieeditsimp', 600, 250, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, ''),
(159, 2, '期望价格', 'hope_price', 'varchar', 20, 18, 'text', 50, 0, '', '', '单价', '', 1, 0, 0, 0, '', '', '', '', 0, ''),
(160, 2, '还想了解', 'hope_know', 'varchar', 255, 17, 'checkbox', 0, 0, '单价\r\n产品规格、型号\r\n价格条款\r\n原产地\r\n能否提供样品\r\n最小订货量\r\n交货期\r\n供货能力\r\n销售条款及附加条件\r\n包装方式\r\n质量/安全认证', '单价', '', '', 0, 0, 0, 0, '', '', '', '', 0, ''),
(158, 2, '订货总量', 'order_num', 'int', 6, 19, 'text', 50, 0, '', '', '', '', 1, 0, 0, 0, '', '', '', '', 0, ''),
(80, 1, '型号', 'shoptype', 'varchar', 50, 6, 'text', 10, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 31, ''),
(142, 2, '补充信息', 'content', 'mediumtext', 0, 15, 'textarea', 500, 70, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, '<br><select name=''autoSelect'' onchange="changeaddContent(this);">\r\n<option value=''''>(懒得打字？“快速填写”帮您忙！) </option>\r\n<option value=''我对贵公司的产品非常感兴趣，能否发一些详细资料给我参考？''>我对贵公司的产品非常感兴趣，能否发一些详细资料给我参考？</option> \r\n<option value=''请您发一份比较详细的产品规格说明，谢谢！''>请您发一份比较详细的产品规格说明，谢谢！</option> \r\n<option value=''请问贵公司产品是否可以代理？代理条件是什么？''>请问贵公司产品是否可以代理？代理条件是什么？</option> \r\n<option value=''我公司有意购买此产品，可否提供此产品的报价单和最小起订量？''>我公司有意购买此产品，可否提供此产品的报价单和最小起订量？</option> \r\n</select>\r\n<SCRIPT language="javascript">\r\n            function changeaddContent(autoSelect){\r\n			 	if (autoSelect.selectedIndex !=0){			 		\r\n			 		document.getElementById("atc_content").value = autoSelect[autoSelect.selectedIndex].value;\r\n					autoSelect.selectedIndex=0;\r\n			 	}\r\n				\r\n			 }\r\n	     </SCRIPT>'),
(154, 1, '最小起订', 'order_min', 'int', 7, 8, 'text', 30, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, ''),
(153, 1, '计量单位', 'my_units', 'varchar', 10, 9, 'text', 50, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, ''),
(145, 2, '联系电话', 'ask_phone', 'varchar', 20, 8, 'text', 100, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, ''),
(144, 2, '联系人姓名', 'ask_username', 'varchar', 20, 9, 'text', 100, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, ''),
(146, 2, '联系手机', 'ask_mobphone', 'varchar', 15, 7, 'text', 100, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, ''),
(147, 2, '联系邮箱', 'ask_email', 'varchar', 50, 6, 'text', 100, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, ''),
(148, 2, '联系QQ', 'ask_qq', 'varchar', 11, 5, 'text', 100, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, ''),
(155, 1, '最大供货', 'order_max', 'varchar', 7, 7, 'text', 30, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, ''),
(156, 1, '发货期限', 'send_day', 'varchar', 30, 5, 'select', 0, 0, '3天以内发货\r\n3-7天内发货\r\n7-10天内发货\r\n10天以上发货\r\n待商议', '', '', '', 0, 0, 0, 0, '', '', '', '', 0, ''),
(157, 2, '询价标题', 'ask_title', 'varchar', 100, 20, 'text', 300, 0, '', '', '', '', 1, 0, 0, 0, '', '', '', '', 0, ''),
(161, 2, '我希望', 'hope_reply', 'varchar', 25, 14, 'time', 0, 0, '', '', '之前回复', '', 0, 0, 0, 0, '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `qb_sell_join`
--

CREATE TABLE IF NOT EXISTS `qb_sell_join` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `cid` mediumint(7) NOT NULL DEFAULT '0',
  `cuid` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `ip` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `mid` (`mid`),
  KEY `fid` (`fid`,`cid`),
  KEY `yz` (`yz`,`fid`,`mid`,`cid`),
  KEY `cuid` (`cuid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `qb_sell_join`
--


-- --------------------------------------------------------

--
-- 表的结构 `qb_sell_module`
--

CREATE TABLE IF NOT EXISTS `qb_sell_module` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `sort_id` mediumint(5) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `list` smallint(4) NOT NULL DEFAULT '0',
  `style` varchar(50) NOT NULL DEFAULT '',
  `config` text NOT NULL,
  `config2` text NOT NULL,
  `comment_type` tinyint(1) NOT NULL DEFAULT '0',
  `ifdp` tinyint(1) NOT NULL DEFAULT '0',
  `template` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `qb_sell_module`
--

INSERT INTO `qb_sell_module` (`id`, `sort_id`, `name`, `list`, `style`, `config`, `config2`, `comment_type`, `ifdp`, `template`) VALUES
(2, 0, '询价单模型', 1, '', '', '', 0, 0, 'a:4:{s:4:"list";s:12:"joinlist.htm";s:4:"show";s:12:"joinshow.htm";s:4:"post";s:8:"join.htm";s:6:"search";s:0:"";}'),
(1, 0, '产品模型', 4, '', '', '', 1, 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `qb_sell_pic`
--

CREATE TABLE IF NOT EXISTS `qb_sell_pic` (
  `pid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `imgurl` varchar(150) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `id` (`id`),
  KEY `fid` (`fid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `qb_sell_pic`
--

INSERT INTO `qb_sell_pic` (`pid`, `id`, `fid`, `mid`, `uid`, `type`, `imgurl`, `name`) VALUES
(1, 1, 11, 0, 1, 0, 'http://i00.c.aliimg.com/img/ibank/2010/267/882/137288762_1108421225.310x310.jpg', ''),
(2, 2, 11, 0, 1, 0, 'http://i01.c.aliimg.com/img/ibank/2010/143/884/202488341_1108421225.310x310.jpg', ''),
(3, 3, 11, 0, 1, 0, 'http://i05.c.aliimg.com/img/ibank/2010/127/864/202468721_1108421225.310x310.jpg', ''),
(4, 4, 12, 0, 1, 0, 'http://i05.c.aliimg.com/img/ibank/2010/755/984/198489557_1108421225.310x310.jpg', ''),
(5, 5, 13, 0, 1, 0, 'http://i01.c.aliimg.com/img/ibank/2010/157/174/198471751_1108421225.310x310.jpg', ''),
(6, 6, 14, 0, 1, 0, 'http://i03.c.aliimg.com/img/ibank/2010/223/454/198454322_1108421225.310x310.jpg', ''),
(7, 7, 15, 0, 1, 0, 'http://i02.c.aliimg.com/img/ibank/2010/004/377/201773400_1108421225.310x310.jpg', ''),
(8, 8, 16, 0, 1, 0, 'http://i03.c.aliimg.com/img/ibank/2010/472/005/198500274_1108421225.310x310.jpg', ''),
(9, 9, 17, 0, 1, 0, 'http://i00.c.aliimg.com/img/ibank/2010/423/442/133244324_1108421225.310x310.jpg', ''),
(10, 10, 21, 0, 1, 0, 'http://i05.c.aliimg.com/img/ibank/2010/710/902/149209017_1108421225.310x310.jpg', ''),
(11, 11, 33, 0, 1, 0, 'http://i00.c.aliimg.com/img/ibank/2010/673/938/124839376_1108421225.310x310.jpg', ''),
(12, 12, 46, 0, 1, 0, 'http://i00.c.aliimg.com/img/ibank/2010/733/921/124129337_1108421225.310x310.jpg', '');

-- --------------------------------------------------------

--
-- 表的结构 `qb_sell_report`
--

CREATE TABLE IF NOT EXISTS `qb_sell_report` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `onlineip` varchar(15) NOT NULL DEFAULT '',
  `type` tinyint(2) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `iftrue` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `qb_sell_report`
--


-- --------------------------------------------------------

--
-- 表的结构 `qb_sell_sort`
--

CREATE TABLE IF NOT EXISTS `qb_sell_sort` (
  `fid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `fup` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `class` smallint(4) NOT NULL DEFAULT '0',
  `sons` smallint(4) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `admin` varchar(100) NOT NULL DEFAULT '',
  `list` int(10) NOT NULL DEFAULT '0',
  `listorder` tinyint(2) NOT NULL DEFAULT '0',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  `logo` varchar(150) NOT NULL DEFAULT '',
  `descrip` text NOT NULL,
  `style` varchar(50) NOT NULL DEFAULT '',
  `template` text NOT NULL,
  `jumpurl` varchar(150) NOT NULL DEFAULT '',
  `maxperpage` tinyint(3) NOT NULL DEFAULT '0',
  `metatitle` varchar(250) NOT NULL DEFAULT '',
  `metakeywords` varchar(255) NOT NULL DEFAULT '',
  `metadescription` varchar(255) NOT NULL DEFAULT '',
  `allowcomment` tinyint(1) NOT NULL DEFAULT '0',
  `allowpost` varchar(150) NOT NULL DEFAULT '',
  `allowviewtitle` varchar(150) NOT NULL DEFAULT '',
  `allowviewcontent` varchar(150) NOT NULL DEFAULT '',
  `allowdownload` varchar(150) NOT NULL DEFAULT '',
  `forbidshow` tinyint(1) NOT NULL DEFAULT '0',
  `config` mediumtext NOT NULL,
  `index_show` tinyint(1) NOT NULL DEFAULT '0',
  `contents` mediumint(4) NOT NULL DEFAULT '0',
  `tableid` varchar(30) NOT NULL DEFAULT '',
  `dir_name` varchar(50) NOT NULL DEFAULT '',
  `ifcolor` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=156 ;

--
-- 转存表中的数据 `qb_sell_sort`
--

INSERT INTO `qb_sell_sort` (`fid`, `fup`, `name`, `mid`, `class`, `sons`, `type`, `admin`, `list`, `listorder`, `passwd`, `logo`, `descrip`, `style`, `template`, `jumpurl`, `maxperpage`, `metatitle`, `metakeywords`, `metadescription`, `allowcomment`, `allowpost`, `allowviewtitle`, `allowviewcontent`, `allowdownload`, `forbidshow`, `config`, `index_show`, `contents`, `tableid`, `dir_name`, `ifcolor`) VALUES
(1, 0, '钢材', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(2, 0, '钢板卷', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(3, 0, '板材', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(4, 0, '中厚板', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(5, 0, '钢管', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(6, 0, '型钢', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(7, 0, '特钢', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(8, 0, '不锈钢', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(9, 0, '炉料', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(10, 0, '生铁', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(11, 1, '螺纹钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(12, 1, '普线', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(13, 1, '高线', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(14, 1, '圆钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(15, 1, '线材', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(16, 1, '二级螺纹钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(17, 1, '三级螺纹钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(18, 1, '盘螺', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(19, 1, '优线', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(20, 1, '带肋钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(21, 2, '带钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(22, 2, '热板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(23, 2, '冷板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(24, 2, '不锈板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(25, 2, '镀锌板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(26, 2, '彩涂板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(27, 2, '花纹板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(28, 2, '低合金板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(29, 2, '镀锡板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(30, 2, '镀铝锌板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(31, 2, '酸洗板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(32, 2, '轧硬卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(33, 3, '冷轧板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(34, 3, '热轧板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(35, 3, '容器板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(36, 3, '合金板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(37, 3, '高强板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(38, 3, '耐腐蚀板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(39, 3, '马口铁基板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(40, 3, '镀锡板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(41, 3, '镀铝板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(42, 3, '硅钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(43, 3, '镀锌板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(44, 3, '彩涂板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(45, 3, '管线钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(46, 4, '船板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(47, 4, '大梁板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(48, 4, '模具板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(49, 4, '锅炉板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(50, 4, '翼缘板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(51, 4, '四切平板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(52, 4, '花纹板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(53, 4, '低合金板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(54, 4, '锰板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(55, 4, '碳结板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(56, 4, '合结板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(57, 4, '开平板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(58, 4, '耐磨板', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(59, 5, '无缝管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(60, 5, '镀锌管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(61, 5, '方管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(62, 5, '螺旋管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(63, 5, '焊管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(64, 5, '直缝管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(65, 5, '圆管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(66, 5, '锅炉管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(67, 5, '球墨管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(68, 5, '矩型管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(69, 5, '化肥用管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(70, 5, '结构管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(71, 5, '铸铁管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(72, 5, '脚手架', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(73, 6, 'H型钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(74, 6, '槽钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(75, 6, '工字钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(76, 6, '角钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(77, 6, '扁钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(78, 6, '轻轨', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(79, 6, '重轨', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(80, 6, '方钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(81, 6, '不等边角钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(82, 6, '型钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(83, 6, '六角钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(84, 6, '拉光圆', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(85, 6, '碳圆', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(86, 6, '等边角钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(87, 7, '焊线', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(88, 7, '圆钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(89, 7, '轴承钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(90, 7, '碳结钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(91, 7, '弹簧钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(92, 7, '高工钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(93, 7, '模具钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(94, 7, '钢纹线', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(95, 7, '齿轮钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(96, 7, '合结钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(97, 7, '耐腐蚀钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(98, 7, '耐磨钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(99, 7, '碳工钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(100, 7, '碳素钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(101, 7, '耐热钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(102, 7, '冷镦钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(103, 7, '工模钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(104, 7, '结构钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(105, 8, '不锈板卷', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(106, 8, '不锈钢管', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(107, 8, '不锈钢线材', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(108, 8, '不锈钢带', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(109, 8, '不锈钢圆钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(110, 8, '不锈钢角钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(111, 8, '不锈钢槽钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(112, 8, '不锈钢扁钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(113, 8, '不锈钢坯', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(114, 8, '优焊线', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(115, 8, '拉丝', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(116, 8, '硬线', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(117, 8, '耐热钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(118, 8, '钢丝', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(119, 9, '矿石', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(120, 9, '煤焦', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(121, 9, '精铁粉', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(122, 9, '废钢', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(123, 9, '焦炭', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(124, 9, '煤炭', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(125, 9, '耐火材料', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(126, 9, '碳素材料', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(127, 9, '球墨铸铁', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(128, 9, '钢锭', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(129, 9, '硅锰', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(130, 9, '方坯', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(131, 9, '管坯', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(132, 9, '钢坯', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(133, 9, '板坯', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(134, 9, '球磨生铁', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(135, 9, '辅料副产品', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(136, 10, '硅铁', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(137, 10, '铬铁', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(138, 10, '钼铁', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(139, 10, '钒铁', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(140, 10, '钨铁', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(141, 10, '铌铁', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(142, 10, '钛铁', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(143, 10, '锰铁', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(144, 10, '镍矿', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(145, 10, '有色', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(146, 10, '铜', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(147, 10, '铝', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(148, 10, '锌', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(149, 10, '金', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(150, 10, '银', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(151, 10, '镍', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(152, 10, '铅', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(153, 10, '锡', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(154, 10, '稀土', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0),
(155, 10, '贵金属', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
