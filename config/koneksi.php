<?php
$dbserver = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'fanuellawalata_ti3d';


try{
    $con = new PDO('mysql:host=' . $dbserver . ';dbname=' . $dbname . ';charset=utf8', $dbusername, $dbpassword);
    $con->setAttribute(PDO::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
        echo "Koneksi Gagal : ". $e->getMessage() . "<br>";
        die();
        }
        
function query($query){
    global $con;
    $stmt = $con->prepare($query);
    $stmt->execute();
    $rows = [];
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $rows[] = $row;
    }
        return $rows;
}

// function untuk search data pada tabel
function cari_mahasiswa($keyword){
    $query = "SELECT * FROM 
              mahasiswa 
              WHERE 
              nim LIKE '%$keyword%' OR 
              nama LIKE '%$keyword%' OR 
              alamat LIKE '%$keyword%' OR 
              jurusan LIKE '%$keyword%'
              ";
    return query($query);
}

function cari_dosen($keyword){
    $query = "SELECT * FROM 
              dosen 
              WHERE 
              nid LIKE '%$keyword%' OR 
              nama LIKE '%$keyword%' OR 
              alamat LIKE '%$keyword%'
              ";
    return query($query);
}




?>