/**
*   Made by cgq
**/	

/*鼠标滑动变色效果*/
mousehover_color = function(obj){
	$(obj).find(".item").hover(function(){
							$(this).addClass("on").siblings().removeClass("on");
								 },
						function(){	 
							$(this).removeClass("on");		 
								 });
	}

/*显示隐藏效果-滑动效果*/
mousehover_showHide = function(objBtn,objNr){
	$(objBtn).hover(function(){							//$(this).find(".classNav_btn").addClass("on").siblings().removeClass("on");
							$(this).find(objNr).show();
								 },
						function(){	 
							//$(this).removeClass("on");	
							$(this).find(objNr).hide();
								 });
	}
	
/*显示隐藏效果-点击效果*/
mouseclick_showHide = function(obj){
	var flag =0;
	$(obj).click(function(){
						  if($(this).find(".selectMenu").is(':visible')){
							  $(this).find(".selectMenu").hide();
							  
						  }else{
							  $(this).find(".selectMenu").show(); 	  
						  }	

						 });

	$(obj).find(".selectMenu span").click(function(){
						  $(obj).find("input").val($(this).html());
						  $(obj).find(".keySlect strong").html($(this).html());
						  })
	}

/*菜单分类选择-点击效果*/
mouseclick_menu = function(obj){
	var flag =0;
	$(obj).find("a").click(function(){
						  if($(this).hasClass("on")){
							  $(this).removeClass("on");
							  
						  }else{
							  
							  $(this).addClass("on").siblings("a").removeClass("on"); 	  
						  }	

						 });

	/*$(obj).find(".selectMenu span").click(function(){
						  $(obj).find("input").val($(this).html());
						  $(obj).find(".keySlect strong").html($(this).html());
						  })*/
	}
	
/*鼠标滑动透明效果*/
mousehover_alpha = function(obj){
	var len = $(obj).find("li").length;
	var index;
	
	function index_opacity(){
		for(i=0;i<=len;i++){
			if($(obj).find("li").eq(i).find("a").hasClass("on")){			
				$(obj).find("li").eq(i).find("a").css({"opacity":1});
				index = i;
				}else{	
				$(obj).find("li").eq(i).find("a").css({"opacity":0});		
			}
			
		}
	}
	
	index_opacity();
	
	$(obj).find("li").hover(function(){							
						    $(this).find("a").animate({"opacity":1},500);
								 },
						function(){	
						    if($(obj).find("li").index(this)!=index){
								$(this).find("a").animate({"opacity":0},500);
								}			 
						});
	}



/*tab切换*/
Tabchange_click1 = function(obj){
	var len = $(obj).length;
	var current_h = new Array();
	var index;
	for(i=0;i<len;i++){
		current_h[i]  = $(obj).eq(i).find(".bd").height();
		$(obj).eq(i).find(".bd").height(current_h[i]);
		}
	$(obj).find(".bd").hide();
	$(obj).find(".hd").filter(".on").next(".bd").show();
	$(obj).find(".hd").filter(".on").css({"background-position":"0 -35px","color":"#018fd7"});
	$(obj).click(function(){
		$(this).find(".bd").slideDown("slow").end().siblings().find(".bd").slideUp("slow");
		$(this).find(".hd").css({"background-position":"0 -35px","color":"#018fd7"}).addClass("on").end().siblings().find(".hd").css({"background-position":"0 0","color":""}).removeClass("on");
	});
	
		
	$(obj).hover(function(){
		if($(this).find(".bd").is(':visible')){
		}else{
			$(this).find(".hd").css({"background-position":"0 -70px","color":"#018fd7"});
		}
	},function(){
		if($(this).find(".bd").is(':visible')){
		}else{
			$(this).find(".hd").css({"background-position":"0 -0","color":""});
		}
		});	
}

/*tab切换*/
Tabchange_click2 = function(obj){
	var len = $(obj).find("dt").length;
	var current_h = new Array();
	var index;
	for(i=0;i<len;i++){
		current_h[i]  = $(obj).find("dd").eq(i).height();
		$(obj).find("dd").eq(i).height(current_h[i]);
		}
	$(obj).find("dd").hide();
	$(obj).find("dt").filter(".on").next("dd").show();
	$(obj).find("dt").click(function(){
		index = $(obj).find("dt").index(this);
		if ($(this).next("dd").is(':visible')){			
			}else{
			$(this).siblings("dd").slideUp("fast");
			$(this).next("dd").slideDown("slow");
			$(this).addClass("on").siblings("dt").removeClass("on");
		}
		
	});	
}

/*tab切换_背景替换*/
Tabchange_hover = function(obj){
	$(obj).children(".bt_tab").find("li").hover(function(){
		var index = $(obj).children(".bt_tab").find("li").index(this);
		if(index==0){
			$(this).parent("ul").css({"background-position":"0px 0px"});
			}
		if(index==1){
			$(this).parent("ul").css({"background-position":"0px -32px"});
			}
		if(index==2){
			$(this).parent("ul").css({"background-position":"0px -64px"});
			}
		if(index==3){
			$(this).parent("ul").css({"background-position":"0px -96px"});
			}
		if(index==4){
			$(this).parent("ul").css({"background-position":"0px -128px"});
			}
		
	},function(){
		});	
}




