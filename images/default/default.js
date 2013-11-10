var AJAX={
	http_request:false,
	DivObj:null,
	waitstate:null,
	success:null,
	get:function (divid,url) {
		AJAX.http_request = false;
		if(divid!=null)AJAX.DivObj = document.getElementById(divid);
		if(window.XMLHttpRequest) { //Mozilla �����
			AJAX.http_request = new XMLHttpRequest();
			if (AJAX.http_request.overrideMimeType) {//����MiME���
				AJAX.http_request.overrideMimeType('text/xml');
			}
		}else if (window.ActiveXObject) { // IE�����
			try {
				AJAX.http_request = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					AJAX.http_request = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {}
			}
		}
		if (!AJAX.http_request) {
			window.alert("���ܴ���XMLHttpRequest����ʵ��.");
			return false;
		}
		AJAX.http_request.onreadystatechange = AJAX.processRequest;
		AJAX.http_request.open("GET", url+"&"+Math.random(), true);
		AJAX.http_request.send(null);
	},
	post:function (divid,url,postvalue) {
		AJAX.http_request = false;
		if(divid!=null)AJAX.DivObj = document.getElementById(divid);
		if(window.XMLHttpRequest) { //Mozilla �����
			AJAX.http_request = new XMLHttpRequest();
			if (AJAX.http_request.overrideMimeType) {//����MiME���
				AJAX.http_request.overrideMimeType('text/xml');
			}
		}else if (window.ActiveXObject) { // IE�����
			try {
				AJAX.http_request = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					AJAX.http_request = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {}
			}
		}
		if (!AJAX.http_request) {
			window.alert("���ܴ���XMLHttpRequest����ʵ��.");
			return false;
		}
		AJAX.http_request.onreadystatechange = AJAX.processRequest;
		AJAX.http_request.open("POST", url+"&"+Math , true);
		AJAX.http_request.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		AJAX.http_request.send(postvalue);
	},
    processRequest:function () {
        if (AJAX.http_request.readyState == 4) {
            if (AJAX.http_request.status == 200) {
				if(AJAX.DivObj!=null){
					AJAX.DivObj.innerHTML=AJAX.http_request.responseText;
				}
            } else {
                alert("���������ҳ�����쳣��");
            }
        }else{
			if(AJAX.DivObj!=null){
				AJAX.DivObj.innerHTML='��ȴ�...';
			}
		}
    }
}

//����makesmallpic������Ҫɾ��,�벻Ҫ��ʹ��
function makesmallpic(obj,w,h){
	var srcImage = new Image();
	srcImage.src=obj.src;
	var srcW=srcImage.width;		
	var srcH=srcImage.height;

	if (srcW==0)
	{
		obj.src=srcImage.src;
		srcImage.src=obj.src;
		var srcW=srcImage.width;		
		var srcH=srcImage.height;
	}
	if (srcH==0)
	{
		obj.src=srcImage.src;
		srcImage.src=obj.src;
		var srcW=srcImage.width;		
		var srcH=srcImage.height;
	}

	if(srcW>srcH){
		if(srcW>w){
			obj.width=newW=w;
			obj.height=newH=(w/srcW)*srcH;
		}else{
			obj.width=newW=srcW;
			obj.height=newH=srcH;
		}
	}else{
		if(srcH>h){
			obj.height=newH=h;
			obj.width=newW=(h/srcH)*srcW;
		}else{
			obj.width=newW=srcW;
			obj.height=newH=srcH;
		}
	}
	if(newW>w){
		obj.width=w;
		obj.height=newH*(w/newW);
	}else if(newH>h){
		obj.height=h;
		obj.width=newW*(h/newH);
	}
}



/***
*����*
****/
var limitTime=null;

function quotecomment(oo){
	document.getElementById("comment_content").value=oo;
	document.getElementById("comment_content").focus();
}

