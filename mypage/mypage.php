<!-- 마이페이지 -->
<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
        echo "<script>alert('로그인 하셔야 합니다.');</script>";
        echo "<meta http-equiv='refresh' content='0;url=http://localhost:8888/chef/login/signup.php'>";
        // header("location : http://localhost:8888/login/login.php");
        exit;
    }
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>CHEF</title>
        <link href="/chef/main/favicon.png" type="image/png" rel="shortcut icon"/>
        <link href="/chef/main/main.css" type="text/css" rel="stylesheet" />
        <link href="/chef/imageSlider/nd_slider.css" rel="stylesheet" type="text/css" media="all">

        <link href="/chef/mypage/mypage.css" rel="stylesheet" type="text/css">
        <!-- <script src="http://malsup.github.com/jquary.cycle2.js"></script> -->
    </head>
    <body>
        <main>
            <nav>
                <div>
                    <ul>
                        <li><a href="/chef/main/index1.html" id="mainpage">CHEF</a></li>
                        <li><a href="/chef/main/index1.html">HOME</a></li>
                        <li><a href="#">SHOP</a>
                            <ul class="submenu">
                                <li><a href="/chef/brand.php?brand=wootique">by Brand</a>
                                    <ul>
                                        <li><a href = "/chef/brand/brand.php?brand=wootique">Wootique</a></li>
                                        <li><a href = "/chef/brand/brand.php?brand=dallrang">Dallrang</a></li>
                                        <li><a href = "/chef/brand/brand.php?brand=veneno">veneno</a></li>
                                        <li><a href = "/chef/brand/brand.php?brand=joy">joy</a></li>
                                        <li><a href = "/chef/brand/brand.php?brand=ringing">ringing</a></li>
                                        <li><a href = "/chef/brand/brand.php?brand=wingbling">wingbling</a></li>
                                        <li><a href = "/chef/brand/brand.php?brand=slime1">Slimingo</a></li>
                                        <li><a href = "/chef/brand/brand.php?brand=slime2">Byslime</a></li>
                                        <li><a href = "/chef/brand/brand.php?brand=slime3">Sliming</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">by Product</a>
                                    <ul>
                                        <li><a href="/chef/things/BrandThings.php">Clothes</a></li>
                                        <li><a href="/chef/things/BrandThings.php">Jewelry</a></li>
                                        <li><a href="#">Slime</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li><a href="/chef/customer/customer.html">CUSTOMER CARE</a></li>
                        <li><a href="/chef/mypage/mypage.php">MY PAGE</a></li>
                        <li><a href="/chef/login/signup.php">Sign In</a></li>
                        <li><a href="/chef/main/search.php">Search</a></li>
                    </ul>
                </div>
            </nav>

            <article>

                <h1>My Page</h1>
            
                <div class="point">
                    <ul>
                        <li>(<?=$user_name?>)님의</li>
                        <li>가용적립금</li>
                        <li>쿠폰</li>
                        <li>총 주문</li>
                    </ul>
                </div>

                <div class="my_menu"> 
                    <div class="menu">
                        <h3><a href="/chef/mypage/buypocket.html">POCKET 장바구니</a></h3>
                        <p>고객님께서 장바구니에 등록한 상품들을 보실 수 있습니다.</p>
                    </div>

                    <div class="menu">
                        <h3><a href="">ORDER 주문내역 조회</a></h3>
                        <p>고객님께서 주문하신 상품의 주문내역을 확인하실 수 있습니다.
                        비회원의 경우, 주문서의 주문번호와 비밀번호로 주문조회가 가능합니다.</p>
                    </div>
                                
                    <div class="menu">
                        <h3><a href="/chef/mypage/info.php">INFO 회원정보</a></h3>
                        <p>회원이신 고객님의 개인정보를 관리하는 공간입니다.
                        개인정보를 최신 정보로 유지하시면 보다 간편히 쇼핑을 즐기실 수 있습니다.</p>                                
                        
                    </div>
                            
                    <div class="menu">
                        <h3><a href="/chef/mypage/want.html">WISH LIST 관심상품</a></h3>
                        <p>관심상품으로 등록하신 상품의 목록을 보여드립니다.</p>            
                    </div>

                    <div class="menu">
                        <h3><a href="">POINT 적립금</a></h3>
                        <p>적립금은 상품 구매 시 사용하실 수 있습니다.
                        적립된 금액은 현금으로 환불되지 않습니다.</p>                                                    
                    </div>
                    
                    <div class="menu">
                        <h3><a href="">ADDRESS 배송 주소록 관리</a></h3>
                        <p>자주 사용하는 배송지를 등록하고 관리하실 수 있습니다.</p>           
                    </div>           
                </div>
            </article>
        </main>

        <footer>
            <ul>
                <li>CS CENTER</li>
                <li>1588-1588</li>
                <li>상담시간 : 09:00 ~ 17:00</li>
                <li>점심시간 : 12:00 ~ 13:00 </li>
            </ul>
            <ul>
                <li>BANK INFO</li>
                <li>신한 110386389614 (주)셰프</li>
                <li>기업 1111222233333 (주)셰프</li>
                <li>국민 245656565555 (주)셰프</li>
            </ul>
            <ul>
                <li>OUR STORE</li>
                <li>회사 : (주)셰프</li>
                <li>대표 : 김웹앱</li>
                <li>주소 : 경기도 안산시 상록구 사동 1271 </br>
                    한양대학교 제4공학관 SMaSH룸</li>
                <li>제휴/제안 : info@hanyang.ac.kr</li>
            </ul>
        </footer>
    </body>
</html>
