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
        <p>
            <div id="submitButton" >
              	<input type="submit" name="submit" value="submit" />
            </div>
        </p>
        </form>

        <?php
            $host = 'localhost';
            $user = 'chef';
            $pw = '1234';
            $dbName = 'testdb';
            $mysqli = new mysqli($host, $user, $pw, $dbName);
            // if($mysqli){
            //     echo "MySQL 접속 성공";
            // }else{
            //     echo "MySQL 접속 실패";
            // }

            $sql = "CREATE TABLE myclass_tb (";
			$sql = $sql."id varchar(12) not null,";
			$sql = $sql."name varchar(8) not null,";
			$sql = $sql."sex char(2),";
			$sql = $sql."age int,";
			$sql = $sql."point int,";
			$sql = $sql."address varchar(7),";
			$sql = $sql."primary key(id));";
			 
			if($mysqli->query($sql)){
			 echo '테이블 생성 완료';
			}else{
			 echo '테이블 생성 실패';
			}
			$id = $_POST['id'];
            $pw = $_POST['pw'];  
			 
			$sql = "insert into myclass_tb values";
			$sql = $sql."('".$id."', '둘리', '남', 10, 100, 'korea')";
			$mysqli->query($sql);
                        
   //          if ($_SERVER["REQUEST_METHOD"] == "POST") {
   //              $id = $_POST['id'];
   //              $pw = $_POST['pw'];      	
                                  
   //              $sql = "insert INTO `test` VALUES";
   //              $sql = $sql."(".$id.",".$pw.");";
   //              if($mysqli->query($sql)){
   //              	echo "Success";
   //              }

   //             //  $select = "select * from consumer;";
   //             //  $rows = $db->query($select);
   //            	// foreach ($rows as $row){
   //             //  ?>
   //             //      <li>
   //             //          <?php 
   //             // 	        foreach ($row as $val){
   //          	  //           print_r($val." ");
   //            	//         } 
   //             //          ?>      
   //             //      </li>
   //             //  <?php
   //             //  }
			// }
            
        ?>
    </body>
</html>