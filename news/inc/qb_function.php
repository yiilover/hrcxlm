<?php
function build_module_sql()
{
    global $city_id;
    if (!$city_id) {
        return;
    }
    return " AND A.city_id IN ('" . $city_id . "',0) ";
}
function get_comment_quote($_obfuscate_Yx2hUMY4FQ��, &$_obfuscate_kIVhqJk�)
{
    global $db;
    global $_pre;
    $_obfuscate_ammigv8� = $db->query("SELECT * FROM `" . $_pre .
        "comments` WHERE cid='{$_obfuscate_Yx2hUMY4FQ��}'");
    while ($_obfuscate_SF4� = $db->fetch_array($_obfuscate_ammigv8�)) {
        if (!$_obfuscate_SF4�[username]) {
            $_obfuscate_8XjS1n72 = explode(".", $_obfuscate_SF4�[ip]);
            $_obfuscate_SF4�[username] = "{$_obfuscate_8XjS1n72['0']}.{$_obfuscate_8XjS1n72['1']}.{$_obfuscate_8XjS1n72['2']}.*";
        }
        $_obfuscate_SF4�[posttime] = date("Y-m-d H:i:s", $_obfuscate_SF4�[posttime]);
        $_obfuscate_SF4�[content] = str_replace("\n", "<br>", $_obfuscate_SF4�[content]);
        $_obfuscate_SF4�[content] = replace_bad_word($_obfuscate_SF4�[content]);
        $_obfuscate_SF4�[username] = replace_bad_word($_obfuscate_SF4�[username]);
        $_obfuscate_kIVhqJk�[$_obfuscate_SF4�[cid]] = $_obfuscate_SF4�;
        if ($_obfuscate_SF4�[quoteid]) {
            get_comment_quote($_obfuscate_SF4�[quoteid], $_obfuscate_kIVhqJk�);
        }
    }
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