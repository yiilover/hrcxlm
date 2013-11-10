<?php
require(dirname(__FILE__)."/global.php");

$fidDB=$db->get_one("SELECT A.* FROM {$_pre}sort A WHERE A.fid='$fid'");

if(!$fidDB){
	showerr("FID有误!");
}
/**
*获取信息正文的内容
**/
$rsdb=$db->get_one("SELECT B.*,A.* FROM `{$_pre}content` A LEFT JOIN `{$_pre}content_$fidDB[mid]` B ON A.id=B.id WHERE A.id='$id'");

if(!$rsdb){
	showerr("内容不存在");
}
elseif($rsdb[fid]!=$fid){
	showerr("FID有误!!!");
}

$titleDB[title] = filtrate(strip_tags("$rsdb[title] - {$city_DB[name][$city_id]}$fidDB[name] - $webdb[Info_webname]"));
$rsdb[posttime] = date("Y-m-d",$rsdb[posttime]);
if( is_file(ROOT_PATH."$webdb[updir]/".substr($rsdb[picurl],0,-4)) ){
	$rsdb[picurl] = substr($rsdb[picurl],0,-4);
}

$pic=tempdir($rsdb[picurl]);

print<<<EOT

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>$titleDB[title]</TITLE>
<link rel="stylesheet" type="text/css" href="./images/print/style.css">
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">
</HEAD>
<BODY onload="window.print();">
<div class="PrintCont">
	<h3><span>$rsdb[title]</span></h3>
	<dl>
		<dt>
			<a href="$pic"><img src="$pic" height="210"></a>
		</dt>
		<dd>
			<div><span>市场价格：</span><strike>￥{$rsdb[mart_price]}</strike></div>
			<div><span>优 惠 价：</span>￥{$rsdb[price]}</div>
			<div><span>截止日期：</span>$rsdb[end_time]</div>
			<div><span>发布日期：</span>$rsdb[posttime]</div>
			<ul>		
				<li>使用前请出示此券，黑白打印即可。</li> 
				<li>除特殊注明外，本优惠不能与其他优惠同时享用。</li>
				<li>优惠最终解释权归商家所有，如有疑问请与商家联系 </li> 
			</ul>
		</dd>		
	</dl>	
</div>
</BODY>
</HTML>
EOT;
?>