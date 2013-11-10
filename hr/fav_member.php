<?php
require(dirname(__FILE__)."/global.php");

if(!$lfjid){
	showerr('请先登录!');
}elseif($uid==$lfjuid){
	showerr('你不能收录自己!');
}
if($db->get_one("SELECT * FROM {$_pre}collection WHERE memberuid='$uid' AND companyuid='$lfjuid'")){
	showerr('你已经收录过了!');
}

if(!$db->get_one("SELECT * FROM {$_pre}person WHERE uid='$uid'")){
	showerr('简历不存在!');
}

$company = $db->get_one("SELECT * FROM {$pre}hy_company WHERE uid='$lfjuid'");

if($webdb[fav_jianli_power]&&!$company){
	showerr('你不是企业用户不能收录简历!');
}

$db->query("INSERT INTO {$_pre}collection SET memberuid='$uid',companyuid='$lfjuid',posttime='$timestamp'");


if($webdb[fav_jianli_mail]){

	$title = "你的简历被“{$company[title]}”收录了";
	$content = "请点击以下网址查看该企业信息:<A HREF='$webdb[www_url]/home/?uid=$lfjuid' target='_blank'>$webdb[www_url]/home/?uid=$lfjuid</A>";

	$mdb = $userDB->get_info($uid);

	send_mail($mdb[email],$title,$content,0);
}

refreshto($FROMURL,'收录成功',3);
?>