<?php 
	include ('include/header.php'); 
	include ('include/nav.php'); 
?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 offset-sm-3">            
          <div class="db">
            <h1>Wellcome <?php echo $_SESSION['name']?></h1>
        </div>
      </div>
    </div>  
  <?php include ('include/footer.php');  ?>