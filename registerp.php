<?php
    require "db_conn.php";
    

	   $name = $_POST["username"];
	   $email = $_POST["email"];
	   $pass = $_POST["password"];
	   $re_pass = $_POST["confirm"];
	   $secure_pass= password_hash($pass, PASSWORD_BCRYPT);

        if($pass == $re_pass){

	     $query ="INSERT INTO `user`( `id`,`user`, `password`) VALUES (null,'$name','  $secure_pass');";

	        if(mysqli_query($conn, $query)){

		   echo "user registered successfully";
            header('location:login.php');
		}else{
			
		   die("error while executing the query". mysqli_error($conn));
			
		    }
	   }
		
	
        
        mysqli_close($conn);

    ?>