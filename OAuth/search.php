<?php include('server_obat.php') ?>
<!DOCTYPE html>
<html>

<head>
  <title>Pencarian</title>
  
</head>


<body>
    <div class="header">
        <h1> Pencarian Obat </h2>
    </div>

    <div class="header">
        <h2> Silahkan cari obat pada kolom dibawah ini </h1>
    </div>

    <form method="get" action="search.php">
        <div class="input-group">
            <label>Search</label>
            <input type="text" name="nama_obat">
        </div>

        <div class="input-group">
            <button type="submit" class="btn" name="cari_obat"> Cari Obat</button>
        </div>
</body>

</html>