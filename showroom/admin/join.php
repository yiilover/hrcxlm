<?php
function_exists('html') OR exit('ERR');
ck_power('join');
if($job=='yz'){
	$db->query("UPDATE {$_pre}join SET yz='$yz' WHERE id='$id'");

}elseif($act=='del'){
	foreach($iddb AS $key=>$value){
		$rs=$db->get_one("SELECT * FROM {$_pre}join WHERE id='$value'");
		$db->query("UPDATE {$_pre}content SET totaluser=totaluser-1 WHERE id='$rs[cid]'");
		$db->query("DELETE FROM {$_pre}join WHERE id='$value'");
		$db->query("DELETE FROM {$_pre}content_2 WHERE id='$value'");
	}
}

$rows=15;

if(!$page)
{
	$page=1;
}
$min=($page-1)*$rows;

unset($listdb,$i);



$query = $db->query("SELECT SQL_CALC_FOUND_ROWS B.*,A.* FROM {$_pre}join A LEFT JOIN {$_pre}content_2 B ON A.id=B.id  ORDER BY A.id DESC LIMIT $min,$rows");

$RS=$db->get_one("SELECT FOUND_ROWS()");
$totalNum=$RS['FOUND_ROWS()'];
$showpage=getpage("","","$admin_path&job=$job",$rows,$totalNum);

while($rs = $db->fetch_array($query))
{
	$rs[C]=$db->get_one("SELECT * FROM {$_pre}content WHERE id='$rs[cid]'");
	$rs[posttime]=date("Y-m-d H:i",$rs[posttime]);
	$rs[yzshow]=$rs[yz]?"<A HREF='$admin_path&job=yz&id=$rs[id]&yz=0' style='color:red;'>“—…Û∫À</A>":"<A HREF='$admin_path&job=yz&id=$rs[id]&yz=1' style='color:blue;'>Œ¥…Û∫À</A>";
	$listdb[]=$rs;
}

get_admin_html('list');
?>