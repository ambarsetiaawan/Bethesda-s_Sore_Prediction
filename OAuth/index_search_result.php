<?php 
  session_start(); 

  if (!isset($_SESSION['nama_obat'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: search.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>

<body >

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">Hasil pencarian</h1>
        </div>
      </div>
    </div>

    <?php  if (isset($_SESSION['nama_obat'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['nama_obat']; ?></strong></p>
        <p>Welcome <strong><?php echo $_SESSION['deskripsi']; ?></strong></p>
        <p>Welcome <strong><?php echo $_SESSION['kategori']; ?></strong></p>
    	<p> <a href="search.php?logout='1'" style="color: red;">Back</a> </p>
    <?php endif ?>
  </div>
 </body>

</html>