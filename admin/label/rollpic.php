<?php
!function_exists('html') && exit('ERR');
if($action=='mod'){

	$rsdb=get_label();
	
	$array=unserialize($rsdb[code]);
	foreach($array[picurl] AS $value){
		if(!in_array($value,$picurl)){
			delete_attachment($userdb[uid],tempdir($value));
		}	
	}
	
	unset($SQL);
	$postdb[tplpart_1code]=En_TruePath(stripslashes($tplpart_1code));
	//$postdb[js]=comimg();
	$postdb[rolltype]=$rolltype;
	$postdb[width]=$width;
	$postdb[height]=$height;

	
	$i=0;
	foreach($picurl AS $key=>$value){		
		if($value==''){
			continue;
		}
		$i++;
		$postdb[picurl][$i]=En_TruePath($value);
		$postdb[piclink][$i]=En_TruePath($piclink[$key]);
		$postdb[picalt][$i]=$picalt[$key];
	}
	
	//������¼ӹ���
	$pic_city_id = intval($pic_city_id);
	$postdb[pic_city_id] = $pic_city_id;
	//$rsdb = get_label();
	$code = unserialize($rsdb[code]);
	if($pic_city_id){
		if(!is_array($code)){
			showmsg('�����Ҫ�ȶ����ȫ����ʾ�����ݺ�,�ſ��������¶���ָ��������ʾ������!');
		}elseif(!$code[0]){
			$code[0] = $code;
		}		
	}	
	if($code[0]){
		$code[$pic_city_id] = $postdb;
	}else{
		$code = $postdb;
	}
	

	//$code=addslashes(serialize($postdb));
	$code=addslashes(serialize($code));	//������¼ӹ���
	$div_db[div_w]=$div_w;
	$div_db[div_h]=$div_h;
	$div_db[div_bgcolor]=$div_bgcolor;
	$div=addslashes(serialize($div_db));
	$typesystem=0;

	//�������±�ǩ��
	do_post();

}else{

	$rsdb=get_label();
	$div=unserialize($rsdb[divcode]);
	@extract($div);
	$code=unserialize($rsdb[code]);


	//������¼ӹ���
	if($code[$_GET[pic_city_id]]){
		$code=$code[$_GET[pic_city_id]];
	}elseif(!isset($_GET[pic_city_id])&&$code[$city_id]){
		$code = $code[$city_id];
	}elseif($code[0]){
		$code = $code[0];
	}


	@extract($code);
	if(!is_array($picurl)){
		$picurl=array(1=>"",2=>"");
	}
	$div_width && $div_w=$div_width;
	$div_height && $div_h=$div_height;

	if($rsdb[js_time]){
		$js_time='checked';
	}
	$hide=(int)$rsdb[hide];
	$hidedb["$hide"]="checked";

	foreach($picurl AS $key=>$value){
		$picurl[$key]=En_TruePath($value,0);
	}
	foreach($piclink AS $key=>$value){
		$piclink[$key]=En_TruePath($value,0);
	}

	$_rolltype[intval($rolltype)]=' checked ';
	
	//������¼ӹ���
	isset($_GET[pic_city_id]) && $pic_city_id = $_GET[pic_city_id];
	@include(ROOT_PATH.'data/all_city.php');
	if(count($city_DB[name])>1){
		$select_city="<select name='pic_city_id' onChange='CT_jumpMenu(this)'><option value='0'>ȫ��</option>";
		foreach( $city_DB[name] AS $key=>$value){
			$ck=$key==$pic_city_id?' selected ':'';
			$select_city.="<option value='$key'$ck>$value</option>";
		}
		$select_city.="</select>";
	}
	
	
 	require("head.php");
	require("template/label/rollpic.htm");
	require("foot.php");

}
?>