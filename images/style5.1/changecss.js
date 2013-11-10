var MySiteUrl=$(".changecolor input").val();
var sitedefalutcolor=$('.sitedefalutcolor').val();
var Theme = {
	cookieName: "themeIndexTom",
	themeList: null,
	init: function(){
		Theme.themeList = document.getElementById('themelist');
		var list = Theme.themeList.getElementsByTagName('a');
		oThis = this;
		for( var i = 0; i < list.length; i++ ){
			(function(){
				var index = i + 1;
				list[index - 1].onclick = function(){
					oThis.setCss(index);
					oThis.setCookie(Theme.cookieName, index);
					return false;
				};
			})();
		}		
		var cookieIndex = this.getCookie(this.cookieName);
		if(cookieIndex == null){
			if(sitedefalutcolor!=null){
				this.setCookie(this.cookieName, sitedefalutcolor);	
				Theme.setCss(sitedefalutcolor);
			}else{
				this.setCookie(this.cookieName, 1);	
				Theme.setCss(1);
			}
		}else{
			Theme.setCss(cookieIndex);
		}
	},	
	setCss: function(index){
		document.getElementById('themecss').href = MySiteUrl+"/images/style5.1/css" + index + ".css";
	},	
	getCookie: function(name){
		var arr = document.cookie.match(new RegExp("(^| )"+name+"=([^;]*)(;|$)"));
     	if(arr != null) return unescape(arr[2]); return null;
	},
	setCookie: function(name,value){   
		  var Days = 30; //此 cookie 将被保存 30 天
		  var exp  = new Date();    //new Date("December 31, 9998");
		  exp.setTime(exp.getTime() + Days*24*60*60*1000);
		  document.cookie = name + "="+ escape(value) +";expires="+ exp.toGMTString()+";path=/" ;
	}   
}
Theme.init();