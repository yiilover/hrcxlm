<?php
require(dirname(__FILE__)."/"."global.php");
@include(dirname(__FILE__)."/"."data/guide_fid.php");

$id=intval($id);

/**
*��ȡ��Ŀ��ģ�����ò���
**/
$fidDB=$db->get_one("SELECT A.* FROM {$_pre}sort A WHERE A.fid='$fid'");

if(!$fidDB){
	showerr("��Ŀ������");
}

$db->query("UPDATE {$_pre}content SET hits=hits+1,lastview='$timestamp' WHERE id=$id");



/**
*��ȡ��Ϣ���ĵ�����
**/

$rsdb=$db->get_one("SELECT B.*,A.* FROM `{$_pre}content` A LEFT JOIN `{$_pre}content_1` B ON A.id=B.id WHERE A.id='$id' LIMIT 1");

if(!$rsdb){
	showerr("���ݲ�����");
}elseif($fid!=$rsdb[fid]){
	showerr("FID����,��һ��");
}

if($rsdb[city_id]!=$city_id){
	if($city_DB[domain][$rsdb[city_id]]){
		echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL={$city_DB[domain][$rsdb[city_id]]}/{$ModuleDB[$webdb[module_pre]][dirname]}/bencandy.php?fid=$fid&id=$id'>";
		exit;
	}
}


//SEO
$titleDB[title]		= filtrate("$rsdb[title] - $webdb[Info_webname]");
$titleDB[keywords]	= filtrate("$rsdb[keywords]");
$rsdb[description] || $rsdb[description] = get_word(str_replace(array(' ','��',"\t","\n","\r"),array(''),preg_replace('/<([^<]*)>/is',"",$rsdb[content])),200);
$titleDB[description] = filtrate($rsdb[description]);

/**
*���¼��
**/
check_article($rsdb);

$rsdb[content]=En_TruePath($rsdb[content],0,1);

$rsdb[posttime]=date("Y-m-d H:i:s",$rsdb[posttime]);

$rsdb[picurl] && $rsdb[picurl]=tempdir($rsdb[picurl]);

//����ҳ����ͷ����β��
get_show_tpl($head_tpl,$foot_tpl,$main_tpl);

//��ȡ��ǩ����
$template_file=getTpl("bencandy",$main_tpl);
fetch_label_value(array('pagetype'=>'3','file'=>$template_file,'module'=>$webdb['module_id']));

$showpage=getpage("","","bencandy.php?fid=$fid&id=$id",1,$rsdb[pages]);

if($rsdb[iframeurl])
{
	$head_tpl=$foot_tpl="template/default/none.htm";
	$main_tpl="template/default/bencandy_iframe.htm";
}

$rsdb[content]=show_keyword($rsdb[content]);	//ͻ����ʾ�ؼ���

/**
*��һƪ����һƪ,�Ƚ�Ӱ���ٶ�
**/
$nextdb=$db->get_one("SELECT title,id,fid FROM {$_pre}content WHERE id<'$id' AND fid='$fid' AND yz=1 ORDER BY id DESC LIMIT 1");
$nextdb[subject]=get_word($nextdb[title],34);
$backdb=$db->get_one("SELECT title,id,fid FROM {$_pre}content WHERE id>'$id' AND fid='$fid' AND yz=1 ORDER BY id ASC LIMIT 1");
$backdb[subject]=get_word($backdb[title],34);

require(ROOT_PATH."inc/head.php");
require(getTpl("bencandy",$main_tpl));
require(ROOT_PATH."inc/foot.php");


function show_keyword($content){
	global $Key_word,$webdb,$pre,$db;
	if(!$webdb[ifShowKeyword]){
		return $content;
	}
	@include(Mpath."data/keyword.php");
	//��ͼƬ����ȥ��
	//$content=preg_replace("/ alt=([^ >]+)/is","",$content);
	foreach( $Key_word AS $key=>$value){
		if(!$value){
			$value="$webdb[www_url]/news/search.php?type=title&action=search&keyword=".urlencode($key);
		}
		//$rs = $db->get_one("SELECT num FROM {$pre}keyword WHERE `keywords` = '{$key}'");
		//$content=str_replace_limit($key,"<a href=$value style=text-decoration:underline;font-size:14px;color:{$webdb[ShowKeywordColor]}; target=_blank>$key</a>",$content,$rs[num]);
		//$content=str_replace_limit($key,"<a href=$value style=text-decoration:underline;font-size:14px;color:{$webdb[ShowKeywordColor]}; target=_blank>$key</a>",$content,2);	//�ظ��Ĺؼ���ֻ����ʾ����

		$search[]=$key;
		$replace[]="<a href=$value style=text-decoration:underline;font-size:14px;color:{$webdb[ShowKeywordColor]}; target=_blank>$key</a>";
	}
	$search && $content=str_replace_limit($search,$replace,$content,1);
	return $content;
}

function str_replace_limit($search, $replace, $subject, $limit=-1) {
    if (is_array($search)) {
         foreach ($search as $k=>$v) {
             $search[$k] = "/(?!<[^>]+)".preg_quote($search[$k],'/')."(?![^<]*>)/";
        }
    }else{
         $search = "/(?!<[^>]+)".preg_quote($search,'/')."(?![^<]*>)/";
    }
    return preg_replace($search, $replace, $subject, $limit);
}

