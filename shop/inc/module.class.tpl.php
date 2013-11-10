<?php
defined('ROOT_PATH') or die();
require_once(ROOT_PATH.'inc/class.module.tpl.inc.php');

class module_tpl extends module_tpl_Father{

function module_tpl(&$system){
	$this->sys = $system;
}


}

?>