<?php
!function_exists('html') && exit('ERR');
if($job=='list'&&$Apower[rmb_infull])
{
	if(!$page){
		$page=1;
	}
	$rows=50;
	$min=($page-1)*$rows;
	$showpage=getpage("`{$pre}rmb_infull`"," ","?lfj=$lfj&job=$job","$rows");
	$query = $db->query("SELECT * FROM `{$pre}rmb_infull` ORDER BY id DESC LIMIT $min,$rows");
	while($rs = $db->fetch_array($query)){
		$rs[posttime]=date("Y-m-d H:i:s",$rs[posttime]);

		if($rs[ifpay]){
			$rs[ifpay]='<font color=red>已支付<font>';
			$rs[setpay]='';
		}else{
			
			$rs[ifpay]='未支付';
			$rs[setpay]="<A HREF='?lfj=$lfj&action=setpay&id=$rs[id]'>充值</A>";
		}
		$listdb[]=$rs;
	}

	hack_admin_tpl('list');
}
elseif($action=="delete"&&$Apower[rmb_infull])
{
	if($id){
		$db->query("DELETE FROM `{$pre}rmb_infull` WHERE id='$id'");
	}else{
		foreach( $listdb AS $key=>$id){
			$db->query("DELETE FROM `{$pre}rmb_infull` WHERE id='$id'");
		}
	}
	jump("删除成功","$FROMURL","1");
}

elseif($action=='setpay'&&$Apower[rmb_infull])
{
	$rt = $db->get_one("SELECT * FROM {$pre}rmb_infull WHERE id='$id'");
	if(!$rt){
		showmsg('系统中没有您的充值订单，无法完成充值！');
	}
	if($rt['ifpay'] == 1){
		showmsg('该订单已经充值成功！');
	}
	$db->query("UPDATE {$pre}rmb_infull SET ifpay='1' WHERE id='$rt[id]'");

	add_rmb($rt[uid],$rt[money],0,'在线充值');

	jump("充值成功","$FROMURL","1");
}

?>