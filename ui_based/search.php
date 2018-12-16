<?php
include_once('server_obat.php');

?>

<html>
  <head>
    <title>Search Engine</title>
  </head>

  <body>
    <p>
      <a href="read.php">Daftar obat</a>
    </p>
    <form action='search.php' method='post'>
      <input type="text" name="keys">
      <input type="submit" name="submit" value="Search">
    </form>
    <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
  </body>
</html>