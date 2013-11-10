$(".Mcont51 dl").hover(
	function(){
		$(".Mcont51 dl").css({"z-index":"50"});
		$(this).animate({width:"380px",height:"240px"});
		$(this).find("dt img").css({width:"380px"});
		$(this).css({"z-index":"1000","border":"#FF0 solid 2px"});
		$(".Mcont51 .SpacDiv").css({"z-index":"900","background":"#999"});
	},
	function(){
		var num=$(this).index();
		if(num==1 || num==8){
			$(this).animate({width:"330px",height:"195px"});
			$(this).find("dt img").animate({width:"330px"});
		}else{
			$(this).animate({width:"180px",height:"95px"});
			$(this).find("dt img").animate({width:"180px"});
		}	
		$(".Mcont51 .SpacDiv").css({"z-index":"50","background":"#FFF"});
		$(this).css({"z-index":"100","border":"none"});
	}
);
$(".Mcont52 dl").hover(
	function(){
		var dlheight=$(this).height();
		$(this).find("dd").animate({height:dlheight+"px"});
		$(this).find("dd").css({"line-height":dlheight+"px"});
	},
	function(){
		$(this).find("dd").animate({height:"30px"});
		$(this).find("dd").css({"line-height":"30px"});
	}
);
$(".ShowPhotos dl").hover(
	function(){
		$(".ShowPhotos dl").css({"z-index":"50"});
		$(this).animate({width:"400px",height:"250px"});
		$(this).find("dt img").css({width:"400px"});
		$(this).css({"z-index":"1000","border":"#FF0 solid 2px"});
		$(".ShowPhotos .SpacDiv").css({"z-index":"900","background":"#999"});
	},
	function(){
		var num=$(this).index();
		if(num==1 || num==8){
			$(this).animate({width:"330px",height:"218px"});
			$(this).find("dt img").animate({width:"330px"});
		}else{
			$(this).animate({width:"180px",height:"107px"});
			$(this).find("dt img").animate({width:"180px"});
		}	
		$(".ShowPhotos .SpacDiv").css({"z-index":"50","background":"#FFF"});
		$(this).css({"z-index":"100","border":"none"});
	}
);
/**/
var scrtime;
$("#Tab5").hover(
	function(){
  		clearInterval(scrtime);
	},
	function(){
		scrtime = setInterval(function(){
  			var $ul = $("#Tab5 ul");
  			var liHeight = $ul.find("li:last").height();
  			$ul.animate({marginTop : liHeight +"px"},1000,function(){
  			$ul.find("li:last").prependTo($ul)
  			$ul.find("li:first").hide();
 			 $ul.css({marginTop:0});
  			$ul.find("li:first").fadeIn(1000);
  			});	
		},3000);
	}
).trigger("mouseleave");

var scrtime1;
$("#Tab6").hover(
	function(){
  		clearInterval(scrtime1);
	},
	function(){
		scrtime1 = setInterval(function(){
  			var $ul = $("#Tab6 ul");
  			var liHeight = $ul.find("li:last").height();
  			$ul.animate({marginTop : liHeight +"px"},1000,function(){
  			$ul.find("li:last").prependTo($ul)
  			$ul.find("li:first").hide();
 			 $ul.css({marginTop:0});
  			$ul.find("li:first").fadeIn(1000);
  			});	
		},3000);
	}
).trigger("mouseleave");

var scrtime2;
$("#ThisSiteTg").hover(
	function(){
  		clearInterval(scrtime2);
	},
	function(){
		scrtime2 = setInterval(function(){
  			var $ul = $("#ThisSiteTg ul");
  			var liHeight = $ul.find("li:last").height();
  			$ul.animate({marginTop : liHeight +"px"},1000,function(){
  			$ul.find("li:last").prependTo($ul)
  			$ul.find("li:first").hide();
 			 $ul.css({marginTop:0});
  			$ul.find("li:first").fadeIn(1000);
  			});	
		},3000);
	}
).trigger("mouseleave");

var scrtime3;
$("#Tab25").hover(
	function(){
  		clearInterval(scrtime3);
	},
	function(){
		scrtime3 = setInterval(function(){
  			var $ul = $("#Tab25 ul");
  			var liHeight = $ul.find("li:last").height();
  			$ul.animate({marginTop : liHeight +"px"},1000,function(){
  			$ul.find("li:last").prependTo($ul)
  			$ul.find("li:first").hide();
 			 $ul.css({marginTop:0});
  			$ul.find("li:first").fadeIn(1000);
  			});	
		},3000);
	}
).trigger("mouseleave");
/*
var scrtime4;
$("#Tab26").hover(
	function(){
  		clearInterval(scrtime4);
	},
	function(){
		scrtime4 = setInterval(function(){
  			var $ul = $("#Tab26 ul");
  			var liHeight = $ul.find("li:last").height();
  			$ul.animate({marginTop : liHeight +"px"},1000,function(){
  			$ul.find("li:last").prependTo($ul)
  			$ul.find("li:first").hide();
 			 $ul.css({marginTop:0});
  			$ul.find("li:first").fadeIn(1000);
  			});	
		},3000);
	}
).trigger("mouseleave");
*/
var scrtime5;
$("#Tab35").hover(
	function(){
  		clearInterval(scrtime5);
	},
	function(){
		scrtime5 = setInterval(function(){
  			var $ul = $("#Tab35 ul");
  			var liHeight = $ul.find("dl:last").height();
  			$ul.animate({marginTop : liHeight +"px"},1000,function(){
  			$ul.find("dl:last").prependTo($ul)
  			$ul.find("dl:first").hide();
 			 $ul.css({marginTop:0});
  			$ul.find("dl:first").fadeIn(1000);
  			});	
		},3000);
	}
).trigger("mouseleave");

var scrtime6;
$("#Tab36").hover(
	function(){
  		clearInterval(scrtime6);
	},
	function(){
		scrtime6 = setInterval(function(){
  			var $ul = $("#Tab36 ul");
  			var liHeight = $ul.find("dl:last").height();
  			$ul.animate({marginTop : liHeight +"px"},1000,function(){
  			$ul.find("dl:last").prependTo($ul)
  			$ul.find("dl:first").hide();
 			 $ul.css({marginTop:0});
  			$ul.find("dl:first").fadeIn(1000);
  			});	
		},3000);
	}
).trigger("mouseleave");