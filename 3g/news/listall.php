<?php 
require(dirname(__FILE__)."/global.php");
$WebTitle=$webdb['Info_webname']."--".$webdb['webname'];

if($page<1){
	$page=1;
}
$rows=10;
$min=($page-1)*$rows;
if(!in_array($ordertype,array('hits','id','levelstime'))){
	$ordertype='id';
}
$head[hits]="热门";
$head[id]="最新";
$head[levelstime]="推荐";
if($ordertype=='levelstime'){
	$SQL=" AND A.levels=1 ";
}else{
	$SQL=" ";
}
$SQL .= build_module_sql(false);

$query = $db->query("SELECT SQL_CALC_FOUND_ROWS * FROM {$_pre}content A LEFT JOIN `{$_pre}content_1` B ON A.id=B.id WHERE A.yz=1 $SQL ORDER BY A.$ordertype DESC LIMIT $min,$rows");
$RS=$db->get_one("SELECT FOUND_ROWS()");
$totalNum=$RS['FOUND_ROWS()'];
while($rs = $db->fetch_array($query)){
	$rs[content]=@preg_replace('/<([^<]*)>/is',"",$rs[content]);	//把HTML代码过滤掉
	$rs[content]=get_word($rs[full_content]=$rs[content],$conten);
	$rs[posttime]=date("m-d",$rs[full_time]=$rs[posttime]);
	$rs[picurl]=tempdir($rs[picurl]);
	$listdb[]=$rs;
}
$showpage=getpage("","","listall.php?ordertype=$ordertype",$rows,$totalNum);
require(Mpath."template/head.htm");
require(Mpath."template/list_news.htm");
require(Mpath."template/foot.htm");
?>