/* 焦点切换banner图_向左滚动 */
TabFlash = function(ad_flash){
var timer;
var len = $(ad_flash).find("dt").length;
var srcoll_w = $(ad_flash).find("li").width();
var dt_width = $(ad_flash).find("dt").width((srcoll_w-2)/len);
var index = 0 ;
$(ad_flash).find("ul").width( srcoll_w*len );

$(ad_flash).hover(function(){
		clearInterval(timer);
	},function(){
	timer = setInterval(function(){
		if(index>=len-1){index=-1;}
		index++;
		auto(index);
		},3600);
		}).trigger("mouseleave");
		
		$(ad_flash).find("dt").mouseover(function(){
		index = $(ad_flash).find("dt").index(this);
		setTimeout(function(){
		auto(index);
		},200);
	});
	
	function auto(index){
	$(ad_flash).find("dt").removeClass("on").eq(index).addClass("on");
	$(ad_flash).find("ul").stop().animate({"left":-(srcoll_w*index)},300);
	}
}


/* 焦点切换banner图_渐隐渐现 */
$.fn.imgtransition = function(o){
	var defaults = {
		speed : 5000,
		animate : 1000
	};
	o = $.extend(defaults, o);

	return this.each(function(){
		var arr_e = $("li", this);
		arr_e.css({position: "absolute"});
		arr_e.parent().css({margin: "0", padding: "0", "list-style": "none", overflow: "hidden"});

		function shownext(){
			var active = arr_e.filter(".active").length ? arr_e.filter(".active") : arr_e.first();
			var next =  active.next().length ? active.next() : arr_e.first();
			active.css({"z-index": 9});
			next.css({opacity: 0.0, "z-index": 10}).addClass('active').animate({opacity: 1.0}, o.animate, function(){
				active.removeClass('active').css({"z-index": 8});
			});
		}

		arr_e.first().css({"z-index": 9});
		setInterval(function(){
			shownext();
		},o.speed);
		
	});
};

/* 鼠标滑动小提示 */
hover_tip = function(obj){
	
	var a;   
	$(obj).find("li").hover(function(){

		if(a){
			window.clearTimeout(a)
		}
		var c=this;
		a=window.setTimeout(function(){
			var g=$(".detail-frame",c).html();
			var i=$("a",c).offset().left;
			var h=$("a",c).offset().top;
			if($(c).width()==150){
				var j=160
			}else{
				var j=$("a",c).width()+10
			}
			$("body").append('<div class="detail-tip"></div>');
			if($(c).hasClass("r-end")){
				$(".detail-tip").html(g).append('<span class="arrow-right"></span>').css("left",i+j-492).css("top",h);
			}else{
				$(".detail-tip").html(g).append('<span class="arrow-left"></span>').css("left",i+j).css("top",h);
			}
			
		},200)
	},function(){
		if(a){
			window.clearTimeout(a)
		}
		$(".detail-tip").remove()
	});
	
}

/* 首页头部导航 */	
main_nav = function(obj){
	var len = $(obj).find("li").length;
	var current_h = new Array();
	var index;
	for(i=0;i<len;i++){
		current_h[i]  = $(obj).find("li").eq(i).find(".sunNav").height();
		$(obj).find("li").eq(i).find(".sunNav").height(current_h[i]);
		}
	$(obj).find(".sunNav").hide();
	$(obj).find("li").hover(function(){
				//$(this).find(".sunNav").removeClass("hide");
				//$(obj).find("li").stop(true);
				$(this).addClass("on").siblings("li").removeClass("on");
				$(this).find(".sunNav").stop(false,true).slideDown("fast");
			},function(){
				//$(this).find(".sunNav").addClass("hide");
				$(this).removeClass("on");
				$(this).find(".sunNav").stop(false,true).slideUp("fast");
				});
	
	}

/* 列表图像切换 */
groupScroll = function(obj,num_width){
    var i=0;
	var len;
    
	len = $(obj).find("li").length;	
	$(obj).find("ul").width(len*num_width);	

	$(obj).find(".btn_l").click(function(){
		if(i<=0){
		   i=len-1;
		   $(obj).find("ul").stop().animate({"left":-num_width*i},300);
		   return false;
		}
		i--;
		$(obj).find("ul").stop().animate({"left":-num_width*i},300,function(){
		});
	});
	$(obj).find(".btn_r").click(function(){
		if(i>=len-1){
			i=0;
		    $(obj).find("ul").stop().animate({"left":-num_width*i},300);
		    return false;
		}
		i++;
		$(obj).find("ul").stop().animate({"left":-num_width*i},300,function(){
		});
	});
}

