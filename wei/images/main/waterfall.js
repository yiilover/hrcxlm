$(".WebSeitUrl").hide();
$(".ActionCont").hide();
$(".NowPage").hide();
$(".ShowPage").hide();
$(".LinkFiles").hide();
$(".ShowFid").hide();
$(".ShowKeyword").hide();
var shows=1,loading=1,WebSeitUrl=$(".WebSeitUrl").html(),NowPage=$(".NowPage").html(),LinkFiles=$(".LinkFiles").html(),ShowFid=$(".ShowFid").html(),ShowKeyword=$(".ShowKeyword").html();
//loadMore();
$(window).scroll(function(){
	if($(this).scrollTop()>350){
		$(".ActionCont").show();
	}else{
		$(".ActionCont").hide();
	}
	$(".ActionCont").css({top:($(this).scrollTop()+400)+"px"});
	// 当滚动到最底部以上100像素时， 加载新内容
	if ($(document).height() - $(this).scrollTop() - $(this).height()<400 && loading==1) loadMore();	
});
function loadMore(){
	shows++;
	loading=0;
	$(".ShowLoading").show();
	$.ajax({
		url : WebSeitUrl+'/wei/'+LinkFiles+'?type=date&page='+NowPage+'&shows='+shows+'&fid='+ShowFid+'&keyword='+ShowKeyword+'&'+Math.random(),
		dataType : 'json',
		success : function(json){
			if(typeof json == 'object'){
				$(".ShowLoading").hide();
				$(".ShowPage").show();
				var oProduct, $row, iHeight, iTempHeight,picHtml,onerrors,show_html;
				if(json.length>0){					
					loading=1;
				}else{
					loading=0;					
				}
				for(var i=0; i<json.length; i++){
					oProduct = json[i];
					iHeight = -1;
					$('.ShowWaterFall .ListLi').each(function(){
						iTempHeight = Number( $(this).height() );
						if(iHeight==-1 || iHeight>iTempHeight){
							iHeight = iTempHeight;
							$row = $(this);
						}
					});
					onerrors="this.src='"+WebSeitUrl+"/images/default/nopic.jpg'";
					picHtml=oProduct.picurl?"<div class='img'><a href="+WebSeitUrl+"/wei/bencandy.php?fid="+oProduct.fid+"&id="+oProduct.id+" target='_blank'><img src="+oProduct.picurl+" width=210  onerror="+onerrors+"></a></div>":"";
					show_html='';
					show_html+='<div class="side">';
					show_html+=picHtml;
					show_html+='<h3><a href="'+WebSeitUrl+'/wei/bencandy.php?fid='+oProduct.fid+'&id='+oProduct.id+'" target="_blank">'+oProduct.title+'</a></h3>';
					show_html+='<p>'+oProduct.content+'</p>';
					show_html+='<dl>';
					show_html+='<dt>评论('+oProduct.comments+') 点击('+oProduct.hits+')</dt>';
					show_html+='<dd>';
					show_html+='<span><a href="'+WebSeitUrl+'/member/homepage.php?uid='+oProduct.uid+'" target="_blank"><img src="'+oProduct.head_icon+'" width=30></a></span>';
					show_html+='<a href="'+WebSeitUrl+'/member/homepage.php?uid='+oProduct.uid+'" target="_blank">'+oProduct.username+'</a><br/>';
					show_html+=oProduct.posttime;
					show_html+='</dd>';
					show_html+='</dl>';
					show_html+='</div>';
					$item = $(show_html).hide();
					$row.append($item);
					$item.fadeIn();
				}
			}
		}
	});
}
$(".ActionCont").click(function(){
	$('body,html').animate({scrollTop:0},1000);
	return false;
});