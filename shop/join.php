<?php
require_once("global.php");
require_once(Mpath."inc/join.inc.php");


if(($action||$job=="edit") && !$lfjuid){
	showerr('�㻹û�е�¼!!');
}
$listdb='';

if(join_init()==false){
	showerr('���ﳵû���κ���Ʒ!');
}


//$totalmoney = number_format($shopnum*$infodb[price],2);
//$totalmoney = $shopnum*$infodb[price];


$mid=2;

/**
*ģ����������ļ�
**/
$field_db = $module_DB[$mid][field];


/**�����ύ���·�������**/
if($action=="postnew")
{
	
	//�Զ����ֶεĺϷ���������ݴ���
	$Module_db->checkpost($field_db,$postdb,'');

	join_post();
	
	unset($id_array);
	foreach($listdb AS $uid=>$array){
		$totalmoney = 0;
		$detail='';
		foreach($array AS $_rs){
			$totalmoney+=$_rs[price]*$p_totalArray[$_rs[id]];
			$detail[] = "$_rs[id]={$p_totalArray[$_rs[id]]}";
		}
		$products = addslashes( implode(',',$detail) );

		$rs=$db->get_one("SELECT * FROM `{$pre}purse` WHERE uid='$uid'");
		$parray=unserialize($rs[config]);
		
		if($postdb[order_sendtype]==2){			//ƽ��
			$totalmoney+=floatval($parray[slow_send]);
		}elseif($postdb[order_sendtype]==3){	//���
			$totalmoney+=floatval($parray[norm_send]);
		}elseif($postdb[order_sendtype]==4){	//EMS
			$totalmoney+=floatval($parray[ems_send]);
		}
		//$totalmoney = number_format($totalmoney,2);
		/*������Ϣ���������*/
		$db->query("INSERT INTO `{$_pre}join` ( `mid` , `cid` , `cuid` ,  `posttime` ,  `uid` , `username` , `yz` , `ip` ,  `totalmoney`,`products`) 
		VALUES (
		'$mid' , '$_rs[id]' , '$uid', '$timestamp','$lfjdb[uid]','$lfjdb[username]','0','$onlineip','$totalmoney','$products')");

		$id = $id_array[] = $db->insert_id();
		

		unset($sqldb);
		$sqldb[]="id='$id'";
		$sqldb[]="uid='$lfjuid'";
		
		/*����жϸ���Ϣ��Ҫ������Щ�ֶε�����*/
		foreach( $field_db AS $key=>$value){
			isset($postdb[$key]) && $sqldb[]="`{$key}`='{$postdb[$key]}'";
		}
		$sql=implode(",",$sqldb);
		$db->query("INSERT INTO `{$_pre}content_$mid` SET $sql");

		$infodb = $db->get_one("SELECT * FROM {$pre}memberdata WHERE uid='$uid'");
		if($webdb[order_send_mail]){
			send_mail($infodb[email],"���пͻ��¶�����","�뾡��鿴<A HREF='$Murl/member/joinshow.php?id=$id' target='_blank'>$Murl/member/joinshow.php?id=$id</A>",0);
		}
		if($webdb[order_send_msg]){
			send_msg($infodb[uid],"���пͻ��¶�����","�뾡��鿴<A HREF='$Murl/member/joinshow.php?id=$id' target='_blank'>$Murl/member/joinshow.php?id=$id</A>");
		}
		if($webdb[order_send_sms] && $infodb[mobphone]){
			sms_send($infodb[mobphone],"���пͻ��¶�����");
		}
	}
	set_cookie('products','');
	//����֧��
	if($postdb['order_paytype']==4){
		if($webdb['daili_receive']){	//����Ա���ջ���
			$ids = implode(',',$id_array);
			if( $webdb['rmb_pay'] && $lfjdb[rmb]>0 ){	//����
				$url = "rmb_pay.php?ids=$ids&to_url=olpay2";
			}else{
				$url = "olpay2.php?ids=$ids";
			}
			echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$url'>";
			exit;
		}else{
			$url = "olpay.php?id=$id_array[0]";
			if(count($id_array)>1){	//����ж����ͬ�̻��Ļ�,��Ҫ�ֶ������֧��.
				unset($id_array[0]);
				set_cookie('olpay_id',implode(',',$id_array));
			}
			echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$url'>";
			exit;
		}
	}else{
		refreshto("./","�����ɹ�,��ȴ�����!");
	}	
}

/*ɾ������,ֱ��ɾ��,������*/
elseif($action=="del")
{
	del_order($id);
	refreshto("./","ɾ���ɹ�");
}

/*�༭����*/
elseif($job=="edit")
{
	$rsdb=$db->get_one("SELECT A.*,B.* FROM `{$_pre}join` A LEFT JOIN `{$_pre}content_$mid` B ON A.id=B.id WHERE A.id='$id'");

	if($rsdb[uid]!=$lfjuid&&!$web_admin)
	{
		showerr("����Ȩ�޸�");
	}

	/*��Ĭ�ϱ���������*/
	$Module_db->formGetVale($field_db,$rsdb);

	$atc="edit";	

//	require(ROOT_PATH."inc/head.php");
//	require(getTpl("post_$mid",$FidTpl['post']));
//	require(ROOT_PATH."inc/foot.php");
require(ROOT_PATH."/shop/template/qibomb_default/head.htm");
require(ROOT_PATH."/shop/template/qibomb_default/post_".$mid.".htm");
require(ROOT_PATH."/shop/template/qibomb_default/foot.htm");
	
	
}

/*�����ύ���������޸�*/
elseif($action=="edit")
{
	$rsdb=$db->get_one("SELECT A.*,B.* FROM `{$_pre}join` A LEFT JOIN `{$_pre}content_$mid` B ON A.id=B.id WHERE A.id='$id' LIMIT 1");

	if($rsdb[uid]!=$lfjuid&&!$web_admin)
	{
		showerr("����Ȩ�޸�");
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
	
	refreshto("$FROMURL","�޸ĳɹ�");
}
else
{
	join_set();

	/*ģ������ʱ,��Щ�ֶ���Ĭ��ֵ*/
	foreach( $field_db AS $key=>$rs){	
		if($rs[form_value]){		
			$rsdb[$key]=$rs[form_value];
		}
	}

	/*��Ĭ�ϱ���������*/
	$Module_db->formGetVale($field_db,$rsdb);

	$atc="postnew";

//	require(ROOT_PATH."inc/head.php");
//	require(getTpl("post_$mid"));
//	require(ROOT_PATH."inc/foot.php");
require(ROOT_PATH."/shop/template/qibomb_default/head.htm");
require(ROOT_PATH."/shop/template/qibomb_default/post_".$mid.".htm");
require(ROOT_PATH."/shop/template/qibomb_default/foot.htm");
}

?>