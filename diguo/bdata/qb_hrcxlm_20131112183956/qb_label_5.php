<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("replace into `qb_label` values('1431','','0','0','i35','Info_news_','1','a:37:{s:7:\"allcity\";s:1:\"1\";s:13:\"tplpart_1code\";s:93:\"<li><a href=\"{\$url}\"><img src=\"{\$picurl}\" width=\"104\" height=\"84\" alt=\"\" /> {\$title}</a></li>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:119:\" SELECT A.* FROM qb_news_content A  WHERE 1  AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 0,6 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"14\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1384275247','8','0','0','0','style_5.1');");
E_D("replace into `qb_label` values('1432','','0','0','i36','Info_news_','1','a:37:{s:7:\"allcity\";s:1:\"1\";s:13:\"tplpart_1code\";s:111:\"<li class=\"first{\$i}\"><a href=\"{\$url}\"><img src=\"{\$picurl}\" width=\"176\" height=\"98\" alt=\"\" /> {\$title}</a></li>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:119:\" SELECT A.* FROM qb_news_content A  WHERE 1  AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 0,4 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1384276146','8','0','0','0','style_5.1');");
E_D("replace into `qb_label` values('1433','','0','0','i37','Info_news_','1','a:37:{s:7:\"allcity\";s:1:\"0\";s:13:\"tplpart_1code\";s:120:\"<li class=\"no_marginL{\$i}\"><em></em><a href=\"{\$url}\">{\$title}</a><span class=\"date\">{\$time_Y}.{\$time_m}.{\$time_d}</span>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"21\";s:3:\"sql\";s:118:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=''\$GLOBALS[city_id]''  AND A.yz=1   ORDER BY A.list DESC LIMIT 0,21 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1384276650','8','0','0','0','style_5.1');");
E_D("replace into `qb_label` values('1434','','0','0','i38','Info_news_','1','a:37:{s:7:\"allcity\";s:1:\"1\";s:13:\"tplpart_1code\";s:106:\"<li class=\"fl\"><a href=\"{\$url}\" class=\"fl\"><img src=\"{\$picurl}\" alt=\"\" width=\"168\" height=\"82\" /></a></li>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:119:\" SELECT A.* FROM qb_news_content A  WHERE 1  AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 0,5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}','a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','0','8','0','0','0','style_5.1');");
E_D("replace into `qb_label` values('1435','','0','99','h1','code','0',' <ul>\r\n				 <li>\r\n					 <a href=\"/\" class=\"menu1\">首页</a>\r\n				 </li>\r\n				 <li>\r\n					 <a href=\"/buy/\" class=\"menu1\">需求</a>\r\n					 <div class=\"sunNav hide\">\r\n						<div class=\"fl flMenus\">\r\n							<dl>\r\n								<dt><a href=\"/buy/list.php?fid=1\">资金</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"/buy/list.php?fid=2\">人才</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"/buy/list.php?fid=3\">人脉</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"/buy/list.php?fid=5\">土地</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"/buy/list.php?fid=6\">媒体</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"/buy/list.php?fid=7\">技术</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"/buy/list.php?fid=8\">其他</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n						</div>\r\n						<div class=\"frAd fr\" style=\"display:none;\">\r\n							<img src=\"img/index+20130905_17.jpg\" alt=\"\" width=\"130\" height=\"80\" />\r\n						</div>\r\n						<div class=\"clearboth\"></div>\r\n					 </div>\r\n				 </li>\r\n				 <li>\r\n					 <a href=\"/sell/\" class=\"menu1\">供应</a>\r\n					 <div class=\"sunNav hide\">\r\n						<div class=\"fl flMenus\">\r\n							<dl>\r\n								<dt><a href=\"/sell/list.php?fid=1\">资金</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"/sell/list.php?fid=2\">人才</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"/sell/list.php?fid=3\">人脉</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"/sell/list.php?fid=5\">土地</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"/sell/list.php?fid=6\">媒体</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"/sell/list.php?fid=7\">技术</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"/sell/list.php?fid=8\">其他</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n						</div>\r\n						<div class=\"frAd fr\" style=\"display:none;\">\r\n							<img src=\"img/index+20130905_17.jpg\" alt=\"\" width=\"132\" height=\"70\" />\r\n						</div>\r\n						<div class=\"clearboth\"></div>\r\n					 </div>\r\n				 </li>\r\n				 <li>\r\n					 <a href=\"\" class=\"menu1\">华盟项目</a>\r\n					 <div class=\"sunNav hide\">\r\n						<div class=\"fl flMenus\">\r\n							<dl>\r\n								<dt><a href=\"\">资源整合<em></em></a></dt>\r\n								<dd><a href=\"\" class=\"no_ml\">资源沙龙</a><a href=\"\">展会</a><a href=\"\" class=\"no_ml\">招聘会</a><a href=\"\">茶话会</a><a href=\"\" class=\"no_ml\">咨询会</a><a href=\"\">项目推荐会</a><span class=\"height_10\"></span></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"\">产品交易<em></em></a></dt>\r\n								<dd><a href=\"\" class=\"no_ml\">易货</a><a href=\"\">团购</a><a href=\"\" class=\"no_ml\">采购</a><span class=\"height_10\"></span></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"\">源头之旅</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"\">华盟教育</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n						</div>\r\n						<div class=\"frAd fr\" style=\"display:none;\">\r\n							<img src=\"img/index+20130905_17.jpg\" alt=\"\" width=\"132\" height=\"70\" />\r\n						</div>\r\n						<div class=\"clearboth\"></div>\r\n					 </div>\r\n				 </li>\r\n				 <li>\r\n					 <a href=\"\" class=\"menu1\">行业联盟</a>\r\n					 <div class=\"sunNav hide\">\r\n						<div class=\"fl flMenus\">\r\n							<dl>\r\n								<dt><a href=\"\">同业联盟</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"\">异业合作</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n						</div>\r\n						<div class=\"frAd fr\" style=\"display:none;\">\r\n							<img src=\"img/index+20130905_17.jpg\" alt=\"\" width=\"132\" height=\"70\" />\r\n						</div>\r\n						<div class=\"clearboth\"></div>\r\n					 </div>\r\n				 </li>\r\n				 \r\n				 <li>\r\n					 <a href=\"/news/\" class=\"menu1\">联盟社区</a>\r\n					 <div class=\"sunNav hide\">\r\n					    <div class=\"fl flMenus\">\r\n						    <dl>\r\n								<dt><a href=\"\">老板思维</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"\">企业提升</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"\">员工管理</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"\">商人圈</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"\">草根创业</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"\">精品课程</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"\">精英团队</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n						</div>\r\n						<div class=\"frAd fr\" style=\"display:none;\">\r\n							<img src=\"img/index+20130905_17.jpg\" alt=\"\" width=\"132\" height=\"70\" />\r\n						</div>\r\n						<div class=\"clearboth\"></div>\r\n					 </div>\r\n				 </li>\r\n				 <li>\r\n					 <a href=\"\" class=\"menu1\">联盟合伙人</a>\r\n					 <div class=\"sunNav hide\">\r\n					    <div class=\"fl flMenus\">\r\n							<dl>\r\n								<dt><a href=\"\">华盟股东</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"\">华盟战略伙伴</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"\">华盟专家<em></em></a></dt>\r\n								<dd><a href=\"\" class=\"no_ml\">资金团</a><a href=\"\">律师团</a><a href=\"\" class=\"no_ml\">策划团</a><a href=\"\">营销团</a><a href=\"\" class=\"no_ml\">网络团</a><span class=\"height_10\"></span></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"\">诚信服务商</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"\">整合案例</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n						</div>\r\n						<div class=\"frAd fr\" style=\"display:none;\">\r\n							<img src=\"img/index+20130905_17.jpg\" alt=\"\" width=\"132\" height=\"70\" />\r\n						</div>\r\n						<div class=\"clearboth\"></div>\r\n					 </div>\r\n				 </li>\r\n				 <li>\r\n					 <a href=\"\" class=\"menu1\">联盟服务</a>\r\n					 <div class=\"sunNav hide\">\r\n					    <div class=\"fl flMenus\">\r\n							<dl>\r\n								<dt><a href=\"\">华盟简介</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"\">招商加盟</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"\">客服平台</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"\">填写资源问卷</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n							<dl>\r\n								<dt><a href=\"\">诚信指标查询</a></dt>\r\n								<dd></dd>\r\n							</dl>\r\n						</div>\r\n						<div class=\"frAd fr\" style=\"display:none;\">\r\n							<img src=\"img/index+20130905_17.jpg\" alt=\"\" width=\"132\" height=\"70\" />\r\n						</div>\r\n						<div class=\"clearboth\"></div>\r\n					 </div>\r\n				 </li>\r\n			 </ul>','a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1384281048','8','0','0','0','style_5.1');");
E_D("replace into `qb_label` values('1436','','0','99','h2','code','0','<div id=\"classNav\" class=\"classNav\">\r\n						<a href=\"javascript:void(0);\" class=\"classNav_btn\">资源分类</a>	\r\n						<div class=\"classNav_nr hide\">\r\n							<div class=\"height_10\"></div>\r\n							<dl class=\"fl\">\r\n								<dt>行业资源</dt>\r\n								<dd><a href=\"\">旅游住宿</a><a href=\"\">餐饮房产</a><a href=\"\">银行信托</a><a href=\"\"> 批发零售</a><a href=\"\">证券保险</a><a href=\"\">服装鞋袜</a><a href=\"\">教育培训</a><a href=\"\">机械制造</a><a href=\"\">造纸印刷</a><a href=\"\">食品饮料</a><a href=\"\">农林牧渔</a><a href=\"\">文体娱乐</a><a href=\"\">首饰</a><a href=\"\">加工进出口</a><a href=\"\">IT软件行业</a><a href=\"\">交通运输物流</a><a href=\"\">广电媒体传播</a><a href=\"\">家电五金制造</a><a href=\"\">建筑装修材料</a><a href=\"\">医院化工设备\r\n</a></dd>\r\n							</dl>\r\n							<dl class=\"fl\">\r\n								<dt>客户资源</dt>\r\n								<dd><a href=\"\">老客户维护</a><a href=\"\">客户关系管理</a><a href=\"\">开发新客户</a><a href=\"\">老客户转介绍</a><a href=\"\">新客户拓展</a><a href=\"\">客户满意度调查</a><a href=\"\">跟进新客户</a><a href=\"\">建设客户服务中心</a></dd>\r\n							</dl>\r\n							<dl class=\"fl\">\r\n								<dt>营销平台</dt>\r\n								<dd><a href=\"\">销售渠道</a><a href=\"\">投资加盟渠道</a><a href=\"\">招商渠道</a><a href=\"\">推广渠道宣传</a></dd>\r\n							</dl>\r\n							<dl class=\"fl\">\r\n								<dt>人力资源</dt>\r\n								<dd><a href=\"\">创新人才</a><a href=\"\">人力投资</a><a href=\"\">技术团队</a><a href=\"\">团队营销</a><a href=\"\">策划团队</a><a href=\"\">销售团队</a><a href=\"\">医疗服务团队</a><a href=\"\">兼职人才</a><a href=\"\">海外高技能</a><a href=\"\">管理人才</a><a href=\"\">财务资本运作团队</a></dd>\r\n							</dl>\r\n							<dl class=\"fl\">\r\n								<dt>人脉资源</dt>\r\n								<dd><a href=\"\">政务关系</a><a href=\"\">金融人脉</a><a href=\"\">国企央企人脉</a><a href=\"\">地产公司人脉</a><a href=\"\">上市公司人脉</a><a href=\"\">教育医疗人脉</a><a href=\"\">协会商会人脉</a><a href=\"\">军检政法人脉</a></dd>\r\n							</dl>\r\n							<dl class=\"fl\">\r\n								<dt>技术交流</dt>\r\n								<dd><a href=\"\">技术需求</a><a href=\"\">技术转让</a><a href=\"\">闲置资源</a></dd>\r\n							</dl>\r\n							<dl class=\"fl\">\r\n								<dt>职业培训</dt>\r\n								<dd><a href=\"\">财商教育类培训</a><a href=\"\">总裁培训</a><a href=\"\">市场营销类培训</a><a href=\"\">人力资源类培训</a><a href=\"\">技术管理类培训</a><a href=\"\">生产管理类培训</a><a href=\"\">职业技能类培训</a><a href=\"\">指挥心理类培训</a></dd>\r\n							</dl>\r\n							<dl class=\"fl\">\r\n								<dt>创业商机</dt>\r\n								<dd><a href=\"\">创业项目</a><a href=\"\">联盟商机</a></dd>\r\n							</dl>\r\n							<dl class=\"fl\">\r\n								<dt>文化品牌</dt>\r\n								<dd><a href=\"\">文化创新</a><a href=\"\">品牌管理</a><a href=\"\">品牌推广</a><a href=\"\"> 品牌设计</a><a href=\"\">企业文化策划</a></dd>\r\n							</dl>\r\n							<dl class=\"fl\">\r\n								<dt>健康养生</dt>\r\n								<dd><a href=\"\">心理健康</a><a href=\"\">健康饮食</a><a href=\"\">养生之道</a><a href=\"\">美容养身</a><a href=\"\">身体养护</a><a href=\"\">中医保健</a></dd>\r\n							</dl>\r\n							<dl class=\"fl\">\r\n								<dt>投资融资</dt>\r\n								<dd><a href=\"\">银行理财</a><a href=\"\">保险信托兼并转让</a><a href=\"\">资金资源</a><a href=\"\">项目资源</a><a href=\"\">投融资源</a></dd>\r\n							</dl>\r\n							<div class=\"height_10\"></div>\r\n						</div>\r\n					</div>\r\n','a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','0','8','0','0','0','style_5.1');");
E_D("replace into `qb_label` values('1437','','0','99','f1','code','0','<div class=\"w\">\r\n   		<div class=\"service\">\r\n			<dl class=\"fore1\">\r\n				<dt><strong>新手入门</strong></dt>\r\n				<dd>\r\n				    <div><a href=\"/news/bencandy.php?fid=143&id=983\">新用户注册</a></div>\r\n					<div><a href=\"/news/bencandy.php?fid=143&id=984\">用户指南</a></div>\r\n					<div><a href=\"/news/bencandy.php?fid=143&id=985\">常见问题</a></div>\r\n				</dd>\r\n			</dl>\r\n			<dl class=\"fore2\">\r\n				<dt><strong>联盟服务</strong></dt>\r\n				<dd>\r\n					<div><a href=\"/news/bencandy.php?fid=144&id=986\">联盟简介</a></div>\r\n					<div><a href=\"/news/bencandy.php?fid=144&id=987\">联盟服务</a></div>\r\n					<div><a href=\"/news/bencandy.php?fid=144&id=988\">联盟保障</a></div>\r\n					<div><a href=\"/news/bencandy.php?fid=144&id=989\">诚信指标查询</a></div>\r\n				</dd>\r\n			</dl>\r\n			<dl class=\"fore3\">\r\n				<dt><strong>会员等级</strong></dt>\r\n				<dd>\r\n					<div><a href=\"/news/bencandy.php?fid=145&id=990\">会员等级</a></div>\r\n					<div><a href=\"/news/bencandy.php?fid=145&id=991\">会员制度</a></div>\r\n					<div><a href=\"/news/bencandy.php?fid=145&id=992\">会员优势</a></div>\r\n					<div><a href=\"/news/bencandy.php?fid=145&id=993\">会员查询</a></div>\r\n				</dd>\r\n			</dl>\r\n			<dl class=\"fore4\">\r\n				<dt><strong>资源在线</strong></dt>\r\n				<dd>\r\n					<div><a href=\"/news/bencandy.php?fid=146&id=994\">客服平台</a></div>\r\n					<div><a href=\"/news/bencandy.php?fid=146&id=995\">产品交易</a></div>\r\n					<div><a href=\"/news/bencandy.php?fid=146&id=996\">整合中心</a></div>\r\n					<div><a href=\"/news/bencandy.php?fid=146&id=997\">填写资源问卷</a></div>\r\n				</dd>\r\n			</dl>\r\n			<dl class=\"fore5\">\r\n				<dt><strong>联系我们</strong></dt>\r\n				<dd>\r\n					<div><a href=\"/news/bencandy.php?fid=147&id=998\">我有资源</a></div>\r\n					<div><a href=\"/news/bencandy.php?fid=147&id=999\">我有需求</a></div>\r\n					<div><a href=\"/news/bencandy.php?fid=147&id=1000\">成为合伙人</a></div>\r\n					<div><a href=\"/news/bencandy.php?fid=147&id=1001\">入盟申请</a></div>\r\n				</dd>\r\n			</dl>\r\n			<span class=\"clearboth\"></span>\r\n		</div>','a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','1384280516','8','0','0','0','style_5.1');");
E_D("replace into `qb_label` values('1438','','0','99','f2','code','0','<div class=\"copy\">华人诚信联盟 客服专线：400-809-1689 邮箱:hrcxlm@163.com<br />&copy; 2011-2015 华人诚信联盟有限公司 版权所有.<br />工信部网络备案号：鲁ICP备13010229号.</div>','a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','0','8','0','0','0','style_5.1');");
E_D("replace into `qb_label` values('1439','','0','0','i39','code','0','<a href=\"\" class=\"first\">诚信认证</a>\r\n				<a href=\"\" class=\"two\">联盟保障</a>\r\n				<a href=\"\" class=\"last\">联盟规则</a> ','a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','0','8','0','0','0','style_5.1');");
E_D("replace into `qb_label` values('1440','','0','0','i40','code','0','<a href=\"\">百度</a><a href=\"\">搜狐</a><a href=\"\">腾讯</a>','a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}','0','0','1','admin','0','8','0','0','0','style_5.1');");

require("../../inc/footer.php");
?>