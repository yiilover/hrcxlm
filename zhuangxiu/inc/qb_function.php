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
function List_Company_Demo($_obfuscate_0W8�, $_obfuscate_rVsNRA��)
{
    global $db;
    global $_pre;
    $_obfuscate_ammigv8� = $db->query("SELECT B.*,C.title,C.city_id,C.picurl FROM " .
        $_pre . "content_6 A LEFT JOIN {$_pre}content_2 B ON A.id=B.designer_id  LEFT JOIN {$_pre}content C  ON B.id=C.id  WHERE A.company_id='{$_obfuscate_0W8�}' ORDER BY B.id DESC LIMIT {$_obfuscate_rVsNRA��}");
    while ($_obfuscate_SF4� = $db->fetch_array($_obfuscate_ammigv8�)) {
        if (!$_obfuscate_SF4�[title]) {
        } else {
            $_obfuscate_U3Gscb6y[] = $_obfuscate_SF4�;
        }
    }
    return $_obfuscate_U3Gscb6y;
}
function List_Company_Designer($_obfuscate_0W8�, $_obfuscate_rVsNRA��)
{
    global $db;
    global $_pre;
    $_obfuscate_ammigv8� = $db->query("SELECT A.*,B.title,B.city_id,B.picurl FROM " .
        $_pre . "content_6 A LEFT JOIN {$_pre}content B ON A.id=B.id WHERE A.company_id='{$_obfuscate_0W8�}' ORDER BY A.id DESC LIMIT {$_obfuscate_rVsNRA��}");
    while ($_obfuscate_SF4� = $db->fetch_array($_obfuscate_ammigv8�)) {
        $_obfuscate_U3Gscb6y[] = $_obfuscate_SF4�;
    }
    return $_obfuscate_U3Gscb6y;
}
function Show_Company_Demo_Num($_obfuscate_0W8�)
{
    global $db;
    global $_pre;
    $_obfuscate_3r0� = $db->get_one("SELECT COUNT(B.*) AS NUM FROM " . $_pre .
        "content_6 A LEFT JOIN {$_pre}content_2 B ON A.id=B.designer_id WHERE A.company_id='{$_obfuscate_0W8�}'");
    return $_obfuscate_3r0�[NUM];
}
function Company_Designer_Num($_obfuscate_0W8�)
{
    global $db;
    global $_pre;
    $_obfuscate_3r0� = $db->get_one("SELECT COUNT(*) AS NUM FROM " . $_pre .
        "content_6 WHERE company_id='{$_obfuscate_0W8�}'");
    return $_obfuscate_3r0�['NUM'];
}
function List_Designer_Demo($_obfuscate_0W8�, $_obfuscate_rVsNRA��)
{
    global $db;
    global $_pre;
    $_obfuscate_ammigv8� = $db->query("SELECT A.*,B.title,B.city_id,B.picurl FROM " .
        $_pre . "content_2 A LEFT JOIN {$_pre}content B ON A.id=B.id WHERE A.designer_id='{$_obfuscate_0W8�}' ORDER BY A.id DESC LIMIT {$_obfuscate_rVsNRA��}");
    while ($_obfuscate_SF4� = $db->fetch_array($_obfuscate_ammigv8�)) {
        if ($_obfuscate_SF4�[picurl]) {
            $_obfuscate_SF4�[picurl] = tempdir($_obfuscate_SF4�[picurl]);
        }
        $_obfuscate_SF4�[url] = get_info_url($_obfuscate_SF4�[id], $_obfuscate_SF4�[fid],
            $_obfuscate_SF4�[city_id]);
        $_obfuscate_U3Gscb6y[] = $_obfuscate_SF4�;
    }
    return $_obfuscate_U3Gscb6y;
}
function Display_Type1($_obfuscate_R2_b)
{
    $_obfuscate_kIVhqJk� = explode("/#/", $_obfuscate_R2_b);
    $_obfuscate_1LV9xg�� = "";
    if ($_obfuscate_kIVhqJk�) {
        foreach ($_obfuscate_kIVhqJk� as $_obfuscate_Vwty => $_obfuscate_VgKtFeg�) {
            if (!(0 == $_obfuscate_Vwty)) {
                $_obfuscate_1LV9xg�� .= $_obfuscate_VgKtFeg� . " ";
            }
        }
        return $_obfuscate_1LV9xg��;
    }
    $_obfuscate_1LV9xg�� = $_obfuscate_R2_b;
    return $_obfuscate_1LV9xg��;
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