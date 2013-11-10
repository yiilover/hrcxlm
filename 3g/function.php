<?php
function build_module_sql($_obfuscate_Pgÿÿ)
{
    global $city_id;
    if (!$city_id) {
        return;
    }
    return " AND city_id IN ('" . $city_id . "',0) ";
}
/*$url = $_SERVER['HTTP_HOST'];
$allow = array(
    "07975.com",
    "www.07975.com",
    "localhost",
    "localhost:8080");
if (!in_array($url, $allow)) {
    echo "<html><head><meta http-equiv=\"refresh\" content=\"3;URL=http://www.hn7.cn\"></head>\r\n</html>";
    exit();
}*/
$Murl = $webdb[www_url] . "/" . Mdirname;
if (!$webdb[web_open]) {
    $webdb[close_why] = str_replace("\n", "<br>", $webdb[close_why]);
    showerr("ÍøÕ¾ÔÝÊ±¹Ø±Õ:" . $webdb['close_why']);
} 
?>