<?php
function label_hf()
{
    global $db;
    global $pre;
    global $webdb;
    $_obfuscate_ammigv8� = $db->query(" SELECT * FROM " . $pre .
        "label WHERE  chtype='99' ");
    while ($_obfuscate_SF4� = $db->fetch_array($_obfuscate_ammigv8�)) {
        if ($_obfuscate_SF4�[type] == "code") {
            $_obfuscate_SMa4hSUQUw�� = @unserialize($_obfuscate_SF4�[code]);
            if (is_array($_obfuscate_SMa4hSUQUw��)) {
                $_obfuscate_6EBL6HABQvLxOIs� .= "\$HFlabelArray=@unserialize(stripslashes('" .
                    addslashes($_obfuscate_SF4�[code]) . "'));";
                $_obfuscate_6EBL6HABQvLxOIs� .= "\r\n\t\t\t\t\t\t\tif(isset(\$HFlabelArray[\$city_id])){\r\n\t\t\t\t\t\t\t\t\$label['" .
                    $_obfuscate_SF4�[tag] . "']=\$HFlabelArray[\$city_id];\r\n\t\t\t\t\t\t\t}else{\r\n\t\t\t\t\t\t\t\t\$label['{$_obfuscate_SF4�[tag]}']=\$HFlabelArray[0];\r\n\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t";
            } else {
                $_obfuscate_v2XYRYU�[$_obfuscate_SF4�[tag]] = stripslashes(en_truepath($_obfuscate_SF4�[code],
                    0));
            }
        } else
            if ($_obfuscate_SF4�[type] == "pic") {
                $_obfuscate_SMa4hSUQUw�� = unserialize($_obfuscate_SF4�[code]);
                if (is_array($_obfuscate_SMa4hSUQUw��[0])) {
                    $_obfuscate_6EBL6HABQvLxOIs� .= "\$HFlabelArray=@unserialize(stripslashes('" .
                        addslashes($_obfuscate_SF4�[code]) . "'));";
                    $_obfuscate_6EBL6HABQvLxOIs� .= "\r\n\t\t\t\t\t\t\tif(is_array(\$HFlabelArray[\$city_id])){\r\n\t\t\t\t\t\t\t\t\$labelPicDb=\$HFlabelArray[\$city_id];\r\n\t\t\t\t\t\t\t}else{\r\n\t\t\t\t\t\t\t\t\$labelPicDb=\$HFlabelArray[0];\r\n\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\$labelPicDb['imglink']=En_TruePath(\$labelPicDb['imglink'],0);\r\n\t\t\t\t\t\t\t\$labelPicDb['imgurl']=En_TruePath(\$labelPicDb['imgurl'],0);\r\n\t\t\t\t\t\t\t\$labelPicDb['imgurl']=tempdir(\$labelPicDb['imgurl']);\r\n\t\t\t\t\t\t\tif(\$labelPicDb['imglink']){\r\n\t\t\t\t\t\t\t\t\$label['" .
                        $_obfuscate_SF4�[tag] . "']=\"<a href='\$labelPicDb[imglink]' target='_blank'><img src='\$labelPicDb[imgurl]' width='\$labelPicDb[width]' height='\$labelPicDb[height]' border='0' /></a>\";\r\n\t\t\t\t\t\t\t}else{\r\n\t\t\t\t\t\t\t\t\$label['{$_obfuscate_SF4�[tag]}']=\"<img src='\$labelPicDb[imgurl]' width='\$labelPicDb[width]' height='\$labelPicDb[height]' border='0' />\";\r\n\t\t\t\t\t\t\t}\t\t\t\t\t\t\t\r\n\t\t\t\t\t\t\t";
                } else {
                    $_obfuscate_2uLc3WY� = unserialize($_obfuscate_SF4�[code]);
                    $_obfuscate_2uLc3WY�[imgurl] = en_truepath($_obfuscate_2uLc3WY�[imgurl], 0);
                    $_obfuscate_2uLc3WY�[imglink] = en_truepath($_obfuscate_2uLc3WY�[imglink], 0);
                    $_obfuscate_2uLc3WY�[imgurl] = tempdir($_obfuscate_2uLc3WY�[imgurl]);
                    if ($_obfuscate_2uLc3WY�['imglink']) {
                        $_obfuscate_v2XYRYU�[$_obfuscate_SF4�[tag]] = "<a href='" . $_obfuscate_2uLc3WY�['imglink'] .
                            "' target=_blank><img src='{$_obfuscate_2uLc3WY�['imgurl']}' width='{$_obfuscate_2uLc3WY�['width']}' height='{$_obfuscate_2uLc3WY�['height']}' border='0' /></a>";
                    } else {
                        $_obfuscate_v2XYRYU�[$_obfuscate_SF4�[tag]] = "<img src='" . $_obfuscate_2uLc3WY�['imgurl'] .
                            "' width='{$_obfuscate_2uLc3WY�['width']}' height='{$_obfuscate_2uLc3WY�['height']}'  border='0' />";
                    }
                }
            } else
                if ($_obfuscate_SF4�[type] == "swf") {
                    $_obfuscate_4J5TZcvQg�� = unserialize($_obfuscate_SF4�[code]);
                    $_obfuscate_4J5TZcvQg��[flashurl] = tempdir($_obfuscate_4J5TZcvQg��[flashurl]);
                    if ($_obfuscate_4J5TZcvQg��[width]) {
                        $_obfuscate_ncdC0pM� = " width='" . $_obfuscate_4J5TZcvQg��['width'] . "'";
                    }
                    if ($_obfuscate_4J5TZcvQg��[height]) {
                        $_obfuscate_3FCLQL2p = " height='" . $_obfuscate_4J5TZcvQg��['height'] . "'";
                    }
                    $_obfuscate_v2XYRYU�[$_obfuscate_SF4�[tag]] =
                        "<object type='application/x-shockwave-flash' data='" . $_obfuscate_4J5TZcvQg��['flashurl'] .
                        "' {$_obfuscate_ncdC0pM�} {$_obfuscate_3FCLQL2p} wmode='transparent'><param name='movie' value='{$_obfuscate_4J5TZcvQg��['flashurl']}' /><param name='wmode' value='transparent' /></object>";
                } else {
                    $_obfuscate_v2XYRYU�[$_obfuscate_SF4�[tag]] = stripslashes($_obfuscate_SF4�[code]);
                }
    }
    $_obfuscate_1LV9xg�� = "<?php\r\n" . $_obfuscate_6EBL6HABQvLxOIs� . "\r\n";
    foreach ($_obfuscate_v2XYRYU� as $_obfuscate_Vwty => $_obfuscate_VgKtFeg�) {
        if (!($_obfuscate_VgKtFeg� == "")) {
            $_obfuscate_VgKtFeg� = addslashes($_obfuscate_VgKtFeg�);
            $_obfuscate_VgKtFeg� = str_replace("\$", "\\\$", $_obfuscate_VgKtFeg�);
            $_obfuscate_VgKtFeg� = en_truepath($_obfuscate_VgKtFeg�, 1);
            $_obfuscate_1LV9xg�� .= "\r\n\$label['" . $_obfuscate_Vwty .
                "']=En_TruePath(stripslashes(\"{$_obfuscate_VgKtFeg�}\"),0);";
        }
    }
    write_file(ROOT_PATH . "data/label_hf.php", $_obfuscate_1LV9xg��);
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