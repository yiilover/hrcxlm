<?php
require(dirname(__FILE__)."/"."global.php");
require(ROOT_PATH."data/level.php");

if($lfjid){
	showerr("���Ѿ�ע����,�벻Ҫ�ظ�ע��,Ҫע��,�����˳�");
}
if($webdb[forbidReg]){
	showerr("�ܱ�Ǹ,��վ�ر���ע��");
}
if(!$webdb[RegCompany]){
	showerr("��ֹע����ҵ��Ա!");
}

if($step==2){

	if(function_exists('check_rand_reg_num') && !check_rand_reg_num($_POST["$webdb[rand_reg_num_inputname]"])){
		showerr("ϵͳ�����ʧЧ,�뷵��,ˢ��һ��ҳ��,��������������,�����ύ!");
	}
	
	//�Ķ���ͬ��ע��Э��
	if($agree!=1){
		showerr("�㲢δͬ��ע��Э�飬�޷�����ע��");
	}
	//�û��Զ����ֶ�
	require_once(ROOT_PATH."/do/regfield.php");
	ck_regpost($postdb);

	if($webdb[forbidRegHour]){
		$webdb[forbidRegHour] = str_replace(array('24','��'),array('0',' '),$webdb[forbidRegHour]);
		$detail=explode(" ",$webdb[forbidRegHour]);
		if(in_array(ceil(date('H',$timestamp)),$detail)){
			showerr("ϵͳ���õ�ǰʱ��β�����ע��");
		}
	}

	if($webdb[forbidRegIp]){
		$detail=explode("\r\n",$webdb[forbidRegIp]);
		foreach( $detail AS $key=>$value){
			//if(strstr($onlineip,$value)&&ereg("^$value",$onlineip)){
			if(strstr($onlineip,$value)){
				showerr("������IP��ֹע��");
			}
		}
	}
	if($webdb[limitRegTime]&&get_cookie("limitRegTime")){
		showerr("{$webdb[limitRegTime]} ������,�벻Ҫ�ظ�ע��");
	}
	if( $webdb[yzImgReg] ){
		if(!check_imgnum($yzimg)){
			showerr("��֤�벻����");
		}
	}

	//ע����˶�
	if($webdb[yzNumReg]){
		$time=$timestamp-3600;	//1Сʱǰ��ע����ʧЧ.
		if($db->get_one("SELECT * FROM {$pre}regnum WHERE num='$yznum' AND sid='$usr_sid'")){
			if($webdb['yzNumReg']==1){
				if(substr(mymd5($email),0,2)!=substr($yznum,2,2)){
					showerr("�벻Ҫ�Ļ���ȡע����������ʺ�!");
				}
			}elseif($webdb['yzNumReg']==2){
				if(substr(mymd5($mobphone),0,2)!=substr($yznum,2,2)){
					showerr("�벻Ҫ�Ļ���ɾ����ȡע������ֻ�����!");
				}
			}
			$db->query("DELETE FROM {$pre}regnum WHERE (num='$yznum' AND sid='$usr_sid') OR posttime<$time");
		}else{
			showerr("ע���벻��!");
		}
	}

	if(!$title){
		showerr('��ҵ���Ʋ���Ϊ�գ�');
	}
	if(strlen($title)<10){
		showerr("��˾ȫ��С��5���ֲ��淶!");
	}
	if(eregi("^([a-z0-9]+)$",$title)){
		//showerr("��˾���Ʋ��淶!");
	}

	if(!$qy_address){
		showerr('û����д��ҵ��ַ��');
	}

	if(!$reg_tel){
		showerr('û����д��ҵ��ϵ�绰 ��');
	}

	if($mobphone && !ereg("^1([0-9]{10})$",$mobphone)){
		showerr('�ֻ���������');
	}

	if($password!=$password2){
		showerr("�����������벻һ��");
	}elseif ($msn&&!ereg("^[-a-zA-Z0-9_\.]+\@([0-9A-Za-z][0-9A-Za-z-]+\.)+[A-Za-z]{2,5}$",$msn)) {
		showerr("MSN�����Ϲ���"); 
	}
	if($webdb[forbidRegName]){
		$detail=explode("\r\n",$webdb[forbidRegName]);
		if(in_array($username,$detail)){
			showerr("�ܱ������ʺ�,������ʹ��,�����һ����");
		}
	}
	$msn = filtrate($msn);
	$homepage = filtrate($homepage);	

	if($groupid==3||$groupid==4||$memberlevel[$groupid]||!in_array($groupid,explode(",",$webdb[reg_group]))){
		$groupid=8;
	}
	$groupid || $groupid=8;
	$gtype=0;
	
	if($webdb['RegQyNoNeedFull']){	//��̨���ò���������ϢҲ���Գ�Ϊ��ҵ��Ա
		if($webdb['RegQyNeedCheck']){	//ע���Ϊ��ҵ��Ա,��Ҫ�˹����
			$gtype=-1;
			$groupid=8;
			$qy_yz = 0;
		}else{
			$qy_yz = 1;
			$gtype=1;
			$groupid = $webdb['RegQyGroupid'];
			if(!$ltitle[$groupid] || $groupid==3){
				$groupid=8;
			}
		}
	}
	

	$array=array(
		'username'=>$username,
		'password'=>$password,
		'groupid'=>intval($groupid),
		'grouptype'=>$gtype,
		'yz'=>$webdb[RegYz],
		'lastvist'=>$timestamp,
		'lastip'=>$onlineip,
		'regdate'=>$timestamp,
		'regip'=>$onlineip,
		'sex'=>$sex,
		'bday'=>"$bday_y-$bday_m-$bday_d",
		'oicq'=>$oicq,
		'msn'=>$msn,
		'homepage'=>$homepage,
		'email'=>$email,
		'mobphone'=>$mobphone
	);
	if($webdb['yzNumReg']==1){
		$array['email_yz']=1;
	}elseif($webdb['yzNumReg']==2){
		$array['mob_yz']=1;
	}

	//�û�ע��
	$uid = $userDB->register_user($array);
	if($uid<1){
		showerr($uid);
	}

	$cArray = array('title'=>$title,
		'qy_contact_tel'=>$reg_tel,
		'qy_contact_mobile'=>$mobphone,
		'qy_contact_email'=>$email,
		'qy_address'=>$qy_address,
		'qy_contact'=>$qy_contact);

	if($webdb['RegQyNoNeedFull']){	//��̨���ò���������ϢҲ���Գ�Ϊ��ҵ��Ա
		$db->query("INSERT INTO `{$_pre}company` ( `title` ,`uid` , `username` , `posttime` , `yz` , `yzer` , `yztime` , `qy_contact_sex` , `qy_contact_tel` , `qy_contact_mobile` , `qy_contact_email` , `qy_website` , `qq` , `qy_address`, `qy_contact` ,`city_id`) VALUES ( '$title', '$uid', '$username', '$timestamp','$qy_yz', '', '$timestamp','$sex', '$reg_tel', '$mobphone',  '$email', '$homepage', '$oicq', '$qy_address','$qy_contact','$city_id');");
	}

	//�û���¼
	$cookietime = 3600;
	$userDB->login($username,$password,$cookietime);

	//ע��ʱ��������
	if($webdb[limitRegTime]){
		set_cookie("limitRegTime",1,$webdb[limitRegTime]*60);
	}
	
	//ע���û��Զ����ֶ�
	Reg_memberdata_field($uid,$postdb);

	//ͨ��֤����
	if($_COOKIE[passport_url]||$_POST[passport_url]){
		$passport_url=urldecode($_COOKIE[passport_url]?$_COOKIE[passport_url]:$_POST[passport_url]);
		setcookie('passport_url','');
		$userDB->passport_server($username,$passport_url);
	}

	add_user($uid,$webdb[regmoney],'ע��÷�');

	propagandize_reg($uid,$propagandize_name);	//�����û�ע�ά������

	//����QQ�ʺ�
	list($token,$secret,$openid)=explode("\t",mymd5(get_cookie('token_secret'),'DE'));	
	if($openid){
		$rs1 = $db->get_one("SELECT * FROM {$pre}memberdata WHERE `qq_api`='$openid'");
		if(!$rs1){
			$db->query("UPDATE {$pre}memberdata SET `qq_api`='$openid' WHERE username='$username'");
			//refreshto("$webdb[www_url]","�ʺ�����ɹ�!!",1);
		}
	}

	foreach($cArray AS $key=>$value){
		$cArray[$key] = "CP[$key]=".urlencode($value);
	}
	
	reg_qy_mail(array('username'=>$username)); //�ʼ�֪ͨ����Ա

	if($webdb['RegQyNoNeedFull']){		
		refreshto("$webdb[_www_url]/member/?main=$webdb[_www_url]/hy/member/post_company.php?job=apply&"
		,"��ϲ��,�ɹ�ע��Ϊ��ҵ��Ա,�������ٽ�һ��������ҵ��Ϣ��",3);
	}else{
		refreshto("$webdb[_www_url]/member/?main=$webdb[_www_url]/hy/member/post_company.php?job=apply&".implode('&',$cArray)
		,"ע��ɹ�,�������һ��������ҵ��Ϣ,��������Ϊ��ҵ��Ա,���򻹽��Ǹ��˻�Ա��",30);
	}	
}
else
{
	require(ROOT_PATH."inc/head.php");
	require(getTpl('reg'));
	require(ROOT_PATH."inc/foot.php");
}


//ע���Ϊ��ҵ�û������ʼ�
function reg_qy_mail($array){
	global $webdb,$db,$pre;
	if(!$webdb['RegQySendMail']){
		return ;
	}
	$query = $db->query("SELECT * FROM {$pre}memberdata WHERE groupid=3");
	while($rs = $db->fetch_array($query)){
		send_mail($rs[email],"��վ���µ���ҵ��Աע����!","<A HREF='$webdb[www_url]/'>�����վ���µ���ҵ��Աע����,��ע��鿴,ע���û�����:$array[username]</A>",0);
	}
}
?>