<?php
require(dirname(__FILE__)."/"."global.php");

$rsdb=$db->get_one("SELECT * FROM {$_pre}join WHERE id='$id'");
if(!$rsdb){
	showerr("��������!");
}else if($rsdb['uid']!=$lfjuid){
	showerr("��ûȨ��!");
}else if($rsdb['ifcomment']==1){
	showerr("�˶������Ѿ����۹�,�����ظ�����!");
}
$rss=$db->get_one(" SELECT * FROM {$_pre}content WHERE id='$rsdb[cid]' ");
if(!$rss){
	showerr("ԭ���ݲ�����");
}

if($action=="post"){
	if(!$content){
		showerr("���ݲ���Ϊ��");
	}

	$username=filtrate($lfjid);
	$content=filtrate($content);

	$content=str_replace("@@br@@","<br>",$content);

	//���˲���������
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