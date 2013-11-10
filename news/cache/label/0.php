<?php

$TagDB['blue_hotnews']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:37:{s:7:\"allcity\";s:1:\"0\";s:13:\"tplpart_1code\";s:92:\"<div class=\"list$i\"><A HREF=\"$url\" target=\'_blank\' >$title</a><span>{$hits}次</span></div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:30:\"/common_title/1title_noico.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.hits\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"10\";s:3:\"sql\";s:118:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\'  AND A.yz=1   ORDER BY A.hits DESC LIMIT 0,10 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_listsortynews']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:430:\"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"listzt\">
  <tr>
    <td class=\"img\"><a href=\"$url\" target=\"_blank\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"80\" height=\"60\"/></a></td>
    <td class=\"word\">
    	<a href=\"$url\" target=\"_blank\">$title</a></div>
        <div>$content<a href=\"$url\" target=\"_blank\">[详细]</a></div>
   </td>
 </tr>
</table>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:33:\"/common_pic/title_pic_content.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:2:\"cp\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"2\";s:3:\"sql\";s:163:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 2 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"30\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_morenest']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<a href=\"#\">09:17 中英携手低碳合作</a> <a href=\"#\">寒冷天气还将持续</a>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_news12']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:66:\"<div class=\"listm\"><A HREF=\"$url\" target=\'_blank\'>$title</a></div>\";s:13:\"tplpart_2code\";s:394:\"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"listpw\">
<tr>
<td class=\"img\"><div><a href=\"$url\" target=\"_blank\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"120\"/></a></div></td> 
<td class=\"word\">
<a href=\"$url\" target=\"_blank\">$title</a><br/>　
$content<a href=\"$url\" target=\"_blank\">[详细]</a>
</td>
</tr>
</table>\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:33:\"/common_zh_content/zh_content.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.hits\";s:3:\"asc\";s:3:\"ASC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:132:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.yz=1   ORDER BY A.hits ASC LIMIT 7 \";s:4:\"sql2\";s:145:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.yz=1  AND A.ispic=1 ORDER BY A.hits ASC LIMIT 1 \";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:2:\"90\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"36\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_news13']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:66:\"<div class=\"listm\"><A HREF=\"$url\" target=\'_blank\'>$title</a></div>\";s:13:\"tplpart_2code\";s:394:\"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"listpw\">
<tr>
<td class=\"img\"><div><a href=\"$url\" target=\"_blank\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"120\"/></a></div></td> 
<td class=\"word\">
<a href=\"$url\" target=\"_blank\">$title</a><br/>　
$content<a href=\"$url\" target=\"_blank\">[详细]</a>
</td>
</tr>
</table>\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:33:\"/common_zh_content/zh_content.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:133:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.yz=1   ORDER BY A.list DESC LIMIT 7 \";s:4:\"sql2\";s:146:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.yz=1  AND A.ispic=1 ORDER BY A.list DESC LIMIT 1 \";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:2:\"80\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"32\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_news9']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:68:\"<div class=\"listzta\"><a href=\"$url\" target=\"_blank\">$title</a></div>\";s:13:\"tplpart_2code\";s:374:\"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"listnew\">
<tr>
<td> 
<a href=\"$url\" class=\"img\" target=\"_blank\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"80\" height=\"60\"/></a> 
<a href=\"$url\" target=\"_blank\">$title</a><br/>
$content <a href=\"$url\" target=\"_blank\">[详细]</a> 
</td>
</tr>
</table>\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:25:\"/common_zh_pic/zh_pic.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:133:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.yz=1   ORDER BY A.list DESC LIMIT 7 \";s:4:\"sql2\";s:146:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.yz=1  AND A.ispic=1 ORDER BY A.list DESC LIMIT 1 \";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:2:\"60\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"30\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsad1']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:4:{s:6:\"imgurl\";s:31:\"../images/blue/news/newsad1.gif\";s:7:\"imglink\";s:1:\"#\";s:5:\"width\";s:3:\"980\";s:6:\"height\";s:2:\"46\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsad2']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:4:{s:6:\"imgurl\";s:31:\"../images/blue/news/newsad2.gif\";s:7:\"imglink\";s:1:\"#\";s:5:\"width\";s:3:\"980\";s:6:\"height\";s:2:\"93\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsimages']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:232:\"<div class=\"listpic\"> 
<a href=\"$url\" target=\"_blank\" class=\"img\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"120\" height=\"90\"/></a> 
<a href=\"$url\" target=\"_blank\">$title</a> 
</div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:144:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 6 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newslistpic']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:251:\"<div class=\"listpic\">
<div class=\"img\"><a href=\"$url\" target=\"_blank\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"120\"/></a></div> 
<div class=\"t\"><a href=\"$url\" target=\"_blank\">$title</a></div> 
</div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:110:\" SELECT A.* FROM qb_news_content A  WHERE A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 6 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsmenu']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'   <li class=\"begin\">
        <a href=\"#\" target=\"_blank\"><span>餐饮美食</span></a>
        <a href=\"#\" target=\"_blank\">火锅\\砂锅</a>
        <a href=\"#\" target=\"_blank\">韩国料理</a>
        <a href=\"#\" target=\"_blank\">庭院餐厅</a>
        <a href=\"#\" target=\"_blank\">石锅拌饭</a>
        <a href=\"#\" target=\"_blank\">调价信息</a>
    </li>        
    <li>
        <a href=\"#\" target=\"_blank\"><span>休闲娱乐</span></a>
        <a href=\"#\" target=\"_blank\">KTV俱乐部</a>
        <a href=\"#\" target=\"_blank\">酸菜鱼</a>
        <a href=\"#\" target=\"_blank\">酒吧/SPA馆</a>
        <a href=\"#\" target=\"_blank\">庭院餐厅</a>
        <a href=\"#\" target=\"_blank\">日本料理</a>
    </li>
    <li>
        <a href=\"#\" target=\"_blank\"><span>旅游酒店</span></a>        
        <a href=\"#\" target=\"_blank\">洗浴桑拿</a>
        <a href=\"#\" target=\"_blank\">农家菜</a>
        <a href=\"#\" target=\"_blank\">足浴按摩</a>
        <a href=\"#\" target=\"_blank\">海鲜自助餐</a>
        <a href=\"#\" target=\"_blank\">儿童摄影</a>
    </li>
    <li>
        <a href=\"#\" target=\"_blank\"><span>便民服务</span></a>
        <a href=\"#\" target=\"_blank\">玩乐影院</a>
        <a href=\"#\" target=\"_blank\">油爆虾</a>        
        <a href=\"#\" target=\"_blank\">出厂价格</a>
        <a href=\"#\" target=\"_blank\">瑜伽馆</a>
        <a href=\"#\" target=\"_blank\">桌游吧</a>
    </li>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsother']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<div class=\"list\"><a href=\"#\">为什么要申请金牌会员?</a></div>
<div class=\"list\"><a href=\"#\">注册普通会员要收费吗?</a></div>
<div class=\"list\"><a href=\"#\">忘记登录名和密码?</a></div>
<div class=\"list\"><a href=\"#\">如何发布供应信息?</a></div>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsth1']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'焦点新闻',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsth10']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<span>今日新闻</span><a href=\"#\">更多&gt;&gt;</a>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsth11']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<span>今日新闻</span><a href=\"#\">更多&gt;&gt;</a>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsth12']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'新品上市',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsth13']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<span>渡假生活</span><a href=\"list.php?fid=32\">更多&gt;&gt;</a>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsth14']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<div class=\"tag\">报价促销</div>
<div class=\"more\">
<a href=\"#\" class=\"s\">价格</a> |
<a href=\"#\" class=\"s\">政策</a> |
<a href=\"#\" class=\"s\">服务</a> |
<a href=\"#\">更多&gt;&gt;</a>                
</div>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsth15']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<div class=\"tag\">社区生活</div>
<div class=\"more\">
<a href=\"#\" class=\"s\">价格</a> |
<a href=\"#\" class=\"s\">政策</a> |
<a href=\"#\" class=\"s\">技术</a> |
<a href=\"#\" class=\"s\">服务</a> |
<a href=\"#\">更多&gt;&gt;</a>                
</div> ',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsth16']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<span>今日新闻</span><a href=\"#\">更多&gt;&gt;</a>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsth17']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<span>今日新闻</span><a href=\"#\">更多&gt;&gt;</a>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsth2']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'推荐新闻',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsth3']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'最新要闻',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsth4']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<span>最热</span>新闻排行',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsth5']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<span>图说</span>新闻',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsth6']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'本地行情',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsth7']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<span>渡假生活</span><a href=\"list.php?fid=32\">更多&gt;&gt;</a>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsth8']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'报价促销',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newsth9']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<div class=\"tag\">社区生活</div>
<div class=\"more\">
<a href=\"#\" class=\"s\">价格</a> |
<a href=\"#\" class=\"s\">政策</a> |
<a href=\"#\" class=\"s\">技术</a> |
<a href=\"#\" class=\"s\">服务</a> |
<a href=\"#\">更多&gt;&gt;</a>                
</div> ',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newstzs']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:228:\"<div class=\"list\">
<a href=\"$url\" target=\"_blank\" class=\"img\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"120\" height=\"90\"/></a>
<a href=\"$url\" target=\"_blank\">{$title}</a>
</div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.hits\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"2\";s:3:\"sql\";s:144:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.hits DESC LIMIT 2 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"25\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_newstzs1']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:62:\"<div class=\"t\"><A HREF=\"$url\" target=\'_blank\'>$title</a></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:24:\"/common_title/0title.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 4 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_nrightad']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:4:{s:6:\"imgurl\";s:31:\"../images/blue/news/newsad2.gif\";s:7:\"imglink\";s:1:\"#\";s:5:\"width\";s:3:\"230\";s:6:\"height\";s:2:\"80\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_nrightad2']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:4:{s:6:\"imgurl\";s:31:\"../images/blue/news/newsad3.gif\";s:7:\"imglink\";s:1:\"#\";s:5:\"width\";s:3:\"230\";s:6:\"height\";s:2:\"70\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_nrightad3']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:4:{s:6:\"imgurl\";s:31:\"../images/blue/news/newsad4.gif\";s:7:\"imglink\";s:1:\"#\";s:5:\"width\";s:3:\"230\";s:6:\"height\";s:2:\"78\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle1']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:232:\"<div class=\"listpic\"> 
<a href=\"$url\" target=\"_blank\" class=\"img\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"100\" height=\"75\"/></a> 
<a href=\"$url\" target=\"_blank\">$title</a> 
</div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"1\";s:3:\"sql\";s:144:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 1 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"10\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle10']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:231:\"<div class=\"listpic\"> 
<a href=\"$url\" target=\"_blank\" class=\"img\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"90\" height=\"70\"/></a> 
<a href=\"$url\" target=\"_blank\">$title</a> 
</div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"3\";s:3:\"sql\";s:144:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 3 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle11']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:120:\"<div class=\"list\">
·<A HREF=\"$list_url\" class=\"f\">[{$fname}]</A>
<A HREF=\"$url\" target=\'_blank\' >$title</a>
</div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 4 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle12']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:232:\"<div class=\"listpic\"> 
<a href=\"$url\" target=\"_blank\" class=\"img\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"100\" height=\"75\"/></a> 
<a href=\"$url\" target=\"_blank\">$title</a> 
</div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"3\";s:3:\"sql\";s:144:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 3 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle13']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:70:\"<div class=\"list\">·<A HREF=\"$url\" target=\'_blank\' >$title</a></div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:24:\"/common_title/0title.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"8\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 8 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"25\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle14']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:120:\"<div class=\"list\">
·<A HREF=\"$list_url\" class=\"f\">[{$fname}]</A>
<A HREF=\"$url\" target=\'_blank\' >$title</a>
</div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"10\";s:3:\"sql\";s:115:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 10 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle15']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:72:\"<div class=\"list\">
<A HREF=\"$url\" target=\'_blank\' >$title</a>
</div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"9\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 9 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle16']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:72:\"<div class=\"list\">
<A HREF=\"$url\" target=\'_blank\' >$title</a>
</div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"9\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 9 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle17']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:176:\"<div class=\"listpic\"> 
<a href=\"$url\" target=\"_blank\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"100\" height=\"75\"/></a> 
</div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"2\";s:3:\"sql\";s:144:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 2 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle18']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:118:\"<div class=\"list\">
<A HREF=\"$list_url\" class=\"f\">[{$fname}]</A>
<A HREF=\"$url\" target=\'_blank\' >$title</a>
</div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"7\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 7 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"25\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle19']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:176:\"<div class=\"listpic\"> 
<a href=\"$url\" target=\"_blank\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"100\" height=\"75\"/></a> 
</div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.hits\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"2\";s:3:\"sql\";s:144:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.hits DESC LIMIT 2 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle2']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:70:\"<div class=\"list\">·<A HREF=\"$url\" target=\'_blank\' >$title</a></div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:24:\"/common_title/0title.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle20']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:118:\"<div class=\"list\">
<A HREF=\"$list_url\" class=\"f\">[{$fname}]</A>
<A HREF=\"$url\" target=\'_blank\' >$title</a>
</div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"7\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 7 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"25\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle21']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:232:\"<div class=\"listpic\"> 
<a href=\"$url\" target=\"_blank\" class=\"img\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"100\" height=\"75\"/></a> 
<a href=\"$url\" target=\"_blank\">$title</a> 
</div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:144:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 6 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle22']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:120:\"<div class=\"list\">
·<A HREF=\"$list_url\" class=\"f\">[{$fname}]</A>
<A HREF=\"$url\" target=\'_blank\' >$title</a>
</div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"10\";s:3:\"sql\";s:115:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 10 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle23']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:72:\"<div class=\"list\">
<A HREF=\"$url\" target=\'_blank\' >$title</a>
</div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.hits\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"8\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.hits DESC LIMIT 8 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle24']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:72:\"<div class=\"list\">
<A HREF=\"$url\" target=\'_blank\' >$title</a>
</div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 4 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle3']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:120:\"<div class=\"list\">
·<A HREF=\"$list_url\" class=\"f\">[{$fname}]</A>
<A HREF=\"$url\" target=\'_blank\' >$title</a>
</div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:24:\"/common_title/0title.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 4 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle4']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:231:\"<div class=\"listpic\"> 
<a href=\"$url\" target=\"_blank\" class=\"img\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"90\" height=\"70\"/></a> 
<a href=\"$url\" target=\"_blank\">$title</a> 
</div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.hits\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"3\";s:3:\"sql\";s:144:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.hits DESC LIMIT 3 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle5']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:120:\"<div class=\"list\">
·<A HREF=\"$list_url\" class=\"f\">[{$fname}]</A>
<A HREF=\"$url\" target=\'_blank\' >$title</a>
</div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.hits\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.hits DESC LIMIT 4 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle6']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:231:\"<div class=\"listpic\"> 
<a href=\"$url\" target=\"_blank\" class=\"img\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"90\" height=\"70\"/></a> 
<a href=\"$url\" target=\"_blank\">$title</a> 
</div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"3\";s:3:\"sql\";s:144:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 3 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle7']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:120:\"<div class=\"list\">
·<A HREF=\"$list_url\" class=\"f\">[{$fname}]</A>
<A HREF=\"$url\" target=\'_blank\' >$title</a>
</div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 4 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle8']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:231:\"<div class=\"listpic\"> 
<a href=\"$url\" target=\"_blank\" class=\"img\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"90\" height=\"70\"/></a> 
<a href=\"$url\" target=\"_blank\">$title</a> 
</div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.hits\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"3\";s:3:\"sql\";s:144:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.hits DESC LIMIT 3 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_ntitle9']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:120:\"<div class=\"list\">
·<A HREF=\"$list_url\" class=\"f\">[{$fname}]</A>
<A HREF=\"$url\" target=\'_blank\' >$title</a>
</div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:8:\"31,32,33\";s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:139:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.fid IN (31,32,33)   ORDER BY A.list DESC LIMIT 4 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_othernewest']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:37:{s:7:\"allcity\";s:1:\"0\";s:13:\"tplpart_1code\";s:164:\"<div class=\"list$i\">
<A HREF=\"$list_url\" class=\"f\">[{$fname}]</A>
<A HREF=\"$url\" target=\'_blank\' >$title</a>
<span>{$time_Y}-{$time_m}-{$time_d}</span>
</div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:28:\"/common_fname/time_fname.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"20\";s:3:\"sql\";s:118:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\'  AND A.yz=1   ORDER BY A.list DESC LIMIT 0,20 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"25\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_secondnews']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:195:\"<div class=\"list$i\">
   <a href=\"{$list_url}\" target=\"_blank\" class=\"sort\">[{$fname}]</a>
   <a href=\"{$url}\" target=\"_blank\">{$title}</a>
   <span>{$time_Y}-{$time_m}-{$time_d}</span>
</div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"20\";s:3:\"sql\";s:81:\" SELECT A.* FROM qb_news_content A  WHERE A.yz=1   ORDER BY A.list DESC LIMIT 20 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"22\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_showh1']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'美容',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_showh2']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'留学',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_showh3']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'服装',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_showh4']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'装修',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_sortimg1']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:422:\"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"list\">
<tr>                    
<td class=\"img\"><a href=\"$url\" target=\"_blank\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"95\" height=\"75\" border=\"0\"/></a></td>
<td class=\"word\"><div><a href=\"$url\" target=\"_blank\">$title</a></div>
$content<a href=\"$url\" target=\"_blank\">[详细]</a></td>
</tr>
</table>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:33:\"/common_pic/title_pic_content.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:5:\"37,39\";s:5:\"stype\";s:2:\"cp\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"2\";s:3:\"sql\";s:219:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.fid IN (37,39)  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 2 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"30\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_sortimg2']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:422:\"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"list\">
<tr>                    
<td class=\"img\"><a href=\"$url\" target=\"_blank\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"95\" height=\"75\" border=\"0\"/></a></td>
<td class=\"word\"><div><a href=\"$url\" target=\"_blank\">$title</a></div>
$content<a href=\"$url\" target=\"_blank\">[详细]</a></td>
</tr>
</table>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:33:\"/common_pic/title_pic_content.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:11:\"31,32,33,34\";s:5:\"stype\";s:2:\"cp\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"2\";s:3:\"sql\";s:225:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.fid IN (31,32,33,34)  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 2 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"30\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_sortnewhead1']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<a href=\"list.php?fid=33\">饮食文化</a>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_sortnewhead2']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<a href=\"list.php?fid=31\">旅游文化</a>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_sortword1']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:68:\"<div class=\"list\"><A HREF=\"$url\" target=\'_blank\' >$title</a></div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:24:\"/common_title/0title.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";s:5:\"37,39\";s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:136:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.fid IN (37,39)   ORDER BY A.list DESC LIMIT 4 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_sortword2']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:68:\"<div class=\"list\"><A HREF=\"$url\" target=\'_blank\' >$title</a></div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:24:\"/common_title/0title.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 4 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['blue_topnewest']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:103:\"<div class=\"list$i\">
<A HREF=\"$url\" target=\'_blank\'  style=\"$fontcolor;$fontweight\">$title</a>
</div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:24:\"/common_title/0title.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"3\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 3 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindexh1']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<img src=\"http://www_qibosoft_com/images/fashion/news/tag1.gif\">',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindexh10']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<img src=\"http://www_qibosoft_com/images/fashion/news/tag11.gif\">',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindexh2']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<img src=\"http://www_qibosoft_com/images/fashion/news/tag2.gif\">',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindexh3']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<img src=\"http://www_qibosoft_com/images/fashion/news/tag3.gif\">',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindexh4']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<span class=\"tag\"><img src=\"http://www_qibosoft_com/images/fashion/news/tag5.gif\"></span>
<span class=\"more\"><a href=\"#\" target=\"_blank\">最新</a> | <a href=\"#\" target=\"_blank\">推荐</a> | <a href=\"#\" target=\"_blank\">热门</a></span>
',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindexh5']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<img src=\"http://www_qibosoft_com/images/fashion/news/tag6.gif\">',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindexh6']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<span class=\"tag\"><img src=\"http://www_qibosoft_com/images/fashion/news/tag7.gif\"></span>
<div onmouseover=\"ShowTab(1,1,5)\" id=\"Span1\"><span>美容</span></div>
<div onmouseover=\"ShowTab(2,1,5)\" id=\"Span2\"><span>留学</span></div>
<div onmouseover=\"ShowTab(3,1,5)\" id=\"Span3\"><span>服装</span></div>
<div onmouseover=\"ShowTab(4,1,5)\" id=\"Span4\"><span>装修</span></div>
',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindexh7']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<img src=\"http://www_qibosoft_com/images/fashion/news/tag8.gif\">',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindexh8']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<img src=\"http://www_qibosoft_com/images/fashion/news/tag9.gif\">',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindexh9']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<span class=\"tag\"><img src=\"http://www_qibosoft_com/images/fashion/news/tag10.gif\"></span>
<div onmouseover=\"ShowTab(5,5,9)\" id=\"Span5\"><span>数码</span></div>
<div onmouseover=\"ShowTab(6,5,9)\" id=\"Span6\"><span>配饰</span></div>
<div onmouseover=\"ShowTab(7,5,9)\" id=\"Span7\"><span>运动</span></div>
<div onmouseover=\"ShowTab(8,5,9)\" id=\"Span8\"><span>虚拟</span></div>
',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindexmenu']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'<dl>
    <dt><a href=\"http://www_qibosoft_com/news/list.php?fid=1\" target=\"_blank\">旅游资讯</a></dt>
    <dd><a href=\"http://www_qibosoft_com/news/list.php?fid=31\" target=\"_blank\">旅游文化</a></dd>
    <dd><a href=\"http://www_qibosoft_com/news/list.php?fid=32\" target=\"_blank\">度假生活</a></dd>
    <dd><a href=\"http://www_qibosoft_com/news/list.php?fid=33\" target=\"_blank\">旅游保险</a></dd>
    <dd><a href=\"http://www_qibosoft_com/news/list.php?fid=34\" target=\"_blank\">自助游</a></dd>
    <dd><a href=\"http://www_qibosoft_com/news/list.php?fid=36\" target=\"_blank\">饮食资讯</a></dd>
