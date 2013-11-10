<?php
require_once("global.php");

if(!$lfjdb){
	showerr('请先登录!');
}

if($job=='pwd'){

	if($step==2){
		if(!$pwd){
			showerr('新密码不能为空!');
		}elseif($pwd!=$pwd2){
			showerr('新密码两次输入不一样!');
		}elseif($lfjdb['rmb_pwd'] && md5($old_pwd)!=$lfjdb['rmb_pwd']){
			showerr('旧密码不对!');
		}

		$array = array(
			'uid'=>$lfjuid,
			'rmb_pwd'=>md5($pwd)
			);
		$userDB -> edit_user($array);
		refreshto('?job=list','设置成功',3);
	}

}elseif($job=='get'){
	
	$rsdb = $db->get_one("SELECT * FROM `{$pre}purse` WHERE uid='$lfjuid'");
	$backDB = unserialize($rsdb[config]);
	if( !$backDB[yeepay_id] && !$backDB[tenpay_id] && !$backDB[tenpay_id] && !$backDB[alipay_id] && !$backDB[BACK]){
		refreshto('bank.php?job=set','请先设置收款帐号!',3);
	}
	if($lfjdb['rmb']<=0){
		showerr("你可用余额为 {$lfjdb[rmb]} 元,无法提取!");
	}elseif(!$lfjdb['rmb_pwd']){
		refreshto('?job=pwd','你还没有设置支付密码,请先设置支付密码!',3);
	}

	if($step==2){
		if(!ereg("^[0-9]+(\.[0-9]{1,2})?$",$RMBmoney)){
			showerr('请输入正确的金额!');
		}
		if(!$banktype){
			showerr("请选择一个收款帐号!");
		}elseif($RMBmoney>$lfjdb['rmb']){
			showerr("提现金额不能大于你的可用余额 {$lfjdb[rmb]} 元");
		}elseif($RMBmoney<1){
			showerr("提现金额不能小于1元");
		}elseif($lfjdb['rmb_pwd']!=md5($pwd)){
			showerr("支付密码不对!");
		}
		
		$truename = filtrate($truename);
		$banktype = filtrate($banktype);
		$tel = filtrate($tel);
		$why = filtrate($why);

		list($_k,$_v) = explode(' ',$banktype);

		add_rmb($lfjuid,-$RMBmoney,$RMBmoney,date('m月d日H:i ').'提现');
		//日志
		$db->query("INSERT INTO  `{$pre}rmb_getout` ( `uid` , `username`,  `money` ,  `posttime` ,  `banktype` ,  `bankname` ,  `truename` ,  `tel`,  `why`) VALUES (  '$lfjuid', '$lfjid',  '$RMBmoney',  '$timestamp',  '$_k',  '$banktype',  '$truename',  '$tel',  '$why');");

		$id = $db->insert_id();
		
		$query = $db->query("SELECT uid FROM {$pre}memberdata WHERE groupid=3 ORDER BY uid ASC LIMIT 5");
		while($rs = $db->fetch_array($query)){
			//给管理员发站内信息
			send_msg($rs[uid],"有人提现了","<A HREF='$webdb[admin_url]/index.php?lfj=rmb_getout&job=setpay&id=$id' target='_blank'>请点击详情</A>");
		}
		
		refreshto('?',"提交成功，我们将于3个工作日内审核退款，并电子邮件通知您，请注意查收。如有疑问请联系客服:{$webdb[member_contact]}",3);
	}

	$backDB[alipay_id] && $backDB[BACK][$backDB[alipay_id]]="支付宝";
	$backDB[tenpay_id] && $backDB[BACK][$backDB[tenpay_id].' ']="财付通";		//加个空格是针对与上面同样的帐号
	$backDB[yeepay_id] && $backDB[BACK][$backDB[yeepay_id].'  ']="易宝支付";	//加个空格是针对与上面同样的帐号

}elseif($job=='getlog'){
	$query = $db->query("SELECT * FROM {$pre}rmb_getout WHERE uid='$lfjuid' ORDER BY id DESC LIMIT 50");
	while($rs = $db->fetch_array($query)){
		$rs[replytime] = $rs[replytime]?date('Y-m-d H:i:s',$rs[replytime]):'';
		$rs[posttime] = date('Y-m-d H:i:s',$rs[posttime]);
		$rs[pay] = $rs[ifpay] ? '<font color=red>已支付</font>' : '未支付' ;
		$listdb[] = $rs;
	}

}elseif($act=='del_get_log'){

	if($webdb[ForbidDelRmbGetLog]){
		showerr('系统禁止删除日志');
	}
	$db->query("DELETE FROM {$pre}rmb_getout WHERE uid='$lfjuid' AND id='$id'");

	refreshto("?job=list",'删除成功',1);

}elseif($act=='del_consume'){

	if($webdb[ForbidDelRmbLog]){
		showerr('系统禁止删除日志');
	}
	$db->query("DELETE FROM {$pre}rmb_consume WHERE uid='$lfjuid' AND id='$id'");
	refreshto("?job=list",'删除成功',1);

}else{

	if(!table_field("{$pre}memberdata",'rmb')){
		$db->insert_file(ROOT_PATH."data/rmblog.sql");
		unlink(ROOT_PATH."data/rmblog.sql");
	}

	$rows = 20;
	if($page<1){
		$page = 1;
	}
	$min = ($page - 1)*$rows;
	$showpage = getpage("{$pre}rmb_getout","WHERE uid='$lfjuid'","?job=$job",$rows);
	$query = $db->query("SELECT * FROM {$pre}rmb_consume WHERE uid='$lfjuid' ORDER BY id DESC LIMIT $min,$rows");
	while($rs = $db->fetch_array($query)){
		$rs[posttime] = date('Y-m-d H:i:s',$rs[posttime]);
		if($rs[freeze]){
			$rs[state] = '冻结';
		}elseif($rs[money]>0){
			$rs[state] = '充值';
		}else{
			$rs[state] = '已消费';
		}
		$listdb[] = $rs;
	}
}



require(ROOT_PATH."member/head.php");
require(dirname(__FILE__)."/template/rmb.htm");
require(ROOT_PATH."member/foot.php");
?>