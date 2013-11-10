<?php

function showlisttype($type,$rows=5,$leng=20,$fid=0,$conten=100){
	global $db,$_pre,$webdb,$city_id;
	$SQL=" WHERE A.yz=1";
	if($city_id>0){
		$SQL .=" AND A.city_id='$city_id' ";
	}
	if($fid){
		$allfid=GetAllSonFid($fid);
		if($allfid){
			$SQL.=" AND A.fid IN ($fid".$allfid.") ";
		}else{
			$SQL.=" AND A.fid='$fid' ";
		}
	}
	if($type=='hot'){
		$SQL.=" ORDER BY A.hits DESC LIMIT $rows";
	}elseif($type=='lastview'){
		$SQL.=" ORDER BY A.lastview DESC LIMIT $rows";
	}elseif($type=='comment'){
		$SQL.=" ORDER BY A.comments DESC LIMIT $rows";
	}elseif($type=='new'){
		$SQL.=" ORDER BY A.list DESC LIMIT $rows";
	}elseif($type=='level'){
		$SQL.=" ORDER BY A.levelstime DESC LIMIT $rows";
	}elseif($type=='pic'){
		$SQL.=" AND A.ispic=1 ORDER BY A.list DESC LIMIT $rows";
	}
	$query=$db->query("SELECT * FROM {$_pre}content A $SQL");
	while( $rs=$db->fetch_array($query) ){
		$mrs=$db->get_one("SELECT * FROM {$_pre}content_{$rs[mid]} WHERE id='$rs[id]'");
		foreach($mrs AS $key=>$value){
			$rs[$key]=$value;
		}
		$rs[content]=@preg_replace('/<([^<]*)>/is',"",$rs[content]);	//°ÑHTML´úÂë¹ýÂËµô
		$rs[content]=get_word($rs[full_content]=$rs[content],$conten);
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
?>