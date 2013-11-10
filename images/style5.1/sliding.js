//点击滑动JS
function ShowTab(theA,Small,main){
	for(var i=Small;i< main;i++ ){
		$("#Tab"+i).hide();
		$("#Span"+i).removeClass("choose");
	}
	$("#Tab"+theA).show();
	$("#Span"+theA).addClass("choose");
}