<?php
function_exists('html') OR exit('ERR');

ck_power('claim');


if(is_file(dirname(__FILE__)."/../install/claim.sql") && !is_table("{$_pre}claim")){
	$sql = read_file(dirname(__FILE__)."/../install/claim.sql");
	$db->insert_file('',str_replace('qb_',$pre,$sql));
	unlink(dirname(__FILE__)."/../install/claim.sql");
}
 

if($job=="list")
{
	if($type=="A.yz"){
		$SQL.=" AND A.yz=1 ";
	}elseif($type=="unyz"){
		$SQL.=" AND A.yz=0 ";
	}else{
		$SQL.=" 1 ";
	}

	$rows=30;
	if($page<1){
		$page=1;
	}
	$min=($page-1)*$rows;
	
	$query=$db->query("SELECT SQL_CALC_FOUND_ROWS A.*,B.title,B.fid FROM {$_pre}claim A LEFT JOIN {$_pre}content B ON A.id=B.id WHERE $SQL ORDER BY cid DESC LIMIT $min,$rows");
	$RS=$db->get_one("SELECT FOUND_ROWS()");
	$RS['FOUND_ROWS()'] && $showpage=getpage(" "," ","$admin_path&job=$job&type=$type",$rows,$RS['FOUND_ROWS()']);
	while($rs=$db->fetch_array($query))
	{
		if( $rs[yz]==1){
			$rs[ischeck]="<A HREF='$admin_path&action=work&cid=$rs[cid]&jobs=0' onclick=\"return confirm('��ǰ��Ϣ����ʵ,��Ҫȡ����?');\" style='color:blue;'>��ʵ</A>";
		}else{
			$rs[ischeck]="<A HREF='$admin_path&action=work&cid=$rs[cid]&jobs=1' style='color:black;' title='�����������'>�����</A>";
		}
		$rs[posttime]=date("Y-m-d H:i",$rs[posttime]);

		$listdb[]=$rs;
	}
	get_admin_html('list');
}
elseif($action=="work")
{
	if(!table_field("{$_pre}content",'is_claim')){
		$db->query("ALTER TABLE  `{$_pre}content` ADD  `is_claim` TINYINT( 1 ) NOT NULL ;");
	}
	$rs = $db->get_one("SELECT SQL_CALC_FOUND_ROWS A.*,B.title,B.fid,B.id FROM {$_pre}claim A LEFT JOIN {$_pre}content B ON A.id=B.id WHERE A.cid='$cid'");
	if(!$rs[title]){
		showmsg('��Ӧ�������ѱ�ɾ��,����ʧ��!');
	}
	
	$db->query("UPDATE {$_pre}claim SET yz='$jobs' WHERE cid='$cid'");
	if($jobs==1){
		$uid = $rs[uid];
		$username = $rs[username];
		$title="��ϲ��,����������̡�{$rs[title]}�������ͨ��";
		$content="����鿴�������:<A HREF='$Murl/bencandy.php?fid=$rs[fid]&id=$rs[id]&city_id=$rs[city_id]' target='_blank'>$Murl/bencandy.php?fid=$rs[fid]&id=$rs[id]&city_id=$rs[city_id]</A>";
	}else{
		$uid = $rs[cuid];
		$ts = $db->get_one("SELECT * FROM {$pre}memberdata WHERE uid='$uid'");
		$username = $ts[username];
		$title="�ܱ�Ǹ,����������̡�{$rs[title]}��δ��ͨ�����";
		$content="����鿴����:<A HREF='$Murl/bencandy.php?fid=$rs[fid]&id=$rs[id]&city_id=$rs[city_id]' target='_blank'>$Murl/bencandy.php?fid=$rs[fid]&id=$rs[id]&city_id=$rs[city_id]</A>";
	}
	$db->query("UPDATE {$_pre}content SET uid='$uid',username='$username',is_claim='$jobs' WHERE id='$rs[id]'");
	$db->query("UPDATE {$_pre}content_$rs[mid] SET uid='$uid' WHERE id='$rs[id]'");
	$db->query("UPDATE {$_pre}dianping SET cuid='$uid' WHERE id='$rs[id]'");
	$db->query("UPDATE {$_pre}db SET uid='$uid' WHERE id='$rs[id]'");

	if($rs[contact_email]) send_mail($rs[contact_email],$title,$content,0);
	jump("���óɹ�",$FROMURL,0);
}
elseif($action=="del")
{
	$db->query("DELETE FROM {$_pre}claim WHERE cid='$cid'");
	jump("ɾ���ɹ�","$FROMURL",0);
}
elseif($job=="view")
{
	$rsdb = $db->get_one("SELECT SQL_CALC_FOUND_ROWS A.*,B.title,B.fid FROM {$_pre}claim A LEFT JOIN {$_pre}content B ON A.id=B.id WHERE A.cid='$cid'");
	if(!$rsdb[title]){
		showmsg('��Ӧ�������ѱ�ɾ��,�鿴ʧ��!');
	}
	$rsdb[about] = str_replace('\n','<br>',$rsdb[about]);
	$rsdb[pic_license] && $rsdb[pic_license] = tempdir($rsdb[pic_license]);
	$rsdb[pic_idcard] && $rsdb[pic_idcard] = tempdir($rsdb[pic_idcard]);
	$rsdb[posttime]=date("Y-m-d H:i",$rsdb[posttime]);
	get_admin_html('view');
}
?>