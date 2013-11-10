<?php
require_once("global.php");

$rs=$db->get_one("SELECT * FROM `{$pre}purse` WHERE uid='$lfjuid'");

if($action=='set'){
	foreach( $postdb AS $key=>$value){
		$postdb[$key] = filtrate($value);
	}
	
	$postdb['BACK']='';
	$detail = explode("\n",str_replace(array("\r",'　'),array("",' '),$postdb[back_code]));
	foreach($detail AS $key=>$value){
		list($num,$name,$bank)=explode(' ',$value);
		if( ereg("^([0-9]{8,})$",$num) && strlen($name)>3 && strlen($bank)>8 ){
			$postdb['BACK'][$num] = "$name $bank";
		}elseif($name){
			showerr("$value,不符合规范");
		}else{
			unset($detail[$key]);
		}
	}
	$postdb['back_code']=implode("\r\n",$detail);
	$string = addslashes( serialize($postdb) );
	if($rs){
		$db->query("UPDATE `{$pre}purse` SET config='$string' WHERE uid='$lfjuid'");
	}else{
		$db->query("INSERT INTO `{$pre}purse` SET config='$string',uid='$lfjuid'");
	}
	refreshto('?','设置成功',1);
}


$conf=unserialize($rs[config]);

$alipay_service[$conf[alipay_service]] = ' selected ';

require(ROOT_PATH."member/head.php");
require(dirname(__FILE__)."/"."template/bank.htm");
require(ROOT_PATH."member/foot.php");
?>