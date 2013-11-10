<?php
!function_exists('html') && exit('ERR');

if(is_table("{$pre}hy_company")){
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=index.php?lfj=module_admin&dirname={$ModuleDB['hy_']['dirname']}&file=company&job=list'>";
	exit;
}else{
	showmsg('你没有安装黄页模块');
}

?>