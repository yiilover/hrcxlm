<?php
!function_exists('html') && exit('ERR');
if($action=='mod'){

	if(ereg("\\\$AD_label",$code)){
		showmsg("���ﲻ�ܷŹ�����,Ҫ�Ź�����,ֻ���ֹ��޸�ģ��Ž�ȥ!");
	}
	//$code=preg_replace("/http:\/\/([\d\w\/_\.]*)\/ie_edit\//is","",$code);
	//�Ե�ַ������
	$code=En_TruePath($code);

	//������¼ӹ���
	$pic_city_id = intval($pic_city_id);
	//$postdb[pic_city_id] = $pic_city_id;
	$rsdb = get_label();
	$_code = unserialize($rsdb[code]);
	if($pic_city_id){
		if($rsdb[code]==''){
			showmsg('�����Ҫ�ȶ����ȫ����ʾ�����ݺ�,�ſ��������¶���ָ��������ʾ������!');
		}elseif(!$_code[0]){
			$_code[0] = $rsdb[code];
		}		
	}	
	if($_code[0]){
		$_code[$pic_city_id] = stripslashes($code);
		$code = addslashes(serialize($_code));
	}

	$div_db[html_edit]=$html_edit;
	$div_db[div_w]=$div_w;
	$div_db[div_h]=$div_h;
	$div_db[div_bgcolor]=$div_bgcolor;
	$div=addslashes(serialize($div_db));
	$typesystem=0;

	

	//�������±�ǩ��
	do_post();


}

$rsdb=get_label();
$rsdb[hide]?$hide_1='checked':$hide_0='checked';
if($rsdb[js_time]){
	$js_time='checked';
}

@extract(unserialize($rsdb[divcode]));
$div_width && $div_w=$div_width;
$div_height && $div_h=$div_height;


//������¼ӹ���
$pic_city_id = 0;
$_code = unserialize($rsdb[code]);
if($_code[$_GET[pic_city_id]]){
	$rsdb[code] = $_code[$_GET[pic_city_id]];
}elseif(!isset($_GET[pic_city_id])&&$_code[$city_id]){
	$pic_city_id = $city_id;
	$rsdb[code] = $_code[$city_id];
}elseif($_code[0]){
	$rsdb[code] = $_code[0];
}

//if($html_edit==1||$htmledit=='yes'){
$rsdb[code] = editor_replace($rsdb[code]);
//}

//ǿ�Ƹ���$html_edit
//if($htmledit=="no"){
//	$html_edit=0;
//}elseif($htmledit=="yes"){
//	$html_edit=1;
//}


//��ʵ��ַ��ԭ
$rsdb[code]=En_TruePath($rsdb[code],0);


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
require("template/label/code.htm");
require("foot.php");
?>