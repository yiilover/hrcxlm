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
				$title = "恭喜你,你申请的企业用户成功通过审核了!";
				$content = "<A HREF='$webdb[www_url]'>恭喜你,你在“{$webdb[webname]}”注册的企业用户通过审核了!</A>";
			}else{
				$title = "很抱歉,你申请的企业用户未能通过审核!";
				$content = "<A HREF='$webdb[www_url]'>很抱歉,你在“{$webdb[webname]}”注册的企业用户因未符合申请企业用户的条件,未能通过审核，敬请谅解!</A>";
			}			
			send_mail($rs['email'],$title,$content,$ifcheck=0);
		}
	}
	jump('处理完毕',$FROMURL,0);
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
	jump('处理完毕',$FROMURL,0);
}
?>