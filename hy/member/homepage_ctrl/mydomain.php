<?php
//��������

if(!$webdb[vipselfdomain]){
	showerr("ϵͳû�����ö�����������");
}

if(!$step){

 


 
}else{
	if(!$web_admin&&!$groupdb['use2domain']){
		showerr('����Ȩʹ��');
	}
	$host=trim($host);
	if($host!=''){
		if(!preg_match("/^[a-z\d]{2,15}$/",$host))showerr("��������ֻ��ʹ��ĸ�������֣�������2-15���ַ�֮��,��ȫ��Сд");
		if(in_array($host,explode("\r\n",$webdb[vipselfdomaincannot]))) showerr("�˶�������Ϊϵͳ��������������ʹ�ã��뻻һ������");
		$host="{$host}.$webdb[vipselfdomain]";
		if($db->get_one("SELECT * FROM {$_pre}company WHERE host='$host' AND uid!='$uid'")) showerr("�������Ѿ�������ʹ���ˣ��뻻һ������");
	}
	$db->query("UPDATE {$_pre}company SET `host`='$host' WHERE uid='$uid' ");
	refreshto("?uid=$uid&atn=$atn","���óɹ�");
}

if($companydb['host']){
	$companydb['host'] = preg_replace("/([^\.]+)\.(.*)/is","\\1",$companydb['host']);
}
?>