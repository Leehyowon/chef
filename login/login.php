<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>CHEF</title>
		<link href="https://github.com/hyemni/chef/blob/master/image/HBpic.jpeg?raw=true" type="image/jpeg" rel="shortcut icon"/>
		<link href="/chef/main/main.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
        <nav>
            <li><a href = "/chef/login/login.php"> Login </a></li>
            <li><a href = "/chef/login/signup.php"> SignUp </a></li>
            <li><a href = ""> Mypage </a></li>
            <li><a href = ""> Cart </a></li>
        </nav>

        <main>
            <aside>
                <div>
                    <a href = "/chef/main/index1.html"><img src="https://github.com/hyemni/chef/blob/master/main/image/logo.png?raw=true" alt="CHEF - centre of Hanyang univ.ERICA foundation club"
                    width = 200px height = 100px> </a>
                </div>

                <div class = "sidebar">
                    <ul>
                        <li>SHOPPING
                            <ul>
                                <li><a href = ""> by BRAND </a></li>
                                <ul>
                                    <li><a href = "">Wootique</a></li>
                                    <li><a href = "">Dalrang</a></li>
                                    <li><a href = "">Clothes1</a></li>
                                    <li><a href = "">Clothes2</a></li>
                                    <li><a href = "">Slime1</a></li>
                                    <li><a href = "">Slime2</a></li>
                                </ul>
                                <li><a href = ""> by PRODUCT </a></li>
                                <ul>
                                    <li><a href = "">Clothes</a></li>
                                    <li><a href = "">Jewelry</a></li>
                                    <li><a href = "">Slime</a></li>
                                </ul>
                            </ul>
                        </li>
                        <li>COMMUNITY
                            <ul>
                                <li><a href = "/chef/board/notice.html"> Notice </a></li>
                                <li><a href = "/chef/board/event.html"> Event </a></li>
                                <li><a href = "/chef/board/qna.html"> QnA </a></li>
                                <li><a href = "/chef/board/info.html"> Information </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>

            <article>
                <div class = "slide">
                    <img src="https://github.com/hyemni/chef/blob/master/main/image/slide1.png?raw=true" alt="slide image" 
                    width = "1040px" height = "550px" />
                </div>

                <section>
                    <div class="loginHtml">
						<h2>Log in</h2>
						<hr/>
						<form method="post">
						<p> ID : <input type="text" name="logid" /> </p>
						<p>	PW : <input type="password" name="logpw" /> </p>
						<p>
							<a href="/chef/login/signup.php">Sign Up</a> | <a href="/chef/login/findID.php">Find ID</a> | <a href="/chef/login/findpw.php">Find PW</a>
						</p>
						<p>
							<div id="submitButton" >
								<input type="submit" value="login" onclick="submit" />
							</div>
						</p>
						</form>
					</div>
					<div>
						<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							$logid = $_POST['logid'];
							$logpw = $_POST['logpw'];
						
							$filename = file("id.txt");
							$check = TRUE;

							// 아이디와 비밀번호가 맞는지 확인
							foreach ($filename as $info){
								$information = explode(";" , $info);
								if ($information[0] == $logid && $information[1] == $logpw){
									$check = FALSE;
								}
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
            <div class = "phone">
                <div class = "footer_title"> CS center </div>
                <div id = "num">
                    1588-1588
                </div>
                <div id = "operating_hour">
                    상담시간 : 09:00 ~ 17:00 </br>
                    점심시간 : 12:00 ~ 13:00
                </div>
            </div>

            <div class = "bank">
                <div class = "footer_title"> BANK info </div>
                <div id = "account">
                    신한 110386389614 (주)셰프 </br>
                    기업 1111222233333 (주)셰프 </br>
                    국민 245656565555 (주)셰프
                </div>
            </div>

            <div class = "company">
                <div class = "footer_title"> 기업정보 </div>
                <div id = "com_info">
                    <ul>
                        <li>회사 : (주)셰프</li>
                        <li>대표 : 김웹앱</li>
                        <li>주소 : 경기도 안산시 상록구 사동 1271 한양대학교 제4공학관 SMaSH룸</li>
                        <li>사업자등록번호 : [101-11-22222]</li>
                        <li>통신판매업신고 : 제2017-경기안산-0285호 [ 사업자정보확인 ]</li>
                        <li>제휴/제안 : info@hanyang.ac.kr</li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>