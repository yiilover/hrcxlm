INSERT INTO `qb_module` (`id`, `type`, `name`, `pre`, `dirname`, `domain`, `admindir`, `config`, `list`, `admingroup`, `adminmember`, `ifclose`, `ifsys`) VALUES(50, 2, 'װ��Ƶ��', 'zhuangxiu_', 'zhuangxiu', '', '', 'a:7:{s:12:"list_PhpName";s:18:"list.php?&fid=$fid";s:12:"show_PhpName";s:29:"bencandy.php?&fid=$fid&id=$id";s:8:"MakeHtml";N;s:14:"list_HtmlName1";N;s:14:"show_HtmlName1";N;s:14:"list_HtmlName2";N;s:14:"show_HtmlName2";N;}', 103, '', '', 0, 0);



#
# �������е����� `qb_label`
#

INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES (1199, '', 0, 0, 'zhuangxiu_index1', 'rollpic', 0, 'a:8:{s:13:"tplpart_1code";s:1022:"<link rel="stylesheet" type="text/css" href="http://www_qibosoft_com/zhuangxiu/images/default/slide.css">\r\n<ul class="slidePic">\r\n<!--\r\nEOT;\r\n$i=0;\r\nforeach($listdb AS $rs){extract($rs);\r\n$i++;\r\nif($i==1)$curword="class=cur";\r\nelse $curword="";\r\nprint <<<EOT\r\n-->\r\n    <li $curword><a href="$url"  target="_blank"><IMG alt="$title" src="$picurl"/></a></li>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n</ul>\r\n<ul class="slideTxt">\r\n<!--\r\nEOT;\r\n$i=0;\r\nforeach($listdb AS $rs){extract($rs);\r\n$i++;\r\nif($i==1)$curword="class=cur";\r\nelse $curword="";\r\nprint <<<EOT\r\n-->\r\n    <li $curword><a href="$url"  target="_blank" title="$title">$title</a></li>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n</ul>\r\n<ul class="slideop">\r\n<span></span>\r\n<!--\r\nEOT;\r\n$i=0;\r\nforeach($listdb AS $rs){extract($rs);\r\n$i++;\r\nif($i==1)$curword="class=cur";\r\nelse $curword="";\r\nprint <<<EOT\r\n-->\r\n    <li $curword>$i</li>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n</ul>\r\n<script type="text/javascript" src="http://www_qibosoft_com/zhuangxiu/images/default/slide.js"></script>";s:8:"rolltype";s:1:"2";s:5:"width";s:0:"";s:6:"height";s:0:"";s:6:"picurl";a:5:{i:1;s:55:"zhuangxiu/20121025_de98bcc4e542d02398caGMf7GssbHGEc.jpg";i:2;s:55:"zhuangxiu/20121025_e347471b25a9473f0544LOX3OBFqVOij.jpg";i:3;s:55:"zhuangxiu/20121025_d4d2fdb9a966763224b1diSdQdjA42Ss.jpg";i:4;s:55:"zhuangxiu/20121025_f03f4adc1990a8ea41efqG2kHCl6XgN2.jpg";i:5;s:55:"zhuangxiu/20120808_43a16b39ddd819bdb6aeDmmYrjZohsLt.jpg";}s:7:"piclink";a:5:{i:1;s:58:"http://www_qibosoft_com/zhuangxiu/bencandy.php?fid=2&id=49";i:2;s:58:"http://www_qibosoft_com/zhuangxiu/bencandy.php?fid=2&id=43";i:3;s:58:"http://www_qibosoft_com/zhuangxiu/bencandy.php?fid=2&id=45";i:4;s:58:"http://www_qibosoft_com/zhuangxiu/bencandy.php?fid=2&id=48";i:5;s:58:"http://www_qibosoft_com/zhuangxiu/bencandy.php?fid=2&id=44";}s:6:"picalt";a:5:{i:1;s:36:"ŷʽ�ִ�������ұ���ǽ����װ��Ч��ͼ";i:2;s:37:"2012����װ��ͼƬ��ȫ С����װ��Ч��ͼ";i:3;s:38:"��Լ������ɳ��װ��Ч��ͼ��ȫ2012ͼƬ";i:4;s:30:"50ƽ��С���Ϳ���ɳ��װ��Ч��ͼ";i:5;s:35:"60ƽС������ʽ�������װ�� С�����";}s:11:"pic_city_id";i:0;}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"21";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1363053664, 0, 50, 0, 0, 'mb_4.0');
    
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index2', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:69:"<div class="list">��<a href="$url" target=''_blank''>$title</a></div>\r\n";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:24:"/common_title/0title.jpg";s:6:"DivTpl";i:1;s:3:"fid";i:1;s:8:"moduleid";N;s:5:"stype";s:1:"t";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"hits";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"6";s:3:"sql";s:115:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''1'' ) ORDER BY hits DESC LIMIT 0,6 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index3', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:86:"<dl>\r\n<dt><a href="$url" target="_blank">$title</a></dt>\r\n<dd>$content</dd>\r\n</dl>\r\n\r\n";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:3:"120";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:29:"/common_content/content_1.jpg";s:6:"DivTpl";i:1;s:3:"fid";i:4;s:8:"moduleid";N;s:5:"stype";s:1:"c";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"2";s:3:"sql";s:115:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''4'' ) ORDER BY list DESC LIMIT 0,2 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"50";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352191358, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index4', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:70:"<div class="list">��<A HREF="$url" target=''_blank''>$title</a></div>\\\r\n";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:24:"/common_title/0title.jpg";s:6:"DivTpl";i:1;s:3:"fid";i:4;s:8:"moduleid";N;s:5:"stype";s:1:"t";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"8";s:3:"sql";s:115:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''4'' ) ORDER BY list DESC LIMIT 2,8 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"50";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"3";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index5', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:70:"<div class="list">��<a href="$url" target=''_blank'' >$title</a></div>\r\n";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:24:"/common_title/0title.jpg";s:6:"DivTpl";i:1;s:3:"fid";i:4;s:8:"moduleid";N;s:5:"stype";s:1:"t";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"hits";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"4";s:3:"sql";s:115:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''4'' ) ORDER BY hits DESC LIMIT 0,4 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"50";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index6', 'pic', 0, 'a:5:{s:6:"imgurl";s:35:"../zhuangxiu/images/default/ad1.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"240";s:6:"height";s:3:"140";s:11:"pic_city_id";i:0;}', 'a:3:{s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index7', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:692:"<!--\r\nEOT;\r\n$i=0;\r\n$pricedb=array("δ֪","5000Ԫ����","1��Ԫ����","2��Ԫ����","3��Ԫ����","4��Ԫ����","5��Ԫ����","����");\r\nforeach($listdb AS $rs){extract($rs);\r\n$i++;\r\nprint <<<EOT\r\n-->\r\n<ul class="list$i">\r\n<li class="li1"><A HREF="$url" target=''_blank''>$title</a></li>\r\n<li class="li0">{$pricedb[$price]}</li>\r\n<li class="li2">{$acreage}ƽ����</li>\r\n<li class="li3">$station</li>\r\n<li class="li4">{$time_Y}-{$time_m}-{$time_d}</li>\r\n</ul>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n\r\n<ul class="list$i">\r\n<li class="li1"><A HREF="$url" target=''_blank''>$title</a></li>\r\n<li class="li2">{$acreage}ƽ����</li>\r\n<li class="li3">$station</li>\r\n<li class="li4">{$time_Y}-{$time_m}-{$time_d}</li>\r\n</ul>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:24:"/common_title/0title.jpg";s:6:"DivTpl";i:1;s:3:"fid";i:1;s:8:"moduleid";N;s:5:"stype";s:1:"t";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:2:"10";s:3:"sql";s:116:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''1'' ) ORDER BY list DESC LIMIT 0,10 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352264313, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index8', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:197:"<div class="listpic">\r\n<div class="img"><span><a href="$url" target=''_blank''><img src="$picurl" height="60"></a></span></div>\r\n<div class="t"><a href="$url" target=''_blank''>$title</a></div>\r\n</div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:24:"/common_title/0title.jpg";s:6:"DivTpl";i:1;s:3:"fid";i:2;s:8:"moduleid";N;s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"6";s:3:"sql";s:128:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND ispic=1  AND fid=''2'' ) ORDER BY list DESC LIMIT 0,6 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352267763, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index9', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:197:"<div class="listpic">\r\n<div class="img"><span><a href="$url" target=''_blank''><img src="$picurl" height="60"></a></span></div>\r\n<div class="t"><a href="$url" target=''_blank''>$title</a></div>\r\n</div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:5;s:8:"moduleid";N;s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:10:"levelstime";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:2:"10";s:3:"sql";s:135:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND ispic=1  AND fid=''5'' ) ORDER BY levelstime DESC LIMIT 0,10 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index10', 'pic', 0, 'a:5:{s:6:"imgurl";s:35:"../zhuangxiu/images/default/ad2.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"980";s:6:"height";s:2:"90";s:11:"pic_city_id";i:0;}', 'a:3:{s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index11', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:479:"<!--\r\nEOT;\r\nforeach($listdb AS $rs){extract($rs);\r\n$picurl=str_replace(".gif","",$picurl);\r\n$skill=str_replace("/#/","/",$skill);\r\nprint <<<EOT\r\n-->\r\n<dl>\r\n<dt><span><a href="$url" target=''_blank''><img src="$picurl" height="90"></a></span></dt>\r\n<dd>\r\n<div class="t"><a href="$url" target=''_blank''>$title</a></div>\r\n<div>$in_company</div>\r\n<div>��ҵ���飺<span>{$experience}</span></div>\r\n<div>���ר����<span>{$skill}</span></div>\r\n</dd>\r\n</dl>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:6;s:8:"moduleid";N;s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"4";s:3:"sql";s:128:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND ispic=1  AND fid=''6'' ) ORDER BY list DESC LIMIT 0,4 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"20";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352277956, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index12', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:222:"<dt class="dt1">��һ��/װ��ǰ��</dt>\r\n<dd>\r\n<!--\r\nEOT;\r\nforeach($listdb AS $rs){extract($rs);\r\nprint <<<EOT\r\n-->\r\n<div class="list">��<a href="$url" target=''_blank''>$title</a></div>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n</dd>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:4;s:8:"moduleid";N;s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"3";s:3:"sql";s:115:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''4'' ) ORDER BY list DESC LIMIT 0,3 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352279063, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index13', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:222:"<dt class="dt2">�ڶ���/������</dt>\r\n<dd>\r\n<!--\r\nEOT;\r\nforeach($listdb AS $rs){extract($rs);\r\nprint <<<EOT\r\n-->\r\n<div class="list">��<a href="$url" target=''_blank''>$title</a></div>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n</dd>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:4;s:8:"moduleid";N;s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"hits";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"3";s:3:"sql";s:115:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''4'' ) ORDER BY hits DESC LIMIT 0,3 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352279077, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index14', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:222:"<dt class="dt3">������/����ѡ��</dt>\r\n<dd>\r\n<!--\r\nEOT;\r\nforeach($listdb AS $rs){extract($rs);\r\nprint <<<EOT\r\n-->\r\n<div class="list">��<a href="$url" target=''_blank''>$title</a></div>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n</dd>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:2;s:8:"moduleid";N;s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"3";s:3:"sql";s:115:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''2'' ) ORDER BY list DESC LIMIT 0,3 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352279087, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index15', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:222:"<dt class="dt4">���Ľ�/ʩ������</dt>\r\n<dd>\r\n<!--\r\nEOT;\r\nforeach($listdb AS $rs){extract($rs);\r\nprint <<<EOT\r\n-->\r\n<div class="list">��<a href="$url" target=''_blank''>$title</a></div>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n</dd>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:3;s:8:"moduleid";N;s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"3";s:3:"sql";s:115:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''3'' ) ORDER BY list DESC LIMIT 0,3 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352279101, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index16', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:222:"<dt class="dt5">���彲/����֪ʶ</dt>\r\n<dd>\r\n<!--\r\nEOT;\r\nforeach($listdb AS $rs){extract($rs);\r\nprint <<<EOT\r\n-->\r\n<div class="list">��<a href="$url" target=''_blank''>$title</a></div>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n</dd>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:5;s:8:"moduleid";N;s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"3";s:3:"sql";s:115:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''5'' ) ORDER BY list DESC LIMIT 0,3 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352279112, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index17', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:222:"<dt class="dt6">������/�ҾӲ���</dt>\r\n<dd>\r\n<!--\r\nEOT;\r\nforeach($listdb AS $rs){extract($rs);\r\nprint <<<EOT\r\n-->\r\n<div class="list">��<a href="$url" target=''_blank''>$title</a></div>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n</dd>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:1;s:8:"moduleid";N;s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"3";s:3:"sql";s:115:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND fid=''1'' ) ORDER BY list DESC LIMIT 0,3 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352279123, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index18', 'Info_shop_', 1, 'a:31:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:265:"<div class="listpic">\r\n	<div class="img"><span><a href="$url" target="_blank"><img src="$picurl" height="110"/></a></span></div>\r\n	<div class="t"><a href="$url" target="_blank" class="title">$title</a></div>\r\n	<div class="pric">��<span>{$price}</span></div>\r\n</div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:5:"shop_";s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";N;s:8:"moduleid";N;s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"5";s:3:"sql";s:108:"SELECT * FROM qb_shop_content  WHERE city_id=''$GLOBALS[city_id]''  AND ispic=1  ORDER BY list DESC LIMIT 0,5 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_index19', 'Info_coupon_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:83:"<div class="list$i"><span>$i</span><a href="$url" target=''_blank'' >$title</a></div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:7:"coupon_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:24:"/common_title/0title.jpg";s:6:"DivTpl";i:1;s:5:"fiddb";N;s:8:"moduleid";N;s:5:"stype";s:1:"t";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"8";s:3:"sql";s:96:"SELECT * FROM qb_coupon_content  WHERE city_id=''$GLOBALS[city_id]''  ORDER BY list DESC LIMIT 0,8";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"50";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 50, 0, 0, 'fresh_mb');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_rightad', 'pic', 0, 'a:5:{s:6:"imgurl";s:36:"../zhuangxiu/images/default/rad1.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"240";s:6:"height";s:2:"85";s:11:"pic_city_id";i:0;}', 'a:3:{s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 2, 50, 0, 0, 'green_htm');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_rightad', 'pic', 0, 'a:5:{s:6:"imgurl";s:36:"../zhuangxiu/images/default/rad1.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"240";s:6:"height";s:2:"85";s:11:"pic_city_id";i:0;}', 'a:3:{s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 3, 50, 0, 0, 'green_htm');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_rightad1', 'pic', 0, 'a:5:{s:6:"imgurl";s:36:"../zhuangxiu/images/default/rad2.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"240";s:6:"height";s:3:"200";s:11:"pic_city_id";i:0;}', 'a:3:{s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 2, 50, 0, 0, 'green_htm');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_listdesiganer', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:642:"<!--\r\nEOT;\r\nforeach($listdb AS $rs){extract($rs);\r\n$picurl=str_replace(".gif","",$picurl);\r\n$skill=Display_Type1($skill);\r\n$design_style=Display_Type1($design_style);\r\nprint <<<EOT\r\n-->\r\n<dl>\r\n<dt><span><a href="$url" target=''_blank''><img src="$picurl" height="100"></a></span></dt>\r\n<dd>\r\n<div class="t"><a href="$url" target=''_blank''>$title</a></div>\r\n<div class="c"><a href="bencandy.php?fid=5&id=$company_id" target=''_blank''>$in_company</a></div>\r\n<div>��ҵ���飺<span>{$experience}</span></div>\r\n<div>���ר����<span>{$skill}</span></div>\r\n<div>��Ʒ��<span>{$design_style}</span></div>\r\n</dd>\r\n</dl>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:6;s:8:"moduleid";N;s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"3";s:3:"sql";s:128:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND ispic=1  AND fid=''6'' ) ORDER BY list DESC LIMIT 0,3 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"20";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352864721, 3, 50, 0, 0, 'green_htm');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_listdemo', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:256:"<div class="listpic">\r\n<div class="img"><span><a href="$url" target=''_blank''><img src="$picurl" height="120"></a></span></div>\r\n<div class="t"><a href="$url" target=''_blank''>$title</a></div>\r\n<div class="m">{$acreage}ƽ���� {$total_price}��Ԫ</div>\r\n</div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:2;s:8:"moduleid";N;s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"5";s:3:"sql";s:128:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND ispic=1  AND fid=''2'' ) ORDER BY list DESC LIMIT 0,5 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1352863517, 3, 50, 0, 0, 'green_htm');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_listdemo1', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:256:"<div class="listpic">\r\n<div class="img"><span><a href="$url" target=''_blank''><img src="$picurl" height="110"></a></span></div>\r\n<div class="t"><a href="$url" target=''_blank''>$title</a></div>\r\n<div class="m">{$acreage}ƽ���� {$total_price}��Ԫ</div>\r\n</div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:2;s:8:"moduleid";N;s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:2:"id";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"4";s:3:"sql";s:126:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND ispic=1  AND fid=''2'' ) ORDER BY id DESC LIMIT 0,4 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1353054628, 3, 50, 0, 0, 'green_htm');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_listdemo2', 'Info_zhuangxiu_', 1, 'a:32:{s:7:"allcity";s:1:"0";s:13:"tplpart_1code";s:256:"<div class="listpic">\r\n<div class="img"><span><a href="$url" target=''_blank''><img src="$picurl" height="120"></a></span></div>\r\n<div class="t"><a href="$url" target=''_blank''>$title</a></div>\r\n<div class="m">{$acreage}ƽ���� {$total_price}��Ԫ</div>\r\n</div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:10:"zhuangxiu_";s:7:"typefid";N;s:6:"cityId";N;s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:3:"fid";i:2;s:8:"moduleid";N;s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"hits";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"4";s:3:"sql";s:128:"(SELECT * FROM qb_zhuangxiu_content  WHERE city_id=''$GLOBALS[city_id]''  AND ispic=1  AND fid=''2'' ) ORDER BY hits DESC LIMIT 0,4 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1353054663, 3, 50, 0, 0, 'green_htm');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_rightad3', 'pic', 0, 'a:5:{s:6:"imgurl";s:36:"../zhuangxiu/images/default/rad1.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"240";s:6:"height";s:2:"85";s:11:"pic_city_id";i:0;}', 'a:3:{s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 2, 50, 0, 0, 'green_htm');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_rightad4', 'pic', 0, 'a:5:{s:6:"imgurl";s:35:"../zhuangxiu/images/default/ad1.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"240";s:6:"height";s:3:"135";s:11:"pic_city_id";i:0;}', 'a:3:{s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 2, 50, 0, 0, 'green_htm');
INSERT INTO `qb_label` (`name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES('', 0, 0, 'zhuangxiu_bencandy_banner', 'pic', 0, 'a:5:{s:6:"imgurl";s:38:"../zhuangxiu/images/default/banner.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"980";s:6:"height";s:3:"150";s:11:"pic_city_id";i:0;}', 'a:3:{s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 3, 50, 0, 0, 'green_htm');





# --------------------------------------------------------

#
# ��Ľṹ `qb_zhuangxiu_buyad`
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
# �������е����� `qb_zhuangxiu_buyad`
#


# --------------------------------------------------------

#
# ��Ľṹ `qb_zhuangxiu_class`
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
# �������е����� `qb_zhuangxiu_class`
#


# --------------------------------------------------------

#
# ��Ľṹ `qb_zhuangxiu_collection`
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
# �������е����� `qb_zhuangxiu_collection`
#
INSERT INTO `qb_zhuangxiu_collection` VALUES ('1','15','1','1352359114');

# --------------------------------------------------------

#
# ��Ľṹ `qb_zhuangxiu_comments`
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
# �������е����� `qb_zhuangxiu_comments`
#

INSERT INTO `qb_zhuangxiu_comments` VALUES ('1','1','0','15','1','1','admin','1352362549','װ�޹�˾��Ҫ�����á�ʩ�����պõģ�ϸ����̸��','127.0.0.1','0','1','0','0');
INSERT INTO `qb_zhuangxiu_comments` VALUES ('2','1','0','15','1','1','admin','1352431177','�����շ�����������ǰ�绰ԤԼ���·�������õģ���װ','127.0.0.1','0','1','1','0');
INSERT INTO `qb_zhuangxiu_comments` VALUES ('3','1','0','15','1','0','zhangsan','1352434415','��̨���ѻ��ܸ���58ƽ�׾ɷ�����','127.0.0.1','0','1','1','1');
INSERT INTO `qb_zhuangxiu_comments` VALUES ('4','1','0','19','4','1','admin','1352702045','','127.0.0.1','0','1','1','0');
INSERT INTO `qb_zhuangxiu_comments` VALUES ('5','1','0','19','4','1','admin','1352702098','װ�޵�һ����ϵ�ǰ�Ľ���������ϵһЩҵ���ľ����ѵ�����ʦ�����¼������������ѡ���','127.0.0.1','0','1','0','0');
INSERT INTO `qb_zhuangxiu_comments` VALUES ('6','1','0','22','4','0','lisi','1352702401','������Ϊ�����Ǵ����������ʵĳɳ�������<br> <br>','127.0.0.1','0','1','0','0');
INSERT INTO `qb_zhuangxiu_comments` VALUES ('7','1','0','42','5','1','admin','1352787867','Ը���ǹ�ͬЯ��Ŭ����������������ļҾ�װ�κ����ʻ�����','127.0.0.1','0','1','0','0');
INSERT INTO `qb_zhuangxiu_comments` VALUES ('8','1','0','38','5','1','admin','1352864868','�����������װ�ι������޹�˾','127.0.0.1','0','1','0','0');
INSERT INTO `qb_zhuangxiu_comments` VALUES ('9','1','0','3','6','1','admin','1353314721','̤̤ʵʵΪ�ͻ�����ƣ�<br><br>��������Ĺ�����<br>','127.0.0.1','0','1','0','0');
INSERT INTO `qb_zhuangxiu_comments` VALUES ('10','1','0','3','6','1','admin','1353314909','׷������������Ƹ��ͻ���','127.0.0.1','0','1','0','0');


# --------------------------------------------------------

#
# ��Ľṹ `qb_zhuangxiu_config`
#

DROP TABLE IF EXISTS qb_zhuangxiu_config;
CREATE TABLE `qb_zhuangxiu_config` (
  `c_key` varchar(50) NOT NULL DEFAULT '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY (`c_key`)
) TYPE=MyISAM;

#
# �������е����� `qb_zhuangxiu_config`
#

INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_webOpen','1','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_allowViewList','4','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_allowViewContent','3','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Limit_postOne','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_allowpost','2','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_contact','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_titleName','����','');
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
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_webname','װ��Ƶ��','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('postSellHouseNeedQy','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('postHireHouseQy','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_UseEndTime','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_ShowNoYz','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('if_GGmap','1','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_showday','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('UpdatePostTime','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Info_ReportDB','�����Ϣ\r\n������Ϣ\r\nΥ����Ϣ','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('IF_Private_tpl','0','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Private_tpl_head','','');
INSERT INTO `qb_zhuangxiu_config` VALUES ('Private_tpl_foot','','');

# --------------------------------------------------------

#
# ��Ľṹ `qb_zhuangxiu_content`
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
# �������е����� `qb_zhuangxiu_content`
#

INSERT INTO `qb_zhuangxiu_content` VALUES (1, '��Сѩ', 6, 0, 6, '���ʦ', 0, 4, 0, 1351148407, '1351148407', 1, 'admin', '', 0, 'qb_zhuangxiu_/6/1_20121025151007_wy1rm.jpg.gif', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1352798857, 1, 0, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', '', '', '', '', '', '', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (2, '�ִ�÷', 6, 0, 6, '���ʦ', 0, 10, 0, 1351148525, '1351148525', 1, 'admin', '', 0, 'qb_zhuangxiu_/6/1_20121025151005_q0oku.jpg.gif', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353317815, 1, 0, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', '', '', '', '', '', '', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (3, '��ѩ', 6, 0, 6, '���ʦ', 0, 62, 2, 1351148621, '1351148621', 1, 'admin', '', 0, 'qb_zhuangxiu_/6/1_20121025151041_314jy.jpg.gif', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1354602127, 1, 0, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', '', '', '', '', '', '', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (4, '������', 6, 0, 6, '���ʦ', 0, 53, 0, 1351148705, '1351148705', 1, 'admin', '', 0, 'qb_zhuangxiu_/6/1_20121025151005_g4w9m.jpg.gif', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1359362623, 1, 0, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', '', '', '', '', '', '', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (5, '������ƽ����������68ƽ���·�װ��', 1, 0, 1, 'װ���б�', 0, 1, 0, 1351148834, '1351148834', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351148835, 1, 13, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (6, '�����������Ÿ��� 93ƽ�׾ɷ�����', 1, 0, 1, 'װ���б�', 0, 2, 0, 1351148920, '1351148920', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353663645, 1, 0, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (7, '��̨���ѻ��ܸ���58ƽ�׾ɷ�����', 1, 0, 1, 'װ���б�', 0, 1, 0, 1351148974, '1351148974', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351148975, 1, 7, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (8, '��̨��¬���Ÿ���80ƽ���·�װ��', 1, 0, 1, 'װ���б�', 0, 1, 0, 1351149013, '1351149013', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149014, 1, 7, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (9, '���������²���ݸ���70ƽ�׾ɷ�����', 1, 0, 1, 'װ���б�', 0, 1, 0, 1351149054, '1351149054', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149055, 1, 1, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (10, '������ʢ����԰150ƽ�׾ɷ�����', 1, 0, 1, 'װ���б�', 0, 4, 0, 1351149094, '1351149094', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1352258361, 1, 2, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (11, '��������դ������20ƽ�׾ɷ�����', 1, 0, 1, 'װ���б�', 0, 1, 0, 1351149126, '1351149126', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149127, 1, 6, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (12, '��ƽ����ͨԷ120ƽ���·�װ��', 1, 0, 1, 'װ���б�', 0, 5, 0, 1351149164, '1351149164', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1352438848, 1, 0, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (13, '�������ϵ������¹��480ƽ�װ칫¥װ��', 1, 0, 1, 'װ���б�', 0, 11, 0, 1351149215, '1351149215', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1352438791, 1, 1, 11, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (14, '��ɽ���ֻ��87ƽ���·�װ��', 1, 0, 1, 'װ���б�', 0, 2, 0, 1351149247, '1351149247', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353650743, 1, 9, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (15, '������������120ƽ���·�װ��', 1, 0, 1, 'װ���б�', 0, 193, 3, 1351149286, '1351149286', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353650798, 1, 1, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (16, '�����г��������� ѡ��������������', 4, 0, 4, 'װ��ѧ��', 0, 1, 0, 1351149404, '1351149404', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149405, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (17, '��ʡ��Ӳ���� �Ҿ�װ����ѡǽֽ', 4, 0, 4, 'װ��ѧ��', 0, 3, 0, 1351149443, '1351149443', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353663642, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (18, '�����ѧ��װ�޳���20�������ɸ㶨��װ��', 4, 0, 4, 'װ��ѧ��', 0, 1, 0, 1351149476, '1351149476', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149477, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (19, 'ϸ�ھ���װ�޳ɰܣ����ò�����ע�����', 4, 0, 4, 'װ��ѧ��', 0, 31, 1, 1351149509, '1351149509', 1, 'admin', '', 0, 'qb_zhuangxiu_/4/1_20121123131153_gseby.jpg.gif', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1354260320, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (20, '�õİ칫����ƣ��������л�ܡ�˳�� ��', 4, 0, 4, 'װ��ѧ��', 0, 2, 0, 1351149570, '1351149570', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1352702720, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (21, '���������ҾӲ�Ʒ ����ν�װ�����̣�', 4, 0, 4, 'װ��ѧ��', 0, 1, 0, 1351149609, '1351149609', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149610, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (22, '��ͯ���滮��� ��֪4��ע�����', 4, 0, 4, 'װ��ѧ��', 0, 5, 1, 1351149640, '1351149640', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1352703111, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (23, '���ҳ������� ��ƾ����ɵ�����', 4, 0, 4, 'װ��ѧ��', 0, 2, 0, 1351149674, '1351149674', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353300449, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (24, '����ʩ��Ҫע�� ��ȫ�Ҿӿ�ϸ��', 4, 0, 4, 'װ��ѧ��', 0, 1, 0, 1351149709, '1351149709', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149710, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (25, '��װ�г������̨��Ԥ��Ҫ���� �м���Сʧ��', 4, 0, 4, 'װ��ѧ��', 0, 3, 0, 1351149737, '1351149737', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1354259048, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (26, '����Ϳ�ϡ�����ȩ���� װһ�����ѽ���������', 4, 0, 4, 'װ��ѧ��', 0, 2, 0, 1351149763, '1351149763', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353648660, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (27, '�����������֮�� ����ɭ��ϵ������̨��', 4, 0, 4, 'װ��ѧ��', 0, 51, 0, 1351149800, '1351149800', 1, 'admin', '', 0, 'qb_zhuangxiu_/4/1_20121123131128_cqiwg.jpg.gif', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353906173, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (28, '�ռ������� �ҾӶ�������12����', 3, 0, 3, 'װ����־', 0, 1, 0, 1351149861, '1351149861', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149862, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (29, '�༭�ܽᾭ�飺����ӵ�л�������סլ�ռ�!', 3, 0, 3, 'װ����־', 0, 2, 0, 1351149885, '1351149885', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353663637, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (30, '�Ӽ�����䣺ħ�����������Ҿ�����', 3, 0, 3, 'װ����־', 0, 1, 0, 1351149909, '1351149909', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149910, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (31, 'С�ռ�����֮���������������������', 3, 0, 3, 'װ����־', 0, 1, 0, 1351149936, '1351149936', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149937, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (32, '�а�������ů �����Ҿ����������У�', 3, 0, 3, 'װ����־', 0, 17, 0, 1351149961, '1351149961', 1, 'admin', '', 0, 'qb_zhuangxiu_/3/1_20121123131147_owsnb.jpg.gif', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353650726, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (33, '��ܡ�������ۺϼ�� �岽ѡ����ɳ��', 3, 0, 3, 'װ����־', 0, 1, 0, 1351149984, '1351149984', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351149986, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (34, 'װ���·� ��������ô��?������Ҳ���У�', 3, 0, 3, 'װ����־', 0, 1, 0, 1351150011, '1351150011', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351150012, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (35, 'װ�޴���֧�У���������С����װ�޿ռ��˷�', 3, 0, 3, 'װ����־', 0, 1, 0, 1351150040, '1351150040', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351150041, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (36, 'װ��������ˡ����ó� Ҫ��׼����ɰ˴�ע��', 3, 0, 3, 'װ����־', 0, 1, 0, 1351150064, '1351150064', 1, 'admin', '', 0, '', 0, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1351150066, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (37, '��ͥװ�޷�Ϊ�������� 9�н���ѡ��װ�޵��Σ�', 3, 0, 3, 'װ����־', 0, 11, 0, 1351150088, '1351150088', 1, 'admin', '', 0, 'qb_zhuangxiu_/3/1_20121123131115_v1qtp.jpg.gif', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353650725, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (38, '�����������Ʒ���Ҿ�װ�����޹�˾', 5, 0, 5, 'װ�޹�˾', 0, 30, 1, 1351150262, '1351150262', 1, 'admin', '', 0, 'zhuangxiu/headphoto_371152.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1363053458, 1, 1, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '������ƽ�������Ҿߣ������۵꣩�������װ��B2102', '', '', '39.929835374960035,116.33517072961422', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (39, '������Ե��װ��������޹�˾', 5, 0, 5, 'װ�޹�˾', 0, 3, 0, 1351150518, '1351150518', 1, 'admin', '', 0, 'zhuangxiu/headphoto_242450c.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1353648699, 1, 7, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '��̨���˻�Ӫ���������԰��Է����A��20��', '', '', '39.89402121811448,116.46975324914547', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (40, '�����������װ�ι������޹�˾', 5, 0, 5, 'װ�޹�˾', 0, 4, 0, 1351150593, '1351150593', 1, 'admin', '', 0, 'zhuangxiu/headphoto_251701c.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1358316422, 1, 0, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '��ƽ����ͨԷ̫ƽ��԰35��¥', '', '', '39.939838924426084,116.45018385217281', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (41, '�����ʢ����װ�ι������޹�˾', 5, 0, 5, 'װ�޹�˾', 0, 53, 0, 1351150656, '1351150656', 1, 'admin', '', 0, 'zhuangxiu/headphoto_436469c.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1354675664, 1, 0, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '��������·68����Ȼ������', '', '', '39.866489530854295,116.41464994714352', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (42, '�����޼ʺ��װ�����޹�˾', 5, 0, 5, 'װ�޹�˾', 0, 126, 1, 1351150728, '1351150728', 1, 'admin', '', 0, 'zhuangxiu/headphoto_250408c.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1359362528, 1, 0, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', 'admin', '', '�����г���������ϼҾӹ㳡', '', '', '39.93510058325899,116.34032057092281', 1, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (43, '2012����װ��ͼƬ��ȫ С����װ��Ч��ͼ', 2, 0, 2, 'װ�ް���', 0, 8, 0, 1351150890, '1351150890', 1, 'admin', '', 0, 'zhuangxiu/20121025_e347471b25a9473f0544LOX3OBFqVOij.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1363054065, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 3, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (44, '60ƽС������ʽ�������װ�� С�����', 2, 0, 2, 'װ�ް���', 0, 47, 0, 1351150960, '1351150960', 1, 'admin', '', 0, 'zhuangxiu/20120808_43a16b39ddd819bdb6aeDmmYrjZohsLt.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1363054063, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 4, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (45, '��Լ����ͼƬ �ڰ׿���װ��Ч��ͼ', 2, 0, 2, 'װ�ް���', 0, 10, 0, 1351151023, '1351151023', 1, 'admin', '', 0, 'zhuangxiu/20121025_3522af3343f63e47b7373Efed66yXrJD.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1363054060, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 4, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (46, '2012��ɫ����Ч��ͼ ����װ��Ч��ͼ��ȫ2012ͼƬ', 2, 0, 2, 'װ�ް���', 0, 16, 0, 1351151106, '1351151106', 1, 'admin', '', 0, 'zhuangxiu/20121025_1df70bda985b5aceda79zWnEULUi14ku.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1363054058, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 3, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (47, '��Լ������ɳ��װ��Ч��ͼ��ȫ2012ͼƬ', 2, 0, 2, 'װ�ް���', 0, 25, 0, 1351151345, '1351151345', 1, 'admin', '', 0, 'zhuangxiu/20121025_d4d2fdb9a966763224b1diSdQdjA42Ss.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1363054054, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 3, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (48, '50ƽ��С���Ϳ���ɳ��װ��Ч��ͼ', 2, 0, 2, 'װ�ް���', 0, 13, 0, 1351151925, '1351151925', 1, 'admin', '', 0, 'zhuangxiu/20121025_f03f4adc1990a8ea41efqG2kHCl6XgN2.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1363054051, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 3, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (49, 'ŷʽ�ִ�������ұ���ǽ����װ��Ч��ͼ', 2, 0, 2, 'װ�ް���', 0, 97, 0, 1351152057, '1351152057', 1, 'admin', '', 0, 'zhuangxiu/20121025_de98bcc4e542d02398caGMf7GssbHGEc.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1363054048, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 9, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (50, '������԰װ��ͼƬ', 2, 0, 2, 'װ�ް���', 0, 36, 0, 1351152224, '1351152224', 1, 'admin', '', 0, 'zhuangxiu/20121024_4fca3a9456d2c90ff85aquDAXw9q2EWV.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1363054044, 1, 0, 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', 3, 0);
INSERT INTO `qb_zhuangxiu_content` VALUES (51, '������', 6, 0, 6, '���ʦ', 0, 18, 0, 1351152435, '1351152435', 1, 'admin', '', 0, 'qb_zhuangxiu_/6/1_20121025161015_suqqv.jpg.gif', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 0, '', 1359362603, 1, 0, 0, '', 0, '', 0, '02028349635', '13399999999', 'qibobb@126.com', '888888', '', '', '', '', '', '', '', 1, 0);
    
# --------------------------------------------------------

#
# ��Ľṹ `qb_zhuangxiu_content_1`
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
# �������е����� `qb_zhuangxiu_content_1`
#

INSERT INTO `qb_zhuangxiu_content_1` VALUES ('1','5','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, ����, sans-serif; \">��ʱ������������ǰԤԼ��</span><span style=\"font-family: Arial, ����, sans-serif; \">���·�ë��������������Ϳ���������ϲ���ִ���Լ��װ�޷�񣬸�ֲ��������Ԥ����3�����ң�����ϸ����̸��</span>','1','4','1','89','������ƽ��10��¥');
INSERT INTO `qb_zhuangxiu_content_1` VALUES ('2','6','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, ����, sans-serif; \">��ĩ�����ܶ���������</span><span style=\"font-family: Arial, ����, sans-serif; \">��Ҫ���������װ�޹�˾��������һ����֤����Ķ��ַ���Ҫ���巭�£����Ԥ����3-5��Ҳ�ɿ���ȫ��������ϸ����̸��</span>','3','3','1','67','��������ˮ·89��');
INSERT INTO `qb_zhuangxiu_content_1` VALUES ('3','7','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, ����, sans-serif; \">����ĩ������������ǰԤԼ��</span><span style=\"font-family: Arial, ����, sans-serif; \">����Ķ��ַ����Ѿ���������Ҫ�ǳ�������������Ҫ�������װ�ޣ������򵥷���װ�ޣ���Ԥ��2-3�򣬾�����̸</span>','2','2','2','122','��̨���ѻ���8¥');
INSERT INTO `qb_zhuangxiu_content_1` VALUES ('4','8','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, ����, sans-serif; \">11����Ѯ������������ǰԤԼ��</span><span style=\"font-family: Arial, ����, sans-serif; \">��Ҫ���������װ�޹�˾��������һ���ı�֤���ִ���Լ��װ�޷���е�С���⣬����ϸ����̸</span>','1','4','2','56','��̨��¬���Ÿ���');
INSERT INTO `qb_zhuangxiu_content_1` VALUES ('5','9','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, ����, sans-serif; \">���緽����������ǰԤԼ��</span><span style=\"font-family: Arial, ����, sans-serif; \">����Ķ��ַ��������巭�£�������ͳ������ֲ��ã���Ҫ�Ķ��������ļ򵥷��£�������ƣ�����ϸ����̸��</span>','1','5','1','122','���������²���ݸ���');
INSERT INTO `qb_zhuangxiu_content_1` VALUES ('6','10','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, ����, sans-serif; \">��ĩ������������ǰԤԼ��</span><span style=\"font-family: Arial, ����, sans-serif; \">��Ҫ���������װ�޹�˾��������һ����֤���������ҵĸ�֣���ǰ�ǰ칫�ģ������뷭��װ���Լ�ס��ϲ����ʽ��װ�޷�񣬾���ϸ����̸��</span>','1','3','1','122','������ʢ����԰10��¥');
INSERT INTO `qb_zhuangxiu_content_1` VALUES ('7','11','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, ����, sans-serif; \">��ʱ������������ǰ�绰ԤԼ</span><span style=\"font-family: Arial, ����, sans-serif; \">���Ϸ���ƽ�������巭�£�ˮ����Ҫ���������鷿�õģ�ȫ����Ԥ����2�����ң�Ҫ������ÿռ䣬������ƣ�����װ�޷����Ҫ�����ʦ��ϸ��ͨ��װ�޹�˾��Ҫ�����á�����̬�Ⱥá��Լ۱ȸߣ�����ϸ����̸��</span>','1','1','2','77','��������դ������');
INSERT INTO `qb_zhuangxiu_content_1` VALUES ('8','12','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, ����, sans-serif; \">��ʱ������������ǰ2��ԤԼ��</span><span style=\"font-family: Arial, ����, sans-serif; \">���·����ѽ�������ë��������װ�ޣ�ȫ��Ԥ����3-5��Ҫ���������װ�޹�˾��������һ����֤������ϸ����̸��</span>','2','3','1','123','��ƽ����ͨԷ');
INSERT INTO `qb_zhuangxiu_content_1` VALUES ('9','13','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, ����, sans-serif; \">��ʱ������������ǰԤԼ��</span><span style=\"font-family: Arial, ����, sans-serif; \">��3�㣬�е����ң����칫¥�����������з��ģ�һ����Ա���칫���������쵼�칫������Ҫ��������Ϳͷ�����Ҫ��4���������1��������ǽ�漰�ذ壬������װ�ޣ�����ϸ����̸��</span>','3','1','1','480','�������ϵ������¹��');
INSERT INTO `qb_zhuangxiu_content_1` VALUES ('10','14','1','1','<span style=\"margin: 0px; padding: 0px; font-family: Arial, ����, sans-serif; \">����7�������ĩ������������ǰԤԼ��</span><span style=\"font-family: Arial, ����, sans-serif; \">��Ҫ���������װ�޹�˾��������һ����֤�����Ӹ�ֲ�����������Ҫ���ݷ�����������������Ԥ����4�����ң�����ϸ����̸��</span>','1','1','1','68','��ɽ���ֻ��');
INSERT INTO `qb_zhuangxiu_content_1` VALUES ('11','15','1','1','<span style=\"font-family:Arial, ����, sans-serif;margin: 0px; padding: 0px; \">�����շ�����������ǰ�绰ԤԼ</span><span style=\"font-family:Arial, ����, sans-serif;\">���·�������õģ���װ��ȫ��Ԥ����20����30��֮�䣬����װ�޷������ʦ��ͨ��װ�޹�˾��Ҫ�����á�ʩ�����պõģ�ϸ����̸��</span>','1','1','1','120','������������');

# --------------------------------------------------------

#
# ��Ľṹ `qb_zhuangxiu_content_2`
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
# �������е����� `qb_zhuangxiu_content_2`
#

INSERT INTO `qb_zhuangxiu_content_2` VALUES ('1','43','2','1','�򵥾�����','1','������','2','2','122','4');
INSERT INTO `qb_zhuangxiu_content_2` VALUES ('2','44','2','1','�򵥾�����','1','������','2','3','57','4');
INSERT INTO `qb_zhuangxiu_content_2` VALUES ('3','45','2','1','�򵥾�����','3','��ѩ','2','4','100','3');
INSERT INTO `qb_zhuangxiu_content_2` VALUES ('4','46','2','1','�򵥾�����','1','��ѩ','2','3','56','3');
INSERT INTO `qb_zhuangxiu_content_2` VALUES ('5','47','2','1','�򵥾�����','1','�ִ�÷','1','3.2','122','2');
INSERT INTO `qb_zhuangxiu_content_2` VALUES ('6','48','2','1','�򵥾�����','1','�ִ�÷','3','2.3','57','2');
INSERT INTO `qb_zhuangxiu_content_2` VALUES ('7','49','2','1','����װ�ޡ�','1','��Сѩ','4','5','122','1');
INSERT INTO `qb_zhuangxiu_content_2` VALUES ('8','50','2','1','�򵥾�����','1','��Сѩ','2','1','56','1');

# --------------------------------------------------------

#
# ��Ľṹ `qb_house_zhuangxiu_3`
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
# �������е����� `qb_zhuangxiu_content_3`
#

INSERT INTO `qb_zhuangxiu_content_3` VALUES ('1','28','3','1','<p> &nbsp; &nbsp;���쵽�ˣ��������ɹ�����С����ҵ����˵����һ���޵����񣺺��صĶ��������¸���ε��ţ�ҵ���Ǹ���ι滮�����ϴ�������ɿռ䡭��װ�޵�һ���༭֧�У���С���͵ļҶ���Ҳ���������ġ�</p>','1');
INSERT INTO `qb_zhuangxiu_content_3` VALUES ('2','29','3','1','<p> &nbsp; &nbsp;��ʹ�ô�ͳ�����ˢʱ������ǿ�ҵĴ̱�ζ������һ�ֶ������к��Ļӷ����л��������ΪVOC��װ�޵�һ�����Ѷ��ֽ񻷱���������߱�ʲô�������ܷ��ϻ�����Ҫ���أ�</p>','1');
INSERT INTO `qb_zhuangxiu_content_3` VALUES ('3','30','3','1','<p> &nbsp; &nbsp;�þ�����װ���ܹ�Ӫ���һ�ֻ�����ͨ͸�ķ�Χ���������ִ����ŷʽ����С��������ִ�����ʹ��ӡ������Ĥ��������������չ�ռ䣬ʹ��Ұ���ӿ�������ŷʽ�ŵ����У���ʹ�ø�Ĥ���ʹ�ͳ��ˮ���������ӵ���״��䣬�����Ρ������Ρ�Բ�Ρ���Բ�κͱ߽������εȶ��������ִ�����У�����ľ�ʾ���ġ����ξ���Ͷ�����ŷʽ���</p>','1');
INSERT INTO `qb_zhuangxiu_content_3` VALUES ('4','31','3','1','<p> &nbsp; &nbsp;��С�ռ���ηŴ�һ���У�������ڿ���ʽ����͸�Եĵ�������Լ����������ַ����˴ν����������컨��ļ��������ɫ���趨���м�������ķ�ʽ�����ܲ����ۼ��Ŵ�С�ռ䣡</p>','1');
INSERT INTO `qb_zhuangxiu_content_3` VALUES ('5','32','3','1','<p> &nbsp; &nbsp;���ǿ���Ϊ���˾���׼����һЩС��׺���ֻ���Ӫ��һЩ���������͵ȣ������üұ�ø���ů����Ϊ�Ӽ�ͥ���������˵���а�������ů��</p>','2');
INSERT INTO `qb_zhuangxiu_content_3` VALUES ('6','33','3','1','<p> &nbsp; &nbsp;�����ɳ���Ĳ��϶�������ʽ��������䡢��ɫ�ḻ��ʣ��۸�Ӽ�ǧԪ������Ԫ���ȣ�һЩ����ɳ���۸������ߴＸʮ�򡢼�������Щɳ�������ȴ���������������������������ͷ�ԣ���֪�������ѡһ����ʵ�����ɳ������֪����ѡɳ�������ܹ⿴���Ϻ͵��ԣ�ɳ���ĹǼܡ�����ϸ������Լ��ۺ��������Ҫ�Ĳο����ء�</p>','2');
INSERT INTO `qb_zhuangxiu_content_3` VALUES ('7','34','3','1','<p> &nbsp; &nbsp;�＾��װ�޵�������ϣ������������ڰѷ��Ӵ��õ�ҵ���ǣ����ż����֣�װ�޵�һ��֧��������˵˵װ��ʱ������������ġ�װ�ޣ���������ô�У������Ǹ������������</p>','2');
INSERT INTO `qb_zhuangxiu_content_3` VALUES ('8','35','3','1','<p> &nbsp; &nbsp;��С������ռ���г�����������£�С�ռ�����ɺͷָ���Ϊ�����˼�������⡣û���������һ���ҳ�һ����ķ����С�����������ʦ�ͱ�ʾ��һ��С�Ŀռ�ͺñ�һֻ�����䣬����ν�����������䡱���ú��������˵������ʹ��⡣</p>','3');
INSERT INTO `qb_zhuangxiu_content_3` VALUES ('9','36','3','1','<p> &nbsp; &nbsp;���Ǵ�ů������3�£�������һ��һ�ȵ���Ѽ�ͥװ��ʱ�Ρ�����ҵ������æµ��ʱ���ˣ����ڳ���װ�޵ġ�װ������˵װ�޿ɲ���һ���óԵġ��ˡ������������ô��̵�׼���ɣ���θ�װ�ι�˾Ǣ̸�������ʦ��ͨ��װ��ʩ��Ҫע����ЩҪ�죿��Щ����Ҫ֪���ģ�����С��ʹ������۲Ƹ���������һ��Ư���Ĵ�װս��</p>','3');
INSERT INTO `qb_zhuangxiu_content_3` VALUES ('10','37','3','1','<p> &nbsp; &nbsp;��ͥװ�ε���Ҫ�����ǶԵء�ǽ���������洦�����Ŵ����и��죬�Գ����������䡢�ƾߵȽ�����ʩ��������죬�Լ����׼Ҿߵ����������ݡ���ͥװ�οɷ�Ϊ�������Σ�</p>','3');

# --------------------------------------------------------

#
# ��Ľṹ `qb_zhuangxiu_content_4`
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
# �������е����� `qb_zhuangxiu_content_4`
#

INSERT INTO `qb_zhuangxiu_content_4` VALUES ('1','16','4','1','<p> &nbsp; &nbsp;�������Ųʶ�Ŀ�ĸ�¥ɫ�ʣ��ֵ����ͷ������ĳ������ᣬ�Ҿ�װ����ɫ�����޵�ǽ��ǽ�ڣ�����Ϣʱ��3C�����ʱ�����¡��������ѳ�Ϊ�����ճ������в��ɻ�ȱ��һ����������Ƥ����ѡ��һ��������⡢�������������ᣬ��ˢ����һ�����ۡ�����Ȼ��ǽ�棬������˵�׷��Ȼ��������������ӵ��г������ѡ�������ż��������ᣬ���˲��������ߵ��Ĳ�����</p>','1');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('2','17','4','1','<p> &nbsp; &nbsp;���ճ�װ���У�����ϲ��ѡ��һЩʱ�У����Ե�ǽֽ��װ���Լ����¾ӡ�����ǽֽ��ѡ���ò���ҵ������������ڣ�����װ�޵�һ����С���Ǿ��������߷�ҵ�����̼ң��ܽ��һЩѡ��ʱ�ļ��ɣ���������һ�����</p>','1');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('3','18','4','1','<p> &nbsp; &nbsp;�ﶬװ��æ������װ�޴������Ƿ���ͷ��ҩ��ôװ�ޣ�װ�ޣ������ǰ�����20����ɵġ����棬�����ž�װ�޵�һ��С�����֮���ܣ���Ŀǰ���˽��װ�޹����Լ�������������Ҫע������ϸ�ھ�������ϸ�Ĳ���һ�顭��</p>','2');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('4','19','4','1','<p> &nbsp; ����ʮ�£����������װ��ʱ�䡣����ʱ�����С���ﶼ���쳹��ʩ��������������װ����һ�����ӵĹ��̣���ͬʱҲ�Ǿ�ϸ���Щ�������������Ļ��ڣ�����ΪӰ���պ��ס�����Ĺؼ���װ�޵�һ����ϵ�ǰ�Ľ���������ϵһЩҵ���ľ����ѵ�����ʦ�����¼������������ѡ���</p>','2');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('5','20','4','1','<p> &nbsp; &nbsp;�칫����ƺò��ã�Ҳ�����ù��������е��˸о���˳���롰��˳������������ж������ڷŵú����Ժܸߣ��Ϳռ���кϵ�ܸߵ�ʱ�򣬾ͻ�ܡ�˳�������������ԡ���֡�����ȡ�</p>','3');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('6','21','4','1','<p> &nbsp; &nbsp;���Ʋ�Ʒ��������ҵ���ĸ��Ի����󣬵�Ҳ����һζ�Ը���ϲ��Ϊ�ο����ݣ�Ҫ���ȱ��ϲ�Ʒ�Ĺ����ԡ�ͬʱ�Ҿߵķ��Ҫ������ڵ���Ʒ��Э��һ�¡�</p>','3');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('7','22','4','1','<p> &nbsp; &nbsp;�ڷ���滮ʱ����Ҫ����С��������㣬��ѧ��ɳ���������һ���ӣ��в��ֹ�����ʵ�����ڳɳ�ʱ��һһ���ӣ�δ��Ҫһ�����������ʺ�С�����Ķ������Ρ��¹��Լ�������ͯ����ɫ���������Ԥ�ȹ滮��������Ϊ�����Ǵ����������ʵĳɳ�������</p>','4');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('8','23','4','1','<p> &nbsp; &nbsp;���ҳ��򲻺ã�ʵ���Ǽ����ĵ��¡��ɹ���Ӱ�죬ͨ�粻���죬�ټ��ϳ����ķ������䣬�����Ļ�Ҫ���ܡ����ա������ǻ��;�����������������ô�죿װ�޵�һ���༭�Ѽ�����������ϲ������㣬���򲻺ã�����Ҳ����ͨ��������ֲ���</p>','4');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('9','24','4','1','<p> &nbsp; &nbsp;װ��ʩ���е����ι��̣�������װ�޺������������������޷�������ʩ����Ŀ������װ�޹�����Щ�����ι��̡����ᱻ��һ�����������ǣ����Ժ��Ѽ��������Ƿ���Ϲ��ʩ���Ƿ�淶�����ι�����ָ������װ�α����ڲ��Ĺ��̡�</p>','5');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('10','25','4','1','<p> &nbsp; &nbsp;�ܶ�ҵ���ڳ������ƽ׶Σ��������һЩ��Ϊ����ռ�����˵�Ҫ�󣬱��磬������Ӵ����Ӵ���ռ�ȣ�����Ϊ�˽�ʡԤ�㣬ѡ����˵�������Щ������Ŀ��Եõ�ʵ����רҵ��ʿ���ѣ���ʡǮ��Ȼ�ã���Ҫ�ڱ�֤����ʹ�����������ܵ�ǰ���½��к���滮���������ר���Ƽ�ҵ����ע�ĺ���Ԥ��Ҫ�㡣</p>','5');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('11','26','4','1','<p> &nbsp; &nbsp;��ʮһ���ƽ��ܣ���������Ҿӽ�������íҲ�������ƣ����Żݵļ۸������������ߣ����С�����ȩ��Ϳ�ϵȻ��������ܵ�������������Э���չ�����15��Ϳ�ϱȽ���������ʾ�����Ϳ��Ʒ�ơ�����ȩ����Ʒ�ļ�ȩ�������ܣ��Լ���ȩ����Ч���־�������ָ������ѡ����У��������α���ȹ�����֪��Ϳ��Ʒ�ƶ����������� �Դˣ�ҵ��ר�����������߲�ҪäĿ���Ź�������ͳ���������ʱ������ѡ��һЩƷ��֪���ȸߵĲ�Ʒ�⣬����Ҫ���ǲ鿴Ҫ���Ʒ�����¼�ⱨ�档</p>','6');
INSERT INTO `qb_zhuangxiu_content_4` VALUES ('12','27','4','1','<p> &nbsp; �ܶ��û����е���̨���������������³������������¡��������գ�����̨�ϸ���һ������ֲ�������Ч���ڵ���ɹ������������ң������ڳ���ɭ�ְ�������������װ�޵�һ��С�������δ���ɭ��ϵ��̨С��԰��</p>','6');

# --------------------------------------------------------

#
# ��Ľṹ `qb_zhuangxiu_content_5`
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
# �������е����� `qb_zhuangxiu_content_5`
#

INSERT INTO `qb_zhuangxiu_content_5` VALUES ('1','38','5','1','<p> &nbsp; &nbsp;���������Ʒ�Ҿ�װ�����޹�˾��һ�Ҽ�װ����ơ�����ʩ�����������͡�ľ�š��ذ塢����Ϊһ���װ����ҵ����Ҫ����סլ����Ԣ���칫����ҵ���ƵꡢѧУ��ҽԺ�ȳ�����װ����ƺ�ʩ������˾�������й��̹������ʽ��׼ע�ᡢ������װ��Э�ᡢ�й�����װ��Э��Ļ�Ա��λ��</p>','������ƽ�������Ҿߣ������۵꣩�������װ��B2102','/#/С����/#/��ͨסլ/#/�ֲ�װ��/#/','/#/����/#/','/#/��Լ/#/�ִ�/#/');
INSERT INTO `qb_zhuangxiu_content_5` VALUES ('2','39','5','1','<p>�� &nbsp;��˾�������й��̹�����������ʽ��׼�ᣬ��ȡ�ù����������ʣ�����Ϊ����������װ��Э�ᡢ����������װ����ҵ����ɫװ����ҵ���Ա��λ��</p><p><br /></p><p>������Ӫ��Χ���Ϸ�װ�ޣ��·�װ�ޣ��ֲ����죬����װ�ޣ��칫��װ�ޡ�</p><p><br /></p><p>����������ּ����˾ʼ�ձ����ԡ����š����š�͸����������Ϊ���ǵķ�����ּ��</p><p><br /></p><p>������˾�������ɫ��װ������Ʒ�ơ���Ϊ���վӼҴ����г��ɫ����Ʒ������!</p><p><br /></p><p>������˾���У���Ʒ��ơ���Ʒʩ������Ʒ����Ŭ��������Ի���װ��Ʒ�ơ�</p><p><br /></p>','��̨���˻�Ӫ���������԰��Է����A��20��','/#/С����/#/��ͨסլ/#/�ֲ�װ��/#/','/#/����/#/','/#/��Լ/#/�ִ�/#/');
INSERT INTO `qb_zhuangxiu_content_5` VALUES ('3','40','5','1','<p> &nbsp; ����װ�ι�˾��һ�Ҽ�װ����ơ�����ʩ����װ����ҵ��������Ϸ�ʩ����Ա����Ҫ���¹�Ԣ��סլ���칫�ȳ�����װ������ơ���˾���Ƚ����������������ƹ���Ϊ���淶�Ĺ�����տ��ʩ�����������Ƶķ�����ϵ��Ϊ�ͻ��ṩרҵ�������Ի������Ի���װ�޺ͷ��񡣹�˾�������������棬��������չ�������ͻ����������ǹ�����Ψһ��׼��һ�κ�����Զ���ѡ���˾רҵ�нӸ���������װ��װ�޹��̣��Եͼ�λ����Ʒ�ʡ����ʵ��ۺ���񿪷��г���<br /></p>','��ƽ����ͨԷ̫ƽ��԰35��¥','/#/С����/#/��ͨסլ/#/�ֲ�װ��/#/','/#/����/#/','/#/��Լ/#/�ִ�/#/');
INSERT INTO `qb_zhuangxiu_content_5` VALUES ('4','41','5','1','<p> &nbsp; ��������˾�����Ȳ���չ�������г�������Ʋ������̲����󻮲������񲿡��ͻ����񲿡�������Դ���Ͳ����������İ˸����š������˴ӷ�����ơ�����ʩ���������ල���ۺ�����һ����ϸ�º���ķ���������ϵ���ɾ���ḻ��ʱ�д��µ���ƾ�Ӣ��������ѵ�����������Ϸ�����������רҵ�Ĺ�����Ա��ͬ�齨��һ֧���š���ҵ����ʵ�����µľ�Ӣ�Ŷӡ�<br /></p>','��������·68����Ȼ������','/#/С����/#/��ͨסլ/#/�ֲ�װ��/#/','/#/����/#/','/#/��Լ/#/�ִ�/#/');
INSERT INTO `qb_zhuangxiu_content_5` VALUES ('5','42','5','1','<p> &nbsp; �޼ʺ��װ�δ���װ����ҵ�����������˷ḻ�ľ��飬����ʼ���Ƴ硰������棬����ʵ�ݡ����������������ڿͻ� &nbsp;����������ϡ��ڷܡ���Խ�����µ���ҵ�����ԡ����ȵķ���������ļҾ�Ʒ�ʡ�Ϊ��ּ���������ң�����Ի��������޼ʺ���δ�����������׷��Ը���ǹ�ͬЯ��Ŭ����������������ļҾ�װ�κ����ʻ�����<br /></p>','�����г���������ϼҾӹ㳡','/#/С����/#/��ͨסլ/#/�ֲ�װ��/#/','/#/����/#/','/#/��Լ/#/�ִ�/#/');

# --------------------------------------------------------

#
# ��Ľṹ `qb_zhuangxiu_content_6`
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
# �������е����� `qb_zhuangxiu_content_6`
#

INSERT INTO `qb_zhuangxiu_content_6` VALUES ('1','1','6','1','<p>������ƣ�</p><p>�ͻ����ϵۣ�</p>','�����޼ʺ��װ�����޹�˾','����','/#/��ͨסլ/#/д��¥/#/����/#/','/#/��Լ/#/�ִ�/#/','û����ã�ֻ�и���','42');
INSERT INTO `qb_zhuangxiu_content_6` VALUES ('2','2','6','1','<p>��������������ʦ��</p><p>ʱ��Ϊ�û����룡</p>','�����ʢ����װ�ι������޹�˾','����','/#/��ͨסլ/#/����/#/','/#/��Լ/#/�ִ�/#/��ʽ/#/','һ��Ϊ�˿ͻ���','41');
INSERT INTO `qb_zhuangxiu_content_6` VALUES ('3','3','6','1','<p>̤̤ʵʵΪ�ͻ�����ƣ�</p><p>��������Ĺ�����</p>','�����������װ�ι������޹�˾','����','/#/��ͨסլ/#/����/#/','/#/��Լ/#/�ִ�/#/ŷʽ/#/','׷������������Ƹ��ͻ���','40');
INSERT INTO `qb_zhuangxiu_content_6` VALUES ('4','4','6','1','<p>���ӹ�˾�İ��ţ�</p><p>���ӿͻ��������</p>','������Ե��װ��������޹�˾','��������','/#/��ͨסլ/#/����/#/','/#/��Լ/#/�ִ�/#/ŷʽ/#/','����õĶ������ͻ���','39');
INSERT INTO `qb_zhuangxiu_content_6` VALUES ('5','51','6','1','�ͻ�Ҫ�ģ��������㣡','�����������Ʒ���Ҿ�װ�����޹�˾','һ��','/#/��ͨסլ/#/','/#/��Լ/#/�ִ�/#/','һ��Ϊ�˿ͻ�����Ҫ��','38');

# --------------------------------------------------------

#
# ��Ľṹ `qb_zhuangxiu_db`
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
# �������е����� `qb_zhuangxiu_db`
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
# ��Ľṹ `qb_zhuangxiu_dianping`
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
# �������е����� `qb_zhuangxiu_dianping`
#


# --------------------------------------------------------

#
# ��Ľṹ `qb_zhuangxiu_field`
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
# �������е����� `qb_zhuangxiu_field`
#

INSERT INTO `qb_zhuangxiu_field` VALUES ('1','1','����Ҫ��','content','mediumtext','0','11','ieeditsimp','600','150','','','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('2','1','��Ŀ����','sortid','int','3','20','radio','0','0','1|��ͨסլ\r\n2|����\r\n3|�칫¥\r\n4|����','1','','','1','1','1','1','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('84','2','�������ʦ','designer','varchar','50','0','text','200','0','','','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('22','2','װ�޷���','sortid','int','3','20','radio','0','0','1|��ͨסլ\r\n2|����\r\n3|����','1','','','0','1','1','1','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('21','2','װ�ް�������','content','mediumtext','0','-1','ieeditsimp','600','150','','','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('9','5','��˾����','content','mediumtext','0','-1','ieedit','600','200','','','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('77','6','��ҵ����','experience','varchar','50','0','radio','0','0','һ��\r\n����\r\n����\r\n��������','һ��','','','0','0','1','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('11','6','���˽���','content','mediumtext','0','-1','ieeditsimp','600','150','','','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('12','6','����װ�޹�˾','in_company','varchar','100','0','text','200','0','','','','','0','1','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('13','1','Ԥ���Ǯ','price','int','2','19','select','0','0','1|5000Ԫ����\r\n2|1��Ԫ����\r\n3|2��Ԫ����\r\n4|3��Ԫ����\r\n5|4��Ԫ����\r\n3|5��Ԫ����\r\n7|����','','','','0','1','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('14','1','װ�޷�ʽ','supply_type','int','1','18','radio','0','0','1|ȫ��\r\n2|���','1','','','0','0','1','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('16','1','װ�����','acreage','varchar','12','16','text','5','0','','','ƽ����','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('19','1','����λ��','station','varchar','100','13','text','300','0','','','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('86','2','��Ʒ��','design_style','int','2','0','radio','0','0','1|��Լ\r\n2|�ִ�\r\n3|��ʽ\r\n4|ŷʽ\r\n5|��ʽ\r\n6|��԰\r\n7|�ŵ�\r\n8|���\r\n9|���к�','2','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('87','2','װ�����','total_price','varchar','10','0','text','100','0','','','��Ԫ','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('88','2','װ�����','acreage','varchar','10','0','text','100','0','','','ƽ����','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('31','3','����','content','mediumtext','0','-1','ieedit','400','300','','','','','1','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('92','3','����','sortid','int','2','1','radio','0','0','1|װ��ǰ\r\n2|װ����\r\n3|װ�޺�','','','','1','0','1','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('41','4','����','content','mediumtext','0','-1','ieedit','400','300','','','','','1','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('91','4','����','sortid','int','2','1','radio','0','0','1|����ѡ��\r\n2|װ�޳�ʶ\r\n3|Ʒζ����\r\n4|���ָ��\r\n5|װ�޹���\r\n6|��װ��Ⱦ','','','','1','1','1','1','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('52','5','��˾��ַ','address','varchar','150','-2','text','400','0','','','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('81','6','���ר��','skill','varchar','100','0','checkbox','0','0','��ͨסլ\r\nд��¥\r\n����\r\nר��չʾ��\r\n�Ƶ����\r\n�����ư�\r\n�������\r\n����','��ͨסլ','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('94','6','������˾ID(���ر���)','company_id','int','10','0','text','0','0','','','','ע�⣺�ñ��������ر�����ϵͳҪ�õ����벻Ҫɾ���������޸ģ���Ȼҳ���Ͽ�����','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('83','6','�������','design_goal','varchar','200','0','text','300','0','','','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('80','5','װ�޷��','build_style','varchar','100','0','checkbox','0','0','��Լ\r\n�ִ�\r\n��ʽ\r\nŷʽ\r\n��ʽ\r\n��԰\r\n�ŵ�\r\n���\r\n���к�','��Լ/�ִ�','','','0','0','1','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('79','5','��ҵװ��','business_type','varchar','100','0','checkbox','0','0','KTV\r\n����\r\n����/��¥\r\n����/����\r\n���ֳ���\r\n�Ƶ�\r\nչ��\r\n����\r\nд��¥\r\nѧУ\r\nҽԺ','����','','','0','0','1','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('93','2','�������ʦID(���ر���)','designer_id','int','10','0','text','0','0','','','','ע�⣺�ñ��������ر�����ϵͳҪ�õ����벻Ҫɾ���������޸ģ���Ȼҳ���Ͽ�����','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('82','6','��Ʒ��','design_style','varchar','100','0','checkbox','0','0','��Լ\r\n�ִ�\r\n��ʽ\r\nŷʽ\r\n��ʽ\r\n��԰\r\n�ŵ�\r\n���\r\n���к�','��Լ/�ִ�','','','0','0','0','0','','','','','31','');
INSERT INTO `qb_zhuangxiu_field` VALUES ('78','5','��ͥװ��','home_type','varchar','100','0','checkbox','0','0','С����\r\n��Ԣ\r\n����\r\n��ͨסլ\r\n�ֲ�װ��','С����/��ͨסլ/�ֲ�װ��','','','0','0','1','0','','','','','31','');

# --------------------------------------------------------

#
# ��Ľṹ `qb_zhuangxiu_module`
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
# �������е����� `qb_zhuangxiu_module`
#

INSERT INTO `qb_zhuangxiu_module` VALUES ('1','0','װ���б�','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','a:4:{s:4:\"list\";s:17:\"list_zhaobiao.htm\";s:4:\"show\";s:21:\"bencandy_zhaobiao.htm\";s:4:\"post\";s:17:\"post_zhaobiao.htm\";s:6:\"search\";s:0:\"\";}');
INSERT INTO `qb_zhuangxiu_module` VALUES ('2','0','װ�ް���','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','a:4:{s:4:\"list\";s:13:\"list_demo.htm\";s:4:\"show\";s:17:\"bencandy_demo.htm\";s:4:\"post\";s:13:\"post_demo.htm\";s:6:\"search\";s:0:\"\";}');
INSERT INTO `qb_zhuangxiu_module` VALUES ('3','0','װ����־','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','a:4:{s:4:\"list\";s:0:\"\";s:4:\"show\";s:0:\"\";s:4:\"post\";s:0:\"\";s:6:\"search\";s:0:\"\";}');
INSERT INTO `qb_zhuangxiu_module` VALUES ('4','0','װ��ѧ��','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','a:4:{s:4:\"list\";s:0:\"\";s:4:\"show\";s:0:\"\";s:4:\"post\";s:0:\"\";s:6:\"search\";s:0:\"\";}');
INSERT INTO `qb_zhuangxiu_module` VALUES ('5','0','װ�޹�˾','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"1\";}}','','0','0','a:4:{s:4:\"list\";s:16:\"list_company.htm\";s:4:\"show\";s:20:\"bencandy_company.htm\";s:4:\"post\";s:16:\"post_company.htm\";s:6:\"search\";s:0:\"\";}');
INSERT INTO `qb_zhuangxiu_module` VALUES ('6','0','���ʦ','0','','a:1:{s:9:\"moduleSet\";a:1:{s:6:\"useMap\";s:1:\"0\";}}','','0','0','a:4:{s:4:\"list\";s:17:\"list_designer.htm\";s:4:\"show\";s:21:\"bencandy_designer.htm\";s:4:\"post\";s:17:\"post_designer.htm\";s:6:\"search\";s:0:\"\";}');

# --------------------------------------------------------

#
# ��Ľṹ `qb_zhuangxiu_pic`
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
# �������е����� `qb_zhuangxiu_pic`
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
INSERT INTO `qb_zhuangxiu_pic` VALUES (46, 32, 3, 0, 1, 0, 'qb_zhuangxiu_/3/1_20121123131147_owsnb.jpg', '�·���');
    
# --------------------------------------------------------

#
# ��Ľṹ `qb_zhuangxiu_report`
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
# �������е����� `qb_zhuangxiu_report`
#


# --------------------------------------------------------

#
# ��Ľṹ `qb_zhuangxiu_sort`
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
# �������е����� `qb_zhuangxiu_sort`
#

INSERT INTO `qb_zhuangxiu_sort` VALUES ('1','0','װ���б�','1','1','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:1:{s:11:\"field_value\";N;}','0','0','','chuzu','0');
INSERT INTO `qb_zhuangxiu_sort` VALUES ('2','0','װ�ް���','2','1','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:1:{s:11:\"field_value\";N;}','0','0','','chushou','0');
INSERT INTO `qb_zhuangxiu_sort` VALUES ('3','0','װ����־','3','1','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:1:{s:11:\"field_value\";N;}','0','0','','qiuzu','0');
INSERT INTO `qb_zhuangxiu_sort` VALUES ('4','0','װ��ѧ��','4','1','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:1:{s:11:\"field_value\";N;}','0','0','','qiugou','0');
INSERT INTO `qb_zhuangxiu_sort` VALUES ('5','0','װ�޹�˾','5','1','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:2:{s:7:\"is_html\";N;s:11:\"field_value\";N;}','0','0','','xiaoqu','0');
INSERT INTO `qb_zhuangxiu_sort` VALUES ('6','0','���ʦ','6','1','0','0','','0','0','','','','','a:4:{s:4:\"head\";s:0:\"\";s:4:\"foot\";s:0:\"\";s:4:\"list\";s:0:\"\";s:8:\"bencandy\";s:0:\"\";}','','0','','','','0','','','','','0','a:1:{s:11:\"field_value\";N;}','0','0','','zhongjie','0');
