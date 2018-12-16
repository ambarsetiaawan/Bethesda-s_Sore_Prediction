<?php
session_start();


class Database{
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "daftar_obat";
    private $username = "root";
    private $password = "";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}


class Obat{
 
    // database connection and table name
    private $conn;
    private $table_name = "obat";
 
    // object properties
    public $nama_obat;
    public $deskripsi;
    public $gol_obat;
    public $kategori;
    public $manfaat;
    public $pengonsumsi;
    public $ktg_hamil;
    public $btk_obat;
    public $peringatan;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
}

$db = mysqli_connect("localhost", "root", "", "daftar_obat");
 
// initialize object
$obat = new Obat($db);
 
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

    $obat_arr=array();
    $obat_arr["records"]=array();
    //var_dump($result);
    if(mysqli_num_rows($result) == 1){
        while($row = $result->fetch_assoc()){
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
}
    
?> 