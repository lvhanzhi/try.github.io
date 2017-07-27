window.onload=function(){
	var box1=document.getElementById("d1");
	var box2=document.getElementById("dl1");
	box1.onmouseover=function(){
		box2.style.display="block";
	}
	box2.onmouseover=function(){
		box2.style.display="block";
	}
	box2.onmouseout=function(){
		box2.style.display="none";
	}
	box1.onmouseout=function(){
		box2.style.display="none";
	}
}
