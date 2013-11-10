INSERT INTO `qb_module` (`id`, `type`, `name`, `pre`, `dirname`, `domain`, `admindir`, `config`, `list`, `admingroup`, `adminmember`, `ifclose`, `ifsys`) VALUES(50, 2, '装修频道', 'zhuangxiu_', 'zhuangxiu', '', '', 'a:7:{s:12:"list_PhpName";s:18:"list.php?&fid=$fid";s:12:"show_PhpName";s:29:"bencandy.php?&fid=$fid&id=$id";s:8:"MakeHtml";N;s:14:"list_HtmlName1";N;s:14:"show_HtmlName1";N;s:14:"list_HtmlName2";N;s:14:"show_HtmlName2";N;}', 103, '', '', 0, 0);



#
# 导出表中的数据 `qb_label`
#

INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES (1199, '', 0, 0, 'zhuangxiu_index1', 'rollpic', 0, 'a:8:{s:13:"tplpart_1code";s:1022:"<link rel="stylesheet" type="text/css" href="http://www_qibosoft_com/zhuangxiu/images/default/slide.css">\r\n<ul class="slidePic">\r\n<!--\r\nEOT;\r\n$i=0;\r\nforeach($listdb AS $rs){extract($rs);\r\n$i++;\r\nif($i==1)$curword="class=cur";\r\nelse $curword="";\r\nprint <<<EOT\r\n-->\r\n    <li $curword><a href="$url"  target="_blank"><IMG alt="$title" src="$picurl"/></a></li>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n</ul>\r\n<ul class="slideTxt">\r\n<!--\r\nEOT;\r\n$i=0;\r\nforeach($listdb AS $rs){extract($rs);\r\n$i++;\r\nif($i==1)$curword="class=cur";\r\nelse $curword="";\r\nprint <<<EOT\r\n-->\r\n    <li $curword><a href="$url"  target="_blank" title="$title">$title</a></li>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n</ul>\r\n<ul class="slideop">\r\n<span></span>\r\n<!--\r\nEOT;\r\n$i=0;\r\nforeach($listdb AS $rs){extract($rs);\r\n$i++;\r\nif($i==1)$curword="class=cur";\r\nelse $curword="";\r\nprint <<<EOT\r\n-->\r\n    <li $curword>$i</li>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n</ul>\r\n<script type="text/javascript" src="http://www_qibosoft_com/zhuangxiu/images/default/slide.js"></script>";s:8:"rolltype";s:1:"2";s:5:"width";s:0:"";s:6:"height";s:0:"";s:6:"picurl";a:5:{i:1;s:55:"zhuangxiu/20121025_de98bcc4e542d02398caGMf7GssbHGEc.jpg";i:2;s:55:"zhuangxiu/20121025_e347471b25a9473f0544LOX3OBFqVOij.jpg";i:3;s:55:"zhuangxiu/20121025_d4d2fdb9a966763224b1diSdQdjA42Ss.jpg";i:4;s:55:"zhuangxiu/20121025_f03f4adc1990a8ea41efqG2kHCl6XgN2.jpg";i:5;s:55:"zhuangxiu/20120808_43a16b39ddd819bdb6aeDmmYrjZohsLt.jpg";}s:7:"piclink";a:5:{i:1;s:58:"http://www_qibosoft_com/zhuangxiu/bencandy.php?fid=2&id=49";i:2;s:58:"http://www_qibosoft_com/zhuangxiu/bencandy.php?fid=2&id=43";i:3;s:58:"http://www_qibosoft_com/zhuangxiu/bencandy.php?fid=2&id=45";i:4;s:58:"http://www_qibosoft_com/zhuangxiu/bencandy.php?fid=2&id=48";i:5;s:58:"http://www_qibosoft_com/zhuangxiu/bencandy.php?fid=2&id=44";}s:6:"picalt";a:5:{i:1;s:36:"欧式现代风格卧室背景墙窗帘装修效果图";i:2;s:37:"2012客厅装修图片大全 小客厅装修效果图";i:3;s:38:"简约风格客厅沙发装修效果图大全2012图片";i:4;s:30:"50平米小户型客厅沙发装修效果图";i:5;s:35:"60平小户型美式风格卧室装修 小资情调";}s:11:"pic_city_id";i:0;}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"21";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1363053664, 0, 50, 0, 0, 'mb_4.0');
    
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index2', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:69:"<div class="list">·<a href="$url" target=''_blank''>$title</a></div>\r\n";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:24:"/common_title/0title.jpg";s:6:"DivTpl";i:1;s:3:"fid";i:1;s:8:"moduleid";N;s:5:"stype";s:1:"t";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"hits";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"6";s:3:"sql";s:115:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''1'' ) ORDER BY hits DESC LIMIT 0,6 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index3', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:86:"<dl>\r\n<dt><a href="$url" target="_blank">$title</a></dt>\r\n<dd>$content</dd>\r\n</dl>\r\n\r\n";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:3:"120";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:29:"/common_content/content_1.jpg";s:6:"DivTpl";i:1;s:3:"fid";i:4;s:8:"moduleid";N;s:5:"stype";s:1:"c";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"2";s:3:"sql";s:115:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''4'' ) ORDER BY list DESC LIMIT 0,2 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"50";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352191358, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index4', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:70:"<div class="list">·<A HREF="$url" target=''_blank''>$title</a></div>\\\r\n";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:24:"/common_title/0title.jpg";s:6:"DivTpl";i:1;s:3:"fid";i:4;s:8:"moduleid";N;s:5:"stype";s:1:"t";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"8";s:3:"sql";s:115:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''4'' ) ORDER BY list DESC LIMIT 2,8 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"50";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"3";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index5', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:70:"<div class="list">·<a href="$url" target=''_blank'' >$title</a></div>\r\n";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:24:"/common_title/0title.jpg";s:6:"DivTpl";i:1;s:3:"fid";i:4;s:8:"moduleid";N;s:5:"stype";s:1:"t";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"hits";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"4";s:3:"sql";s:115:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''4'' ) ORDER BY hits DESC LIMIT 0,4 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"50";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index6', 'pic', 0, 'a:5:{s:6:"imgurl";s:35:"../zhuangxiu/images/default/ad1.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"240";s:6:"height";s:3:"140";s:11:"pic_city_id";i:0;}', 'a:3:{s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index7', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:692:"<!--\r\nEOT;\r\n$i=0;\r\n$pricedb=array("未知","5000元以内","1万元以内","2万元以内","3万元以内","4万元以内","5万元以内","面议");\r\nforeach($listdb AS $rs){extract($rs);\r\n$i++;\r\nprint <<<EOT\r\n-->\r\n<ul class="list$i">\r\n<li class="li1"><A HREF="$url" target=''_blank''>$title</a></li>\r\n<li class="li0">{$pricedb[$price]}</li>\r\n<li class="li2">{$acreage}平方米</li>\r\n<li class="li3">$station</li>\r\n<li class="li4">{$time_Y}-{$time_m}-{$time_d}</li>\r\n</ul>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n\r\n<ul class="list$i">\r\n<li class="li1"><A HREF="$url" target=''_blank''>$title</a></li>\r\n<li class="li2">{$acreage}平方米</li>\r\n<li class="li3">$station</li>\r\n<li class="li4">{$time_Y}-{$time_m}-{$time_d}</li>\r\n</ul>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:24:"/common_title/0title.jpg";s:6:"DivTpl";i:1;s:3:"fid";i:1;s:8:"moduleid";N;s:5:"stype";s:1:"t";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:2:"10";s:3:"sql";s:116:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''1'' ) ORDER BY list DESC LIMIT 0,10 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352264313, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index8', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:197:"<div class="listpic">\r\n<div class="img"><span><a href="$url" target=''_blank''><img src="$picurl" height="60"></a></span></div>\r\n<div class="t"><a href="$url" target=''_blank''>$title</a></div>\r\n</div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:24:"/common_title/0title.jpg";s:6:"DivTpl";i:1;s:3:"fid";i:2;s:8:"moduleid";N;s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"6";s:3:"sql";s:128:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND ispic=1  AND fid=''2'' ) ORDER BY list DESC LIMIT 0,6 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352267763, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index9', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:197:"<div class="listpic">\r\n<div class="img"><span><a href="$url" target=''_blank''><img src="$picurl" height="60"></a></span></div>\r\n<div class="t"><a href="$url" target=''_blank''>$title</a></div>\r\n</div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:5;s:8:"moduleid";N;s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:10:"levelstime";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:2:"10";s:3:"sql";s:135:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND ispic=1  AND fid=''5'' ) ORDER BY levelstime DESC LIMIT 0,10 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index10', 'pic', 0, 'a:5:{s:6:"imgurl";s:35:"../zhuangxiu/images/default/ad2.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"980";s:6:"height";s:2:"90";s:11:"pic_city_id";i:0;}', 'a:3:{s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index11', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:479:"<!--\r\nEOT;\r\nforeach($listdb AS $rs){extract($rs);\r\n$picurl=str_replace(".gif","",$picurl);\r\n$skill=str_replace("/#/","/",$skill);\r\nprint <<<EOT\r\n-->\r\n<dl>\r\n<dt><span><a href="$url" target=''_blank''><img src="$picurl" height="90"></a></span></dt>\r\n<dd>\r\n<div class="t"><a href="$url" target=''_blank''>$title</a></div>\r\n<div>$in_company</div>\r\n<div>从业经验：<span>{$experience}</span></div>\r\n<div>设计专长：<span>{$skill}</span></div>\r\n</dd>\r\n</dl>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:6;s:8:"moduleid";N;s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"4";s:3:"sql";s:128:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND ispic=1  AND fid=''6'' ) ORDER BY list DESC LIMIT 0,4 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"20";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352277956, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index12', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:222:"<dt class="dt1">第一讲/装修前期</dt>\r\n<dd>\r\n<!--\r\nEOT;\r\nforeach($listdb AS $rs){extract($rs);\r\nprint <<<EOT\r\n-->\r\n<div class="list">·<a href="$url" target=''_blank''>$title</a></div>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n</dd>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:4;s:8:"moduleid";N;s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"3";s:3:"sql";s:115:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''4'' ) ORDER BY list DESC LIMIT 0,3 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352279063, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index13', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:222:"<dt class="dt2">第二讲/设计天地</dt>\r\n<dd>\r\n<!--\r\nEOT;\r\nforeach($listdb AS $rs){extract($rs);\r\nprint <<<EOT\r\n-->\r\n<div class="list">·<a href="$url" target=''_blank''>$title</a></div>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n</dd>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:4;s:8:"moduleid";N;s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"hits";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"3";s:3:"sql";s:115:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''4'' ) ORDER BY hits DESC LIMIT 0,3 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352279077, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index14', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:222:"<dt class="dt3">第三讲/建材选购</dt>\r\n<dd>\r\n<!--\r\nEOT;\r\nforeach($listdb AS $rs){extract($rs);\r\nprint <<<EOT\r\n-->\r\n<div class="list">·<a href="$url" target=''_blank''>$title</a></div>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n</dd>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:2;s:8:"moduleid";N;s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"3";s:3:"sql";s:115:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''2'' ) ORDER BY list DESC LIMIT 0,3 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352279087, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index15', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:222:"<dt class="dt4">第四讲/施工监理</dt>\r\n<dd>\r\n<!--\r\nEOT;\r\nforeach($listdb AS $rs){extract($rs);\r\nprint <<<EOT\r\n-->\r\n<div class="list">·<a href="$url" target=''_blank''>$title</a></div>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n</dd>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:3;s:8:"moduleid";N;s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"3";s:3:"sql";s:115:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''3'' ) ORDER BY list DESC LIMIT 0,3 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352279101, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index16', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:222:"<dt class="dt5">第五讲/验收知识</dt>\r\n<dd>\r\n<!--\r\nEOT;\r\nforeach($listdb AS $rs){extract($rs);\r\nprint <<<EOT\r\n-->\r\n<div class="list">·<a href="$url" target=''_blank''>$title</a></div>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n</dd>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:5;s:8:"moduleid";N;s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"3";s:3:"sql";s:115:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''5'' ) ORDER BY list DESC LIMIT 0,3 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352279112, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index17', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:222:"<dt class="dt6">第六讲/家居布置</dt>\r\n<dd>\r\n<!--\r\nEOT;\r\nforeach($listdb AS $rs){extract($rs);\r\nprint <<<EOT\r\n-->\r\n<div class="list">·<a href="$url" target=''_blank''>$title</a></div>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n</dd>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:1;s:8:"moduleid";N;s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"3";s:3:"sql";s:115:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''1'' ) ORDER BY list DESC LIMIT 0,3 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352279123, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index18', 'Info_shop_', 1, 'a:31:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:265:"<div class="listpic">\r\n	<div class="img"><span><a href="$url" target="_blank"><img src="$picurl" height="110"/></a></span></div>\r\n	<div class="t"><a href="$url" target="_blank" class="title">$title</a></div>\r\n	<div class="pric">￥<span>{$price}</span></div>\r\n</div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:5:"shop_";s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";N;s:8:"moduleid";N;s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"5";s:3:"sql";s:108:"SELECT * FROM qb_shop_content  WHERE city_id=''$GLOBALS[city_id]''  AND ispic=1  ORDER BY list DESC LIMIT 0,5 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index19', 'Info_coupon_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:83:"<div class="list$i"><span>$i</span><a href="$url" target=''_blank'' >$title</a></div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:7:"coupon_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:24:"/common_title/0title.jpg";s:6:"DivTpl";i:1;s:5:"fiddb";N;s:8:"moduleid";N;s:5:"stype";s:1:"t";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"8";s:3:"sql";s:96:"SELECT * FROM qb_coupon_content  WHERE city_id=''$GLOBALS[city_id]''  ORDER BY list DESC LIMIT 0,8";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"50";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_rightad', 'pic', 0, 'a:5:{s:6:"imgurl";s:36:"../zhuangxiu/images/default/rad1.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"240";s:6:"height";s:2:"85";s:11:"pic_city_id";i:0;}', 'a:3:{s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 2, 50, 0, 0, 'green_htm');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_rightad', 'pic', 0, 'a:5:{s:6:"imgurl";s:36:"../zhuangxiu/images/default/rad1.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"240";s:6:"height";s:2:"85";s:11:"pic_city_id";i:0;}', 'a:3:{s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 3, 50, 0, 0, 'green_htm');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_rightad1', 'pic', 0, 'a:5:{s:6:"imgurl";s:36:"../zhuangxiu/images/default/rad2.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"240";s:6:"height";s:3:"200";s:11:"pic_city_id";i:0;}', 'a:3:{s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 2, 50, 0, 0, 'green_htm');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_listdesiganer', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:642:"<!--\r\nEOT;\r\nforeach($listdb AS $rs){extract($rs);\r\n$picurl=str_replace(".gif","",$picurl);\r\n$skill=Display_Type1($skill);\r\n$design_style=Display_Type1($design_style);\r\nprint <<<EOT\r\n-->\r\n<dl>\r\n<dt><span><a href="$url" target=''_blank''><img src="$picurl" height="100"></a></span></dt>\r\n<dd>\r\n<div class="t"><a href="$url" target=''_blank''>$title</a></div>\r\n<div class="c"><a href="bencandy.php?fid=5&id=$company_id" target=''_blank''>$in_company</a></div>\r\n<div>从业经验：<span>{$experience}</span></div>\r\n<div>设计专长：<span>{$skill}</span></div>\r\n<div>设计风格：<span>{$design_style}</span></div>\r\n</dd>\r\n</dl>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:6;s:8:"moduleid";N;s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"3";s:3:"sql";s:128:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND ispic=1  AND fid=''6'' ) ORDER BY list DESC LIMIT 0,3 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"20";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352864721, 3, 50, 0, 0, 'green_htm');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_listdemo', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:256:"<div class="listpic">\r\n<div class="img"><span><a href="$url" target=''_blank''><img src="$picurl" height="120"></a></span></div>\r\n<div class="t"><a href="$url" target=''_blank''>$title</a></div>\r\n<div class="m">{$acreage}平方米 {$total_price}万元</div>\r\n</div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:2;s:8:"moduleid";N;s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"5";s:3:"sql";s:128:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND ispic=1  AND fid=''2'' ) ORDER BY list DESC LIMIT 0,5 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352863517, 3, 50, 0, 0, 'green_htm');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_listdemo1', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:256:"<div class="listpic">\r\n<div class="img"><span><a href="$url" target=''_blank''><img src="$picurl" height="110"></a></span></div>\r\n<div class="t"><a href="$url" target=''_blank''>$title</a></div>\r\n<div class="m">{$acreage}平方米 {$total_price}万元</div>\r\n</div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:2;s:8:"moduleid";N;s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:2:"id";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"4";s:3:"sql";s:126:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND ispic=1  AND fid=''2'' ) ORDER BY id DESC LIMIT 0,4 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1353054628, 3, 50, 0, 0, 'green_htm');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_listdemo2', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:256:"<div class="listpic">\r\n<div class="img"><span><a href="$url" target=''_blank''><img src="$picurl" height="120"></a></span></div>\r\n<div class="t"><a href="$url" target=''_blank''>$title</a></div>\r\n<div class="m">{$acreage}平方米 {$total_price}万元</div>\r\n</div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:2;s:8:"moduleid";N;s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"hits";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"4";s:3:"sql";s:128:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND ispic=1  AND fid=''2'' ) ORDER BY hits DESC LIMIT 0,4 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1353054663, 3, 50, 0, 0, 'green_htm');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_rightad3', 'pic', 0, 'a:5:{s:6:"imgurl";s:36:"../zhuangxiu/images/default/rad1.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"240";s:6:"height";s:2:"85";s:11:"pic_city_id";i:0;}', 'a:3:{s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 2, 50, 0, 0, 'green_htm');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_rightad4', 'pic', 0, 'a:5:{s:6:"imgurl";s:35:"../zhuangxiu/images/default/ad1.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"240";s:6:"height";s:3:"135";s:11:"pic_city_id";i:0;}', 'a:3:{s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 2, 50, 0, 0, 'green_htm');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_bencandy_banner', 'pic', 0, 'a:5:{s:6:"imgurl";s:38:"../zhuangxiu/images/default/banner.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"980";s:6:"height";s:3:"150";s:11:"pic_city_id";i:0;}', 'a:3:{s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 3, 50, 0, 0, 'green_htm');





