<?php
require_once "config/koneksi.php";

$nid = htmlspecialchars($_POST["nid"]);
$nama = htmlspecialchars($_POST["nama"]);
$alamat = htmlspecialchars($_POST["alamat"]);

if (empty($nid) || empty($nama) || empty($alamat)) {
    echo "<script>
        alert('Data tidak boleh kosong');
        window.location.href = 'index.php?page=dosen';
    </script>";
} else {
    $simpan = $con->prepare("INSERT INTO dosen (nid, nama, alamat) VALUES (:nid, :nama, :alamat)");
    $simpan->bindParam(':nid', $nid);
    $simpan->bindParam(':nama', $nama);
    $simpan->bindParam(':alamat', $alamat);
    $simpan->execute();

    echo "<script>
        alert('Data berhasil disimpan');
        window.location.href = 'index.php?page=dosen';
    </script>";
}
