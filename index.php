<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white border border-bottom">
        <div class="container-fluid mx-4">
            <a class="navbar-brand myLogo bi bi-code-slash" href="index.php"> WEBTI3D</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto p-3 fw-medium">
                    <a href="index.php" class="nav-link">Beranda</a>
                    <a href="index.php?page=mahasiswa" class="nav-link">Mahasiswa</a>
                    <a href="index.php?page=dosen" class="nav-link">Dosen</a>
                    <a href="index.php?page=matakuliah" class="nav-link">Matakuliah</a>
                    <a href="index.php?page=jurusan" class="nav-link">Jurusan</a>
                    <a href="index.php?page=pengguna" class="nav-link">Pengguna</a>
                    <a href="index.php?page=galeri" class="nav-link">Galeri</a>
                    <a href="index.php?page=kontak" class="nav-link">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="content">
        <?php
        # $_GET -> URL

        $page = @$_GET['page'];
        if (empty($page)) {
            # index.php
            include "content/home.php";
        } else {
            # index.php?page=...
            include "content/$page.php";
        }

        ?>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>