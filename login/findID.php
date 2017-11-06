<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CHEF</title>
	</head>

	<body>
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$findname = $_POST['findname'];
			$email = $_POST['email'];
		}
		$filename = file("id.txt");
		$check = TRUE;
		
		// 입력한 아이디와 등록된 아이디가 일치하는지, 해당 아이디에 따른 email 주소가 일치하는지 확인
		foreach ($filename as $info){
			$information = explode(";" , $info);
			if ($information[3] == $findname && $information[6] == $email){
				$check = FALSE;
			}
		}

		// 빈칸이 있는지 확인
		if (!isset($findname) || $findname=='' || !isset($email) || $email==''){
		?>
		<h1>Sorry</h1>
		<p>You didn't fill out the form completely. <a href="/login/findID.html">Try again?</a></p>
		
		<?php 	// 입력한 아이디와 등록된 아이디가 일치하는지, 해당 아이디에 따른 email 주소가 일치하는지 확인
		} else if ($check){
		?>
		<h1>Sorry</h1>
		<p>Check your Name and Email. <a href="/login/findID.html">Try again?</a></p>
		
		<?php
		} else {
		?>
		<ul> 
			<li>Name: <?= $findname ?></li>
			<li>E-mail: <?= $email ?></li>
		</ul>
		<?php
		}
		?>

	</body>
</html>