<?php
require(dirname(__FILE__)."/"."global.php");


if($do=='del'){
	$db->query("DELETE FROM {$_pre}collection WHERE cid='$cid' AND uid='$lfjuid'");
}
if($page<1){
	$page=1;
}
$rows=20;
$min=($page-1)*$rows;

$showpage=getpage(" {$_pre}collection B ","WHERE B.uid=$lfjuid","?job=$job",$rows);
$listdb=array();
$query = $db->query("SELECT A.*,B.posttime AS ctime,B.cid FROM {$_pre}collection B LEFT JOIN {$_pre}content A ON B.id=A.id WHERE B.uid=$lfjuid ORDER BY B.cid DESC LIMIT $min,$rows");
while($rs = $db->fetch_array($query)){

	$listdb[]=$rs;
}
foreach( $listdb AS $key=>$rs){
	if($rs[yz]==2){
		$rs[state]="<A style='color:red;'>����</A>";
	}elseif($rs[yz]==1){
		$rs[state]="����";
	}elseif(!$rs[yz]){
		$rs[state]="<A style='color:blue;'>����</A>";
	}
	if($rs[levels]){
		$rs[levels]="<A style='color:red;'>���Ƽ�</A>";
	}else{
		$rs[levels]="δ�Ƽ�";
	}
	$rs[ctime]=date("Y-m-d",$rs[ctime]);
	$rs[title]=get_word($rs[full_title]=$rs[title],54);
	$rs[url]=get_info_url($rs[id],$rs[fid],$rs[city_id]);
	$listdb[$key]=$rs;
}

require(ROOT_PATH."member/head.php");
require(dirname(__FILE__)."/"."template/collection.htm");
require(ROOT_PATH."member/foot.php");
?>