<?php
!function_exists('html') && exit('ERR');
if($job=='list'&&$Apower[rmb_getout])
{
	if(!$page){
		$page=1;
	}
	$rows=50;
	$min=($page-1)*$rows;
	$showpage=getpage("`{$pre}rmb_getout`"," ","?lfj=$lfj&job=$job","$rows");
	$query = $db->query("SELECT * FROM `{$pre}rmb_getout` ORDER BY id DESC LIMIT $min,$rows");
	while($rs = $db->fetch_array($query)){
		$rs[posttime]=date("Y-m-d H:i:s",$rs[posttime]);

		if($rs[ifpay]){
			$rs[ifpay]='<font color=red>已支付<font>';
			$rs[setpay]="<A HREF='?lfj=$lfj&job=view&id=$rs[id]'>查看</A>";
		}else{
			
			$rs[ifpay]='未支付';
			$rs[setpay]="<A HREF='?lfj=$lfj&job=setpay&id=$rs[id]'>确认支付</A>";
		}
		$rs[bankname] = str_replace(' ','<br>',$rs[bankname]);
		$listdb[]=$rs;
	}

	hack_admin_tpl('list');
}
elseif($action=="delete"&&$Apower[rmb_getout])
{
	if($id){
		$db->query("DELETE FROM `{$pre}rmb_getout` WHERE id='$id'");
	}else{
		foreach( $listdb AS $key=>$id){
			$db->query("DELETE FROM `{$pre}rmb_getout` WHERE id='$id'");
		}
	}
	jump("删除成功","$FROMURL","1");
}
elseif($job=='setpay'&&$Apower[rmb_getout])
{
	$rsdb = $db->get_one("SELECT * FROM {$pre}rmb_getout WHERE id='$id'");

	if($rsdb['ifpay'] == 1){
		showmsg('该订单已经支付！');
	}

	$rsdb[posttime] = date('Y-m-d H:i:s',$rsdb[posttime]);
	$rsdb[why] = str_replace("\n",'<br>',$rsdb[why]);
	if(!$rsdb[quitabout]){
		$rsdb[quitabout]="支付金额:{$rsdb[money]}
支付日期:
支付银行:
银行卡号:
银行卡持有者名字:
联系电话:
";
	}
	hack_admin_tpl('setpay');
}
elseif($job=='view'&&$Apower[rmb_getout])
{
	$rsdb = $db->get_one("SELECT * FROM {$pre}rmb_getout WHERE id='$id'");
	$rsdb[posttime] = date('Y-m-d H:i:s',$rsdb[posttime]);
	$rsdb[replytime] = date('Y-m-d H:i:s',$rsdb[replytime]);
	$rsdb[why] = str_replace("\n",'<br>',$rsdb[why]);
	$rsdb[quitabout] = str_replace("\n",'<br>',$rsdb[quitabout]);
	hack_admin_tpl('view');
}
elseif($action=='setpay'&&$Apower[rmb_getout])
{
	$rt = $db->get_one("SELECT * FROM {$pre}rmb_getout WHERE id='$id'");
	if(!$rt){
		showmsg('数据不存在,操作失败！');
	}
	if($rt['ifpay'] == 1){
		showmsg('该订单已经支付！');
	}

	$quitabout = addslashes($quitabout);
	$db->query("UPDATE {$pre}rmb_getout SET ifpay='1',admin='$lfjid',quitabout='$quitabout',replytime='$timestamp' WHERE id='$rt[id]'");

	add_rmb($rt[uid],0,-$rt[money],'提现');

	$m=$userDB->get_info($rt[uid]);

	$quitabout = str_replace("\n",'<br>',$quitabout);
	
	$title = '提现成功!';
	$content = date('m月d日H:i',$rt[posttime])."，你申请的 {$rt[money]} 元已退款到您的账号里{$rt[bankname]}，请查收。<br><A HREF='$webdb[www_url]/member/rmb.php?job=list'>详情请查看</A>，如有疑问请联系客服{$webdb[member_contact]}<br>{$quitabout}";
	send_mail($m[email],$title,$content,0);

	jump("操作成功","?lfj=$lfj&job=list","1");
}

?>