<?php
!function_exists('html') && exit('ERR');

if(!$webdb[yzNumReg]){
	showerr('ϵͳû����������ܣ�');
}

//��ǰ�ļ���ע��ʱͨ���ֻ��������ȡע����Ĺ���
if(!is_table("{$pre}regnum")){
	$db->query("CREATE TABLE `{$pre}regnum` (
	`sid` varchar( 8 ) NOT NULL default '',
	`num` varchar( 6 ) NOT NULL default '',
	`posttime` int( 10 ) NOT NULL default '0',
	UNIQUE KEY `sid` ( `sid` ) ,
	KEY `posttime` ( `num` , `posttime` ) 
	) ENGINE = HEAP");
}

$time=$timestamp-60;
if($db->get_one("SELECT * FROM {$pre}regnum WHERE sid='$usr_sid' AND posttime>$time")){
	showerr("������ע���뻹û���յ��Ļ�����һ���Ӻ����ط���");
}
$randNum = rands(2).substr(mymd5($num),0,2);
$content = $webdb['webname']."�ṩ������ע������:(".$randNum.")����λ��";
if($webdb['yzNumReg']==2){
	if(!ereg("^1([0-9]{10})$",$num)){
		showerr('�ֻ���������'.$num);
	}
	if(sms_send($num,$randNum)){
		$db->query("REPLACE INTO `{$pre}regnum` ( `sid` , `num` , `posttime` ) VALUES ('$usr_sid', '$randNum', '$timestamp')");
		showerr("��Ϣ�Ѿ��ɹ����͵���ָ�����ֻ�������,��ע����գ��п��ܻ��ӳټ����ӣ������ĵȴ���",1);
	}else{
		showerr("��Ϣ����ʧ�ܣ��������ֻ����Žӿ������⣡");
	}
}elseif($webdb['yzNumReg']==1){
	$ckfile = ROOT_PATH.'cache/regsendmail.txt';
	if( (time()-@filemtime($ckfile) )<60 ){
		showerr("�ʼ����������Ŷ��У����Ժ��ٳ��Է��ͣ�");
	}
	$email=$num;
	$title = $webdb['webname']."�ṩ�����ע������Ϣ";
	write_file($ckfile,$email);
	if(send_mail($email,$title,$content,$ifcheck=1)){
		$db->query("REPLACE INTO `{$pre}regnum` ( `sid` , `num` , `posttime` ) VALUES ('$usr_sid', '$randNum', '$timestamp')");
		@unlink($ckfile);
		showerr("ע������Ϣ�Ѿ��ɹ����͵�����������,��ע�����",1);
	}else{
		@unlink($ckfile);
		showerr("��Ϣ����ʧ�ܣ��������ʼ����͹�����������");
	}
}
?>