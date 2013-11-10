<?php
function Showshop($uid,$nums){
	global $db,$pre;
	$query = $db->query("SELECT * FROM {$pre}shop_content WHERE uid='$uid' ORDER BY id DESC LIMIT $nums");
	while($rs = $db->fetch_array($query)){
		$rs[picurl]=tempdir($rs[picurl]);
		$listdb[]=$rs;
	}
	return $listdb;
}
?>

<!--
<?php
print <<<EOT
-->
<div class="maincont1">
	<div class="head head1"><div class="tag">商家商品</div><div class="more"><a href="?m=shop&uid=$uid">更多</a></div></div>
	<div class="cont">		
		<ul class="liscoupons">
<!--
EOT;
unset($hyshop);
$hyshop=Showshop($uid,8);
foreach($hyshop as $rs){
print <<<EOT
-->
			<li>
				<div class="img"><a href="$webdb[www_url]/shop/bencandy.php?fid=$rs[fid]&id=$rs[id]" target="_blank"><img src="$rs[picurl]" onerror="this.src='$webdb[www_url]/images/default/nopic.jpg'" height="120"/></a></div>
				<div class="t"><a href="$webdb[www_url]/shop/bencandy.php?fid=$rs[fid]&id=$rs[id]" target="_blank">$rs[title]</a></div>
				<div class="t">栏目：<a href="$webdb[www_url]/shop/list.php?fid=$rs[fid]" target="_blank">$rs[fname]</a></div>
			</li>
<!--
EOT;
}print <<<EOT
-->
		</ul>
	</div>
</div>
<!--
EOT;
?>
-->