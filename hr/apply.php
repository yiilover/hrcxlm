<?php
require(dirname(__FILE__)."/global.php");

if(!$lfjid){
	showerr('���ȵ�¼!');
}

if($job=='post'){
	$rsdb = $db->get_one("SELECT * FROM {$_pre}content WHERE id='$id'");
	if(!$rsdb){
		showerr('ְλ������!');
	}
	if($db->get_one("SELECT * FROM {$_pre}apply WHERE cid='$id' AND uid='$lfjuid'")){
		showerr('���Ѿ��������ְλ��!');
	}
	@extract($db->get_one("SELECT id AS join_id FROM {$_pre}person WHERE uid='$lfjuid'"));
	if(!$join_id){
		showerr('��ļ���������!');
	}
	$db->query("INSERT INTO {$_pre}apply SET cid='$id',uid='$lfjuid',join_id='$join_id',posttime='$timestamp'");

	if($webdb[apply_job_mail]){

		$title = "�㷢����ְλ��{$rsdb[title]}��������ְ��";
		$content = "����������ַ�鿴���û��ļ���:<A HREF='$webdb[www_url]/hr/joinshow.php?uid=$lfjuid' target='_blank'>$webdb[www_url]/hr/joinshow.php?uid=$lfjuid</A>";

		$mdb = $userDB->get_info($rsdb[uid]);

		send_mail($mdb[email],$title,$content,0);
	}
	refreshto("./",'����ɹ�',1);
}

?>