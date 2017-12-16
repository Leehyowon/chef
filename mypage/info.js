window.onload = function() {
	document.querySelector('.after').style.display = "none";
	$("edit").onclick = edit;
	$("cancel").onclick = cancel;
}

function edit(){
	document.querySelector('.before').style.display = "none";
	document.querySelector('.after').style.display = "block";
}

function cancel(){
	document.querySelector('.before').style.display = "block";
	document.querySelector('.after').style.display = "none";
}
