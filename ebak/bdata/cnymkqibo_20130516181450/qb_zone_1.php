<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_zone`;");
E_C("CREATE TABLE `qb_zone` (
  `fid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `fup` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `name` varchar(200) NOT NULL DEFAULT '',
  `class` smallint(4) NOT NULL DEFAULT '0',
  `sons` smallint(4) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `admin` varchar(100) NOT NULL DEFAULT '',
  `list` int(10) NOT NULL DEFAULT '0',
  `listorder` tinyint(2) NOT NULL DEFAULT '0',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  `logo` varchar(150) NOT NULL DEFAULT '',
  `descrip` text NOT NULL,
  `style` varchar(50) NOT NULL DEFAULT '',
  `template` text NOT NULL,
  `jumpurl` varchar(150) NOT NULL DEFAULT '',
  `maxperpage` tinyint(3) NOT NULL DEFAULT '0',
  `metakeywords` varchar(255) NOT NULL DEFAULT '',
  `metadescription` varchar(255) NOT NULL DEFAULT '',
  `allowcomment` tinyint(1) NOT NULL DEFAULT '0',
  `allowpost` varchar(150) NOT NULL DEFAULT '',
  `allowviewtitle` varchar(150) NOT NULL DEFAULT '',
  `allowviewcontent` varchar(150) NOT NULL DEFAULT '',
  `allowdownload` varchar(150) NOT NULL DEFAULT '',
  `forbidshow` tinyint(1) NOT NULL DEFAULT '0',
  `config` text NOT NULL,
  `dirname` varchar(150) NOT NULL DEFAULT '',
  PRIMARY KEY (`fid`),
  KEY `fup` (`fup`)
) ENGINE=MyISAM AUTO_INCREMENT=190 DEFAULT CHARSET=gbk");
E_D("replace into `qb_zone` values('1','1','海淀','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','HaiDian');");
E_D("replace into `qb_zone` values('2','1','朝阳','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ChaoYang');");
E_D("replace into `qb_zone` values('3','1','东城','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','DongCheng');");
E_D("replace into `qb_zone` values('4','1','西城','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XiCheng');");
E_D("replace into `qb_zone` values('5','1','崇文','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ChongWen');");
E_D("replace into `qb_zone` values('6','1','宣武','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XuanWu');");
E_D("replace into `qb_zone` values('7','1','丰台','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','FengTai');");
E_D("replace into `qb_zone` values('8','1','石景山','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ShiJingShan');");
E_D("replace into `qb_zone` values('9','1','房山','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','FangShan');");
E_D("replace into `qb_zone` values('10','1','大兴','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','DaXing');");
E_D("replace into `qb_zone` values('11','1','通州','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','TongZhou');");
E_D("replace into `qb_zone` values('12','1','顺义','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ShunYi');");
E_D("replace into `qb_zone` values('13','1','昌平','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ChangPing');");
E_D("replace into `qb_zone` values('14','1','密云','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','MiYun');");
E_D("replace into `qb_zone` values('15','1','怀柔','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','HuaiRou');");
E_D("replace into `qb_zone` values('16','1','延庆','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','YanQing');");
E_D("replace into `qb_zone` values('17','1','平谷','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','PingGu');");
E_D("replace into `qb_zone` values('18','1','门头沟','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','MenTouGou');");
E_D("replace into `qb_zone` values('19','2','黄浦','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','HuangPu');");
E_D("replace into `qb_zone` values('20','2','静安','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','JingAn');");
E_D("replace into `qb_zone` values('21','2','卢湾','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','LuWan');");
E_D("replace into `qb_zone` values('22','2','徐汇','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XuHui');");
E_D("replace into `qb_zone` values('23','2','长宁','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ChangNing');");
E_D("replace into `qb_zone` values('24','2','闸北','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ZhaBei');");
E_D("replace into `qb_zone` values('25','2','普陀','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','PuTuo');");
E_D("replace into `qb_zone` values('26','2','虹口','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','HongKou');");
E_D("replace into `qb_zone` values('27','2','杨浦','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','YangPu');");
E_D("replace into `qb_zone` values('28','2','浦东','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','PuDong');");
E_D("replace into `qb_zone` values('29','2','闵行','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','Xing');");
E_D("replace into `qb_zone` values('30','2','松江','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','SongJiang');");
E_D("replace into `qb_zone` values('31','2','宝山','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','BaoShan');");
E_D("replace into `qb_zone` values('32','2','嘉定','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','JiaDing');");
E_D("replace into `qb_zone` values('33','2','青浦','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','QingPu');");
E_D("replace into `qb_zone` values('34','2','奉贤','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','FengXian');");
E_D("replace into `qb_zone` values('35','2','南汇','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','NanHui');");
E_D("replace into `qb_zone` values('36','2','金山','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','JinShan');");
E_D("replace into `qb_zone` values('37','2','崇明','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ChongMing');");
E_D("replace into `qb_zone` values('38','3','大学专区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','DaXueZhuanQu');");
E_D("replace into `qb_zone` values('39','3','和平','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','HePing');");
E_D("replace into `qb_zone` values('40','3','河东','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','HeDong');");
E_D("replace into `qb_zone` values('41','3','河西','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','HeXi');");
E_D("replace into `qb_zone` values('42','3','南开','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','NanKai');");
E_D("replace into `qb_zone` values('43','3','河北','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','HeBei');");
E_D("replace into `qb_zone` values('44','3','红桥','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','HongQiao');");
E_D("replace into `qb_zone` values('45','3','塘沽','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','TangGu');");
E_D("replace into `qb_zone` values('46','3','汉沽','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','HanGu');");
E_D("replace into `qb_zone` values('47','3','大港','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','DaGang');");
E_D("replace into `qb_zone` values('48','3','东丽','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','DongLi');");
E_D("replace into `qb_zone` values('49','3','西青','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XiQing');");
E_D("replace into `qb_zone` values('50','3','北辰','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','BeiChen');");
E_D("replace into `qb_zone` values('51','3','津南','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','JinNan');");
E_D("replace into `qb_zone` values('52','3','武清','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','WuQing');");
E_D("replace into `qb_zone` values('53','3','宝坻','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','Bao');");
E_D("replace into `qb_zone` values('54','3','静海','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','JingHai');");
E_D("replace into `qb_zone` values('55','3','宁河','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','NingHe');");
E_D("replace into `qb_zone` values('56','3','蓟县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','JiXian');");
E_D("replace into `qb_zone` values('57','3','开发区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','KaiFaQu');");
E_D("replace into `qb_zone` values('58','4','渝中','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','YuZhong');");
E_D("replace into `qb_zone` values('59','4','大渡口','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','DaDuKou');");
E_D("replace into `qb_zone` values('60','4','江北','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','JiangBei');");
E_D("replace into `qb_zone` values('61','4','沙坪坝','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ShaPingBa');");
E_D("replace into `qb_zone` values('62','4','九龙坡','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','JiuLongPo');");
E_D("replace into `qb_zone` values('63','4','南岸','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','NanAn');");
E_D("replace into `qb_zone` values('64','4','北碚','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','Bei');");
E_D("replace into `qb_zone` values('65','4','万盛','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','WanSheng');");
E_D("replace into `qb_zone` values('66','4','双桥','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ShuangQiao');");
E_D("replace into `qb_zone` values('67','4','渝北','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','YuBei');");
E_D("replace into `qb_zone` values('68','4','巴南','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','BaNan');");
E_D("replace into `qb_zone` values('69','4','万州','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','WanZhou');");
E_D("replace into `qb_zone` values('70','4','涪陵','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','FuLing');");
E_D("replace into `qb_zone` values('71','4','黔江','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','QianJiang');");
E_D("replace into `qb_zone` values('72','4','长寿','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ChangShou');");
E_D("replace into `qb_zone` values('73','5','荔湾区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','LiWanQu');");
E_D("replace into `qb_zone` values('74','5','越秀区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','YueXiuQu');");
E_D("replace into `qb_zone` values('75','5','东山区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','DongShanQu');");
E_D("replace into `qb_zone` values('76','5','天河区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','TianHeQu');");
E_D("replace into `qb_zone` values('77','5','海珠区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','HaiZhuQu');");
E_D("replace into `qb_zone` values('78','5','黄埔区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','HuangPuQu');");
E_D("replace into `qb_zone` values('79','5','白云区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','BaiYunQu');");
E_D("replace into `qb_zone` values('80','5','番禺区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','FanQu');");
E_D("replace into `qb_zone` values('81','5','花都区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','HuaDuQu');");
E_D("replace into `qb_zone` values('82','5','增城区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ZengChengQu');");
E_D("replace into `qb_zone` values('83','5','从化区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','CongHuaQu');");
E_D("replace into `qb_zone` values('84','78','青秀区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','QingXiuQu');");
E_D("replace into `qb_zone` values('85','78','兴宁区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XingNingQu');");
E_D("replace into `qb_zone` values('86','78','西乡塘','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XiXiangTang');");
E_D("replace into `qb_zone` values('87','78','良庆','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','LiangQing');");
E_D("replace into `qb_zone` values('88','78','邕宁','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','Ning');");
E_D("replace into `qb_zone` values('89','78','武鸣','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','WuMing');");
E_D("replace into `qb_zone` values('90','78','横县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','HengXian');");
E_D("replace into `qb_zone` values('91','78','宾阳县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','BinYangXian');");
E_D("replace into `qb_zone` values('92','78','上林','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ShangLin');");
E_D("replace into `qb_zone` values('93','78','隆安','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','LongAn');");
E_D("replace into `qb_zone` values('94','78','马山','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','MaShan');");
E_D("replace into `qb_zone` values('95','78','大学专区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','DaXueZhuanQu');");
E_D("replace into `qb_zone` values('96','158','岳麓','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','YueLu');");
E_D("replace into `qb_zone` values('97','158','芙蓉','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','Rong');");
E_D("replace into `qb_zone` values('98','158','天心','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','TianXin');");
E_D("replace into `qb_zone` values('99','158','开福','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','KaiFu');");
E_D("replace into `qb_zone` values('100','158','雨花','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','YuHua');");
E_D("replace into `qb_zone` values('101','158','浏阳市','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','YangShi');");
E_D("replace into `qb_zone` values('102','158','长沙县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ChangShaXian');");
E_D("replace into `qb_zone` values('103','158','望城县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','WangChengXian');");
E_D("replace into `qb_zone` values('104','158','宁乡县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','NingXiangXian');");
E_D("replace into `qb_zone` values('105','271','莲湖','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','LianHu');");
E_D("replace into `qb_zone` values('106','271','新城','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XinCheng');");
E_D("replace into `qb_zone` values('107','271','碑林','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','BeiLin');");
E_D("replace into `qb_zone` values('108','271','雁塔','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','YanTa');");
E_D("replace into `qb_zone` values('109','271','高新','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','GaoXin');");
E_D("replace into `qb_zone` values('110','271','长安','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ChangAn');");
E_D("replace into `qb_zone` values('111','271','灞桥','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','Qiao');");
E_D("replace into `qb_zone` values('112','271','未央','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','WeiYang');");
E_D("replace into `qb_zone` values('113','271','阎良','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','YanLiang');");
E_D("replace into `qb_zone` values('114','271','临潼','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','Lin');");
E_D("replace into `qb_zone` values('115','271','户县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','HuXian');");
E_D("replace into `qb_zone` values('116','271','高陵','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','GaoLing');");
E_D("replace into `qb_zone` values('117','271','周至','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ZhouZhi');");
E_D("replace into `qb_zone` values('118','271','蓝田','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','LanTian');");
E_D("replace into `qb_zone` values('119','281','青羊区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','QingYangQu');");
E_D("replace into `qb_zone` values('120','281','锦江区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','JinJiangQu');");
E_D("replace into `qb_zone` values('121','281','金牛区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','JinNiuQu');");
E_D("replace into `qb_zone` values('122','281','武侯区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','WuHouQu');");
E_D("replace into `qb_zone` values('123','281','成华区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ChengHuaQu');");
E_D("replace into `qb_zone` values('124','281','龙泉驿区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','LongQuanQu');");
E_D("replace into `qb_zone` values('125','281','青白江区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','QingBaiJiangQu');");
E_D("replace into `qb_zone` values('126','281','新都区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XinDuQu');");
E_D("replace into `qb_zone` values('127','281','温江区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','WenJiangQu');");
E_D("replace into `qb_zone` values('128','281','都江堰','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','DuJiangYan');");
E_D("replace into `qb_zone` values('129','281','大邑县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','DaYiXian');");
E_D("replace into `qb_zone` values('130','281','彭州市','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','PengZhouShi');");
E_D("replace into `qb_zone` values('131','281','蒲江县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','PuJiangXian');");
E_D("replace into `qb_zone` values('132','281','双流县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ShuangLiuXian');");
E_D("replace into `qb_zone` values('133','281','新津县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XinJinXian');");
E_D("replace into `qb_zone` values('134','281','崇州市','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ChongZhouShi');");
E_D("replace into `qb_zone` values('135','281','金堂县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','JinTangXian');");
E_D("replace into `qb_zone` values('136','281','郫县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','Xian');");
E_D("replace into `qb_zone` values('137','281','邛崃市','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','Shi');");
E_D("replace into `qb_zone` values('138','281','高新区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','GaoXinQu');");
E_D("replace into `qb_zone` values('139','281','大学专区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','DaXueZhuanQu');");
E_D("replace into `qb_zone` values('140','26','拱墅','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','GongShu');");
E_D("replace into `qb_zone` values('141','26','西湖','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XiHu');");
E_D("replace into `qb_zone` values('142','26','上城','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ShangCheng');");
E_D("replace into `qb_zone` values('143','26','下城','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XiaCheng');");
E_D("replace into `qb_zone` values('144','26','江干','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','JiangGan');");
E_D("replace into `qb_zone` values('145','26','滨江','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','BinJiang');");
E_D("replace into `qb_zone` values('146','26','余杭','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','YuHang');");
E_D("replace into `qb_zone` values('147','26','萧山','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XiaoShan');");
E_D("replace into `qb_zone` values('148','26','建德','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','JianDe');");
E_D("replace into `qb_zone` values('149','26','富阳','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','FuYang');");
E_D("replace into `qb_zone` values('150','26','临安','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','LinAn');");
E_D("replace into `qb_zone` values('151','26','桐庐','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','TongLu');");
E_D("replace into `qb_zone` values('152','26','淳安','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ChunAn');");
E_D("replace into `qb_zone` values('153','56','思明','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','SiMing');");
E_D("replace into `qb_zone` values('154','56','湖里','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','HuLi');");
E_D("replace into `qb_zone` values('155','56','集美','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','JiMei');");
E_D("replace into `qb_zone` values('156','56','海沧','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','HaiCang');");
E_D("replace into `qb_zone` values('157','56','同安','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','TongAn');");
E_D("replace into `qb_zone` values('158','56','翔安','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XiangAn');");
E_D("replace into `qb_zone` values('159','56','厦门高校','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XiaMenGaoXiao');");
E_D("replace into `qb_zone` values('160','6','福田','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','FuTian');");
E_D("replace into `qb_zone` values('161','6','罗湖','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','LuoHu');");
E_D("replace into `qb_zone` values('162','6','南山','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','NanShan');");
E_D("replace into `qb_zone` values('163','6','盐田','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','YanTian');");
E_D("replace into `qb_zone` values('164','6','宝安','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','BaoAn');");
E_D("replace into `qb_zone` values('165','6','龙岗','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','LongGang');");
E_D("replace into `qb_zone` values('166','103','长安','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ChangAn');");
E_D("replace into `qb_zone` values('167','103','桥东','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','QiaoDong');");
E_D("replace into `qb_zone` values('168','103','桥西','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','QiaoXi');");
E_D("replace into `qb_zone` values('169','103','新华','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XinHua');");
E_D("replace into `qb_zone` values('170','103','裕华','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','YuHua');");
E_D("replace into `qb_zone` values('171','103','井陉矿区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','JingKuangQu');");
E_D("replace into `qb_zone` values('172','103','辛集市','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XinJiShi');");
E_D("replace into `qb_zone` values('173','103','藁城市','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ChengShi');");
E_D("replace into `qb_zone` values('174','103','晋州市','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','JinZhouShi');");
E_D("replace into `qb_zone` values('175','103','新乐市','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XinLeShi');");
E_D("replace into `qb_zone` values('176','103','鹿泉市','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','LuQuanShi');");
E_D("replace into `qb_zone` values('177','103','井陉县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','JingXian');");
E_D("replace into `qb_zone` values('178','103','正定县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ZhengDingXian');");
E_D("replace into `qb_zone` values('179','103','栾城县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ChengXian');");
E_D("replace into `qb_zone` values('180','103','行唐县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','XingTangXian');");
E_D("replace into `qb_zone` values('181','103','灵寿县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','LingShouXian');");
E_D("replace into `qb_zone` values('182','103','高邑县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','GaoYiXian');");
E_D("replace into `qb_zone` values('183','103','深泽县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ShenZeXian');");
E_D("replace into `qb_zone` values('184','103','赞皇县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ZanHuangXian');");
E_D("replace into `qb_zone` values('185','103','无极县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','WuJiXian');");
E_D("replace into `qb_zone` values('186','103','平山县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','PingShanXian');");
E_D("replace into `qb_zone` values('187','103','元氏县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','YuanShiXian');");
E_D("replace into `qb_zone` values('188','103','赵　县','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','ZhaoXian');");
E_D("replace into `qb_zone` values('189','103','开发区','0','0','0','','0','0','','','','','','','0','','','1','','','','','0','','KaiFaQu');");

require("../../inc/footer.php");
?>