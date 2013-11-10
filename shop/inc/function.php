<?php

function get_info_url($id,$fid,$array=array(),$filetype=''){
	global $Murl;
	if($id){
		$url=($filetype?$filetype:"$Murl/bencandy.php?")."fid=$fid&id=$id";
	}else{
		$url=($filetype?$filetype:"$Murl/list.php?")."fid=$fid";
		foreach($array AS $key=>$value){
			$value=urlencode($value);
			$url.="&$key=$value";
		}
	}
	return $url;
}




function select_module($name,$ck=0){
	global $db,$_pre;
	$show="<select name='$name' $reto>";
	$query = $db->query("SELECT * FROM {$_pre}module ORDER BY LIST DESC");
	while($rs = $db->fetch_array($query)){
		$ck==$rs[id]?$ckk='selected':$ckk='';
		$show.="<option value='$rs[id]' $ckk>$rs[name]</option>";
	}
	return $show." </select>";   
}


function get_guide($fid,$url){
	global $db,$_pre;
	$query = $db->query("SELECT * FROM {$_pre}sort WHERE fid='$fid' ");
	while($rs = $db->fetch_array($query)){
		$show=" -&gt; <A href='list.php?fid=$rs[fid]'>$rs[name]</A>".$show;
		if($rs[fup]){
			$show=get_guide($rs[fup],$url).$show;
		}
	}
	return $show;
}

function fid_cache(){
	global $db,$_pre,$webdb;
	$query = $db->query("SELECT * FROM {$_pre}sort ORDER BY list DESC LIMIT 800");
	while($rs = $db->fetch_array($query)){

		if($rs[tableid]){
			$Fid_db[tableid][$rs[fid]]=$rs[tableid];
		}

		$Fid_db[$rs[fup]][$rs[fid]]=$rs[name];
		$Fid_db[name][$rs[fid]]=$rs[name];
		$Fid_db[mid][$rs[fid]]=intval($rs[mid]);

		$GuideFid[$rs[fid]]=get_guide($rs[fid]);
	}

	write_file(Mpath."data/all_fid.php","<?php\r\n\$Fid_db=".var_export($Fid_db,true).';?>');
	write_file(Mpath."data/guide_fid.php","<?php\r\n\$GuideFid=".var_export($GuideFid,true).';?>');
}






function list_post_allsort($fid,$Class){
	global $db,$_pre,$listdb,$web_admin,$lfjdb,$lfjid,$webdb,$groupdb;
	$Class++;
	$query=$db->query("SELECT S.*,M.name AS m_name FROM {$_pre}sort S LEFT JOIN {$_pre}module M ON S.mid=M.id where S.fup='$fid' ORDER BY S.list DESC");
	while( $rs=$db->fetch_array($query) ){
		$icon="";
		for($i=1;$i<$Class;$i++){
			$icon.="&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		if($icon){
			$icon=substr($icon,0,-24);
			$icon.="--";
		}
		$rs[icon]=$icon;

		$rs[allow]=1;
		if( $webdb[GroupPostInfo]&&in_array($groupdb[gid],explode(",",$webdb[GroupPostInfo])) )
		{
			if( !$web_admin&&(!$lfjid||!in_array($lfjid,explode(",",$rs[admin]))) ){
				$rs[allow]=0;
			}
		
		}
		if($rs[allowpost]&&!in_array($groupdb[gid],explode(",",$rs[allowpost]))){
			if(!$web_admin&&(!$lfjid||!in_array($lfjid,explode(",",$rs[admin])))){
				$rs[allow]=0;
			}
		}
		if($rs[type]==2){
			$rs[_type]="����";
			$rs[_alert]="onclick=\"alert('��ƪ�����²�������Ŀ,�������¿�������Ŀ');return false;\" style='color:#ccc;'";
			$rs[color]="red";
			$rs[_ifcontent]="onclick=\"alert('��ƪ�����²����ж�ƪ��������,Ҳ���ܷ����ƪ��������,����Ŀ�¿���������');return false;\" style='color:#ccc;'";
		}elseif($rs[type]==1){
			$rs[_alert]="";
			$rs[color]="red";
			$rs[_type]="����";
			$rs[_ifcontent]="onclick=\"alert('�����²���������,Ҳ���ܷ�������,����Ŀ�¿���������');return false;\" style='color:#ccc;'";
		}elseif(!$rs[allow]){
			$rs[_type]="��Ŀ";
			$rs[_alert]="onclick=\"alert('��ûȨ���ڱ���Ŀ��������');return false;\" style='color:#ccc;'";
			$rs[color]="";
			$rs[_ifcontent]="onclick=\"alert('��ûȨ���ڱ���Ŀ��������');return false;\" style='color:#ccc;'";
		}
		$listdb[]=$rs;
		list_post_allsort($rs[fid],$Class);
	}
}




