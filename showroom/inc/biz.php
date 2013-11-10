<?php /* Èí¼þwww.qibosoft.com */

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

?>