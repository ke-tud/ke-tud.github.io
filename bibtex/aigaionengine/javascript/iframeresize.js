function resizeParentiFrame(name) {
	var height=getDocHeight();
	if(height !=0){
		parent.window.document.getElementById(name).height = height+10; //small offset of 10px because there is often a scrollbar with the correct size
	}
}

function getDocHeight() {
var db = document.body;
var dde = document.documentElement;
var docHeight = Math.max(db.scrollHeight, dde.scrollHeight, db.offsetHeight, dde.offsetHeight, db.clientHeight, dde.clientHeight)
return docHeight;
} 
