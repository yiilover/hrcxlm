<?php

require(dirname(__FILE__)."/global.php");

$type = filtrate($type);
$keyword = filtrate($keyword);

if($action=="search"){
	if(!$webdb[Info_allowGuesSearch]&&!$lfjid){
		//showerr("���ȵ�¼");
	}
	$keyword=trim($keyword);
	$keyword=str_replace("%",'\%',$keyword);
	$keyword=str_replace("_",'\_',$keyword);
	if(!$keyword){
		showerr('�ؼ��ֲ���Ϊ��!');
	}
	$rows=10;
	if(!$page){
		$page=1;
	}
	$min=($page-1)*$rows;
	$type = ($type=='username') ? $type : "title";
	if($fid){
		$querys = $db->query("SELECT fid FROM {$_pre}sort WHERE `fup`='$fid'");
		while($rs = $db->fetch_array($querys)){
			$fids[]=$rs[fid];
		}
		$fids=implode(",",$fids);
		if($fids){
			$sql_fid = " AND `fid` IN($fids) ";
		}else{
			$sql_fid = " AND `fid`='$fid' ";
		}
	}else{
		$sql_fid = "";
	}
	$SQL="SELECT SQL_CALC_FOUND_ROWS title,id,fid,uid,username,posttime,mid,hits,fname FROM {$_pre}content WHERE $type LIKE '%$keyword%' AND city_id='$city_id' $sql_fid ORDER BY posttime DESC LIMIT $min,$rows ";
	$query = $db->query("$SQL");
	$RS=$db->get_one("SELECT FOUND_ROWS()");
	$shownumbers = $RS['FOUND_ROWS()'];
	$showpage=getpage("","","s.php?action=$action&keyword=".urlencode($keyword)."&type=$type",$rows,$RS['FOUND_ROWS()']);
	while($rs = $db->fetch_array($query)){
		$rs[posttime]=date("Y-m-d H:i",$rs[posttime]);
		@extract($db->get_one("SELECT content FROM {$_pre}content_$rs[mid] WHERE id=$rs[id]"));
		$content=preg_replace('/<([^<]*)>/is',"",$content);	//��HTML������˵�
		$content=preg_replace('/ |��|&nbsp;/is',"",$content);	//�Ѷ���Ŀո�ȥ����
		$content=get_word($content,150);
		$rs[content]=$content;
		
		//$field_db && $Module_db->showfield($field_db,$rs,'list');
		$listdb[]=$rs;
	}
	if(!$listdb){
		//showerr("�ܱ�Ǹ��û���ҵ���Ҫ��ѯ������");
	}
}
$speed_endtime=explode(' ',microtime());
$speed_totaltime.="����ʱ<span>".number_format((($speed_endtime[0]+$speed_endtime[1]-$speed_headtime)/1),6)."</span>�룩";
//��ȡ��ǩ����
$template_file=getTpl("s");
fetch_label_value(array('pagetype'=>'5','file'=>$template_file,'module'=>$webdb['module_id']));

require($template_file);
?>