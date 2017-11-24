function upload() {
    var buybutton = document.getElementById("buy");
    var pocketbutton = document.getElementById("pocket");
    buybutton.onclick = buy;
    pocketbutton.onclick = pocket;
}
window.onload = upload;


var pock;
function pocket() {
    pock = confirm("상품이 장바구니에 정상적으로 등록되었습니다. \n장바구니로 이동하시겠습니까?")
    pocket2();
}
// var pock = document.getElementById("pocket");
function pocket2() {
    if (pock == true) {
        location.href="../mypage/buypocket.html";
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
