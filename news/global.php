<?php
define('Mpath',dirname(__FILE__).'/');
define( 'Mdirname' , preg_replace("/(.*)\/([^\/]+)/is","\\2",str_replace("\\","/",dirname(__FILE__))) );
define('SYS_TYPE','news');

require_once(Mpath."../inc/common.inc.php");
require_once(Mpath."inc/qb_function.php");
require_once(Mpath."data/config.php");			//本系统全局变量值
require_once(Mpath."data/all_fid.php");			//部分栏目的名称变量值
@include_once(ROOT_PATH."data/ad_cache.php");	//全站广告变量缓存文件
require_once(ROOT_PATH."data/label_hf.php");	//标签的头与底的变量值
@include_once(ROOT_PATH."data/module.php");		//模块系统的参数变量值
require_once(ROOT_PATH."inc/self.tpl.php");		//个性模板函数

$_pre="{$pre}{$webdb[module_pre]}";					//数据表前缀
$Murl=$webdb[_www_url].'/'.Mdirname;					//本模块的访问地址
$Mdomain=$ModuleDB[$webdb[module_pre]][domain]?$ModuleDB[$webdb[module_pre]][domain]:$Murl;

//@include_once(Mpath."biz/function.php");

/**
*系统默认风格
**/
//$STYLE=$webdb[Info_style]?$webdb[Info_style]:"default";

/**
*前台是否开放本系统
**/
if($webdb[module_close])
{
	$webdb[Info_closeWhy]=str_replace("\r\n","<br>",$webdb[Info_closeWhy]);
	showerr("当前系统暂时关闭:$webdb[Info_closeWhy]");
}


$fid=intval($fid);
$id=intval($id);
$page=intval($page);
$rows=intval($rows);
$leng=intval($leng);



/**
*获取信息内容
**/
function list_content($SQL,$leng=40){
	global $db,$_pre,$webdb;
	$query=$db->query("SELECT A.* FROM {$_pre}content A $SQL");
	while( $rs=$db->fetch_array($query) ){
		//把辅信息表的内容也同时取出来,方便给模板调用
		$rs[mid] && $rss=$db->get_one("SELECT * FROM {$_pre}content_$rs[mid] WHERE id=$rs[id] LIMIT 1");
		is_array($rss) && $rs=$rs+$rss;

		$rs[content]=@preg_replace('/<([^>]*)>/is',"",$rs[content]);	//把HTML代码过滤掉
		$rs[content]=get_word($rs[full_content]=$rs[content],100);
		$rs[title]=get_word($rs[full_title]=$rs[title],$leng);
		if($rs[titlecolor]||$rs[fonttype]){
			$titlecolor=$rs[titlecolor]?"color:$rs[titlecolor];":'';
			$font_weight=$rs[fonttype]==1?'font-weight:bold;':'';
			$rs[title]="<font style='$titlecolor$font_weight'>$rs[title]</font>";
		}
		$rs[posttime]=date("Y-m-d",$rs[full_time]=$rs[posttime]);
		if($rs[picurl]){
			$rs[picurl]=tempdir($rs[picurl]);
		}
		$listdb[]=$rs;
	}
	return $listdb;
}


/**
*获取子栏目
**/
function Get_Fid($fid,$rows=100){
	global $db,$_pre;
	$fid=intval($fid);
	$query = $db->query("SELECT * FROM {$_pre}sort WHERE fup=$fid ORDER BY list DESC LIMIT $rows");
	while($rs = $db->fetch_array($query)){
		$F[$rs[fid]]=$rs;
	}
	return $F;
}

function GetSonFid($fid,$rows=100){
	global $db,$_pre;
	$fid=intval($fid);
	$query = $db->query("SELECT * FROM {$_pre}sort WHERE fup=$fid ORDER BY list DESC LIMIT $rows");
	while($rs = $db->fetch_array($query)){
		$F[$rs[fid]]=$rs[fid];
	}
	return $F;
}

function GetAllSonFid($fid,$rows=100){
	global $db,$_pre;
	$fid=intval($fid);
	$query = $db->query("SELECT fid,fup FROM {$_pre}sort WHERE fup=$fid ORDER BY list DESC LIMIT $rows");
	while($rs = $db->fetch_array($query)){
		$show.=",$rs[fid]";
		$show.=GetAllSonFid($rs[fid],$rows);
	}
	return $show;
}

function GetAll_SPSonFid($fid,$rows=100){
	global $db,$_pre;
	$fid=intval($fid);
	$query = $db->query("SELECT fid,fup FROM {$_pre}spsort WHERE fup=$fid ORDER BY list DESC LIMIT $rows");
	while($rs = $db->fetch_array($query)){
		$show.=",$rs[fid]";
		$show.=GetAll_SPSonFid($rs[fid],$rows);
	}
	return $show;
}


/**
*获取信息内容
**/
function Get_Info($type,$rows=5,$leng=20,$fid=0,$mid=0,$getall=0,$cityid=0){
	if($mid){
		$SQL=" AND A.mid='$mid' ";
	}
	if($cityid){
		$SQL=" AND A.city_id='$cityid' ";
	}
	if($fid){
		if($getall){
			$SQL.=" AND A.fid IN ($fid".GetAllSonFid($fid).") ";
		}else{
			$SQL.=" AND A.fid='$fid' ";
		}
	}
	if($type=='hot'){
		$SQL=" WHERE A.yz=1 $SQL ORDER BY A.hits DESC LIMIT $rows";
	}elseif($type=='lastview'){
		$SQL=" WHERE A.yz=1 $SQL ORDER BY A.lastview DESC LIMIT $rows";
	}elseif($type=='comment'){
		$SQL=" WHERE A.yz=1 $SQL ORDER BY A.comments DESC LIMIT $rows";
	}elseif($type=='new'){
		$SQL=" WHERE A.yz=1 $SQL ORDER BY A.list DESC LIMIT $rows";
	}elseif($type=='level'){
		$SQL=" WHERE A.yz=1 AND A.levels=1 $SQL ORDER BY A.list DESC LIMIT $rows";
	}elseif($type=='pic'){
		$SQL=" WHERE A.yz=1 AND A.ispic=1 $SQL ORDER BY A.list DESC LIMIT $rows";
	}else{
		return ;
	}
	$listdb=list_content($SQL,$leng);
	return $listdb;
}

?>