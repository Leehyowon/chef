<!--상품 설명 페이지-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CHEF</title>
        <link href="/chef/main/favicon.png" type="image/png" rel="shortcut icon"/>
        <link href="/chef/main/main.css" type="text/css" rel="stylesheet" />
        <link href="/chef/things/things.css" type="text/css" rel="stylesheet"> <!-- 임시 css파일 -->
        <script src="ThingFunc.js" type="text/javascript"></script>
        <script src="http://malsup.github.com/jquary.cycle2.js"></script>
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

                    <li><a href="#">CUSTOMER CARE</a></li>
                    <li><a href="/chef/mypage/mypage.php">MY PAGE</a></li>
                    <li><a href="/chef/login/signup.php">Sign In</a></li>
                    <li><a href="/chef/main/search.php">Search</a></li>
                </ul>
            </div>
        </nav>

<!-- /things/eachThings.php?brand=***&productName=***
dallrang, veneno, joy만 이미지가 있나봄..-->

            <?php
                $brand = $_GET["brand"];
                $productName = $_GET["productName"];

                $host = 'localhost';
                $user = 'chef';
                $pwd = '1234';
                $dbName = 'chef';
                                    
                $mysqli = new mysqli($host, $user, $pwd, $dbName);
                // $db = new PDO("mysql:dbname=CHEF;host=localhost", "chef", "1234");

                $sql2 = "SELECT name,price FROM product WHERE brand = '".$brand."' AND product_id='".$productName."'";
                // $info = $db -> query("SELECT name,price FROM product WHERE brand = '$brand' AND name='$productName'");
                $result = $mysqli->query($sql2);
                $info = array();
                if ($result->num_rows > 0) {
                // output data of each row
                    while($row = $result->fetch_assoc()) {
                        // print_r($row);
                        // echo "<script>alert();</script>";
                        $info["name"] = $row["name"];
                        $info["price"] = $row["price"];
                        // print_r($row);
                    }
                } else {
                    echo "0 results";
                }

            ?>


            <article>
                <div id="brandbox">
                    <img src="/chef/image/banner/<?= $brand ?>.png">
                </div>

                <div class="picture">
                    <img src="/chef/image/<?= $brand ?>/<?= $productName ?>.png" alt="ring">
                </div>


                <div class="one_two"> <!--귀걸이 상품들 정보를 모아 데이터베이스를 이용해서 불러와야 할 것 같음  -->
                    <h2><?= $info["name"] ?></h2>
                    <div class="price">
                        <p><?= $info["price"] ?></p>
                        <p>배송비 2,500</p>
                    </div>
<<<<<<< HEAD
                    
                    <form class="input">
=======
                    <form method="post" class="input" action="/chef/things/buy.php">
>>>>>>> af42a1a7a1c2b525d0b3a63a853fd1bab4133f0d
                        <ul>
                            <li>주문 수량</br> 
                                <select name="number">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </li>
                            
                            <li>소재</br>                            
                                <select name="ringoption">
                                    <option>골드</option>
                                    <option>실버</option>
                                    <option>무니켈</option>
                                </select>
                            </li>
                            <!--주문하기 버튼을 눌렀을때 위에 변수 number와 ringoption을 데이터형식으로 저장할 수 있게 내보내는 방법을 찾아야 함ㅠ
                            <input type="submit" name="put" value="주문하기" /> -->
                        </ul>

                        <p>총 상품금액</p>
<<<<<<< HEAD
                        <button id="buy" type="button" name="buy">구매하기</button>
=======
                    <!--이 부분도 php로 하는건가?-->

                    <!-- <div> -->
                        <!-- <p><a href="">구매하기</a></p>
                        <p><a href="">장바구니</a></p> -->
                        <!-- <form method="post"> -->
                        <!-- <button id="buy" type="button" name="buy">구매하기</button> -->
                        <input type="hidden" name="brand" value="<?=$brand?>" />   
                        <input type="hidden" name="price" value="<?=$info["price"]?>" />    
                        <input type="hidden" name="name" value="<?=$info["name"]?>" />  
                        <input type="submit" value="구매하기" />
>>>>>>> af42a1a7a1c2b525d0b3a63a853fd1bab4133f0d
                        <button id="pocket" type="button" name="pocket">장바구니</button>
                    </form>
                </div>
                <section>
                    <div class="thing_information"> <!--상세 정보-->
                        <img src="/chef/image/wootique/details/2_1.png" alt="ChainStick">
                        <img src="/chef/image/wootique/details/2_2.png" alt="">
                    </div>
                </section>
            </article>
<<<<<<< HEAD
            
=======
            <section>
                <hr/>

                <div class="button">
                    <p><a href="">상세정보</a></p>
                    <p><a href="/chef/things/things_blog.html">제품후기</a></p>
                </div>

                <hr/>

                <?php
                    $num = substr($productName,-1);
                    // print_r($num);
                ?>

                <div class="thing_information"> <!--상세 정보-->
                    <!-- <h3>comment</h3>
                    <p>가볍고 분위기 있는 드롭 디자인의 이어링.</p>
                    <p>원형과 드롭 스틱에 어우러진 체인 추가</p> -->
                    <img src="/chef/image/<?=$brand?>/details/<?=$num?>_1.png" alt="ChainStick">
                    <!-- <p>알맞게 떨어지는 체인드롭이 매우 분위기 있습니다.</p> -->
                    <img src="/chef/image/<?=$brand?>/details/<?=$num?>_2.png" alt="">
                    <!-- <p>유니크한 디자인에 깔끔하여 자꾸 눈이 가는 이어링이예요.</p>
                    <p>평소에 가벼운 드롭 스타일을 찾으셨다면, 정말 추천드립니다.</p> -->
                </div>

                <!--<div class="thing_blog"> 제품 후기

                </div>-->

            </section>
>>>>>>> af42a1a7a1c2b525d0b3a63a853fd1bab4133f0d
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
