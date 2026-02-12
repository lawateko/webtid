<?php
require_once 'config/koneksi.php';

$sql = "SELECT * FROM mahasiswa";
$stmt = $con->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="mahasiswa-container container mt-3">
    <div class="row g-4">
        <div class="col-lg-4 col-md-5 col-sm-12">
            <div class="card shadow-sm p-3">
                <form action="index.php?page=mahasiswa_save" method="post">
                    <div class="mb-4">
                        <label for="#" class="form-label fs-5">NIM</label>
                        <input type="number" name="nim" class="form-control border-3 p-2" id="#" required>
                    </div>
                    <div class="mb-4">
                        <label for="#" class="form-label fs-5">Nama</label>
                        <input type="text" name="nama" class="form-control border-3 p-2" id="#" required>
                    </div>
                    <div class="mb-4">
                        <label for="#" class="form-label fs-5">Alamat</label>
                        <input type="text" name="alamat" class="form-control border-3 p-2" id="#" required>
                    </div>

                    <div class="mb-4">
                        <label for="#" class="form-label fs-5">Jurusan</label>
                        <select name="jurusan" id="#" class="form-control border-3 p-2">
                            <option value="teknik-informatika">Teknik Informatika</option>
                            <option value="sistem-informasi">Sistem Informasi</option>
                            <option value="desain-komunukasi-visual">Desain Komunikasi Visual</option>
                            <option value="bisnis-digital">Bisnis Digital</option>
                            <option value="pariwisata">Pariwisata</option>
                            <option value="perencanaan-wilayah-dan-kota">Perencanaan Wilayah dan Kota</option>
                            <option value="komputerisasi-akuntansi">Komputerisasi Akuntansi</option>
                            <option value="manajemen-informatika">Manajemen Informatika</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Kirim</button>
                </form>
            </div>
        </div>

        <div class="col-lg-8 col-md-7 col-sm-12">
            <div class="card shadow-sm p-3">
                <p class="fs-4 fw-bold border-bottom">DATA MAHASISWA</p>
                <div class="table-responsive">
                    <table class="table table-striped table-hover fs-5">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php foreach ($data as $row): ?>
                                <tr>
                                    <td><?php echo $row['no']; ?></td>
                                    <td><?php echo $row['nim']; ?></td>
                                    <td><?php echo $row['nama']; ?></td>
                                    <td><?php echo $row['alamat']; ?></td>
                                    <td><?php echo $row['jurusan']; ?></td>
                                    <td>
                                        <a href="" class="btn btn-success">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
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