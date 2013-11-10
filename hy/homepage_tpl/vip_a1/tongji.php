<!--
<?php
$dianpingnum = 0;
extract($db->get_one("SELECT COUNT(*) AS dianpingnum FROM {$_pre}dianping WHERE cuid='$uid'"));
$rsdb[posttime]=date("Y年m月d日",$rsdb[posttime]);
print <<<EOT
--> 
<div class="sidecont">
	<div class="head"><div class="tag">统计信息</div></div>
	<div class="cont tongji">
		<div class="dp">顾客点评数共：<span>{$dianpingnum}</span> 条</div>
		<div class="time">登记时间：<span>$rsdb[posttime]</span></div>
		<div class="hits">店铺浏览人次：<span>$rsdb[hits]</span></div>
	</div>
</div>
<!--
EOT;
?>
-->