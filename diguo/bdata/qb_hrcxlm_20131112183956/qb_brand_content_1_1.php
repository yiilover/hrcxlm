<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_brand_content_1`;");
E_C("CREATE TABLE `qb_brand_content_1` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `offurl` varchar(100) NOT NULL DEFAULT '',
  `creattime` varchar(30) NOT NULL DEFAULT '',
  `famous_person` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk");
E_D("replace into `qb_brand_content_1` values('1','1','1','1','<p>佛山市顺德区伦教索奥斯玻璃技术有限公司是专业研究开发玻璃深加工新技术、新工艺及其配套设备制造的综合性高新技术企业。索奥斯历经多年的探索与实践，已成功开发研制的水平辊道式平/弯钢化玻璃生产线、水平异型热弯钢化玻璃生产线、全自动立式平/弯钢化玻璃生产线、全自动智能型连续热弯玻璃生产线等, 已广泛应用于国内外建筑装饰、车辆交通、民用家具、家电、工业仪表等各个领域。 <br />\r\n公司秉承“发展才是硬道理”的发展理念，大力发扬“团结、拼搏、务实、创新”的企业精神，本着“以客户需求为导向，以客户满意为目标，全新全意为客户服务”的经营理念；依靠高素质的员工队伍、科学的管理和对客户高度负责的工作态度。在全体员工的不懈努力和广大客户的大力支持下获得了快速的成长。产品质量和信誉赢得了广大客户的赞同和认可。 <br />\r\n公司将一如既往, 不懈努力, 为您提供不断完善的工艺技术装备, 一流快捷的到位服务。索奥斯热诚渴望成为您值得信赖的朋友， 携手共创美好的未来！ </p>\r\n','http://www.southtech.cn','2010-11-01','无');");
E_D("replace into `qb_brand_content_1` values('2','2','2','1','杭州大明科技控股集团，由杭州大明玻璃有限公司、浙江大明玻璃有限公司、山东淄博中玻镜业有限公司与杭州搏士家具有限公司4家子公司构建而成。 　　企业集新能源玻璃生产、超白浮法玻璃生产、高品质无铜环保银镜铝镜生产与玻璃深加工于一体，业务遍及欧洲、北美、南非、东南亚、台湾、香港等国家和地区，是笼括原片生产、加工、贸易、仓储、物流等领域的大型综合性集团公司。 　　自成立以来，企业历经原始资本积累—横向规模扩大—纵向产业链延伸三个发展阶段，风雨历练下，大明已俨然成为中国玻璃行业的新兴领军企','http://www.damingglass.com','2010-11-19','屠有军');");
E_D("replace into `qb_brand_content_1` values('3','3','3','1','佛山犀马精细化工有限公司创建于1993年，坐落于亚太经济发展活跃的东亚和东南亚的交汇处——佛山，是中外合资的股份制有限公司，公司在漫长的发展历程中不断开拓创新，一直保持着健康、稳定、快速的良好发展趋势。在国内同行业中一直保持领头羊的地位。 佛山犀马精细化工有限公司是集化学科研、开发、生产、销售、服务为一体的综合型企业。本公司专业研究、开发并规模生产系列环保型玻璃蒙砂粉、蒙砂膏、凹蒙蚀刻剂、玻璃抛光液、玻璃切削液等玻璃表面处理辅料；经本公司蒙砂粉、蒙砂膏处理的玻璃制品表面质地均','http://www.gd-glass.net/','2010-11-03','黄忠军');");
E_D("replace into `qb_brand_content_1` values('4','4','4','1','杭州君采玻璃有限公司座落于杭州市江干区备塘路普福村561号.公司占地面积2000多平方,现有员工30多名,专业玻璃生产线两条,是一家专业研发和生产数码复合安全强化玻璃及装饰工艺玻璃等综合性玻璃产品的企业. <br />\r\n<br />\r\n经过多年的研发和实践,公司在复合安全玻璃的技术方面取得了强大的突破,达到了国内领先水平.经过公司员工不断地努力合作,终于在二零零七年底强势推出了玻璃行业一直期望个性图案数码强化玻璃.','http://www.olyglass.cn/','2010-11-26','黄世安');");
E_D("replace into `qb_brand_content_1` values('5','5','5','1','天津市蓝马化工有限公司建于1990年，位于天津市北辰区津霸公路旁，交通非常便利。多年来，我们以高新优质的产品服务于广大用户。本公司技术力量雄厚，不断研制和开发新产品。 <br />\r\n我们采用先进的工艺、现代化的生产设备、高质量的原料，生产出环保型中空玻璃专用弹性密封胶。本公司技术力量雄厚， 不断研制和开发新产品。我们采用先进的工艺、现代化的生产设备、高质量的原料，生产出环保型中空玻璃专用弹性密封胶。 <br />\r\n我们信奉“质量第一，客户之上”的宗旨，以现代化的经营理念；','http://www.tjlanma.com/','2010-11-03','丁经理');");
E_D("replace into `qb_brand_content_1` values('6','6','6','1','1、上海多林化工科技有限公司是一家外商独资的高新技术企业，专业从事环保型玻璃蒙砂材料和自动蒙砂设备的研发，生产以及销售。公司拥有博士硕士等专业技术人才，优质的品质，环保的理念，专业的技术服务已得到国内外广大客户的信赖，产品远销国内外。 2、为满足国内外客户对蒙砂加工快速、搞笑、环保的要求，我司旗分公司——上海多宁蒙砂机械设备有限公司，成功研发了化妆品玻璃瓶、酒瓶玻璃瓶、平板玻璃三大类自动蒙砂生产设备，并以批量在国内销售，以及出口到俄罗斯，墨西哥，印度等国。','http://www.torlincn.com/','2010-11-19','李建辉');");
E_D("replace into `qb_brand_content_1` values('7','7','7','1','浦江县东晟力祥水晶工艺制品厂坐落于浦江水晶城边的东力水晶工艺品厂一直奉行“双赢”经营理念。东力人把“以最底的成本制造出最好的产品”做为座右铭，能使我们的合作伙伴代理商，零售商，礼品公司，直接客户等在激励的市场竞争中立于不败之地，从中获益是东力的荣幸。 <br />\r\n<br />\r\n经过艰苦创业，已使东力拥有水晶礼品记念品，水晶奖品，供应各种水晶玻璃、普通玻璃、承接水晶加工业务。琉璃工艺品','http://www.crystaldl.cn/','2010-11-27','张海东');");
E_D("replace into `qb_brand_content_1` values('8','8','7','1','华尔润集团现有职工7800人，拥有总资产37亿元，具有年产4200万重箱浮法玻璃、500万M2加工玻璃和50万M2微晶板材生产能力,是全国最大的浮法玻璃生产企业。 公司通过多年的发展，已建成了一个玻璃与相关产品、产业链和集工、贸、技为一体的大型集团。集团总部建有9条浮法玻璃生产线、1个深加工中心.在全国唯一的内河保税物流园区建有仓储中心和1个5万吨级码头，在江门建有3条浮法玻璃生产线，在大连建有1条浮法玻璃生产线，在淮安建有年产30万吨联碱和36万吨真空制盐生产厂，在长兴建有年产40万吨石英砂生产厂','http://www.farun.com/','2010-11-19','陈惠南');");

require("../../inc/footer.php");
?>