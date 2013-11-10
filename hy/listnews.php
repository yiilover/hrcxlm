<?php
require(dirname(__FILE__)."/global.php");

if($page<1){
	$page=1;
}
$rows=10;
$min=($page-1)*$rows;


$query = $db->query("SELECT SQL_CALC_FOUND_ROWS A.renzheng,A.title AS companyname,B.* FROM {$_pre}news B LEFT JOIN {$_pre}company A ON A.uid=B.uid WHERE A.city_id='$city_id' ORDER BY B.posttime DESC LIMIT $min,$rows");
$RS=$db->get_one("SELECT FOUND_ROWS()");
$totalNum=$RS['FOUND_ROWS()'];
while($rs = $db->fetch_array($query)){
	if($rs[bd_pics]){
		$detail=explode(',',$rs[bd_pics]);
		$ts = $db->get_one("SELECT * FROM {$_pre}pic WHERE pid='$detail[0]'");
		$rs[picurl]=tempdir("{$ts[url]}.gif");
	}
	$rs[posttime]=date("Y-m-d H:i",$rs[posttime]);	
	$listdb[]=$rs;
}
$showpage=getpage("","","?",$rows,$totalNum);


//获取标签内容
$template_file=getTpl("listnews");
fetch_label_value(array('pagetype'=>'6','file'=>$template_file,'module'=>$webdb['module_id']));


require(ROOT_PATH."inc/head.php");
require($template_file);
require(ROOT_PATH."inc/foot.php");

?>