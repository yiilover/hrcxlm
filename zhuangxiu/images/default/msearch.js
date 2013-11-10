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
	if(midword.indexOf('�б���Ϣ')!=-1) midval = 1;
	else if(midword.indexOf('װ��ѧ��')!=-1) midval = 4;
	else if(midword.indexOf('װ�޹�˾')!=-1) midval = 5;
	else if(midword.indexOf('װ�ް���')!=-1) midval = 2;
	else if(midword.indexOf('װ����־')!=-1) midval = 3;
	else if(midword.indexOf('���ʦ')!=-1) midval = 6;
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
		alert("�����������ؼ���");
		$(".modeSearch input:[name='keyword']").focus();
		return false;
	}
}