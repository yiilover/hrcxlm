<?php
require("global.php");
@include(Mpath."function.ad.php");

if(!$lfjid){
	showerr("�㻹û��¼");
}

$linkdb=array(
			"���λ�б�"=>"?job=list",
			"�ҹ���Ĺ��"=>"?job=mylist"
			);

$array_adtype=array(
					"word"=>"���ֹ��",
					"pic"=>"ͼƬ���",
					"swf"=>"FLASH���",
					"code"=>"������",
					"duilian"=>"�������",
					"updown"=>"�����������",
					"rollpic"=>"�õ�Ƭ���",
					);

$lfjdb[money]=intval(get_money($lfjdb[uid]));

if($job=='list')
{
	$query = $db->query("SELECT * FROM {$pre}ad_norm_place WHERE ifsale=1 ORDER BY list DESC");
	while($rs = $db->fetch_array($query))
	{
		if($rs[autoyz]){
			$rs[_ifyz]='�������';
		}else{
			$rs[_ifyz]='��Ҫ���';
		}

		if($_r=$db->get_one("SELECT * FROM {$pre}ad_norm_user WHERE u_endtime>'$timestamp' AND id='$rs[id]' AND city_id='$city_id'"))
		{
			$_r[u_endtime]=date("Y-m-d H:i",$_r[u_endtime]);
			$rs[state]="{$_r[u_endtime]}����";
			$rs[alert]="alert('ֱ��{$_r[u_endtime]}�Ժ�ſɹ���');return false;";
			$rs[color]="#ccc;";
		}
		elseif($_r=$db->get_one("SELECT * FROM {$pre}ad_norm_user WHERE u_yz=0 AND id='$rs[id]' AND city_id='$city_id'"))
		{
			$_r[u_endtime]=date("Y-m-d H:i",$_r[u_endtime]);
			$rs[state]="�����˹���,�ȴ���˵���";
			$rs[alert]="alert('�����˹���,�����ڲ��ܹ���');return false;";
			$rs[color]="#ccc;";
		}
		elseif($rs[isclose]){
			$rs[state]="���λ�ѹر�";
		}
		else
		{
			$rs[state]="���ڿɹ���";
			$rs[color]="red;";
		}
		$listdb[]=$rs;
	}
	
	require(ROOT_PATH."member/head.php");
	require(dirname(__FILE__)."/template/norm/list.htm");
	require(ROOT_PATH."member/foot.php");
}

elseif($job=='buy')
{
	
	$rsdb=$db->get_one("SELECT * FROM {$pre}ad_norm_place WHERE id='$id'");
	
	if($rsdb[type]!='rollpic'){
		$_r=$db->get_one("SELECT * FROM {$pre}ad_norm_user WHERE u_endtime>'$timestamp' AND id='$id' AND city_id='$city_id'");
		if($_r){
			$_r[u_endtime]=date("Y-m-d H:i",$_r[u_endtime]);
			showerr("ֱ��{$_r[u_endtime]}�ſɹ���");
		}	
	}
	


	
	if(!$rsdb){
		showerr("���λ������!");
	}elseif(!$rsdb[ifsale]){
		showerr("��ǰ���λ��ֹ����!");
	}elseif($rsdb[isclose]){
		showerr("��ǰ���λ�ѹر�!");
	}
	if($rsdb[autoyz]){
		$rsdb[_ifyz]='�������Ա���,ֱ����ʾ';
	}else{
		$rsdb[_ifyz]='����������ʾ,��Ҫ�ȴ�����Ա���';
	}
	
	$code_array = unserialize($rsdb[adcode]);
	$code_u_array = unserialize($_r[adcode]);
	require(ROOT_PATH."member/head.php");
	require(dirname(__FILE__)."/template/norm/buy.htm");
	require(ROOT_PATH."member/foot.php");
}

