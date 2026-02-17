<?php
session_start();
require_once 'config/koneksi.php';

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $delete = $con->prepare("DELETE FROM mahasiswa WHERE nim = ?");
    $update = $con->prepare("ALTER TABLE mahasiswa AUTO_INCREMENT = 1"); // untuk reset auto-increment pada tabel mahasiswa
    $delete->bindParam(1, $nim);
    $delete->execute();
    $update->execute();

    echo "<script>
            alert('Data berhasil dihapus');
            window.location.href = 'index.php?page=mahasiswa';
    </script>";
}