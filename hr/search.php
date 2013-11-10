<?php
require(dirname(__FILE__)."/global.php");
require(ROOT_PATH."inc/class.search.php");

class search extends search_Father{
	function search(&$mid,&$type,&$keyword){
		global $module_DB,$Fid_db,$fid;
		if($mid==2&&(!$type||$type=='title')){
			$type='truename';
		}
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
	}

	function build_sql($_SQL){
		global $_pre,$page;
		$tablename = $this->mid==2?"{$_pre}person":"{$_pre}content{$this->tablepre}";
		if($page<1){	
			$page=1;
		}
		$min=($page-1)*$this->eachPageNum;
		if($this->field_db){
			$SQL="SELECT SQL_CALC_FOUND_ROWS A.*,B.* FROM $tablename A LEFT JOIN {$_pre}content_{$this->mid} B ON A.id=B.id WHERE A.mid='{$this->mid}' AND $_SQL ORDER BY A.id DESC LIMIT $min,{$this->eachPageNum}";
		}else{
			$SQL="SELECT SQL_CALC_FOUND_ROWS * FROM $tablename A WHERE $_SQL ORDER BY A.id DESC LIMIT $min,{$this->eachPageNum}";
		}
		return $SQL;
	}
}

$Search = new search($mid,$type,$keyword);

$GuideFid[$fid] = " -&gt;  <A HREF='index.php'>{$webdb[Info_webname]}首页</A>";
$typedb = '';

if($action=="search"){
	$Search->ckpower();

	$_SQL = "1";
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

//$Search->change_city();

//@include_once(ROOT_PATH."data/zone/$city_id.php");

//$city_fid=select_where("{$pre}city","'postdb[city_id]'  onChange=\"choose_where('getzone',this.options[this.selectedIndex].value,'','1','')\"",$city_id);

require(ROOT_PATH."inc/head.php");
require(getTpl("search_".$mid));
require(ROOT_PATH."inc/foot.php");

$Search->clear_moreTpl();


?>