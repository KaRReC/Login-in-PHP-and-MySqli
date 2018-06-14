<?php 
  include ('include/header.php');  
?>
    <div class="container" style="margin-top:30px;">
      <div class="row">
        <div class="col">
        </div>
        <div class="col-6">
          <div style="margin-top:100px;" class="alert alert-success" role="alert">
            
     
    
              <?php
                
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $conn = new mysqli($servername, $username, $password);

                  if($conn->connect_error) {
                    die("Connection failed:" . $conn->connect_error);
                }

                $sql = "CREATE DATABASE demo";

                if ($conn->query($sql) === TRUE) {
                   echo "<h4 class='alert-heading'>Well done!</h4><br><br>Database created successfully";
                } else {
                  echo "$conn->error";
                }
                
                $conn->close();

                $db = "demo";

                $conn = new mysqli($servername, $username, $password, $db);

                if($conn->connect_error) {
                    die("Connection failed:" . $conn->connect_error);
                }
                $sql = "CREATE TABLE IF NOT EXISTS users(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
                      name VARCHAR(30) NOT NULL, 
                      email VARCHAR(50) NOT NULL,
                      password VARCHAR(30) NOT NULL)";
                  if ($conn->query($sql) === TRUE) {
                     echo ",&nbspOK&nbsp;";
                    } else {
                       echo "Error creating table: " . $conn->error;
                    }
                $conn->close();

                ?>
              <hr>
              <p>Now you can Sign up</p>
              <button type="submit" class="btn btn-link"><a class="nav-link" href="SignUp.php">Sign Up</a></button>
        
          </div>  
        </div>
        <div class="col">
        </div>
        </div>
      </div>
    </div>
  </div>
 <?php 
    include ('include/footer.php');  
    ?>