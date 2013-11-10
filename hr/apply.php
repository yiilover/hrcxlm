<?php
require(dirname(__FILE__)."/global.php");

if(!$lfjid){
	showerr('请先登录!');
}

if($job=='post'){
	$rsdb = $db->get_one("SELECT * FROM {$_pre}content WHERE id='$id'");
	if(!$rsdb){
		showerr('职位不存在!');
	}
	if($db->get_one("SELECT * FROM {$_pre}apply WHERE cid='$id' AND uid='$lfjuid'")){
		showerr('你已经申请过该职位了!');
	}
	@extract($db->get_one("SELECT id AS join_id FROM {$_pre}person WHERE uid='$lfjuid'"));
	if(!$join_id){
		showerr('你的简历不存在!');
	}
	$db->query("INSERT INTO {$_pre}apply SET cid='$id',uid='$lfjuid',join_id='$join_id',posttime='$timestamp'");

	if($webdb[apply_job_mail]){

		$title = "你发布的职位“{$rsdb[title]}”有人求职了";
		$content = "请点击以下网址查看该用户的简历:<A HREF='$webdb[www_url]/hr/joinshow.php?uid=$lfjuid' target='_blank'>$webdb[www_url]/hr/joinshow.php?uid=$lfjuid</A>";

		$mdb = $userDB->get_info($rsdb[uid]);

		send_mail($mdb[email],$title,$content,0);
	}
	refreshto("./",'申请成功',1);
}

?>