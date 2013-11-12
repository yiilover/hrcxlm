<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_brand_content_2`;");
E_C("CREATE TABLE `qb_brand_content_2` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `dl_name` varchar(100) NOT NULL DEFAULT '',
  `dl_level` varchar(100) NOT NULL DEFAULT '',
  `dl_photo` varchar(100) NOT NULL DEFAULT '',
  `dl_man` varchar(30) NOT NULL DEFAULT '',
  `dl_phone` varchar(15) NOT NULL DEFAULT '',
  `dl_fax` varchar(15) NOT NULL DEFAULT '',
  `dl_email` varchar(50) NOT NULL DEFAULT '',
  `dl_address` varchar(150) NOT NULL DEFAULT '',
  `dl_url` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk");
E_D("replace into `qb_brand_content_2` values('1','1','7','1',' 公司通过多年的发展，已建成了一个玻璃与相关产品、产业链和集工、贸、技为一体的大型集团。集团总部建有9条浮法玻璃生产线、1个深加工中心.在全国唯一的内河保税物流园区建有仓储中心和1个5万吨级码头，在江门建有3条浮法玻璃生产线，在大连建有1条浮法玻璃生产线，在淮安建有年产30万吨联碱和36万吨真空制盐生产厂，在长兴建有年产40万吨石英砂生产厂','天众有限责任公司','一级总代理','http://images.glass.cn/company/20095/633778195935468750.jpg','黄牛生','02204777','02125411','dfsa@wq.cn','曲江中山路23号','http://xxx.com');");
E_D("replace into `qb_brand_content_2` values('2','2','7','1','安瑞装甲材料（芜湖）科技有限公司是由广州市鑫盾汽车玻璃有限公司、斯瑞达（香港）有限公司和乌拉圭PILBAN股份公司共同投资的中外合资企业，专业设计、研发、生产、加工和销售防弹玻璃、防弹钢板、防弹复合材料及其他商用、民用建筑防护玻璃等防护材料和配套产品，目前为奇瑞阿莫德科技有限公司、广州、江苏、北京等防弹车生产、改装厂配套生产各种级别的防弹玻璃','安瑞装甲材料（芜湖）科技有限公司','二级代理','http://images.glass.cn/company/20092/633711053941718750.jpg','王明方','5234543','254325432','rtwet@ds.cn','中山三路89号','http://xxx.com');");
E_D("replace into `qb_brand_content_2` values('3','3','6','1','我公司是一家大型钢化玻璃深加工企业，公司总投资约880万元，总占地面积约15000平米。 我公司拥有最完善的加工设备，其主要引进设备由洛阳北玻生产的BJ6104-1B50型全自动化钢化炉生产线、北京韩江生产的HJ-LINE3008型全电脑自动化中空生产线、乐威。德源红外蒸压釜、华盛机械生产制造IMF235B型全自动喷沙机、以及由广东新海岸提供的SZO222型钻孔机、SX2500型清洗机等。','北京华翔钢化玻璃有限公司','三级代理','http://images.glass.cn/company/20084/633433775742656250.jpg','姚付国','53254325','432543254','fdsgd@dew.cn','中山8路9号','http://xxx.com');");
E_D("replace into `qb_brand_content_2` values('4','4','4','1','海口西宏钢化玻璃有限公司位于海口市秀英区港澳国际工业开发区，是一家管理机制完善的民营企业。公司长期从事玻璃深加工，玻璃原片批发、销售，镀膜玻璃和镀镜的生产，以生产加工建筑玻璃为主导，配套家庭装饰工艺玻璃，是全省规模最大的玻璃深加工企业之一，主要产品有：平板钢化玻璃、弯钢化玻璃、夹层玻璃、中空玻璃、镀膜玻璃、银镜、防弹玻璃、防火玻璃和各式工艺玻璃等。','海南海口西宏钢化玻璃有限公司','三级代理','http://images.glass.cn/company/20095/633772072566703750.jpg','陈烈西','5643654','365346543','dhdf@dfs.cn','海中路89号','http://xxx.com');");
E_D("replace into `qb_brand_content_2` values('5','5','3','1','东莞市新长江钢化玻璃有限公司成立于2002年，并于2003年8月通过中国国家强制性产品3C认证。公司一直从事玻璃深加工，靠“求实、创新、团结、高效”的经营理念，承蒙各界朋友的厚爱，使公司在激烈的市场竞争中蒸蒸日上，茁壮成长。  公司技术雄厚，拥有一批专业的技术人才，以及先进、完善的生产机器设备。公司主要生产钢化玻璃，玻璃深加工，批发，年综合加工能力达60万平方米。','东莞市新长江钢化玻璃有限公司','二级代理','http://images.glass.cn/company/20094/633766874274375000.jpg','郑生','543654','65346543','fgdhd@ew.cn','曲江中山路23号','http://www.xcjglass.com/');");
E_D("replace into `qb_brand_content_2` values('6','6','1','1','晶创玉玻璃特点： 1.高科技自主研发产品，质感如玉，高贵典雅。国内首创、世界领先。 2.高档绿色环保建材，无大理石、花岗岩固有的对人体有害的放射性元素污染。 3.自古中华名族对玉有独特的情怀，使用玉玻璃有利于身心健康。 4.色泽丰富，纹理精致，品种多样，有透光和不透光的独特效果，可满足不同需求，适用于装饰各类品味场所 5.无机材料锻制而非有机树脂类化工产品，因而不老化，光泽恒久一致，永不退色。 6.不风化，耐侯性能好，室内，室外随心使用。 7.不吸收水分，易清洁，耐污染。','东莞市晶创特种玻璃有限公司','一级总代理','http://images.glass.cn/company/200812/633637418564427500.jpg','吴崎','534325432','54325423','5423fg@fd.cn','海中路156号','http://xxx.com');");
E_D("replace into `qb_brand_content_2` values('7','7','1','1','晶创玉玻璃特点： 1.高科技自主研发产品，质感如玉，高贵典雅。国内首创、世界领先。 2.高档绿色环保建材，无大理石、花岗岩固有的对人体有害的放射性元素污染。 3.自古中华名族对玉有独特的情怀，使用玉玻璃有利于身心健康。 4.色泽丰富，纹理精致，品种多样，有透光和不透光的独特效果，可满足不同需求，适用于装饰各类品味场所 5.无机材料锻制而非有机树脂类化工产品，因而不老化，光泽恒久一致，永不退色。 6.不风化，耐侯性能好，室内，室外随心使用。 7.不吸收水分，易清洁，耐污染。','东莞市晶创特种玻璃有限公司','一级总代理','http://images.glass.cn/company/200812/633637418564427500.jpg','吴崎','534325432','54325423','5423fg@fd.cn','海中路156号','http://xxx.com');");

require("../../inc/footer.php");
?>