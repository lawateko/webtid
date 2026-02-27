<?php
session_start();
require_once 'config/koneksi.php';
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$matkul = query("SELECT * FROM matakuliah");
$dosen = query("SELECT nid, nama FROM dosen ORDER BY nama ASC");
?>

<div class="matakuliah-container container mt-3">
    <div class="row g-4">
        <div class="col-lg-4 col-md-5 col-sm-12">
            <div class="card shadow-sm p-3">
                <form action="index.php?page=matakuliah_save" method="POST">
                    <div class="mb-4">
                        <label for="#" class="form-label fs-5">Kode Matakuliah</label>
                        <input type="text" name="kode_matkul" class="form-control border-3 p-2" id="#" required>
                    </div>
                    <div class="mb-4">
                        <label for="#" class="form-label fs-5">Nama Matakuliah</label>
                        <input type="text" name="nama_matkul" class="form-control border-3 p-2" id="#" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">NID</label>
                        <select name="nid" id="" class="form-control border-3 p-2">
                            <option disabled selected value>--- Pilih NID ---</option>
                            <?php foreach ($dosen as $row): ?>
                                <option value="<?php echo htmlspecialchars($row['nid']); ?>">
                                    <?php echo htmlspecialchars($row['nid']) . ' - ' . htmlspecialchars($row['nama']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100">Kirim</button>
                </form>
            </div>
        </div>

        <div class="col-lg-8 col-md-7 col-sm-12">
            <div class="d-flex mb-1">
                <div class="card fs-4 col-12 fw-bold card-header">DATA MATAKULIAH</div>
            </div>
            <div class="card shadow-sm p-3">
                <div class="table-responsive table-matakuliah">
                    <table class="table table-striped table-hover fs-5">
                        <thead class="table-dark sticky-top">
                            <tr>
                                <th scope="col">Kode Matakuliah</th>
                                <th scope="col">Nama Matakuliah</th>
                                <th scope="col">NID/Dosen</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php foreach ($matkul as $row): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($row['kode_matkul']); ?></td>
                                    <td><?php echo htmlspecialchars($row['nama_matkul']); ?></td>
                                    <td><?php echo htmlspecialchars($row['dosen']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>