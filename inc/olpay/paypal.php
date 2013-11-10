<?php
!function_exists('html') && exit('ERR');

if(!$webdb[paypal_id]){
	showerr('系统没有设置贝宝收款帐号,所以不能在线支付');
}elseif(!$webdb[paypal_key]){
	showerr('系统没有设置贝宝收款密钥,所以不能在线支付');
}

$paypal_type=$webdb[paypal_type]?'USD':'CNY';

if($_GET[tx]){
	//?tx=9NH14302HS569815E&st=Completed&amt=0.01&cc=CNY&cm=&item_number=0123
	
	$postValue="cmd=_notify-synch&at=$webdb[paypal_key]&tx=$_GET[tx]";
	
	
	$content = PPHttpPost('https://www.paypal.com/cgi-bin/webscr',$postValue);
	if(!$content){
		$content = sockOpenUrl('https://www.paypal.com/cgi-bin/webscr','POST',$postValue);
	}
	
	if( strstr($content,'SUCCESS') && strstr($content,'payment_status=Completed') && strstr($content,"item_number=$item_number") ){
	
		olpay_end($item_number);
	
	}elseif( $content=='' ){
	
		showerr("<a href='http://bbs.qibosoft.com/read-forum-tid-410644.htm'>服务器不支持php_openssl ，请管理员手工处理你的订单！</a>");
	
	}else{
	
		showerr("支付失败! <br>$content");
		
	}
}
else
{
	$array=olpay_send();
print <<<EOT

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>贝宝在线支付</title>
</head>
<body onLoad="javascript:document.getElementById('E_FORM').submit()">
<form method="post" name="E_FORM" id="E_FORM" action="https://www.paypal.com/cgi-bin/webscr">

<input type="hidden" name="cmd" value="_xclick"> 
<input type="hidden" name="business" value="$webdb[paypal_id]">
<input type="hidden" name="item_name" value="$array[title]">
<input type="hidden" name="item_number" value="$array[numcode]"> 
<input type="hidden" name="currency_code" value="$paypal_type">
<input type="hidden" name="amount" value="$array[money]"> 
<input type="hidden" name="notify_url" value="" />
<input type="hidden" name="cancel_return" value="" />
<input type="hidden" name="return" value="$array[return_url]" />

</form>

</body>
</html>

EOT;
exit;
}


function PPHttpPost($url_, $postFields_){
	if(!function_exists('curl_init')){
		return ;
	}
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url_);
	curl_setopt($ch, CURLOPT_VERBOSE, 1);

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_POST, 1);

	curl_setopt($ch,CURLOPT_POSTFIELDS,$postFields_);

	$httpResponse = curl_exec($ch);

	return $httpResponse;

	//return "error_msg<hr>" . curl_error($ch) ."<hr>error_no<hr>" . curl_errno($ch) ;
}