<?php
if(!function_exists('html')){
	die('F');
}
header('Content-Type: text/html; charset='.WEB_LANG);
$rows=10;
if($page<1){
	$page=1;
}
$min=($page-1)*$rows;

$listhtml="";
$query = $db->query("SELECT SQL_CALC_FOUND_ROWS * FROM {$_pre}join WHERE cid=$cid ORDER BY id DESC LIMIT $min,$rows");
$RS=$db->get_one("SELECT FOUND_ROWS()");
$totalNum=$RS['FOUND_ROWS()'];
$showpage=getpage("","","?cid=$cid",$rows,$totalNum);
$showpage=preg_replace("/\?cid=([\d]+)&page=([\d]+)/is","javascript:getjoins('job.php?job=joinlist&cid=\\1&page=\\2')",$showpage);
while($rs = $db->fetch_array($query)){
	$rs[posttime]=date("Y-m-d H:i:s",$rs[posttime]);
	$listhtml.="<tr>
                    <td><a href=\"$webdb[www_url]/member/homepage.php?uid=$rs[uid]\" target=\"_blank\">$rs[username]</a></td>
                    <td><span>$rs[totalmoney]</span></td>
                    <td><em>$rs[shopnum]</em></td>
                    <td>$rs[posttime]</td>
                  </tr>\n";	
}
if($listhtml){
	$showhtml="<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"listjoin\">
                  <tr>
                    <th>���</th>
                    <th class=\"ck\">������</th>
                    <th>����</th>
                    <th class=\"ck\">�µ�ʱ��</th>
                  </tr>";
	$showhtml.=$listhtml;
	$showhtml.="</table>\n";
	if($showpage){
		$showhtml.="<div class=joinpage>$showpage</div>";
	}
}else{
	$showhtml="<div class=nojoins>���Ź���ʱ��û�����</div>";
}
echo $showhtml;

?>