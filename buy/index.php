<?php
/*
����ס�� 
�������� 
�������� 
�������� 
֤ȯ���� 
��װЬ�� 
������ѵ
��е���� 
��ֽӡˢ 
ʳƷ���� 
ũ������ 
�������� 
���� 
�ӹ�������
IT�����ҵ 
��ͨ�������� 
���ý�崫�� 
�ҵ�������� 
����װ�޲���
ҽԺ�����豸 
����������� 
����

�Ͽͻ�ά�� 
�ͻ���ϵ���� 
�����¿ͻ� 
�Ͽͻ�ת���� 
�¿ͻ���չ   
�ͻ�����ȵ���  
�����¿ͻ� 
����ͻ���������

�������� 
Ͷ�ʼ��� 
�������� 
�����ƹ� 
��������

�����˲� 
����Ͷ���Ŷ� 
�����Ŷ� 
Ӫ���߻��Ŷ� 
�����Ŷ�         
ҽ�Ʒ����Ŷ� 
��ְ�˲� 
����߼����˲� 
�����˲� 
�����ʱ������Ŷ�

�����ϵ 
�������� 
������������ 
�ز���˾���� 
���й�˾����     
����ҽ������  
Э���̻����� 
������������

�������� 
����ת�� 
������Դ

���̽�������ѵ 
�ܲ���ѵ 
�г�Ӫ������ѵ 
������Դ����ѵ 
������������ѵ 
������������ѵ 
ְҵ��������ѵ 
ָ����������ѵ

��ҵ��Ŀ 
�����̻�

�Ļ����� 
Ʒ�ƹ��� 
Ʒ���ƹ� 
Ʒ����� 
��ҵ�Ļ��߻�

������ 
������ʳ 
����֮�� 
�������� 
�������� 
��ҽ����


�ʽ�	
�˲�	
����	
����	
����	
ý��	
����	
����
*/
if(is_file('install.php')){
	header("location:install.php");exit;
}elseif(is_file('upgrade.php')){
	header("location:upgrade.php");
	exit;
}

require(dirname(__FILE__)."/global.php");



//SEO
$titleDB[title] = $city_DB[metaT][$city_id]?$city_DB[metaT][$city_id]:"{$city_DB[name][$city_id]} $webdb[Info_webname]";
$titleDB[keywords]	= $city_DB[metaK][$city_id]?$city_DB[metaK][$city_id]:$webdb[Info_metakeywords];
$titleDB[description] = $city_DB[metaD][$city_id]?$city_DB[metaD][$city_id]:($webdb[Info_description]?$webdb[Info_description] : $webdb[description]);




/**
*��ǩʹ��
**/
$ch_fid	= $ch_pagetype = 0;
$ch_module = $webdb[module_id]?$webdb[module_id]:99;	//ϵͳ�ض�ID����,ÿ��ϵͳ������ͬ

require(ROOT_PATH."inc/label_module.php");


//�Ƽ�����Ŀ����ҳ��ʾ
//$listdb_moresort=Info_ListMoreSort($webdb[InfoIndexCSRow],$webdb[InfoIndexCSLeng],$city_id);

//ÿ����Ŀ����Ϣ��
//$InfoNum=get_infonum($city_id);

$STYLE="blue";

require(ROOT_PATH."/template/style_5.1/head.htm");
//echo getTpl("index",$index_tpl);die;
//require(getTpl("index",$index_tpl));
require(ROOT_PATH."/buy/template/blue/index.htm");
require(ROOT_PATH."/template/style_5.1/foot.htm");


?>