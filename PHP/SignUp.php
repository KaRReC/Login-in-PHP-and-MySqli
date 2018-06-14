<?php 
  
  include ('include/header.php');  


?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 offset-sm-3">            
          <div class="db">
            

            <form method="post" action="include/signup.inc.php" class="px-4 py-3 ">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="name" id="name" class="form-control" name="name" placeholder="Name" required>
              </div>
              <div class="form-group">
                  <label for="exampleDropdownFormEmail1">Email address</label>
                <input type="email" id="email" class="form-control"  placeholder="email@example.com" name="email" required>
              </div>
              <div class="form-group">
                  <label for="exampleDropdownFormPassword1">Password</label>
                  <input type="password" id="pass" class="form-control"  placeholder="Password" name="pass" required >
              </div>
              <button type="submit" id="submit" class="btn btn-primary btn-lg" name="submit">Sign up</button>
           </form>
            <div class="dropdown-divider"></div>
            <a style="margin: 20px;" href="Login.php" class="btn btn-success">Log in</a>
          </div>
        </div>
      </div>
    </div>  
  <?php include ('include/footer.php');  ?>