function limitComment(){
	limitTime=limitTime-1;
	if(limitTime>0){
		document.getElementById("comment_content").value='��ʣ'+limitTime+'��,��ſ����ٷ�������';
		document.getElementById("comment_content").disabled=true;
		document.getElementById("comment_submit").disabled=true;
		setTimeout("limitComment()",1000);
	}else if(limitTime==0){
		document.getElementById("comment_content").value='';
		document.getElementById("comment_content").disabled=false;
		document.getElementById("comment_submit").disabled=false;
	}
	
}
//�ɰ����Ҫ�õ�
function postcomment(thisurl,yzimgnum){
	var yzimgstr='';
	//if(yzimgnum=='1'){
	if(document.getElementById("yzImgNum")!=null){
		yzimgstr+="&yzimg="+ document.getElementById("yzImgNum").value;
	}
	if(document.getElementById("commentface")!=null){
		yzimgstr+="&commentface="+ document.getElementById("commentface").value;
	}
	username4 = document.getElementById("comment_username").value;
	content4 = document.getElementById("comment_content").value;
	if(content4==''){
		alert("���ݲ���Ϊ��");
		return false;
	}
	content4=content4.replace(/(\n)/g,"@@br@@");
	//document.getElementById("comment_content").value='';
	//document.getElementById("comment_content").disabled=true;
	limitTime=10;
	limitComment();
	
	AJAX.get("comment",thisurl + "&username=" + username4 + "&content=" + content4 + yzimgstr);
	//if(yzimgnum=='1'){
	if(document.getElementById("yzImgNum")!=null){
		//document.getElementById("yz_Img").src;
		document.getElementById("yzImgNum").value='';
	}
}

function getcomment(thisurl){
	AJAX.get("comment",thisurl,1);
}

