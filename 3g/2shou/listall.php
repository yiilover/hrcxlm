<?php 
require(dirname(__FILE__)."/global.php");
$WebTitle=$webdb['Info_webname']."--".$webdb['webname'];

if($page<1){
	$page=1;
}
$rows=5;
$min=($page-1)*$rows;
if(!in_array($ordertype,array('hits','id','levelstime'))){
	$ordertype='id';
}
$head[hits]="热门";
$head[id]="最新";
$head[levelstime]="推荐";
if($ordertype=='levelstime'){
	$SQL=" AND levels=1 ";
}else{
	$SQL=" ";
}
$SQL .= build_module_sql(false);

$query = $db->query("SELECT SQL_CALC_FOUND_ROWS * FROM {$_pre}content WHERE yz=1 $SQL ORDER BY $ordertype DESC LIMIT $min,$rows");
$RS=$db->get_one("SELECT FOUND_ROWS()");
$totalNum=$RS['FOUND_ROWS()'];
while($rs = $db->fetch_array($query)){
	//$rs[content]=@preg_replace('/<([^<]*)>/is',"",$rs[content]);	//把HTML代码过滤掉
	//$rs[content]=get_word($rs[full_content]=$rs[content],$conten);
	$rs[posttime]=date("Y-m-d H:i:s",$rs[full_time]=$rs[posttime]);
	$rs[picurl] = $rs[picurl] ? $rs[picurl] :"$Murl/images/nopic.jpg";
	$rs[picurl]=tempdir($rs[picurl]);
	$listdb[]=$rs;
}
$showpage=getpage("","","listall.php?ordertype=$ordertype",$rows,$totalNum);
require(Mpath."template/head.htm");
require(Mpath."template/list_2shou.htm");
require(Mpath."template/foot.htm");
?>