<?php
require(dirname(__FILE__)."/"."global.php");
require(ROOT_PATH."data/level.php");

if($lfjid){
	showerr("你已经注册了,请不要重复注册,要注册,请先退出");
}
if($webdb[forbidReg]){
	showerr("很抱歉,网站关闭了注册");
}
if(!$webdb[RegCompany]){
	showerr("禁止注册企业会员!");
}

if($step==2){

	if(function_exists('check_rand_reg_num') && !check_rand_reg_num($_POST["$webdb[rand_reg_num_inputname]"])){
		showerr("系统随机码失效,请返回,刷新一下页面,再重新输入数据,重新提交!");
	}
	
	//阅读并同意注册协议
	if($agree!=1){
		showerr("你并未同意注册协议，无法进行注册");
	}
	//用户自定义字段
	require_once(ROOT_PATH."/do/regfield.php");
	ck_regpost($postdb);

	if($webdb[forbidRegHour]){
		$webdb[forbidRegHour] = str_replace(array('24','　'),array('0',' '),$webdb[forbidRegHour]);
		$detail=explode(" ",$webdb[forbidRegHour]);
		if(in_array(ceil(date('H',$timestamp)),$detail)){
			showerr("系统设置当前时间段不允许注册");
		}
	}

	if($webdb[forbidRegIp]){
		$detail=explode("\r\n",$webdb[forbidRegIp]);
		foreach( $detail AS $key=>$value){
			//if(strstr($onlineip,$value)&&ereg("^$value",$onlineip)){
			if(strstr($onlineip,$value)){
				showerr("你所在IP禁止注册");
			}
		}
	}
	if($webdb[limitRegTime]&&get_cookie("limitRegTime")){
		showerr("{$webdb[limitRegTime]} 分钟内,请不要重复注册");
	}
	if( $webdb[yzImgReg] ){
		if(!check_imgnum($yzimg)){
			showerr("验证码不符合");
		}
	}

	//注册码核对
	if($webdb[yzNumReg]){
		$time=$timestamp-3600;	//1小时前的注册码失效.
		if($db->get_one("SELECT * FROM {$pre}regnum WHERE num='$yznum' AND sid='$usr_sid'")){
			if($webdb['yzNumReg']==1){
				if(substr(mymd5($email),0,2)!=substr($yznum,2,2)){
					showerr("请不要改换获取注册码的邮箱帐号!");
				}
			}elseif($webdb['yzNumReg']==2){
				if(substr(mymd5($mobphone),0,2)!=substr($yznum,2,2)){
					showerr("请不要改换或删除获取注册码的手机号码!");
				}
			}
			$db->query("DELETE FROM {$pre}regnum WHERE (num='$yznum' AND sid='$usr_sid') OR posttime<$time");
		}else{
			showerr("注册码不对!");
		}
	}

	if(!$title){
		showerr('企业名称不能为空！');
	}
	if(strlen($title)<10){
		showerr("公司全称小于5个字不规范!");
	}
	if(eregi("^([a-z0-9]+)$",$title)){
		//showerr("公司名称不规范!");
	}

	if(!$qy_address){
		showerr('没有填写企业地址！');
	}

	if(!$reg_tel){
		showerr('没有填写企业联系电话 ！');
	}

	if($mobphone && !ereg("^1([0-9]{10})$",$mobphone)){
		showerr('手机号码有误！');
	}

	if($password!=$password2){
		showerr("两次输入密码不一样");
	}elseif ($msn&&!ereg("^[-a-zA-Z0-9_\.]+\@([0-9A-Za-z][0-9A-Za-z-]+\.)+[A-Za-z]{2,5}$",$msn)) {
		showerr("MSN不符合规则"); 
	}
	if($webdb[forbidRegName]){
		$detail=explode("\r\n",$webdb[forbidRegName]);
		if(in_array($username,$detail)){
			showerr("受保护的帐号,不允许使用,请更换一个吧");
		}
	}
	$msn = filtrate($msn);
	$homepage = filtrate($homepage);	

	if($groupid==3||$groupid==4||$memberlevel[$groupid]||!in_array($groupid,explode(",",$webdb[reg_group]))){
		$groupid=8;
	}
	$groupid || $groupid=8;
	$gtype=0;
	
	if($webdb['RegQyNoNeedFull']){	//后台设置不填完整信息也可以成为企业会员
		if($webdb['RegQyNeedCheck']){	//注册成为企业会员,需要人工审核
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

	//用户注册
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

	if($webdb['RegQyNoNeedFull']){	//后台设置不填完整信息也可以成为企业会员
		$db->query("INSERT INTO `{$_pre}company` ( `title` ,`uid` , `username` , `posttime` , `yz` , `yzer` , `yztime` , `qy_contact_sex` , `qy_contact_tel` , `qy_contact_mobile` , `qy_contact_email` , `qy_website` , `qq` , `qy_address`, `qy_contact` ,`city_id`) VALUES ( '$title', '$uid', '$username', '$timestamp','$qy_yz', '', '$timestamp','$sex', '$reg_tel', '$mobphone',  '$email', '$homepage', '$oicq', '$qy_address','$qy_contact','$city_id');");
	}

	//用户登录
	$cookietime = 3600;
	$userDB->login($username,$password,$cookietime);

	//注册时间间隔处理
	if($webdb[limitRegTime]){
		set_cookie("limitRegTime",1,$webdb[limitRegTime]*60);
	}
	
	//注册用户自定义字段
	Reg_memberdata_field($uid,$postdb);

	//通行证处理
	if($_COOKIE[passport_url]||$_POST[passport_url]){
		$passport_url=urldecode($_COOKIE[passport_url]?$_COOKIE[passport_url]:$_POST[passport_url]);
		setcookie('passport_url','');
		$userDB->passport_server($username,$passport_url);
	}

	add_user($uid,$webdb[regmoney],'注册得分');

	propagandize_reg($uid,$propagandize_name);	//介绍用户注册奖励积分

	//捆绑QQ帐号
	list($token,$secret,$openid)=explode("\t",mymd5(get_cookie('token_secret'),'DE'));	
	if($openid){
		$rs1 = $db->get_one("SELECT * FROM {$pre}memberdata WHERE `qq_api`='$openid'");
		if(!$rs1){
			$db->query("UPDATE {$pre}memberdata SET `qq_api`='$openid' WHERE username='$username'");
			//refreshto("$webdb[www_url]","帐号捆绑成功!!",1);
		}
	}

	foreach($cArray AS $key=>$value){
		$cArray[$key] = "CP[$key]=".urlencode($value);
	}
	
	reg_qy_mail(array('username'=>$username)); //邮件通知管理员

	if($webdb['RegQyNoNeedFull']){		
		refreshto("$webdb[_www_url]/member/?main=$webdb[_www_url]/hy/member/post_company.php?job=apply&"
		,"恭喜你,成功注册为企业会员,建议你再进一步完善企业信息！",3);
	}else{
		refreshto("$webdb[_www_url]/member/?main=$webdb[_www_url]/hy/member/post_company.php?job=apply&".implode('&',$cArray)
		,"注册成功,但仍需进一步完善企业信息,才能申请为企业会员,否则还将是个人会员！",30);
	}	
}
else
{
	require(ROOT_PATH."inc/head.php");
	require(getTpl('reg'));
	require(ROOT_PATH."inc/foot.php");
}


//注册成为企业用户发送邮件
function reg_qy_mail($array){
	global $webdb,$db,$pre;
	if(!$webdb['RegQySendMail']){
		return ;
	}
	$query = $db->query("SELECT * FROM {$pre}memberdata WHERE groupid=3");
	while($rs = $db->fetch_array($query)){
		send_mail($rs[email],"网站有新的企业会员注册了!","<A HREF='$webdb[www_url]/'>你的网站有新的企业会员注册了,请注意查看,注册用户名是:$array[username]</A>",0);
	}
}
?>