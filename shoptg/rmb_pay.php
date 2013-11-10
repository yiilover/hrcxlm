<?php
require("global.php");

if(!$lfjuid){
	showerr('请先登录!');
}elseif(!$webdb['daili_receive']){
	showerr('系统未启用帮商家代收货款!');
}elseif(!$webdb['rmb_pay']){
	showerr('系统未启用余额付款功能!');
}elseif($lfjdb[rmb]<=0){
	showerr('你可用余额为0!');
}

if($job=='goto'){	//用户拒绝用余额付款
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=olpay2.php?ids=$ids'>";
	exit;
}

$rs = $db->get_one("SELECT B.*,A.title FROM `{$_pre}join` B LEFT JOIN `{$_pre}content` A ON A.id=B.cid WHERE B.id = '$id'");

if($step==2){
	if(md5($pwd)!=$lfjdb[rmb_pwd]){
		showerr('支付密码不对!');
	}
	if($lfjdb[rmb]>$rs[totalmoney]){	//余额足够,则支付成功
		$rmb = abs($rs[totalmoney]);					
		$ifpay = 1;
		if($rs[ifquit]){	//针对可退款的情况,把买家的款冻结,先不打款给商家
			add_rmb($rs[uid],-$rmb,$rmb,"冻结款 购买:$rs[title]");
		}else{
			add_rmb($lfjuid,-$rmb,0,"购买:$rs[title]");
			add_rmb($rs[cuid],$rmb,0,"销售:$rs[title]");
		}
	}else{	//余额不够,再进一步在线支付欠款
		$rmb = abs($lfjdb[rmb]);					
		$ifpay = 0;	
	}
	$db->query("UPDATE {$_pre}join SET ifpay='$ifpay',banktype='rmb',rmb='$rmb' WHERE id='$id'");
	if($ifpay){
		count_join($rs[cid]);	//统计报名人数
		//付款后,短信或邮件通知买家消费密码
		paymoney_send_msg($lfjuid,$rs);
		
		//付款后,短信或邮件通知商家
		paymoney_send_seller_msg($rs[cuid],$rs);
		refreshto("./","恭喜你订单付款成功!",20);		
	}else{
		echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=olpay2.php?ids=$id'>";
	}
	exit;
}

$ids = $id;
$totalmoney = $rs[totalmoney];

require(ROOT_PATH."inc/head.php");
require(getTpl("rmb_pay"));
require(ROOT_PATH."inc/foot.php");

?>