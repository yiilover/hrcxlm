function changeshow(ID,LID,MID){
	for (i=LID;i<MID;i++){
		document.getElementById("Mune" + i).className=(i==ID)?"ck":"";
		document.getElementById("Tab" + i).style.display=(i==ID)?"block":"none";
	}
}