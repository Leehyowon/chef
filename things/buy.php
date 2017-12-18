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
                                        <li><a href = "/chef/brand/brand.php?brand=slimingo">Slimingo</a></li>
                                        <li><a href = "/chef/brand/brand.php?brand=beslime">Beslime</a></li>
                                        <li><a href = "/chef/brand/brand.php?brand=sliming">Sliming</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">by Product</a>
                                    <ul>
                                        <li><a href="/chef/product/categ.php?category=1">earring</a></li>
                                        <li><a href="/chef/product/categ.php?category=2">necklace&ring</a></li>
                                        <li><a href="/chef/product/categ.php?category=3">Slime</a></li>
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
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $brand = $_POST["brand"];
                $price = $_POST["price"];
                $name = $_POST["name"];
                // print_r($brand);
            }
                // $host = 'localhost';
                // $user = 'chef';
                // $pwd = '1234';
                // $dbName = 'chef';
                                    
                // $mysqli = new mysqli($host, $user, $pwd, $dbName);
                // // $db = new PDO("mysql:dbname=CHEF;host=localhost", "chef", "1234");

                // $sql2 = "SELECT name,price FROM product WHERE brand = '".$brand."' AND product_id='".$productName."'";
                // // $info = $db -> query("SELECT name,price FROM product WHERE brand = '$brand' AND name='$productName'");
                // $result = $mysqli->query($sql2);
                // $info = array();
                // if ($result->num_rows > 0) {
                // // output data of each row
                //     while($row = $result->fetch_assoc()) {
                //         // print_r($row);
                //         // echo "<script>alert();</script>";
                //         $info["name"] = $row["name"];
                //         $info["price"] = $row["price"];
                //         // print_r($row);
                //     }
                // } else {
                //     echo "0 results";
                // }

            ?>


            
                <h2>구매하시겠습니까?</h2>
                <p>정보</p>

                <p>브랜드 : <?=$brand?></p>
                <p>이름 : <?= $name ?></p>
                <p>가격 : <?=$price?></p>
                <p>정보</p>
            </article>
        </main>
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

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