/***
*���߲���*
****/
var clickEdit={
	showSonId:null,
	showObjWidth:0,
	showObjHeight:0,
	topObj:null,
	init:function(){
		oo=document.body.getElementsByTagName("A");
		for(var i=0;i<oo.length;i++){
			if(oo[i].getAttribute("editurl")!=null){				
				if(oo[i].getAttribute("click")=="1"){
					if(oo[i].getAttribute("href")=="#")oo[i].href='javascript:';
					if (document.all) { //For IE
						oo[i].attachEvent("onmousedown",clickEdit.showdiv);
						oo[i].attachEvent("onmouseover",clickEdit.showstyle);
						oo[i].attachEvent("onmouseout",clickEdit.hidestyle);
					}else{ //For Mozilla
						oo[i].addEventListener("mousedown",clickEdit.showdiv,true);
						oo[i].addEventListener("mouseover",clickEdit.showstyle,true);
						oo[i].addEventListener("mouseout",clickEdit.hidestyle,true);
					}
				}else{
					if (document.all) { //For IE
						oo[i].attachEvent("onmouseover",clickEdit.showdiv);
					}else{ //For Mozilla
						oo[i].addEventListener("mouseover",clickEdit.showdiv,true);
					}
				}				
			}else if(oo[i].getAttribute("editcode")!=null){
				if (oo[i].getAttribute("click")=="1"){				
					if (document.all) { //For IE
						oo[i].attachEvent("onmousedown",clickEdit.showcode);
						oo[i].attachEvent("onmouseover",clickEdit.showstyle);
						oo[i].attachEvent("onmouseout",clickEdit.hidestyle);
					}else{ //For Mozilla
						oo[i].addEventListener("mousedown",clickEdit.showcode,true);
						oo[i].addEventListener("mouseover",clickEdit.showstyle,true);
						oo[i].addEventListener("mouseout",clickEdit.hidestyle,true);
					}
				}else{
					if (document.all) { //For IE
						oo[i].attachEvent("onmouseover",clickEdit.showcode);
					}else{ //For Mozilla
						oo[i].addEventListener("mouseover",clickEdit.showcode,true);
					}
				}
			}
		}
	},
	getposition:function(o){
		var to=new Object();
		to.left=to.right=to.top=to.bottom=0;
		var twidth=o.offsetWidth;
		var theight=o.offsetHeight;
		if(document.all){
			//to.left+=o.offsetParent.offsetLeft;
			//to.top+=o.offsetParent.offsetTop;
		}
		while(o!=document.body){
			to.left+=o.offsetLeft;
			to.top+=o.offsetTop;
			o=o.offsetParent;
		}
		to.right=to.left+twidth;
		to.bottom=to.top+theight+1;
		return to;
	},
	showstyle:function(evt){
		var evt = (evt) ? evt : ((window.event) ? window.event : "");
		if (evt) {
			 ao = (evt.target) ? evt.target : evt.srcElement;
		}
		ao.style.border='1px dotted red';
		ao.style.cursor='pointer';
	},
	hidestyle:function(evt){
		var evt = (evt) ? evt : ((window.event) ? window.event : "");
		if (evt) {
			 ao = (evt.target) ? evt.target : evt.srcElement;
		}
		ao.style.border='0px dotted red';
	},
	showcode:function(evt){
		var evt = (evt) ? evt : ((window.event) ? window.event : "");
		if (evt) {
			 ao = (evt.target) ? evt.target : evt.srcElement;
		}
		ao.style.cursor='pointer';
		clickEdit.topObj = ao;
		position=clickEdit.getposition(ao);	//��ȡ����
		thiscode = ao.getAttribute("editcode");
		thiscode = thiscode.length>1 ? thiscode : $(ao).next().html();
		clickEdit.showSonId = DivId = "clickEdit_"+position.bottom+position.left;
		obj=document.getElementById(DivId);
		if(obj==null){
			obj=document.createElement("div");
			obj.className="AjaxEditDiv"+ao.className;
			obj.innerHTML='<div id="AjaxEditTable" class="AjaxEditTable"><div id="'+DivId+'"></div></div>';
			obj.style.Zindex='9990';
			obj.style.display='none';	//�������Ļ�,�Ͱ�����ɾ����,ֱ������ʾ,�ټ�����������
			obj.style.position='absolute';
			obj.style.top=position.bottom+'px';
			obj.style.left=position.left+'px';
			document.body.appendChild(obj);
			$("#"+DivId).html(thiscode);				
			if($(ao).width()>clickEdit.getparent(DivId).width()){
				clickEdit.getparent(DivId).css("width",$(ao).width()+"px");
			}				
			clickEdit.autohide(ao);
		}else{
			//�������Ŵ��ں�,Ҫ���¶�λ
			clickEdit.getparent(DivId).css({"left":position.left+'px',"top":position.bottom+'px'});
			clickEdit.autohide(ao);
		}
		clickEdit.getparent(DivId).show();
	},
	showdiv:function(evt){
		var evt = (evt) ? evt : ((window.event) ? window.event : "");
		if (evt) {
			 ao = (evt.target) ? evt.target : evt.srcElement;
		}
		ao.style.cursor='pointer';
		clickEdit.topObj = ao;
		position=clickEdit.getposition(ao);	//��ȡ����
		thisurl=ao.getAttribute("editurl");
		oid=thisurl.replace(/(\.|=|\?|&|\\|\/|:)/g,"_");
		ao.id = oid;
		clickEdit.showSonId = DivId = "clickEdit_"+oid;
		thisurl=thisurl + "&TagId=" + oid;
		obj=document.getElementById(DivId);
		if(obj==null){
			obj=document.createElement("div");
			obj.className="AjaxEditDiv"+ao.className;
			//obj.innerHTML='<table border="0" cellspacing="0" cellpadding="0" id="AjaxEditTable" class="AjaxEditTable"><tr><td class="head"><span onclick="clickEdit.cancel(\''+DivId+'\')">�ر�</span></td></tr><tr> <td class="middle"></td></tr></table>';
			//objs=obj.getElementsByTagName("TD");
			//objs[1].id=DivId;
			obj.innerHTML='<div id="AjaxEditTable" class="AjaxEditTable"><div id="'+DivId+'"></div></div>';
			obj.style.Zindex='9990';
			obj.style.display='none';	//�������Ļ�,�Ͱ�����ɾ����,ֱ������ʾ,�ټ�����������
			obj.style.position='absolute';
			obj.style.top=position.bottom+'px';
			obj.style.left=position.left+'px';
			//obj.style.height='100px';
			//obj.style.width=clickEdit.width+'px';
			document.body.appendChild(obj);
			//clickEdit.getparent(DivId).show("slow");
			//obj.innerHTML='��������ʾ����...';
			$.get(thisurl+(thisurl.indexOf("?")==-1?"?":"&")+Math.random(),function(d){
				if(d.indexOf('���ȵ�¼')!=-1||d==""){
					clickEdit.getparent(DivId).hide();
					document.body.removeChild(obj);
					return ;
				}
				$("#"+DivId).html(d);
				
				if($(ao).width()>clickEdit.getparent(DivId).width()){
					clickEdit.getparent(DivId).css("width",$(ao).width()+"px");
				}
				//
				clickEdit.getparent(DivId).show();
				clickEdit.autohide(ao);
			});
		}else{
			//�������Ŵ��ں�,Ҫ���¶�λ
			clickEdit.getparent(DivId).css({"left":position.left+'px',"top":position.bottom+'px'});
			clickEdit.getparent(DivId).show();
			clickEdit.autohide(ao);
		}
	},
	getparent:function(sonId){
		parentObj = $("#"+sonId).parent().parent();
		return parentObj;
	},
	save:function(oid,job,va){
		divid="clickEdit_"+oid;
		//alert(oid)
		//GET��ʽ�ύ����,����пո�Ļ�.����BUG
		//��ʱ��ʾ,����û�ж��Ƿ񱣴�ɹ�Ҳ��ʾ��
		document.getElementById(oid).innerHTML=va;
		va=va.replace(/(\n)/g,"@BR@");
		AJAX.get(divid,"ajax.php?inc="+job+"&step=2&TagId="+oid+"&va="+va,0);
	},
	cancel:function(sonId){
		clickEdit.getparent(sonId).hide();
	},
	autohide:function(eObj){
		parentObj = clickEdit.getparent(clickEdit.showSonId);
		//Ҫ��ǰ��ֵ,��Ȼ�������ػ���ʾ,�������ߵı仯
		w1 = $(eObj).width();
		w2 = parentObj.width();
		clickEdit.showObjWidth = w1>w2 ? w1 : w2;
		clickEdit.showObjHeight = parentObj.height();
		document.onmousemove = clickEdit.mouseMove;	//��������뿪���صĻ�,�Ͱ�����ɾ����
	},
	mouseMove:function(ev){
		ev = ev || window.event;
		var mousePos = clickEdit.mousePosition(ev);
		var x = mousePos.x;
		var y = mousePos.y;
		parentObj = clickEdit.getparent(clickEdit.showSonId);
		left1 = parseInt(parentObj.css("left"));
		top1 = parseInt(parentObj.css("top"))-$(clickEdit.topObj).height();
		left2 = left1 + clickEdit.showObjWidth ;
		top2 = top1 + clickEdit.showObjHeight+$(clickEdit.topObj).height();
		if ( x<left1 || x>left2 || y<top1 || y>top2){
			clickEdit.cancel(clickEdit.showSonId);
			//document.title=x+"-"+y+" �� "+left1+"-"+left2+" �� "+top1+"-"+top2 + "p��"+ parentObj.height();
		}
	},
	mousePosition:function(ev){	//��ȡ�����������
		if(ev.pageX || ev.pageY){	//FF
			return {x:ev.pageX, y:ev.pageY};
		}
		return {	//IE
			x:ev.clientX + window.document.documentElement.scrollLeft,// - window.document.documentElement.clientLeft,
			y:ev.clientY + window.document.documentElement.scrollTop//  - window.document.documentElement.clientTop
		};
	}
}