elseif($action=="buy")
{
	if($atc_day<1){	
		showerr("����Ĺ�治��С��һ��");
	}
	$atc_day = intval($atc_day);
	$_r=$db->get_one("SELECT * FROM {$pre}ad_norm_user WHERE u_endtime>'$timestamp' AND id='$id' AND city_id='$city_id'");
	if($_r)
	{
		$_r[u_endtime]=date("Y-m-d H:i",$_r[u_endtime]);
		showerr("ֱ��{$_r[u_endtime]}�ſɹ���");
	}
	
	$rsdb=$db->get_one("SELECT * FROM {$pre}ad_norm_place WHERE id='$id'");
	$cdb=unserialize($rsdb[adcode]);
	if(!$rsdb){
		showerr("���λ������!");
	}elseif(!$rsdb[ifsale]){
		showerr("��ǰ���λ��ֹ����!");
	}elseif($rsdb[isclose]){
		showerr("��ǰ���λ�ѹر�!");
	}
	
	$totalmoneycard=0;
	if($rsdb[type]=='rollpic'){
		foreach($cdb[pic_url] AS $key=>$value){
			if($cdb[pic_ifbuy][$key] && $pic_url[$key])showerr("ͼƬ��{$key}�������!");
			if(!$pic_ifbuy[$key] || (!$pic_url[$key] && !$pic_alt[$key] && !$pic_link[$key]) ){
				unset($pic_ifbuy[$key],$pic_url[$key],$pic_alt[$key],$pic_link[$key]);
			}
			if($pic_url[$key] || $pic_alt[$key] || $pic_link[$key]){
				$totalmoneycard += ($cdb[pic_price][$key]?$cdb[pic_price][$key]:$rsdb[moneycard])*$atc_day;
			}
		}
		if(!$pic_ifbuy){
			showerr("����Ĺ�����ݲ���Ϊ�գ�");
		}
	}else{
		$totalmoneycard=$rsdb[moneycard]*$atc_day;
	}

	if($totalmoneycard>$lfjdb[money])
	{
		showerr("���{$webdb[MoneyName]}����$totalmoneycard,�����{$webdb[MoneyName]}:$lfjdb[money]");
	}
	
	if($rsdb[type]=='pic'){
		//�Զ���ͼ,��ͼƬ��С
		$imgdb=getimagesize(ROOT_PATH."$webdb[updir]/$atc_img");
		if( $imgdb[0]>$cdb[width] || $imgdb[1]>$cdb[height] ){
			gdpic(ROOT_PATH."$webdb[updir]/$atc_img",ROOT_PATH."$webdb[updir]/$atc_img",$cdb[width],$cdb[height],array('fix'=>1));
		}
	}
	
	if($rsdb[type]=='word'){
		$cdb[word]=filtrate($atc_word);
		$cdb[linkurl]=filtrate($atc_url);
	}elseif($rsdb[type]=='pic'||$rsdb[type]=='updown'){
		$cdb[picurl]=filtrate($atc_img);
		$cdb[linkurl]=filtrate($atc_url);
	}elseif($rsdb[type]=='swf'){
		$cdb[flashurl]=filtrate($atc_url);
	}elseif($rsdb[type]=='duilian'){
		$cdb[l_src]=filtrate($l_src);
		$cdb[l_link]=filtrate($l_link);
		$cdb[r_src]=filtrate($r_src);
		$cdb[r_link]=filtrate($r_link);
	}elseif($rsdb[type]=='code'){
		$cdb[code]=stripslashes($atc_code);
	}elseif($rsdb[type]=='rollpic'){
		unset($cdb);
		$cdb[pic_url]=$pic_url;
		$cdb[pic_link]=$pic_link;
		$cdb[pic_alt]=$pic_alt;
		$cdb[pic_ifbuy]=$pic_ifbuy;
	}
	
	$u_code=addslashes(serialize($cdb));

	$u_yz=$rsdb[autoyz];
	if($u_yz){	
		$u_begintime=$timestamp-1;
		$u_endtime=$u_begintime+$atc_day*24*3600;
		add_user($lfjuid,-$totalmoneycard,'������ͨ���λ');
	}else{	
		$u_begintime=$u_endtime=0;
	}
	$u_hits=0;
	$db->query("INSERT INTO `{$pre}ad_norm_user` ( `id` , `u_uid` , `u_username` , `u_day` , `u_begintime` , `u_endtime` , `u_hits` , `u_yz` , `u_code` , `u_money` , `u_moneycard` , `u_posttime`, `city_id` ) VALUES ('$id','$lfjuid','$lfjid','$atc_day','$u_begintime','$u_endtime','$u_hits','$u_yz','$u_code','$u_money','$totalmoneycard','$timestamp','$city_id')");
	make_ad_cache();
	refreshto("?job=list","����ɹ�,�㹲֧����{$totalmoneycard}{$webdb[MoneyName]}","3");
}

