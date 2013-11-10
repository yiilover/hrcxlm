<?php
require(dirname(__FILE__).'/global.php');

$rsdb=$db->get_one("SELECT * FROM {$pre}alonepage WHERE id='$id'");
$db->query("UPDATE {$pre}alonepage SET hits=hits+1 WHERE id='$id' ");

if(!$rsdb){
	showerr("内容不存在");
}elseif($rsdb[ifclose]&&!$web_admin){
	showerr("本文已关闭!");
}

if($job=='makehtml'){
	unset($lfjuid,$web_admin,$lfjid,$lfjdb,$groupdb);
	$groupdb=@include( ROOT_PATH."data/group/2.php");		//以游客身份处理
}

//SEO
$titleDB[title]		= $rsdb[title];
$titleDB[keywords]	= $rsdb[keywords];
$titleDB[description] = $rsdb[descrip];
//模板
$head_tpl=$rsdb['tpl_head'];
$main_tpl=$rsdb['tpl_main'];
$foot_tpl=$rsdb['tpl_foot'];


//获取标签内容
$template_file=html("alonepage",$main_tpl);
fetch_label_value(array('pagetype'=>'9','file'=>$template_file,'module'=>$webdb['module_id']));


if(!$rsdb[ishtml]){
	require_once(ROOT_PATH."inc/encode.php");
	$rsdb[content]=format_text($rsdb[content]);
}else{
	$rsdb[content] = En_TruePath($rsdb[content],0);
}

$rsdb[posttime]=date("Y-m-d H:i:s",$rsdb[posttime]);


require(ROOT_PATH."inc/head.php");
require($template_file);
require(ROOT_PATH."inc/foot.php");

if($job=='makehtml'&&$rsdb[filename]){
	$content=ob_get_contents();
	$path=dirname(ROOT_PATH.$rsdb[filename]);
	if(!is_dir($path)){
		makepath($path);
	}
	write_file(ROOT_PATH."$rsdb[filename]",$content);
	ob_end_clean();
	if($adminurl){
		if($ids){
			$detail = explode(',',$ids);
			$id = $detail[0];
			unset($detail[0]);
			$ids = implode(',',$detail);
			echo "请稍候...$ids<META HTTP-EQUIV=REFRESH CONTENT='0;URL=?id=$id&ids=$ids&job=$job&adminurl=$adminurl'>";
		}else{
			echo "生成完毕!<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$adminurl/index.php?lfj=alonepage&job=list'>";
		}
	}else{
		echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$webdb[www_url]/$rsdb[filename]'>";
	}	
	exit;
}
?>