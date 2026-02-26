<?php
require 'config/koneksi.php';
$jurusan = query("SELECT * FROM jurusan");
$dosen = query("SELECT nid, nama FROM dosen ORDER BY nama ASC");
?>

<div class="jurusan-container container mt-3">
    <div class="row g-4">
        <div class="col-lg-4 col-md-5 col-sm-12">
            <div class="card shadow-sm p-3">
                <form action="index.php?page=jurusan_save" method="POST">
                    <div class="mb-4">
                        <label for="#" class="form-label fs-5">Kode Jurusan</label>
                        <input type="text" name="kode" class="form-control border-3 p-2" id="#" required>
                    </div>
                    <div class="mb-4">
                        <label for="#" class="form-label fs-5">Nama Jurusan</label>
                        <input type="text" name="nama" class="form-control border-3 p-2" id="#" required>
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
                <div class="card fs-4 col-12 fw-bold card-header">DATA JURUSAN</div>
            </div>
            <div class="card shadow-sm p-3">
                <div class="table-responsive table-jurusan">
                    <table class="table table-striped table-hover fs-5">
                        <thead class="table-dark sticky-top">
                            <tr>
                                <th scope="col">Kode Jurusan</th>
                                <th scope="col">Nama Jurusan</th>
                                <th scope="col">NID</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php foreach ($jurusan as $row): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($row['kode_jurusan']); ?></td>
                                    <td><?php echo htmlspecialchars($row['nama_jurusan']); ?></td>
                                    <td><?php echo htmlspecialchars($row['nid']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>