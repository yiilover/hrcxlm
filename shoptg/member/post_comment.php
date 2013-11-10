<?php
require(dirname(__FILE__)."/"."global.php");

$rsdb=$db->get_one("SELECT * FROM {$_pre}join WHERE id='$id'");
if(!$rsdb){
	showerr("操作有误!");
}else if($rsdb['uid']!=$lfjuid){
	showerr("你没权限!");
}else if($rsdb['ifcomment']==1){
	showerr("此订单您已经评论过,不可重复评论!");
}
$rss=$db->get_one(" SELECT * FROM {$_pre}content WHERE id='$rsdb[cid]' ");
if(!$rss){
	showerr("原数据不存在");
}

if($action=="post"){
	if(!$content){
		showerr("内容不能为空");
	}

	$username=filtrate($lfjid);
	$content=filtrate($content);

	$content=str_replace("@@br@@","<br>",$content);

	//过滤不健康的字
	$username=replace_bad_word($username);
	$content=replace_bad_word($content);

	$fid=$rss['fid'];

	$db->query("INSERT INTO `{$_pre}comments` (`cuid`, `type`, `id`, `fid`, `uid`, `username`, `posttime`, `content`, `ip`, `icon`, `yz`) VALUES ('$rss[uid]','0','$rsdb[cid]','$fid','$lfjuid','$username','$timestamp','$content','$onlineip','$fens',1)");

	$db->query(" UPDATE {$_pre}content SET comments=comments+1 WHERE id='$rsdb[cid]' ");

	$db->query(" UPDATE {$_pre}join SET ifcomment=1 WHERE id='$id' ");

	refreshto("myorder.php",'',0);
}

require(ROOT_PATH."member/head.php");
require(dirname(__FILE__)."/"."template/post_comment.htm");
require(ROOT_PATH."member/foot.php");
?>