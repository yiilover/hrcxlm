<?php
require_once("global.php");

if($action == "del"){
	$rsdb=$db->get_one("SELECT * FROM `{$_pre}content` WHERE id='$id'");
	if(!$rsdb){
		showerr("ɾ������!��û����ص�����");
	}elseif($rsdb[uid]!=$lfjuid&&!$web_admin){
		showerr("��ûȨ��!");
	}
	$db->query("DELETE FROM `{$_pre}content` WHERE `id` = '$id'");
	$db->query("DELETE FROM `{$_pre}content_1` WHERE `id` = '$id'");
	refreshto("list.php","ɾ���ɹ�");
}

$rows=15;

if(!$page)
{
	$page=1;
}
$min=($page-1)*$rows;
$query = $db->query("SELECT * FROM {$_pre}content WHERE uid=$lfjuid ORDER BY id DESC LIMIT $min,$rows");
while($rs = $db->fetch_array($query)){
	$rs[posttime]=date("m-d H:i",$rs[posttime]);
	$rs[yz]=$rs[yz]?"<A style='color:red;'>�����</A>":"<A style='color:blue;'>δ���</A>";
	$listdb[]=$rs;
}
$showpage=getpage("{$_pre}content","WHERE uid=$lfjuid","?",$rows);
require(ROOT_PATH."member/head.php");
require(dirname(__FILE__)."/"."template/list.htm");
require(ROOT_PATH."member/foot.php");
?>