//��ʾ����Ŀ
function showSonName(fid)
{
	oo=document.body.getElementsByTagName('DIV');
	for(var i=0;i<oo.length;i++){
		if(oo[i].className=='SonName'+fid){
			if(oo[i].style.display=='none'){
				oo[i].style.display='';
			}
			else
			{
				oo[i].style.display='none';
			}
		}
	}
}

//���ɼ�,����ʹ��
function avoidgather(myname){
	fs=document.body.getElementsByTagName('P');
	for(var i=0;i<fs.length;i++){
		if(myname!=''&&fs[i].className.indexOf(myname)!=-1){
			fs[i].style.display='none';
		}
		
	}
	fs=document.body.getElementsByTagName('DIV');
	for(var i=0;i<fs.length;i++){
		if(myname!=''&&fs[i].className.indexOf(myname)!=-1){
			fs[i].style.display='none';
		}
	}
}

//˫�������ǩ
function dblclick_label(){
	if(/jobs=show$/.test(location.href)){
		if (confirm('���Ƿ�Ҫ�˳���ǩ����')){
			window.location.href=location.href+'abc';
		}
	}else{
		if (confirm('���Ƿ�Ҫ�����ǩ����')){
			thisUrl = location.href; 
			if (/\?/.test(thisUrl)){
				window.location.href=thisUrl+'&jobs=show';
			}else{
				window.location.href=thisUrl+'?jobs=show';
			}
		}
	}
}

