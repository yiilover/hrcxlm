<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_hr_content_1`;");
E_C("CREATE TABLE `qb_hr_content_1` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `nums` int(5) NOT NULL DEFAULT '0',
  `wageyear` tinyint(1) NOT NULL DEFAULT '0',
  `asksex` tinyint(1) NOT NULL DEFAULT '0',
  `schoo_age` tinyint(2) NOT NULL DEFAULT '0',
  `wage` tinyint(2) NOT NULL DEFAULT '0',
  `workplace` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `wageyear` (`wageyear`),
  KEY `schoo_age` (`schoo_age`),
  KEY `wage` (`wage`),
  KEY `asksex` (`asksex`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk");
E_D("replace into `qb_hr_content_1` values('2','50','4','1','吃苦耐劳才行','8','1','1','5','1','广州');");
E_D("replace into `qb_hr_content_1` values('3','51','4','1','有没有呀？','20','2','2','3','2','广州');");
E_D("replace into `qb_hr_content_1` values('4','52','6','1','中国营农场','8','1','1','5','-1','上海');");
E_D("replace into `qb_hr_content_1` values('5','53','6','1','ds大规模集成电路','12','1','1','1','2','广州');");
E_D("replace into `qb_hr_content_1` values('6','54','7','1','工作职责： \r\n1、主要参与移动公司项目或公司产品的开发，维护，升级等工作。 \r\n\r\n职位要求： \r\n1.大专以上学历;一年以上工作经验,优秀毕业生可特别考虑; \r\n2.熟悉 .Net体系框架，熟悉.Net开发环境、C#编程、XML，JavaScript，AJAX； \r\n3.熟悉.Net多层架构的实现，熟悉.Net的分布式技术；熟悉B/S结构；XML WebServices； \r\n4.熟悉SQL Server，灵活应用数据库设计工具；具有扎实的SQL脚本编写能力，熟悉SQL性能优化； \r\n5.熟悉.Net领域业界比较流行的框架，开发工具，控件包，网站； \r\n6.良好的语言表达、沟通能力、协调能力。 \r\n\r\n员工福利： \r\n提供具有竞争力的工资 \r\n提供国家规定社保，医保，公积金等待遇 \r\n提供丰厚的季度考核奖励和年终奖励 \r\n提供定期的技能培训机会 \r\n每年定期举行旅游或其它拓展活动 \r\n为每个员工设定个人职业规划，并提供机会进行磨练。','69','1','1','6','3','北京');");
E_D("replace into `qb_hr_content_1` values('7','55','7','27','任职要求：广东移动业务支撑系统分析、运维职位要求：\r\n1)有电信业务的工作经验，对电信业务流程有所了解，参与过移动BOSS建设更佳\r\n2)能熟练使用oracle数据库\r\n3)有UNIX或Linux的使用经验\r\n4)具备优秀的沟通协调能力和团队合作精神\r\n5）有JAVA或C++的相关开发经验\r\n\r\n6）至少2年以上的工作经验\r\n职责描述：\r\n1)、负责业务系统建设的调研、分析、业务模型设计及系统运维综合素质：\r\n1、沟通良好，责任心强，有较好的自学能力\r\n2、具备良好团队协作精神，能够适应出差与加班\r\n\r\n\r\n\r\n日常工作时间：\r\n\r\n1、 上班时间为周一至周五：9:00--18:00（12:00—13:30为午休）\r\n\r\n2、 公司假期：双休日及法定节假日 、5天带薪年假\r\n\r\n3、 完善的社会保险（五险）福利\r\n\r\n4、 提供项目奖金、年终奖金、餐费补助\r\n\r\n5、 每月至少有一个周末作为公司的活动日，公司将在当天组织活动。\r\n\r\n6、 另外，提供婚假、产假、丧假等假期待遇\r\n\r\n公司地址：广州市天河区软件园工业园建中路60号科迅大厦468-488\r\n\r\n','3','2','2','6','3','上海');");
E_D("replace into `qb_hr_content_1` values('8','56','8','28','1、有1年以上J2EE应用软件开发经验；\r\n2、善于沟通，有团队意识，责任感强,刻苦耐劳；\r\n3、协助技术经理完成项目开发与维护，对公司产品进行二次开发和集成；\r\n4、负责项目的详细设计、代码编写，编写相关文档；\r\n有以下经验者优先考虑\r\n1、有SSH架构和struts2架构进行项目开发经历；\r\n2、掌握sql语言 ，熟悉SQL Server , MySQL , Oracle 至少一种数据库产品；\r\n3、在项目中做过前台应用，掌握JavaScript，熟悉JQuery,ExtJs,GWT-Ext等构架；\r\n4、掌握流行的设计软件PhotoShop,Dreamweaver,Firework;\r\n5、在项目中做过数据统计分析或相关报表的开发经验的人员优先；\r\n6、熟悉wap模拟器，熟悉http、wap协议，熟悉wml、xml、html规范；\r\n7、开发过完整的wap网站者优先考虑，有j2me开发经验者优先考虑.\r\n富有竞争力的福利 \r\n1、社会保险：公司按国家和省市有关规定，为员工购买社会保险。 \r\n2、工作时间：公司每周工作5天，每天工作8小时。 \r\n3、工作餐：公司员工均可享有午餐补助。\r\n','6','1','1','5','4','广州');");
E_D("replace into `qb_hr_content_1` values('9','57','10','29','岗位描述\r\n1、 负责公司医疗设备产品在授权区域（广东省）的销售及推广； \r\n2、 根据公司市场营销计划，协同完成部门销售指示； \r\n3、 负责辖区市场内相关信息的收集、整理、上报。 \r\n\r\n\r\n职位要求： \r\n1、五官端正，开朗乐观，专科或以上学历，男女不限，年龄35岁以下； \r\n2、有良好的医疗市场嗅觉、判断、策划、应变能力，有医疗器械销售经验者优先，英文熟悉者优先； \r\n3、专职，工作热情积极，有责任心，敢于承受压力；\r\n','6','1','2','1','-1','北京');");
E_D("replace into `qb_hr_content_1` values('10','58','10','29','岗位职责：\r\n1、收集客户信息，通过电话联系或上门拜访，与客户建立联系； \r\n2、挖掘客户需求，达成销售，完成公司业绩指标要求；\r\n3、与客户建立良好的合作关系。\r\n\r\n\r\n任职要求：\r\n1、大专学历，市场营销、计算机相关专业，二年以上销售工作经验；\r\n2、良好的沟通能力、商务谈判能力，具有亲和力；\r\n3、工作积极主动，富有热情，独挡一面，具有开拓精神；\r\n4、具有良好的团队合作精神，能承受业绩压力；\r\n5、具有ERP等企业管理软件销售工作经验或熟悉服装行业、化妆品行业者优先；\r\n6、公司提供丰厚回报，热忱欢迎有志人士加盟公司共谋发展。','6','3','1','5','3','上海');");

require("../../inc/footer.php");
?>