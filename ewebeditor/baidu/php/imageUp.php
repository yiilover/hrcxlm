<?php
require_once(dirname(__FILE__)."/../../../inc/common.inc.php");
    error_reporting( E_ERROR | E_WARNING );
    //�ϴ�����
    $config = array(
        "uploadPath"=>"../../../$webdb[updir]/other/",                          //����·��
        "fileType"=>array(".gif",".png",".jpg",".jpeg",".bmp"),   //�ļ������ʽ
        "fileSize"=>3000                                          //�ļ���С���ƣ���λKB
    );
    //ԭʼ�ļ����������̶�����������
    $oriName = htmlspecialchars( $_POST[ 'fileName' ] , ENT_QUOTES );

    //�ϴ�ͼƬ���е����������ƣ�
    $title = htmlspecialchars( $_POST[ 'pictitle' ] , ENT_QUOTES );

    //�ļ����
    $file = $_FILES[ "upfile" ];

    //�ļ��ϴ�״̬,���ɹ�ʱ����SUCCESS������ֵ��ֱ�ӷ��ض�Ӧ�ַ��ܲ���ʾ��ͼƬԤ����ͬʱ������ǰ��ҳ��ͨ���ص�������ȡ��Ӧ�ַ���
    $state = "SUCCESS";

    //����������ļ���
    $fileName = "";

    //����·��
    $path = $config[ 'uploadPath' ];

    if ( !file_exists( $path ) ) {
        mkdir( "$path" , 0777 );
    }

	if(!$lfjid){
		$state = "�㻹û��¼";
	}

    //��ʽ��֤
    $current_type = strtolower( strrchr( $file[ "name" ] , '.' ) );
    if ( !in_array( $current_type , $config[ 'fileType' ] ) || false == getimagesize( $file[ "tmp_name" ] ) ) {
        $state = "�������ͼƬ��ʽ";
    }

	if(!$file[ "tmp_name" ]){
		$state = "�ռ�����,�ϴ�ʧ��";
	}
    //��С��֤
    $file_size = 2000 * $config[ 'fileSize' ];
    if ( $file[ "size" ] > $file_size ) {
        $state = "ͼƬ��С��������";
    }
    //����ͼƬ
    if ( $state == "SUCCESS" ) {/*
        $tmp_file = $file[ "name" ];
        $fileName = $path . rand( 1 , 10000 ) . time() . strrchr( $tmp_file , '.' );
        $result = move_uploaded_file( $file[ "tmp_name" ] , $fileName );
        if ( !$result ) {
            $state = "δ֪����";
        }*/

		$array='';
		$array['name']=is_array($upfile)?$_FILES['upfile']['name']:$upfile_name;
		$array['path']=$webdb['updir']."/other";
		$array['size']=is_array($upfile)?$_FILES['upfile']['size']:$upfile_size;
		
		$array['updateTable']=1;	//ͳ���û��ϴ����ļ�ռ�ÿռ��С
		$fileName=upfile(is_array($upfile)?$_FILES['upfile']['tmp_name']:$upfile,$array);

    }
    //���������������json����
    /**
     * �������ݸ�ʽ
     * {
     *   'url'      :'a.jpg',   //�������ļ�·��
     *   'title'    :'hello',   //�ļ���������ͼƬ��˵��ǰ�˻���ӵ�title������
     *   'original' :'b.jpg',   //ԭʼ�ļ���
     *   'state'    :'SUCCESS'  //�ϴ�״̬���ɹ�ʱ����SUCCESS,�����κ�ֵ��ԭ��������ͼƬ�ϴ�����
     * }
     */
	WEB_LANG=='gb2312' && $state = gbk2utf8($state);
	ob_end_clean();
    echo "{'url':'" . $fileName . "','title':'" . $title . "','original':'" . $oriName . "','state':'" . $state . "'}";

?>


