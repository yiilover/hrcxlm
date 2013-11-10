<?php

if($m){
	$titleDB['title']=$titleDB['keywords']=$titleDB['description']=$rsdb['title'].' 商家发布的二手信息';
}


unset($array);
$page>1 || $page=1;
$rows=12;
$min=($page-1)*$rows;
$query = $db->query("SELECT SQL_CALC_FOUND_ROWS * FROM {$pre}2shou_content WHERE uid='$uid' ORDER BY id DESC LIMIT $min,$rows");
$RS=$db->get_one("SELECT FOUND_ROWS()");
while($rs = $db->fetch_array($query)){
	$rs[picurl]=tempdir($rs[picurl]);
	$rs[posttime]=date("Y-m-d H:i",$rs[posttime]);
	$array[]=$rs;
}

$showpage=getpage("","","?m=$m&uid=$uid",$rows,$RS['FOUND_ROWS()']);
?>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<!--
<?php
print <<<EOT
-->
<style>
.ListDl{
	width:25%;
	height:160px;
	overflow:hidden;
	float:left;
}
.ListDl dt,.ListDl dd{
	width:160px;
	margin:auto;
}
.ListDl dt{
	border:#DDD solid 1px;
	padding:1px;
	margin-bottom:5px;
}
.ListDl dt a{
	display:block;
	width:160px;
	height:120px;
	text-align:center;
	overflow:hidden;
}
.showpage{
	clear:both;
	padding:5px 0 10px 0;
	text-align:center;
}
.showpage a{
	border:#DDD solid 1px;
	padding:3px 5px 2px 5px;
	color:#888;
}
</style>
<table width="100%" border="0" cellspacing="0" cellpadding="0"  class="{$mod_in}info">
  <tr>
    <td  class="head">
<span class='L'></span>
	<span class='T'>二手信息</span>
	<span class='R'></span>
	<span class='more'></span></td>
  </tr>
  <tr>
    <td class="content" style="padding-top:20px;">
<!--
EOT;
foreach($array AS $rs){
$rs[title]=get_word($rs[title],26);
print <<<EOT
-->
	  <dl class="ListDl">
		<dt><a href="$webdb[_www_url]/2shou/bencandy.php?fid=$rs[fid]&id=$rs[id]&city_id=$rs[city_id]" target="_blank"><img src="$rs[picurl]" onerror="this.src='$webdb[www_url]/images/default/nopic.jpg'" height="120" /></a></dt>
		<dd><a href="$webdb[_www_url]/2shou/bencandy.php?fid=$rs[fid]&id=$rs[id]&city_id=$rs[city_id]" target="_blank">$rs[title]</a></dd>
	  </dl>
<!--
EOT;
}
print <<<EOT
-->
	 <div class="showpage">$showpage</div>
	</td>
  </tr>
</table>
<!--
EOT;
?>
-->