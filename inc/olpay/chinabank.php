<?php
!function_exists('html') && exit('ERR');

if(!$webdb['chinabank_id']){
	showerr('ϵͳû���������������տ��̻���,���Բ���ʹ����������֧��');
}elseif(!$webdb['chinabank_key']){
	showerr('ϵͳû����������������Կ,���Բ���ʹ����������֧��');
}

if($_POST['v_md5str']){

	$key=$webdb['chinabank_key'];

	$v_oid     =trim($_POST['v_oid']);       // �̻����͵�v_oid�������   
	$v_pmode   =trim($_POST['v_pmode']);    // ֧����ʽ,�������ƣ��ַ�����   
	$v_pstatus =trim($_POST['v_pstatus']);   //  ֧��״̬ ��20��֧���ɹ�����30��֧��ʧ�ܣ�
	$v_pstring =trim($_POST['v_pstring']);   // ֧�������Ϣ �� ֧����ɣ���v_pstatus=20ʱ����ʧ��ԭ�򣨵�v_pstatus=30ʱ,�ַ������� 
	$v_amount  =trim($_POST['v_amount']);     // ����ʵ��֧�����
	$v_moneytype  =trim($_POST['v_moneytype']); //����ʵ��֧������    
	$remark1   =trim($_POST['remark1']);      //��ע�ֶ�1
	$remark2   =trim($_POST['remark2']);     //��ע�ֶ�2
	$v_md5str  =trim($_POST['v_md5str']);   //ƴ�պ��MD5У��ֵ  

	$md5string=strtoupper(md5($v_oid.$v_pstatus.$v_amount.$v_moneytype.$key));
	if ($v_md5str==$md5string){	
		if($v_pstatus=="20"){
			olpay_end($v_oid);	//֧���ɹ�
		}else{
			echo "֧��ʧ��";
		}
	}else{
		echo "<br>У��ʧ��,���ݿ���";
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

	$v_moneytype = "CNY";                                            //����

	$text = $v_amount.$v_moneytype.$v_oid.$v_mid.$v_url.$key;        //md5����ƴ�մ�,ע��˳���ܱ�
    $v_md5info = strtoupper(md5($text));                             //md5�������ܲ�ת���ɴ�д��ĸ

	$remark1 = '';					 //��ע�ֶ�1
	$remark2 = '';                    //��ע�ֶ�2
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��������֧��</title>
</head>
<body onLoad="javascript:document.getElementById('E_FORM').submit()">
<form method="post" name="E_FORM" id="E_FORM" action="https://pay3.chinabank.com.cn/PayGate">
	<input type="hidden" name="v_mid"         value="<?php echo $v_mid;?>">
	<input type="hidden" name="v_oid"         value="<?php echo $v_oid;?>">
	<input type="hidden" name="v_amount"      value="<?php echo $v_amount;?>">
	<input type="hidden" name="v_moneytype"   value="<?php echo $v_moneytype;?>">
	<input type="hidden" name="v_url"         value="<?php echo $v_url;?>">
	<input type="hidden" name="v_md5info"     value="<?php echo $v_md5info;?>">
 
 <!--���¼�����Ϊ����֧����ɺ���֧��������Ϣһͬ������Ϣ����ҳ -->	
	
	<input type="hidden" name="remark1"       value="<?php echo $remark1;?>">
	<input type="hidden" name="remark2"       value="<?php echo $remark2;?>">



<!--���¼���ֻ��������¼�ͻ���Ϣ�����Բ��ã���Ӱ��֧�� -->
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