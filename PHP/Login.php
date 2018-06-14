<?php 
	include ('include/header.php');  
?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">            
          <div class="db" style="background: rgba(255, 255, 255, 0.2); color: black;">
            

            <form method="post" action="include/login.inc.php" class="px-4 py-3">
              <div class="form-group">
                  <label for="exampleDropdownFormEmail1">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="email@example.com" name="email" required>
              </div>
              <div class="form-group">
                  <label for="exampleDropdownFormPassword1">Password</label>
                  <input type="password" class="form-control" id="pass" placeholder="Password" name="pass" required>
              </div>
              <button type="submit" class="btn btn-primary btn-lg">Log in</button>
           </form>
            <div class="dropdown-divider"></div>
            <a href="SignUp.php" class="btn btn-success">Sign up</a>
          </div>
        </div>
        <div class="col-sm-6" style="margin-top: 150px;">
        <div>
          <div class="alert alert-info" role="alert">
            Warning !! To Login or Sign up you must first create a database on your local@host, to do so make sure you start your web and database server before creating a database. If you have password for Root, please change the password in my PHP script.
            <form action="http://127.0.0.1/Portfolio/NewLogin/DbSuccess.php" method="POST" accept-charset="utf-8">
            <button type="submit" class="btn btn-link">Create DEMO database</button>
            </form>
          </div>
        </div>
      </div>
      </div>
    </div>  
  <?php include ('include/footer.php');  ?>