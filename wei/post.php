<?php
require_once(dirname(__FILE__)."/global.php");


if($action=="postnew"){


	$postdb[iframeurl]=$postdb[jumpurl]='';
	$postdb[ispic]=0;
	$postdb[yz]=1;
	
	if(!$web_admin){
		if( !in_array($groupdb[gid],explode(",",$webdb[allowGroupPost])) ){
			showerr("�������û�����Ȩ����!");
		}
	
		if( $webdb[Info_GroupPostYZ] && !in_array($groupdb['gid'],explode(",",$webdb[Info_GroupPostYZ])) ){		
			$postdb[yz]=0;
		}
	}
	
 	foreach($postdb AS $key=>$value){	
		if($key=='content'){		
			continue;
		}
		$postdb[$key]=filtrate($value);
	}
	
	if(!$fid && $Fid_db['name'][$webdb[wei_fid]]){
		$fid = $webdb[wei_fid];
	}else{
		showerr('�����Ա����̨����һ����Ŀ��');
	}
	
	if(!$postdb[title]){
		//showerr('���ⲻ��Ϊ�գ�');
	}
	if(!$postdb[content]){
		showerr('���ݲ���Ϊ�գ�');
	}

	$postdb[content] = preg_replace('/javascript/i','java script',$postdb[content]);	//����js����
	$postdb[content] = preg_replace('/<iframe ([^<>]+)>/i','&lt;iframe \\1>',$postdb[content]);	//���˿�ܴ���

	if(!$postdb[keywords]){
		$postdb[keywords] = get_txt_word( $postdb[content] , 50 );
		$postdb[keywords] = keyword_ck('',$postdb[keywords]);
	}

	
	$db->query("INSERT INTO `{$_pre}content` ( `title` , `mid` , `fid` , `fname` , `city_id` , `posttime` , `list` , `uid` , `username` ,  `picurl` , `ispic` , `yz` ,`keywords` , `jumpurl` , `iframeurl` , `ip` ,`author`, `copyfrom`, `copyfromurl`) VALUES ('$postdb[title]','1','$fid','{$Fid_db[name][$fid]}','$city_id','$timestamp','$timestamp','$lfjdb[uid]','$lfjdb[username]','$postdb[picurl]','$postdb[ispic]','$postdb[yz]','$postdb[keywords]','$postdb[jumpurl]','$postdb[iframeurl]','$onlineip','$postdb[author]','$postdb[copyfrom]','$postdb[copyfromurl]')");

	$id=$db->insert_id();

	$db->query("INSERT INTO `{$_pre}content_1` (`id` , `fid` , `uid` , `topic` , `content`) VALUES ('$id', '$fid', '$lfjdb[uid]', '1', '$postdb[content]')");

	//��ӹؼ���
	keyword_add($id,$postdb[keywords],$lfjdb[uid]);
 	refreshto("./","�����ɹ�",0);
}

?>