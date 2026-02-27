<?php
// config/koneksi.php
$host = 'localhost';
$dbname = 'fanuellawalata_ti3d'; // Sesuaikan dengan nama database Anda
$username = 'root'; // Sesuaikan dengan username MySQL Anda
$password = ''; // Sesuaikan dengan password MySQL Anda

try {
    $con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

function query($query)
{
    global $con;
    $stmt = $con->prepare($query);
    $stmt->execute();
    $rows = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $rows[] = $row;
    }
    return $rows;
}

// function untuk search data pada tabel
function cari_mahasiswa($keyword)
{
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

function cari_dosen($keyword)
{
    $query = "SELECT * FROM 
              dosen 
              WHERE 
              nid LIKE '%$keyword%' OR 
              nama LIKE '%$keyword%' OR 
              alamat LIKE '%$keyword%'
              ";
    return query($query);
}
