<?php
require(dirname(__FILE__).'/global.php');
require(Mpath.'/bd_pics.php');
require(Mpath.'inc/homepage/global.php');

if($uid=intval($uid)){
	$rsdb=$db->get_one("SELECT * FROM {$_pre}company WHERE uid='$uid'");
}else{	
	$host=filtrate(preg_replace("/http:\/\/([^\/]+)(.*)/is","\\1",$WEBURL));
	$rsdb=$db->get_one("SELECT * FROM {$_pre}company WHERE host='$host'");
	if(!$rsdb){	//���ݾɰ����
		$host=filtrate(preg_replace("/http:\/\/([^\.]+)\.(.*)/is","\\1",$WEBURL));
		$rsdb=$db->get_one("SELECT * FROM {$_pre}company WHERE host='$host'");
		if($rsdb){
			$db->query("UPDATE {$_pre}company SET host='{$host}.$webdb[vipselfdomain]' WHERE host='$host'");
		}
	}
	$uid=$rsdb['uid'];

	if(!$uid){
		if(!$lfjuid){
			showerr("��Ǹ,û���ҵ���Ҫ���ʵ�ҳ�棡");
		}else{
			echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=?uid=$lfjuid'>";
			exit;
		}
	}
}

if(!$rsdb[if_homepage]){
	if($uid==$lfjuid){
		showerr("����û�������̼���ҳ��<a href='$webdb[www_url]/member/index.php?main=$Murl/member/post_company.php'><b>�������</b></a>����");
	}else{
		showerr("�̼һ�û��������ҳ");
	}
}


//���������ļ�
$conf=$db->get_one("SELECT * FROM {$_pre}home WHERE uid='$uid'");
if(!$conf[uid]) {
	caretehomepage($rsdb);		//�����̼���Ϣ
}


if($rsdb[yz]!=1 && $lfjuid != $uid && !$web_admin){
	showerr("�˵���δ�����,�޷���ʾ");
}
if($rsdb[yz]!=1 && $webdb['ForbidDoHy'] && !$web_admin){
	showerr("��ǰ�̼һ�ûͨ�����,�޷���ʾ");
}


if($lfjuid!=$uid&&$groupdb['view_hy_money']>0){	//�鿴����Ҫ�ۻ���
	if(!$lfjid){
		showerr("�鿴����������Ҫ����{$webdb[MoneyName]},�㵱ǰ�����οͣ��޷��鿴�����ȵ�¼��ע���Ϊ��Ա��");
	}
	if(get_money($lfjuid)<$groupdb['view_hy_money']){
		showerr("���{$webdb[MoneyName]}����{$groupdb['view_hy_money']}{$webdb[MoneyDW]}����Ȩ�鿴!");
	}elseif($action=='view'){
		set_cookie("view_hy_money-$lfjuid-$uid",mymd5($uid,'EN'),3600*24);
		add_user($lfjuid,-intval($groupdb['view_hy_money']),'�鿴�������̿۷�');
	}elseif(mymd5(get_cookie("view_hy_money-$lfjuid-$uid"),'DE')!=$uid){
		showerr("�鿴����������Ҫ����{$webdb[MoneyName]}{$groupdb['view_hy_money']}{$webdb[MoneyDW]}����ȷ��Ҫ�鿴��<br><a href='$WEBURL&action=view'><center>���ȷ�ϲ鿴</center></a>");
	}
}


//��˾����,��bannerʱ������
$banner_show='';
list($banner_url,$banner_width,$banner_height) = explode("\t",$conf['banner']);
if(!$banner_url){
	$rsdb[company_name_big] = $rsdb[title];
}else{
	//$conf[banner]=" style='background:url(".tempdir($banner_url).");'";
	$banner_url = tempdir($banner_url);
	$banner_width>800 || $banner_width=990;
	$banner_height>30 || $banner_height=100;
	if(eregi("\.swf$",$banner_url)){
		$banner_show = "<embed class='edui-faked-video' pluginspage='http://www.macromedia.com/go/getflashplayer' align='none' src='$banner_url' width='$banner_width' height='$banner_height' type='application/x-shockwave-flash' allowfullscreen='true' allowscriptaccess='never' menu='false' loop='true' play='true' wmode='transparent' />";
	}else{
		$banner_show = "<img src='$banner_url' style='border:0;width:{$banner_width}px;height:{$banner_height}px;'>";
	}
}

