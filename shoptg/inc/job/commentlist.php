<?php
if(!function_exists('html')){
	die('F');
}
header('Content-Type: text/html; charset='.WEB_LANG);

$comments=$db->get_one("SELECT SUM( icon ) AS TOTAL, count( id ) AS nums FROM `{$_pre}comments` WHERE id=$id AND yz=1 GROUP BY id");
$comments['nums']=$comments['nums']?$comments['nums']:0;
$comments['TOTAL']=$comments['TOTAL']?$comments['TOTAL']:0;
if($show=="nums"){	
	echo "(".$comments['nums'].")"; exit;
}else if($show=="xing"){
	$pingzuns=$comments['TOTAL']/$comments['nums'];
	$pingzuns=round($pingzuns);
	echo "<a title=\"综合评定".$pingzuns.".0分\" class=\"fen".$pingzuns."\"><br/></a>";
	exit;
}

$rows=5;
if($page<1){
	$page=1;
}
$min=($page-1)*$rows;

$listhtml="";
$query = $db->query("SELECT SQL_CALC_FOUND_ROWS * FROM {$_pre}comments WHERE id=$id AND yz=1 ORDER BY cid DESC LIMIT $min,$rows");
$RS=$db->get_one("SELECT FOUND_ROWS()");
$totalNum=$RS['FOUND_ROWS()'];
$showpage=getpage("","","?id=$id",$rows,$totalNum);
$showpage=preg_replace("/\?id=([\d]+)&page=([\d]+)/is","javascript:getcomment('job.php?job=commentlist&id=\\1&page=\\2')",$showpage);
while($rs = $db->fetch_array($query)){
	$rs[posttime]=date("Y-m-d H:i:s",$rs[posttime]);
	$listhtml.="<dl class=\"listC\">
                        <dt><a href=\"$webdb[www_url]/member/homepage.php?uid=$rs[uid]\" target=\"_blank\">$rs[username]</a> <a class=\"fen fen".$rs[icon]."\" title=\"用户评分".$rs[icon].".0分\"><br/></a><span>".$rs[icon].".0</span><em>".$rs[posttime]."</em></dt>
                        <dd>".$rs[content]."</dd>
                     </dl>";	
}
if($listhtml){
	$showhtml=$listhtml;
	if($showpage){
		$showhtml.="<div class=commentpage>$showpage</div>";
	}
}else{
	$showhtml="<div class=nocomments>此团购暂时还没有评论</div>";
}
echo $showhtml;

?>