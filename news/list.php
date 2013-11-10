<?php
require(dirname(__FILE__)."/global.php");
@include(dirname(__FILE__)."/data/guide_fid.php");

/**
*获取栏目与模块的配置文件
**/
$fidDB=$db->get_one("SELECT A.* FROM {$_pre}sort A WHERE A.fid='$fid'");
if(!$fidDB){
	showerr("栏目不存在");
}

/**
*跳转到外部地址
**/
if($fidDB[jumpurl]){
	header("location:$fidDB[jumpurl]");
	exit;
}

$fidDB[descrip]=En_TruePath($fidDB[descrip],0);


//SEO
$titleDB[title]	= $fidDB[metatitle]?seo_eval($fidDB[metatitle]):strip_tags("{$city_DB[name][$city_id]} {$zone_DB[name][$zone_id]} {$street_DB[name][$street_id]} $fidDB[name] $seo_tile");
$titleDB[keywords] = seo_eval($fidDB[metakeywords]);
$titleDB[description] = seo_eval($fidDB[metadescription]);


//列表页个性头部与尾部
get_list_tpl($head_tpl,$foot_tpl,$main_tpl);

//获取标签内容
if($fidDB[type]==2){
	$template_file=getTpl("alonepage");
}elseif($fidDB[type]==1){
	$template_file=getTpl("bigsort",$main_tpl);
}else{
	$template_file=getTpl("list",$main_tpl);
}

fetch_label_value(array('pagetype'=>'2','file'=>$template_file,'module'=>$webdb['module_id']));


$SQL = " WHERE A.fid=$fid AND A.yz=1 ";
$SQL .= build_module_sql();

$Lrows=$fidDB[maxperpage]>0?$fidDB[maxperpage]:($webdb[Infolist_row]>0?$webdb[Infolist_row]:15);


/*大分类*/
if($fidDB[type]==1)
{
	$sort_db=$listdb_moresort=ListOnlySort(100);
}

/*小分类*/
if($fidDB[type]==0)
{	
	$listdb=ListThisSort($Lrows,$webdb[InfoListLeng]>0?$webdb[InfoListLeng]:70);
	$showpage=getpage("{$_pre}content A",$SQL,"list.php?fid=$fid",$Lrows);	
}


require(ROOT_PATH."inc/head.php");
require($template_file);
require(ROOT_PATH."inc/foot.php");



function ListThisSort($rows,$leng){
	global $page,$fid,$fidDB,$SQL,$city_id;
	if($page<1){
		$page=1;
	}
	if($fidDB[listorder]==1){
		$sql_list="A.posttime";
		$sql_order="DESC";
	}elseif($fidDB[listorder]==2){
		$sql_list="A.posttime";
		$sql_order="ASC";
	}elseif($fidDB[listorder]==3){
		$sql_list="A.hits";
		$sql_order="DESC";
	}elseif($fidDB[listorder]==4){
		$sql_list="A.hits";
		$sql_order="ASC";
	}elseif($fidDB[listorder]==5){
		$sql_list="A.lastview";
		$sql_order="DESC";
	}else{
		$sql_list="A.list";
		$sql_order="DESC";
	}
	$min=($page-1)*$rows;
	$_SQL="$SQL ORDER BY $sql_list $sql_order LIMIT $min,$rows";
	$listdb=list_content($_SQL,$leng);
	return $listdb;
}


function ListOnlySort($rows){
	global $db,$_pre,$fid,$page,$Fid_db,$fidDB,$webdb,$city_id;

	$_SonOrder='id';

	//排序
	if($fidDB[config][sonListorder]==1){
		$_SonOrder='id';		//理应是list
	}elseif($fidDB[config][sonListorder]==2){
		$_SonOrder='hits';
	}elseif($fidDB[config][sonListorder]==3){
		$_SonOrder='lastview';
	}elseif($fidDB[config][sonListorder]==4){
		$_SonOrder='rand()';
	}else{
		$_SonOrder='id';
	}

	//显示几行
	if($fidDB[config][sonTitleRow]>0){
		$_SonRow=$fidDB[config][sonTitleRow];
	}elseif($webdb[InfoListSonRows]>0){
		$_SonRow=$webdb[InfoListSonRows];
	}else{
		$_SonRow=10;
	}

	//每个标题显示几个字
	if($fidDB[config][sonTitleLeng]>0){
		$_SonLeng=$fidDB[config][sonTitleLeng];
	}elseif($webdb[InfoListSonLeng]>0){
		$_SonLeng=$webdb[InfoListSonLeng];
	}else{
		$_SonLeng=30;
	}

	if(!$page){
		$page=1;
	}
	$min=($page-1)*$rows;
	
	$city_sql = build_module_sql();
	$query=$db->query("SELECT * FROM {$_pre}sort WHERE fup=$fid AND forbidshow=0 ORDER BY list DESC LIMIT $min,$rows");
	while($rs=$db->fetch_array($query))
	{
		$rs[article]=$_SQL=$fiddb='';
		if($rs[type]){
			foreach( $Fid_db[$rs[fid]] AS $key=>$value){
				$fiddb[]=$key;
				foreach( $Fid_db[$key] AS $key2=>$value2){
					$fiddb[]=$key2;
				}
			}
			if($fiddb){
				$fids=implode(",",$fiddb);
				$_SQL="WHERE A.fid IN ($fids) AND A.yz=1 $city_sql ORDER BY $_SonOrder DESC LIMIT $_SonRow";
			}
		}else{			
			$_SQL="WHERE A.fid=$rs[fid] AND A.yz=1 $city_sql ORDER BY $_SonOrder DESC LIMIT $_SonRow";
		}
		if($_SQL){
			$rs[article]=list_content($_SQL,$_SonLeng);
		}
		$rs[logo] && $rs[logo]=tempdir($rs[logo]);
		$listdb[]=$rs;
	}
	return $listdb;
}

?>