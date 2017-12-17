window.onload = function() {
	var li = $("myUL").getElementsByTagName("li");
	for (var i = 0; i < li.length; i++) {
		li[i].addClassName('none');
		li[i].removeClassName('show');
    }
	$("search").onkeyup = my;
};

function my(){
	var filter, li, a;
	filter = $("search").value.toUpperCase();
    li = $("myUL").getElementsByTagName("li");
	if ($("search").value == ""){
    	for (var i = 0; i < li.length; i++) {
			li[i].addClassName('none');
			li[i].removeClassName('show');
    	}

    } else {
	    for (var i = 0; i < li.length; i++) {
	        a = li[i].getElementsByTagName("a")[0];
	        if (a.innerHTML.toUpperCase().indexOf(filter) != -1) {
	            li[i].removeClassName('none');
	            li[i].addClassName('show');
	        } else {
	            li[i].addClassName('none');
	            li[i].removeClassName('show');
	        }
	    }
	}

}