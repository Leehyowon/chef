<?php
if(!isset($_POST['logid']) || !isset($_POST['logpw'])) exit;
$user_id = $_POST['logid'];
$user_pw = $_POST['logpw'];

$host = 'localhost';
$user = 'chef';
$pw = '1234';
$dbName = 'chef';
$mysqli = new mysqli($host, $user, $pw, $dbName);

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// $check = TRUE;
	$sql2 = "select * from consumer";
	$result = $mysqli->query($sql2);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if ($row["consumer_id"] == $user_id && $row["pwd"] == $user_pw){
                // $check = FALSE; 
                $members = array($user_id => array( 'pw' => $user_pw, 'name' => $row["name"] ));
            }
        }
    } else {
        // echo "0 results";
    }

 
if(!isset($members[$user_id])) {
        echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
        exit;
}
if($members[$user_id]['pw'] != $user_pw) {
        echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
        exit;
}
session_start();
$_SESSION['user_id'] = $user_id;
$_SESSION['user_name'] = $members[$user_id]['name'];
?>
<meta http-equiv='refresh' content='0;url=http://localhost:8888/chef/main/index1.html'>