# --------------------------------------------------------

#
# 表的结构 `qb_zhuangxiu_buyad`
#

DROP TABLE IF EXISTS qb_zhuangxiu_buyad;
CREATE TABLE `qb_zhuangxiu_buyad` (
  `aid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `sortid` mediumint(7) NOT NULL DEFAULT '0',
  `cityid` mediumint(7) NOT NULL DEFAULT '0',
  `id` int(10) NOT NULL DEFAULT '0',
  `mid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `begintime` int(10) NOT NULL DEFAULT '0',
  `endtime` int(10) NOT NULL DEFAULT '0',
  `money` mediumint(7) NOT NULL DEFAULT '0',
  `hits` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`aid`),
  KEY `sortid` (`sortid`,`money`,`endtime`,`cityid`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

#
# 导出表中的数据 `qb_zhuangxiu_buyad`
#


# --------------------------------------------------------

#
# 表的结构 `qb_zhuangxiu_class`
#

DROP TABLE IF EXISTS qb_zhuangxiu_class;
CREATE TABLE `qb_zhuangxiu_class` (
  `fid` int(7) NOT NULL AUTO_INCREMENT,
  `fup` int(7) NOT NULL DEFAULT '0',
  `name` varchar(60) NOT NULL DEFAULT '',
  `list` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fid`),
  KEY `fup` (`fup`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

#
# 导出表中的数据 `qb_zhuangxiu_class`
#


# --------------------------------------------------------

#
# 表的结构 `qb_zhuangxiu_collection`
#

DROP TABLE IF EXISTS qb_zhuangxiu_collection;
CREATE TABLE `qb_zhuangxiu_collection` (
  `cid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`)
) TYPE=MyISAM AUTO_INCREMENT=2 ;

#
# 导出表中的数据 `qb_zhuangxiu_collection`
#
INSERT INTO `qb_zhuangxiu_collection` VALUES ('1','15','1','1352359114');

# --------------------------------------------------------

#
# 表的结构 `qb_zhuangxiu_comments`
#

DROP TABLE IF EXISTS qb_zhuangxiu_comments;
CREATE TABLE `qb_zhuangxiu_comments` (
  `cid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `cuid` int(7) NOT NULL DEFAULT '0',
  `type` tinyint(2) NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `fid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `uid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `ip` varchar(15) NOT NULL DEFAULT '',
  `icon` tinyint(3) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `flowers` smallint(4) NOT NULL DEFAULT '0',
  `egg` smallint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`),
  KEY `type` (`type`)
) TYPE=MyISAM AUTO_INCREMENT=11 ;

#
# 导出表中的数据 `qb_zhuangxiu_comments`
#

INSERT INTO `qb_zhuangxiu_comments` VALUES ('1','1','0','15','1','1','admin','1352362549','装修公司需要信誉好、施工工艺好的，细节详谈。','127.0.0.1','0','1','0','0');
INSERT INTO `qb_zhuangxiu_comments` VALUES ('2','1','0','15','1','1','admin','1352431177','本周日方便量房，提前电话预约，新房，结婚用的，精装','127.0.0.1','0','1','1','0');
INSERT INTO `qb_zhuangxiu_comments` VALUES ('3','1','0','15','1','0','zhangsan','1352434415','丰台区蒲黄榆附近58平米旧房翻新','127.0.0.1','0','1','1','1');
INSERT INTO `qb_zhuangxiu_comments` VALUES ('4','1','0','19','4','1','admin','1352702045','','127.0.0.1','0','1','1','0');
INSERT INTO `qb_zhuangxiu_comments` VALUES ('5','1','0','19','4','1','admin','1352702098','装修第一网结合当前的节气，并联系一些业主的经验教训，设计师从以下几方面作出提醒……','127.0.0.1','0','1','0','0');
INSERT INTO `qb_zhuangxiu_comments` VALUES ('6','1','0','22','4','0','lisi','1352702401','以期能为宝贝们创造良好舒适的成长环境。<br> <br>','127.0.0.1','0','1','0','0');
INSERT INTO `qb_zhuangxiu_comments` VALUES ('7','1','0','42','5','1','admin','1352787867','愿我们共同携手努力创造出更加完美的家居装饰和舒适环境。','127.0.0.1','0','1','0','0');
INSERT INTO `qb_zhuangxiu_comments` VALUES ('8','1','0','38','5','1','admin','1352864868','北京北利祥和装饰工程有限公司','127.0.0.1','0','1','0','0');
INSERT INTO `qb_zhuangxiu_comments` VALUES ('9','1','0','3','6','1','admin','1353314721','踏踏实实为客户做设计，<br><br>认认真真的工作！<br>','127.0.0.1','0','1','0','0');
INSERT INTO `qb_zhuangxiu_comments` VALUES ('10','1','0','3','6','1','admin','1353314909','追求最完美的设计给客户！','127.0.0.1','0','1','0','0');


# --------------------------------------------------------

#
# 表的结构 `qb_zhuangxiu_config`
#

DROP TABLE IF EXISTS qb_zhuangxiu_config;
CREATE TABLE `qb_zhuangxiu_config` (
  `c_key` varchar(50) NOT NULL DEFAULT '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY (`c_key`)
) TYPE=MyISAM;

#
# 导出表中的数据 `qb_zhuangxiu_config`
#

INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_webOpen','1','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_allowViewList','4','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_allowViewContent','3','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Limit_postOne','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_allowpost','2','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_contact','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_titleName','姓名','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('SEO_keywords','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_allowsearch','2,8','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('postLouPanNeedQy','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('module_pre','zhuangxiu_','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_DelEndtime','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('module_close','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('CollectArticleNum','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('PostInfoMoney','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('SEO_description','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_metakeywords','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('module_id','50','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_areaname','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('SEO_title','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('rand_num_mktime','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_TopNum','5','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_TopDay','10','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_TopMoney','100','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_TopColor','#FF0000','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_GroupCommentYzImg','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('GroupPassYz','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('ForbidPostIp','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_cityPost','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_forbidOutPost','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_MemberPostRepeat','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_MemberPostPicNum','20','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_MemberDayPostNum','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_GuestPostPicNum','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_GuestDayPostNum','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_GuestPostRepeat','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_MemberPostMoney','1','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('ForbidPostMember','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('GroupPostInfo','2','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_ClosePostWhy','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_ClosePost','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_GroupPostYzImg','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_webname','装修频道','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('postSellHouseNeedQy','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('postHireHouseQy','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_UseEndTime','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_ShowNoYz','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('if_GGmap','1','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_showday','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('UpdatePostTime','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_ReportDB','虚假信息\r\n过期信息\r\n违法信息','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('IF_Private_tpl','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Private_tpl_head','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Private_tpl_foot','','');

# --------------------------------------------------------

#
# 表的结构 `qb_zhuangxiu_content`
#

DROP TABLE IF EXISTS qb_zhuangxiu_content;
CREATE TABLE `qb_zhuangxiu_content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `xiaoqu_id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `fname` varchar(50) NOT NULL DEFAULT '',
  `info` tinyint(2) NOT NULL DEFAULT '0',
  `hits` mediumint(7) NOT NULL DEFAULT '0',
  `comments` mediumint(7) NOT NULL DEFAULT '0',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `list` varchar(10) NOT NULL DEFAULT '',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `titlecolor` varchar(15) NOT NULL DEFAULT '',
  `fonttype` tinyint(1) NOT NULL DEFAULT '0',
  `picurl` varchar(150) NOT NULL DEFAULT '',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `yzer` varchar(30) NOT NULL DEFAULT '',
  `yztime` int(10) NOT NULL DEFAULT '0',
  `levels` tinyint(2) NOT NULL DEFAULT '0',
  `levelstime` int(10) NOT NULL DEFAULT '0',
  `keywords` varchar(100) NOT NULL DEFAULT '',
  `jumpurl` varchar(150) NOT NULL DEFAULT '',
  `iframeurl` varchar(150) NOT NULL DEFAULT '',
  `style` varchar(15) NOT NULL DEFAULT '',
  `head_tpl` varchar(150) NOT NULL DEFAULT '',
  `main_tpl` varchar(150) NOT NULL DEFAULT '',
  `foot_tpl` varchar(100) NOT NULL DEFAULT '',
  `target` tinyint(1) NOT NULL DEFAULT '0',
  `ishtml` tinyint(1) NOT NULL DEFAULT '0',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `lastfid` mediumint(7) NOT NULL DEFAULT '0',
  `money` mediumint(7) NOT NULL DEFAULT '0',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  `editer` varchar(30) NOT NULL DEFAULT '',
  `edittime` int(10) NOT NULL DEFAULT '0',
  `begintime` int(10) NOT NULL DEFAULT '0',
  `endtime` int(10) NOT NULL DEFAULT '0',
  `config` text NOT NULL,
  `lastview` int(10) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  `zone_id` mediumint(7) NOT NULL DEFAULT '0',
  `street_id` mediumint(7) NOT NULL DEFAULT '0',
  `editpwd` varchar(32) NOT NULL DEFAULT '',
  `showday` mediumint(4) NOT NULL DEFAULT '0',
  `visit_log` text NOT NULL,
  `visit_num` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `telephone` varchar(30) NOT NULL DEFAULT '',
  `mobphone` varchar(12) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `oicq` varchar(11) NOT NULL DEFAULT '',
  `msn` varchar(50) NOT NULL DEFAULT '',
  `linkman` varchar(20) NOT NULL DEFAULT '',
  `postcode` varchar(6) NOT NULL DEFAULT '',
  `address` varchar(250) NOT NULL DEFAULT '',
  `weburl` varchar(150) NOT NULL DEFAULT '',
  `fax` varchar(30) NOT NULL DEFAULT '',
  `maps` varchar(50) NOT NULL DEFAULT '',
  `picnum` smallint(4) NOT NULL DEFAULT '0',
  `replytime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `ispic` (`ispic`),
  KEY `city_id` (`city_id`),
  KEY `zone_id` (`zone_id`),
  KEY `street_id` (`street_id`),
  KEY `list` (`list`,`fid`,`city_id`,`yz`),
  KEY `hits` (`hits`),
  KEY `xiaoqu_id` (`xiaoqu_id`)
) TYPE=MyISAM AUTO_INCREMENT=52 ;

#
# 导出表中的数据 `qb_zhuangxiu_content`
#

INSERT INTO `qb_zhuangxiu_content` VALUES (1, '张小雪', 6, 0, 6, '设计师', 0, 4, 0, 1351148407, '1351148407', 1, 'admin', '', 0, 'qb_zhuangxiu_/6/1_20121025151007_wy1rm.jpg.gif', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1352798857, 1, 0, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', '', '', '', '', '', '', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (2, '林春梅', 6, 0, 6, '设计师', 0, 10, 0, 1351148525, '1351148525', 1, 'admin', '', 0, 'qb_zhuangxiu_/6/1_20121025151005_q0oku.jpg.gif', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353317815, 1, 0, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', '', '', '', '', '', '', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (3, '何雪', 6, 0, 6, '设计师', 0, 62, 2, 1351148621, '1351148621', 1, 'admin', '', 0, 'qb_zhuangxiu_/6/1_20121025151041_314jy.jpg.gif', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1354602127, 1, 0, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', '', '', '', '', '', '', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (4, '范婷婷', 6, 0, 6, '设计师', 0, 53, 0, 1351148705, '1351148705', 1, 'admin', '', 0, 'qb_zhuangxiu_/6/1_20121025151005_g4w9m.jpg.gif', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1359362623, 1, 0, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', '', '', '', '', '', '', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (5, '北京昌平区纳帕澜郡68平米新房装修', 1, 0, 1, '装修招标', 0, 1, 0, 1351148834, '1351148834', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351148835, 1, 13, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (6, '朝阳区酒仙桥附近 93平米旧房翻新', 1, 0, 1, '装修招标', 0, 2, 0, 1351148920, '1351148920', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353663645, 1, 0, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (7, '丰台区蒲黄榆附近58平米旧房翻新', 1, 0, 1, '装修招标', 0, 1, 0, 1351148974, '1351148974', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351148975, 1, 7, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (8, '丰台区卢沟桥附近80平米新房装修', 1, 0, 1, '装修招标', 0, 1, 0, 1351149013, '1351149013', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149014, 1, 7, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (9, '海淀区军事博物馆附近70平米旧房翻新', 1, 0, 1, '装修招标', 0, 1, 0, 1351149054, '1351149054', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149055, 1, 1, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (10, '朝阳区盛世家园150平米旧房翻新', 1, 0, 1, '装修招标', 0, 4, 0, 1351149094, '1351149094', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1352258361, 1, 2, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (11, '宣武区大栅栏附近20平米旧房翻新', 1, 0, 1, '装修招标', 0, 1, 0, 1351149126, '1351149126', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149127, 1, 6, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (12, '昌平区天通苑120平米新房装修', 1, 0, 1, '装修招标', 0, 5, 0, 1351149164, '1351149164', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1352438848, 1, 0, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (13, '海淀区上地领秀新硅谷480平米办公楼装修', 1, 0, 1, '装修招标', 0, 11, 0, 1351149215, '1351149215', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1352438791, 1, 1, 11, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (14, '房山区乐活城87平米新房装修', 1, 0, 1, '装修招标', 0, 2, 0, 1351149247, '1351149247', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353650743, 1, 9, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (15, '海淀区西三环120平米新房装修', 1, 0, 1, '装修招标', 0, 193, 3, 1351149286, '1351149286', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353650798, 1, 1, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (16, '油漆市场鱼龙混杂 选对油漆我来出招', 4, 0, 4, '装修学堂', 0, 1, 0, 1351149404, '1351149404', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149405, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (17, '节省是硬道理 家居装修巧选墙纸', 4, 0, 4, '装修学堂', 0, 3, 0, 1351149443, '1351149443', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353663642, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (18, '菜鸟必学：装修程序20步，轻松搞定家装！', 4, 0, 4, '装修学堂', 0, 1, 0, 1351149476, '1351149476', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149477, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (19, '细节决定装修成败！不得不看的注意事项！', 4, 0, 4, '装修学堂', 0, 31, 1, 1351149509, '1351149509', 1, 'admin', '', 0, 'qb_zhuangxiu_/4/1_20121123131153_gseby.jpg.gif', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1354260320, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (20, '好的办公室设计，人身处其中会很“顺” ！', 4, 0, 4, '装修学堂', 0, 2, 0, 1351149570, '1351149570', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1352702720, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (21, '定制完美家居产品 如何衔接装修流程！', 4, 0, 4, '装修学堂', 0, 1, 0, 1351149609, '1351149609', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149610, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (22, '儿童房规划设计 必知4个注意事项！', 4, 0, 4, '装修学堂', 0, 5, 1, 1351149640, '1351149640', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1352703111, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (23, '居室朝向不如意 设计绝招巧调整！', 4, 0, 4, '装修学堂', 0, 2, 0, 1351149674, '1351149674', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353300449, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (24, '隐蔽施工要注意 安全家居靠细节', 4, 0, 4, '装修学堂', 0, 1, 0, 1351149709, '1351149709', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149710, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (25, '家装中橱柜五金台面预算要做足 切记因小失大！', 4, 0, 4, '装修学堂', 0, 3, 0, 1351149737, '1351149737', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1354259048, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (26, '油漆涂料“抗甲醛”热 装一网提醒谨防被忽悠', 4, 0, 4, '装修学堂', 0, 2, 0, 1351149763, '1351149763', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353648660, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (27, '享受舒适休憩之地 打造森林系绿意阳台！', 4, 0, 4, '装修学堂', 0, 51, 0, 1351149800, '1351149800', 1, 'admin', '', 0, 'qb_zhuangxiu_/4/1_20121123131128_cqiwg.jpg.gif', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353906173, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (28, '空间巧收纳 家居冬日瘦身12妙招', 3, 0, 3, '装修日志', 0, 1, 0, 1351149861, '1351149861', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149862, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (29, '编辑总结经验：教您拥有环保健康住宅空间!', 3, 0, 3, '装修日志', 0, 2, 0, 1351149885, '1351149885', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353663637, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (30, '居家生活宝典：魔力镜面提亮家居美感', 3, 0, 3, '装修日志', 0, 1, 0, 1351149909, '1351149909', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149910, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (31, '小空间变大经验之二：间接照明减少阻隔变空', 3, 0, 3, '装修日志', 0, 1, 0, 1351149936, '1351149936', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149937, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (32, '有爱就有温暖 冬季家居升温五妙招！', 3, 0, 3, '装修日志', 0, 17, 0, 1351149961, '1351149961', 1, 'admin', '', 0, 'qb_zhuangxiu_/3/1_20121123131147_owsnb.jpg.gif', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353650726, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (33, '框架、座垫等综合兼顾 五步选优质沙发', 3, 0, 3, '装修日志', 0, 1, 0, 1351149984, '1351149984', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149986, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (34, '装修新房 不挑剔怎么行?不会挑也不行？', 3, 0, 3, '装修日志', 0, 1, 0, 1351150011, '1351150011', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351150012, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (35, '装修达人支招：教您避免小户型装修空间浪费', 3, 0, 3, '装修日志', 0, 1, 0, 1351150040, '1351150040', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351150041, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (36, '装修这道“菜”不好吃 要拿准五大技巧八大注意', 3, 0, 3, '装修日志', 0, 1, 0, 1351150064, '1351150064', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351150066, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (37, '家庭装修分为三个档次 9招教您选择装修档次！', 3, 0, 3, '装修日志', 0, 11, 0, 1351150088, '1351150088', 1, 'admin', '', 0, 'qb_zhuangxiu_/3/1_20121123131115_v1qtp.jpg.gif', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353650725, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (38, '北京（鸿达尚品）家居装饰有限公司', 5, 0, 5, '装修公司', 0, 30, 1, 1351150262, '1351150262', 1, 'admin', '', 0, 'zhuangxiu/headphoto_371152.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1363053458, 1, 1, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '北京昌平区集美家具（回龙观店）东二层家装区B2102', '', '', '39.929835374960035,116.33517072961422', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (39, '北京绿缘居装饰设计有限公司', 5, 0, 5, '装修公司', 0, 3, 0, 1351150518, '1351150518', 1, 'admin', '', 0, 'zhuangxiu/headphoto_242450c.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353648699, 1, 7, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '丰台区菜户营东街鹏润家园豪苑大厦A座20层', '', '', '39.89402121811448,116.46975324914547', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (40, '北京北利祥和装饰工程有限公司', 5, 0, 5, '装修公司', 0, 4, 0, 1351150593, '1351150593', 1, 'admin', '', 0, 'zhuangxiu/headphoto_251701c.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1358316422, 1, 0, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '昌平区天通苑太平家园35号楼', '', '', '39.939838924426084,116.45018385217281', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (41, '北京宇华盛建筑装饰工程有限公司', 5, 0, 5, '装修公司', 0, 53, 0, 1351150656, '1351150656', 1, 'admin', '', 0, 'zhuangxiu/headphoto_436469c.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1354675664, 1, 0, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '南三环中路68号自然美大厦', '', '', '39.866489530854295,116.41464994714352', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (42, '北京洲际宏达装饰有限公司', 5, 0, 5, '装修公司', 0, 126, 1, 1351150728, '1351150728', 1, 'admin', '', 0, 'zhuangxiu/headphoto_250408c.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1359362528, 1, 0, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '北京市朝阳区城外诚家居广场', '', '', '39.93510058325899,116.34032057092281', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (43, '2012客厅装修图片大全 小客厅装修效果图', 2, 0, 2, '装修案例', 0, 8, 0, 1351150890, '1351150890', 1, 'admin', '', 0, 'zhuangxiu/20121025_e347471b25a9473f0544LOX3OBFqVOij.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1363054065, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 3, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (44, '60平小户型美式风格卧室装修 小资情调', 2, 0, 2, '装修案例', 0, 47, 0, 1351150960, '1351150960', 1, 'admin', '', 0, 'zhuangxiu/20120808_43a16b39ddd819bdb6aeDmmYrjZohsLt.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1363054063, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 4, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (45, '简约客厅图片 黑白客厅装修效果图', 2, 0, 2, '装修案例', 0, 10, 0, 1351151023, '1351151023', 1, 'admin', '', 0, 'zhuangxiu/20121025_3522af3343f63e47b7373Efed66yXrJD.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1363054060, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 4, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (46, '2012白色卧室效果图 卧室装修效果图大全2012图片', 2, 0, 2, '装修案例', 0, 16, 0, 1351151106, '1351151106', 1, 'admin', '', 0, 'zhuangxiu/20121025_1df70bda985b5aceda79zWnEULUi14ku.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1363054058, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 3, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (47, '简约风格客厅沙发装修效果图大全2012图片', 2, 0, 2, '装修案例', 0, 25, 0, 1351151345, '1351151345', 1, 'admin', '', 0, 'zhuangxiu/20121025_d4d2fdb9a966763224b1diSdQdjA42Ss.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1363054054, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 3, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (48, '50平米小户型客厅沙发装修效果图', 2, 0, 2, '装修案例', 0, 13, 0, 1351151925, '1351151925', 1, 'admin', '', 0, 'zhuangxiu/20121025_f03f4adc1990a8ea41efqG2kHCl6XgN2.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1363054051, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 3, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (49, '欧式现代风格卧室背景墙窗帘装修效果图', 2, 0, 2, '装修案例', 0, 97, 0, 1351152057, '1351152057', 1, 'admin', '', 0, 'zhuangxiu/20121025_de98bcc4e542d02398caGMf7GssbHGEc.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1363054048, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 9, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (50, '房屋田园装修图片', 2, 0, 2, '装修案例', 0, 36, 0, 1351152224, '1351152224', 1, 'admin', '', 0, 'zhuangxiu/20121024_4fca3a9456d2c90ff85aquDAXw9q2EWV.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1363054044, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 3, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (51, '陈玉婷', 6, 0, 6, '设计师', 0, 18, 0, 1351152435, '1351152435', 1, 'admin', '', 0, 'qb_zhuangxiu_/6/1_20121025161015_suqqv.jpg.gif', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1359362603, 1, 0, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', '', '', '', '', '', '', 1, 0);
    
# --------------------------------------------------------

#
# 表的结构 `qb_zhuangxiu_content_1`
#

DROP TABLE IF EXISTS qb_zhuangxiu_content_1;
CREATE TABLE `qb_zhuangxiu_content_1` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `sortid` tinyint(3) NOT NULL DEFAULT '0',
  `price` tinyint(2) NOT NULL,
  `supply_type` tinyint(1) NOT NULL DEFAULT '0',
  `acreage` varchar(12) NOT NULL DEFAULT '',
  `station` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`),
  KEY `room_type` (`supply_type`)
) TYPE=MyISAM AUTO_INCREMENT=12 ;

#
# 导出表中的数据 `qb_zhuangxiu_content_1`
#

INSERT INTO `qb_zhuangxiu_content_1` VALUES ('1','5','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, 宋体, sans-serif; \">随时方便量房（提前预约）</span><span style=\"font-family: Arial, 宋体, sans-serif; \">，新房毛坯，最近交房，就可以量房，喜欢现代简约的装修风格，格局不动，半包预算在3万左右，具体细节面谈。</span>','1','4','1','89','北京昌平区10号楼');
INSERT INTO `qb_zhuangxiu_content_1` VALUES ('2','6','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, 宋体, sans-serif; \">周末或者周二方便量房</span><span style=\"font-family: Arial, 宋体, sans-serif; \">，要求是正规的装修公司，质量有一定保证，买的二手房，要整体翻新，半包预算在3-5万，也可考虑全包，具体细节面谈。</span>','3','3','1','67','朝阳区东水路89号');
INSERT INTO `qb_zhuangxiu_content_1` VALUES ('3','7','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, 宋体, sans-serif; \">本周末方便量房（提前预约）</span><span style=\"font-family: Arial, 宋体, sans-serif; \">，买的二手房，已经交房，主要是厨房和卫生间需要拆除重新装修，其他简单翻新装修，半预算2-3万，具体面谈</span>','2','2','2','122','丰台区蒲黄榆8楼');
INSERT INTO `qb_zhuangxiu_content_1` VALUES ('4','8','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, 宋体, sans-serif; \">11月中旬方便量房（提前预约）</span><span style=\"font-family: Arial, 宋体, sans-serif; \">，要求是正规的装修公司，质量有一定的保证，现代简约的装修风格，有点小创意，具体细节面谈</span>','1','4','2','56','丰台区卢沟桥附近');
INSERT INTO `qb_zhuangxiu_content_1` VALUES ('5','9','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, 宋体, sans-serif; \">上午方便量房（提前预约）</span><span style=\"font-family: Arial, 宋体, sans-serif; \">，买的二手房，想整体翻新，卫生间和厨房布局不好，想要改动，其他的简单翻新，重视设计，具体细节面谈。</span>','1','5','1','122','海淀区军事博物馆附近');
INSERT INTO `qb_zhuangxiu_content_1` VALUES ('6','10','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, 宋体, sans-serif; \">周末方便量房（提前预约）</span><span style=\"font-family: Arial, 宋体, sans-serif; \">，要求是正规的装修公司，质量有一定保证，是三居室的格局，以前是办公的，现在想翻新装修自己住，喜欢中式的装修风格，具体细节面谈。</span>','1','3','1','122','朝阳区盛世家园10号楼');
INSERT INTO `qb_zhuangxiu_content_1` VALUES ('7','11','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, 宋体, sans-serif; \">随时方便量房，提前电话预约</span><span style=\"font-family: Arial, 宋体, sans-serif; \">，老房，平房，整体翻新，水电需要重做，做婚房用的，全包的预算在2万左右，要充分利用空间，重视设计，具体装修风格需要跟设计师详细沟通，装修公司需要信誉好、服务态度好、性价比高，具体细节面谈。</span>','1','1','2','77','宣武区大栅栏附近');
INSERT INTO `qb_zhuangxiu_content_1` VALUES ('8','12','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, 宋体, sans-serif; \">随时方便量房（提前2天预约）</span><span style=\"font-family: Arial, 宋体, sans-serif; \">，新房，已交房，是毛坯房，简单装修，全包预算在3-5万，要求是正规的装修公司，质量有一定保证，具体细节面谈。</span>','2','3','1','123','昌平区天通苑');
INSERT INTO `qb_zhuangxiu_content_1` VALUES ('9','13','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, 宋体, sans-serif; \">随时方便量房（提前预约）</span><span style=\"font-family: Arial, 宋体, sans-serif; \">，3层，有地下室，作办公楼，地下室是研发的，一层是员工办公，二层是领导办公，三层要隔成宿舍和客房，主要是4个卫生间和1个厨房，墙面及地板，其他简单装修，具体细节面谈。</span>','3','1','1','480','海淀区上地领秀新硅谷');
INSERT INTO `qb_zhuangxiu_content_1` VALUES ('10','14','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, 宋体, sans-serif; \">晚上7点或者周末方便量房（提前预约）</span><span style=\"font-family: Arial, 宋体, sans-serif; \">，要求是正规的装修公司，质量有一定保证，房子格局不动，具体风格要根据方案和设计来定，半包预算在4万左右，具体细节面谈。</span>','1','1','1','68','房山区乐活城');
INSERT INTO `qb_zhuangxiu_content_1` VALUES ('11','15','1','1','<span style=\"font-family:Arial, 宋体, sans-serif;margin: 0px; padding: 0px; \">本周日方便量房，提前电话预约</span><span style=\"font-family:Arial, 宋体, sans-serif;\">，新房，结婚用的，精装，全包预算在20——30万之间，具体装修风格跟设计师沟通，装修公司需要信誉好、施工工艺好的，细节详谈。</span>','1','1','1','120','海淀区西三环');

# --------------------------------------------------------

#
# 表的结构 `qb_zhuangxiu_content_2`
#

DROP TABLE IF EXISTS qb_zhuangxiu_content_2;
CREATE TABLE `qb_zhuangxiu_content_2` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `sortid` tinyint(3) NOT NULL DEFAULT '0',
  `designer` varchar(50) NOT NULL DEFAULT '',
  `design_style` tinyint(2) NOT NULL DEFAULT '0',
  `total_price` varchar(10) NOT NULL DEFAULT '',
  `acreage` varchar(10) NOT NULL DEFAULT '',
  `designer_id` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`),
  KEY `designer_id` (`designer_id`)
) TYPE=MyISAM AUTO_INCREMENT=9 ;

#
# 导出表中的数据 `qb_zhuangxiu_content_2`
#

INSERT INTO `qb_zhuangxiu_content_2` VALUES ('1','43','2','1','简单就是美','1','范婷婷','2','2','122','4');
INSERT INTO `qb_zhuangxiu_content_2` VALUES ('2','44','2','1','简单就是美','1','范婷婷','2','3','57','4');
INSERT INTO `qb_zhuangxiu_content_2` VALUES ('3','45','2','1','简单就是美','3','何雪','2','4','100','3');
INSERT INTO `qb_zhuangxiu_content_2` VALUES ('4','46','2','1','简单就是美','1','何雪','2','3','56','3');
INSERT INTO `qb_zhuangxiu_content_2` VALUES ('5','47','2','1','简单就是美','1','林春梅','1','3.2','122','2');
INSERT INTO `qb_zhuangxiu_content_2` VALUES ('6','48','2','1','简单就是美','1','林春梅','3','2.3','57','2');
INSERT INTO `qb_zhuangxiu_content_2` VALUES ('7','49','2','1','华丽装修。','1','张小雪','4','5','122','1');
INSERT INTO `qb_zhuangxiu_content_2` VALUES ('8','50','2','1','简单就是美','1','张小雪','2','1','56','1');

# --------------------------------------------------------

#
# 表的结构 `qb_house_zhuangxiu_3`
#

DROP TABLE IF EXISTS qb_zhuangxiu_content_3;
CREATE TABLE `qb_zhuangxiu_content_3` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `sortid` tinyint(2) NOT NULL,
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`)
) TYPE=MyISAM AUTO_INCREMENT=11 ;

#
# 导出表中的数据 `qb_zhuangxiu_content_3`
#

INSERT INTO `qb_zhuangxiu_content_3` VALUES ('1','28','3','1','<p> &nbsp; &nbsp;冬天到了，换季收纳工作对小户型业主来说可是一项艰巨的任务：厚重的冬被、冬衣该如何叠放？业主们改如何规划合理的洗衣区收纳空间……装修第一网编辑支招，让小户型的家冬天也可以美美的。</p>','1');
INSERT INTO `qb_zhuangxiu_content_3` VALUES ('2','29','3','1','<p> &nbsp; &nbsp;当使用传统油漆粉刷时，会有强烈的刺鼻味，那是一种对人体有害的挥发性有机化合物，成为VOC，装修第一网提醒而现今环保当道，需具备什么条件才能符合环保的要求呢？</p>','1');
INSERT INTO `qb_zhuangxiu_content_3` VALUES ('3','30','3','1','<p> &nbsp; &nbsp;用镜面做装饰能够营造出一种华丽、通透的氛围，多用在现代风格、欧式风格中。而其中现代风格多使用印花、覆膜镜，用来延伸扩展空间，使视野更加开阔；在欧式古典风格中，多使用覆膜镜和传统的水银镜。镜子的形状多变，正方形、长方形、圆形、椭圆形和边角曲线形等都可用在现代风格中，而带木质镜框的、菱形镜面就多用于欧式风格。</p>','1');
INSERT INTO `qb_zhuangxiu_content_3` VALUES ('4','31','3','1','<p> &nbsp; &nbsp;在小空间如何放大（一）中，分享关于开放式、穿透性的弹性设计以及量体修饰手法；此次将分享运用天花板的间接照明、色调设定还有减少阻隔的方式，都能不著痕迹放大小空间！</p>','1');
INSERT INTO `qb_zhuangxiu_content_3` VALUES ('5','32','3','1','<p> &nbsp; &nbsp;或是刻意为家人精心准备的一些小点缀，又或是营造一些诸如烛光晚餐等，都能让家变得更温暖。因为从家庭生活层面来说，有爱就有温暖。</p>','2');
INSERT INTO `qb_zhuangxiu_content_3` VALUES ('6','33','3','1','<p> &nbsp; &nbsp;卖场里，沙发的材料多样、款式和纹样多变、颜色丰富多彩，价格从几千元到几万元不等，一些进口沙发价格甚至高达几十万、几百万，这些沙发外表差别却不大。种种情况都让消费者摸不着头脑，不知道如何挑选一款合适的优质沙发。孰知，挑选沙发，不能光看面料和弹性，沙发的骨架、填充物、细节设计以及售后服务都是重要的参考因素。</p>','2');
INSERT INTO `qb_zhuangxiu_content_3` VALUES ('7','34','3','1','<p> &nbsp; &nbsp;秋季是装修的旺季。希望赶在这个季节把房子打扮好的业主们，别着急动手，装修第一网支招咱们先说说装修时必需的挑三拣四。装修，不挑剔怎么行？让我们告诉你如何挑！</p>','2');
INSERT INTO `qb_zhuangxiu_content_3` VALUES ('8','35','3','1','<p> &nbsp; &nbsp;在小户型逐渐占据市场主流的情况下，小空间的收纳和分隔成为许多人思考的问题。没有人想呆在一个乱成一锅粥的房间中。香港著名设计师就表示，一个小的空间就好比一只旅行箱，而如何将这个“旅行箱”归置好则考验主人的能力和创意。</p>','3');
INSERT INTO `qb_zhuangxiu_content_3` VALUES ('9','36','3','1','<p> &nbsp; &nbsp;又是春暖花开的3月，春季是一年一度的最佳家庭装修时段。该是业主奔波忙碌的时候了，对于初次装修的“装”主来说装修可不是一道好吃的“菜”，您啊就做好打仗的准备吧，如何跟装饰公司洽谈，跟设计师沟通，装修施工要注意哪些要领？这些都是要知道的，今天小编就带您积累财富，让您打一场漂亮的春装战！</p>','3');
INSERT INTO `qb_zhuangxiu_content_3` VALUES ('10','37','3','1','<p> &nbsp; &nbsp;家庭装饰的主要内容是对地、墙、顶做饰面处理，对门窗进行改造，对厨房、卫生间、灯具等进行设施更换与改造，以及配套家具的制作等内容。家庭装饰可分为三个档次：</p>','3');

# --------------------------------------------------------

#
# 表的结构 `qb_zhuangxiu_content_4`
#

DROP TABLE IF EXISTS qb_zhuangxiu_content_4;
CREATE TABLE `qb_zhuangxiu_content_4` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `sortid` tinyint(2) NOT NULL,
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`)
) TYPE=MyISAM AUTO_INCREMENT=13 ;

#
# 导出表中的数据 `qb_zhuangxiu_content_4`
#

INSERT INTO `qb_zhuangxiu_content_4` VALUES ('1','16','4','1','<p> &nbsp; &nbsp;城市中炫彩夺目的高楼色彩，街道上缤纷亮丽的车辆烤漆，家居装修中色泽鲜艳的墙体墙壁，到信息时代3C产物的时髦外衣……油漆已成为人们日常生活中不可或缺的一幅美丽“画皮”。选购一款称心如意、健康环保的油漆，“刷”出一个美观、纯天然的墙面，是许多人的追求。然而，面对鱼龙混杂的市场，如何选购到质优价廉的油漆，成了不少消费者的心病……</p>','1');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('2','17','4','1','<p> &nbsp; &nbsp;在日常装修中，人们喜欢选择一些时尚，灵性的墙纸来装饰自己的新居。可是墙纸的选择让不少业主深感困惑。现在，我们装修第一网的小编们经过大量走访业主和商家，总结出一些选购时的技巧，拿来与大家一起分享：</p>','1');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('3','18','4','1','<p> &nbsp; &nbsp;秋冬装修忙，菜鸟装修大叔们是否在头疼药怎么装修？装修，大致是按照这20步完成的。下面，死扛着尽装修第一网小编最大之所能，把目前所了解的装修过程以及整个过程中需要注意的诸多细节尽可能详细的阐述一遍……</p>','2');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('4','19','4','1','<p> &nbsp; 金秋十月，是最理想的装修时间。近段时间各大小区里都“响彻”施工“奏鸣曲”。装修是一个繁杂的工程，但同时也是精细活。有些看到、看不到的环节，将成为影响日后居住质量的关键。装修第一网结合当前的节气，并联系一些业主的经验教训，设计师从以下几方面作出提醒……</p>','2');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('5','20','4','1','<p> &nbsp; &nbsp;办公室设计好不好，也就是让工作在其中的人感觉“顺”与“不顺”。当你的所有东西，摆放得合理性很高，和空间的切合点很高的时候，就会很“顺”。包括功能性、格局、朝向等。</p>','3');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('6','21','4','1','<p> &nbsp; &nbsp;定制产品可以满足业主的个性化需求，但也不能一味以个人喜好为参考依据，要首先保障产品的功能性。同时家具的风格要与居室内的设计风格协调一致。</p>','3');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('7','22','4','1','<p> &nbsp; &nbsp;在房间规划时，首要考量小孩的年龄层，将学龄成长的需求逐一检视，有部分功能其实可以在成长时期一一增加，未必要一次做满，但适合小朋友阅读的桌椅、衣柜，以及吸引孩童的颜色配置则可以预先规划，以期能为宝贝们创造良好舒适的成长环境。</p>','4');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('8','23','4','1','<p> &nbsp; &nbsp;居室朝向不好，实在是件闹心的事。采光受影响，通风不畅快，再加上朝北的房间阴冷，朝西的还要享受“西照”，但是户型就这样，我们又能怎么办？装修第一网编辑搜集大量相关资料并告诉你，朝向不好，我们也可以通过设计来弥补。</p>','4');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('9','24','4','1','<p> &nbsp; &nbsp;装修施工中的隐蔽工程，就是在装修后被隐蔽起来，表面上无法看到的施工项目。根据装修工序，这些“隐蔽工程”都会被后一道工序所覆盖，所以很难检查其材料是否符合规格、施工是否规范，隐蔽工程是指敷设在装饰表面内部的工程。</p>','5');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('10','25','4','1','<p> &nbsp; &nbsp;很多业主在橱柜的设计阶段，都会提出一些以为可以占到便宜的要求，比如，将吊柜加大，增加储物空间等；或者为了节省预算，选择便宜的五金件这些做法真的可以得到实惠吗？专业人士提醒，能省钱固然好，但要在保证橱柜使用寿命及功能的前提下进行合理规划。下面就是专家推荐业主关注的合理预算要点。</p>','5');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('11','26','4','1','<p> &nbsp; &nbsp;“十一”黄金周，新区各大家居建材卖场铆也大打促销牌，以优惠的价格来吸引消费者，其中“抗甲醛”涂料等环保建材受到热捧。但中消协近日公布的15种涂料比较试验结果显示，多个涂料品牌“抗甲醛”产品的甲醛净化性能，以及甲醛净化效果持久性两项指标均不佳。其中，都芳、嘉宝莉等国内外知名涂料品牌都榜上有名。 对此，业内专家提醒消费者不要盲目轻信广告宣传和炒作，购买时除考虑选择一些品牌知名度高的产品外，更重要的是查看要其产品的最新检测报告。</p>','6');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('12','27','4','1','<p> &nbsp; 很多用户家中的阳台被当作杂物间或晾衣场所，杂乱无章。炎炎夏日，在阳台上覆盖一层藤蔓植物，可以有效地遮挡日晒，阻隔热气入室，让室内充满森林般的绿意和清凉。装修第一网小编教你如何打造森林系阳台小花园。</p>','6');

# --------------------------------------------------------

#
# 表的结构 `qb_zhuangxiu_content_5`
#

DROP TABLE IF EXISTS qb_zhuangxiu_content_5;
CREATE TABLE `qb_zhuangxiu_content_5` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `address` varchar(150) NOT NULL DEFAULT '',
  `home_type` varchar(100) NOT NULL,
  `business_type` varchar(100) NOT NULL,
  `build_style` varchar(100) NOT NULL,
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `home_type` (`home_type`),
  KEY `build_style` (`build_style`),
  KEY `business_type` (`business_type`)
) TYPE=MyISAM AUTO_INCREMENT=6 ;

#
# 导出表中的数据 `qb_zhuangxiu_content_5`
#

INSERT INTO `qb_zhuangxiu_content_5` VALUES ('1','38','5','1','<p> &nbsp; &nbsp;北京鸿达尚品家居装饰有限公司是一家集装饰设计、工程施工、材料配送、木门、地板、开发为一体的装饰企业。主要从事住宅、公寓、办公、商业、酒店、学校、医院等场所的装修设计和施工。公司经北京市工商管理局正式批准注册、北京市装饰协会、中国室内装饰协会的会员单位。</p>','北京昌平区集美家具（回龙观店）东二层家装区B2102','/#/小户型/#/普通住宅/#/局部装修/#/','/#/商铺/#/','/#/简约/#/现代/#/');
INSERT INTO `qb_zhuangxiu_content_5` VALUES ('2','39','5','1','<p>　 &nbsp;公司经北京市工商管理行政局正式批准册，已取得国家正规资质，并成为北京市室内装饰协会、北京工商联装饰行业商绿色装饰企业会会员单位。</p><p><br /></p><p>　　经营范围：老房装修，新房装修，局部改造，别墅装修，办公室装修。</p><p><br /></p><p>　　服务宗旨：公司始终秉承以“诚信、质优、透明、环保”为我们的服务宗旨。</p><p><br /></p><p>　　公司理念：“绿色家装，百姓品牌”，为百姓居家打造和谐绿色健康品质生活!</p><p><br /></p><p>　　公司崇尚：精品设计、精品施工、精品服务，努力打造个性化的装饰品牌。</p><p><br /></p>','丰台区菜户营东街鹏润家园豪苑大厦A座20层','/#/小户型/#/普通住宅/#/局部装修/#/','/#/商铺/#/','/#/简约/#/现代/#/');
INSERT INTO `qb_zhuangxiu_content_5` VALUES ('3','40','5','1','<p> &nbsp; 北利装饰公司是一家集装饰设计、工程施工的装饰企业，优秀的南方施工人员。主要从事公寓、住宅、办公等场所的装修与设计。公司以先进的设计理念、精深的设计功底为，规范的管理、精湛的施工技术，完善的服务体系，为客户提供专业化、人性化、个性化的装修和服务。公司“以质量求生存，以信誉求发展”，“客户满意是我们工作的唯一标准”一次合作永远朋友。公司专业承接各种室内外装饰装修工程，以低价位、高品质、优质的售后服务开发市场。<br /></p>','昌平区天通苑太平家园35号楼','/#/小户型/#/普通住宅/#/局部装修/#/','/#/商铺/#/','/#/简约/#/现代/#/');
INSERT INTO `qb_zhuangxiu_content_5` VALUES ('4','41','5','1','<p> &nbsp; 多年来公司持续稳步发展，下设市场部、设计部、工程部、企划部、财务部、客户服务部、人力资源部和材料配料中心八个部门。建立了从方案设计、工程施工、质量监督到售后服务等一整套细致合理的服务流程体系。由经验丰富、时尚创新的设计精英；正规培训、技艺娴熟的南方技工；资深专业的管理人员共同组建成一支诚信、敬业、务实、创新的精英团队。<br /></p>','南三环中路68号自然美大厦','/#/小户型/#/普通住宅/#/局部装修/#/','/#/商铺/#/','/#/简约/#/现代/#/');
INSERT INTO `qb_zhuangxiu_content_5` VALUES ('5','42','5','1','<p> &nbsp; 洲际宏达装饰从事装饰行业以来，积累了丰富的经验，我们始终推崇“少做广告，多做实惠”将最大的利润让利于客户 &nbsp;，本着以真诚、勤奋、超越、创新的企业精神，以“领先的服务创造优秀的家居品质”为宗旨。完善自我，创造辉煌是我们洲际宏达对未来美好生活的追求，愿我们共同携手努力创造出更加完美的家居装饰和舒适环境。<br /></p>','北京市朝阳区城外诚家居广场','/#/小户型/#/普通住宅/#/局部装修/#/','/#/商铺/#/','/#/简约/#/现代/#/');

# --------------------------------------------------------

#
# 表的结构 `qb_zhuangxiu_content_6`
#

DROP TABLE IF EXISTS qb_zhuangxiu_content_6;
CREATE TABLE `qb_zhuangxiu_content_6` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `in_company` varchar(100) NOT NULL DEFAULT '',
  `experience` varchar(50) NOT NULL DEFAULT '',
  `skill` varchar(100) NOT NULL DEFAULT '',
  `design_style` varchar(100) NOT NULL DEFAULT '',
  `design_goal` varchar(200) NOT NULL DEFAULT '',
  `company_id` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `company_id` (`company_id`)
) TYPE=MyISAM AUTO_INCREMENT=6 ;

#
# 导出表中的数据 `qb_zhuangxiu_content_6`
#

INSERT INTO `qb_zhuangxiu_content_6` VALUES ('1','1','6','1','<p>用心设计！</p><p>客户是上帝！</p>','北京洲际宏达装饰有限公司','三年','/#/普通住宅/#/写字楼/#/别墅/#/','/#/简约/#/现代/#/','没有最好，只有更好','42');
INSERT INTO `qb_zhuangxiu_content_6` VALUES ('2','2','6','1','<p>争做最优秀的设计师！</p><p>时刻为用户着想！</p>','北京宇华盛建筑装饰工程有限公司','两年','/#/普通住宅/#/别墅/#/','/#/简约/#/现代/#/中式/#/','一切为了客户！','41');
INSERT INTO `qb_zhuangxiu_content_6` VALUES ('3','3','6','1','<p>踏踏实实为客户做设计，</p><p>认认真真的工作！</p>','北京北利祥和装饰工程有限公司','三年','/#/普通住宅/#/别墅/#/','/#/简约/#/现代/#/欧式/#/','追求最完美的设计给客户！','40');
INSERT INTO `qb_zhuangxiu_content_6` VALUES ('4','4','6','1','<p>服从公司的安排，</p><p>听从客户的意见！</p>','北京绿缘居装饰设计有限公司','四年以上','/#/普通住宅/#/别墅/#/','/#/简约/#/现代/#/欧式/#/','做最好的东西给客户！','39');
INSERT INTO `qb_zhuangxiu_content_6` VALUES ('5','51','6','1','客户要的，尽量满足！','北京（鸿达尚品）家居装饰有限公司','一年','/#/普通住宅/#/','/#/简约/#/现代/#/','一切为了客户的需要！','38');

# --------------------------------------------------------

#
# 表的结构 `qb_zhuangxiu_db`
#

DROP TABLE IF EXISTS qb_zhuangxiu_db;
CREATE TABLE `qb_zhuangxiu_db` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `city_id` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `city_id` (`city_id`),
  KEY `uid` (`uid`)
)  TYPE=MyISAM AUTO_INCREMENT=52 ;

#
# 导出表中的数据 `qb_zhuangxiu_db`
#

INSERT INTO `qb_zhuangxiu_db` VALUES ('1','6','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('2','6','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('3','6','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('4','6','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('5','1','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('6','1','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('7','1','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('8','1','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('9','1','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('10','1','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('11','1','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('12','1','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('13','1','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('14','1','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('15','1','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('16','4','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('17','4','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('18','4','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('19','4','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('20','4','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('21','4','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('22','4','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('23','4','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('24','4','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('25','4','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('26','4','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('27','4','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('28','3','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('29','3','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('30','3','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('31','3','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('32','3','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('33','3','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('34','3','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('35','3','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('36','3','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('37','3','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('38','5','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('39','5','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('40','5','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('41','5','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('42','5','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('43','2','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('44','2','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('45','2','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('46','2','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('47','2','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('48','2','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('49','2','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('50','2','1','1');
INSERT INTO `qb_zhuangxiu_db` VALUES ('51','6','1','1');


# --------------------------------------------------------

#
# 表的结构 `qb_zhuangxiu_dianping`
#

DROP TABLE IF EXISTS qb_zhuangxiu_dianping;
CREATE TABLE `qb_zhuangxiu_dianping` (
  `cid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `cuid` int(7) NOT NULL DEFAULT '0',
  `type` tinyint(2) NOT NULL DEFAULT '0',
  `id` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `fid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `uid` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `ip` varchar(15) NOT NULL DEFAULT '',
  `icon` tinyint(3) NOT NULL DEFAULT '0',
  `yz` tinyint(1) NOT NULL DEFAULT '0',
  `fen1` smallint(4) NOT NULL DEFAULT '0',
  `fen2` smallint(4) NOT NULL DEFAULT '0',
  `fen3` smallint(4) NOT NULL DEFAULT '0',
  `fen4` smallint(4) NOT NULL DEFAULT '0',
  `fen5` smallint(4) NOT NULL DEFAULT '0',
  `flowers` smallint(4) NOT NULL DEFAULT '0',
  `egg` smallint(4) NOT NULL DEFAULT '0',
  `price` mediumint(5) NOT NULL DEFAULT '0',
  `keywords` varchar(100) NOT NULL DEFAULT '',
  `keywords2` varchar(100) NOT NULL DEFAULT '',
  `fen6` varchar(150) NOT NULL DEFAULT '',
  PRIMARY KEY (`cid`),
  KEY `type` (`type`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

#
# 导出表中的数据 `qb_zhuangxiu_dianping`
#


# --------------------------------------------------------

#
# 表的结构 `qb_zhuangxiu_field`
#

DROP TABLE IF EXISTS qb_zhuangxiu_field;
CREATE TABLE `qb_zhuangxiu_field` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `mid` mediumint(5) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL DEFAULT '',
  `field_name` varchar(30) NOT NULL DEFAULT '',
  `field_type` varchar(15) NOT NULL DEFAULT '',
  `field_leng` smallint(3) NOT NULL DEFAULT '0',
  `orderlist` int(10) NOT NULL DEFAULT '0',
  `form_type` varchar(15) NOT NULL DEFAULT '',
  `field_inputwidth` smallint(3) DEFAULT NULL,
  `field_inputheight` smallint(3) NOT NULL DEFAULT '0',
  `form_set` text NOT NULL,
  `form_value` text NOT NULL,
  `form_units` varchar(30) NOT NULL DEFAULT '',
  `form_title` text NOT NULL,
  `mustfill` tinyint(1) NOT NULL DEFAULT '0',
  `listshow` tinyint(1) NOT NULL DEFAULT '0',
  `listfilter` tinyint(1) DEFAULT NULL,
  `search` tinyint(1) NOT NULL DEFAULT '0',
  `allowview` varchar(255) NOT NULL DEFAULT '',
  `allowpost` varchar(255) NOT NULL DEFAULT '',
  `js_check` text NOT NULL,
  `js_checkmsg` varchar(255) NOT NULL DEFAULT '',
  `classid` mediumint(7) NOT NULL DEFAULT '0',
  `form_js` text NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM AUTO_INCREMENT=95 ;

#
# 导出表中的数据 `qb_zhuangxiu_field`
#

INSERT INTO `qb_zhuangxiu_field` VALUES ('1','1','其它要求','content','mediumtext','0','11','ieeditsimp','600','150','','','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('2','1','项目类型','sortid','int','3','20','radio','0','0','1|普通住宅\r\n2|别墅\r\n3|办公楼\r\n4|商铺','1','','','1','1','1','1','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('84','2','所属设计师','designer','varchar','50','0','text','200','0','','','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('22','2','装修分类','sortid','int','3','20','radio','0','0','1|普通住宅\r\n2|别墅\r\n3|商务','1','','','0','1','1','1','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('21','2','装修案例介绍','content','mediumtext','0','-1','ieeditsimp','600','150','','','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('9','5','公司介绍','content','mediumtext','0','-1','ieedit','600','200','','','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('77','6','从业经验','experience','varchar','50','0','radio','0','0','一年\r\n两年\r\n三年\r\n四年以上','一年','','','0','0','1','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('11','6','个人介绍','content','mediumtext','0','-1','ieeditsimp','600','150','','','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('12','6','所属装修公司','in_company','varchar','100','0','text','200','0','','','','','0','1','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('13','1','预算价钱','price','int','2','19','select','0','0','1|5000元以内\r\n2|1万元以内\r\n3|2万元以内\r\n4|3万元以内\r\n5|4万元以内\r\n3|5万元以内\r\n7|面议','','','','0','1','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('14','1','装修方式','supply_type','int','1','18','radio','0','0','1|全包\r\n2|半包','1','','','0','0','1','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('16','1','装修面积','acreage','varchar','12','16','text','5','0','','','平方米','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('19','1','所在位置','station','varchar','100','13','text','300','0','','','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('86','2','设计风格','design_style','int','2','0','radio','0','0','1|简约\r\n2|现代\r\n3|中式\r\n4|欧式\r\n5|美式\r\n6|田园\r\n7|古典\r\n8|混搭\r\n9|地中海','2','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('87','2','装修造价','total_price','varchar','10','0','text','100','0','','','万元','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('88','2','装修面积','acreage','varchar','10','0','text','100','0','','','平方米','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('31','3','详情','content','mediumtext','0','-1','ieedit','400','300','','','','','1','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('92','3','分类','sortid','int','2','1','radio','0','0','1|装修前\r\n2|装修中\r\n3|装修后','','','','1','0','1','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('41','4','详情','content','mediumtext','0','-1','ieedit','400','300','','','','','1','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('91','4','分类','sortid','int','2','1','radio','0','0','1|建材选购\r\n2|装修常识\r\n3|品味潮流\r\n4|设计指南\r\n5|装修攻略\r\n6|家装污染','','','','1','1','1','1','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('52','5','公司地址','address','varchar','150','-2','text','400','0','','','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('81','6','设计专长','skill','varchar','100','0','checkbox','0','0','普通住宅\r\n写字楼\r\n别墅\r\n专卖展示店\r\n酒店宾馆\r\n餐饮酒吧\r\n歌舞迪厅\r\n其他','普通住宅','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('94','6','所属公司ID(隐藏变量)','company_id','int','10','0','text','0','0','','','','注意：该变量是隐藏变量，系统要用到，请不要删除或随意修改，虽然页面上看不到','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('83','6','设计理念','design_goal','varchar','200','0','text','300','0','','','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('80','5','装修风格','build_style','varchar','100','0','checkbox','0','0','简约\r\n现代\r\n中式\r\n欧式\r\n美式\r\n田园\r\n古典\r\n混搭\r\n地中海','简约/现代','','','0','0','1','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('79','5','商业装修','business_type','varchar','100','0','checkbox','0','0','KTV\r\n商铺\r\n餐厅/酒楼\r\n美容/美发\r\n娱乐场所\r\n酒店\r\n展厅\r\n厂房\r\n写字楼\r\n学校\r\n医院','商铺','','','0','0','1','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('93','2','所属设计师ID(隐藏变量)','designer_id','int','10','0','text','0','0','','','','注意：该变量是隐藏变量，系统要用到，请不要删除或随意修改，虽然页面上看不到','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('82','6','设计风格','design_style','varchar','100','0','checkbox','0','0','简约\r\n现代\r\n中式\r\n欧式\r\n美式\r\n田园\r\n古典\r\n混搭\r\n地中海','简约/现代','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('78','5','家庭装修','home_type','varchar','100','0','checkbox','0','0','小户型\r\n公寓\r\n别墅\r\n普通住宅\r\n局部装修','小户型/普通住宅/局部装修','','','0','0','1','0','','','','','31','');

# --------------------------------------------------------

#
# 表的结构 `qb_zhuangxiu_module`
#

DROP TABLE IF EXISTS qb_zhuangxiu_module;
CREATE TABLE `qb_zhuangxiu_module` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `sort_id` mediumint(5) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `list` smallint(4) NOT NULL DEFAULT '0',
  `style` varchar(50) NOT NULL DEFAULT '',
  `config` text NOT NULL,
  `config2` text NOT NULL,
  `comment_type` tinyint(1) NOT NULL DEFAULT '0',
  `ifdp` tinyint(1) NOT NULL DEFAULT '0',
  `template` text NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM AUTO_INCREMENT=7 ;

#
# 导出表中的数据 `qb_zhuangxiu_module`
#

INSERT INTO `qb_zhuangxiu_module` VALUES ('1','0','装修招标','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','a:4:{s:4:\"list\";s:17:\"list_zhaobiao.htm\";s:4:\"show\";s:21:\"bencandy_zhaobiao.htm\";s:4:\"post\";s:17:\"post_zhaobiao.htm\";s:6:\"search\";s:0:\"\";}');
INSERT INTO `qb_zhuangxiu_module` VALUES ('2','0','装修案例','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','a:4:{s:4:\"list\";s:13:\"list_demo.htm\";s:4:\"show\";s:17:\"bencandy_demo.htm\";s:4:\"post\";s:13:\"post_demo.htm\";s:6:\"search\";s:0:\"\";}');
INSERT INTO `qb_zhuangxiu_module` VALUES ('3','0','装修日志','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','a:4:{s:4:\"list\";s:0:\"\";s:4:\"show\";s:0:\"\";s:4:\"post\";s:0:\"\";s:6:\"search\";s:0:\"\";}');
INSERT INTO `qb_zhuangxiu_module` VALUES ('4','0','装修学堂','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','a:4:{s:4:\"list\";s:0:\"\";s:4:\"show\";s:0:\"\";s:4:\"post\";s:0:\"\";s:6:\"search\";s:0:\"\";}');
INSERT INTO `qb_zhuangxiu_module` VALUES ('5','0','装修公司','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','a:4:{s:4:\"list\";s:16:\"list_company.htm\";s:4:\"show\";s:20:\"bencandy_company.htm\";s:4:\"post\";s:16:\"post_company.htm\";s:6:\"search\";s:0:\"\";}');
INSERT INTO `qb_zhuangxiu_module` VALUES ('6','0','设计师','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"0\";}}','','0','0','a:4:{s:4:\"list\";s:17:\"list_designer.htm\";s:4:\"show\";s:21:\"bencandy_designer.htm\";s:4:\"post\";s:17:\"post_designer.htm\";s:6:\"search\";s:0:\"\";}');

# --------------------------------------------------------

#
# 表的结构 `qb_zhuangxiu_pic`
#

DROP TABLE IF EXISTS qb_zhuangxiu_pic;
CREATE TABLE `qb_zhuangxiu_pic` (
  `pid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `mid` smallint(4) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `imgurl` varchar(150) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `id` (`id`),
  KEY `fid` (`fid`)
) TYPE=MyISAM AUTO_INCREMENT=44 ;

#
# 导出表中的数据 `qb_zhuangxiu_pic`
#

INSERT INTO `qb_zhuangxiu_pic` VALUES (1, 1, 6, 0, 1, 0, 'qb_zhuangxiu_/6/1_20121025151007_wy1rm.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (2, 2, 6, 0, 1, 0, 'qb_zhuangxiu_/6/1_20121025151005_q0oku.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (3, 3, 6, 0, 1, 0, 'qb_zhuangxiu_/6/1_20121025151041_314jy.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (4, 4, 6, 0, 1, 0, 'qb_zhuangxiu_/6/1_20121025151005_g4w9m.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (5, 38, 5, 0, 1, 0, 'zhuangxiu/headphoto_371152.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (6, 39, 5, 0, 1, 0, 'zhuangxiu/headphoto_242450c.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (7, 40, 5, 0, 1, 0, 'zhuangxiu/headphoto_251701c.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (8, 41, 5, 0, 1, 0, 'zhuangxiu/headphoto_436469c.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (9, 42, 5, 0, 1, 0, 'zhuangxiu/headphoto_250408c.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (10, 43, 2, 0, 1, 0, 'zhuangxiu/20121025_e347471b25a9473f0544LOX3OBFqVOij.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (11, 43, 2, 0, 1, 0, 'zhuangxiu/20121024_2bfc13ac5528fa5bf03fyy567gWDL1E6.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (12, 43, 2, 0, 1, 0, 'zhuangxiu/20121025_895024555a7815d0ac2dMjGMcKU2RfW6.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (13, 44, 2, 0, 1, 0, 'zhuangxiu/20120808_43a16b39ddd819bdb6aeDmmYrjZohsLt.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (14, 44, 2, 0, 1, 0, 'zhuangxiu/20120808_41a9c68c5a18627a5c25ClVsxfGhy9K4.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (15, 44, 2, 0, 1, 0, 'zhuangxiu/20120808_035d6370a9c32d7d22cbsgEne8ednOfn.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (16, 44, 2, 0, 1, 0, 'zhuangxiu/20120808_4045eb13969d74eec5c9GCxFIpD7tmrY.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (17, 45, 2, 0, 1, 0, 'zhuangxiu/20121025_3522af3343f63e47b7373Efed66yXrJD.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (18, 45, 2, 0, 1, 0, 'zhuangxiu/20121025_3f0157bfdb9c193f96b6UocIGQuyxUPU.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (19, 45, 2, 0, 1, 0, 'zhuangxiu/20121025_20f3dc26e752b94f89e32KkgSenS17f5.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (20, 45, 2, 0, 1, 0, 'zhuangxiu/20121025_9dfe14f55fcc93eed747LAUN8KigkEDr.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (21, 46, 2, 0, 1, 0, 'zhuangxiu/20121025_1df70bda985b5aceda79zWnEULUi14ku.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (22, 46, 2, 0, 1, 0, 'zhuangxiu/20121025_84c9fd9ee67ac150aeb3pTIBSImizbJ2.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (23, 46, 2, 0, 1, 0, 'zhuangxiu/20121025_f234a7ec045d4d53259871eLEVhN6psV.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (24, 47, 2, 0, 1, 0, 'zhuangxiu/20121025_d4d2fdb9a966763224b1diSdQdjA42Ss.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (25, 47, 2, 0, 1, 0, 'zhuangxiu/20121025_a1a2dbffd77f932370deUjT9h0VjWBz1.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (26, 47, 2, 0, 1, 0, 'zhuangxiu/20121025_192156a1040bedfe07dcQOecRSEhnBfe.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (27, 48, 2, 0, 1, 0, 'zhuangxiu/20121025_f03f4adc1990a8ea41efqG2kHCl6XgN2.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (28, 48, 2, 0, 1, 0, 'zhuangxiu/20121025_680124fc8c775a8d48f1Zh8I6tTTKRIK.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (29, 48, 2, 0, 1, 0, 'zhuangxiu/20121025_f0060a9f04aab9ec6e33idjWuEu1SEJN.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (30, 49, 2, 0, 1, 0, 'zhuangxiu/20121025_de98bcc4e542d02398caGMf7GssbHGEc.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (31, 49, 2, 0, 1, 0, 'zhuangxiu/20121025_12cfc07f1ddb9ef7ed32hFcKZptEZThL.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (32, 49, 2, 0, 1, 0, 'zhuangxiu/20121025_5166e6154fea7e0923bcLvwEhCWN4dFF.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (33, 49, 2, 0, 1, 0, 'zhuangxiu/20121025_32f5835771d3cc423c10X8hhOzZ9e9k0.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (34, 49, 2, 0, 1, 0, 'zhuangxiu/20121025_bf9b304d9944ab9a3534h3Z2k3caSVRa.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (35, 50, 2, 0, 1, 0, 'zhuangxiu/20121024_4fca3a9456d2c90ff85aquDAXw9q2EWV.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (36, 50, 2, 0, 1, 0, 'zhuangxiu/20121024_ec88166a34ac6447c42058qGpSfuy3BR.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (37, 50, 2, 0, 1, 0, 'zhuangxiu/20121024_645831ebac6a870adfc50OW5Tnb8Rhf4.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (38, 51, 6, 0, 1, 0, 'qb_zhuangxiu_/6/1_20121025161015_suqqv.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (39, 19, 4, 0, 1, 0, 'qb_zhuangxiu_/4/1_20121123131153_gseby.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (40, 49, 2, 0, 1, 0, 'qb_zhuangxiu_/2/1_20121116141138_dmzyu.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (41, 49, 2, 0, 1, 0, 'qb_zhuangxiu_/2/1_20121116141139_jatfq.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (42, 49, 2, 0, 1, 0, 'qb_zhuangxiu_/2/1_20121116141139_whbqn.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (43, 49, 2, 0, 1, 0, 'qb_zhuangxiu_/2/1_20121116141140_wwpaw.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (44, 27, 4, 0, 1, 0, 'qb_zhuangxiu_/4/1_20121123131128_cqiwg.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (45, 37, 3, 0, 1, 0, 'qb_zhuangxiu_/3/1_20121123131115_v1qtp.jpg', '');
INSERT INTO `qb_zhuangxiu_pic` VALUES (46, 32, 3, 0, 1, 0, 'qb_zhuangxiu_/3/1_20121123131147_owsnb.jpg', '新房子');
    
# --------------------------------------------------------

#
# 表的结构 `qb_zhuangxiu_report`
#

DROP TABLE IF EXISTS qb_zhuangxiu_report;
CREATE TABLE `qb_zhuangxiu_report` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `onlineip` varchar(15) NOT NULL DEFAULT '',
  `type` tinyint(2) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `iftrue` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`)
)  TYPE=MyISAM AUTO_INCREMENT=1 ;

#
# 导出表中的数据 `qb_zhuangxiu_report`
#


# --------------------------------------------------------

#
# 表的结构 `qb_zhuangxiu_sort`
#

DROP TABLE IF EXISTS qb_zhuangxiu_sort;
CREATE TABLE `qb_zhuangxiu_sort` (
  `fid` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `fup` mediumint(7) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `mid` smallint(4) NOT NULL DEFAULT '0',
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
  `metatitle` varchar(250) NOT NULL DEFAULT '',
  `metakeywords` varchar(255) NOT NULL DEFAULT '',
  `metadescription` varchar(255) NOT NULL DEFAULT '',
  `allowcomment` tinyint(1) NOT NULL DEFAULT '0',
  `allowpost` varchar(150) NOT NULL DEFAULT '',
  `allowviewtitle` varchar(150) NOT NULL DEFAULT '',
  `allowviewcontent` varchar(150) NOT NULL DEFAULT '',
  `allowdownload` varchar(150) NOT NULL DEFAULT '',
  `forbidshow` tinyint(1) NOT NULL DEFAULT '0',
  `config` mediumtext NOT NULL,
  `index_show` tinyint(1) NOT NULL DEFAULT '0',
  `contents` mediumint(4) NOT NULL DEFAULT '0',
  `tableid` varchar(30) NOT NULL DEFAULT '',
  `dir_name` varchar(50) NOT NULL DEFAULT '',
  `ifcolor` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fid`)
) TYPE=MyISAM AUTO_INCREMENT=7 ;

#
# 导出表中的数据 `qb_zhuangxiu_sort`
#

INSERT INTO `qb_zhuangxiu_sort` VALUES ('1','0','装修招标','1','1','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:1:{s:11:\"field_value\";N;}','0','0','','chuzu','0');
INSERT INTO `qb_zhuangxiu_sort` VALUES ('2','0','装修案例','2','1','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:1:{s:11:\"field_value\";N;}','0','0','','chushou','0');
INSERT INTO `qb_zhuangxiu_sort` VALUES ('3','0','装修日志','3','1','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:1:{s:11:\"field_value\";N;}','0','0','','qiuzu','0');
INSERT INTO `qb_zhuangxiu_sort` VALUES ('4','0','装修学堂','4','1','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:1:{s:11:\"field_value\";N;}','0','0','','qiugou','0');
INSERT INTO `qb_zhuangxiu_sort` VALUES ('5','0','装修公司','5','1','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:2:{s:7:\"is_html\";N;s:11:\"field_value\";N;}','0','0','','xiaoqu','0');
INSERT INTO `qb_zhuangxiu_sort` VALUES ('6','0','设计师','6','1','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:1:{s:11:\"field_value\";N;}','0','0','','zhongjie','0');
