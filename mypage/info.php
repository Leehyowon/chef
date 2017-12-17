<html>
    <head>
        <meta charset="utf-8">
        <title>CHEF</title>
        <link href="/chef/main/favicon.png" type="image/png" rel="shortcut icon"/>
        <link href="/chef/main/main.css" type="text/css" rel="stylesheet" />
        <link href="/chef/mypage/info.css" type="text/css" rel="stylesheet" />
        <!-- <script src="http://malsup.github.com/jquary.cycle2.js"></script> -->
        <script src="/chef/mypage/info.js"></script>
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

            <article>
                <?php
                    session_start();
                    $user_id = $_SESSION['user_id'];
                    $user_name = $_SESSION['user_name'];
                    
                    $host = 'localhost';
                    $user = 'chef';
                    $pw = '1234';
                    $dbName = 'chef';
                    $mysqli = new mysqli($host, $user, $pw, $dbName);

                    $sql = "SELECT * FROM consumer WHERE consumer_id='".$user_id."'";
                    $result = $mysqli->query($sql);
                    $info = array();
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        // print_r($row);
                    }
                ?>
                <h1><?=$user_id?> 님의 개인정보</h1>
                <div class="before">
                    <table>
                        <tr><td class="t">NAME</td><td><?=$row["name"]?></td></tr>
                        <tr><td class="t">PW</td><td><?=$row["pwd"]?></td></tr>
                        <tr><td class="t">E-mail</td><td><?=$row["email"]?></td></tr>
                        <tr><td class="t">PHONE</td><td><?=$row["tel"]?></td></tr>
                        <tr><td class="t">BIRTH</td><td><?=$row["birth"]?></td></tr>
                        <tr><td class="t">GENDER</td><td><?=$row["gender"]?></td></tr>
                    </table>                 
                    <button id="edit">Edit</button>
                </div>

                
                <form method="post">
                    <div class="after">
                        <table>
                            <tr><td class="t">NAME</td><td><?=$row["name"]?></td></tr>
                            <tr><td class="t">PW</td><td><input type="text" name="pw" value="<?=$row["pwd"]?>" placeholder="<?=$row["pwd"]?>" /></td></tr>
                            <tr><td class="t">E-mail</td><td><input type="text" name="email" value="<?=$row["email"]?>" placeholder="<?=$row["email"]?>" /></td></tr>
                            <tr><td class="t">PHONE</td><td><input type="text" name="phone" value="<?=$row["tel"]?>" placeholder="<?=$row["tel"]?>" /></td></tr>
                            <tr><td class="t">BIRTH</td><td><?=$row["birth"]?></td></tr>
                            <tr><td class="t">GENDER</td><td><?=$row["gender"]?></td></tr>
                        </table>   
                        <div class="btn">
                            <input id="change" type="submit" name="changeInfo" value="Change" />
                            <button id="cancel">Cancel</button>
                        </div>
                    </div>
                        
                </form>
            
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $pw = $_POST['pw'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone'];

                        $sql = "UPDATE consumer SET pwd='".$pw."', email='".$email."', tel='".$phone."' WHERE consumer_id='".$user_id."'";
                        $mysqli->query($sql);
                ?>
                <meta http-equiv='refresh' content='0;url=http://localhost:8888/chef/mypage/info.php'>
                <?php
                    }
                ?>
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