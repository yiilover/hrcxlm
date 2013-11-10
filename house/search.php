<?php
require(dirname(__FILE__)."/global.php");
require(ROOT_PATH."inc/class.search.php");

class search extends search_Father{
	function search(&$mid,&$type,&$keyword){
		global $module_DB,$Fid_db,$fid;
		$mid = intval($mid);
		$this->mid = $mid;
		$this->field_db = $module_DB[$mid]['field'];
		$this->tablepre = $Fid_db['tableid'][$fid];
		$this->eachPageNum = 20;	//每页显示多少条信息
		$this->check_select_type = 0;	//针对多选框:为0时,扩大搜索范围,为1时,缩小搜索范围
		$this->filtrate($type);
		$this->filtrate($keyword);
		$this->type =& $type;	//type如果不符合的话,要重新赋值,所以要用=&
		$this->keyword = $keyword;
		$this->wArray = array("title","username","address","telephone","mobphone","email","oicq","msn");
	}
}

$Search = new search($mid,$type,$keyword);

$GuideFid[$fid] = " -&gt;  <A HREF='index.php'>{$webdb[Info_webname]}首页</A>";
$typedb = '';

if($action=="search"){

	$Search->ckpower();

	$_SQL = " A.city_id='$city_id' ";
	$Search->get_keyword_sql($_SQL);
	$Search->get_area_sql($_SQL);
	$Search->get_fid_sql($_SQL);
	$Search->get_field_sql($_SQL);
	$SQL = $Search->build_sql($_SQL);

	$Search->query($SQL);

	$listdb = $Search->cArray;

	$showpage=getpage("","",
		$Search->build_searchUrl(),
		$Search->eachPageNum,$Search->totalNum);

	$typedb[$type]=" checked ";

}else{

	$typedb['title']=" checked ";
}


$module_select = $Search->get_module_select();

$fid_select = $Search->get_sort_select();

$Search->change_city();

@include_once(ROOT_PATH."data/zone/$city_id.php");

//$city_fid=select_where("{$pre}city","'postdb[city_id]'  onChange=\"choose_where('getzone',this.options[this.selectedIndex].value,'','1','')\"",$city_id);

require(ROOT_PATH."inc/head.php");
require(getTpl("search_".$mid));
require(ROOT_PATH."inc/foot.php");

$Search->clear_moreTpl();


?>