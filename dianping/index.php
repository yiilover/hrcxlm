<?php
require(dirname(__FILE__)."/global.php");

$fendb=array();

$fendb[fen1][name]="总评";
$fendb[fen2][name]="环境";
$fendb[fen3][name]="服务";
$fendb[fen4][name]="价位";
$fendb[fen5][name]="喜欢程度";

$fendb[fen1][set]="1=差\r\n2=一般\r\n3=好\r\n4=很好\r\n5=非常好";
$fendb[fen2][set]="1=差\r\n2=一般\r\n3=好\r\n4=很好\r\n5=非常好";
$fendb[fen3][set]="1=差\r\n2=一般\r\n3=好\r\n4=很好\r\n5=非常好";
$fendb[fen4][set]="1=便宜\r\n2=适中\r\n3=贵\r\n4=很贵";
$fendb[fen5][set]="1=不喜欢\r\n2=无所谓\r\n3=喜欢\r\n4=很喜欢";
 

//SEO
$titleDB['title'] = "{$city_DB[name][$city_id]} ".($webdb['SEO_title']?$webdb['SEO_title']:$webdb['Info_webname']);
$titleDB['keywords']	= "{$city_DB[name][$city_id]} ".($webdb['SEO_keywords']?$webdb['SEO_keywords']:$webdb['metakeywords']);
$titleDB['description']	= "{$city_DB[name][$city_id]} ".($webdb['SEO_description']?$webdb['SEO_description']:$webdb['description']);


//主页个性头部与尾部
get_index_tpl($head_tpl,$foot_tpl);

//获取标签内容
$template_file=getTpl("index");
fetch_label_value(array('pagetype'=>'0','file'=>$template_file,'module'=>$webdb['module_id']));


/**
*推荐的栏目在首页显示
**/
//$listdb_moresort=Info_ListMoreSort($webdb[InfoIndexCSRow],$webdb[InfoIndexCSLeng],$city_id);

//每个栏目的信息数
//$InfoNum=get_infonum($city_id);
require(Mpath."inc/head.php");
require($template_file);
require(Mpath."inc/foot.php");

function get_dianping($rows=5,$leng=80){
	global $_pre,$pre,$db,$fendb,$city_id;
	$query=$db->query("SELECT A.*,C.title,D.icon FROM `{$_pre}dianping` A LEFT JOIN `{$_pre}content` C ON A.id=C.id LEFT JOIN {$pre}memberdata D ON A.uid=D.uid WHERE C.city_id='$city_id' AND A.yz=1 ORDER BY A.cid DESC LIMIT  $rows");
	while( $rs=$db->fetch_array($query) ){	
		$rs[fen]='';
		$rs[fen].=fen_value($fendb[fen1][name],$fendb[fen1][set],$rs[fen1]);
		$rs[fen].=fen_value($fendb[fen2][name],$fendb[fen2][set],$rs[fen2]);
		$rs[fen].=fen_value($fendb[fen3][name],$fendb[fen3][set],$rs[fen3]);
		$rs[fen].=fen_value($fendb[fen4][name],$fendb[fen4][set],$rs[fen4]);
		$rs[fen6]=fen6_value($fendb[fen6][name],$fendb[fen6][set],$rs[fen6]);
		$rs[icon] && $rs[icon]=tempdir($rs[icon]);
		
		if(!$rs[username]){		
			$detail=explode(".",$rs[ip]);
			$rs[username]="$detail[0].$detail[1].$detail[2].*";
		}
		$rs[posttime]=date("Y-m-d H:i:s",$rs[posttime]);
		$rs[full_content]=$rs[content];
		$rs[content]=get_word($rs[content],$leng);
		$rs[content]=str_replace("<br>","",$rs[content]);
		$listdb[]=$rs;
	}
	return $listdb;
}

function fen_value($title,$set,$v){
	global $webdb;
	$shows="";
	$detail=explode("\r\n",$set);
	foreach( $detail AS $key=>$value){
		$d=explode("=",$value);
		if($d[0]==$v){
			$va ="$d[1]";
		}
	}
	$shows.=" <span class='title'>$title:</span>";
	for($i=0;$i<$v;$i++){
		$shows.="<img alt='$va' src='$webdb[www_url]/images/default/icon_star_2.gif'>";
	}
	for($j=(count($detail)-$i);$j>0 ;$j-- ){
		$shows.="<img alt='$va' src='$webdb[www_url]/images/default/icon_star_1.gif'>";
	}
	return $shows;
}
function fen6_value($title,$set,$v){
	$array=explode(",",$v);
	$detail=explode("\r\n",$set);
	foreach( $detail AS $key=>$value){
		if(in_array($value,$array)){
			$va[] ="$value";
		}
	}
	if(!$va){
		return ;
	}
	$shows =" <span class='title'>{$title}：</span>";
	$shows.=implode(" ",$va);
	if($title){
		return $shows;
	}	
}
?>