elseif($job=='mylist')
{
	$query = $db->query("SELECT A.*,B.* FROM {$pre}ad_norm_user B LEFT JOIN {$pre}ad_norm_place A ON A.id=B.id WHERE B.u_uid='$lfjuid' ORDER BY B.u_id DESC");
	while($rs = $db->fetch_array($query))
	{
		if($rs[u_yz]&&($rs[u_endtime]-$timestamp)<24*3600)
		{
			$rs[alert]="alert('���ڻ�һ���ڽ�Ҫ���ڵĹ�治�����޸�');return false;";
			$rs[color]="#ccc;";
		}
		else
		{
			$rs[alert]="";
			$rs[color]="red;";
		}

		if($rs[u_yz]){
			$rs[_ifyz]='�����';
		}else{
			$rs[_ifyz]='<font color=blue>δ���</font>';
		}
		if($rs[u_begintime])
		{
			$rs[u_begintime]=date("Y-m-d H:i",$rs[u_begintime]);
		}
		else
		{
			$rs[u_begintime]='';
		}
		if($rs[u_endtime])
		{
			$rs[u_endtime]=date("Y-m-d H:i",$rs[u_endtime]);
		}
		else
		{
			$rs[u_endtime]='';
		}
		$listdb[]=$rs;
	}
	require(ROOT_PATH."member/head.php");
	require(dirname(__FILE__)."/template/norm/mylist.htm");
	require(ROOT_PATH."member/foot.php");
}
elseif($action=="del")
{
	$db->query("DELETE FROM {$pre}ad_norm_user WHERE u_id='$u_id' AND u_uid='$lfjuid'");
	make_ad_cache();
	refreshto("?job=mylist","ɾ���ɹ�","3");
}
elseif($job=='edit')
{
	$rsdb=$db->get_one("SELECT A.*,B.* FROM {$pre}ad_norm_user B LEFT JOIN {$pre}ad_norm_place A ON A.id=B.id WHERE B.u_id='$u_id'");
	
	$code_array = unserialize($rsdb[adcode]);
	$code_u_array = unserialize($rsdb[u_code]);
	@extract($code_u_array);
	
	if($rsdb[autoyz]){
		$rsdb[_ifyz]='�Զ�ͨ�����';
	}else{
		$rsdb[_ifyz]='�ֹ����';
	}
	$id=$rsdb[id];
	require(ROOT_PATH."member/head.php");
	require(dirname(__FILE__)."/template/norm/buy.htm");
	require(ROOT_PATH."member/foot.php");
}

