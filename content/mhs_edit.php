<?php
require_once 'config/koneksi.php';
$nim = $_GET['nim'];

$sql = $con->prepare("SELECT * FROM mahasiswa WHERE nim = ?");
$sql->bindParam(1, $nim);
$sql->execute();

if ($sql->rowCount() == 0) {
    echo "<script>
            alert('Data tidak ditemukan');
            window.location.href = 'index.php?page=mahasiswa';
    </script>";
} else {
    $row = $sql->fetch();
}
?>

<div style="padding-top: 50px;">
    <div class="col-md-4 mx-auto mt-5" style="margin-top: 8rem;">
        <div class="card">
            <div class="card-header fs-5 fw-bold">FORM EDIT MAHASISWA</div>
            <div class="card-body">
                <form action="index.php?page=mhs_update" method="POST">
                    <div class="mb-3">
                        <label class="form-label fw-semibold" for="">Nomor Induk Mahasiswa</label>
                        <input name="nim" class="form-control" value="<?php echo $row['nim']; ?>" type="text" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold" for="">Nama</label>
                        <input name="nama" class="form-control" value="<?php echo $row['nama']; ?>" type="text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold" for="">Alamat</label>
                        <textarea name="alamat" class="form-control" id=""><?php echo $row['alamat']; ?></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="#" class="form-label fw-semibold">Jurusan</label>
                        <select name="jurusan" class="form-control border-3 p-2">
                            <option value="Teknik Informatika" <?php if ($row['jurusan'] == 'Teknik Informatika') echo 'selected'; ?>>Teknik Informatika</option>
                            <option value="Sistem Informasi" <?php if ($row['jurusan'] == 'Sistem Informasi') echo 'selected'; ?>>Sistem Informasi</option>
                            <option value="Desain Komunikasi Visual" <?php if ($row['jurusan'] == 'Desain Komunikasi Visual') echo 'selected'; ?>>Desain Komunikasi Visual</option>
                            <option value="Bisnis Digital" <?php if ($row['jurusan'] == 'Bisnis Digital') echo 'selected'; ?>>Bisnis Digital</option>
                            <option value="Pariwisata" <?php if ($row['jurusan'] == 'Pariwisata') echo 'selected'; ?>>Pariwisata</option>
                            <option value="Perencanaan Wilayah dan Kota" <?php if ($row['jurusan'] == 'Perencanaan Wilayah dan Kota') echo 'selected'; ?>>Perencanaan Wilayah dan Kota</option>
                            <option value="Komputerisasi Akuntansi" <?php if ($row['jurusan'] == 'Komputerisasi Akuntansi') echo 'selected'; ?>>Komputerisasi Akuntansi</option>
                            <option value="Manajemen Informatika" <?php if ($row['jurusan'] == 'Manajemen Informatika') echo 'selected'; ?>>Manajemen Informatika</option>
                        </select>
                    </div>
                    <div class="mb-3 d-grid">
                        <button class="btn btn-primary" type="submit"><i class="bi bi-save-fill"></i> Update</button>
                        <a href="index.php?page=mahasiswa" class="btn btn-danger w-100 mt-2 bi bi-box-arrow-left "> Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>