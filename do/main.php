<?php
if(file_exists(dirname(__FILE__)."/../".'install.php')){
	header("location:install.php");exit;
}

require(dirname(__FILE__)."/global.php");

$CURMODE="index";
$index_body="index_body";
if($city_DB[domain]&&!$webdb[cookieDomain]){
	showerr('你启用了城市二级域名,请进后台设置一下COOKIE有效域名,否则用户登录前台会不正常!');
}

mob_goto_url("$webdb[www_url]/3g/index.php?choose_cityID=$city_id");	//手机访问自动跳转

//商铺二级域名如果绑定到根目录的情况做检查处理
if(count($city_DB[name])>1 && $isCityDomain==false && $tempDomain!=$webdb[_www_url]){
	$hyDomain=preg_replace("/http:\/\/([^\.]+)\.(.*)/is","\\1",$WEBURL);
	$rsdb=$db->get_one("SELECT uid FROM {$pre}hy_company WHERE host='$hyDomain'");
	if($rsdb[uid]){
		echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=hy.php?uid=$rsdb[uid]'>";
		exit;
	}	
}

//如果有二级域名的话,就跳转到二级域名
if($jobs!='show'&&$_domain=$city_DB[domain][$city_id]){
	if(!strstr($WEBURL,$_domain)){
		if(strstr($WEBURL,$webdb[www_url])){
			$url=str_replace($webdb[www_url],$_domain,$WEBURL);
		}else{
			$url=preg_replace("/^http:\/\/([^\/]+)(\/.*|)$/is","$_domain\\2",$WEBURL);
		}
		header("location:$url");exit;
	}
}

$Cache_FileName=ROOT_PATH."cache/list_cache/index.php";
if(count($city_DB[name])<2&&!$jobs&&!$MakeIndex&&$ch<2&&$webdb[index_cache_time]&&(time()-filemtime($Cache_FileName))<($webdb[index_cache_time]*60)){
	echo read_file($Cache_FileName);
	exit;
}

require(ROOT_PATH."data/friendlink.php");


//SEO
$titleDB['title'] = $city_DB['metaT'][$city_id]?seo_eval($city_DB['metaT'][$city_id]):$titleDB['title'];
$titleDB['keywords']	= $city_DB['metaK'][$city_id]?seo_eval($city_DB['metaK'][$city_id]):$titleDB['keywords'];
$titleDB['description'] = $city_DB['metaD'][$city_id]?seo_eval($city_DB['metaD'][$city_id]):$titleDB['description'];



$head_tpl = $foot_tpl = $index_tpl = '';

//城市模板
/*
if($city_DB['tpl'][$city_id]){
	list($_head_tpl,$_foot_tpl,$_index_tpl)=explode("|",$city_DB['tpl'][$city_id]);
	is_file(ROOT_PATH.$_head_tpl) && $head_tpl = ROOT_PATH.$_head_tpl;
	is_file(ROOT_PATH.$_foot_tpl) && $foot_tpl = ROOT_PATH.$_foot_tpl;
	is_file(ROOT_PATH.$_index_tpl) && $index_tpl = ROOT_PATH.$_index_tpl;
}
*/
//获取标签内容
$template_file=html('main',$index_tpl);
fetch_label_value(array('pagetype'=>'8','file'=>$template_file,'module'=>'0'));

// echo ROOT_PATH."inc/head.php";die;

require(ROOT_PATH."inc/head.php");
require($template_file);
require(ROOT_PATH."inc/foot.php");


if(count($city_DB[name])<2&&!$jobs&&!$MakeIndex&&$ch<2&&$webdb[index_cache_time]&&(time()-filemtime($Cache_FileName))>($webdb[index_cache_time]*60)){
	if(!is_dir(dirname($Cache_FileName))){
		makepath(dirname($Cache_FileName));
	}
	write_file($Cache_FileName,$content);
}elseif($jobs=='show'){
	@unlink($Cache_FileName);
}

/*首页生静态*/
if(count($city_DB[name])<2 && ($jobs!='show'&&$webdb[MakeIndexHtmlTime]>0) || $MakeIndex )
{
	if( $MakeIndex || (time()-@filemtime('index.htm')-$webdb[MakeIndexHtmlTime]*60)>0 ){	
		write_file(ROOT_PATH.'index.htm',$content);
		if($MakeIndex){		
			ob_end_clean();
			echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$webdb[www_url]/index.htm'>";
			exit;
		}
	}
}


?>