<?php
require_once("global.php");

//$webdb[ForbidDelOrder]
if($action=='del'){
	del_order($id);
	refreshto($FROMURL,'',0);
	
}elseif($job=='pay'||$job=='send'){	//卖家确认收款与确认发货
	$rsdb=$db->get_one("SELECT * FROM {$_pre}join WHERE id='$id'");
	if($rsdb[cuid]!=$lfjuid){
		showerr("你没权限!");
	}
	if($job=='pay'){
		if($webdb['daili_receive']){
			showerr('系统设置管理员代收款,你无权再设置!');
		}
		$ifpay = 1; //不允许把已付款的订单再设置为未付款
		$db->query("UPDATE {$_pre}join SET ifpay='$ifpay' WHERE id='$id'");
		
		$d = explode(',',$rsdb['products']);
		foreach($d AS $v){
			list($pid,$pnum)=explode('=',$v);
			$pnum = abs($pnum);
			$db->query("UPDATE {$_pre}content SET sellnum=sellnum+$pnum WHERE id='$pid'");
			$db->query("UPDATE {$_pre}content_1 SET storage=storage-$pnum WHERE id='$pid'");
		}
	}elseif($job=='send'){
		if($ifsend && !$rsdb[ifpay]){
			showerr('该商品还没有付款,不能确认发货');
		}
		if(!$rsdb[ifsend]&&$ifsend){
			//发货后,短信或邮件通知买家
			give_send_msg($rsdb[uid],$rsdb);
		}
		$db->query("UPDATE {$_pre}join SET ifsend='$ifsend',receive=0 WHERE id='$id'");
		refreshto("?job=edit&id=$id","请输入快递号,方便客户查询!",3);
	}
}elseif($job=='edit'){	//卖家修改价格与快递单号
	$rsdb=$db->get_one("SELECT * FROM {$_pre}join WHERE id='$id'");
	if($rsdb[cuid]!=$lfjuid){
		showerr("你没权限!");
	}
	if($step==2){
		$SQL="";
		if(!$rsdb[ifpay]){
			$totalmoney = filtrate($totalmoney);
			$SQL=",totalmoney='$totalmoney'";
		}		
		$emscode = filtrate($emscode);
		$db->query("UPDATE {$_pre}join SET emscode='$emscode'$SQL WHERE id='$id'");
		refreshto('?job=list','修改成功',1);
	}
	require(ROOT_PATH."member/head.php");
	require(dirname(__FILE__)."/"."template/order_edit.htm");
	require(ROOT_PATH."member/foot.php");
	exit;
}

$rows=15;

if(!$page){
	$page=1;
}
$min=($page-1)*$rows;


unset($listdb,$i);

$query = $db->query("SELECT SQL_CALC_FOUND_ROWS A.*,B.* FROM {$_pre}join A LEFT JOIN {$_pre}content_2 B ON A.id=B.id WHERE A.cuid='$lfjuid' ORDER BY A.id DESC LIMIT $min,$rows");

$RS=$db->get_one("SELECT FOUND_ROWS()");
$totalNum=$RS['FOUND_ROWS()'];
$showpage=getpage("","","?job=$job",$rows,$totalNum);

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

	if($rs[ifpay]){
		$rs[pay]="<font style='color:red;'>已付</font>";
	}else{
		if($webdb['daili_receive']){
			$rs[pay]="未付";
		}else{
			$rs[pay]="<A HREF='?job=pay&id=$rs[id]&ifpay=1'>未付</A>";
		}
	}

	if($rs[receive]=='-1'){
		$rs[send]="<A style='color:blue;' HREF='?job=send&id=$rs[id]&ifsend=1' title='当前状态未发货,点击确认重新发货'>退货中</A>";
	}elseif($rs[ifsend]==1){
		if($rs[receive]==1){
			$rs[send]="<A style='color:red;' title='客户已签收货物,交易到此完成结束'>交易完成</A>";
		}else{
			$rs[send]="<A style='color:red;'>已发</A>";
		}
	}elseif($rs[ifpay]){
		$rs[send]="<A HREF='?job=send&id=$rs[id]&ifsend=1' title='当前状态未发货,点击确认发货'>未发</A>";
	}

	
	$rs[receive]!=0 && $rs[noedit]="none";
		
	//禁止卖家庭删除未付款的订单
	if(!$rs[ifpay] && $webdb['ForbidSellerDelNoPayOrder']){
		$rs[nodel] = 'none';
	}
	
	//禁止删除已付款的订单
	if($rs[ifpay] && $webdb['ForbidDelPayOrder']){
		$rs[nodel] = 'none';
	}

	//管理员除处,禁止删除已付款的订单
	if($rs[ifpay] &&  $webdb['ForbidDelPayOrder']){
		$rs[nodel] = 'none';
	}

	$listdb[]=$rs;
}

require(ROOT_PATH."member/head.php");
require(dirname(__FILE__)."/template/sell_order.htm");
require(ROOT_PATH."member/foot.php");
?>