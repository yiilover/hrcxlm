<!--
<?php
//echo $rsdb[province_id];
$rsdb[show_qq]=getOnlinecontact('qq',$rsdb[qq]);
$rsdb[show_msn]=getOnlinecontact('msn',$rsdb[msn]);
$rsdb[show_ww]=getOnlinecontact('ww',$rsdb[ww]);
$rsdb[qy_contact_email] =str_replace("@","#",$rsdb[qy_contact_email]);
if($m){
	$titleDB['title']=$titleDB['keywords']=$titleDB['description']=$rsdb['title'].' �̼���ϵ��ʽ';
}

print <<<EOT
-->
<div class="maincont1">
	<div class="head">
		<div class="tag">��ϵ����</div>
		<div class="more">&nbsp;
<!--
EOT;
if($lfjuid==$uid){
print <<<EOT
-->
	<a href='$webdb[_www_url]/member/?main=$Murl/member/homepage_ctrl.php?atn=contactus' target='_blank'>�޸�</a>
<!--
EOT;
}
print <<<EOT
-->	
		</div>
	</div>
	<div class="cont">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="contactTable">
		  <tr>
			<td class="tg" width="100">��λ���ƣ�</td>
			<td width="250">$rsdb[title]</td>
			<td class="tg" width="100">ְλ��</td>
			<td>$rsdb[qy_contact_zhiwei]</td>
		  </tr>
		  <tr>
			<td class="tg">��ϵ�ˣ�</td>
			<td>$rsdb[qy_contact]</td>
			<td class="tg">�绰���룺</td>
			<td>$rsdb[qy_contact_tel]</td>
		  </tr>
		  <tr>
			<td class="tg">������룺</td>
			<td>$rsdb[qy_contact_fax]</td>
			<td class="tg">�ƶ����룺</td>
			<td>$rsdb[qy_contact_mobile]</td>
		  </tr>
		  <tr>
			<td class="tg">��λ��ҳ��</td>
			<td><a href='$rsdb[qy_website]' target='_blank'>$rsdb[qy_website]</a></td>
			<td class="tg">�����ַ��</td>
			<td>$rsdb[qy_contact_email] (���ֶ������������ɡ�@��)</td>
		  </tr>
		  <tr>
			<td class="tg">����</td>
			<td>{$area_DB[name][$rsdb[province_id]]} {$city_DB[name][$rsdb[city_id]]} {$zone_DB[name][$rsdb[zone_id]]} {$street_DB[name][$rsdb[street_id]]}</td>
			<td class="tg">�������룺</td>
			<td>$rsdb[qy_postnum]</td>
		  </tr>
		  <tr>
			<td class="tg">��ϸ��ַ��</td>
			<td colspan="3">$rsdb[qy_address]</td>
		  </tr>
		  <tr>
			<td class="tg">���߽�����</td>
			<td colspan="3">
				<div>Q Q:$rsdb[show_qq]</div>
				<div>MSN:$rsdb[show_msn]</div>
				<div>��������:$rsdb[show_ww]</div>
			</td>
		  </tr>
<!--
EOT;
if($rsdb[gg_maps]){
print <<<EOT
-->
		  <tr>
			<td colspan="4">
				<iframe src="$Mdomain/job.php?job=show_ggmaps&position=$rsdb[gg_maps]&title=$rsdb[title]"  width="100%" height="500" scrolling="no" frameborder="0" ></iframe>
			</td>
		  </tr>
<!--
EOT;
}
print <<<EOT
-->
		</table> 
	</div>
</div> 
<!--
EOT;
?>
-->