<?php
!function_exists('html') && exit('ERR');

ck_power('order');

if($id){
	$rs = $db->get_one("SELECT * FROM `{$_pre}join` WHERE id='$id'");
}

if($job=='pay'){
	if($ifpay==1 && $webdb['daili_receive']){//����Ա���ջ���
		$rmb = $rs[totalmoney]-$rs[rmb];
		if($rs[ifquit]){	//��Կ��˿�����
			add_rmb($rs[uid],-$rmb,$rmb,"����� ����:$rs[title]");
		}else{
			add_rmb($rs[uid],-$rmb,0,"����:$rs[title]");
			add_rmb($rs[cuid],$rmb,0,"����:$rs[title]");
		}
	}
	$db->query("UPDATE {$_pre}join SET ifpay='$ifpay' WHERE id='$id'");
	count_join($rs[cid]);	//ͳ�Ʊ�������
}elseif($job=='send'){
	if($rs[ifquit]){//��Կ��˿�����
		$rmb = $ifsend?abs($rs[totalmoney]):-abs($rs[totalmoney]);
		add_rmb($rs[uid],0,-$rmb,"����:$rs[title]");
		add_rmb($rs[cuid],$rmb,0,"����:$rs[title]");
	}
	if(!$rs[ifsend]&&$ifsend){
		//������,���Ż��ʼ�֪ͨ���
		give_send_msg($rs[uid],$rs);
	}
	$db->query("UPDATE {$_pre}join SET ifsend='$ifsend',sendtime='$timestamp' WHERE id='$id'");
}elseif($act=='del'){
	foreach($iddb AS $key=>$value){
		$db->query("DELETE FROM {$_pre}join WHERE id='$value'");
		$db->query("DELETE FROM {$_pre}content_2 WHERE id='$value'");
		
		extract($db->get_one("SELECT cid FROM `{$_pre}join` WHERE id='$value'"));
		count_join($rs[cid]);	//ͳ�Ʊ�������
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
		$rs[pay]=$rs[ifpay]?"<A style='color:red;'>�Ѹ���</A>":"<A style='color:blue;'>δ����</A>";
		$rs[send]=$rs[ifsend]?"<A style='color:red;'>�ѷ���</A>":"<A style='color:blue;'>δ����</A>";
	}else{
		$rs[pay]=$rs[ifpay]?"<A HREF='$admin_path&job=pay&id=$rs[id]&cid=$rs[cid]&ifpay=0' style='color:red;'>�Ѹ���</A>":"<A HREF='$admin_path&job=pay&id=$rs[id]&cid=$rs[cid]&ifpay=1' style='color:blue;'>δ����</A>";
		$rs[send]=$rs[ifsend]?"<A HREF='$admin_path&job=send&id=$rs[id]&ifsend=0' style='color:red;'>�ѷ���</A>":"<A HREF='$admin_path&job=send&id=$rs[id]&ifsend=1' style='color:blue;'>δ����</A>";
	}

	$listdb[]=$rs;
}

get_admin_html('list');
?>