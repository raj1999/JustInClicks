<?php

require('./database.php');

if($_POST){

  $email = $_POST['email'];
  $name = $_POST['username'];
  $mobile = $_POST['mobile'];
  $plans = $_POST['customRadio'];

  $query = "INSERT INTO userdata(Email,Name,Mobile,Plans) values('$email','$name','$mobile','$plans')";
  $result = mysqli_query($conn,$query);
 if($result == 1){
  header('Location:./Login.php');
 }else{
  header("Location:./index.php");
 
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
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.css'>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">JustInClicks.com</span>
      </nav>
    <form method="POST" action="index.php">
          <div class="form-group col-md-12 ">
            <label for="inputPassword4">Full Name:</label>
            <input type="text" name="username" class="form-control" id="inputPassword4" placeholder="Full Name">
          </div>
          <div class="form-group col-md-12" style="top: 50px;">
            <label for="inputEmail4">Email:</label>
            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
        <div class="form-group col-md-12" style="top: 70px;">
          <label for="inputAddress">Phone Number:</label>
          <input type="text" name="mobile" class="form-control" id="inputAddress" placeholder="987654****">
        </div>
        
        </div>
        <div class="form-group  col-md-12" style="top: 90px;">
            <label for="inputAddress" class="plns">Plans:</label>
         
            <div class="form-check custom-control custom-radio ">
            <input class="" name="customRadio" type="radio" id="customRadio1" value='Standard'>
            <label class="form-check-label" for="customRadio1">
              Standard
            </label>
          </div>
          <div class="form-check custom-control custom-radio ">
            <input class=" " name="customRadio" type="radio" id="customRadio2" value="Advanced">
            <label class="form-check-label two-label" for="customRadio2">
              Advanced
            </label>
          </div>
          <div class="form-check custom-control custom-radio ">
            <input class=" " name="customRadio" type="radio" id="gridCheck-two" value="Pro">
            <label class="form-check-label " for="gridCheck-two">
              Pro
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" >Sign Up</button>
        <p class="already"> already Registered? <a href="Login.php">Sign In</a></p>
      </form>

    <!-- <script src='main.js'></script>   -->
</body>
</html>