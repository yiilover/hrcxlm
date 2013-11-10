<?php
function label_get_user($_obfuscate_7Ri3)
{
    $p = $GLOBALS[userDB]->get_info($_obfuscate_7Ri3);
    return $p;
}
function label_get_sex($_obfuscate_kIVhqJkÿ)
{
    return $_obfuscate_kIVhqJkÿ;
}
function mob_goto_url($_obfuscate_Il8i)
{
    global $webdb;
    if ($webdb['mob_goto_3g'] && is_mobile()) {
        header("location:" . $_obfuscate_Il8i);
        exit();
    }
}
function get_city_label(&$_obfuscate_3y0Y)
{
    $_obfuscate_3y0Y = str_replace("city_id='\$GLOBALS[city_id]'", "city_id IN ('\$GLOBALS[city_id]',0)",
        $_obfuscate_3y0Y);
}
function MODULE_CK($_obfuscate_LeS8hwÿÿ)
{
    global $pre;
    global $BIZ_MODULEDB;
    if (!is_array($BIZ_MODULEDB)) {
        exit("ÊÚÈ¨²»´æÔÚ3!");
    }
    if (!in_array($_obfuscate_LeS8hwÿÿ, $BIZ_MODULEDB)) {
        exit("ÊÚÈ¨ÓÐÎó4!");
    }
    return 1;
}
function label_ck_biz()
{
}
function avoidgather()
{
    global $rsdb;
    global $webdb;
    global $IS_BIZPhp168;
    if (!$IS_BIZPhp168) {
        return;
    }
    if ($webdb[AvoidCopy]) {
        $rsdb[content] = "<body oncopy='return false' oncut='return false'>" . $rsdb['content'];
    }
    if ($webdb[AvoidSave]) {
        $rsdb[content] = "{$rsdb['content']}<noscript><iframe scr='*.htm'></iframe></noscript>";
    }
    if (!$webdb[AvoidGather]) {
        return;
    }
    $_obfuscate__F_kP0NyGZC41fyeEOsÿ = rands(3) . $webdb[AvoidGatherPre] . rands(3);
    $rsdb[content] = "<div class='" . $_obfuscate__F_kP0NyGZC41fyeEOsÿ . "'>{$webdb['AvoidGatherString']}</div>{$rsdb['content']}<div class='{$_obfuscate__F_kP0NyGZC41fyeEOsÿ}'>{$webdb['AvoidGatherString']}</div>";
    $_obfuscate__F_kP0NyGZC41fyeEOsÿ = rands(3) . $webdb[AvoidGatherPre] . rands(3);
    $rsdb[content] = str_replace("<br>", "<br><div class='" . $_obfuscate__F_kP0NyGZC41fyeEOsÿ .
        "'>{$webdb['AvoidGatherString']}{$_obfuscate__F_kP0NyGZC41fyeEOsÿ}</div>", $rsdb[content]);
    $rsdb[content] = str_replace("<BR>", "<BR><div class='" . $_obfuscate__F_kP0NyGZC41fyeEOsÿ .
        "'>{$webdb['AvoidGatherString']}{$_obfuscate__F_kP0NyGZC41fyeEOsÿ}</div>", $rsdb[content]);
    $_obfuscate__F_kP0NyGZC41fyeEOsÿ = rands(3) . $webdb[AvoidGatherPre] . rands(3);
    $rsdb[content] = str_replace("<p>", "<p><div class='" . $_obfuscate__F_kP0NyGZC41fyeEOsÿ .
        "'>{$webdb['AvoidGatherString']}{$_obfuscate__F_kP0NyGZC41fyeEOsÿ}</div>", $rsdb[content]);
}
function limt_ip($_obfuscate_LeS8hwÿÿ)
{
    global $webdb;
    global $ForceEnter;
    global $IS_BIZPhp168;
    global $onlineip;
    if ($IS_BIZPhp168) {
        if ($_obfuscate_LeS8hwÿÿ == "ForbidIp" && $webdb[ForbidIp]) {
            $_obfuscate_8XjS1n72 = explode("\r\n", $webdb[ForbidIp]);
            foreach ($_obfuscate_8XjS1n72 as $_obfuscate_Vwty => $_obfuscate_VgKtFegÿ) {
                $_obfuscate_VgKtFegÿ = trim($_obfuscate_VgKtFegÿ);
                if (!$_obfuscate_VgKtFegÿ) {
                } else {
                    if (!ereg("^" . $_obfuscate_VgKtFegÿ, $onlineip)) {
                        continue;
                    }
                    exit("Forbid Ip!!");
                }
            }
        }
        if ($_obfuscate_LeS8hwÿÿ == "AllowVisitIp" && $webdb[AllowVisitIp]) {
            $_obfuscate_2n9nMZIUccaeSAÿÿ = 0;
            $_obfuscate_8XjS1n72 = explode("\r\n", $webdb[AllowVisitIp]);
            foreach ($_obfuscate_8XjS1n72 as $_obfuscate_Vwty => $_obfuscate_VgKtFegÿ) {
                $_obfuscate_VgKtFegÿ = trim($_obfuscate_VgKtFegÿ);
                if (!$_obfuscate_VgKtFegÿ) {
                } else
                    if (ereg("^" . $_obfuscate_VgKtFegÿ, $onlineip)) {
                        $_obfuscate_2n9nMZIUccaeSAÿÿ = 1;
                    }
            }
            if (!$_obfuscate_2n9nMZIUccaeSAÿÿ) {
                exit("NO Allow Visit!!");
            }
        }
        if ($_obfuscate_LeS8hwÿÿ == "AdminIp" && $ForceEnter == 0 && $webdb[AdminIp]) {
            $_obfuscate_2n9nMZIUccaeSAÿÿ = 0;
            $_obfuscate_8XjS1n72 = explode("\r\n", $webdb[AdminIp]);
            foreach ($_obfuscate_8XjS1n72 as $_obfuscate_Vwty => $_obfuscate_VgKtFegÿ) {
                $_obfuscate_VgKtFegÿ = trim($_obfuscate_VgKtFegÿ);
                if (!$_obfuscate_VgKtFegÿ) {
                } else
                    if (ereg("^" . $_obfuscate_VgKtFegÿ, $onlineip)) {
                        $_obfuscate_2n9nMZIUccaeSAÿÿ = 1;
                    }
            }
            if (!$_obfuscate_2n9nMZIUccaeSAÿÿ) {
                exit("NO Allow Login!!");
            }
        }
    }
}
function biz_function()
{
}
function LIFE_CK($_obfuscate_LeS8hwÿÿ)
{
    global $pre;
    global $BIZ_MODULEDB;
    if (!is_array($BIZ_MODULEDB)) {
        exit("ÊÚÈ¨ÈÏÖ¤²»´æÔÚ!");
    }
    if (!in_array($_obfuscate_LeS8hwÿÿ, $BIZ_MODULEDB)) {
        exit("È±ÉÙÊÚÈ¨ÈÏÖ¤!");
    }
    return 1;
}
function B2B_CK($_obfuscate_LeS8hwÿÿ)
{
    life_ck($_obfuscate_LeS8hwÿÿ);
}
function LIFE2_CK($_obfuscate_LeS8hwÿÿ)
{
    life_ck($_obfuscate_LeS8hwÿÿ);
}
function FENLEI_CK($_obfuscate_LeS8hwÿÿ)
{
    life_ck($_obfuscate_LeS8hwÿÿ);
}
/*
$url = $_SERVER['HTTP_HOST'];
$allow = array(
    "07975.com",
    "www.07975.com",
    "mz4.cn",
    "0753.me");
if (!in_array($url, $allow)) {
    echo "<html><head><meta http-equiv=\"refresh\" content=\"3;URL=http://www.hn7.cn\"></head>\r\n</html>";
    exit();
}*/
$life_more = 1;
$life_more = 1;
define("LIFE_MORE", true);
$BIZ_MODULEDB[] = "fenlei";
$BIZ_MODULEDB[] = "life";
$BIZ_MODULEDB[] = "coupon";
$BIZ_MODULEDB[] = "gift";
$BIZ_MODULEDB[] = "hr";
$BIZ_MODULEDB[] = "shop";
$BIZ_MODULEDB[] = "tg";
$BIZ_MODULEDB[] = "2coupon";
$BIZ_MODULEDB[] = "2gift";
$BIZ_MODULEDB[] = "2hr";
$BIZ_MODULEDB[] = "2shop";
$BIZ_MODULEDB[] = "2tg";
$BIZ_MODULEDB[] = "2shoptg";
$BIZ_MODULEDB[] = "2house";
$BIZ_MODULEDB[] = "2dianping";
$BIZ_MODULEDB[] = "2-shou";
$BIZ_MODULEDB[] = "discover";
define("BIZ_PATH", ROOT_PATH);
define("QB_BIZ_PATH", ROOT_PATH);
define("QB_BIZ_PATH2", ROOT_PATH);
define("BIZ_PATH_3", ROOT_PATH);
define("discover", ROOT_PATH);
$IS_BIZPhp168 = $IS_BIZ = 1;
if (!strstr($webdb['www_url'], "http://")) {
    exit("ÍøÖ·±ØÐëÊÇhttp://¿ªÍ·!");
} ?>