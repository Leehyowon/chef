<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CHEF</title>
	</head>

	<body>
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$id = $_POST['findid'];
			$findname = $_POST['findname_pw'];
			$email = $_POST['email_pw'];
			$submit = $_POST['findpw'];
		}
		$filename = file("id.txt");
		$check = TRUE;

		// Confirm the registered ID, Name and E-mail
		foreach ($filename as $info){
			$information = explode(";" , $info);
			if ($information[0] == $id && $information[3] == $findname && $information[6] == $email){
				$check = FALSE;
			}
		}

		// Check Blank
		if (!isset($id) || $id=='' || !isset($findname) || $findname=='' || !isset($email) || $email==''){
		?>
		<h1>Sorry</h1>
		<p>You didn't fill out the form completely. <a href="/login/findpw.html">Try again?</a></p>
		
		<?php 	// Confirm the registered ID, Name and E-mail. If not...
		} else if ($check){
		?>
		<h1>Sorry</h1>
		<p>Check your ID,Name and Email. <a href="/login/findpw.html">Try again?</a></p>
		
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
		?>

	</body>
</html>