<?php
require(dirname(__FILE__)."/global.php");
require_once(ROOT_PATH."inc/class.json.php");
//SEO
$titleDB['title'] = "{$city_DB[name][$city_id]} ".($webdb['SEO_title']?$webdb['SEO_title']:$webdb['Info_webname']);
$titleDB['keywords']	= "{$city_DB[name][$city_id]} ".($webdb['SEO_keywords']?$webdb['SEO_keywords']:$webdb['metakeywords']);
$titleDB['description']	= "{$city_DB[name][$city_id]} ".($webdb['SEO_description']?$webdb['SEO_description']:$webdb['description']);

$page || $page=1;
$rows=6;
$min=($page-1)*$rows;
if($show_type==1){
	$order_by="A.list";
}elseif($show_type==2){
	$order_by="A.hits";
}elseif($show_type==3){
	$order_by="A.levelstime";
}else{
	$order_by="A.id";
}



$SQL = build_module_sql();

$data = array();
$query = $db->query("SELECT B.*,A.*,C.title AS companyname FROM {$_pre}content A LEFT JOIN {$_pre}content_1 B ON A.id=B.id LEFT JOIN {$pre}hy_company C ON A.uid=C.uid WHERE A.yz='1' $SQL ORDER BY $order_by DESC LIMIT $min,$rows");
while($rs = $db->fetch_array($query)){
	$rss[image]=tempdir($rs[picurl]);
	if(WEB_LANG!='utf-8' && $job=="show"){
		$rss[title]=gbk2utf8($rs[title]);
		$rss[companyname]=gbk2utf8($rs[companyname]);
	}else{
		$rss[title]=$rs[title];
		$rss[companyname]=$rs[companyname];
	}
	$rss[posttime]=date("Y-m-d",$rs[posttime]);
	$rss[url]=get_info_url($rs[id],$rs[fid],$rs[city_id]);
	$rss[mart_price]=$rs[mart_price];
	$rss[price]=$rs[price];
	$rss[hits]=$rs[hits];		
	$rss[uid]=$rs[uid];
	$data[]=$rss;
}

if($job=="show"){	
	//echo json_encode( $data );
	$jsonObj = new Services_JSON();
	echo $jsonObj->encode($data);
	exit;
}

$template_file=getTpl("all");
require(ROOT_PATH."inc/head.php");
require($template_file);
require(ROOT_PATH."inc/foot.php");
?>