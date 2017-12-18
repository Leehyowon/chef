<!--장바구니 페이지-->
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
        <link href="/chef/mypage/buypocket.css" type="text/css" rel="stylesheet">
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
                                <li><a href="brand.php?brand=wootique">by Brand</a>
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
                                        <li><a href="/chef/product/categ.php?category=1">Clothes</a></li>
                                        <li><a href="/chef/product/categ.php?category=2">Jewelry</a></li>
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
                <h1>장바구니</h1>
                <form method="post" action="buypocketcheck.php">
                <table>
                    <th>상품이미지</th>
                    <th id="infor">상품정보</th>
                    <th>판매가</th>
                    <th>수량</th>
                    <th>선택</th>
                    <th>배송정보</th>
                    
                    <?php
                    $host = 'localhost';
                    $user = 'chef';
                    $pwd = '1234';
                    $dbName = 'chef';
                                            
                    $mysqli = new mysqli($host, $user, $pwd, $dbName);
                    $consumer_id = $user_id;

                    $sql2 = "select * from buyPocket natural join product where consumer_id='".$consumer_id."'";
                    $result = $mysqli->query($sql2);

                        // $pocket_number;
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {

                        ?>
                        
                        <tr>
                            <td>
                                <img src="/chef/image/<?=$row["brand"]?>/<?=$row["product_id"]?>.png" alt="chaindrop">
                            </td>
                            <td><?=$row["name"]?></td>
                            <td><?=$row["price"]?></td>
                            <td><?=$row["number"]?></td>
                            <td> <input type="checkbox" name="<?=$row["product_id"]?>"/> </td>
                            <td>미결제</td>
                        </tr>
                        
                            <?php
                        }
                    } else {
                    }
                    
                    ?>
                </table>
                <input type="submit" id="buyReal" value="구매하기" />
                </form>
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
