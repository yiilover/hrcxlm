var defaultOpts = { interval: 5000, fadeInTime: 300, fadeOutTime: 200 };
var _titles = $("ul.slideTxt li");
var _titles_bg = $("ul.slideop li");
var _bodies = $("ul.slidePic li");
var _count = _titles.length;
var _current = 0;
var show_num = 1;
var _intervalID = null;
var stop = function() { window.clearInterval(_intervalID);};
var slide = function(opts){
	if (opts) {
		_current = opts.current || 0;
	} else {
		_current = (_current >= (_count - 1)) ? 0 : (++_current);
	};
	_bodies.filter(":visible").fadeOut(defaultOpts.fadeOutTime, function() {
		_bodies.eq(_current).fadeIn(defaultOpts.fadeInTime);
		_bodies.removeClass("cur").eq(_current).addClass("cur");
	});
	_titles.removeClass("cur").eq(_current).addClass("cur");
	_titles_bg.removeClass("cur").eq(_current).addClass("cur");	
	show_num = _current +1;
	more_pic_atc(show_num);
}; //endof slide
var go = function() {
	stop();
	_intervalID = window.setInterval(function() { slide();}, defaultOpts.interval);
}; //endof go
var itemMouseOver = function(target, items) {
	stop();
	var i = $.inArray(target, items);
	slide({ current: i });
}; //endof itemMouseOver
_titles.hover(function() { if($(this).attr('class')!='cur'){itemMouseOver(this, _titles);}else{stop();}}, go);
_titles_bg.hover(function() { itemMouseOver(this, _titles_bg);}, go);
_bodies.hover(stop, go);
//trigger the slidebox
go();
more_pic_atc(show_num);
function more_pic_atc(num){
	$(".ShowPics .head .more span").html(num);
	if(num<=4){
		$(".slideTxt li").show();
	}
	else if(num%4 == 1 && num > 4){
		for(var i=0;i<num-1;i++){
			$(".slideTxt li:eq("+i+")").hide();
		}
	}
}
function up_show_pic(){
	if(_current == 0){	
		slide({ current: _count-1 });
	}
	else{
		slide({ current: _current-1 });
		show_num = _current;
	}
}
function down_show_pic(){
	if(show_num >= _count)	
	slide({ current: 0 });
	else
	slide({ current: show_num });
}