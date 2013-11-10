INSERT INTO `qb_module` (`id`, `type`, `name`, `pre`, `dirname`, `domain`, `admindir`, `config`, `list`, `admingroup`, `adminmember`, `ifclose`) VALUES (40, 2, '二手市场', '2shou_', '2shou', '', '', 'a:7:{s:12:"list_PhpName";s:18:"list.php?&fid=$fid";s:12:"show_PhpName";s:29:"bencandy.php?&fid=$fid&id=$id";s:8:"MakeHtml";N;s:14:"list_HtmlName1";N;s:14:"show_HtmlName1";N;s:14:"list_HtmlName2";N;s:14:"show_HtmlName2";N;}', 0, '', '', 0);

INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_listpic', 'Info_2shou_', 1, 'a:30:{s:13:"tplpart_1code";s:203:"<dl> \r\n<dt><a  href="$url" target="_blank"><img  src="$picurl" width="100"></a></dt>\r\n<dd>\r\n<h3><A HREF="$url" title=\'$full_title\' target="_blank">$title</A></h3>\r\n<div>{$sellprice}元</div>\r\n</dd>\r\n</dl>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:6:"2shou_";s:7:"typefid";N;s:6:"cityId";s:17:"$GLOBALS[city_id]";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:24:"/common_pic/img_div1.jpg";s:6:"DivTpl";i:1;s:5:"fiddb";N;s:8:"moduleid";s:0:"";s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:2:"16";s:3:"sql";s:144:"(SELECT * FROM qb_2shou_content  WHERE ispic=1 AND city_id=\'$GLOBALS[city_id]\'  AND city_id=\'$GLOBALS[city_id]\' ) ORDER BY list DESC LIMIT 0,16 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext1', 'code', 0, '<li><a href="#" target="_blank"><img src="http://www_qibosoft_com/2shou/images/default/ad1.gif" width="134" height="72" /></a></li>\r\n<li><a href="#" target="_blank"><img src="http://www_qibosoft_com/2shou/images/default/ad2.gif" width="134" height="72" /></a></li>\r\n<li><a href="#" target="_blank"><img src="http://www_qibosoft_com/2shou/images/default/ad3.gif" width="134" height="72" /></a></li>\r\n<li><a href="#" target="_blank"><img src="http://www_qibosoft_com/2shou/images/default/ad4.gif" width="134" height="72" /></a></li>\r\n<li><a href="#" target="_blank"><img src="http://www_qibosoft_com/2shou/images/default/ad5.gif" width="134" height="72" /></a></li>\r\n<li><a href="#" target="_blank"><img src="http://www_qibosoft_com/2shou/images/default/ad6.gif" width="134" height="72" /></a></li>\r\n<li><a href="#" target="_blank"><img src="http://www_qibosoft_com/2shou/images/default/ad7.gif" width="134" height="72" /></a></li>\r\n', 'a:4:{s:9:"html_edit";N;s:5:"div_w";s:3:"980";s:5:"div_h";s:2:"54";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1317113040, 0, 40, 0, 0, 'deepblue');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext2', 'code', 0, '<div onMouseOver=changeshow(1,1,3) id="Mune1" class="ck"><span>二手资讯</span></div>\r\n<div onMouseOver=changeshow(2,1,3) id="Mune2"><span>网站公告</span></div>', 'a:4:{s:9:"html_edit";N;s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext3', 'Info_news_', 1, 'a:36:{s:13:"tplpart_1code";s:71:"<dt><a href="$url" target="_blank">$title</a></dt>\r\n<dd>$content</dd>\r\n";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:5:"news_";s:9:"noReadMid";s:0:"";s:13:"RollStyleType";s:0:"";s:7:"fidtype";s:1:"0";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:7:"newhour";s:2:"24";s:7:"hothits";s:3:"100";s:7:"amodule";N;s:7:"tplpath";s:29:"/common_content/content_1.jpg";s:6:"DivTpl";i:1;s:5:"fiddb";N;s:5:"stype";s:1:"c";s:2:"yz";s:1:"1";s:7:"hidefid";N;s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:6:"A.list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"1";s:3:"sql";s:169:" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 0,1 ";s:4:"sql2";N;s:7:"colspan";s:1:"1";s:11:"content_num";s:2:"80";s:12:"content_num2";s:3:"120";s:8:"titlenum";s:2:"40";s:9:"titlenum2";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1317091939, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext4', 'Info_news_', 1, 'a:36:{s:13:"tplpart_1code";s:52:"<li><a href="$url" target="_blank">$title</a></li>\r\n";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:5:"news_";s:9:"noReadMid";s:0:"";s:13:"RollStyleType";s:0:"";s:7:"fidtype";s:1:"0";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:7:"newhour";s:2:"24";s:7:"hothits";s:3:"100";s:7:"amodule";N;s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";N;s:5:"stype";s:1:"4";s:2:"yz";s:1:"1";s:7:"hidefid";N;s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:6:"A.list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"5";s:3:"sql";s:116:" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 1,5 ";s:4:"sql2";N;s:7:"colspan";s:1:"1";s:11:"content_num";s:2:"80";s:12:"content_num2";s:3:"120";s:8:"titlenum";s:2:"40";s:9:"titlenum2";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"2";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext5', 'Info_news_', 1, 'a:36:{s:13:"tplpart_1code";s:69:"<dt><a href="$url" target="_blank">$title</a></dt>\r\n<dd>$content</dd>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:5:"news_";s:9:"noReadMid";s:0:"";s:13:"RollStyleType";s:0:"";s:7:"fidtype";s:1:"0";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:7:"newhour";s:2:"24";s:7:"hothits";s:3:"100";s:7:"amodule";N;s:7:"tplpath";s:29:"/common_content/content_1.jpg";s:6:"DivTpl";i:1;s:5:"fiddb";N;s:5:"stype";s:1:"c";s:2:"yz";s:1:"1";s:7:"hidefid";N;s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:6:"A.list";s:3:"asc";s:3:"ASC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"1";s:3:"sql";s:168:" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list ASC LIMIT 0,1 ";s:4:"sql2";N;s:7:"colspan";s:1:"1";s:11:"content_num";s:2:"80";s:12:"content_num2";s:3:"120";s:8:"titlenum";s:2:"40";s:9:"titlenum2";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext6', 'Info_news_', 1, 'a:36:{s:13:"tplpart_1code";s:50:"<li><a href="$url" target="_blank">$title</a></li>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:5:"news_";s:9:"noReadMid";s:0:"";s:13:"RollStyleType";s:0:"";s:7:"fidtype";s:1:"0";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:7:"newhour";s:2:"24";s:7:"hothits";s:3:"100";s:7:"amodule";N;s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";N;s:5:"stype";s:1:"4";s:2:"yz";s:1:"1";s:7:"hidefid";N;s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:6:"A.list";s:3:"asc";s:3:"ASC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"5";s:3:"sql";s:115:" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list ASC LIMIT 1,5 ";s:4:"sql2";N;s:7:"colspan";s:1:"1";s:11:"content_num";s:2:"80";s:12:"content_num2";s:3:"120";s:8:"titlenum";s:2:"40";s:9:"titlenum2";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"2";s:10:"c_rolltype";s:1:"0";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext7', 'rollpic', 0, 'a:7:{s:13:"tplpart_1code";s:357:"<ul id="SlideCont" style="display:none;">\r\n<!--\r\nEOT;\r\n$i=0;\r\nforeach($listdb AS $rs){extract($rs);\r\n$i++;\r\n$num=$i+1;\r\nprint <<<EOT\r\n-->\r\n    <li><a href="$url"></a><img src="$picurl" /><span>$title</span></li>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->\r\n</ul>\r\n<SCRIPT LANGUAGE="JavaScript" src="http://www_qibosoft_com/2shou/images/default/showslide.js"></SCRIPT>";s:8:"rolltype";s:1:"2";s:5:"width";s:0:"";s:6:"height";s:0:"";s:6:"picurl";a:5:{i:1;s:29:"../2shou/images/default/1.jpg";i:2;s:29:"../2shou/images/default/2.jpg";i:3;s:29:"../2shou/images/default/3.jpg";i:4;s:29:"../2shou/images/default/4.jpg";i:5;s:29:"../2shou/images/default/5.jpg";}s:7:"piclink";a:5:{i:1;s:1:"#";i:2;s:1:"#";i:3;s:1:"#";i:4;s:1:"#";i:5;s:1:"#";}s:6:"picalt";a:5:{i:1;s:22:"2011城市主题公园亲子游";i:2;s:20:"潜入城市周边清幽之地";i:3;s:16:"盘点中国最美雪山";i:4;s:18:"2011西安世园会攻略";i:5;s:22:"五月乐享懒人天堂塞班岛";}}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"21";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1317112962, 0, 40, 0, 0, 'deepblue');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext8', 'code', 0, '<div onMouseOver=changeshow(3,3,5) id="Mune3" class="ck"><span>笔记本/整机</span></div>\r\n<div onMouseOver=changeshow(4,3,5) id="Mune4"><span>手机/数码</span></div>\r\n<div class="more"><a href="list.php?fid=4" target="_blank">更多&gt;&gt;</a></div>\r\n', 'a:4:{s:9:"html_edit";N;s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext9', 'Info_2shou_', 1, 'a:30:{s:13:"tplpart_1code";s:425:"<!--\r\nEOT;\r\nforeach($listdb AS $rs){extract($rs);\r\n$sortiddb = array("全新","一成新","二成新","三成新","四成新","五成新","六成新","七成新","八成新","九成新");\r\nprint <<<EOT\r\n-->\r\n<dt><a href="$url" target="_blank"><img src="$picurl" width="120" /></a></dt>\r\n<dd>\r\n    <h3><a href="$url" target="_blank">$title</a></h3>\r\n    <div>{$sellprice}元<span>({$sortiddb[$sortid]})</span></div>\r\n</dd>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:6:"2shou_";s:7:"typefid";N;s:6:"cityId";s:17:"$GLOBALS[city_id]";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";a:1:{i:0;s:2:"23";}s:8:"moduleid";s:0:"";s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"1";s:3:"sql";s:160:"(SELECT * FROM qb_2shou_content  WHERE ispic=1 AND city_id=\'$GLOBALS[city_id]\'  AND city_id=\'$GLOBALS[city_id]\'  AND fid IN (23) ) ORDER BY list DESC LIMIT 0,1 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"20";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1317096660, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext10', 'Info_2shou_', 1, 'a:30:{s:13:"tplpart_1code";s:79:"<div><a href="$url" target="_blank">$title</a><span>{$sellprice}元</span></div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:6:"2shou_";s:7:"typefid";N;s:6:"cityId";s:17:"$GLOBALS[city_id]";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";a:1:{i:0;s:2:"23";}s:8:"moduleid";s:0:"";s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"6";s:3:"sql";s:148:"(SELECT * FROM qb_2shou_content  WHERE city_id=\'$GLOBALS[city_id]\'  AND city_id=\'$GLOBALS[city_id]\'  AND fid IN (23) ) ORDER BY list DESC LIMIT 1,6 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"30";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"2";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1317097448, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext11', 'Info_2shou_', 1, 'a:30:{s:13:"tplpart_1code";s:425:"<!--\r\nEOT;\r\nforeach($listdb AS $rs){extract($rs);\r\n$sortiddb = array("全新","一成新","二成新","三成新","四成新","五成新","六成新","七成新","八成新","九成新");\r\nprint <<<EOT\r\n-->\r\n<dt><a href="$url" target="_blank"><img src="$picurl" width="120" /></a></dt>\r\n<dd>\r\n    <h3><a href="$url" target="_blank">$title</a></h3>\r\n    <div>{$sellprice}元<span>({$sortiddb[$sortid]})</span></div>\r\n</dd>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:6:"2shou_";s:7:"typefid";N;s:6:"cityId";s:17:"$GLOBALS[city_id]";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";a:1:{i:0;s:2:"31";}s:8:"moduleid";s:0:"";s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"1";s:3:"sql";s:160:"(SELECT * FROM qb_2shou_content  WHERE ispic=1 AND city_id=\'$GLOBALS[city_id]\'  AND city_id=\'$GLOBALS[city_id]\'  AND fid IN (31) ) ORDER BY list DESC LIMIT 0,1 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"20";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext12', 'Info_2shou_', 1, 'a:30:{s:13:"tplpart_1code";s:79:"<div><a href="$url" target="_blank">$title</a><span>{$sellprice}元</span></div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:6:"2shou_";s:7:"typefid";N;s:6:"cityId";s:17:"$GLOBALS[city_id]";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";a:1:{i:0;s:2:"31";}s:8:"moduleid";s:0:"";s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"6";s:3:"sql";s:148:"(SELECT * FROM qb_2shou_content  WHERE city_id=\'$GLOBALS[city_id]\'  AND city_id=\'$GLOBALS[city_id]\'  AND fid IN (31) ) ORDER BY list DESC LIMIT 1,6 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"30";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"2";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1317097461, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext17', 'Info_2shou_', 1, 'a:30:{s:13:"tplpart_1code";s:79:"<div><a href="$url" target="_blank">$title</a><span>{$sellprice}元</span></div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:6:"2shou_";s:7:"typefid";N;s:6:"cityId";s:17:"$GLOBALS[city_id]";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";a:1:{i:0;s:1:"7";}s:8:"moduleid";s:0:"";s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"6";s:3:"sql";s:147:"(SELECT * FROM qb_2shou_content  WHERE city_id=\'$GLOBALS[city_id]\'  AND city_id=\'$GLOBALS[city_id]\'  AND fid IN (7) ) ORDER BY list DESC LIMIT 1,6 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"30";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"2";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1317097435, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext19', 'Info_2shou_', 1, 'a:30:{s:13:"tplpart_1code";s:79:"<div><a href="$url" target="_blank">$title</a><span>{$sellprice}元</span></div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:6:"2shou_";s:7:"typefid";N;s:6:"cityId";s:17:"$GLOBALS[city_id]";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";a:1:{i:0;s:1:"8";}s:8:"moduleid";s:0:"";s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"6";s:3:"sql";s:147:"(SELECT * FROM qb_2shou_content  WHERE city_id=\'$GLOBALS[city_id]\'  AND city_id=\'$GLOBALS[city_id]\'  AND fid IN (8) ) ORDER BY list DESC LIMIT 1,6 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"30";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"2";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext16', 'Info_2shou_', 1, 'a:30:{s:13:"tplpart_1code";s:425:"<!--\r\nEOT;\r\nforeach($listdb AS $rs){extract($rs);\r\n$sortiddb = array("全新","一成新","二成新","三成新","四成新","五成新","六成新","七成新","八成新","九成新");\r\nprint <<<EOT\r\n-->\r\n<dt><a href="$url" target="_blank"><img src="$picurl" width="120" /></a></dt>\r\n<dd>\r\n    <h3><a href="$url" target="_blank">$title</a></h3>\r\n    <div>{$sellprice}元<span>({$sortiddb[$sortid]})</span></div>\r\n</dd>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:6:"2shou_";s:7:"typefid";N;s:6:"cityId";s:17:"$GLOBALS[city_id]";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";a:1:{i:0;s:1:"7";}s:8:"moduleid";s:0:"";s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"1";s:3:"sql";s:159:"(SELECT * FROM qb_2shou_content  WHERE ispic=1 AND city_id=\'$GLOBALS[city_id]\'  AND city_id=\'$GLOBALS[city_id]\'  AND fid IN (7) ) ORDER BY list DESC LIMIT 0,1 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"20";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext18', 'Info_2shou_', 1, 'a:30:{s:13:"tplpart_1code";s:425:"<!--\r\nEOT;\r\nforeach($listdb AS $rs){extract($rs);\r\n$sortiddb = array("全新","一成新","二成新","三成新","四成新","五成新","六成新","七成新","八成新","九成新");\r\nprint <<<EOT\r\n-->\r\n<dt><a href="$url" target="_blank"><img src="$picurl" width="120" /></a></dt>\r\n<dd>\r\n    <h3><a href="$url" target="_blank">$title</a></h3>\r\n    <div>{$sellprice}元<span>({$sortiddb[$sortid]})</span></div>\r\n</dd>\r\n<!--\r\nEOT;\r\n}\r\nprint <<<EOT\r\n-->";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:6:"2shou_";s:7:"typefid";N;s:6:"cityId";s:17:"$GLOBALS[city_id]";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";a:1:{i:0;s:1:"8";}s:8:"moduleid";s:0:"";s:5:"stype";s:1:"p";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"1";s:3:"sql";s:159:"(SELECT * FROM qb_2shou_content  WHERE ispic=1 AND city_id=\'$GLOBALS[city_id]\'  AND city_id=\'$GLOBALS[city_id]\'  AND fid IN (8) ) ORDER BY list DESC LIMIT 0,1 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"20";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext13', 'pic', 0, 'a:4:{s:6:"imgurl";s:31:"../2shou/images/default/ad8.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"205";s:6:"height";s:2:"60";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"21";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1317113095, 0, 40, 0, 0, 'deepblue');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext14', 'pic', 0, 'a:4:{s:6:"imgurl";s:31:"../2shou/images/default/ad9.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"205";s:6:"height";s:2:"60";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"21";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1317113109, 0, 40, 0, 0, 'deepblue');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext15', 'code', 0, '<div onMouseOver=changeshow(5,5,7) id="Mune5" class="ck"><span>电视机</span></div>\r\n<div onMouseOver=changeshow(6,5,7) id="Mune6"><span>洗衣机</span></div>\r\n<div class="more"><a href="list.php?fid=8" target="_blank">更多&gt;&gt;</a></div>\r\n', 'a:4:{s:9:"html_edit";N;s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext20', 'pic', 0, 'a:4:{s:6:"imgurl";s:31:"../2shou/images/default/ad8.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"205";s:6:"height";s:2:"60";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"21";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1317113126, 0, 40, 0, 0, 'deepblue');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext21', 'pic', 0, 'a:4:{s:6:"imgurl";s:31:"../2shou/images/default/ad9.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"205";s:6:"height";s:2:"60";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"21";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1317113148, 0, 40, 0, 0, 'deepblue');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext22', 'Info_2shou_', 1, 'a:30:{s:13:"tplpart_1code";s:52:"<div><a href="$url" target="_blank">$title</a></div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:6:"2shou_";s:7:"typefid";N;s:6:"cityId";s:17:"$GLOBALS[city_id]";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";N;s:8:"moduleid";s:0:"";s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"list";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"4";s:3:"sql";s:131:"(SELECT * FROM qb_2shou_content  WHERE city_id=\'$GLOBALS[city_id]\'  AND city_id=\'$GLOBALS[city_id]\' ) ORDER BY list DESC LIMIT 0,4 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"30";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext23', 'code', 0, '<div class="tag">热门信息</div>\r\n<div class="more"><a href="listall.php" target="_blank">更多&gt;&gt;</a></div>\r\n', 'a:4:{s:9:"html_edit";N;s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext24', 'Info_2shou_', 1, 'a:30:{s:13:"tplpart_1code";s:82:"<div class="list$i"><span>$i</span><a href="$url" target="_blank">$title</a></div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:6:"2shou_";s:7:"typefid";N;s:6:"cityId";s:17:"$GLOBALS[city_id]";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";N;s:8:"moduleid";s:0:"";s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"hits";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:2:"10";s:3:"sql";s:132:"(SELECT * FROM qb_2shou_content  WHERE city_id=\'$GLOBALS[city_id]\'  AND city_id=\'$GLOBALS[city_id]\' ) ORDER BY hits DESC LIMIT 0,10 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext25', 'pic', 0, 'a:4:{s:6:"imgurl";s:32:"../2shou/images/default/ad10.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"250";s:6:"height";s:2:"60";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"21";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1317113165, 0, 40, 0, 0, 'deepblue');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext26', 'code', 0, '<div onMouseOver=changeshow(7,7,11) id="Mune7" class="ck">推荐</div>\r\n<div onMouseOver=changeshow(8,7,11) id="Mune8">精品</div>\r\n<div onMouseOver=changeshow(9,7,11) id="Mune9">热点</div>\r\n<div onMouseOver=changeshow(10,7,11) id="Mune10">聚焦</div>\r\n', 'a:4:{s:9:"html_edit";N;s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext27', 'Info_2shou_', 1, 'a:30:{s:13:"tplpart_1code";s:52:"<div><a href="$url" target="_blank">$title</a></div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:6:"2shou_";s:7:"typefid";N;s:6:"cityId";s:17:"$GLOBALS[city_id]";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";N;s:8:"moduleid";s:0:"";s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:10:"levelstime";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"6";s:3:"sql";s:137:"(SELECT * FROM qb_2shou_content  WHERE city_id=\'$GLOBALS[city_id]\'  AND city_id=\'$GLOBALS[city_id]\' ) ORDER BY levelstime DESC LIMIT 0,6 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext28', 'Info_2shou_', 1, 'a:30:{s:13:"tplpart_1code";s:54:"<div><a href="$url" target="_blank">$title</a></div>\r\n";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:6:"2shou_";s:7:"typefid";N;s:6:"cityId";s:17:"$GLOBALS[city_id]";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";N;s:8:"moduleid";s:0:"";s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:2:"id";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"6";s:3:"sql";s:129:"(SELECT * FROM qb_2shou_content  WHERE city_id=\'$GLOBALS[city_id]\'  AND city_id=\'$GLOBALS[city_id]\' ) ORDER BY id DESC LIMIT 0,6 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext29', 'Info_2shou_', 1, 'a:30:{s:13:"tplpart_1code";s:52:"<div><a href="$url" target="_blank">$title</a></div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:6:"2shou_";s:7:"typefid";N;s:6:"cityId";s:17:"$GLOBALS[city_id]";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";N;s:8:"moduleid";s:0:"";s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:4:"hits";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"6";s:3:"sql";s:131:"(SELECT * FROM qb_2shou_content  WHERE city_id=\'$GLOBALS[city_id]\'  AND city_id=\'$GLOBALS[city_id]\' ) ORDER BY hits DESC LIMIT 0,6 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext30', 'Info_2shou_', 1, 'a:30:{s:13:"tplpart_1code";s:52:"<div><a href="$url" target="_blank">$title</a></div>";s:13:"tplpart_2code";s:0:"";s:3:"SYS";s:2:"wn";s:6:"wninfo";s:6:"2shou_";s:7:"typefid";N;s:6:"cityId";s:17:"$GLOBALS[city_id]";s:5:"width";s:3:"250";s:6:"height";s:3:"187";s:8:"rolltype";s:10:"scrollLeft";s:8:"rolltime";s:1:"3";s:11:"roll_height";s:2:"50";s:11:"content_num";s:2:"80";s:7:"newhour";s:2:"24";s:7:"hothits";s:2:"30";s:7:"tplpath";s:0:"";s:6:"DivTpl";i:1;s:5:"fiddb";N;s:8:"moduleid";s:0:"";s:5:"stype";s:1:"4";s:2:"yz";s:3:"all";s:10:"timeformat";s:11:"Y-m-d H:i:s";s:5:"order";s:8:"lastview";s:3:"asc";s:4:"DESC";s:6:"levels";s:3:"all";s:7:"rowspan";s:1:"6";s:3:"sql";s:135:"(SELECT * FROM qb_2shou_content  WHERE city_id=\'$GLOBALS[city_id]\'  AND city_id=\'$GLOBALS[city_id]\' ) ORDER BY lastview DESC LIMIT 0,6 ";s:7:"colspan";s:1:"1";s:8:"titlenum";s:2:"40";s:10:"titleflood";s:1:"0";s:9:"start_num";s:1:"1";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"30";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_indext31', 'code', 0, '<div class="tag"><span>图片信息</span></div>\r\n<div class="more"><a href="listall.php" target="_blank">更多&gt;&gt;</a></div>\r\n', 'a:4:{s:9:"html_edit";N;s:5:"div_w";s:0:"";s:5:"div_h";s:0:"";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 0, 0, 40, 0, 0, 'fashion_win');
INSERT INTO `qb_label` (`lid`, `name`, `ch`, `chtype`, `tag`, `type`, `typesystem`, `code`, `divcode`, `hide`, `js_time`, `uid`, `username`, `posttime`, `pagetype`, `module`, `fid`, `if_js`, `style`) VALUES ('', '', 0, 0, 'flea_listrad', 'pic', 0, 'a:4:{s:6:"imgurl";s:32:"../2shou/images/default/ad10.gif";s:7:"imglink";s:1:"#";s:5:"width";s:3:"250";s:6:"height";s:2:"60";}', 'a:3:{s:5:"div_w";s:2:"50";s:5:"div_h";s:2:"21";s:11:"div_bgcolor";s:0:"";}', 0, 0, 1, 'admin', 1317113198, 2, 40, 0, 0, 'deepblue');
       




# --------------------------------------------------------

#
# 表的结构 `qb_2shou_buyad`
#

DROP TABLE IF EXISTS `qb_2shou_buyad`;
CREATE TABLE `qb_2shou_buyad` (
  `aid` mediumint(7) NOT NULL auto_increment,
  `sortid` mediumint(7) NOT NULL default '0',
  `cityid` mediumint(7) NOT NULL default '0',
  `id` int(10) NOT NULL default '0',
  `mid` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `begintime` int(10) NOT NULL default '0',
  `endtime` int(10) NOT NULL default '0',
  `money` mediumint(7) NOT NULL default '0',
  `hits` mediumint(7) NOT NULL default '0',
  PRIMARY KEY  (`aid`),
  KEY `sortid` (`sortid`,`money`,`endtime`,`cityid`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

#
# 导出表中的数据 `qb_2shou_buyad`
#


# --------------------------------------------------------

#
# 表的结构 `qb_2shou_class`
#

DROP TABLE IF EXISTS `qb_2shou_class`;
CREATE TABLE `qb_2shou_class` (
  `fid` int(7) NOT NULL auto_increment,
  `fup` int(7) NOT NULL default '0',
  `name` varchar(60) NOT NULL default '',
  `list` int(10) NOT NULL default '0',
  PRIMARY KEY  (`fid`),
  KEY `fup` (`fup`)
) TYPE=MyISAM AUTO_INCREMENT=43 ;

#
# 导出表中的数据 `qb_2shou_class`
#

INSERT INTO `qb_2shou_class` VALUES (31, 0, '岗位类型', 1);
INSERT INTO `qb_2shou_class` VALUES (32, 31, '计算机/互联网类', 0);
INSERT INTO `qb_2shou_class` VALUES (33, 31, '人力资源/行政/文职人员', 0);
INSERT INTO `qb_2shou_class` VALUES (34, 31, '医疗卫生/美容保健', 0);
INSERT INTO `qb_2shou_class` VALUES (38, 34, '护士/护理人员', 0);
INSERT INTO `qb_2shou_class` VALUES (37, 34, '医生/医师', 0);
INSERT INTO `qb_2shou_class` VALUES (39, 33, '文员/秘书', 0);
INSERT INTO `qb_2shou_class` VALUES (40, 33, '行政/人力资源总监', 0);
INSERT INTO `qb_2shou_class` VALUES (41, 32, '软件工程师', 0);
INSERT INTO `qb_2shou_class` VALUES (42, 32, '硬件工程师', 0);

# --------------------------------------------------------

#
# 表的结构 `qb_2shou_collection`
#

DROP TABLE IF EXISTS `qb_2shou_collection`;
CREATE TABLE `qb_2shou_collection` (
  `cid` mediumint(7) NOT NULL auto_increment,
  `id` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `posttime` int(10) NOT NULL default '0',
  PRIMARY KEY  (`cid`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

#
# 导出表中的数据 `qb_2shou_collection`
#


# --------------------------------------------------------

#
# 表的结构 `qb_2shou_comments`
#

DROP TABLE IF EXISTS `qb_2shou_comments`;
CREATE TABLE `qb_2shou_comments` (
  `cid` mediumint(7) unsigned NOT NULL auto_increment,
  `cuid` int(7) NOT NULL default '0',
  `type` tinyint(2) NOT NULL default '0',
  `id` int(10) unsigned NOT NULL default '0',
  `fid` mediumint(7) unsigned NOT NULL default '0',
  `uid` mediumint(7) unsigned NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `posttime` int(10) NOT NULL default '0',
  `content` text NOT NULL,
  `ip` varchar(15) NOT NULL default '',
  `icon` tinyint(3) NOT NULL default '0',
  `yz` tinyint(1) NOT NULL default '0',
  `flowers` smallint(4) NOT NULL default '0',
  `egg` smallint(4) NOT NULL default '0',
  PRIMARY KEY  (`cid`),
  KEY `type` (`type`)
) TYPE=MyISAM AUTO_INCREMENT=6 ;

#
# 导出表中的数据 `qb_2shou_comments`
#


# --------------------------------------------------------

#
# 表的结构 `qb_2shou_config`
#

DROP TABLE IF EXISTS `qb_2shou_config`;
CREATE TABLE `qb_2shou_config` (
  `c_key` varchar(50) NOT NULL default '',
  `c_value` text NOT NULL,
  `c_descrip` text NOT NULL,
  PRIMARY KEY  (`c_key`)
) TYPE=MyISAM;

#
# 导出表中的数据 `qb_2shou_config`
#

INSERT INTO `qb_2shou_config` VALUES ('AdInfoListLeng', '40', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_PostMaxNum', '20', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_TopNum', '5', '');
INSERT INTO `qb_2shou_config` VALUES ('AdInfoSortShow', '10', '');
INSERT INTO `qb_2shou_config` VALUES ('AdInfoShowTime', '100', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_feedbackID', '111111', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_MakeIndexHtmlTime', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('ErrSortMoney', '13', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_DelKeyword', '暴乱\r\n反动', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_PostMaxLeng', '100000', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_RepeatPostNum', '3', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_postCkMob', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_postCkIp', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('DelOtherCommentMoney', '12', '');
INSERT INTO `qb_2shou_config` VALUES ('otherCardMoney', '11', '');
INSERT INTO `qb_2shou_config` VALUES ('permitMoney', '10', '');
INSERT INTO `qb_2shou_config` VALUES ('IDcardMoney', '9', '');
INSERT INTO `qb_2shou_config` VALUES ('EmailYzMoney', '8', '');
INSERT INTO `qb_2shou_config` VALUES ('ReportMoney', '7', '');
INSERT INTO `qb_2shou_config` VALUES ('GoodCommentMoney', '6', '');
INSERT INTO `qb_2shou_config` VALUES ('PublicizeRegMoney', '5', '');
INSERT INTO `qb_2shou_config` VALUES ('ALLInfoMoney', '4', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_loginTime', '16', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_loginMoney', '3', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_regmoney', '1', '');
INSERT INTO `qb_2shou_config` VALUES ('illInfoMoney', '14', '');
INSERT INTO `qb_2shou_config` VALUES ('DelReportMoney', '15', '');
INSERT INTO `qb_2shou_config` VALUES ('Jump_allcity', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('Jump_fromarea', '1', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_TopMoney', '3', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_closeWhy', '网站维护当中,暂停开放', '');
INSERT INTO `qb_2shou_config` VALUES ('sort_layout', '10,9,150,165#2,4#1,5,3#6,7,8#', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_GroupCommentYzImg', '2,3,4,8,9', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_GroupPostYzImg', '2,3,4,8,9', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_weburl', '', '');
INSERT INTO `qb_2shou_config` VALUES ('ForbidPostIp', '', '');
INSERT INTO `qb_2shou_config` VALUES ('AdInfoIndexLeng', '', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_ForbidMemberViewContact', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_ShowSearchContact', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_ImgShopContact', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_ForbidGuesViewContact', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_TopDay', '2', '');
INSERT INTO `qb_2shou_config` VALUES ('ForbidPostMember', '', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_cityPost', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('AdInfoBigsortShow', '15', '');
INSERT INTO `qb_2shou_config` VALUES ('InfoIndexCSRow', '', '');
INSERT INTO `qb_2shou_config` VALUES ('Force_Choose_City', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('post_htmlType', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_Searchkeyword', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('Post_group_UpPhoto', '', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_forbidOutPost', '1', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_MemberPostRepeat', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_GuestPostRepeat', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_MemberPostMoney', '2', '');
INSERT INTO `qb_2shou_config` VALUES ('InfoIndexLeng', '26', '');
INSERT INTO `qb_2shou_config` VALUES ('InfoIndexRow', '8', '');
INSERT INTO `qb_2shou_config` VALUES ('InfoListRow', '10', '');
INSERT INTO `qb_2shou_config` VALUES ('AdInfoIndexRow', '16', '');
INSERT INTO `qb_2shou_config` VALUES ('group_UpPhoto', '', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_index_cache', '', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_list_cache', '', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_guide_word', '', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_MemberPostPicNum', '', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_MemberDayPostNum', '20', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_GuestPostPicNum', '', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_GuestDayPostNum', '3', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_ClosePostWhy', '严打时期,暂停发布与修改信息', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_YzKeyword_DO', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('CommentPass_group', '3,4', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_htmlType', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_allcityType', '1', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_MemberChooseCity', '1', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_sys', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_ClosePost', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_style', '', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_webOpen', '1', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_htmlname', 'html', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_contact', '010-88888888\r\nkefu@gmail.com\r\nkefu@msn.com\r\n88888888', '');
INSERT INTO `qb_2shou_config` VALUES ('AdInfoIndexShow', '20', '');
INSERT INTO `qb_2shou_config` VALUES ('GroupPassYz', '', '');
INSERT INTO `qb_2shou_config` VALUES ('GroupPostInfo', '', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_TopColor', '#F70968', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_Musttelephone', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_Mustmobphone', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_MustQQ', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_MustEmail', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('InfoIndexCSLeng', '', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_showsortnum', '', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_ListNum', '', '');
INSERT INTO `qb_2shou_config` VALUES ('AdInfoListRow', '10', '');
INSERT INTO `qb_2shou_config` VALUES ('InfoListLeng', '30', '');
INSERT INTO `qb_2shou_config` VALUES ('showNoPassComment', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_YzKeyword', '性爱\r\n做爱\r\n共产党', '');
INSERT INTO `qb_2shou_config` VALUES ('rand_num', '1317088056', '');
INSERT INTO `qb_2shou_config` VALUES ('rand_num_inputname', 'i', '');
INSERT INTO `qb_2shou_config` VALUES ('UpdatePostTime', '3', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_webadmin', '', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_showday', '3/10/30/60/90/180', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_allowGuesSearch', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('if_GGmap', '1', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_ShowNoYz', '1', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_DelEndtime', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('module_id', '40', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_areaname', '全国', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_UseEndTime', '1', '');
INSERT INTO `qb_2shou_config` VALUES ('CollectArticleNum', '23', '');
INSERT INTO `qb_2shou_config` VALUES ('PostInfoMoney', '2', '');
INSERT INTO `qb_2shou_config` VALUES ('module_pre', '2shou_', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_description', '提供最新的二手交易信息', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_metakeywords', '二手数码出售 二手电脑出售', '');
INSERT INTO `qb_2shou_config` VALUES ('module_close', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_webname', '二手市场', '');
INSERT INTO `qb_2shou_config` VALUES ('Info_ReportDB', '垃圾信息\r\n虚假信息\r\n违法信息\r\n雷同信息', '');
INSERT INTO `qb_2shou_config` VALUES ('rand_num_mktime', '1', '');
INSERT INTO `qb_2shou_config` VALUES ('IF_Private_tpl', '0', '');
INSERT INTO `qb_2shou_config` VALUES ('Private_tpl_head', '', '');
INSERT INTO `qb_2shou_config` VALUES ('Private_tpl_foot', '', '');

# --------------------------------------------------------

#
# 表的结构 `qb_2shou_content`
#

DROP TABLE IF EXISTS `qb_2shou_content`;
CREATE TABLE `qb_2shou_content` (
  `id` int(10) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL default '',
  `mid` smallint(4) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `fname` varchar(50) NOT NULL default '',
  `info` tinyint(2) NOT NULL default '0',
  `hits` mediumint(7) NOT NULL default '0',
  `comments` mediumint(7) NOT NULL default '0',
  `posttime` int(10) NOT NULL default '0',
  `list` varchar(10) NOT NULL default '',
  `uid` mediumint(7) NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `titlecolor` varchar(15) NOT NULL default '',
  `fonttype` tinyint(1) NOT NULL default '0',
  `picurl` varchar(150) NOT NULL default '',
  `ispic` tinyint(1) NOT NULL default '0',
  `yz` tinyint(1) NOT NULL default '0',
  `yzer` varchar(30) NOT NULL default '',
  `yztime` int(10) NOT NULL default '0',
  `levels` tinyint(2) NOT NULL default '0',
  `levelstime` int(10) NOT NULL default '0',
  `keywords` varchar(100) NOT NULL default '',
  `jumpurl` varchar(150) NOT NULL default '',
  `iframeurl` varchar(150) NOT NULL default '',
  `style` varchar(15) NOT NULL default '',
  `head_tpl` varchar(150) NOT NULL default '',
  `main_tpl` varchar(150) NOT NULL default '',
  `foot_tpl` varchar(100) NOT NULL default '',
  `target` tinyint(1) NOT NULL default '0',
  `ishtml` tinyint(1) NOT NULL default '0',
  `ip` varchar(15) NOT NULL default '',
  `lastfid` mediumint(7) NOT NULL default '0',
  `money` mediumint(7) NOT NULL default '0',
  `passwd` varchar(32) NOT NULL default '',
  `editer` varchar(30) NOT NULL default '',
  `edittime` int(10) NOT NULL default '0',
  `begintime` int(10) NOT NULL default '0',
  `endtime` int(10) NOT NULL default '0',
  `config` text NOT NULL,
  `lastview` int(10) NOT NULL default '0',
  `city_id` mediumint(7) NOT NULL default '0',
  `zone_id` mediumint(7) NOT NULL default '0',
  `street_id` mediumint(7) NOT NULL default '0',
  `editpwd` varchar(32) NOT NULL default '',
  `showday` mediumint(4) NOT NULL default '0',
  `visit_log` text NOT NULL,
  `visit_num` mediumint(7) unsigned NOT NULL default '0',
  `telephone` varchar(30) NOT NULL default '',
  `mobphone` varchar(12) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `oicq` varchar(11) NOT NULL default '',
  `msn` varchar(50) NOT NULL default '',
  `linkman` varchar(20) NOT NULL default '',
  `postcode` varchar(6) NOT NULL default '',
  `address` varchar(250) NOT NULL default '',
  `weburl` varchar(150) NOT NULL default '',
  `fax` varchar(30) NOT NULL default '',
  `maps` varchar(50) NOT NULL default '',
  `picnum` smallint(4) NOT NULL default '0',
  `replytime` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `fid` (`fid`),
  KEY `ispic` (`ispic`),
  KEY `city_id` (`city_id`),
  KEY `zone_id` (`zone_id`),
  KEY `street_id` (`street_id`),
  KEY `list` (`list`,`fid`,`city_id`,`yz`),
  KEY `hits` (`hits`)
) TYPE=MyISAM AUTO_INCREMENT=18 ;

#
# 导出表中的数据 `qb_2shou_content`
#

INSERT INTO `qb_2shou_content` VALUES (2, '(转让)34寸三洋纯屏电视机 - 800元', 1, 7, '电视机', 0, 2, 0, 1317030356, '1317030356', 1, 'admin', '', 0, 'http://1.pic.58control.cn/p1/big/n_13951452042257.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 1317289556, '', 1317030447, 1, 1, 1, '', 3, '', 0, '', '13399999999', '54325@qq.com', '888888', '', 'admin', '', '', '', '', '', 4, 0);
INSERT INTO `qb_2shou_content` VALUES (3, '(转让)创维 42E70RG 42寸LED硬屏液晶电视 - 3000元', 1, 7, '电视机', 0, 1, 0, 1317031127, '1317031127', 1, 'admin', '', 0, 'http://1.pic.58control.cn/p1/big/n_14008601349901.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 1317290327, '', 1317031128, 1, 1, 2, '', 3, '', 0, '', '13399999999', '54325@qq.com', '888888', '', 'admin', '', '', '', '', '', 2, 0);
INSERT INTO `qb_2shou_content` VALUES (4, '(转让)急急搬家,转让日立50寸1080P等离子电视 - 3300元', 1, 7, '电视机', 0, 2, 0, 1317031319, '1317031319', 1, 'admin', '', 0, 'http://2.pic.58control.cn/p1/big/n_13061159387906.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 1317290519, '', 1317107988, 1, 2, 0, '', 3, '', 0, '', '13399999999', '54325@qq.com', '888888', '', 'admin', '', '', '', '', '', 2, 0);
INSERT INTO `qb_2shou_content` VALUES (5, '(转让)42寸SONY高清平板液晶电视 仅售2300元 - 2300元', 1, 7, '电视机', 0, 1, 0, 1317031430, '1317031430', 1, 'admin', '', 0, 'http://3.pic.58control.cn/p1/big/n_13599099866881.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 1317290630, '', 1317031432, 1, 0, 0, '', 3, '', 0, '', '13399999999', '54325@qq.com', '888888', '', 'admin', '', '', '', '', '', 1, 0);
INSERT INTO `qb_2shou_content` VALUES (6, '(转让)松下液晶电视 TH-L32C30C (含底座) - 2779元', 1, 7, '电视机', 0, 2, 0, 1317031614, '1317031614', 1, 'admin', '', 0, 'http://2.pic.58control.cn/p1/big/n_14014851520015.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 1317290814, '', 1317104176, 1, 1, 3, '', 3, '', 0, '', '13399999999', '54325@qq.com', '888888', '', 'admin', '', '', '', '', '', 1, 0);
INSERT INTO `qb_2shou_content` VALUES (7, '(转让)搬家出40寸sony索尼LED液晶电视 - 3850元', 1, 7, '电视机', 0, 5, 0, 1317031775, '1317031775', 1, 'admin', '', 0, 'http://1.pic.58control.cn/p1/big/n_13995398869770.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 1317290975, '', 1317175489, 1, 1, 5, '', 3, '', 0, '', '13399999999', '54325@qq.com', '888888', '', 'admin', '', '', '', '', '', 2, 0);
INSERT INTO `qb_2shou_content` VALUES (8, '(转让)出售9.5成新的TCL6.5公升半自动洗衣机 - 400元', 1, 8, '洗衣机', 0, 3, 0, 1317031917, '1317031917', 1, 'admin', '', 0, 'http://2.pic.58control.cn/p1/big/n_14014916400656.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 1317291117, '', 1317087753, 1, 0, 0, '', 3, '', 0, '', '13399999999', '54325@qq.com', '888888', '', 'admin', '', '', '', '', '', 1, 0);
INSERT INTO `qb_2shou_content` VALUES (9, '(转让)出:海尔洗衣机5.5kg,格力电饭煲 - 450元', 1, 8, '洗衣机', 0, 1, 0, 1317032105, '1317032105', 1, 'admin', '', 0, 'http://1.pic.58control.cn/p1/big/n_14016081982730.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 1317291305, '', 1317032107, 1, 1, 4, '', 3, '', 0, '', '13399999999', '54325@qq.com', '888888', '', 'admin', '', '', '', '', '', 2, 0);
INSERT INTO `qb_2shou_content` VALUES (10, '(转让)9.999成新志高1p单冷空调超低价转让 - 1700元', 1, 9, '空调', 0, 1, 0, 1317032315, '1317032315', 1, 'admin', '', 0, 'http://1.pic.58control.cn/p1/big/n_13999191951630.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 1317291515, '', 1317032317, 1, 1, 6, '', 3, '', 0, '', '13399999999', '54325@qq.com', '888888', '', 'admin', '', '', '', '', '', 1, 0);
INSERT INTO `qb_2shou_content` VALUES (11, '(转让)格力空调便宜转让了 - 800元', 1, 9, '空调', 0, 7, 0, 1317032418, '1317032418', 1, 'admin', '', 0, 'http://4.pic.58control.cn/p1/big/n_14011968422157.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 1317291618, '', 1317175773, 1, 1, 3, '', 3, '', 0, '', '13399999999', '54325@qq.com', '888888', '', 'admin', '', '', '', '', '', 1, 0);
INSERT INTO `qb_2shou_content` VALUES (12, '我的小黑几乎全新双核2代原配置高端商务本 - 1380元', 1, 23, '笔记本', 0, 1, 0, 1317088056, '1317088056', 1, 'admin', '', 0, 'http://image.ganjistatic1.com/gjfs01/M00/D8/C6/wKhxwE594B-QYc1VAAEVxjWEoyk783_334-208_6-0.jpg', 1, 1, '', 0, 0, 0, '小黑 双核2代', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 1317347256, '', 1317088057, 1, 1, 2, '', 3, '', 0, '', '13399999999', '54325@qq.com', '888888', '', 'admin', '', '', '', '', '', 2, 0);
INSERT INTO `qb_2shou_content` VALUES (13, '转让惠普9.9新 蓝牙无线指纹 酷睿T7300 2G内存 - 1580元', 1, 23, '笔记本', 0, 1, 0, 1317088421, '1317088421', 1, 'admin', '', 0, 'http://image.ganjistatic1.com/gjfs01/M01/2D/51/wKhxwU6AUFPDrTJjAADGEHr08cI849_334-208_6-0.jpg', 1, 1, '', 0, 0, 0, '惠普 酷睿', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 1317347621, '', 1317088423, 1, 2, 0, '', 3, '', 0, '01011013301', '13399999999', '54325@qq.com', '888888', '', '李四', '', '', '', '', '', 4, 0);
INSERT INTO `qb_2shou_content` VALUES (14, '自用IBM酷睿双核，蓝牙无线指纹，基本全新 - 1350元', 1, 23, '笔记本', 0, 2, 0, 1317088750, '1317088750', 1, 'admin', '', 0, 'http://image.ganjistatic1.com/gjfs01/M01/29/9E/wKhxwU6APKq,GOuwAACNU35uPp8336_334-208_6-0.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 1317347950, '', 1317107809, 1, 4, 0, '', 3, '', 0, '', '13399999999', '54325@qq.com', '888888', '', 'admin', '', '', '', '', '', 3, 0);
INSERT INTO `qb_2shou_content` VALUES (15, '出旋转加手触屏IBM-X61T，2G内存500G硬电池4小时 - 3000元', 1, 23, '笔记本', 0, 6, 0, 1317089032, '1317089032', 1, 'admin', '', 0, 'http://image.ganjistatic1.com/gjfs01/M00/39/96/wKhxwU6BH-3d-,A9AAFaFRa3TTI083_334-208_6-0.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 1317348232, '', 1317112469, 1, 1, 1, '', 3, '', 0, '', '13399999999', '54325@qq.com', '888888', '', 'admin', '', '', '', '', '', 5, 0);
INSERT INTO `qb_2shou_content` VALUES (16, '转让宜家的铁艺双人床一套 - 700元', 1, 13, '床/床垫', 0, 1, 0, 1317089295, '1317089295', 1, 'admin', '', 0, 'http://image.ganjistatic1.com/gjfs01/M01/38/E1/wKhxwU6BHArCrQUuAAStvRrGnYg151_334-208_6-0.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 1317348495, '', 1317089296, 1, 11, 0, '', 3, '', 0, '', '13399999999', '54325@qq.com', '888888', '', 'admin', '', '', '', '', '', 1, 0);
INSERT INTO `qb_2shou_content` VALUES (17, '九成新双人大床床垫东直门地铁站，方便参观，吼吼！', 1, 13, '床/床垫', 0, 9, 0, 1317089469, '1317089469', 1, 'admin', '', 0, 'http://image.ganjistatic1.com/gjfs01/M01/38/36/wKhxwU6BErHCW76LAABi07Tgd,g056_334-208_6-0.jpg', 1, 1, '', 0, 0, 0, '', '', '', '', '', '', '', 0, 0, '127.0.0.1', 0, 0, '', '', 0, 0, 1317348669, '', 1317174467, 1, 3, 0, '', 3, '', 0, '', '13399999999', '54325@qq.com', '888888', '', 'admin', '', '', '', '', '', 1, 0);

# --------------------------------------------------------

#
# 表的结构 `qb_2shou_content_1`
#

DROP TABLE IF EXISTS `qb_2shou_content_1`;
CREATE TABLE `qb_2shou_content_1` (
  `rid` mediumint(7) NOT NULL auto_increment,
  `id` int(10) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `content` mediumtext NOT NULL,
  `sortid` tinyint(3) NOT NULL default '0',
  `buytime` varchar(20) NOT NULL default '',
  `buyprice` int(8) NOT NULL default '0',
  `sellprice` varchar(20) NOT NULL default '',
  `selltype` tinyint(2) NOT NULL default '0',
  PRIMARY KEY  (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`)
) TYPE=MyISAM AUTO_INCREMENT=18 ;

#
# 导出表中的数据 `qb_2shou_content_1`
#

INSERT INTO `qb_2shou_content_1` VALUES (2, 2, 7, 1, '本人有一台34寸纯屏电视机出.是小工厂,大型超市.医院,培训室的道选,电视郊果很好,有意者请来电,短信不复.图片为手机拍摄实物图片.\r\n联系我时，请说是在58同城上看到的，谢谢！\r\n\r\n', 9, '', 0, '800', 0);
INSERT INTO `qb_2shou_content_1` VALUES (3, 3, 7, 1, '创维 42e70RG 42寸led硬屏液晶电视 具体参数及功能见商家介绍：http://item.tmall.com/item.htm?id=7536783622&prc=1\r\n &nbsp;  因买电视时没注意尺寸，客厅太小，买大了，2011年3月份下的单，6月份才叫国美送货过来，安装调试后一直没使用，因房子还未入住，基本上全新，怕对小孩视力影响不好，观看距离太近，现想处理掉这个后重新买个小点的，具体可详谈！ \r\n', 9, '', 0, '3000', 0);
INSERT INTO `qb_2shou_content_1` VALUES (4, 4, 7, 1, '另有xbox 360（黑色） +KInecT摄像头 +黑色无线手柄，白色有线手柄+100个以上游戏，加点钱就一起转让。一起转让价格4900元。\r\n', 9, '', 0, '3300', 0);
INSERT INTO `qb_2shou_content_1` VALUES (5, 5, 7, 1, '全新42寸sony液晶电视，采用韩国进口IPS硬屏面板，质量可靠，支持USB多媒体播放 .底座可90度旋转，所销售产品全部一年免费保修！ \r\n宝贝描述： \r\n功能：PC/TV/AV 屏幕尺寸：42寸 屏幕比例：16:9 点距：0.164mm×0.264mm 分辨率：1920*1080px 亮度：2000cd/m2 对比度：10000:1 响应时间：3ms--5ms 可视角度：178/178 扬声器：10W×2,内置 接收频率：1-900MHz 接收频道：全频道 画外画功能：是 USB功能：是(电影功能另外说明） HDMI高清接口：是（双HDMI接口） 电视制式：可按国家定制 画中画功能：有 S视频：4帧×2(S- Video) 电脑：15帧D-Sub×1(VGA) 功率：&lt;40W 待机功率：5W 电压：(90-240V)-DC 12V OSD语言：可按国家定制 外壳材料：钢琴烤漆 线条设计 新亮点：黑晶面板 全高清 使用寿命：60000小时 使用比例模式：标准、全屏、缩放、非线性等。 每天8小时可以用17年底座：旋转底座 完美线条设计！\r\n淘宝店铺 http://jt88tv.taobao.com/ \r\n联系电话 13660059639蒋生\r\n &nbsp;  &nbsp;   QQ 1215534592\r\n联系我时，请说是在58同城上看到的，谢谢！\r\n\r\n', 9, '', 0, '2300', 0);
INSERT INTO `qb_2shou_content_1` VALUES (6, 6, 7, 1, '品牌 松下 型号 TH-L32C30C 颜色 黑色 显示 屏幕尺寸 32英寸 屏幕类型 IPS液晶屏幕 像素 1366*768 音频 扬声器 2*7W,单路底部喇叭 声音模式 音乐/语音/自定义 环绕系统 V-Audio 端口 SDLink 1侧置(AVCHD/SD-VIDEO/MotionJPEG/mp4/Div*HD/MPEG4/JPEG/mp3/AAC/WMV/WMA回放) USB接口 2(1后置,1侧置)；大容量储存/键盘/WiFi HDMI接口 3(2后置,1侧置) 复合视频输入 AV1/2/3:RCAphono型(1侧置,2后置) 分量视频输入 RCAphono型(1套后置) 音频输入 RCAphono型(1套后置) PC输入 MiniD-sub15-针*1(后置) 模拟音频输出 RCAphono型(1套后置) 规格 电源 AC220V,50Hz 不包括底座 779*497*84（W*H*D）mm 包括底座 779*531*207（W*H*D）mm 不包括底座 9kg 包括底座 10kg \r\n', 9, '', 0, '2779', 0);
INSERT INTO `qb_2shou_content_1` VALUES (7, 7, 7, 1, '搬家带不走大屏幕，去年9月国美折扣后7499购入，国美开的发票还在，型号：sony KLV-40Ex600，40寸led大液晶，支持蓝光1080P，4个HDMI接口，详情请看http://www.sonystyle.com.cn/products/bravia/ex600/ex600_spec.htm 索尼的质量你懂得！另有手机拍的几张图片\r\n\r\n\r\n', 9, '', 0, '', 0);
INSERT INTO `qb_2shou_content_1` VALUES (8, 8, 8, 1, '出售9.5成新的tcl6.5公升半自动洗衣机，半自动就是洗完衣服之后手动放到甩干桶里，没买几个月，搬家转让。看清楚在打电话 谢谢\r\n\r\n', 9, '2010.8.25', 1200, '400', 0);
INSERT INTO `qb_2shou_content_1` VALUES (9, 9, 8, 1, '海尔洗衣机9成新，可洗最多5.5kg，内部是全钢的，质量可靠，容量够大，但不占地方。还保存了自购的发票。格力电饭煲，压力式，标明做多可做5杯米，差不多是7个人的饭量，适合单身、三口之家、三代同堂使用，偶尔来了客人也够用了。洗衣机单买450，电饭煲单买50，一起买480.\r\n', 9, '', 1200, '450', 0);
INSERT INTO `qb_2shou_content_1` VALUES (10, 10, 9, 1, '因为工作调动要离开广州，只能心痛转让了。很新很新的空调，今年8月7日购于东圃苏宁，志高1p单冷空调，型号:KF-25GW/a107+N2/金色。原价两千四百多，发票保修包装齐全，另有苏宁阳光服务金卡可免费移机一次，一并赠送了。另有小礼物赠送。运费自付。\r\n才用了一个多月，1700元出了，再赠送床上电脑桌一张，真的很便宜了~~~~~~ \r\n\r\n\r\n非诚勿扰，请不要把价格压到几百元，我的空调不是那种用了好几年的旧二手空调。诚心想买也请体谅我的心情。谢谢。 \r\n', 9, '', 3250, '1700', 0);
INSERT INTO `qb_2shou_content_1` VALUES (11, 11, 9, 1, '说什么都没用，最好来试机\r\n', 9, '2009.5.4', 3500, '800', 0);
INSERT INTO `qb_2shou_content_1` VALUES (12, 12, 23, 1, '小黑本ibm thinkpad结实好用，出门携带方便，个人使用保养的非常好，几乎全新没有划痕 本现在绝对没有任何毛病 没修过没拆过玩CF魔兽 战地之王运行速度快玩大型游戏保证一点不热\r\n\r\n基本配置：thinkpad 因特尔二代双核 二级缓存4M CPU：1.87 14吋高亮液晶屏 独立显卡 2G内存 硬盘 100G DVD康宝刻录机 无线网卡 双鼠标 蓝牙 内置免费WIFI 夜间照明灯 电池可3小时 。可以随便检测，现在使用一切正常原厂配件都在 购机发票还有我刚买全新的原装包和鼠标\r\n\r\n', 9, '2010.10.21', 8000, '1380', 1);
INSERT INTO `qb_2shou_content_1` VALUES (13, 13, 23, 1, '机器一直放着也没怎么用。所以还是非常新的。电子产品越放越不直钱了。还是赚给有用的人吧。\r\n\r\n具体配置 酷睿2代T7300 2G内存 160G硬盘 代蓝牙 指纹 无线 DVD可以刻录 256M显卡 电池3个小时没问题。\r\n\r\n本人平时上班，要看机器提前来电话约时间吧。另外自己用的包，鼠标都送了。\r\n\r\n', 9, '2011.3.15', 6500, '1580', 1);
INSERT INTO `qb_2shou_content_1` VALUES (14, 14, 23, 1, '我的本子是ibm thinkpad的原装机性能稳定没话说散热具棒，皮实好 用，外观也相当不错，黑色的，也不笨重，出门携带方便，机子的性能强悍 网络3D游戏玩起来十分顺畅，可以流畅运行魔兽争霸，魔兽世界，CF，极品 飞车8等 个人使用保养的很好99成新，一直没出现过问题，没有维修过， 现在使用一切正常\r\n\r\n配置1：cpu因特尔1.6 内存2G 硬盘100G 独立显卡 14寸LCD高清屏 DVD康宝刻录\r\n内置无线蓝牙 夜间照明 电池好用。 九五成新 价格1350\r\n\r\n配置2：cpu: 酷睿2 T5600双核 1.86GHZ 二级缓存:4M 独立显卡 内存： 2G 硬盘：100G LCD高清屏14吋 DVD刻录光驱 内置免费WIFI无线网卡 蓝 牙 指纹识别器 夜间照明灯 支持VGA接口 电池可2小时以上 基本全新 价格1450\r\n\r\n基本配置 就这样， 原厂配件都在还有原装包和购机发票, 当 面交易，可用任何软件 检测，想要的朋友电话联系', 9, '2009.11.15', 8900, '1350', 1);
INSERT INTO `qb_2shou_content_1` VALUES (15, 15, 23, 1, '双核高配CPU:L7500　４M二级缓存\r\n2G 内存 500G硬盘(硬盘保修至2014年9月) 无线网卡 蓝牙传输 指纹识别\r\n手触屏幕(类似IPAD那种，所以无笔) 屏幕没发现斑点\r\n电池后换的 最亮状态下 720p约3小时20分 实测数据 一般应用在４－５个小时之间 键盘不油，面盖四角少许磨损 其余都挺好 整体9成新以上\r\n赠送xp ghost系统,以及1CD+1DVD原装系统恢复盘,可以恢复至带隐藏分区的系统．\r\n实物图片，电话请QQ联系索取，预防垃圾短信和电话骚扰\r\n\r\n', 9, '2009.11.15', 9800, '3000', 1);
INSERT INTO `qb_2shou_content_1` VALUES (16, 16, 13, 1, '转让宜家的铁艺双人床一套，床垫不是宜家的。见下图。\r\n\r\n\r\n床在梨园附近，不包送！本帖10月5日前有效', 9, '', 2000, '700', 1);
INSERT INTO `qb_2shou_content_1` VALUES (17, 17, 13, 1, '今年搬家的时候刚买的双人大床，席梦思床垫，非常舒服。\r\n但由于工作原因，重新换房子时不需要床了，主要也是没地方放了，所以8折出手。基本没睡多久，看床也比较方便，地处簋街，市区二环东直门地铁站西南口出来福士后面，东直门内大街4号楼。有意向者，请速联系:)\r\n\r\n', 9, '', 0, '', 0);

# --------------------------------------------------------

#
# 表的结构 `qb_2shou_db`
#

DROP TABLE IF EXISTS `qb_2shou_db`;
CREATE TABLE `qb_2shou_db` (
  `id` int(10) NOT NULL auto_increment,
  `fid` mediumint(7) NOT NULL default '0',
  `city_id` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `fid` (`fid`),
  KEY `city_id` (`city_id`),
  KEY `uid` (`uid`)
) TYPE=MyISAM AUTO_INCREMENT=18 ;

#
# 导出表中的数据 `qb_2shou_db`
#

INSERT INTO `qb_2shou_db` VALUES (2, 7, 1, 1);
INSERT INTO `qb_2shou_db` VALUES (3, 7, 1, 1);
INSERT INTO `qb_2shou_db` VALUES (4, 7, 1, 1);
INSERT INTO `qb_2shou_db` VALUES (5, 7, 1, 1);
INSERT INTO `qb_2shou_db` VALUES (6, 7, 1, 1);
INSERT INTO `qb_2shou_db` VALUES (7, 7, 1, 1);
INSERT INTO `qb_2shou_db` VALUES (8, 8, 1, 1);
INSERT INTO `qb_2shou_db` VALUES (9, 8, 1, 1);
INSERT INTO `qb_2shou_db` VALUES (10, 9, 1, 1);
INSERT INTO `qb_2shou_db` VALUES (11, 9, 1, 1);
INSERT INTO `qb_2shou_db` VALUES (12, 23, 1, 1);
INSERT INTO `qb_2shou_db` VALUES (13, 23, 1, 1);
INSERT INTO `qb_2shou_db` VALUES (14, 23, 1, 1);
INSERT INTO `qb_2shou_db` VALUES (15, 23, 1, 1);
INSERT INTO `qb_2shou_db` VALUES (16, 13, 1, 1);
INSERT INTO `qb_2shou_db` VALUES (17, 13, 1, 1);

# --------------------------------------------------------

#
# 表的结构 `qb_2shou_dianping`
#

DROP TABLE IF EXISTS `qb_2shou_dianping`;
CREATE TABLE `qb_2shou_dianping` (
  `cid` mediumint(7) unsigned NOT NULL auto_increment,
  `cuid` int(7) NOT NULL default '0',
  `type` tinyint(2) NOT NULL default '0',
  `id` mediumint(7) unsigned NOT NULL default '0',
  `fid` mediumint(7) unsigned NOT NULL default '0',
  `uid` mediumint(7) unsigned NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `posttime` int(10) NOT NULL default '0',
  `content` text NOT NULL,
  `ip` varchar(15) NOT NULL default '',
  `icon` tinyint(3) NOT NULL default '0',
  `yz` tinyint(1) NOT NULL default '0',
  `fen1` smallint(4) NOT NULL default '0',
  `fen2` smallint(4) NOT NULL default '0',
  `fen3` smallint(4) NOT NULL default '0',
  `fen4` smallint(4) NOT NULL default '0',
  `fen5` smallint(4) NOT NULL default '0',
  `flowers` smallint(4) NOT NULL default '0',
  `egg` smallint(4) NOT NULL default '0',
  `price` mediumint(5) NOT NULL default '0',
  `keywords` varchar(100) NOT NULL default '',
  `keywords2` varchar(100) NOT NULL default '',
  `fen6` varchar(150) NOT NULL default '',
  PRIMARY KEY  (`cid`),
  KEY `type` (`type`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

#
# 导出表中的数据 `qb_2shou_dianping`
#


# --------------------------------------------------------

#
# 表的结构 `qb_2shou_field`
#

DROP TABLE IF EXISTS `qb_2shou_field`;
CREATE TABLE `qb_2shou_field` (
  `id` mediumint(7) NOT NULL auto_increment,
  `mid` mediumint(5) NOT NULL default '0',
  `title` varchar(50) NOT NULL default '',
  `field_name` varchar(30) NOT NULL default '',
  `field_type` varchar(15) NOT NULL default '',
  `field_leng` smallint(3) NOT NULL default '0',
  `orderlist` int(10) NOT NULL default '0',
  `form_type` varchar(15) NOT NULL default '',
  `field_inputwidth` smallint(3) default NULL,
  `field_inputheight` smallint(3) NOT NULL default '0',
  `form_set` text NOT NULL,
  `form_value` text NOT NULL,
  `form_units` varchar(30) NOT NULL default '',
  `form_title` text NOT NULL,
  `mustfill` tinyint(1) NOT NULL default '0',
  `listshow` tinyint(1) NOT NULL default '0',
  `listfilter` tinyint(1) default NULL,
  `search` tinyint(1) NOT NULL default '0',
  `allowview` varchar(255) NOT NULL default '',
  `allowpost` varchar(255) NOT NULL default '',
  `js_check` text NOT NULL,
  `js_checkmsg` varchar(255) NOT NULL default '',
  `classid` mediumint(7) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=10 ;

#
# 导出表中的数据 `qb_2shou_field`
#

INSERT INTO `qb_2shou_field` VALUES (1, 1, '物品介绍', 'content', 'mediumtext', 0, -1, 'textarea', 400, 50, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 31);
INSERT INTO `qb_2shou_field` VALUES (2, 1, '新旧程度', 'sortid', 'int', 3, 10, 'select', 0, 0, '9|九成新\r\n8|八成新\r\n7|七成新\r\n6|六成新\r\n5|五成新\r\n4|四成新\r\n3|三成新\r\n2|两成新\r\n1|一成新\r\n0|全新\r\n', '9', '', '', 0, 1, 1, 1, '', '', '', '', 31);
INSERT INTO `qb_2shou_field` VALUES (3, 1, '购买日期', 'buytime', 'varchar', 20, 8, 'time', 250, 0, '', '', '', '', 0, 0, 0, 0, '', '', '', '', 31);
INSERT INTO `qb_2shou_field` VALUES (4, 1, '购买价格', 'buyprice', 'int', 8, 7, 'text', 50, 0, '', '', '元', '', 0, 0, 0, 0, '', '', '', '', 31);
INSERT INTO `qb_2shou_field` VALUES (5, 1, '欲售价格', 'sellprice', 'varchar', 20, 9, 'text', 50, 0, '', '', '元', '', 0, 0, 0, 0, '', '', '', '', 31);
INSERT INTO `qb_2shou_field` VALUES (6, 1, '交易方式', 'selltype', 'int', 2, 6, 'radio', 0, 0, '1|当面交易\r\n2|网上交易\r\n0|不限', '0', '', '', 0, 0, 0, 0, '', '', '', '', 31);

# --------------------------------------------------------

#
# 表的结构 `qb_2shou_module`
#

DROP TABLE IF EXISTS `qb_2shou_module`;
CREATE TABLE `qb_2shou_module` (
  `id` smallint(4) NOT NULL auto_increment,
  `sort_id` mediumint(5) NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  `list` smallint(4) NOT NULL default '0',
  `style` varchar(50) NOT NULL default '',
  `config` text NOT NULL,
  `config2` text NOT NULL,
  `comment_type` tinyint(1) NOT NULL default '0',
  `ifdp` tinyint(1) NOT NULL default '0',
  `template` text NOT NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=2 ;

#
# 导出表中的数据 `qb_2shou_module`
#

INSERT INTO `qb_2shou_module` VALUES (1, 0, '跳蚤模型', 0, '', 'N;', '', 0, 0, '');

# --------------------------------------------------------

#
# 表的结构 `qb_2shou_pic`
#

DROP TABLE IF EXISTS `qb_2shou_pic`;
CREATE TABLE `qb_2shou_pic` (
  `pid` mediumint(7) NOT NULL auto_increment,
  `id` mediumint(10) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `mid` smallint(4) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `type` tinyint(1) NOT NULL default '0',
  `imgurl` varchar(150) NOT NULL default '',
  `name` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`pid`),
  KEY `id` (`id`),
  KEY `fid` (`fid`)
) TYPE=MyISAM AUTO_INCREMENT=35 ;

#
# 导出表中的数据 `qb_2shou_pic`
#

INSERT INTO `qb_2shou_pic` VALUES (1, 1, 7, 0, 1, 0, 'http://img.beihai365.com/bbs/forumid_26/20100906_50e18bda3f89d1269ad7bQl2el8nvVVt.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (2, 2, 7, 0, 1, 0, 'http://1.pic.58control.cn/p1/big/n_13951452042257.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (3, 2, 7, 0, 1, 0, 'http://1.pic.58control.cn/p1/big/n_13951455623181.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (4, 2, 7, 0, 1, 0, 'http://1.pic.58control.cn/p1/big/n_13951459324426.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (5, 2, 7, 0, 1, 0, 'http://1.pic.58control.cn/p1/big/n_13951463033871.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (6, 3, 7, 0, 1, 0, 'http://1.pic.58control.cn/p1/big/n_14008601349901.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (7, 3, 7, 0, 1, 0, 'http://2.pic.58control.cn/p1/big/n_14008604118802.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (8, 4, 7, 0, 1, 0, 'http://2.pic.58control.cn/p1/big/n_13061159387906.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (9, 4, 7, 0, 1, 0, 'http://2.pic.58control.cn/p1/big/n_13061161904388.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (10, 5, 7, 0, 1, 0, 'http://3.pic.58control.cn/p1/big/n_13599099866881.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (11, 6, 7, 0, 1, 0, 'http://2.pic.58control.cn/p1/big/n_14014851520015.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (12, 7, 7, 0, 1, 0, 'http://1.pic.58control.cn/p1/big/n_13995398869770.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (13, 7, 7, 0, 1, 0, 'http://2.pic.58control.cn/p1/big/n_13995404316688.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (14, 8, 8, 0, 1, 0, 'http://2.pic.58control.cn/p1/big/n_14014916400656.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (15, 9, 8, 0, 1, 0, 'http://1.pic.58control.cn/p1/big/n_14016081982730.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (16, 9, 8, 0, 1, 0, 'http://2.pic.58control.cn/p1/big/n_14016409180173.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (17, 10, 9, 0, 1, 0, 'http://1.pic.58control.cn/p1/big/n_13999191951630.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (18, 11, 9, 0, 1, 0, 'http://4.pic.58control.cn/p1/big/n_14011968422157.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (19, 12, 23, 0, 1, 0, 'http://image.ganjistatic1.com/gjfs01/M00/D8/C6/wKhxwE594B-QYc1VAAEVxjWEoyk783_334-208_6-0.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (20, 12, 23, 0, 1, 0, 'http://image.ganjistatic1.com/gjfs01/M00/E2/08/wKhxwU594CLyIqPqAABJBdpAh0Y603_334-208_6-0.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (21, 13, 23, 0, 1, 0, 'http://image.ganjistatic1.com/gjfs01/M01/2D/51/wKhxwU6AUFPDrTJjAADGEHr08cI849_334-208_6-0.jpg', '1');
INSERT INTO `qb_2shou_pic` VALUES (22, 13, 23, 0, 1, 0, 'http://image.ganjistatic1.com/gjfs01/M00/2D/5C/wKhxwU6AUIufwPl-AADB-oRwwHE299_334-208_6-0.jpg', '2');
INSERT INTO `qb_2shou_pic` VALUES (23, 13, 23, 0, 1, 0, 'http://image.ganjistatic1.com/gjfs01/M01/2D/53/wKhxwU6AUFzqfQIYAADQ65ttIt8785_334-208_6-0.jpg', '3');
INSERT INTO `qb_2shou_pic` VALUES (24, 13, 23, 0, 1, 0, 'http://image.ganjistatic1.com/gjfs01/M00/24/10/wKhxwE6AUGLgGaYiAACNWGrQCDA293_334-208_6-0.jpg', '4');
INSERT INTO `qb_2shou_pic` VALUES (25, 14, 23, 0, 1, 0, 'http://image.ganjistatic1.com/gjfs01/M01/29/9E/wKhxwU6APKq,GOuwAACNU35uPp8336_334-208_6-0.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (26, 14, 23, 0, 1, 0, 'http://image.ganjistatic1.com/gjfs01/M00/20/5B/wKhxwE6APKaYBa9aAAC99Uzr,Nc255_334-208_6-0.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (27, 14, 23, 0, 1, 0, 'http://image.ganjistatic1.com/gjfs01/M01/29/9D/wKhxwU6APKSRt5tHAACdmhp7Vns186_334-208_6-0.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (28, 15, 23, 0, 1, 0, 'http://image.ganjistatic1.com/gjfs01/M00/39/96/wKhxwU6BH-3d-,A9AAFaFRa3TTI083_334-208_6-0.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (29, 15, 23, 0, 1, 0, 'http://image.ganjistatic1.com/gjfs01/M00/39/95/wKhxwU6BH-enbkHvAAF8SjYsJhI350_334-208_6-0.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (30, 15, 23, 0, 1, 0, 'http://image.ganjistatic1.com/gjfs01/M00/30/4D/wKhxwE6BH9buOt82AAFjnVvcO8Q832_334-208_6-0.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (31, 15, 23, 0, 1, 0, 'http://image.ganjistatic1.com/gjfs01/M01/30/51/wKhxwE6BH-uQ6EtrAAHFzh29N6k489_334-208_6-0.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (32, 15, 23, 0, 1, 0, 'http://image.ganjistatic1.com/gjfs01/M01/39/92/wKhxwU6BH9iPzm1QAAIhbSQjk2Q803_334-208_6-0.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (33, 16, 13, 0, 1, 0, 'http://image.ganjistatic1.com/gjfs01/M01/38/E1/wKhxwU6BHArCrQUuAAStvRrGnYg151_334-208_6-0.jpg', '');
INSERT INTO `qb_2shou_pic` VALUES (34, 17, 13, 0, 1, 0, 'http://image.ganjistatic1.com/gjfs01/M01/38/36/wKhxwU6BErHCW76LAABi07Tgd,g056_334-208_6-0.jpg', '');

# --------------------------------------------------------

#
# 表的结构 `qb_2shou_report`
#

DROP TABLE IF EXISTS `qb_2shou_report`;
CREATE TABLE `qb_2shou_report` (
  `rid` mediumint(7) NOT NULL auto_increment,
  `id` mediumint(7) NOT NULL default '0',
  `fid` mediumint(7) NOT NULL default '0',
  `uid` mediumint(7) NOT NULL default '0',
  `username` varchar(30) NOT NULL default '',
  `posttime` int(10) NOT NULL default '0',
  `onlineip` varchar(15) NOT NULL default '',
  `type` tinyint(2) NOT NULL default '0',
  `content` text NOT NULL,
  `iftrue` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`rid`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

#
# 导出表中的数据 `qb_2shou_report`
#


# --------------------------------------------------------

#
# 表的结构 `qb_2shou_sort`
#

DROP TABLE IF EXISTS `qb_2shou_sort`;
CREATE TABLE `qb_2shou_sort` (
  `fid` mediumint(7) unsigned NOT NULL auto_increment,
  `fup` mediumint(7) unsigned NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  `mid` smallint(4) NOT NULL default '0',
  `class` smallint(4) NOT NULL default '0',
  `sons` smallint(4) NOT NULL default '0',
  `type` tinyint(1) NOT NULL default '0',
  `admin` varchar(100) NOT NULL default '',
  `list` int(10) NOT NULL default '0',
  `listorder` tinyint(2) NOT NULL default '0',
  `passwd` varchar(32) NOT NULL default '',
  `logo` varchar(150) NOT NULL default '',
  `descrip` text NOT NULL,
  `style` varchar(50) NOT NULL default '',
  `template` text NOT NULL,
  `jumpurl` varchar(150) NOT NULL default '',
  `maxperpage` tinyint(3) NOT NULL default '0',
  `metatitle` varchar(250) NOT NULL default '',
  `metakeywords` varchar(255) NOT NULL default '',
  `metadescription` varchar(255) NOT NULL default '',
  `allowcomment` tinyint(1) NOT NULL default '0',
  `allowpost` varchar(150) NOT NULL default '',
  `allowviewtitle` varchar(150) NOT NULL default '',
  `allowviewcontent` varchar(150) NOT NULL default '',
  `allowdownload` varchar(150) NOT NULL default '',
  `forbidshow` tinyint(1) NOT NULL default '0',
  `config` mediumtext NOT NULL,
  `index_show` tinyint(1) NOT NULL default '0',
  `contents` mediumint(4) NOT NULL default '0',
  `tableid` varchar(30) NOT NULL default '',
  `dir_name` varchar(50) NOT NULL default '',
  `ifcolor` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`fid`)
) TYPE=MyISAM AUTO_INCREMENT=42 ;

#
# 导出表中的数据 `qb_2shou_sort`
#

INSERT INTO `qb_2shou_sort` VALUES (1, 0, '二手家电', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (2, 0, '二手家具/家居', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (3, 0, '母婴/儿童用品', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (4, 0, '二手电脑/笔记本', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (5, 0, '数码产品', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (6, 0, '文体用品/艺术品/收藏品', 1, 1, 0, 1, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (7, 1, '电视机', 1, 2, 0, 0, '', 0, 0, '', '', '', '', 'a:4:{s:4:"head";s:0:"";s:4:"foot";s:0:"";s:4:"list";s:0:"";s:8:"bencandy";s:0:"";}', '', 0, '', '', '', 0, '', '', '', '', 0, 'a:1:{s:11:"field_value";N;}', 1, 0, '', 'dianshiji', 0);
INSERT INTO `qb_2shou_sort` VALUES (8, 1, '洗衣机', 1, 2, 0, 0, '', 0, 0, '', '', '', '', 'a:4:{s:4:"head";s:0:"";s:4:"foot";s:0:"";s:4:"list";s:0:"";s:8:"bencandy";s:0:"";}', '', 0, '', '', '', 0, '', '', '', '', 0, 'a:1:{s:11:"field_value";N;}', 1, 0, '', 'xiyiji', 0);
INSERT INTO `qb_2shou_sort` VALUES (9, 1, '空调', 1, 2, 0, 0, '', 0, 0, '', '', '', '', 'a:4:{s:4:"head";s:0:"";s:4:"foot";s:0:"";s:4:"list";s:0:"";s:8:"bencandy";s:0:"";}', '', 0, '', '', '', 0, '', '', '', '', 0, 'a:1:{s:11:"field_value";N;}', 1, 0, '', 'kongdiao', 0);
INSERT INTO `qb_2shou_sort` VALUES (10, 1, '冰箱', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (11, 1, '电暖气', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (12, 1, '热水器', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (13, 2, '床/床垫', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (14, 2, '椅子/沙发', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (15, 2, '柜子', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (16, 2, '桌子', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (17, 2, '居家用品/家纺', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (18, 3, '婴幼/儿童用品', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (19, 3, '玩具', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (20, 3, '奶粉', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (21, 3, '婴儿床', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (22, 3, '孕妇用品', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (23, 4, '笔记本', 1, 2, 0, 0, '', 0, 0, '', '', '', '', 'a:4:{s:4:"head";s:0:"";s:4:"foot";s:0:"";s:4:"list";s:0:"";s:8:"bencandy";s:0:"";}', '', 0, '', '', '', 0, '', '', '', '', 0, 'a:1:{s:11:"field_value";N;}', 1, 0, '', 'bijiben', 0);
INSERT INTO `qb_2shou_sort` VALUES (24, 4, '台式机', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (25, 4, '平板电脑', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (26, 4, '硬件', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (27, 4, '外设产品', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (28, 4, '无线网卡', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (29, 4, '显示器', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (30, 4, '移动硬盘', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (31, 5, '手机', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (32, 5, '数码相机', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (33, 5, '摄像机', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (34, 5, '游戏机/PSP', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (35, 5, 'MP3/MP4', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (36, 5, '电子相框', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (37, 6, '户外用品', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (38, 6, '健身器材', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (39, 6, '文教用品', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (40, 6, '乐器', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
INSERT INTO `qb_2shou_sort` VALUES (41, 6, '钓鱼用具', 1, 2, 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '', '', '', 1, '', '', '', '', 0, '', 0, 0, '', '', 0);
