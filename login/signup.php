<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>CHEF</title>
		<link href="https://github.com/hyemni/chef/blob/master/image/HBpic.jpeg?raw=true" type="image/jpeg" rel="shortcut icon"/>
        <link href="/chef/main/main.css" type="text/css" rel="stylesheet" />
        <link href="/chef/login/signup.css" type="text/css" rel="stylesheet" />
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
                <section>
                    <div class="signup">
                        <h2>Sign Up</h2>
                        
                        <form method="post">
                            <table>
                                <tr>
                                    <td>ID</td>
                                    <td><input type="text" name="id" /></td>
                                </tr>
                                <tr>
                                    <td>PW</td>
                                    <td><input type="password" name="pw" /></td>
                                </tr>
                                <tr>
                                    <td>PW Check</td>
                                    <td><input type="password" name="pwcheck" /></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" name="name" /></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td><input type="text" name="address" /></td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>
                                        <select name="Phonenumber">
                                            <option selected="selected">010</option>
                                            <option>011</option>
                                            <option>016</option>
                                            <option>017</option>
                                            <option>018</option>
                                            <option>019</option>
                                        </select>-
                                        <input type="text" name="phone_mid" />-<input type="text" name="phone_back" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>E-mail</td>
                                    <td>
                                        <input type="text" name="e_mail_front" />@
                                        <input type="text" name="e-mail_back" />
                                        <select name="e-mail_back">
                                            <option selected="selected">직접 입력</option>
                                            <option value="naver.com">naver.com</option>
                                            <option value="daum.net">daum.net</option>
                                            <option value="nate.com">nate.com</option>
                                            <option value="hotmail.com">hotmail.com</option>
                                            <option>yahoo.com</option>
                                            <option>empas.com</option>
                                            <option>korea.com</option>
                                            <option>dreamwiz.com</option>
                                            <option>gmail.com</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td><input type="text" name="gender" /></td>
                                </tr>
                            </table>

                            <p>
                                <div id="submitButton" >
                                    <input type="submit" name="submit" value="submit" />
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
                            $id = $_POST['id'];
                            $pw = $_POST['pw'];
                            $pwcheck = $_POST['pwcheck'];
                            $name = $_POST['name'];
                            $address = $_POST['address'];
                            $phone = $_POST['phone'];
                            $e_mail = $_POST['e_mail'];
                            $gender = $_POST['gender'];
                            

                            // 새로 입력한 아이디가 중복되는지 확인.
                            $check = FALSE;
                            
                            $sql2 = "select * from consumer";
                            $result = $mysqli->query($sql2);
                            if ($result->num_rows > 0) {
                                    // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    // echo "id: " . $row["consumer_id"];
                                    if ($row["consumer_id"] == $id){
                                        $check = TRUE; 
                                    }
                                }
                            } else {
                                echo "0 results";
                            }
                            // $mysqli->close();
              
                            
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
                                
                                $sql = "insert INTO consumer VALUES";
                                $sql = $sql."('".$id."','".$pw."','".$e_mail."','".$name."','".$phone."',1998-02-13,'".$gender."')";
                                $mysqli->query($sql);

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
                                <li>Gender : <?= $gender ?> </li>
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