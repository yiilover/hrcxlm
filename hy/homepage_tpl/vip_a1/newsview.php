<?php
if($id){
	$data=$db->get_one("SELECT * FROM {$_pre}news WHERE id='$id'");
	//��ʵ��ַ��ԭ
	$data[content]=En_TruePath($data[content],0);
	$data[posttime] =date("Y-m-d",$data[posttime] );

	//�õ��󶨵�ͼƬ
	$show_bd_pics=show_bd_pics("{$_pre}news"," WHERE id=$id");
	$db->query("UPDATE `{$_pre}news` SET hits=hits + 1  WHERE id='$id'");
	
	$titleDB['title']=$titleDB['keywords']=$data['title'];
	$titleDB['description']=get_word(preg_replace('/<([^>]*)>/is','',$data['content']),200);
}
?>

<!--
<?php
if($id){
if($data[uid]!=$lfjuid && !$data[yz]){
print <<<EOT
-->   
    
��Ϣ���������...
<!--
EOT;
	}else{
print <<<EOT
-->   
<div class="maincont1">
	<div class="head">
		<div class="tag">��˾����</div>
		<div class="more">&nbsp;
<!--
EOT;
if($lfjuid==$uid){
print <<<EOT
-->
	<a href='$webdb[_www_url]/member/?main=$Murl/member/homepage_ctrl.php?atn=postnews&uid=$uid&id=$id' target='_blank'>�༭</a> | <a href='$webdb[_www_url]/member/?main=$Murl/member/homepage_ctrl.php?atn=delnews&uid=$uid&id=$id' target='_blank'>ɾ��</a> 
<!--
EOT;
}
print <<<EOT
-->
		</div>
	</div>
	<div class="cont newsView">
		<div class="Title">$data[title]</div>
		<div class="nave">ʱ�䣺$data[posttime] �����$data[hits]��</div>
		<div class="pics">$show_bd_pics</div>
		<table class="content" width="100%" cellspacing="0" cellpadding="0" style='TABLE-LAYOUT:fixed;WORD-WRAP:break-word'>
		  <tr> 
			<td>$data[content]</td>
		  </tr>
		</table>
	</div>
</div> 
<!--
EOT;
}
}
?>
-->