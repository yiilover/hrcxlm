<?php
require_once("global.php");
require_once(Mpath."inc/join.inc.php");
header('Content-Type: text/html; charset='.WEB_LANG);

if(join_init()==false){
	die('���ﳵΪ��!');
}

join_set();

$i=0;$nums=0;$prices=0;
echo "<ul>\r\t";
foreach($listdb AS $key=>$value){	
	foreach($value AS $keys=>$rs){
		$i++;
		$nums+=$rs[num];
		$prices+=$rs[price2];
		$rs[url]=get_info_url($rs[id],$rs[fid],$rs[city_id]);
		$rs[title]=get_word($rs[title],30);
		echo "	<li><a href=".$rs[url]." target='_blank'>".$rs[title]."</a> <em>".$rs[num]."</em>�� ����<em>".$rs[price]."</em>Ԫ �ܼ�<em>".$rs[price2]."</em>Ԫ</li>\r\t";
		//echo $rs[id]."*****".$rs[num]."*****".$rs[price2]."<hr/>";
	}	
}
echo "	<li class='tool'>���ﳵ����".$i."�ֱ��� �ϼ�".$nums."����<span>".$prices."</span>Ԫ</li>\r\t";
echo "</ul>\r\t";
?>