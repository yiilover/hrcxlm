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
	if($to_url=='olpay'){
		$url = "olpay.php?from_rmbpay=1&id=$ids";	//之前只传递一个ID过来		
	}else{
		$url = "olpay2.php?from_rmbpay=1&ids=$ids";
	}
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$url'>";
	exit;
}

$idArray = $totalmoney = '';
$detail = explode(',',$ids);
foreach($detail AS $key=>$value){
	$idArray[intval($value)] = intval($value);
}
if(!$idArray){
	showerr('数据不存在!');
}
$query = $db->query("SELECT B.*,A.title FROM `{$_pre}join` B LEFT JOIN `{$_pre}content` A ON A.id=B.cid WHERE B.id IN (".implode(',',$idArray).") ORDER BY B.totalmoney ASC");
while($rs = $db->fetch_array($query)){
	if($step==2 && $lfjdb[rmb]>0){	//$lfjdb[rmb]在这里,这个值是不断在变小的
		if(md5($pwd)!=$lfjdb[rmb_pwd]){
			showerr('支付密码不对!');
		}
		if($lfjdb[rmb]>$rs[totalmoney]){	//余额足够,则支付成功
			$rmb = abs($rs[totalmoney]);
			add_rmb($lfjuid,-$rmb,0,"购买:$rs[title]");	//日志,如果有多个商品的话,只显示第一个
			add_rmb($rs[cuid],$rmb,0,"销售:$rs[title]");
			$ifpay = 1;	
			$array_id = explode(',',$rs[products]);
			foreach($array_id  AS $key=>$value){
				$products = explode('=',$value);
				shop_storage_change($products[0],$products[1]);	//货存量的调整
				shop_give_money($products[0],$lfjuid);	//买商品赠送积分
			}			
			unset($idArray[$rs[id]]);
		}else{	//余额不够,先付部分贷款,然后再进一步在线支付欠款
			$rmb = abs($lfjdb[rmb]);
			//add_rmb($lfjuid,-$rmb,0,"分批购买:$rs[title]");	//日志,如果有多个商品的话,只显示第一个
			$ifpay = 0;			
		}
		$lfjdb[rmb] = $lfjdb[rmb] - $rmb;
		$db->query("UPDATE {$_pre}join SET ifpay='$ifpay',banktype='rmb',rmb='$rmb' WHERE id='$rs[id]'");
		
	}
	//$totalmoney += $rs[totalmoney];
}

if($step==2){
	if($idArray){
		if($to_url=='olpay'){
			$url = "olpay.php?id=$ids";	//之前只传递一个ID过来		
		}else{
			$url = "olpay2.php?ids=".implode(',',$idArray);
		}
		echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$url'>";
		exit;
	}else{
		refreshto("./","恭喜你订单付款成功!",60);
	}
}


require(ROOT_PATH."inc/head.php");
require(getTpl("rmb_pay"));
require(ROOT_PATH."inc/foot.php");

?>