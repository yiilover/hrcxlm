<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_config`;");
E_C("CREATE TABLE `qb_config` (
  `c_key` varchar(50) NOT NULL DEFAULT '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY (`c_key`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `qb_config` values('yzImgComment','0','');");
E_D("replace into `qb_config` values('flashtime','0','');");
E_D("replace into `qb_config` values('showComment','1','');");
E_D("replace into `qb_config` values('forbidComment','0','');");
E_D("replace into `qb_config` values('showCommentRows','8','');");
E_D("replace into `qb_config` values('viewNoPassGuestBook','1','');");
E_D("replace into `qb_config` values('yzImgContribute','0','');");
E_D("replace into `qb_config` values('groupPassContribute','3','');");
E_D("replace into `qb_config` values('MaxOnlineUser','1000','');");
E_D("replace into `qb_config` values('groupPassShopYz','3,4','');");
E_D("replace into `qb_config` values('groupPassPassGuestBook','3','');");
E_D("replace into `qb_config` values('ifOpenGuestBook','1','');");
E_D("replace into `qb_config` values('yzImgGuestBook','1','');");
E_D("replace into `qb_config` values('ContributeFid','2','');");
E_D("replace into `qb_config` values('groupPassLogYz','3,4','');");
E_D("replace into `qb_config` values('PostSortStep','2','');");
E_D("replace into `qb_config` values('ListSonline','2','');");
E_D("replace into `qb_config` values('_Notice','29weSgiaHR0cDovL3d3dy5waHAxNjguY29tL05vdGljZS8/dXJsPSR3ZWJkYlt3d3dfdXJsXSIsUEhQMTY4X1BBVEguImNhY2hlL05vdGljZS5waHAiKTs=','');");
E_D("replace into `qb_config` values('CommentTime','5','');");
E_D("replace into `qb_config` values('weburl','/','');");
E_D("replace into `qb_config` values('MailType','smtp','');");
E_D("replace into `qb_config` values('alipay_id','18653310270','');");
E_D("replace into `qb_config` values('allowMemberCommentPass','1','');");
E_D("replace into `qb_config` values('AvoidGatherPre','','');");
E_D("replace into `qb_config` values('AvoidCopy','0','');");
E_D("replace into `qb_config` values('AvoidGather','0','');");
E_D("replace into `qb_config` values('AvoidSave','0','');");
E_D("replace into `qb_config` values('waterimg','images/default/water.gif','');");
E_D("replace into `qb_config` values('adminPostEditType','html','');");
E_D("replace into `qb_config` values('article_show_step','0','');");
E_D("replace into `qb_config` values('ifContribute','1','');");
E_D("replace into `qb_config` values('allowGuestSearch','0','');");
E_D("replace into `qb_config` values('kill_badword','0','');");
E_D("replace into `qb_config` values('ShowKeywordColor','#F70968','');");
E_D("replace into `qb_config` values('ifShowKeyword','1','');");
E_D("replace into `qb_config` values('UseFtp','0','');");
E_D("replace into `qb_config` values('FtpWeb','','');");
E_D("replace into `qb_config` values('FtpDir','111','');");
E_D("replace into `qb_config` values('groupTime','180','');");
E_D("replace into `qb_config` values('allowGuestCommentPass','1','');");
E_D("replace into `qb_config` values('ShowMenu','0','');");
E_D("replace into `qb_config` values('GuestBookNum','8','');");
E_D("replace into `qb_config` values('ShopNormalSend','8','');");
E_D("replace into `qb_config` values('ShopEmsSend','25','');");
E_D("replace into `qb_config` values('groupUpType','1','');");
E_D("replace into `qb_config` values('NewsMakeHtml','0','');");
E_D("replace into `qb_config` values('HideNopowerPost','1','');");
E_D("replace into `qb_config` values('allowGuestComment','1','');");
E_D("replace into `qb_config` values('ListSonLeng','34','');");
E_D("replace into `qb_config` values('Listsortnameline','2','');");
E_D("replace into `qb_config` values('ListLeng','70','');");
E_D("replace into `qb_config` values('showsortlogo','0','');");
E_D("replace into `qb_config` values('PostNotice','<font face=SimSun>\r\n<p><font face=SimSun>1、如果是转载内容，请务必填写稿件来源网址及出处。<br />2、所引起的版权纠纷与法律责任由发布者承担。</font></p></font>','');");
E_D("replace into `qb_config` values('propagandize_Money','2','');");
E_D("replace into `qb_config` values('propagandize_LogDay','5','');");
E_D("replace into `qb_config` values('propagandize_close','0','');");
E_D("replace into `qb_config` values('YZ_IdcardMoney','20','');");
E_D("replace into `qb_config` values('YZ_EmailMoney','10','');");
E_D("replace into `qb_config` values('YZ_MobMoney','15','');");
E_D("replace into `qb_config` values('SPlist_filename','html/4special{\$fid}/list{\$page}.htm','');");
E_D("replace into `qb_config` values('SPbencandy_filename','html/5special{\$fid}/show{\$id}.htm','');");
E_D("replace into `qb_config` values('QQ_appkey','','');");
E_D("replace into `qb_config` values('close_count','0','');");
E_D("replace into `qb_config` values('passport_TogetherLogin','1','');");
E_D("replace into `qb_config` values('ListSonRows','9','');");
E_D("replace into `qb_config` values('cache_time_js','-1','');");
E_D("replace into `qb_config` values('SideTitleStyle','side_tpl/2','');");
E_D("replace into `qb_config` values('JsListRows','5','');");
E_D("replace into `qb_config` values('list_filename','html/{\$fid}/{\$page}.htm','');");
E_D("replace into `qb_config` values('bencandy_filename','html/{\$fid}-{\$dirid}/{\$id}-{\$page}.htm','');");
E_D("replace into `qb_config` values('cache_time_com','-1','');");
E_D("replace into `qb_config` values('JsListLeng','36','');");
E_D("replace into `qb_config` values('SideSortStyle','side_sort/2','');");
E_D("replace into `qb_config` values('sortNUM','27','');");
E_D("replace into `qb_config` values('FtpPort','21','');");
E_D("replace into `qb_config` values('articleNUM','77','');");
E_D("replace into `qb_config` values('cache_time_like','-1','');");
E_D("replace into `qb_config` values('cache_time_new','-1','');");
E_D("replace into `qb_config` values('is_waterimg','0','');");
E_D("replace into `qb_config` values('passport_path','bbs','');");
E_D("replace into `qb_config` values('Del_MoreUpfile','1','');");
E_D("replace into `qb_config` values('passport_pre','`bbs`.pw_','');");
E_D("replace into `qb_config` values('passport_type','','');");
E_D("replace into `qb_config` values('MakeIndexHtmlTime','0','');");
E_D("replace into `qb_config` values('cache_time_pic','-1','');");
E_D("replace into `qb_config` values('list_cache_time','0','');");
E_D("replace into `qb_config` values('bencandy_cache_time','0','');");
E_D("replace into `qb_config` values('showsp_cache_time','0','');");
E_D("replace into `qb_config` values('cache_time_hot','-1','');");
E_D("replace into `qb_config` values('QQ_login','0','');");
E_D("replace into `qb_config` values('pay99_id','','');");
E_D("replace into `qb_config` values('MoneyRatio','100','');");
E_D("replace into `qb_config` values('Money2card','0','');");
E_D("replace into `qb_config` values('RegCompany','1','');");
E_D("replace into `qb_config` values('ForbidShowPhpPage','0','');");
E_D("replace into `qb_config` values('AutoPassCompany','1','');");
E_D("replace into `qb_config` values('forbidRegHour','','');");
E_D("replace into `qb_config` values('ArticleHeart','欠扁|1.gif\r\n支持|2.gif\r\n很棒|3.gif\r\n找骂|4.gif\r\n搞笑|5.gif\r\n软文|6.gif\r\n不解|7.gif\r\n吃惊|8.gif','');");
E_D("replace into `qb_config` values('heart_time','30','');");
E_D("replace into `qb_config` values('heart_noRecord','1','');");
E_D("replace into `qb_config` values('UseArticleHeart','1','');");
E_D("replace into `qb_config` values('UseArticleDigg','0','');");
E_D("replace into `qb_config` values('ForceDel','0','');");
E_D("replace into `qb_config` values('AutoTitleNum','1','');");
E_D("replace into `qb_config` values('deleteArticleMoney','-1','');");
E_D("replace into `qb_config` values('postArticleMoney','1','');");
E_D("replace into `qb_config` values('comArticleMoney','3','');");
E_D("replace into `qb_config` values('hotArticleNum','100','');");
E_D("replace into `qb_config` values('newArticleTime','24','');");
E_D("replace into `qb_config` values('ListShowIcon','0','');");
E_D("replace into `qb_config` values('autoGetKeyword','0','');");
E_D("replace into `qb_config` values('autoGetSmallPic','1','');");
E_D("replace into `qb_config` values('KeepTodayCount','1','');");
E_D("replace into `qb_config` values('ShopOtherSend','18','');");
E_D("replace into `qb_config` values('DefaultIndexHtml','0','');");
E_D("replace into `qb_config` values('bencandy_filename2','bencandy.php?fid-{\$fid}-id-{\$id}-page-{\$page}.htm','');");
E_D("replace into `qb_config` values('pay99_key','','');");
E_D("replace into `qb_config` values('list_filename2','list.php?fid-{\$fid}-page-{\$page}.htm','');");
E_D("replace into `qb_config` values('MAX_sell_telephone','10','');");
E_D("replace into `qb_config` values('money_sell_telephone','50','');");
E_D("replace into `qb_config` values('sell_telephone_titleNUM','12','');");
E_D("replace into `qb_config` values('sell_telephone_telNUM','13','');");
E_D("replace into `qb_config` values('path','/do','');");
E_D("replace into `qb_config` values('viewNoPassArticle','0','');");
E_D("replace into `qb_config` values('ForbidRepeatTitle','1','');");
E_D("replace into `qb_config` values('autoCutSmallPic','1','');");
E_D("replace into `qb_config` values('if_gdimg','1','');");
E_D("replace into `qb_config` values('ArticleDownloadDirTime','0','');");
E_D("replace into `qb_config` values('ArticleDownloadUseFtp','0','');");
E_D("replace into `qb_config` values('SortUseOtherModule','0','');");
E_D("replace into `qb_config` values('photoShowType','0','');");
E_D("replace into `qb_config` values('allowDownMv','0','');");
E_D("replace into `qb_config` values('autoPlayFirstMv','1','');");
E_D("replace into `qb_config` values('EditSystem','0','');");
E_D("replace into `qb_config` values('XunLei_ID','08311','');");
E_D("replace into `qb_config` values('FlashGet_ID','6370','');");
E_D("replace into `qb_config` values('ListPageTitle_nojs','0','');");
E_D("replace into `qb_config` values('view_sell_article','0','');");
E_D("replace into `qb_config` values('sms_type','eshang8','');");
E_D("replace into `qb_config` values('TheSameMakeIndexHtml','0','');");
E_D("replace into `qb_config` values('SPlist_filename2','listsp.php?fid-{\$fid}-page-{\$page}.htm','');");
E_D("replace into `qb_config` values('SPbencandy_filename2','showsp.php?fid-{\$fid}-id-{\$id}-page-{\$page}.htm','');");
E_D("replace into `qb_config` values('regmoney','5','');");
E_D("replace into `qb_config` values('sms_wi_pwd','3','');");
E_D("replace into `qb_config` values('alipay_key','ynyitj9zoi4p75ui73zua4mvtbz1rjce','');");
E_D("replace into `qb_config` values('hyGroupid','8','');");
E_D("replace into `qb_config` values('FtpHost','127.0.0.1','');");
E_D("replace into `qb_config` values('FtpName','admin','');");
E_D("replace into `qb_config` values('FtpPwd','admin','');");
E_D("replace into `qb_config` values('alipay_give_scale','5','');");
E_D("replace into `qb_config` values('paypal_type','0','');");
E_D("replace into `qb_config` values('alipay_scale','100','');");
E_D("replace into `qb_config` values('alipay_partner','2088502462059458','');");
E_D("replace into `qb_config` values('passport_url','http://life.net/bbs','');");
E_D("replace into `qb_config` values('ForbidIp','','');");
E_D("replace into `qb_config` values('AllowVisitIp','','');");
E_D("replace into `qb_config` values('AdminIp','','');");
E_D("replace into `qb_config` values('guide_word_67','','');");
E_D("replace into `qb_config` values('YzImg_difficult','0','');");
E_D("replace into `qb_config` values('YzImg_letter_differ','0','');");
E_D("replace into `qb_config` values('wei_cache_time','0','');");
E_D("replace into `qb_config` values('paypal_key','VSILuuKuBqmr_sQSCaztA3lSXAwBAJcHnelancWqyQ9qMWASqwiPp3hXHO8','');");
E_D("replace into `qb_config` values('hideFid','','');");
E_D("replace into `qb_config` values('mob_goto_3g','1','');");
E_D("replace into `qb_config` values('dzbbs_pre','','');");
E_D("replace into `qb_config` values('dzbbs_showurl','','');");
E_D("replace into `qb_config` values('dzbbs_listurl','','');");
E_D("replace into `qb_config` values('guide_word_58','','');");
E_D("replace into `qb_config` values('guide_word_57','','');");
E_D("replace into `qb_config` values('guide_word_64','','');");
E_D("replace into `qb_config` values('guide_word_92','','');");
E_D("replace into `qb_config` values('guide_word_91','','');");
E_D("replace into `qb_config` values('guide_word_52','','');");
E_D("replace into `qb_config` values('guide_word_51','','');");
E_D("replace into `qb_config` values('guide_word_88','','');");
E_D("replace into `qb_config` values('guide_word_89','','');");
E_D("replace into `qb_config` values('guide_word_63','','');");
E_D("replace into `qb_config` values('DelMoneyLog','0','');");
E_D("replace into `qb_config` values('guide_word_60','','');");
E_D("replace into `qb_config` values('guide_word_55','','');");
E_D("replace into `qb_config` values('RegPropagandizeMan','1','');");
E_D("replace into `qb_config` values('RegQySendMail','0','');");
E_D("replace into `qb_config` values('tenpay_id','190000010','');");
E_D("replace into `qb_config` values('tenpay_key','934e7d15453e97507ef794cf7b0519d','');");
E_D("replace into `qb_config` values('is_MathYZ','0','');");
E_D("replace into `qb_config` values('is_chineseIMG','0','');");
E_D("replace into `qb_config` values('sms_ccell_id','88458','');");
E_D("replace into `qb_config` values('YzImg_string','','');");
E_D("replace into `qb_config` values('MailPort','25','');");
E_D("replace into `qb_config` values('MailId','lfj846@163.com','');");
E_D("replace into `qb_config` values('QQ_logintime','','');");
E_D("replace into `qb_config` values('qq_auto_bind','0','');");
E_D("replace into `qb_config` values('rand_reg_num_mktime','0','');");
E_D("replace into `qb_config` values('propagandize_Reg_Money','10','');");
E_D("replace into `qb_config` values('propagandize_jumpto','/','');");
E_D("replace into `qb_config` values('QQ_appid','','');");
E_D("replace into `qb_config` values('ComebackDate','0','');");
E_D("replace into `qb_config` values('googleMapDomain','0','');");
E_D("replace into `qb_config` values('baidu_share_uid','','');");
E_D("replace into `qb_config` values('Main_openAd','1','');");
E_D("replace into `qb_config` values('ForbidOtherDomainVisit','0','');");
E_D("replace into `qb_config` values('yzImgLogin','0','');");
E_D("replace into `qb_config` values('jump_city','0','');");
E_D("replace into `qb_config` values('Info_allcityType','0','');");
E_D("replace into `qb_config` values('RewriteUrl','0','');");
E_D("replace into `qb_config` values('AutoCutFace','0','');");
E_D("replace into `qb_config` values('yzImgAdminLogin','0','');");
E_D("replace into `qb_config` values('DownLoad_readfile','1','');");
E_D("replace into `qb_config` values('label_cache_time','-1','');");
E_D("replace into `qb_config` values('EditYzMob','0','');");
E_D("replace into `qb_config` values('EditYzIdcard','0','');");
E_D("replace into `qb_config` values('EditYzEmail','0','');");
E_D("replace into `qb_config` values('MailTransfer','0','');");
E_D("replace into `qb_config` values('MailPw','z','');");
E_D("replace into `qb_config` values('yeepay_key','veets3huzxruch0tsf6nga7a2lpckm8h9p7qnefj31q49ms8bhl3qin6q0g','');");
E_D("replace into `qb_config` values('MailServer','smtp.163.com','');");
E_D("replace into `qb_config` values('paypal_id','lfj846@163.com','');");
E_D("replace into `qb_config` values('alipay_transport','https','');");
E_D("replace into `qb_config` values('alipay_service','create_direct_pay_by_user','');");
E_D("replace into `qb_config` values('chinabank_id','','');");
E_D("replace into `qb_config` values('chinabank_key','','');");
E_D("replace into `qb_config` values('yeepay_id','10000821064','');");
E_D("replace into `qb_config` values('guide_word_66','','');");
E_D("replace into `qb_config` values('guide_word_59','','');");
E_D("replace into `qb_config` values('guide_word_62','','');");
E_D("replace into `qb_config` values('forbidReg','0','');");
E_D("replace into `qb_config` values('limitRegTime','','');");
E_D("replace into `qb_config` values('yzImgReg','1','');");
E_D("replace into `qb_config` values('YzImg_voice','0','');");
E_D("replace into `qb_config` values('yzNumReg','0','');");
E_D("replace into `qb_config` values('forbidRegIp','','');");
E_D("replace into `qb_config` values('forbidRegName','','');");
E_D("replace into `qb_config` values('rand_reg_num','1361937373','');");
E_D("replace into `qb_config` values('rand_reg_num_inputname','LCKU','');");
E_D("replace into `qb_config` values('RegYz','1','');");
E_D("replace into `qb_config` values('sms_wi_id','2','');");
E_D("replace into `qb_config` values('zhuangxiu_cache_time','0','');");
E_D("replace into `qb_config` values('house_cache_time','0','');");
E_D("replace into `qb_config` values('dianping_cache_time','0','');");
E_D("replace into `qb_config` values('ershou_cache_time','0','');");
E_D("replace into `qb_config` values('news_cache_time','0','');");
E_D("replace into `qb_config` values('fenlei_cache_time','0','');");
E_D("replace into `qb_config` values('shop_cache_time','0','');");
E_D("replace into `qb_config` values('hy_cache_time','0','');");
E_D("replace into `qb_config` values('tg_cache_time','0','');");
E_D("replace into `qb_config` values('coupon_cache_time','0','');");
E_D("replace into `qb_config` values('hr_cache_time','0','');");
E_D("replace into `qb_config` values('shoptg_cache_time','0','');");
E_D("replace into `qb_config` values('index_cache_time','0','');");
E_D("replace into `qb_config` values('memberNotice','欢迎大家踊跃投稿,投稿可得积分奖励!!','');");
E_D("replace into `qb_config` values('member_contact',' <div class=t>020-88888888</div>\r\n            <div class=t>020-88888888</div>\r\n            <div class=q>qq:123456</div>','');");
E_D("replace into `qb_config` values('companyTrade','机械及行业设备\r\n普通机械制造\r\n通用零部件\r\n五金配件\r\n金属工具\r\n电动工具\r\n电子元件\r\n电子器件\r\n照明及照明器具\r\n安全防护设备\r\n包装\r\n造纸及纸制品\r\n电机、电工电器\r\n电工器材\r\n通用仪器仪表\r\n专用仪器仪表\r\n交通运输设备、零部件\r\n办公、文教用品\r\n数码、电脑及网络配件\r\n日常家居用品\r\n木材、木制品\r\n家具\r\n家用电器\r\n礼品、工艺美术品\r\n食品、饮料\r\n通信产品\r\n玩具\r\n印刷设备\r\n运动、休闲、保健用品\r\n鞋、帽\r\n服装\r\n日用化学品\r\n农用化学品\r\n胶粘剂\r\n染料、颜料、涂料和油墨\r\n催化剂和助剂\r\n库存精细化学品\r\n食品和饲料添加剂\r\n塑料\r\n橡胶制品\r\n环保、环保设备\r\n建筑、建材\r\n能源\r\n粮油、农制品\r\n金属\r\n医药、保健及医疗设备\r\n纺织\r\n皮革\r\n煤焦化产品\r\n日常服务\r\n广告服务\r\n教育培训\r\n认证\r\n创意设计\r\n物流服务\r\n进出口代理\r\n维修及安装服务\r\n广告、展览器材\r\n专业录音、放音设备\r\n光学摄影器材\r\n编辑制作设备\r\n播出、前端设备\r\n建筑、装饰业\r\n房地产\r\n安装工程\r\n邮电通信\r\n事务所、公证\r\n卫生、体育、社会、福利\r\n公共服务业\r\n金融、保险\r\n实业公司、商业贸易\r\n高新技术开发区\r\n卡类市场','');");
E_D("replace into `qb_config` values('ForbidUpHy','0','');");
E_D("replace into `qb_config` values('ForbidDoHy','0','');");
E_D("replace into `qb_config` values('mymd5','30757788','');");
E_D("replace into `qb_config` values('copyright','','');");
E_D("replace into `qb_config` values('bokecc_id','','');");
E_D("replace into `qb_config` values('miibeian_gov_cn','京ICP备050453号','');");
E_D("replace into `qb_config` values('cookiePre','','');");
E_D("replace into `qb_config` values('cookieDomain','www3.ddecshop.com','');");
E_D("replace into `qb_config` values('forbid_show_bug','1','');");
E_D("replace into `qb_config` values('updir','upload_files','');");
E_D("replace into `qb_config` values('mirror','http://down.qibosoft.com/other/testv6/upload_files/','');");
E_D("replace into `qb_config` values('guide_word','首页|/|0||51|0\r\n需求|/buy/|0||88|\r\n供应|/sell/|0||89|\r\n联盟社区|/news/|0||52|20\r\n整合平台|/showroom/|0||90|\r\n资源沙龙|/f/|0||91|\r\n联盟合作|/hy|0||60|16\r\n团购活动|/tg/|0||56|28','');");
E_D("replace into `qb_config` values('guide_word_56','','');");
E_D("replace into `qb_config` values('guide_word_90','','');");
E_D("replace into `qb_config` values('guide_word_61','','');");
E_D("replace into `qb_config` values('guide_word_65','','');");
E_D("replace into `qb_config` values('guide_word_87','','');");
E_D("replace into `qb_config` values('upfileMaxSize','','');");
E_D("replace into `qb_config` values('upfileType','.rar .txt .jpg .gif .bmp .png .zip .mp3 .wma .wmv .mpeg .mpg .rm .ram .htm .doc .swf .avi .flv .sql .doc .ppt .xls .chm .pdf','');");
E_D("replace into `qb_config` values('totalSpace','100','');");
E_D("replace into `qb_config` values('time','0','');");
E_D("replace into `qb_config` values('admin_url','admin','');");
E_D("replace into `qb_config` values('www_url','http://localhost:7000','');");
E_D("replace into `qb_config` values('style_member','blue','');");
E_D("replace into `qb_config` values('style','style_5.1','');");
E_D("replace into `qb_config` values('close_why','网站维护当中,\r\n暂停访问.\r\n','');");
E_D("replace into `qb_config` values('web_open','1','');");
E_D("replace into `qb_config` values('MoneyDW','个','');");
E_D("replace into `qb_config` values('MoneyName','积分','');");
E_D("replace into `qb_config` values('UserEmailAutoPass','1','');");
E_D("replace into `qb_config` values('BuySpacesizeMoney','50','');");
E_D("replace into `qb_config` values('UseMoneyType','cms','');");
E_D("replace into `qb_config` values('sms_es_name','522045','');");
E_D("replace into `qb_config` values('sms_es_key','123123','');");
E_D("replace into `qb_config` values('waterAlpha','80','');");
E_D("replace into `qb_config` values('waterpos','7','');");
E_D("replace into `qb_config` values('ArticlePicWidth','800','');");
E_D("replace into `qb_config` values('ArticlePicHeight','600','');");
E_D("replace into `qb_config` values('sms_ccell_pwd','Ad43534556','');");
E_D("replace into `qb_config` values('description','欢迎来到华人诚信联盟','');");
E_D("replace into `qb_config` values('QQ_QBappkey','d12100d9366fbd6d92c9','');");
E_D("replace into `qb_config` values('QQ_QBappid','1','');");
E_D("replace into `qb_config` values('RegQyYzSendMail','0','');");
E_D("replace into `qb_config` values('RegQyNoNeedFull','0','');");
E_D("replace into `qb_config` values('emailOnly','1','');");
E_D("replace into `qb_config` values('reg_group','8','');");
E_D("replace into `qb_config` values('RegQyGroupid','9','');");
E_D("replace into `qb_config` values('RegQyNeedCheck','0','');");
E_D("replace into `qb_config` values('webmail','admin@admin.com','');");
E_D("replace into `qb_config` values('metakeywords','华人诚信联盟','');");
E_D("replace into `qb_config` values('SeoTitle','欢迎来到华人诚信联盟','');");
E_D("replace into `qb_config` values('webname','华人诚信联盟','');");
E_D("replace into `qb_config` values('cnzz_pwd','3322722499','');");
E_D("replace into `qb_config` values('cnzz_id','83327913','');");
E_D("replace into `qb_config` values('Reg_Field','a:1:{s:8:\"field_db\";a:0:{}}','');");

require("../../inc/footer.php");
?>