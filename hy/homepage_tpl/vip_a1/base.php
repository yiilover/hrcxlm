<!--
<?php
$rsdb[posttime]=date("Y-m-d",$rsdb[posttime]);
$adminlinks=($lfjuid==$uid)?"<a href='$Mdomain/member/?main=homepage_ctrl.php?atn=info&uid=$uid' target='_blank'>����</a>":"";
$renzhengs=$rsdb[renzheng];
$renzhengwords=array("��δ��֤","��ͨ��֤","������֤","������֤");
$rsdb[show_qq]=getOnlinecontact('qq',$rsdb[qq]);
print <<<EOT
-->
<div class="sidecont">
	<div class="head"><div class="tag">������Ϣ</div><div class="more">$adminlinks</div></div>
	<div class="cont base">
		<div class="ctitle">$rsdb[title]</div>		
		<div class="cyz">��ҵ��֤��<span><img src="$Murl/images/homepage_style/vip_a1/rz$renzhengs.gif"></span>$renzhengwords[$renzhengs]</div>
		<div class="carea">������<span>{$area_DB[name][$rsdb[province_id]]} {$city_DB[name][$rsdb[city_id]]} {$zone_DB[name][$rsdb[zone_id]]}{$street_DB[name][$rsdb[street_id]]}</span></div>
		<div class="caddress">���̵�ַ��<span>$rsdb[qy_address]</span></div>
		<div class="caddress">��Ӫ��Ʒ��<span>$rsdb[my_trade]</span></div>		
		<div class="cqq">��ϵQQ��$rsdb[show_qq] </div>
		<div class="ctel">��ѯ�绰��<span>$rsdb[qy_contact_tel]</span></div>
	</div>
</div>
<!--
EOT;
?>
-->