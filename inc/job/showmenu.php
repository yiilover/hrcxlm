<?php
if($id<1){
	die();
}
$query = $db->query("SELECT * FROM {$pre}menu WHERE fid='$id' AND hide=0");
while($rs = $db->fetch_array($query)){
	if(ereg("^\/",$rs['linkurl'])){
		$rs['linkurl']="$webdb[www_url]$rs[linkurl]";
	}elseif(!ereg("://",$rs['linkurl'])){
		$rs['linkurl']="$webdb[www_url]/$rs[linkurl]";
	}
	$Hblank=$rs['target']?"  target=\"_blank\"":'';
	$Hcolor=$rs['color']?" style=\"color:$Hcolor;\"":'';
	echo "<A $Hblank $Hcolor HREF=\"$rs[linkurl]\">$rs[name]</A><br>";
}

?>