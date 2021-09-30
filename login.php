<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>EasyBank Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<center><button type="submit" class="btn" name="login_user">Login</button></center>
  	</div>
  <center>	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p></center>
	  <br>

	  <div >
     <center><h4>Go back to <a href="homepage.php">Hompepage</a>.</h4></center>
    </div>
  </form>
</body>
</html>