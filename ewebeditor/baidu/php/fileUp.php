<?php
require_once(dirname(__FILE__)."/../../../inc/common.inc.php");
/**
 * Created by JetBrains PhpStorm.
 * User: taoqili
 * Date: 12-2-8
 * Time: ����1:20
 * To change this template use File | Settings | File Templates.
 */
//error_reporting(E_ERROR|E_WARNING);
$groupdb['upfileType'] || $groupdb['upfileType']=$webdb['upfileType'];
$array = explode(' ',$groupdb['upfileType']);	//array( ".rar" , ".doc" , ".docx" , ".zip" , ".pdf" , ".txt"  )
//�ϴ�����
$config = array(
    "uploadPath" => "../../../$webdb[updir]/other/" , //����·��
    "fileType" => $array , //�ļ������ʽ
    "fileSize" => (ini_get('upload_max_filesize')?intval(ini_get('upload_max_filesize')):2) //�ļ���С���ƣ���λMB
);

//�ļ��ϴ�״̬,���ɹ�ʱ����SUCCESS������ֵ��ֱ�ӷ��ض�Ӧ�ַ���
$state = "SUCCESS";
$fileName = "";
$path = $config[ 'uploadPath' ];
if ( !file_exists( $path ) ) {
    mkdir( "$path" , 0777 );
}
$clientFile = $_FILES[ "upfile" ];
if(!isset($clientFile)){
    echo "{'state':'�ļ���С�������������ã�','url':'null','fileType':'null'}";//���޸�php.ini�е�upload_max_filesize��post_max_size
    exit;
}

if(!$lfjid){
	$state = "�㻹û��¼";
}

//��ʽ��֤
$current_type = strtolower( strrchr( $clientFile[ "name" ] , '.' ) );
if ( !in_array( $current_type , $config[ 'fileType' ] ) ) {
    $state = "��֧�ֵ��ļ����ͣ�";
}
//��С��֤
$file_size = 1024 * 1024 * $config[ 'fileSize' ];
if ( $clientFile[ "size" ] > $file_size ) {
    $state = "�ļ���С�������������ޣ�";
}
//�����ļ�
if ( $state == "SUCCESS" ) {/*
    $tmp_file = $clientFile[ "name" ];
    $fileName = $path . rand( 1 , 10000 ) . time() . strrchr( $tmp_file , '.' );
    $result = move_uploaded_file( $clientFile[ "tmp_name" ] , $fileName );
    if ( !$result ) {
        $state = "�ļ�����ʧ�ܣ�";
    }*/

	$array='';
	$array['name']=is_array($upfile)?$_FILES['upfile']['name']:$upfile_name;
	$array['path']=$webdb['updir']."/other";
	$array['size']=is_array($upfile)?$_FILES['upfile']['size']:$upfile_size;
		
	$array['updateTable']=1;	//ͳ���û��ϴ����ļ�ռ�ÿռ��С
	$fileName=upfile(is_array($upfile)?$_FILES['upfile']['tmp_name']:$upfile,$array);
}

WEB_LANG=='gb2312' && $state = gbk2utf8($state);
//���������������json����
ob_end_clean();
echo '{"state":"' . $state . '","url":"' . $fileName . '","fileType":"' . $current_type . '","original":"'.$clientFile["name"] .'"}';
?>