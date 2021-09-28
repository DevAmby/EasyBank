<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<div>
<form action="Easybank_register.php" method="post">
    <div class="container">
      <center><h1>Easybank Registration</h1>
      <p>Please fill in this form to create an account with us.</p></center>
      <hr>

      <center>
      <label for="fullname"><b>Full Name:</b></label>
      <input type="text" placeholder="Enter Full Name" name="fullname" id="fullname" required><br><br>

      <label for="country"><b>Country:</b></label>
      <select id="country" name="country">
        <option value="">Select a country</option>
        <option value="Nigeria">Nigeria</option>
        <option value="Ghana">Ghana</option>
        <option value="Canada">Canada</option>
      </select>
      <br><br>

      <label for="phone"><b>Phone Number:</b></label>
      <input type="number" placeholder="Enter Phone" name="phone" id="phone" required>

<br><br>
      <label for="gender"><b>Gender:</b></label>
      <input type="radio" id="Male" name="gender" value="Male">
    <label for="Male">Male</label>
    <input type="radio" id="Female" name="gender" value="Female">
    <label for="Female">Female</label><br><br>



      <label for="email"><b>Email:</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>
  
      <br><br>
  
      <label for="psw"><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
      
      <br><br>

      <label for="psw-repeat"><b>Repeat Password:</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
      <hr>

  <br>
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
      <input type="submit" name="register" class="register" value="Register"></input>
    </div>
  
    <div class="container signin">
     <center><p>Already have an account? <a href="Easybank_Login.php">Sign in</a>.</p></center>
    </div>
    <div class="container signin">
     <center><h3>Go back to <a href="index.html">Hompepage</a>.</h3></center>
    </div>
  </form></center>
  
</div>


  <div>
  
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database="users";

// Create connection
$con = mysqli_connect($servername, $username, $password);
// mysqli_select_db($con, $database);


//Getting the text information and saving in local variables

  if(isset($_POST['register'])){

    $user_name = mysqli_real_escape_string($con, $_POST['fullname']);
    $user_email = mysqli_real_escape_string($con, $_POST['email']);
    $user_password = mysqli_real_escape_string($con, $_POST['psw']);
    $user_passwordRepeat = mysqli_real_escape_string($con, $_POST['psw-repeat']);
    $user_phone = mysqli_real_escape_string($con, $_POST['phone']);
    $user_gender = mysqli_real_escape_string($con, $_POST['gender']);
    $user_country = mysqli_real_escape_string($con, $_POST['country']);


  

  //validation
  if ($user_password != $user_passwordRepeat){
    echo "<script> alert('Passwords do not match!') </script>";
    exit();
  }

  if (strlen($user_password) < 8){
    echo "<script> alert('Password should be minimum of 8 characters') </script>";
    exit();
  }

  if(!filter_var($user_email,FILTER_VALIDATE_EMAIL)){

    echo "<script> alert('Email is invalid') </script>";
    exit();
  }

//checking for already used email address

  // $sel_email = "select * from users where email='$user_email'";
  // $run_email = mysqli_query($con,$sel_email);

  // $check_email = mysqli_num_rows($run_email);

  // if($check_email == 1){
  //   echo "<script> alert('Email already registered, try another') </script>";
  //   exit();
  // }



  else{

    echo $insert = "INSERT INTO `users`(`id`, `fullname`, `country`, `phone`, `gender`, `email`, `psw`, `registered _date`) values('$user_name','$user_country','$user_phone','$user_gender','$user_email','$user_password',NOW())";
    $run_insert = mysqli_query($con, $insert);

    if($run_insert){
      echo "<script> alert('Registration Successful') </script>";
      echo "<script> window.open('Hompepage.php','_self')</script>";
    }
  }

}



?>

</div>

</body>
</html>




