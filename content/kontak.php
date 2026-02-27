<?php 
session_start();
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

?>

<div class="kontak container">
    <div class="row text-center mb-3">
        <div class="col">
            <h2 class="fw-bold">Kontak Kami</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-7">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
                    <input type="text" class="form-control mb-4" style="padding: 10px;" id="name" aria-describedby="name" placeholder="Siapa nama kamu?">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" class="form-control mb-4" style="padding: 10px;" id="email" aria-describedby="email" placeholder="Contoh : nama@gmail.com">
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label fw-semibold">Pesan</label>
                    <textarea class="form-control" id="pesan" rows="8" placeholder="Tulis pesan/pertanyaan kamu disini!"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Kirim</button>
            </form>
        </div>
    </div>
</div>