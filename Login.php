<?php

require('./database.php');

if($_POST){

  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  
  $query = "SELECT Id FROM userdata where Email='$email' AND Mobile='$mobile'";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $Id = $row['Id'];
    }
    header("Location:./dashboard.php?Id='$Id'");
  } else {
    header("Location:./Login.php?Error='error'");
  }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Internship Form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/login.css'>

</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <h1 class="navbar-brand mb-0 ">JustInClicks.com</h1>
      </nav>
    <form method="POST" action="Login.php">

      <!-- <?php if($_REQUEST['Error']){ ?>
          <div>
            Email or Mobile is Not Correct!
          </div>
      <?php } ?> -->
        
          <div class="form-group col-md-12">
            <label for="inputPassword">Full Name</label>
            <input type="text" name="email" class="form-control" id="inputPassword" placeholder="Full Name" required>
          </div>
          <div class="form-group col-md-12">
            <label for="inputPassword4">Password</label>
            <input type="password" name='mobile' class="form-control" id="inputPassword4" placeholder="Password" required>
            <div class="i-icon">
            <i class="far fa-eye" aria-hidden="true" id="togglePassword"></i>
        </div>
        <p class="m-p">! Password is your mobile number.</p>
          </div>
         <div class="button-div"> 
            <button type="submit" class="btn btn-primary">Sign in</button>
         </div>  
         <div class="signup">
             New User ? <span><a href="index.php">Sign Up</a></span>
         </div>
         
    </form>
    <script src="js/jquery.js"></script>   
    <script src='js/script.js'></script>  
</body>
</html>