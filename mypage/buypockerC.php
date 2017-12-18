<?php
session_start();
if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
    echo "<script>alert('로그인 하셔야 합니다.');</script>";
    echo "<meta http-equiv='refresh' content='0;url=http://localhost:8888/chef/login/signup.php'>";
        // header("location : http://localhost:8888/login/login.php");
    exit;
}
$user_id = $_SESSION['user_id'];
$host = 'localhost';
$user = 'chef';
$pwd = '1234';
$dbName = 'chef';
                                            
$mysqli = new mysqli($host, $user, $pwd, $dbName);
$consumer_id = $user_id;
                    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $brand = $_POST["brand"];
    $price = $_POST["price"];
    $name = $_POST["name"];
    $number = $_POST["number"];
    $id = $_POST["id"];
                        
    $sql2 = "SELECT pocket_id FROM buyPocket order by pocket_id desc limit 1";
    $result = $mysqli->query($sql2);

    $pocket_number;
    if ($result->num_rows > 0) {
                        // output data of each row
        while($row = $result->fetch_assoc()) {
            $pocket_number = $row["pocket_id"] + 1;
        }
    } else {
    }
    $sql = "INSERT INTO buyPocket VALUES (".$pocket_number.",'".$brand."','".$id."','".$name."','".$consumer_id."','credit',".$price.",".$number.")";
    $mysqli->query($sql);
?>
<meta http-equiv='refresh' content='0;url=http://localhost:8888/chef/mypage/buypocket.php'>
<?php
    exit;
}
?>