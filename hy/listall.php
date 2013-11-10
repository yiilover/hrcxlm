<?php
require(dirname(__FILE__)."/global.php");

if($page<1){
	$page=1;
}
$rows=10;
$min=($page-1)*$rows;
if(!in_array($ordertype,array('hits','rid','levelstime'))){
	$ordertype='rid';
}
if($ordertype=='levelstime'){
	$SQL=" AND levels=1 ";
}else{
	$SQL=" ";
}


//$SQL .= build_module_sql();

$query = $db->query("SELECT SQL_CALC_FOUND_ROWS * FROM {$_pre}company WHERE 1 $SQL ORDER BY $ordertype DESC LIMIT $min,$rows");
$RS=$db->get_one("SELECT FOUND_ROWS()");
$totalNum=$RS['FOUND_ROWS()'];
while($rs = $db->fetch_array($query)){
	$rs[posttime]=date("Y-m-d H:i",$rs[posttime]);
	$rs[picurl]=tempdir($rs[picurl]);
	$listdb[]=$rs;
}
$showpage=getpage("","","listall.php?ordertype=$ordertype",$rows,$totalNum);



//获取标签内容
$template_file=getTpl("listall");
fetch_label_value(array('pagetype'=>'4','file'=>$template_file,'module'=>$webdb['module_id']));


require(ROOT_PATH."inc/head.php");
require($template_file);
require(ROOT_PATH."inc/foot.php");

?>