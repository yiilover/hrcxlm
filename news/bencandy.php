<?php
require(dirname(__FILE__)."/"."global.php");
@include(dirname(__FILE__)."/"."data/guide_fid.php");

$id=intval($id);

/**
*获取栏目与模块配置参数
**/
$fidDB=$db->get_one("SELECT A.* FROM {$_pre}sort A WHERE A.fid='$fid'");

if(!$fidDB){
	showerr("栏目不存在");
}

$db->query("UPDATE {$_pre}content SET hits=hits+1,lastview='$timestamp' WHERE id=$id");



/**
*获取信息正文的内容
**/

$rsdb=$db->get_one("SELECT B.*,A.* FROM `{$_pre}content` A LEFT JOIN `{$_pre}content_1` B ON A.id=B.id WHERE A.id='$id' LIMIT 1");

if(!$rsdb){
	showerr("内容不存在");
}elseif($fid!=$rsdb[fid]){
	showerr("FID有误,不一致");
}

if($rsdb[city_id]!=$city_id){
	if($city_DB[domain][$rsdb[city_id]]){
		echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL={$city_DB[domain][$rsdb[city_id]]}/{$ModuleDB[$webdb[module_pre]][dirname]}/bencandy.php?fid=$fid&id=$id'>";
		exit;
	}
}


//SEO
$titleDB[title]		= filtrate("$rsdb[title] - $webdb[Info_webname]");
$titleDB[keywords]	= filtrate("$rsdb[keywords]");
$rsdb[description] || $rsdb[description] = get_word(str_replace(array(' ','　',"\t","\n","\r"),array(''),preg_replace('/<([^<]*)>/is',"",$rsdb[content])),200);
$titleDB[description] = filtrate($rsdb[description]);

/**
*文章检查
**/
check_article($rsdb);

$rsdb[content]=En_TruePath($rsdb[content],0,1);

$rsdb[posttime]=date("Y-m-d H:i:s",$rsdb[posttime]);

$rsdb[picurl] && $rsdb[picurl]=tempdir($rsdb[picurl]);

//内容页个性头部与尾部
get_show_tpl($head_tpl,$foot_tpl,$main_tpl);

//获取标签内容
$template_file=getTpl("bencandy",$main_tpl);
fetch_label_value(array('pagetype'=>'3','file'=>$template_file,'module'=>$webdb['module_id']));

$showpage=getpage("","","bencandy.php?fid=$fid&id=$id",1,$rsdb[pages]);

if($rsdb[iframeurl])
{
	$head_tpl=$foot_tpl="template/default/none.htm";
	$main_tpl="template/default/bencandy_iframe.htm";
}

$rsdb[content]=show_keyword($rsdb[content]);	//突出显示关键字

/**
*上一篇与下一篇,比较影响速度
**/
$nextdb=$db->get_one("SELECT title,id,fid FROM {$_pre}content WHERE id<'$id' AND fid='$fid' AND yz=1 ORDER BY id DESC LIMIT 1");
$nextdb[subject]=get_word($nextdb[title],34);
$backdb=$db->get_one("SELECT title,id,fid FROM {$_pre}content WHERE id>'$id' AND fid='$fid' AND yz=1 ORDER BY id ASC LIMIT 1");
$backdb[subject]=get_word($backdb[title],34);

require(ROOT_PATH."inc/head.php");
require(getTpl("bencandy",$main_tpl));
require(ROOT_PATH."inc/foot.php");


function show_keyword($content){
	global $Key_word,$webdb,$pre,$db;
	if(!$webdb[ifShowKeyword]){
		return $content;
	}
	@include(Mpath."data/keyword.php");
	//把图片描述去掉
	//$content=preg_replace("/ alt=([^ >]+)/is","",$content);
	foreach( $Key_word AS $key=>$value){
		if(!$value){
			$value="$webdb[www_url]/news/search.php?type=title&action=search&keyword=".urlencode($key);
		}
		//$rs = $db->get_one("SELECT num FROM {$pre}keyword WHERE `keywords` = '{$key}'");
		//$content=str_replace_limit($key,"<a href=$value style=text-decoration:underline;font-size:14px;color:{$webdb[ShowKeywordColor]}; target=_blank>$key</a>",$content,$rs[num]);
		//$content=str_replace_limit($key,"<a href=$value style=text-decoration:underline;font-size:14px;color:{$webdb[ShowKeywordColor]}; target=_blank>$key</a>",$content,2);	//重复的关键字只能显示两次

		$search[]=$key;
		$replace[]="<a href=$value style=text-decoration:underline;font-size:14px;color:{$webdb[ShowKeywordColor]}; target=_blank>$key</a>";
	}
	$search && $content=str_replace_limit($search,$replace,$content,1);
	return $content;
}

function str_replace_limit($search, $replace, $subject, $limit=-1) {
    if (is_array($search)) {
         foreach ($search as $k=>$v) {
             $search[$k] = "/(?!<[^>]+)".preg_quote($search[$k],'/')."(?![^<]*>)/";
        }
    }else{
         $search = "/(?!<[^>]+)".preg_quote($search,'/')."(?![^<]*>)/";
    }
    return preg_replace($search, $replace, $subject, $limit);
}

