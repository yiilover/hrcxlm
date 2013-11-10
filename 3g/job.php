<?php 
require(dirname(__FILE__)."/global.php");
if(ereg("^([-_0-9a-zA-Z]+)$",$job)&&is_file(Mpath."inc/job/$job.php")){
	include(Mpath."inc/job/$job.php");
}

?>