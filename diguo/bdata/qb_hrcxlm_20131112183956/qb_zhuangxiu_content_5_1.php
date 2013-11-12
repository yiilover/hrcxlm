<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_zhuangxiu_content_5`;");
E_C("CREATE TABLE `qb_zhuangxiu_content_5` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `address` varchar(150) NOT NULL DEFAULT '',
  `home_type` varchar(100) NOT NULL DEFAULT '',
  `business_type` varchar(100) NOT NULL DEFAULT '',
  `build_style` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `home_type` (`home_type`),
  KEY `build_style` (`build_style`),
  KEY `business_type` (`business_type`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `qb_zhuangxiu_content_5` values('1','38','5','1','<p> &nbsp; &nbsp;北京鸿达尚品家居装饰有限公司是一家集装饰设计、工程施工、材料配送、木门、地板、开发为一体的装饰企业。主要从事住宅、公寓、办公、商业、酒店、学校、医院等场所的装修设计和施工。公司经北京市工商管理局正式批准注册、北京市装饰协会、中国室内装饰协会的会员单位。</p>','北京昌平区集美家具（回龙观店）东二层家装区B2102','/#/小户型/#/普通住宅/#/局部装修/#/','/#/商铺/#/','/#/简约/#/现代/#/');");
E_D("replace into `qb_zhuangxiu_content_5` values('2','39','5','1','<p>　 &nbsp;公司经北京市工商管理行政局正式批准册，已取得国家正规资质，并成为北京市室内装饰协会、北京工商联装饰行业商绿色装饰企业会会员单位。</p><p><br /></p><p>　　经营范围：老房装修，新房装修，局部改造，别墅装修，办公室装修。</p><p><br /></p><p>　　服务宗旨：公司始终秉承以“诚信、质优、透明、环保”为我们的服务宗旨。</p><p><br /></p><p>　　公司理念：“绿色家装，百姓品牌”，为百姓居家打造和谐绿色健康品质生活!</p><p><br /></p><p>　　公司崇尚：精品设计、精品施工、精品服务，努力打造个性化的装饰品牌。</p><p><br /></p>','丰台区菜户营东街鹏润家园豪苑大厦A座20层','/#/小户型/#/普通住宅/#/局部装修/#/','/#/商铺/#/','/#/简约/#/现代/#/');");
E_D("replace into `qb_zhuangxiu_content_5` values('3','40','5','1','<p> &nbsp; 北利装饰公司是一家集装饰设计、工程施工的装饰企业，优秀的南方施工人员。主要从事公寓、住宅、办公等场所的装修与设计。公司以先进的设计理念、精深的设计功底为，规范的管理、精湛的施工技术，完善的服务体系，为客户提供专业化、人性化、个性化的装修和服务。公司“以质量求生存，以信誉求发展”，“客户满意是我们工作的唯一标准”一次合作永远朋友。公司专业承接各种室内外装饰装修工程，以低价位、高品质、优质的售后服务开发市场。<br /></p>','昌平区天通苑太平家园35号楼','/#/小户型/#/普通住宅/#/局部装修/#/','/#/商铺/#/','/#/简约/#/现代/#/');");
E_D("replace into `qb_zhuangxiu_content_5` values('4','41','5','1','<p> &nbsp; 多年来公司持续稳步发展，下设市场部、设计部、工程部、企划部、财务部、客户服务部、人力资源部和材料配料中心八个部门。建立了从方案设计、工程施工、质量监督到售后服务等一整套细致合理的服务流程体系。由经验丰富、时尚创新的设计精英；正规培训、技艺娴熟的南方技工；资深专业的管理人员共同组建成一支诚信、敬业、务实、创新的精英团队。<br /></p>','南三环中路68号自然美大厦','/#/小户型/#/普通住宅/#/局部装修/#/','/#/商铺/#/','/#/简约/#/现代/#/');");
E_D("replace into `qb_zhuangxiu_content_5` values('5','42','5','1','<p> &nbsp; 洲际宏达装饰从事装饰行业以来，积累了丰富的经验，我们始终推崇“少做广告，多做实惠”将最大的利润让利于客户 &nbsp;，本着以真诚、勤奋、超越、创新的企业精神，以“领先的服务创造优秀的家居品质”为宗旨。完善自我，创造辉煌是我们洲际宏达对未来美好生活的追求，愿我们共同携手努力创造出更加完美的家居装饰和舒适环境。<br /></p>','北京市朝阳区城外诚家居广场','/#/小户型/#/普通住宅/#/局部装修/#/','/#/商铺/#/','/#/简约/#/现代/#/');");

require("../../inc/footer.php");
?>