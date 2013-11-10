<?php
require_once("global.php");

if(!$lfjid){
	showerr('请先登录!');
}



$fidDB = array('mid'=>3);


/**
*模型参数配置文件
**/
$field_db = $module_DB[$fidDB[mid]][field];
$ifdp = $module_DB[$fidDB[mid]][ifdp];
$m_config[moduleSet][useMap] = $module_DB[$fidDB[mid]][config][moduleSet][useMap];


$lfjdb[money]=$lfjdb[_money]=intval(get_money($lfjuid));




if($action=="postnew"||$action=="edit"){

	$postdb['title']=filtrate($postdb['title']);
	$postdb['keywords']=filtrate($postdb['keywords']);
	if(!$postdb[title]){
		showerr("展览馆名称不能为空");
	}elseif(strlen($postdb[title])>80){
		showerr("展览馆名称不能大于40个汉字.");
	}
}

/**处理提交的新发表内容**/
if($action=="postnew")
{
	/*验证码处理*/
	if(!$web_admin){
		if(!check_imgnum($yzimg)){		
			showerr("验证码不符合,发布失败");
		}
	}

	$postdb['list']=$timestamp;
	if($iftop){		//推荐置顶
		@extract($db->get_one("SELECT COUNT(*) AS NUM FROM `{$_pre}room` WHERE list>'$timestamp' AND fid='$fid' AND city_id='$postdb[city_id]'"));
		if($webdb[Info_TopNum]&&$NUM>=$webdb[Info_TopNum]){
			showerr("当前栏目置顶信息已达到上限!");
		}
		$postdb['list']+=3600*24*$webdb[Info_TopDay];
		if($lfjdb[money]<$webdb[Info_TopMoney]){
			showerr("你的{$webdb[MoneyName]}不足:$webdb[Info_TopMoney],不能选择置顶");
		}
		$lfjdb[money]=$lfjdb[money]-$webdb[Info_TopMoney];	//为下面做判断积分是否足够
	}

	

	
	if(eregi("[a-z0-9]{15,}",$postdb[title])){
		showerr("请认真写好展览馆名称!");
	}
	if(eregi("[a-z0-9]{25,}",$postdb[content])){
		//showerr("请认真填写内容!");
	}
	
	//自定义字段进行校正检查是否合法
	$Module_db->checkpost($field_db,$postdb,'');

	//上传本地图片
	post_info_photo();

	unset($num,$postdb[picurl]);
	foreach( $photodb AS $key=>$value ){
		if(!$value || !eregi("(gif|jpg|png)$",$value)){
			continue;
		}
		if($titledb[$key]>100){
			showerr("标题不能大于50个汉字");
		}
		$num++;
		if(!$postdb[picurl]){
			if(is_file(ROOT_PATH."$webdb[updir]/$value.gif")){
				$postdb[picurl]="$value.gif";
			}else{
				$postdb[picurl]=$value;
			}
		}
	}

	$postdb[ispic]=$postdb[picurl]?1:0;

	//是否自动通过审核
	$postdb[yz] = 1;

	if($postdb[yz]==1){
		add_user($lfjdb[uid],$webdb[PostInfoMoney],'发布信息奖分');
	}


	


	/*往标题表插入内容*/
	$db->query("INSERT INTO `{$_pre}room` (`title` , `mid` ,`fid` , `fname` ,  `posttime` , `list` , `uid` , `username` ,  `picurl` , `ispic` , `yz` , `keywords` , `ip` , `money` , `city_id`,`picnum`) 
	VALUES (
	'$postdb[title]','$fidDB[mid]','$fid','$fidDB[name]','$timestamp','$postdb[list]','$lfjdb[uid]','$lfjdb[username]','$postdb[picurl]','$postdb[ispic]','$postdb[yz]','$postdb[keywords]','$onlineip','$postdb[money]','$postdb[city_id]','$num')");

	$id=$db->insert_id();


	//插入图片
	foreach( $photodb AS $key=>$value ){
		if(!$value || !eregi("(gif|jpg|png)$",$value)){
			continue;
		}
		$titledb[$key]=filtrate($titledb[$key]);
		$value=filtrate($value);
		$db->query("INSERT INTO `{$_pre}pic` ( `id` , `fid` , `mid` , `uid` , `type` , `imgurl` , `name` ) VALUES ( '$id', '$fid', '$mid', '$lfjuid', '1', '$value', '{$titledb[$key]}')");
	}

	unset($sqldb);
	$sqldb[]="id='$id'";
	$sqldb[]="fid='$fid'";
	$sqldb[]="uid='$lfjuid'";

	/*检查判断辅信息表要插入哪些字段的内容*/
	foreach( $field_db AS $key=>$value){
		isset($postdb[$key]) && $sqldb[]="`{$key}`='{$postdb[$key]}'";
	}

	$sql=implode(",",$sqldb);

	/*往辅信息表插入内容*/
	$db->query("INSERT INTO `{$_pre}content_$fidDB[mid]` SET $sql");

	refreshto($FROMURL,"<a href='listroom.php'>返回列表</a> <a href='../showroom.php?id=$id' target='_blank'>查看效果</a>",600);

}

/*删除内容,直接删除,不保留*/
elseif($action=="del")
{
	
	$rsdb=$db->get_one("SELECT A.*,B.* FROM `{$_pre}room` A LEFT JOIN `{$_pre}content_$fidDB[mid]` B ON A.id=B.id WHERE A.id='$id'");


	
	if($rsdb[uid]!=$lfjuid&&!$web_admin&&!in_array($lfjid,explode(",",$fidDB[admin])))
	{
		showerr("你没权限!");
	}

	del_info($id,$rsdb);

	if($rsdb[yz]){
		add_user($lfjdb[uid],-$webdb[PostInfoMoney],'删除信息扣分');
	}

	refreshto($FROMURL,"删除成功");
}

/*编辑内容*/
elseif($job=="edit")
{
	
	$rsdb=$db->get_one("SELECT B.*,A.* FROM `{$_pre}room` A LEFT JOIN `{$_pre}content_$fidDB[mid]` B ON A.id=B.id WHERE A.id='$id'");

	if($rsdb[uid]!=$lfjuid&&!$web_admin&&!in_array($lfjid,explode(",",$fidDB[admin]))){	
		showerr('你没权限!');
	}
	
	/*表单默认变量作处理*/
	$Module_db->formGetVale($field_db,$rsdb);

	$atc="edit";



	$rsdb['list']>$timestamp?($ifTop[1]=' checked '):($ifTop[0]=' checked ');

	$rsdb[price]==0 && $rsdb[price]='';
	
	$listdb = array();
	$query = $db->query("SELECT * FROM {$_pre}pic WHERE id='$id' AND type=1");
	while($rs = $db->fetch_array($query)){
		$listdb[$rs[pid]]=$rs;
	}


	require(ROOT_PATH."member/head.php");
	require(getTpl("post_$fidDB[mid]"));
	require(ROOT_PATH."member/foot.php");
}

/*处理提交的内容做修改*/
elseif($action=="edit")
{

	$rsdb=$db->get_one("SELECT A.*,B.* FROM `{$_pre}room` A LEFT JOIN `{$_pre}content_$fidDB[mid]` B ON A.id=B.id WHERE A.id='$id'");

	if($rsdb[uid]!=$lfjuid&&!$web_admin&&!in_array($lfjid,explode(",",$fidDB[admin]))){
		showerr("你无权修改");
	}


	if($iftop&&$rsdb['list']<$timestamp){
		@extract($db->get_one("SELECT COUNT(*) AS NUM FROM `{$_pre}room` WHERE list>'$timestamp' AND fid='$fid' AND city_id='$postdb[city_id]'"));
		if($webdb[Info_TopNum]&&$NUM>=$webdb[Info_TopNum]){
			showerr("当前栏目置顶信息已达到上限!");
		}
		if($lfjdb[money]<$webdb[Info_TopMoney]){
			showerr("你的积分不足:$webdb[Info_TopMoney],不能选择置顶");
		}
	}
	
	//自定义字段进行校正检查是否合法
	$Module_db->checkpost($field_db,$postdb,$rsdb);

	//上传本地图片
	post_info_photo();

	unset($num,$postdb[picurl]);
	foreach( $photodb AS $key=>$value ){

		if(!$value&&$piddb[$key]){
			$db->query("DELETE FROM `{$_pre}pic` WHERE pid='{$piddb[$key]}' AND id='$id' AND type=1");
		}

		if(!$value || !eregi("(gif|jpg|png)$",$value)){
			continue;
		}
		$titledb[$key]=filtrate($titledb[$key]);
		$value=filtrate($value);
		if($titledb[$key]>100){
			showerr("标题不能大于50个汉字");
		}
		$num++;
		if($piddb[$key]){		
			$db->query("UPDATE `{$_pre}pic` SET name='{$titledb[$key]}',imgurl='$value' WHERE pid='{$piddb[$key]}' AND id='$id' AND type=1");
		}else{
			$db->query("INSERT INTO `{$_pre}pic` ( `id` , `fid` , `mid` , `uid` , `type` , `imgurl` , `name` ) VALUES ( '$id', '$fid', '$mid', '$lfjuid', '1', '$value', '{$titledb[$key]}')");
		}
		if(!$postdb[picurl]){
			if(is_file(ROOT_PATH."$webdb[updir]/$value.gif")){
				$postdb[picurl]="$value.gif";
			}else{
				$postdb[picurl]=$value;
			}
		}
	}

	/*判断是否为图片主题*/
	$postdb[ispic]=$postdb[picurl]?1:0;




	/*更新主信息表内容*/
	$db->query("UPDATE `{$_pre}room` SET title='$postdb[title]',keywords='$postdb[keywords]',picurl='$postdb[picurl]',ispic='$postdb[ispic]',picnum='$num' WHERE id='$id'");


	/*检查判断辅信息表要插入哪些字段的内容*/
	unset($sqldb);
	foreach( $field_db AS $key=>$value){
		$sqldb[]="`$key`='{$postdb[$key]}'";
	}	
	$sql=implode(",",$sqldb);

	/*更新辅信息表*/
	$db->query("UPDATE `{$_pre}content_$fidDB[mid]` SET $sql WHERE id='$id'");

	refreshto($FROMURL,"<a href='$FROMURL'>返回修改</a> <a href='../showroom.php?id=$id' target='_blank'>查看效果</a>",600);
}
else
{
	/*模块设置时,有些字段有默认值*/
	foreach( $field_db AS $key=>$rs){	
		if($rs[form_value]){		
			$rsdb[$key]=$rs[form_value];
		}
	}

	/*表单默认变量作处理*/
	$Module_db->formGetVale($field_db,$rsdb);


	$atc="postnew";

	$ifTop[0]=' checked ';

	$listdb=array('');

	require(ROOT_PATH."member/head.php");
	require(getTpl("post_$fidDB[mid]"));
	require(ROOT_PATH."member/foot.php");
}


?>