<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>

<body>
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
  <div class="py-5 text-center" >
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-6 col-10" style="">
          <h1 class="w-100">Daftarkan diri Anda segera!</h1>
          <p class="mb-3">Untuk dapat mengakses sistem kami, anda harus terlebih dahulu untuk melakukan pendaftaran dengan mengisi beberapa informasi di bawah ini!</p>
          <form class="text-left" method="post" action="register.php">
            <?php include('errors.php'); ?>
            <div class="input-group"> 
                <label for="form16">Username</label> 
                <input type="text" name="username" value="<?php echo $username; ?>" class="form-control" id="form16" placeholder="Joni"> 
            </div>
            <div class="input-group"> 
                <label for="form18" >Email</label> 
                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" id="form18" placeholder="joni@joni.com"> 
            </div>
            <div class="form-row">
                <div class="input-group col-md-6"> 
                    <label for="form19">Password</label> 
                    <input type="password" class="form-control" name="password_1" id="form19" placeholder="••••"> 
                </div>
                <div class="input-group col-md-6"> 
                    <label for="form20">Confirm Password</label> 
                    <input type="password" class="form-control" name="password_2" id="form20" placeholder="••••"> 
                </div>
            </div>
            <div class="input-group">
              <div class="form-check"> </div>
              <button type="submit" class="btn btn-primary" name="reg_user">Daftar</button>
            </div> 
            <p>
                Sudah mendaftar? <a href="login.php">Sign in</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>