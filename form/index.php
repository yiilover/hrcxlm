<?php
require("global.php");

die();

//��ȡ��ǩ����
$template_file=getTpl("index");
fetch_label_value(array('pagetype'=>'0','file'=>$template_file,'module'=>$webdb['module_id']));



require(ROOT_PATH."inc/head.php");
require($template_file);
require(ROOT_PATH."inc/foot.php");


 

?>