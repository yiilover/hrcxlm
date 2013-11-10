<?php
function build_module_sql()
{
    global $city_id;
    if (!$city_id) {
        return;
    }
    return " AND A.city_id IN ('" . $city_id . "',0) ";
}
function get_comment_quote($_obfuscate_Yx2hUMY4FQÿÿ, &$_obfuscate_kIVhqJkÿ)
{
    global $db;
    global $_pre;
    $_obfuscate_ammigv8ÿ = $db->query("SELECT * FROM `" . $_pre .
        "comments` WHERE cid='{$_obfuscate_Yx2hUMY4FQÿÿ}'");
    while ($_obfuscate_SF4ÿ = $db->fetch_array($_obfuscate_ammigv8ÿ)) {
        if (!$_obfuscate_SF4ÿ[username]) {
            $_obfuscate_8XjS1n72 = explode(".", $_obfuscate_SF4ÿ[ip]);
            $_obfuscate_SF4ÿ[username] = "{$_obfuscate_8XjS1n72['0']}.{$_obfuscate_8XjS1n72['1']}.{$_obfuscate_8XjS1n72['2']}.*";
        }
        $_obfuscate_SF4ÿ[posttime] = date("Y-m-d H:i:s", $_obfuscate_SF4ÿ[posttime]);
        $_obfuscate_SF4ÿ[content] = str_replace("\n", "<br>", $_obfuscate_SF4ÿ[content]);
        $_obfuscate_SF4ÿ[content] = replace_bad_word($_obfuscate_SF4ÿ[content]);
        $_obfuscate_SF4ÿ[username] = replace_bad_word($_obfuscate_SF4ÿ[username]);
        $_obfuscate_kIVhqJkÿ[$_obfuscate_SF4ÿ[cid]] = $_obfuscate_SF4ÿ;
        if ($_obfuscate_SF4ÿ[quoteid]) {
            get_comment_quote($_obfuscate_SF4ÿ[quoteid], $_obfuscate_kIVhqJkÿ);
        }
    }
}
function getTpl($_obfuscate_lEGQqwÿÿ, $_obfuscate_Nrilm0_dVwÿÿ = "")
{
    global $STYLE;
    if ($_obfuscate_Nrilm0_dVwÿÿ) {
        if (file_exists($_obfuscate_Nrilm0_dVwÿÿ)) {
            return $_obfuscate_Nrilm0_dVwÿÿ;
        }
        if ($_obfuscate_Nrilm0_dVwÿÿ && file_exists(Mpath . $_obfuscate_Nrilm0_dVwÿÿ)) {
            return Mpath . $_obfuscate_Nrilm0_dVwÿÿ;
        }
    }
    if (file_exists(Mpath . ("template/" . $STYLE . "/{$_obfuscate_lEGQqwÿÿ}.htm"))) {
        return Mpath . ("template/" . $STYLE . "/{$_obfuscate_lEGQqwÿÿ}.htm");
    }
    return Mpath . ("template/default/" . $_obfuscate_lEGQqwÿÿ . ".htm");
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