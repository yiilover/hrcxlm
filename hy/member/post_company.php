<?php
require_once(dirname(__FILE__)."/global.php");
require_once(dirname(__FILE__)."/../inc/homepage/global.php");
require_once(dirname(__FILE__)."/../bd_pics.php");


if(!$uid){
	$uid=$lfjuid;
}
if(!$web_admin && $uid!=$lfjuid ){
	showerr("UID����!");
}

$post_company=1;//ģ������ʹ��,ʹ����Ŀѡ��ʱ���Զ�ѡ
$lfjdb[money]=get_money($lfjuid);
//$groupdb['allow_get_homepage']=1;	//���Կ�����Щ�û��������������

$companyDB=$db->get_one("SELECT * FROM `{$_pre}company` WHERE uid='$uid'");

if($action!='ok'){
	if($companyDB['yz']){
		//��������ҳ��,�Ͳ������ٷ��ʴ�ҳ,û���̵Ļ�,�Ϳ����ڱ�ҳ��������
		if( $db->get_one("SELECT * FROM `{$_pre}home` WHERE uid='$companyDB[uid]'") ){
			if($job=='view'){
				echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$webdb[www_url]/home/?uid=$uid'>";
			}else{
				echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=homepage_ctrl.php?atn=info&uid=$uid'>";
			}			
			exit;
		}
	}elseif($companyDB && $job!='view'){
		showerr('�����ҵ����������˵���,�����ĵȺ�!');
	}
}

