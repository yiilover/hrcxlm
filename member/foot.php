<?php
require_once(get_member_tpl('foot'));
$content=ob_get_contents();
ob_end_clean();
ob_start();
if($webdb[www_url]=='/.'){
	$content=str_replace('/./','/',$content);
}

//��δ�����Ϊ�˽��ĳЩIE6ʹ�ÿ����ߵİٶȱ༭���ᵼ��������򲻿�������
//Ҳ����˵����Ҫ��js����ŵ�table֮�⣬�ŵ�ҳ�������������
preg_match_all("/<script([^>]*)>([^<]+)editor.ui.Editor([^<]+)<\/script>/is",$content,$editor_array);
foreach($editor_array[0]  AS $key=>$value){
	$content = str_replace($value,'',$content);
	$content = str_replace('</body>',"$value</body>",$content);
}

//�ָ����ݵ�ʱ��Ҫ�õ�
$content=str_replace('CKEDITOR.replace(','CK_Editor=CKEDITOR.replace(',$content);

echo $content;

?>