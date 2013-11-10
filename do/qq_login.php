<?php
require_once(dirname(__FILE__)."/global.php");
//require_once(ROOT_PATH."/inc/qq.api.php");

if($lfjuid){
	showerr('请不要重复登录!');
}elseif(!$webdb[QQ_login]){
	showerr('该功能已关闭!');
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
	refreshto("$webdb[www_url]/","你已安全退出！",1);
}elseif($code){

	$url = "https://graph.qq.com/oauth2.0/token?grant_type=authorization_code&client_id=$webdb[QQ_appid]&client_secret=$webdb[QQ_appkey]&code=$code&redirect_uri=".urlencode("$webdb[www_url]/do/qq_login.php");	
	
	$content = https_get($url);
	//正确时返回access_token=16614816E6E2FD2290C8E1944C8DE647&expires_in=7776000
	preg_match("/access_token=([\d\w]+)&expires_in=([\d]+)/is",$content,$array);
	$access_token = $array[1];
	
	if( eregi("^[a-z0-9]+$",$access_token) ){
	
		$url = "https://graph.qq.com/oauth2.0/me?access_token=$access_token";
		$content = https_get($url);
		//正确时返回callback( {"client_id":"100204298","openid":"B7FCB3B9337167B0EC04E6A9D3DC3E8E"} );
		preg_match('/"openid"([ ]*):([ ]*)"([\d\w]+)"/is',$content,$array);
		$openid = $array[3];
		
		if( eregi("^[a-z0-9]+$",$openid) ){
			//成功获取到用户的唯一ID

			set_cookie( 'token_secret' , mymd5($access_token."\t".$access_token."\t".$openid) );

			if($rs=$db->get_one("SELECT * FROM {$pre}memberdata WHERE `qq_api`='$openid'")){
				$userDB->login($rs[username],'',3600,true);
				$fromurl=get_cookie('qq_fromurl');
				if($fromurl&&!eregi("login\.php",$fromurl)&&!eregi("reg\.php",$fromurl)){
					$jumpto=$fromurl;
				}else{
					$jumpto="$webdb[www_url]/";
				}
				refreshto("$jumpto","QQ方式登录成功{$uc_login_code}",1);
			}else{
				//refreshto("qq_bind.php","QQ登录成功,请进行帐号绑定设置",10);
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
					$nickName="QQ用户";
				}
				set_cookie( 'QQ_nickName' , $nickName );
				if($webdb[qq_auto_bind]){
					refreshto("qq_bind.php","QQ登录成功,请进行帐号绑定设置",10);
				}else{
					refreshto("$webdb[www_url]/","QQ登录成功",1);
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

	//开始登录
	set_cookie('qq_fromurl',$FROMURL);
	
	$url="https://graph.qq.com/oauth2.0/authorize?response_type=code&client_id=$webdb[QQ_appid]&state=1&redirect_uri=".urlencode("$webdb[www_url]/do/qq_login.php");
	header("Location:$url");
	exit;
	
}


function qq_error_msg($content){
	$url='http://wiki.opensns.qq.com/wiki/%E3%80%90QQ%E7%99%BB%E5%BD%95%E3%80%91%E5%85%AC%E5%85%B1%E8%BF%94%E5%9B%9E%E7%A0%81%E8%AF%B4%E6%98%8E#100000-100031.EF.BC.9APC.E7.BD.91.E7.AB.99.E6.8E.A5.E5.85.A5.E6.97.B6.E7.9A.84.E5.85.AC.E5.85.B1.E8.BF.94.E5.9B.9E.E7.A0.81';
	showerr("<a href='$url' target='_blank'>出错了,以下是QQ网站返回的错误信息提示，请点击查看具体的错误原因<br>$content</a>");
}


function https_get($url) {
	if( !function_exists('curl_init') ){
		$content = file_get_contents($url);
		if($content==''){
			showerr("<a href='http://bbs.qibosoft.com/read-forum-tid-410644.htm'>请先配置好你的服务器支持curl或是php_openssl,点击查看教程</a>");
		}else{
			return $content;
		}
	}
	$curl = curl_init(); // 启动一个CURL会话
	curl_setopt ( $curl, CURLOPT_URL, $url ); // 要访问的地址
	curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, 0 ); // 对认证证书来源的检查
	curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, 1 ); // 从证书中检查SSL加密算法是否存在
	curl_setopt ( $curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; .NET CLR 1.1.4322)" ); // 模拟用户使用的浏览器
	@curl_setopt ( $curl, CURLOPT_FOLLOWLOCATION, 1 ); // 使用自动跳转
	curl_setopt ( $curl, CURLOPT_AUTOREFERER, 1 ); // 自动设置Referer
	curl_setopt ( $curl, CURLOPT_HTTPGET, 1 ); // 发送一个常规的Post请求
	curl_setopt ( $curl, CURLOPT_COOKIEFILE, '' ); // 读取上面所储存的Cookie信息
	curl_setopt ( $curl, CURLOPT_TIMEOUT, 120 ); // 设置超时限制防止死循环
	curl_setopt ( $curl, CURLOPT_HEADER, 0 ); // 显示返回的Header区域内容
	curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 ); // 获取的信息以文件流的形式返回
	$content = curl_exec ( $curl ); // 执行操作
	if (curl_errno ( $curl )) {
		echo 'Errno' . curl_error ( $curl );
	}
	curl_close ( $curl ); // 关闭CURL会话
	return $content; // 返回数据
}

?>