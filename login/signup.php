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
                    <div class="signup">
                        <h2>Sign Up</h2>
                        <hr/>
                        <form method="post">
                        <p> ID : <input type="text" name="id" /> </p>
                        <p> PW : <input type="password" name="pw" /> </p>
                        <p> PW Check : <input type="password" name="pwcheck" /> </p>
                        <p> Name : <input type="text" name="name" /> </p>
                        <p> Address : <input type="text" name="address" /> </p>
                        <p> Phone : <input type="text" name="phone" /> </p>
                        <p> E-mail : <input type="text" name="e_mail" /> </p>
                        <p>
                            <div id="submitButton" >
                                <input type="submit" name="submit" value="submit" />
                            </div>
                        </p>
                        </form>
                    </div>
                    <div>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $id = $_POST['id'];
                            $pw = $_POST['pw'];
                            $pwcheck = $_POST['pwcheck'];
                            $name = $_POST['name'];
                            $address = $_POST['address'];
                            $phone = $_POST['phone'];
                            $e_mail = $_POST['e_mail'];
                            
                            $filename = file("id.txt");
                            $check = FALSE;

                            // 새로 입력한 아이디가 중복되는지 확인.
                            foreach ($filename as $info){
                                $information = explode(";" , $info);
                                if ($information[0] == $id){
                                    $check = TRUE;  
                                }
                            }
                            // 빈칸확인
                            if (!isset($id) || $id=='' || !isset($pw) || $pw=='' || !isset($pwcheck) || $pwcheck=='' || !isset($name) || $name=='' || !isset($address) || $address=='' || !isset($phone) || $phone=='' || !isset($e_mail) || $e_mail==''){  
                            ?>
                            <h1>Sorry</h1>
                            <p>You didn't fill out the form completely. </p>

                            <?php   // 비밀번호와 비밀번호 확인란에 입력한 값 같은지.
                            } else if ($pw != $pwcheck){    
                            ?>
                            <h1>Sorry</h1>
                            <p>PW and PW Check aren't match. </p>

                            <?php   // email 형식이 맞는지 확인.
                            } else if (!preg_match("/^[A-Za-z0-9_%+-]+@[A-Za-z]+\.[A-Za-z]{2,}$/",$e_mail)) { 
                            ?>
                            <h1>Sorry</h1>
                            <p>Write Correct E-mail Address. </p>

                            <?php   // 아이디가 중복되었을 때
                            } else if ($check) {
                            ?>
                            <h1>Sorry</h1>
                            <p>Your ID exists. </p>

                            <?php
                            } else {
                                $idAdd = "id.txt";
                                $newarray = array($id,$pw,$pwcheck,$name,$address,$phone,$e_mail,$login);
                                $newtext = implode(";", $newarray);
                                file_put_contents($idAdd, $newtext."\n", FILE_APPEND);  // txt 파일에 정보들을 ; 로 구분하여 적는다.
                            ?>
                            <h2>Your Information</h2>
                            <ul> 
                                <li>ID: <?= $id ?></li>
                                <li>PW: <?= $pw ?></li>
                                <li>PW Check : <?= $pwcheck ?> </li>
                                <li>Name : <?= $name ?> </li>
                                <li>Address : <?= $address ?> </li>
                                <li>Phone : <?= $phone ?> </li>
                                <li>E-mail : <?= $e_mail ?> </li>
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