/**
*文章检查
**/
function check_article($rsdb){
	global $fidDB,$web_admin,$groupdb,$timestamp,$lfjid,$lfjuid,$fid,$id,$buy,$lfjdb,$webdb,$pre,$_pre,$db;
	
	if($lfjid&&($web_admin||$lfjid==$rsdb[uid]||in_array($lfjid,explode(",",$fidDB[admin]))))
	{
		$power=1;
	}
	if(!$rsdb)
	{
		showerr("内容不存在");
	}
	if( $fidDB[allowviewcontent]&&!$power&&!in_array($groupdb[gid],explode(",",$fidDB[allowviewcontent])) )
	{
		showerr("本栏目设置,你所在用户组不允许浏览内容");
	}

	if( $rsdb[allowview]&&!$power&&!in_array($groupdb[gid],explode(",",$rsdb[allowview])) )
	{
		showerr("本文设置,你所在用户组不允许浏览内容");
	}

	//设置了开始浏览日期限制
	if($rsdb[begintime]&&$timestamp<$rsdb[begintime]&&!$power)
	{
		$rsdb[begintime]=date("Y-m-d H:i:s",$rsdb[begintime]);
		showerr("<font color='red' ><u>很抱歉,作者设置了本文内容只有到了“{$rsdb[begintime]}”那个时间才可以查看</u></font>");
	}

	//设置了失效浏览日期限制
	if($rsdb[endtime]&&$timestamp>$rsdb[endtime]&&!$power)
	{
		$rsdb[endtime]=date("Y-m-d H:i:s",$rsdb[endtime]);
		showerr("<font color='red' ><u>很抱歉,发布者设置了本文内容最后查看期限是“{$rsdb[endtime]}”，现在已超过了这个期限，所以不能查看</u></font>");
	}

	if($rsdb[yz]==2&&!$web_admin)
	{
		showerr("回收站的内容只有管理员才可以查看");
	}
	//未审核
	if(!$rsdb[yz]&&!$webdb[viewNoPassArticle]&&!$power)
	{
		showerr("<font color='red' ><u>很抱歉,本文还没通过验证,你不能查看</u></font>");
	}

	//跳转到外面
	if($rsdb[jumpurl])
	{
		echo "页面正在跳转中，请稍候...<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$rsdb[jumpurl]'>";
		exit;
	}

	//文章密码
	if($rsdb[passwd])
	{
		if( $_POST[password] && $_POST[TYPE] == 'article'  )
		{
			if( $_POST[password] != $rsdb[passwd] )
			{
				echo "<A HREF=\"?fid=$fid&id=$id\">密码不正确,点击返回</A>";
				exit;
			}
			else
			{
				setcookie("article_passwd_$_pre$id",$rsdb[passwd]);
				$_COOKIE["article_passwd_$_pre$id"]=$rsdb[passwd];
			}
		}
		if( $_COOKIE["article_passwd_$_pre$id"] != $rsdb[passwd] )
		{
			echo "<CENTER><form name=\"form1\" method=\"post\" action=\"\">请输入文章密码:<input type=\"password\" name=\"password\"><input type=\"hidden\" name=\"TYPE\" value=\"article\"><input type=\"submit\" name=\"Submit\" value=\"提交\"></form></CENTER>";
			exit;
		}
	}

	//栏目密码
	if($fidDB[passwd])
	{
		if( $_POST[password] && $_POST[TYPE] == 'sort' )
		{
			if( $_POST[password] != $fidDB[passwd] )
			{
				echo "<A HREF=\"?fid=$fid&aid=$aid\">密码不正确,点击返回</A>";
				exit;
			}
			else
			{
				setcookie("sort_passwd_$_pre$fid",$fidDB[passwd]);
				$_COOKIE["sort_passwd_$_pre$fid"]=$fidDB[passwd];
			}
		}
		if( $_COOKIE["sort_passwd_$_pre$fid"] != $fidDB[passwd] )
		{
			echo "<CENTER><form name=\"form1\" method=\"post\" action=\"\">请输入栏目密码:<input type=\"password\" name=\"password\"><input type=\"hidden\" name=\"TYPE\" value=\"sort\"><input type=\"submit\" name=\"Submit\" value=\"提交\"></form></CENTER>";
			exit;
		}
	}

	//积分处理
	if( !$power && $rsdb[money]=abs($rsdb[money])){
		if(!$lfjuid)
		{
			showerr("请先登录,需要支付{$rsdb[money]}{$webdb[MoneyName]}才能查看");
		}
		elseif(!strstr($rsdb[buyuser],",$lfjid,"))
		{
			$lfjdb[money]=get_money($lfjuid);
			if($lfjdb[money]<$rsdb[money])
			{
				showerr("你的{$webdb[MoneyName]}不足$rsdb[money]");
			}
			elseif($buy==1)
			{
				add_user($lfjuid,"-$rsdb[money]",'查看资讯内容扣分');
				add_user($rsdb[uid],"$rsdb[money]",'用户查看我的资讯得分');
				$rsdb[buyuser]=$rsdb[buyuser]?",{$lfjid}{$rsdb[buyuser]}":",$lfjid,";
				$db->query("UPDATE {$_pre}content SET buyuser='$rsdb[buyuser]' WHERE id=$id");
				refreshto("?fid=$fid&id=$id","购买成功,你刚刚消耗了{$webdb[MoneyName]}{$rsdb[money]}{$webdb[MoneyDW]}",3);
			}
			else
			{
				showerr("你需要消耗{$webdb[MoneyName]}{$rsdb[money]}{$webdb[MoneyDW]}才有权限查看,是否继续<br><br>[<A HREF='?fid=$fid&id=$id&buy=1'>我要继续</A>]");
			}
		}
	}
}

?>