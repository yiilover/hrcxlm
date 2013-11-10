var gotourl = "";
window.onerror=function(){
	if(gotourl!=""){
		//window.location.href=gotourl;
		window.open(gotourl);
		gotourl = "";
	}
	return true;
}

function jumpto(url){
	gotourl=url;
	window.inApk.androidGoto(gotourl);
}