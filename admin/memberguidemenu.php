<?php
!function_exists('html') && exit('ERR');
if(!$gid||$gid==2){
	$gid=8;
}
$typeDB=array('�����û�','��ҵ�û�');
if(!table_field("{$pre}admin_menu",'ifcompany')){
	$db->query("ALTER TABLE `{$pre}admin_menu` ADD `ifcompany` TINYINT( 1 ) NOT NULL ");
}

if($job=='list'&&$Apower[membermenu_list])
{
	$colordb[$gid]='red';

	$select_group=select_group("gid",$gid,"index.php?lfj=$lfj&job=$job",array(2));
	
	foreach($typeDB AS $key=>$value){
		$style = (isset($_GET['type'])&&$key==$_GET['type'])?"red":"";
		$select_group.=" [<A HREF='index.php?lfj=$lfj&job=$job&gid=$gid&type=$key' style='color:$style'>$value</A>] ";
	}
	$SQL = isset($_GET['type'])?" AND ifcompany='$type' ":" ";
	$query = $db->query("SELECT A.*,B.grouptitle FROM {$pre}admin_menu A LEFT JOIN {$pre}group B ON -A.groupid=B.gid WHERE A.groupid='-$gid' AND A.fid=0 $SQL ORDER BY A.list DESC");
	while($rs = $db->fetch_array($query)){
		$listdb[]=$rs;
		$query2 = $db->query("SELECT A.*,B.grouptitle FROM {$pre}admin_menu A LEFT JOIN {$pre}group B ON -A.groupid=B.gid WHERE A.fid='$rs[id]' ORDER BY A.list DESC");
		while($rs2 = $db->fetch_array($query2)){
			$rs2[icon]='&nbsp;&nbsp;&nbsp;&nbsp;|----';
			$listdb[]=$rs2;
		}
	}

	require(dirname(__FILE__)."/"."head.php");
	require(dirname(__FILE__)."/"."template/memberguidemenu/menu.htm");
	require(dirname(__FILE__)."/"."template/memberguidemenu/list.htm");
	require(dirname(__FILE__)."/"."foot.php");
}
elseif($job=='edit'&&$Apower[membermenu_list])
{
	$atc="edit";
	$rsdb=$db->get_one("SELECT * FROM {$pre}admin_menu WHERE id='$id'");
	$gid=$rsdb[groupid];
	$target[intval($rsdb[target])]=' checked ';
	$ifcompany[intval($rsdb[ifcompany])]=' checked ';

	$select_group=select_group("gid",abs($rsdb[groupid]),'');

	$selected=select_fupmenu('fid',$rsdb[fid]);
	require(dirname(__FILE__)."/"."head.php");
	require(dirname(__FILE__)."/"."template/memberguidemenu/menu.htm");
	require(dirname(__FILE__)."/"."template/memberguidemenu/edit.htm");
	require(dirname(__FILE__)."/"."foot.php");
}
elseif($action=='edit'&&$Apower[membermenu_list])
{
	if(!$postdb[name])
	{
		showmsg("���Ʋ���Ϊ��");
	}

	if($gid==2)
	{
		showmsg("�������ο���");
	}

	if(!$postdb['linkurl'])
	{
		//showmsg("���ӵ�ַ����Ϊ��");
	}
	$postdb[name]=filtrate($postdb[name]);
	$postdb[linkurl]=filtrate($postdb[linkurl]);

	$db->query("UPDATE {$pre}admin_menu SET fid='$fid',name='$postdb[name]',linkurl='$postdb[linkurl]',color='$postdb[color]',target='$postdb[target]',list='$postdb[list]',iftier='$postdb[iftier]',`groupid`='-$gid',ifcompany='$postdb[ifcompany]' WHERE id='$id'");
	
	jump("�޸ĳɹ�","?lfj=$lfj&job=list&gid=$gid",1);
}
elseif($job=='add'&&$Apower[membermenu_list])
{
	if(!$gid){
		showmsg("û��ָ�����û���!");
	}
	$target[0]=' checked ';
	$ifcompany[0]=' checked ';
	$atc="add";
	$selected=select_fupmenu('fid',$rsdb[fid]);

	$select_group=select_group("gid",abs($gid),'');

	require(dirname(__FILE__)."/"."head.php");
	require(dirname(__FILE__)."/"."template/memberguidemenu/menu.htm");
	require(dirname(__FILE__)."/"."template/memberguidemenu/edit.htm");
	require(dirname(__FILE__)."/"."foot.php");
}
elseif($action=='add'&&$Apower[membermenu_list])
{
	if($gid==2)
	{
		showmsg("�������ο���");
	}

	if(!$postdb[name]){
		showmsg("���Ʋ���Ϊ��");
	}
	if($fid&&!$postdb['linkurl']){
		showmsg("���ӵ�ַ����Ϊ��");
	}
	if(!$addsort&&!$fid){
		showmsg("��ѡ��һ������");
	}
	$postdb[name]=filtrate($postdb[name]);
	$postdb[linkurl]=filtrate($postdb[linkurl]);

	$db->query("INSERT INTO `{$pre}admin_menu` (`fid`, `name`, `linkurl`, `color`, `target`, `groupid`, `list`,`ifcompany`) VALUES ('$fid', '$postdb[name]', '$postdb[linkurl]', '$postdb[color]', '$postdb[target]','-$gid', '$postdb[list]','$postdb[ifcompany]')");
	
	jump("��ӳɹ�","?lfj=$lfj&job=list&gid=$gid",1);
}
elseif($action=='delete'&&$Apower[membermenu_list])
{
	$rs = $db->get_one("SELECT * FROM {$pre}admin_menu WHERE fid='$id'");
	if($rs){
		showmsg("����ɾ���Ӳ˵����߰��Ӳ˵�����.����ɾ���˲˵�");
	}

	$db->query("DELETE FROM `{$pre}admin_menu` WHERE id='$id'");
	
	jump("ɾ���ɹ�","?lfj=$lfj&job=list&gid=$gid",1);
}
elseif($action=='deleteall'&&$Apower[membermenu_list])
{
	if(!$ids){
		showmsg('������ѡ��һ��!');
	}
	$sucess = $fail = 0;
	arsort($ids);
	foreach($ids AS $id){
		$rs = $db->get_one("SELECT * FROM {$pre}admin_menu WHERE fid='$id'");
		if(!$rs){
			$db->query("DELETE FROM `{$pre}admin_menu` WHERE id='$id'");
			$sucess++;
		}else{
			$fail++;
		}
	}	
	jump("�ɹ�ɾ���˵� {$sucess} ��,ɾ��ʧ�� {$fail} ��","?lfj=$lfj&job=list&gid=$gid",1);
}
elseif($action=="editlist"&&$Apower[membermenu_list])
{
	foreach( $order AS $key=>$value)
	{
		$db->query("UPDATE {$pre}admin_menu SET list='$value' WHERE id='$key'");
	}
	
	jump("�޸ĳɹ�","?lfj=$lfj&job=list&gid=$gid",1);
}
elseif($job=="batch"&&$Apower[membermenu_list])
{
	require(ROOT_PATH."member/menu.php");
	//��ȡģ��ϵͳ�Ļ�Ա�˵�
	$query = $db->query("SELECT * FROM {$pre}module WHERE type=2 AND ifclose=0 ORDER BY list DESC");
	while($rs = $db->fetch_array($query)){
		$array=@include(ROOT_PATH."$rs[dirname]/member/menu.php");
		foreach($array AS $key=>$value){
			$value['link']="/$rs[dirname]/member/".$value['link'];
			$menudb["$rs[name]"][$key]=$value;
		}
	}

	$select_group=select_group("gid",abs($gid),'');

	require(dirname(__FILE__)."/"."head.php");
	require(dirname(__FILE__)."/"."template/memberguidemenu/menu.htm");
	require(dirname(__FILE__)."/"."template/memberguidemenu/sysmenu.htm");
	require(dirname(__FILE__)."/"."foot.php");
}
elseif($action=="batch"&&$Apower[membermenu_list])
{
	$list=count($post_db);
	foreach($post_db AS $key=>$array){
		$list--;

		$rsdb = $db->get_one("SELECT id FROM `{$pre}admin_menu` WHERE `name`='$key' AND `groupid`='-$gid' AND `ifcompany`='$postdb[ifcompany]'");
		if($rsdb){
			$fid = $rsdb[id];
		}else{
			$db->query("INSERT INTO `{$pre}admin_menu` (`name`, `groupid`, `list`,`ifcompany`) VALUES ( '$key','-$gid', '$list','$postdb[ifcompany]')");
			$fid = $db->insert_id();
		}		
		$list2=count($array);
		foreach($array AS $link=>$value){
			$list2--;
			if(!$db->get_one("SELECT id FROM `{$pre}admin_menu` WHERE `linkurl`='$link' AND `groupid`='-$gid' AND `ifcompany`='$postdb[ifcompany]'")){
				$db->query("INSERT INTO `{$pre}admin_menu` (`fid`, `name`, `linkurl`,  `target`, `groupid`, `list`,`ifcompany`) VALUES ('$fid', '$value', '$link','','-$gid', '$list2','$postdb[ifcompany]')");
			}			
		}		
	}
	jump("��ӳɹ�","?lfj=$lfj&job=list&gid=$gid&type=$postdb[ifcompany]",1);
}

function select_fupmenu($name='fid',$id=0){
	global $db,$pre,$gid;
	$gid = abs($gid);
	$select="<select name='$name'><option value='0'>��ѡ��</option>";
	$query = $db->query("SELECT * FROM {$pre}admin_menu WHERE groupid='-$gid' AND fid=0 ORDER BY list DESC");
	while($rs = $db->fetch_array($query)){
		$ckk=$id==$rs[id]?' selected ':'';
		$select.="<option value='$rs[id]' $ckk style='color:blue;'>$rs[name]</option>";
	}
	$select.="</select>";
	return $select;
}