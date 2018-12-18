<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>

<body >
  <div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-4">Selamat Datang</h1>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-light">
    <div class="container d-flex justify-content-center"> <a class="navbar-brand text-primary" href="#">
        <i class="fa d-inline fa-lg fa-circle-o"></i>
        <b>Bethesda's Sore</b>
      </a> </div>
  </nav>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form class="" method="post" action="login.php">
            <?php include('errors.php'); ?>
                <div class="input-group"> 
                    <label contenteditable="true">Username</label> 
                    <input type="text" class="form-control" name="username" placeholder="Username"> 
                <div class="input-group"> 
                    <label>Password</label> 
                    <input type="password" class="form-control" name="password" placeholder="Password"> </div> 
                <div class="input-group">
                    <button type="submit" class="btn btn-primary" name="login_user">Masuk</button>
                </div>
                <p>
                    Daftar? <a href="register.php">Sign up</a>
                </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>