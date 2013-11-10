<?php
@set_time_limit(0); //超时时间
@ini_set("memory_limit", '-1'); //内存限制 取消内存限制
@error_reporting(0);
// 需要根据您的CMS设置情况填写
$cms_dir = ''; //这里填写CMS所在子目录,比如你的CMS位于"根目录/cms",则这里填写"/cms".如果CMS在根目录，则留空.  

// 以下为系统配置,禁止修改.修改后将导致程序崩溃
//define('APP_DEBUG', true);
$runtime = './EasyCollect/Runtime/~runtime.php';
$dbconfig = './EasyCollect/Conf/mysql_config.php';
if(!file_exists($dbconfig)) {
	@unlink($runtime);
	@unlink('./EasyCollect/Runtime/Data/cms_config_time.php');
	@unlink('./EasyCollect/Runtime/Data/mysql_config_time.php');
}
if (file_exists($runtime)) {
	require($runtime);
} else {
	$test_file = './index.htm';
	if (!file_exists($test_file)) {
		if (PHP_VERSION < '5.2') {
			$errormsg = '系统错误: PHP版本太低,不支持该系统运行,系统要求至少PHP5.2以上!';
		} elseif (!function_exists('touch')) {
			$errormsg = '系统错误: touch 函数被禁用,请修改您的php配置!';
		} 
		if (touch($test_file)) {
		} else {
			$errormsg = '系统错误: 请确保蓝锂采集器安装文件夹Lanelead具有可以写入权限!';
		} 

		$from = 'utf-8';
		$to = 'gbk';
		if ($errormsg) {
			if (function_exists('mb_convert_encoding')) {
				echo(mb_convert_encoding($errormsg, $to, $from));
				exit;
			} elseif (function_exists('iconv')) {
				echo(iconv($from, $to, $errormsg));
				exit;
			} 
		} 
	} 
	//增强兼容性
	if (!isset($_SERVER['DOCUMENT_ROOT'])) {
		if (isset($_SERVER['SCRIPT_FILENAME'])) {
			$_SERVER['DOCUMENT_ROOT'] = str_replace('\\', '/', substr($_SERVER['SCRIPT_FILENAME'], 0, 0 - strlen($_SERVER['PHP_SELF'])));
		} 
	} 
	if (!isset($_SERVER['DOCUMENT_ROOT'])) {
		if (isset($_SERVER['PATH_TRANSLATED'])) {
			$_SERVER['DOCUMENT_ROOT'] = str_replace('\\', '/', substr(str_replace('\\\\', '\\', $_SERVER['PATH_TRANSLATED']), 0, 0 - strlen($_SERVER['PHP_SELF'])));
		} 
	} 

	define('WEB_ROOT', $_SERVER['DOCUMENT_ROOT']);
	define('CMS_PATH', $_SERVER['DOCUMENT_ROOT'] . $cms_dir);
	define('RootURL', $_SERVER['HTTP_HOST']);
	define('APP_NAME', 'EasyCollect');
	define('APP_PATH', './EasyCollect/'); 
	// 加载框架入口文件
	require("./Core/ThinkPHP.php");
} 

?>