/* 列表上下滚动 */
groupScroll_upDown = function(obj,num_height){
    var i=0;
	var num=10;
	var len;

	len = $(obj).find("li").length;	
	$(obj).find("ul").height(len*num_height);	

	$("#prev_2").click(function(){
		if(i>=len-10){
		   i=0;
		   $(obj).find("ul").stop().animate({"top":-num_height*i},300);
		   return false;
		}
		i++;
		$(obj).find("ul").stop().animate({"top":-num_height*i},300,function(){
		});
	});
	$("#next_2").click(function(){
		if(i<=0){
			i=len-10;
		    $(obj).find("ul").stop().animate({"top":-num_height*i},300);
		    return false;
		}
		i--;
		$(obj).find("ul").stop().animate({"top":-num_height*i},300,function(){
		});
	});
}


/*漂浮滚动*/	
float_scroll = function (obj){
    var window_h = $(window).height();
	var window_w = $(window).width();
	var obj_w = $(obj).width();
	var obj_h= $(obj).height();
	
	function fixPosition(obj){                   
               var st = $(document).scrollTop();  
               $(obj).animate({top:st+window_h-obj_h-300},{queue:false,duration:220});   
     };
			 
	if($.browser.msie&&($.browser.version == "6.0")&&!$.support.style) {
		$(obj).css({"position":"absolute","left":(window_w-1000)/2+1000}); 
        setInterval(function(){fixPosition(obj);},200); 
		}
	else{
		$(obj).css({"position":"fixed","top":window_h-obj_h-400,"left":(window_w-1000)/2+970});  
		}

	$(window).scroll(function(){
		if($(this).scrollTop()>500){
			$(obj).fadeIn("slow");
		} else {
			$(obj).fadeOut("fast");
		}
	});
	
	$('#backTop').click(function(){
		$('html,body').animate({scrollTop:0},'slow');
		return false;
	});

};

//登录页的登录窗口水平垂直居中
offset = function(obj){
    var main_y = $(window).height()/2-$(obj).height()/2;
    var main_x = $(window).width()/2-$(obj).width()/2;
    $(obj).css({"position":"absolute","top":main_y,"left":main_x});
		
	//窗口自动缩放是，版块去的定位位置发生相应变化
    $(window).resize(function() {
		main_y = $(window).height()/2-$(obj).height()/2;
		main_x = $(window).width()/2-$(obj).width()/2;
		$(obj).css({"position":"absolute","top":main_y,"left":main_x});
		//alert($(window).height());
    })
}

//表单触礁效果
focus_form = function(obj){
    $(obj).find(":input").focus(
	  function(){
		var text_value = $(this).val();
		if(text_value == this.defaultValue){
		    $(this).val("");
		}
		 $(this).css({"background-color":"#fff"});
	  })
	$(obj).find(":input").blur(
	  function(){
		var text_value = $(this).val();
		if(text_value == ""){
		    $(this).val(this.defaultValue);
		}
		$(this).css({"background-color":"#f7f7f7"});
	  })
}

//图片向左滚动滚动
ScrollImgLeft = function(obj,timer){
	var speed=80;
	var i=1;
	var change_val;
	var scroll_begin = $(obj).find(".scroll_begin");
	var scroll_end = $(obj).find(".scroll_end");
	var scroll_div = $(obj).find(".scroll_div");
	var scroll_begin_w = scroll_begin.width();
	
	scroll_end.html(scroll_begin.html());
	change_val = parseInt(scroll_div.css("left"));
	
	function Marquee(){
		if(change_val*(-1)>=scroll_begin_w){
		  scroll_div.css({"left":0});
		  change_val=0;
		}
		change_val = change_val-1;
		scroll_div.css({"left":change_val});
	}

	scroll_div.hover(function(){
		clearInterval(timer);
	},function(){
		timer = setInterval(Marquee,speed);
	}).trigger("mouseleave");
	
}

/* 加载 */
$(function(){
	main_nav("#mainNav");	   
	for(i=0; i<=32; i++){
		var visible_val=4;
		var scroll_val = 4;
		var vertical_val = false;
		var speed_val = 1000;			
		$('#scroll_x_demo'+i).jCarouselLite({
		btnPrev: '#prev_'+i,
		btnNext: '#next_'+i,
		visible:visible_val,
		scroll:scroll_val,
		vertical:vertical_val,
		speed:speed_val
	    });
	}
	
    for(i=0; i<=32; i++){
		TabFlash("#ad_banner_"+i);	
		
	}
	
	for(i=1; i<=32; i++){
		$(".tab_demo"+ i).Tabs({
							   auto:0
							   });
	}
	$(".ScrollTab_demo").find(".ScrollTab_nr").addClass("hide").eq(0).removeClass("hide");
	
	mousehover_showHide(".proList",".proDetail");
	mousehover_showHide(".classNav",".classNav_nr");
	
	mouseclick_showHide(".menu_options");
	
	groupScroll_upDown("#scroll_y_demo2",28);
	
	for(i=0; i<=32; i++){
		ScrollImgLeft("#scroll_div_"+i,"timer_"+i);
	}
	
	for(i=1; i<=4; i++){
		var obj = "#ad_alpha_"+i;
		$(obj).imgtransition({
			speed:3000,  //图片切换时间
			animate:1000 //图片切换过渡时间
		});
	}
	for(i=1; i<=10; i++){
		hover_tip("#tip_"+i);
	}
	mouseclick_menu("#search_menu");
})