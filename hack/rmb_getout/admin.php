<?php
!function_exists('html') && exit('ERR');
if($job=='list'&&$Apower[rmb_getout])
{
	if(!$page){
		$page=1;
	}
	$rows=50;
	$min=($page-1)*$rows;
	$showpage=getpage("`{$pre}rmb_getout`"," ","?lfj=$lfj&job=$job","$rows");
	$query = $db->query("SELECT * FROM `{$pre}rmb_getout` ORDER BY id DESC LIMIT $min,$rows");
	while($rs = $db->fetch_array($query)){
		$rs[posttime]=date("Y-m-d H:i:s",$rs[posttime]);

		if($rs[ifpay]){
			$rs[ifpay]='<font color=red>��֧��<font>';
			$rs[setpay]="<A HREF='?lfj=$lfj&job=view&id=$rs[id]'>�鿴</A>";
		}else{
			
			$rs[ifpay]='δ֧��';
			$rs[setpay]="<A HREF='?lfj=$lfj&job=setpay&id=$rs[id]'>ȷ��֧��</A>";
		}
		$rs[bankname] = str_replace(' ','<br>',$rs[bankname]);
		$listdb[]=$rs;
	}

	hack_admin_tpl('list');
}
elseif($action=="delete"&&$Apower[rmb_getout])
{
	if($id){
		$db->query("DELETE FROM `{$pre}rmb_getout` WHERE id='$id'");
	}else{
		foreach( $listdb AS $key=>$id){
			$db->query("DELETE FROM `{$pre}rmb_getout` WHERE id='$id'");
		}
	}
	jump("ɾ���ɹ�","$FROMURL","1");
}
elseif($job=='setpay'&&$Apower[rmb_getout])
{
	$rsdb = $db->get_one("SELECT * FROM {$pre}rmb_getout WHERE id='$id'");

	if($rsdb['ifpay'] == 1){
		showmsg('�ö����Ѿ�֧����');
	}

	$rsdb[posttime] = date('Y-m-d H:i:s',$rsdb[posttime]);
	$rsdb[why] = str_replace("\n",'<br>',$rsdb[why]);
	if(!$rsdb[quitabout]){
		$rsdb[quitabout]="֧�����:{$rsdb[money]}
֧������:
֧������:
���п���:
���п�����������:
��ϵ�绰:
";
	}
	hack_admin_tpl('setpay');
}
elseif($job=='view'&&$Apower[rmb_getout])
{
	$rsdb = $db->get_one("SELECT * FROM {$pre}rmb_getout WHERE id='$id'");
	$rsdb[posttime] = date('Y-m-d H:i:s',$rsdb[posttime]);
	$rsdb[replytime] = date('Y-m-d H:i:s',$rsdb[replytime]);
	$rsdb[why] = str_replace("\n",'<br>',$rsdb[why]);
	$rsdb[quitabout] = str_replace("\n",'<br>',$rsdb[quitabout]);
	hack_admin_tpl('view');
}
elseif($action=='setpay'&&$Apower[rmb_getout])
{
	$rt = $db->get_one("SELECT * FROM {$pre}rmb_getout WHERE id='$id'");
	if(!$rt){
		showmsg('���ݲ�����,����ʧ�ܣ�');
	}
	if($rt['ifpay'] == 1){
		showmsg('�ö����Ѿ�֧����');
	}

	$quitabout = addslashes($quitabout);
	$db->query("UPDATE {$pre}rmb_getout SET ifpay='1',admin='$lfjid',quitabout='$quitabout',replytime='$timestamp' WHERE id='$rt[id]'");

	add_rmb($rt[uid],0,-$rt[money],'����');

	$m=$userDB->get_info($rt[uid]);

	$quitabout = str_replace("\n",'<br>',$quitabout);
	
	$title = '���ֳɹ�!';
	$content = date('m��d��H:i',$rt[posttime])."��������� {$rt[money]} Ԫ���˿�����˺���{$rt[bankname]}������ա�<br><A HREF='$webdb[www_url]/member/rmb.php?job=list'>������鿴</A>��������������ϵ�ͷ�{$webdb[member_contact]}<br>{$quitabout}";
	send_mail($m[email],$title,$content,0);

	jump("�����ɹ�","?lfj=$lfj&job=list","1");
}

?>