<?php
defined('ROOT_PATH') or die();

class search_Father{

	var $field_db = '';
	var $tablepre = '';
	var $eachPageNum = 20;	//每页显示多少条
	var $totalNum = 0;
	var $cArray;
	var $check_select_type = 0;	//针对多选框:为0时,扩大搜索范围,为1时,缩小搜索范围
	var $wArray = array("title","username");
	var $mid;
	var $search_url;
	var $type;
	var $keyword;

	function filtrate(&$word){
		$word = filtrate($word);
		$word = trim($word);
		$word = str_replace("%",'\%',$word);
		$word = str_replace("_",'\_',$word);
	}

	function ckpower(){
		global $webdb,$lfjid,$fid,$Fid_db;

		if(!$webdb['Info_allowGuesSearch']&&!$lfjid){	
			showerr("请先登录");
		}
		if(!$this->keyword){		
			showerr("关键字不能为空!");
		}
		if($Fid_db['tableid']&&!$fid){
			showerr("请选择一个栏目!");
		}
	}

	function get_keyword_sql(&$_SQL){
		if($this->keyword){
			if(in_array($this->type,$this->wArray)){			
				$field="A.{$this->type}";
			}elseif( $this->type && $this->field_db[$this->type] ){
				$field="B.{$this->type}";
			}else{
				$this->type='title';
				$field="A.title";
			}
			$_SQL.=" AND BINARY $field LIKE '%{$this->keyword}%' ";
		}
	}

	function get_area_sql(&$_SQL){
		global $postdb;
		if($postdb['street_id']){
			$_SQL.=" AND A.street_id='$postdb[street_id]' ";
		}elseif($postdb['zone_id']){
			$_SQL.=" AND A.zone_id='$postdb[zone_id]' ";
		}elseif($postdb['city_id']){
			$_SQL.=" AND A.city_id='$postdb[city_id]' ";
		}
	}

	function get_fid_sql(&$_SQL){
		global $fid;
		if($fid>0){
			$_SQL.=" AND A.fid='$fid' ";
		}
	}

	function get_field_sql(&$_SQL){
		global $postdb,$rsdb;

		$rsdb = array();

		if(!$this->field_db){
			return ;
		}
		foreach($postdb AS $key=>$value){		
			if(!$this->field_db[$key]||$value==''){
				continue;
			}
			if(is_array($value)&&$this->field_db[$key]['form_type']=='checkbox'){
				$_ASQL='';
				$_BSQL='';
				foreach($value AS $v){
					$v = filtrate($v);
					$_ASQL.=" AND BINARY B.`$key` LIKE '%/#/$v/#/%' ";
					$_BSQL.=($_BSQL?' OR ':'')." BINARY B.`$key` LIKE '%/#/$v/#/%' ";
					$rsdb[$key][$v]=" checked ";
					$v=urlencode($v);
					$this->search_url.="&postdb[{$key}][]=$v";
				}
				$_SQL.=$this->check_select_type?$_ASQL:" AND ($_BSQL) ";
			}elseif(is_array($value)&&($value[0]||$value[1])){
				$value[0] = intval($value[0]);
				$value[1] = intval($value[1]);
				$_Asql = '';
				$value[0] && $_Asql[] = "B.`$key`>={$value[0]}";
				$value[1] && $_Asql[] = "B.`$key`<={$value[1]}";
				$_SQL.='  AND ('.implode(' AND ',$_Asql).') ';
				$search_url.="&postdb[{$key}][0]=$value[0]&postdb[{$key}][1]=$value[1]";
			}elseif(!is_array($value)){
				$value = filtrate($value);
				$_SQL.="  AND BINARY B.`$key`='$value' ";
				$rsdb[$key][$value]=" selected ";
				$value=urlencode($value);
				$this->search_url.="&postdb[{$key}]=$value";
			}			
		}
	}

