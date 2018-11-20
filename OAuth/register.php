<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login and Registration</title>
</head>
<body>
  <div class="header">
  	<h2>Pendaftaran</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Daftar</button>
  	</div>
  	<p>
  		Sudah mendaftar? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>