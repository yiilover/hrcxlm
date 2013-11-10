<?php

require(dirname(__FILE__)."/global.php");

$type = filtrate($type);
$keyword = filtrate($keyword);

if($action=="search"){
	if(!$webdb[Info_allowGuesSearch]&&!$lfjid){
		//showerr("请先登录");
	}
	$keyword=trim($keyword);
	$keyword=str_replace("%",'\%',$keyword);
	$keyword=str_replace("_",'\_',$keyword);
	if(!$keyword){
		showerr('关键字不能为空!');
	}
	$rows=10;
	if(!$page){
		$page=1;
	}
	$min=($page-1)*$rows;
	$type = ($type=='username') ? $type : "title";
	if($fid){
		$SQL="SELECT SQL_CALC_FOUND_ROWS DISTINCT A.* FROM {$_pre}company A LEFT JOIN {$_pre}company_fid B ON A.uid=B.uid LEFT JOIN {$_pre}sort S ON B.fid=S.fid WHERE S.fup='$fid' AND A.city_id='$city_id' AND A.yz=1 AND A.$type LIKE '%$keyword%' ORDER BY A.rid DESC LIMIT $min,$rows";
	}else{
		$SQL="SELECT SQL_CALC_FOUND_ROWS title,uid,uid,username,posttime,hits,content FROM {$_pre}company WHERE $type LIKE '%$keyword%' AND city_id='$city_id' ORDER BY posttime DESC LIMIT $min,$rows ";
	}	
	$query = $db->query("$SQL");
	$RS=$db->get_one("SELECT FOUND_ROWS()");
	$shownumbers = $RS['FOUND_ROWS()'];
	$showpage=getpage("","","s.php?action=$action&keyword=".urlencode($keyword)."&type=$type",$rows,$RS['FOUND_ROWS()']);
	while($rs = $db->fetch_array($query)){
		$rs[posttime]=date("Y-m-d H:i",$rs[posttime]);
		$rs[content]=preg_replace('/<([^<]*)>/is',"",$rs[content]);	//把HTML代码过滤掉
		$rs[content]=preg_replace('/ |　|&nbsp;/is',"",$rs[content]);	//把多余的空格去除掉
		$rs[content]=get_word($rs[content],150);
		
		//$field_db && $Module_db->showfield($field_db,$rs,'list');
		$listdb[]=$rs;
	}
	if(!$listdb){
		//showerr("很抱歉，没有找到你要查询的内容");
	}
}
$speed_endtime=explode(' ',microtime());
$speed_totaltime.="（用时<span>".number_format((($speed_endtime[0]+$speed_endtime[1]-$speed_headtime)/1),6)."</span>秒）";

//获取标签内容
$template_file=getTpl("s");
fetch_label_value(array('pagetype'=>'5','file'=>$template_file,'module'=>$webdb['module_id']));

require($template_file);
?>