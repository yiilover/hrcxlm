<?php
require(dirname(__FILE__)."/"."template/foot.htm");

$content=ob_get_contents();

ob_end_clean();

//恢复数据的时候要用到
$content=str_replace('CKEDITOR.replace(','CK_Editor=CKEDITOR.replace(',$content);

//这段代码是为了解决某些IE6使用框架里边的百度编辑器会导致浏览器打不开的问题
//也就是说必须要把js代码放到table之外，放到页面的最后才正常。
preg_match_all("/<script([^>]*)>([^<]+)editor.ui.Editor([^<]+)<\/script>/is",$content,$editor_array);
foreach($editor_array[0]  AS $key=>$value){
	$content = str_replace($value,'',$content);
	$content = str_replace('</body>
',"$value</body>
",$content);
}


echo $content;


exit;
?>