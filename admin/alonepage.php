<?php
!function_exists('html') && exit('ERR');
if($job=="edit"&&$Apower[alonepage_list])
{

	$rsdb=$db->get_one("SELECT * FROM `{$pre}alonepage` WHERE id='$id'");
	//��ʵ��ַ��ԭ
	$rsdb[content]=En_TruePath($rsdb[content],0);

	$rsdb[content]=editor_replace($rsdb[content]);
	$style_select=select_style('postdb[style]',$rsdb[style]);


	//$tpl_head=select_template("postdb[tpl_head]",7,"$rsdb[tpl_head]");
	//$tpl_foot=select_template("postdb[tpl_foot]",8,"$rsdb[tpl_foot]");
	//$tpl_main=select_template("postdb[tpl_main]",9,"$rsdb[tpl_main]");


	$tpl_head=select_template("",7,$rsdb[tpl_head]);
	$tpl_head=str_replace("<select","<select onChange='get_obj(\"head_tpl\").value=this.options[this.selectedIndex].value;'",$tpl_head);
	$tpl_foot=select_template("",8,$rsdb[tpl_foot]);
	$tpl_foot=str_replace("<select","<select onChange='get_obj(\"foot_tpl\").value=this.options[this.selectedIndex].value;'",$tpl_foot);
	$tpl_main=select_template("",9,$rsdb[tpl_main]);
	$tpl_main=str_replace("<select","<select onChange='get_obj(\"main_tpl\").value=this.options[this.selectedIndex].value;'",$tpl_main);



	require(dirname(__FILE__)."/"."head.php");
	require(dirname(__FILE__)."/"."template/alonepage/menu.htm");
	require(dirname(__FILE__)."/"."template/alonepage/edit.htm");
	require(dirname(__FILE__)."/"."foot.php");
}
elseif($job=="add"&&$Apower[alonepage_list])
{
	$style_select=select_style('postdb[style]',$rsdb[style]);
	$tpl_head=select_template('',7,"$rsdb[tpl_head]");
	$tpl_foot=select_template('',8,"$rsdb[tpl_foot]");
	$tpl_main=select_template('',9,"$rsdb[tpl_main]");
	$rsdb[filename]=$timestamp.'.htm';
	require(dirname(__FILE__)."/"."head.php");
	require(dirname(__FILE__)."/"."template/alonepage/menu.htm");
	require(dirname(__FILE__)."/"."template/alonepage/edit.htm");
	require(dirname(__FILE__)."/"."foot.php");
}
elseif($action=="add"&&$Apower[alonepage_list])
{
	if($postdb[filename]&&!eregi("(\.html|\.htm)$",$postdb[filename])){
		showmsg("��̬��ҳ��ֻ����.html������.htm�ļ�");
	}
	check_file_exists($postdb);
	//�Ե�ַ������
	$postdb[content]=En_TruePath($postdb[content]);
	$db->query("INSERT INTO `{$pre}alonepage` ( `fid` , `name` ,`title` , `posttime` , `uid` , `username` , `style` , `tpl_head` , `tpl_foot` , `tpl_main` , `filename` , `filepath` , `keywords` , `content` ,`descrip`,ishtml) VALUES ('$postdb[fid]','$postdb[name]','$postdb[title]','$timestamp','$postdb[uid]','$postdb[username]','$postdb[style]','$postdb[tpl_head]','$postdb[tpl_foot]','$postdb[tpl_main]','$postdb[filename]','$postdb[filepath]','$postdb[keywords]','$postdb[content]','$postdb[descrip]',1)");
	jump("��ӳɹ�","index.php?lfj=alonepage&job=list",1);
}
elseif($action=="list"&&$Apower[alonepage_list])
{
	if(!$iddb[0]){
		showmsg('��ѡ��һ��!');
	}
	$id = $iddb[0];
	unset($iddb[0]);
	if($iddb[1])$ids = implode(',',$iddb);
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$webdb[www_url]/do/alonepage.php?id=$id&ids=$ids&job=makehtml&adminurl=$webdb[admin_url]'>";
	exit;
}
elseif($action=="check"&&$Apower[alonepage_list])
{
	if($ifclose){
		$rsdb=$db->get_one("SELECT * FROM {$pre}alonepage WHERE id='$id'");
		unlink(ROOT_PATH."$rsdb[filename]");
	}
	$db->query("UPDATE `{$pre}alonepage` SET `ifclose`='$ifclose' WHERE id='$id'");
	jump("���óɹ�",$FROMURL,0);
}
elseif($job=="list"&&$Apower[alonepage_list])
{
	if(!table_field("{$pre}alonepage",'ifclose')){
		$db->query("ALTER TABLE `{$pre}alonepage` ADD `ifclose` TINYINT( 1 ) NOT NULL");
	}
	!$page && $page=1;
	$rows=50;
	$min=($page-1)*$rows;
	$showpage=getpage("`{$pre}alonepage`","","index.php?lfj=alonepage&job=list",$rows);
	$query=$db->query("SELECT * FROM `{$pre}alonepage` ORDER BY id DESC LIMIT $min,$rows");
	while($rs=$db->fetch_array($query)){
		$rs[posttime]=date("Y-m-d H:i",$rs[posttime]);
		if($rs[ifclose]){
			$rs[_ifclose]="<A HREF='?lfj=$lfj&action=check&id=$rs[id]&ifclose=0'><img alt='��ǰ���ڹر�״̬' src='../member/images/check_no.gif' border=0></A>";
			$rs[checked]='';
		}else{
			$rs[checked]=' checked ';
			$rs[_ifclose]="<A HREF='?lfj=$lfj&action=check&id=$rs[id]&ifclose=1'><img alt='��ǰ���ڿ���״̬' src='../member/images/check_yes.gif' border=0></A>";
		}
		$listdb[]=$rs;
	}
	require(dirname(__FILE__)."/"."head.php");
	require(dirname(__FILE__)."/"."template/alonepage/menu.htm");
	require(dirname(__FILE__)."/"."template/alonepage/list.htm");
	require(dirname(__FILE__)."/"."foot.php");
}
elseif($action=="delete"&&$Apower[alonepage_list])
{
	$rs=$db->get_one("SELECT * FROM `{$pre}alonepage` WHERE id='$id'");
	unlink(ROOT_PATH.$rs[filename]);
	$db->query("DELETE FROM `{$pre}alonepage` WHERE id='$id'");
	jump("ɾ���ɹ�","index.php?lfj=alonepage&job=list",2);
}
elseif($action=="edit"&&$Apower[alonepage_list])
{
	check_file_exists($postdb);
	if($postdb[filename]&&!eregi("(\.html|\.htm)$",$postdb[filename])){
		showmsg("��̬��ҳ��ֻ����.html������.htm�ļ�");
	}
	$postdb[content]=En_TruePath($postdb[content]);
	$db->query("UPDATE `{$pre}alonepage` SET fid='$postdb[fid]',name='$postdb[name]',title='$postdb[title]',posttime='$timestamp',uid='$postdb[uid]',username='$postdb[username]',style='$postdb[style]',tpl_head='$postdb[tpl_head]',tpl_foot='$postdb[tpl_foot]',tpl_main='$postdb[tpl_main]',filename='$postdb[filename]',filepath='$postdb[filepath]',keywords='$postdb[keywords]',content='$postdb[content]',descrip='$postdb[descrip]',ishtml=1 WHERE id='$id' ");
	jump("�޸ĳɹ�","index.php?lfj=alonepage&job=edit&id=$id",1);
}

function check_file_exists($postdb){
	if($postdb[tpl_head] && !is_file(ROOT_PATH.$postdb[tpl_head])){
		showmsg('ͷ��ģ���ļ�·������'.$postdb[tpl_head]);
	}elseif($postdb[tpl_foot] && !is_file(ROOT_PATH.$postdb[tpl_foot])){
		showmsg('�ײ�ģ���ļ�·������'.$postdb[tpl_foot]);
	}elseif($postdb[tpl_main] && !is_file(ROOT_PATH.$postdb[tpl_main])){
		showmsg('����ģ���ļ�·������'.$postdb[tpl_main]);
	}	
}