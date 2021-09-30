<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>EasyBank Registration</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>

  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text"  placeholder="Enter full names" name="username" value="<?php echo $username; ?>">
  	</div>

  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email"  placeholder="Enter your email" value="<?php echo $email; ?>">
  	</div>

  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password"  placeholder="Enter your password" name="password_1">
  	</div>

  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password"  placeholder="Confirm your password" name="password_2">
  	</div>

    <br>
      <div class="input-country">
      <label for="country"><b>Country:</b></label>
      <select id="country" name="country">
        <option value="">Select a country</option>
        <option value="Nigeria">Nigeria</option>
        <option value="Ghana">Ghana</option>
        <option value="Canada">Canada</option>
      </select>
      </div>
      <br>

      <div class="input-group">
      <label for="phone"><b>Phone Number:</b></label>
      <input type="number" placeholder="Enter Phone" name="phone" id="phone" required>
      </div>

      <br>
      <div class="gender">
      <label for="gender"><b>Gender:</b></label> 
      <input type="radio" id="Male" name="gender" value="Male">
        <label for="Male">Male</label>
        <input type="radio" id="Female" name="gender" value="Female">
        <label for="Female">Female</label><br><br>
      </div>


  	<div class="input-group">
  	  <center><button type="submit" class="btn" name="reg_user">Register</button></center>
  	</div>
  <center>	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p></center>

    <br>

	  <div >
     <center><h4>Go back to <a href="homepage.php">Hompepage</a>.</h4></center>
    </div>
  </form>
</body>
</html>