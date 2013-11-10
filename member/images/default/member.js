$(function(){
	$(".ShowMenu dl dt").click(function(){
		$(this).parent("dl").toggleClass("show");
	});
	$(".showall").click(function(){
		$(".ShowMenu dl").addClass("show");
	});
	$(".hideall").click(function(){
		$(".ShowMenu dl").removeClass("show");
	});
	
	var myclock=qb_time();
	$(".ShowSiteTime").html(myclock);
});

function SetWinHeight(obj){
	var win=obj;
	if (document.getElementById){
		if (win && !window.opera){
			if (win.contentDocument && win.contentDocument.body.offsetHeight)
				win.height = win.contentDocument.body.offsetHeight;
			else if(win.Document && win.Document.body.scrollHeight)
				win.height = win.Document.body.scrollHeight;
		}
	}
}
function qb_time(){ 
	var Digital=new Date();
	var hours=Digital.getHours();
	var minutes=Digital.getMinutes();
	var seconds=Digital.getSeconds();
	var year=Digital.getFullYear();
	var month=Digital.getMonth()+1; 
	var day=Digital.getDate();	
	if(month<=9) month="0"+month;
	if(day<=9) day="0"+day;
	if(minutes<=9) minutes="0"+minutes;
	if(seconds<=9) seconds="0"+seconds ;
	var myclock="当前时间: "+year+"-"+month+"-"+day+" "+hours+":"+minutes+":"+seconds;
	$(".ShowSiteTime").html(myclock);
	setTimeout("qb_time()",1000) 
}

 