//��ȡ��ǰ��վ��URL,����$webdb[www_url]
function getweburl(){
	var url='';
	$("script[src*='default.js']").each(function(){
		var s=this.src;
		if(url=='')url=s.replace(/images\/default\/default\.js/, '');
	});
	return url;
}

//��̬����JS
function load_JS(url){
	var script = document.createElement('script');
	script.onload = script.onreadystatechange = function ()
	{
		if (script && script.readyState && /^(?!(?:loaded|complete)$)/.test(script.readyState)) return;
		script.onload = script.onreadystatechange = null;
		script.src = '';
		script.parentNode.removeChild(script);
		script = null;
	};
	script.charset =  document.charset || document.characterSet;
	script.src = url;
	try {document.getElementsByTagName("head")[0].appendChild(script);} catch (e) {}
}

//���ذٶȱ༭�������JS�ļ�
function loadBaiduEditorJs(){
	if(window.baidu==undefined){
		var url = getweburl();
		document.write('<SCRIPT LANGUAGE="JavaScript" src="'+url+'ewebeditor/baidu/editor_config.php"></SCRIPT>');
		document.write('<SCRIPT LANGUAGE="JavaScript" src="'+url+'ewebeditor/baidu/editor_all.js"></SCRIPT>');
		document.write('<link rel="stylesheet" type="text/css" href="'+url+'ewebeditor/baidu/themes/default/ueditor.css"/>');
	}
}




/*******�ָ�POST�ύ��������*******/
function get_post_cache(){
	var url = getweburl().replace(/^http:\/\/([^\/]+)/g,"");
	
	//���������ʾ�����ɾ��
	if(confirm("�Ƿ���Ҫ�ֹ�����ϵͳ�����Զ���ȫ�����ݣ�"))window.open(url+"do/job.php?job=getpostcache&step=view");
		
	
	var input_name = "";
	$("input[type='text'],textarea").each(function(i){
		input_name += this.name+",";
	});
	$.get(url+"do/job.php?job=getpostcache&input_name="+input_name, function(data){
		if(data=="")return ;
		var ar = data.split("/#@#/");
		for(var i=0;i<ar.length;i++){
			if(ar[i].indexOf("/###/")==-1) continue;
			de=ar[i].split("/###/");
			$("input[name='"+de[0]+"']").val(de[1]);

			$("textarea[name='"+de[0]+"']").val(de[1]);
			if( de[1].indexOf("<")!=-1 && de[1].indexOf(">")!=-1 ){
				if("object" == typeof editor_a){
					editor_a.setContent(de[1]);
				}else if("object" == typeof editor_content){
					editor_content.setContent(de[1]);
				}else if("object" == typeof XHeditor){
					XHeditor.pasteHTML(de[1]);
				}else if("object" == typeof CK_Editor){
					CK_Editor.setData(de[1]);
				}
			}
		}
	});
}
//�Զ��ڱ�����Ӱ�ť
function get_cache_button(ifshow){
	if(ifshow!="1")return ;
	$("form").each(function(i){
		if($(this).find("input[type='text']").size()>2||$(this).find("textarea").size()){
			$(this).find("input[type='submit']").after("��<a href='javascript:get_post_cache()'>���ݻָ�</a>");
		}
	});
}
 





