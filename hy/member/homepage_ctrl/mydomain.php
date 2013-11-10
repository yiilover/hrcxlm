<?php
//二级域名

if(!$webdb[vipselfdomain]){
	showerr("系统没有启用二级域名功能");
}

if(!$step){

 


 
}else{
	if(!$web_admin&&!$groupdb['use2domain']){
		showerr('你无权使用');
	}
	$host=trim($host);
	if($host!=''){
		if(!preg_match("/^[a-z\d]{2,15}$/",$host))showerr("二级域名只能使字母或者数字，长度在2-15个字符之间,且全部小写");
		if(in_array($host,explode("\r\n",$webdb[vipselfdomaincannot]))) showerr("此二级域名为系统限制域名，不能使用，请换一个重试");
		$host="{$host}.$webdb[vipselfdomain]";
		if($db->get_one("SELECT * FROM {$_pre}company WHERE host='$host' AND uid!='$uid'")) showerr("此域名已经被别人使用了，请换一个重试");
	}
	$db->query("UPDATE {$_pre}company SET `host`='$host' WHERE uid='$uid' ");
	refreshto("?uid=$uid&atn=$atn","设置成功");
}

if($companydb['host']){
	$companydb['host'] = preg_replace("/([^\.]+)\.(.*)/is","\\1",$companydb['host']);
}
?>