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

$db = mysqli_connect('localhost', 'root', '', 'daftar_obat');





 // validasi formnya : harus keisi semua form yang ada
    if (empty($nama_obat)) { 
      array_push($errors, "Butuh nama obat"); 
    }

//memasukkan nama obat
if (isset($_POST['cari_obat'])){
    $nama_obat = mysqli_real_escape_string($db, $_POST['nama_obat']);

    if (empty($nama_obat)) {
        array_push($errors, "masukkan nama obat");
    }

    if (empty($nama_obat)) {
        array_push($errors, "Tulis cuy");
    }


    if (count($errors) == 0) {
        $query = $_POST['nama_obat'];
        $query = "SELECT * FROM obat WHERE nama_obat = '$nama_obat'";
        $result = mysqli_query($db, $query);
        if(mysqli_num_row($results) == 1){
            $_SESSION['nama_obat'] = $nama_obat;
            $_SESSION['deskripsi'] = $deskripsi;
            $_SESSION['gol_obat'] = $gol_obat;
            $_SESSION['kategori'] = $kategori;
            $_SESSION['manfaat'] = $manfaat;
            $_SESSION['pengonsumsi'] = $pengonsumsi;
            $_SESSION['ktg_hamil'] = $ktg_hamil;
            $_SESSION['btk_obat'] = $btk_obat;
            $_SESSION['peringatan'] = $peringatan;
            $_SESSION['success'] = "You are now logged in";
            header('location: index_search_result.php');
            }else {
            array_push($errors, "tidak ada obat");
             }
         }
    }



?>  