/*******��͸�������ز���*******/
var layer_msg_time;
var layer_msg_divLayer;
function layer_msg_refresh(){
	if (window.document.body.scrollHeight > 0){
		$("#body_layer").css("height",window.document.body.scrollHeight);
	}else{
		$("#body_layer").css("height",window.document.body.clientHeight);
	}
	t_h = navigator.appName != "Microsoft Internet Explorer" ? pageYOffset + innerHeight / 2 -75 : window.document.documentElement.clientHeight / 2 + window.document.documentElement.scrollTop;
	$(layer_msg_divLayer).css("top",t_h);
	$("#body_layer").css("width",window.document.body.clientWidth);
	layer_msg_time = setTimeout( "layer_msg_refresh()" , 10 );
}
function show_layer_msg(MsgTableId){
	if (arguments.length<1){
		alert("��û�д���ID����!");
		return ;
	}
	color=arguments.length>1?arguments[1]:"#333333";
	layer_msg_divLayer = "#"+MsgTableId;
	$("#body_layer").css("height",window.document.body.scrollHeight);
	$("#body_layer").css("width",window.document.body.scrollWidth);
	$("#body_layer").css("display","block");
	$("#body_layer").css("background",color);
	$(layer_msg_divLayer).css("left","50%");
	$(layer_msg_divLayer).css("display","block");
	document.body.oncontextmenu = function(){return false;}
	layer_msg_refresh()
}
function close_layer_msg(){
	document.body.oncontextmenu = function(){return null;}
	clearTimeout(layer_msg_time);
	$("#body_layer").css("display","none");
	$(layer_msg_divLayer).css("display","none");
}
function alert2(msg){
	$("#layer_msg_content").html(msg);
	show_layer_msg("body_msg_layer");
}
document.write('<div id="body_layer" style="display:none;position:absolute;z-index=9999;filter:alpha(opacity=10);opacity:0.1;left:0;top:0;"></div>');
document.write('<div id="body_msg_layer" style="display: none;position:absolute;top:50%;left:50%;z-index=998;"><div style="position:relative;top:-50%;left:-50%;"><table width="400" border="0" cellspacing="0" cellpadding="0" height="115">  <tr>    <td align="center" height="116" bgcolor="#FFFFFF">       <table style="margin-top:12px;margin-bottom:12px;" width="95%" align="center" border="0" cellspacing="0" cellpadding="0" height="89">        <tr>          <td style="border:#32B6CD 1px solid" bgcolor="#F7FBFD" style="vertical-align:middle;">             <table width="100%" border="0" cellspacing="0" cellpadding="0">              <tr>                 <td align="center" ><div id="body_msg_table"><span style="color:#CC3300;font-size:12px;height:28px;font-weight:bold;" id="layer_msg_content">������ʾ��Ϣ</span><br> <br>                 <span style="font-size:12px;"><a href="javascript:" onClick="close_layer_msg()">�ر���ʾ</a></span><div></td>              </tr>            </table>          </td>        </tr>      </table>    </td>  </tr></table></div></div>');