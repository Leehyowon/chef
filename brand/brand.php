
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>CHEF</title>
    <link href="https://github.com/hyemni/chef/blob/master/image/HBpic.jpeg?raw=true" type="image/jpeg" rel="shortcut icon"/>
    <link href="brand.css" type="text/css" rel="stylesheet" />
    <link href="/chef/main/main.css" type="text/css" rel="stylesheet" />
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
            <?php 
                $br = $_GET["brand"];
            ?>
            <div id="brandbox">
                <img src="/chef/image/banner/<?= $br ?>.png">
            </div>

            <?php
                $db = new PDO("mysql:dbname=CHEF;host=localhost", "root", "root");
                $rows = $db -> query("SELECT product_id,name FROM product WHERE brand = '$br'");
                foreach ($rows as $row) {?>
                    <div id="itembox">
                        <img src="/chef/image/<?= $br ?>/<?=$row["product_id"]?>.png">
                        <p><a href="/chef/things/eachThings.php?brand=<?=$br?>&productName=<?=$row["product_id"]?>">[<?=$br?>] <?=$row["name"]?></a></p>
                    </div> 
                <?php } ?>
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