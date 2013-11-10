<?php
require(dirname(__FILE__)."/global.php");


$fidDB=array('mid'=>2);



/**
*模型配置文件
**/
$field_db = $module_DB[$fidDB[mid]][field];

//字段筛选
unset($TempSearch_2,$TempSearch_array);
foreach($field_db AS $key=>$value){
	if($value[listfilter]){
		$TempSearch_2.="$key=>'{$$key}',";		//分页链接使用
		$TempSearch_array[$key]=$$key;			//其它链接使用
		$search_fieldDB[$key][$$key!=''?$$key:0]=" selected class='ck' style='color:red;'";
	}
}


//SEO
$titleDB[title]	= '找人才';


$rows = 15;

$listdb=array();

if($page<1){
	$page=1;
}

$min=($page-1)*$rows;

$SQL = ' WHERE 1 ';

$SQL .= " AND A.city_id='$city_id' ";

//用户自定义筛选字段,过滤数据
foreach($field_db AS $key=>$value){
	if($value[listfilter]){
		if($_GET[$key]!=''){
			$SQL .= " AND B.`$key`='$_GET[$key]' ";
		}
	}
}



$listdb='';
$query=$db->query("SELECT SQL_CALC_FOUND_ROWS B.*,A.posttime FROM {$_pre}person A LEFT JOIN {$_pre}content_{$fidDB[mid]} B ON A.id=B.id $SQL ORDER BY A.id DESC LIMIT $min,$rows");

$RS=$db->get_one("SELECT FOUND_ROWS()");
$totalNum=$RS['FOUND_ROWS()'];
$showpage=getpage("","","listperson.php?cityid=$cityid",$rows,$totalNum);

while( $rs=$db->fetch_array($query) ){

	$rs[posttime]=date("Y-m-d",$rs[full_time]=$rs[posttime]);

	$Module_db->showfield($field_db,$rs,'list');

	$listdb[]=$rs;
}

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
$template_file=getTpl("list_$fidDB[mid]",$FidTpl['list']);
fetch_label_value(array('pagetype'=>'4','file'=>$template_file,'module'=>$webdb['module_id']));


require(ROOT_PATH."inc/head.php");
require($template_file);
require(ROOT_PATH."inc/foot.php");

?>