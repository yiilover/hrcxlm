<?php
unset($listdb);
if(!$m){
	$conf[listnum][guestbook]=$conf[listnum][guestbook]?$conf[listnum][guestbook]:4;
	$listdb=get_guestbook($conf[listnum][guestbook]);
	$showpage="";
}else{

	$titleDB['title']=$titleDB['keywords']=$titleDB['description']=$rsdb['title'].' �̼ҵĹ˿�������Ϣ';
	
	$conf[listnum][Mguestbook]=$conf[listnum][Mguestbook]?$conf[listnum][Mguestbook]:10;
	$listdb=get_guestbook($conf[listnum][Mguestbook]);
	$showpage=getpage("{$_pre}guestbook A"," WHERE A.cuid='$uid'","?m=$m&uid=$uid",$conf[listnum][Mguestbook]);
}

function get_guestbook($rows){
	global $db,$uid,$_pre,$pre,$Mrows,$albumid,$page,$Morder,$Mdesc,$web_admin,$lfjuid,$uid,$webdb,$VlogCfg;
	if($page<1){
		$page=1;
	}
	$min=($page-1)*$rows;
	//$SQL=" AND A.yz='1' ";
	$Mdesc[guestbook] || $Mdesc[guestbook]='DESC';
	$Morder[guestbook] || $Morder[guestbook]="list";
	$query = $db->query("SELECT A.*,M.picurl,M.title FROM {$_pre}guestbook A LEFT JOIN {$_pre}company M ON A.uid=M.uid  WHERE A.cuid='$uid' ORDER BY A.posttime desc LIMIT $min,$rows");
	while($rs = $db->fetch_array($query)){
		$rs[posttime]=date("y/m/d H:i:s",$rs[posttime]);

		$detail=explode(".",$rs[ip]);

		$rs[ip]="$detail[0].$detail[1].$detail[2].*";
		if(!$rs[username]){
			$detail=explode(".",$rs[ip]);
			$rs[username]="$detail[0].$detail[1].*.*";
		}
		if($web_admin||$lfjuid==$rs[uid]||$lfjuid==$rs[cuid]){
			$rs['delete']="[<A HREF='?m=msg&uid=$uid&page=$page&action=msg_delete&id=$rs[id]'>ɾ��</A>]";
		}
		$rs[content]=str_replace("\n","<br>",$rs[content]);
		$listdb[]=$rs;
	}
	return $listdb;
}
?>
<!--
<?php
print <<<EOT
-->   
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="rightinfo">
  <tr>
    <td  class="head">
	<span class='L'></span>
	<span class='T'><a href="?uid=$uid&m=msg">�� �� ��</a></span>
	<span class='R'></span>
	<span class='more'><a href='?uid=$uid&m=msg#do' >��Ҫ����</a></span>

	
	</td>
  </tr>
  <tr>
    <td class="content">
<link rel="stylesheet" type="text/css" href="$Murl/images/default/msg.css">
<!--
EOT;
foreach( $listdb AS $key=>$rs){
@extract($db->get_one("SELECT icon FROM {$pre}memberdata WHERE uid='$rs[uid]'"));
$icon = tempdir($icon);
print <<<EOT
-->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="List_Msg">
  <tr>
    <td class="img">
		<div class="pic"><a href="$webdb[www_url]/member/homepage.php?uid=$rs[uid]" target="_blank"><img onerror="this.src='$webdb[www_url]/images/default/noface.gif'" src='$icon' height="60"/></a></div>
		<div><a href="$webdb[www_url]/member/homepage.php?uid=$rs[uid]" target="_blank">$rs[username]</a></div>
	</td>
    <td class="word">
		<div>$rs[posttime] {$rs['delete']}</div>
		<p>{$rs[content]}</p>
	</td>
  </tr>	
</table>
<!--
EOT;
}
if($m){
print <<<EOT
-->

<div class="showpage">$showpage</div>

<!--
EOT;

if($lfjuid){
	$sub_name="�ύ����";$alw_submit="";
}else{
	$sub_name="��¼�󷽿�����";$alw_submit=" disabled='disabled'";
}
print <<<EOT
-->
<a name='do'></a>
<form action="?" method="post" name="msg">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="Post_Msg">
  <tr>
    <th colspan="2">�ÿ�����</th>
  </tr>
  <tr>
    <td class="tdL">��֤��:</td>
    <td class="tdR">
		<div><input type="text" name="yzimg" size="8"></div>
		<div>
<SCRIPT LANGUAGE="JavaScript">
<!--
document.write('<img border="0" name="imageField" onclick="this.src=this.src+Math.random();" src="$webdb[www_url]/do/yzimg.php?'+Math.random()+'">');
//-->
</SCRIPT>
		</div>
	</td>
  </tr>
  <tr>
    <td class="tdL">����:</td>
    <td class="tdR">
		<textarea name="content" cols="40" rows="5"></textarea>
		<p>��ע����������������ݲ��ܳ���500����;</p>
	</td>
  </tr>
  <tr>
    <td class="tdL">&nbsp;</td>
    <td class="tdR">
		<input type="submit" value="$sub_name" $alw_submit />
		<input name="uid" type="hidden" value="$uid" />
		<input name="m" type="hidden" value="$m" />
		<input name="action" type="hidden" value="msg_post" />
	</td>
  </tr>
</table>
</form>
<!--
EOT;
}
print <<<EOT
-->	
	</td>
  </tr>
  <tr>
    <td  class="foot"></td>
  </tr>
</table>

 
<!--
EOT;
?>
-->