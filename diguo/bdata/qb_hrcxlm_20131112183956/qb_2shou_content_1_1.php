<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_2shou_content_1`;");
E_C("CREATE TABLE `qb_2shou_content_1` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `sortid` tinyint(3) NOT NULL DEFAULT '0',
  `buytime` varchar(20) NOT NULL DEFAULT '',
  `buyprice` int(8) NOT NULL DEFAULT '0',
  `sellprice` varchar(20) NOT NULL DEFAULT '',
  `selltype` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=gbk");
E_D("replace into `qb_2shou_content_1` values('2','2','7','1','本人有一台34寸纯屏电视机出.是小工厂,大型超市.医院,培训室的道选,电视郊果很好,有意者请来电,短信不复.图片为手机拍摄实物图片.\r\n联系我时，请说是在58同城上看到的，谢谢！\r\n\r\n','9','','0','800','0');");
E_D("replace into `qb_2shou_content_1` values('3','3','7','1','创维 42e70RG 42寸led硬屏液晶电视 具体参数及功能见商家介绍：http://item.tmall.com/item.htm?id=7536783622&prc=1\r\n &nbsp;  因买电视时没注意尺寸，客厅太小，买大了，2011年3月份下的单，6月份才叫国美送货过来，安装调试后一直没使用，因房子还未入住，基本上全新，怕对小孩视力影响不好，观看距离太近，现想处理掉这个后重新买个小点的，具体可详谈！ \r\n','9','','0','3000','0');");
E_D("replace into `qb_2shou_content_1` values('4','4','7','1','另有xbox 360（黑色） +KInecT摄像头 +黑色无线手柄，白色有线手柄+100个以上游戏，加点钱就一起转让。一起转让价格4900元。\r\n','9','','0','3300','0');");
E_D("replace into `qb_2shou_content_1` values('5','5','7','1','全新42寸sony液晶电视，采用韩国进口IPS硬屏面板，质量可靠，支持USB多媒体播放 .底座可90度旋转，所销售产品全部一年免费保修！ \r\n宝贝描述： \r\n功能：PC/TV/AV 屏幕尺寸：42寸 屏幕比例：16:9 点距：0.164mm×0.264mm 分辨率：1920*1080px 亮度：2000cd/m2 对比度：10000:1 响应时间：3ms--5ms 可视角度：178/178 扬声器：10W×2,内置 接收频率：1-900MHz 接收频道：全频道 画外画功能：是 USB功能：是(电影功能另外说明） HDMI高清接口：是（双HDMI接口） 电视制式：可按国家定制 画中画功能：有 S视频：4帧×2(S- Video) 电脑：15帧D-Sub×1(VGA) 功率：&lt;40W 待机功率：5W 电压：(90-240V)-DC 12V OSD语言：可按国家定制 外壳材料：钢琴烤漆 线条设计 新亮点：黑晶面板 全高清 使用寿命：60000小时 使用比例模式：标准、全屏、缩放、非线性等。 每天8小时可以用17年底座：旋转底座 完美线条设计！\r\n淘宝店铺 http://jt88tv.taobao.com/ \r\n联系电话 13660059639蒋生\r\n &nbsp;  &nbsp;   QQ 1215534592\r\n联系我时，请说是在58同城上看到的，谢谢！\r\n\r\n','9','','0','2300','0');");
E_D("replace into `qb_2shou_content_1` values('6','6','7','1','品牌 松下 型号 TH-L32C30C 颜色 黑色 显示 屏幕尺寸 32英寸 屏幕类型 IPS液晶屏幕 像素 1366*768 音频 扬声器 2*7W,单路底部喇叭 声音模式 音乐/语音/自定义 环绕系统 V-Audio 端口 SDLink 1侧置(AVCHD/SD-VIDEO/MotionJPEG/mp4/Div*HD/MPEG4/JPEG/mp3/AAC/WMV/WMA回放) USB接口 2(1后置,1侧置)；大容量储存/键盘/WiFi HDMI接口 3(2后置,1侧置) 复合视频输入 AV1/2/3:RCAphono型(1侧置,2后置) 分量视频输入 RCAphono型(1套后置) 音频输入 RCAphono型(1套后置) PC输入 MiniD-sub15-针*1(后置) 模拟音频输出 RCAphono型(1套后置) 规格 电源 AC220V,50Hz 不包括底座 779*497*84（W*H*D）mm 包括底座 779*531*207（W*H*D）mm 不包括底座 9kg 包括底座 10kg \r\n','9','','0','2779','0');");
E_D("replace into `qb_2shou_content_1` values('7','7','7','1','搬家带不走大屏幕，去年9月国美折扣后7499购入，国美开的发票还在，型号：sony KLV-40Ex600，40寸led大液晶，支持蓝光1080P，4个HDMI接口，详情请看http://www.sonystyle.com.cn/products/bravia/ex600/ex600_spec.htm 索尼的质量你懂得！另有手机拍的几张图片\r\n\r\n\r\n','9','','0','','0');");
E_D("replace into `qb_2shou_content_1` values('8','8','8','1','出售9.5成新的tcl6.5公升半自动洗衣机，半自动就是洗完衣服之后手动放到甩干桶里，没买几个月，搬家转让。看清楚在打电话 谢谢\r\n\r\n','9','2010.8.25','1200','400','0');");
E_D("replace into `qb_2shou_content_1` values('9','9','8','1','海尔洗衣机9成新，可洗最多5.5kg，内部是全钢的，质量可靠，容量够大，但不占地方。还保存了自购的发票。格力电饭煲，压力式，标明做多可做5杯米，差不多是7个人的饭量，适合单身、三口之家、三代同堂使用，偶尔来了客人也够用了。洗衣机单买450，电饭煲单买50，一起买480.\r\n','9','','1200','450','0');");
E_D("replace into `qb_2shou_content_1` values('10','10','9','1','因为工作调动要离开广州，只能心痛转让了。很新很新的空调，今年8月7日购于东圃苏宁，志高1p单冷空调，型号:KF-25GW/a107+N2/金色。原价两千四百多，发票保修包装齐全，另有苏宁阳光服务金卡可免费移机一次，一并赠送了。另有小礼物赠送。运费自付。\r\n才用了一个多月，1700元出了，再赠送床上电脑桌一张，真的很便宜了~~~~~~ \r\n\r\n\r\n非诚勿扰，请不要把价格压到几百元，我的空调不是那种用了好几年的旧二手空调。诚心想买也请体谅我的心情。谢谢。 \r\n','9','','3250','1700','0');");
E_D("replace into `qb_2shou_content_1` values('11','11','9','1','说什么都没用，最好来试机\r\n','9','2009.5.4','3500','800','0');");
E_D("replace into `qb_2shou_content_1` values('12','12','23','1','小黑本ibm thinkpad结实好用，出门携带方便，个人使用保养的非常好，几乎全新没有划痕 本现在绝对没有任何毛病 没修过没拆过玩CF魔兽 战地之王运行速度快玩大型游戏保证一点不热\r\n\r\n基本配置：thinkpad 因特尔二代双核 二级缓存4M CPU：1.87 14吋高亮液晶屏 独立显卡 2G内存 硬盘 100G DVD康宝刻录机 无线网卡 双鼠标 蓝牙 内置免费WIFI 夜间照明灯 电池可3小时 。可以随便检测，现在使用一切正常原厂配件都在 购机发票还有我刚买全新的原装包和鼠标\r\n\r\n','9','2010.10.21','8000','1380','1');");
E_D("replace into `qb_2shou_content_1` values('13','13','23','1','机器一直放着也没怎么用。所以还是非常新的。电子产品越放越不直钱了。还是赚给有用的人吧。\r\n\r\n具体配置 酷睿2代T7300 2G内存 160G硬盘 代蓝牙 指纹 无线 DVD可以刻录 256M显卡 电池3个小时没问题。\r\n\r\n本人平时上班，要看机器提前来电话约时间吧。另外自己用的包，鼠标都送了。\r\n\r\n','9','2011.3.15','6500','1580','1');");
E_D("replace into `qb_2shou_content_1` values('14','14','23','1','我的本子是ibm thinkpad的原装机性能稳定没话说散热具棒，皮实好 用，外观也相当不错，黑色的，也不笨重，出门携带方便，机子的性能强悍 网络3D游戏玩起来十分顺畅，可以流畅运行魔兽争霸，魔兽世界，CF，极品 飞车8等 个人使用保养的很好99成新，一直没出现过问题，没有维修过， 现在使用一切正常\r\n\r\n配置1：cpu因特尔1.6 内存2G 硬盘100G 独立显卡 14寸LCD高清屏 DVD康宝刻录\r\n内置无线蓝牙 夜间照明 电池好用。 九五成新 价格1350\r\n\r\n配置2：cpu: 酷睿2 T5600双核 1.86GHZ 二级缓存:4M 独立显卡 内存： 2G 硬盘：100G LCD高清屏14吋 DVD刻录光驱 内置免费WIFI无线网卡 蓝 牙 指纹识别器 夜间照明灯 支持VGA接口 电池可2小时以上 基本全新 价格1450\r\n\r\n基本配置 就这样， 原厂配件都在还有原装包和购机发票, 当 面交易，可用任何软件 检测，想要的朋友电话联系','9','2009.11.15','8900','1350','1');");
E_D("replace into `qb_2shou_content_1` values('15','15','23','1','双核高配CPU:L7500　４M二级缓存\r\n2G 内存 500G硬盘(硬盘保修至2014年9月) 无线网卡 蓝牙传输 指纹识别\r\n手触屏幕(类似IPAD那种，所以无笔) 屏幕没发现斑点\r\n电池后换的 最亮状态下 720p约3小时20分 实测数据 一般应用在４－５个小时之间 键盘不油，面盖四角少许磨损 其余都挺好 整体9成新以上\r\n赠送xp ghost系统,以及1CD+1DVD原装系统恢复盘,可以恢复至带隐藏分区的系统．\r\n实物图片，电话请QQ联系索取，预防垃圾短信和电话骚扰\r\n\r\n','9','2009.11.15','9800','3000','1');");
E_D("replace into `qb_2shou_content_1` values('16','16','13','1','转让宜家的铁艺双人床一套，床垫不是宜家的。见下图。\r\n\r\n\r\n床在梨园附近，不包送！本帖10月5日前有效','9','','2000','700','1');");
E_D("replace into `qb_2shou_content_1` values('17','17','13','1','今年搬家的时候刚买的双人大床，席梦思床垫，非常舒服。\r\n但由于工作原因，重新换房子时不需要床了，主要也是没地方放了，所以8折出手。基本没睡多久，看床也比较方便，地处簋街，市区二环东直门地铁站西南口出来福士后面，东直门内大街4号楼。有意向者，请速联系:)\r\n\r\n','9','','0','','0');");

require("../../inc/footer.php");
?>