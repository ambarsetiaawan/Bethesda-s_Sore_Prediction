<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once 'database.php';
include_once 'obat.php';
 
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$obat = new Obat($db);
 
// query products
$stmt = $obat->read();
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // products array
    $obat_arr=array();
    $obat_arr["records"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $obat_item=array(
            "nama_obat" => $nama_obat,
            "deskripsi" => $deskripsi,
            "gol_obat" => $gol_obat,
            "kategori" => $kategori,
            "manfaat" => $manfaat,
            "pengonsumsi" => $pengonsumsi,
            "ktg_hamil" => $ktg_hamil,
            "btk_obat" => $btk_obat,
            "peringatan" => $peringatan,
        );
 
        array_push($obat_arr["records"], $obat_item);
    }
 
    // set response code - 200 OK
    http_response_code(200);
 
    // show products data in json format
    echo json_encode($obat_arr);
}
//no product will found 
else{
 
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user no products found
    echo json_encode(
        array("message" => "No products found.")
    );
}


?>