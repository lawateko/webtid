<?php
require_once "config/koneksi.php";

$kode = htmlspecialchars($_POST["kode"]);
$nama = htmlspecialchars($_POST["nama"]);
$nid = htmlspecialchars($_POST["nid"]);

if (empty($kode) || empty($nama) || empty($nid)) {
    echo "<script>
        alert('Data tidak boleh kosong');
        window.location.href = 'index.php?page=jurusan';
    </script>";
} else {
    $simpan = $con->prepare("INSERT INTO jurusan (kode_jurusan, nama_jurusan, nid) VALUES (:kode, :nama, :nid)");
    $simpan->bindParam(':kode', $kode);
    $simpan->bindParam(':nama', $nama);
    $simpan->bindParam(':nid', $nid);
    $simpan->execute();

    echo "<script>
        alert('Data berhasil disimpan');
        window.location.href = 'index.php?page=jurusan';
    </script>";
}
