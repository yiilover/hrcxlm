<?php
define("IN_QY",true);
require_once(dirname(__FILE__)."/member.php");

if($action=="yzqy"&&$Apower[member_qy_list])
{
	$Carray = '';
	if($T=='yz'){
		$yz=1;
		$y_z=1;
		$groupid = $webdb['RegQyGroupid'];
		if($ltitle[$groupid] && $groupid!=3){
			$Carray = array('groupid'=>$groupid);
		}
	}else{
		$yz=-1;
		$y_z=0;
		$groupid = $webdb['RegQyGroupid'];
		if($ltitle[$groupid] && $groupid!=3){
			$Carray = array('groupid'=>8);
		}
	}
	foreach( $uid_db AS $key=>$uid){
		$array=array('uid'=>$uid,'grouptype'=>$yz);	
		$rs=$userDB->get_info($uid);
		if($rs['groupid']!=3 && $Carray){
			$array+=$Carray;
		}			
		$userDB->edit_user($array);
		$db->query("UPDATE {$pre}hy_company SET yz='$y_z' WHERE uid='$uid'");
		
		if( $webdb['RegQyYzSendMail'] && $rs['email'] ){
			if($T=='yz'){
				$title = "��ϲ��,���������ҵ�û��ɹ�ͨ�������!";
				$content = "<A HREF='$webdb[www_url]'>��ϲ��,���ڡ�{$webdb[webname]}��ע�����ҵ�û�ͨ�������!</A>";
			}else{
				$title = "�ܱ�Ǹ,���������ҵ�û�δ��ͨ�����!";
				$content = "<A HREF='$webdb[www_url]'>�ܱ�Ǹ,���ڡ�{$webdb[webname]}��ע�����ҵ�û���δ����������ҵ�û�������,δ��ͨ����ˣ������½�!</A>";
			}			
			send_mail($rs['email'],$title,$content,$ifcheck=0);
		}
	}
	jump('�������',$FROMURL,0);
}
elseif($action=="downqy"&&$Apower[member_qy_list])
{
	$Carray = '';
	$groupid = $webdb['RegQyGroupid'];
	if($ltitle[$groupid] && $groupid!=3){
		$Carray = array('groupid'=>8);
	}
	foreach($uid_db AS $key=>$uid){
		$rs=$userDB->get_info($uid);
		if($rs['groupid']!=3 && $Carray){
			$Carray['uid'] = $uid;
			$userDB->edit_user($Carray);
		}		
		delete_home($uid);
	}
	jump('�������',$FROMURL,0);
}
?>