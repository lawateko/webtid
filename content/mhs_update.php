<?php
require_once "config/koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];

if (empty($nim) || empty($nama) || empty($alamat) || empty($jurusan)) {
    echo "<script>
            alert('Data tidak boleh kosong');
            window.location.href='index.php?page=mahasiswa';
          </script>";
} else {
    $update = $con->prepare("UPDATE mahasiswa SET nama = :nama, alamat = :alamat, jurusan = :jurusan WHERE nim = :nim");
    
    $update->bindParam(':nim', $nim);
    $update->bindParam(':nama', $nama);
    $update->bindParam(':alamat', $alamat);
    $update->bindParam(':jurusan', $jurusan);
    $update->execute();

    echo "<script>
            alert('Data berhasil diupdate');
            window.location.href = 'index.php?page=mahasiswa';
          </script>";
}
