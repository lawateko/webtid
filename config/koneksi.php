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
?>