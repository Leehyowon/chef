<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>CHEF</title>
		<link href="https://github.com/hyemni/chef/blob/master/image/HBpic.jpeg?raw=true" type="image/jpeg" rel="shortcut icon"/>
        <link href="/chef/main/main.css" type="text/css" rel="stylesheet" />
        <link href="/chef/login/findID.css" type="text/css" rel="stylesheet" />
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
                                <li><a href="#">by Brand</a>
                                    <ul>
                                        <li><a href="#">Wootique</a></li>
                                        <li><a href="#">Dalrang</a></li>
                                        <li><a href="#">Clothes</a></li>
                                        <li><a href="#">Slime</a></li>
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
                        <li><a href="#">MY PAGE</a></li>
                        <li><a href="/chef/login/login.php">Sign In</a></li>
                    </ul>
                </div>           
            </nav>

            
            <article>
                <!-- <section>
                    <div>
						<h2>Find ID</h2>
						<hr/>
						<form method="post">
						<p> Name : <input type="text" name="findname" /> </p>
						<p>	E-mail : <input type="text" name="email" /> </p>
						<p>
							<div id="submitButton" >
								<input type="submit" name="findid" value="findid" />
							</div>
						</p>
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
                            $sql2 = "select * from consumer";
                            $result = $mysqli->query($sql2);
                            if ($result->num_rows > 0) {
                                    // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    if ($row["name"] == $findname && $row["email"] == $email){
                                        $check = FALSE; 
                                    }
                                }
                            } else {
                                echo "0 results";
                            }

							// 빈칸이 있는지 확인
							if (!isset($findname) || $findname=='' || !isset($email) || $email==''){
							?>
							<h1>Sorry</h1>
							<p>You didn't fill out the form completely. </p>
							
							<?php 	// 입력한 아이디와 등록된 아이디가 일치하는지, 해당 아이디에 따른 email 주소가 일치하는지 확인
							} else if ($check){
							?>
							<h1>Sorry</h1>
							<p>Check your Name and Email. </p>
							
							<?php
							} else {
							?>
							<ul> 
								<li>Name: <?= $findname ?></li>
								<li>E-mail: <?= $email ?></li>
							</ul>
							<?php
							}
						}
						?>
					</div>
                </section> -->
                <section>
                    <div class="forms">
                        <!-- <div class="back_img_sec">
                            <img src="back.jpg" alt="" />
                        </div> -->
                        <div class="form_login">
                            <h2>Find ID</h2>					
                            <input type="text" placeholder="Name" /></br>
                            <input type="text" placeholder="Email" /></br>
                            <button class="btn_login" onclick="">Find ID</button>               												
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