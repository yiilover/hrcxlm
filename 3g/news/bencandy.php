<?php 
require(dirname(__FILE__)."/global.php");

/**
*��ȡ��Ŀ��ģ�����ò���
**/
$fidDB=$db->get_one("SELECT A.* FROM {$_pre}sort A WHERE A.fid='$fid'");

if(!$fidDB){
	showerr("FID����!");
}

/**
*��ȡ��Ϣ���ĵ�����
**/
$rsdb=$db->get_one("SELECT B.*,A.* FROM `{$_pre}content` A LEFT JOIN `{$_pre}content_1` B ON A.id=B.id WHERE A.id='$id'");
if(!$rsdb){
	showerr("���ݲ�����");
}
elseif($rsdb[fid]!=$fid){
	showerr("FID����!!!");
}
elseif($rsdb[yz]!=1&&!$web_admin){
	if($rsdb[yz]==2){
		showerr("����վ������,���޷��鿴");
	}else{
		showerr("��ûͨ�����");
	}
}

$db->query("UPDATE {$_pre}content SET hits=hits+1,lastview='$timestamp' WHERE id='$id'");

$rsdb[posttime]=date("Y-m-d H:i:s",$rsdb[posttime]);

$rsdb[picurl] && $rsdb[picurl]=tempdir($rsdb[picurl]);

$rsdb[content]=En_TruePath($rsdb[content],0);

$WebTitle=$rsdb['title']."--".$webdb['Info_webname']."--".$webdb['webname'];

require(Mpath."template/head.htm");
require(Mpath."template/bencandy.htm");
require(Mpath."template/foot.htm");
?>