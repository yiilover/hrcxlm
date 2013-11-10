<?php
require(dirname(__FILE__)."/global.php");

if($page<1){
	$page=1;
}
$rows=5;
$min=($page-1)*$rows;
if(!in_array($ordertype,array('hits','id','levelstime'))){
	$ordertype='id';
}
if($ordertype=='levelstime'){
	$SQL=" AND A.levels=1 ";
}else{
	$SQL=" ";
}


$SQL .= build_module_sql();

$query = $db->query("SELECT SQL_CALC_FOUND_ROWS A.*,C.renzheng FROM {$_pre}content A LEFT JOIN {$pre}hy_company C ON A.uid=C.uid  WHERE 1 $SQL ORDER BY A.$ordertype DESC LIMIT $min,$rows");
$RS=$db->get_one("SELECT FOUND_ROWS()");
$totalNum=$RS['FOUND_ROWS()'];
while($rs = $db->fetch_array($query)){
	$rs[picurl]=tempdir($rs[picurl]);
	$rs[url]=get_info_url($rs[id],$rs[fid],$rs[city_id]);
	$rs[posttime]=date("Y-m-d H:i",$rs[posttime]);
	$listdb[]=$rs;
}


$showpage=getpage("","","listall.php?ordertype=$ordertype",$rows,$totalNum);

//列表页个性头部与尾部
$head_tpl=html('head');
$foot_tpl=html('foot');
if($webdb[IF_Private_tpl]==2||$webdb[IF_Private_tpl]==3){
	if(is_file(Mpath.$webdb[Private_tpl_head])){
		$head_tpl=Mpath.$webdb[Private_tpl_head];
	}
	if(is_file(Mpath.$webdb[Private_tpl_foot])){
		$foot_tpl=Mpath.$webdb[Private_tpl_foot];
	}
}

//获取标签内容
$template_file=getTpl("listall");
fetch_label_value(array('pagetype'=>'4','file'=>$template_file,'module'=>$webdb['module_id']));

require(ROOT_PATH."inc/head.php");
require($template_file);
require(ROOT_PATH."inc/foot.php");

?>