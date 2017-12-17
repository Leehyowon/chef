<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>CHEF</title>
		<link href="/chef/main/favicon.png" type="image/png" rel="shortcut icon"/>
        <link href="/chef/main/main.css" type="text/css" rel="stylesheet" />
        <link href="/chef/main/search.css" type="text/css" rel="stylesheet" />
        <script src="/chef/main/search.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js" type="text/javascript"></script>
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
                                        <li><a href = "/chef/brand.php?brand=wootique">Wootique</a></li>
                                        <li><a href = "/chef/things/BrandThings.php">Dallrang</a></li>
                                        <li><a href = "/chef/brand.php?brand=veneno">veneno</a></li>
                                        <li><a href = "/chef/brand.php?brand=joy">joy</a></li>
                                        <li><a href = "/chef/brand.php?brand=ringing">ringing</a></li>
                                        <li><a href = "/chef/brand.php?brand=wingbling">wingbling</a></li>
                                        <li><a href = "/chef/brand.php?brand=slime1">Slimingo</a></li>
                                        <li><a href = "/chef/brand.php?brand=slime2">Byslime</a></li>
                                        <li><a href = "/chef/brand.php?brand=slime3">Sliming</a></li>
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

                <section>
                    <form method="post">
                        <input type="text" name="searchName" id="search" placeholder="search" />
                        <input type="image" src="search.png" id="s" name="search" value="search" />
                    </form>
                    <?php
                        $host = 'localhost';
                        $user = 'chef';
                        $pw = '1234';
                        $dbName = 'chef';
                        $mysqli = new mysqli($host, $user, $pw, $dbName);

                        $sql = "SELECT name FROM product";
                        $result = $mysqli->query($sql);
                        $all = array();
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                                $all[] = $row["name"];
                            }
                        } 
                    ?>

                    <!-- 전체리스트! js로 처음에 안보이게 해둠. 값을 입력하면 일치하는 친구들 밑에 나오게 만듬. -->
                    <div>
                        <ul id="myUL">
                            <?php 
                            foreach ($all as $value) {
                            ?>
                                <li><a href="#"><?=$value?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <!-- 여기까지 -->

                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $name = $_POST['searchName'];
                        

                            $sql = "SELECT name FROM product WHERE name like '%".$name."%'";
                            $result = $mysqli->query($sql);
                            $info = array();
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                                    $info[] = $row["name"];
                                }
                                foreach ($info as $inform) {
                    ?>

                                <!-- 검색(enter)한 후 나오는 결과값 -->
                                <li><a href="#"><?=$inform?></a></li>
                                <!-- 여기까지 -->

                    <?php
                                }
                            } else {
                                print "검색결과 없음";
                            }
                        }
                    ?>
                </section>
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