elseif($action=="edit")
{
	if($atc_day<1)
	{
		showerr("����Ĺ�治��С��һ��");
	}
	
	$rsdb=$db->get_one("SELECT A.*,B.* FROM {$pre}ad_norm_user B LEFT JOIN {$pre}ad_norm_place A ON A.id=B.id WHERE B.u_id='$u_id'");
	$cdb=unserialize($rsdb[adcode]);

	if($rsdb[u_endtime]<$timestamp){
		showerr("���ڹ�治�����޸�");
	}elseif((($rsdb[u_endtime]-$timestamp)<24*3600)&&$atc_day<$rsdb[u_day]){
		showerr("�����ڽ�Ҫ���ڵĹ�治�ܰ����ڸ�С");
	}
	//$rsdb=$db->get_one("SELECT * FROM {$pre}ad_norm_place WHERE id='$id'");
	
	$totalmoneycard = 0;
	if($rsdb[type]=='rollpic'){
		foreach($cdb[pic_url] AS $key=>$value){
			if($cdb[pic_ifbuy][$key] && $pic_url[$key])showerr("ͼƬ��{$key}�������!");
			if(!$pic_ifbuy[$key] || (!$pic_url[$key] && !$pic_alt[$key] && !$pic_link[$key]) ){
				unset($pic_ifbuy[$key],$pic_url[$key],$pic_alt[$key],$pic_link[$key]);
			}
			if($pic_url[$key] || $pic_alt[$key] || $pic_link[$key]){
				$totalmoneycard += ($cdb[pic_price][$key]?$cdb[pic_price][$key]:$rsdb[moneycard])*$atc_day;
			}
		}
		if(!$pic_ifbuy){
			showerr("����Ĺ�����ݲ���Ϊ�գ�");
		}
	}else{
		$totalmoneycard=$rsdb[moneycard]*$atc_day;
	}
	
	if($rsdb[type]=='word'){
		$cdb[word]=filtrate($atc_word);
		$cdb[linkurl]=filtrate($atc_url);
	}elseif($rsdb[type]=='pic'||$rsdb[type]=='updown'){
		$cdb[picurl]=filtrate($atc_img);
		$cdb[linkurl]=filtrate($atc_url);
	}elseif($rsdb[type]=='swf'){
		$cdb[flashurl]=filtrate($atc_url);
	}elseif($rsdb[type]=='duilian'){
		$cdb[l_src]=filtrate($l_src);
		$cdb[l_link]=filtrate($l_link);
		$cdb[r_src]=filtrate($r_src);
		$cdb[r_link]=filtrate($r_link);
	}elseif($rsdb[type]=='code'){
		$cdb[code]=stripslashes($atc_code);
	}elseif($rsdb[type]=='rollpic'){
		unset($cdb);
		$cdb[pic_url]=filtrate($pic_url);
		$cdb[pic_link]=filtrate($pic_link);
		$cdb[pic_alt]=filtrate($pic_alt);
		$cdb[pic_ifbuy]=filtrate($pic_ifbuy);
	}
	$u_code=addslashes(serialize($cdb));

	if($rsdb[autoyz])
	{
		$u_begintime=$rsdb[u_begintime];
		$u_endtime=$rsdb[u_endtime]+($atc_day-$rsdb[u_day])*3600*24;

		if(!$rsdb[u_yz])
		{
			if($totalmoneycard>$lfjdb[money])
			{
				showerr("���{$webdb[MoneyName]}����$totalmoneycard,�����{$webdb[MoneyName]}:$lfjdb[money]");
			}
		}
		else
		{
			if( $totalmoneycard>($lfjdb[money]+$rsdb[u_moneycard]) )
			{
				showerr("���{$webdb[MoneyName]}����,�����{$webdb[MoneyName]}:$lfjdb[money]");
			}
			$money=abs($totalmoneycard-$rsdb[u_moneycard]);
			add_user($lfjuid,-$money,'������ͨ���λ');
		}			
	}
	else
	{
		if($totalmoneycard>$lfjdb[money])
		{
			showerr("���{$webdb[MoneyName]}����$totalmoneycard,�����{$webdb[MoneyName]}:$lfjdb[money]");
		}
		$u_begintime=$u_endtime=0;
	}

	$u_hits=0;
	$db->query("UPDATE `{$pre}ad_norm_user` SET `u_day`='$atc_day',`u_begintime`='$u_begintime',`u_endtime`='$u_endtime',`u_yz`='$rsdb[autoyz]',`u_code`='$u_code',`u_moneycard`='$totalmoneycard' WHERE u_id='$u_id' AND u_uid='$lfjuid'");
	
	make_ad_cache();
	refreshto("?job=mylist","�޸ĳɹ�","3");
}


?>