<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>CHEF</title>
		<link href="https://github.com/hyemni/chef/blob/master/image/HBpic.jpeg?raw=true" type="image/jpeg" rel="shortcut icon"/>
        <link href="/chef/main/main.css" type="text/css" rel="stylesheet" />
        <link href="/chef/login/findpw.css" type="text/css" rel="stylesheet" />
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
                                        <li><a href = "/chef/brand/brand.php?brand=slimingo">Slimingo</a></li>
                                        <li><a href = "/chef/brand/brand.php?brand=beslime">Beslime</a></li>
                                        <li><a href = "/chef/brand/brand.php?brand=sliming">Sliming</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">by Product</a>
                                    <ul>
                                        <li><a href="/chef/product/categ.php?category=1">earring</a></li>
                                        <li><a href="/chef/product/categ.php?category=2">necklace&ring</a></li>
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
                        <form class="before" method="post">
                            <div class="form_pw">
                                <h2>Find PW</h2>
                                <input type="text" name="findid" placeholder="ID"/></br>
                                <input type="text" name="findname_pw" placeholder="Name"/></br>
                                <input type="text" name="email_pw" placeholder="E-mail"/></br>
                                <!-- <button class="btn_pw" name="findpw" value="findpw" onclick="">Find PW</button>  -->
                                <input id="btn" type="submit" name="findpw" value="Find PW" />
                            </div>
                        </form>
                    
                    <?php
                        $host = 'localhost';
                        $user = 'chef';
                        $pwd = '1234';
                        $dbName = 'chef';
                        
                        $mysqli = new mysqli($host, $user, $pwd, $dbName);

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $id = $_POST['findid'];
                            $findname = $_POST['findname_pw'];
                            $email = $_POST['email_pw'];
                            $submit = $_POST['findpw'];
                                                        
                            // 등록된 아이디와 입력한 아이디가 일치하는지, 해당 아이디에 따른 비밀번호와 email이 일치하는지.
                            $check = TRUE;                  
                            $sql2 = "SELECT * from consumer";
                            $result = $mysqli->query($sql2);
                            if ($result->num_rows > 0) {
                                    // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    if ($row["consumer_id"] == $id && $row["name"] == $findname && $row["email"] == $email){
                                        $check = FALSE; 
                                    }
                                }
                            } else {
                                // echo "0 results";
                            }

                            
                            // 빈칸 존재 확인
                            if (!isset($id) || $id=='' || !isset($findname) || $findname=='' || !isset($email) || $email==''){
                                echo "<script>alert('빈칸을 다 채워주세요.');history.back();</script>";
                                exit;
                            ?>
                            
                            <?php   // 등록된 아이디와 입력한 아이디가 일치하는지, 해당 아이디에 따른 비밀번호와 email이 일치하는지.
                            } else if ($check){
                                echo "<script>alert('아이디, 이름, 이메일에 일치하는 등록된 아이디가 없습니다.');history.back();</script>";
                                exit;
                            ?>
                            
                            <?php
                            } else {
                                // $sql = "SELECT pwd FROM consumer WHERE consumer_id = '".$id."'";
                                // $result = $mysqli->query($sql);
                                // if ($result->num_rows > 0) {
                                //     // while($row = $result->fetch_assoc()) {
                                //     //     $consumerPW = $row["pwd"];
                                //     // } 
                                //     $row = $result->fetch_assoc();
                                // }

                            ?>
                            <div class="changepw">
                                <form method="post" action="/chef/login/newPW.php">
                                    <p><?=$id?> 님! 비밀번호를 변경하시겠어요?</p>
                                    <!-- <input type="hidden" name="brand" value="<?=$brand?>" />    -->
                                    <!-- <input type="hidden" name="price" value="<?=$info["price"]?>" />     -->
                                    <input type="hidden" name="id" value="<?=$id?>" />  
                                    <!-- <input type="hidden" name="id" value="<?=$productName?>" /> -->
                                    <button id="change">변경하기</button>
                                </form>
                            </div>
                            
                            <?php
                            }
                            ?>
                            <!-- <form class="after">
                                <p>hi</p>
                            </form> -->
                            <?php
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