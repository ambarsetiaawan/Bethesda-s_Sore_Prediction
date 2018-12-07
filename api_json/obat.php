<?php
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

    // read obat
    function read(){
 
    // select all query
    $query = "SELECT *  FROM $this->table_name ";

    //query ini untuk mengecek obat yang tidak ada
    //$query = "SELECT * FROM $this->table_name WHERE `nama_obat` LIKE '%Badut%' LIMIT 1";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
}
}