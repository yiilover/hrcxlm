var pages=1;
$(document).ready(function() {
	$(".pages").hide();
	$("#hd_step").val(1);
	$("#ajax_wait").val(0);
	bind_event();
	load_topic();
});
function bind_event() {
	$(window).bind("scroll",
	function(e) {
		load_topic()
	})
}
function load_topic() {
	var scrolltop = $(window).scrollTop();
	var loadheight = $("#loading").offset().top;
	var windheight = $(window).height();
	var step = $("#hd_step").val();
	var ajax_wait = $("#ajax_wait").val();
	var show_type = $("#show_type").val();
	if (windheight + scrolltop >= loadheight + 50 && parseInt(step) > 0 && ajax_wait == 0) {
		$("#ajax_wait").val(1);
		$("#loading").css("visibility", "visible");
		pages++;
		$.ajax({
			url : 'all.php?job=show&show_type='+show_type+'&page='+pages,
		dataType : 'json',
		success : function(json)
		{
			$("#loading").css("visibility", "hidden");
			if(typeof json == 'object')
			{
					var oProduct, $row, iHeight, iTempHeight, listStr="";
					if(json.length>0){
						$("#hd_step").val(1);
						$("#ajax_wait").val(0);
					}else{
						$("#ajax_wait").val(0);
						$("#hd_step").val(0);
					}
					for(var i=0; i<json.length; i++)
					{
						oProduct = json[i];
						listStr += '<div class="ListShop"><div class="title"><a href="'+oProduct.url+'" target="_blank">'+oProduct.title+'</a></div><div class="company">商家：<a href="../home/?uid='+oProduct.uid+'" target="_blank">'+oProduct.companyname+'</a></div><div class="img"><a href="'+oProduct.url+'"  target="_blank"><img src="'+oProduct.image+'" onError="this.src=\'../images/default/nopic.jpg\'" height="190" /></a></div><div class="info"><span>市场价：<strike>'+oProduct.mart_price+'元</strike></span><span>'+oProduct.posttime+'</span><span class="hits">点击：<em>'+oProduct.hits+'</em>次</span></div><div class="mores"><span class="price">需积分：<em>'+oProduct.money+'</em></span><a href="'+oProduct.url+'" target="_blank">去看看</a></div></div>\n';
					}
					$("#ShowAlls").append(listStr);					
				}
			}
		});
	}
}