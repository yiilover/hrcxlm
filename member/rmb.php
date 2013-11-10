<?php
require_once("global.php");

if(!$lfjdb){
	showerr('���ȵ�¼!');
}

if($job=='pwd'){

	if($step==2){
		if(!$pwd){
			showerr('�����벻��Ϊ��!');
		}elseif($pwd!=$pwd2){
			showerr('�������������벻һ��!');
		}elseif($lfjdb['rmb_pwd'] && md5($old_pwd)!=$lfjdb['rmb_pwd']){
			showerr('�����벻��!');
		}

		$array = array(
			'uid'=>$lfjuid,
			'rmb_pwd'=>md5($pwd)
			);
		$userDB -> edit_user($array);
		refreshto('?job=list','���óɹ�',3);
	}

}elseif($job=='get'){
	
	$rsdb = $db->get_one("SELECT * FROM `{$pre}purse` WHERE uid='$lfjuid'");
	$backDB = unserialize($rsdb[config]);
	if( !$backDB[yeepay_id] && !$backDB[tenpay_id] && !$backDB[tenpay_id] && !$backDB[alipay_id] && !$backDB[BACK]){
		refreshto('bank.php?job=set','���������տ��ʺ�!',3);
	}
	if($lfjdb['rmb']<=0){
		showerr("��������Ϊ {$lfjdb[rmb]} Ԫ,�޷���ȡ!");
	}elseif(!$lfjdb['rmb_pwd']){
		refreshto('?job=pwd','�㻹û������֧������,��������֧������!',3);
	}

	if($step==2){
		if(!ereg("^[0-9]+(\.[0-9]{1,2})?$",$RMBmoney)){
			showerr('��������ȷ�Ľ��!');
		}
		if(!$banktype){
			showerr("��ѡ��һ���տ��ʺ�!");
		}elseif($RMBmoney>$lfjdb['rmb']){
			showerr("���ֽ��ܴ�����Ŀ������ {$lfjdb[rmb]} Ԫ");
		}elseif($RMBmoney<1){
			showerr("���ֽ���С��1Ԫ");
		}elseif($lfjdb['rmb_pwd']!=md5($pwd)){
			showerr("֧�����벻��!");
		}
		
		$truename = filtrate($truename);
		$banktype = filtrate($banktype);
		$tel = filtrate($tel);
		$why = filtrate($why);

		list($_k,$_v) = explode(' ',$banktype);

		add_rmb($lfjuid,-$RMBmoney,$RMBmoney,date('m��d��H:i ').'����');
		//��־
		$db->query("INSERT INTO  `{$pre}rmb_getout` ( `uid` , `username`,  `money` ,  `posttime` ,  `banktype` ,  `bankname` ,  `truename` ,  `tel`,  `why`) VALUES (  '$lfjuid', '$lfjid',  '$RMBmoney',  '$timestamp',  '$_k',  '$banktype',  '$truename',  '$tel',  '$why');");

		$id = $db->insert_id();
		
		$query = $db->query("SELECT uid FROM {$pre}memberdata WHERE groupid=3 ORDER BY uid ASC LIMIT 5");
		while($rs = $db->fetch_array($query)){
			//������Ա��վ����Ϣ
			send_msg($rs[uid],"����������","<A HREF='$webdb[admin_url]/index.php?lfj=rmb_getout&job=setpay&id=$id' target='_blank'>��������</A>");
		}
		
		refreshto('?',"�ύ�ɹ������ǽ���3��������������˿�������ʼ�֪ͨ������ע����ա�������������ϵ�ͷ�:{$webdb[member_contact]}",3);
	}

	$backDB[alipay_id] && $backDB[BACK][$backDB[alipay_id]]="֧����";
	$backDB[tenpay_id] && $backDB[BACK][$backDB[tenpay_id].' ']="�Ƹ�ͨ";		//�Ӹ��ո������������ͬ�����ʺ�
	$backDB[yeepay_id] && $backDB[BACK][$backDB[yeepay_id].'  ']="�ױ�֧��";	//�Ӹ��ո������������ͬ�����ʺ�

}elseif($job=='getlog'){
	$query = $db->query("SELECT * FROM {$pre}rmb_getout WHERE uid='$lfjuid' ORDER BY id DESC LIMIT 50");
	while($rs = $db->fetch_array($query)){
		$rs[replytime] = $rs[replytime]?date('Y-m-d H:i:s',$rs[replytime]):'';
		$rs[posttime] = date('Y-m-d H:i:s',$rs[posttime]);
		$rs[pay] = $rs[ifpay] ? '<font color=red>��֧��</font>' : 'δ֧��' ;
		$listdb[] = $rs;
	}

}elseif($act=='del_get_log'){

	if($webdb[ForbidDelRmbGetLog]){
		showerr('ϵͳ��ֹɾ����־');
	}
	$db->query("DELETE FROM {$pre}rmb_getout WHERE uid='$lfjuid' AND id='$id'");

	refreshto("?job=list",'ɾ���ɹ�',1);

}elseif($act=='del_consume'){

	if($webdb[ForbidDelRmbLog]){
		showerr('ϵͳ��ֹɾ����־');
	}
	$db->query("DELETE FROM {$pre}rmb_consume WHERE uid='$lfjuid' AND id='$id'");
	refreshto("?job=list",'ɾ���ɹ�',1);

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
			$rs[state] = '����';
		}elseif($rs[money]>0){
			$rs[state] = '��ֵ';
		}else{
			$rs[state] = '������';
		}
		$listdb[] = $rs;
	}
}



require(ROOT_PATH."member/head.php");
require(dirname(__FILE__)."/template/rmb.htm");
require(ROOT_PATH."member/foot.php");
?>