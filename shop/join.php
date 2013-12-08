<?php
require_once("global.php");
require_once(Mpath."inc/join.inc.php");


if(($action||$job=="edit") && !$lfjuid){
	showerr('你还没有登录!!');
}
$listdb='';

if(join_init()==false){
	showerr('购物车没有任何商品!');
}


//$totalmoney = number_format($shopnum*$infodb[price],2);
//$totalmoney = $shopnum*$infodb[price];


$mid=2;

/**
*模块参数配置文件
**/
$field_db = $module_DB[$mid][field];


/**处理提交的新发表内容**/
if($action=="postnew")
{
	
	//自定义字段的合法检查与数据处理
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
		
		if($postdb[order_sendtype]==2){			//平邮
			$totalmoney+=floatval($parray[slow_send]);
		}elseif($postdb[order_sendtype]==3){	//快递
			$totalmoney+=floatval($parray[norm_send]);
		}elseif($postdb[order_sendtype]==4){	//EMS
			$totalmoney+=floatval($parray[ems_send]);
		}
		//$totalmoney = number_format($totalmoney,2);
		/*往主信息表插入内容*/
		$db->query("INSERT INTO `{$_pre}join` ( `mid` , `cid` , `cuid` ,  `posttime` ,  `uid` , `username` , `yz` , `ip` ,  `totalmoney`,`products`) 
		VALUES (
		'$mid' , '$_rs[id]' , '$uid', '$timestamp','$lfjdb[uid]','$lfjdb[username]','0','$onlineip','$totalmoney','$products')");

		$id = $id_array[] = $db->insert_id();
		

		unset($sqldb);
		$sqldb[]="id='$id'";
		$sqldb[]="uid='$lfjuid'";
		
		/*检查判断辅信息表要插入哪些字段的内容*/
		foreach( $field_db AS $key=>$value){
			isset($postdb[$key]) && $sqldb[]="`{$key}`='{$postdb[$key]}'";
		}
		$sql=implode(",",$sqldb);
		$db->query("INSERT INTO `{$_pre}content_$mid` SET $sql");

		$infodb = $db->get_one("SELECT * FROM {$pre}memberdata WHERE uid='$uid'");
		if($webdb[order_send_mail]){
			send_mail($infodb[email],"你有客户下订单了","请尽快查看<A HREF='$Murl/member/joinshow.php?id=$id' target='_blank'>$Murl/member/joinshow.php?id=$id</A>",0);
		}
		if($webdb[order_send_msg]){
			send_msg($infodb[uid],"你有客户下订单了","请尽快查看<A HREF='$Murl/member/joinshow.php?id=$id' target='_blank'>$Murl/member/joinshow.php?id=$id</A>");
		}
		if($webdb[order_send_sms] && $infodb[mobphone]){
			sms_send($infodb[mobphone],"你有客户下订单了");
		}
	}
	set_cookie('products','');
	//在线支付
	if($postdb['order_paytype']==4){
		if($webdb['daili_receive']){	//管理员代收货款
			$ids = implode(',',$id_array);
			if( $webdb['rmb_pay'] && $lfjdb[rmb]>0 ){	//余额付款
				$url = "rmb_pay.php?ids=$ids&to_url=olpay2";
			}else{
				$url = "olpay2.php?ids=$ids";
			}
			echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$url'>";
			exit;
		}else{
			$url = "olpay.php?id=$id_array[0]";
			if(count($id_array)>1){	//如果有多个不同商户的话,需要分多次在线支付.
				unset($id_array[0]);
				set_cookie('olpay_id',implode(',',$id_array));
			}
			echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$url'>";
			exit;
		}
	}else{
		refreshto("./","订购成功,请等待发货!");
	}	
}

/*删除内容,直接删除,不保留*/
elseif($action=="del")
{
	del_order($id);
	refreshto("./","删除成功");
}

/*编辑内容*/
elseif($job=="edit")
{
	$rsdb=$db->get_one("SELECT A.*,B.* FROM `{$_pre}join` A LEFT JOIN `{$_pre}content_$mid` B ON A.id=B.id WHERE A.id='$id'");

	if($rsdb[uid]!=$lfjuid&&!$web_admin)
	{
		showerr("你无权修改");
	}

	/*表单默认变量作处理*/
	$Module_db->formGetVale($field_db,$rsdb);

	$atc="edit";	

//	require(ROOT_PATH."inc/head.php");
//	require(getTpl("post_$mid",$FidTpl['post']));
//	require(ROOT_PATH."inc/foot.php");
require(ROOT_PATH."/shop/template/qibomb_default/head.htm");
require(ROOT_PATH."/shop/template/qibomb_default/post_".$mid.".htm");
require(ROOT_PATH."/shop/template/qibomb_default/foot.htm");
	
	
}

/*处理提交的内容做修改*/
elseif($action=="edit")
{
	$rsdb=$db->get_one("SELECT A.*,B.* FROM `{$_pre}join` A LEFT JOIN `{$_pre}content_$mid` B ON A.id=B.id WHERE A.id='$id' LIMIT 1");

	if($rsdb[uid]!=$lfjuid&&!$web_admin)
	{
		showerr("你无权修改");
	}

	//自定义字段的合法检查与数据处理
	$Module_db->checkpost($field_db,$postdb,$rsdb);


	/*更新主信息表内容*/
	//$db->query("UPDATE `{$_pre}join` SET title='$postdb[title]' WHERE id='$id'");


	/*检查判断辅信息表要插入哪些字段的内容*/
	unset($sqldb);
	foreach( $field_db AS $key=>$value){
		$sqldb[]="`$key`='{$postdb[$key]}'";
	}	
	$sql=implode(",",$sqldb);

	/*更新辅信息表*/
	$db->query("UPDATE `{$_pre}content_$mid` SET $sql WHERE id='$id'");
	
	refreshto("$FROMURL","修改成功");
}
else
{
	join_set();

	/*模块设置时,有些字段有默认值*/
	foreach( $field_db AS $key=>$rs){	
		if($rs[form_value]){		
			$rsdb[$key]=$rs[form_value];
		}
	}

	/*表单默认变量作处理*/
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