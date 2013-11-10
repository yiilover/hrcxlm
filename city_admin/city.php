<?php
require_once(dirname(__FILE__)."/global.php");

$postdb[descrip]=filtrate($postdb[descrip]);
$postdb[metakeywords]=filtrate($postdb[metakeywords]);
$postdb[metadescription]=filtrate($postdb[metadescription]);

if($step==2){
	$db->query("UPDATE {$pre}city SET descrip='$postdb[descrip]',metakeywords='$postdb[metakeywords]',metadescription='$postdb[metadescription]' WHERE fid='$city_id'");
	
	$city_DB[metaT][$city_id]=$postdb[descrip];
	$city_DB[metaK][$city_id]=$postdb[metakeywords];
	$city_DB[metaD][$city_id]=$postdb[metadescription];
	
	$show = var_export($city_DB,true);

	$show ="<?php \$city_DB = $show ; ?>";

	write_file(ROOT_PATH."data/all_city.php",$show);

	refreshto("$FROMURL","ÉèÖÃ³É¹¦",1);
}

require(dirname(__FILE__)."/head.php");
require(dirname(__FILE__)."/template/city.htm");
require(dirname(__FILE__)."/foot.php");
?>