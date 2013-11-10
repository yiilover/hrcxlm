<?php
unset($urldb,$titledb);

$query = $db->query("SELECT * FROM {$_pre}pic WHERE id='$id' AND type='$type'");
while($rs = $db->fetch_array($query)){
	$urldb[]="'".tempdir($rs[imgurl])."'";
	$titledb[]="'".addslashes($rs[name])."'";
}

if(!$urldb){
	echo '<SCRIPT LANGUAGE="JavaScript">
	<!--
		alert("NO IMG");
	self.close();
	//-->
	</SCRIPT>';
	exit;
}

$urldb=implode(",",$urldb);
$titledb=implode(",",$titledb);

	
require(ROOT_PATH."inc/head.php");
require(getTpl("show_room_img"));
require(ROOT_PATH."inc/foot.php");

?>