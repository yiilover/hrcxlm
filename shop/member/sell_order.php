<?php
require_once("global.php");

//$webdb[ForbidDelOrder]
if($action=='del'){
	del_order($id);
	refreshto($FROMURL,'',0);
	
}elseif($job=='pay'||$job=='send'){	//����ȷ���տ���ȷ�Ϸ���
	$rsdb=$db->get_one("SELECT * FROM {$_pre}join WHERE id='$id'");
	if($rsdb[cuid]!=$lfjuid){
		showerr("��ûȨ��!");
	}
	if($job=='pay'){
		if($webdb['daili_receive']){
			showerr('ϵͳ���ù���Ա���տ�,����Ȩ������!');
		}
		$ifpay = 1; //��������Ѹ���Ķ���������Ϊδ����
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
			showerr('����Ʒ��û�и���,����ȷ�Ϸ���');
		}
		if(!$rsdb[ifsend]&&$ifsend){
			//������,���Ż��ʼ�֪ͨ���
			give_send_msg($rsdb[uid],$rsdb);
		}
		$db->query("UPDATE {$_pre}join SET ifsend='$ifsend',receive=0 WHERE id='$id'");
		refreshto("?job=edit&id=$id","�������ݺ�,����ͻ���ѯ!",3);
	}
}elseif($job=='edit'){	//�����޸ļ۸����ݵ���
	$rsdb=$db->get_one("SELECT * FROM {$_pre}join WHERE id='$id'");
	if($rsdb[cuid]!=$lfjuid){
		showerr("��ûȨ��!");
	}
	if($step==2){
		$SQL="";
		if(!$rsdb[ifpay]){
			$totalmoney = filtrate($totalmoney);
			$SQL=",totalmoney='$totalmoney'";
		}		
		$emscode = filtrate($emscode);
		$db->query("UPDATE {$_pre}join SET emscode='$emscode'$SQL WHERE id='$id'");
		refreshto('?job=list','�޸ĳɹ�',1);
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
		$rs[pay]="<font style='color:red;'>�Ѹ�</font>";
	}else{
		if($webdb['daili_receive']){
			$rs[pay]="δ��";
		}else{
			$rs[pay]="<A HREF='?job=pay&id=$rs[id]&ifpay=1'>δ��</A>";
		}
	}

	if($rs[receive]=='-1'){
		$rs[send]="<A style='color:blue;' HREF='?job=send&id=$rs[id]&ifsend=1' title='��ǰ״̬δ����,���ȷ�����·���'>�˻���</A>";
	}elseif($rs[ifsend]==1){
		if($rs[receive]==1){
			$rs[send]="<A style='color:red;' title='�ͻ���ǩ�ջ���,���׵�����ɽ���'>�������</A>";
		}else{
			$rs[send]="<A style='color:red;'>�ѷ�</A>";
		}
	}elseif($rs[ifpay]){
		$rs[send]="<A HREF='?job=send&id=$rs[id]&ifsend=1' title='��ǰ״̬δ����,���ȷ�Ϸ���'>δ��</A>";
	}

	
	$rs[receive]!=0 && $rs[noedit]="none";
		
	//��ֹ����ͥɾ��δ����Ķ���
	if(!$rs[ifpay] && $webdb['ForbidSellerDelNoPayOrder']){
		$rs[nodel] = 'none';
	}
	
	//��ֹɾ���Ѹ���Ķ���
	if($rs[ifpay] && $webdb['ForbidDelPayOrder']){
		$rs[nodel] = 'none';
	}

	//����Ա����,��ֹɾ���Ѹ���Ķ���
	if($rs[ifpay] &&  $webdb['ForbidDelPayOrder']){
		$rs[nodel] = 'none';
	}

	$listdb[]=$rs;
}

require(ROOT_PATH."member/head.php");
require(dirname(__FILE__)."/template/sell_order.htm");
require(ROOT_PATH."member/foot.php");
?>