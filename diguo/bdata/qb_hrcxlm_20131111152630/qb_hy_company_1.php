<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hy_company`;");
E_C("CREATE TABLE `qb_hy_company` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL DEFAULT '',
  `host` varchar(100) NOT NULL DEFAULT '',
  `fname` varchar(100) NOT NULL DEFAULT '',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(32) NOT NULL DEFAULT '',
  `renzheng` tinyint(1) NOT NULL DEFAULT '0',
  `is_agent` tinyint(1) NOT NULL DEFAULT '0',
  `is_vip` tinyint(1) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `list` int(10) NOT NULL DEFAULT '0',
  `listorder` int(10) NOT NULL DEFAULT '0',
  `picurl` varchar(255) NOT NULL DEFAULT '',
  `gz` varchar(248) NOT NULL DEFAULT '',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `yzer` varchar(32) NOT NULL DEFAULT '',
  `yztime` int(10) NOT NULL DEFAULT '0',
  `hits` int(10) NOT NULL DEFAULT '0',
  `levels` tinyint(2) NOT NULL DEFAULT '0',
  `levelstime` int(10) NOT NULL DEFAULT '0',
  `lastview` int(10) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `province_id` mediumint(7) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  `zone_id` mediumint(7) NOT NULL DEFAULT '0',
  `street_id` mediumint(7) NOT NULL DEFAULT '0',
  `qy_cate` varchar(32) NOT NULL DEFAULT '',
  `qy_saletype` varchar(48) NOT NULL DEFAULT '',
  `qy_regmoney` int(10) NOT NULL DEFAULT '0',
  `qy_createtime` varchar(64) NOT NULL DEFAULT '',
  `qy_regplace` varchar(128) NOT NULL DEFAULT '',
  `qy_address` varchar(248) NOT NULL DEFAULT '',
  `qy_postnum` varchar(8) NOT NULL DEFAULT '',
  `qy_pro_ser` varchar(248) NOT NULL DEFAULT '',
  `my_buy` varchar(248) NOT NULL DEFAULT '',
  `my_trade` varchar(32) NOT NULL DEFAULT '',
  `qy_contact` varchar(16) NOT NULL DEFAULT '',
  `qy_contact_zhiwei` varchar(16) NOT NULL DEFAULT '',
  `qy_contact_sex` int(1) NOT NULL DEFAULT '1',
  `qy_contact_tel` varchar(248) NOT NULL DEFAULT '',
  `qy_contact_mobile` varchar(248) NOT NULL DEFAULT '',
  `qy_contact_fax` varchar(248) NOT NULL DEFAULT '',
  `qy_contact_email` varchar(248) NOT NULL DEFAULT '',
  `qy_website` varchar(248) NOT NULL DEFAULT '',
  `qq` varchar(248) NOT NULL DEFAULT '',
  `msn` varchar(248) NOT NULL DEFAULT '',
  `skype` varchar(248) NOT NULL DEFAULT '',
  `ww` varchar(248) NOT NULL DEFAULT '',
  `bd_pics` varchar(248) NOT NULL DEFAULT '',
  `toptime` int(10) NOT NULL DEFAULT '0',
  `if_homepage` tinyint(4) NOT NULL DEFAULT '0',
  `permit_pic` varchar(100) NOT NULL DEFAULT '',
  `guo_tax_pic` varchar(100) NOT NULL DEFAULT '',
  `di_tax_pic` varchar(100) NOT NULL DEFAULT '',
  `organization_pic` varchar(100) NOT NULL DEFAULT '',
  `idcard_pic` varchar(100) NOT NULL DEFAULT '',
  `gg_maps` varchar(50) NOT NULL DEFAULT '',
  `dianping` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `dianpingtime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  KEY `uid` (`uid`),
  KEY `levels` (`levels`,`posttime`),
  KEY `yz` (`yz`,`posttime`),
  KEY `toptime` (`toptime`),
  KEY `city_id` (`city_id`,`levels`,`levelstime`),
  KEY `renzheng` (`renzheng`),
  KEY `host` (`host`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=gbk");
E_D("replace into `qb_hy_company` values('22','瑞安市锻造实业公司','','西餐厅,歌舞厅,婚庆服务,综合市场,电脑培训','27','test1','0','0','0','1288661741','0','0','homepage/logo/1/27_20101102091141_e1uuj.jpg','','1','','1288661741','42','1','1288663982','1382219089','    公司创办于1992年，占地5000平方米，建筑面积8900平方米，以复杂机械零件的精密模锻件锻造生产为主,并进行锻件的机械加工和硬质合金工具的钎焊。   供应机械零件（汽摩配）锻件、起重吊钩、五金工具、钎焊硬质合金工具。如随车工具、G字夹、汽车摩托车齿轮及叉臂轴类锻件。','0','1','1','1','个体经营','生产型','999','2010-11-03','广东省','','','钢材','钢','机械及行业设备','张生','','0','020555444','','','gfds@afds.cn','','','','','','','0','1','','','','','','39.88880517803271,116.4656920374756','0','0');");
E_D("replace into `qb_hy_company` values('23','宁波市鄞州塘溪红龙五金工具厂','','西餐厅,歌舞厅,婚庆服务,商务房产,电脑培训','28','test2','0','0','0','1288662180','0','0','homepage/logo/1/logo_28_20101102091100_6jeu7.jpg','','1','','1288662180','18','1','1288663984','1365576097','    本厂是一家拥有十多年历史，专业生产园林工具刀片（系列修枝机刀片）的厂家 。  本厂依靠科技进步，通过本厂技术人员的刻苦攻关，现开发出多款具有先进水平的高硬度，高韧性的系列产品。基本解决了国内刀片厂家有韧性没硬度，有硬度没韧性的技术困局，大大提高了刀片的使用寿命。 得到很多国内外客商的首肯，直接出口欧洲和美国。  本厂产品由进料到成品基本做到全线产品一体生产，所有零配件无外加工。质量，产能得到了最高最大化。现竭诚邀请您来电，来函。我们将以最大的热情期待您的光临。','0','1','14','0','个体经营','生产型','900','2010-11-13','宁波','','','钢索','钢','机械及行业设备','牛生','','0','0205544447','','','fds@ds.cn','','','','','','','0','1','','','','','','39.87655466879821,116.39410924328615','0','0');");
E_D("replace into `qb_hy_company` values('24','南京绿友纸浆模塑有限公司','','西餐厅,歌舞厅,婚庆服务,商务房产,电脑培训','29','test3','0','0','0','1288662327','0','0','homepage/logo/1/29_20101102091127_bcl6e.jpg','','1','','1288662327','21','1','1288663984','1382520828','   南京绿友纸浆模塑有限公司是由中国包装新技术开发包宁公司改制组建而成，继续从事包宁公司的纸浆模塑技术研究、设备制造、新品推广的专业公司，具有独立法人资格、科、工、贸一体化、外向型股份制企业。   公司围绕纸浆模塑技术开发设有技术开发部、模具中心、机械加工厂、新品示范厂、工程安装部等部门，从事纸塑技术开发的专业工程技术人员占35%，高级工程师3人(其中一名因在纸浆模塑方面有特殊贡献、享受国务院特殊津贴并颁发证书)，工程师8人，技术力量雄厚，设施齐全，具有独立自主的开发研究、试验示范、生产销售的经济实体。绿友公司集中了包宁公司最优秀的人才，全面继承、加速研究、全面开发了纸浆模塑技术，因此，在纸浆模塑领域保持了技术最全面、设备最先进、品种最齐全的优势！','0','1','9','0','个体经营','生产型','600','2010-11-06','上海','','','玻璃幕墙','玻璃','机械及行业设备','黄生','','0','0204448554','','','fdsg@sda.cn','','','','','','','0','1','','','','','','39.899999965538825,116.44955586804201','0','0');");
E_D("replace into `qb_hy_company` values('25','上海烈力轴承制造有限公司','','西餐厅,牛排馆,歌舞厅,KTV,婚庆服务,商务房产,电脑培训','30','test4','0','0','0','1288662567','0','0','homepage/logo/1/30_20101102091127_ibn2r.jpg','','1','','1288662567','18','1','1288663985','1382431196','    浙江双飞无油轴承有限公司，是中国专业生产滑动轴承系列产品的龙头企业；浙江省“AAA”级守合同、重信用企业；浙江省高新技术企业；ISO9001和QS9000质量体系认证单位。 公司有一支强劲的新产品研发队伍和完善的试验设施，被列为浙江省技术中心。产品50%以上出口德国、意大利、日本、新加坡、美国、加拿大、台湾等20多个国家和地区， 已经创造了良好的国际信誉。   公司目前主要产品有：SF系列无油润滑轴承、JF双金属轴承、FB青铜轴承、JDB镶嵌固体润滑轴承等12个系列16000多个品种，适应：高温、高速等各种场合的使用。公司有完善的检测设备，保证100%的合格产品提供给顾客，让每位“ZOB”','0','1','1','12','个体经营','生产型','600','2010-11-04','上海','','','生铁','铁','机械及行业设备','李生','','0','02054477877','','','fds@sda.cn','','','','','','','0','1','','','','','','39.90065842550712,116.39719914807131','0','0');");
E_D("replace into `qb_hy_company` values('26','温州天旺五金有限公司','','西餐厅,牛排馆,歌舞厅,婚庆服务,商务房产','31','test5','0','0','0','1288662786','0','0','homepage/logo/1/31_20101102091106_ijzou.jpg','','1','','1288662786','22','1','1288663985','1382351063','    我司是专业生产日用五金、机电配件、塑胶制品、紧固件等产品的出口外向型企业，是中国较早开发DIY家用五金组合系列产品的知名企业。企业创立至今始终坚持走质量效益型之路，强化全面管理和有效经营，注重企业形象和产品形象，产品远销世界各地，深得国内外客户信赖和赞誉。在纷繁复杂的市场竟争中，始终坚守诚信、勇于创新。  我司根据自身发展需求和市场发展趋势，将制造、生产的日用五金、标准件、非标准件、紧固件、塑胶制品、机电配件等产品，分为两大市场板块，其中DIY家用五金套装已形成30个系列近1000个品种，凭借严格质量管理和出众的设计理念，产品在国际市场（尤其是欧美、东南亚市场）形成良好的销售势头，市场占有','0','1','1','1','个体经营','生产型','300','2010-11-06','深圳','','','布','灰布','机械及行业设备','何生','','0','0204544744','','','fds@fsa.cn','','','','','','','0','1','','','','','','39.89947319300862,116.42998647106936','0','0');");
E_D("replace into `qb_hy_company` values('27','常州市武进天力电动工具厂','','西餐厅,歌舞厅,婚庆服务,商务房产,电脑培训','32','test6','0','0','0','1288662947','0','0','homepage/logo/1/32_20101102091147_9pqhn.jpg','','1','','1288662947','21','1','1288663986','1382520828','<p>&nbsp;&nbsp;浙江双飞无油轴承有限公司，是中国专业生产滑动轴承系列产品的龙头企业；浙江省“AAA”级守合同、重信用企业；浙江省高新技术企业；ISO9001和QS9000质量体系认证单位。&nbsp;公司有一支强劲的新产品研发队伍和完善的试验设施，被列为浙江省技术中心。产品50%以上出口德国、意大利、日本、新加坡、美国、加拿大、台湾等20多个国家和地区，&nbsp;已经创造了良好的国际信誉。&nbsp;&nbsp;&nbsp;公司目前主要产品有：SF系列无油润滑轴承、JF双金属轴承、FB青铜轴承、JDB镶嵌固体润滑轴承等12个系列16000多个品种，适应：高温、高速等各种场合的使用。公司有完善的检测设备，保证100%的合格产品提供给顾客，让每位“ZOB”的顾客满意。&nbsp;&nbsp;&nbsp;我们严格按照&nbsp;ISO-TS16949&nbsp;的质量体系，从原材料投入、模具制造、成形、烧结…等直到服务，全过程加以控制。操作工首先进行自检，专职检验人员进行巡回检，每道工序都进行严格把关，每道工序都做到有据可查。同时以先进的检测设备保证了产品100%的出厂合格率！</p>','0','1','2','0','个体经营','生产型','300','2010-11-04','','','','电脑','手机','机械及行业设备','刘生','','0','020544777','','','fda@dsa.cn','','','','','','','0','1','','','','','','39.93436312005218,116.36115025891115','0','0');");
E_D("replace into `qb_hy_company` values('28','丽图数码科技（深圳）有限公司','','西餐厅,歌舞厅,婚庆服务,商务房产,电脑培训','33','test7','0','0','0','1288663129','0','0','homepage/logo/1/33_20101102091149_ofqqf.jpg','','1','','1288663129','28','1','1288663987','1382260582','   专业从事一体化速印机印刷耗材设计开发和制造的外商独资企业，公司享有独立的进出口权，提供了和外商直接自由的贸易平台。公司拥有5000平方米的现代化厂房，配合全封闭的无尘、恒温、恒湿的生产车间。生产设备全部采用电脑化自动控制。先进的生产工艺流程，保证了产品卓越的品质，并率先于2003年通过了ISO9001-2000质量管理体系认证。公司始终遵循“以客户为本，以品质取胜，以服务领先”的发展理念。坚持产品的专业化，细致化的经营模拟。通过不断努力，不懈追求，充分满足客户的个性化要求，赢得了客户的充分认可与肯定，使公司成为国内同行中最具知名度的供应商。','0','1','1','3','个体经营','生产型','600','2010-11-13','深圳','','','','','机械及行业设备','何生','','0','02087744454','','','dfsafs@dsa.cn','','','','','','','0','1','','','','','','39.896312472789994,116.40337895764162','0','0');");
E_D("replace into `qb_hy_company` values('29','深圳市大中实业发展有限公司','','西餐厅,歌舞厅,婚庆服务,商务房产,电脑培训','34','test8','0','0','0','1288663299','0','0','homepage/logo/1/34_20101102101139_apfdl.jpg','','1','','1288663299','67','1','1288663987','1382629062','    一家集产品开发、设计、生产与销售于一体，较早从事五金、弹簧、消费电子类研发、生产与销售，拥有进出口经营权的高科技民营企业。公司实力雄厚，研发技术成熟，采用国际先进的管理模式，产品质量过硬、销售网络完善，售后服务优质。 　　本公司现拥有厂房面积600平方米，固定资产500多万元，员工60多人，其中工程技术人员有10人，年销售额500多万元，公司已通过ISO9001-2000质量体系认证，并在目前已推广ISO/TS16949-2002体系的运行。有一套完备的产品质量检测设备和检验员队伍，确保产品质量的稳定可靠，在用户中有较高的质量信誉。 ','0','1','1','1','个体经营','生产型','100','','深圳市','','','五金','弹簧','机械及行业设备','黄生','','0','02054787741','','','fsgfd@dsa.cn','','','','','','','0','1','','','','','','39.87879417267252,116.39462422741701','0','0');");
E_D("replace into `qb_hy_company` values('30','海盐中凌铸造有限责任公司','','西餐厅,歌舞厅,婚庆服务,商务房产,电脑培训','35','test9','0','0','0','1288663462','0','0','homepage/logo/1/35_20101102101122_jvufs.jpg','','1','','1288663462','175','1','1288663988','1383725923','    海盐中凌铸造有限责任公司地处浙江省海盐县，东依上海80公里，西距杭州65公里，南邻风景秀丽的南北湖风景区，北连嘉兴市区，离沪杭高速公路王店出口处7公里，水陆交通十分便利。公司在全体员工十多年来的默默耕耘下，讫今已拥有资产300万美元，占地面积30000平方米，其中厂房20000多平方米，各类生产设备120余台套，有齐全的理化检测设备及先进的质量管理体系，主要设备有250KG中频电炉3套及熔模精密铸造流水线三条，10吨级铸钢件热处理炉三个，各类机加工设备80余台。目前企业员工130名，其中各类工程技术人员38名','0','1','2','0','个体经营','生产型','300','2010-11-06','浙江省海盐县','','','铁','生铁','机械及行业设备','黄生','','0','02045789654','','','safsa@dfsa.cn','','','','','','','0','1','','','','','','39.898287940009965,116.43101643933107','0','0');");
E_D("replace into `qb_hy_company` values('31','东莞市华尔赛弹簧制造有限公司','','西餐厅,歌舞厅,婚庆服务,商务房产,电脑培训','36','test10','0','0','0','1288663617','0','0','homepage/logo/1/36_20101102101157_jugc3.jpg','','1','','1288663617','167','1','1288663988','1384159978','     是一家集生产、研发、销售和服务于一体的综合型弹簧生产企业。公司位于广东省东莞市黄江镇，距莞深高速公路3公里，东莞火车站10公里左右，交通十分便捷。公司占地2000平方米，拥有全套一流的生产、检测设备，有目前国内最选进的十毫米以下的CNC数控自动弹簧机，可生产弹簧线径最小0.08MM-10MM，是东莞市首家拥有可以生产10mm以下线径的CNC弹簧机械；弹簧处理网带式连续回火炉，清洗机。弹簧检测设备仪器齐全，如：二次元投影仪、扭力测试机、压拉力测试机、盐雾测试机等，全面有效地控制了弹簧的质量。华尔赛主导产品有各类精密弹簧，车件，铆钉，螺丝，五金冲压件。产品广泛用于电子、电器、玩具、锁具、文具、童车、自行车、礼品、工艺品、厨卫具、照相机、打印机、办公设备、精密设备、各类交通工具等。现我司的生产的弹簧产品如：离合器弹簧、复合弹簧、启动弹簧、回位弹簧、座垫弹簧等 已迈入汽车行业。','0','1','1','3','个体经营','生产型','350','2010-11-04','东莞市','','','钢材','钢','机械及行业设备','刘生','','0','02054484444','','','fsdafd@sa.cn','','','','','','','0','1','','','','','','39.91316796269466,116.37865971936037','2','1329964625');");
E_D("replace into `qb_hy_company` values('32','广州金栢叶床具制品有限公司','','西餐厅,歌舞厅,婚庆服务,商务房产,电脑培训','37','test11','0','0','0','1288663816','0','0','homepage/logo/1/37_20101102101116_xmwaa.jpg','','1','','1288663816','344','1','1288663989','1384013095','    前身“广州恒基（床垫）弹簧厂”，是专业生产床垫、床垫弹簧网的厂家。风雨十五年，一步一脚印，发展至今天，拥有厂房五千多平方米，多条先进的弹簧、床垫生产线及压缩设备。 大批技艺超群的生产技术工人，产品开发研究人员 ，严格的质量体系。严格按照ISO9001：2000质量体系，ISO14000环境体系标准运行，产品通过中国国家质量认证，美国CFR1633标准及英国BS5852标准，为生产世界级品牌产品有坚实保证。目前，金栢叶公司生产的床垫、床垫芯产品可经压缩包装处理，方便世界各地客商的运输及仓储。凭借多年生产床垫弹簧出口世界各地的经验，集全球多家名牌床垫之技术精华，经研究人员精心研究设计，创造出纯中国制造的高端品牌床垫——“金栢叶”系列产品。','0','1','1','2','个体经营','生产型','200','2010-11-04','广州','','','猪油','生猪油','机械及行业设备','林生','','0','0205447777','','','dfsaf@dsa.cn','','','','','','','0','1','','','','','','39.91659122736889,116.42792653454592','0','0');");
E_D("replace into `qb_hy_company` values('34','黔中醉酒行有限公司','','西餐厅,电脑/数码维修维护','40','郑志兴','0','0','0','1381403209','0','0','homepage/logo/1/1_20131013191055_5tgow.gif','','1','','1381403209','98','0','0','1383988175','<p>测试用</p>','0','250','0','0','个体经营','生产型','100','','','测试测试','','','','日常家居用品','郑志兴','','0','13181148765','','','1318114876@qq.com','','','','','','','0','1','','','','','','','0','0');");
E_D("replace into `qb_hy_company` values('35','山东海力投资','','','41','haizhitao4979','0','0','0','1381451819','0','0','','','1','','1381451819','0','1','1381662760','0','','0','187','0','0','','','0','','','威海市统一路','','','','','','','0','0631-5229799','','','hltz898@126.com','','','','','','','0','0','','','','','','','0','0');");
E_D("replace into `qb_hy_company` values('36','山东电子公司','','','42','zzzzzzz77','2','0','0','1381452778','0','0','','','1','','1381452778','0','0','0','0','','0','1','0','0','','','0','','','山东威海','','','','','李四','','0','18910954267','','','e676618657@126.com','','','','','','','0','0','','','','','','','0','0');");
E_D("replace into `qb_hy_company` values('38','sddsdsdsdsd','','西餐厅','43','sara2','0','0','0','1381510940','0','0','','','1','','1381510940','179','0','0','1384001067','<p>asasasas<br /></p>','0','1','0','0','个体经营','生产型','50','','','sdsdsdsdsd','','','','机械及行业设备','dsd','','0','021-88888888','','','sara2@qq.com','','','','','','','0','1','','','','','','','0','0');");

require("../../inc/footer.php");
?>