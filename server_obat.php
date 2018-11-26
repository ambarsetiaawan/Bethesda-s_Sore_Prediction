<?php
session_start();

//inisialisasi variabel
$nama_obat ="";
$deskripsi ="";
$gol_obat ="";
$kategori ="";
$manfaat ="";
$pengonsumsi ="";
$ktg_hamil ="";
$btk_obat ="";
$peringatan ="";
$errors =array();

$db = mysqli_connect("localhost", "root", "", "daftar_obat");

/*
if($db->connect_errno){
    echo $db->connect_error;
    die('Sorry there are any probelm');
}else{
    echo "Database connected";
}
*/

if(isset($_POST['keys'])){

    $nama_obat = $_POST['keys'];

    $query = "SELECT * FROM `obat` WHERE `nama_obat` LIKE '%$nama_obat%' LIMIT 1";
    $result = mysqli_query($db, $query);
    //var_dump($result);
    if(mysqli_num_rows($result) == 1){
        while($row = $result->fetch_assoc()){
            $nama_obat=$row['nama_obat'];
            $deskripsi=$row['deskripsi'];
            $gol_obat=$row['gol_obat'];
            $kategori=$row['kategori'];
            $manfaat=$row['manfaat'];
            $pengonsumsi=$row['pengonsumsi'];
            $ktg_hamil=$row['ktg_hamil'];
            $btk_obat=$row['btk_obat'];
            $peringatan=$row['peringatan'];
            echo"<h1>$nama_obat</h1>";
            echo"<p>$deskripsi</p>";
            echo"<h3>Golongan Obat</h3>";
            echo"<p>$gol_obat</p>";
            echo"<h3>Kategori</h3>";
            echo"<p>$kategori</p>";
            echo"<h3>Manfaat</h3>";
            echo"<p>$manfaat</p>";
            echo"<h3>Pengonsumsi</h3>";
            echo"<p>$pengonsumsi</p>";
            echo"<h3>Kategori Hamil</h3>";
            echo"<p>$ktg_hamil</p>";
            echo"<h3>Bentuk Obat</h3>";
            echo"<p>$btk_obat</p>";
            echo"<h3>Peringatan</h3>";
            echo"<p>$peringatan</p>";
        }
    }
}else{
    $nama_obat="";
    $deskripsi="";
    $gol_obat="";
    $kategori="";
    $ktg_hamil="";
    $btk_obat="";
    $peringatan="";
}
    
?> 