<?php
function Showhr1($uid,$nums){
	global $db,$pre;
	$query = $db->query("SELECT A.*,B.* FROM {$pre}hr_content A LEFT JOIN {$pre}hr_content_1 B ON A.id=B.id  WHERE A.uid='$uid' AND A.mid=1 ORDER BY A.id DESC LIMIT $nums");
	while($rs = $db->fetch_array($query)){
		$listdb[]=$rs;
	}
	return $listdb;
}
?>

<!--
<?php
print <<<EOT
-->
<style>
.hrlist{
	line-height:25px;
	height:25px;
	overflow:hidden;
}
.hrlist a{
	color:#369;
}
.hrlist span{
	color:#F90;
}
</style>
<div class="maincont1">
	<div class="head head1"><div class="tag">职位信息</div><div class="more"><br/></div></div>
	<div class="cont">
<!--
EOT;
unset($Showhr1);
$Showhr1=Showhr1($uid,8);
foreach($Showhr1 as $rs){
print <<<EOT
-->
		<div class="hrlist"><a href="$webdb[www_url]/hr/bencandy.php?fid=$rs[fid]&id=$rs[id]" target="_blank">$rs[title]</a> 工作地点:<span> {$rs[workplace]}</span> 招聘人数:<span> {$rs[nums]}人</span></div>
<!--
EOT;
}print <<<EOT
-->
	</div>
</div>
<!--
EOT;
?>
-->