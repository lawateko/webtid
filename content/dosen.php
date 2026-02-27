<?php
session_start();
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


require 'config/koneksi.php';
$dosen = query("SELECT * FROM dosen ORDER BY no DESC");

if (isset($_POST["cari"])) {
    $dosen = cari_dosen($_POST["keyword"]);
}

?>

<div class="dosen-container container mt-3">
    <div class="row g-4">
        <div class="col-lg-4 col-md-5 col-sm-12">
            <div class="card shadow-sm p-3">
                <form action="index.php?page=dosen_save" method="POST">
                    <div class="mb-4">
                        <label for="#" class="form-label fs-5">NID</label>
                        <input type="number" name="nid" class="form-control border-3 p-2" id="#" required>
                    </div>
                    <div class="mb-4">
                        <label for="#" class="form-label fs-5">Nama</label>
                        <input type="text" name="nama" class="form-control border-3 p-2" id="#" required>
                    </div>
                    <div class="mb-4">
                        <label for="#" class="form-label fs-5">Alamat</label>
                        <textarea name="alamat" class="form-control" id=""></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100">Kirim</button>
                </form>
            </div>
        </div>

        <div class="col-lg-8 col-md-7 col-sm-12">
            <div class="d-flex mb-1">
                <div class="card fs-4 col-8 fw-bold card-header me-auto">DATA DOSEN</div>
                <form class="d-flex col-4" role="search" action="" method="post">
                    <input class="form-control me-1" type="text" placeholder="masukkan keyword pencarian.." aria-label="Search" autocomplete="off" name="keyword" />
                    <button class="btn btn-outline-success fw-semibold" type="submit" name="cari">Search</button>
                </form>
            </div>
            <div class="card shadow-sm p-3">
                <div class="table-responsive table-dosen">
                    <table class="table table-striped table-hover fs-5">
                        <thead class="table-dark sticky-top">
                            <tr>
                                <th scope="col">NID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php foreach ($dosen as $row): ?>
                                <tr>
                                    <td><?php echo $row['nid']; ?></td>
                                    <td><?php echo $row['nama']; ?></td>
                                    <td><?php echo $row['alamat']; ?></td>
                                    <td>
                                        <a href="index.php?page=dosen_edit&nid=<?php echo $row['nid']; ?>" class="btn btn-primary">Edit</a>
                                        <a href="index.php?page=dosen_delete&nid=<?php echo $row['nid']; ?>" class="btn btn-secondary" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</a>
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