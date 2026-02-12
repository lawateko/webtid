<?php
require 'config/koneksi.php';

$sql = "SELECT * FROM dosen";
$stmt = $con->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="dosen-container container mt-3">
    <div class="row g-4">
        <div class="col-lg-4 col-md-5 col-sm-12">
            <div class="card shadow-sm p-3">
                <form action="" method="POST">
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
                        <input type="text" name="alamat" class="form-control border-3 p-2" id="#" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Kirim</button>
                </form>
            </div>
        </div>

        <div class="col-lg-8 col-md-7 col-sm-12">
            <div class="card shadow-sm p-3">
                <p class="fs-4 fw-bold border-bottom">DATA DOSEN</p>
                <div class="table-responsive">
                    <table class="table table-striped table-hover fs-5">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php foreach ($data as $row): ?>
                                <tr>
                                    <td><?php echo $row['no']; ?></td>
                                    <td><?php echo $row['nid']; ?></td>
                                    <td><?php echo $row['nama']; ?></td>
                                    <td><?php echo $row['alamat']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>