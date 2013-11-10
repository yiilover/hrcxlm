<?php
!function_exists('html') && exit('ERR');

if($job=="list" && ck_power('keyword'))
{
	if(!$page){
		$page=1;
	}
	$rows=50;
	$min=($page-1)*$rows;
	$showpage=getpage("{$_pre}keyword","","$admin_path&job=$job",$rows);
	$query = $db->query("SELECT * FROM {$_pre}keyword ORDER BY num DESC LIMIT $min,$rows");
	while($rs = $db->fetch_array($query)){
		if($rs[ifhide]){
			$rs[ifshow]='不显示';
		}else{
			$rs[ifshow]='显示';
		}
		if($rs[url]){
			$rs[ifurl]='是';
		}else{
			$rs[ifurl]='否';
		}
		$listdb[]=$rs;
	}
	$ifShowKeyword[intval($webdb[ifShowKeyword])]=' checked ';

	get_admin_html('list',true);
}
elseif($job=="search" && ck_power('keyword')){

	if(!$page){
		$page=1;
	}
	$rows=50;
	$min=($page-1)*$rows;	
	$showpage=getpage("{$_pre}keyword","WHERE BINARY `keywords` LIKE '%$keyword%' ","$admin_path&job=$job",$rows);
	$query = $db->query("SELECT * FROM {$_pre}keyword WHERE BINARY keywords LIKE '%$keyword%' ORDER BY num DESC LIMIT $min,$rows");
	while($rs = $db->fetch_array($query)){
		if($rs[ifhide]){
			$rs[ifshow]='不显示';
		}else{
			$rs[ifshow]='显示';
		}
		if($rs[url]){
			$rs[ifurl]='是';
		}else{
			$rs[ifurl]='否';
		}
		$listdb[]=$rs;
	}
	$ifShowKeyword[intval($webdb[ifShowKeyword])]=' checked ';
	get_admin_html('list');
}
elseif($action=="set" && ck_power('keyword'))
{
	write_config_cache($webdbs);
	jump("修改成功",$FROMURL);
}
elseif($action=="del" && ck_power('keyword'))
{
	foreach( $iddb AS $key=>$value){
		$db->query("DELETE FROM {$_pre}keyword WHERE id='$value'");
		$db->query("DELETE FROM {$_pre}keywordid WHERE id='$value'");
	}
	make_keyword_cache();
	jump("删除成功","$admin_path&job=list",1);
}
elseif($job=="add" && ck_power('keyword'))
{
	$rsdb['list']=0;

	get_admin_html('edit');
}
elseif($action=="add" && ck_power('keyword'))
{
	if($url&&!strstr($url,'://')){
		$url="http://$url";
	}
	$db->query("INSERT INTO `{$_pre}keyword` (`keywords` , `list`,`url`,`ifhide` ) VALUES ( '$keywords', '$list','$url','$ifhide')");
	make_keyword_cache();
	jump("添加成功","$admin_path&job=list",1);
}
elseif($job=="edit" && ck_power('keyword'))
{
	$rsdb=$db->get_one("SELECT * FROM {$_pre}keyword WHERE id='$id'");
	$ifhide[intval($rsdb[ifhide])]=' checked ';

	get_admin_html('edit');
}
elseif($action=="edit" && ck_power('keyword'))
{
	if($url&&!strstr($url,'://')){
		$url="http://$url";
	}
	$db->query("UPDATE `{$_pre}keyword` SET `keywords`='$keywords',`num`='$num',`url`='$url',`ifhide`='$ifhide' WHERE id='$id'");
	make_keyword_cache();
	jump("修改成功","$FROMURL",1);
}
elseif($job=="get" && ck_power('keyword'))
{
	$fid=intval($fid);

	$sortdb=array();
	list_2allsort($fid,"sort");

	get_admin_html('sort',false);
}
elseif($action=="getword" && ck_power('keyword'))
{
	//require_once(ROOT_PATH."inc/splitword.php");
	if(!$fiddb&&!$iii&&$page<2){
		showerr("请选择一个栏目");
	}
	if($maketype=="all")
	{
		$beginTime=$endTime=$beginId=$endId='';
	}
	 
	$SQL=" ";

	if($beginTime){
		$_beginTime=preg_replace("/([\d]+)-([\d]+)-([\d]+) ([\d]+):([\d]+):([\d]+)/eis","mk_time('\\4','\\5', '\\6', '\\2', '\\3', '\\1')",$beginTime);
		$SQL.=" AND posttime>$_beginTime";
	}

	if($endTime){
		$_endTime=preg_replace("/([\d]+)-([\d]+)-([\d]+) ([\d]+):([\d]+):([\d]+)/eis","mk_time('\\4','\\5', '\\6', '\\2', '\\3', '\\1')",$endTime);
		$SQL.=" AND posttime<$_endTime";
	}

	if(is_numeric($beginId)){
		$SQL.=" AND aid>$beginId ";
	}
	if(is_numeric($endId)){
		$SQL.=" AND aid<$endId ";
	}
	$iii=intval($iii);
	if($iii==0&&$page<2)
	{
		$allfid=implode(",",$fiddb);
		//write_file("../cache/makeShow0.php",$allfid);
	}
	else
	{
		//$allfid=read_file("../cache/makeShow0.php");
		$fiddb=explode(",",$allfid);
	}
	if(!$page)
	{
		$page=1;
	}
	$rows=500;
	$min=($page-1)*$rows;
	if($fid=$fiddb[$iii])
	{
		$ck=$ids='';
		$erp=$Fid_db[iftable][$fid];
		$query = $db->query("SELECT title,keywords,id,id AS aid,uid FROM {$_pre}content WHERE fid=$fid $SQL LIMIT $min,$rows");
		while($rs = $db->fetch_array($query))
		{
			if($if_replace){
				$rs[keywords]='';
				$db->query("DELETE FROM {$_pre}keywordid WHERE aid='$rs[aid]'");
				$query2 = $db->query("SELECT * FROM {$_pre}keywordid WHERE aid='$rs[aid]'");
				while($rs2 = $db->fetch_array($query2)){					
					$db->query("UPDATE {$_pre}keyword SET num=num-1 WHERE id='$rs2[id]'");
					$_r=$db->get_one("SELECT * FROM {$_pre}keyword WHERE id='$rs2[id]'");
					if($_r[num]<1){
						$db->query("DELETE FROM {$_pre}keyword WHERE id='$rs2[id]'");
					}
				}
			}
			$ck++;
			if(!$rs[keywords])
			{
				/*
				$keywords=splitword($rs[title]);
				$detail=explode(" ",$keywords);
				foreach( $detail AS $key=>$value){
					if(strlen($value)<4){
						unset($detail[$key]);
					}
				}
				$keywords=implode(" ",$detail);
				$keywords=addslashes($keywords);
				*/
				$keywords=keyword_ck('',$rs[title]);
				$keywords=addslashes($keywords);
				$db->query("UPDATE {$_pre}content SET keywords='$keywords' WHERE id='$rs[id]'");
				$num++;
				keyword_add($rs[id],$keywords,$rs[uid]);
			}
		}

		if($ck)
		{
			$page++;
		}
		else
		{
			$iii++;
			$page=0;
		}
		echo "请稍候,正在处理当中...<br>&page=$page&iii=$iii<META HTTP-EQUIV=REFRESH CONTENT='0;URL=$admin_path&action=$action&maketype=$maketype&page=$page&iii=$iii&allfid=$allfid&num=$num&beginTime=$beginTime&endTime=$endTime&beginId=$beginId&endId=$endId&if_replace=$if_replace'>";
		exit;
	}
	jump("提取完毕,共提取了{$num}篇文章","$admin_path&job=list",10);
}



