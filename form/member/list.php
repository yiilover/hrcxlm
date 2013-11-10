<?php
require(dirname(__FILE__).'/global.php');

 
$showpage=getpage("{$_pre}content","WHERE uid='$lfjuid'",'',$rows);
$query = $db->query("SELECT A.*,B.name FROM {$_pre}content A LEFT JOIN {$_pre}module B ON A.mid=B.id WHERE A.uid='$lfjuid' ORDER BY A.list DESC");
while($rs = $db->fetch_array($query)){
	$rs[posttime] = date('Y-m-d H:i:s',$rs[posttime]);
	if($rs[yz]){
		$rs[state]="<img src='$webdb[www_url]/member/images/check_yes.gif' border=0>";
	}else{
		$rs[state]="<img src='$webdb[www_url]/member/images/check_no.gif' border=0>";
	}
	$listdb[]=$rs;
}

require(ROOT_PATH."/member/head.php");
require(dirname(__FILE__).'/template/list.htm');
require(ROOT_PATH."/member/foot.php");

?>