<?php

//���û������������Ƽ����µĽ���yz,unyz,com,uncom,del
function Give_News_money($uid,$type='',$rsdb){
	global $webdb,$Mdomain;
	if($type=='yz'){
		$money	=	$webdb[postArticleMoney];
		$msg = '��������ͨ����˽���';
	}elseif($type=='unyz'){
		$money	=	-$webdb[postArticleMoney];
		$msg = '��������ȡ����˳ͷ�';
	}elseif($type=='com'){
		$money	=	$webdb[comArticleMoney];
		$msg = '���±���Ϊ��������';
	}elseif($type=='uncom'){
		$money	=	-$webdb[comArticleMoney];
		$msg = '���±�ȡ�������ͷ�';
	}elseif($type=='top'){
		$money	=	$webdb[topArticleMoney];
		$msg = '���±��ö���ʾ����';
	}elseif($type=='front'){
		$money	=	$webdb[frontArticleMoney];
		$msg = '���±���ǰ��ʾ����';
	}
	
	if($type=='del'){
		$money	=	$webdb[deleteArticleMoney];
		$msg = '���±�ɾ���۷�:'.$rsdb[title];
	}else{
		$msg .= " [<A HREF='$Mdomain/bencandy.php?fid=$rsdb[fid]&id=$rsdb[id]' target=_blank>".get_word($rsdb[title],30)."</A>]";
	}
	if(!$money||!$uid){
		return ;
	}
	add_user($uid,$money,$msg);
}


//�ؼ��ָ�ʽ��
function keyword_ck($keyword,$title){
	global $SPword;
	if($title){
		require_once(ROOT_PATH."inc/splitword.php");
		$de=splitword($title);
		$detail=explode(" ",$de);
		foreach( $detail AS $key=>$value){
			//С��3���ַ���.����Ϊ�ؼ���
			if(strlen($value)<(WEB_LANG=='utf-8'?4:3)){
				continue;
			}
			$keyword.=" $value";
		}
	}
	if($keyword){
		$keyword=str_replace("��"," ",$keyword);
		$keyword=str_replace(","," ",$keyword);
		$keyword=str_replace("��"," ",$keyword);
		$keyword=str_replace("��"," ",$keyword);
		$detail=explode(' ',str_replace(array('\\',"'",'"'),array('','',''),$keyword)); 
		foreach( $detail AS $key=>$value){
			//����3���ֽڵ�,����Ϊ�ؼ���,һ�������൱�������ֽ�
			if(strlen($value)>2){
				 $array[$value]=$value;
			}
		}
		$keyword=implode(" ",$array);
		return $keyword;
	}
}


//��ӹؼ���
function keyword_add($aid,$keyword,$uid=0){
	global $db,$_pre;
	$detail=explode(' ',str_replace(array('\\',"'",'"'),array('','',''),$keyword)); 
	foreach( $detail AS $key=>$value){
		if($value){
			$_rs=$db->get_one("SELECT * FROM `{$_pre}keyword` WHERE keywords='$value'");
			$id=$_rs[id];
			if(!$id){
				$db->query("INSERT INTO `{$_pre}keyword` ( `keywords`,`num`,`ifhide`,`uid` ) VALUES ('$value',1,1,'$uid' )");
				$id=$db->insert_id();
			}else{
				$db->query("UPDATE `{$_pre}keyword` SET num=num+1 WHERE `keywords`='$value'");
			}
			$db->query("INSERT INTO `{$_pre}keywordid` ( `id`,`aid` ) VALUES ('$id','$aid')");
		}
	}
}

?>