/*栏目列表*/
function list_2allsort($fid,$table='sort'){
	global $db,$_pre,$sortdb,$webdb;
	$query=$db->query("SELECT * FROM {$_pre}$table WHERE fup='$fid' ORDER BY list DESC");
	while( $rs=$db->fetch_array($query) ){
		$icon="";
		for($i=1;$i<$rs['class'];$i++){
			$icon.="&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		if($icon){
			$icon=substr($icon,0,-24);
			$icon.="--";
		}
		if($rs[list_html]){
			$rs[filename]=$rs[list_html];
		}else{
			$rs[filename]=$webdb[list_filename];
		}
		$rs[filename]=preg_replace("/(.*)\/([^\/]+)/is","\\1/",$rs[filename]);
		$fid=$rs[fid];
		eval("\$rs[filename]=\"$rs[filename]\";");
		$rs[config]=unserialize($rs[config]);
		$rs[icon]=$icon;
		$sortdb[]=$rs;

		list_2allsort($rs[fid],$table);
	}
}

function make_keyword_cache(){
	global $db,$_pre;
	$show="<?php \r\n";
	$query=$db->query("SELECT * FROM {$_pre}keyword WHERE ifhide=0");
	while( $rs=$db->fetch_array($query) )
	{
		$rs[keywords]=addslashes($rs[keywords]);
		$rs[url]=addslashes($rs[url]);
		$show.="\$Key_word['{$rs[keywords]}']='{$rs[url]}';\r\n";
	}
	write_file(Mpath."data/keyword.php","$show ?>");
}

?>