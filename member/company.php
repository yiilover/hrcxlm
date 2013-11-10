<?php
require(dirname(__FILE__)."/"."global.php");

if($webdb['ForbidUpHy']&&$lfjdb[grouptype]==0){
	showerr('你不是企业会员,无权操作,系统禁止普通会员升级为企业会员!');
}

//安装有店铺的情况
if(is_table("{$pre}hy_company")){
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$webdb[www_url]/hy/member/post_company.php?job=$job'>";
	exit;
}else{
	showerr('你没有安装黄页模块');
}

?>