<?php
!function_exists('html') && exit('ERR');
@include(UID_POST_PATH."$lfjuid.php");
function set_view_value($key,$value){
	if(strstr($value,'\n')||strstr($value,'<')){
		return "$key:<textarea name='textfield' cols='80' rows='5'>$value</textarea><hr>";
	}else{
		//return "<input name='textfield' type='text' value='$value' size='80' /><hr>";
	}
}

if($step=='view'){
	if(!$post_cache){
		showerr("没有数据可恢复！",1);
	}
	$show="";
	foreach($post_cache AS $key=>$value){
		if(is_array($value)){
			foreach($value AS $key2=>$value2){
				if($value2){
					$show.=set_view_value($key2,$value2);
				}
			}
		}elseif($value){
			$show.=set_view_value($key,$value);
		}
	}	
print <<<EOT

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title>$titleDB[title] 数据恢复</title>
 </head>
1、下面只显示你上一次所POST提交的数据<br>
2、由于普通文本表单的数据系统可以自动恢复，所以这里只显示在线编辑器的数据：<hr>
$show
 <body>
  
 </body>
</html>

EOT;
exit;
}


$detail = explode(',',$input_name);
foreach($detail AS $value){
	if(strstr($value,'[')){
		list($v,$vv)=explode('[',$value);
		list($kk)=explode(']',$vv);
		foreach($post_cache[$v]  AS $key=>$vc){
			if($key==$kk&&$vc)echo "$value/###/".$vc."/#@#/";
		}
	}elseif($post_cache[$value]){
		echo "$value/###/".$post_cache[$value]."/#@#/";
	}
}


?>