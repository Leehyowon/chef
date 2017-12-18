<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>CHEF</title>
		<link href="https://github.com/hyemni/chef/blob/master/image/HBpic.jpeg?raw=true" type="image/jpeg" rel="shortcut icon"/>
        <link href="/chef/main/main.css" type="text/css" rel="stylesheet" />
        <link href="/chef/login/findID.css" type="text/css" rel="stylesheet" />
        <script src="/chef/login/findID.js"></script>
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
                                <li><a href="brand.php?brand=wootique">by Brand</a>
                                    <ul>
                                        <li><a href = "brand.php?brand=wootique">Wootique</a></li>
                                        <li><a href = "brand.php?brand=dallrang">Dallrang</a></li>
                                        <li><a href = "brand.php?brand=veneno">veneno</a></li>
                                        <li><a href = "brand.php?brand=joy">joy</a></li>
                                        <li><a href = "brand.php?brand=ringing">ringing</a></li>
                                        <li><a href = "brand.php?brand=wingbling">wingbling</a></li>
                                        <li><a href = "brand.php?brand=slime1">Slime1</a></li>
                                        <li><a href = "brand.php?brand=slime2">Slime2</a></li>              
                                        <li><a href = "brand.php?brand=slime3">Slime3</a></li>
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
                        <li><a href="/chef/mypage/buypocket.html">MY PAGE</a></li>
                        <li><a href="/chef/login/signup.php">Sign In</a></li>
                        <li><a href="/chef/main/search.php">Search</a></li>
                    </ul>
                </div>
            </nav>

            
            <article>
                <section>
                    <div class="forms">
                        <!-- <div class="back_img_sec">
                            <img src="back.jpg" alt="" />
                        </div> -->
                        <div id="find1" class="find1">
                            <form method="post">
                                <div class="form_login">
                                    <h2>Find ID</h2>					
                                    <input type="text" name="findname" placeholder="Name" /></br>
                                    <input type="text" name="email" placeholder="Email" /></br>
                                    <!-- <button class="btn_login" onclick="">Find ID</button> -->
                                    <input type="submit" id="btn" name="findid" class="btn_login" value="Find Id" />               												
                                </div>
                            </form>
                        </div>
                        <div>
                        <?php
                            $host = 'localhost';
                            $user = 'chef';
                            $pwd = '1234';
                            $dbName = 'chef';
                            
                            $mysqli = new mysqli($host, $user, $pwd, $dbName);

                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $findname = $_POST['findname'];
                                $email = $_POST['email'];
                                
                                // 입력한 아이디와 등록된 아이디가 일치하는지, 해당 아이디에 따른 email 주소가 일치하는지 확인
                                $check = TRUE;                  
                                $sql2 = "SELECT * FROM consumer";
                                $result = $mysqli->query($sql2);
                                if ($result->num_rows > 0) {
                                        // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        if ($row["name"] == $findname && $row["email"] == $email){
                                            $check = FALSE; 
                                        }
                                    }
                                } else {
                                    // echo "0 results";
                                }

                                // 빈칸이 있는지 확인
                                if (!isset($findname) || $findname=='' || !isset($email) || $email==''){
                                    echo "<script>alert('빈칸을 다 채워주세요.');history.back();</script>";
                                    exit;
                                ?>
                                
                                <?php   // 입력한 아이디와 등록된 아이디가 일치하는지, 해당 아이디에 따른 email 주소가 일치하는지 확인
                                } else if ($check){
                                    echo "<script>alert('이름 또는 이메일이 잘못되었습니다.');history.back();</script>";
                                    exit;
                                ?>
                                
                                <?php
                                } else {
                                ?>
                                <div id="find2">
                                    <p><?=$findname?>님의 아이디 목록</p>
                                <?php    
                                    $sql = "SELECT consumer_id FROM consumer WHERE name = '".$findname."' and email='".$email."'";
                                    $result = $mysqli->query($sql);
                                    $consumerIDs = array();
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            $consumerIDs[] = $row["consumer_id"];
                                        } 
                                    }
                                    foreach ($consumerIDs as $consumerID) {
                                ?>
                                    <p><?=$consumerID?></p>
                                <?php
                                    }
                                    ?>
                                </div>
                                    <?php
                                }
                            }
                        ?>
                        </div>
                    </div>
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