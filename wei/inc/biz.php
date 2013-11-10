<?php
function build_module_sql()
{
    global $city_id;
    if (!$city_id) {
        return;
    }
    return " AND A.city_id IN ('" . $city_id . "',0) ";
}
function list_hot_keyword($_obfuscate_rVsNRAÿÿ = 100)
{
    global $db;
    global $_pre;
    $_obfuscate_rVsNRAÿÿ = intval($_obfuscate_rVsNRAÿÿ);
    $_obfuscate_ammigv8ÿ = $db->query("SELECT * FROM " . $_pre .
        "keyword ORDER BY num DESC LIMIT {$_obfuscate_rVsNRAÿÿ}");
    while ($_obfuscate_SF4ÿ = $db->fetch_array($_obfuscate_ammigv8ÿ)) {
        if ($_obfuscate_SF4ÿ[color] != "") {
            $_obfuscate_SF4ÿ[style] = "color:" . $_obfuscate_SF4ÿ['color'] . ";";
        }
        if ($_obfuscate_SF4ÿ[bold]) {
            $_obfuscate_SF4ÿ[style] .= "font-weight:bold;";
        }
        $_obfuscate_U3Gscb6y[] = $_obfuscate_SF4ÿ;
    }
    return $_obfuscate_U3Gscb6y;
}
function get_txt_word($_obfuscate__WwKzYz1wAÿÿ, $_obfuscate_aHK2Ugÿÿ = 0)
{
    $_obfuscate__WwKzYz1wAÿÿ = preg_replace("/<([^<]*)>/is", "", $_obfuscate__WwKzYz1wAÿÿ);
    if (0 < $_obfuscate_aHK2Ugÿÿ) {
        $_obfuscate__WwKzYz1wAÿÿ = get_word($_obfuscate__WwKzYz1wAÿÿ, $_obfuscate_aHK2Ugÿÿ);
    }
    return $_obfuscate__WwKzYz1wAÿÿ;
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
}*/ ?>