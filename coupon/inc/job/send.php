<?php
if(!function_exists('html')){
die('F');
}
if(!$lfjid){
	showerr("���ȵ�¼");
}elseif(!$id){
	showerr("ID������");
}
$rsdb = $db->get_one("SELECT * FROM `{$_pre}content` WHERE `id`='$id' AND fid='$fid'");
if(!$rsdb){
	showerr("��Ϣ�����ڣ�"); 
}

$randnum = rands(5);

if(!$lfjdb[mobphone]){
	showerr("�㻹û�������ֻ����룬�����Ա���������ú��ֻ����룡");
}elseif( sms_send($lfjdb[mobphone],"���ȡ�ġ�{$rsdb[title]}���Ż����ǣ�{$randnum}��������Ϣ��Դ��$webdb[webname]")!=1 ){
	showerr("���ŷ���ʧ�ܣ������ֻ������Ƿ����󣬻�������վ���Žӿڲ�������");
}

refreshto("bencandy.php?fid=$fid&id=$id","�����ѷ��ͳɹ��������ĵȺ�!",3);
?>