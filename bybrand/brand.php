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

        <?php 
            $br = $_GET["brand"];
        ?>
        <div id="brandbox">
            <img src="image/banner/<?= $br ?>.png">
            

        </div>

        <!-- <nav>
        <p>BRAND</p>	
            <ul>
                <li><a href="brand.php?brand=wootique">wootique</a></li>
                <li><a href="brand.php?brand=dalrang">dalrang</a></li>
                <li><a href="">clothes1</a></li>
                <li><a href="">clothes2</a></li>
                <li><a href="">slime1</a></li>
                <li><a href="">slime2</a></li> -->
                <!-- display : inline -->
            <!-- </ul>
        </nav> -->

        <?php 
        $dir = "image/<?= $br ?>";
        $out_dir = scandir($dir);
        $count = count($out_dir);
        for ($i=0; $i<$count ; $i++) { ?>
            <div id="itembox">
            <img src="image/<?= $br ?>/<?=$i?>.png">
            <a href=""><!--혜빈이가 만든 상세페이지로 가기--><?=$br?> item  <?=$i?></a>
        </div>
        <?php }	?>

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