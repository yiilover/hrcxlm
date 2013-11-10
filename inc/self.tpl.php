<?php

function get_show_tpl(&$head_tpl,&$foot_tpl,&$main_tpl){
	global $webdb,$city_DB,$city_id,$fidDB,$rsdb;
	
	$head_tpl = $foot_tpl = $main_tpl = '';
	
	//城市模板
	if($city_DB['tpl'][$city_id]){
		list($_head_tpl,$_foot_tpl)=explode("|",$city_DB['tpl'][$city_id]);
		is_file(ROOT_PATH.$_head_tpl) && $head_tpl = ROOT_PATH.$_head_tpl;
		is_file(ROOT_PATH.$_foot_tpl) && $foot_tpl = ROOT_PATH.$_foot_tpl;
	}
	
	//频道模板
	if($webdb['IF_Private_tpl']==3){
		if(is_file(Mpath.$webdb['Private_tpl_head'])){
			$head_tpl = Mpath.$webdb['Private_tpl_head'];
		}
		if(is_file(Mpath.$webdb['Private_tpl_foot'])){
			$foot_tpl = Mpath.$webdb['Private_tpl_foot'];
		}
	}
	
	//栏目模板
	if($fidDB['template']){
		$FidTpl = unserialize($fidDB['template']);
		is_file(Mpath.$FidTpl['head']) && $head_tpl=Mpath.$FidTpl['head'];
		is_file(Mpath.$FidTpl['foot']) && $foot_tpl=Mpath.$FidTpl['foot'];
		is_file(Mpath.$FidTpl['bencandy']) && $main_tpl=Mpath.$FidTpl['bencandy'];
	}
	
	//内容页模板
	if($rsdb['template']){
		$FidTpl = unserialize($rsdb['template']);
		is_file(Mpath.$FidTpl['head']) && $head_tpl=Mpath.$FidTpl['head'];
		is_file(Mpath.$FidTpl['foot']) && $foot_tpl=Mpath.$FidTpl['foot'];
		is_file(Mpath.$FidTpl['bencandy']) && $main_tpl=Mpath.$FidTpl['bencandy'];
	}
}

function get_list_tpl(&$head_tpl,&$foot_tpl,&$main_tpl){
	global $webdb,$city_DB,$city_id,$fidDB;
	
	$head_tpl = $foot_tpl = $main_tpl = '';
	
	//城市模板
	if($city_DB['tpl'][$city_id]){
		list($_head_tpl,$_foot_tpl)=explode("|",$city_DB['tpl'][$city_id]);
		is_file(ROOT_PATH.$_head_tpl) && $head_tpl = ROOT_PATH.$_head_tpl;
		is_file(ROOT_PATH.$_foot_tpl) && $foot_tpl = ROOT_PATH.$_foot_tpl;
	}
	
	//频道模板
	if($webdb['IF_Private_tpl']==2||$webdb['IF_Private_tpl']==3){
		if(is_file(Mpath.$webdb['Private_tpl_head'])){
			$head_tpl = Mpath.$webdb['Private_tpl_head'];
		}
		if(is_file(Mpath.$webdb['Private_tpl_foot'])){
			$foot_tpl = Mpath.$webdb['Private_tpl_foot'];
		}
	}
	
	//栏目模板
	if($fidDB['template']){
		$FidTpl = unserialize($fidDB['template']);
		is_file(Mpath.$FidTpl['head']) && $head_tpl=Mpath.$FidTpl['head'];
		is_file(Mpath.$FidTpl['foot']) && $foot_tpl=Mpath.$FidTpl['foot'];
		is_file(Mpath.$FidTpl['list']) && $main_tpl=Mpath.$FidTpl['list'];
	}
}

function get_index_tpl(&$head_tpl,&$foot_tpl){
	global $webdb,$city_DB,$city_id;
	
	$head_tpl = $foot_tpl = '';
	
	//城市模板
	if($city_DB['tpl'][$city_id]){
		list($_head_tpl,$_foot_tpl)=explode("|",$city_DB['tpl'][$city_id]);
		is_file(ROOT_PATH.$_head_tpl) && $head_tpl = ROOT_PATH.$_head_tpl;
		is_file(ROOT_PATH.$_foot_tpl) && $foot_tpl = ROOT_PATH.$_foot_tpl;
	}
	
	//频道模板
	if($webdb['IF_Private_tpl']){
		if(is_file(Mpath.$webdb['Private_tpl_head'])){
			$head_tpl = Mpath.$webdb['Private_tpl_head'];
		}
		if(is_file(Mpath.$webdb['Private_tpl_foot'])){
			$foot_tpl = Mpath.$webdb['Private_tpl_foot'];
		}
	}
}

?>