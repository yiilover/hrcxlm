<?php
!function_exists('html') && exit('ERR');

ck_power('list');

$linkdb=array(
			"ȫ����Ϣ"=>"$admin_path&job=list",
			"����˵���Ϣ"=>"$admin_path&job=list&type=yz&fid=$fid&cityid=$cityid",
			"δ��˵���Ϣ"=>"$admin_path&job=list&type=unyz&fid=$fid&cityid=$cityid",
			"����վ����Ϣ"=>"$admin_path&job=list&type=del&fid=$fid&cityid=$cityid",
			"�Ƽ���Ϣ"=>"$admin_path&job=list&type=levels&fid=$fid&cityid=$cityid",
			);

$fid=intval($fid);

if($job=="list")
{
	$SQL=" WHERE 1 ";
	if($fid>0){
		$SQL.=" AND fid=$fid ";
	}
	
	if($type=="yz"){
		$SQL.=" AND yz=1 ";
	}
	elseif($type=="unyz"){
		$SQL.=" AND yz=0 ";
	}
	elseif($type=="del"){
		$SQL.=" AND yz=2 ";
	}
	elseif($type=="levels"){
		$SQL.=" AND levels=1 ";
	}
	elseif($type=="unlevels"){
		$SQL.=" AND levels=0 ";
	}
	elseif($type=="pic"){
		$SQL.=" AND ispic=1 ";
	}
	elseif($type=="my"){
		$SQL.=" AND uid='$userdb[uid]' ";
	}
	elseif($type=="title"){
		$SQL.=" AND binary title LIKE '%$keyword%' ";
	}
	elseif($type=="id"){
		$SQL.=" AND id='$keyword' ";
	}
	elseif($type=="content"){
		$SQL.=" AND binary content LIKE '%$keyword%' ";
	}
	elseif($type=="username"){
		@extract($db->get_one("SELECT uid FROM {$pre}memberdata WHERE username='$keyword' "));
		if(!$uid){
			showerr("�û�������!");
		}
		$SQL.=" AND uid=$uid ";
	}

	if($cityid){
		$SQL.=" AND city_id=$cityid ";
	}

	$rows=30;
	if($page<1){
		$page=1;
	}
	$min=($page-1)*$rows;
	$order="id";
	$desc="DESC";

	$SQL=" SELECT SQL_CALC_FOUND_ROWS * FROM {$_pre}content $SQL ";

	
	
	$query=$db->query("$SQL ORDER BY $order $desc LIMIT $min,$rows");
	$RS=$db->get_one("SELECT FOUND_ROWS()");
	$RS['FOUND_ROWS()'] && $showpage=getpage(" "," ","$admin_path&job=list&fid=$fid&type=$type&cityid=$cityid&keyword=".urlencode($keyword),$rows,$RS['FOUND_ROWS()']);
	while($rs=$db->fetch_array($query))
	{
		if(!$rs[posttime]){

			$rs=$db->get_one("SELECT * FROM {$_pre}content WHERE id=$rs[id]");
		}

		if(!$rs[yz]){
			$rs[ischeck]="<A HREF='$admin_path&action=work&id=$rs[id]&jobs=yz' style='color:black;'>δ���</A>";
		}elseif( $rs[yz]==1){
			$rs[ischeck]="<A editcode='<A HREF=\"$admin_path&action=work&id=$rs[id]&jobs=unyz\">ȡ�����</A><br/><A HREF=\"$admin_path&action=work&id=$rs[id]&jobs=down\">�¼���Ʒ</A>' click=1 href='javascript:' style='color:blue;'>�����</A>";
		}elseif( $rs[yz]==2 ){
			$rs[ischeck]="<A HREF='$admin_path&action=work&id=$rs[id]&jobs=undel' style='color:#999999;'>���¼�</A>";
		}
		if(!$rs[levels]){
			$rs[iscom]="<A HREF='$admin_path&action=work&id=$rs[id]&jobs=com&levels=1' style=''>δ�Ƽ�</A>";
		}else{
			$rs[iscom]="<A HREF='$admin_path&action=work&id=$rs[id]&jobs=uncom&levels=0' style='color:red;'>���Ƽ�</A>";
		}
		$rs[title2]=urlencode($rs[title]);
		$rs[posttime]=date("m-d",$rs[posttime]);
		$rs[city]=$city_DB[name][$rs[city_id]];

		$rs[url]=get_info_url($rs[id],$rs[fid],$rs[city_id]);

		$listdb[$rs[id]]=$rs;
	}
	//$sort_fid=$Guidedb->Select("{$_pre}sort","fid",$fid,"?job=list");

	get_admin_html('list');
}
elseif($job=="work")
{
	if(!$listdb){
		showerr("��ѡ��һ����Ϣ");
	}
	if($jobs=="move"){
		$sort_fid=$Guidedb->Select("{$_pre}sort","fid");
	}

	get_admin_html('work');
}
elseif($action=="work")
{
	if(!$listdb&&!$id){
		showerr("��ѡ��һ����Ϣ");
	}
	elseif(is_array($listdb))
	{
		foreach($listdb AS $key=>$value){
			dowork($key,$jobs);
		}
	}
	elseif($id){
		dowork($id,$jobs);
	}
	$url=$fromurl?$fromurl:$FROMURL;
	refreshto($url,"�����ɹ�",0);
}


