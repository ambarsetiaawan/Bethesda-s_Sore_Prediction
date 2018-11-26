<?php
include_once('server_obat.php');

?>

<html>
  <head>
    <title>Search Engine</title>
  </head>

  <body>
    <form action='search.php' method='post'>
      <input type="text" name="keys">
      <input type="submit" name="submit" value="Search">
    </form>
  </body>
</html>