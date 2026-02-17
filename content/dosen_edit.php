<?php
require_once 'config/koneksi.php';
$nid = $_GET['nid'];

$sql = $con->prepare("SELECT * FROM dosen WHERE nid = ?");
$sql->bindParam(1, $nid);
$sql->execute();

if ($sql->rowCount() == 0) {
    echo "<script>
            alert('Data tidak ditemukan');
            window.location.href = 'index.php?page=dosen';
    </script>";
} else {
    $row = $sql->fetch();
}
?>

<div style="padding-top: 50px;">
    <div class="col-md-4 mx-auto mt-5" style="margin-top: 8rem;">
        <div class="card">
            <div class="card-header fs-5 fw-bold">FORM EDIT DOSEN</div>
            <div class="card-body">
                <form action="index.php?page=dosen_update" method="POST">
                    <div class="mb-3">
                        <label class="form-label fw-semibold" for="">Nomor Induk Dosen</label>
                        <input name="nid" class="form-control" value="<?php echo $row['nid']; ?>" type="text" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold" for="">Nama</label>
                        <input name="nama" class="form-control" value="<?php echo $row['nama']; ?>" type="text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold" for="">Alamat</label>
                        <textarea name="alamat" class="form-control" id=""><?php echo $row['alamat']; ?></textarea>
                    </div>
                    <div class="mb-3 d-grid">
                        <button class="btn btn-primary" type="submit"><i class="bi bi-save-fill"></i> Update</button>
                        <a href="index.php?page=dosen" class="btn btn-danger w-100 mt-2 bi bi-box-arrow-left "> Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>