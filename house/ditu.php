<?php
require(dirname(__FILE__)."/global.php");

$rows=5; //ÿҳ��ʾ����

unset($pointMsgAarray,$pointLatLngAarray);

$listdb = google_map_data($rows);

foreach($listdb AS $key=>$rs){
	$rs[posttime] = date("Y-m-d H:i",$rs[posttime]);
	$rs[picurl] = tempdir($rs[picurl]);
	$listdb[$key]=$rs;
	$pointLatLngAarray[] = "'$rs[maps]'";	
	$pointMsgAarray[]="'���⣺<A HREF=\"bencandy.php?fid=$rs[fid]&id=$rs[id]\" target=\"_blank\"><b>$rs[title]</b></A><br>��ϵ�绰��<b>$rs[mobphone]</b><br><A HREF=\"bencandy.php?fid=$rs[fid]&id=$rs[id]\" target=\"_blank\"><img onerror=\"this.src=\'$webdb[www_url]/images/default/nopic.jpg\'\" width=150 height=120 border=0 src=\"$rs[picurl]\"></A>'";
}

$pointMsg=implode(',',$pointMsgAarray);
$pointLatLng=implode(',',$pointLatLngAarray);
$showpage = getpage("","","?fid=$fid",$rows,$totalNum);

$cityname=$city_DB[name][$city_id];
$cityname || $cityname='����';
eregi("^[a-z0-9 ]+$",$cityname) || $cityname='�й�'.$cityname;	//���ĳ�����Ҫ�����й�����	

require(getTpl("ditu"));



function google_map_data($rows=5){
	global $page,$city_id,$fid,$Fid_db,$db,$_pre,$totalNum;
	if($page<1){
		$page=1;
	}
	$min = ($page-1)*$rows;
	$SQL=" city_id='$city_id' AND maps!='' ";
	if($fid){
		$fid_array = array($fid);
		foreach($Fid_db[$fid] AS $key=>$value){
			$fid_array[] = $key;
		}
		$SQL.=" AND A.fid IN (".implode(',',$fid_array).") ";
	}
	$query = $db->query("SELECT SQL_CALC_FOUND_ROWS A.* FROM {$_pre}content A WHERE $SQL ORDER BY A.list DESC LIMIT $min,$rows");
	$RS=$db->get_one("SELECT FOUND_ROWS()");
	$totalNum=$RS['FOUND_ROWS()'];
	while($rs = $db->fetch_array($query)){
		$ts = $db->get_one("SELECT * FROM {$_pre}content_$rs[mid] WHERE id='$rs[id]'");
		if($ts){
			$rs+=$ts;
		}
		$listdb[]=$rs;
	}
	return $listdb;
}

?>