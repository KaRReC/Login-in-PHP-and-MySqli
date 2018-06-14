<?php

		
		include('db.php');

		$name = $_POST['name'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];

		$name = mysqli_real_escape_string($conn, $name);
		$email = mysqli_real_escape_string($conn, $email);
		$pass = mysqli_real_escape_string($conn, $pass);
		

		

		$sql = "SELECT * FROM users WHERE email = '$email'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			
			header("location: ../SignUpFailed.php");
					
					

				}else{
					
					$sql = "INSERT INTO users(name,email,password) VALUES('$name', '$email', '$pass');";

					if ($conn->query($sql) === TRUE) {

						header("location: ../login.php");
						
						
					
				}
			}

?>