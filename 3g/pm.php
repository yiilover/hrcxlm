<?php
require(dirname(__FILE__)."/global.php");
if(!$job){
	$job='list';
}
if(!$lfjid){
	showerr("����û��¼");
}
if($job=='list'){
	$WebTitle="�ҵĶ���Ϣ�б�";
	$page || $page=1;
	$rows=20;
	$min=($page-1)*$rows;

	$SQL="SELECT * FROM `{$pre}pm` WHERE `touid`='$lfjuid' AND type='rebox' ORDER BY mid DESC LIMIT $min,$rows";
	$showpage=getpage("`{$pre}pm`","WHERE `touid`='$lfjuid' AND type='rebox'","?job=$job",$rows);
	
	$query = $db->query($SQL);
	while($rs = $db->fetch_array($query)){
		if($rs[ifnew]){
			$rs[state]="<span style='color:red;'>δ��</span>";
		}else{
			$rs[state]="<span style='color:#888;'>�Ѷ�</span>";
		}
		$rs[mdate]=date("m-d",$rs[mdate]);
		$listdb[]=$rs;
	}
	require_once(dirname(__FILE__)."/template/listpm.htm");
}elseif($job=='read'){

	$SQL="SELECT * FROM `{$pre}pm` WHERE `touid`='$lfjuid' AND type='rebox' AND mid='$mid'";
	$db->query("UPDATE `{$pre}pm` SET `ifnew`=0 WHERE `touid`='$lfjuid' AND type='rebox' AND mid='$mid'");

	$rsdb=$db->get_one($SQL);
	$rsdb[mdate]=date("Y-m-d H:i",$rsdb[mdate]);

	$rsdb[content]=En_TruePath($rsdb[content],0);
	$WebTitle=$rsdb[title]."-�ҵĶ���Ϣ";
	require_once(dirname(__FILE__)."/template/readpm.htm");
}elseif($job=='send'){
	$WebTitle="���Ͷ���Ϣ";
	if($step==2){
		$rsdb=$userDB->get_passport($touser,'name');
		if(!$rsdb)
		{
			showerr("��ǰ�û�������",1);
		}
		if(!$title){
			showerr("���ⲻ��Ϊ��",1);
		}
		if(strlen($array[title])>100){
			showerr("����̫����!",1);
		}
		$array[touid]=$rsdb[uid];
		$array[fromuid]=$lfjuid;
		$array[fromer]=$lfjid;
		$array[title]=filtrate($title);
		
		//��Ի����������Ĵ���
		$postdb[content] = str_replace("=\\\"../$webdb[updir]/","=\\\"$webdb[www_url]/$webdb[updir]/",$postdb[content]);
		$postdb[content]	=	preg_replace('/javascript/i','java script',$postdb[content]);
		$postdb[content]	=	preg_replace('/<(script)([^<>]*)>/i','&lt;\\1\\2>',$postdb[content]);
		$postdb[content]	=	preg_replace('/<iframe ([^<>]+)>/i','&lt;iframe \\1>',$postdb[content]);
		$array[content] = stripslashes($postdb[content]);

		$array[content] = En_TruePath($array[content],1);

		pm_msgbox($array);
		header("location:pm.php?job=list");
		exit;
		//refreshto("?job=list","���ͳɹ�",1);
	}
	if($uid){
		$rsdb = $userDB->get_passport($uid);
		$username = $rsdb[username];
	}
	require_once(dirname(__FILE__)."/template/sendpm.htm");
}

?>