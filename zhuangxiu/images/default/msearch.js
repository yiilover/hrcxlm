$(".modemenu li").each(function () {
	$(this).addClass("li"+$(this).index());
});
$(".modeSearch .listtype").hide();
$(".modeSearch .showtype").click(function(){
	$(".modeSearch .listtype").show();
});
$(".modeSearch .listtype li span").click(function(){
	var midword = $(this).html();
	$(".modeSearch .showtype span").html(midword);
	$(".modeSearch .listtype").hide();
	var midval = "";
	if(midword.indexOf('招标信息')!=-1) midval = 1;
	else if(midword.indexOf('装修学堂')!=-1) midval = 4;
	else if(midword.indexOf('装修公司')!=-1) midval = 5;
	else if(midword.indexOf('装修案例')!=-1) midval = 2;
	else if(midword.indexOf('装修日志')!=-1) midval = 3;
	else if(midword.indexOf('设计师')!=-1) midval = 6;
	$(".modeSearch input:[name='mid']").val(midval);
	$(".modeSearch .listtype li span").removeClass("ck");
	$(this).addClass("ck");
});
$(".modeSearch .listtype li span").mouseover(function(){
	$(".modeSearch .listtype li span").removeClass("over");
	$(this).addClass("over");
});
$(".modeSearch .listtype").mouseout(function(){
	$(".modeSearch .listtype li span").removeClass("over");		
});
function check_keyword(){
	var mkeywords = $(".modeSearch input:[name='keyword']").val();
	if(mkeywords==""){
		alert("请输入搜索关键字");
		$(".modeSearch input:[name='keyword']").focus();
		return false;
	}
}