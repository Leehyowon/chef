<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>CHEF</title>
		<link href="https://github.com/hyemni/chef/blob/master/image/HBpic.jpeg?raw=true" type="image/jpeg" rel="shortcut icon"/>
        <link href="/chef/main/main.css" type="text/css" rel="stylesheet" />
        <link href="/chef/login/login.css" type="text/css" rel="stylesheet" />
        <script src="/chef/login/login.js"></script>
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
                                        <li><a href = "brand.php?brand=slime2">Slime2</a></li>              <li><a href = "brand.php?brand=slime3">Slime3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">by Product</a>
                                    <ul>
                                        <li><a href="#">Clothes</a></li>
                                        <li><a href="#">Jewelry</a></li>
                                        <li><a href="#">Slime</a></li>    
                                    </ul>
                                </li>
                            </ul>
                        </li>                                                                                            
                        
                        <li><a href="#">CUSTOMER CARE</a></li>
                        <li><a href="/chef/mypage">MY PAGE</a></li>
                        <li><a href="/chef/login/login.php">Sign In</a></li>
                    </ul>
                </div>           
            </nav>

            <article>
                <section>
                    <div class="loginHtml">
						<h2>Log in</h2>						
						<form method="post">
                            <div class="login">
                                <input type="text" name="logid" placeholder="Your ID"/>
                            </div>
                            <div class="login">
                                <input type="password" name="logpw" placeholder="Your Password"/>
                            <div>
                            <div>
                                <input type="submit" value="login" onclick="submit" id="submitButton"/>
                            </div>
                            <a href="/chef/login/signup.php">Sign Up</a> | <a href="/chef/login/findID.php">Find ID</a> | <a href="/chef/login/findpw.php">Find PW</a>
                        </form>                        
                    </div>

                    <div class="facebook">
                        <fb:login-button id="fbbnt" scope="public_profile,email" onlogin="checkLoginState();">페이스북으로 로그인</fb:login-button>
                    </div>

					<div>
					<?php
                        $host = 'localhost';
                        $user = 'chef';
                        $pw = '1234';
                        $dbName = 'chef';
                        $mysqli = new mysqli($host, $user, $pw, $dbName);
    
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
							$logid = $_POST['logid'];
							$logpw = $_POST['logpw'];
						
							$filename = file("id.txt");
							$check = TRUE;

                            $sql2 = "select * from consumer";
                            $result = $mysqli->query($sql2);
                            if ($result->num_rows > 0) {
                                    // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    if ($row["consumer_id"] == $logid && $row["pwd"] == $logpw){
                                        $check = FALSE; 
                                    }
                                }
                            } else {
                                echo "0 results";
                            }

							// 빈칸확인
							if (!isset($logid) || $logid=='' || !isset($logpw) || $logpw==''){
							?>
							<h1>Sorry</h1>
							<p>You didn't fill out the form completely. </p>
							
							<?php 	// 아이디와 비밀번호 맞는지 확인
							} else if ($check){
							?>
							<h1>Sorry</h1>
							<p>Check your ID and PW. </p>
							
							<?php
							} else {
							?>
							<h2>Your Information</h2>
							<ul> 
								<li>ID: <?= $logid ?></li>
								<li>PW: <?= $logpw ?></li>
							</ul>
							<?php
							}
						}
						?>
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