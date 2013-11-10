<?php 
if($name){
		if($type=='designer'){
			if($rs=$db->get_one("SELECT * FROM {$_pre}content WHERE mid=6 AND title='$name'")){
				die("$rs[id]");
			}else{
				die("0");
			}
		}elseif($type=='company'){
			if($rs=$db->get_one("SELECT * FROM {$_pre}content WHERE mid=5 AND title='$name'")){
				die("$rs[id]");
			}else{
				die("0");
			}
		}
}