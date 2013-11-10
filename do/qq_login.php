<?php
require_once(dirname(__FILE__)."/global.php");
//require_once(ROOT_PATH."/inc/qq.api.php");

if($lfjuid){
	showerr('�벻Ҫ�ظ���¼!');
}elseif(!$webdb[QQ_login]){
	showerr('�ù����ѹر�!');
}

/*
if(!table_field("{$pre}memberdata",'qq_api')){
	$db->query("ALTER TABLE `{$pre}memberdata` ADD `qq_api` VARCHAR( 32 ) NOT NULL AFTER `username`;");
	$db->query("ALTER TABLE `{$pre}memberdata` ADD INDEX ( `qq_api` );");
}
*/

if($action=='quit'){
	set_cookie( 'QQ_nickName' , '' );
	set_cookie( 'token_secret' , '' );
	refreshto("$webdb[www_url]/","���Ѱ�ȫ�˳���",1);
}elseif($code){

	$url = "https://graph.qq.com/oauth2.0/token?grant_type=authorization_code&client_id=$webdb[QQ_appid]&client_secret=$webdb[QQ_appkey]&code=$code&redirect_uri=".urlencode("$webdb[www_url]/do/qq_login.php");	
	
	$content = https_get($url);
	//��ȷʱ����access_token=16614816E6E2FD2290C8E1944C8DE647&expires_in=7776000
	preg_match("/access_token=([\d\w]+)&expires_in=([\d]+)/is",$content,$array);
	$access_token = $array[1];
	
	if( eregi("^[a-z0-9]+$",$access_token) ){
	
		$url = "https://graph.qq.com/oauth2.0/me?access_token=$access_token";
		$content = https_get($url);
		//��ȷʱ����callback( {"client_id":"100204298","openid":"B7FCB3B9337167B0EC04E6A9D3DC3E8E"} );
		preg_match('/"openid"([ ]*):([ ]*)"([\d\w]+)"/is',$content,$array);
		$openid = $array[3];
		
		if( eregi("^[a-z0-9]+$",$openid) ){
			//�ɹ���ȡ���û���ΨһID

			set_cookie( 'token_secret' , mymd5($access_token."\t".$access_token."\t".$openid) );

			if($rs=$db->get_one("SELECT * FROM {$pre}memberdata WHERE `qq_api`='$openid'")){
				$userDB->login($rs[username],'',3600,true);
				$fromurl=get_cookie('qq_fromurl');
				if($fromurl&&!eregi("login\.php",$fromurl)&&!eregi("reg\.php",$fromurl)){
					$jumpto=$fromurl;
				}else{
					$jumpto="$webdb[www_url]/";
				}
				refreshto("$jumpto","QQ��ʽ��¼�ɹ�{$uc_login_code}",1);
			}else{
				//refreshto("qq_bind.php","QQ��¼�ɹ�,������ʺŰ�����",10);
				$str=https_get("https://graph.qq.com/user/get_user_info?access_token=$access_token&oauth_consumer_key=$webdb[QQ_appid]&openid=$openid");
				$nickName=preg_replace('/(.*)"nickname"([ ]*):([ ]*)"([^"]+)"(.*)/is',"\\4",$str);
				if($nickName){
					if(WEB_LANG=='gb2312'){
						if(function_exists('utf82gbk')){
							$nickName=utf82gbk($nickName);
						}elseif(function_exists('iconv')){
							$nickName = iconv('UTF-8', 'GBK//IGNORE',$nickName);
						}
					}	
				}else{
					$nickName="QQ�û�";
				}
				set_cookie( 'QQ_nickName' , $nickName );
				if($webdb[qq_auto_bind]){
					refreshto("qq_bind.php","QQ��¼�ɹ�,������ʺŰ�����",10);
				}else{
					refreshto("$webdb[www_url]/","QQ��¼�ɹ�",1);
				}
			}			
		}else{
			//callback( {"error":100016,"error_description":"access token check failed"} );
			qq_error_msg($content);
		}
		
	}else{
	
		//callback( {"error":100020,"error_description":"code is reused error"} );
		qq_error_msg($content);
		
	}
	
}else{

	//��ʼ��¼
	set_cookie('qq_fromurl',$FROMURL);
	
	$url="https://graph.qq.com/oauth2.0/authorize?response_type=code&client_id=$webdb[QQ_appid]&state=1&redirect_uri=".urlencode("$webdb[www_url]/do/qq_login.php");
	header("Location:$url");
	exit;
	
}


function qq_error_msg($content){
	$url='http://wiki.opensns.qq.com/wiki/%E3%80%90QQ%E7%99%BB%E5%BD%95%E3%80%91%E5%85%AC%E5%85%B1%E8%BF%94%E5%9B%9E%E7%A0%81%E8%AF%B4%E6%98%8E#100000-100031.EF.BC.9APC.E7.BD.91.E7.AB.99.E6.8E.A5.E5.85.A5.E6.97.B6.E7.9A.84.E5.85.AC.E5.85.B1.E8.BF.94.E5.9B.9E.E7.A0.81';
	showerr("<a href='$url' target='_blank'>������,������QQ��վ���صĴ�����Ϣ��ʾ�������鿴����Ĵ���ԭ��<br>$content</a>");
}


function https_get($url) {
	if( !function_exists('curl_init') ){
		$content = file_get_contents($url);
		if($content==''){
			showerr("<a href='http://bbs.qibosoft.com/read-forum-tid-410644.htm'>�������ú���ķ�����֧��curl����php_openssl,����鿴�̳�</a>");
		}else{
			return $content;
		}
	}
	$curl = curl_init(); // ����һ��CURL�Ự
	curl_setopt ( $curl, CURLOPT_URL, $url ); // Ҫ���ʵĵ�ַ
	curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, 0 ); // ����֤֤����Դ�ļ��
	curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, 1 ); // ��֤���м��SSL�����㷨�Ƿ����
	curl_setopt ( $curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; .NET CLR 1.1.4322)" ); // ģ���û�ʹ�õ������
	@curl_setopt ( $curl, CURLOPT_FOLLOWLOCATION, 1 ); // ʹ���Զ���ת
	curl_setopt ( $curl, CURLOPT_AUTOREFERER, 1 ); // �Զ�����Referer
	curl_setopt ( $curl, CURLOPT_HTTPGET, 1 ); // ����һ�������Post����
	curl_setopt ( $curl, CURLOPT_COOKIEFILE, '' ); // ��ȡ�����������Cookie��Ϣ
	curl_setopt ( $curl, CURLOPT_TIMEOUT, 120 ); // ���ó�ʱ���Ʒ�ֹ��ѭ��
	curl_setopt ( $curl, CURLOPT_HEADER, 0 ); // ��ʾ���ص�Header��������
	curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 ); // ��ȡ����Ϣ���ļ�������ʽ����
	$content = curl_exec ( $curl ); // ִ�в���
	if (curl_errno ( $curl )) {
		echo 'Errno' . curl_error ( $curl );
	}
	curl_close ( $curl ); // �ر�CURL�Ự
	return $content; // ��������
}

?>