//����ҳ,�ϴ�����ͼƬ
function post_info_photo(){
	global $ftype,$fid,$webdb,$photodb,$groupdb,$_pre,$web_admin;

	if($web_admin){
		$picnum=80;
	}else{
		$picnum=20;
	}

	foreach( $_FILES AS $key=>$value ){
		$i=(int)substr($key,10);
		if(is_array($value)){
			$postfile=$value['tmp_name'];
			$array[name]=$value['name'];
			$array[size]=$value['size'];
		} else{
			$postfile=$$key;
			$array[name]=${$key.'_name'};
			$array[size]=${$key.'_size'};
		}
		if($ftype[$i]=='in'&&$array[name]){

			$jj++;
			if($jj>$picnum){
				unset($photodb[$i]);
				continue;
			}

			if(!eregi("(gif|jpg|png)$",$array[name])){
				showerr("ֻ���ϴ�GIF,JPG,PNG��ʽ���ļ�,�㲻���ϴ����ļ�:$array[name]");
			}
			
			if($photodb[$i]){
				global $lfjuid;
				delete_attachment($lfjuid,tempdir($photodb[$i]));
				delete_attachment($lfjuid,tempdir($photodb[$i].'.gif'));
			}
			
			$array[path]=$webdb[updir]."/$_pre/$fid";

			$array[updateTable]=1;	//ͳ���û��ϴ����ļ�ռ�ÿռ��С
			$filename=upfile($postfile,$array);
			$photodb[$i]="$_pre/$fid/$filename";

			$smallimg=$photodb[$i].'.gif';
			$Newpicpath=ROOT_PATH."$webdb[updir]/$smallimg";
			gdpic(ROOT_PATH."$webdb[updir]/{$photodb[$i]}",$Newpicpath,300,220);

			/*��ˮӡ*/
			if( $webdb[is_waterimg] && $webdb[if_gdimg] )
			{
				include_once(ROOT_PATH."inc/waterimage.php");
				$uploadfile=ROOT_PATH."$webdb[updir]/$photodb[$i]";
				imageWaterMark($uploadfile,$webdb[waterpos],ROOT_PATH.$webdb[waterimg]);
			}
		}
	}
}



//ɾ����Ϣ
function del_info($id,$rs){
	global $db,$_pre;
	$rsdb = $db->get_one("SELECT B.*,A.* FROM `{$_pre}content` A LEFT JOIN `{$_pre}content_$rs[mid]` B ON A.id=B.id WHERE A.id='$id'");
	
	//delete_attachment($rsdb[uid],tempdir($rsdb[picurl]));      //����ֻɾ������ͼ���Խ������Ϊ$rsdb[picnum]>=1

	foreach($rsdb AS $value){
		if(strlen($value)>10){
			delete_attachment($rsdb[uid],$value);	//ɾ�����߱༭�����ϴ�������
		}
	}

	$db->query("DELETE FROM `{$_pre}content` WHERE id='$id' ");
	$db->query("DELETE FROM `{$_pre}content_$rs[mid]` WHERE id='$id' ");
	
	$rsdb[comments] && $db->query("DELETE FROM `{$_pre}comments` WHERE id='$id' ");
	
	$rs[picurl] && delete_attachment($rs[uid],tempdir($rs[picurl]));


	if($rsdb[picnum]>=1){
		$query = $db->query("SELECT * FROM `{$_pre}pic` WHERE id='$id'");
		while($rs = $db->fetch_array($query)){
			delete_attachment($rs[uid],tempdir($rs[imgurl]));
			delete_attachment($rs[uid],tempdir("$rs[imgurl].gif"));
		}
	}
	$db->query("DELETE FROM `{$_pre}pic` WHERE id='$id' ");    //ɾ��ͼƬ��¼
}



