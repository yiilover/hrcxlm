<?php
require(dirname(__FILE__)."/global.php");

if(!$lfjid){
	showerr('���ȵ�¼!');
}elseif($uid==$lfjuid){
	showerr('�㲻����¼�Լ�!');
}
if($db->get_one("SELECT * FROM {$_pre}collection WHERE memberuid='$uid' AND companyuid='$lfjuid'")){
	showerr('���Ѿ���¼����!');
}

if(!$db->get_one("SELECT * FROM {$_pre}person WHERE uid='$uid'")){
	showerr('����������!');
}

$company = $db->get_one("SELECT * FROM {$pre}hy_company WHERE uid='$lfjuid'");

if($webdb[fav_jianli_power]&&!$company){
	showerr('�㲻����ҵ�û�������¼����!');
}

$db->query("INSERT INTO {$_pre}collection SET memberuid='$uid',companyuid='$lfjuid',posttime='$timestamp'");


if($webdb[fav_jianli_mail]){

	$title = "��ļ�������{$company[title]}����¼��";
	$content = "����������ַ�鿴����ҵ��Ϣ:<A HREF='$webdb[www_url]/home/?uid=$lfjuid' target='_blank'>$webdb[www_url]/home/?uid=$lfjuid</A>";

	$mdb = $userDB->get_info($uid);

	send_mail($mdb[email],$title,$content,0);
}

refreshto($FROMURL,'��¼�ɹ�',3);
?>