<?php /* ���www.qibosoft.com */

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

?>