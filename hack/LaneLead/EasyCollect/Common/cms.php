<?php  $cms_config = CMS_PATH . '/data/config.php'; $cms_config_time = F('cms_config_time'); if (filemtime ($cms_config) != $cms_config_time) { getCmsConfig($cms_config); } $webdb = F('webdb'); define('CMS_URL', $webdb['www_url']); define('CMS_ADMINURL', $webdb['www_url'] . '/' . $webdb['admin_url']); define('CMS_ADMINDIR', CMS_PATH . '/' . $webdb['admin_url']); define('CMS_UPDIR', $webdb['updir']); define('CMS_K_UPDIR', CMS_PATH . '/' . $webdb['updir']); define('CMS_AUTOHTML', $webdb['NewsMakeHtml']); function getCmsConfig($cms_config) { $contents = getEvalContents($cms_config); eval($contents); F('webdb', $webdb); F('cms_config_time', filemtime($cms_config)); } $mysql_config = CMS_PATH . '/data/mysql_config.php'; $mysql_config_time = F('mysql_config_time'); if (filemtime ($mysql_config) != $mysql_config_time) { getCmsMysqlConfig($mysql_config); } function getCmsMysqlConfig($mysql_config) { $contents = getEvalContents($mysql_config); eval($contents); $writefile = array('DB_TYPE' => $database, 'DB_HOST' => $dbhost, 'DB_NAME' => $dbname, 'DB_USER' => $dbuser, 'DB_PWD' => $dbpw, 'CMS_PRE' => $pre,); F('mysql_config', $writefile, CONF_PATH); F('mysql_config_time', filemtime($mysql_config)); } if ($webdb['passport_type'] == 'ucenter') { $uc_config = CMS_PATH . '/data/uc_config.php'; $contents = getEvalContents($uc_config); eval($contents); } function getMemberTable() { $webdb = F('webdb'); if (preg_match("/^pwbbs/i", $webdb['passport_type'])) { $members_table = "{$webdb['passport_pre']}members"; } elseif (defined("UC_CONNECT")) { $members_table = strstr(UC_DBTABLEPRE, '.')?UC_DBTABLEPRE . "members":UC_DBNAME . '.' . UC_DBTABLEPRE . "members"; } else { $members_table = C('CMS_PRE') . 'members'; } return $members_table; } function getEvalContents($path) { $contents = php_strip_whitespace($path); $contents = substr($contents, 5); if ($pos = stripos($contents, '?>')) { $contents = substr($contents, 0, $pos); } return $contents; } ?>