<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login and Registration</title>
  
</head>
<body>
  <div class="header">
  	<h2>Masuk</h2>
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
  		<button type="submit" class="btn" name="login_user">Masuk</button>
  	</div>
  	<p>
  		Daftar? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>