//���
$style_tpl = $homepage_tpl = '';
$homepage_style="default";
if(eregi("^([-_a-z0-9]+)$",$conf[style]) && is_dir($tpl_dir.$conf[style])){
	include($tpl_dir.$conf[style].'/style.php');
	$homepage_style=$conf[style];
}

//ģ��
$conf[bodytpl]=$conf[bodytpl]?$conf[bodytpl]:"left";

//���ݴ���
$rsdb[logo]=tempdir($rsdb[picurl]);
$conf[listnum]=unserialize($conf[listnum]);

$conf[index_left]=explode(",",$conf[index_left]);
$conf[index_right]=explode(",",$conf[index_right]);

//ͷ������ 
$head_menu=unserialize($conf[head_menu]);
foreach($head_menu as $key=>$arr){
	if(!$arr[ifshow]){continue;}
	if(!preg_match("/http/i",$arr[url])){
		$arr[url]=str_replace("homepage.php","",$arr[url]).'&uid='.$uid;
	}else{
	$arr[target]='_blank';
	}
	$h_menu[$key]=$arr;
}

//SEO
$titleDB[title]			= $conf['metatitle']?$conf['metatitle']:filtrate(strip_tags($rsdb['title']));
$titleDB[keywords]		= $conf['metakeywords']?$conf['metakeywords']:filtrate(strip_tags($webdb['SEO_keywords']));
$titleDB[description]	= $conf['metadescription']?$conf['metadescription']:strip_tags($webdb['SEO_description']);


//�ÿ�
if($lfjuid)
{
	if($lfjuid!=$conf[uid]){
		$conf[visitor]="{$lfjuid}\t{$lfjid}\t{$timestamp}\r\n$conf[visitor]";
	}
}
else
{
	$conf[visitor]="0\t{$onlineip}\t{$timestamp}\r\n$conf[visitor]";
}
$detail=explode("\r\n",$conf[visitor]);
foreach( $detail AS $key=>$value)
{
	if($key>0&&(strstr($value,"{$lfjuid}\t{$lfjid}\t")||strstr($value,"0\t$onlineip")))
	{
		unset($detail[$key]);
	}
	if($key>20||!$value)
	{
		unset($detail[$key]);
	}
}
$conf[visitor]=implode("\r\n",$detail);

$db->query("UPDATE {$_pre}home SET hits=hits+1,visitor='$conf[visitor]' WHERE uid='$uid' ");
$db->query("UPDATE {$_pre}company  set hits=hits+1,lastview='$timestamp' WHERE uid='$uid'");

//���

require(get_homepage_tpl("head"));
require(get_homepage_tpl("main"));
require(get_homepage_tpl("foot"));
$content=ob_get_contents();


$content=replace_seo($content,$titleDB);

$content=str_replace(array('<!---->','<!--include','include-->','?&'),array('','','','?'),$content);
													
if($webdb[RewriteUrl]==1){	//α��̬����
	rewrite_url($content);
	$content=preg_replace('/href=("|\')(\?|homepage\.php)([=&0-9a-z]+)("|\')/eis','home_url_replace("\\3",1)',$content);
	$content=preg_replace('/window.location=\'(\?|homepage\.php)([^\']+)\'\+this\.options\[this\.selectedIndex\]\.value/eis','home_url_replace("\\2",2)',$content);
	if(strstr($WEBURL,'/home/')){	//����homeĿ¼��linux�������ﲻ��ʹ��α��̬�����
		header("location:".preg_replace('/\/home\/(index\.php|)\?uid=([\d]+)/','/hy/homepage-htm-uid-\\2.html',$WEBURL));
		exit;
	}
}
ob_end_clean();
echo $content;
?>