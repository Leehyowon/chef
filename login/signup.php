<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>CHEF</title>
		<link href="https://github.com/hyemni/chef/blob/master/image/HBpic.jpeg?raw=true" type="image/jpeg" rel="shortcut icon"/>
        <link href="/chef/main/main.css" type="text/css" rel="stylesheet" />
        <link href="/chef/login/signup.css" type="text/css" rel="stylesheet" />
        <script src="/chef/login/signup.js"></script>
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
                                        <li><a href="#">Clothes</a></li>
                                        <li><a href="#">Jewelry</a></li>
                                        <li><a href="#">Slime</a></li>    
                                    </ul>
                                </li>
                            </ul>
                        </li>                                                                                            
                        <li><a href="#">CUSTOMER CARE</a></li>
                        <li><a href="/chef/mypage/mypage.php">MY PAGE</a></li>
                        <li><a href="/chef/login/signup.php">Sign In</a></li>
                    </ul>
                </div>           
            </nav>

            <article>    
                <div class="main_log">
                    <div class="login">
                        <?php
                        session_start();
                            
                        if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
                        ?>
                        

                        <div class="log_sign_up">
                            <div class="pre_login">
                                <div class="pre_content">                            
                                    <h2>LOGIN</h2> 
                                    <button class="btn_login" onclick="login()">LOGIN</button>
                                </div>
                            </div> 

                            <!-- <div class="back_info">
                                <div class="back_img_sec">
                                    <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
                                </div>                        
                            </div> -->

                            
                            <div class="pre_sign_up">
                                <div class="pre_content">
                                    <h2>SIGN UP</h2>                    
                                    <!-- <p>여기도 뭐라고 써야할지 모르겠어 :)</p> -->
                                    <button class="btn_sign_up" onclick="sign_up()">SIGN UP</button>
                                </div>
                            </div>
                        </div>
                    

                        <div class="forms" >
                            <!-- <div class="back_img_sec">
                                <img src="back.jpg" alt="" />
                            </div> -->
                            <div class="form_login">
                                <a href="#" class="login_sign_up"><img src="arr.png"/></a>
                                <h2>LOGIN</h2>
                                <form method="post" action="/chef/login/login_ok.php">
                                    <input type="text" name="logid" placeholder="Your ID"/>
                                    <input type="password" name="logpw" placeholder="Your Password"/>
                                        <!-- <button class="btn_login" onclick="login()">LOGIN</button> -->
                                        <!-- HERE -->
                                    <input type="submit" id="login" class="btn_login" value="LOGIN" />
                                        <!-- HERE -->
                                    <br/>
                                </form>
                                <button class="btn_find" onclick=""><a href="/chef/login/findID.php">FIND ID</a></button>
                                <button class="btn_find" onclick=""><a href="/chef/login/findpw.php">FIND PW</a></button>
                                
                            </div>
                
                            <div class="form_sign_up">
                                <a href="#" class="login_sign_up"><img src="arr.png"/></a>
                                <h2>SIGN UP</h2>    
                                <form method="post" action="/chef/login/signupCheck.php">
                                    <input type="text" name="name" placeholder="Name" />
                                    <input type="text" name="id" placeholder="Your ID" />
                                    <input type="password" name="pw" placeholder="Password" />
                                    <input type="password" name="pwcheck" placeholder="Confirm Password" />
                                    <input type="text" name="phone" placeholder="Phone" class="phone"/>-<input type="text" name="phonemid" class="phone"/>-<input type="text" name="phoneback" class="phone"/>
                                    <input type="text" name="address" placeholder="Address" />
                                    <input type="text" name="e_mail" placeholder="E-mail" />
                                    <!-- <button class="btn_sign_up" onclick="sign_up()">SIGN UP</button> -->
                                    <!-- HERE -->
                                    <input type="submit" id="signup" class="btn_sign_up" value="SIGN UP" id="submitButton" />
                                <!-- HERE -->
                                </form>
                            </div>
                        </div>    
                        <?php    
                        } else {
                            $user_id = $_SESSION['user_id'];
                            $user_name = $_SESSION['user_name'];
                        ?>

                            <!-- 여기.. -->
                            <div class="logout_forms">
                                <div class="logout">
                                    안녕하세요. <?= $user_name." (".$user_id.")" ?> 님</br>
                                    <button><a href='/chef/login/logout.php'>LOGOUT</a></button>
                                    
                                </div>
                                
                            </div>
                            
                                    
                        <?php
                        }?>                
                    </div>
                
                </div>
                
                <!-- <div> -->
                            
                <!-- </div> -->
            <!-- </div> -->
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
                <li>주소 : 경기도 안산시 상록구 사동 1271 <br/>
                    한양대학교 제4공학관 SMaSH룸</li>
                <li>제휴/제안 : info@hanyang.ac.kr</li>
            </ul>                
        </footer>
    </body>
</html>
