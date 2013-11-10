<?php
require(dirname(__FILE__)."/global.php");

//导航条
@include(Mpath."data/guide_fid.php");


$fidDB=$db->get_one("SELECT A.* FROM {$_pre}sort A WHERE A.fid='$fid'");
if(!$fidDB){
	showerr("栏目不存在");
}elseif($fidDB[jumpurl]){
	header("location:$fidDB[jumpurl]");
	exit;
}

/**
*模型配置文件
**/
$field_db = $module_DB[$fidDB[mid]][field];


//SEO
$titleDB[title]	= $fidDB[metatitle]?seo_eval($fidDB[metatitle]):strip_tags("{$city_DB[name][$city_id]} {$zone_DB[name][$zone_id]} {$street_DB[name][$street_id]} $fidDB[name] $seo_tile");
$titleDB[keywords] = seo_eval($fidDB[metakeywords]);
$titleDB[description] = seo_eval($fidDB[metadescription]);

$rows = $fidDB[maxperpage]>0 ? $fidDB[maxperpage] : 15;

$listdb=array();

if($page<1){
	$page=1;
}

$min=($page-1)*$rows;

if($Fid_db[$fid]){
	$SQL=" LEFT JOIN {$_pre}sort S ON A.fid=S.fid WHERE S.fup='$fid' ";
}else{
	$SQL=" WHERE A.fid=$fid ";
}

$query=$db->query("SELECT SQL_CALC_FOUND_ROWS B.*,A.* FROM {$_pre}content A LEFT JOIN {$_pre}content_{$fidDB[mid]} B ON A.id=B.id $SQL AND A.yz='1' ORDER BY A.list DESC LIMIT $min,$rows");

$RS=$db->get_one("SELECT FOUND_ROWS()");
$totalNum=$RS['FOUND_ROWS()'];
$showpage=getpage("","","list.php?fid=$fid",$rows,$totalNum);

while( $rs=$db->fetch_array($query) ){

	$rs[content]=@preg_replace('/<([^<]*)>/is',"",$rs[content]);	//把HTML代码过滤掉
	$rs[content]=get_word($rs[full_content]=$rs[content],100);
	$rs[title]=get_word($rs[full_title]=$rs[title],50);

	$rs[posttime]=date("Y-m-d",$rs[full_time]=$rs[posttime]);
	if($rs[picurl]){
		$rs[picurl]=tempdir($rs[picurl]);
	}

	$Module_db->showfield($field_db,$rs,'list');

	$listdb[]=$rs;
}

//列表页个性头部与尾部
get_list_tpl($head_tpl,$foot_tpl,$main_tpl);

//获取标签内容
$template_file=getTpl("list_$fidDB[mid]",$main_tpl);
fetch_label_value(array('pagetype'=>'2','file'=>$template_file,'module'=>$webdb['module_id']));

require(ROOT_PATH."inc/head.php");
require($template_file);
require(ROOT_PATH."inc/foot.php");

?>