<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="content-language" content="zh-cn" /><title>易采集器 EasyCollecte - 蓝锂网络</title><link rel="stylesheet" type="text/css" href="__PUBLIC__/Images/style.css" /><script type="text/javascript" src="__PUBLIC__/Js/Jquery/jquery-1.3.2.min.js"></script><script type="text/javascript" src="__PUBLIC__/Js/dialog/dialog.js"></script><script type="text/javascript" src="__PUBLIC__/Js/Ajax/ThinkAjax.js"></script><script type="text/javascript" src="__PUBLIC__/Js/common.js"></script><script language="JavaScript"><!--
	function GatherAll(showresult){
		if(showresult==undefined) showresult=0;
		if(confirm('你确认要启动全部规则的采集吗?')==true) {
			if(showresult==1){
				$.dialog({
					title: "多进程可视化采集(采集任务在后台执行,关闭浏览器不影响) -  <?php echo (C("ECAPP_ENNAME")); echo (C("ECAPP_VER")); ?>",
					content: '__APP__/Gather/index/gatherall/1/runnow/1/showresult/1',
					width: "680px",
					height: "360px",
					lock: true
				});
			}else{
				$('#gatherall0').outerHTML('<a href=\'javascript:;\'><font color=green>后台采集,已运行</font></a>');
			}
		}else{
			return false;
		}
	}	
	function CleanCache(){
	     if(confirm('本操作将清空Runtime目录下所有文件,之后您需要重新输入授权码进行远程认证. 如果您的系统出现错误,您可以尝试执行该操作进行修复,如果正常运行请不要执行该操作,以免影响程序执行效率. 您确认执行此操作吗?')==true)
		ThinkAjax.send('__APP__/Index/CleanCache','ajax=1',CleanCacheComplete,'result');
	}
	function CleanCacheComplete(data,status){
		if (status==1)
		{
			window.setTimeout(function (){window.location.href='__SELF__'},1000);
		}
	}
	
	//--></script></head><body><table width="100%" border="0" cellspacing="1" cellpadding="3" class="tablewidth" align="center"><tr class="head"><td>&nbsp;</td></tr></table><table width='100%' cellspacing='1' cellpadding='3' class="tablewidth"  id="top_menu" align="center" height="32"><tr><td style="padding-left:5px;"><a href="__APP__/Index/index">采集规则列表</a></td><td><a href="__APP__/Index/ecrule" style="color:blue; font-weight:bold;">添加新规则</a></td><td><a href="__APP__/Index/ImportRule">导入采集规则</a></td><td><a href="__APP__/Index/ecsort">规则分类管理</a></td><td><a href="__APP__/Index/eclog">采集日志</a></td><td><a  href="javascript:;" onclick="GatherAll(1)" style="color:blue; font-weight:bold;">采集全部</a></td><td><a href="__APP__/Update" title="蓝锂官方站获取程序更新" style="color:red; font-weight:bold; width:130px;">授权中心/在线升级</a></td></tr><tr><td style="padding-left:5px;"><a href="__APP__/Index/cconfig">全局参数配置</a></td><td><a href="__APP__/Index/autotask" style="color:blue; font-weight:bold;">定时任务管理</a></td><td><a href="__APP__/Seo/seow" style="color:blue; font-weight:bold;">SEO词库管理</a></td><td><a href="__APP__/Seo/seol" style="color:blue; font-weight:bold;">SEO内链设置</a></td><td><a href="__APP__/Seo/seop" style="color:blue; font-weight:bold;">SEO段落库</a></td><td><a href="javascript:;" onclick="CleanCache()" title="本操作将清空Runtime目录下所有文件,之后您需要重新授权" style="color:blue; font-weight:bold;">清空缓存</a></td><td><a href="__APP__/Index/help" title="帮助中心,技术教程" style="color:blue; font-weight:bold; width:130px;">帮助中心</a></td></tr></table><script language="javascript"><!--
	function LaneLeadVerify(){
		if(!$('#username').val()) {
			$('#username').focus();  
			contnet='<span class="errorTip">请输入您在蓝锂网络注册的用户名!</span>';			
			showfloatTips(contnet);
			return false;
		}	
		if(!$('#authcode').val()) {
			$('#authcode').focus();  
			contnet='<span class="errorTip">请输入您的蓝锂授权码!</span>';			
			showfloatTips(contnet);
			return false;
		}	
		ThinkAjax.sendForm('AuthVerify','__URL__/update/auth/1',AsyComplete,'result','正在提交认证,大约需耗时6s,请耐心等待...');
	}
	function AsyComplete(data,status){
		if (status==1)
		{
			window.setTimeout(function (){window.location.href='__SELF__'},2000);			
		}
	}
	function ShowApptips(){
		$.dialog({
			title: "更新摘要 [<?php echo (todate($ecupdatetime,'Y-m-d H:i')); ?>] -  <?php echo (C("ECAPP_ENNAME")); echo (C("ECAPP_VER")); ?>",
			content: "<div style='color:green; font-weight:bold; font-size:14px; line-height:180%;'><?php echo (($app_tips)?($app_tips):'常规更新,修正部分bug,使程序运行更稳定.'); ?></div><div style='color:green; font-weight:bold; font-size:14px; line-height:180%;'><br>备 注: 这里仅记录本次升级摘要,如果您需要了解详细升级过程,请访问 <a href='http://www.lanelead.com/list-1-1.htm' target='_blank' style='color:red; font-weight:bold; font-size:14px; line-height:180%;'>蓝锂产品中心</a> 查看.</div>",
			width: "80%",
			height: "80%",
			lock: true
		});
	}	
	function ECUpdate(){
		if(confirm('升级前请备份您的程序文件和数据库,您确认继续执行自动更新吗?')==true)
		ThinkAjax.sendForm('AuthVerify','__URL__/update',AsyComplete,'result','正在提交认证,大约需耗时6s,请耐心等待...');
	}
	
	function UpdateKey(){
		$.dialog({
			title: "授权升级 [<?php echo (todate($ecupdatetime,'Y-m-d H:i')); ?>] -  <?php echo (C("ECAPP_ENNAME")); echo (C("ECAPP_VER")); ?>",
			content: "<span style='color:green; font-weight:bold; font-size:14px; line-height:180%;'><P>首先感谢您对蓝锂网络的大力支持！以下为蓝锂授权码升级步骤：</P><P>1、进入蓝锂官方 -&gt; <a href='http://www.lanelead.com/list.php?fid=8&authcode=<?php echo ($authcode); ?>&username=<?php echo ($username); ?>' target='_blank'><FONT color=#ff0000>授权中心</font></a> &nbsp;，选定您要授权的模块，根据提示进行在线付款，<FONT color=#ff0000><STRONG>新授权码会发送至您的eamil中</STRONG></FONT>。</P><P>2、登录您的采集器后台界面，点击“<FONT color=#ff0000><STRONG>清空缓存</STRONG></FONT>”，然后输入您刚刚获取的新的蓝锂授权码，完成授权升级。</P><P>&nbsp;</P><P><a href='http://www.lanelead.com/list.php?fid=8&authcode=<?php echo ($authcode); ?>&username=<?php echo ($username); ?>' target='_blank'><STRONG><FONT color=#ff0000><SPAN style='FONT-SIZE: 18px'>点击进入授权码升级界面</SPAN></FONT></STRONG></a></P></span>",
			width: "660px",
			height: "60%",
			lock: true
		});
	}	
	function ChangeKey(){
		$.dialog({
			title: "更换授权域名 [<?php echo (todate($ecupdatetime,'Y-m-d H:i')); ?>] -  <?php echo (C("ECAPP_ENNAME")); echo (C("ECAPP_VER")); ?>",
			content: "<span style='color:green; font-weight:bold; font-size:14px; line-height:180%;'><P>首先感谢您对蓝锂网络的大力支持！原则上不提供域名更换服务，不过考虑到站长运营的实际需要，我们提供一次免费的授权更换服务，前提是域名主体是同一个人或单位。以下为更换授权域名的步骤：</P><P>1、将原域名证书和新域名证书（电子图片，请在您的域名管理中心获取）发送至 admin@lanelead.com ，邮件主题为：XXX更换授权域名 。</P><P>2、通过QQ（570713592 或 1668142999）或者电话（13884867561）联系蓝锂授权人员进行手工修改授权域名，并告知您新的授权码。然后登录采集器管理界面，执行“清空缓存”，重新输入新的授权码即可。</P></span>",
			width: "660px",
			height: "60%",
			lock: true
		});
	}	
	
 //--></script><form name="AuthVerify" id="AuthVerify" method="post" action="__URL__/update" style="margin:0; padding:0;"><?php if($auth): ?><table width='100%' cellspacing='1' cellpadding='3' class="tablewidth" align="center"><tr class="head8"><td width="120">蓝锂通行证</td><td width="60">蓝锂产品</td><td width="120">授权域名</td><td width="60">授权类型</td><td width="">授权有效期</td><td width="80">授权操作</td></tr><tr class="head7"><td><?php echo (C("username")); ?></td><td><?php echo (C("ECAPP_ENNAME")); ?><br><?php echo (C("ECAPP_VER")); ?></td><td><?php echo (C("domain")); ?></td><td><?php if(C('vip_id') || C('authtype')==1) { echo '
            <p style="color:red;font-weight:bold">VIP商业版</p>            '; }elseif(C('authtype')==2){ echo '
            <p style="color:blue;">试用版</p>            '; }else{ echo '
            <p>免费版</p>            '; } if(C('iflock')) echo '
            <p style="color:red;">已被锁定</p>            '; ?></td><td><p style="color:red;font-weight:bold"><?php echo (todate(C("begintime"),'Y-m-d H:i')); ?> - <?php echo (todate(C("endtime"),'Y-m-d H:i')); ?></p></td><td><p><a href="javascript:;" onclick="UpdateKey()" style="color:green; font-weight:bold; font-size:14px;">授权升级</a></p><p><a href="javascript:;" onclick="ChangeKey()" style="color:green; font-weight:bold; font-size:14px;">更换域名</a></p></td></tr><tr class="head6"><td><div style="color:blue; font-weight:bold; font-size:16px; text-align:center; padding:6px 0;">授权功能模块</div></td><td colspan="5"><?php $Marray = C('Marray'); foreach($Marray AS $mkey=>$mname){ $show1 .= $mname.' &nbsp; '; } $Marray = C('powerdb'); foreach($Marray AS $mkey=>$mname){ $show2 .= "<span style='color:red; font-size:14px; font-weight:bold;'>$mname</span> &nbsp; "; } ?><p style="font-size:14px;"><?php echo ($show1); ?></p><p><?php echo ($show2); ?></p></td></tr><tr class="head7"><td colspan="6" style="background:#FFCC00" height="88"><?php if($ecupdatetime > $updatetime): ?><p style="font-size:16px;">检测到服务器有新版本,更新日期: <span style="font-size:16px;color:blue; padding-right:16px; padding-left:6px;"><?php echo (todate($ecupdatetime,'Y-m-d H:i')); ?></span> 【 <a href="javascript:;" style="color:green; font-weight:bold; font-size:16px;" onclick="ECUpdate()">点击自动升级(推荐)</a> 】 &nbsp; &nbsp; 【 <a href="javascript:;" style="color:green; font-weight:bold; font-size:16px;" onclick="ShowApptips()">查看更新说明</a> 】</p><p style="font-size:14px;color:red;"> 提 醒：执行升级前,请自行备份您的程序文件和数据库!</p><?php else: ?><p style="font-size:24px; color:green; font-weight:bold;">您的系统为最新版本,无需升级.</p><?php endif; ?></td></tr></table><?php else: ?><div class="result" style="margin:8px auto; width:96%; text-align:left; ">提示:系统无法获取您的蓝锂授权码! 可能的原因: <br>      1.您首次使用蓝锂产品. <br>      2.您删除了蓝锂系统目录下的Runtime目录中的某些文件(该目录中为系统缓存文件,可以大大提升系统性能,正常运行时请勿删除).
      <p style="color:blue;letter-spacing:1px;"> 请在下面输入您的授权码信息,以便您能正常使用蓝锂网络提供的产品.感谢您对蓝锂网络的支持. </p></div><table cellspacing='1' cellpadding='3' class="tablewidth" align="center"><tr><td colspan="2"></td></tr><tr><td width="18%" class="f14">蓝锂网络会员名：</td><td><input type="text" name="username" id="username" value="<?php echo ($username); ?>" style="line-height:18px; height:18px; font-size:14px; color:blue; font-weight:bold; width:200px;"></td></tr><tr><td class="f14">蓝锂授权码：</td><td><textarea name="authcode" id="authcode" rows="2" style="line-height:240%; font-size:16px; color:blue; font-weight:bold;"><?php echo ($authcode); ?></textarea></td></tr><tr><td></td><td><input type="button" name="Submit" value="提交授权认证" onClick="LaneLeadVerify()" style=" height:26px;padding:5px; font-size:14px; font-weight:bold;"><span class="blank2">( 提示：使用蓝锂产品必须先免费注册为蓝锂会员.  &nbsp; <a href="http://bbs.lanelead.com/member.php?mod=register" target="_blank">点击免费注册</a> ) </span></td></tr></table><?php endif; ?></form><table width="100%" border="0"  cellpadding="3" cellspacing="1" class="tablewidth" align="center"><tr class="head"><td><div align="left">注意事项:</div></td></tr><tr><td><p> 1、初次使用或者更新了授权(升级授权或更换域名等),需要重新提交认证,您可以根据提示输入email接收的授权码.</p><p> 2、<font color="#FF0000">正常使用期间,请勿修改核心文件,否则会导致程序无法运行。</font></p><p> 3、无论免费版还是VIP商业版,均可免费使用在线更新功能,<font color="#FF0000"> 前提是您是通过蓝锂官方获取的正版授权码</font>.如果您还没有授权码, <a href="http://www.lanelead.com/list.php?fid=8" target="_blank" style="color:blue; font-size:14px; font-weight:bold;">点击获取</a>. </p></td></tr></table><table width="100%" border="0" class="tablewidth" cellspacing="1" cellpadding="3" align="center"><tr class="head"><td width="25%"><CENTER><a href="http://www.lanelead.com" target="_blank">蓝锂官方网站</a></CENTER></td><td width="50%"><CENTER>        Powered by <a href="http://www.lanelead.com">LaneLead.COM</a> &copy; 2010 -
        <script language="javascript">var myDate = new Date();document.write(myDate.getFullYear());</script></CENTER></td><td width="25%"><CENTER><a href="http://bbs.lanelead.com" target="_blank">蓝锂技术论坛</a></CENTER></td></tr></table><div style='display:none;'><iframe src='about:blank' name="dohtml"  id="dohtml" width=0 height=0></iframe></div></body></html>