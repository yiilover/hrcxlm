<?php
!function_exists('html') && exit('ERR');

if($action=='mod'){
	$sqlmin=intval($start_num)-1; $sqlmin<0 && $sqlmin=0;

	//require(dirname(__FILE__)."/../data/all_fid.php");

	//ѡ����ʾ��������,����ѡ��Table,����һ������ʾЧ��,ѡ��tableָ����һ��TABLE,ѡ��divָ���׶���Ĵ���
	if($colspan>1){
		$DivTpl=0;
	}else{
		$DivTpl=1;
	}	
	
	$postdb[tplpart_1code]=str_replace($url1,$url2,StripSlashes($tplpart_1));
	$postdb[tplpart_2code]=str_replace($url1,$url2,StripSlashes($tplpart_2));

	//ʹ�����߱༭����,ȥ���������ַ
	$weburl=preg_replace("/(.*)\/([^\/]+)/is","\\1/",$WEBURL);
	$postdb[tplpart_1code]=str_replace($weburl,"",$postdb[tplpart_1code]);
	$postdb[tplpart_2code]=str_replace($weburl,"",$postdb[tplpart_2code]);

	$postdb[tplpart_1code]=En_TruePath($postdb[tplpart_1code]);
	$postdb[tplpart_2code]=En_TruePath($postdb[tplpart_2code]);


	if($postdb['allcity']){	//����ȫ������
		$SQL=" WHERE 1 ";
	}else{
		$SQL=" WHERE A.city_id='\$GLOBALS[city_id]' ";
	}

	/*�ж��Ƿ�����ʾͼƬ����*/
	if($stype=="rollpic"||$stype=="r"||strstr($postdb[tplpart_1code],'$picurl')){
		$SQL.=" AND A.ispic=1 ";
	}

	if($rowspan<1){
		$rowspan=1;
	}
	if($colspan<1){
		$colspan=1;
	}
	$rows=$rowspan*$colspan;

	if(is_numeric($yz)){
		$SQL.=" AND A.yz=$yz ";
	}
	if(is_numeric($levels)){
		$SQL.=" AND A.levels=$levels ";
	}
	if($moduleid){
		$SQL.=" AND A.mid='$moduleid' ";
	}

	$fiddb_string="";
	if($fid){
		$SQL.=" AND A.fid='$fid' ";
	}
	
	/*
	$i=$sql_DB='';
	$sql_DB[]="(SELECT * FROM {$_pre}content $SQL)";
	foreach( $Fid_db[tableid] AS $key=>$value){
		if($fiddb&&!in_array($key,$fiddb)){
			continue;
		}
		$i++;
		$sql_DB[$value]="(SELECT * FROM {$_pre}content$value $SQL)";
	}
	if($i&&$i==count($fiddb)){
		unset($sql_DB[0]);
	}	
	$SQL=implode(" UNION ALL ",$sql_DB)." ORDER BY $order $asc LIMIT $sqlmin,$rows ";
	*/
	
	$_sql='';
	if($sort_id!='' && $module_Id=$Fid_db[mid][$fid]){
		$_sql=" LEFT JOIN {$_pre}content_$module_Id B ON A.id=B.id ";
		$SQL.=" AND B.sortid='$sort_id' ";
	}
	
	$SQL = "SELECT A.* FROM {$_pre}content A $_sql $SQL ORDER BY A.$order $asc LIMIT $sqlmin,$rows ";

	if(count($sql_DB)>1){
		extract($db->get_one("SELECT COUNT(*) AS NUM FROM {$_pre}db"));
		if($NUM>10000){
			showerr("����ָ����Ϣ��ʱ,��ֻ��ѡ��ͬ��ֱ����Ŀ,��ͬ��ֱ����Ŀ������ͬʱ����,������Ӱ���ٶ�");
		}
	}

	if($yz=='ad'){
		if($cityId){
			$SQL=" AND A.cityid='$cityId' ";
		}else{
			$SQL=" ";
		}
		$SQL="SELECT C.*,D.* FROM {$_pre}buyad A LEFT JOIN {$_pre}db D ON A.id=D.id LEFT JOIN {$_pre}content C  ON D.id=C.id WHERE A.sortid=-1 AND A.endtime>\$GLOBALS[timestamp] $SQL LIMIT $sqlmin,$rows";
	}

	if(strstr($postdb[tplpart_1code],'$picurl')&&strstr($postdb[tplpart_1code],'$content')){
		$stype="cp";
	}elseif(strstr($postdb[tplpart_1code],'$content')){
		$stype="c";
	}elseif(strstr($postdb[tplpart_1code],'$picurl')){
		$stype="p";
	}
	
	$postdb[ctype]=$cms_type;
	$postdb[SYS]='wn';	//���ϰ�,��������ϵͳ����URL
	$postdb[wninfo]=str_replace("$pre","",$_pre);
	$postdb[typefid]=$_typefid;
	$postdb[sort_id]=$sort_id;

	$postdb[cityId]=$cityId;

	$postdb[width]=$width;
	$postdb[height]=$height;
	$postdb[rolltype]=$rolltype;
	$postdb[rolltime]=$rolltime;
	$postdb[roll_height]=$roll_height;

	$postdb[content_num]=$content_num;
	
	$postdb[newhour]=$newhour;
	$postdb[hothits]=$hothits;

	$postdb[tplpath]=$tplpath;
	$postdb[DivTpl]=$DivTpl;
	$postdb[fid]=$fid;
	$postdb[moduleid]=$moduleid;
	$postdb[stype]=$stype;
	$postdb[yz]=$yz;
	$postdb[timeformat]=$timeformat;
	$postdb[order]=$order;
	$postdb[asc]=$asc;
	$postdb[levels]=$levels;
	$postdb[rowspan]=$rowspan;
	$postdb[sql]=$SQL;
	$postdb[colspan]=$colspan;
	$postdb[titlenum]=$titlenum;
	$postdb[titleflood]=$titleflood; $postdb[start_num]=$start_num;
	$postdb[c_rolltype]=$c_rolltype;
	
	$code=addslashes(serialize($postdb));
	$div_db[div_w]=$div_w;
	$div_db[div_h]=$div_h;
	$div_db[div_bgcolor]=$div_bgcolor;
	$div=addslashes(serialize($div_db));
	$typesystem=1;
	
	//�������±�ǩ��
	do_post();

}else{
	$modulename=$ModuleDB[str_replace("Info_","",$inc)][name];
	$rsdb=get_label();
	$div=unserialize($rsdb[divcode]);
	@extract($div);
	$codedb=unserialize($rsdb[code]);
	@extract($codedb);
	if(!isset($yz)){
		$yz="all";
	}
	if(!isset($is_com)){
		$is_com="all";
	}
	if(!isset($order)){
		$order="posttime";
	}
	$titleflood=(int)$titleflood;
	$hide=(int)$rsdb[hide];
	if($rsdb[js_time]){
		$js_ck='checked';
	}

	/*Ĭ��ֵ*/
	$yz || $yz='all';
	$asc || $asc='DESC';
	$titleflood!=1		&& $titleflood=0;
	$timeformat			|| $timeformat="Y-m-d H:i:s";
	$rowspan			|| $rowspan=5;
	$colspan			|| $colspan=1;
	$titlenum			|| $titlenum=20;
	$div_w				|| $div_w=50;
	$div_h				|| $div_h=30;
	$hide!=1			&& $hide=0;
	$DivTpl!=1			&& $DivTpl=0;
	$stype				|| $stype=4;
	$content_num		|| $content_num=80;
	$width				|| $width=250;
	$height				|| $height=187;
	$roll_height		|| $roll_height=50;
	$newhour	|| $newhour=24;
	$hothits	|| $hothits=30;

	$rolltime			|| $rolltime=3;

	$_rolltype[$rolltype]=' selected ';
	$c_rolltype || $c_rolltype=0;
	$c_rolltypedb[$c_rolltype]=" checked ";



	$div_width && $div_w=$div_width;
	$div_height && $div_h=$div_height;

	$yzdb[$yz]="checked";
	$ascdb[$asc]="checked";
	$orderdb[$order]=" selected ";
	$levelsdb[$levels]=" selected ";
	$titleflooddb["$titleflood"]="checked"; 
	$start_num>0 || $start_num=1;
	$hidedb[$hide]="checked";
	$divtpldb[$DivTpl]="checked";
	$stypedb[$stype]=" checked ";

	$module_Id=$Fid_db[mid][$cms_type];
	$module_field = $module_DB[$module_Id][field][sortid];
	
	if($module_field[form_type]=='radio'||$module_field[form_type]=='select'){
		$detail = explode("\r\n","|ȫ��\r\n".$module_field[form_set]);
		foreach($detail AS $key=>$value){
			if($value=='')continue;
			list($k,$v) = explode('|',$value);
			if($v=='')$v=$k;
			$ckk = $sort_id==$k?' checked ':'';
			$module_value.="<input type='radio' name='sort_id' value='$k' $ckk>$v ";			 
		}
	}

	$tplpart_1code=str_replace("&nbsp;","&amp;nbsp;",En_TruePath($tplpart_1code,0));
	$tplpart_2code=str_replace("&nbsp;","&amp;nbsp;",En_TruePath($tplpart_2code,0));

	$getLabelTpl=getLabelTpl('info',array("common_title","common_pic","common_content","common_fname"));


	require("head.php");
	require(dirname(__FILE__)."/../template/label/set.htm");
	require("foot.php");

}


/*������Ŀ��CLASS��ֵ*/
function update_class($fid,$Class){
	global $db,$_pre,$IS_BIZ;
	//$IS_BIZ || die();
	$Class++;
	$db->query("UPDATE {$_pre}sort SET class=$Class WHERE fid='$fid'");
	$query=$db->query("SELECT fid FROM {$_pre}sort WHERE fup='$fid'");
	while( $rs=$db->fetch_array($query) ){
		update_class($rs[fid],$Class);
	}
}

?>