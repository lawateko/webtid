<?php
$nama_user = isset($_SESSION["user_nama"]) ? $_SESSION["user_nama"] : "User";
$role = isset($_SESSION["user_role"]) ? $_SESSION["user_role"] : "";
?>

<div class="centered-jumbo lh-lg">
    <div class="jumbotron">
        <h1 class="display-4 fw-bold">Hai, Selamat datang <?= htmlspecialchars($nama_user) ?>!</h1>
        <p class="lead fw-semibold">- Semua informasi tersedia dalam satu website yang mudah diakses.</p>
        <hr class="my-4">
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="index.php?page=mahasiswa" role="button">Ayo mulai!</a>
        </p>
    </div>
</div>