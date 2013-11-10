<?php
define('Mpath',dirname(__FILE__).'/');
define( 'Mdirname' , preg_replace("/(.*)\/([^\/]+)/is","\\2",str_replace("\\","/",dirname(__FILE__))) );

require_once(Mpath."../inc/common.inc.php");
require_once(Mpath."data/config.php");			//ϵͳȫ�ֱ���
require_once(Mpath."data/all_fid.php");			//��Ŀ������
require_once(Mpath."data/module_db.php");			//ģ�������
require_once(Mpath."inc/function.php");
require_once(Mpath."inc/module.class.php");
require_once(Mpath."inc/biz.php");

@include_once(ROOT_PATH."data/ad_cache.php");	//ȫվ�����������ļ�
@include_once(ROOT_PATH."data/label_hf.php");	//��ǩ��ͷ��׵ı���ֵ
@include_once(ROOT_PATH."data/module.php");		//ģ��ϵͳ�Ĳ�������ֵ




$_pre="{$pre}{$webdb[module_pre]}";					//���ݱ�ǰ׺

$Module_db=new Module_Field(Mpath);						//�Զ���ģ�����

$Murl=$webdb[www_url].'/'.Mdirname;					//��ģ��ķ��ʵ�ַ
$Mdomain=$ModuleDB[$webdb[module_pre]][domain]?$ModuleDB[$webdb[module_pre]][domain]:$Murl;



/**
*ǰ̨�Ƿ񿪷�
**/
if($webdb[module_close])
{
	$webdb[Info_closeWhy]=str_replace("\r\n","<br>",$webdb[Info_closeWhy]);
	showerr("��ϵͳ��ʱ�ر�:$webdb[Info_closeWhy]");
}


unset($foot_tpl,$head_tpl,$index_tpl,$list_tpl,$bencandy_tpl);
$ch=intval($ch);
$fid=intval($fid);
$id=intval($id);
$page=intval($page);
$city_id=intval($city_id);
$cid=intval($cid);




function list_title($type='new',$rows=10){
	global $db,$pre,$_pre;

	if($type=='new'){
		$SQL = " ORDER BY A.id DESC LIMIT $rows";
	}elseif($type=='hot'){
		$SQL = " ORDER BY A.hits DESC LIMIT $rows";
	}elseif($type=='com'){
		$SQL = " WHERE A.levels=1 ORDER BY A.levelstime DESC LIMIT $rows";
	}
	$query = $db->query("SELECT A.*,B.* FROM {$_pre}content A LEFT JOIN {$_pre}content_1 B ON B.id=A.id $SQL");
	while($rs = $db->fetch_array($query)){
		$rs[picurl] && $rs[picurl] = tempdir($rs[picurl]);
		$listdb[]=$rs;
	}
	return $listdb;
}

function list_dl($type='new',$rows=10){
	global $db,$pre,$_pre;

	if($type=='new'){
		$SQL = " ORDER BY A.id DESC LIMIT $rows";
	}elseif($type=='hot'){
		$SQL = " ORDER BY A.hits DESC LIMIT $rows";
	}elseif($type=='com'){
		$SQL = " WHERE A.levels=1 ORDER BY A.levelstime DESC LIMIT $rows";
	}
	$query = $db->query("SELECT A.*,B.* FROM {$_pre}join A LEFT JOIN {$_pre}content_2 B ON B.id=A.id $SQL");
	while($rs = $db->fetch_array($query)){
		$rs[picurl] && $rs[picurl] = tempdir($rs[picurl]);
		$listdb[]=$rs;
	}
	return $listdb;
}

?>