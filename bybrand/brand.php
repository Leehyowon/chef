<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>CHEF</title>
	<link href="https://github.com/hyemni/chef/blob/master/image/HBpic.jpeg?raw=true" type="image/jpeg" rel="shortcut icon"/>
	<link href="/Users/ju/Desktop/chef/main/main.css" type="text/css" rel="stylesheet" />
</head>

<body>

<!-- 효원이메인 -->
	<nav>
            <li><a href = ""> Login </a></li>
            <li><a href = ""> SignUp </a></li>
            <li><a href = ""> Mypage </a></li>
            <li><a href = ""> Cart </a></li>
        </nav>

        <main>
            <aside>
                <div>
                    <img src="https://github.com/hyemni/chef/blob/master/main/image/logo.png?raw=true" alt="CHEF - centre of Hanyang univ.ERICA foundation club"
                    width = 200px height = 100px />
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
                                <li><a href = ""> Notice </a></li>
                                <li><a href = ""> Event </a></li>
                                <li><a href = ""> QnA </a></li>
                                <li><a href = ""> Review </a></li>
                                <li><a href = ""> Information </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>

<!-- 효원이메인 -->


	<?php 
		$br = $_GET["brand"];
	?>
	<div id="brandbox">
		<img src="image/banner/<?= $br ?>.png">
		

	</div>

	<nav>
	<p>BRAND</p>	
		<ul>
			<li><a href="brand.php?brand=wootique">wootique</a></li>
			<li><a href="brand.php?brand=dalrang">dalrang</a></li>
			<li><a href="">clothes1</a></li>
			<li><a href="">clothes2</a></li>
			<li><a href="">slime1</a></li>
			<li><a href="">slime2</a></li>
			<!-- display : inline -->
		</ul>
	</nav>

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



<!-- 효원이메인 -->
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
<!-- 효원이메인 -->


</body>
</html>