<?php
function build_module_sql()
{
    global $city_id;
    if (!$city_id) {
        return;
    }
    return " AND A.city_id IN ('" . $city_id . "',0) ";
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
function List_Company_Demo($_obfuscate_0W8ÿ, $_obfuscate_rVsNRAÿÿ)
{
    global $db;
    global $_pre;
    $_obfuscate_ammigv8ÿ = $db->query("SELECT B.*,C.title,C.city_id,C.picurl FROM " .
        $_pre . "content_6 A LEFT JOIN {$_pre}content_2 B ON A.id=B.designer_id  LEFT JOIN {$_pre}content C  ON B.id=C.id  WHERE A.company_id='{$_obfuscate_0W8ÿ}' ORDER BY B.id DESC LIMIT {$_obfuscate_rVsNRAÿÿ}");
    while ($_obfuscate_SF4ÿ = $db->fetch_array($_obfuscate_ammigv8ÿ)) {
        if (!$_obfuscate_SF4ÿ[title]) {
        } else {
            $_obfuscate_U3Gscb6y[] = $_obfuscate_SF4ÿ;
        }
    }
    return $_obfuscate_U3Gscb6y;
}
function List_Company_Designer($_obfuscate_0W8ÿ, $_obfuscate_rVsNRAÿÿ)
{
    global $db;
    global $_pre;
    $_obfuscate_ammigv8ÿ = $db->query("SELECT A.*,B.title,B.city_id,B.picurl FROM " .
        $_pre . "content_6 A LEFT JOIN {$_pre}content B ON A.id=B.id WHERE A.company_id='{$_obfuscate_0W8ÿ}' ORDER BY A.id DESC LIMIT {$_obfuscate_rVsNRAÿÿ}");
    while ($_obfuscate_SF4ÿ = $db->fetch_array($_obfuscate_ammigv8ÿ)) {
        $_obfuscate_U3Gscb6y[] = $_obfuscate_SF4ÿ;
    }
    return $_obfuscate_U3Gscb6y;
}
function Show_Company_Demo_Num($_obfuscate_0W8ÿ)
{
    global $db;
    global $_pre;
    $_obfuscate_3r0ÿ = $db->get_one("SELECT COUNT(B.*) AS NUM FROM " . $_pre .
        "content_6 A LEFT JOIN {$_pre}content_2 B ON A.id=B.designer_id WHERE A.company_id='{$_obfuscate_0W8ÿ}'");
    return $_obfuscate_3r0ÿ[NUM];
}
function Company_Designer_Num($_obfuscate_0W8ÿ)
{
    global $db;
    global $_pre;
    $_obfuscate_3r0ÿ = $db->get_one("SELECT COUNT(*) AS NUM FROM " . $_pre .
        "content_6 WHERE company_id='{$_obfuscate_0W8ÿ}'");
    return $_obfuscate_3r0ÿ['NUM'];
}
function List_Designer_Demo($_obfuscate_0W8ÿ, $_obfuscate_rVsNRAÿÿ)
{
    global $db;
    global $_pre;
    $_obfuscate_ammigv8ÿ = $db->query("SELECT A.*,B.title,B.city_id,B.picurl FROM " .
        $_pre . "content_2 A LEFT JOIN {$_pre}content B ON A.id=B.id WHERE A.designer_id='{$_obfuscate_0W8ÿ}' ORDER BY A.id DESC LIMIT {$_obfuscate_rVsNRAÿÿ}");
    while ($_obfuscate_SF4ÿ = $db->fetch_array($_obfuscate_ammigv8ÿ)) {
        if ($_obfuscate_SF4ÿ[picurl]) {
            $_obfuscate_SF4ÿ[picurl] = tempdir($_obfuscate_SF4ÿ[picurl]);
        }
        $_obfuscate_SF4ÿ[url] = get_info_url($_obfuscate_SF4ÿ[id], $_obfuscate_SF4ÿ[fid],
            $_obfuscate_SF4ÿ[city_id]);
        $_obfuscate_U3Gscb6y[] = $_obfuscate_SF4ÿ;
    }
    return $_obfuscate_U3Gscb6y;
}
function Display_Type1($_obfuscate_R2_b)
{
    $_obfuscate_kIVhqJkÿ = explode("/#/", $_obfuscate_R2_b);
    $_obfuscate_1LV9xgÿÿ = "";
    if ($_obfuscate_kIVhqJkÿ) {
        foreach ($_obfuscate_kIVhqJkÿ as $_obfuscate_Vwty => $_obfuscate_VgKtFegÿ) {
            if (!(0 == $_obfuscate_Vwty)) {
                $_obfuscate_1LV9xgÿÿ .= $_obfuscate_VgKtFegÿ . " ";
            }
        }
        return $_obfuscate_1LV9xgÿÿ;
    }
    $_obfuscate_1LV9xgÿÿ = $_obfuscate_R2_b;
    return $_obfuscate_1LV9xgÿÿ;
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
?>