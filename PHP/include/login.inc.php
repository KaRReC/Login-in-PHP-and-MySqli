<?php

	session_start();

		include ('db.php');

		$email = $_POST['email'];
		$pass = $_POST['pass'];

		$email = mysqli_real_escape_string($conn, $email);
		$pass = mysqli_real_escape_string($conn, $pass);
		

		
		$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass';";
		$result = $conn->query($sql);
			if ($result->num_rows < 1) {
				
				header("location: ../LoginFailed.php");

			}else{
				while($row = $result->fetch_assoc()) {
					$_SESSION['name'] = $row['name'];
					header("location: ../index.php");
			}
		}

			

	
		
	

?>