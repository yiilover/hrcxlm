<?php
require(dirname(__FILE__)."/global.php");

$fidDB = array('mid'=>1);

/**
*ģ�������ļ�
**/
$field_db = $module_DB[$fidDB[mid]][field];


//SEO
$titleDB[title]	= "{$cityDB[name][$cityid]} չ���б�";


$rows = 15;

$listdb=array();

if($page<1){
	$page=1;
}

$min=($page-1)*$rows;

if($cityid){
	$SQL=" WHERE A.city_id='$cityid' ";
}else{
	$SQL=" WHERE 1 ";
}

$query=$db->query("SELECT SQL_CALC_FOUND_ROWS B.*,A.*,R.title AS roomname,R.city_id AS roomcity FROM {$_pre}content A LEFT JOIN {$_pre}content_{$fidDB[mid]} B ON A.id=B.id LEFT JOIN {$_pre}room R ON A.roomid=R.id $SQL AND A.yz='1' ORDER BY A.list DESC LIMIT $min,$rows");

$RS=$db->get_one("SELECT FOUND_ROWS()");
$totalNum=$RS['FOUND_ROWS()'];
$showpage=getpage("","","list_city.php?cityid=$cityid",$rows,$totalNum);

while( $rs=$db->fetch_array($query) ){

	$rs[content]=@preg_replace('/<([^<]*)>/is',"",$rs[content]);	//��HTML������˵�
	$rs[content]=get_word($rs[full_content]=$rs[content],100);
	$rs[title]=get_word($rs[full_title]=$rs[title],50);

	$rs[posttime]=date("Y-m-d",$rs[full_time]=$rs[posttime]);
	if($rs[picurl]){
		$rs[picurl]=tempdir($rs[picurl]);
	}

	$Module_db->showfield($field_db,$rs,'list');

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
$ch_pagetype = 4;									//2,Ϊlistҳ,3,Ϊbencandyҳ
$ch_module = $webdb[module_id]?$webdb[module_id]:99;//ϵͳ�ض�ID����,ÿ��ϵͳ������ͬ
$ch = 0;											//�������κ�ר��
require(ROOT_PATH."inc/label_module.php");


$STYLE="blue";

require(ROOT_PATH."/template/style_5.1/head.htm");
require(getTpl("list_city"));
require(ROOT_PATH."inc/foot.php");

?>