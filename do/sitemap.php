<?php
require(dirname(__FILE__)."/"."global.php");

$GuideFid[$fid] = " &gt;&gt; <a href=\"$webdb[_www_url]/do/sitemap.php\">ÍøÕ¾µØÍ¼</a>";

unset($Fid_db);
include(ROOT_PATH."news/data/all_fid.php");
$news_fid_db = $Fid_db;

unset($Fid_db);
include(ROOT_PATH."f/data/all_fid.php");
$fenlie_fid_db = $Fid_db;

unset($Fid_db);
include(ROOT_PATH."shop/data/all_fid.php");
$shop_fid_db = $Fid_db;

unset($Fid_db);
$hy_fid_db = include(ROOT_PATH."hy/data/all_fid.php");

unset($Fid_db);
include(ROOT_PATH."tg/data/all_fid.php");
$tg_fid_db = $Fid_db;

unset($Fid_db);
include(ROOT_PATH."coupon/data/all_fid.php");
$coupon_fid_db = $Fid_db;

unset($Fid_db);
include(ROOT_PATH."hr/data/all_fid.php");
$hr_fid_db = $Fid_db;

unset($Fid_db);
include(ROOT_PATH."gift/data/all_fid.php");
$gift_fid_db = $Fid_db;

unset($Fid_db);
include(ROOT_PATH."shoptg/data/all_fid.php");
$shoptg_fid_db = $Fid_db;

unset($Fid_db);
include(ROOT_PATH."shoptg/data/all_fid.php");
$shoptg_fid_db = $Fid_db;

unset($Fid_db);
include(ROOT_PATH."house/data/all_fid.php");
$house_fid_db = $Fid_db;

unset($Fid_db);
include(ROOT_PATH."dianping/data/all_fid.php");
$dianping_fid_db = $Fid_db;

unset($Fid_db);
include(ROOT_PATH."2shou/data/all_fid.php");
$shou_fid_db = $Fid_db;

require(ROOT_PATH."inc/head.php");
require(html("sitemap"));
require(ROOT_PATH."inc/foot.php");


function List_Moude_Sorts($fid_db,$dirs){
	global $webdb;
	$show = "";
	$j=0;
	foreach($fid_db[0] AS $key=>$value){
		$j++;
		$have_dotted = 1==$j ? "" : "class='h_dotted'";
		$show .= "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" $have_dotted>\n";
		$show .= "  <tr>\n";
		$show .= "    <td class=\"bigsort\"><a href=\"$webdb[_www_url]/$dirs/list.php?fid=$key\" target=\"_blank\">{$fid_db[name][$key]}</a></td>\n";
		$show .= "    <td class=\"minsort\">\n";
		$i=0;
		foreach($fid_db[$key] AS $keys=>$rs){
			$i++;
			$spac_word = 1==$i ? "" : "|";
			$show .= "		$spac_word <a href=\"$webdb[_www_url]/$dirs/list.php?fid=$keys\" target=\"_blank\">{$fid_db[name][$keys]}</a>\n";
		}
		$show .= "    </td>\n";
		$show .= "  </tr>\n";
		$show .= "</table>\n";
	}
	return $show;
}
?>