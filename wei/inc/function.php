<?php

//���û������������Ƽ����µĽ���yz,unyz,com,uncom,del
function Give_News_money($uid,$type='',$rsdb){
	global $db,$pre,$webdb,$Mdomain;
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



//��ӹؼ���
function keyword_add($id,$keyword,$uid=0){
	global $db,$_pre;
	$detail=explode(' ',str_replace(array('\\',"'",'"'),array('','',''),$keyword)); 
	foreach( $detail AS $key=>$value){
		if($value){
			$_rs=$db->get_one("SELECT kid FROM `{$_pre}keyword` WHERE BINARY keywords='$value'");
			$kid=$_rs[kid];
			if(!$kid){
				$db->query("INSERT INTO `{$_pre}keyword` ( `keywords`,`num`,`ifhide`,`uid` ) VALUES ('$value',1,1,'$uid' )");
				$kid=$db->insert_id();
			}else{
				$db->query("UPDATE `{$_pre}keyword` SET num=num+1 WHERE BINARY `keywords`='$value'");
			}
			$db->query("INSERT INTO `{$_pre}keywordid` ( `kid`,`id` ) VALUES ('$kid','$id')");
		}
	}
}

//ɾ���ؼ���
function keyword_del($id,$keyword){
	global $db,$_pre;
	if(!$keyword){
		return ;
	}
	$detail2=explode(" ",$keyword);
	foreach( $detail2 AS $key=>$value){
		if($value){
			$db->query("UPDATE `{$_pre}keyword` SET num=num-1 WHERE BINARY `keywords`='$value'");
			$_rs=$db->get_one("SELECT kid,num FROM `{$_pre}keyword` WHERE BINARY `keywords`='$value'");
			if($_rs[num]<1){
				$db->query("DELETE FROM `{$_pre}keyword` WHERE BINARY `keywords`='$value'");	
			}
			$kid=$_rs[kid];
			$db->query("DELETE FROM `{$_pre}keywordid` WHERE `kid`='$kid' AND id='$id'");	
		}
	}
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
			if(strlen($value)<3){
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

function show_keyword($content){
	global $Key_word,$webdb,$Mdomain;
	if(!$webdb[ifShowKeyword]){
		return $content;
	}
	require_once(ROOT_PATH."data/keyword.php");
	//��ͼƬ����ȥ��
	//$content=preg_replace("/ alt=([^ >]+)/is","",$content);
	foreach( $Key_word AS $key=>$value){
		if(!$value){
			$value="$Mdomain/search.php?type=title&keyword=".urlencode($key);
		}
		//$content=keyword_replace_limit($key,"<a href=$value style=text-decoration:underline;font-size:14px;color:{$webdb[ShowKeywordColor]}; target=_blank>$key</a>",$content,1);	//β�������滻���ٴ�
		$search[]=$key;
		$replace[]="<a href=$value style=text-decoration:underline;font-size:14px;color:{$webdb[ShowKeywordColor]}; target=_blank>$key</a>";
	}
	$search && $content=keyword_replace_limit($search,$replace,$content,2); //β�������滻���ٴ�
	return $content;
}


function keyword_replace_limit($search, $replace, $subject, $limit=-1){

    if (is_array($search)) {
         foreach ($search as $k=>$v) {
             $search[$k] = "/(?!<[^>]+)".preg_quote($search[$k],'/')."(?![^<]*>)/";
        }
    }else{
         $search = "/(?!<[^>]+)".preg_quote($search,'/')."(?![^<]*>)/";
    }
    return preg_replace($search, $replace, $subject, $limit);

}


?>