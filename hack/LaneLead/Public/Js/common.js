////屏蔽可忽略的js脚本错误
//function killErr(){
//	return true;
//}
//window.onerror=killErr;
var CommonJs = document.getElementsByTagName('script');
CommonJsPath = CommonJs[CommonJs.length - 1].src.substring(0, CommonJs[CommonJs.length - 1].src.lastIndexOf("/") + 1);
//JQuery扩展
jQuery.fn.outerHTML = function(s) {
	return (s) ? this.before(s).remove() : jQuery("&lt;p&gt;").append(this.eq(0).clone()).html();
}
//自动载入函数
function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      oldonload();
      func();
    }
  }
}
function get_obj(obj){
   return document.getElementById(obj);
}
//输出/隐藏帮助tips  —— Start
function show_help(di){
	if(document.getElementById(di).style.display==''){
		document.getElementById(di).style.display='none';
	}else{
		document.getElementById(di).style.display='';
	}
}
function get_help(){
	obj=document.body.getElementsByTagName("span");
	for(var i=0;i< obj.length;i++ ){
		if(obj[i].getAttribute("help")=='1'){
			obj[i].className='help';
			obj[i].style.display='none';
			var vid=Math.random()*1000000000000000000;
			obj[i].id='a'+vid;

			obj2=document.createElement("font");
			obj2.innerHTML="<A href=\"javascript:show_help('a'+"+vid+");\" style='margin-left:5px;' title='点击查看更多帮助信息'><img src='"+CommonJsPath+"help_icon.gif' border=0></A>";
			obj[i].parentNode.insertBefore(obj2, obj[i]);
		}
	}
}
addLoadEvent(get_help);
//输出/隐藏帮助tips  —— End

//自动设置input样式
function set_class(){
	obj=document.body.getElementsByTagName("input");
	for(var i=0;i< obj.length;i++ ){
		if(obj[i].type=='submit'||obj[i].type=='button'){
			obj[i].className='submit';
		}else if (obj[i].type=='radio'||obj[i].type=='checkbox'){
			obj[i].style.border='0px;';
		}else if(obj[i].type=='text' || obj[i].type=='password'){
			obj[i].className='input_text';
		}
	}
	obj=document.body.getElementsByTagName("textarea");
	for(var i=0;i< obj.length;i++ ){
		obj[i].className='input_textarea';
	}
}
addLoadEvent(set_class);

//滑动门   —— Start
function prepareshow() {
	if(!document.getElementById("description_head")) return false;
	var description_head = document.getElementById("description_head");
	var description_links = description_head.getElementsByTagName("a");
	for(var i=0; i<description_links.length; i++) {
		var sectionId = description_links[i].getAttribute("href").split("#")[1];
		description_links[i].ment = sectionId;
		description_links[i].onclick = function() {
			showtab(this.ment);
			for(var j=0; j<description_links.length; j++) {
				description_links[j].className = '';
			}
			this.className = 'here';
			return false;
		}
		description_links[i].onmouseover = function() {
			for(var j=0; j<description_links.length; j++) {
				description_links[j].className = '';
			}
			this.className = 'here';
		}
		description_links[i].onmouseout = function() {
			for(var j=0; j<description_links.length; j++) {
				description_links[j].className = '';
			}
			var description_content = document.getElementById("description_content");
			var divs = description_content.getElementsByTagName("div");
			for( var d=0; d<divs.length; d++) {
				if(divs[d].style.display == "block") {
					var theid = divs[d].getAttribute("id");
					for(var k=0; k<description_links.length; k++) {
						description_links[k].className = "";
						if(description_links[k].href.indexOf(theid) != -1) description_links[k].className = 'here';
					}
				}
			}
		}
			
	}
}
function showtab(id) {
	var description_content = document.getElementById("description_content");
	var divs = description_content.getElementsByTagName("div");
	for( var i=0; i<divs.length; i++) {
		divs[i].style.display = "none";
		if (divs[i].getAttribute("id") != id) {			
			divs[i].style.display = "none";
		} 
		else {
			divs[i].style.display = "block";
		}
	}
}
function showfirst() {
	if(!document.getElementById("description_content")) return false;
	var description_content = document.getElementById("description_content"); 
	if(!document.getElementById("description_head")) return false;
	var description_head = document.getElementById("description_head");
	var description_links = description_head.getElementsByTagName("a");
	for(var i=0; i<description_links.length; i++) {
		var sectionId = description_links[i].getAttribute("href").split("#")[1];
		description_links[i].ment = sectionId;
		var now_href = window.location.href;
		var divs = description_content.getElementsByTagName("div");
		if(now_href.indexOf(sectionId) != -1) {
			divs[0].style.display = 'none';
			document.getElementById(sectionId).style.display = 'block';
		} else {
			divs[0].style.display = 'block';
		}
		if(now_href.indexOf(description_links[i].getAttribute("href")) != -1) {
			for(var j=0; j<description_links.length; j++) {
				description_links[j].className = '';
			}
			description_links[i].className = "here";
		}
	}
}
addLoadEvent(showfirst);
addLoadEvent(prepareshow);
//滑动门   —— End

