<?php
require(dirname(__FILE__)."/global.php");

//������
@include(Mpath."data/guide_fid.php");


$fidDB=$db->get_one("SELECT A.* FROM {$_pre}sort A WHERE A.fid='$fid'");
if(!$fidDB){
	showerr("��Ŀ������");
}elseif($fidDB[jumpurl]){
	header("location:$fidDB[jumpurl]");
	exit;
}

/**
*ģ�������ļ�
**/
$field_db = $module_DB[$fidDB[mid]][field];


//SEO
$titleDB[title]	= $fidDB[metatitle]?strip_tags($fidDB[metatitle]):strip_tags("$fidDB[name]");


$rows = $fidDB[maxperpage]>0 ? $fidDB[maxperpage] : 15;

$listdb=array();

if($page<1){
	$page=1;
}

$min=($page-1)*$rows;

if($Fid_db[$fid]){
	$SQL=" LEFT JOIN {$_pre}sort S ON A.fid=S.fid WHERE S.fup='$fid' ";
}else{
	$SQL=" WHERE A.fid=$fid ";
}

$query=$db->query("SELECT SQL_CALC_FOUND_ROWS B.*,A.*,C.title AS company FROM {$_pre}content A LEFT JOIN {$_pre}content_{$fidDB[mid]} B ON A.id=B.id LEFT JOIN {$pre}hy_company C ON A.uid=C.uid $SQL AND A.yz='1' ORDER BY A.list DESC LIMIT $min,$rows");

$RS=$db->get_one("SELECT FOUND_ROWS()");
$totalNum=$RS['FOUND_ROWS()'];
$showpage=getpage("","","list.php?fid=$fid",$rows,$totalNum);

while( $rs=$db->fetch_array($query) ){

	$rs[content]=@preg_replace('/<([^<]*)>/is',"",$rs[content]);	//��HTML������˵�
	$rs[content]=get_word($rs[full_content]=$rs[content],100);
	$rs[title]=get_word($rs[full_title]=$rs[title],50);

	$rs[posttime]=date("Y-m-d",$rs[full_time]=$rs[posttime]);
	if($rs[picurl]){
		$rs[picurl]=tempdir($rs[picurl]);
	}

	$Module_db->showfield($field_db,$rs,'list');

	$rs[ifyz]=$rs[id]%3;

	$listdb[]=$rs;
}



/**
*Ϊ��ȡ��ǩ����
**/
$chdb[main_tpl] = getTpl("list_$fidDB[mid]");

/**
*��ǩ
**/
$ch_fid	= intval($fidDB[config][label_list]);		//�Ƿ�������Ŀר�ñ�ǩ
$ch_pagetype = 2;									//2,Ϊlistҳ,3,Ϊbencandyҳ
$ch_module = $webdb[module_id]?$webdb[module_id]:99;//ϵͳ�ض�ID����,ÿ��ϵͳ������ͬ
$ch = 0;											//�������κ�ר��
require(ROOT_PATH."inc/label_module.php");


require(ROOT_PATH."inc/head.php");
require(getTpl("list_$fidDB[mid]"));
require(ROOT_PATH."inc/foot.php");

?>