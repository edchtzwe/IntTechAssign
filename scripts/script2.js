/*
* author:Chong Tze Wei(7440820)
* set stylesheet through pages
*/

//sets a cookie
function setCookie() {
var i, a,tmp;
 for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
  if(a.getAttribute("rel").indexOf("style") != -1 
  && !a.disabled)
  tmp=a.getAttribute("href"); 
  }
  if(tmp!="siteowner=1"){
	document.cookie=tmp;
	}
}

//reads cookie
function readCookie(){
	
	cook=document.cookie;
	cook=cook.split(";");
	if(cook[0]&&cook[0]!="siteowner=1"){
		document.getElementById("styles").href = cook[0];
	}
	else if(cook[0]=="siteowner=1"){
		document.getElementById("styles").href = "styles/style1/style.css";
	}
}

//start services
function init()
{
	readCookie();
	setEvent();
}

//DOM event handler setter
function setEvent()
{
	var el = document.getElementById("main");	
	el.addEventListener("mouseover", function(){setCookie();}, false);
}