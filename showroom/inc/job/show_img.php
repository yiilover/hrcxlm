<?php

$rsdb=$db->get_one("SELECT A.* FROM `{$_pre}content` A WHERE A.id='$id'");
if(!$rsdb){
	showerr("���ϲ�����");
}

$fid=$rsdb[fid];
$mid=$rsdb[mid];

unset($urldb,$titledb);

$query = $db->query("SELECT * FROM {$_pre}pic WHERE id='$id' AND type='$type'");
while($rs = $db->fetch_array($query)){
	$urldb[]="'".tempdir($rs[imgurl])."'";
	$titledb[]="'".addslashes($rs[name])."'";
}

if(!$urldb){
	if($rsdb[picurl]){
		header("location:".tempdir($rsdb[picurl]));
		exit;
	}
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
require(getTpl("show_img"));
require(ROOT_PATH."inc/foot.php");

?>