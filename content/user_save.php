<?php
require_once "config/koneksi.php";

$nama_pengguna = htmlspecialchars($_POST["nama_pengguna"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);
$role = htmlspecialchars($_POST["role"]);

$password = password_hash($password, PASSWORD_DEFAULT);

if (empty($nama_pengguna) || empty($email) || empty($password) || empty($role)) {
    echo "<script>
        alert('Data tidak boleh kosong');
        window.location.href = 'index.php?page=user';
    </script>";
} else {

    $stmt = $con->prepare("SELECT email FROM user WHERE email = ?");
    $stmt->execute([$email]);

    if ($stmt->fetch()) {
        echo "<script>
            alert('Email/Username sudah terdaftar.');
            window.location.href = 'index.php?page=user';
          </script>";
        return false;
    }

    $simpan = $con->prepare("INSERT INTO user (nama_pengguna, email, password, role) VALUES (:nama_pengguna, :email, :password, :role)");
    $simpan->bindParam(':nama_pengguna', $nama_pengguna);
    $simpan->bindParam(':email', $email);
    $simpan->bindParam(':password', $password);
    $simpan->bindParam(':role', $role);
    $simpan->execute();

    echo "<script>
        alert('user/pengguna baru berhasil disimpan');
        window.location.href = 'index.php?page=user';
    </script>";
}
