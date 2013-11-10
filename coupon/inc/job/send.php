<?php
if(!function_exists('html')){
die('F');
}
if(!$lfjid){
	showerr("请先登录");
}elseif(!$id){
	showerr("ID不存在");
}
$rsdb = $db->get_one("SELECT * FROM `{$_pre}content` WHERE `id`='$id' AND fid='$fid'");
if(!$rsdb){
	showerr("信息不存在！"); 
}

$randnum = rands(5);

if(!$lfjdb[mobphone]){
	showerr("你还没有设置手机号码，请进会员中心先设置好手机号码！");
}elseif( sms_send($lfjdb[mobphone],"你获取的“{$rsdb[title]}”优惠码是：{$randnum}，本条信息来源于$webdb[webname]")!=1 ){
	showerr("短信发送失败，请检查手机号码是否有误，或者是网站短信接口不正常！");
}

refreshto("bencandy.php?fid=$fid&id=$id","短信已发送成功，请耐心等候!",3);
?>