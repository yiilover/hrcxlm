<?php
require(dirname(__FILE__)."/global.php");
if(!$keyword){
	showerr('关键字不存在！');
}

$keyword = filtrate($keyword);

$_GET['fid']=0;	//这一行是为兼容分类系统所考虑的。
$GuideFid[0]=" -> $keyword";

$ks = $db->get_one("SELECT kid FROM {$_pre}keyword WHERE BINARY keywords='$keyword'");

unset($listdbs,$listdba);

$rows = 20;
$page <1 && $page=1;
$min = ($page-1)*$rows;

$listdb='';
$query = $db->query("SELECT SQL_CALC_FOUND_ROWS B.* FROM {$_pre}keywordid A LEFT JOIN {$_pre}content B ON A.id=B.id WHERE A.kid='$ks[kid]' ORDER BY B.id DESC LIMIT $min,$rows");
$RS=$db->get_one("SELECT FOUND_ROWS()");
$totalNum=$RS['FOUND_ROWS()'];
while($rs = $db->fetch_array($query)){
	$rs[picurl] = tempdir($rs[picurl]);
	@extract($db->get_one("SELECT content FROM {$_pre}content_1 WHERE id=$rs[id]"));
	$rs[content]=preg_replace('/<([^<]*)>/is',"",$content);	//把HTML代码过滤掉
	$rs[content]=preg_replace('/ |　|&nbsp;/is',"",$rs[content]);	//把多余的空格去除掉
	$rs[content]=get_word($rs[content],150);
	@extract($db->get_one("SELECT icon AS head_icon FROM {$pre}memberdata WHERE uid=$rs[uid]"));
	$rs[head_icon]=$head_icon?tempdir($head_icon):"$webdb[www_url]/images/default/noface.gif";
	$rs[posttime]=List_Post_Time($rs[posttime]);
	$listdb[]=$rs;
}

$showpage=getpage("","","tag.php?keyword=".urlencode($keyword),$rows,$totalNum);

$rowa=10;
$shows||$shows=1;
$mins=($shows-1)*$rowa;
$maxs=$mins+$rowa;

if($type=="date"){
	$listdbs=List_Dates($listdb,$mins,$maxs);
	foreach($listdbs AS $key=>$rs){
		if(WEB_LANG!='utf-8' && $type=="date"){
			$rs[title]=gbk2utf8($rs[title]);
			$rs[content]=gbk2utf8($rs[content]);
			$rs[username]=gbk2utf8($rs[username]);
			$rs[posttime]=gbk2utf8($rs[posttime]);
		}
		$listdba[]=$rs;
	}
	echo json_encode($listdba);
	exit;
}else{
	$listdbs=List_Dates($listdb,$mins,$maxs);
	unset($i,$list_html1,$list_html2,$list_html3,$list_html4);
	foreach($listdbs AS $key=>$rs){
		$i++;
		$pic=$rs[picurl]?"<div class='img'><a href='$webdb[www_url]/wei/bencandy.php?fid=$rs[fid]&id=$rs[id]' target='_blank'><img src='$rs[picurl]' width='210' onerror=\"this.src='$webdb[www_url]/images/default/nopic.jpg'\"></a></div>\n":"";
		$show="<div class='side'>\n
			$pic
			<h3><a href='$webdb[www_url]/wei/bencandy.php?fid=$rs[fid]&id=$rs[id]' target='_blank'>$rs[title]</a></h3>\n			
			<p>$rs[content]</p>\n
			<dl>\n
			<dt>评论($rs[comments]) 点击($rs[hits])</dt>\n
			<dd>\n
			<span><a href='$webdb[www_url]/member/homepage.php?uid=$rs[uid]' target='_blank'><img src='$rs[head_icon]' width=30></a></span>
			<a href='$webdb[www_url]/member/homepage.php?uid=$rs[uid]' target='_blank'>$rs[username]</a><br/>
			$rs[posttime]
			</dd>\n
			</dl>\n
		</div>\n";
		if($i%3==1) $list_html1.=$show;
		elseif($i%3==2) $list_html2.=$show;
		else $list_html3.=$show;
	}
}


require(ROOT_PATH."inc/head.php");
require(getTpl("tag"));
require(ROOT_PATH."inc/foot.php");

?>