<?php
require('./database.php');

  $Id = $_REQUEST['Id'];
  
  $query = "SELECT * FROM userdata where Id=".$Id;
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $Id = $row['Id'];
      $name = $row['Name'];
      $email = $row['Email'];
      $mobile = $row['Mobile'];
      $plans = $row['Plans'];
        $standardPlan = ''; $advancePlan = ''; $proPlan='';
      if($plans == "Standard"){
        $standardPlan = 'checked';
      }elseif($plans == "Advanced"){
        $advancePlan = 'checked';
      }else{
        $proPlan = 'checked';
      }

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
        <span class="navbar-brand mb-0 h1">Welcome To JustInClicks.com</span>
      </nav>
    <form method="POST" action="index.php">
        
          <div class="form-group col-md-12 ">
            <label for="inputPassword4">Full Name:</label>
            <input type="text" name="username" class="form-control" id="inputPassword4" placeholder="Full Name"
            value="<?php echo $name; ?>"
            >
          </div>
          <div class="form-group col-md-12" style="top: 50px;">
            <label for="inputEmail4">Email:</label>
            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email"
            value="<?php echo $email; ?>"
            >
          </div>
        <div class="form-group col-md-12" style="top: 70px;">
          <label for="inputAddress">Phone Number:</label>
          <input type="text" name="mobile" class="form-control" id="inputAddress" placeholder="987654****"
          value="<?php echo $mobile; ?>"
          >
        </div>
        
        </div>
        <div class="form-group  col-md-12" style="top: 90px;">
            <label for="inputAddress" class="plns">Plans:</label>
         
            <div class="form-check custom-control custom-radio ">
            <input class="" name="customRadio" type="radio" id="customRadio1" <?php echo $standardPlan; ?>>
            <label class="form-check-label" for="customRadio1">
              Standard
            </label>
          </div>
          <div class="form-check custom-control custom-radio ">
            <input class=" " name="customRadio" type="radio" id="customRadio2" <?php echo $advancePlan; ?>>
            <label class="form-check-label two-label" for="customRadio2">
              Advanced
            </label>
          </div>
          <div class="form-check custom-control custom-radio ">
            <input class=" " name="customRadio" type="radio" id="gridCheck-two" <?php echo $proPlan; ?>>
            <label class="form-check-label " for="gridCheck-two">
              Pro
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" >Edit Details</button>
        
      </form>

    <!-- <script src='main.js'></script>   -->
    <script src="js/jquery.js"></script>   
    <script src='js/script.js'></script>  
</body>
</html>