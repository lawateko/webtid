<?php
require_once "config/koneksi.php";

$kode_matkul = htmlspecialchars($_POST["kode_matkul"]);
$nama_matkul = htmlspecialchars($_POST["nama_matkul"]);
$nid = htmlspecialchars($_POST["nid"]);

if (empty($kode_matkul) || empty($nama_matkul) || empty($nid)) {
    echo "<script>
        alert('Data tidak boleh kosong');
        window.location.href = 'index.php?page=matakuliah';
    </script>";
} else {
    $simpan = $con->prepare("INSERT INTO matakuliah (kode_matkul, nama_matkul, dosen) VALUES (:kode_matkul, :nama_matkul, :nid)");
    $simpan->bindParam(':kode_matkul', $kode_matkul);
    $simpan->bindParam(':nama_matkul', $nama_matkul);
    $simpan->bindParam(':nid', $nid);
    $simpan->execute();

    echo "<script>
        alert('Data berhasil disimpan');
        window.location.href = 'index.php?page=matakuliah';
    </script>";
}
