<?php


require(dirname(__FILE__)."/../data/all_fid.php");
require(dirname(__FILE__)."/../data/module_db.php");

$modulename=$ModuleDB[str_replace("Info_","",$inc)][name];

$label_rsdb = get_label();
$array=unserialize($label_rsdb[code]);

if($hand_choose==1){
	require("head.php");
	require(dirname(__FILE__)."/template/label/choose.htm");
	require("foot.php");
}elseif($_GET[cms_type]&&ereg("^([-_a-z0-9]+)$",$_GET[cms_type])){
	require(dirname(__FILE__)."/label/$cms_type.php");
}elseif(is_file(dirname(__FILE__)."/label/$array[ctype].php")){	//修改的时候,直接跳过去
	$cms_type = $array[ctype];
	require(dirname(__FILE__)."/label/$array[ctype].php");
}


require("head.php");
require(dirname(__FILE__)."/template/label/choose.htm");
require("foot.php");

?>