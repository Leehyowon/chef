<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CHEF</title>
	</head>

	<body>
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$logid = $_POST['logid'];
			$logpw = $_POST['logpw'];
		}
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
		<p>You didn't fill out the form completely. <a href="/login/login.html">Try again?</a></p>
		
		<?php 	// 아이디와 비밀번호 맞는지 확인
		} else if ($check){
		?>
		<h1>Sorry</h1>
		<p>Check your ID and PW. <a href="/login/login.html">Try again?</a></p>
		
		<?php
		} else {
		?>
		<ul> 
			<li>ID: <?= $logid ?></li>
			<li>PW: <?= $logpw ?></li>
		</ul>
		<?php
		}
		?>

	</body>
</html>