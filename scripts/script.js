//author:Chong Tze Wei(7440820)


/*function checks for null elements
* and also checks for foul language
*/
function func(){
	pat=/fuck|shit|crap|bullshit/;
	strName=document.getElementById("name").value
	str=document.getElementById("comments").value;
	if(!(document.getElementById("name").value)){
		alert("Please input name");
		document.getElementById("name").focus();
		return false;
	}
	else if(!(document.getElementById("comments").value)){
		alert("Please input comments");
		document.getElementById("comments").focus();
		return false;
	}
	else if(strName.match(pat)){
		alert("Please, no foul language.");
		document.getElementById("name").value="";
		document.getElementById("name").focus();
		return false;
	}
	else if(str.match(pat)){
		alert("Please, no foul language.");
		document.getElementById("comments").value="";
		document.getElementById("comments").focus();
		return false;
	}
	else{
		return true;
	}
}