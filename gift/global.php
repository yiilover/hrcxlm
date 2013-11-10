<?php
define('Mpath',dirname(__FILE__).'/');
define( 'Mdirname' , preg_replace("/(.*)\/([^\/]+)/is","\\2",str_replace("\\","/",dirname(__FILE__))) );
define('SYS_TYPE','gift');

require_once(Mpath."../inc/common.inc.php");
require_once(Mpath."data/config.php");			//ϵͳȫ�ֱ���
require_once(Mpath."data/all_fid.php");			//��Ŀ������
require_once(Mpath."data/module_db.php");			//ģ�������
require_once(Mpath."inc/function.php");
require_once(Mpath."inc/qb_function.php");
require_once(Mpath."inc/module.class.php");
require_once(ROOT_PATH."inc/self.tpl.php");		//����ģ�庯��


@include_once(ROOT_PATH."data/ad_cache.php");	//ȫվ�����������ļ�
@include_once(ROOT_PATH."data/label_hf.php");	//��ǩ��ͷ��׵ı���ֵ
@include_once(ROOT_PATH."data/module.php");		//ģ��ϵͳ�Ĳ�������ֵ




$_pre="{$pre}{$webdb[module_pre]}";					//���ݱ�ǰ׺

$Module_db=new Module_Field(Mpath);						//�Զ���ģ�����

$Murl=$webdb[_www_url].'/'.Mdirname;					//��ģ��ķ��ʵ�ַ
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
$zone_id=intval($zone_id);
$street_id=intval($street_id);


function list_apply($rows=8){
	global $db,$_pre;
	$query = $db->query("SELECT B.*,A.username,A.posttime FROM {$_pre}join A LEFT JOIN {$_pre}content B ON A.cid=B.id ORDER BY A.id DESC LIMIT $rows");
	while($rs = $db->fetch_array($query)){
		$rs[posttime]=date("m-d H:i",$rs[posttime]);
		$listdb[]=$rs;
	}
	return $listdb;
}

function list_gift($rows=8,$type='new',$fid=0){
	global $db,$_pre;
	if($fid){
		$SQL=" WHERE A.fid='$fid' ";
	}
	if($type=='new'){
		$order="A.id";
	}elseif($type=='hot'){
		$order="A.hits";
	}
	$query = $db->query("SELECT B.*,A.* FROM {$_pre}content A LEFT JOIN {$_pre}content_1 B ON A.id=B.id $SQL ORDER BY $order DESC LIMIT $rows");
	while($rs = $db->fetch_array($query)){
		$rs[picurl] && $rs[picurl] = tempdir($rs[picurl]);
		$rs[posttime]=date("Y-m-d H:i",$rs[posttime]);
		$listdb[]=$rs;
	}
	return $listdb;
}

?>