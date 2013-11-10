<?php
require_once("global.php");

if($action=='del'){
	$rsdb=showthisorder($id);
	if($rsdb[uid]!=$lfjuid){
		showerr("你没权限!");
	}
	del_order($id);
	refreshto("myorder.php",'',0);
	
}

$rows=15;
if(!$page){
	$page=1;
}
$min=($page-1)*$rows;

$query = $db->query("SELECT SQL_CALC_FOUND_ROWS A.*,B.* FROM {$_pre}join A LEFT JOIN {$_pre}content_2 B ON A.id=B.id WHERE A.uid='$lfjuid' ORDER BY A.id DESC LIMIT $min,$rows");
$RS=$db->get_one("SELECT FOUND_ROWS()");
$totalNum=$RS['FOUND_ROWS()'];
$showpage=getpage("","","?",$rows,$totalNum);
while($rs = $db->fetch_array($query)){
	$rs[shop]=$db->get_one("SELECT * FROM {$_pre}content WHERE id='$rs[cid]'");
	$rs[posttime]=date("m-d H:i",$rs[posttime]);
	$rs[editurl]="../join.php?job=edit&id=$rs[id]&fid=$rs[fid]&cid=$rs[cid]' target='_blank";
	$paymoney=$rs['totalmoney']?"<A HREF='../olpay.php?id=$rs[id]&fid=$rs[fid]' target='_blank'>付款</A>":"<A style='color:#aaa;'>无</A>";
	$rs['pay']=$rs['ifpay']?"<A style='color:red;'>已付</A>":$paymoney;
	$rs['comment']=$rs['ifcomment']?"已评论":"<a href=\"post_comment.php?id=$rs[id]\">评论</a>";
	$rs[send]=$rs[ifsend]?"<A style='color:red;'>已消费</A>":"<A style='color:#aaa;'>未消费</A>";

	if($rs[ifpay] && !$web_admin && $webdb['ForbidDelPayOrder']){
		$rs[nodel] = 'none';
	}
	
	
	$listdb[]=$rs;	
}
require(ROOT_PATH."member/head.php");
require(dirname(__FILE__)."/"."template/myorder.htm");
require(ROOT_PATH."member/foot.php");



function showthisorder($id){
	global $_pre,$db;
	$rsdb=$db->get_one("SELECT * FROM {$_pre}join WHERE id='$id'");
	return $rsdb;
}
?>