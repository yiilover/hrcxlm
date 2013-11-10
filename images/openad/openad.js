//var adheights = $("#ShowMainAd img").height();
var stoptime = 5000;
$(function(){			
	$(".TopBanner .OpenAd").click(function(){
		ChangeMainAd($("#ShowMainAd"),stoptime);		
	});
	$(".TopBanner .ColseAd").click(function(){
		CloseMainAd($("#ShowMainAd"));	
	});
});
/*var ShowMain_AD_onec = getCookie("ShowMain_AD_onec");
if(ShowMain_AD_onec == null){
	ChangeMainAd($("#ShowMainAd"),stoptime);
	alert(1);
}else{
	alert(2);	
}*/
function ChangeMainAd(objs,stoptime){
	OpenMainAd(objs); 
	objs.oneTime( stoptime , function(){
		CloseMainAd(objs);
	});
	setCookie("ShowMain_AD_onec",1);
}
function OpenMainAd(objs){
	//objs.fadeTo("slow",1);
	//objs.animate({height:heights},"slow");
	objs.slideDown("slow");
	$(".TopBanner .OpenAd").hide("slow");
	$(".TopBanner .ColseAd").show("slow");	
}
function CloseMainAd(objs){
	//objs.fadeTo("slow",0.25);
	//objs.animate({height:0},"slow");
	objs.slideUp("slow");
	$(".TopBanner .OpenAd").show("slow");
	$(".TopBanner .ColseAd").hide("slow");
}

var Mainad = get_roll_cookies('scroll_Mainad');
if (Mainad != 1312451955){
	set_roll_cookies('scroll_Mainad', 1312451955, 24);
	ChangeMainAd($("#ShowMainAd"),stoptime);
}
function get_roll_cookies(name){
	var arr = document.cookie.split("; ");
	for(var i = 0;i < arr.length;i++){
		var temp = arr[i].split("=");
		if(temp[0] == name) return unescape(temp[1]);
	}
}
function set_roll_cookies(name,value,expire_hours){
	var exp_date = new Date();
	exp_date.setHours(exp_date.getHours() + 0 + expire_hours);
	document.cookie = name + "=" +escape(value) + ((expire_hours == null) ? "" : ";expires=" + exp_date.toGMTString()); 
}

