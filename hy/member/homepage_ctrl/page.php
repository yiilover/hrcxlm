<?php
//���¹�˾�������

if(!$step){

	$conf=$db->get_one("SELECT * FROM {$_pre}home WHERE uid='$uid' LIMIT 1");

	if(!table_field("{$_pre}home",'page_title')){
		$db->query("ALTER TABLE `{$_pre}home` ADD `page_title` VARCHAR( 100 ) NOT NULL ,ADD `page_content` TEXT NOT NULL ;");
	}

}else{

	$page_content = En_TruePath($page_content,1);	//������ַת��	
	
	if(!$web_admin){
		//���������ǹ���JS��صĶ������,�����Ҫʹ�ÿ�ܻ�JS��Ч�Ļ�,�Ͱ���������ɾ����
		$page_content = preg_replace('/<(script)([^<>]*)>/i','&lt;\\1\\2>',$page_content);	//����js����
		$page_content = preg_replace('/javascript/i','java script',$page_content);	//����js����
		$page_content = preg_replace('/<iframe ([^<>]+)>/i','&lt;iframe \\1>',$page_content);	//���˿�ܴ���
	}

	$page_title = filtrate($page_title);
	$db->query("UPDATE {$_pre}home SET `page_title`='$page_title',`page_content`='$page_content' WHERE uid='$uid'");

	refreshto("?uid=$uid&atn=$atn","�޸ĳɹ�");	
}
?>