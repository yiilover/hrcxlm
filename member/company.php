<?php
require(dirname(__FILE__)."/"."global.php");

if($webdb['ForbidUpHy']&&$lfjdb[grouptype]==0){
	showerr('�㲻����ҵ��Ա,��Ȩ����,ϵͳ��ֹ��ͨ��Ա����Ϊ��ҵ��Ա!');
}

//��װ�е��̵����
if(is_table("{$pre}hy_company")){
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$webdb[www_url]/hy/member/post_company.php?job=$job'>";
	exit;
}else{
	showerr('��û�а�װ��ҳģ��');
}

?>