/**
*���¼��
**/
function check_article($rsdb){
	global $fidDB,$web_admin,$groupdb,$timestamp,$lfjid,$lfjuid,$fid,$id,$buy,$lfjdb,$webdb,$pre,$_pre,$db;
	
	if($lfjid&&($web_admin||$lfjid==$rsdb[uid]||in_array($lfjid,explode(",",$fidDB[admin]))))
	{
		$power=1;
	}
	if(!$rsdb)
	{
		showerr("���ݲ�����");
	}
	if( $fidDB[allowviewcontent]&&!$power&&!in_array($groupdb[gid],explode(",",$fidDB[allowviewcontent])) )
	{
		showerr("����Ŀ����,�������û��鲻�����������");
	}

	if( $rsdb[allowview]&&!$power&&!in_array($groupdb[gid],explode(",",$rsdb[allowview])) )
	{
		showerr("��������,�������û��鲻�����������");
	}

	//�����˿�ʼ�����������
	if($rsdb[begintime]&&$timestamp<$rsdb[begintime]&&!$power)
	{
		$rsdb[begintime]=date("Y-m-d H:i:s",$rsdb[begintime]);
		showerr("<font color='red' ><u>�ܱ�Ǹ,���������˱�������ֻ�е��ˡ�{$rsdb[begintime]}���Ǹ�ʱ��ſ��Բ鿴</u></font>");
	}

	//������ʧЧ�����������
	if($rsdb[endtime]&&$timestamp>$rsdb[endtime]&&!$power)
	{
		$rsdb[endtime]=date("Y-m-d H:i:s",$rsdb[endtime]);
		showerr("<font color='red' ><u>�ܱ�Ǹ,�����������˱����������鿴�����ǡ�{$rsdb[endtime]}���������ѳ�����������ޣ����Բ��ܲ鿴</u></font>");
	}

	if($rsdb[yz]==2&&!$web_admin)
	{
		showerr("����վ������ֻ�й���Ա�ſ��Բ鿴");
	}
	//δ���
	if(!$rsdb[yz]&&!$webdb[viewNoPassArticle]&&!$power)
	{
		showerr("<font color='red' ><u>�ܱ�Ǹ,���Ļ�ûͨ����֤,�㲻�ܲ鿴</u></font>");
	}

	//��ת������
	if($rsdb[jumpurl])
	{
		echo "ҳ��������ת�У����Ժ�...<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$rsdb[jumpurl]'>";
		exit;
	}

	//��������
	if($rsdb[passwd])
	{
		if( $_POST[password] && $_POST[TYPE] == 'article'  )
		{
			if( $_POST[password] != $rsdb[passwd] )
			{
				echo "<A HREF=\"?fid=$fid&id=$id\">���벻��ȷ,�������</A>";
				exit;
			}
			else
			{
				setcookie("article_passwd_$_pre$id",$rsdb[passwd]);
				$_COOKIE["article_passwd_$_pre$id"]=$rsdb[passwd];
			}
		}
		if( $_COOKIE["article_passwd_$_pre$id"] != $rsdb[passwd] )
		{
			echo "<CENTER><form name=\"form1\" method=\"post\" action=\"\">��������������:<input type=\"password\" name=\"password\"><input type=\"hidden\" name=\"TYPE\" value=\"article\"><input type=\"submit\" name=\"Submit\" value=\"�ύ\"></form></CENTER>";
			exit;
		}
	}

	//��Ŀ����
	if($fidDB[passwd])
	{
		if( $_POST[password] && $_POST[TYPE] == 'sort' )
		{
			if( $_POST[password] != $fidDB[passwd] )
			{
				echo "<A HREF=\"?fid=$fid&aid=$aid\">���벻��ȷ,�������</A>";
				exit;
			}
			else
			{
				setcookie("sort_passwd_$_pre$fid",$fidDB[passwd]);
				$_COOKIE["sort_passwd_$_pre$fid"]=$fidDB[passwd];
			}
		}
		if( $_COOKIE["sort_passwd_$_pre$fid"] != $fidDB[passwd] )
		{
			echo "<CENTER><form name=\"form1\" method=\"post\" action=\"\">��������Ŀ����:<input type=\"password\" name=\"password\"><input type=\"hidden\" name=\"TYPE\" value=\"sort\"><input type=\"submit\" name=\"Submit\" value=\"�ύ\"></form></CENTER>";
			exit;
		}
	}

	//���ִ���
	if( !$power && $rsdb[money]=abs($rsdb[money])){
		if(!$lfjuid)
		{
			showerr("���ȵ�¼,��Ҫ֧��{$rsdb[money]}{$webdb[MoneyName]}���ܲ鿴");
		}
		elseif(!strstr($rsdb[buyuser],",$lfjid,"))
		{
			$lfjdb[money]=get_money($lfjuid);
			if($lfjdb[money]<$rsdb[money])
			{
				showerr("���{$webdb[MoneyName]}����$rsdb[money]");
			}
			elseif($buy==1)
			{
				add_user($lfjuid,"-$rsdb[money]",'�鿴��Ѷ���ݿ۷�');
				add_user($rsdb[uid],"$rsdb[money]",'�û��鿴�ҵ���Ѷ�÷�');
				$rsdb[buyuser]=$rsdb[buyuser]?",{$lfjid}{$rsdb[buyuser]}":",$lfjid,";
				$db->query("UPDATE {$_pre}content SET buyuser='$rsdb[buyuser]' WHERE id=$id");
				refreshto("?fid=$fid&id=$id","����ɹ�,��ո�������{$webdb[MoneyName]}{$rsdb[money]}{$webdb[MoneyDW]}",3);
			}
			else
			{
				showerr("����Ҫ����{$webdb[MoneyName]}{$rsdb[money]}{$webdb[MoneyDW]}����Ȩ�޲鿴,�Ƿ����<br><br>[<A HREF='?fid=$fid&id=$id&buy=1'>��Ҫ����</A>]");
			}
		}
	}
}

?>