if($action=='apply'){	//ͨ����˵���ҵ�û�,��������,ֱ�Ӽ���
	
	if(!$companyDB){
		showerr("<A HREF='post_company.php'>�����û�������������,���ȵǼ���ҵ��Ϣ,�������Ϊ��ҵ�û�,������������!</A>");
	}
	if(!$web_admin){
		if(!$groupdb['allow_get_homepage']){
			showerr("�ܱ�Ǹ,�������û��鲻��������ҵ����,��Ҫ������ҵ����,������������û���,<A HREF='$webdb[www_url]/member/buygroup.php?job=list'>��������û���</A>");
		}elseif($lfjdb[money]<$webdb[creat_home_money]){
			showerr("�ܱ�Ǹ,�㲻��������ҵ����,��Ϊ������ҵ������Ҫ{$webdb[MoneyName]}{$webdb[creat_home_money]}{$webdb[MoneyDW]},�����{$webdb[MoneyName]}����{$lfjdb[money]}{$webdb[MoneyDW]}<br>�����ѡ�����߳�ֵ���������{$webdb[MoneyName]},<A HREF='$webdb[www_url]/member/money.php?job=list'>������ֵ</A>");
		}
	}

	if($webdb[creat_home_money]){
		add_user($uid,-abs($webdb[creat_home_money]),'�������̿۷�');
	}

	caretehomepage($companyDB,false);
	refreshto("?action=ok","",0);

}elseif($action=='add'||$action=='edit'){
	
	$action=$companyDB?'edit':'add';	//��ֹ�ܸ�

	if($postdb['if_homepage']&&!$web_admin){
		if(!$groupdb['allow_get_homepage']){
			showerr_post("�ܱ�Ǹ,�������û��鲻����������,��Ҫ��������,������������û���");
		}elseif($lfjdb[money]<$webdb[creat_home_money]){
			showerr_post("�ܱ�Ǹ,�㲻����������,��Ϊ����������Ҫ{$webdb[MoneyName]}{$webdb[creat_home_money]}{$webdb[MoneyDW]},�����{$webdb[MoneyName]}����{$lfjdb[money]}{$webdb[MoneyDW]}<br>�����ѡ�����߳�ֵ���������{$webdb[MoneyName]}");
		}		
	}


	if(count($fids)<1)showerr_post("������ѡ��һ����Ӫ����!");
	
	//��������
	$ifids = $fnamedb = array();
	foreach($fids AS $key){
		$key = intval($key);
		if($key){
			if($Fid_db['name'][$key]==''){
				showerr_post("ѡ��ķ������󣬲�����!");
			}
			$ifids[] = $key;
			$fnamedb[]=$Fid_db['name'][$key];
		}
	}
	$fname=implode(',',$fnamedb);

	if(!$postdb[city_id]) showerr_post("��ѡ�����ڳ�������!");
	if(!$postdb[title]) showerr_post("�����빫˾ȫ��");
	if(strlen($postdb[title])<10){
		showerr_post("��˾ȫ��С��5���ֲ��淶!");
	}
	if(eregi("^([a-z0-9]+)$",$postdb[title])){
		//showerr_post("��˾���Ʋ��淶!");
	}
	if(!$postdb[qy_regmoney]) showerr_post("�����빫˾ע���ʱ�");
	if(!$postdb[content]) showerr_post("�̼ҽ��ܲ���Ϊ��");
	if(!$postdb[qy_contact_tel]) showerr_post("ָ����ϵ�˵绰����Ϊ��");
	if(!$postdb[qy_contact]) showerr_post("ָ����ϵ�˲���Ϊ��");
	if(!$postdb[qy_contact_email]) showerr_post("ָ����ϵ�������ַ����Ϊ��");

	foreach($postdb AS $key=>$val){	//ȫ�����ݹ��˴���
		if($key == 'content'){
			$postdb[$key]	=	preg_replace('/javascript/i','java script',$postdb[$key]);
			$postdb[$key]	=	preg_replace('/<(script)([^<>]*)>/i','&lt;\\1\\2>',$postdb[$key]);
			$postdb[$key]	=	preg_replace('/<iframe ([^<>]+)>/i','&lt;iframe \\1>',$postdb[$key]);
		}else{
			$postdb[$key]=filtrate($val);
		}
	}

	if(!ereg("^[-a-zA-Z0-9_\.]+\@([0-9A-Za-z][0-9A-Za-z-]+\.)+[A-Za-z]{2,5}$",$postdb[qy_contact_email])){
		showerr_post('���䲻���Ϲ���');
	}

	if($postdb[qy_regmoney]<3){
		showerr_post('ע���ʱ�����С��3��');
	}

	if($postdb[qy_website]&&!ereg("^http:",$postdb[qy_website])){
		showerr_post('��ַ����');
	}

	//ͼƬ����
	if(is_uploaded_file($_FILES[postfile][tmp_name])){
		if($action=='edit'){
			delete_attachment($uid,tempdir($companyDB[picurl]));
		}
		$array[name]=is_array($postfile)?$_FILES[postfile][name]:$postfile_name;
		$dirid=ceil($uid/1000);
		$array[path]=$webdb[updir]."/homepage/logo/$dirid/";
				
		$array[size]=is_array($postfile)?$_FILES[postfile][size]:$postfile_size;
		$pic_name=upfile(is_array($postfile)?$_FILES[postfile][tmp_name]:$postfile,$array);
		
		$picurl="homepage/logo/$dirid/{$pic_name}";

		$sizedb=getimagesize(ROOT_PATH."$array[path]/$pic_name");

		if($sizedb[0]>300||$sizedb[1]>300){
			$Newpicpath=ROOT_PATH."$array[path]/logo_{$pic_name}";
			gdpic(ROOT_PATH."$array[path]/{$pic_name}",$Newpicpath,300,225);
			gdpic(ROOT_PATH."$array[path]/{$pic_name}",$Newpicpath.".jpg",225,300);
			gdpic(ROOT_PATH."$array[path]/{$pic_name}",$Newpicpath.".jpg.jpg",300,300);
			gdpic(ROOT_PATH."$array[path]/{$pic_name}",$Newpicpath.".jpg.jpg.jpg",300,100);
			if(file_exists($Newpicpath)){
				delete_attachment($uid,tempdir("homepage/logo/$dirid/{$pic_name}"));
				$picurl="homepage/logo/$dirid/logo_{$pic_name}";
			}
		}else{
			$Newpicpath=ROOT_PATH."$array[path]/{$pic_name}";
			copy(ROOT_PATH."$array[path]/{$pic_name}",$Newpicpath.".jpg");
			copy(ROOT_PATH."$array[path]/{$pic_name}",$Newpicpath.".jpg.jpg");
			copy(ROOT_PATH."$array[path]/{$pic_name}",$Newpicpath.".jpg.jpg.jpg");
		}
		
	}else{
		$picurl=$companyDB[picurl];
	}

	if($action=='edit'){	//��ɾ��,���������²���
		$db->query("DELETE FROM {$_pre}company WHERE uid='$companyDB[uid]'");
		$db->query("DELETE FROM {$_pre}company_fid WHERE uid='$companyDB[uid]'");
		$yz = $companyDB['yz'];
		$username = $companyDB['username'];
		$posttime = $companyDB['posttime'];
	}else{
		$SQL = "";
		if($webdb['RegQyNeedCheck']){ //ע���Ϊ��ҵ��Ա,��Ҫ�˹����
			$gtype = -1;
			$yz = 0;
		}else{
			$yz = 1;
			$gtype = 1;
			$groupid = $webdb['RegQyGroupid'];
			if($ltitle[$groupid] && $groupid!=3){
				$SQL = ",groupid='$groupid'";
			}
		}
		$db->query("UPDATE {$pre}memberdata SET grouptype='$gtype'$SQL WHERE uid='$uid'");
		$username = $lfjid;
		$posttime = $timestamp;
	}
	
	
	$db->query("INSERT INTO `{$_pre}company` ( `title` , `fname` , `uid` , `username` , `posttime` , `picurl` , `yz` , `yzer` , `yztime` , `content` , `province_id` , `city_id` ,`zone_id` ,`street_id` , `qy_cate` , `qy_saletype` , `qy_regmoney` , `qy_createtime` , `qy_regplace` , `qy_address` , `qy_postnum` , `qy_pro_ser` , `my_buy` , `my_trade` , `qy_contact`,`qy_contact_zhiwei` , `qy_contact_sex` , `qy_contact_tel` , `qy_contact_mobile` , `qy_contact_fax` , `qy_contact_email` , `qy_website` , `qq` , `msn` , `skype`, `if_homepage` ) VALUES (  '$postdb[title]', '$fname', '$uid', '$username', '$posttime','$picurl', '$yz', '$companyDB[yzer]', '$companyDB[yztime]', '$postdb[content]', '$postdb[province_id]', '$postdb[city_id]','$postdb[zone_id]','$postdb[street_id]', '$postdb[qy_cate]', '$postdb[qy_saletype]', '$postdb[qy_regmoney]', '$postdb[qy_createtime]', '$postdb[qy_regplace]', '$postdb[qy_address]', '$postdb[qy_postnum]', '$postdb[qy_pro_ser]', '$postdb[my_buy]', '$postdb[my_trade]', '$postdb[qy_contact]', '$postdb[qy_contact_zhiwei]', '$postdb[qy_contact_sex]', '$postdb[qy_contact_tel]', '$postdb[qy_contact_mobile]', '$postdb[qy_contact_fax]', '$postdb[qy_contact_email]', '$postdb[qy_website]', '$postdb[qq]', '$postdb[msn]', '$postdb[skype]', '$postdb[if_homepage]');");
	
	foreach($ifids AS $v){
		$db->query("INSERT INTO {$_pre}company_fid (uid, fid) VALUES ($uid, $v)");
	}

	//������ҳ
	if($postdb['if_homepage']){
		if(!$web_admin&&$webdb['creat_home_money']){
			add_user($lfjuid,-abs($webdb['creat_home_money']),'�������̿۷�');
		}
		//��ʼ����ҳ
		caretehomepage($db->get_one("SELECT * FROM {$_pre}company WHERE uid='$uid'"),false);
	}
	
	if($job=='apply' && $webdb['postSellHouseNeedQy'] && $webdb['webmail'] ){
		$title = "���µ���ҵ�û���{$lfjid}��ע����!";
		$content = "<A HREF='$webdb[www_url]'>����վ������ҵ�û���{$postdb[title]}��ע����!</A>";
		send_mail($webdb['webmail'],$title,$content,$ifcheck=0);
	}

	if( $action=='add' || $postdb['if_homepage'] ){
		parent_goto("?action=ok");
	}else{
		parent_goto("?job=view&uid=$uid");
	}
}elseif($action=='ok'){
	
	if($companyDB['yz']){
		if($companyDB['if_homepage']){
			$msg="��ϲ������������ɹ���!";
			$do[0]['text']="����鿴��������";
			$do[0]['target']=" target=_blank";
			$do[0]['link']="$webdb[www_url]/home/?uid=$uid";
		}else{
			$msg="��ϲ������ҵ�û�����ɹ���!";
			$do[0]['text']="����鿴��ҵ��Ϣ";
			$do[0]['link']="?job=view";
		}		
	}else{
		$msg="�����ѳɹ��ύ,���ǻᾡ��������������̼�ͨ����˲���֮��ϵ,�����ĵȺ�!";
	}

}elseif($job=='view'){

	$rsdb =& $companyDB;
	if(!$rsdb){
		showerr("��ҵ��Ϣ������!");
	}
	$rsdb[picurl]=tempdir($rsdb[picurl]);
	@include(ROOT_PATH."data/zone/$rsdb[city_id].php");

}else{
	
	$rsdb =& $companyDB;
	if($rsdb){
		
		$do_type='edit';
		$rsdb[_my_trade][$rsdb[my_trade]]=' selected ';
		$rsdb[_qy_cate][$rsdb[qy_cate]]=' selected ';
		$rsdb[_qy_saletype][$rsdb[qy_saletype]]=' selected ';
		$fids = array();
		$query = $db->query("SELECT fid FROM `{$_pre}company_fid` WHERE uid = {$rsdb['uid']}");		
		while($arr = $db->fetch_array($query)) $fids[] = $arr['fid'];

	}else{

		$do_type='add';
		if($job=='apply'){	//��ע��ʱ,������ҵ�û�,���ݹ�����һЩ����
			foreach($CP AS $key=>$value){
				$rsdb[$key] = filtrate($value);
			}
			$rsdb['city_id'] = $city_id;
		}else{
			if($webdb['ForbidUpHy']&&$lfjdb[grouptype]==0){
				showerr('ϵͳ��ֹ��ͨ��Ա����Ϊ��ҵ��Ա!');
			}
		}		
	}
	$webdb[maxCompanyFidNum]=$webdb[maxCompanyFidNum]?$webdb[maxCompanyFidNum]:10;

}





$member_style=$webdb[sys_member_style]?$webdb[sys_member_style]:"images2";

$if_homepage=(($companyDB&&$job!='apply')||(!$web_admin&&($lfjdb[money]<$webdb[creat_home_money]||!$groupdb['allow_get_homepage'])))?'':' checked ';

require(dirname(__FILE__)."/head.php");
require(dirname(__FILE__)."/template/post_company.htm");
require(dirname(__FILE__)."/foot.php");



function showerr_post($msg,$html_id=''){
		echo "<SCRIPT LANGUAGE=\"JavaScript\">
			<!--
			alert(\"$msg\");
			parent.document.getElementById('post_showmsg').innerHTML=\"<strong>$msg</strong>\";	
			parent.document.getElementById('postSubmit').disabled=false;	
			//-->
			</SCRIPT>";exit;
}


function parent_goto($url,$msg=''){

	echo "<SCRIPT LANGUAGE=\"JavaScript\">
			<!--
			";
	if($msg!=''){
		echo "alert('$msg');";
	}
	echo    "
			
			parent.location='$url';	
			parent.location.href='$url';	
		
			//-->
			</SCRIPT>";exit;
}

?>