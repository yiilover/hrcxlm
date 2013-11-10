<?php 
require(dirname(__FILE__)."/global.php");
$WebTitle="Ñ¡Ôñ³ÇÊÐ--".$webdb['webname'];

/*if(!strpos($FROMURL, "allcity.php")){
	set_cookie("fromurl",$FROMURL,3600*24);
}
$fromurl=get_cookie("fromurl");
$fromurl || $fromurl=$Murl."/index.php";*/

$query = $db->query("SELECT * FROM {$pre}city ORDER BY letter ASC,list DESC");
while($rs = $db->fetch_array($query)){
	$listdb[$rs[letter]][]=$rs;
}

unset($hitscity,$listlitter,$listcity);
foreach($city_DB['hits'] AS $key=>$value){
	$hitscity.= "<a href=\"?cityid=".$key."\">".$city_DB['name'][$key]."</a> ";
}
foreach( $listdb AS $key=>$value){
	$listlitter.= "<a href=\"?litter=".$key."\">".$key."</a> ";
}
if($litter){
	foreach($listdb[$litter]  AS $key=>$value){
		$listcity.="<a href=\"?cityid=".$value['fid']."\">".$value['name']."</a> ";
	}
}
if($cityid){
	set_cookie("city_id",$cityid,3600*24);	
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$Murl/index.php'>";
	exit;
}
require(Mpath."template/allcity.htm");
?>