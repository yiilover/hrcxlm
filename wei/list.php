<?php
require(dirname(__FILE__)."/global.php");
@include(dirname(__FILE__)."/data/guide_fid.php");

//��ȡ��Ŀ��ģ��������ļ�
$fidDB=$db->get_one("SELECT A.* FROM {$_pre}sort A WHERE A.fid='$fid'");
if(!$fidDB){
	showerr("��Ŀ������");
}

$fidDB[descrip]=En_TruePath($fidDB[descrip],0);


//SEO
$titleDB['title']	= $fidDB['metatitle']?$fidDB['metatitle']:$fidDB['name'];
$titleDB['keywords'] = $fidDB['metakeywords']?$fidDB['metakeywords']:$webdb['SEO_keywords'];
$titleDB['description'] = $fidDB['metadescription']?$fidDB['metadescription']:$webdb['SEO_description'];


$_url="list.php?fid=$fid";



//Ϊ��ȡ��ǩ����
$chdb[main_tpl]=getTpl("list");


//��ǩ
$ch_fid	= intval($fidDB[config][label_list]);		//�Ƿ�������Ŀר�ñ�ǩ
$ch_pagetype = 2;									//2,Ϊlistҳ,3,Ϊbencandyҳ
$ch_module = $webdb[module_id];						//ϵͳ�ض�ID����,ÿ��ϵͳ������ͬ
$ch = 0;											//�������κ�ר��
require(ROOT_PATH."inc/label_module.php");

unset($listdbs,$listdba);

$rows=$fidDB[maxperpage]>0?$fidDB[maxperpage]:($webdb[Infolist_row]>0?$webdb[Infolist_row]:30);

$page<1 && $page=1;
$min = ($page-1)*$rows;

//С����
if($fidDB[type]==0){
	$SQL="SELECT SQL_CALC_FOUND_ROWS A.*,B.* FROM {$_pre}content A LEFT JOIN {$_pre}content_1 B ON A.id=B.id WHERE A.fid='$fid' ORDER BY A.id DESC LIMIT $min,$rows";
}else{
	$SQL="SELECT SQL_CALC_FOUND_ROWS A.*,B.* FROM {$_pre}content A LEFT JOIN {$_pre}content_1 B ON A.id=B.id LEFT JOIN {$_pre}sort D ON A.fid=D.fid WHERE D.fup='$fid' ORDER BY A.id DESC LIMIT $min,$rows";
}

$listdb='';
$query = $db->query($SQL);
$RS=$db->get_one("SELECT FOUND_ROWS()");
$totalNum=$RS['FOUND_ROWS()'];
while($rs = $db->fetch_array($query)){
	$rs[content]=preg_replace('/<([^<]*)>/is',"",$rs[content]);	//��HTML������˵�
	$rs[content]=preg_replace('/ |��|&nbsp;/is',"",$rs[content]);	//�Ѷ���Ŀո�ȥ����
	$rs[content]=get_word($rs[content],150);
	@extract($db->get_one("SELECT icon AS head_icon FROM {$pre}memberdata WHERE uid=$rs[uid]"));
	$rs[head_icon]=$head_icon?tempdir($head_icon):"$webdb[www_url]/images/default/noface.gif";
	$rs[picurl] = tempdir($rs[picurl]);
	$rs[posttime]=List_Post_Time($rs[posttime]);
	$listdb[]=$rs;
}

$showpage=getpage("","","list.php?fid=$fid",$rows,$totalNum);

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
			<dt>����($rs[comments]) ���($rs[hits])</dt>\n
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
require($chdb[main_tpl]);
require(ROOT_PATH."inc/foot.php");

?>