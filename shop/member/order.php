<?php
require_once("global.php");

//$webdb[ForbidDelOrder]
if($action=='del'){
	del_order($id);
	refreshto($FROMURL,'',0);
	
}elseif($job=='receive'){
	$rsdb=$db->get_one("SELECT * FROM {$_pre}join WHERE id='$id'");
	if($rsdb[ifpay]!=1){
		showerr('��û����,��Ȩ����!');
	}
	$SQL="";
	if($receive=='-1'){
		$SQL=",ifsend=0";
		send_msg($rsdb[cuid],"�̳����пͻ������˻���","������Ϊ:{$id},�����˻���",$rsdb[uid]);
	}

	$db->query("UPDATE {$_pre}join SET receive='$receive'$SQL WHERE id='$id' AND uid='$lfjuid'");

}elseif($action=='back_rmb'){	//����Ѹ����ֿ�,��û�м���ʹ��������ʽ��ȫ��Ļ�.�����������˿�

	$rs=$db->get_one("SELECT * FROM {$_pre}join WHERE id='$id'");

	if(!$rs[ifpay]&&$rs[rmb]){
		add_rmb($lfjuid,$rs[rmb],0,"�̳�����˿�");
		$db->query("UPDATE {$_pre}join SET rmb='0' WHERE id='$id' AND uid='$lfjuid'");
		refreshto("$webdb[www_url]/member/rmb.php?job=list",'�˿�ɹ�,��鿴����ʻ����',3);
	}else{
		showerr('������!');
	}	
}

$rows=15;
if(!$page){
	$page=1;
}
$min=($page-1)*$rows;
unset($listdb,$i);

$query = $db->query("SELECT SQL_CALC_FOUND_ROWS A.*,B.* FROM {$_pre}join A LEFT JOIN {$_pre}content_2 B ON A.id=B.id WHERE A.uid='$lfjuid' ORDER BY A.id DESC LIMIT $min,$rows");

$RS=$db->get_one("SELECT FOUND_ROWS()");
$totalNum=$RS['FOUND_ROWS()'];
$showpage=getpage("","","?job=$job",$rows,$totalNum);

while($rs = $db->fetch_array($query)){

	$id_array=array(intval($rs[cid]));
	$detail = explode(',',$rs[products]);
	foreach($detail AS $value){
		list($pid,$pnum) = explode('=',$value);
		$id_array[] = intval($pid);

	}
	$query2 = $db->query("SELECT * FROM {$_pre}content WHERE id IN (".implode(',',$id_array).")");
	while($rs2 = $db->fetch_array($query2)){
		$rs['plist'][]=$rs2;
	}

	$rs[posttime]=date("m-d H:i",$rs[posttime]);

	$rs[editurl]="../join.php?job=edit&id=$rs[id]&fid=$rs[fid]&cid=$rs[cid]' target='_blank";
	if($rs[ifpay]){
		$rs[pay]="<A style='color:red;'>�Ѹ�</A>";
	}elseif($rs[totalmoney]){
		$rs[pay]="<A HREF='../olpay.php?id=$rs[id]' target='_blank'><u>����</u></A>";
	}else{
		$rs[pay]='';
	}
	$rs[send]=$rs[ifsend]?"<A style='color:red;'>�ѷ�</A>":"δ��";
	
	//����Ա����,��ֹɾ���Ѹ���Ķ���
	if($rs[ifpay] &&  $webdb['ForbidDelPayOrder']){
		$rs[nodel] = 'none';
	}
	
	//if($rs[ifsend]){
		if($rs[receive]==1){
			$rs[_receive] = "<A HREF='javascript:' click=1 editcode='<A HREF=\"?job=receive&id=$rs[id]&receive=-1\">��Ҫ�˻�</A>' style='color:red;'>��ǩ��</A>";
		}elseif($rs[receive]==-1){
			if($rs[ifsend]){
				$rs[_receive] = "<A HREF='javascript:' click=1 editcode='<A HREF=\"?job=receive&id=$rs[id]&receive=1\">�»�ǩ��</A>' title='�������˻�' style='color:blue;'>�˻���</A>";
			}else{
				$rs[_receive] = "<font color=blue>�˻���</font>";	
			}
			
		}elseif($rs[ifsend]){
			$rs[_receive] = "<A HREF='javascript:' click=1 editcode=''>����</A><div style='display:none;'><A HREF=\"?job=receive&id=$rs[id]&receive=1\">ǩ��</A><br><A HREF=\"?job=receive&id=$rs[id]&receive=-1\" onclick=\"return confirm('��ȷ��Ҫ�˻���?\\n���˻�,����ȡ��');\">�˻�</A></div>";
		}
	//}
	if($rs[ifsend]){
		$rs[noedit] = 'none';
	}
	$rs[back_rmb]="";
	if(!$rs[ifpay]&&$rs[rmb]){	//����Ѹ����ֿ�,��û�м���ʹ��������ʽ��ȫ��Ļ�.�����������˿�
		$rs[back_rmb]="<A HREF='?action=back_rmb&id=$rs[id]'>�����</A><br>";
	}

	$listdb[]=$rs;
}

require(ROOT_PATH."member/head.php");
require(dirname(__FILE__)."/template/order.htm");
require(ROOT_PATH."member/foot.php");
?>