<?php
require_once(ROOT_PATH."inc/class.json.php");
if($lfjuid){
	$rs = $db->get_one("SELECT * FROM {$pre}pm WHERE touid='$lfjuid' AND ifnew=1 ORDER BY mid DESC LIMIT 1");
	//���ж���Ϊ�˽�ʡ�ֻ�����û��Ҫÿ�����ȫ������
	if($rs[mid]>$mid){
		unset($rs[content]);
		if(WEB_LANG=='gb2312'){
			$rs[username]=gbk2utf8($rs[username]);
			$rs[title]=gbk2utf8($rs[title]);	
		}
		$jsonObj = new Services_JSON();
		$code =$jsonObj->encode((object)$rs);
		
		//$jsonArr = get_object_vars($jsonObj->decode($code));
		die($code);
	}else{
		die("0");
	}
}