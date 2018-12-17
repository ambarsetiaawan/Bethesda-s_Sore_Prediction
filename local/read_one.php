<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
// include database and object files
include_once 'database.php';
include_once 'obat.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare obat object
$obat = new Obat ($db);



// query obat
$stmt = $obat->readOne();
 
// set name property of record to read
$obat->nama_obat = isset($_GET['nama_obat']) ? $_GET['nama_obat'] : die();
 
// read the detail obat yang akan diedit
$obat->readOne();
 
if($obat->nama_obat!=null){
    // membuat array

    $obat_arr = array(
        "nama_obat" =>  $obat->nama_obat,
        "deskripsi" => $obat->deskripsi,
        "gol_obat" => $obat->gol_obat,
        "kategori" => $obat->kategori,
        "manfaat" => $obat->manfaat,
        "pengonsumsi" => $obat->pengonsumsi,
        "ktg_hamil" => $obat->ktg_hamil,
        "btk_obat" => $obat->btk_obat,
        "peringatan" => $obat->peringatan

    );

    // set response code - 200 OK
    http_response_code(200);
 
    // dibuat json formatnya
    echo json_encode($obat_arr);
}
 
else{
    // set response code - 404 Not found
    http_response_code(404);
 
    // jika tidak exist
    echo json_encode(array("message" => "Product does not exist."));
}
?>