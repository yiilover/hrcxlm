<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_shop_content_1`;");
E_C("CREATE TABLE `qb_shop_content_1` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `market_price` varchar(10) NOT NULL DEFAULT '',
  `shoptype` varchar(50) NOT NULL DEFAULT '',
  `storage` int(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk");
E_D("replace into `qb_shop_content_1` values('1','1','21','1','<li>品牌: Apple/苹果</li><li>系列: MacBook Air</li><li>MacBook Air 系列配置: 其它MacBook Air 系列...</li><li>成色: 99新及展示机</li><li>CPU平台: Atom/凌动</li><li>凌动处理器型号: N455</li><li>CPU频率量级: 1.66GHz</li><li>CPU电压规格: 标准版电压</li><li>内存容量: 1G</li><li>硬盘容量: 160G</li><li>显卡类型: 集成</li><li>集成显卡型号: Intel GMA X3150</li><li>显存容量: 256M以上</li><li>光驱类型: 无</li><li>屏幕比例: 宽屏16：10</li><li>屏幕尺寸: 13寸</li><li>重量: 1-1.5公斤</li><li>电池类型: 4芯锂电池</li><li>摄像头功能: 有</li><li>3G上网功能: 无</li><li>售后服务: 其它售后服务</li><li>上市时间: 2009年</li><li>颜色分类: 顶级升级版N450黑色...</li><li>笔记本套餐: 套餐一&nbsp;标准套餐...</li><li>笔记本定位: 便携定位</li><li>笔记本价格区间: 3000元以下 </li>','3000','N455','99999');");
E_D("replace into `qb_shop_content_1` values('2','2','21','1','<li>产品名称：三星 N148-DP03 </li><li>品牌: Samsung/三星</li><li>系列: N便携系列</li><li>N便携系列型号: N148-DP03</li><li>成色: 全新</li><li>CPU平台: Atom/凌动</li><li>凌动处理器型号: N450</li><li>CPU频率量级: 1.66GHz</li><li>CPU电压规格: 低电压版(LV)</li><li>内存容量: 1G</li><li>硬盘容量: 250G</li><li>显卡类型: 集成</li><li>集成显卡型号: Intel GMA X3150</li><li>显存容量: 共享内存容量</li><li>光驱类型: 无</li><li>屏幕比例: 宽屏16：9</li><li>屏幕尺寸: 10寸</li><li>重量: 1-1.5公斤</li><li>电池类型: 6芯锂电池</li><li>指纹功能: 无</li><li>蓝牙功能: 无</li><li>摄像头功能: 有</li><li>3G上网功能: 无</li><li>售后服务: 全国联保</li><li>上市时间: 2010年</li><li>颜色分类: 红色</li><li>笔记本套餐: 套餐一&nbsp;套餐二...</li><li>笔记本定位: 便携定位</li><li>笔记本价格区间: 3000元以下 </li>','3000','N148-DP03','99999');");
E_D("replace into `qb_shop_content_1` values('3','3','21','1','<p>1：宏基532N450CPU大量到货,因资金压太多,所以全部批价1999元包邮出售,我们郑重承诺：该产品保证正品全新香港行货,如假全额退款，且承担一切费用的赔偿，并接受投诉。请买家放心购,另送4样配件,马上抢吧!,注包邮只发圆通快递,发顺丰或EMS需补差价</p>\r\n<p>2机子是由香港批量发过来的，包装跟本本是分开的！所以机身编码与外包装编码未必对的上～</p>\r\n<p>3.机子自带英文正版 WIN7系统(需改装中文W7和XP的朋友注明一下)</p>\r\n<p>4.香港行货机子贴有正版系统标</p>\r\n<p><br />\r\n5.原配件有，笔记本一台(含电池2200毫安），电源适配器一个，电源线一条，说明书一本，</p>\r\n<p>配置套餐如下:</p>\r\n<p>注意:标配套捷威LT2107有白和红色可选,N450/1G内存250G硬盘 1880元特价包邮</p>\r\n<p>标配套餐：宏基532H/凌动N450/1G内存/160G硬盘3芯电池=1999元包邮</p>\r\n<p>套餐一：宏基532H/凌动N450/2G内存/160G硬盘3芯电池=2199元包邮</p>\r\n<p>套餐二:宏基532H/凌动N450/2G内存/320G硬盘3芯电池=2330元包邮</p>\r\n<p>套餐三;宏基532H/凌动N450/2G内存/250G硬盘3芯电池=2280元包邮</p>\r\n<p>另有6芯电池选购,需要换6芯电池加150元</p>\r\n<p>&nbsp;</p>\r\n','8000','N450','99999');");
E_D("replace into `qb_shop_content_1` values('4','4','21','1','<li>\r\n	品牌: Panasonic/松下</li>\r\n<li>\r\n	松下系列: CF系列</li>\r\n<li>\r\n	CF系列型号: 其它型号</li>\r\n<li>\r\n	成色: 9成新以上</li>\r\n<li>\r\n	CPU平台: 奔腾M(Dothan)</li>\r\n<li>\r\n	奔腾M(Dothan): 其它型号</li>\r\n<li>\r\n	CPU频率量级: 1.0GHz</li>\r\n<li>\r\n	CPU电压规格: 超低电压版(ULV)</li>\r\n<li>\r\n	内存容量: 512M</li>\r\n<li>\r\n	硬盘容量: 40G</li>\r\n<li>\r\n	显卡类型: 集成</li>\r\n<li>\r\n	集成显卡型号: 其它集成显卡型号</li>\r\n<li>\r\n	显存容量: 64M</li>\r\n<li>\r\n	光驱类型: 无</li>\r\n<li>\r\n	屏幕比例: 普屏4：3</li>\r\n<li>\r\n	屏幕尺寸: 12寸</li>\r\n<li>\r\n	重量: 1公斤以下</li>\r\n<li>\r\n	上市时间: 2007年</li>\r\n<li>\r\n	颜色分类: 黄金版&nbsp;钻石版...</li>\r\n<li>\r\n	笔记本套餐: 标准套餐</li>\r\n<li>\r\n	笔记本定位: 便携定位</li>\r\n<li>\r\n	笔记本价格区间: 3000元以下</li>\r\n','4000','T1 T2','99999');");
E_D("replace into `qb_shop_content_1` values('5','5','22','1','<li>产品名称：LG KG800 </li><li>上市时间: 2006年</li><li>06年上市月份: 4月</li><li>网络类型: GSM</li><li>外观样式: 滑盖</li><li>主屏尺寸: 2.0英寸</li><li>屏幕颜色: 26万</li><li>机身颜色: 酒红色+5元&nbsp;黑色...</li><li>手机套餐: 套餐三&nbsp;套餐一...</li><li>铃声: MP3铃声</li><li>摄像头: 130万</li><li>是否智能手机: 非智能手机</li><li>操作系统: 无操作系统</li><li>储存功能: 不支持存储卡</li><li>适合送给谁: 中年男性&nbsp;中年女性...</li><li>适合的送礼场景: 商务送礼&nbsp;爱意表达</li><li>高级功能: MP3播放...</li><li>适合的送礼人物类型: 时尚爱美型&nbsp;事业型</li><li>宝贝成色: 9.99成新</li><li>售后服务: 店铺三包</li><li>品牌: LG</li><li>LG型号: KG800</li><li>手机价格区间: 1000元以下 </li>','400','KG90/KG800','99999');");
E_D("replace into `qb_shop_content_1` values('6','6','22','1','<li>品牌: Sharp/夏普</li><li>夏普型号: 其它夏普型号</li><li>其它夏普型号: 其它夏普型号</li><li>上市时间: 2010年</li><li>10年上市月份: 5月</li><li>网络类型: GSM</li><li>外观样式: 滑盖</li><li>主屏尺寸: 2.8英寸</li><li>屏幕颜色: 1600万</li><li>机身颜色: 棕色&nbsp;黑色</li><li>手机套餐: 套餐四&nbsp;套餐三...</li><li>铃声: MP3铃声</li><li>摄像头: 200万</li><li>是否智能手机: 非智能手机</li><li>操作系统: 无操作系统</li><li>储存功能: TF(microSD)卡</li><li>适合送给谁: 男青年&nbsp;少男&nbsp;少女...</li><li>高级功能: 双卡双待&nbsp;手写输入...</li><li>适合的送礼场景: 商务送礼&nbsp;乔迁新居...</li><li>适合的送礼人物类型: 时尚爱美型&nbsp;事业型</li><li>宝贝成色: 9.99成新</li><li>售后服务: 店铺三包 </li>','800','F66','99999');");
E_D("replace into `qb_shop_content_1` values('7','7','23','1','<li>产品名称：佳能A495 IS </li><li>上市时间: 2010年</li><li>按特殊功能选择: 面部优先</li><li>颜色分类: 红色&nbsp;蓝色&nbsp;银色</li><li>显示屏尺寸: 2.5</li><li>像素: 1000万</li><li>光学变焦: 3.4倍</li><li>储存介质: SD卡</li><li>电池类型: AA电池</li><li>售后服务: 店铺三包</li><li>成色: 全新</li><li>套餐: 套餐三&nbsp;套餐二...</li><li>品牌: Canon/佳能</li><li>型号: PowerShot A495</li><li>相机价格: 800元以下</li>','900','A495','99999');");
E_D("replace into `qb_shop_content_1` values('8','8','23','1','<li>产品名称：三星ST60 </li><li>上市时间: 2010年</li><li>按特殊功能选择: 光学防抖&nbsp;面部优先...</li><li>颜色分类: 黑色&nbsp;红色&nbsp;银色</li><li>显示屏尺寸: 2.7</li><li>像素: 1200万</li><li>光学变焦: 4倍</li><li>储存介质: SD卡</li><li>电池类型: 专用锂电</li><li>售后服务: 店铺三包</li><li>成色: 全新</li><li>套餐: 套餐三&nbsp;套餐二...</li><li>品牌: Samsung/三星</li><li>型号: ST60</li><li>相机价格: 800元以下 </li>','1200','星ST60','99993');");
E_D("replace into `qb_shop_content_1` values('9','9','23','1','<li>\r\n	产品名称：富士 S1600</li>\r\n<li>\r\n	上市时间: 2010年</li>\r\n<li>\r\n	按特殊功能选择: 面部优先&nbsp;长焦</li>\r\n<li>\r\n	颜色分类: S1770...</li>\r\n<li>\r\n	显示屏尺寸: 3</li>\r\n<li>\r\n	像素: 1200万</li>\r\n<li>\r\n	光学变焦: 15倍</li>\r\n<li>\r\n	储存介质: SD卡&nbsp;其它闪存卡</li>\r\n<li>\r\n	电池类型: AA电池</li>\r\n<li>\r\n	售后服务: 店铺三包</li>\r\n<li>\r\n	成色: 全新</li>\r\n<li>\r\n	套餐: 套餐八&nbsp;套餐三...</li>\r\n<li>\r\n	适合送给谁: 男青年</li>\r\n<li>\r\n	适合的送礼场景: 毕业送礼&nbsp;工作升迁</li>\r\n<li>\r\n	适合的送礼人物类型: 探索创新型&nbsp;事业型...</li>\r\n<li>\r\n	品牌: Fujifilm/富士</li>\r\n<li>\r\n	富士: S1600</li>\r\n<li>\r\n	相机价格: 800元-1500元</li>\r\n','3000','S1770','99999');");
E_D("replace into `qb_shop_content_1` values('10','10','64','1','<ul><li><p>品牌: 更多其它品牌</p></li><li><p>其他更多品牌: 其他</p></li><li><p>颜色分类: 银灰色</p></li><li><p>产品类别: MP4</p></li><li><p>按保修/产地选择: 店铺三包</p></li><li><p>容量: 4GB</p></li><li><p>存储介质: 闪存</p></li><li><p>扩展卡: TF(microSD)卡</p></li><li><p>视频播放格式: MPEG-4 RM...</p></li><li><p>电池类型: 专用锂电池</p></li><li><p>特殊功能: 外放功能 录音功能...</p></li><li><p>显示屏尺寸: 5.0英寸</p></li><li><p>音频播放格式: MP3 FLAC...</p></li><li><p>屏幕: 触摸屏</p></li><li><p>成色: 全新</p></li><li><p>适合送给谁: 中年女性</p></li><li><p>适合的送礼场景: 乔迁新居</p></li><li><p>适合的送礼人物类型: 事业型</p></li><li><p>视听套餐: 套餐四 套餐三...</p></li><li><p>上市时间: 2010年</p></li><li><p>价格区间: 501-700元 </p></li></ul>','800','16G','99999');");

require("../../inc/footer.php");
?>