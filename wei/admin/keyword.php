<?php
function_exists('html') OR exit('ERR');

ck_power('keyword');

if($job=="list"){
	$SQL=" 1 ";
	$rows=50;
	$page || $page=1;
	$min=($page-1)*$rows;
	$order="num";
	$desc="DESC";
	$showpage=getpage("{$_pre}keyword","WHERE $SQL","$admin_path&job=list",$rows,"");
	$query=$db->query("SELECT * FROM {$_pre}keyword WHERE $SQL ORDER BY $order $desc LIMIT $min,$rows");
	while($rs=$db->fetch_array($query)){
		$listdb[$rs[kid]]=$rs;
	}
	get_admin_html('list');
}
elseif($job=="work"){
	if(!$listdb){
		showmsg("��ѡ��һƪ����");
	}
	get_admin_html('work');
}
elseif($action=="work"){
	if(!$listdb&&!$kid){
		showmsg("��ѡ��һ��");
	}
	elseif(is_array($listdb))
	{
		foreach($listdb AS $key=>$value){
			dowork($key,$jobs);
		}
	}
	elseif($kid){
		dowork($kid,$jobs);
	}
	$url=$fromurl?$fromurl:$FROMURL;
	refreshto($url,"�����ɹ�",1);
}
elseif($job=="edit"){
	$rsdb=$db->get_one("SELECT * FROM {$_pre}keyword WHERE kid='$kid'");
	$Font_Bold[intval($rsdb[bold])]='checked ';
	get_admin_html('edit');
}
elseif($action=="edit"){
	$db->query("UPDATE `{$_pre}keyword` SET `keywords`='$keywords',`num`='$num',`color`='$color',`bold`='$bold' WHERE kid='$kid'");
	jump("�޸ĳɹ�","$FROMURL",1);
}

function dowork($id,$job){
	global $db,$_pre,$timestamp,$userdb,$webdb;
	$rsdb=$db->get_one("SELECT * FROM {$_pre}keyword WHERE kid='$id' ");
	if($job=="delete"){
		$db->query("DELETE FROM {$_pre}keyword WHERE kid='$id' ");
		$db->query("DELETE FROM {$_pre}keywordid WHERE kid='$id' ");
	}
}

?>