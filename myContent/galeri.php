<h2 class="galeri title">Galeri</h2>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="gambar">
    <button name="upload" type="submit" class="btn btn-primary px-4 py-2 fs-5 mt-3">Upload</button>
</form>

<?php
if (isset($_POST['upload'])) {

    $namaFile = $_FILES['gambar']['name'];
    $tipeFile = $_FILES['gambar']['type'];
    $tmpFile = $_FILES['gambar']['tmp_name'];
    $sizeFile = $_FILES['gambar']['size'];  // bytes

    # validasi -> tipe, size
    if ($tipeFile != "image/png" && $tipeFile != "image/jpg" && $tipeFile != "image/jpeg") {
        echo "Tipe file tidak support";
    } elseif ($sizeFile >= 1000000) {
        echo "File tidak boleh > 1mb";
    } else {
        move_uploaded_file($tmpFile, "img/$namaFile");
        echo "File berhasil diupload";
    }
}

?>