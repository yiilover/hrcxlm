<?php
require_once("global.php");

if(!$lfjuid){
	showerr('�㻹û�е�¼!!');
}

$fidDB=$db->get_one("SELECT A.* FROM {$_pre}sort A WHERE A.fid='$fid'");

if(!$fidDB){
	showerr("FID����!");
}


$infodb=$db->get_one("SELECT B.*,A.*,D.email,D.mobphone FROM `{$_pre}content` A LEFT JOIN `{$_pre}content_$fidDB[mid]` B ON A.id=B.id LEFT JOIN `{$pre}memberdata` D ON A.uid=D.uid WHERE A.id='$cid'");


if(!$infodb){
	showerr("���ݲ�����");
}elseif($infodb[fid]!=$fid){
	showerr("FID����!!!");
}

$infodb[end_time] && $infodb[end_time] = strtotime("$infodb[end_time] 23:59:59");
if($infodb[end_time]<$timestamp){
	showerr("��Ѿ�����,�벻Ҫ�ټ�������!!!");
}

$totalmoney = $shopnum*$infodb[price];
//$totalmoney = number_format($shopnum*$infodb[price],2);
$mid=2;

/**
*ģ����������ļ�
**/
$field_db = $module_DB[$mid][field];


/**�����ύ���·�������**/
if($action=="postnew")
{
	if($shopnum<1){
		showerr("������������С��1!");
	}
	
	//if($infodb[limit_num]>0 && $shopnum>$infodb[limit_num]){
		//showerr("�����������ܴ��� $infodb[limit_num]");
	//}
	
	if($infodb[limit_num]>0){
		$ts = $db->get_one("SELECT * FROM `{$_pre}join` WHERE uid='$lfjuid' AND cid='$cid' AND ifpay=1");
		if( ($ts[shopnum]+$shopnum)>$infodb[limit_num] ){
			showerr("�����������ܴ��� $infodb[limit_num]");
		}
	}
	
	if(!$postdb[order_mobphone]&&!$postdb[order_email]){
		showerr("�ֻ������䲻��ͬʱΪ��!");
	}elseif($postdb[order_mobphone] && !eregi("^1([0-9]{10})$",$postdb[order_mobphone]) ){
		showerr("�ֻ���������!");
	}elseif($postdb[order_email] && !ereg("^[-a-zA-Z0-9_\.]+\@([0-9A-Za-z][0-9A-Za-z-]+\.)+[A-Za-z]{2,5}$",$postdb[order_email]) ){
		showerr("��������!");
	}

	//�Զ����ֶεĺϷ���������ݴ���
	$Module_db->checkpost($field_db,$postdb,'');

	$rs=$db->get_one("SELECT * FROM `{$pre}purse` WHERE uid='$infodb[uid]'");
	$array=unserialize($rs[config]);
	$totalmoney = str_replace(",", "", $totalmoney);
	if($postdb[order_sendtype]==2){			//ƽ��
		$totalmoney+=$array[slow_send];
	}elseif($postdb[order_sendtype]==3){	//���
		$totalmoney+=$array[norm_send];
	}elseif($postdb[order_sendtype]==4){	//EMS
		$totalmoney+=$array[ems_send];
	}
	//$totalmoney = number_format($shopnum*$infodb[price],2);
	$password = rands(10);	//��������
	
	//����֧�ֵ����˿�����Ҫ������.
	$endtime = $infodb[ifquit]?$infodb[end_time]:0;
	/*������Ϣ���������*/
	$db->query("INSERT INTO `{$_pre}join` ( `mid` , `cid` , `cuid` , `fid` ,  `posttime` ,  `uid` , `username` , `yz` , `ip` , `shopnum` , `totalmoney` ,`password` ,`endtime` ,`ifquit` ) VALUES ('$mid','$cid','$infodb[uid]', '$fid','$timestamp','$lfjdb[uid]','$lfjdb[username]','0','$onlineip','$shopnum','$totalmoney','$password','$endtime','$infodb[ifquit]')");

	$id = $db->insert_id();

	unset($sqldb);
	$sqldb[]="id='$id'";
	$sqldb[]="fid='$fid'";
	$sqldb[]="uid='$lfjuid'";

	
	/*����жϸ���Ϣ��Ҫ������Щ�ֶε�����*/
	foreach( $field_db AS $key=>$value){
		isset($postdb[$key]) && $sqldb[]="`{$key}`='{$postdb[$key]}'";
	}

	$sql=implode(",",$sqldb);

	$db->query("INSERT INTO `{$_pre}content_$mid` SET $sql");

	//$db->query("UPDATE {$_pre}content SET join_num=join_num+'$shopnum' WHERE id='$cid'");	
	count_join($cid);	//ͳ�Ʊ�������

	if($webdb[order_send_mail]){
		send_mail($infodb[email],"���пͻ��¶�����","�뾡��鿴<A HREF='$Murl/member/joinshow.php?fid=$fid&id=$id' target='_blank'>$Murl/member/joinshow.php?fid=$fid&id=$id</A>",0);
	}
	if($webdb[order_send_msg]){
		send_msg($infodb[uid],"���пͻ��¶�����","�뾡��鿴<A HREF='$Murl/member/joinshow.php?fid=$fid&id=$id' target='_blank'>$Murl/member/joinshow.php?fid=$fid&id=$id</A>");
	}
	
	
	if($webdb[order_send_sms] && $infodb[mobphone]){
		$array = array('order_paytype'=>$postdb['order_paytype']);
		$Module_db->showfield($field_db,$array,'show');
		sms_send($infodb[mobphone],"�û�:{$lfjid} ".date("m��d��H:i")." ����:{$infodb[title]},����:{$shopnum},Ӧ��:{$totalmoney}[δ֧��] {$array[order_paytype]},��������:{$password}");
	}

	if($webdb[order_send_self_sms] && $postdb[order_mobphone]){
		sms_send($postdb[order_mobphone],"�𾴵��û�����".date("m��d��H:i").",����{$infodb[title]},����{$shopnum},��ϵ��ʽ:{$infodb[mobphone]},������:{$array[id]},��������:{$array[password]}[��й],�뾡�츶��!");
	}

	//����֧��
	if($postdb['order_paytype']==4){
		header("location:olpay.php?id=$id&fid=$fid");
		exit;
	}else{
		refreshto("bencandy.php?city_id=$infodb[city_id]&fid=$fid&id=$cid","�����ɹ�,�����ĵȴ��̼һ�Ӧ!");
	}	
}

