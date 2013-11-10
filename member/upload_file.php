<?php
require(dirname(__FILE__)."/"."global.php");

if(!$lfjid){
	showerr("你还没登录");
}
$linkdb=array("图片文件"=>"?type=pic","非图片文件"=>"?type=files",);
unset($file_array,$listdb);
$dirpath = ROOT_PATH."cache/tmp/".ceil($lfjuid/1000);
makepath($dirpath);

if(time()-filemtime("$dirpath/$lfjuid.php")<180){
	$file_array=@include("$dirpath/$lfjuid.php");
}elseif($job=="show"){
	require(dirname(__FILE__)."/"."head.php");
	require(dirname(__FILE__)."/"."template/upload_file.htm");
	require(dirname(__FILE__)."/"."foot.php");
	exit;
}else{
	list_dir_file(ROOT_PATH.$webdb['updir'],$lfjuid,'','');
	krsort($file_array[pic]);
	krsort($file_array[files]);
	write_file("$dirpath/$lfjuid.php", "<?php return ".var_export($file_array,true).'; ?>' );
}

if($type=="files"){
	$fileArray=$file_array[files];
	$rows=30;
}elseif($type=="pic"){
	$fileArray=$file_array[pic];
	$rows=12;
}
$page || $page=1;
$min=($page-1)*$rows;
$max=$min+$rows;
if($atc=="del"){
	delete_attachment($lfjuid,tempdir($files));
	unset($file_array[$type][$keys]);
	write_file("$dirpath/$lfjuid.php", "<?php return ".var_export($file_array,true).'; ?>' );
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=?type=$type'>";
	exit;
}

$totalNum = count($fileArray);
$showpage=getpage("","","?type=$type",$rows,$totalNum);
$i=-1;
foreach($fileArray AS $time=>$filename) {
	$i++;
	if($i<$min)continue;
	if($i>=$max)break;	
	
	$filename=str_replace(ROOT_PATH.$webdb['updir'],"",$filename);
	$listdb[]=array("keys"=>$time,"times"=>date("Y-m-d H:i:s",$time),"name"=>$filename);
}

require(dirname(__FILE__)."/"."head.php");
require(dirname(__FILE__)."/"."template/upload_file.htm");
require(dirname(__FILE__)."/"."foot.php");

//path指罗列某个目录，uid指仅罗列某个用户的文件，filetype指仅罗列某种类型的文件，NOfiletype指禁止罗列某种类型的文件 $webdb[updir]
//注意：NOfiletype赋值的话请把filetype设为空，反之亦然。多种格式用|隔开，比如jpg|gif|png|bmp
function list_dir_file($path,$uid,$filetype='',$NOfiletype=''){//$filetype='jpg|gif|png|bmp'
	global $file_array;
	if(is_dir($path)){
		$dir=opendir($path);
		while(($file=readdir($dir))!=false){
			if(is_file("$path/$file")){
				if($uid && !eregi("^{$uid}_",$file)){
					continue;
				}

				//if($filetype!='' && !eregi("\.($filetype)$",$file)){
				//	continue;
				//}elseif($NOfiletype!='' && eregi("\.($NOfiletype)$",$file)){
				//	continue;
				//}

				if( eregi("\.(jpg|gif|png|bmp)$",$file) ){
					$types='pic';
				}else{
					$types='files';
				}
				$i++;
				$time=filemtime("$path/$file"); 
				while($file_array[$types][$time]){
					$time++;
				}
				$file_array[$types][$time]="$path/$file";				
			}elseif($file!='.'&&$file!='..'){
				list_dir_file("$path/$file",$uid,$filetype,$NOfiletype);
			}
		}
		closedir($dir);
	}
}
?>