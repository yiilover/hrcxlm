<?php
require("global.php");

if(!$lfjuid){
	showerr('���ȵ�¼!');
}elseif(!$webdb['daili_receive']){
	showerr('ϵͳδ���ð��̼Ҵ��ջ���!');
}elseif(!$webdb['rmb_pay']){
	showerr('ϵͳδ���������!');
}elseif($lfjdb[rmb]<=0){
	showerr('��������Ϊ0!');
}

if($job=='goto'){	//�û��ܾ�������
	if($to_url=='olpay'){
		$url = "olpay.php?from_rmbpay=1&id=$ids";	//֮ǰֻ����һ��ID����		
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
	showerr('���ݲ�����!');
}
$query = $db->query("SELECT B.*,A.title FROM `{$_pre}join` B LEFT JOIN `{$_pre}content` A ON A.id=B.cid WHERE B.id IN (".implode(',',$idArray).") ORDER BY B.totalmoney ASC");
while($rs = $db->fetch_array($query)){
	if($step==2 && $lfjdb[rmb]>0){	//$lfjdb[rmb]������,���ֵ�ǲ����ڱ�С��
		if(md5($pwd)!=$lfjdb[rmb_pwd]){
			showerr('֧�����벻��!');
		}
		if($lfjdb[rmb]>$rs[totalmoney]){	//����㹻,��֧���ɹ�
			$rmb = abs($rs[totalmoney]);
			add_rmb($lfjuid,-$rmb,0,"����:$rs[title]");	//��־,����ж����Ʒ�Ļ�,ֻ��ʾ��һ��
			add_rmb($rs[cuid],$rmb,0,"����:$rs[title]");
			$ifpay = 1;	
			$array_id = explode(',',$rs[products]);
			foreach($array_id  AS $key=>$value){
				$products = explode('=',$value);
				shop_storage_change($products[0],$products[1]);	//�������ĵ���
				shop_give_money($products[0],$lfjuid);	//����Ʒ���ͻ���
			}			
			unset($idArray[$rs[id]]);
		}else{	//����,�ȸ����ִ���,Ȼ���ٽ�һ������֧��Ƿ��
			$rmb = abs($lfjdb[rmb]);
			//add_rmb($lfjuid,-$rmb,0,"��������:$rs[title]");	//��־,����ж����Ʒ�Ļ�,ֻ��ʾ��һ��
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
			$url = "olpay.php?id=$ids";	//֮ǰֻ����һ��ID����		
		}else{
			$url = "olpay2.php?ids=".implode(',',$idArray);
		}
		echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$url'>";
		exit;
	}else{
		refreshto("./","��ϲ�㶩������ɹ�!",60);
	}
}


require(ROOT_PATH."inc/head.php");
require(getTpl("rmb_pay"));
require(ROOT_PATH."inc/foot.php");

?>