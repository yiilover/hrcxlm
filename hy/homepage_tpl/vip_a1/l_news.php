<?php
unset($listdb);
$rows=$conf[listnum][newslist]?$conf[listnum][newslist]:5;
$rows = intval($rows);
$rows>0 || $rows=10;
$where=" WHERE uid='$rsdb[uid]' AND yz=1 ";
$query=$db->query("SELECT * FROM {$_pre}news $where ORDER BY posttime DESC LIMIT $rows");
while($rs=$db->fetch_array($query)){
	$rs[posttime]=date("Y-m-d",$rs[posttime]);
	$rs[content]=@preg_replace('/<([^>]*)>/is',"",$rs[content]);	//��HTML�������
	$rs[content]=get_word(str_replace("&nbsp;","",$rs[content]),200);
	$listdb[]=$rs;
}	
?>
<!--
<?php
print <<<EOT
-->
<div class="sidecont">
	<div class="head"><div class="tag">��˾����</div></div>
	<div class="cont news">
<!--
EOT;
foreach($listdb as $rs){
$rs[title]=get_word($rs[title_full]=$rs[title],40);
print <<<EOT
-->
 <div class="list"><a href="?uid=$uid&m=newsview&id=$rs[id]"  title='$rs[posttime]-$rs[title_full]'>$rs[title]</a></div>
<!--
EOT;
}
print <<<EOT
-->
	</div>
</div>
<!--
EOT;
?>
-->