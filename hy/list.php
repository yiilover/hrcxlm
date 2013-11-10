<?php

require(dirname(__FILE__)."/"."global.php");

//导航条
@include(Mpath."data/guide_fid.php");

$fidDB=$db->get_one("SELECT A.* FROM {$_pre}sort A WHERE A.fid='$fid'");
if(!$fidDB){
	showerr("栏目不存在");
}


//SEO
$titleDB[title]	= $fidDB[metatitle]?seo_eval($fidDB[metatitle]):strip_tags("{$city_DB[name][$city_id]} {$zone_DB[name][$zone_id]} {$street_DB[name][$street_id]} $fidDB[name] $seo_tile");
$titleDB[keywords] = seo_eval($fidDB[metakeywords]);
$titleDB[description] = seo_eval($fidDB[metadescription]);

$SQL = ' AND A.yz=1 ';
if($street_id){
	$SQL .= " AND A.street_id='$street_id' ";
}elseif($zone_id){
	$SQL .= " AND A.zone_id='$zone_id' ";
}else{
	$SQL .= build_module_sql();
}
if($renzheng){
	$SQL .= " AND A.renzheng='$renzheng' ";
}

$orderby = hy_list_order();


$rows=5;
if($page<1){
	$page=1;
}
$min=($page-1)*$rows;

if($Fid_db[0][$fid]){
	$SQL="SELECT SQL_CALC_FOUND_ROWS DISTINCT A.* FROM {$_pre}company A LEFT JOIN {$_pre}company_fid B ON A.uid=B.uid LEFT JOIN {$_pre}sort S ON B.fid=S.fid WHERE S.fup='$fid' $SQL ORDER BY $orderby LIMIT $min,$rows";
}else{
	$SQL="SELECT SQL_CALC_FOUND_ROWS DISTINCT A.* FROM {$_pre}company A LEFT JOIN {$_pre}company_fid B ON A.uid=B.uid WHERE B.fid='$fid' $SQL ORDER BY $orderby LIMIT $min,$rows";
}

$query = $db->query($SQL);

$RS=$db->get_one("SELECT FOUND_ROWS()");
$totalNum=$RS['FOUND_ROWS()'];
$showpage=getpage("","","list.php?fid=$fid&renzheng=$renzheng&zone_id=$zone_id&street_id=$street_id",$rows,$totalNum);

while($rs = $db->fetch_array($query)){
	$rs[posttime]=date('Y-m-d',$rs[posttime]);
	$rs[picurl] && $rs[picurl]=tempdir($rs[picurl]);
	$listdb[]=$rs;
}

//列表页个性头部与尾部
get_list_tpl($head_tpl,$foot_tpl,$main_tpl);

//获取标签内容
$template_file=getTpl("list",$main_tpl);
fetch_label_value(array('pagetype'=>'2','file'=>$template_file,'module'=>$webdb['module_id']));

$renzheng_db='';
$renzheng_db[intval($renzheng)]=' selected ';

require(ROOT_PATH."inc/head.php");
require($template_file);
require(ROOT_PATH."inc/foot.php");

?>