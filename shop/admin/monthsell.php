<?php
!function_exists('html') && exit('ERR');

ck_power('monthsell');



$year = $post['y']?$post['y']:date('Y');
$month = $post['m']?$post['m']:date('m');

if($post['s']==1){
	$state="已付款";
	$SQL=" AND ifpay=1 ";
}elseif($post['s']==2){
	$state="未付款";
	$SQL=" AND ifpay=0 ";
}else{
	$state="所有";
	$SQL=" ";
}


$outstr="";
$i=0;
$query = $db->query("SELECT SUM( totalmoney ) AS allmoney, cuid FROM  `{$_pre}join` WHERE FROM_UNIXTIME( posttime, '%Y%m' ) ='$year$month' $SQL GROUP BY cuid ORDER BY totalmoney DESC");
while($rs = $db->fetch_array($query))
{
	$ts = $db->get_one("SELECT A.*,B.config FROM {$pre}hy_company A LEFT JOIN {$pre}purse B ON A.uid=B.uid WHERE A.uid='$rs[cuid]'");
	if($ts){
		$rs+=$ts;
	}
	$array = unserialize($ts[config]);
	$purse="";	
	$array[alipay_id] && $purse.="支付宝帐号是:$array[alipay_id]<br>";
	$array[yeepay_id] && $purse.="易宝支付帐号是:$array[yeepay_id]<br>";
	$array[tenpay_id] && $purse.="财付通帐号是:$array[tenpay_id]<br>";
	$i++;
	$outstr.="<tr>
	<td align=\"center\">$i</td>
	<td align=\"center\">$year</td>
	<td align=\"center\">$month</td>
	<td align=\"center\">$rs[username]</td>
	<td align=\"center\">$rs[title]</td>
	<td align=\"center\">$rs[allmoney]</td>
	<td align=\"center\">$state</td>
	<td align=\"center\">$purse</td>
	</tr>";
	$listdb[]=$rs;
}

$_m[$month]=' selected ';
$_y[$year]=' selected ';
$_s[intval($post['s'])] =' selected ';

if($act=='down'){	//下载报表
	$outstr="<table width=\"500\" border=\"1\" align=\"center\" cellpadding=\"10\"><tr>
	<th bgcolor=\"#A5A0DE\">序号</th>
	<th bgcolor=\"#A5A0DE\">年份</th>
	<th bgcolor=\"#A5A0DE\">月份</th>
	<th bgcolor=\"#A5A0DE\">商家帐号</th>
	<th bgcolor=\"#A5A0DE\">商铺名称</th>
	<th bgcolor=\"#A5A0DE\">销售总额(元)</th>
	<th bgcolor=\"#A5A0DE\">交易状态</th>
	<th bgcolor=\"#A5A0DE\">商家收款帐号</th>
	</tr>$outstr</table>";
	ob_end_clean();
	header('Last-Modified: '.gmdate('D, d M Y H:i:s',time()).' GMT');
	header('Pragma: no-cache');
	header('Content-Encoding: none');
	header('Content-Disposition: attachment; filename='."{$year}年{$month}月份对帐单".'.xls');
	header('Content-type: text/csv');
	echo $outstr;
	exit;
}

get_admin_html('list');
?>