function dowork($id,$job){
	global $db,$_pre,$timestamp,$userdb,$webdb,$Fid_db;
	$RS=$db->get_one("SELECT fid FROM {$_pre}db WHERE id='$id'");

	$rsdb=$db->get_one("SELECT * FROM {$_pre}content WHERE id='$id' ");
	if($job=="delete")
	{
		del_info($id,$rsdb);

		//$db->query(" UPDATE `{$_pre}sort` SET contents=contents-1 WHERE fid='$rsdb[fid]' ");
		//$db->query(" UPDATE `{$_pre}sort` SET contents=contents-1 WHERE fid='$fidDB[fup]' ");
	}
	elseif($job=="move")
	{
		global $fid;
		if($fid){
			$rs=$db->get_one("SELECT name,mid FROM {$_pre}sort WHERE fid='$fid'");
			if($rs[mid]==$rsdb[mid]){
				$db->query("UPDATE {$_pre}content SET fid='$fid',fname='$rs[name]',lastfid='$rsdb[fid]' WHERE id='$id' ");
				$db->query("UPDATE {$_pre}content_$rsdb[mid] SET fid='$fid' WHERE id='$id' ");
			}
		}
	}
	elseif($job=="color")
	{
		global $color;
		$db->query("UPDATE {$_pre}content SET titlecolor='$color' WHERE id='$id' ");
	}
	elseif($job=="yz")
	{
		add_user($rsdb[uid],$webdb[PostInfoMoney],'������Ʒ��������');
		$db->query("UPDATE {$_pre}content SET yz='1' WHERE id='$id' ");
	}
	elseif($job=="unyz")
	{
		add_user($rsdb[uid],-$webdb[PostInfoMoney],'��Ʒ��ȡ����˿ۻ���');
		$db->query("UPDATE {$_pre}content SET yz='0' WHERE id='$id' ");
	}
	elseif($job=="undel")
	{
		$db->query("UPDATE {$_pre}content SET yz='1' WHERE id='$id' ");
	}
	elseif($job=="com")
	{
		global $levels;
		if($levels==1){
			$SQL=",yz=1";
		}
		$db->query("UPDATE {$_pre}content SET levels='$levels',levelstime='$timestamp'$SQL WHERE id='$id' ");
	}
	elseif($job=="uncom")
	{
		$db->query("UPDATE {$_pre}content SET levels='0',levelstime='0' WHERE id='$id' ");
	}
	elseif($job=="down")
	{
		$db->query("UPDATE {$_pre}content SET yz=2 WHERE id='$id' ");
	}
	elseif($job=="top")
	{
		global $toptime;
		$db->query("UPDATE {$_pre}content SET list='$timestamp'+'$toptime' WHERE id='$id' ");
	}
	elseif($job=="untop")
	{
		$db->query("UPDATE {$_pre}content SET list=posttime WHERE id='$id' ");
	}
	elseif($job=="front")
	{
		global $topid;
		if($topid)
		{
			$rs=$db->get_one("SELECT list FROM {$_pre}content WHERE id='$topid' ");
			$list=$rs["list"]+1;
			$db->query("UPDATE {$_pre}content SET list='$list' WHERE id='$id' ");
		}
		else
		{
			$db->query("UPDATE {$_pre}content SET list='$timestamp' WHERE id='$id' ");
		}
	}
	elseif($job=="bottom")
	{
		global $bottomid;
		if($bottomid)
		{
			$rs=$db->get_one("SELECT list FROM {$_pre}content WHERE id='$bottomid' ");
			$list=$rs["list"]-1;
			$db->query("UPDATE {$_pre}content SET list='$list' WHERE id='$id' ");
		}
		else
		{
			$db->query("UPDATE {$_pre}content SET list='0' WHERE id='$id' ");
		}
	}
	elseif($job=="punish")
	{
		global $Type;
		if($Type==1){
			add_user($rsdb[uid],-abs($webdb[ErrSortMoney]),'�����̳���Ϣ�۷�');
		}elseif($Type==2){
			add_user($rsdb[uid],-abs($webdb[illInfoMoney]),'�����̳���Ϣ�۷�');
		}
	}
}
?>