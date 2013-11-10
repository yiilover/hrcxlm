<?php
require_once("global.php");

if(!$lfjuid){
	showerr('你还没有登录!!');
}

$fidDB=$db->get_one("SELECT A.* FROM {$_pre}sort A WHERE A.fid='$fid'");

if(!$fidDB){
	showerr("FID有误!");
}


$infodb=$db->get_one("SELECT B.*,A.*,D.email,D.mobphone FROM `{$_pre}content` A LEFT JOIN `{$_pre}content_$fidDB[mid]` B ON A.id=B.id LEFT JOIN `{$pre}memberdata` D ON A.uid=D.uid WHERE A.id='$cid'");


if(!$infodb){
	showerr("内容不存在");
}elseif($infodb[fid]!=$fid){
	showerr("FID有误!!!");
}

$infodb[end_time] && $infodb[end_time] = strtotime("$infodb[end_time] 23:59:59");
if($infodb[end_time]<$timestamp){
	showerr("活动已经结束,请不要再继续参与!!!");
}

$totalmoney = $shopnum*$infodb[price];
//$totalmoney = number_format($shopnum*$infodb[price],2);
$mid=2;

/**
*模块参数配置文件
**/
$field_db = $module_DB[$mid][field];


/**处理提交的新发表内容**/
if($action=="postnew")
{
	if($shopnum<1){
		showerr("订购数量不能小于1!");
	}
	
	//if($infodb[limit_num]>0 && $shopnum>$infodb[limit_num]){
		//showerr("订购数量不能大于 $infodb[limit_num]");
	//}
	
	if($infodb[limit_num]>0){
		$ts = $db->get_one("SELECT * FROM `{$_pre}join` WHERE uid='$lfjuid' AND cid='$cid' AND ifpay=1");
		if( ($ts[shopnum]+$shopnum)>$infodb[limit_num] ){
			showerr("订购数量不能大于 $infodb[limit_num]");
		}
	}
	
	if(!$postdb[order_mobphone]&&!$postdb[order_email]){
		showerr("手机或邮箱不能同时为空!");
	}elseif($postdb[order_mobphone] && !eregi("^1([0-9]{10})$",$postdb[order_mobphone]) ){
		showerr("手机号码有误!");
	}elseif($postdb[order_email] && !ereg("^[-a-zA-Z0-9_\.]+\@([0-9A-Za-z][0-9A-Za-z-]+\.)+[A-Za-z]{2,5}$",$postdb[order_email]) ){
		showerr("邮箱有误!");
	}

	//自定义字段的合法检查与数据处理
	$Module_db->checkpost($field_db,$postdb,'');

	$rs=$db->get_one("SELECT * FROM `{$pre}purse` WHERE uid='$infodb[uid]'");
	$array=unserialize($rs[config]);
	$totalmoney = str_replace(",", "", $totalmoney);
	if($postdb[order_sendtype]==2){			//平邮
		$totalmoney+=$array[slow_send];
	}elseif($postdb[order_sendtype]==3){	//快递
		$totalmoney+=$array[norm_send];
	}elseif($postdb[order_sendtype]==4){	//EMS
		$totalmoney+=$array[ems_send];
	}
	//$totalmoney = number_format($shopnum*$infodb[price],2);
	$password = rands(10);	//消费密码
	
	//对于支持到期退款的情况要做处理.
	$endtime = $infodb[ifquit]?$infodb[end_time]:0;
	/*往主信息表插入内容*/
	$db->query("INSERT INTO `{$_pre}join` ( `mid` , `cid` , `cuid` , `fid` ,  `posttime` ,  `uid` , `username` , `yz` , `ip` , `shopnum` , `totalmoney` ,`password` ,`endtime` ,`ifquit` ) VALUES ('$mid','$cid','$infodb[uid]', '$fid','$timestamp','$lfjdb[uid]','$lfjdb[username]','0','$onlineip','$shopnum','$totalmoney','$password','$endtime','$infodb[ifquit]')");

	$id = $db->insert_id();

	unset($sqldb);
	$sqldb[]="id='$id'";
	$sqldb[]="fid='$fid'";
	$sqldb[]="uid='$lfjuid'";

	
	/*检查判断辅信息表要插入哪些字段的内容*/
	foreach( $field_db AS $key=>$value){
		isset($postdb[$key]) && $sqldb[]="`{$key}`='{$postdb[$key]}'";
	}

	$sql=implode(",",$sqldb);

	$db->query("INSERT INTO `{$_pre}content_$mid` SET $sql");

	//$db->query("UPDATE {$_pre}content SET join_num=join_num+'$shopnum' WHERE id='$cid'");	
	count_join($cid);	//统计报名人数

	if($webdb[order_send_mail]){
		send_mail($infodb[email],"你有客户下订单了","请尽快查看<A HREF='$Murl/member/joinshow.php?fid=$fid&id=$id' target='_blank'>$Murl/member/joinshow.php?fid=$fid&id=$id</A>",0);
	}
	if($webdb[order_send_msg]){
		send_msg($infodb[uid],"你有客户下订单了","请尽快查看<A HREF='$Murl/member/joinshow.php?fid=$fid&id=$id' target='_blank'>$Murl/member/joinshow.php?fid=$fid&id=$id</A>");
	}
	
	
	if($webdb[order_send_sms] && $infodb[mobphone]){
		$array = array('order_paytype'=>$postdb['order_paytype']);
		$Module_db->showfield($field_db,$array,'show');
		sms_send($infodb[mobphone],"用户:{$lfjid} ".date("m月d日H:i")." 订购:{$infodb[title]},数量:{$shopnum},应付:{$totalmoney}[未支付] {$array[order_paytype]},消费密码:{$password}");
	}

	if($webdb[order_send_self_sms] && $postdb[order_mobphone]){
		sms_send($postdb[order_mobphone],"尊敬的用户您于".date("m月d日H:i").",订购{$infodb[title]},数量{$shopnum},联系方式:{$infodb[mobphone]},订单号:{$array[id]},消费密码:{$array[password]}[勿泄],请尽快付款!");
	}

	//在线支付
	if($postdb['order_paytype']==4){
		header("location:olpay.php?id=$id&fid=$fid");
		exit;
	}else{
		refreshto("bencandy.php?city_id=$infodb[city_id]&fid=$fid&id=$cid","订购成功,请耐心等待商家回应!");
	}	
}