/*ɾ������,ֱ��ɾ��,������*/
elseif($action=="del")
{
	del_order($id);
	refreshto($FROMURL,"ɾ���ɹ�");
}

/*�༭����*/
elseif($job=="edit")
{
	$rsdb=$db->get_one("SELECT A.*,B.* FROM `{$_pre}join` A LEFT JOIN `{$_pre}content_$mid` B ON A.id=B.id WHERE A.id='$id'");

	if($rsdb[uid]!=$lfjuid&&!$web_admin)
	{
		showerr("����Ȩ�޸�");
	}

	$hownum=$rsdb[shopnum];

	/*��Ĭ�ϱ���������*/
	$Module_db->formGetVale($field_db,$rsdb);

	$atc="edit";	

	require(ROOT_PATH."inc/head.php");
	require(getTpl($infodb[simple_order]?"post_simple":"post_$mid"));
	require(ROOT_PATH."inc/foot.php");
}

/*�����ύ���������޸�*/
elseif($action=="edit")
{
	if($shopnum<1){
		showerr("�����Ĳ�Ʒ����С��һ��!");
	}
	$rsdb=$db->get_one("SELECT A.*,B.* FROM `{$_pre}join` A LEFT JOIN `{$_pre}content_$mid` B ON A.id=B.id WHERE A.id='$id' LIMIT 1");

	if($rsdb[uid]!=$lfjuid&&!$web_admin)
	{
		showerr("����Ȩ�޸�");
	}

	if($rsdb[ifpay]&&$rsdb[shopnum]!=$shopnum){
		showerr("�Ѹ���Ķ���,�����޸�����!");
	}

	//�Զ����ֶεĺϷ���������ݴ���
	$Module_db->checkpost($field_db,$postdb,$rsdb);


	/*��������Ϣ������*/
	//$db->query("UPDATE `{$_pre}join` SET title='$postdb[title]' WHERE id='$id'");


	/*����жϸ���Ϣ��Ҫ������Щ�ֶε�����*/
	unset($sqldb);
	foreach( $field_db AS $key=>$value){
		$sqldb[]="`$key`='{$postdb[$key]}'";
	}	
	$sql=implode(",",$sqldb);

	/*���¸���Ϣ��*/
	$db->query("UPDATE `{$_pre}content_$mid` SET $sql WHERE id='$id'");
	$db->query("UPDATE `{$_pre}join` SET shopnum='$shopnum' WHERE id='$id'");
	
	refreshto("bencandy.php?city_id=$infodb[city_id]&fid=$fid&id=$cid","�޸ĳɹ�");
}
else
{
	if(!$web_admin && $infodb[uid]==$lfjuid){
		showerr("�㲻�ܶ����Լ���������Ϣ!");
	}


	$rsdb[order_username] = $lfjdb[truename];
	$rsdb[order_phone] = $lfjdb[telephone];
	$rsdb[order_mobphone] = $lfjdb[mobphone];
	$rsdb[order_email] = $lfjdb[email];
	$rsdb[order_qq] = $lfjdb[oicq];
	$rsdb[order_postcode] = $lfjdb[postalcode];
	$rsdb[order_address] = $lfjdb[address];


	/*ģ������ʱ,��Щ�ֶ���Ĭ��ֵ*/
	foreach( $field_db AS $key=>$rs){	
		if($rs[form_value]){		
			$rsdb[$key]=$rs[form_value];
		}
	}

	$rs=$db->get_one("SELECT * FROM `{$pre}purse` WHERE uid='$infodb[uid]'");
	$conf=unserialize($rs[config]);

	$conf[norm_send] = intval($conf[norm_send]);
	$conf[ems_send] = intval($conf[ems_send]);
	$conf[slow_send] = intval($conf[slow_send]);

	/*��Ĭ�ϱ���������*/
	$Module_db->formGetVale($field_db,$rsdb);

	$atc="postnew";
	$infodb[simple_order] && $rsdb[order_paytype]['4']=' checked ';
	require(ROOT_PATH."inc/head.php");
	require(getTpl($infodb[simple_order]?"post_simple":"post_$mid"));
	require(ROOT_PATH."inc/foot.php");
}


?>