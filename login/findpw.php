<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>CHEF</title>
		<link href="https://github.com/hyemni/chef/blob/master/image/HBpic.jpeg?raw=true" type="image/jpeg" rel="shortcut icon"/>
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
                        <!-- <li>COMMUNITY
                            <ul>
                                <li class="mincate"><a href = "/chef/board/notice.html"> Notice </a></li>
                                <li class="mincate"><a href = "/chef/board/event.html"> Event </a></li>
                                <li class="mincate"><a href = "/chef/board/qna.html"> QnA </a></li>
                                <li class="mincate"><a href = "/chef/board/info.html"> Information </a></li>
                            </ul>
                        </li> -->
                        <li><a href="#">CUSTOMER CARE</a></li>
                        <li><a href="#">MY PAGE</a></li>
                        <li><a href="/chef/login/login.php">Sign In</a></li>
                    </ul>
                </div>           
            </nav>

            <article>
                <div class = "slide">
                    <img src="https://github.com/hyemni/chef/blob/master/main/image/slide1.png?raw=true" alt="slide image" 
                    width = "1040px" height = "550px" />
                </div>

                <section>
                    <div>
						<h2>Find PW</h2>
						<hr/>
						<form method="post">
						<p> ID : <input type="text" name="findid" /> </p>
						<p> Name : <input type="text" name="findname_pw" /> </p>
						<p>	E-mail : <input type="text" name="email_pw" /> </p>
						<p>
							<div id="submitButton" >
								<input type="submit" name="findpw" value="findpw" />
							</div>
						</p>
						</form>
					</div>
					<div>
						<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							$id = $_POST['findid'];
							$findname = $_POST['findname_pw'];
							$email = $_POST['email_pw'];
							$submit = $_POST['findpw'];
							
							$filename = file("id.txt");
							$check = TRUE;

							// 등록된 아이디와 입력한 아이디가 일치하는지, 해당 아이디에 따른 비밀번호와 email이 일치하는지.
							foreach ($filename as $info){
								$information = explode(";" , $info);
								if ($information[0] == $id && $information[3] == $findname && $information[6] == $email){
									$check = FALSE;
								}
							}

							// 빈칸 존재 확인
							if (!isset($id) || $id=='' || !isset($findname) || $findname=='' || !isset($email) || $email==''){
							?>
							<h1>Sorry</h1>
							<p>You didn't fill out the form completely. </p>
							
							<?php 	// 등록된 아이디와 입력한 아이디가 일치하는지, 해당 아이디에 따른 비밀번호와 email이 일치하는지.
							} else if ($check){
							?>
							<h1>Sorry</h1>
							<p>Check your ID,Name and Email. </p>
							
							<?php
							} else {
							?>
							<ul> 
								<li>ID: <?= $id ?></li>
								<li>Name: <?= $findname ?></li>
								<li>E-mail: <?= $email ?></li>
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