/*删除内容,直接删除,不保留*/
elseif($action=="del")
{
	del_order($id);
	refreshto($FROMURL,"删除成功");
}

/*编辑内容*/
elseif($job=="edit")
{
	$rsdb=$db->get_one("SELECT A.*,B.* FROM `{$_pre}join` A LEFT JOIN `{$_pre}content_$mid` B ON A.id=B.id WHERE A.id='$id'");

	if($rsdb[uid]!=$lfjuid&&!$web_admin)
	{
		showerr("你无权修改");
	}

	$hownum=$rsdb[shopnum];

	/*表单默认变量作处理*/
	$Module_db->formGetVale($field_db,$rsdb);

	$atc="edit";	

	require(ROOT_PATH."inc/head.php");
	require(getTpl($infodb[simple_order]?"post_simple":"post_$mid"));
	require(ROOT_PATH."inc/foot.php");
}

/*处理提交的内容做修改*/
elseif($action=="edit")
{
	if($shopnum<1){
		showerr("订购的产品不能小于一件!");
	}
	$rsdb=$db->get_one("SELECT A.*,B.* FROM `{$_pre}join` A LEFT JOIN `{$_pre}content_$mid` B ON A.id=B.id WHERE A.id='$id' LIMIT 1");

	if($rsdb[uid]!=$lfjuid&&!$web_admin)
	{
		showerr("你无权修改");
	}

	if($rsdb[ifpay]&&$rsdb[shopnum]!=$shopnum){
		showerr("已付款的订单,不能修改数量!");
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
	$db->query("UPDATE `{$_pre}join` SET shopnum='$shopnum' WHERE id='$id'");
	
	refreshto("bencandy.php?city_id=$infodb[city_id]&fid=$fid&id=$cid","修改成功");
}
else
{
	if(!$web_admin && $infodb[uid]==$lfjuid){
		showerr("你不能订购自己发布的信息!");
	}


	$rsdb[order_username] = $lfjdb[truename];
	$rsdb[order_phone] = $lfjdb[telephone];
	$rsdb[order_mobphone] = $lfjdb[mobphone];
	$rsdb[order_email] = $lfjdb[email];
	$rsdb[order_qq] = $lfjdb[oicq];
	$rsdb[order_postcode] = $lfjdb[postalcode];
	$rsdb[order_address] = $lfjdb[address];


	/*模块设置时,有些字段有默认值*/
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

	/*表单默认变量作处理*/
	$Module_db->formGetVale($field_db,$rsdb);

	$atc="postnew";
	$infodb[simple_order] && $rsdb[order_paytype]['4']=' checked ';
	require(ROOT_PATH."inc/head.php");
	require(getTpl($infodb[simple_order]?"post_simple":"post_$mid"));
	require(ROOT_PATH."inc/foot.php");
}


?>