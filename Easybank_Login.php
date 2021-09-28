<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easybank Login</title>
</head>
<body>
<div>
<form action="Easybank_register.php" method="post">
    <div class="container">
      <center><h1>Easybank Login</h1>
      <p>Please enter your correct details</p></center>
      <hr><br>
<center>
      <label for="email"><b>Email:</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>
  
      <br><br><br>
  
      <label for="psw"><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    <br><br>
      <input type="submit" name="login" class="login" value="Login"></input>
      <br><br><hr>
</center>
  
    <div class="container Register">
     <center><h3>Don't have an account? <a href="Easybank_register.php">Register Here</a>.</h3></center>
    </div>

    <div >
     <center><h3>Go back to <a href="easybank.php">Hompepage</a>.</h3></center>
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
  
    if(isset($_POST['login'])){
  
      $user_email = mysqli_real_escape_string($con, $_POST['email']);
      $user_password = mysqli_real_escape_string($con, $_POST['psw']);

    $sel = "SELECT * FROM `users` WHERE email ='$user_email' AND psw = '$user_password";
    $run = mysqli_query($con,$sel);
    $check = mysqli_num_rows($run);

    if($check==0){
        echo "<script> alert('Passwords or email incorrect, try again!') </script>";
    exit();
    }

    else{
        $_SESSION['email']=$user_email;
        echo "<script> window.open('Hompepage.php','_self')</script>";
    }


    }

?>
</div>

</body>
</html>