</dl>
<dl>
    <dt><a href=\"#\" target=\"_blank\">休闲娱乐</a></dt>
    <dd><a href=\"#\" target=\"_blank\">KTV娱乐部</a></dd>
    <dd><a href=\"#\" target=\"_blank\">酸菜鱼</a></dd>
    <dd><a href=\"#\" target=\"_blank\">酒吧/SPA馆</a></dd>
    <dd><a href=\"#\" target=\"_blank\">庭院餐厅</a></dd>
    <dd><a href=\"#\" target=\"_blank\">日本料理</a></dd>
</dl>
<dl>
    <dt><a href=\"#\" target=\"_blank\">旅游酒店</a></dt>
    <dd><a href=\"#\" target=\"_blank\">洗浴桑拿</a></dd>
    <dd><a href=\"#\" target=\"_blank\">农家菜</a></dd>
    <dd><a href=\"#\" target=\"_blank\">足浴按摩</a></dd>
    <dd><a href=\"#\" target=\"_blank\">海鲜自助餐</a></dd>
    <dd><a href=\"#\" target=\"_blank\">儿童摄影</a></dd>
</dl>
<dl>
    <dt><a href=\"#\" target=\"_blank\">便民服务</a></dt>
    <dd><a href=\"#\" target=\"_blank\">玩乐影院</a></dd>
    <dd><a href=\"#\" target=\"_blank\">油爆虾</a></dd>
    <dd><a href=\"#\" target=\"_blank\">出厂价格</a></dd>
    <dd><a href=\"#\" target=\"_blank\">瑜伽馆</a></dd>
    <dd><a href=\"#\" target=\"_blank\">桌游吧</a></dd>
