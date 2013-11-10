<?php

//友情链接缓存
function write_friendlink(){
	global $db,$pre,$timestamp;
	
	$friendlinkDB = $friendlink_DB = $friendlink_sort_DB = $friendlink_citysort_DB = array();
	
	$query = $db->query("SELECT * FROM {$pre}friendlink WHERE yz=1 AND (endtime=0 OR endtime>$timestamp) ORDER BY list DESC");
	while($rs = $db->fetch_array($query)){
		if(!$rs['city_id']){	//全国显示的
			if( $rs['logo'] && !$rs['iswordlink'] ){				
				$friendlinkDB[1][$rs['id']] = get_friendlink_type($rs);
			}else{
				$friendlinkDB[0][$rs['id']] = get_friendlink_type($rs);
			}		
		}else{	//某个城市的
			if( $rs['logo'] && !$rs['iswordlink'] ){
				$friendlink_DB[$rs['city_id']][1][$rs['id']] = get_friendlink_type($rs);
			}else{
				$friendlink_DB[$rs['city_id']][0][$rs['id']] = get_friendlink_type($rs);
			}			
		}
		
		//分类
		if($rs['fid']){
			if( $rs['logo'] && !$rs['iswordlink'] ){
				$friendlink_sort_DB[$rs['fid']][1][$rs['id']] = get_friendlink_type($rs);
			}else{
				$friendlink_sort_DB[$rs['fid']][0][$rs['id']] = get_friendlink_type($rs);
			}
			if($rs['city_id']){
				if( $rs['logo'] && !$rs['iswordlink'] ){
					$friendlink_citysort_DB[$rs['city_id']][$rs['fid']][1][$rs['id']] = get_friendlink_type($rs);
				}else{
					$friendlink_citysort_DB[$rs['city_id']][$rs['fid']][0][$rs['id']] = get_friendlink_type($rs);
				}
			}
		}
	}
	
	write_file(ROOT_PATH."data/friendlink.php",'<?php '
						.' $friendlinkDB='.var_export($friendlinkDB,true).';'
						.' $friendlink_DB='.var_export($friendlink_DB,true).';'
						.' $friendlink_sort_DB='.var_export($friendlink_sort_DB,true).';'
						.' $friendlink_citysort_DB='.var_export($friendlink_citysort_DB,true).';'
						.'?>');
}

function get_friendlink_type($rs){
	if( $rs['logo'] && !$rs['iswordlink'] ){
		$rs['logo']=tempdir($rs['logo']);	
		return array('name'=>$rs['name'],'url'=>$rs['url'],'logo'=>$rs['logo'],'descrip'=>$rs['descrip']);
	}else{
		return array('name'=>$rs['name'],'url'=>$rs['url'],'descrip'=>$rs['descrip']);
	}	
}

?>