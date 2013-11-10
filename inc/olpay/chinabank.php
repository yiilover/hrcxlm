<?php
!function_exists('html') && exit('ERR');

if(!$webdb['chinabank_id']){
	showerr('系统没有设置网银在线收款商户号,所以不能使用网银在线支付');
}elseif(!$webdb['chinabank_key']){
	showerr('系统没有设置网银在线密钥,所以不能使用网银在线支付');
}

if($_POST['v_md5str']){

	$key=$webdb['chinabank_key'];

	$v_oid     =trim($_POST['v_oid']);       // 商户发送的v_oid定单编号   
	$v_pmode   =trim($_POST['v_pmode']);    // 支付方式,银行名称（字符串）   
	$v_pstatus =trim($_POST['v_pstatus']);   //  支付状态 ：20（支付成功）；30（支付失败）
	$v_pstring =trim($_POST['v_pstring']);   // 支付结果信息 ： 支付完成（当v_pstatus=20时）；失败原因（当v_pstatus=30时,字符串）； 
	$v_amount  =trim($_POST['v_amount']);     // 订单实际支付金额
	$v_moneytype  =trim($_POST['v_moneytype']); //订单实际支付币种    
	$remark1   =trim($_POST['remark1']);      //备注字段1
	$remark2   =trim($_POST['remark2']);     //备注字段2
	$v_md5str  =trim($_POST['v_md5str']);   //拼凑后的MD5校验值  

	$md5string=strtoupper(md5($v_oid.$v_pstatus.$v_amount.$v_moneytype.$key));
	if ($v_md5str==$md5string){	
		if($v_pstatus=="20"){
			olpay_end($v_oid);	//支付成功
		}else{
			echo "支付失败";
		}
	}else{
		echo "<br>校验失败,数据可疑";
	}
	exit;
}
else
{
	
	$array = olpay_send();
	$v_mid = $webdb['chinabank_id'];	
	$key   = $webdb['chinabank_key'];

	$v_url = $array['return_url'];
	$v_oid = $array['numcode'];
	$v_amount = $array['money'];
	$v_moneytype = "CNY";

	$v_moneytype = "CNY";                                            //币种

	$text = $v_amount.$v_moneytype.$v_oid.$v_mid.$v_url.$key;        //md5加密拼凑串,注意顺序不能变
    $v_md5info = strtoupper(md5($text));                             //md5函数加密并转化成大写字母

	$remark1 = '';					 //备注字段1
	$remark2 = '';                    //备注字段2
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>网银在线支付</title>
</head>
<body onLoad="javascript:document.getElementById('E_FORM').submit()">
<form method="post" name="E_FORM" id="E_FORM" action="https://pay3.chinabank.com.cn/PayGate">
	<input type="hidden" name="v_mid"         value="<?php echo $v_mid;?>">
	<input type="hidden" name="v_oid"         value="<?php echo $v_oid;?>">
	<input type="hidden" name="v_amount"      value="<?php echo $v_amount;?>">
	<input type="hidden" name="v_moneytype"   value="<?php echo $v_moneytype;?>">
	<input type="hidden" name="v_url"         value="<?php echo $v_url;?>">
	<input type="hidden" name="v_md5info"     value="<?php echo $v_md5info;?>">
 
 <!--以下几项项为网上支付完成后，随支付反馈信息一同传给信息接收页 -->	
	
	<input type="hidden" name="remark1"       value="<?php echo $remark1;?>">
	<input type="hidden" name="remark2"       value="<?php echo $remark2;?>">



<!--以下几项只是用来记录客户信息，可以不用，不影响支付 -->
	<input type="hidden" name="v_rcvname"      value="<?php echo $v_rcvname;?>">
	<input type="hidden" name="v_rcvtel"       value="<?php echo $v_rcvtel;?>">
	<input type="hidden" name="v_rcvpost"      value="<?php echo $v_rcvpost;?>">
	<input type="hidden" name="v_rcvaddr"      value="<?php echo $v_rcvaddr;?>">
	<input type="hidden" name="v_rcvemail"     value="<?php echo $v_rcvemail;?>">
	<input type="hidden" name="v_rcvmobile"    value="<?php echo $v_rcvmobile;?>">

	<input type="hidden" name="v_ordername"    value="<?php echo $v_ordername;?>">
	<input type="hidden" name="v_ordertel"     value="<?php echo $v_ordertel;?>">
	<input type="hidden" name="v_orderpost"    value="<?php echo $v_orderpost;?>">
	<input type="hidden" name="v_orderaddr"    value="<?php echo $v_orderaddr;?>">
	<input type="hidden" name="v_ordermobile"  value="<?php echo $v_ordermobile;?>">
	<input type="hidden" name="v_orderemail"   value="<?php echo $v_orderemail;?>">

</form>

</body>
</html>

<?php
die();
?>