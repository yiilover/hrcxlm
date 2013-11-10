<?php
function build_module_sql()
{
    global $city_id;
    if (!$city_id) {
        return;
    }
    return " AND A.city_id IN ('" . $city_id . "',0) ";
}
function hy_list_order()
{
    global $fidDB;
    if ($fidDB['listorder'] == 4) {
        $_obfuscate_3y0Y = " A.lastview DESC ";
        return $_obfuscate_3y0Y;
    }
    if ($fidDB['listorder'] == 3) {
        $_obfuscate_3y0Y = " A.hits DESC ";
        return $_obfuscate_3y0Y;
    }
    if ($fidDB['listorder'] == 2) {
        $_obfuscate_3y0Y = " A.renzheng DESC ";
        return $_obfuscate_3y0Y;
    }
    if ($fidDB['listorder'] == 1) {
        $_obfuscate_3y0Y = " A.rid ASC ";
        return $_obfuscate_3y0Y;
    }
    $_obfuscate_3y0Y = " A.rid DESC ";
    return $_obfuscate_3y0Y;
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
function replace_seo($_obfuscate__WwKzYz1wA��, $_obfuscate_GuuzatviyQ��)
{
    if (strstr($_obfuscate__WwKzYz1wA��, "{seo-title}")) {
        $_obfuscate__WwKzYz1wA�� = str_replace(array(
            "{seo-title}",
            "{seo-keywords}",
            "{seo-description}"), array(
            $_obfuscate_GuuzatviyQ��['title'],
            $_obfuscate_GuuzatviyQ��['keywords'],
            $_obfuscate_GuuzatviyQ��['description']), $_obfuscate__WwKzYz1wA��);
        return $_obfuscate__WwKzYz1wA��;
    }
    $_obfuscate__WwKzYz1wA�� = preg_replace("/<title>([^<]*)<\\/title>/is",
        "<title>" . $_obfuscate_GuuzatviyQ��['title'] . "</title>", $_obfuscate__WwKzYz1wA��);
    $_obfuscate__WwKzYz1wA�� = preg_replace("/<meta name=\"keywords\" content=\"([^\"]*)\">/is",
        "<meta name=\"keywords\" content=\"" . $_obfuscate_GuuzatviyQ��['keywords'] . "\">",
        $_obfuscate__WwKzYz1wA��);
    $_obfuscate__WwKzYz1wA�� = preg_replace("/<meta name=\"description\" content=\"([^\"]*)\">/is",
        "<meta name=\"description\" content=\"" . $_obfuscate_GuuzatviyQ��['description'] .
        "\">", $_obfuscate__WwKzYz1wA��);
    return $_obfuscate__WwKzYz1wA��;
}
function home_url_replace($_obfuscate_Il8i, $_obfuscate_LeS8hw�� = 1)
{
    $_obfuscate_Il8i = str_replace(array("=", "&"), array("-", "-"), $_obfuscate_Il8i);
    if ($_obfuscate_LeS8hw�� == 1) {
        return "href=\"homepage-htm-" . $_obfuscate_Il8i . ".html\"";
    }
    if ($_obfuscate_LeS8hw�� == 2) {
        return "window.location='homepage-htm-" . $_obfuscate_Il8i .
            "'+this.options[this.selectedIndex].value+'.html'";
    }
}
function get_homepage_module($modulename)
{
    global $titleDB;
    extract($GLOBALS);
    include (get_homepage_php($modulename));
}
function get_homepage_tpl($_obfuscate_6hS1Rw��)
{
    global $homepage_style;
    global $style_tpl;
    if (is_file(Mpath . ("homepage_tpl/" . $homepage_style . "/{$_obfuscate_6hS1Rw��}.htm"))) {
        return Mpath . ("homepage_tpl/" . $homepage_style . "/{$_obfuscate_6hS1Rw��}.htm");
    }
    if (is_file(Mpath . ("homepage_tpl/" . $style_tpl . "/{$_obfuscate_6hS1Rw��}.htm"))) {
        return Mpath . ("homepage_tpl/" . $style_tpl . "/{$_obfuscate_6hS1Rw��}.htm");
    }
    if (is_file(Mpath . ("images/homepage_style/" . $homepage_style . "/{$_obfuscate_6hS1Rw��}.htm"))) {
        return Mpath . ("images/homepage_style/" . $homepage_style . "/{$_obfuscate_6hS1Rw��}.htm");
    }
    return Mpath . ("homepage_tpl/default/" . $_obfuscate_6hS1Rw�� . ".htm");
}
function get_homepage_php($_obfuscate_NvMPBmPi1ebO1g��)
{
    global $homepage_style;
    global $style_tpl;
    if (is_file(Mpath . ("homepage_tpl/" . $homepage_style . "/{$_obfuscate_NvMPBmPi1ebO1g��}.php"))) {
        return Mpath . ("homepage_tpl/" . $homepage_style . "/{$_obfuscate_NvMPBmPi1ebO1g��}.php");
    }
    if (is_file(Mpath . ("homepage_tpl/" . $style_tpl . "/{$_obfuscate_NvMPBmPi1ebO1g��}.php"))) {
        return Mpath . ("homepage_tpl/" . $style_tpl . "/{$_obfuscate_NvMPBmPi1ebO1g��}.php");
    }
    if (is_file(Mpath . ("images/homepage_style/" . $homepage_style . "/{$_obfuscate_NvMPBmPi1ebO1g��}.php"))) {
        return Mpath . ("images/homepage_style/" . $homepage_style . "/{$_obfuscate_NvMPBmPi1ebO1g��}.php");
    }
    if (is_file(Mpath . ("homepage_tpl/default/" . $_obfuscate_NvMPBmPi1ebO1g�� .
        ".php"))) {
        return Mpath . ("homepage_tpl/default/" . $_obfuscate_NvMPBmPi1ebO1g�� . ".php");
    }
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
}*/ ?>