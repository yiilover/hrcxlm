<?php
require(dirname(__FILE__)."/global.php");




//��ȡ��ǩ����
$template_file=getTpl("city");
fetch_label_value(array('pagetype'=>'4','file'=>$template_file,'module'=>$webdb['module_id']));


require(ROOT_PATH."inc/head.php");
require($template_file);
require(ROOT_PATH."inc/foot.php");

?>