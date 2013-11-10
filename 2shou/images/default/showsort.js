var listnum = 2;
var objtr=document.getElementById("ShowSortTable").getElementsByTagName("li");
var trrow = objtr.length;
var trmain = trrow-1;
var trid = 0;
var words = {};
function setfoctr(id){
	trid = id;
	document.getElementById("ShowSortTable").style.display="none";
	for(y=0;y<trrow;y++){
		words[y]=objtr[y].innerHTML;
	}	
	var showhtml="";
	for(i=0;i<listnum;i++){
		var showid = trid+i;
		var disid = (showid>trmain) ? showid-trrow : showid ;
		showhtml += "<li>"+words[disid]+"<\/li>";
	}
	document.getElementById("ShowSorts").innerHTML=showhtml;
}
function showups(){
	trid = (trid==0) ? trmain : trid-1;
	document.getElementById("moveUpS").className="up";
	setfoctr(trid);
}
function playnexts(){
	trid = (trid==trmain) ? 0 : trid+1;
	document.getElementById("moveDownS").className="down";
	setfoctr(trid);
}
function showdowns(){
	playnexts();
}
function clearcss(){
	document.getElementById("moveUpS").className="";
	document.getElementById("moveDownS").className="";
}
setfoctr(trid);