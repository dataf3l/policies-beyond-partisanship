function show_add_section(){
	document.getElementById("new_section").style.display = "block";
}
function add_section(){
	alert(123);
}
function show_comments(id){
	document.getElementById(id).style.display='block';
}
function hide_it(event, id){
	/*
	 var e = event.toElement || event.relatedTarget;
        if (e.parentNode == this || e == this) {
           return;
        }
	*/
	document.getElementById(id).style.display='none';
}