//显示/隐藏    ——  Start
function nav(){
    if(window.navigator.userAgent.indexOf("MSIE")>=1) return 'IE';
    else if(window.navigator.userAgent.indexOf("Firefox")>=1) return 'FF';
    else return "OT";
}
function myObj(oid){
    return document.getElementById(oid);
}
function showHide(objname){
    var obj = myObj(objname);
    if(obj.style.display==null || obj.style.display=='none'){
        if(nav()=='IE') obj.style.display = "block";
        else obj.style.display = "table-row";
    } else {
        obj.style.display = "none";
	 }
}
//显示/隐藏    ——  End

//全选,反选功能 form - 表单名 va - all 全选 空 反选 textname - 指定复选框name部分特征码
function CheckAll(form,va,textname){
	if(va==undefined) va='';
	if(textname==undefined) va='';
	obj='obj = document.'+form;
	eval(obj);
	for (var i=0;i<obj.elements.length;i++){
		var e = obj.elements[i];
		if(textname){
			if (e.name.indexOf(textname)<0) continue;
		}
		if(va=='all'){
			e.checked = true;
		}else{
			e.checked == true ? e.checked = false : e.checked = true;
		}
	}
}

//显示浮动提示窗口 一般用于操作提示
function showfloatTips(tips,wait) {
	if (wait == undefined) wait=3000;
	$.dialog({
		title: "信息操作提示",
		content:'<table><tr><td style="vertical-align:middle;height:50px;">'+tips+'</td></tr></table>',
		lock: false,
		width: "360px",
		height: "70px",
		time: wait
	});
}
//URL表单验证
function checkURL(str){
    if (str.match(/(http[s]?|ftp):\/\/[^\/\.]+?\..+\w$/i) == null) {
        return false
    }
    else {
        return true;
    }
}
//input只能为数字 使用方法：onkeydown="onlyNum();" style="ime-mode:Disabled"
function onlyNum()
{
	if (! ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105) || (event.keyCode == 8) //退格
	|| (event.keyCode == 46) //Del
	|| (event.keyCode == 27) //ESC
	|| (event.keyCode == 37) //左
	|| (event.keyCode == 39) //右
	|| (event.keyCode == 16) //shift
	|| (event.keyCode == 9) //Tab
	)) //考虑小键盘上的数字键 
	event.returnValue = false;
}
//复制代码 方法：onClick="javascript:CopyText(this);"
function CopyText(obj) {
	ie = (document.all)? true:false
	if (ie){
		var rng = document.body.createTextRange();
		rng.moveToElementText(obj);
		rng.scrollIntoView();
		rng.select();
		rng.execCommand("Copy");
		rng.collapse(false);
		alert(obj.innerText+'被复制成功');
	}
}
//根据className显示radio选中区域
function show_radio(radioName){
	var i=1;
	var className = '.'+radioName;
	$('input[name="'+radioName+'"]').each(function(){
			if(this.checked==true){
				$(className+i).show();
			}else{
				$(className+i).hide();
			}
			i++;
	});
}

//增加/删除 input等项目  特定模板使用
function addItem_rcDB(){
	var str='';
	num=Number(document.getElementById('addnum').value);
	num=parseInt(num);
	n=Number(document.getElementById('num_s').value);
	if(n==0) n=1;
	document.getElementById('num_s').value=num+parseInt(n);
	min=parseInt(n);
	max=parseInt(n)+num;
	if(max>30){
		alert("为了保证采集效率,最多支持30个字段的规则定义!");
		return false;
	}			
	for(var i=min;i<max;i++){
		str+='<span id="show_rc_ruleDB' + (i+1) + '">' 
		+'   <p style="margin-bottom:5px;"> 第' + (i+1) + '个字段:'
		+'   <span id="show_mfield' + (i+1) + '"></span>'
		+'   <input type="text" id="mfield' + (i+1) + '" name="rc_ruleDB[' + (i+1) + '][FieldName]" size="15">'
		+'    &nbsp;'
		+'    <input type="checkbox" name="rc_ruleDB[' + (i+1) + '][IsRquired]" value="1">'
		+'     必须采集</p>'
		+'     <textarea name="rc_ruleDB[' + (i+1) + '][FieldRule]" rows="3"></textarea>'
		+'      &nbsp; <a onClick="delItem_rcDB(' + (i+1) + ');" href="javascript:;">删除</a>'
		+'    </span>' ;
		choose_autofields(i+1);
	}
	document.getElementById('moreItem').innerHTML+=str;
}
function delItem_rcDB(i){
	$('#show_rc_ruleDB'+i).remove();
}
