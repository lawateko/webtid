<?php
require_once "config/koneksi.php";

$nim = htmlspecialchars($_POST["nim"]);
$nama = htmlspecialchars($_POST["nama"]);
$alamat = htmlspecialchars($_POST["alamat"]);
$jurusan = htmlspecialchars($_POST["jurusan"]);

if (empty($nim) || empty($nama) || empty($alamat) || empty($jurusan)){
    echo "<script>
        alert('Data tidak boleh kosong');
        window.location.href = 'index.php?page=mahasiswa';
    </script>";
} else {
    $simpan = $con->prepare("INSERT INTO mahasiswa (nim, nama, alamat, jurusan) VALUES (:nim, :nama, :alamat, :jurusan)");
    $simpan->bindParam(':nim', $nim);
    $simpan->bindParam(':nama', $nama);
    $simpan->bindParam(':alamat', $alamat);
    $simpan->bindParam(':jurusan', $jurusan);
    $simpan->execute();

    echo "<script>
        alert('Data berhasil disimpan');
        window.location.href = 'index.php?page=mahasiswa';
    </script>";
}

