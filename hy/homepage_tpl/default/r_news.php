<?php
function ShowNews($uid,$nums){
	global $db,$_pre;
	$query=$db->query("SELECT * FROM {$_pre}news WHERE uid='$uid' AND yz=1 ORDER BY posttime DESC LIMIT $nums");
	while($rs=$db->fetch_array($query)){
		$rs[posttime]=date("Y-m-d",$rs[posttime]);
		$rs[content]=@preg_replace('/<([^>]*)>/is',"",$rs[content]);	//��HTML�������
		$rs[content]=get_word(str_replace("&nbsp;","",$rs[content]),200);
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
	<div class="head"><div class="tag">��������</div><div class="more"><a href="?m=news&uid=$uid">����</a></div></div>
	<div class="cont">		
		<ul class="listnews">
<!--
EOT;
$rows=$conf[listnum][newslist]?$conf[listnum][newslist]:5;
$rows = intval($rows);
$rows>0 || $rows=10;
$hynews=ShowNews($uid,$rows);
foreach($hynews as $rs){
print <<<EOT
-->
			<li><a href="?uid=$uid&m=newsview&id=$rs[id]">$rs[title]</a></li>
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