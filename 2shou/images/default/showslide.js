var objli=document.getElementById("SlideCont").getElementsByTagName("li");
var row=objli.length;
var picarry = {};
var lnkarry = {};
var ttlarry = {};
for(i=0;i<row;i++){	
	lnkarry[i]=objli[i].childNodes[0].href;
	picarry[i]=objli[i].childNodes[1].src;
	ttlarry[i]=objli[i].childNodes[2].innerHTML;
}
var main = row-1;
var currslid = 0;
var slidint;
function setfoc(id){
	document.getElementById("ShowPic").src = picarry[id];
	document.getElementById("PicUrl").href = lnkarry[id];
	document.getElementById("listtitle").innerHTML = ttlarry[id];
	currslid = id;
	obj=document.getElementById("ShowTitle").getElementsByTagName("td");
	for(var i=0;i< obj.length;i++ ){
		obj[i].className=(i==id)?'ck':'';
	}
	var borserInfo=navigator.userAgent.toLowerCase();
	if(/msie/.test(borserInfo))
	{
		document.getElementById("ShowPic").style.visibility = "hidden";
		document.getElementById("ShowPic").filters[0].Apply();
		document.getElementById("ShowPic").filters[0].transition=23;
		if (document.getElementById("ShowPic").style.visibility == "visible") {
			document.getElementById("ShowPic").style.visibility = "hidden";
		}
		else {
			document.getElementById("ShowPic").style.visibility = "visible";
		}
		document.getElementById("ShowPic").filters[0].Play();
	}
	stopit();
}
function playnext(){
	if(currslid==main){
		currslid = 0;
	}
	else{
		currslid++;
	};
	setfoc(currslid);
	playit();
}
function showdown(){
	playnext();
}
function showup(){
	if(currslid==0){
		currslid = main;
	}
	else{
		currslid--;
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
document.write("<div class='BigImg' onmouseover='stopit()' onmouseout='playit()'><a id='PicUrl' href='"+lnkarry[0]+"' target='_blank'><img id='ShowPic' style='filter:RevealTrans (duration='1',transition='23'); visibility:visible;' src='"+picarry[0]+"'><\/a><\/div><div id='ShowTitle'><table><tr>");
for(i=0;i<row;i++){
	var shownum=i+1;
	if(i==0){
		document.write("<td class='ck' onmouseover='setfoc("+i+")' onmouseout='playit()'>"+shownum+"<\/td>");
	}else{
		document.write("<td onmouseover='setfoc("+i+")' onmouseout='playit()'>"+shownum+"<\/td>");
	}
}
document.write("<\/tr><\/table><\/div><div id='listtitle'>"+ttlarry[0]+"</div>");
document.close();