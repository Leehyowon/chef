<?php
session_start();
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
                        // $credit = $_POST["credit"];
                        // $order_id = $_POST["order_id"];
                        // $consumer_id = $_POST["consumer_id"];
                        // echo "<script>alert();</script>";
                        
    $sql2 = "SELECT pocket_id FROM buyPocket order by pocket_id desc limit 1";
    $result = $mysqli->query($sql2);

    $pocket_number;
    if ($result->num_rows > 0) {
                        // output data of each row
        while($row = $result->fetch_assoc()) {
            $pocket_number = $row["pocket_id"] + 1;
            $sql = "INSERT INTO buyPocket VALUES (".$pocket_number.",'".$brand."','".$id."','".$name."','".$consumer_id."','credit',".$price.",".$number.")";
            $result = $mysqli->query($sql);
                                // print_r($pocket_number);
        }
    } else {
                            // echo "0 results";
    }
}
?>
<meta http-equiv='refresh' content='0;url=http://localhost:8888/chef/mypage/buypocket.php'>