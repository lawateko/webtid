<?php
require_once 'config/koneksi.php';
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY no DESC");

if(isset($_POST["cari"])){
    $mahasiswa = cari_mahasiswa($_POST["keyword"]);
}

?>

<div class="mahasiswa-container container mt-3">
    <div class="row g-4">
        <div class="col-lg-4 col-md-5 col-sm-12">
            <div class="card shadow-sm p-3">
                <form action="index.php?page=mhs_save" method="post">
                    <div class="mb-4">
                        <label for="#" class="form-label fs-5">NIM</label>
                        <input type="number" name="nim" class="form-control border-3 p-2" required>
                    </div>
                    <div class="mb-4">
                        <label for="#" class="form-label fs-5">Nama</label>
                        <input type="text" name="nama" class="form-control border-3 p-2" required>
                    </div>
                    <div class="mb-4">
                        <label for="#" class="form-label fs-5">Alamat</label>
                        <textarea name="alamat" class="form-control" id=""></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="#" class="form-label fs-5">Jurusan</label>
                        <select name="jurusan" class="form-control border-3 p-2">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                            <option value="Bisnis Digital">Bisnis Digital</option>
                            <option value="Pariwisata">Pariwisata</option>
                            <option value="Perencanaan Wilayah dan Kota">Perencanaan Wilayah dan Kota</option>
                            <option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100">Kirim</button>
                </form>
            </div>
        </div>

        <div class="col-lg-8 col-md-7 col-sm-12">
            <div class="d-flex mb-1">
                <div class="card fs-4 col-8 fw-bold card-header me-auto">DATA MAHASISWA</div>
                <form class="d-flex col-4" role="search" action="" method="post">
                    <input class="form-control me-1" type="text" placeholder="masukkan keyword pencarian.." aria-label="Search" autocomplete="off" name="keyword"/>
                    <button class="btn btn-outline-success fw-semibold" type="submit" name="cari">Search</button>
                </form>
            </div>
            <div class="card shadow-sm p-3">
                <div class="table-responsive table-mahasiswa">
                    <table class="table table-striped table-hover fs-5">
                        <thead class="table-dark sticky-top">
                            <tr>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php foreach ($mahasiswa as $row): ?>
                                <tr>
                                    <td><?php echo $row['nim']; ?></td>
                                    <td><?php echo $row['nama']; ?></td>
                                    <td><?php echo $row['alamat']; ?></td>
                                    <td><?php echo $row['jurusan']; ?></td>
                                    <td>
                                        <a href="index.php?page=mhs_edit&nim=<?php echo $row['nim']; ?>" class="btn btn-primary">Edit</a>
                                        <a href="index.php?page=mhs_delete&nim=<?php echo $row['nim']; ?>" class="btn btn-secondary" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>