<?php
session_start();
require_once 'config/koneksi.php';

if (isset($_GET['nid'])) {
    $nid = $_GET['nid'];
    $delete = $con->prepare("DELETE FROM dosen WHERE nid = ?");
    $update = $con->prepare("ALTER TABLE dosen AUTO_INCREMENT = 1"); // untuk reset auto-increment pada tabel dosen
    $delete->bindParam(1, $nid);
    $delete->execute();
    $update->execute();

    echo "<script>
            alert('Data berhasil dihapus');
            window.location.href = 'index.php?page=dosen';
    </script>";
}