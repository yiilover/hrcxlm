<?php
function build_module_sql()
{
    global $city_id;
    if (!$city_id) {
        return;
    }
    return " AND A.city_id IN ('" . $city_id . "',0) ";
}
function list_hot_keyword($_obfuscate_rVsNRA�� = 100)
{
    global $db;
    global $_pre;
    $_obfuscate_rVsNRA�� = intval($_obfuscate_rVsNRA��);
    $_obfuscate_ammigv8� = $db->query("SELECT * FROM " . $_pre .
        "keyword ORDER BY num DESC LIMIT {$_obfuscate_rVsNRA��}");
    while ($_obfuscate_SF4� = $db->fetch_array($_obfuscate_ammigv8�)) {
        if ($_obfuscate_SF4�[color] != "") {
            $_obfuscate_SF4�[style] = "color:" . $_obfuscate_SF4�['color'] . ";";
        }
        if ($_obfuscate_SF4�[bold]) {
            $_obfuscate_SF4�[style] .= "font-weight:bold;";
        }
        $_obfuscate_U3Gscb6y[] = $_obfuscate_SF4�;
    }
    return $_obfuscate_U3Gscb6y;
}
function get_txt_word($_obfuscate__WwKzYz1wA��, $_obfuscate_aHK2Ug�� = 0)
{
    $_obfuscate__WwKzYz1wA�� = preg_replace("/<([^<]*)>/is", "", $_obfuscate__WwKzYz1wA��);
    if (0 < $_obfuscate_aHK2Ug��) {
        $_obfuscate__WwKzYz1wA�� = get_word($_obfuscate__WwKzYz1wA��, $_obfuscate_aHK2Ug��);
    }
    return $_obfuscate__WwKzYz1wA��;
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