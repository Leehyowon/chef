window.onload = function() {
    var close = $$(".login_sign_up");
    for (var i = 0; i < close.length; i++) {
        close[i].onclick = login_sign_up;
    }
    $("login").onclick = login;
    $("signup").onclick = sign_up;
};

// function alertF(){
//     alert("yes");
// }

function login() {
    document.querySelector('.forms').className = "forms active_login";  
    document.querySelector('.form_login').style.display = "block";
    document.querySelector('.form_sign_up').style.opacity = "0";               
    
    setTimeout(function(){  document.querySelector('.form_login').style.opacity = "1"; },400);  
        
    setTimeout(function(){    
    document.querySelector('.form_sign_up').style.display = "none";
    },200);  
}
  
function sign_up(at) {
    document.querySelector('.forms').className = "forms active_sign_up";
    document.querySelector('.form_sign_up').style.display = "block";
    document.querySelector('.form_login').style.opacity = "0";

    setTimeout(function(){  document.querySelector('.form_sign_up').style.opacity = "1";
    },100);  

    setTimeout(function(){   document.querySelector('.form_login').style.display = "none";
    },400);  

}    

function login_sign_up() {
    document.querySelector('.forms').className = "forms";  
    document.querySelector('.form_sign_up').style.opacity = "0";               
    document.querySelector('.form_login').style.opacity = "0"; 

    setTimeout(function(){
    document.querySelector('.form_sign_up').style.display = "none";
    document.querySelector('.form_login').style.display = "none";
    },500);  

}
  
  
  
  
  