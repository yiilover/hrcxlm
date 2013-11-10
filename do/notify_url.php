<?php 
require 'global.php';

$veryfy_result = file_get_contents("http://notify.alipay.com/trade/notify_query.do?notify_id=$notify_id&partner=$webdb[alipay_partner]");

if( eregi("true",$veryfy_result) ){
	$extra_common_param = intval($extra_common_param);
	$endurl=ROOT_PATH."cache/notify_1_{$extra_common_param}.txt";
	@unlink($endurl);
	if( @rename(ROOT_PATH."cache/notify_0_{$extra_common_param}.txt",$endurl) ){
		$str='&';
		foreach($_POST AS $key=>$value){
			$value = urlencode($value);
			$str.="$key=$value&";
		}
		$str.='notify_end='.mymd5("\t$extra_common_param\t$out_trade_no\t".strstr(read_file($endurl),'?'));
		write_file($endurl,$str, 'a');
	}
}

echo "success";	

?>