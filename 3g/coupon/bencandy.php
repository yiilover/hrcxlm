<?php  
require(dirname(__FILE__)."/global.php");
/**
*获取栏目与模块配置参数
**/
$fidDB=$db->get_one("SELECT A.* FROM {$_pre}sort A WHERE A.fid='$fid'");

if(!$fidDB){
	showerr("FID有误!");
}

/**
*模型配置文件
**/
$field_db = $module_DB[$fidDB[mid]][field];
$mid=$fidDB[mid];

/**
*获取信息正文的内容
**/
$rsdb=$db->get_one("SELECT B.*,A.* FROM `{$_pre}content` A LEFT JOIN `{$_pre}content_$mid` B ON A.id=B.id WHERE A.id='$id'");

if(!$rsdb){
	showerr("内容不存在");
}
elseif($rsdb[fid]!=$fid){
	showerr("FID有误!!!");
}
elseif($rsdb[yz]!=1&&!$web_admin){
	if($rsdb[yz]==2){
		showerr("回收站的内容,你无法查看");
	}else{
		showerr("还没通过审核");
	}
}

$db->query("UPDATE {$_pre}content SET hits=hits+1,lastview='$timestamp' WHERE id='$id'");

$rsdb[posttime]=date("Y-m-d H:i:s",$rsdb[posttime]);

$rsdb[picurl] && $rsdb[picurl]=tempdir($rsdb[picurl]);

$WebTitle=$rsdb['title']."--".$webdb['Info_webname']."--".$webdb['webname'];

$showmoreconts=showmorecontent($mid);

require(Mpath."template/head.htm");
require(Mpath."template/bencandy_shop.htm");
require(Mpath."template/foot.htm");

function showmorecontent($mid){
	global $db,$_pre,$rsdb;
	$query = $db->query("SELECT * FROM `{$_pre}field` WHERE mid='$mid' ORDER BY orderlist DESC,id ASC");
	$show="";
	while($rs = $db->fetch_array($query)){
		$key=$rs[field_name];
		if($rs[form_type]=='textarea'){
			require_once(ROOT_PATH."inc/encode.php");
			$rsdb[$key]=format_text($rsdb[$key]);
		}elseif($rs[form_type]=='ieedit'||$rs[form_type]=='ieeditsimp'){
			$rsdb[$key]=En_TruePath($rsdb[$key],0,1);
		}elseif($rs[form_type]=='upfile'||$rs[form_type]=='onepic'){
			$rsdb[$key]=tempdir($rsdb[$key]);
		}elseif($rs[form_type]=='upmorepic'||$rs[form_type]=='upmorefile'){
			$detail=explode("\n",$rsdb[$key]);
			unset($rsdb[$key]);
			foreach( $detail AS $_key=>$value){
				list($_url,$_name)=explode("@@@",$value);
				$rsdb[$key][url][]=tempdir($_url);
				$rsdb[$key][title][]=$_name;
			}
		}elseif($rs[form_type]=='classdb'){
			$rsdb[$key]=$this->classdb_show($rsdb[$key]);
		}elseif($rs[form_type]=='select'||$rs[form_type]=='radio'){
			if(strstr($rs[form_set],"|")){
				$rs[form_set]=str_replace("\r","",$rs[form_set]);
				$detail=explode("\n",$rs[form_set]);
				foreach( $detail AS $key2=>$value2){
					list($_key,$_value)=explode("|",$value2);
					$_key==$rsdb[$key] && $_value && $rsdb[$key]=$_value;
				}
			}
		}elseif($rs[form_type]=='checkbox'){
			if(strstr($rs[form_set],"|")){
				$rs[form_set]=str_replace("\r","",$rs[form_set]);
				$detail=explode("\n",$rs[form_set]);
				foreach( $detail AS $key2=>$value2){
					list($_key,$_value)=explode("|",$value2);
					if($_value){
						//以下还需要进一步改进的
						$rsdb[$key]=str_replace($_key,$_value,$rsdb[$key]);
					}
				}
			}
			$rsdb[$key]=str_replace("/","、",$rsdb[$key]);
		}

		$show.= "<div class='lists'><span>".$rs[title].":</span>".$rsdb[$key].$rs[form_units]."</div>\r\n";
	}
	return $show;
}
?>