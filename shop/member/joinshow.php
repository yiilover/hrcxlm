<?php
require("global.php");

$mid=2;

/**
*��ȡ��Ϣ���ĵ�����
**/
$rsdb=$db->get_one("SELECT A.*,B.* FROM `{$_pre}join` A LEFT JOIN `{$_pre}content_$mid` B ON A.id=B.id WHERE A.id='$id'");


if(!$rsdb){
	showerr("���ݲ�����");
}elseif(!$web_admin&&$rsdb[uid]!=$lfjuid&&$rsdb[cuid]!=$lfjuid){
	showerr("����Ȩ�鿴");
}



$id_array=array(intval($rsdb[cid]));
$detail = explode(',',$rsdb[products]);
foreach($detail AS $value){
	list($pid,$pnum) = explode('=',$value);
	$id_array[] = intval($pid);
	$parray[$pid] = $pnum;
}
$query2 = $db->query("SELECT * FROM {$_pre}content WHERE id IN (".implode(',',$id_array).")");
while($rs2 = $db->fetch_array($query2)){
	$rs2[num] = $parray[$rs2[id]];
	$rsdb['plist'][]=$rs2;
}

$field_db = $module_DB[$mid]['field'];

/**
*����Ϣ�����ֶεĴ���
**/
$Module_db->hidefield=true;
$Module_db->classidShowAll=true;
$Module_db->showfield($field_db,$rsdb,'show');


$rsdb[posttime]=date("Y-m-d H:i:s",$rsdb[posttime]);

$rsdb[ifpay]=$rsdb[ifpay]?'��֧��':'δ֧��';
$rsdb[ifsend]=$rsdb[ifsend]?'�ѷ���':'δ����';

if($rsdb[banktype]=='alipay'){
	$rsdb[banktype]='֧����';
}elseif($rsdb[banktype]=='tenpay'){
	$rsdb[banktype]='�Ƹ�ͨ';
}elseif($rsdb[banktype]=='99pay'){
	$rsdb[banktype]='��Ǯ';
}elseif($rsdb[banktype]=='yeepay'){
	$rsdb[banktype]='�ױ�֧��';
}

require(ROOT_PATH."member/head.php");
require(getTpl("bencandy_$mid"));
require(ROOT_PATH."member/foot.php");

?>