<?php
!function_exists('html') && exit('ERR');

ck_power('order');

if($id){
	$rs = $db->get_one("SELECT * FROM `{$_pre}join` WHERE id='$id'");
}

if($job=='pay'){
	if($ifpay==1 && $webdb['daili_receive']){//管理员代收货款
		$rmb = $rs[totalmoney]-$rs[rmb];
		if($rs[ifquit]){	//针对可退款的情况
			add_rmb($rs[uid],-$rmb,$rmb,"冻结款 购买:$rs[title]");
		}else{
			add_rmb($rs[uid],-$rmb,0,"购买:$rs[title]");
			add_rmb($rs[cuid],$rmb,0,"销售:$rs[title]");
		}
	}
	$db->query("UPDATE {$_pre}join SET ifpay='$ifpay' WHERE id='$id'");
	count_join($rs[cid]);	//统计报名人数
}elseif($job=='send'){
	if($rs[ifquit]){//针对可退款的情况
		$rmb = $ifsend?abs($rs[totalmoney]):-abs($rs[totalmoney]);
		add_rmb($rs[uid],0,-$rmb,"购买:$rs[title]");
		add_rmb($rs[cuid],$rmb,0,"销售:$rs[title]");
	}
	if(!$rs[ifsend]&&$ifsend){
		//发货后,短信或邮件通知买家
		give_send_msg($rs[uid],$rs);
	}
	$db->query("UPDATE {$_pre}join SET ifsend='$ifsend',sendtime='$timestamp' WHERE id='$id'");
}elseif($act=='del'){
	foreach($iddb AS $key=>$value){
		$db->query("DELETE FROM {$_pre}join WHERE id='$value'");
		$db->query("DELETE FROM {$_pre}content_2 WHERE id='$value'");
		
		extract($db->get_one("SELECT cid FROM `{$_pre}join` WHERE id='$value'"));
		count_join($rs[cid]);	//统计报名人数
	}
}

$rows=15;

if(!$page)
{
	$page=1;
}
$min=($page-1)*$rows;

unset($listdb,$i);



$query = $db->query("SELECT SQL_CALC_FOUND_ROWS B.*,A.* FROM {$_pre}join A LEFT JOIN {$_pre}content_2 B ON A.id=B.id  ORDER BY A.id DESC LIMIT $min,$rows");

$RS=$db->get_one("SELECT FOUND_ROWS()");
$totalNum=$RS['FOUND_ROWS()'];
$showpage=getpage("","","$admin_path&job=$job",$rows,$totalNum);

while($rs = $db->fetch_array($query))
{

	$rs[shop]=$db->get_one("SELECT * FROM {$_pre}content WHERE id='$rs[cid]'");
	$rs[posttime]=date("m-d H:i",$rs[posttime]);
	if($job=='buyer'){
		$rs[pay]=$rs[ifpay]?"<A style='color:red;'>已付款</A>":"<A style='color:blue;'>未付款</A>";
		$rs[send]=$rs[ifsend]?"<A style='color:red;'>已发货</A>":"<A style='color:blue;'>未发货</A>";
	}else{
		$rs[pay]=$rs[ifpay]?"<A HREF='$admin_path&job=pay&id=$rs[id]&cid=$rs[cid]&ifpay=0' style='color:red;'>已付款</A>":"<A HREF='$admin_path&job=pay&id=$rs[id]&cid=$rs[cid]&ifpay=1' style='color:blue;'>未付款</A>";
		$rs[send]=$rs[ifsend]?"<A HREF='$admin_path&job=send&id=$rs[id]&ifsend=0' style='color:red;'>已发货</A>":"<A HREF='$admin_path&job=send&id=$rs[id]&ifsend=1' style='color:blue;'>未发货</A>";
	}

	$listdb[]=$rs;
}

get_admin_html('list');
?>