	function build_searchUrl(){
		global $fid;
		$url = 'search.php?mid='.
			$this->mid.
			'&fid='.$fid.
			'&keyword='.urlencode($this->keyword).
			'&action=search&type='.$this->type.
			$this->search_url;
		return $url;
	}


	function build_sql($_SQL){
		global $_pre,$page;
		if($page<1){	
			$page=1;
		}
		$min=($page-1)*$this->eachPageNum;
		if($this->field_db){
			$SQL="SELECT SQL_CALC_FOUND_ROWS A.*,B.* FROM {$_pre}content{$this->tablepre} A LEFT JOIN {$_pre}content_{$this->mid} B ON A.id=B.id WHERE A.mid='{$this->mid}' AND $_SQL ORDER BY A.id DESC LIMIT $min,{$this->eachPageNum}";
		}else{
			$SQL="SELECT SQL_CALC_FOUND_ROWS * FROM {$_pre}content{$this->tablepre} A WHERE $_SQL ORDER BY A.id DESC LIMIT $min,{$this->eachPageNum}";
		}
		return $SQL;
	}

	function query($SQL){
		global $db;
		$query = $db->query($SQL);
		$RS=$db->get_one("SELECT FOUND_ROWS()");
		$this->totalNum = $RS['FOUND_ROWS()'];
		while($rs = $db->fetch_array($query)){
			$this->format_rs($rs);
			$this->cArray[]=$rs;
		}
	}

	function format_rs(&$rs){
		global $Module_db;
		$rs['posttime']=date("Y-m-d H:i",$rs['posttime']);
		$rs['content']=@preg_replace('/<([^>]*)>/is',"",$rs['content']);
		$rs['content']=get_word($rs['content'],150);
		if(!$rs['username']){
			$detail=explode(".",$rs['ip']);
			$rs['username']="$detail[0].$detail[1].$detail[2].*";
		}
		$this->field_db && $Module_db->showfield($this->field_db,$rs,'list');
	}

	function get_module_select(){
		global $module_db;
		$module_select="<select name='mid' onChange=\"window.location.href='?mid='+this.options[this.selectedIndex].value\"><option value='0'  style='color:#aaa;'>所有模型</option>";
		foreach($module_db AS $key=>$value){
			$ckk=$this->mid==$key?' selected ':' ';
			$module_select.="<option value='$key' $ckk>$value</option>";
		}
		$module_select.="</select>";
		return $module_select;
	}

	function get_sort_select(){
		global $Fid_db,$fid;
		$fid_select="<select name='fid' onChange=\"if(this.options[this.selectedIndex].value=='-1'){alert('你不能选择大分类');}\"><option value='0' style='color:#aaa;'>所有栏目</option>";
		foreach( $Fid_db[0] AS $key=>$value){
			$fid_select.="<option value='-1' style='color:red;'>$value</option>";
			foreach( $Fid_db[$key] AS $key2=>$value2){
				$ckk=$fid==$key2?' selected ':' ';
				$fid_select.="<option value='$key2' $ckk>&nbsp;&nbsp;|--$value2</option>";
			}
		}
		$fid_select.="</select>";
		return $fid_select;
	}

	function change_city(){
		global $postdb,$city_id,$street_id,$zone_id;
		$postdb['city_id']	&&	$city_id	=	$postdb['city_id'];
		$postdb['street_id']	&&	$street_id	=	$postdb['street_id'];
		$postdb['zone_id']	&&	$zone_id	=	$postdb['zone_id'];
	}

	function clear_moreTpl(){
		//过滤母模板当中的自定义字段
		global $content;
		ob_end_clean();
		$content=preg_replace("/<!--{choose}-->(.*?)<!--{\/choose}-->/is","",$content);
		$content=preg_replace("/<!--{select}-->(.*?)<!--{\/select}-->/is","",$content);
		$content=preg_replace("/<!--{template}-->(.*?)<!--{\/template}-->/is","",$content);
		echo $content;	
	}
}

?>