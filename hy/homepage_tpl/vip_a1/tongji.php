<!--
<?php
$dianpingnum = 0;
extract($db->get_one("SELECT COUNT(*) AS dianpingnum FROM {$_pre}dianping WHERE cuid='$uid'"));
$rsdb[posttime]=date("Y��m��d��",$rsdb[posttime]);
print <<<EOT
--> 
<div class="sidecont">
	<div class="head"><div class="tag">ͳ����Ϣ</div></div>
	<div class="cont tongji">
		<div class="dp">�˿͵���������<span>{$dianpingnum}</span> ��</div>
		<div class="time">�Ǽ�ʱ�䣺<span>$rsdb[posttime]</span></div>
		<div class="hits">��������˴Σ�<span>$rsdb[hits]</span></div>
	</div>
</div>
<!--
EOT;
?>
-->