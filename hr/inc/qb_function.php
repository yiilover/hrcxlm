<?php
function build_module_sql()
{
    global $city_id;
    if (!$city_id) {
        return;
    }
    return " AND A.city_id IN ('" . $city_id . "',0) ";
}
function getTpl($_obfuscate_lEGQqw��, $_obfuscate_Nrilm0_dVw�� = "")
{
    global $STYLE;
    if ($_obfuscate_Nrilm0_dVw��) {
        if (file_exists($_obfuscate_Nrilm0_dVw��)) {
            return $_obfuscate_Nrilm0_dVw��;
        }
        if ($_obfuscate_Nrilm0_dVw�� && file_exists(Mpath . $_obfuscate_Nrilm0_dVw��)) {
            return Mpath . $_obfuscate_Nrilm0_dVw��;
        }
    }
    if (file_exists(Mpath . ("template/" . $STYLE . "/{$_obfuscate_lEGQqw��}.htm"))) {
        return Mpath . ("template/" . $STYLE . "/{$_obfuscate_lEGQqw��}.htm");
    }
    return Mpath . ("template/default/" . $_obfuscate_lEGQqw�� . ".htm");
}
function modules_hr()
{
    global $_pre;
    return $_pre . "module";
}
/*$url = $_SERVER['HTTP_HOST'];
$allow = array(
    "www.07975.com",
    "07975.com",
    "localhost",
    "localhost:8080");
if (!in_array($url, $allow)) {
    echo "<html><head><meta http-equiv=\"refresh\" content=\"3;URL=http://www.hn7.cn\"></head>\r\n</html>";
    exit();
}*/
 ?>