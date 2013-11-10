<?php
require(dirname(__FILE__)."/global.php");
if($url){
	$url = filtrate($url);
	echo "<body style='padding:0;margin:0px;background:#808080;text-align:center;'><table width=\"590\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td height=\"590\" valign=\"middle\" style='text-align:center;'><img src='$url' onload='if (this.width>this.height){this.width=570;} else {this.height=570;}' border=0></td>
  </tr>
</table></body>";
}
?>