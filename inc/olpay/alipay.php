<?php
!function_exists('html') && exit('ERR');

if(!$webdb[alipay_id]){
	showerr('ϵͳû������֧�����տ��ʺ�,���Բ���ʹ��֧��������֧��');
}

if($notify_end){
	include(ROOT_PATH.'inc/olpay/alipay.biz.php');	//�����������
}elseif($trade_status){
	$alipay_partner=$webdb[alipay_partner];
	$veryfy_result = file_get_contents("http://notify.alipay.com/trade/notify_query.do?notify_id=$notify_id&partner=$alipay_partner");
	if(!eregi("true$",$veryfy_result)){
		showerr('��ȫ��֤����У��ʧ�ܣ��޷���ɳ�ֵ��<hr>'.$veryfy_result);
	}
	
	@unlink(ROOT_PATH."cache/notify_0_{$lfjuid}.txt");
	@unlink(ROOT_PATH."cache/notify_1_{$lfjuid}.txt");

	olpay_end($out_trade_no);
}
else
{
	$array=olpay_send();

	$url  = $webdb['alipay_transport']."://mapi.alipay.com/gateway.do?";

	//֧������һЩСBUG,Ҫ�ر�������
	if(eregi("^0",$array[numcode])){
		$array[numcode]="$array[numcode]code";
	}
	
	write_file(ROOT_PATH."cache/notify_0_{$lfjuid}.txt",$array['return_url']);

	$para = array(
			'extra_common_param'=>$lfjuid,
			'notify_url'	=> $webdb['www_url'].'/do/notify_url.php',
			
			'_input_charset' => 'gbk',
			'service'		 => $webdb['alipay_service'],	//��������
			'partner'		 => $webdb['alipay_partner'],		//�����̻���
			'return_url'	 => $array['return_url'],		//ͬ������
			'payment_type'	 => 1,							//Ĭ��Ϊ1,����Ҫ�޸�
			'quantity'		 => 1,							//��Ʒ����,ǿ��Ϊ1,�ܶ���price�����
			'subject'		 => $array['title'],			//��Ʒ���ƣ�����
			'body'			 => $array['content'],			//��Ʒ����������
			'out_trade_no'	 => $array['numcode'],			//��Ʒ�ⲿ���׺ţ������֤Ψһ�ԣ�
			'price'		 => $array['money'],				//�ܶ�
			'seller_email'	 => $webdb['alipay_id'],		//�������䣬����
			'logistics_fee'		=> '0.00',        			//�������ͷ���
			'logistics_payment'	=> 'BUYER_PAY',   			//�������ø��ʽ��SELLER_PAY(����֧��)��BUYER_PAY(���֧��)��BUYER_PAY_AFTER_RECEIVE(��������)
			'logistics_type'	=> 'EXPRESS'    			//�������ͷ�ʽ��POST(ƽ��)��EMS(EMS)��EXPRESS(�������)
		);
	ksort($para);
	$and='';
	foreach($para as $key => $value){
		if($value!==''){
			$_url  .= $and."$key=$value";
			$url  .= $and."$key=".urlencode($value);
			$and="&";
		}
	}

	$sign=md5($_url.$webdb['alipay_key']);
	$url.="&sign=".$sign."&sign_type=MD5";
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$url'>";
	exit;
}


?>