<?php

if($m){
	$titleDB['title']=$titleDB['keywords']=$rsdb['title'].' �̼ҽ���';
	$titleDB['description']=get_word(preg_replace('/<([^>]*)>/is','',$rsdb[content]),200);
}

$rsdb[content] = En_TruePath($rsdb[content],0);
$rsdb[qy_contact_email] =str_replace("@","#",$rsdb[qy_contact_email]);
$rsdb[show_qq]=getOnlinecontact('qq',$rsdb[qq]);
$rsdb[show_msn]=getOnlinecontact('msn',$rsdb[msn]);
$rsdb[show_ww]=getOnlinecontact('ww',$rsdb[ww]);
$rsdb[fname]=str_replace("|",",",$rsdb[fname]);
?>

<!--
<?php
if(!$m){
print <<<EOT
--> 
<div class="maincont1">
	<div class="head"><div class="tag">�̼Ҽ��</div><div class="more">$updateinfo</div></div>
	<div class="cont">
		<div class="showcInfo">
			<dl class="baseinfo">
				<dt>$rsdb[title]<span>�ſ�</span></dt>
				<dd>$rsdb[content]</dd>
			</dl>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
				<td class="moreinfo">
					<div class="nofl">��Ӫ���ࣺ<span>$rsdb[fname]</span></div>
					<div>������ҵ��<span>$rsdb[my_trade]</span></div>
					<div>��ҵ���ͣ�<span>$rsdb[qy_cate]</span></div>
					<div>ע���ʱ���<span>$rsdb[qy_regmoney]��</span></div>
					<div>��Ӫģʽ��<span>$rsdb[qy_saletype]</span></div>
					<div>ע���ַ��<span>$rsdb[qy_regplace]</span></div>
					<div>����ʱ�䣺<span>$rsdb[qy_createtime]</span></div>
					<div class="nofl">��Ӫ��Ʒ�����<span>$rsdb[qy_pro_ser]</span></div>
					<div>��Ҫ�ɹ���Ʒ��<span>$rsdb[my_buy]</span></div>
				</td>
				<td class="contacts">
					<div>$rsdb[qy_contact_email]</div>
					<div class="bold">$rsdb[qy_contact_tel]</div>
					<div class="bold">$rsdb[qy_contact_mobile]</div>
				</td>
			  </tr>
			</table>
		</div>
	</div>
</div>
<!--
EOT;
}else{
$updateinfo=($lfjuid==$uid)?"<a href='$webdb[_www_url]/member/?main=$Murl/member/homepage_ctrl.php?&atn=info2' target='_blank'>�޸Ĺ�˾����</a>":"<br/>";
print <<<EOT
-->
<div class="maincont1">
	<div class="head"><div class="tag">�̼Ҽ��</div><div class="more">$updateinfo</div></div>
	<div class="cont">
		<div class="showcInfo">
			<dl class="baseinfo">
				<dt>$rsdb[title]<span>�ſ�</span></dt>
				<dd>$rsdb[content]</dd>
			</dl>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
				<td class="moreinfo">
					<div class="nofl">��Ӫ���ࣺ<span>$rsdb[fname]</span></div>
					<div>������ҵ��<span>$rsdb[my_trade]</span></div>
					<div>��ҵ���ͣ�<span>$rsdb[qy_cate]</span></div>
					<div>ע���ʱ���<span>$rsdb[qy_regmoney]��</span></div>
					<div>��Ӫģʽ��<span>$rsdb[qy_saletype]</span></div>
					<div>ע���ַ��<span>$rsdb[qy_regplace]</span></div>
					<div>����ʱ�䣺<span>$rsdb[qy_createtime]</span></div>
					<div class="nofl">��Ӫ��Ʒ�����<span>$rsdb[qy_pro_ser]</span></div>
					<div>��Ҫ�ɹ���Ʒ��<span>$rsdb[my_buy]</span></div>
				</td>
				<td class="contacts">
					<div>$rsdb[qy_contact_email]</div>
					<div class="bold">$rsdb[qy_contact_tel]</div>
					<div class="bold">$rsdb[qy_contact_mobile]</div>
				</td>
			  </tr>
			</table>
		</div>
	</div>
</div>
<div class="MoreContact">
	<div>��ϵ�绰��<span>$rsdb[qy_contact_tel]</span></div>
	<div>���棺<span>$rsdb[qy_contact_fax]</span></div>
	<div>�����ʼ���<span>$rsdb[qy_contact_email]</span>(���ֶ������������ɡ�@��)</div>
	<div>��ϵ��ַ��<span>$rsdb[qy_address]</span></div>
	<div>���̵�ַ��<span>$webdb[www_url]/home/?uid=$uid</span></div>
	<h3>���߹�ͨ����</h3>
	<div>�ͷ�QQ��<span>$rsdb[show_qq]</span></div>
	<div>�ͷ�MSN��<span>$rsdb[show_msn]</span></div>
	<div>�ͷ�������<span>$rsdb[show_ww]</span></div>
</div>
<!--
EOT;
}
?>
-->