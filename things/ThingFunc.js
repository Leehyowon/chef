function upload() {
    var buybutton = document.getElementById("buy");
    var pocketbutton = document.getElementById("pocket");
    buybutton.onclick = buy;
    pocketbutton.onclick = pocket;
}
window.onload = upload;


var pock;
function pocket() {
    pock = confirm("장바구니로 이동하시겠습니까?")
    pocket2();
}
// var pock = document.getElementById("pocket");
function pocket2() {
    if (pock == true) {
        document.getElementById("search-theme-form").action = "/chef/mypage/buypockerC.php";
        location.href="../mypage/buypocket.php";
    }
}

function buy() { //구입하는 페이지
}

function writing(){
    location.href="./writingblog.html";
}

function blogging(){
    //DB저장
    location.href="./things_blog.html";
}
