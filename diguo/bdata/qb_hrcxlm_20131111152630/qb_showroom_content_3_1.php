<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_showroom_content_3`;");
E_C("CREATE TABLE `qb_showroom_content_3` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `room_address` varchar(100) NOT NULL DEFAULT '',
  `room_web` varchar(100) NOT NULL DEFAULT '',
  `contact` varchar(150) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `qb_showroom_content_3` values('1','11','0','1',' &nbsp;  北京展览馆 建立于1954年，位于北京西直门繁华商业区，西邻动物园交通枢纽，东侧为西直门地铁站、城铁总站和北京火车站北站，北靠中关村科技园区，南临金融街与各大部委，地理位置十分优越。全馆占地二十万平方米，内设展览大厅、北展剧场、莫斯科餐厅、北展宾馆、首都广告艺术公司。 \r\n &nbsp;  北京展览馆 致力于展览业务的专业化发展，建馆以来，接待了国内外大型展览千余个，来馆参观人数上亿人次，展览内容涉及国际经济、贸易、科技、文化及政治、军事各个领域。北京展览馆具备“举办境内对外经济技术展览会主办单位资格”，2000年，北京展览馆 完成了场馆改造与设备升级，达到了接待国际性、现代化专业展览的硬件标准，2002年，通过ISO9000国际质量标准体系认证。目前，北京展览馆 已发展成为以展览、会议业务为核心，餐饮、娱乐、旅游、酒店多元化发展的综合性、现代化会展中心。\r\n &nbsp;  北京展览馆 以完善的设施和优质的服务欢迎各界朋友光临！ \r\n','中国北京西城区西直门外大街135号','http://www.bjexpo.com/','+86-010-68316677（总机');");
E_D("replace into `qb_showroom_content_3` values('2','12','0','1','东莞展览馆位于东莞市中心广场鸿福路97号，占地面积3.1万平方米，建筑面积2.6万平方米，展示面积约1万平方米。\r\n &nbsp;  馆内基本陈列为《历史鸿篇 盛世华章--东莞文明发展大观》，包括历史篇、经济篇、城市篇、文化篇四大部分和独立展区，整个展览运用宏大的场景、翔实的资料、艺术的构思、高科技的手段，生动形象地再现了东莞的发展历程、发展成就和发展图景，是全面推介东莞的窗口、市情教育的学校和高品位的文化休闲场所。\r\n','0769-22834016','http://www.dgec.gov.cn','东莞市中心广场鸿福路97号');");
E_D("replace into `qb_showroom_content_3` values('3','13','0','1',' &nbsp;   中国进出口商品交易会琶洲展馆二期展馆位于一期东面，延续了一期飘逸的造型，现代的风格，并通过平台相连。\r\n\r\n &nbsp;  二期展馆总建筑面积与一期相当，约为39万平方米，占地面积27.4万平方米，室内展厅面积12.8万平方米。展厅主体3层，共13个展厅，每个展厅面积约1万平方米。室外展场面积1.36万平方米。\r\n','Fair complex sale and exhibition arrangement','http://www.21cantonfair.com/','(8620)89139139');");
E_D("replace into `qb_showroom_content_3` values('4','14','0','1','上海展览中心经大修改造，西一馆底层改为展厅，展厅总面积增加到2.2万平方米，各展馆可独立也可合并使用，组合自如，共可搭建940多个标准展台。展厅层高一般5米以上，中央大厅高达18米。展厅功能及其设施按现代国际展览的要求设计和配置，除可供停车、放置展品集装箱外，还可搭建临时展馆近10000平方米，可满足大型展览的需求。\r\n\r\n　　上海展览中心还有一支经验丰富、技术娴熟的展览设计、搭建装修、现场管理和服务的队伍，规格齐全的展架展具，各种电气和音像设备，为展览、会议、技术交流及讲座的不同需求提供优质的服务。\r\n\r\n　　近年来，上海展览中心主办、联办和承办的各种类型的国内外展览会、展销会、博览会和各种科技文化交流活动每年达50多个，对上海的政治、经济和社会发展起到了独有和重要的作用。','上海展览中心坐落在繁华的静安区中心地段','http://www.shzlzx.com.cn/zlfw.htm','86-21-22162216转');");
E_D("replace into `qb_showroom_content_3` values('5','15','0','1','　　深圳会展中心集展览、会议、商务、餐饮、娱乐等多功能于一体，由深圳市政府投资兴建，委托深圳会展中心管理有限责任公司经营，于2004年正式投入使用。自2004年开馆以来，已成功举办近300场展览，1350多场会议，共接待观众达2,000多万人次。2008年在深圳会展中心共举办75场展览，500多场次会议，年展览面积达180万平方米,居全国同行第三。\r\n\r\n　　深圳会展中心地处城市中心区，是深圳市最大的单体建筑，占地22万平方米，总建筑面积28万平方米，东西长540米，南北宽282米，地面以上最高处达60米，地上6层，地下2层，钢结构、玻璃穹顶和幕墙完美结合，夜间在灯光的点缀下，玲珑剔透，有“水晶宫”之美誉。\r\n\r\n　　 展览、会议和服务功能分层布局，既相对独立又密切配合。一层9大展厅铺设成“U”型，室内展览面积达105,000平方米，可容纳5000国际标准展位大型展览。会议中心悬浮在展馆之上，拥有会议室共35间，功能卓越，大小不一，同时可用作中高档餐饮场地。二层服务区域主通道长达480米，贯穿东西，上通下达，集中提供各种展会配套服务。\r\n\r\n　　深圳会展中心设施先进，配套齐全，是举办各种展览、会议、集会、礼仪、庆典和演艺活动的理想之选。 \r\n\r\n','深圳市福田区福华三路深圳会展中心','http://www.szcec.com/','0755－82848800,82848900');");
E_D("replace into `qb_showroom_content_3` values('6','16','0','1','大连世界博览广场承接了上一个一百年大连建设的辉煌，构想着下一个一百年大连在世界舞台上的精彩展现，是大连沟通未来的世界之窗。 \r\n\r\n &nbsp;  大连世界博览广场坐落于中国大连对外开放先导区之一的星海湾金融商务区，亚洲最大海滨广场--星海广场，地理位置优越，环境优美，展馆毗邻城市主干道，交通便捷，距大连火车站5公里，距大连港8公里，距大连国际机场10公里，距神州第一路--沈大高速公路入口12公里。\r\n \r\n &nbsp;  大连世界博览广场的布局、装修，由法国EDDS公司的著名建筑师德拉里担纲设计，设计风格结合了星海广场的地域特点，形成了兼具中国文化与国际特色的现代博览建筑。一期占地面积5.8万平方米，建筑总面积14.2万平方米，净展览面积5万平方米，可提供国际标准展位2500个，二期占地面积1.5万平方米，净展览面积1万平方米，可提供国际标准展位500个，集展览、会议、餐饮、旅游、商务中心等功能为一体，是举办大型展览和会议的理想场所。\r\n \r\n &nbsp; 展馆设一层展场，面积2.1万平方米；二层展场，面积1.3万平方米；多功能厅面积5766平方米，可举行3500人的大型会议，1500人的大型宴会；会议区设有会议室12个，可容纳50-1000人不等。辉煌气派的中央大堂高40米，使用面积4200平方米，建筑风格上采用的是具有流行元素与实用功能双重功效的通畅无柱式设计，由国际最具流行的灰、红色调呼应而成，自然光的折射，与场馆的玻璃幕墙形成鲜明的对比，体现大堂内有天地浑然一体的非凡气势。一层前厅使用面积为4100平方米，大堂内还设有100平方米LED大屏幕可以现场同步直播大堂各项庆典活动。餐饮面积达到6500平方米，可同时容纳2500人就餐。\r\n \r\n &nbsp; 世博广场集合最新科技成果，采用海水制冷系统，既环保又节能，每层建筑都安置大空间智能自动喷水灭火系统，使用专用排水系统，设计节能环保、结构抗震满足要求，安保措施完善，安全系数极高。配备有专业的语音通信、网络信息、公共安防、中央空调和消防自动监控系统，拥有先进的数字会议系统、同声传译、远程视频会议和公共广播系统等，全部采用智能化管理，功能齐全。2007年在智能化程度上进行了系统升级，达到国际一流水准。设置信息点3500个，语音点1000个，无线信息点20个，不仅在展区内可以收到有线电视，宽带和光纤也铺入了展区，还可以做到无线上网和手机的无线覆盖。建筑的智能化则可以自动控制室内温度和湿度，在保安方面也可以实现实时监控。\r\n \r\n &nbsp;  大连世界博览广场于2005年2月投入运营以来，已承接国内外各类展会243个，使用展览面积277万平方米，成功举办了“中国国际国药原料药设备春季交易会”、“全国高等院校教学仪器设备展示会”、“第57届中国国际医疗器械博览会”、“第57届全国药品交易会”、“2007中国国际渔业博览会”、“第60届中国国际医药原料药、中间体、包装、设备春季交易会”、“2008中国国际大连海事展览会”、2009中国国内旅游交易会等大型展会。“中国国际医疗器械展览会”和“全国药品交易会”展览面积达到16万平方米，为历届之最，这是国药励展展览有限公司首次将其旗下规模最大的两个展会合并在一地举办，此次展会也成为大连市承接的最大规模展会，为大连市带来了直接效益44.8亿元。\r\n \r\n &nbsp; 会议承接是展馆的另一亮点，截至2009年底，共接待大小会议1170场。2007年9月，“从达沃斯到大连—新领军者年会”在大连世界博览广场举行，这是世界经济论坛首次在中国举行全球年会，中国国务院总理温家宝出席开幕式并致辞，芬兰总统哈洛宁、阿联酋副总统兼总理穆罕默德、拉托维亚总理卡尔维季斯、新加坡国务资政吴作栋等出席会议。来自90个国家和地区的1700多名政要、企业领袖和专家学者进行交流与合作，共同探讨创新的思维、创新化的商业模式和最新技术；成功承接了“WTO非正式小型部长会议”、“二十国集团财政及央行副手会议”、“第十七届金鸡百花电影节”、“世界规划师大会”等高级别的会议；还举办了“大连市纪念抗战胜利六十周年文艺演出”、“中国国际服装纺织品博览会开幕式”等大型活动。\r\n \r\n &nbsp; 大连世界博览广场拥有世界一流的技术设备、高效的管理和国际水准的服务，成为东北亚会展场所的首选，是世界会展场所中的夺人焦点，它的诞生预示着大连乃至东北地区展览业将迈入一个新纪元。\r\n\r\n','辽宁省大连市星海广场F 区10号','http://www.dl-expo.com/','0411-84805566 \\\\ 84892005');");

require("../../inc/footer.php");
?>