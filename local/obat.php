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

    //query untuk mencari suatu obat tertentu
    //$query = "SELECT * FROM $this->table_name WHERE `nama_obat` LIKE '%Amoxicilin%' LIMIT 1";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
    }
    


    //Blok kode untuk read_one
    // used when filling up the update product form
function readOne(){
 
    // auery untuk single record pada sebuah table
    $query = "SELECT *
            FROM
                $this->table_name
            WHERE
                `nama_obat` LIKE '%$this->nama_obat%'
            LIMIT
                1";
 
    // menyiapkan statement untuk query
    $stmt = $this->conn->prepare( $query );
 
    // bind nama obat to be updated
    $stmt->bindParam(1, $this->nama_obat);
 
    // execute query
    $stmt->execute();
 
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    //set values ke object properties
    //$this->nama_obat = $row['nama_obat'];
    $this->deskripsi = $row['deskripsi'];
    $this->gol_obat = $row['gol_obat'];
    $this->kategori = $row['kategori'];
    $this->manfaat = $row['manfaat'];
    $this->pengonsumsi = $row['pengonsumsi'];
    $this->ktg_hamil = $row['ktg_hamil'];
    $this->btk_obat = $row['btk_obat'];
    $this->peringatan = $row['peringatan'];
    }
}