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
		
		// Confirm the registered Name and E-mail
		foreach ($filename as $info){
			$information = explode(";" , $info);
			if ($information[3] == $findname && $information[6] == $email){
				$check = FALSE;
			}
		}

		// Check Blank
		if (!isset($findname) || $findname=='' || !isset($email) || $email==''){
		?>
		<h1>Sorry</h1>
		<p>You didn't fill out the form completely. <a href="/login/findID.html">Try again?</a></p>
		
		<?php 	// Confirm the registered Name and E-mail. If not...
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