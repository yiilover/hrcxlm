<?php
function label_hf()
{
    global $db;
    global $pre;
    global $webdb;
    $_obfuscate_ammigv8ÿ = $db->query(" SELECT * FROM " . $pre .
        "label WHERE  chtype='99' ");
    while ($_obfuscate_SF4ÿ = $db->fetch_array($_obfuscate_ammigv8ÿ)) {
        if ($_obfuscate_SF4ÿ[type] == "code") {
            $_obfuscate_SMa4hSUQUwÿÿ = @unserialize($_obfuscate_SF4ÿ[code]);
            if (is_array($_obfuscate_SMa4hSUQUwÿÿ)) {
                $_obfuscate_6EBL6HABQvLxOIsÿ .= "\$HFlabelArray=@unserialize(stripslashes('" .
                    addslashes($_obfuscate_SF4ÿ[code]) . "'));";
                $_obfuscate_6EBL6HABQvLxOIsÿ .= "\r\n\t\t\t\t\t\t\tif(isset(\$HFlabelArray[\$city_id])){\r\n\t\t\t\t\t\t\t\t\$label['" .
                    $_obfuscate_SF4ÿ[tag] . "']=\$HFlabelArray[\$city_id];\r\n\t\t\t\t\t\t\t}else{\r\n\t\t\t\t\t\t\t\t\$label['{$_obfuscate_SF4ÿ[tag]}']=\$HFlabelArray[0];\r\n\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t";
            } else {
                $_obfuscate_v2XYRYUÿ[$_obfuscate_SF4ÿ[tag]] = stripslashes(en_truepath($_obfuscate_SF4ÿ[code],
                    0));
            }
        } else
            if ($_obfuscate_SF4ÿ[type] == "pic") {
                $_obfuscate_SMa4hSUQUwÿÿ = unserialize($_obfuscate_SF4ÿ[code]);
                if (is_array($_obfuscate_SMa4hSUQUwÿÿ[0])) {
                    $_obfuscate_6EBL6HABQvLxOIsÿ .= "\$HFlabelArray=@unserialize(stripslashes('" .
                        addslashes($_obfuscate_SF4ÿ[code]) . "'));";
                    $_obfuscate_6EBL6HABQvLxOIsÿ .= "\r\n\t\t\t\t\t\t\tif(is_array(\$HFlabelArray[\$city_id])){\r\n\t\t\t\t\t\t\t\t\$labelPicDb=\$HFlabelArray[\$city_id];\r\n\t\t\t\t\t\t\t}else{\r\n\t\t\t\t\t\t\t\t\$labelPicDb=\$HFlabelArray[0];\r\n\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\$labelPicDb['imglink']=En_TruePath(\$labelPicDb['imglink'],0);\r\n\t\t\t\t\t\t\t\$labelPicDb['imgurl']=En_TruePath(\$labelPicDb['imgurl'],0);\r\n\t\t\t\t\t\t\t\$labelPicDb['imgurl']=tempdir(\$labelPicDb['imgurl']);\r\n\t\t\t\t\t\t\tif(\$labelPicDb['imglink']){\r\n\t\t\t\t\t\t\t\t\$label['" .
                        $_obfuscate_SF4ÿ[tag] . "']=\"<a href='\$labelPicDb[imglink]' target='_blank'><img src='\$labelPicDb[imgurl]' width='\$labelPicDb[width]' height='\$labelPicDb[height]' border='0' /></a>\";\r\n\t\t\t\t\t\t\t}else{\r\n\t\t\t\t\t\t\t\t\$label['{$_obfuscate_SF4ÿ[tag]}']=\"<img src='\$labelPicDb[imgurl]' width='\$labelPicDb[width]' height='\$labelPicDb[height]' border='0' />\";\r\n\t\t\t\t\t\t\t}\t\t\t\t\t\t\t\r\n\t\t\t\t\t\t\t";
                } else {
                    $_obfuscate_2uLc3WYÿ = unserialize($_obfuscate_SF4ÿ[code]);
                    $_obfuscate_2uLc3WYÿ[imgurl] = en_truepath($_obfuscate_2uLc3WYÿ[imgurl], 0);
                    $_obfuscate_2uLc3WYÿ[imglink] = en_truepath($_obfuscate_2uLc3WYÿ[imglink], 0);
                    $_obfuscate_2uLc3WYÿ[imgurl] = tempdir($_obfuscate_2uLc3WYÿ[imgurl]);
                    if ($_obfuscate_2uLc3WYÿ['imglink']) {
                        $_obfuscate_v2XYRYUÿ[$_obfuscate_SF4ÿ[tag]] = "<a href='" . $_obfuscate_2uLc3WYÿ['imglink'] .
                            "' target=_blank><img src='{$_obfuscate_2uLc3WYÿ['imgurl']}' width='{$_obfuscate_2uLc3WYÿ['width']}' height='{$_obfuscate_2uLc3WYÿ['height']}' border='0' /></a>";
                    } else {
                        $_obfuscate_v2XYRYUÿ[$_obfuscate_SF4ÿ[tag]] = "<img src='" . $_obfuscate_2uLc3WYÿ['imgurl'] .
                            "' width='{$_obfuscate_2uLc3WYÿ['width']}' height='{$_obfuscate_2uLc3WYÿ['height']}'  border='0' />";
                    }
                }
            } else
                if ($_obfuscate_SF4ÿ[type] == "swf") {
                    $_obfuscate_4J5TZcvQgÿÿ = unserialize($_obfuscate_SF4ÿ[code]);
                    $_obfuscate_4J5TZcvQgÿÿ[flashurl] = tempdir($_obfuscate_4J5TZcvQgÿÿ[flashurl]);
                    if ($_obfuscate_4J5TZcvQgÿÿ[width]) {
                        $_obfuscate_ncdC0pMÿ = " width='" . $_obfuscate_4J5TZcvQgÿÿ['width'] . "'";
                    }
                    if ($_obfuscate_4J5TZcvQgÿÿ[height]) {
                        $_obfuscate_3FCLQL2p = " height='" . $_obfuscate_4J5TZcvQgÿÿ['height'] . "'";
                    }
                    $_obfuscate_v2XYRYUÿ[$_obfuscate_SF4ÿ[tag]] =
                        "<object type='application/x-shockwave-flash' data='" . $_obfuscate_4J5TZcvQgÿÿ['flashurl'] .
                        "' {$_obfuscate_ncdC0pMÿ} {$_obfuscate_3FCLQL2p} wmode='transparent'><param name='movie' value='{$_obfuscate_4J5TZcvQgÿÿ['flashurl']}' /><param name='wmode' value='transparent' /></object>";
                } else {
                    $_obfuscate_v2XYRYUÿ[$_obfuscate_SF4ÿ[tag]] = stripslashes($_obfuscate_SF4ÿ[code]);
                }
    }
    $_obfuscate_1LV9xgÿÿ = "<?php\r\n" . $_obfuscate_6EBL6HABQvLxOIsÿ . "\r\n";
    foreach ($_obfuscate_v2XYRYUÿ as $_obfuscate_Vwty => $_obfuscate_VgKtFegÿ) {
        if (!($_obfuscate_VgKtFegÿ == "")) {
            $_obfuscate_VgKtFegÿ = addslashes($_obfuscate_VgKtFegÿ);
            $_obfuscate_VgKtFegÿ = str_replace("\$", "\\\$", $_obfuscate_VgKtFegÿ);
            $_obfuscate_VgKtFegÿ = en_truepath($_obfuscate_VgKtFegÿ, 1);
            $_obfuscate_1LV9xgÿÿ .= "\r\n\$label['" . $_obfuscate_Vwty .
                "']=En_TruePath(stripslashes(\"{$_obfuscate_VgKtFegÿ}\"),0);";
        }
    }
    write_file(ROOT_PATH . "data/label_hf.php", $_obfuscate_1LV9xgÿÿ);
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