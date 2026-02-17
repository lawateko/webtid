<?php
require_once "config/koneksi.php";

$nid = $_POST['nid'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

if (empty($nid) || empty($nama) || empty($alamat)) {
    echo "<script>
            alert('Data tidak boleh kosong');
            window.location.href='index.php?page=dosen';
          </script>";
} else {
    $update = $con->prepare("UPDATE dosen SET nama = :nama, alamat = :alamat WHERE nid = :nid");
    
    $update->bindParam(':nid', $nid);
    $update->bindParam(':nama', $nama);
    $update->bindParam(':alamat', $alamat);
    $update->execute();

    echo "<script>
            alert('Data berhasil diupdate');
            window.location.href = 'index.php?page=dosen';
          </script>";
}
