<?php
function Showhouse1($uid,$nums){
	global $db,$pre;
	$query = $db->query("SELECT A.*,B.price FROM {$pre}house_content A LEFT JOIN {$pre}house_content_1 B ON A.id=B.id  WHERE A.uid='$uid' AND A.mid=1 ORDER BY A.id DESC LIMIT $nums");
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
	<div class="head head1"><div class="tag">出租房源</div><div class="more"><br/></div></div>
	<div class="cont">		
		<ul class="liscoupons">
<!--
EOT;
unset($hyhouse1);
$hyhouse1=Showhouse1($uid,8);
foreach($hyhouse1 as $rs){
print <<<EOT
-->
			<li>
				<div class="img"><a href="$webdb[www_url]/house/bencandy.php?fid=$rs[fid]&id=$rs[id]" target="_blank"><img src="$rs[picurl]" onerror="this.src='$webdb[www_url]/images/default/nopic.jpg'" height="120"/></a></div>
				<div class="t"><a href="$webdb[www_url]/house/bencandy.php?fid=$rs[fid]&id=$rs[id]" target="_blank">$rs[title]</a></div>
				<div class="p">月租：<span>{$rs[price]}</span>元</div>
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