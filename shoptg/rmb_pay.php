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
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=olpay2.php?ids=$ids'>";
	exit;
}

$rs = $db->get_one("SELECT B.*,A.title FROM `{$_pre}join` B LEFT JOIN `{$_pre}content` A ON A.id=B.cid WHERE B.id = '$id'");

if($step==2){
	if(md5($pwd)!=$lfjdb[rmb_pwd]){
		showerr('֧�����벻��!');
	}
	if($lfjdb[rmb]>$rs[totalmoney]){	//����㹻,��֧���ɹ�
		$rmb = abs($rs[totalmoney]);					
		$ifpay = 1;
		if($rs[ifquit]){	//��Կ��˿�����,����ҵĿ��,�Ȳ������̼�
			add_rmb($rs[uid],-$rmb,$rmb,"����� ����:$rs[title]");
		}else{
			add_rmb($lfjuid,-$rmb,0,"����:$rs[title]");
			add_rmb($rs[cuid],$rmb,0,"����:$rs[title]");
		}
	}else{	//����,�ٽ�һ������֧��Ƿ��
		$rmb = abs($lfjdb[rmb]);					
		$ifpay = 0;	
	}
	$db->query("UPDATE {$_pre}join SET ifpay='$ifpay',banktype='rmb',rmb='$rmb' WHERE id='$id'");
	if($ifpay){
		count_join($rs[cid]);	//ͳ�Ʊ�������
		//�����,���Ż��ʼ�֪ͨ�����������
		paymoney_send_msg($lfjuid,$rs);
		
		//�����,���Ż��ʼ�֪ͨ�̼�
		paymoney_send_seller_msg($rs[cuid],$rs);
		refreshto("./","��ϲ�㶩������ɹ�!",20);		
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