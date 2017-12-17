window.onload = function() {
	var li = $("myUL").getElementsByTagName("li");
	for (var i = 0; i < li.length; i++) {
		li[i].style.display = "none";
    }
	$("search").onkeyup = my;
};

function my(){
	var filter, li, a;
	filter = $("search").value.toUpperCase();
    li = $("myUL").getElementsByTagName("li");
	if ($("search").value == ""){
    	for (var i = 0; i < li.length; i++) {
			li[i].style.display = "none";
    	}

    } else {
	    for (var i = 0; i < li.length; i++) {
	        a = li[i].getElementsByTagName("a")[0];
	        if (a.innerHTML.toUpperCase().indexOf(filter) != -1) {
	            li[i].style.display = "";
	        } else {
	            li[i].style.display = "none";
	        }
	    }
	}

}