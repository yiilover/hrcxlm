<?php
require(dirname(__FILE__)."/"."global.php");
$_GET['_fromurl'] && $_fromurl=$_GET['_fromurl'];
unset($uc_login_code);

//�˳�
if($action=="quit")
{
	$userDB->quit();

	//ͨ��֤����
	if($_GET[passport_url]){
		$userDB->passport_server($lfjid,$_GET[passport_url]);
	}

	if(!$fromurl){
		$fromurl="$webdb[www_url]/";
	}
	echo "$uc_login_code<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$fromurl'>";
	exit;
}
else
{	//��¼
	if($lfjid){
		//ͨ��֤����
		if($_GET[passport_url]){
			$userDB->passport_server($lfjid,$_GET[passport_url]);
		}
		showerr("���Ѿ���¼��,�벻Ҫ�ظ���¼,Ҫ���µ�¼����<br><br><A HREF='$webdb[www_url]/do/login.php?action=quit'>��ȫ�˳�</A>");
	}
	if($step==2){
		
		$login = $userDB->login($username,$password,$cookietime);
		if($login==0){
			showerr("��ǰ�û�������,����������");
		}elseif($login==-1){
			showerr("���벻��ȷ,�����������");
		}
		
		//���ڵ�¼�ɹ�������˵Ļ�,��Ҫ�Ƿ��㲻��Ҫ�û��������ʺ�����
		if($webdb['yzImgLogin']){
			if(!check_imgnum($yzimg)){
				$userDB->quit();
				$msg = $yzimg?'��֤�벻��ȷ!����������':'��������֤��';
				showerr('<CENTER><form name="form1" method="post" action="">'.$msg.'<br>��֤��:<input type="text" style="width:70px" name="yzimg"><SCRIPT LANGUAGE="JavaScript">
				<!--
				document.write(\'<img border="0" name="imageField" onclick="this.src=this.src+Math.random();" src="'.$webdb[www_url].'/do/yzimg.php?\'+Math.random()+\'">\');
				//-->
				</SCRIPT><br><input type="hidden" name="username" value="'.$username.'"><input type="hidden" name="password" value="'.$password.'"><input type="hidden" name="cookietime" value="'.$cookietime.'"><input type="submit" name="Submit" value=" �� �� "> <input type="hidden" name="step" value="2"></form></CENTER>');
			}
		}

		//ͨ��֤����
		if($_COOKIE[passport_url]||$_POST[passport_url]){
			$passport_url=urldecode($_COOKIE[passport_url]?$_COOKIE[passport_url]:$_POST[passport_url]);
			setcookie('passport_url','');
			$userDB->passport_server($username,$passport_url);
		}

		if($fromurl&&!eregi("login\.php",$fromurl)&&!eregi("reg\.php",$fromurl)){
			$jumpto=$fromurl;
		}elseif($FROMURL&&!eregi("login\.php",$FROMURL)&&!eregi("reg\.php",$FROMURL)){
			$jumpto=$FROMURL;
		}else{
			$jumpto="$webdb[www_url]/";
		}
		refreshto("$jumpto","��¼�ɹ�!!<div style='display:none;'><iframe src='crontab.php' width=0 height=0></iframe></div></div>{$uc_login_code}",1);
	}
	//ͨ��֤����
	if($_GET[passport_url]){
		setcookie('passport_url',$_GET[passport_url]);
	}
	require(ROOT_PATH."inc/head.php");
	require(html("login"));
	require(ROOT_PATH."inc/foot.php");
}


?>