</dl>',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext1']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:36:{s:13:\"tplpart_1code\";s:311:\"<div class=\"listpic\"> 
<div class=\"img\"><a href=\"$url\" target=\"_blank\"><img src=\"$picurl\" onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" width=\"105\"/></a> </div>
<div class=\"word\">
<div class=\"t\"><a href=\"$url\" target=\"_blank\">$title</a> </div>
<div class=\"c\">$content</div>
</div>
</div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:29:\"/common_content/content_1.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:2:\"cp\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"3\";s:3:\"sql\";s:199:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 0,3 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:3:\"120\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext10']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:36:{s:13:\"tplpart_1code\";s:246:\"<div class=\"listc\">
<div class=\"img\"><a href=\"$url\" target=\"_blank\"><img src=\"$picurl\" onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" width=\"120\" /></a></div>
<div class=\"t\"><a href=\"$url\" target=\"_blank\">$title</a></div>
</div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"2\";s:3:\"sql\";s:146:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 0,2 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext11']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:36:{s:13:\"tplpart_1code\";s:129:\"<div class=\"listb\"><a href=\"$list_url\" target=\"_blank\" class=\"f\">[{$fname}]</a><A HREF=\"$url\" target=\'_blank\' >$title</a></div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:24:\"/common_title/0title.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:116:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 2,5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"3\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext12']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:36:{s:13:\"tplpart_1code\";s:127:\"<div class=\"listb\"><a href=\"$list_url\" target=\"_blank\" class=\"f\">[{$fname}]</a><A HREF=\"$url\" target=\'_blank\' >$title</a></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"11\";s:3:\"sql\";s:118:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 10,11 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:2:\"11\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext13']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:36:{s:13:\"tplpart_1code\";s:127:\"<div class=\"listb\"><a href=\"$list_url\" target=\"_blank\" class=\"f\">[{$fname}]</a><A HREF=\"$url\" target=\'_blank\' >$title</a></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"11\";s:3:\"sql\";s:118:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 14,11 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:2:\"15\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext14']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:36:{s:13:\"tplpart_1code\";s:127:\"<div class=\"listb\"><a href=\"$list_url\" target=\"_blank\" class=\"f\">[{$fname}]</a><A HREF=\"$url\" target=\'_blank\' >$title</a></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:3:\"ASC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"11\";s:3:\"sql\";s:116:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list ASC LIMIT 0,11 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext15']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:36:{s:13:\"tplpart_1code\";s:129:\"<div class=\"listb\"><a href=\"$list_url\" target=\"_blank\" class=\"f\">[{$fname}]</a><a href=\"$url\" target=\'_blank\' >$title</a></div>
\";s:13:\"tplpart_2code\";s:277:\"<div class=\"lista\">
<div class=\"t\"><a href=\"$url\" target=\"_blank\">$title</a></div>
<div class=\"img\"><a href=\"$url\" target=\"_blank\"><img src=\"$picurl\" onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" width=\"120\" /></a></div>
<div class=\"c\">$content</div>
</div>\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:33:\"/common_zh_content/zh_content.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.hits\";s:3:\"asc\";s:3:\"ASC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:168:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.hits ASC LIMIT 0,6 \";s:4:\"sql2\";s:181:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1 ORDER BY A.hits ASC LIMIT 0,1 \";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext16']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:4:{s:6:\"imgurl\";s:30:\"../images/fashion/news/ad2.gif\";s:7:\"imglink\";s:1:\"#\";s:5:\"width\";s:3:\"980\";s:6:\"height\";s:2:\"50\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext17']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:4:{s:6:\"imgurl\";s:30:\"../images/fashion/news/ad3.gif\";s:7:\"imglink\";s:1:\"#\";s:5:\"width\";s:3:\"980\";s:6:\"height\";s:2:\"50\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext18']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:36:{s:13:\"tplpart_1code\";s:128:\"<div class=\"listb\"><a href=\"$list_url\" target=\"_blank\" class=\"f\">[{$fname}]</a><A HREF=\"$url\" target=\'_blank\'>$title</a></div>
\";s:13:\"tplpart_2code\";s:277:\"<div class=\"lista\">
<div class=\"t\"><a href=\"$url\" target=\"_blank\">$title</a></div>
<div class=\"img\"><a href=\"$url\" target=\"_blank\"><img src=\"$picurl\" onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" width=\"120\" /></a></div>
<div class=\"c\">$content</div>
</div>\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:33:\"/common_zh_content/zh_content.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:169:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 6,6 \";s:4:\"sql2\";s:182:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1 ORDER BY A.list DESC LIMIT 6,1 \";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"7\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext19']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:36:{s:13:\"tplpart_1code\";s:120:\"<div class=\"listd\"><span>$i</span><a href=\"$url\" target=\"_blank\">$title</a><em>{$time_Y}-{$time_m}-{$time_d}</em></div> \";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"10\";s:3:\"sql\";s:117:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 0,10 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext2']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:36:{s:13:\"tplpart_1code\";s:73:\"<div class=\"list list$i\"><A HREF=\"$url\" target=\'_blank\' >$title</a></div>\";s:13:\"tplpart_2code\";s:315:\"<div class=\"listpic\"> 
<div class=\"img\"><a href=\"$url\" target=\"_blank\"><img src=\"$picurl\" onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" width=\"80\"/></a> </div>
<div class=\"word\">
	<div class=\"t\"><a href=\"$url\" target=\"_blank\">$title</a> </div>
    <div class=\"m\">{$content}</div>
</div>
</div>\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:33:\"/common_zh_content/zh_content.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"8\";s:3:\"sql\";s:169:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 0,9 \";s:4:\"sql2\";s:182:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1 ORDER BY A.list DESC LIMIT 0,1 \";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext20']=array(
				'typesystem'=>'1',
				'type'=>'Info_tuangou_',
				'code'=>'a:29:{s:13:\"tplpart_1code\";s:120:\"<div class=\"listd\"><span>$i</span><a href=\"$url\" target=\"_blank\">$title</a><em>{$time_Y}-{$time_m}-{$time_d}</em></div> \";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:8:\"tuangou_\";s:6:\"cityId\";N;s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:11:\"content_num\";s:2:\"80\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:8:\"moduleid\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:3:\"all\";s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:4:\"list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"10\";s:3:\"sql\";s:99:\"SELECT * FROM qb_tuangou_content  WHERE city_id=\'$GLOBALS[city_id]\'  ORDER BY list DESC LIMIT 0,10 \";s:7:\"colspan\";s:1:\"1\";s:8:\"titlenum\";s:2:\"30\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext21']=array(
				'typesystem'=>'1',
				'type'=>'Info_fenlei_',
				'code'=>'a:30:{s:13:\"tplpart_1code\";s:120:\"<div class=\"listd\"><span>$i</span><a href=\"$url\" target=\"_blank\">$title</a><em>{$time_Y}-{$time_m}-{$time_d}</em></div> \";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:7:\"fenlei_\";s:7:\"typefid\";N;s:6:\"cityId\";s:17:\"$GLOBALS[city_id]\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:11:\"content_num\";s:2:\"80\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:8:\"moduleid\";s:0:\"\";s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:3:\"all\";s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:4:\"list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"10\";s:3:\"sql\";s:133:\"(SELECT * FROM qb_fenlei_content  WHERE city_id=\'$GLOBALS[city_id]\'  AND city_id=\'$GLOBALS[city_id]\' ) ORDER BY list DESC LIMIT 0,10 \";s:7:\"colspan\";s:1:\"1\";s:8:\"titlenum\";s:2:\"30\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext22']=array(
				'typesystem'=>'1',
				'type'=>'Info_house_',
				'code'=>'a:30:{s:13:\"tplpart_1code\";s:120:\"<div class=\"listd\"><span>$i</span><a href=\"$url\" target=\"_blank\">$title</a><em>{$time_Y}-{$time_m}-{$time_d}</em></div> \";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:6:\"house_\";s:7:\"typefid\";N;s:6:\"cityId\";s:17:\"$GLOBALS[city_id]\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:11:\"content_num\";s:2:\"80\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:2:\"30\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:3:\"fid\";i:1;s:8:\"moduleid\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:3:\"all\";s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:4:\"list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"10\";s:3:\"sql\";s:145:\"(SELECT * FROM qb_house_content  WHERE city_id=\'$GLOBALS[city_id]\'  AND city_id=\'$GLOBALS[city_id]\'  AND fid=\'1\' ) ORDER BY list DESC LIMIT 0,10 \";s:7:\"colspan\";s:1:\"1\";s:8:\"titlenum\";s:2:\"30\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext23']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:36:{s:13:\"tplpart_1code\";s:128:\"<div class=\"listb\"><a href=\"$list_url\" target=\"_blank\" class=\"f\">[{$fname}]</a><A HREF=\"$url\" target=\'_blank\'>$title</a></div>
\";s:13:\"tplpart_2code\";s:277:\"<div class=\"lista\">
<div class=\"t\"><a href=\"$url\" target=\"_blank\">$title</a></div>
<div class=\"img\"><a href=\"$url\" target=\"_blank\"><img src=\"$picurl\" onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" width=\"120\" /></a></div>
<div class=\"c\">$content</div>
</div>\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:33:\"/common_zh_content/zh_content.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:3:\"ASC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:168:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list ASC LIMIT 6,6 \";s:4:\"sql2\";s:181:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1 ORDER BY A.list ASC LIMIT 6,1 \";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"7\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext3']=array(
				'typesystem'=>'0',
				'type'=>'rollpic',
				'code'=>'a:7:{s:13:\"tplpart_1code\";s:796:\"<script src=\"http://www_qibosoft_com/images/fashion/news/jquery.js\" type=\"text/javascript\"></script>
 <ul class=\"slidePic\">
<!--
EOT;
$i=0;
foreach($listdb AS $rs){extract($rs);
$i++;
if($i==1)$curword=\"class=cur\";
else $curword=\"\";
print <<<EOT
-->
    <li $curword><a href=\"$url\"  target=\"_blank\"><IMG alt=\"$title\" src=\"$picurl\" width=310 height=200></a></li>
<!--
EOT;
}
print <<<EOT
-->
  </ul>
  <ul class=\"slideTxt\">
<!--
EOT;
$i=0;
foreach($listdb AS $rs){extract($rs);
$i++;
if($i==1)$curword=\"class=cur\";
else $curword=\"\";
print <<<EOT
-->
    <li $curword><a href=\"$url\"  target=\"_blank\" title=\"$title\">$i</a></li>
<!--
EOT;
}
print <<<EOT
-->
  </ul>
<script type=\"text/javascript\" src=\"http://www_qibosoft_com/images/fashion/news/slide.js\"></script>\";s:8:\"rolltype\";s:1:\"2\";s:5:\"width\";s:0:\"\";s:6:\"height\";s:0:\"\";s:6:\"picurl\";a:3:{i:1;s:58:\"http://img1.gtimg.com/gd/pics/hv1/193/187/845/54994003.jpg\";i:2;s:58:\"http://img1.gtimg.com/gd/pics/hv1/206/168/845/54989171.jpg\";i:3;s:58:\"http://img1.gtimg.com/gd/pics/hv1/176/175/844/54925901.jpg\";}s:7:\"piclink\";a:3:{i:1;s:38:\"http://gd.qq.com/a/20110823/000059.htm\";i:2;s:38:\"http://gd.qq.com/a/20110823/000009.htm\";i:3;s:38:\"http://gd.qq.com/a/20110822/000019.htm\";}s:6:\"picalt\";a:3:{i:1;s:34:\"广州买家涌至清远 一天买走700余套房\";i:2;s:33:\"深圳大运会闭幕 揭秘闭幕式精彩节目\";i:3;s:39:\"东莞公益慈善类社会组织登记松绑 登记积极\";}}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext4']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:36:{s:13:\"tplpart_1code\";s:95:\"<div class=\"t\"><a href=\"$url\" target=\"_blank\">$title</a></div>
<div class=\"c\">$content</div>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:29:\"/common_content/content_1.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"c\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:1:\"1\";s:7:\"rowspan\";s:1:\"1\";s:3:\"sql\";s:185:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.levels=1   ORDER BY A.list DESC LIMIT 0,1 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:3:\"120\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext5']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:36:{s:13:\"tplpart_1code\";s:348:\"<div class=\"listpic\"> 
<div class=\"num num$i\">$i</div>
<div class=\"img\"><a href=\"$url\" target=\"_blank\"><img src=\"$picurl\" onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" width=\"80\"/></a> </div>
<div class=\"word\">
	<div class=\"t\"><a href=\"$url\" target=\"_blank\">$title</a> </div>
    <div class=\"m\">{$content}</div>
</div>
</div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:2:\"cp\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.hits\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"2\";s:3:\"sql\";s:199:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.hits DESC LIMIT 0,2 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext6']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:36:{s:13:\"tplpart_1code\";s:218:\"<!--
EOT;
$i=0;
foreach($listdb AS $rs){extract($rs);
$i++;
$num=$i+2;
print <<<EOT
-->
    <div class=\"list$i\"><span>$num</span><A HREF=\"$url\" target=\'_blank\'>$title</a></div>
<!--
EOT;
}
print <<<EOT
-->\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.hits\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:116:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.hits DESC LIMIT 2,5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"3\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext7']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:4:{s:6:\"imgurl\";s:30:\"../images/fashion/news/ad1.gif\";s:7:\"imglink\";s:1:\"#\";s:5:\"width\";s:3:\"980\";s:6:\"height\";s:2:\"50\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext8']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:36:{s:13:\"tplpart_1code\";s:182:\"<li>
<div class=\"img\"><a href=\"$url\" target=\"_blank\"><img src=\"$picurl\" alt=\"$title\" height=\"90\"/></a></div>
<div class=\"t\"><a href=\"$url\" target=\"_blank\">$title</a></div>
</li>
\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"12\";s:3:\"sql\";s:147:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 0,12 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['fashion_newsindext9']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:36:{s:13:\"tplpart_1code\";s:128:\"<div class=\"listb\"><a href=\"$list_url\" target=\"_blank\" class=\"f\">[{$fname}]</a><A HREF=\"$url\" target=\'_blank\'>$title</a></div>
\";s:13:\"tplpart_2code\";s:277:\"<div class=\"lista\">
<div class=\"t\"><a href=\"$url\" target=\"_blank\">$title</a></div>
<div class=\"img\"><a href=\"$url\" target=\"_blank\"><img src=\"$picurl\" onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" width=\"120\" /></a></div>
<div class=\"c\">$content</div>
</div>\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:33:\"/common_zh_content/zh_content.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:3:\"ASC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:168:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list ASC LIMIT 2,6 \";s:4:\"sql2\";s:181:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1 ORDER BY A.list ASC LIMIT 2,1 \";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"3\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_0']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:3:\"800\";s:5:\"div_h\";s:2:\"60\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_1']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:67:\" <div class=\"s\"><A HREF=\"{$url}\" target=\'_blank\'>{$title}</a></div>\";s:13:\"tplpart_2code\";s:66:\"<div class=\"b\"><A HREF=\"{$url}\" target=\'_blank\'>{$title}</a></div>\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:32:\"/common_zh_title/zh_bigtitle.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"2\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 3 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"381\";s:5:\"div_h\";s:2:\"76\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_10']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:236:\"<div class=\"listpic\"> <a href=\"$url\" target=\"_blank\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"150\" height=\"120\" border=\"0\"/></a> 
        <a href=\"$url\" target=\"_blank\">$title</a> </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:144:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 6 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"973\";s:5:\"div_h\";s:3:\"129\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_11']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:68:\"<div class=\"listzta\"><a href=\"$url\" target=\"_blank\">$title</a></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"10\";s:3:\"sql\";s:115:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 10 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"34\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"206\";s:5:\"div_h\";s:3:\"189\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_12']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:66:\"<div class=\"liste\"><a href=\"$url\" target=\"_blank\">$title</a></div>\";s:13:\"tplpart_2code\";s:502:\"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"listnewa\">
                  <tr>
                    
              <td> <a href=\"$url\" class=\"img\" target=\"_blank\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"110\" height=\"70\" border=\"0\"/></a> 
                <a href=\"$url\" target=\"_blank\">$title</a><br/>　$content<a href=\"$url\" target=\"_blank\">[详细]</a> 
              </td>
                  </tr>
                </table>\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:25:\"/common_zh_pic/zh_pic.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:167:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 7 \";s:4:\"sql2\";s:180:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1 ORDER BY A.list DESC LIMIT 1 \";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:2:\"90\";s:8:\"titlenum\";s:2:\"46\";s:9:\"titlenum2\";s:2:\"36\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"339\";s:5:\"div_h\";s:3:\"185\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_13']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:66:\"<div class=\"liste\"><a href=\"$url\" target=\"_blank\">$title</a></div>\";s:13:\"tplpart_2code\";s:502:\"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"listnewa\">
                  <tr>
                    
              <td> <a href=\"$url\" class=\"img\" target=\"_blank\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"110\" height=\"70\" border=\"0\"/></a> 
                <a href=\"$url\" target=\"_blank\">$title</a><br/>　$content<a href=\"$url\" target=\"_blank\">[详细]</a> 
              </td>
                  </tr>
                </table>\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:25:\"/common_zh_pic/zh_pic.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:3:\"ASC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:166:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list ASC LIMIT 7 \";s:4:\"sql2\";s:179:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1 ORDER BY A.list ASC LIMIT 1 \";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:2:\"90\";s:8:\"titlenum\";s:2:\"46\";s:9:\"titlenum2\";s:2:\"32\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"340\";s:5:\"div_h\";s:3:\"220\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_1_1']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:260:\"<div class=\"list\">
                    <a href=\"{$list_url}\" target=\"_blank\" class=\"sort\">[{$fname}]</a>
                    <a href=\"{$url}\" target=\"_blank\">{$title}</a>
                    <span>{$time_Y}-{$time_m}-{$time_d}</span>
                </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:25:\"/common_title/title_i.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"372\";s:5:\"div_h\";s:3:\"112\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_1_2']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:260:\"<div class=\"list\">
                    <a href=\"{$list_url}\" target=\"_blank\" class=\"sort\">[{$fname}]</a>
                    <a href=\"{$url}\" target=\"_blank\">{$title}</a>
                    <span>{$time_Y}-{$time_m}-{$time_d}</span>
                </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:25:\"/common_title/title_i.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:3:\"ASC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:113:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list ASC LIMIT 5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"370\";s:5:\"div_h\";s:3:\"102\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_1_3']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:260:\"<div class=\"list\">
                    <a href=\"{$list_url}\" target=\"_blank\" class=\"sort\">[{$fname}]</a>
                    <a href=\"{$url}\" target=\"_blank\">{$title}</a>
                    <span>{$time_Y}-{$time_m}-{$time_d}</span>
                </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:17:\"/article/shop.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"364\";s:5:\"div_h\";s:3:\"114\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_1_4']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:260:\"<div class=\"list\">
                    <a href=\"{$list_url}\" target=\"_blank\" class=\"sort\">[{$fname}]</a>
                    <a href=\"{$url}\" target=\"_blank\">{$title}</a>
                    <span>{$time_Y}-{$time_m}-{$time_d}</span>
                </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:17:\"/article/shop.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"5\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 5 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"346\";s:5:\"div_h\";s:2:\"73\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_2_0']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:37:{s:7:\"allcity\";s:1:\"0\";s:13:\"tplpart_1code\";s:100:\"<div style=\"LINE-HEIGHT: 180%\">·<a style=\"fontcolor: \" href=\"$url\" target=\"_blank\">$title</a></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:24:\"/common_title/0title.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"10\";s:3:\"sql\";s:118:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\'  AND A.yz=1   ORDER BY A.list DESC LIMIT 0,10 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"24\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:9:\"start_num\";s:1:\"1\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"313\";s:5:\"div_h\";s:2:\"94\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_2_1']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:70:\"<div class=\"list\"><a href=\"{$url}\" target=\"_blank\">{$title}</a> </div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:3:\"ASC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"10\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list ASC LIMIT 10 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_3']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:69:\"<div class=\"l$i\"><a href=\"{$url}\" target=\"_blank\">{$title}</a></div> \";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"10\";s:3:\"sql\";s:115:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 10 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"20\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"284\";s:5:\"div_h\";s:2:\"95\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_4']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:543:\"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"listtv\">
                  <tr>
                    
              <td class=\"img\"><a href=\"$url\" target=\"_blank\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"60\" height=\"50\" border=\"0\"/></a></td>
                    <td class=\"word\">
                <div><a href=\"$url\" target=\"_blank\">{$title}</a></div>
                <div>关注度: <span>{$hits}</span> 人次</div></td>
                  </tr>
                </table>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"p\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"4\";s:3:\"sql\";s:144:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 4 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"50\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"188\";s:5:\"div_h\";s:3:\"111\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_5']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:538:\"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"listzt\">
                  <tr>
                    
              <td class=\"img\"><a href=\"$url\" target=\"_blank\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"95\" height=\"75\" border=\"0\"/></a></td>
                    
              <td class=\"word\"><a href=\"$url\" target=\"_blank\">$title</a><br/>
                $content<a href=\"$url\" target=\"_blank\">[详细]</a></td>
                  </tr>
                </table>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:29:\"/common_content/content_1.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:2:\"cp\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"2\";s:3:\"sql\";s:197:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1   AND A.ispic=1  ORDER BY A.list DESC LIMIT 2 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"30\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"30\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"209\";s:5:\"div_h\";s:3:\"179\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_6']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:68:\"<div class=\"listzta\"><a href=\"$url\" target=\"_blank\">$title</a></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"3\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 3 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"34\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_7']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:83:\"<div class=\"l$i\"><a href=\"$url\" target=\"_blank\">$title</a><span>$hits</span></div> \";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"10\";s:3:\"sql\";s:115:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 10 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"44\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"218\";s:5:\"div_h\";s:3:\"230\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_8_1']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:94:\"<div><a href=\"$url\" target=\"_blank\">$title</a><span>{$time_Y}-{$time_m}-{$time_d}</span></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"10\";s:3:\"sql\";s:115:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 10 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"36\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"334\";s:5:\"div_h\";s:3:\"200\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_8_2']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:94:\"<div><a href=\"$url\" target=\"_blank\">$title</a><span>{$time_Y}-{$time_m}-{$time_d}</span></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:3:\"ASC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"10\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list ASC LIMIT 10 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"38\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_8_3']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:94:\"<div><a href=\"$url\" target=\"_blank\">$title</a><span>{$time_Y}-{$time_m}-{$time_d}</span></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"10\";s:3:\"sql\";s:115:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 10 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"38\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_8_4']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:94:\"<div><a href=\"$url\" target=\"_blank\">$title</a><span>{$time_Y}-{$time_m}-{$time_d}</span></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:3:\"ASC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"10\";s:3:\"sql\";s:114:\" SELECT A.* FROM qb_news_content A  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list ASC LIMIT 10 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"38\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_8_5']=array(
				'typesystem'=>'1',
				'type'=>'article',
				'code'=>'a:32:{s:13:\"tplpart_1code\";s:94:\"<div><a href=\"$url\" target=\"_blank\">$title</a><span>{$time_Y}-{$time_m}-{$time_d}</span></div>\";s:13:\"tplpart_2code\";s:0:\"\";s:3:\"SYS\";s:7:\"artcile\";s:13:\"RollStyleType\";s:0:\"\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";s:1:\"0\";s:7:\"tplpath\";s:0:\"\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"4\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:2:\"10\";s:3:\"sql\";s:103:\" SELECT A.*,A.aid AS id FROM qb_article A  WHERE A.yz=1  AND A.mid=\'0\'   ORDER BY A.list DESC LIMIT 10 \";s:4:\"sql2\";N;s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:3:\"120\";s:8:\"titlenum\";s:2:\"38\";s:9:\"titlenum2\";s:2:\"40\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"30\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_9']=array(
				'typesystem'=>'1',
				'type'=>'Info_news_',
				'code'=>'a:35:{s:13:\"tplpart_1code\";s:68:\"<div class=\"listzta\"><a href=\"$url\" target=\"_blank\">$title</a></div>\";s:13:\"tplpart_2code\";s:535:\"<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"listnew\">
                  <tr>
                    
              <td> <a href=\"$url\" class=\"img\" target=\"_blank\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" src=\"{$picurl}\" width=\"95\" height=\"70\" border=\"0\"/></a> 
                <a href=\"$url\" target=\"_blank\">$title</a><br/>
                $content <a href=\"$url\" target=\"_blank\">[详细]</a> 
              </td>
                  </tr>
                </table>
                \";s:3:\"SYS\";s:2:\"wn\";s:6:\"wninfo\";s:5:\"news_\";s:9:\"noReadMid\";s:0:\"\";s:13:\"RollStyleType\";s:0:\"\";s:7:\"fidtype\";s:1:\"0\";s:8:\"rolltype\";s:10:\"scrollLeft\";s:8:\"rolltime\";s:1:\"3\";s:11:\"roll_height\";s:2:\"50\";s:5:\"width\";s:3:\"250\";s:6:\"height\";s:3:\"187\";s:7:\"newhour\";s:2:\"24\";s:7:\"hothits\";s:3:\"100\";s:7:\"amodule\";N;s:7:\"tplpath\";s:25:\"/common_zh_pic/zh_pic.jpg\";s:6:\"DivTpl\";i:1;s:5:\"fiddb\";N;s:5:\"stype\";s:1:\"t\";s:2:\"yz\";s:1:\"1\";s:7:\"hidefid\";N;s:10:\"timeformat\";s:11:\"Y-m-d H:i:s\";s:5:\"order\";s:6:\"A.list\";s:3:\"asc\";s:4:\"DESC\";s:6:\"levels\";s:3:\"all\";s:7:\"rowspan\";s:1:\"6\";s:3:\"sql\";s:167:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1   ORDER BY A.list DESC LIMIT 7 \";s:4:\"sql2\";s:180:\" SELECT A.*,R.content FROM qb_news_content A LEFT JOIN qb_news_content_1 R ON A.id=R.id  WHERE A.city_id=\'$GLOBALS[city_id]\' AND A.yz=1  AND A.ispic=1 ORDER BY A.list DESC LIMIT 1 \";s:7:\"colspan\";s:1:\"1\";s:11:\"content_num\";s:2:\"80\";s:12:\"content_num2\";s:2:\"65\";s:8:\"titlenum\";s:2:\"40\";s:9:\"titlenum2\";s:2:\"30\";s:10:\"titleflood\";s:1:\"0\";s:10:\"c_rolltype\";s:1:\"0\";}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"209\";s:5:\"div_h\";s:3:\"221\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_banner1']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:5:{s:6:\"imgurl\";s:26:\"http://placehold.it/980x80\";s:7:\"imglink\";s:1:\"#\";s:5:\"width\";s:3:\"980\";s:6:\"height\";s:2:\"80\";s:11:\"pic_city_id\";i:0;}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"980\";s:5:\"div_h\";s:2:\"80\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_banner2']=array(
				'typesystem'=>'0',
				'type'=>'pic',
				'code'=>'a:5:{s:6:\"imgurl\";s:32:\"label/1_20101019161034_jrzm7.gif\";s:7:\"imglink\";s:1:\"#\";s:5:\"width\";s:3:\"980\";s:6:\"height\";s:2:\"80\";s:11:\"pic_city_id\";i:0;}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"980\";s:5:\"div_h\";s:2:\"80\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_k1']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'推荐新闻',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_k10']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'新品上市',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_k11']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'打折促销',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_k12']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'购物要领',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_k13']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'美食推荐',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_k14']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'促销',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_k15']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'美容',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_k16']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'留学',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_k17']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'服装',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_k18']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'装修',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_k19']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'不锈钢',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_k2']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'成功故事',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_k3']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'美食资讯',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_k4']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'旅游资讯',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_k5']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'热门资料',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:0:\"\";s:5:\"div_h\";s:0:\"\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_k7']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'本地行情',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_k8']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'购物街',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_k9']=array(
				'typesystem'=>'0',
				'type'=>'code',
				'code'=>'今日促销',
				'divcode'=>'a:4:{s:9:\"html_edit\";N;s:5:\"div_w\";s:2:\"50\";s:5:\"div_h\";s:2:\"21\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
$TagDB['news_rollpic']=array(
				'typesystem'=>'0',
				'type'=>'rollpic',
				'code'=>'a:6:{s:8:\"rolltype\";s:1:\"1\";s:5:\"width\";s:3:\"344\";s:6:\"height\";s:3:\"276\";s:6:\"picurl\";a:2:{i:1;s:32:\"label/1_20101018161028_pjjzu.jpg\";i:2;s:32:\"label/1_20101018161051_jfeu1.jpg\";}s:7:\"piclink\";a:2:{i:1;s:1:\"#\";i:2;s:1:\"#\";}s:6:\"picalt\";a:2:{i:1;s:24:\"家电折扣季品牌家电32元起\";i:2;s:20:\"百元以下烘焙烤箱详解\";}}',
				'divcode'=>'a:3:{s:5:\"div_w\";s:3:\"328\";s:5:\"div_h\";s:3:\"274\";s:11:\"div_bgcolor\";s:0:\"\";}'
				);
?>