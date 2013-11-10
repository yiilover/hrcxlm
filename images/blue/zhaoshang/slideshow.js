var currslid = 0;
var slidint;
function setfoc(id){
	document.getElementById("bigimg").src = picarry[id];
	document.getElementById("a_jimg").href = lnkarry[id];
	currslid = id;
	for(i=0;i<6;i++){
		document.getElementById("li_jimg"+i).className = "li_jimg";
	};
	document.getElementById("li_jimg"+id).className ="li_jimg on";
	var borserInfo=navigator.userAgent.toLowerCase();
	if(/msie/.test(borserInfo))
	{
		document.getElementById("bigimg").style.visibility = "hidden";
		document.getElementById("bigimg").filters[0].Apply();
		document.getElementById("bigimg").filters[0].transition=23;
		if (document.getElementById("bigimg").style.visibility == "visible") {
			document.getElementById("bigimg").style.visibility = "hidden";
		}
		else {
			document.getElementById("bigimg").style.visibility = "visible";
		}
		document.getElementById("bigimg").filters[0].Play();
	}
	stopit();
}
function playnext(){
	if(currslid==5){
		currslid = 0;
	}
	else{
		currslid++;
	};
	setfoc(currslid);
	playit();
}
function playit(){
	slidint = setTimeout(playnext,2500);
}
function stopit(){
	clearTimeout(slidint);
}

window.onload = function(){
	playit();
}

function playit01(){
	document.getElementById("playStop").className = "stop";
	playit();
}
function stopit01(){
	document.getElementById("playStop").className = "play";
	stopit();
}
			   
var picarry = {};
var lnkarry = {};
var ttlarry = {};
function FixCode(str){
	return str.replace("'","=");
}
var t=document.getElementById("pictable");
var rl=t.rows.length;
var baseu=  document.URL.replace(/(http.*\/)(.*)/, "$1"); 

var txt="";
for(var i=0;i<rl;i++){
	try{
		picarry[i]=t.rows[i].cells[0].childNodes[0].src;
		lnkarry[i]=t.rows[i].cells[2].innerHTML;
		lnkarry[i] = lnkarry[i].replace(/&amp;/g, "&"); 
		ttlarry[i]=FixCode(t.rows[i].cells[1].innerHTML);
		document.getElementById("li_jimg"+i).innerHTML = '<a href="'+lnkarry[id]+'" target="_blank" class="img"><img src="'+picarry[id]+'" alt=""><\/a>';
		alert(picarry[i]);
	}catch(e){

	}
}             
document.write("<div class='div_jimg'><a class='a_jimg' id='a_jimg' href='"+lnkarry[0]+"' target='_blank'><img id='bigimg' style='filter:RevealTrans (duration='1',transition='23'); visibility:visible;' src='"+picarry[0]+"'><\/a><ul class='ul_jimg'><li class='li_jimg on' id='li_jimg0' onmouseover='setfoc(0)' onmouseout='playit()'><a href='"+lnkarry[0]+"' target='_blank' class='img'>"+ttlarry[0]+"<\/a><\/li><li class='li_jimg' id='li_jimg1' onmouseover='setfoc(1)' onmouseout='playit()'><a href='"+lnkarry[1]+"' target='_blank' class='img'>"+ttlarry[1]+"<\/a><\/li><li class='li_jimg' id='li_jimg2' onmouseover='setfoc(2)' onmouseout='playit()'><a href='"+lnkarry[2]+"' target='_blank' class='img'>"+ttlarry[2]+"<\/a><\/li><li class='li_jimg' id='li_jimg3' onmouseover='setfoc(3)' onmouseout='playit()'><a href='"+lnkarry[3]+"' target='_blank' class='img'>"+ttlarry[3]+"<\/a><\/li><li class='li_jimg' id='li_jimg4' onmouseover='setfoc(4)' onmouseout='playit()'><a href='"+lnkarry[4]+"' target='_blank' class='img'>"+ttlarry[4]+"<\/a><\/li><li class='li_jimg' id='li_jimg5' onmouseover='setfoc(5)' onmouseout='playit()'><a href='"+lnkarry[5]+"' target='_blank' class='img'>"+ttlarry[5]+"<\/a><\/li><\/ul><\/div>");
document.close();