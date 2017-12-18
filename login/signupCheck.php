<?php
    $host = 'localhost';
    $user = 'chef';
    $pwd = '1234';
    $dbName = 'chef';
                        
    $mysqli = new mysqli($host, $user, $pwd, $dbName);


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $pw = $_POST['pw'];
        $pwcheck = $_POST['pwcheck'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $phonemid = $_POST['phonemid'];
        $phoneback = $_POST['phoneback'];
        $e_mail = $_POST['e_mail'];
        // $gender = $_POST['gender']; 
                            

        // 새로 입력한 아이디가 중복되는지 확인.
        $check = FALSE;
                            
        $sql2 = "select * from consumer";
        $result = $mysqli->query($sql2);
        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                // echo "id: " . $row["consumer_id"];
                if ($row["consumer_id"] == $id){
                    $check = TRUE; 
                }
            }
        } else {
            echo "0 results";
        }
                            // $mysqli->close();
              
                            
                            // 빈칸확인
        if (!isset($id) || $id=='' || !isset($pw) || $pw=='' || !isset($pwcheck) || $pwcheck=='' || !isset($name) || $name=='' || !isset($address) || $address=='' || !isset($phone) || $phone=='' || !isset($e_mail) || $e_mail==''){  
            echo "<script>alert('빈칸을 채워주세요.');history.back();</script>";
            exit;
        ?>
        <!-- <h1>Sorry</h1> -->
        <!-- <p>You didn't fill out the form completely. </p> -->

        <?php   // 비밀번호와 비밀번호 확인란에 입력한 값 같은지.
        } else if ($pw != $pwcheck){    
            echo "<script>alert('비밀번호와 확인란이 일치하지 않습니다.');history.back();</script>";
            exit;
        ?>
        <!-- <h1>Sorry</h1> -->
        <!-- <p>PW and PW Check aren't match. </p> -->

        <?php   // email 형식이 맞는지 확인.
        } else if (!preg_match("/^[A-Za-z0-9_%+-]+@[A-Za-z]+\.[A-Za-z]{2,}$/",$e_mail)) { 
            echo "<script>alert('이메일 형식이 올바르지 않습니다.');history.back();</script>";
            exit;
        ?>
        <!-- <h1>Sorry</h1> -->
        <!-- <p>Write Correct E-mail Address. </p> -->

        <?php   // 아이디가 중복되었을 때
        } else if ($check) {
            echo "<script>alert('이미 존재하는 아이디 입니다.');history.back();</script>";
            exit;
        ?>
        <!-- <h1>Sorry</h1> -->
        <!-- <p>Your ID exists. </p> -->

        <?php
        } else {
        $phoneArray = array($phone,$phonemid,$phoneback);
        $phoneString = implode("", $phoneArray);

        $sql = "insert INTO consumer VALUES";
        // $sql = $sql."('".$id."','".$pw."','".$e_mail."','".$name."','".$phone."',1998-02-13,'".$gender."')";
        $sql = $sql."('".$id."','".$pw."','".$e_mail."','".$name."','".$phoneString."',1998-02-13,".$address.",'F')";

        $mysqli->query($sql);
        echo "<script>alert('회원가입 되었습니다.');</script>";

        ?>
        <!-- <h2>Your Information</h2> -->
        <!-- <ul>  -->
            <!-- <li>ID: <?= $id ?></li> -->
            <!-- <li>PW: <?= $pw ?></li> -->
            <!-- <li>PW Check : <?= $pwcheck ?> </li> -->
            <!-- <li>Name : <?= $name ?> </li> -->
            <!-- <li>Address : <?= $address ?> </li> -->
            <!-- <li>Phone : <?= $phone ?> </li> -->
            <!-- <li>E-mail : <?= $e_mail ?> </li> -->
            <!-- <li>Gender : <?= $gender ?> </li> -->
        <!-- </ul> -->
        <?php
        }
    }
?>
<meta http-equiv='refresh' content='0;url=http://localhost:8888/chef/main/index1.html'>
<!-- <meta http-equiv='refresh' content='0;url=http://localhost:8888/chef/login/login.php'> -->