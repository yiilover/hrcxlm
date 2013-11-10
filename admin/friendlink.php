<?php
function_exists('html') OR exit('ERR');
require_once(ROOT_PATH."inc/friendlink.inc.php");

if(!$Apower['friendlink_mod']){
	showerr('你没权限!');
}

$admin_path="index.php?lfj=$lfj";

$linkdb=array(
			"添加友情链接"=>"$admin_path&job=add",
			"友情链接管理"=>"$admin_path&job=list",
			"友情链接检查"=>"$admin_path&job=check",
			"友情链接分类"=>"index.php?lfj=friendlink_sort&job=list",
			);

if($job=="mod")
{
	$rsdb=$db->get_one("SELECT * FROM {$pre}friendlink WHERE id='$id' ");
	$rsdb[ifhide]=intval($rsdb[ifhide]);
	$ifhide[$rsdb[ifhide]]=" checked ";
	$yz[$rsdb[yz]]=" checked ";
	$iswordlink[$rsdb[iswordlink]]=" checked ";
	$select_city=select_fsort("postdb[city_id]",$rsdb[city_id]);
	$select_class=select_fclass("postdb[fid]",$rsdb[fid]);
	
	$rsdb[endtime]=$rsdb[endtime]?date("Y-m-d H:i:s",$rsdb[endtime]):'';

	require(dirname(__FILE__).'/head.php');
	require(dirname(__FILE__)."/"."template/friendlink/mod.htm");
	require(dirname(__FILE__).'/foot.php');

}
elseif($action=="mod")
{
	$postdb[endtime]	&&	$postdb[endtime]=preg_replace("/([\d]+)-([\d]+)-([\d]+) ([\d]+):([\d]+):([\d]+)/eis","mk_time('\\4','\\5', '\\6', '\\2', '\\3', '\\1')",$postdb[endtime]);
	$db->query("UPDATE {$pre}friendlink SET name='$postdb[name]',url='$postdb[url]',logo='$postdb[logo]',descrip='$postdb[descrip]',`ifhide`='$postdb[ifhide]',`yz`='$postdb[yz]',`iswordlink`='$postdb[iswordlink]',`city_id`='$postdb[city_id]',endtime='$postdb[endtime]',`fid`='$postdb[fid]' WHERE id='$id'");
	write_friendlink();
	refreshto("$FROMURL","修改成功",1);
}
elseif($job=="add")
{
	$ifhide[0]=" checked ";
	$iswordlink[0]=" checked ";
	$yz[1]=" checked ";
	$select_city=select_fsort("postdb[city_id]","");
	$select_class=select_fclass("postdb[fid]",$rsdb[fid]);
	require(dirname(__FILE__).'/head.php');
	require(dirname(__FILE__)."/"."template/friendlink/mod.htm");
	require(dirname(__FILE__).'/foot.php');

}
elseif($action=="add")
{
	$db->query("INSERT INTO `{$pre}friendlink` (`name` , `url` ,`city_id` , `logo` , `descrip` , `list`,ifhide,yz,iswordlink,posttime,fid ) VALUES ('$postdb[name]','$postdb[url]','$postdb[city_id]','$postdb[logo]','$postdb[descrip]','0','$postdb[ifhide]','$postdb[yz]','$postdb[iswordlink]','$timestamp','$postdb[fid]')");
	write_friendlink();
	refreshto("$admin_path&job=list","添加成功");
}
elseif($job=="list")
{
	if(!table_field("{$pre}friendlink","fid")){
		$db->query("ALTER TABLE  `{$pre}friendlink` ADD  `fid` MEDIUMINT( 7 ) NOT NULL");
	}
	$rows=50;
	if(!$page){
		$page=1;
	}
	if($_GET['cityid']!=''){
		$SQL=" WHERE A.city_id='$cityid' ";
	}elseif($fid){
		$SQL=" WHERE A.fid='$fid' ";
	}else{
		$SQL="";
	}
	$min=($page-1)*$rows;
	$showpage=getpage("`{$pre}friendlink` A","$SQL","?lfj=$lfj&job=$job&cityid=$cityid&fid=$fid",$rows);
	$query=$db->query("SELECT A.*,B.name AS cityname,D.name AS fname FROM `{$pre}friendlink` A LEFT JOIN {$pre}city B ON A.city_id=B.fid LEFT JOIN `{$pre}friendlink_sort` D ON A.fid=D.fid $SQL ORDER BY A.yz ASC,A.list DESC,A.id DESC LIMIT $min,$rows");
	while($rs=$db->fetch_array($query)){
		$rs[ifshow]=$rs[ifhide]?"<A HREF='$admin_path&job=up&ifhide=0&id=$rs[id]' style='color:red;'>首页隐藏</A>":"<A HREF='$admin_path&job=up&ifhide=1&id=$rs[id]' style='color:blue;'>首页显示</A>";
		if(!$rs[yz]){
			$rs[ifshow]="隐藏";
		}
		$rs[cityname] || $rs[cityname]='全国';
		if(!$rs[endtime]){
			$rs[state]='长久有效';
		}elseif($rs[endtime]<$timestamp){
			$rs[state]='<font color=#FF0000>已过期</font>';
		}else{
			$rs[state]='<font color=#0000FF>'.date("Y-m-d H:i",$rs[endtime]).'</font>截止';
		}
		if($rs[logo]){
			$rs[logo]=tempdir($rs[logo]);
			$rs[logo]="<img src='$rs[logo]' width=88 height=31 border=0>";
		}
		$rs[yz]=$rs[yz]?"<a href='?lfj=$lfj&job=setyz&yz=0&id=$rs[id]' style='color:red;'><img alt='已通过审核,点击取消审核' src='../member/images/check_yes.gif' border=0></a>":"<a href='?lfj=$lfj&job=setyz&yz=1&id=$rs[id]' style='color:blue;'><img alt='还没通过审核,点击通过审核' src='../member/images/check_no.gif' border=0></a>";
		$listdb[]=$rs;
	}
	require(dirname(__FILE__).'/head.php');
	require(dirname(__FILE__)."/"."template/friendlink/friendlink.htm");
	require(dirname(__FILE__).'/foot.php');

}
elseif($action=="list")
{
	foreach( $listdb AS $key=>$value){
		$db->query("UPDATE {$pre}friendlink SET `list`='$value' WHERE id='$key'");
	}
	write_friendlink();
	refreshto("$FROMURL","修改成功",1);
}
elseif($action=="delete")
{
	$db->query("DELETE FROM `{$pre}friendlink` WHERE id='$id' ");
	write_friendlink();
	refreshto("$admin_path&job=list","删除成功");
}
elseif($job=="up")
{
	$db->query("UPDATE {$pre}friendlink SET `ifhide`='$ifhide' WHERE id='$id'");
	write_friendlink();
	refreshto("$FROMURL","修改成功",0);
}
elseif($job=="setyz")
{
	$db->query("UPDATE {$pre}friendlink SET `yz`='$yz' WHERE id='$id'");
	write_friendlink();
	refreshto("$FROMURL","修改成功",0);
}
elseif($job=='check')
{
	$rows=30;
	if(!$page){
		$page=1;
	}
	if($cityid){
		$SQL=" WHERE A.city_id='$cityid' ";
	}else{
		$SQL="";
	}
	$min=($page-1)*$rows;
	$showpage=getpage("`{$pre}friendlink` A","$SQL","?lfj=$lfj&job=$job&cityid=$cityid",$rows);
	$query=$db->query("SELECT A.*,B.name AS fname FROM `{$pre}friendlink` A LEFT JOIN {$pre}city B ON A.city_id=B.fid $SQL ORDER BY A.yz ASC,A.list DESC,A.id DESC LIMIT $min,$rows");
	while($rs=$db->fetch_array($query)){
		$rs[ifshow]=$rs[ifhide]?"<A HREF='$admin_path&job=up&ifhide=0&id=$rs[id]' style='color:red;'>首页隐藏</A>":"<A HREF='$admin_path&job=up&ifhide=1&id=$rs[id]' style='color:blue;'>首页显示</A>";
		if(!$rs[yz]){
			$rs[ifshow]="隐藏";
		}
		$rs[fname] || $rs[fname]='全国';
		if(!$rs[endtime]){
			$rs[state]='长久有效';
		}elseif($rs[endtime]<$timestamp){
			$rs[state]='<font color=#FF0000>已过期</font>';
		}else{
			$rs[state]='<font color=#0000FF>'.date("Y-m-d H:i",$rs[endtime]).'</font>截止';
		}
		if($rs[logo]){
			$rs[logo]=tempdir($rs[logo]);
			$rs[logo]="<img src='$rs[logo]' width=88 height=31 border=0>";
		}
		$rs[yz]=$rs[yz]?"<a href='?lfj=$lfj&job=setyz&yz=0&id=$rs[id]' style='color:red;'><img alt='已通过审核,点击取消审核' src='../member/images/check_yes.gif' border=0></a>":"<a href='?lfj=$lfj&job=setyz&yz=1&id=$rs[id]' style='color:blue;'><img alt='还没通过审核,点击通过审核' src='../member/images/check_no.gif' border=0></a>";
		$listdb[]=$rs;
	}
	require(dirname(__FILE__).'/head.php');
	require(dirname(__FILE__)."/"."template/friendlink/check.htm");
	require(dirname(__FILE__).'/foot.php');

}elseif($job=='getbai'){
	$domain = preg_replace("/http:\/\/([^\/]+)(\/|)(.*)/is","\\1",$url);
	$domain = str_replace('www.','',$domain);

	$content = file_get_contents("http://www.baidu.com/s?wd=site%3A$domain&rsv_bp=0&rsv_spt=3&inputT=6047");
	preg_match("/<p class=\"site_tip\"><strong>([^<]+)<\/strong>/is",$content,$array);
	preg_match("/([,\d]+)/is",$array[1],$array2);
	$num = $array2[0];
	$num || $num=0;
	echo "<SCRIPT LANGUAGE=\"JavaScript\">
	<!--
	window.parent.showget('$lid','{$num}条');
	//-->
	</SCRIPT>";
	exit;

}elseif($job=='getlink'){
	$domain = preg_replace("/http:\/\/([^\/]+)(\/|)(.*)/is","\\1",$webdb[www_url]);
	$domain = str_replace('www.','',$domain);
	$content = file_get_contents($url);
	if(strstr($content,$domain)){
		$msg = '<font color=red>正常</font>';
	}else{
		$msg = '<font color=blue>异常</font>';
	}
	echo "<SCRIPT LANGUAGE=\"JavaScript\">
	<!--
	window.parent.showget('$lid','$msg');
	//-->
	</SCRIPT>";
	exit;

}

function select_fsort($name,$fid=''){
	global $db,$pre,$webdb;
	$show.="<select name='$name'><option value=''>全国</option>";
	$query = $db->query("SELECT * FROM {$pre}city ORDER BY list DESC");
	while($rs = $db->fetch_array($query)){
		$ck=$fid==$rs[fid]?'selected':'';
		$show.="<option value='$rs[fid]' $ck>$rs[name]</option>";
	}
	$show.="</select>";
	return $show;
}

function select_fclass($name,$fid=''){
	global $db,$pre,$webdb;
	$show.="<select name='$name'><option value=''>请选择</option>";
	$query = $db->query("SELECT * FROM {$pre}friendlink_sort ORDER BY list DESC,fid ASC");
	while($rs = $db->fetch_array($query)){
		$ck=$fid==$rs[fid]?'selected':'';
		$show.="<option value='$rs[fid]' $ck>$rs[name]</option>";
	}
	$show.="</select>";
	return $show;
}

?>