<?php
define('Mpath',dirname(__FILE__).'/');
define( 'Mdirname' , preg_replace("/(.*)\/([^\/]+)/is","\\2",str_replace("\\","/",dirname(__FILE__))) );

require_once(Mpath."../inc/common.inc.php");
require_once(Mpath."data/config.php");			//系统全局变量
require_once(Mpath."data/all_fid.php");			//栏目的名称
require_once(Mpath."data/module_db.php");			//模块的名称
require_once(Mpath."inc/function.php");
require_once(Mpath."inc/module.class.php");
require_once(Mpath."inc/biz.php");

@include_once(ROOT_PATH."data/ad_cache.php");	//全站广告变量缓存文件
@include_once(ROOT_PATH."data/label_hf.php");	//标签的头与底的变量值
@include_once(ROOT_PATH."data/module.php");		//模块系统的参数变量值

$cityDB = @include(Mpath."data/all_city.php");


$_pre="{$pre}{$webdb[module_pre]}";					//数据表前缀

$Module_db=new Module_Field(Mpath);						//自定义模型相关

$Murl=$webdb[www_url].'/'.Mdirname;					//本模块的访问地址
$Mdomain=$ModuleDB[$webdb[module_pre]][domain]?$ModuleDB[$webdb[module_pre]][domain]:$Murl;



/**
*前台是否开放
**/
if($webdb[module_close])
{
	$webdb[Info_closeWhy]=str_replace("\r\n","<br>",$webdb[Info_closeWhy]);
	showerr("本系统暂时关闭:$webdb[Info_closeWhy]");
}


unset($foot_tpl,$head_tpl,$index_tpl,$list_tpl,$bencandy_tpl);
$ch=intval($ch);
$fid=intval($fid);
$id=intval($id);
$page=intval($page);
$city_id=intval($city_id);
$cid=intval($cid);

function list_zh($type='new',$rows=10,$getroom=false){
	global $db,$pre,$_pre,$module_DB,$Module_db;

	if($type=='new'){
		$SQL = " WHERE A.yz = 1 ORDER BY A.id DESC LIMIT $rows";
	}elseif($type=='hot'){
		$SQL = " WHERE A.yz =1 ORDER BY A.hits DESC LIMIT $rows";
	}elseif($type=='com'){
		$SQL = " WHERE A.levels=1 AND A.yz = 1 ORDER BY A.levelstime DESC LIMIT $rows";
	}elseif(is_numeric($type)){
		$SQL = " WHERE A.roomid='$type' AND A.yz = 1 ORDER BY A.id DESC LIMIT $rows";
	}

	if($getroom){
		$sa=",R.title AS roomname,R.city_id AS roomcity ";
		$sb=" LEFT JOIN {$_pre}room R ON A.roomid=R.id ";
	}

	$query = $db->query("SELECT A.*,B.*$sa FROM {$_pre}content A LEFT JOIN {$_pre}content_1 B ON B.id=A.id $sb $SQL");
	while($rs = $db->fetch_array($query)){
		$Module_db->showfield($module_DB[1][field],$rs,'list');
		$rs[picurl] && $rs[picurl] = tempdir($rs[picurl]);
		$listdb[]=$rs;
	}
	return $listdb;
}

function list_room($type='new',$rows=10){
	global $db,$pre,$_pre,$module_DB,$Module_db;

	if($type=='new'){
		$SQL = " ORDER BY A.id DESC LIMIT $rows";
	}elseif($type=='hot'){
		$SQL = " ORDER BY A.hits DESC LIMIT $rows";
	}elseif($type=='com'){
		$SQL = " WHERE A.levels=1 ORDER BY A.levelstime DESC LIMIT $rows";
	}

	$query = $db->query("SELECT A.*,B.* FROM {$_pre}room A LEFT JOIN {$_pre}content_3 B ON B.id=A.id $SQL");
	while($rs = $db->fetch_array($query)){
		$Module_db->showfield($module_DB[3][field],$rs,'list');
		$rs[picurl] && $rs[picurl] = tempdir($rs[picurl]);
		$listdb[]=$rs;
	}
	return $listdb;
}
?>