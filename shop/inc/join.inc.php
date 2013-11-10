<?php

function join_init(){
	extract($GLOBALS);
	global $cid,$p_totalArray,$_ar,$ar,$listdb;
	
	$num = intval($num);
	$cid = intval($cid);	//��ƷID
	$have=false;	//�˶��Ƿ�Ϊ����ӵ���Ʒ
	$p_totalArray=$_ar=$ar=$listdb="";
	$detail=explode(",",get_cookie('products'));
	foreach($detail AS $key=>$value){
		list($p_id,$p_num) = explode('=',$value);
		$p_id = intval($p_id);
		if($p_id<1){
			continue;
		}
		if($p_id==$cid){
			if($type=='setcookie'){
				if($num==0){
					continue;
				}
				$p_num=$num;			
			}else{
				$have=true;
			}
		}
		$p_totalArray[$p_id] = $p_num;
		$_ar[] = $p_id;
		$ar[$p_id] = "$p_id=$p_num";
	}

	if($cid && !$have){	//����ӵ���Ʒ
		if(isset($_GET['num'])){	//Ϊ0ʱ�����������Ʒ
			$newnum = $num;
		}else{
			$newnum = 1;
		}
		if($newnum>0){
			$ar[$cid] = "$cid=$newnum";
			set_cookie('products',implode(',',$ar));
			$p_totalArray[$cid] = $newnum;
			$_ar[] = $cid;
		}
	}
	if($type=='setcookie'){	//�û��ֹ����ӻ����ĳ����Ʒ
		set_cookie('products',implode(',',$ar));
		//die('OK');
	}
	if(!$_ar){
		return false;
	}else{
		return $_ar;
	}
}


function join_set(){
	extract($GLOBALS);
	global $address_select,$rsdb,$listdb;

	$address_select = '';
	if(!is_table("{$_pre}address")){
		$db->query("CREATE TABLE `{$_pre}address` AS ( SELECT * FROM `{$_pre}content_2`);");
		$db->query("ALTER TABLE `{$_pre}address` ADD PRIMARY KEY ( `rid` );");
		$db->query("ALTER TABLE `{$_pre}address` CHANGE `rid` `rid` MEDIUMINT( 7 ) NOT NULL AUTO_INCREMENT ;");		
		$db->query("ALTER TABLE `{$_pre}address` ADD INDEX ( `uid` );");
		$db->query("TRUNCATE TABLE `{$_pre}address`;");
		$db->query("ALTER TABLE `{$_pre}address` DROP `id` ,DROP `fid` ,DROP `content` ,DROP `order_sendtype` ,DROP `order_paytype` ;");
	}
	if($job!='edit'){
		$rsdb[order_username] = $lfjdb[truename];
		$rsdb[order_phone] = $lfjdb[telephone];
		$rsdb[order_mobphone] = $lfjdb[mobphone];
		$rsdb[order_email] = $lfjdb[email];
		$rsdb[order_qq] = $lfjdb[oicq];
		$rsdb[order_postcode] = $lfjdb[postalcode];
		$rsdb[order_address] = $lfjdb[address];
		$query = $db->query("SELECT * FROM `{$_pre}address` WHERE uid='$lfjuid'");
		while($rs = $db->fetch_array($query)){
			$address_select.="<option value='$rs[rid]'>��ַ:{$rs[order_address]} ��ϵ��:{$rs[order_username]} �绰:{$rs[order_mobphone]}</option>";
			
		}
		//if(WEB_LANG=='utf-8'){
			//$address_select = gbk2utf8($address_select);
		//}
	}
	if(!$_ar){
		return ;
	}
	$query = $db->query("SELECT * FROM {$_pre}content WHERE id IN (".implode(',',$_ar).")");
	while($rs = $db->fetch_array($query)){
		$rs[price] = str_replace(',','',$rs[price]);
		$rs[price2] = $rs[price]*$p_totalArray[$rs[id]];
		$rs[num] = $p_totalArray[$rs[id]];
		$rs[picurl] = tempdir($rs[picurl]);
		$listdb[$rs[username]][] = $rs;
	}
}


function join_post(){
	extract($GLOBALS);
	global $postdb,$listdb;

	if(!table_field("{$_pre}join",'products')){
		$db->query("ALTER TABLE `{$_pre}join` ADD `products` TEXT NOT NULL ;");
	}

	$query = $db->query("SELECT * FROM {$_pre}content WHERE id IN (".implode(',',$_ar).")");
	while($rs = $db->fetch_array($query)){
		$rs[price] = str_replace(',','',$rs[price]);
		$listdb[$rs[uid]][] = $rs;
	}

	if($postdb[address_type]>0){//ʹ�þɵ�ַ
		$ts = $db->get_one("SELECT * FROM `{$_pre}address` WHERE uid='$lfjuid' AND rid='$postdb[address_type]'");
		$postdb[order_username] = $ts[order_username];
		$postdb[order_phone] = $ts[order_phone];
		$postdb[order_mobphone] = $ts[order_mobphone];
		$postdb[order_email] = $ts[order_email];
		$postdb[order_qq] = $ts[order_qq];
		$postdb[order_postcode] = $ts[order_postcode];
		$postdb[order_address] = $ts[order_address];
	}elseif($postdb[address_type]=='-1'){	//�µ�ַҪ��⴦��
		$db->query("INSERT INTO `{$_pre}address` ( `uid` , `order_username` , `order_phone` , `order_mobphone` , `order_email` , `order_qq` , `order_postcode` , `order_address` ) VALUES ('$lfjuid' , '$postdb[order_username]' , '$postdb[order_phone]' , '$postdb[order_mobphone]' , '$postdb[order_email]' , '$postdb[order_qq]' , '$postdb[order_postcode]' , '$postdb[order_address]')");
	}
}
?>