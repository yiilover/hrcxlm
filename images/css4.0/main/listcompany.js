var companynum = $("#ListCompany").children().length;
var startnum = 0;
var shownums = 6;
function showtypes(){
	for(var i=0;i<companynum;i++){
		if(i>=startnum && i<shownums)
		$("#ListCompany li:eq("+i+")").show();
		else
		$("#ListCompany li:eq("+i+")").hide();
	}
	if(startnum ==0)
	$("#upcompany span").addClass("ck");
	else
	$("#upcompany span").removeClass("ck");
	if(shownums ==companynum)
	$("#downcompany span").addClass("ck");
	else
	$("#downcompany span").removeClass("ck");
}
function downshows(){
	startnum++;
	shownums++;
	if(shownums>companynum){		
		startnum--;
		shownums--;
		return false;
	}
}
function upshows(){
	startnum--;
	shownums--;
	if(startnum<0){		
		startnum++;
		shownums++;
		return false;
	}
}
$("#downcompany").click(function(){
	downshows();
	showtypes();
});
$("#upcompany").click(function(){
	upshows();
	showtypes();
});
showtypes();