<?php
defined('ROOT_PATH') or die();

require_once(ROOT_PATH.'inc/class.module.inc.php');

class Module_Field extends Module_Father{


function Module_Field($path=''){
	global $_pre,$pre,$webdb,$STYLE;
	$this->table_module = $_pre.'module';
	$this->table_title = $_pre."content";
	$this->table_content = $_pre."content_";
	$this->table_field = $_pre."field";
	$this->table_class = $pre."fenlei_class";
	$this->style = $STYLE;
	$this->f_path = $path ? $path : dirname(dirname(__FILE__)).'/';
	$this->tpl_index_new = $this->f_path."template/{$this->style}/";
	if(!is_dir($this->tpl_index_new)){
		$this->tpl_index_new = $this->f_path."template/default/";
	}
}

}
?>