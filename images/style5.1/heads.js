var MySiteDomain = $("#MySiteDomain").html();
$('#MainSearch')[0].action= MySiteDomain+"/f/search.php?action=search";
$("#MainSearch .keyword input")[0].name="keyword";
$("#MainSearch .ListType li:eq(1)").addClass("ck");
$("#MainSearch .ListType li").click(function(){
	var selectword = $(this).html();
	var searchdir = "";
	if(selectword.indexOf('��Ѷ')!=-1) searchdir = 'news';
	else if(selectword.indexOf('����')!=-1) searchdir = 'f';
	else if(selectword.indexOf('�̳�')!=-1) searchdir = 'shop';
	else if(selectword.indexOf('�̼�')!=-1) searchdir = 'hy';
	else if(selectword.indexOf('�')!=-1) searchdir = 'tg';
	else if(selectword.indexOf('����')!=-1) searchdir = "coupon";
	else if(selectword.indexOf('��Ƹ')!=-1) searchdir = "hr";
	else if(selectword.indexOf('�Ź�')!=-1) searchdir = "shoptg";
	else if(selectword.indexOf('����')!=-1) searchdir = "house";
	else if(selectword.indexOf('����')!=-1) searchdir = "dianping";
	else if(selectword.indexOf('����')!=-1) searchdir = "2shou";
	else searchdir = "f";
	if(selectword.indexOf('�ٶ�')!=-1){
		$('#MainSearch')[0].action="http://www.baidu.com/baidu?tn=bds&cl=3";
		$("#MainSearch .keyword input")[0].name="word";
		$('#MainSearch')[0].method="";
	}else{
		$('#MainSearch')[0].action= MySiteDomain+"/"+searchdir+"/search.php?action=search";
		$("#MainSearch .keyword input")[0].name="keyword";
		$('#MainSearch')[0].method="post";
	}
	
	$("#MainSearch .ListType li").removeClass("ck");
	$(this).addClass("ck");
});	
$("#MainSearch .ListType li").mouseover(function(){
	$("#MainSearch .ListType li").removeClass("over");
	$(this).addClass("over");
});
$("#MainSearch .ListType").mouseout(function(){
	$("#MainSearch .ListType li").removeClass("over");		
});
$("#MainSearch .keyword input").click(function(){
	$(this).val("");
});
$("#MainSearch").submit(function(){
	if($("#MainSearch .keyword input").val() ==""){
		alert('�ؼ��ֲ���Ϊ��!');
		return false;
	}
});
/*$(function(){
	$(".wrap").mouseover(function(){
		$("#MainSearch .ListType").hide();
	});	   
});*/


$(".MenuCont .ListMenu dl").each(function(){
	if(($(this).attr('class'))=='ck'){
		var cknum = $(this).index()+1;	
		$(".MenuCont .ListMenu dl:eq("+cknum+")").addClass("no");
	}		
});
$(".MenuCont .ListMenu dd").hide();
$(".MenuCont .ListMenu dl").hover(								  
	function(){
		$(this).children("dd").show(200);
		//$(this).children("dd").css({"opacity":"0.9","filter":"alpha(Opacity=90)"});
		$(this).addClass("over");	
		//var cknums = $(this).index()+1;
		//$(".MenuCont .ListMenu dl:eq("+cknums+")").addClass("no");
	},
	function(){
		$(this).children("dd").hide(200);
		$(this).removeClass("over");
		//var cknums = $(this).index()+1;
		//$(".MenuCont .ListMenu dl:eq("+cknums+")").removeClass("no");
	}
);
$(".MenuCont .ListMenu dl dd ul li").hover(
	function(){$(this).addClass("over1");	},
	function(){$(this).removeClass("over1");	}
);
$(".MenuCont .ListMenu dl:first").addClass("no");

$(".MenuCont .menu li").mouseover(function(){
	$(".MenuCont .menu li").removeClass("over");
	$(this).addClass("over");
});
$(".MenuCont .menu li").mouseout(function(){
	$(".MenuCont .menu li").removeClass("over");
});	
$(".MenuCont .menu li").each(function(){
	if(($(this).attr('class'))=='ck'){
		var cknum = $(this).index()+1;	
		$(".MenuCont .menu li:eq("+cknum+")").addClass("no");
	}		
});
$(".MenuCont .menu li:eq(0)").addClass("no");
