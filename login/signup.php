<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CHEF</title>
	</head>

	<body>
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$id = $_POST['id'];
			$pw = $_POST['pw'];
			$pwcheck = $_POST['pwcheck'];
			$name = $_POST['name'];
			$address = $_POST['address'];
			$phone = $_POST['phone'];
			$e_mail = $_POST['e_mail'];
		}
		$filename = file("id.txt");
		$check = FALSE;

		// Confirm the registered ID == newID
		foreach ($filename as $info){
			$information = explode(";" , $info);
			if ($information[0] == $id){
				$check = TRUE;	
			}
		}
		// Check Blank
		if (!isset($id) || $id=='' || !isset($pw) || $pw=='' || !isset($pwcheck) || $pwcheck=='' || !isset($name) || $name=='' || !isset($address) || $address=='' || !isset($phone) || $phone=='' || !isset($e_mail) || $e_mail==''){	
		?>
		<h1>Sorry</h1>
		<p>You didn't fill out the form completely. <a href="/login/signup.html">Try again?</a></p>

		<?php 	// Check password == password-check
		} else if ($pw != $pwcheck){	
		?>
		<h1>Sorry</h1>
		<p>PW and PW Check aren't match. <a href="/login/signup.html">Try again?</a></p>

		<?php 	// Check e-mail format
		} else if (!preg_match("/^[A-Za-z0-9_%+-]+@[A-Za-z]+\.[A-Za-z]{2,}$/",$e_mail)) { 
		?>
		<h1>Sorry</h1>
		<p>Write Correct E-mail Address. <a href="/login/signup.html">Try again?</a></p>

		<?php 	// Confirm the registered ID == newID
		} else if ($check) {
		?>
		<h1>Sorry</h1>
		<p>Your ID exists. <a href="/login/signup.html">Try again?</a></p>

		<?php
		} else {
			$idAdd = "id.txt";
			$newarray = array($id,$pw,$pwcheck,$name,$address,$phone,$e_mail,$login);
			$newtext = implode(";", $newarray);
			file_put_contents($idAdd, $newtext."\n", FILE_APPEND); 	// Write information
		?>
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
		?>
	</body>
</html>