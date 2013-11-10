var scrtime;
  $("#indexpiclist").hover(function(){
	  clearInterval(scrtime);
  },function(){
  scrtime = setInterval(function(){
	  var $ul = $("#indexpiclist ul");
	  var liHeight = $ul.find("li:last").height();
	  $ul.animate({marginTop : liHeight +"px"},1000,function(){
	  $ul.find("li:last").prependTo($ul)
	  $ul.find("li:first").hide();
	  $ul.css({marginTop:0});
	  $ul.find("li:first").fadeIn(1000);
	  });	
  },3000);
  }).trigger("mouseleave");
  
  
var scrtime1;
  $("#indexpiclist1").hover(function(){
	  clearInterval(scrtime1);
  },function(){
  scrtime1 = setInterval(function(){
	  var $ul1 = $("#indexpiclist1 ul");
	  var liHeight1 = $ul1.find("li:last").height();
	  $ul1.animate({marginTop : liHeight1 +"px"},1000,function(){
	  $ul1.find("li:last").prependTo($ul1)
	  $ul1.find("li:first").hide();
	  $ul1.css({marginTop:0});
	  $ul1.find("li:first").fadeIn(1000);
	  });	
  },3000);
  }).trigger("mouseleave");