function del_order($id,$check=true,$mid=2){
	global $lfjuid,$web_admin,$_pre,$db,$webdb;
	if($check){		
		$rs=$db->get_one("SELECT * FROM `{$_pre}join` WHERE id='$id'");
		if(!$web_admin){
			if($rs['ifpay']){
				if($webdb['ForbidDelPayOrder']){
					showerr("ϵͳ����,�Ѹ���Ķ���������ɾ��!");
				}
			}else{
				if($webdb['ForbidSellerDelNoPayOrder'] && $rs['uid']!=$lfjuid){
					showerr("ϵͳ����,ֻ����Ҳ���ɾ���Լ�δ����Ķ���!");
				}
			}
		}
	}
	$db->query("DELETE FROM `{$_pre}content_$mid` WHERE id='$id' ");
	$db->query("DELETE FROM `{$_pre}join` WHERE id='$id' ");
}

//�����,���Ż��ʼ�֪ͨ�̼�
function paymoney_send_seller_msg($uid,$array){
	global $webdb,$userDB;
	$array[posttime] = date("Y-m-d H:i",$array[posttime]);
	$rs = $userDB->get_allInfo($uid);
	if($webdb[pay_send_mail2Seller] && $rs[email]){
		send_mail($rs[email],"�пͻ����︶����!","<A HREF=\"$webdb[www_url]/\">��ϲ��,��һ���ͻ����ﲢ�ҳɹ�������,��������:$array[id]</A>",0);
	}
	if($webdb[pay_send_sms2Seller] && $rs[mobphone]){
		if($rs[mobphone]){
			$content=get_word("��ϲ��,�пͻ����︶����,��������:$array[id]",68);
			sms_send($rs[mobphone],$content);
		}
	}
}

//�̼ҷ�����,���Ż��ʼ�֪ͨ���
function give_send_msg($uid,$array){
	global $webdb,$userDB;
	$array[posttime] = date("Y-m-d H:i",$array[posttime]);
	$rs = $userDB->get_allInfo($uid);
	if($webdb[give_send_mail] && $rs[email]){
		send_mail($rs[email],"�㹺�����Ʒ,�̼��ѷ���,��ע�����!","<A HREF=\"$webdb[www_url]/\">�㹺�����Ʒ,�̼��ѷ���,��ע�����,��������:$array[id]</A>",0);
	}
	if($webdb[give_send_sms] && $rs[mobphone]){
		if($rs[mobphone]){
			$content=get_word("�㹺�����Ʒ,�̼��ѷ���,��ע�����,��������:$array[id]",68);
			sms_send($rs[mobphone],$content);
		}
	}
}

//�������ı䶯
function shop_storage_change($id,$num){
	global $db,$_pre;
	$num = intval($num);
	$db->query("UPDATE {$_pre}content SET sellnum=sellnum+$num WHERE id='$id'");
	$db->query("UPDATE {$_pre}content_1 SET storage=storage-$num WHERE id='$id'");
}

//����Ʒ�ͻ���
function shop_give_money($id,$uid){
	global $db,$_pre,$webdb;
	$rs = $db->get_one("SELECT * FROM {$_pre}content WHERE id='$id'");
	if($rs[money]>0){
		add_user($uid,$rs[money],"������Ʒ��{$rs[title]}������{$webdb[MoneyName]}");
		if(!$webdb[giveMoneyFromSystem]){
			add_user($rs[uid],-$rs[money],"������Ʒ��{$rs[title]}���۳������͵�{$webdb[MoneyName]}");
		}
	}
}

?>