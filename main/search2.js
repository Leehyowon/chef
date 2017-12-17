var s = $("input");
var f  = $("form");
var a = $(".after");
var m = $("h4");

s.focus(function(){
    if( f.hasClass("open") ) return;
    f.addClass("in");
    setTimeout(function(){
        f.addClass("open");
        f.removeClass("in");
    }, 1300);
});

a.on("click", function(e){
    // e.preventDefault();
    if( !f.hasClass("open") ) return;
    s.val("");
    f.addClass("close");
    f.removeClass("open");
    setTimeout(function(){
        f.removeClass("close");
    }, 1300);
})

f.submit(function(e){
    // e.preventDefault();

    f.addClass("explode");
})