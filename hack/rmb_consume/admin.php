<?php
!function_exists('html') && exit('ERR');
if($job=='list'&&$Apower[rmb_consume])
{
	if(!$page){
		$page=1;
	}
	$rows=50;
	$min=($page-1)*$rows;
	$showpage=getpage("`{$pre}rmb_consume`"," ","?lfj=$lfj&job=$job","$rows");
	$query = $db->query("SELECT A.*,B.username FROM `{$pre}rmb_consume` A LEFT JOIN {$pre}memberdata B ON A.uid=B.uid ORDER BY A.id DESC LIMIT $min,$rows");
	while($rs = $db->fetch_array($query)){
		$rs[posttime]=date("Y-m-d H:i:s",$rs[posttime]);
		$listdb[]=$rs;
	}

	hack_admin_tpl('list');
}
elseif($action=="delete"&&$Apower[rmb_consume])
{
	if($id){
		$db->query("DELETE FROM `{$pre}rmb_consume` WHERE id='$id'");
	}else{
		foreach( $listdb AS $key=>$id){
			$db->query("DELETE FROM `{$pre}rmb_consume` WHERE id='$id'");
		}
	}
	jump("É¾³ý³É¹¦","$FROMURL","1");
}

?>