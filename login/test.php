<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>CHEF</title>
		<link href="https://github.com/hyemni/chef/blob/master/image/HBpic.jpeg?raw=true" type="image/jpeg" rel="shortcut icon"/>
        <link href="/chef/main/main.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
    	<h2>Here</h2>
    	<form method="post">
        <p> ID : <input type="text" name="id" /> </p>
        <p> PW : <input type="password" name="pw" /> </p>
        <p> Birth : <input type="date" name="birth" /> </p>
        <p>
            <div id="submitButton" >
              	<input type="submit" name="submit" value="submit" />
            </div>
        </p>
        </form>

        <?php
            $host = 'localhost';
            $user = 'root';
            $pw = 'root';
            $dbName = 'test';
            $mysqli = new mysqli($host, $user, $pw, $dbName);
            // if($mysqli){
            //     echo "MySQL 접속 성공";
            // }else{
            //     echo "MySQL 접속 실패";
            // }

            
			$id = $_POST['id'];
            $pw = $_POST['pw'];  
            $date = $_POST['birth'];
   
            $newformat = date('Y-m-d',strtotime($date));

            $sql = "INSERT into TEST values('".$id."','".$pw."','".$newformat."')";
            $mysqli->query($sql);

            $sql2 = "SELECT * from test";
			$result = $mysqli->query($sql2);
            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
                    // echo "id: " . $row["consumer_id"];
                    print_r($row);
                    print "";
                }
            } else {
                echo "0 results";
            }
            
        ?>
    </body>
</html>