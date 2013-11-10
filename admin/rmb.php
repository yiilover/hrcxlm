<?php
!function_exists('html') && exit('ERR');
if($job=="list"&&$Apower[member_rmb])
{
	if(!table_field("{$pre}memberdata",'rmb')){
		$db->insert_file(ROOT_PATH."data/rmblog.sql");
		unlink(ROOT_PATH."data/rmblog.sql");
	}

	if($T=="noyz"){
		$SQL=" WHERE D.yz=0 AND D.uid!=0 ";
	}elseif($T=="yz"){
		$SQL=" WHERE D.yz!=0 AND D.uid!=0 ";
	}elseif($T=="email"){
		$SQL=" WHERE D.email_yz=1 AND D.uid!=0 ";
	}elseif($T=="mob"){
		$SQL=" WHERE D.mob_yz=1 AND D.uid!=0 ";
	}elseif($T=="idcard"){
		$SQL=" WHERE D.idcard_yz=1 AND D.uid!=0 ";
	}elseif($T=="unidcard"){
		$SQL=" WHERE D.idcard_yz=-1 AND D.uid!=0 ";
	}else{
		$SQL=" WHERE 1 ";
	}

 
	if($groupid){
		$SQL.=" AND D.groupid=$groupid ";
	}
	
	if($keywords&&$type){
		if($type=='username'){
			$SQL.=" AND BINARY D.username LIKE '%$keywords%' ";
		}elseif($type=='uid'){
			$SQL.=" AND D.uid='$keywords' ";
		}
	}
	$select_group=select_group("groupid",$groupid,"index.php?lfj=$lfj&job=list&T=$T");

	if($ordertype=='1'){
		$orderSQL = "D.rmb DESC";
	}elseif($ordertype=='2'){
		$orderSQL = "D.rmb ASC";
	}elseif($ordertype=='3'){
		$orderSQL = "D.rmb_freeze DESC";
	}elseif($ordertype=='4'){
		$orderSQL = "D.rmb_freeze ASC";
	}else{
		$orderSQL = "D.uid DESC";
	}

	if(!$page){
		$page=1;
	}
	$rows=20;
	$min=($page-1)*$rows;
	$showpage=getpage("{$pre}memberdata D","$SQL","index.php?lfj=$lfj&job=$job&type=$type&T=$T&keywords=$keywords&groupid=$groupid&ordertype=$ordertype",$rows);
	$query=$db->query("SELECT D.* FROM {$pre}memberdata D $SQL ORDER BY $orderSQL LIMIT $min,$rows ");
	while($rs=$db->fetch_array($query)){
		$rs[lastvist]=$rs[lastvist]?date("Y-m-d H:i:s",$rs[lastvist]):'';
		$rs[regdate]=$rs[regdate]?date("Y-m-d H:i:s",$rs[regdate]):'';
		if(is_file(ROOT_PATH.'inc/ip.dat')){
			$rs[lastip_area] = ipfrom($rs[lastip]);
			$rs[regip_area] = ipfrom($rs[regip]);
		}
		if(!$rs[groupid]){
			$rs[alert]="alert('此用户的资料,还没有在整站激活,你不能进行任何操作!');return false;";
		}else{
			$rs[alert]="";
		}

		if($rs[yz]){
			$rs[yz]="<A HREF='index.php?lfj=$lfj&action=yz&uid_db[0]=$rs[uid]&T=noyz' style='color:red;' onclick=\"$rs[alert]\" title='基本信息已经通过审核,点击即可取消审核'><img src='../member/images/check_yes.gif' border='0'></A>";
		}elseif($rs[groupid]){
			$rs[yz]="<A HREF='index.php?lfj=$lfj&action=yz&uid_db[0]=$rs[uid]&T=yz' style='color:blue;' onclick=\"$rs[alert]\" title='基本信息还没有通过审核,点击即可通过审核'><img src='../member/images/check_no.gif' border='0'></A>";
		}else{
			$rs[yz]="未激活";
		}

		$rs[money] = get_money($rs[uid]);
		
		$listdb[]=$rs;
	}
	$_ordertype[intval($ordertype)] = ' selected ';
	require(dirname(__FILE__)."/"."head.php");
	require(dirname(__FILE__)."/"."template/rmb/list.htm");
	require(dirname(__FILE__)."/"."foot.php");
}

elseif($job=="editmember"&&$Apower[member_rmb])
{
	$rsdb=$userDB->get_allInfo($uid);
	
	$rsdb[money]=get_money($rsdb[uid]);
	$select_group=select_group("postdb[groupid]",$rsdb[groupid]);
	$select_group2=group_box("postdb[groups]",explode(",",$rsdb[groups]),1);

	$sexdb[intval($rsdb[sex])]=' checked ';

	$yzdb[intval($rsdb[yz])]=' checked ';

	$ConfigDB=unserialize($rsdb[config]);

	$rsdb[totalspace]=floor($rsdb[totalspace]/(1024*1024));

	$ConfigDB[begintime] && $ConfigDB[begintime]=date("Y-m-d H:i:s",$ConfigDB[begintime]);
	$ConfigDB[endtime]   && $ConfigDB[endtime]=date("Y-m-d H:i:s",$ConfigDB[endtime]);

	$email_yz[$rsdb[email_yz]]=' checked ';
	$mob_yz[$rsdb[mob_yz]]=' checked ';
	$idcard_yz[$rsdb[idcard_yz]]=' checked ';

	require(dirname(__FILE__)."/"."head.php");
	require(dirname(__FILE__)."/"."template/rmb/editmember.htm");
	require(dirname(__FILE__)."/"."foot.php");
}
elseif($action=="editmember"&&$Apower[member_rmb])
{
	
	$rsdb=$userDB->get_info($uid);
	if(!$rsdb[username]){
		showmsg("此用户资料不存在,或者帐号还没激活");
	}
	if($postdb[rmb_pwd]!=$rsdb[rmb_pwd]){
		$postdb[rmb_pwd] = md5($postdb[rmb_pwd]);
	}
	$array = array(
		'uid'=>$uid,
		'rmb_pwd'=>$postdb[rmb_pwd],
		//'rmb'=>$postdb[rmb],
		//'rmb_freeze'=>$postdb[rmb_freeze],
		);
	$userDB -> edit_user($array);

	if($postdb[rmb]!=$rsdb[rmb] || $postdb[rmb_freeze]!=$rsdb[rmb_freeze]){
		add_rmb($uid,($postdb[rmb]-$rsdb[rmb]),($postdb[rmb_freeze]-$rsdb[rmb_freeze]),"管理员操作");
	}
	
	$rsdb[money]=get_money($rsdb[uid]);

	if($rsdb[money]!=$postdb[money]){
		add_user($uid,$postdb[money]-$rsdb[money],'管理员操作');
	}

 
	jump("修改成功","index.php?lfj=$lfj&job=editmember&uid=$uid");
	
}
elseif($job=="pwd"&&$Apower[member_rmb])
{
	require(dirname(__FILE__)."/"."head.php");
	require(dirname(__FILE__)."/"."template/rmb/pwd.htm");
	require(dirname(__FILE__)."/"."foot.php");
}

?>