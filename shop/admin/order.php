<?php
!function_exists('html') && exit('ERR');

ck_power('order');

if($id){
	$rs = $db->get_one("SELECT * FROM `{$_pre}join` WHERE id='$id'");
}

if($job=='pay'){

	$db->query("UPDATE {$_pre}join SET ifpay='$ifpay' WHERE id='$id'");
	
	if($ifpay==1){
	
		if($webdb['daili_receive']){//����Ա���ջ���
			$rmb = $rs[totalmoney]-$rs[rmb];
			add_rmb($rs[uid],-$rmb,0,"����:$rs[title]");
			add_rmb($rs[cuid],$rmb,0,"����:$rs[title]");
		}
		
		$d = explode(',',$rs['products']);
		foreach($d AS $v){
			list($pid,$pnum)=explode('=',$v);
			shop_storage_change($pid,$pnum);	//�������ĵ���
			shop_give_money($pid,$rs[uid]);	//����Ʒ���ͻ���
		}		
	}

}elseif($job=='send'){
	$db->query("UPDATE {$_pre}join SET ifsend='$ifsend' WHERE id='$id'");
}elseif($act=='del'){
	foreach($iddb AS $key=>$value){
		$db->query("DELETE FROM {$_pre}join WHERE id='$value'");
		$db->query("DELETE FROM {$_pre}content_2 WHERE id='$value'");
	}
}

$rows=15;

if(!$page)
{
	$page=1;
}
$min=($page-1)*$rows;

unset($listdb,$i);

$SQL=" WHERE 1 ";
$cuid && $SQL.=" AND A.cuid='$cuid' ";
$year && $month && $SQL.=" AND FROM_UNIXTIME( A.posttime, '%Y%m' ) ='$year$month' ";

$query = $db->query("SELECT SQL_CALC_FOUND_ROWS B.*,A.* FROM {$_pre}join A LEFT JOIN {$_pre}content_2 B ON A.id=B.id $SQL ORDER BY A.id DESC LIMIT $min,$rows");

$RS=$db->get_one("SELECT FOUND_ROWS()");
$totalNum=$RS['FOUND_ROWS()'];
$showpage=getpage("","","$admin_path&job=$job",$rows,$totalNum);

while($rs = $db->fetch_array($query))
{

	$id_array=array(intval($rs[cid]));
	$detail = explode(',',$rs[products]);
	foreach($detail AS $value){
		list($pid,$pnum) = explode('=',$value);
		$id_array[] = intval($pid);

	}
	$query2 = $db->query("SELECT * FROM {$_pre}content WHERE id IN (".implode(',',$id_array).")");
	while($rs2 = $db->fetch_array($query2)){
		$rs['plist'][]=$rs2;
	}

	$rs[posttime]=date("m-d H:i",$rs[posttime]);
	if($job=='buyer'){
		$rs[pay]=$rs[ifpay]?"<A style='color:red;'>�Ѹ���</A>":"<A style='color:blue;'>δ����</A>";
		$rs[send]=$rs[ifsend]?"<A style='color:red;'>�ѷ���</A>":"<A style='color:blue;'>δ����</A>";
	}else{
		$rs[pay]=$rs[ifpay]?"<A HREF='$admin_path&job=pay&id=$rs[id]&ifpay=0' style='color:red;'>�Ѹ���</A>":"<A HREF='$admin_path&job=pay&id=$rs[id]&ifpay=1' style='color:blue;'>δ����</A>";
		$rs[send]=$rs[ifsend]?"<A HREF='$admin_path&job=send&id=$rs[id]&ifsend=0' style='color:red;'>�ѷ���</A>":"<A HREF='$admin_path&job=send&id=$rs[id]&ifsend=1' style='color:blue;'>δ����</A>";
	}
	$rs[rmb] && $rs[totalmoney].=" (����Ѹ�{$rs[rmb]})";

	$listdb[]=$rs;
}

get_admin_html('list');
?>